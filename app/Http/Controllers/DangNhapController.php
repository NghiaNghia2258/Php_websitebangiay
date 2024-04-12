<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class DangNhapController extends Controller
{
    public function index(){
        $db=User::all();
        return view('admin.user.index',['db'=>$db]);
    }

    public function create(){
        return view('admin.user.create');
    }
    public function store(Request $request){
        User::create($request->all());
        return redirect()->route('admin.user.index');
    }

    // public function show(string $id){
    //     $db=User::find($id);
    //     return $db;
    // }

    public function show(string $id)
{
    // $db =User::findOrFail($id); // lấy dữ liệu theo id
    $db = User::where('id', $id)->first();
    return view('admin.user.read', ['db'=>$db]); // trả về view và truyền biến $data vào
}


    public function edit(string $id=''){
        // $db=User::find($id); 
        $db = User::where('id', $id)->first();//lấy dữ liệu theo mã loại và trả về dòng đầu tiên tìm thấy phù hợp với đk tìm kiếm
        return view('admin.user.update',['db'=>$db]);
    }
    
    
    // public function update(Request $request,string $id){ 
    //     User::find($id)->update([
    //     'Tenloai'=>$request->Tenloai,
    //     ]);
    //     return redirect()->route('admin.user.index');
    // }

    public function update(Request $request, string $id)
    {
        User::where('id', $id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
            'password' => $request->input('password'),
            'updated_at' => now(),
        ]);
    
        return redirect()->route('admin.user.index');
    }
    

    public function destroy(string $id){
        // User::find($id)->delete();       
        User::where('id', $id)->delete();    
        return redirect()->route('admin.user.index');
    }
}
