<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style>
	 *{
		 margin: 0;
		 padding: 0;
		 box-sizing: border-box;
	 }
	 body{
		 height: 100vh;
		 display: flex;
		 align-items: center;
		 justify-content: center;
		 background: grey;
	 }
	 .container{
		 display: flex;
		 background: pink;
		 flex-direction: column;
		 width: 400px;
		 padding: 15px;
		 border: 1px solid
		 skyblue;
		 border-radius: 5px;
	 }
	 input{
		 margin: 3px 0px;
		 height: 35px;
		 padding: 2px;
	 }
	 button{
		 height: 30px;
		 margin: 12px 10px;
		 background-color: green;
		 border: none;
		 border-radius: 5px;
		 color: #333;
	 }
	 button:hover{
		 background-color: grey;
		 color: skyblue;
	 }
	 /*div{
		 border: 1px solid black;
		 margin-top: 100px;
		 margin-bottom: 100px;
		 margin-right: 150px;
		 margin-left: 80px;
		 background-color: lightblue;/*
	 }
	 </style>
	<body>
	  <form action="/login" method="post">
	  @csrf
	  <div class="container">
		   <div class="form-group">
			<label for="form-label">Email </label>
			<input type="email"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
		  </div>
		  <div class="form-group">
			<label for="form-label">Password</label>
			<input type="password"   id="exampleInputPassword1" placeholder="Password" required>
		  </div>
           <div class="form-group">
			<label for="form-label">ConfirmPassword</label>
			<input type="password"  id="exampleInputPassword1" placeholder="ConfirmPassword" required>
		  </div>		  
		  </div>
		  <button type="submit" class="btn btn-primary">register</button>
		  <button><a href="login" class="btn btn-primary">back</a></button>
		</form>  
	
        </body>
	   </html>
