<?php

namespace App\Http\Controllers;

use App\Category;
use App\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){
        $menu = Category::all();
        $popular = Position::orderBy('buys', 'DESC')->take(6)->get();
        return view('index',compact(['menu','popular']));
    }
}
