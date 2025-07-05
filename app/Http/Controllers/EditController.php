<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class EditController extends Controller
{
     public function editform(){
	return view('edit');
	}
	
	
}
