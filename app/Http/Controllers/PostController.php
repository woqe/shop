<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
      $name = [
        "Hellow","Buew","Congrat"
      ];
      return view('register', compact('name'));
    }
}
