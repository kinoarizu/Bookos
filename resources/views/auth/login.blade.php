@extends('layouts.auth')
    @section('content')
        <!--========= Section Form ==========-->
        <section>
            <div class="container pt-3">
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
                        @if(session('verifikasi'))
                            <div class="alert alert-primary text-center" role="alert">
                                {{session('verifikasi')}}
                            </div>
                        @endif
                        <form action="{{ route('login') }}" method="POST" class="checkout-form">    
                            <div class="cf-reg text-center">Login User Divisima</div>
                            <div class="row address-inputs mb-4">
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
                                <a href="/register" class="text-center mx-auto d-block mt-2">Create New Account</a>
                                <a href="{{ route('password.request') }}" class="text-center mx-auto d-block mt-2">Forgot Password</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 mx-auto d-block">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ url('/auth/facebook') }}" class="btn btn-primary btn-block"><i class="fa fa-facebook pr-1"></i> Facebook</a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ url('/auth/google') }}" class="btn btn-danger btn-block"><i class="fa fa-google pr-1"></i> Google</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection