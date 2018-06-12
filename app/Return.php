<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Return extends Model
{
  protected $fillable = [
    'cid',
  ];
  protected $table = 'returns';
  public $timestamps = false;
}
