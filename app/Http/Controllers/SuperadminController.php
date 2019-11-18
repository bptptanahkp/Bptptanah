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
        public function tambahanalisiskimia(Request $request)
        {
            $input = $request->all();
            AnalisisKimiaTanah::create($input);
            return redirect('supertarifanalisiskimia')->with('action','Data berhasil di tambah');
        }
        public function editanalisiskimia($id)
        {
            $ed = AnalisisKimiaTanah::find($id);
            return view ('superadmin.tarif_lab.analisis_kimia.edit',compact('ed'));
        }
        public function updateanalisiskimia(Request $request)
        {
            $ed = AnalisisKimiaTanah::findOrFail($request->id);
            $input = $request->all();
            
            $ed->update($input);
            return redirect('supertarifanalisiskimia')->with('action','Data berhasil di edit');
        }
        public function hapusanalisiskimia($id)
        {
            $ed = AnalisisKimiaTanah::findOrFail($id);
            $ed->delete();
            return redirect('supertarifanalisiskimia')->with('action','Data berhasil di hapus');
        }
    
    public function pupukkimia()
    {
        $data = Pupukkimia::all();
        return view ('superadmin.tarif_lab.pupuk_kimia.index', compact('data'));
    }
        public function tambahpupukkimia(Request $request)
        {
            $input = $request->all();
            Pupukkimia::create($input);
            return redirect('supertarifpupukkimia')->with('action','Data berhasil di tambah');
        }
        public function editpupukkimia($id)
        {
            $ed = Pupukkimia::find($id);
            return view ('superadmin.tarif_lab.pupuk_kimia.edit',compact('ed'));
        }
        public function updatepupukkimia(Request $request)
        {
            $ed = Pupukkimia::findOrFail($request->id);
            $input = $request->all();
            
            $ed->update($input);
            return redirect('supertarifpupukkimia')->with('action','Data berhasil di edit');
        }
        public function hapuspupukkimia($id)
        {
            $ed = Pupukkimia::findOrFail($id);
            $ed->delete();
            return redirect('supertarifpupukkimia')->with('action','Data berhasil di hapus');
        }

    public function pupukorganik()
    {
        $data = PupukOrganik_Kompos_Cair::all();
        return view ('superadmin.tarif_lab.pupuk_organik.index', compact('data'));
    }
        public function tambahpupukorganik(Request $request)
        {
            $input = $request->all();
            PupukOrganik_Kompos_Cair::create($input);
            return redirect('supertarifpupukorganik')->with('action','Data berhasil di tambah');
        }
        public function editpupukorganik($id)
        {
            $ed = PupukOrganik_Kompos_Cair::find($id);
            return view ('superadmin.tarif_lab.pupuk_organik.edit',compact('ed'));
        }
        public function updatepupukorganik(Request $request)
        {
            $ed = PupukOrganik_Kompos_Cair::findOrFail($request->id);
            $input = $request->all();
            
            $ed->update($input);
            return redirect('supertarifpupukorganik')->with('action','Data berhasil di edit');
        }
        public function hapuspupukorganik($id)
        {
            $ed = PupukOrganik_Kompos_Cair::findOrFail($id);
            $ed->delete();
            return redirect('supertarifpupukorganik')->with('action','Data berhasil di hapus');
        }

    public function pengujianair()
    {
        $data = PengujianAir::all();
        return view ('superadmin.tarif_lab.pengujian_air.index', compact('data'));
    }
        public function tambahpengujianair(Request $request)
        {
            $input = $request->all();
            PengujianAir::create($input);
            return redirect('supertarifpengujianair')->with('action','Data berhasil di tambah');
        }
        public function editpengujianair($id)
        {
            $ed = PengujianAir::find($id);
            return view ('superadmin.tarif_lab.pengujian_air.edit',compact('ed'));
        }
        public function updatepengujianair(Request $request)
        {
            $ed = PengujianAir::findOrFail($request->id);
            $input = $request->all();
            
            $ed->update($input);
            return redirect('supertarifpengujianair')->with('action','Data berhasil di edit');
        }
        public function hapuspengujianair($id)
        {
            $ed = PengujianAir::findOrFail($id);
            $ed->delete();
            return redirect('supertarifpengujianair')->with('action','Data berhasil di hapus');
        }

    public function tanaman()
    {
        $data = Tanaman::all();
        return view ('superadmin.tarif_lab.tanaman.index', compact('data'));
    }
        public function tambahtanaman(Request $request)
        {
            $input = $request->all();
            Tanaman::create($input);
            return redirect('supertariftanaman')->with('action','Data berhasil di tambah');
        }
        public function edittanaman($id)
        {
            $ed = Tanaman::find($id);
            return view ('superadmin.tarif_lab.tanaman.edit',compact('ed'));
        }
        public function updatetanaman(Request $request)
        {
            $ed = Tanaman::findOrFail($request->id);
            $input = $request->all();
            
            $ed->update($input);
            return redirect('supertariftanaman')->with('action','Data berhasil di edit');
        }
        public function hapustanaman($id)
        {
            $ed = Tanaman::findOrFail($id);
            $ed->delete();
            return redirect('supertariftanaman')->with('action','Data berhasil di hapus');
        }
    
    public function peraturanpelanggan()
    {
        $data = PeraturanPelanggan::all();
        return view ('superadmin.peraturan.peraturan_pelanggan.index', compact('data'));
    }
        public function tambahperaturan(Request $request)
        {
            $input = $request->all();
            PeraturanPelanggan::create($input);
            return redirect('superperaturanpelanggan')->with('action','Data berhasil di tambah');
        }
        public function editperaturan($id)
        {
            $ed = PeraturanPelanggan::find($id);
            return view ('superadmin.peraturan.peraturan_pelanggan.edit',compact('ed'));
        }
        public function updateperaturan(Request $request)
        {
            $ed = PeraturanPelanggan::findOrFail($request->id);
            $input = $request->all();
            
            $ed->update($input);
            return redirect('superperaturanpelanggan')->with('action','Data berhasil di edit');
        }
        public function hapusperaturan($id)
        {
            $ed = PeraturanPelanggan::findOrFail($id);
            $ed->delete();
            return redirect('superperaturanpelanggan')->with('action','Data berhasil di hapus');
        }

    public function ketentuanminimal()
    {
        $data = Ketentuan_Min::all();
        return view ('superadmin.peraturan.ketentuan_minimal.index', compact('data'));
    }
        public function tambahketentuan(Request $request)
        {
            $input = $request->all();
            Ketentuan_Min::create($input);
            return redirect('superketentuanminimal')->with('action','Data berhasil di tambah');
        }
        public function editketentuan($id)
        {
            $ed = Ketentuan_Min::find($id);
            return view ('superadmin.peraturan.ketentuan_minimal.edit',compact('ed'));
        }
        public function updateketentuan(Request $request)
        {
            $ed = Ketentuan_Min::findOrFail($request->id);
            $input = $request->all();
            
            $ed->update($input);
            return redirect('superketentuanminimal')->with('action','Data berhasil di edit');
        }
        public function hapusketentuan($id)
        {
            $ed = Ketentuan_Min::findOrFail($id);
            $ed->delete();
            return redirect('superketentuanminimal')->with('action','Data berhasil di hapus');
        }

    public function datapesan()
    {
        $pesan = Transaksi::all();
        return view('superadmin.pesan.index',compact('pesan'));
    }

    public function getStatus($datapesan)
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
