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
use App\PemesananUser;
use App\PermintaanPelanggan;
use App\Transaksi;

use PDF;

use App\Http\Requests\PesanRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemesananuser = PemesananUser::all();

        $peraturan = PeraturanPelanggan::all();
        $ketentuan_min = Ketentuan_Min::all();

        $ankimtan = AnalisisKimiaTanah::all()->except([6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26]);
        $pukorkom = PupukOrganik_Kompos_Cair::all()->except([9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24]);
        $pukkimia = Pupukkimia::all()->except([6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,
        28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45]);
        $tanaman = Tanaman::all()->except([3,4,5,6,7,8,9,10,11,12,13,14]);
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
        $ankimtansub3_4 = AnalisisKimiaTanah::find(17);
        $ankimtansub3_5 = AnalisisKimiaTanah::find(18);
        $ankimtansub4 = AnalisisKimiaTanah::find(19);
        $ankimtansub4_1 = AnalisisKimiaTanah::find(20);
        $ankimtansub4_2 = AnalisisKimiaTanah::find(21);
        $ankimtansub4_3 = AnalisisKimiaTanah::find(22);
        $ankimtansub4_4 = AnalisisKimiaTanah::find(23);
        $ankimtansub4_5 = AnalisisKimiaTanah::find(24);
        $ankimtansub4_6 = AnalisisKimiaTanah::find(25);
        $ankimtansub4_7 = AnalisisKimiaTanah::find(26);

        $pupukorganiksub1 = PupukOrganik_Kompos_Cair::find(9);
        $pupukorganiksub1_1 = PupukOrganik_Kompos_Cair::find(10);
        $pupukorganiksub1_2 = PupukOrganik_Kompos_Cair::find(11);
        $pupukorganiksub1_3 = PupukOrganik_Kompos_Cair::find(12);
        $pupukorganiksub1_4 = PupukOrganik_Kompos_Cair::find(13);
        $pupukorganiksub1_5 = PupukOrganik_Kompos_Cair::find(14);
        $pupukorganiksub1_6 = PupukOrganik_Kompos_Cair::find(15);
        $pupukorganiksub1_7 = PupukOrganik_Kompos_Cair::find(16);
        $pupukorganiksub1_8 = PupukOrganik_Kompos_Cair::find(17);
        $pupukorganiksub1_9 = PupukOrganik_Kompos_Cair::find(18);
        $pupukorganiksub1_10 = PupukOrganik_Kompos_Cair::find(19);
        $pupukorganiksub1_11 = PupukOrganik_Kompos_Cair::find(20);
        $pupukorganiksub1_12 = PupukOrganik_Kompos_Cair::find(21);
        $pupukorganiksub1_13 = PupukOrganik_Kompos_Cair::find(22);
        $pupukorganiksub2 = PupukOrganik_Kompos_Cair::find(23);
        $pupukorganiksub2_1 = PupukOrganik_Kompos_Cair::find(24);

        $pupukkimiasub1 = Pupukkimia::find(6);
        $pupukkimiasub1_1 = Pupukkimia::find(7);
        $pupukkimiasub1_2 = Pupukkimia::find(8);
        $pupukkimiasub1_3 = Pupukkimia::find(9);
        $pupukkimiasub1_4 = Pupukkimia::find(10);
        $pupukkimiasub1_5 = Pupukkimia::find(11);
        $pupukkimiasub1_6 = Pupukkimia::find(12);
        $pupukkimiasub1_7 = Pupukkimia::find(13);
        $pupukkimiasub1_8 = Pupukkimia::find(14);
        $pupukkimiasub1_9 = Pupukkimia::find(15);
        $pupukkimiasub1_10 = Pupukkimia::find(16);
        $pupukkimiasub1_11 = Pupukkimia::find(17);
        $pupukkimiasub1_12 = Pupukkimia::find(18);
        $pupukkimiasub1_13 = Pupukkimia::find(19);
        $pupukkimiasub2 = Pupukkimia::find(20);
        $pupukkimiasub2_1 = Pupukkimia::find(21);
        $pupukkimiasub2_2 = Pupukkimia::find(22);
        $pupukkimiasub2_3 = Pupukkimia::find(23);
        $pupukkimiasub2_4 = Pupukkimia::find(24);
        $pupukkimiasub2_5 = Pupukkimia::find(25);
        $pupukkimiasub2_6 = Pupukkimia::find(26);
        $pupukkimiasub2_7 = Pupukkimia::find(27);
        $pupukkimiasub2_8 = Pupukkimia::find(28);
        $pupukkimiasub2_9 = Pupukkimia::find(29);
        $pupukkimiasub2_10 = Pupukkimia::find(30);
        $pupukkimiasub2_11 = Pupukkimia::find(31);
        $pupukkimiasub2_12 = Pupukkimia::find(32);
        $pupukkimiasub2_13 = Pupukkimia::find(33);
        $pupukkimiasub3 = Pupukkimia::find(34);
        $pupukkimiasub3_1 = Pupukkimia::find(35);
        $pupukkimiasub3_2 = Pupukkimia::find(36);
        $pupukkimiasub3_3 = Pupukkimia::find(37);
        $pupukkimiasub3_4 = Pupukkimia::find(38);
        $pupukkimiasub3_5 = Pupukkimia::find(39);
        $pupukkimiasub3_6 = Pupukkimia::find(40);
        $pupukkimiasub3_7 = Pupukkimia::find(41);
        $pupukkimiasub3_8 = Pupukkimia::find(42);
        $pupukkimiasub3_9 = Pupukkimia::find(43);
        $pupukkimiasub3_10 = Pupukkimia::find(44);
        $pupukkimiasub3_11 = Pupukkimia::find(45);

        $tanamansub1 = Tanaman::find(3);
        $tanamansub1_1 = Tanaman::find(4);
        $tanamansub1_2 = Tanaman::find(5);
        $tanamansub1_3 = Tanaman::find(6);
        $tanamansub1_4 = Tanaman::find(7);
        $tanamansub1_5 = Tanaman::find(8);
        $tanamansub1_6 = Tanaman::find(9);
        $tanamansub1_7 = Tanaman::find(10);
        $tanamansub1_8 = Tanaman::find(11);
        $tanamansub1_9 = Tanaman::find(12);
        $tanamansub1_10 = Tanaman::find(13);
        $tanamansub1_11 = Tanaman::find(14);

        
        return view ('users.index',compact('pemesananuser','peraturan','ankimtan','pukorkom','ketentuan_min',
            'pukkimia','tanaman','pengair',
            'ankimtansub1','ankimtansub1_1','ankimtansub1_2','ankimtansub2','ankimtansub2_1','ankimtansub2_2','ankimtansub2_3',
            'ankimtansub3','ankimtansub3_1','ankimtansub3_2','ankimtansub3_3', 'ankimtansub3_4','ankimtansub3_5',
            'ankimtansub4','ankimtansub4_1','ankimtansub4_2','ankimtansub4_3' ,'ankimtansub4_4' ,'ankimtansub4_5' ,'ankimtansub4_6' ,'ankimtansub4_7',
            'pupukorganiksub1','pupukorganiksub1_1','pupukorganiksub1_2','pupukorganiksub1_3', 'pupukorganiksub1_4','pupukorganiksub1_5','pupukorganiksub1_6','pupukorganiksub1_7', 'pupukorganiksub1_8','pupukorganiksub1_9','pupukorganiksub1_10','pupukorganiksub1_11',
                'pupukorganiksub1_12', 'pupukorganiksub1_13',
            'pupukorganiksub2','pupukorganiksub2_1',
            'pupukkimiasub1','pupukkimiasub1_1','pupukkimiasub1_2','pupukkimiasub1_3', 'pupukkimiasub1_4','pupukkimiasub1_5','pupukkimiasub1_6','pupukkimiasub1_7', 'pupukkimiasub1_8','pupukkimiasub1_9','pupukkimiasub1_10','pupukkimiasub1_11', 'pupukkimiasub1_12','pupukkimiasub1_13',
            'pupukkimiasub2','pupukkimiasub2_1','pupukkimiasub2_2','pupukkimiasub2_3', 'pupukkimiasub2_4','pupukkimiasub2_5','pupukkimiasub2_6','pupukkimiasub2_7', 'pupukkimiasub2_8','pupukkimiasub2_9','pupukkimiasub2_10','pupukkimiasub2_11', 'pupukkimiasub2_12','pupukkimiasub2_13',
            'pupukkimiasub3','pupukkimiasub3_1','pupukkimiasub3_2','pupukkimiasub3_3', 'pupukkimiasub3_4','pupukkimiasub3_5','pupukkimiasub3_6','pupukkimiasub3_7', 'pupukkimiasub3_8','pupukkimiasub3_9','pupukkimiasub3_10','pupukkimiasub3_11',
            'tanamansub1','tanamansub1_1','tanamansub1_2','tanamansub1_3', 'tanamansub1_4','tanamansub1_5','tanamansub1_6','tanamansub1_7', 'tanamansub1_8','tanamansub1_9','tanamansub1_10','tanamansub1_11'
        ));
    }

    public function hasilpesan($id)
    {
        $pesan = PemesananUser::find($id);
        return view('users.pesan.hasilpesan',compact('pesan'));
    }

    public function cetak_pdf($id)
    {
        $pesan = PemesananUser::find($id);

        $pdf = PDF::loadview('hasilpesan_pdf',compact('pesan'));
        return $pdf->stream();
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
        $datauser = $request->all();
        $lastid = PemesananUser::create($datauser)->id;

        $transaksi = new Transaksi;
        $transaksi->pemesanan_id = $lastid;
        $transaksi->nama = $request->nama;
        $transaksi->save();

        if ($request->id_ankimtan)
        {
            foreach($request->id_ankimtan as $item=>$v){
                    $harga = AnalisisKimiaTanah::find($v)->tarif;
                    $data2=([
                        'pemesanan_id'=>$lastid,
                        'id_ankimtan'=>$request->id_ankimtan[$item],
                        'harga' =>$harga,
                        ]); 
                        
                        PermintaanPelanggan::create($data2);
            }
        }
        
            
        if ($request->id_pupukorganik) {
            
            foreach ($request->id_pupukorganik as $item => $v) {
                $harga = PupukOrganik_Kompos_Cair::find($v)->tarif;
                $data2=([
                    'pemesanan_id'=>$lastid,
                    'id_pupukorganik'=>$request->id_pupukorganik[$item],
                    'harga' =>$harga,
                    ]); 

                    PermintaanPelanggan::create($data2);
                }
        }  
            

        $hargaankimtan = 0;
        foreach((array)$request->id_ankimtan as $nama=>$v) {
            $tarifankimtan = AnalisisKimiaTanah::find($v);
            $hargaankimtan += $tarifankimtan['tarif'];
        } 

        $hargapukorkom = 0;
        foreach((array)$request->id_pupukorganik as $nama=>$v) {
            $tarifpukorkom = PupukOrganik_Kompos_Cair::find($v);
            $hargapukorkom += $tarifpukorkom['tarif'];
        }   

        $transak = Transaksi::where('pemesanan_id',$lastid)->get();
        $totalHarga = $hargaankimtan+$hargapukorkom;
        $transaksi->update(['totalHarga' => $totalHarga]);

       
        return redirect('hasilpesan/'.$lastid);

        // $transaksifix = Transaksi::where('pemesanan_id',$lastid);

        //     return redirect('hasilpesan.id, ['id' =>]')->with('berhasil','Pemesanan Berhasil ditambahkan');
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
