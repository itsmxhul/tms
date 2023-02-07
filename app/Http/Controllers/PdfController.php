<?php

namespace App\Http\Controllers;

use App\Models\Dynamicheader;
use PDF;

use Illuminate\Http\Request;

class PdfController extends Controller
{

    public function makepdf(Dynamicheader $dynamicheader)
    {

        $dynamicheaders = $dynamicheader::all();

        return view('layouts.pdf',compact('dynamicheaders'));
        // return view('layouts.pdf');



    }
    public function generatePDF(Request $request)
    {
        // dd($request->wysiwygeditor);
        $data = [
            'title' => 'Welcome to thunder education system ',
            'date' => date('m/d/Y'),
            'data' => $request->wysiwygeditor,
            // 'data' => print_r($_REQUEST[''])
        ];

        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download('tms.pdf');
    }
}
