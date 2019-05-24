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
                                <p>{{Auth::user()->name}}</p>
                            </div>
                            <div class="col-md-4">
                                <h4>Email</h4>
                                <p>{{Auth::user()->email}}</p>
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
                            <th>Total Cost</th>
                            <th>Payment Proof</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td><a href="">Your Product</a></td>
                                    <td>{{$order->full_address}}</td>
                                    <td>{{$order->shipment}}</td>
                                    <td>{{$order->payment}}</td>
                                    <td>{{$order->total_cost}}</td>
                                    <td><img src="{{asset('uploads/'.$order->payment_proof)}}" width="80" height="80"></td>
                                    <td>{{$order->status}}</td>
                                    <td>
                                        <form action="/payment/{{$order->id}}" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupFileAddon01">Gambar</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="gambar" id="gambar">
                                                    <label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-sm btn-block mt-1">Upload Bukti</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    @endsection