<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PemesananUser;
use PDF;

class PesanController extends Controller
{
    
    public function hasilpesan($id)
    {
        $pesan = PemesananUser::find($id);
        return view('users.pesan.hasilpesan',compact('pesan'));
    }


    public function cetak_pdf($id)
    {
        $pesan = PemesananUser::find($id);
        $view = \View::make('hasilpesanpdf',['pesan'=>$pesan]);
        $html_content = $view->render();

        PDF::setTitle("Pesan PDF");
        PDF::setMargins(1,3,1,true);
        PDF::AddPage();
        PDF::SetFont('times','',20,'','false');
        PDF::writeHTML($html_content, true, false, true, false, '');

        PDF::Output(uniqid().'SamplePDF.pdf','D');

        
    }
}

