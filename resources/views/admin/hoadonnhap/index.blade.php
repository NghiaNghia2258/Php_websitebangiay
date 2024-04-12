@extends('admin/layout')
@section('admin/content')

<div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Quản lý hóa đơn nhập</h3>
                            <p class="text-subtitle text-muted"></p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Quản lý hóa đơn nhập</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">

                        <div class="card-header">
                     
                        <a href="{{route('admin.hoadonnhap.create')}}" ><button class='btn btn-primary'> Thêm</button></a>
                            
                        </div>
                            
                        
                       
                     
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                    <th>Mã hóa đơn nhập</th>
                                   
                                    <th>Nhanvien_id</th>
                                    <th>Thanhtien</th>
                                    <th>Ngaynhap</th>
                                    <th>Ncc_id</th>
                                   
                                    <th>Xem</th>
                                    </tr>
                                </thead>
                                   <!-- `id`, `Nhanvien_id`, `Thanhtien`, `Ngaynhap`, `Ncc_id`,' -->
                                <tbody>
                                @foreach($db as $dh)
                               
                                <tr style="font-weight: bold;">
                                        <td>{{$dh->id}}</td>
                                    
                                        <td>{{$dh->Nhanvien_id}}</td>
                                        <td>{{$dh->Thanhtien}}</td>
                                        <td>{{$dh->Ngaynhap}}</td>
                                        <td>{{$dh->Ncc_id}}</td>
                                       
                                        <td><a href="{{route('admin.hoadonnhap.chitiet',$dh->id)}}" class='btn btn-success fa fa-pencil'>Xem</a></td>
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


