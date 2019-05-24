<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Cart;
use Auth;

class CartController extends Controller
{
    public function add($id)
    {
        $product = Product::find($id);
        $userId = Auth::user()->id;
        Cart::session($userId)->add([
            'id' => $product->id,
            'name' => $product->name_product,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => [
                'product_id' => $product->id
            ]
        ]);

        return redirect('/cart');
    }

    public function addToCheckout($id)
    {
        $product = Product::find($id);
        $userId = Auth::user()->id;
        Cart::session($userId)->add([
            'id' => $product->id,
            'name' => $product->name_product,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => [
                'product_id' => $product->id
            ]
        ]);

        return redirect('/checkout');
    }

    public function show()
    {
        $categories = Category::all();
        $userId = Auth::user()->id;
        $latest = Product::orderBy('created_at', 'desc')->limit(4)->get();
        $items = Cart::session($userId)->getContent();
        $total = Cart::session($userId)->getTotal();
        $quantity = Cart::session($userId)->getTotalQuantity();

        return view('cart', compact('items', 'categories', 'total', 'quantity', 'latest'));
    }

    public function remove($id)
    {
        $userId = Auth::user()->id;
        Cart::session($userId)->remove($id);

        return redirect('/cart');
    }
}
