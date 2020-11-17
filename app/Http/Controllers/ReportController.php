<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PDF;

class ReportController extends Controller
{
    public function index()
    {
        $val = Http::get('http://localhost/dw/t1/api/lists/read1.php');
        $val->json();
        return view('reportindex',['val' => $val]);
    }
    public function showreport()
    {
        $val = Http::get('http://localhost/dw/t1/api/lists/read1.php');
        $val->json();
        $pdf = PDF::loadView('reportshow',['val' => $val]);
        return $pdf->stream('report.pdf');
    }
}
