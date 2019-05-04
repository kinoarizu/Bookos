@extends('layouts.admin')   
    @section('content')     
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h3 class="title-5 m-b-35">Data Users</h3>
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
                                <form class="form-header" action="" method="POST">
                                    <input class="au-input" type="text" name="search" placeholder="Search for datas &amp; reports...">
                                    <button class="au-btn--submit" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                                <div class="table-data__tool-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
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
                                            <th>date</th>
                                            <th>type</th>
                                            <th>description</th>
                                            <th>status</th>
                                            <th>price</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2018-09-29 05:57</td>
                                            <td>Mobile</td>
                                            <td>iPhone X 64Gb Grey</td>
                                            <td class="process">Processed</td>
                                            <td>$999.00</td>
                                            <td class="pl-0 pr-0 text-center">
                                                <a class="btn btn-primary btn-sm" href="#" role="button"><i class="fas fa-edit"></i></a>
                                                <a class="btn btn-success btn-sm" href="#" role="button"><i class="fas fa-tasks"></i></a>
                                                <a class="btn btn-danger disabled btn-sm" href="#" role="button"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018-09-28 01:22</td>
                                            <td>Mobile</td>
                                            <td>Samsung S8 Black</td>
                                            <td class="process">Processed</td>
                                            <td>$756.00</td>
                                            <td class="pl-0 pr-0 text-center">
                                                <a class="btn btn-primary btn-sm" href="#" role="button"><i class="fas fa-edit"></i></a>
                                                <a class="btn btn-success btn-sm" href="#" role="button"><i class="fas fa-tasks"></i></a>
                                                <a class="btn btn-danger disabled btn-sm" href="#" role="button"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018-09-27 02:12</td>
                                            <td>Game</td>
                                            <td>Game Console Controller</td>
                                            <td class="denied">Denied</td>
                                            <td>$22.00</td>
                                            <td class="pl-0 pr-0 text-center">
                                                <a class="btn btn-primary btn-sm" href="#" role="button"><i class="fas fa-edit"></i></a>
                                                <a class="btn btn-success btn-sm" href="#" role="button"><i class="fas fa-tasks"></i></a>
                                                <a class="btn btn-danger disabled btn-sm" href="#" role="button"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018-09-26 23:06</td>
                                            <td>Mobile</td>
                                            <td>iPhone X 256Gb Black</td>
                                            <td class="denied">Denied</td>
                                            <td>$1199.00</td>
                                            <td class="pl-0 pr-0 text-center">
                                                <a class="btn btn-primary btn-sm" href="#" role="button"><i class="fas fa-edit"></i></a>
                                                <a class="btn btn-success btn-sm" href="#" role="button"><i class="fas fa-tasks"></i></a>
                                                <a class="btn btn-danger disabled btn-sm" href="#" role="button"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018-09-25 19:03</td>
                                            <td>Accessories</td>
                                            <td>USB 3.0 Cable</td>
                                            <td class="process">Processed</td>
                                            <td>$10.00</td>
                                            <td class="pl-0 pr-0 text-center">
                                                <a class="btn btn-primary btn-sm" href="#" role="button"><i class="fas fa-edit"></i></a>
                                                <a class="btn btn-success btn-sm" href="#" role="button"><i class="fas fa-tasks"></i></a>
                                                <a class="btn btn-danger disabled btn-sm" href="#" role="button"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018-09-29 05:57</td>
                                            <td>Accesories</td>
                                            <td>Smartwatch 4.0 LTE Wifi</td>
                                            <td class="denied">Denied</td>
                                            <td>$199.00</td>
                                            <td class="pl-0 pr-0 text-center">
                                                <a class="btn btn-primary btn-sm" href="#" role="button"><i class="fas fa-edit"></i></a>
                                                <a class="btn btn-success btn-sm" href="#" role="button"><i class="fas fa-tasks"></i></a>
                                                <a class="btn btn-danger disabled btn-sm" href="#" role="button"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018-09-24 19:10</td>
                                            <td>Camera</td>
                                            <td>Camera C430W 4k</td>
                                            <td class="process">Processed</td>
                                            <td>$699.00</td>
                                            <td class="pl-0 pr-0 text-center">
                                                <a class="btn btn-primary btn-sm" href="#" role="button"><i class="fas fa-edit"></i></a>
                                                <a class="btn btn-success btn-sm" href="#" role="button"><i class="fas fa-tasks"></i></a>
                                                <a class="btn btn-danger disabled btn-sm" href="#" role="button"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018-09-22 00:43</td>
                                            <td>Computer</td>
                                            <td>Macbook Pro Retina 2017</td>
                                            <td class="process">Processed</td>
                                            <td>$10.00</td>
                                            <td class="pl-0 pr-0 text-center">
                                                <a class="btn btn-primary btn-sm" href="#" role="button"><i class="fas fa-edit"></i></a>
                                                <a class="btn btn-success btn-sm" href="#" role="button"><i class="fas fa-tasks"></i></a>
                                                <a class="btn btn-danger disabled btn-sm" href="#" role="button"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
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