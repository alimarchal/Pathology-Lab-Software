<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpdf\Mpdf;

class DashboardController extends Controller
{
    public function dashboard()
    {

        // Generate the HTML content from your Blade template
        $html = view('welcome')->render();
        $mpdf = new Mpdf();
        // Write the HTML content to mPDF
        $mpdf->WriteHTML($html);
        $mpdf->Output();

        // Output the PDF as a download
//        return response($mpdf->Output('document.pdf', 'S'))
//            ->header('Content-Type', 'application/pdf')
//            ->header('Content-Disposition', 'attachment; filename="document.pdf"');

//        return view('dashboard');
    }
}
