<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Cart;

class WishListController extends Controller
{
    public function add($id)
    {
        $product = Product::find($id);
        $userId = Auth::user()->id;
        Cart::session($userId)->add([
            'id' => $product->id,
            'name' => $product->name_product
        ]);

        return redirect('/cart');
    }

    public function show()
    {
        $categories = Category::all();
        $userId = Auth::user()->id;
        $latest = Product::orderBy('created_at', 'desc')->limit(4)->get();
        $items = Cart::session($userId)->getContent();

        return view('cart', compact('items', 'categories', 'latest'));
    }

    public function remove($id)
    {
        $userId = Auth::user()->id;
        Cart::session($userId)->remove($id);

        return redirect('/cart');
    }
}
