<?php

namespace App\Http\Controllers;

use App\Mail\sendContributorMail;
use App\Mail\sendOrderConfirmation;
use App\Models\List_product;
use App\Models\Lists;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Mollie\Laravel\Facades\Mollie;
use stdClass;

class CheckoutController extends Controller
{
    public function checkout(Request $r, $slug) {
        $r->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $cart = Cart::session($this->getCartKey($slug));
        $total = (string)$cart->getTotal();

        //create new order
        $order = new Order();
        $order->name = $r->name;
        $order->message = $r->message;
        $order->email = $r->email;
        $order->total = $total;
        $order->status = 'pending';
        $order->save();

        $list = Lists::where('slug', $slug)->first();

        foreach ($cart->getContent() as $item) {
            $list_product = List_product::where('list_id', $list->id)
                ->where('product_id', $item->id)
                ->first();

            $list_product->order_id = $order->id;
            $list_product->save();
        }

        // webhook logics for local and online deployment
        $webhookUrl = route('webhooks.mollie');
        if(App::environment('local')) {
            $webhookUrl = "https://bc31-2a02-1811-e483-3c00-208b-d970-d66b-4fc.eu.ngrok.io/webhooks/mollie";
        }

        // log some info
        Log::alert('Before Mollie Checkout, total price is calculated');

        //create payment
        $total = number_format($total, 2);
        $payment = Mollie::api()->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => $total // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            "description" => "Bestelling op " . date('d-m-Y h:i'),
            "redirectUrl" => route('checkout.success', $slug),
            "webhookUrl" => $webhookUrl,
            "metadata" => [
                "order_id" => $order->id,
                "order_from" => $order->name,
            ],
        ]);


        $list_productsIds = List_product::select('product_id')->where('order_id', $order->id)->get()->toArray();
        $products = Product::select('products.*', 'images.alt', 'images.path', Product::raw('shops.name as shopName'))
            ->join("images", "images.product_id", "=", "products.id")
            ->join("shops", "shops.id", "=", "products.shop_id")
            ->whereIn('id', $list_productsIds);

        Mail::to($order->email)->send(new sendOrderConfirmation($order, $products, $list));

        $list_user = User::findOrFail($list->user_id);

        Mail::to($list_user->email)->send(new sendContributorMail($order, $products, $list));


        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }

    public function success($slug) {
        $list = Lists::where('slug', $slug)->first();
        $title = $list->name;

        $this->emptyCart($slug);

        return view('guests.succes-message', compact('title', 'list'));
    }

    private function getCartKey($slug) {
        return session()->get('_token') . $slug;
    }

    private function emptyCart($slug) {
        $cart = Cart::session($this->getCartKey($slug));

        foreach ($cart->getContent() as $item) {
            $cart->remove($item->id);
        }
    }
}
