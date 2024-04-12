@extends('admin/layout')
@section('admin/content')
<form action="{{route('admin.nhanvien.store')}}" method="post">
@csrf
<div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1272">
                        <!-- <label for="maloai">Mã loại</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="maloai">Mã loại</span>
                          <input class="form-control" type="text" placeholder="Nhap" name="id" aria-label="Username" aria-describedby="basic-addon1">
                        </div> -->


                        <!-- ['Nhanvien_id', 'Tennhanvien', 'Ngaysinh', 'Sdt', 'Diachi', 'Email', 'Anh']; -->

                        <label for="hoten">Tên nhân viên</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="hoten">Tên nhân viên</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Tennhanvien" aria-label="Username" aria-describedby="basic-addon1">
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

                        <label for="sdt">Email</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="sdt">Email</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Email" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <label for="anh">Ảnh</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="anh">Ảnh</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Anh" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1158">
                    <button class="btn btn-primary" type="submit">Them nhân viên</button>
                    
                  </div>
                      </div>
                    </div>
</form>
@endsection


