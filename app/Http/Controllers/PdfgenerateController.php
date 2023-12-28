<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use PDF;
class PdfgenerateController extends Controller
{
    public function index()
    {
        
        $data = Product::all();
        $pdf = PDF::loadview('products.report', compact('data'));
        return $pdf->download('Product  Report.pdf');
    }
}
