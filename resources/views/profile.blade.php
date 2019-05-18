@extends('layouts.app') @section('title', 'Profile')
    @section('content')
        <section>
            <div class="container">
                <div class="row">
                    <h3 class="text-center mt-5 ml-5">Your Profile</h3>
                </div>
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
                <div class="row mb-5">
                    <table class="table rounded mt-4">
                        <thead>
                            <th>Order ID</th>
                            <th>Products</th>
                            <th>Full Address</th>
                            <th>Shipment</th>
                            <th>Payment</th>
                            <th>Ship Cost</th>
                            <th>Total Cost</th>
                            <th>Payment Proof</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    @endsection