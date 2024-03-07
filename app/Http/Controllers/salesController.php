<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function sales()
    {
        return view('sales_page');
    }
}