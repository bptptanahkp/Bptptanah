<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Transaksi;
use App\Saran;
use App\AnalisisKimiaTanah;
use App\Pupukkimia;
use App\PupukOrganik_Kompos_Cair;
use App\PengujianAir;
use App\Tanaman;
use App\PeraturanPelanggan;
use App\Ketentuan_Min;
use App\PermintaanPelanggan;

class SuperadminController extends Controller
{
    public function admin(){
        $user = User::all();
        $transaksi = Transaksi::all()->count();
        $saran = Saran::all()->count();

        return view ('superadmin.index', compact('user','transaksi','saran'));
    }

    public function analisiskimia()
    {
        $data = AnalisisKimiaTanah::all();
        return view ('superadmin.tarif_lab.analisis_kimia.index', compact('data'));
    }

    public function pupukkimia()
    {
        $data = Pupukkimia::all();
        return view ('superadmin.tarif_lab.pupuk_kimia.index', compact('data'));
    }

    public function pupukorganik()
    {
        $data = PupukOrganik_Kompos_Cair::all();
        return view ('superadmin.tarif_lab.pupuk_organik.index', compact('data'));
    }

    public function pengujianair()
    {
        $data = PengujianAir::all();
        return view ('superadmin.tarif_lab.pengujian_air.index', compact('data'));
    }

    public function tanaman()
    {
        $data = Tanaman::all();
        return view ('superadmin.tarif_lab.tanaman.index', compact('data'));
    }
    
    public function peraturanpelanggan()
    {
        $data = PeraturanPelanggan::all();
        return view ('superadmin.peraturan.peraturan_pelanggan.index', compact('data'));
    }

    public function ketentuanminimal()
    {
        $data = Ketentuan_Min::all();
        return view ('superadmin.peraturan.ketentuan_minimal.index', compact('data'));
    }

    public function datapesan()
    {
        $pesan = Transaksi::all();
        return view('superadmin.pesan.index',compact('pesan'));
    }

    public function getStatus($request)
    {
        $getDatapesan = Transaksi::where('id', $datapesan)->first();
        return view('superadmin.pesan.getStatus', compact('getDatapesan'));
    }

    public function changeStatus(Request $request, $datapesan)
    {
        $datapesanan = Transaksi::findOrFail($datapesan);
        $data = $request->all();

       $datapesanan->update($data);

        return redirect('superdatapesan');
    }

    public function datapermintaan()
    {
        $permintaan = PermintaanPelanggan::all();
        
        return view ('superadmin.pesan.datapermintaan',compact('permintaan'));
    }

    public function saran()
    {
        $data = Saran::all();
        return view ('superadmin.saran.index', compact('data'));
    }
}
