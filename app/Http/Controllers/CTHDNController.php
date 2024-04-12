<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sanphammodels;
use App\Models\nhanvienmodels;
use App\Models\nhacungcapmodels;
use App\Models\hoadonnhapmodels;
use App\Models\cthdnmodels;

class CTHDNController extends Controller
{
    public function index(){
        $ct=cthdnmodels::all();
        return view('admin.hoadonnhap.index',['ct'=>$ct]);
    }
    public function create()
    {    $ct=cthdnmodels::all();
         $sp=sanphammodels::all();
        $db=hoadonnhapmodels::all();
        $nv=nhanvienmodels::all();
        $ncc=nhacungcapmodels::all();
        return view('admin.hoadonnhap.create',['nv'=>$nv,'db'=>$db,'ncc'=>$ncc,'sp'=>$sp,'ct'=>$ct]);
        //
    }

    public function store(Request $request)
    {
        cthdnmodels::create($request -> all());
        return redirect() -> route('admin.hoadonnhap.index');
    }
}
