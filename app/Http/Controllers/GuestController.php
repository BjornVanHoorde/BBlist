<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Guest_list;
use App\Models\List_product;
use App\Models\Lists;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use stdClass;

class GuestController extends Controller
{
    public function loginShow($slug) {
        if($this->checkIfAuthorized($slug)) return redirect()->route('guests.list', $slug);

        $list = Lists::where('slug', $slug)->first();

        return view('guests.list-login', compact('list'));
    }

    public function login(Request $r, $slug) {
        $list = Lists::where('slug', $slug)->first();

        if (Hash::check($r->password,$list->password)) {
            $this->makeGuestKey($list->id);
            return redirect()->route('guests.list', $list->slug);
        }

        return redirect()->back()->withErrors(__('The password is incorrect.'));
    }

    public function list($slug) {
        if(!$this->checkIfAuthorized($slug)) return redirect()->route('list.login', $slug);

        $list = Lists::where('slug', $slug)->first();
        $title = $list->name;
        $products = Product::select('products.*', 'images.alt', 'images.path', 'list_products.order_id', Product::raw('shops.name as shopName'), 'orders.message', Product::raw('orders.name as contrName'))
        ->join("images", "images.product_id", "=", "products.id")
        ->join("shops", "shops.id", "=", "products.shop_id")
        ->join("list_products", "list_products.product_id", "=", "products.id")
        ->join("orders", "orders.id", "=", "list_products.order_id", 'left outer')
        ->where('list_id', $list->id)
        ->orderBy('products.name', 'ASC')
        ->get();

        $amounts = $this->getAmounts($products);

        return view('guests.list', compact('title', 'list', 'products', 'amounts'));
    }

    public function product($slug, $productId) {
        if(!$this->checkIfAuthorized($slug)) return redirect()->route('list.login', $slug);

        $list = Lists::where('slug', $slug)->first();
        $title = $list->name;
        $product = Product::select('products.*', 'images.alt', 'images.path', 'list_products.order_id', Product::raw('shops.name as shopName'), 'orders.message', Product::raw('orders.name as contrName'))
        ->join("images", "images.product_id", "=", "products.id")
        ->join("shops", "shops.id", "=", "products.shop_id")
        ->join("list_products", "list_products.product_id", "=", "products.id")
        ->join("orders", "orders.id", "=", "list_products.order_id", 'left outer')
        ->where('list_id', $list->id)
        ->where('products.id', $productId)
        ->first();

        return view('guests.productDetail_list', compact('title', 'list', 'product'));
    }

    public function message($slug) {
        if(!$this->checkIfAuthorized($slug)) return redirect()->route('list.login', $slug);

        $list = Lists::where('slug', $slug)->first();
        $title = $list->name;
        $total = Cart::session($this->getCartKey($slug))->getTotal();

        return view('guests.message', compact('title', 'list', 'total'));
    }

    private function makeGuestKey($listId) {
        $key = session()->get('_token');
        $guest = Guest::where('guest_key', $key)->first();

        if(!$guest) {
            $guest = $this->makeGuest();
        }

        $listGuest = Guest_list::where('guest_id', $guest->id)
            ->where('list_id', $listId)
            ->first();

        if($listGuest) {
            $listGuest->expires_at = date(Carbon::now()->addHours(2));
            $listGuest->save();
        } else {
            $listGuestEntity = new Guest_list();
            $listGuestEntity->guest_id = $guest->id;
            $listGuestEntity->list_id = $listId;
            $listGuestEntity->expires_at = date(Carbon::now()->addHours(2));
            $listGuestEntity->save();
        }
    }

    private function makeGuest() {
        $key = session()->get('_token');

        $guestEntity = new Guest();
        $guestEntity->guest_key = $key;
        $guestEntity->save();
        return $guestEntity;
    }

    private function checkIfAuthorized($slug) {
        $key = session()->get('_token');
        $guest = Guest::where('guest_key', $key)->first();
        $list = Lists::where('slug', $slug)->first();

        $listGuest = null;

        if ($guest) {
            $listGuest = Guest_list::where('guest_id', $guest->id)
                ->where('list_id', $list->id)
                ->where('expires_at', '>=', now())
                ->first();
        }


        if ($listGuest) return true;
        return false;
    }

    private function getAmounts($products) {
        $totalAmount = count($products);
        $boughtAmount = 0;
        $totalCost = 0.00;
        $boughtCost = 0.00;

        foreach ($products as $product) {
            $totalCost = (float)$totalCost + (float)str_replace(',', '.', str_replace('??', '',$product->price));

            if ($product->order_id !== null) {
                $boughtCost = (float)$boughtCost + (float)str_replace(',', '.', str_replace('??', '',$product->price));
                $boughtAmount = $boughtAmount + 1;
            }
        }

        $amounts = new stdClass();
        $amounts->totalAmount = $totalAmount;
        $amounts->boughtAmount = $boughtAmount;
        $amounts->totalCost = $totalCost;
        $amounts->boughtCost = $boughtCost;

        return $amounts;
    }

    private function getCartKey($slug) {
        return session()->get('_token') . $slug;
    }
}
