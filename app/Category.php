<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = [
    'name',
    'parent',
    'group',
    'id_xml',
  ];
  protected $table = 'categories';
  public $timestamps = false;
}
