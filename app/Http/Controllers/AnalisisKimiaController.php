<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AnalisisKimiaTanah;
use Illuminate\Support\Facades\DB;

class AnalisisKimiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AnalisisKimiaTanah::all();
        return view ('admin.tarif_lab.analisis_kimia.index', compact('data'));
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

    public function search(Request $request)
    {
        $search = $request->get('search');
        $data = AnalisisKimiaTanah::all()->where('jenis_uji','like','%'.$search.'%');
        return view('admin.tarif_lab.analisis_kimia.index', compact('data'));
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

        AnalisisKimiaTanah::create($input);

        return redirect('tarifanalisiskimia')->with('action','Data berhasil di tambah');
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
        $ed = AnalisisKimiaTanah::find($id);
        return view ('admin.tarif_lab.analisis_kimia.edit',compact('ed'));
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
        $ed = AnalisisKimiaTanah::findOrFail($id);
        $input = $request->all();
        
        $ed->update($input);
        return redirect('tarifanalisiskimia')->with('action','Data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ed = AnalisisKimiaTanah::find($id);
        $ed->delete($ed);
        return redirect('tarifanalisiskimia')->with('action','Data berhasil di hapus');
    }
}