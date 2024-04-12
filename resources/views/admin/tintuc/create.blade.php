@extends('admin/layout')
@section('admin/content')
<form action="{{route('admin.tintuc.store')}}" method="post">
@csrf
<div class="tab-content rounded-bottom">


                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1272">
                      <label for="Nhanvien_id" class="control-label col-md-2">Nhanvien_id</label>
                      <div class="col-md-10">
                      <select name="Nhanvien_id" id="Nhanvien_id" class="form-control" v-model="nhanVien.Nhanvien_id">
                       @foreach ($nv as $item)
                           <option value="{{ $item->id }}">{{ $item->Tennhanvien }}</option>
                          @endforeach
                          
                      </select> 
                            </div>

                        <label for="Ngaynhap">Ngày nhập</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="Ngaynhap">Ngày nhập</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Ngaynhap" aria-label="Username" aria-describedby="basic-addon1">
                        </div> 
                        <!-- <label for="Anh">Ảnh</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="Anh">Ảnh</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Anh" aria-label="Username" aria-describedby="basic-addon1">
                        </div> -->

                        <label for="Anh">Ảnh</label>
                        <div class="input-group mb-3">
                        <input type="file" class="form-control" name="Anh" accept="image/*">
                        </div>

                

                        <label for="Mota">Mô tả</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="Mota">Mô tả</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Mota" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <label for="Tentieude">Tên tiêu đề</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="Tentieude">Tên tiêu đề</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Tentieude" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        
                        
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1158">
                    <button class="btn btn-primary" type="submit">Them tin tức</button>
                    
                  </div>
                      </div>
                    </div>
</form>
@endsection


