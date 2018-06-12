<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Position;

class CategoryController extends Controller
{
    public function index($id){
        $category = Category::where('id',$id)->get()[0];
        $menu = Category::all();

        $positions = Position::where('group_xml',$category['id_xml'])->get();
        return view('category', compact(['category','positions','menu']));
    }
}
