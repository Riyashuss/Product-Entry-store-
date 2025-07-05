@extends('products.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">product Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
		<p class="card-text">name :{{$products->name}}</p>
        <h5 class="card-title">productname : {{ $products->productname }}</h5>
        <p class="card-text">price : {{ $products->price }}</p>
        <p class="card-text">quantity : {{ $products->quantity }}</p>
  </div>
       
    </hr>
  
  </div>
</div>