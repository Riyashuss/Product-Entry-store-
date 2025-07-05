<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Value;
use Illuminate\Http\Response;

class WideController extends Controller

{
    public function login(){
	return view('/login');
	
	}
	
   
	
	public function dashboard(Request $request){
	
	Value::create($request->all());
	return redirect ('/products');
	}
	
	
}