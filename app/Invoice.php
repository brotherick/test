<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{

  protected $table = 'invoice';

  protected $fillable = [
      'id', 'serie', 'monto','balance','cliente', 'created_at',
  ];
}
