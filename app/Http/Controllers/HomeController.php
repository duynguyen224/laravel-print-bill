<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('welcome');
    }

    public function print(Request $request)
    {
        $pdf = Pdf::loadView('pdf.invoice');
        return $pdf->download('invoice.pdf');
    }
}
