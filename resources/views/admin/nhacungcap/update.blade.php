@extends('admin/layout')
@section('admin/content')
<form action="{{route('admin.nhacungcap.update',$db)}}" method="post">
@csrf
    <div class="tab-content rounded-bottom">
    <label for="maloai">Mã nhà cung cấp</label>
    <div class="input-group mb-3">
    <span class="input-group-text" id="mancc">Mã nhà cung cấp</span>
    <input class="form-control" type="text" placeholder="Nhập" name="id" value="{{ $db->id }}" aria-label="Username" aria-describedby="basic-addon1" readonly>
    </div>
    <label for="hoten">Tên nhà cung cấp</label>
        <div class="input-group mb-3">
       <span class="input-group-text" id="hoten">Tên nhà cung cấp</span>
    <input class="form-control" type="text" name="Tenncc" value="{{ $db->Tenncc }}" placeholder="Nhập tên" aria-label="Username" aria-describedby="basic-addon1">
          </div>

          <label for="diachi">Địa chỉ</label>
        <div class="input-group mb-3">
       <span class="input-group-text" id="diachi">Địa chỉ</span>
    <input class="form-control" type="text" name="Diachi" value="{{ $db->Diachi}}" placeholder="Nhập tên" aria-label="Username" aria-describedby="basic-addon1">
          </div>

          <label for="sdt">Sdt</label>
        <div class="input-group mb-3">
       <span class="input-group-text" id="sdt">Tên nhà cung cấp</span>
    <input class="form-control" type="text" name="Sdt" value="{{ $db->Sdt }}" placeholder="Nhập tên" aria-label="Username" aria-describedby="basic-addon1">
          </div>
                        
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1158">
                    <button class="btn btn-primary" type="submit">Sửa</button>
                    
                  </div>
                      </div>
                    </div>
</form>
@endsection
