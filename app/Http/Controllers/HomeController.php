<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loaisanphammodels;
use App\Models\sanphammodels;
use App\Models\tintucmodels; 
use App\Models\nhanvienmodels;
use App\Models\phanmemmodels;
// use App\Models\danhmucmodels;
class HomeController extends Controller
{
    public function index(){
        $loaisp=loaisanphammodels::all();
        $sp=sanphammodels::paginate(6);
        return view('home/index',['loaisp'=>$loaisp,'sp'=>$sp]);
    }
    public function shop($id=null){
        // $loaisp=loaisanphammodels::all();
        $loaisp = loaisanphammodels::where('id', '!=', 6)->get();
        // $dm=danhmucmodels::where('Maloai_id','=',$id)->get();
        $spall=sanphammodels::all();
        // $sp=sanphammodels::where('id','=',$id)->get();

        // if ($id) {
        //     $sp=sanphammodels::where('Maloai_id','=',$id)->get();
        // } else {
        //     $sp=sanphammodels::all();
        // }


        
        if ($id) {
            $sp = sanphammodels::where('Maloai_id', '=', $id)->paginate(9);
        } else {
            $sp = sanphammodels::paginate(9);
        }
        return view('home/shop',['loaisp'=>$loaisp,'sp'=>$sp]);
    }
    public function details($id=null){
        $loaisp=loaisanphammodels::all();
        // $sp=sanphammodels::all();
        $sp=sanphammodels::where('id','=',$id)->get();;
        return view('home/details',['loaisp'=>$loaisp,'sp'=>$sp]);
    }
    // public function cart(){
    //     $loaisp=loaisanphammodels::all();
    //     $sp=sanphammodels::all();
    //     return view('home/cart',['loaisp'=>$loaisp,'sp'=>$sp]);
    // }

    public function checkout(){
        $loaisp=loaisanphammodels::all();
        $sp=sanphammodels::all();
        return view('home/checkout',['loaisp'=>$loaisp,'sp'=>$sp]);
    }
    public function blog(){
        $loaisp=loaisanphammodels::all();
        $sp=sanphammodels::all();
        // $tt=tintucmodels::all();
        $tt = tintucmodels::with('nhanVien')->get(); // Lấy dữ liệu từ bảng TinTuc cùng với thông tin nhân viên
        // $tt = tintucmodels::with('nhanVien')->paginate(2);

       
        return view('home/blog',['loaisp'=>$loaisp,'sp'=>$sp,'tt'=>$tt]);
       
    }
    public function contactus(){
        $loaisp=loaisanphammodels::all();
        $sp=sanphammodels::all();
        return view('home/contactus',['loaisp'=>$loaisp,'sp'=>$sp]);
    }

    public function gioithieu(){
        return view('home/gioithieu');
    }

    public function phanmem(){
        $loaisp=loaisanphammodels::all();
        // $sp1 = sanphammodels::where('Maloai_id', 6)->get();
        $pm=phanmemmodels::paginate(6);
        // return view('home/phanmem',['loaisp'=>$loaisp,'sp1'=>$sp1]);
        return view('home/phanmem',['loaisp'=>$loaisp,'pm'=>$pm]);
       
    }
    public function lienhe(){
        return view('home/lienhe');
    }
}
