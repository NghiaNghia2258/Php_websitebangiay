<?php

namespace App\Http\Controllers;
use App\Models\nhanvienmodels;
use App\Models\tintucmodels;
use Illuminate\Http\Request;

class TinTucController extends Controller
{
    public function index(){
        $nv=nhanvienmodels::all();
        $db=tintucmodels::all();
        return view('admin.tintuc.index',['nv'=>$nv,'db'=>$db]);
    }
    public function create()
    {
        $nv=nhanvienmodels::all();
        $db=tintucmodels::all();
        return view('admin.tintuc.create',['nv'=>$nv,'db'=>$db]);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        tintucmodels::create($request -> all());
        return redirect() -> route('admin.tintuc.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $db = tintucmodels::find($id);
        return view('admin.tintuc.read', ['db'=>$db]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $nv = nhanvienmodels::all();
        $db = tintucmodels::find($id);
        return view('admin.tintuc.update', ['nv'=>$nv,'db'=>$db]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        tintucmodels::find($id) -> update(['Nhanvien_id' => $request->Nhanvien_id,'Ngaynhap' => $request->Ngaynhap,'Anh' => $request->Anh,'Mota' => $request->Mota,'Tentieude' => $request->Tentieude]);
        return redirect() -> route('admin.tintuc.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        tintucmodels::find($id) -> delete($id);
        return redirect() -> route('admin.tintuc.index');
    }
}
