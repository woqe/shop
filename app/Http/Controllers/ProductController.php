<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;
use App\Category;

class ProductController extends Controller
{
    public function index($id, $product){
        $posit = Position::where(['id'=>$id])->get()[0];
        $menu = Category::all();
        return view('product',compact(['posit','menu']));
    }
}
