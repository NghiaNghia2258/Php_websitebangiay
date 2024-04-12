<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nhacungcapmodels;
class NCCController extends Controller
{
    public function index(){
        $db=nhacungcapmodels::all();
        return view('admin.nhacungcap.index',['db'=>$db]);
    }
    public function create()
    {
        return view('admin.nhacungcap.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        nhacungcapmodels::create($request -> all());
        return redirect() -> route('admin.nhacungcap.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $db = nhacungcapmodels::find($id);
        return view('admin.nhacungcap.read', ['db'=>$db]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $db = nhacungcapmodels::find($id);
        return view('admin.nhacungcap.update', ['db' => $db]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        nhacungcapmodels::find($id) -> update(['Tenncc' => $request->Tenncc,'Diachi' => $request->Diachi,'Sdt' => $request->Sdt]);
        return redirect() -> route('admin.nhacungcap.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        nhacungcapmodels::find($id) -> delete($id);
        return redirect() -> route('admin.nhacungcap.index');
    }



}
