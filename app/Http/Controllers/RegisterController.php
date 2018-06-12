<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\CreateAccountRequest;

class RegisterController extends Controller
{
    public function index(){
      return view('auth.register');
    }

    public function store(CreateAccountRequest $request){
      User::create($request->all());
      return redirect('register');
    }
}
