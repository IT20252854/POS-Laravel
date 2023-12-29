<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use PDF;
class orderPdfgenerateController extends Controller
{
    public function index()
    {
        
        $data = Order::all();
        $pdf = PDF::loadview('orders.oreport', compact('data'));
        return $pdf->download('Order  List.pdf');
    }
}
