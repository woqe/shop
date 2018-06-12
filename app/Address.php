<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
  protected $fillable = [
    'addr',
    'uid',
  ];
  protected $table = 'address';
  public $timestamps = false;
}
