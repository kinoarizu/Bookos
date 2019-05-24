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
                        <form action="/order/process" method="POST" class="checkout-form">
                            {{ csrf_field() }}
                            <div class="cf-title mb-4">Billing Address</div>
                            <div class="row address-inputs mb-3">
                                <div class="col-md-12">
                                    <textarea name="address" id="address" placeholder="Full Address" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="cf-title mb-4">Shipment</div>
                            <ul class="payment-list">
                                <li>
                                    <input type="radio" name="shipment" value="JNE" class="ml-4 mr-3">
                                    JNE
                                </li>
                                <li>
                                    <input type="radio" name="shipment" value="POS" class="ml-4 mr-3">
                                    POS
                                </li>
                                <li>
                                    <input type="radio" name="shipment" value="TIKI" class="ml-4 mr-3">
                                    TIKI
                                </li>
                            </ul>
                            <div class="cf-title mb-4">Payment</div>
                            <ul class="payment-list">
                                <li>
                                    <input type="radio" name="payment" value="Bank Mandiri" class="ml-4 mr-3">
                                    Bank Mandiri
                                </li>
                                <li>
                                    <input type="radio" name="payment" value="BRI" class="ml-4 mr-3">
                                    BRI
                                </li>
                                <li>
                                    <input type="radio" name="payment" value="BNI" class="ml-4 mr-3">
                                    BNI
                                </li>
                                <li>
                                    <input type="radio" name="payment" value="BCA" class="ml-4 mr-3">
                                    BCA
                                </li>
                            </ul>
                            {{-- <div class="cf-title mb-4">Check Ship Cost</div>
                            <div class="row">
                                <div class="col-md-4">
                                    <select name="provinsi" id="provinsi">
                                        <option value="">Pilih Provinsi</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select name="kota" id="kota">
                                        <option value="">Pilih Kota</option>
                                    </select>
                                </div>
                                <div class="col-md-4 pl-5">
                                    <small>Ship Cost</small>
                                    <h4>Rp. 20000</h4>
                                </div>
                            </div> --}}
                            <button class="site-btn submit-order-btn mt-5">Place Order</button>
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