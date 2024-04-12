@extends('admin/layout')
@section('admin/content')

<div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Quản lý tin tức</h3>
                            <p class="text-subtitle text-muted"></p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Quản lý tin tức</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                        <a href="{{route('admin.tintuc.create')}}" ><button class='btn btn-primary'> Thêm</button></a>
                            
                        </div>
                       

                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                    <th>Mã tin tức</th>
                                    <th>Mã nhân viên</th>
                                    <th>Ngày nhập</th>
                                    <th>Ảnh</th>
                                    <th>Mô tả</th>
                                    <th>Tên tiêu đề</th>
                                    <th>Sửa</th>
                                    <th>Delete</th>
                                    <th>Xem</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($db as $tt)
                                <tr>
                                        <td>{{$tt->id}}</td>
                                        <td>{{$tt->Nhanvien_id}}</td>
                                        <td>{{$tt->Ngaynhap}}</td>
                                        <td><img src="/karlmaster/img/{{ $tt->Anh }}" alt="Ảnh sản phẩm" width="60" height="60"></td>
                                        <td>{{$tt->Mota}}</td>
                                        <td>{{$tt->Tentieude}}</td>
                                        <td><a href="{{route('admin.tintuc.edit',$tt->id)}}" class='btn btn-warning fa fa-pencil'> Sửa</a></td>
                                        <td> <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{route('admin.tintuc.delete',$tt->id)}}" class='btn btn-danger fa fa-trash'>Xóa</a></td>
                                        <td><a href="{{route('admin.tintuc.show',$tt->id)}}" class='btn btn-success fa fa-pencil'>Xem</a></td>
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


