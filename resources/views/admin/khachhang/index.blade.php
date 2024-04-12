@extends('admin/layout')
@section('admin/content')

<div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Quản lý khách hàng</h3>
                            <p class="text-subtitle text-muted"></p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Quản lý khách hàng</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                        <a href="{{route('admin.khachhang.create')}}" ><button class='btn btn-primary'> Thêm</button></a>
                            
                        </div>
                       

                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                    <th>Mã khách hàng</th>
                                    <th>Tên khách hàng</th>
                                    <th>Ảnh đại diện</th>
                                    <th>Ngày sinh</th>
                                    <th>Sđt</th>
                                    <th>Địa chỉ</th>
                                    <th>Email</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>Xem</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($db as $kh)
                                <tr>
                                        <td>{{$kh->id}}</td>
                                        <td>{{$kh->Tenkhachhang}}</td>
                                        <td>{{$kh->Anhdaidien}}</td>
                                        <td>{{$kh->Ngaysinh}}</td>
                                        <td>{{$kh->Sdt}}</td>
                                        <td>{{$kh->Diachi}}</td>
                                        <td>{{$kh->Email}}</td>
                                        <td><a href="{{route('admin.khachhang.edit',$kh->id)}}" class='btn btn-warning fa fa-pencil'> Sửa</a></td>
                                        <td> <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{route('admin.khachhang.delete',$kh->id)}}" class='btn btn-danger fa fa-trash'>Xóa</a></td>
                                        <td><a href="{{route('admin.khachhang.show',$kh->id)}}" class='btn btn-success fa fa-pencil'>Xem</a></td>
                                        <!-- <td>
                                            <span class="badge bg-success">Active</span>
                                        </td> -->
                                    </tr>
                        @endforeach
                                   
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

@endsection


