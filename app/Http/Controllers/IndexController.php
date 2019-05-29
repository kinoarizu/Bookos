<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Brand;
use App\Order;
use App\OrderedProduct;
use App\Transaction;
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
        $quantity = Cart::session($userId)->getTotalQuantity();
        $products = Product::paginate(8);

        return view('home', compact('categories', 'sliders', 'latest', 'quantity', 'products'));
    }

    public function profile(Request $request)
    {
        $userId = Auth::user()->id;
        $categories = Category::all();
        $quantity = Cart::session($userId)->getTotalQuantity();
        $orders = Order::where('user_id', $userId)->get();
        return view('profile', compact('categories', 'quantity', 'orders'));
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

    public function search(Request $request)
    {
        $userId = Auth::user()->id;
        $categories = Category::all();
        $quantity = Cart::session($userId)->getTotalQuantity();
        $products = Product::where('name_product', 'LIKE', '%' . $request->cari . '%')->get();

        return view('search', compact('categories', 'products', 'quantity'));
    }

    public function order(Request $request)
    {
        $userId = Auth::user()->id;

        $this->validate($request, [
            'address' => 'required|max:255',
            'shipment' => 'required',
            'payment' => 'required',
        ]);

        $transaction = new Transaction;
        $transaction->user_id = Auth::user()->id;
        $transaction->quantity = Cart::session($userId)->getTotalQuantity();
        $transaction->total_price = Cart::session($userId)->getTotal();
        $transaction->save();

        $order = new Order;
        $order->user_id = Auth::user()->id;
        $order->full_address = $request->address;
        $order->shipment = $request->shipment;
        $order->payment = $request->payment;
        $order->total_cost = Cart::session($userId)->getTotal();
        $order->status = 'Menunggu Bukti';
        $order->save();

        $items = Cart::session($userId)->getContent();
        $request->request->add(['order_id' => $order->id]);

        foreach ($items as $item) {
            $order->orderedproduct()->saveMany([
                new OrderedProduct([
                    'order_id' => $request->order_id,
                    'product_id' => $item->attributes->product_id
                ])
            ]);
            Product::where('id', $item->attributes->product_id)->decrement('stock', 1);
        }

        Cart::clearCartConditions();
        Cart::clear();

        return redirect('/profile');
    }
}
