<?php

namespace App\Http\Controllers;

use App\Models\Lists;
use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class CartController extends Controller
{
    public function add(Request $r) {
        $r->validate([
            'product' => 'required|exists:products,id',
            'list' => 'required|exists:lists,slug',
        ]);


        $product = Product::findOrFail($r->product);

        Cart::session($this->getCartKey($r->slug))->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => (float)str_replace(',', '.', str_replace(' ', '',$product->price)),
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        return redirect()->back()->with('status', __('Successfully added to cart'));
    }

    public function show($slug) {
        $list = Lists::where('slug', $slug)->first();
        $title = $list->name;
        $cart = Cart::session($this->getCartKey($slug));
        $total = $cart->getTotal();
        $products = [];

        foreach ($cart->getContent() as $item) {
            array_push(
                $products,
                Product::select('products.*', 'images.alt', 'images.path', Product::raw('shops.name as shopName'))
                ->join("images", "images.product_id", "=", "products.id")
                ->join("shops", "shops.id", "=", "products.shop_id")
                ->where('products.id', $item->id)
                ->orderBy('name', 'ASC')
                ->first()
            );
        }

        return view('guests.shoppingcart', compact('title', 'list', 'products', 'total'));
    }

    public function delete(Request $r) {
        $r->validate([
            'product' => 'required|exists:products,id',
            'list' => 'required|exists:lists,slug',
        ]);

        Cart::session($this->getCartKey($r->list))->remove($r->product);
        return redirect()->back();
    }

    private function getCartKey($slug) {
        return session()->get('_token') . $slug;
    }
}
