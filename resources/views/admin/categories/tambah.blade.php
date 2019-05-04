@extends('layouts.admin')
    @section('content')
    <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h3 class="title-5 m-b-35">Add Category</h3>
                            <form action="/admin/category/store" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                  <div class="col-md-2">
                                    <label for="name">Nama Kategori</label>
                                  </div>
                                  <div class="col-md-8">
                                    <input type="text" class="form-control {{$errors->has('name') ? ' is-invalid' : ''}}" name="name" id="name" placeholder="Nama Kategori" value="{{old('name')}}">
                                    @if($errors->has('name'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('name')}}
                                        </div>
                                    @endif
                                   </div>
                                </div>
                                <div class="row mt-4">
                                  <div class="col-md-2">
                                    <label for="deskripsi">Deskripsi Kategori</label>
                                  </div>
                                  <div class="col-md-8">
                                    <textarea name="deskripsi" class="form-control {{$errors->has('deskripsi') ? ' is-invalid' : ''}}" id="deskripsi" cols="30" rows="10" placeholder="Deskripsikan Kategori">
                                        {{old('deskripsi')}}
                                    </textarea>
                                    @if($errors->has('deskripsi'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('deskripsi')}}
                                        </div>
                                    @endif
                                  </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-10">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Tambah Kategori</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection