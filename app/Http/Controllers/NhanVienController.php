<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nhanvienmodels;

class NhanVienController extends Controller
{
    public function index(){
        $db=nhanvienmodels::all();
        return view('admin.nhanvien.index',['db'=>$db]);
    }
    public function create()
    {
        return view('admin.nhanvien.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        nhanvienmodels::create($request -> all());
        return redirect() -> route('admin.nhanvien.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $db = nhanvienmodels::find($id);
        return view('admin.nhanvien.read', ['db'=>$db]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $db = nhanvienmodels::find($id);
        return view('admin.nhanvien.update', ['db' => $db]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //'Nhanvien_id', 'Tennhanvien', 'Ngaysinh', 'Sdt', 'Diachi', 'Email', 'Anh'
        nhanvienmodels::find($id) -> update(['Tennhanvien' => $request->Tennhanvien,'Ngaysinh' => $request->Ngaysinh,'Sdt' => $request->Sdt,'Diachi' => $request->Diachi,'Email' => $request->Email,'Anh' => $request->Anh]);
        return redirect() -> route('admin.nhanvien.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        nhanvienmodels::find($id) -> delete($id);
        return redirect() -> route('admin.nhanvien.index');
    }
}
