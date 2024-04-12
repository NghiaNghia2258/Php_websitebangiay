@extends('admin/layout')
@section('admin/content')
<form action="{{route('admin.sanpham.update',['id' => $sp->id])}}" method="post">
@csrf
    <div class="tab-content rounded-bottom">

    <label for="id">Mã sản phẩm</label>
    <div class="input-group mb-3">
    <span class="input-group-text" id="tensanpham">Mã sản phẩm</span>
    <input class="form-control" type="text" placeholder="Nhập" name="id" value="{{ $sp->id }}" aria-label="Username" aria-describedby="basic-addon1" readonly>
    </div>
    <label for="Maloai_id" class="control-label col-md-2">Maloai_id</label>
    <div class="col-md-10">
    <select name="Maloai_id" id="Maloai_id" class="form-control" v-model="sanPham.Maloai_id">
    @foreach ($db as $item)
    <option  value="{{ $item->id }}">{{ $item->Tenloai }}</option>
    @endforeach                  
    </select> 
    </div>

   

    <label for="tensanpham">Tên sản phẩm</label>
    <div class="input-group mb-3">
    <span class="input-group-text" id="tensanpham">Tên sản phẩm</span>
    <input class="form-control" type="text" placeholder="Nhập" name="Tensanpham" value="{{ $sp->Tensanpham }}" aria-label="Username" aria-describedby="basic-addon1" >
    </div>
    <!-- <label for="anh">Ảnh</label>
    <div class="input-group mb-3">
    <span class="input-group-text" id="anh">Ảnh</span>
    <input class="form-control" type="text" name="Anh" value="{{ $sp->Anh }}" placeholder="Nhập ảnh" aria-label="Username" aria-describedby="basic-addon1">
    </div> -->

    <label for="Anh">Ảnh</label>
    <div class="input-group mb-3">
    <input type="file" class="form-control" name="Anh" accept="image/*">
     </div>

    <label for="soluong">Số lượng</label>
    <div class="input-group mb-3">
    <span class="input-group-text" id="soluong">Số lượng</span>
    <input class="form-control" type="text" name="Soluong" value="{{ $sp->Soluong }}" placeholder="Nhập số lượng" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <label for="gia">Giá</label>
    <div class="input-group mb-3">
    <span class="input-group-text" id="gia">Giá</span>
    <input class="form-control" type="text" name="Gia" value="{{ $sp->Gia }}" placeholder="Nhập giá" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <label for="Mota">Mô tả</label>
    <div class="input-group mb-3">
    <span class="input-group-text" id="Mota">Mô tả</span>
    <input class="form-control" type="text" name="Mota" value="{{ $sp->Mota }}" placeholder="Nhập mô tả" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <label for="giakhuyenmai">Giá khuyến mãi</label>
    <div class="input-group mb-3">
    <span class="input-group-text" id="giakhuyenmai">Giá khuyến mãi</span>
    <input class="form-control" type="text" name="Giakhuyenmai" value="{{ $sp->Giakhuyenmai }}" placeholder="Nhập giá km" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <label for="viewcount">Viewcount</label>
    <div class="input-group mb-3">
    <span class="input-group-text" id="viewcount">Viewcount</span>
    <input class="form-control" type="text" name="Viewcount" value="{{ $sp->Viewcount }}" placeholder="Nhập Viewcount" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <label for="reducePrice">ReducePrice</label>
    <div class="input-group mb-3">
    <span class="input-group-text" id="reducePrice">ReducePrice</span>
    <input class="form-control" type="text" name="ReducePrice" value="{{ $sp->ReducePrice }}" placeholder="Nhập giá km" aria-label="Username" aria-describedby="basic-addon1">
    </div>
                        
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1158">
                    <button class="btn btn-primary" type="submit">Sửa</button>
                    
                  </div>
                      </div>
                    </div>
</form>
@endsection
