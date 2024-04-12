@extends('admin/layout')
@section('admin/content')
<form action="{{route('admin.kart.update',['id' => $db->id])}}" method="post">
@csrf
    <div class="tab-content rounded-bottom">
    <label for="maloai">Mã loại</label>
    <div class="input-group mb-3">
    <span class="input-group-text" id="maloai">Mã loại</span>
    <input class="form-control" type="text" placeholder="Nhập" name="id" value="{{ $db->id }}" aria-label="Username" aria-describedby="basic-addon1" readonly>
    </div>
    <label for="hoten">Tên loại</label>
        <div class="input-group mb-3">
       <span class="input-group-text" id="hoten">Tên loại</span>
    <input class="form-control" type="text" name="Tenloai" value="{{ $db->Tenloai }}" placeholder="Nhập tên" aria-label="Username" aria-describedby="basic-addon1">
          </div>

                        
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1158">
                    <button class="btn btn-primary" type="submit">Sửa</button>
                    
                  </div>
                      </div>
                    </div>
</form>
@endsection
