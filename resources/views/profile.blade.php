@extends('layouts.app') @section('title', 'Profile')
    @section('content')
        <section>
            <div class="container">
                <div class="row mt-5 ml-4 mb-5">
                    <div class="col-md-4">
                        <img src="{{asset('img/account.png')}}" alt="user's photo" width="250">
                    </div>
                    <div class="col-md-8">
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <h4>Full Name</h4>
                                <p>{{Auth::user()->full_name}}</p>
                            </div>
                            <div class="col-md-4">
                                <h4>Email</h4>
                                <p>muhammadazis801@gmail.com</p>
                            </div>
                            <div class="col-md-4">
                                <h4>Phone</h4>
                                <p>+62895396780183</p>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-4">
                                <h4>Address</h4>
                                <p>-</p>
                            </div>
                            <div class="col-md-4">
                                <h4>Payment</h4>
                                <p>-</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <table>
                        <thead>
                            <th>Transaction ID</th>
                            <th></th>
                        </thead>
                    </table>
                </div>
            </div>
        </section>
    @endsection