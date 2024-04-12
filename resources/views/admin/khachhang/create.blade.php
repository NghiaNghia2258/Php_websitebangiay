@extends('admin/layout')
@section('admin/content')
<form action="{{route('admin.khachhang.store')}}" method="post">
@csrf
<div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1272">
                        <!-- <label for="maloai">Mã loại</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="maloai">Mã loại</span>
                          <input class="form-control" type="text" placeholder="Nhap" name="id" aria-label="Username" aria-describedby="basic-addon1">
                        </div> -->
                        <label for="hoten">Tên khách hàng</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="hoten">Tên khách hàng</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Tenkhachhang" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <label for="anhdaidien">Ảnh đại diện</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="anhdaidien">Ảnh đại diện</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Anhdaidien" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <label for="ngaysinh">Ngày sinh</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="ngaysinh">Ngày sinh</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Ngaysinh" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <label for="sdt">Sđt</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="sdt">Sđt</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Sdt" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <label for="diachi">Địa chỉ</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="diachi">Địa chỉ</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Diachi" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <label for="email">Email</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="email">Email</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Email" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1158">
                    <button class="btn btn-primary" type="submit">Thêm khách hàng</button>
                    
                  </div>
                      </div>
                    </div>
</form>
@endsection


