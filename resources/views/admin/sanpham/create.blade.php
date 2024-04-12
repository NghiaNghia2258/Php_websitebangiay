@extends('admin/layout')
@section('admin/content')
<form action="{{route('admin.sanpham.store')}}" method="post">
@csrf
<div class="tab-content rounded-bottom">


                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1272">
                      <label for="Maloai_id" class="control-label col-md-2">Maloai_id</label>
                      <div class="col-md-10">
                      <select name="Maloai_id" id="Maloai_id" class="form-control" v-model="sanPham.Maloai_id">
                       @foreach ($db as $item)
                           <option value="{{ $item->id }}">{{ $item->Tenloai }}</option>
                          @endforeach
                          
                      </select> 
                            </div>

                        <label for="Tensanpham">Tên sản phẩm</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="Tensanpham">Tên sản phẩm</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Tensanpham" aria-label="Username" aria-describedby="basic-addon1">
                        </div> 
                        <!-- <label for="Anh">Ảnh</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="Anh">Ảnh</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Anh" aria-label="Username" aria-describedby="basic-addon1">
                        </div> -->

                        <label for="Anh">Ảnh</label>
                        <div class="input-group mb-3">
                        <input type="file" class="form-control" name="Anh" accept="image/*">
                        </div>

                        <label for="hoten">Số lượng</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="Soluong">Số lượng</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Soluong" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <label for="Gia">Giá </label>
                        <div class="input-group mb-3"><span class="input-group-text" id="Gia">Giá</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Gia" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <label for="Mota">Mô tả</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="Mota">Mô tả</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Mota" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                       

                        <label for="Giakhuyenmai">Giá khuyến mại</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="Giakhuyenmai">Giá khuyến mại</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Giakhuyenmai" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <label for="Viewcount">Viewcount</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="Viewcount">Viewcount</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Viewcount" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <label for="ReducePrice">ReducePrice</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="ReducePrice">ReducePrice</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="ReducePrice" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1158">
                    <button class="btn btn-primary" type="submit">Thêm</button>
                    
                  </div>
                      </div>
                    </div>
</form>
@endsection


