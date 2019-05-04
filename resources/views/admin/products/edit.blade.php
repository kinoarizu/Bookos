@extends('layouts.admin')
    @section('content')
    <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h3 class="title-5 m-b-35">Edit Products</h3>
                            <form action="/admin/product/update/{{$product->id}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                  <div class="col-md-2">
                                    <label for="name">Nama Produk</label>
                                  </div>
                                  <div class="col-md-8">
                                    <input type="text" class="form-control {{$errors->has('name') ? ' is-invalid' : ''}}" name="name" id="name" placeholder="Nama Produk" value="{{$product->name_product}}">
                                    @if($errors->has('name'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('name')}}
                                        </div>
                                    @endif
                                </div>
                                </div>
                                <div class="row mt-4">
                                  <div class="col-md-2">
                                    <label for="name">Kategori Produk</label>
                                  </div>
                                  <div class="col-md-8">
                                    <select class="form-control {{$errors->has('category') ? ' is-invalid' : ''}}" name="category" id="category">
                                        <option value="">Pilih Kategori</option>
                                        @foreach ($categories as $kategori)
                                            <option value="{{$kategori->id}}" @if($kategori->id == $category->id) selected @endif>{{$kategori->name_category}}</option>
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
                                    <label for="name">Brand Produk</label>
                                  </div>
                                  <div class="col-md-8">
                                    <select class="form-control {{$errors->has('brand') ? ' is-invalid' : ''}}" name="brand" id="brand">
                                        <option value="">Pilih Brand</option>
                                        @foreach ($brands as $merk)
                                            <option value="{{$merk->id}}" @if($merk->id == $brand->id) selected @endif>{{$merk->name_brands}}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('brand'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('brand')}}
                                        </div>
                                    @endif
                                  </div>
                                </div>
                                <div class="row mt-4">
                                  <div class="col-md-2">
                                    <label for="harga">Harga Produk</label>
                                  </div>
                                  <div class="col-md-8">
                                    <input type="number" class="form-control {{$errors->has('harga') ? ' is-invalid' : ''}}" name="harga" id="harga" placeholder="Harga Produk" value="{{$product->price}}">
                                    @if($errors->has('harga'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('harga')}}
                                        </div>
                                    @endif
                                  </div>
                                </div>
                                <div class="row mt-4">
                                  <div class="col-md-2">
                                    <label for="stok">Stok Tersedia</label>
                                  </div>
                                  <div class="col-md-8">
                                    <input type="number" class="form-control {{$errors->has('stok') ? ' is-invalid' : ''}}" name="stok" id="stok" placeholder="Stok Produk" value="{{$product->stock}}">
                                    @if($errors->has('stok'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('stok')}}
                                        </div>
                                    @endif
                                  </div>
                                </div>
                                <div class="row mt-4">
                                  <div class="col-md-2">
                                    <label for="deskripsi">Deskripsi Produk</label>
                                  </div>
                                  <div class="col-md-8">
                                    <textarea name="deskripsi" class="form-control {{$errors->has('deskripsi') ? ' is-invalid' : ''}}" id="deskripsi" cols="30" rows="10" placeholder="Deksripsikan Produk">
                                        {{$product->description}}
                                    </textarea>
                                    @if($errors->has('deskripsi'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('deskripsi')}}
                                        </div>
                                    @endif
                                  </div>
                                </div>
                                {{-- <div class="row mt-4">
                                    <div class="col-md-2">
                                      <label for="gambar">Gambar Produk</label>
                                    </div>
                                    <div class="col-md-8">
                                      <div class="custom-file">
                                        <input type="file" class="custom-file-input {{$errors->has('gambar') ? ' is-invalid' : ''}}" name="gambar" id="gambar">
                                        <label class="custom-file-label" for="gambar">Choose file</label>
                                      </div>
                                    </div>
                                    @if($errors->has('gambar'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('gambar')}}
                                        </div>
                                    @endif
                                </div> --}}
                                <div class="row mt-5">
                                    <div class="col-md-11">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Ubah Produk</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection