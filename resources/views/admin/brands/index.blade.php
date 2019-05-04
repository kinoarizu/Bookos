@extends('layouts.admin')   
    @section('content')     
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h3 class="title-5 m-b-35">Data Brands</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <select class="js-select2 select2-hidden-accessible" name="property" tabindex="-1" aria-hidden="true">
                                            <option selected="selected">All Properties</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <div class="rs-select2--light rs-select2--sm">
                                        <select class="js-select2 select2-hidden-accessible" name="time" tabindex="-1" aria-hidden="true">
                                            <option selected="selected">Today</option>
                                            <option value="">3 Days</option>
                                            <option value="">1 Week</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <button class="au-btn-filter">
                                        <i class="zmdi zmdi-filter-list"></i>filters</button>
                                </div>
                                <form class="form-header" action="/admin/brands" method="POST">
                                    {{ csrf_field() }} 
                                    <input class="au-input" type="text" name="cari" placeholder="Cari Nama Brand">
                                    <button class="au-btn--submit" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                                <div class="table-data__tool-right">
                                    <a href="/admin/brand/add" class="au-btn au-btn-icon au-btn--green au-btn--small text-white">
                                        <i class="zmdi zmdi-plus"></i>add item</a>
                                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                        <select class="js-select2 select2-hidden-accessible" name="type" tabindex="-1" aria-hidden="true">
                                            <option selected="selected">Export</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive m-b-40">
                                <table class="table table-borderless table-data3">
                                    <thead>
                                        <tr>
                                            <th>Nama Brand</th>
                                            <th>Negara Asal</th>
                                            <th>Kategori</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($brands as $brand)
                                        <tr>
                                            <td>{{$brand->name_brands}}</td>
                                            <td>{{$brand->country}}</td>
                                            @foreach ($categories as $category)
                                                @if($category->id == $brand->category_id)
                                                    <td>{{$category->name_category}}</td>
                                                @endif
                                            @endforeach
                                            <td class="pl-0 pr-0 text-center">
                                                <a class="btn btn-primary btn-sm" href="/admin/brand/edit/{{$brand->id}}"><i class="fas fa-edit"></i></a>
                                                <a class="btn btn-danger disabled btn-sm" href="#" role="button"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr> 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <nav aria-label="Page navigation example float-right">
                                <ul class="pagination float-right">
                                    <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection