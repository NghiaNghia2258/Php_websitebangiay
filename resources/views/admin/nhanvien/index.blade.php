@extends('admin/layout')
@section('admin/content')

<div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Quản lý nhân viên</h3>
                            <p class="text-subtitle text-muted"></p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Quản lý nhân viên</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                        <a href="{{route('admin.nhanvien.create')}}" ><button class='btn btn-primary'> Thêm</button></a>
                            
                        </div>
                       

                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>

                               
                                    <tr>
                                    <th>Mã nhân viên</th>
                                    <th>Tên nhân viên</th>
                                    <th>Ngaysinh</th>
                                    <th>Sđt</th>
                                    <th>Địa chỉ</th>
                                    <th>Email</th>
                                    <th>Ảnh</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>Xem</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($db as $nv)
                                <tr>
                                        <td>{{$nv->id}}</td>
                                        <td>{{$nv->Tennhanvien}}</td>
                                        <td>{{$nv->Ngaysinh}}</td>
                                        <td>{{$nv->Sdt}}</td>
                                        <td>{{$nv->Diachi}}</td>
                                        <td>{{$nv->Email}}</td>
                                        <td>{{$nv->Anh}}</td>
                                      
                                        <td><a href="{{route('admin.nhanvien.edit',$nv->id)}}" class='btn btn-warning fa fa-pencil'> Sửa</a></td>
                                        <td> <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{route('admin.nhanvien.delete',$nv->id)}}" class='btn btn-danger fa fa-trash'>Xóa</a></td>
                                        <td><a href="{{route('admin.nhanvien.show',$nv->id)}}" class='btn btn-success fa fa-pencil'>Xem</a></td>
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


