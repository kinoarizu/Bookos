<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brand;
use App\Category;

class BrandController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $brands = Brand::where('name_brands', 'LIKE', '%' . $request->cari . '%')->get();
            $categories = Category::all();
        } else {
            $brands = Brand::all();
            $categories = Category::all();
        }
        return view('admin.brands.index', compact('brands', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.brands.tambah', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'category' => 'required',
            'country' => 'required|min:1|max:20'
        ]);

        $brand = new Brand;
        $brand->name_brands = $request->name;
        $brand->category_id = $request->category;
        $brand->country = $request->country;
        $brand->save();

        return redirect('/admin/brands')->with('sukses', 'Berhasil Menambahkan Brand');
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        $category = Category::find($brand->category_id);
        $categories = Category::all();

        return view('admin.brands.edit', compact('brand', 'category', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'category' => 'required',
            'country' => 'required|min:1|max:20'
        ]);

        $brand = Brand::find($id);
        $brand->name_brands = $request->name;
        $brand->category_id = $request->category;
        $brand->country = $request->country;
        $brand->save();

        return redirect('/admin/brands')->with('sukses', 'Berhasil Mengubah Brand');
    }
}
