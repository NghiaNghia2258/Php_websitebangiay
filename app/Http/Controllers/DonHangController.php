<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donhangmodels;
use App\Models\ctdhmodels;
class DonHangController extends Controller
{
    public function index(){
        $db=donhangmodels::all();
        return view('admin.donhang.index',['db'=>$db]);
    }

    public function chitiet($id=1){
        $db=donhangmodels::find($id);
        $chitiet=ctdhmodels::where('Donhang_id',$id)->get();
        return view('admin.donhang.chitiet',['db'=>$db,'chitiet'=>$chitiet]);
    }
}
