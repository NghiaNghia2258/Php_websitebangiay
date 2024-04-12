@extends('admin/layout')
@section('admin/content')

<div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Quản lý cây</h3>
                            <p class="text-subtitle text-muted"></p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Quản lý cây</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                        <a href="{{route('admin.sanpham.create')}}" ><button class='btn btn-primary'> Thêm</button></a>
                            
                        </div>
                       

                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                    
                                     <th>Mã sản phẩm</th>
                                     <th>Mã loại</th>
                                     <th>Tên sản phẩm</th>
                                     <th>Ảnh</th>
                                     <th>Số lượng</th>
                                     <th>Giá</th>
                                  
                                     <th>Giá khuyến mại</th>
                                     
                                     <th>Sửa</th>
                                     <th>Xóa</th>
                                     <th>Xem</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($sp as $sanpham)
                                <tr>
                                     <th>{{$sanpham->id}}</th>
                                     <td>{{$sanpham->Maloai_id}}</td>
                                     <td>{{$sanpham->Tensanpham}}</td>
                                     <td><img src="/karlmaster/img/{{ $sanpham->Anh }}" alt="Ảnh sản phẩm" width="60" height="60"></td>
                                     
                                     <td>{{$sanpham->Soluong}}</td>
                                     <td>{{number_format($sanpham-> Gia)}},000VNĐ</td>
                                     <!-- <td>{{$sanpham->Maluc}}</td>
                                     <td>{{$sanpham->PhanKhuc}}<td/>
                                     <td>{{$sanpham->VongTuaMay}}<td/>
                                     <td>{{$sanpham->MoMenXoan}}</td> -->
                                     <td>{{number_format($sanpham-> Giakhuyenmai)}},000VNĐ</td>
                                     <!-- <td>{{$sanpham->Viewcount}}</td>
                                     <td>{{$sanpham->ReducePrice}}</td> -->
                                        

                                     <td><a href="{{route('admin.sanpham.edit',$sanpham->id)}}" class='btn btn-warning fa fa-pencil'> Sửa</a></td>
                                
                                    <td> <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{route('admin.sanpham.delete',$sanpham->id)}}" class='btn btn-danger fa fa-trash'>Xóa</a></td>
                                    <td><a href="{{route('admin.sanpham.show',$sanpham->id)}}" class='btn btn btn-info fa fa-pencil'>Xem</a></td>
                                    </tr>
                         @endforeach
                                   
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

@endsection


