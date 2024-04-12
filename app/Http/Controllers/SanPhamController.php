<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loaisanphammodels;
use App\Models\sanphammodels;

class SanPhamController extends Controller
{
    public function index(){
        $db=loaisanphammodels::all();
        $sp=sanphammodels::all();
        return view('admin.sanpham.index',['db'=>$db,'sp'=>$sp]);
    }

    public function create(){
        $db = loaisanphammodels::all();
        $sp = sanphammodels::all();
         return view('admin.sanpham.create', ['db'=>$db,'sp'=>$sp]);
    }
    public function store(Request $request){
        // loaisanphammodels::create($request->all());
        sanphammodels::create($request->all());
        return redirect()->route('admin.sanpham.index');
    }


    public function edit(string $id=''){
       
        $db = loaisanphammodels::all();
        $sp = sanphammodels::where('id', $id)->first();
        return view('admin.sanpham.update',['db'=>$db,'sp'=>$sp]);
    }
    
    

    public function update(Request $request, string $id)
    {
        sanphammodels::where('id', $id)->update([

            
            'Maloai_id'=> $request->input('Maloai_id'), 
            'Tensanpham'=> $request->input('Tensanpham'), 
            'Anh'=> $request->input('Anh'), 
            'Soluong'=> $request->input('Soluong'), 
            'Gia'=> $request->input('Gia'), 
            'Maluc'=> $request->input('Maluc'), 
            'PhanKhuc'=> $request->input('PhanKhuc'), 
            'VongTuaMay'=> $request->input('VongTuaMay'), 
            'MoMenXoan'=> $request->input('MoMenXoan'), 
            'Giakhuyenmai'=> $request->input('Giakhuyenmai'), 
            'Viewcount'=> $request->input('Viewcount'), 
            'ReducePrice'=> $request->input('ReducePrice'),
            'updated_at' => now(),
        ]);
    
        return redirect()->route('admin.sanpham.index');
    }

    public function show(string $id)
    {
        // $db =loaisanphammodels::findOrFail($id); // lấy dữ liệu theo id
        $sp = sanphammodels::where('id', $id)->first();
        return view('admin.sanpham.read', ['sp'=>$sp]); // trả về view và truyền biến $data vào
    }

    public function destroy(string $id){
        // loaisanphammodels::find($id)->delete();       
        sanphammodels::where('id', $id)->delete();    
        return redirect()->route('admin.sanpham.index');
    }
}
