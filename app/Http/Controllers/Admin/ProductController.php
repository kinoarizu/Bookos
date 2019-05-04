<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Brand;
use App\ProductPicture;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $products = Product::where('name_product', 'LIKE', '%' . $request->cari . '%')->get();
            $categories = Category::all();
            $brands = Brand::all();
        } else {
            $products = Product::paginate(20);
            $categories = Category::all();
            $brands = Brand::all();
        }
        return view('admin.products.index', compact('products', 'categories', 'brands'));
    }

    public function detail($id)
    {
        $product = Product::find($id);
        $category = Category::find($product->category_id);
        $brand = Brand::find($product->brand_id);
        $pictures = Product::find($id)->productpicture;
        return view('admin.products.detail', compact('product', 'category', 'brand', 'pictures'));
    }

    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.products.tambah', compact('categories', 'brands'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'category' => 'required',
            'brand' => 'required',
            'harga' => 'required|integer|min:2',
            'stok' => 'required|integer',
            'deskripsi' => 'required|min:10',
            'gambar' => 'mimes:jpg,png,jpeg'
        ]);

        $product = new Product;
        $product->name_product = $request->name;
        $product->category_id = $request->category;
        $product->brand_id = $request->brand;
        $product->price = $request->harga;
        $product->stock = $request->stok;
        $product->description = $request->deskripsi;
        $product->save();

        $request->request->add(['product_id' => $product->id]);
        $picture = ProductPicture::create(['product_id' => $request->product_id]);
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('uploads/', $request->file('gambar')->getClientOriginalName());
            $picture->picture = $request->file('gambar')->getClientOriginalName();
            $picture->save();
        }

        return redirect('/admin/products')->with('sukses', 'Berhasil Menambahkan Produk');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $category = Category::find($product->category_id);
        $brand = Brand::find($product->brand_id);
        $categories = Category::all();
        $brands = Brand::all();

        return view('admin.products.edit', compact('product', 'category', 'brand', 'categories', 'brands'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'category' => 'required',
            'brand' => 'required',
            'harga' => 'required|integer|min:2',
            'stok' => 'required|integer',
            'deskripsi' => 'required|min:10',
        ]);

        $product = Product::find($id);
        $product->name_product = $request->name;
        $product->category_id = $request->category;
        $product->brand_id = $request->brand;
        $product->price = $request->harga;
        $product->stock = $request->stok;
        $product->description = $request->deskripsi;
        $product->save();

        return redirect('/admin/products')->with('sukses', 'Berhasil Mengubah Produk');
    }
}
