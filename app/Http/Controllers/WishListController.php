<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Product;
use App\Wishlist;
use Cart;


class WishlistController extends Controller
{
    public function add($id)
    {
        $exist = Wishlist::where('product_id', '=', $id)->first();
        if (!$exist) {
            $wishlist = new Wishlist;
            $wishlist->user_id = Auth::user()->id;
            $wishlist->product_id = $id;
            $wishlist->save();
            return redirect('/wishlist');
        } else {
            return redirect('/wishlist');
        }
    }

    public function show()
    {
        $categories = Category::all();
        $userId = Auth::user()->id;
        $latest = Product::orderBy('created_at', 'desc')->limit(4)->get();
        $wishlists = Wishlist::where('user_id', Auth::user()->id)->get();
        $quantity = Cart::session($userId)->getTotalQuantity();

        return view('wishlist', compact('categories', 'wishlists', 'quantity', 'latest'));
    }

    public function destroy($id)
    {
        Wishlist::find($id)->delete();
        return redirect('/wishlist');
    }
}
