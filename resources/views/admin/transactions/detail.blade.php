@extends('layouts.admin')
    @section('content')
    <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h3 class="title-5 m-b-35">Data Transaction</h3>
                            <h1>{{$product->name_product}}</h1>
                            <small>{{$category->name_category}}</small><br>
                            <small>{{$brand->name_brands}}</small>
                            <h2 class="mt-4">Rp {{$product->price}}</h2>
                            <h2 class="mt-5">Deskripsi</h2>
                            <p class="mt-3">{{$product->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection