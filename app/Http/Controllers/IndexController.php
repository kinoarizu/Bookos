<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Brand;
use Cart;
use Auth;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $userId = Auth::user()->id;
        $categories = Category::all();
        $latest = Product::orderBy('created_at', 'desc')->limit(8)->get();
        $sliders = Product::where('category_id', 13)->get();
        $banner = Product::latest('created_at')->first();
        $quantity = Cart::session($userId)->getTotalQuantity();

        return view('home', compact('categories', 'sliders', 'latest', 'banner', 'quantity'));
    }

    public function category($name)
    {
        $userId = Auth::user()->id;
        $categories = Category::all();
        $category = Category::where('name_category', $name)->first();
        $products = Product::where('category_id', $category->id)->get();
        $brands = Brand::where('category_id', $category->id)->get();
        $quantity = Cart::session($userId)->getTotalQuantity();

        return view('category', compact('categories', 'products', 'brands', 'quantity'));
    }

    public function product($id)
    {
        $userId = Auth::user()->id;
        $categories = Category::all();
        $products = Product::all();
        $product = Product::find($id);
        $category = Category::find($product->category_id);
        $brand = Brand::find($product->brand_id);
        $pictures = Product::find($id)->productpicture;
        $quantity = Cart::session($userId)->getTotalQuantity();

        return view('product', compact('categories', 'products', 'product', 'category', 'brand', 'pictures', 'quantity'));
    }

    public function checkout()
    {
        $categories = Category::all();
        $userId = Auth::user()->id;
        $items = Cart::session($userId)->getContent();
        $quantity = Cart::session($userId)->getTotalQuantity();
        $total = Cart::session($userId)->getTotal();
        return view('checkout', compact('categories', 'quantity', 'items', 'total'));
    }
}
