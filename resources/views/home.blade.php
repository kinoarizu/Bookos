@extends('layouts.app') @section('title', 'Eccomerce')
    @section('content')
        <!-- Hero section -->
        <section class="hero-section">
                <div class="hero-slider owl-carousel">
                    @foreach($sliders as $slider)
                    <div class="hs-item set-bg" data-setbg="{{asset('img/bg-2.jpg')}}">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-7 text-white">
                                    <span>New Arrivals</span>
                                    <h2>{{$slider->name_product}}</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    <a href="#" class="site-btn sb-line">DISCOVER</a>
                                    <a href="/cart/add/{{$slider->id}}" class="site-btn sb-white">ADD TO CART</a>
                                </div>
                            </div>
                            {{-- <div class="offer-card text-white">
                                <span>from</span>
                                <h2>$29</h2>
                                <p>SHOP NOW</p>
                            </div> --}}
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="container">
                    <div class="slide-num-holder" id="snh-1"></div>
                </div>
            </section>
            <!-- Hero section end -->


            <!-- Features section -->
            <section class="features-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 p-0 feature">
                            <div class="feature-inner">
                                <div class="feature-icon">
                                    <img src="{{asset('img/icons/1.png')}}" alt="#">
                                </div>
                                <h2>Fast Secure Payments</h2>
                            </div>
                        </div>
                        <div class="col-md-4 p-0 feature">
                            <div class="feature-inner">
                                <div class="feature-icon">
                                    <img src="{{asset('img/icons/2.png')}}" alt="#">
                                </div>
                                <h2>Premium Books</h2>
                            </div>
                        </div>
                        <div class="col-md-4 p-0 feature">
                            <div class="feature-inner">
                                <div class="feature-icon">
                                    <img src="{{asset('img/icons/3.png')}}" alt="#">
                                </div>
                                <h2>Free & fast Delivery</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Features section end -->


            <!-- letest product section -->
            <section class="top-letest-product-section">
                <div class="container">
                    <div class="section-title">
                        <h2>LATEST BOOKS</h2>
                    </div>
                    <div class="product-slider owl-carousel">
                        @foreach ($latest as $product)
                            <div class="product-item">
                                <div class="pi-pic">
                                    <div class="tag-new">New</div>
                                    <a href="/product/{{$product->id}}">
                                        @php $pictures = json_decode($product->picture) @endphp
                                        <img src="{{Voyager::image($pictures[0])}}" alt="">
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
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- letest product section end -->


            <!-- Product filter section -->
            <section class="product-filter-section">
                <div class="container">
                    <div class="section-title">
                        <h2>BROWSE TOP SELLING PRODUCTS</h2>
                    </div>
                    <ul class="product-filter-menu mx-auto pl-5">
                        @foreach ($categories as $category)
                            <li><a href="/category/{{$category->name_category}}" class="text-uppercase">{{$category->name_category}}</a></li>
                        @endforeach
                    </ul>
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-lg-3 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <a href="/product/{{$product->id}}">
                                            @php $pictures = json_decode($product->picture) @endphp
                                            <img src="{{Voyager::image($pictures[0])}}" alt="">
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
                    <div class="d-flex justify-content-center pt-5">
                        {{ $products->links() }}
                    </div>
                </div>
            </section>
            <!-- Product filter section end -->


            <!-- Banner section -->
            {{-- <section class="banner-section">
                <div class="container">
                    <div class="banner set-bg" data-setbg="{{asset('img/banner-bg.jpg')}}">
                        <div class="tag-new">NEW</div>
                        <span>New Arrivals</span>
                        <h2>{{$banner->name_product}}</h2>
                        <a href="/product/{{$banner->id}}" class="site-btn">SHOP NOW</a>
                    </div>
                </div>
            </section> --}}
            <!-- Banner section end  -->
        @endsection