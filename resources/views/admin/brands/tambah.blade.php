@extends('layouts.admin')
    @section('content')
    <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h3 class="title-5 m-b-35">Add Brand</h3>
                            <form action="/admin/brand/store" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                  <div class="col-md-2">
                                    <label for="name">Nama Brand</label>
                                  </div>
                                  <div class="col-md-8">
                                    <input type="text" class="form-control {{$errors->has('name') ? ' is-invalid' : ''}}" name="name" id="name" placeholder="Nama Brand" value="{{old('name')}}">
                                    @if($errors->has('name'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('name')}}
                                        </div>
                                    @endif
                                   </div>
                                </div>
                                <div class="row mt-4">
                                  <div class="col-md-2">
                                    <label for="name">Kategori Brand</label>
                                  </div>
                                  <div class="col-md-8">
                                    <select class="form-control {{$errors->has('category') ? ' is-invalid' : ''}}" name="category" id="category">
                                        <option value="">Pilih Kategori</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}" {{(old('category') == $category->id) ? ' selected' : ''}}>{{$category->name_category}}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('category'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('category')}}
                                        </div>
                                    @endif
                                  </div>
                                </div>
                                <div class="row mt-4">
                                  <div class="col-md-2">
                                    <label for="name">Asal Negara</label>
                                  </div>
                                  <div class="col-md-8">
                                    <input type="text" class="form-control {{$errors->has('country') ? ' is-invalid' : ''}}" name="country" id="country" placeholder="Asal Negara" value="{{old('country')}}">
                                    @if($errors->has('country'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('country')}}
                                        </div>
                                    @endif
                                   </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-10">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Tambah Brand</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection