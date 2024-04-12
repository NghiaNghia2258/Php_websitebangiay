@extends('admin/layout')
@section('admin/content')
<form action="{{route('admin.nhanvien.update',$db)}}" method="post">
@csrf

<!-- `Nhanvien_id`, `Tennhanvien`, `Ngaysinh`, `Sdt`, `Diachi`, `Email`, `Anh`, -->

    <div class="tab-content rounded-bottom">
    <label for="manv">Mã nhân viên</label>
    <div class="input-group mb-3">
    <span class="input-group-text" id="mancc">Mã nhân viên</span>
    <input class="form-control" type="text" placeholder="Nhập" name="id" value="{{ $db->id }}" aria-label="Username" aria-describedby="basic-addon1" readonly>
    </div>
    <label for="hoten">Tên nhân viên</label>
        <div class="input-group mb-3">
       <span class="input-group-text" id="hoten">Tên nhân viên</span>
    <input class="form-control" type="text" name="Tennhanvien" value="{{ $db->Tennhanvien }}" placeholder="Nhập tên" aria-label="Username" aria-describedby="basic-addon1">
          </div>

          <label for="ngaysinh">Ngày sinh</label>
        <div class="input-group mb-3">
       <span class="input-group-text" id="ngaysinh">Ngày sinh</span>
    <input class="form-control" type="text" name="Ngaysinh" value="{{ $db->Ngaysinh }}" placeholder="Nhập tên" aria-label="Username" aria-describedby="basic-addon1">
          </div>

          <label for="sdt">Sdt</label>
        <div class="input-group mb-3">
       <span class="input-group-text" id="sdt">Sdt</span>
    <input class="form-control" type="text" name="Sdt" value="{{ $db->Sdt }}" placeholder="Nhập tên" aria-label="Username" aria-describedby="basic-addon1">
          </div>

          <label for="diachi">Địa chỉ</label>
        <div class="input-group mb-3">
       <span class="input-group-text" id="diachi">Địa chỉ</span>
    <input class="form-control" type="text" name="Diachi" value="{{ $db->Diachi}}" placeholder="Nhập tên" aria-label="Username" aria-describedby="basic-addon1">
          </div>

          <label for="email">Email</label>
        <div class="input-group mb-3">
       <span class="input-group-text" id="email">Tên nhà cung cấp</span>
    <input class="form-control" type="text" name="Email" value="{{ $db->Email }}" placeholder="Nhập tên" aria-label="Username" aria-describedby="basic-addon1">
          </div>

          <label for="anh">Ảnh</label>
        <div class="input-group mb-3">
       <span class="input-group-text" id="anh">Ảnh</span>
    <input class="form-control" type="text" name="Anh" value="{{ $db->Anh }}" placeholder="Nhập tên" aria-label="Username" aria-describedby="basic-addon1">
          </div>
                        
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1158">
                    <button class="btn btn-primary" type="submit">Sửa</button>
                    
                  </div>
                      </div>
                    </div>
</form>
@endsection
