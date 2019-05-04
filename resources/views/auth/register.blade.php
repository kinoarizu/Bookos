@extends('layouts.auth')
    @section('content')
        <!--========= Header Logo ==========-->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="/" class="site-logo">
                            <img src="img/logo.png" class="mt-4 mb-4" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <!--========= Section Form ==========-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 mr-3 pt-4">
                        <img src="{{asset('img/cart.svg')}}" class="mt-5" alt="">
                    </div>
                    <div class="col-md-1">
                        
                    </div>
                    <div class="col-md-5 mt-3 ml-5">
                        <form action="{{ route('register') }}" method="POST" class="checkout-form">    
                            <div class="cf-reg">Create Account Divisima</div>
                            <div class="row address-inputs">
                                <div class="col-md-12">
                                    {{csrf_field()}}
                                    @if($errors->has('name'))
                                        <small class="ml-3 text-danger">{{$errors->first('name')}}</small>
                                    @endif
                                    <input type="text" class="{{$errors->has('name') ? ' border border-danger' : ''}}" name="name" placeholder="Full Name" value="{{old('name')}}">
                                    @if($errors->has('phone'))
                                        <small class="ml-3 text-danger">{{$errors->first('phone')}}</small>
                                    @endif
                                    <input type="text" class="{{$errors->has('phone') ? ' border border-danger' : ''}}" name="phone" placeholder="Phone" value="{{old('phone')}}">
                                    @if($errors->has('email'))
                                        <small class="ml-3 text-danger">{{$errors->first('email')}}</small>
                                    @endif
                                    <input type="text" class="{{$errors->has('email') ? ' border border-danger' : ''}}" name="email" placeholder="Email" value="{{old('email')}}">
                                    @if($errors->has('password'))
                                        <small class="ml-3 text-danger">{{$errors->first('password')}}</small>
                                    @endif
                                    <input type="password" class="{{$errors->has('password') ? ' border border-danger' : ''}}" name="password" placeholder="Password" value="{{old('password')}}">
                                    @if($errors->has('password_confirmation'))
                                        <small class="ml-3 text-danger">{{$errors->first('password_confirmation')}}</small>
                                    @endif
                                    <input type="password" class="{{$errors->has('password_confirmation') ? ' border border-danger' : ''}}" name="password_confirmation" placeholder="Password Confirmation" value="{{old('password_confirmation')}}">
                                </div>
                                <button type="submit" class="site-btn submit-order-btn mt-2">Create Account</button>
                                <a href="/login" class="text-center mx-auto d-block mt-2">Have An Account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    @endsection