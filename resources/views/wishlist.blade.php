@extends('layouts.app') @section('title', 'Wishlist')
    @section('content')       
        <!-- Page info -->
        <div class="page-top-info">
            <div class="container">
                <h4>Your Wishlist</h4>
                <div class="site-pagination">
                    <a href="">Home</a> /
                    <a href="">Wishlist</a>
                </div>
            </div>
        </div>
        <!-- Page info end -->


        <!-- cart section end -->
        <section class="cart-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cart-table">
                            <h3>Your Wishlist</h3>
                            <div class="cart-table-warp">
                                <table>
                                <thead>
                                    <tr>
                                        <th class="product-th">Book</th>
                                        <th class="size-th">Status</th>
                                        <th class="size-th">Price</th>
                                        <th class="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($wishlists as $wishlist)
                                        <tr>
                                            <td class="product-col">
                                                @php $pictures = json_decode($wishlist->product->picture) @endphp
                                                <img src="{{Voyager::image($pictures[0])}}" alt="">
                                                <div class="pc-title">
                                                    <h4>{{$wishlist->product->name_product}}</h4>
                                                    <p>{{$wishlist->product->price}}</p>
                                                </div>
                                            </td>
                                            <td class="quy-col">
                                                <div class="quantity">
                                                    <span>Not In Carted</span>
                                                </div>
                                            </td>
                                            <td class="size-col"><h4>Rp. {{$wishlist->product->price}}</h4></td>
                                            <td class="total-col">
                                                <a href="/cart/add/{{$wishlist->product_id}}" class="btn btn-sm btn-primary">Add To Cart</a>
                                                <a href="/wishlist/destroy/{{$wishlist->id}}" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                            <div class="total-cost">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cart section end -->

        <!-- Related product section -->
        <section class="related-product-section">
            <div class="container">
                <div class="section-title text-uppercase">
                    <h2>Continue Shopping</h2>
                </div>
                <div class="row">
                    @foreach ($latest as $product)
                        <div class="col-lg-3 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <div class="tag-new">New</div>
                                    <a href="">
                                        @php $pictures = json_decode($product->picture) @endphp
                                        <img src="{{Voyager::image($pictures[0])}}" alt=""> 
                                    </a>
                                    <div class="pi-links">
                                        <a href="/cart/add/{{$product->id}}" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                        <a href="/wishlist/add/{{$product->id}}" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                    </div>
                                </div>
                                <div class="pi-text">
                                    <h6>Rp. {{$product->price}}</h6>
                                    <p>{{$product->name_product}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Related product section end -->
    @endsection