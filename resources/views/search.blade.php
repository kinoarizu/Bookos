@extends('layouts.app') @section('title', 'Result')
    @section('content')
        <section class="product-filter-section">
            <div class="container">
                <div class="section-title mt-5">
                    <h2>RESULT PRODUCT SEARCH</h2>
                </div>
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-lg-3 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <a href="/product/{{$product->id}}">
                                        <img src="{{asset('img/product/product.png')}}" alt="">
                                    </a>
                                    <div class="pi-links">
                                        <a href="/cart/add/{{$product->id}}" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                        <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                    </div>
                                </div>
                                <div class="pi-text">
                                    <h6>Rp.{{$product->price}}</h6>
                                    <p>{{$product->name_product}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endsection