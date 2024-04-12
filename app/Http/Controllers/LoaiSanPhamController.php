<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loaisanphammodels;
use App\Models\sanphammodels;

class LoaiSanPhamController extends Controller
{
    public function index(){
        $db=loaisanphammodels::all();
        return view('admin.kart.index',['db'=>$db]);
    }

    public function create(){
        return view('admin.kart.create');
    }
    public function store(Request $request){
        loaisanphammodels::create($request->all());
        return redirect()->route('admin.kart.index');
    }

    // public function show(string $id){
    //     $db=loaisanphammodels::find($id);
    //     return $db;
    // }

    public function show(string $id)
{
    // $db =loaisanphammodels::findOrFail($id); // lấy dữ liệu theo id
    $db = loaisanphammodels::where('id', $id)->first();
    return view('admin.kart.read', ['db'=>$db]); // trả về view và truyền biến $data vào
}


    public function edit(string $id=''){
        // $db=loaisanphammodels::find($id); 
        $db = loaisanphammodels::where('id', $id)->first();//lấy dữ liệu theo mã loại và trả về dòng đầu tiên tìm thấy phù hợp với đk tìm kiếm
        return view('admin.kart.update',['db'=>$db]);
    }
    
    
    // public function update(Request $request,string $id){ 
    //     loaisanphammodels::find($id)->update([
    //     'Tenloai'=>$request->Tenloai,
    //     ]);
    //     return redirect()->route('admin.kart.index');
    // }

    public function update(Request $request, string $id)
    {
        loaisanphammodels::where('id', $id)->update([
            'Tenloai' => $request->input('Tenloai'),
            'updated_at' => now(),
        ]);
    
        return redirect()->route('admin.kart.index');
    }
    

    public function destroy(string $id){
        // loaisanphammodels::find($id)->delete();       
        loaisanphammodels::where('id', $id)->delete();    
        return redirect()->route('admin.kart.index');
    }
}
