@extends('admin/layout')
@section('admin/content')
@php
$index=1;
@endphp
<div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Chi tiet</h3>
                            <p class="text-subtitle text-muted">For user to check they list</p>
                        </div>
                        <p>Tên khách hàng:<b>{{$db->Hoten}}</b></p>
                        <p>Sđt:<b>{{$db->Sdt}}</b></p>
                        <p>Email:<b>{{$db->Email}}</b></p>
                        <p>Địa chỉ:<b>{{$db->Diachi}}</b></p>
                        <p>Chi tiết đơn hàng</p>
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
                     
                            
                        </div>
                       
                     
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                    <th>TT</th>
                                    <th>Ảnh</th>
                                    <th>Tên sản phảm</th>
                                    <th>Đơn giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                   
                                    </tr>
                                </thead>
                                   <!-- 'id', 'Khachhang_id', 'Hoten', 'Sdt', 'Email', 'Diachi', 'Ngaydat', 'Tongtien', 'Trangthai' -->
                                <tbody>
                                @foreach($chitiet as $ct)
                                <tr>
                                        <td>{{$index++}}</td>
                                        <td> <img src="/karlmaster/img/{{$ct->Anh}}" alt="" style="width:100px"></td>
                                        <td>{{$ct->Tensanpham}}</td>
                                        <td>{{number_format($ct->Gia)}},000VNĐ</td>
                                        <td>{{$ct->Soluong}}</td>
                                        <td>{{number_format($ct->Tongtien)}},000VNĐ</td>
                                        </tr>
                                @endforeach
                                   
                
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

@endsection


