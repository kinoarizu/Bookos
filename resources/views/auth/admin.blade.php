@extends('layouts.auth')
    @section('content')
        <!--========= Section Form ==========-->
        <section>
            <div class="container pt-4">
                <div class="row mt-5">
                    <div class="col-md-12 text-center">
                        <a href="/" class="site-logo">
                            <img src="{{asset('img/logo.png')}}" class="mt-4 mb-4" alt="">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 mt-3 mx-auto d-block">
                        @if(session('gagal'))
                            <div class="alert alert-danger text-center" role="alert">
                                {{session('gagal')}}
                            </div>
                        @endif
                        <form action="/admin/auth" method="POST" class="checkout-form">    
                            <div class="cf-reg text-center">Login Admin Divisima</div>
                            <div class="row address-inputs">
                                <div class="col-md-12">
                                    {{csrf_field()}}
                                    @if($errors->has('email'))
                                        <small class="ml-3 text-danger">{{$errors->first('email')}}</small>
                                    @endif
                                    <input name="email" class="{{$errors->has('email') ? ' border border-danger' : ''}}" type="text" placeholder="Email / Username" value="{{old('email')}}">
                                    @if($errors->has('password'))
                                        <small class="ml-3 text-danger">{{$errors->first('password')}}</small>
                                    @endif
                                    <input name="password" class="{{$errors->has('password') ? ' border border-danger' : ''}}" type="password" placeholder="Password" value="{{old('password')}}">
                                </div>
                                <button type="submit" class="site-btn submit-order-btn mt-2">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    @endsection