@extends('admin/layout')
@section('admin/content')

<div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Xem</h3>
                           
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Simple Datatable
                        </div>
                        <div class="card-body">
                        <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                     <th>Sanpham_id</th>
                                     <th>Maloai_id</th>
                                     <th>Tensanpham</th>
                                     <th>Anh</th>
                                     <th>Soluong</th>
                                     <th>Gia</th>
                                     <th>Mô tả</th>
                                     
                                     <th>Viewcount</th>
                                     <th>ReducePrice</th>
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                     <th>{{$sp->id}}</th>
                                     <td>{{$sp->Maloai_id}}</td>
                                     <td>{{$sp->Tensanpham}}</td>
                                     <td><img src="/karlmaster/img/{{ $sp->Anh }}" alt="Ảnh sản phẩm" width="60" height="60"></td>
                                     <td>{{$sp->Soluong}}</td>
                                     <td>{{number_format($sp-> Gia)}},000VNĐ</td>
                                     <td>{{$sp->Mota}}</td>
                                     
                                     <td>{{number_format($sp-> Giakhuyenmai)}},000VNĐ</td>
                                     <td>{{$sp->Viewcount}}</td>
                                     <td>{{$sp->ReducePrice}}</td>
            
                                </tr>
                        
                                   
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

@endsection


