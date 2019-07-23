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

        $ankimtan = AnalisisKimiaTanah::all()->except([6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]);
        $pukorkom = PupukOrganik_Kompos_Cair::all()->except([9,10,11,12,13,14]);
        $pukkimia = Pupukkimia::all()->except([6,7,8,9,10,11,12,13,14,15,16,17]);
        $tanaman = Tanaman::all()->except([3,4,5,6]);
        $pengair = PengujianAir::all()->except([3,4]);


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

        $pupukorganiksub1 = PupukOrganik_Kompos_Cair::find(9);
        $pupukorganiksub1_1 = PupukOrganik_Kompos_Cair::find(10);
        $pupukorganiksub1_2 = PupukOrganik_Kompos_Cair::find(11);
        $pupukorganiksub1_3 = PupukOrganik_Kompos_Cair::find(12);
        $pupukorganiksub2 = PupukOrganik_Kompos_Cair::find(13);
        $pupukorganiksub2_1 = PupukOrganik_Kompos_Cair::find(14);

        $pupukkimiasub1 = Pupukkimia::find(6);
        $pupukkimiasub1_1 = Pupukkimia::find(7);
        $pupukkimiasub1_2 = Pupukkimia::find(8);
        $pupukkimiasub1_3 = Pupukkimia::find(9);
        $pupukkimiasub2 = Pupukkimia::find(10);
        $pupukkimiasub2_1 = Pupukkimia::find(11);
        $pupukkimiasub2_2 = Pupukkimia::find(12);
        $pupukkimiasub2_3 = Pupukkimia::find(13);
        $pupukkimiasub3 = Pupukkimia::find(14);
        $pupukkimiasub3_1 = Pupukkimia::find(15);
        $pupukkimiasub3_2 = Pupukkimia::find(16);
        $pupukkimiasub3_3 = Pupukkimia::find(17);

        $tanamansub1 = Tanaman::find(3);
        $tanamansub1_1 = Tanaman::find(4);
        $tanamansub1_2 = Tanaman::find(5);
        $tanamansub1_3 = Tanaman::find(6);

        $pengujianairsub1 = PengujianAir::find(3);
        $pengujianairsub2 = PengujianAir::find(4);

        return view ('users.index',compact('pemesananuser','peraturan','ankimtan','pukorkom','ketentuan_min',
            'pukkimia','tanaman','pengair',
            'ankimtansub1','ankimtansub1_1','ankimtansub1_2',
            'ankimtansub2','ankimtansub2_1','ankimtansub2_2','ankimtansub2_3',
            'ankimtansub3','ankimtansub3_1','ankimtansub3_2','ankimtansub3_3',
            'ankimtansub4','ankimtansub4_1','ankimtansub4_2','ankimtansub4_3',
            'pupukorganiksub1','pupukorganiksub1_1','pupukorganiksub1_2','pupukorganiksub1_3',
            'pupukorganiksub2','pupukorganiksub2_1',
            'pupukkimiasub1','pupukkimiasub1_1','pupukkimiasub1_2','pupukkimiasub1_3',
            'pupukkimiasub2','pupukkimiasub2_1','pupukkimiasub2_2','pupukkimiasub2_3',
            'pupukkimiasub3','pupukkimiasub3_1','pupukkimiasub3_2','pupukkimiasub3_3',
            'tanamansub1','tanamansub1_1','tanamansub1_2','tanamansub1_3',
            'pengujianairsub1','pengujianairsub2'
        ));
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
        // $datauser = (['nama' => $request->get('nama'),
        //             'instansi' => $request->get('instansi'),
        //             'alamat' => $request->get('alamat'),
        //             'ntelp' => $request->get('ntelp'),
        //             'contohygdianalisis' => $request->get('contohygdianalisis'),
        //             'unsurygdianalisis' => $request->get('unsurygdianalisis'),
        //             'jml_contoh' => $request->get('jml_contoh'),
        //             'bentuk' => $request->get('bentuk'),
        //             'asal_contoh' => $request->get('asal_contoh'),
        //             'merk' => $request->get('merk'),
        //          ]);

            $datauser = $request->all();
            $lastid = PemesananUser::create($datauser)->id;
            if(count($request->id_ankimtan) > 0)
            {
                foreach($request->id_ankimtan as $item=>$v){
                    // $ankimtan = new AnalisisKimiaTanah;
                    // $ankimtan = AnalisisKimiaTanah::find($item);
                    // $harga = $ankimtan->tarif;
                    $data2=array(
                        'pemesanan_id'=>$lastid,
                        'id_ankimtan'=>$request->id_ankimtan[$item],
                        // 'harga'=>$harga,
                        
                    );  
                    PermintaanPelanggan::insert($data2);
                }
            }
        $permintaan = (['id_pupukkimia' => $request->get('id_pupukkimia'),
                        'id_pupukorganik' => $request->get('id_pupukorganik'),
                        'id_tanaman' => $request->get('id_tanaman'),
                        'id_pengujianair' => $request->get('id_pengujianair'),
                        'harga' => $request->get('harga'),
        ]);


        

        foreach($request->id_ankimtan as $id){
            $check = new PermintaanPelanggan;
            $check->id_ankimtan = $request->id_ankimtan;
            $ankimtan = new AnalisisKimiaTanah;
            $ankimtan = AnalisisKimiaTanah::find($id);
            $check->harga = $ankimtan->tarif;
            $check->ntelp = $request->ntelp;
            // $check->save();
        }

        $transaksi = new Transaksi;
        $transaksi->nama = $request->nama;
        // $transaksi->save();

        // foreach($request->nomorSPA as $nomorSPA){
        //     $transaksi = new Transaksi;
        //     $
        // }

        // $checkboxunsur = new PermintaanPelanggan;
        // $checkboxunsur->unsuryangdipilih = implode(",",$request->unsuryangdipilih);
        // $checkboxunsur->save();
        
        // PemesananUser::create($datauser);
        // Transaksi::create($transaksi);
        return redirect('/')->with('berhasil','Pemesanan Berhasil ditambahkan');
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
