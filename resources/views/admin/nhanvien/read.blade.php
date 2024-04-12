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
                                    <th>Mã nhân viên</th>
                                    <th>Tên nhân viên</th>
                                    <th>Ngaysinh</th>
                                    <th>Sđt</th>
                                    <th>Địa chỉ</th>
                                    <th>Email</th>
                                    <th>Ảnh</th>
                                   
                                   
                                    </tr>
                                </thead>
                                <tbody>
                                
                                     <tr>
                                     <td>{{$db->id}}</td>
                                        <td>{{$db->Tennhanvien}}</td>
                                        <td>{{$db->Ngaysinh}}</td>
                                        <td>{{$db->Sdt}}</td>
                                        <td>{{$db->Diachi}}</td>
                                        <td>{{$db->Email}}</td>
                                        <td>{{$db->Anh}}</td>
                                       
                                        <!-- <td>
                                            <span class="badge bg-success">Active</span>
                                        </td> -->
                                    </tr>
                       
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

@endsection


