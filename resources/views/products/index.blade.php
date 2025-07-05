@extends('layouts.sidebar')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Registration</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background-color: #fff;
        }
        h2 {
            font-family: "Copperplate", "Papyrus", fantasy;
            text-align: center;
            padding: 10px 0;
        }
        .welcome-text {
            position: absolute;
            right: 20px;
            top: 10px;
            font-weight: bold;
        }
        .logout {
            position: absolute;
            top: 40px;
            right: 70px;
        }
        .btn-custom {
            background-color: green;
            color: white;
        }
        .btn-custom:hover {
            background-color: grey;
            color: skyblue;
        }
        .text-center th,
        .text-center td {
            vertical-align: middle !important;
        }
      
    </style>
</head>
<body>

    <div class="container mt-4 position-relative">
        <div class="welcome-text">
            Welcome {{ auth()->user()->name }}!
        </div>

        <h2>PRODUCT STORE</h2>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="{{ url('/products/create') }}" class="btn btn-primary btn-sm">
                <i class="fa fa-plus"></i> Add New
            </a>
            <div class="logout">
                <a href="{{ url('/login') }}" class="btn btn-info btn-sm"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
            </div>
        </div>

        <table class="table table-bordered table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>User ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name ?? $item->id }}</td>
                    <td>{{ $item->productname }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->quantity }}</td>
                   <td>
    <!-- Edit Button -->
                        <a href="{{ url('/products/' . $item->id . '/edit') }}" class="btn btn-primary btn-sm" style="font-size: 14px; padding: 6px 10px;">
                            <i class="fas fa-edit" style="font-size: 19px;"></i>
                        </a>

                        <!-- Delete Form & Button -->
                        <form method="POST" action="{{ url('/products/' . $item->id) }}" accept-charset="UTF-8" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete {{ $item->productname }}?')"
                                style="font-size: 14px; padding: 6px 10px;">
                                <i class="fas fa-trash" style="font-size: 19px;"></i>
                            </button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (for modals, etc.) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection

