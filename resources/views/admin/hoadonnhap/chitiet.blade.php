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
                        <p>Chi tiết hóa đơn nhập</p>
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
                        
                     
                     <a href="{{route('admin.hoadonnhap.createct')}}" ><button class='btn btn-primary'> Thêm</button></a>
                         
                     
                            
                        </div>
                       
                        <!-- `id`, `Hoadonnhap_id`, `Sanpham_id`, `Dongia`, `Soluong`, -->
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                    <th>TT</th>
                                    <th>Hoadonnhap_id</th>
                                    <th>Sanpham_id</th>
                                    <th>Đơn giá</th>
                                    <th>Số lượng</th>
                                   
                                   
                                    </tr>
                                </thead>
                                   <!-- 'id', 'Khachhang_id', 'Hoten', 'Sdt', 'Email', 'Diachi', 'Ngaydat', 'Tongtien', 'Trangthai' -->
                                <tbody>
                                @foreach($chitiet as $ct)
                                <tr>
                                        <td>{{$index++}}</td>
                                     
                                        <td>{{$ct->Hoadonnhap_id}}</td>
                                        <td>{{$ct->Sanpham_id}}</td>
                                        <td>{{number_format($ct->Dongia)}},000VNĐ</td>
                                        <td>{{$ct->Soluong}}</td>
                                        
                                        </tr>
                                @endforeach
                                   
                
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

@endsection


