<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PeraturanPelanggan;
use App\Ketentuan_Min;
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
        $peraturan = PeraturanPelanggan::all();
        $ketentuan_min = Ketentuan_Min::all();

        $ankimtan = AnalisisKimiaTanah::all()->except([6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]);
        $pukorkom = PupukOrganik_Kompos_Cair::all();
        $pukkimia = Pupukkimia::all();
        $tanaman = Tanaman::all()->except([3,4,5,6]);
        $pengair = PengujianAir::all();


        $ankimtansub1 = AnalisisKimiaTanah::find(6);
        $ankimtansub1_1 = AnalisisKimiaTanah::find(7);
        $ankimtansub1_2 = AnalisisKimiaTanah::find(8);
        $ankimtansub2 = AnalisisKimiaTanah::find(9);
        $ankimtansub2_1 = AnalisisKimiaTanah::find(10);
        $ankimtansub2_2 = AnalisisKimiaTanah::find(11);
        $ankimtansub2_3 = AnalisisKimiaTanah::find(12);
        $ankimtansub3 = AnalisisKimiaTanah::find(13);
        $ankimtansub3_1 = AnalisisKimiaTanah::find(14);
        $ankimtansub3_2 = AnalisisKimiaTanah::find(15);
        $ankimtansub3_3 = AnalisisKimiaTanah::find(16);
        $ankimtansub4 = AnalisisKimiaTanah::find(17);
        $ankimtansub4_1 = AnalisisKimiaTanah::find(18);
        $ankimtansub4_2 = AnalisisKimiaTanah::find(19);
        $ankimtansub4_3 = AnalisisKimiaTanah::find(20);

        $tanamansub1 = Tanaman::find(3);
        $tanamansub1_1 = Tanaman::find(4);
        $tanamansub1_2 = Tanaman::find(5);
        $tanamansub1_3 = Tanaman::find(6);

        return view ('users.index',compact('peraturan','ankimtan','pukorkom','ketentuan_min',
            'pukkimia','tanaman','pengair','tanamansub1','tanamansub1_1','tanamansub1_2','tanamansub1_3',
            'ankimtansub1','ankimtansub1_1','ankimtansub1_2','ankimtansub2','ankimtansub2_1','ankimtansub2_2','ankimtansub2_3',
            'ankimtansub3','ankimtansub3_1','ankimtansub3_2','ankimtansub3_3',
            'ankimtansub4','ankimtansub4_1','ankimtansub4_2','ankimtansub4_3'));
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
        $input = $request->all();
        PemesananUser::create($input);
        return redirect('/*****')->with('berhasil','Pemesanan Berhasil ditambahkan');
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