<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AddController extends Controller
{
     public function addform(){
	return view('add');
	return redirect('/item_reg');
	$products = Product::all();
	return view('add',compact('products'));
	}
	
	
	
	
}    
