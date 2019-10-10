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
use DB;
use PDF;
use TCPDF;
use Alert;

class PesanController extends Controller
{
    public function datapesan()
    {
        $pesan = Transaksi::all();
        return view('admin.pesan.index',compact('pesan'));
    }

    public function getStatus($datapesan)
    {
        $getDatapesan = Transaksi::where('id', $datapesan)->first();
        return view('admin.pesan.getStatus', compact('getDatapesan'));
    }

    public function changeStatus(Request $request, $datapesan)
    {
        $datapesanan = Transaksi::findOrFail($datapesan);
        $data = $request->all();

       $datapesanan->update($data);

        return redirect('datapesan');
    }

    public function datapermintaan()
    {
        $permintaan = PermintaanPelanggan::all();
        
        return view ('admin.pesan.datapermintaan',compact('permintaan'));
    }
    
    public function hasilpesan($id)
    {
        //data diri user
        $pesan = Transaksi::where('pemesanan_id',$id)->first();

        //data yang dipesan user
        // $pemesananuser = PemesananUser::find($id);
        // $permintaan = $pemesananuser->permintaanpelanggan()->get();



        // $permintaanuser = PermintaanPelanggan::where('pemesanan_id',$id)->first();

        // $users = PemesananUser::with('permintaanpelanggan.ankimtan')->get();

        // $permintaan = DB::select('select * from permintaan_pelanggans where pemesanan_id = :pemesanan_id', ['pemesanan_id' => $id]);
        $permintaan = PermintaanPelanggan::where('pemesanan_id',$id)->get();
        // $ankimtan = $permintaan;
        // dd($permintaan);
        
        
        return view('users.pesan.hasilpesan',compact('pesan','permintaan'));
    }


    public function cetak_pdf($id)
    {
        $pesan = Transaksi::where('pemesanan_id',$id)->first();
        $permintaan = PermintaanPelanggan::where('pemesanan_id',$id)->get();
            $view = \View::make('hasilpesanpdf',['pesan'=>$pesan],['permintaan'=>$permintaan]);
        $html_content = $view->render();
        // PDF::setTitle("Pesan PDF");
        // PDF::setMargins(true,true,true,true);
        // PDF::AddPage('A4');
        // PDF::SetFont('times','',20,'','false');
        // PDF::writeHTML($html_content, true, false, true, false, '');
        // PDF::Output(uniqid().'SamplePDF.pdf');
                PDF::SetAuthor('System');
                PDF::SetTitle('My Report');
                PDF::SetSubject('Report of System'); 
                PDF::SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
                PDF::setMargins(12, 3, 14, 3);     
                PDF::AddPage('A4');
                PDF::writeHTML($html_content, true, false, true, false, '');
                PDF::lastPage();
                PDF::Output(uniqid().'SamplePDF.pdf');
        
    }

    public function lihatproses(Request $request)
    {
        if($request->has('cari')){
            $data_lihatpesan = Transaksi::where('pemesanan_id','LIKE','%'.$request->cari.'%')->first();
        }else{
            $data_lihatpesan = 'data tidak ada';
        }
        // dd($data_lihatpesan->nama);
        return view('users.pesan.lihatpesan', compact('data_lihatpesan'));
    }
}

