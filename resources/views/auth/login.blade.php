<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Product Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .bg-image {
            background: url('{{ asset('img/product.jpg') }}') no-repeat center center;
            background-size: cover;
            height: 55vh;
            border-bottom-left-radius: 40px;
            border-bottom-right-radius: 40px;
        }

        .login-card {
            margin-top: -150px;
            background: white;
            width: 100%;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0px 10px 40px rgba(0, 0, 0, 0.2);
        }

        .login-card h2 {
            color: red;
            font-family: Copperplate, Papyrus, fantasy;
            text-align: center;
        }

        .btn-primary {
            background-color: #ff5722;
            border: none;
        }

        .btn-primary:hover {
            background-color: #e64a19;
        }

        .lang-flags {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 15px;
        }

        .lang-flags img {
            height: 25px;
            width: auto;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="bg-image"></div>

    <div class="login-card">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2>Store Items</h2>

            <div class="form-group mt-3">
                <label for="email">Email:</label>
                <input type="text" name="email" class="form-control" required>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" required>
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-between mt-4">
                <button type="submit" class="btn btn-primary px-4">Login</button>
                <a href="{{ route('register') }}" class="btn btn-secondary px-4">Register</a>
            </div>

        </form>
    </div>

</body>
</html>
