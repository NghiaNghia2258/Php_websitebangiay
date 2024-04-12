<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sanphammodels;
use App\Models\nhanvienmodels;
use App\Models\nhacungcapmodels;
use App\Models\hoadonnhapmodels;
use App\Models\cthdnmodels;
use Illuminate\Support\Facades\DB;
class HoaDonNhapController extends Controller
{
    public function index(){
        $db=hoadonnhapmodels::all();
        return view('admin.hoadonnhap.index',['db'=>$db]);
    }

    // public function chitiet($id=1){
    //     $db=hoadonnhapmodels::find($id);
    //     $chitiet=cthdnmodels::where('Hoadonnhap_id',$id)->get();
    //     return view('admin.hoadonnhap.chitiet',['db'=>$db,'chitiet'=>$chitiet]);
    // }

    public function chitiet($id=1){
        $db=hoadonnhapmodels::find($id);
        $chitiet=cthdnmodels::where('Hoadonnhap_id',$id)->get();
       
        return view('admin.hoadonnhap.chitiet',['db'=>$db,'chitiet'=>$chitiet]);
    }

    public function create()
     {   
        $db=hoadonnhapmodels::all();
        $nv=nhanvienmodels::all();
        $ncc=nhacungcapmodels::all();
        return view('admin.hoadonnhap.create',['nv'=>$nv,'db'=>$db,'ncc'=>$ncc]);
        

       
    }


    public function createct()
    {    
        
        $ct=cthdnmodels::all();
        $sp=sanphammodels::all();
        $db=hoadonnhapmodels::all();
        $nv=nhanvienmodels::all();
        $ncc=nhacungcapmodels::all();
       
        return view('admin.hoadonnhap.createct',['nv'=>$nv,'db'=>$db,'ncc'=>$ncc,'sp'=>$sp,'ct'=>$ct]);
        //
    }

    public function storect(Request $request)
    {
        cthdnmodels::create($request -> all());
        $sanPham = sanphammodels::find($request->Sanpham_id);
        
    // cập nhật số lượng sản phẩm trong kho
        $sanPham->Soluong += $request->Soluong;
    // lưu lại thông tin sản phẩm
        $sanPham->save();
        return redirect() -> route('admin.hoadonnhap.chitiet');
    }

//  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        hoadonnhapmodels::create($request -> all());
         return redirect() -> route('admin.hoadonnhap.index');
       
    }
    
}
