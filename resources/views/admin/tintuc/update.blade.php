@extends('admin/layout')
@section('admin/content')
<form action="{{route('admin.tintuc.update',['id' => $db->Matin_id])}}" method="post">
@csrf
    <div class="tab-content rounded-bottom">

    <label for="Matin_id">Mã tin tức</label>
    <div class="input-group mb-3">
    <span class="input-group-text" id="tensanpham">Mã tin tức</span>
    <input class="form-control" type="text" placeholder="Nhập" name="Matin_id" value="{{ $db->Matin_id }}" aria-label="Username" aria-describedby="basic-addon1" readonly>
    </div>
    <label for="Nhanvien_id" class="control-label col-md-2">Nhanvien_id</label>
    <div class="col-md-10">
    <select name="Nhanvien_id" id="Nhanvien_id" class="form-control" v-model="nhanVien.Nhanvien_id">
    @foreach ($nv as $item)
    <option  value="{{ $item->id }}">{{ $item->Tennhanvien }}</option>
    @endforeach                  
    </select> 
    </div>

   

    <label for="ngaynhap">Ngày nhập</label>
    <div class="input-group mb-3">
    <span class="input-group-text" id="ngaynhap">Ngày nhập</span>
    <input class="form-control" type="text" placeholder="Nhập" name="Ngaynhap" value="{{ $db->Ngaynhap }}" aria-label="Username" aria-describedby="basic-addon1" >
    </div>
    <!-- <label for="anh">Ảnh</label>
    <div class="input-group mb-3">
    <span class="input-group-text" id="anh">Ảnh</span>
    <input class="form-control" type="text" name="Anh" value="{{ $db->Anh }}" placeholder="Nhập ảnh" aria-label="Username" aria-describedby="basic-addon1">
    </div> -->

    <label for="Anh">Ảnh</label>
    <div class="input-group mb-3">
    <input type="file" class="form-control" name="Anh" accept="image/*">
     </div>

    

    <label for="mota">Mô tả</label>
    <div class="input-group mb-3">
    <span class="input-group-text" id="mota">Mô tả</span>
    <input class="form-control" type="text" name="Mota" value="{{ $db->Mota }}" placeholder="Nhập mô tả" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <label for="tieude">Tên tiêu đề</label>
    <div class="input-group mb-3">
    <span class="input-group-text" id="tieude">Tên tiêu đề</span>
    <input class="form-control" type="text" name="Tentieude" value="{{ $db->Tentieude }}" placeholder="Nhập tiêu đề" aria-label="Username" aria-describedby="basic-addon1">
    </div>

   
                        
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1158">
                    <button class="btn btn-primary" type="submit">Sửa</button>
                    
                  </div>
                      </div>
                    </div>
</form>
@endsection
