<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF() {
        $data = ['title' => 'Welcome to Ali Naeem'];
        $pdf = PDF::loadView('myPDF', $data);
        return $pdf->download('ali.pdf');
    }
}
