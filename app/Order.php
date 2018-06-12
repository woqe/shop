<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = [
    'uid',
    'pid',
    'date',
    'oth',
    'comment',
    'summ',
    'status'
  ];
  protected $table = 'orders';
  public $timestamps = false;
}
