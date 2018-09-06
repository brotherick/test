<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Invoice extends Controller
{

  public function index(Request $request)
  {
    $invoices=\App\Invoice::all();
    return view('/invoice',compact('invoices'));
  }

  public function pend_balance(Request $request)
  {
    $invoices = DB::table('invoice')
      ->whereRaw('balance < monto')
    ->get();
    return view('/pend_balance_invoice',compact('invoices'));
  }

}
