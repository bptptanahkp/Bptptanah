<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PengujianAir;

class PengujianAirController extends Controller
{
    //
      public function index()
    {
        $data = PengujianAir::paginate(10);
        return view ('admin.tarif_lab.pengujian_air.index', compact('data'));
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

        PengujianAir::create($input);

        return redirect('tarifpengujianair')->with('action','Data berhasil di tambah');
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
        $ed = PengujianAir::find($id);
        return view ('admin.tarif_lab.pengujian_air.edit',compact('ed'));
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
        $ed = PengujianAir::findOrFail($id);
        $input = $request->all();
        
        $ed->update($input);
        return redirect('tarifpengujianair')->with('action','Data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ed = PengujianAir::find($id);
        $ed->delete($ed);
        return redirect('tarifpengujianair')->with('action','Data berhasil di hapus');
    }
}
