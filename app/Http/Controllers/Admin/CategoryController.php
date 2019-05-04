<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $categories = Category::where('name_category', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $categories = Category::all();
        }

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:20',
            'deskripsi' => 'required|min:10'
        ]);

        $category = new Category;
        $category->name_category = $request->name;
        $category->description = $request->deskripsi;
        $category->save();

        return redirect('/admin/categories')->with('sukses', 'Berhasil Menambahkan Kategori');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:20',
            'deskripsi' => 'required|min:10'
        ]);

        $category = Category::find($id);
        $category->name_category = $request->name;
        $category->description = $request->deskripsi;
        $category->save();

        return redirect('/admin/categories')->with('sukses', 'Berhasil Mengubah Kategori');
    }
}
