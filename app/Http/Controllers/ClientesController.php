<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Clients;

class ClientesController extends Controller
{
  public function index(Request $request)
  {
    $clients=\App\Clients::all();

      return view('/clients',compact('clients'));
  }

  public function pend_balance(Request $request)
  {
      $clients= DB::table('clients')
        ->whereIn('id',function ($query){
        $query->select(DB::raw('client_id'))
        ->from('invoice')
        ->whereRaw('invoice.balance < invoice.monto');
      })
      ->get();
      return view('/pend_balance_clients',compact('clients'));
  }
}
