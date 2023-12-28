<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use PDF;
class custPdfgenerateController extends Controller
{
    public function index()
    {
        
        $data = Customer::all();
        $pdf = PDF::loadview('customers.creport', compact('data'));
        return $pdf->download('Customers  Report.pdf');
    }
}
