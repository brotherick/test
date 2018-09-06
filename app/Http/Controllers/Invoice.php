<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Invoice extends Controller
{
  $invoices=\App\Invoice::all();
  return view('/clients',compact('clients'));
}
