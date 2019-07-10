<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AnalisisKimiaTanah;
use App\PupukOrganik_Kompos_Cair;
use App\Pupukkimia;
use App\Tanaman;
use App\PengujianAir;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ankimtan = AnalisisKimiaTanah::all();
        $pukorkom = PupukOrganik_Kompos_Cair::all();
        $pukkimia = Pupukkimia::all();
        $tanaman = Tanaman::all()->except([3,4,5,6]);
        $pengair = PengujianAir::all();


        $sub1 = Tanaman::find(3);
        $sub1_1 = Tanaman::find(4);
        $sub1_2 = Tanaman::find(5);
        $sub1_3 = Tanaman::find(6);

        return view ('users.index',compact('ankimtan','pukorkom',
            'pukkimia','tanaman','pengair','sub1','sub1_1','sub1_2','sub1_3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
