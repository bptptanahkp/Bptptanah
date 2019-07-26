<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\PupukOrganik_Kompos_Cair;

class PupukOrganik_Kompos_CairController extends Controller
{
    //



     public function index()
    {
        $data = PupukOrganik_Kompos_Cair::all();
        return view ('admin.tarif_lab.pupuk_organik.index', compact('data'));
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

        PupukOrganik_Kompos_Cair::create($input);

        return redirect('tarifpupukorganik')->with('action','Data berhasil di tambah');
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
        $ed = PupukOrganik_Kompos_Cair::find($id);
        return view ('admin.tarif_lab.pupuk_organik.edit',compact('ed'));
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
        $ed = PupukOrganik_Kompos_Cair::findOrFail($id);
        $input = $request->all();
        
        $ed->update($input);
        return redirect('tarifpupukorganik')->with('action','Data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ed = PupukOrganik_Kompos_Cair::find($id);
        $ed->delete($ed);
        return redirect('tarifpupukorganik')->with('action','Data berhasil di hapus');
    }
}
