<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnInclude extends Model
{
  protected $fillable = [
    'rid',
    'serial',
    'reason',
  ];
  protected $table = 'return_includes';
  public $timestamps = false;
}
