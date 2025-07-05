<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register Product Store</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body, html {
      height: 100%;
      font-family: Arial, sans-serif;
    }

    .banner {
      background: url('{{ asset('img/product.jpg') }}') no-repeat center center;
      background-size: cover;
      height: 55vh;
      border-bottom-left-radius: 40px;
      border-bottom-right-radius: 40px;
    }

    .register-card {
      background:rgb(255, 250, 252);
      margin-top: -230px;
      padding: 30px;
      border-radius: 20px;
      max-width: 500px;
      width: 100%;
      margin-left: auto;
      margin-right: auto;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
    }

    h2 {
      font-family: Papyrus, fantasy;
      text-align: center;
      color: red;
      margin-bottom: 30px;
    }

    .form-control {
      background-color: #fff8e1;
    }

    .btn-custom {
      background-color: skyblue;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      color: #333;
    }

    .btn-custom:hover {
      background-color: grey;
      color: white;
    }

    .invalid-feedback {
      font-size: 0.875em;
    }
  </style>
</head>
<body>

  <div class="banner"></div>

  <div class="register-card">
    <form method="POST" action="{{ route('register') }}">
      @csrf

      <h2>Register Product Store</h2>

      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
          name="name" value="{{ old('name') }}" required autofocus>
        @error('name')
          <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
          name="email" value="{{ old('email') }}" required>
        @error('email')
          <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
          name="password" required>
        @error('password')
          <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-4">
        <label for="password-confirm" class="form-label">Confirm Password</label>
        <input id="password-confirm" type="password" class="form-control"
          name="password_confirmation" required>
      </div>

      <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-custom">Register</button>
        <a href="{{ url('login') }}" class="btn btn-custom">Login</a>
      </div>
    </form>
  </div>

</body>
</html>
