@extends('admin/layout')
@section('admin/content')
<form action="{{route('admin.hoadonnhap.store')}}" method="post">
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

                            <label for="Thanhtien">Thành tiền</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="Thanhtien">Thành tiền</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Thanhtien" aria-label="Username" aria-describedby="basic-addon1">
                        </div> 

                        <label for="Ngaynhap">Ngày nhập</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="Ngaynhap">Ngày nhập</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Ngaynhap" aria-label="Username" aria-describedby="basic-addon1">
                        </div> 
                       

                        <label for="Ncc_id" class="control-label col-md-2">Ncc_id</label>
                      <div class="col-md-10">
                      <select name="Ncc_id" id="Ncc_id" class="form-control" v-model="nhanVien.Ncc_id">
                       @foreach ($ncc as $item)
                           <option value="{{ $item->id }}">{{ $item->Tenncc }}</option>
                          @endforeach
                          
                      </select> 
                            </div>

                

                       

                        
                        
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1158">
                    <button class="btn btn-primary" type="submit">Them hóa đơn nhập</button>
                    
                  </div>
                      </div>
                    </div>
</form>
@endsection


