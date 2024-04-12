@extends('admin/layout')
@section('admin/content')
<form action="{{route('admin.hoadonnhap.storect')}}" method="post">
@csrf
<div class="tab-content rounded-bottom">


                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1272">
                      <label for="Hoadonnhap_id" class="control-label col-md-2">Hoadonnhap_id</label>
                      <div class="col-md-10">
                      <select name="Hoadonnhap_id" id="Hoadonnhap_id" class="form-control" v-model="nhanVien.Hoadonnhap_id">
                       @foreach ($db as $item)
                           <option value="{{ $item->id }}">{{ $item->id }}</option>
                          @endforeach
                          
                      </select> 
                            </div>

                            <label for="Sanpham_id" class="control-label col-md-2">Sanpham_id</label>
                      <div class="col-md-10">
                      <select name="Sanpham_id" id="Sanpham_id" class="form-control" v-model="nhanVien.Sanpham_id">
                       @foreach ($sp as $item)
                           <option value="{{ $item->id }}">{{ $item->Tensanpham }}</option>
                          @endforeach
                          
                      </select> 
                            </div>
                            <label for="Dongia">Dongia</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="Dongia">Dongia</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Dongia" aria-label="Username" aria-describedby="basic-addon1">
                        </div> 

                        <label for="Soluong">Số lượng</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="Soluong">Số lượng</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Soluong" aria-label="Username" aria-describedby="basic-addon1">
                        </div> 
            
                        
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1158">
                    <button class="btn btn-primary" type="submit">Them ct hóa đơn nhập</button>
                    
                  </div>
                      </div>
                    </div>
</form>
@endsection


