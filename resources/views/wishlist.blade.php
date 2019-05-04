@extends('layouts.app') 
    @section('content')       
        <!-- Page info -->
        <div class="page-top-info">
            <div class="container">
                <h4>Your cart</h4>
                <div class="site-pagination">
                    <a href="">Home</a> /
                    <a href="">Your Wishlist</a>
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
                            <h3>Your Wishlist</h3>
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
                                                <img src="{{asset('img/cart/1.jpg')}}" alt="">
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
                                <h6>Total <span>Rp. {{$total}}</span></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 card-right">
                        <form class="promo-code-form">
                            <input type="text" placeholder="Enter promo code">
                            <button>Submit</button>
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
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-item">
                            <div class="pi-pic">
                                <div class="tag-new">New</div>
                                <img src="{{asset('img/product/2.jpg')}}" alt="">
                                <div class="pi-links">
                                    <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                    <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                </div>
                            </div>
                            <div class="pi-text">
                                <h6>$35,00</h6>
                                <p>Black and White Stripes Dress</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{asset('img/product/5.jpg')}}" alt="">
                                <div class="pi-links">
                                    <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                    <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                </div>
                            </div>
                            <div class="pi-text">
                                <h6>$35,00</h6>
                                <p>Flamboyant Pink Top </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{asset('img/product/9.jpg')}}" alt="">
                                <div class="pi-links">
                                    <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                    <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                </div>
                            </div>
                            <div class="pi-text">
                                <h6>$35,00</h6>
                                <p>Flamboyant Pink Top </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{asset('img/product/1.jpg')}}" alt="">
                                <div class="pi-links">
                                    <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                    <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                </div>
                            </div>
                            <div class="pi-text">
                                <h6>$35,00</h6>
                                <p>Flamboyant Pink Top </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related product section end -->
    @endsection