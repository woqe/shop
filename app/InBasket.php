<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InBasket extends Model
{
  protected $fillable = [
    'uid',
    'position_xml_id',
    'count',
    'price',
    'oid'
  ];
  protected $table = 'to_basket';
  public $timestamps = false;
}
