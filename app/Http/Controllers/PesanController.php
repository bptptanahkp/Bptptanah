<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PemesananUser;
use App\Transaksi;
use PDF;
use TCPDF;

class PesanController extends Controller
{
    
    public function hasilpesan($id)
    {
        $pesan = PemesananUser::find($id);
        $transaksi = Transaksi::find($id);
        return view('users.pesan.hasilpesan',compact('pesan','transaksi'));
    }


    public function cetak_pdf($id)
    {
        $pesan = PemesananUser::find($id);
        $transaksi = Transaksi::find($id);
        $view = \View::make('hasilpesanpdf',['pesan'=>$pesan],['transaksi'=>$transaksi]);
        $html_content = $view->render();

        // PDF::setTitle("Pesan PDF");
        // PDF::SetHeaderData("{{asset('photo/logo.jpeg'}}",40,'Judul Header', "codedb.co \nblog.code.co", array(0,64,255));
        // PDF::setFooterData(array(255,64,0), array(0,64,128));

        // set margins
        // PDF::SetHeaderMargin(5); // mengatur jarak antara header dan top margin
        // PDF::SetMargins(10, 25, 10); // kiri, atas, kanan
        // PDF::SetFooterMargin(10); //  mengatur jarak minimum antara footer dan bottom margin
        // PDF::setMargins(1,3,1,true);
        // PDF::AddPage();
        // PDF::SetFont('times','',12,'','false');
        // PDF::writeHTML($html_content, true, false, true, false, '');

        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        $pdf->setTitle("Pesan PDF");
        $pdf->AddPage();
        $pdf->SetHeaderData('/logo.jpeg', 20, 'BPTP Jatim', '', );
        $pdf->setFooterData(array(0,64,0), array(0,64,128));
        $pdf->setMargins('30','10','20');

        // set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        $pdf->writeHTML($html_content,false,true,true,'');

        $pdf->Output(uniqid().'SamplePDF.pdf');

        
    }
}

