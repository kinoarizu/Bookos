@extends('layouts.admin')   
    @section('content')     
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h3 class="title-5 m-b-35">Data Products</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <select class="js-select2 select2-hidden-accessible" name="property" tabindex="-1" aria-hidden="true">
                                            <option>Category</option>
                                            @foreach ($categories as $category)
                                                <a href="/">
                                                    <option value="">{{$category->name_category}}</option>
                                                </a>
                                            @endforeach
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <div class="rs-select2--light rs-select2--sm">
                                        <select class="js-select2 select2-hidden-accessible" name="time" tabindex="-1" aria-hidden="true">
                                            <option>Brand</option>
                                            @foreach ($brands as $brand)
                                                <a href="/">
                                                    <option value="">{{$brand->name_brands}}</option>
                                                </a>
                                            @endforeach
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <button class="au-btn-filter">
                                        <i class="zmdi zmdi-filter-list"></i>filters</button>
                                </div>
                                <form class="form-header" action="/admin/products" method="POST">
                                    {{ csrf_field() }} 
                                    <input class="au-input" type="text" name="cari" placeholder="Cari Nama Product">
                                    <button class="au-btn--submit" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                                <div class="table-data__tool-right">
                                    <a href="/admin/product/add" class="au-btn au-btn-icon au-btn--green au-btn--small text-white">
                                        <i class="zmdi zmdi-plus"></i>add item</a>
                                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                        <select class="js-select2 select2-hidden-accessible" name="type" tabindex="-1" aria-hidden="true">
                                            <option selected="selected">Export</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive m-b-40">
                                <table class="table table-borderless table-data3">
                                    <thead>
                                        <tr>
                                            <th>Nama Produk</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Rating</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                        <tr>
                                            <td>{{$product->name_product}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->stock}}</td>
                                            <td>{{$product->rating}}</td>
                                            <td class="pl-0 pr-0 text-center">
                                                <a class="btn btn-primary btn-sm" href="/admin/product/edit/{{$product->id}}"><i class="fas fa-edit"></i></a>
                                                <a class="btn btn-success btn-sm" href="/admin/product/{{$product->id}}"><i class="fas fa-tasks"></i></a>
                                                <a class="btn btn-danger disabled btn-sm" href="#" role="button"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr> 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection