@extends('layouts.app') @section('title', 'Cart')
    @section('content')       
        <!-- Page info -->
        <div class="page-top-info">
            <div class="container">
                <h4>Your cart</h4>
                <div class="site-pagination">
                    <a href="">Home</a> /
                    <a href="">Your cart</a>
                </div>
            </div>
        </div>
        <!-- Page info end -->


        <!-- cart section end -->
        <section class="cart-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-table">
                            <h3>Your Cart</h3>
                            <div class="cart-table-warp">
                                <table>
                                <thead>
                                    <tr>
                                        <th class="product-th">Product</th>
                                        <th class="quy-th">Quantity</th>
                                        <th class="size-th">Status</th>
                                        <th class="total-th">Price</th>
                                        <th class="total-th"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td class="product-col">
                                                @php $pictures = json_decode($item->attributes['picture']) @endphp
                                                <img src="{{Voyager::image($pictures[0])}}" alt="">
                                                <div class="pc-title">
                                                    <h4>{{$item->name}}</h4>
                                                    <p>{{$item->price}}</p>
                                                </div>
                                            </td>
                                            <td class="quy-col">
                                                <div class="quantity">
                                                    <span>{{$item->quantity}}</span>
                                                </div>
                                            </td>
                                            <td class="size-col"><h4>In Cart</h4></td>
                                            <td class="total-col"><h4>{{$item->price}}</h4></td>
                                            <td class="total-col">
                                                <a href="/cart/remove/{{$item->id}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                            <div class="total-cost">
                                @php
                                    $discount = Cart::getCondition('discount');
                                @endphp
                                <h6>
                                    @if($discount) 
                                        <span class="mr-3">Discount {{$discount->getValue()}}</span> 
                                    @endif 
                                    Total <span>Rp. {{$total}}</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 card-right">
                        <form action="/discount/check" method="POST" class="promo-code-form">
                            {{csrf_field()}}
                            <input type="text" name="code" placeholder="Enter promo code">
                            <button type="submit">Submit</button>
                        </form>
                        <a href="/checkout" class="site-btn">Proceed to checkout</a>
                        <a href="/" class="site-btn sb-dark">Continue shopping</a>
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