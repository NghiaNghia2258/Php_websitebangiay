@extends('admin/layout')
@section('admin/content')

<div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Quản lý đơn hàng</h3>
                            <p class="text-subtitle text-muted"></p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Quản lý đơn hàng</li>
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
                                    <th>Mã đơn hàng</th>
                                    <!-- <th>Mã khách hàng</th> -->
                                    <th>Họ tên</th>
                                    <th>Sđt</th>
                                    <th>Email</th>
                                    <th>Địa chỉ</th>
                                    <th>Ngày đặt</th>
                                    <th>Tổng tiền</th>
                                    <th>Trạng thái</th>
                                    <th>Xem</th>
                                    </tr>
                                </thead>
                                   <!-- 'id', 'Khachhang_id', 'Hoten', 'Sdt', 'Email', 'Diachi', 'Ngaydat', 'Tongtien', 'Trangthai' -->
                                <tbody>
                                @foreach($db as $dh)
                                @if($dh->Trangthai>0)
                                        <td>{{$dh->id}}</td>
                                        <!-- <td>{{$dh->Khachhang_id}}</td> -->
                                        <td>{{$dh->Hoten}}</td>
                                        <td>{{$dh->Sdt}}</td>
                                        <td>{{$dh->Email}}</td>
                                        <td>{{$dh->Diachi}}</td>
                                        <td>{{$dh->Ngaydat}}</td>
                                        <td>{{number_format($dh->Tongtien)}},000đ</td>
                                        <td>{{$dh->Trangthai==1?"Chua xem":"Da TT"}}</td>
                                        <td><a href="{{route('admin.donhang.chitiet',$dh->id)}}" class='btn btn-success fa fa-pencil'>Xem</a></td>
                                @else
                               
                                <tr style="font-weight: bold;">
                                        <td>{{$dh->id}}</td>
                                        <!-- <td>{{$dh->Khachhang_id}}</td> -->
                                        <td>{{$dh->Hoten}}</td>
                                        <td>{{$dh->Sdt}}</td>
                                        <td>{{$dh->Email}}</td>
                                        <td>{{$dh->Diachi}}</td>
                                        <td>{{$dh->Ngaydat}}</td>
                                        <td>{{number_format($dh->Tongtien)}},000đ</td>
                                        <td>{{"Chua xem"}}</td>
                                        <td><a href="{{route('admin.donhang.chitiet',$dh->id)}}" class='btn btn-success fa fa-pencil'>Xem</a></td>
                                        <!-- <td>
                                            <span class="badge bg-success">Active</span>
                                        </td> -->
                                    </tr>
                                    @endif
                        @endforeach
                                   
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

@endsection


