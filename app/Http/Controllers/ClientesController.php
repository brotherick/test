<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
  public function index(Request $request)
  {
      $clients=\App\Clients::all();
      return view('/clients',compact('clients'));
  }
}
