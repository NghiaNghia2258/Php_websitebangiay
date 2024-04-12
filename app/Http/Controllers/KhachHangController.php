<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\khachhangmodels;
class KhachHangController extends Controller
{
    public function index(){
        $db=khachhangmodels::all();
        return view('admin.khachhang.index',['db'=>$db]);
    }
    public function create()
    {
        return view('admin.khachhang.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        khachhangmodels::create($request -> all());
        return redirect() -> route('admin.khachhang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $db = khachhangmodels::find($id);
        return view('admin.khachhang.read', ['db'=>$db]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $db = khachhangmodels::find($id);
        return view('admin.khachhang.update', ['db' => $db]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        khachhangmodels::find($id) -> update(['Tenkhachhang' => $request->Tenkhachhang,'Anhdaidien' => $request->Anhdaidien,'Ngaysinh' => $request->Ngaysinh,'Sdt' => $request->Sdt,'Diachi' => $request->Diachi,'Email' => $request->Email]);
        return redirect() -> route('admin.khachhang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        khachhangmodels::find($id) -> delete($id);
        return redirect() -> route('admin.khachhang.index');
    }
}
