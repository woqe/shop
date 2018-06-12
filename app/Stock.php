<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
  protected $fillable = [
    'name',
    'id_xml',
  ];
  protected $table = 'stock';
  public $timestamps = false;
}
