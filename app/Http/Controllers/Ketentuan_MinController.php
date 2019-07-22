<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ketentuan_Min;

class Ketentuan_MinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Ketentuan_Min::all();
        return view ('admin.peraturan.ketentuan_minimal.index', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Ketentuan_Min::create($input);
        return redirect('ketentuanminimal')->with('action','Data berhasil di tambah');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ed = Ketentuan_Min::find($id);
        return view ('admin.peraturan.ketentuan_minimal.edit',compact('ed'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ed = Ketentuan_Min::findOrFail($id);
        $input = $request->all();
        
        $ed->update($input);
        return redirect('ketentuanminimal')->with('action','Data berhasil di edit');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ed = Ketentuan_Min::find($id);
        $ed->delete($ed);
        return redirect('ketentuanminimal')->with('action','Data berhasil di hapus');
    }
}