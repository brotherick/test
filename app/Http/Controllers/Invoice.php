<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Invoice extends Controller
{
  public function index(Request $request)
  {
    $invoices=\App\Invoice::all();
    return view('/invoice',compact('invoices'));
  }
}
