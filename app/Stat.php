<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
  protected $fillable = [
    'type',
    'timestamp',
  ];
  protected $table = 'stats';
  public $timestamps = false;
}
