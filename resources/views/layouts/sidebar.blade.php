<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Product store</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    .sidebar {
      height: 100vh;
      width: 230px;
      background-color: #ECB365;
      padding-top: 20px;
      position: fixed;
      top: 0;
      left: 0;
      color: white;
      transition: transform 0.3s ease;
      z-index: 1000;
    }

    .sidebar.hide {
      transform: translateX(-100%);
    }

    .sidebar a {
      display: block;
      padding: 12px 20px;
      color: white;
      text-decoration: none;
      font-size: 16px;
    }

    .sidebar a:hover {
      background-color: #495057;
    }

    .main-content {
      margin-left: 220px;
      padding: 30px;
      transition: margin-left 0.3s ease;
    }

    .main-content.full {
      margin-left: 0;
    }

    .toggle-btn {
      position: fixed;
      top: 15px;
      right: 1260px;
      z-index: 1100;
      background-color: #343a40;
      color: white;
      border: none;
      padding: 10px 15px;
      border-radius: 5px;
    }

    h2 {
      font-family: Papyrus, fantasy;
      color: red;
    }
  </style>
</head>
<body>

  <!-- Toggle Button -->
  <button class="toggle-btn" onclick="toggleSidebar()">☰</button>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <h4 class="text-center mb-4">Product App</h4>
    <!-- <a href="{{ url('/dashboard') }}">🏠 Dashboard</a> -->
    <a href="{{ url('/products') }}">📦 Products</a>
    <a href="{{ url('/register') }}">📝 Register</a>
    <a href="{{ url('/login') }}">🔐 Login</a>
    <a href="{{ url('/logout') }}"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">🚪 Logout</a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
  </div>

  <!-- Main Content -->
  <div class="main-content" id="main">
    

    @yield('content')
  </div>

  <!-- JS for Toggle -->
  <script>
    function toggleSidebar() {
      document.getElementById("sidebar").classList.toggle("hide");
      document.getElementById("main").classList.toggle("full");
    }
  </script>

</body>
</html>
