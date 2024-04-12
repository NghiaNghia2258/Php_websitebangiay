@extends('admin/layout')
@section('admin/content')

<div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Quản lý tài khoản</h3>
                            <p class="text-subtitle text-muted"></p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Quản lý tài khoản</li>
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
                                    <th>Tên người dùng</th>
                                    <th>Email</th>
                                    <th>Quyền</th>
                                    <th>Password</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>Xem</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($db as $loai)
                                <tr>
                                        <td>{{$loai->name}}</td>
                                        <td>{{$loai->email}}</td>
                                        <td>{{$loai->role}}</td>
                                        <td>{{$loai->password}}</td>
                                        <td><a href="{{route('admin.user.edit',$loai->id)}}" class='btn btn-warning fa fa-pencil'> Sửa</a></td>
                                        <td> <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{route('admin.user.delete',$loai->id)}}" class='btn btn-danger fa fa-trash'>Xóa</a></td>
                                        <td><a href="{{route('admin.user.show',$loai->id)}}" class='btn btn-success fa fa-pencil'>Xem</a></td>
                                        
                                    </tr>
                        @endforeach
                                   
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

@endsection


