<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = [
      'name',
      'price',
    ];
    protected $table = 'positions';
    public $timestamps = false;
}
