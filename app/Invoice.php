<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
  protected $fillable = [
      'id', 'serie', 'monto','balance','cliente',
  ];
}
