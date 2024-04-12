@extends('admin/layout')
@section('admin/content')
<form action="{{route('admin.user.update',['id' => $db->id])}}" method="post">
@csrf
    <div class="tab-content rounded-bottom">
    <label for="name">Tên người dùng</label>
    <div class="input-group mb-3">
    <span class="input-group-text" id="name">Tên người dùng</span>
    <input class="form-control" type="text" placeholder="Nhập" name="name" value="{{ $db->name }}" aria-label="Username" aria-describedby="basic-addon1" readonly>
    </div>
    <label for="email">Email</label>
        <div class="input-group mb-3">
       <span class="input-group-text" id="email">Email</span>
    <input class="form-control" type="text" name="email" value="{{ $db->email }}" placeholder="Nhập email" aria-label="Username" aria-describedby="basic-addon1">
          </div>

          <!-- <label for="role">Role</label>
        <div class="input-group mb-3">
       <span class="input-group-text" id="role">Role</span>
    <input class="form-control" type="text" name="role" value="{{ $db->role }}" placeholder="Nhập role" aria-label="Username" aria-describedby="basic-addon1">
          </div> -->

          <label for="role">Role</label>
<div class="input-group mb-3">
    <span class="input-group-text" id="role">Role</span>
    <select class="form-select" name="role" aria-label="Role">
        <option value="admin" @if($db->role == 'admin') selected @endif>Admin</option>
        <option value="user" @if($db->role == 'user') selected @endif>User</option>
    </select>
</div>


          <label for="password">Password</label>
        <div class="input-group mb-3">
       <span class="input-group-text" id="password">Password</span>
    <input class="form-control" type="text" name="password" value="{{ $db->password }}" placeholder="Nhập password" aria-label="Username" aria-describedby="basic-addon1">
          </div>

                        
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1158">
                    <button class="btn btn-primary" type="submit">Sửa</button>
                    
                  </div>
                      </div>
                    </div>
</form>
@endsection
