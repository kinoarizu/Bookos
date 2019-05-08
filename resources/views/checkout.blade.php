@extends('layouts.app') @section('title', 'Checkout')
    @section('content')
        <!-- Page info -->
        <div class="page-top-info">
            <div class="container">
                <h4>Checkout Your Cart</h4>
                <div class="site-pagination">
                    <a href="">Home</a> /
                    <a href="">Checkout</a>
                </div>
            </div>
        </div>
        <!-- Page info end -->


        <!-- checkout section  -->
        <section class="checkout-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 order-2 order-lg-1">
                        <form class="checkout-form">
                            <div class="cf-title">Billing Address</div>
                            <div class="row address-inputs">
                                <div class="col-md-12">
                                    <input type="text" placeholder="Address">
                                    <input type="text" placeholder="Address line 2">
                                    <input type="text" placeholder="Country">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Zip code">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Phone no.">
                                </div>
                            </div>
                            <div class="cf-title">Payment</div>
                            <ul class="payment-list">
                                <li>Paypal<a href="#"><img src="{{asset('img/paypal.png')}}" alt=""></a></li>
                                <li>Credit / Debit card<a href="#"><img src="{{asset('img/mastercart.png')}}" alt=""></a></li>
                                <li>Pay when you get the package</li>
                            </ul>
                            <button class="site-btn submit-order-btn">Place Order</button>
                        </form>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2">
                        <div class="checkout-cart">
                            <h3>Your Cart</h3>
                            <ul class="product-list">
                                @foreach ($items as $item)
                                    <li>
                                        <div class="pl-thumb"><img src="{{asset('img/cart/1.jpg')}}" alt=""></div>
                                        <h6>{{$item->name}}</h6>
                                        <p>Rp. {{$item->price}} x {{$item->quantity}}</p>
                                    </li>
                                @endforeach
                            </ul>
                            <ul class="price-list">
                                <li>Total<span class="w-50 text-right">Rp. {{$total}}</span></li>
                                <li>Shipping<span>Free</span></li>
                                <li class="total">Total<span class="w-50 text-right">Rp. {{$total}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- checkout section end -->
    @endsection