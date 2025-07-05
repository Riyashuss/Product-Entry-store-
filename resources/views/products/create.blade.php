<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Registration</title>
  <!-- Bootstrap 5.3 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: grey;
    }

    .form-container {
      background: white;
      padding: 20px;
      border-radius: 10px;
      width: 100%;
      max-width: 600px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    button:hover {
      background-color: #343a40;
      color: skyblue;
    }


  </style>

  <script>
    function isInputNumber(evt) {
      var ch = String.fromCharCode(evt.which);
      if (!(/[0-9]/.test(ch))) {
        evt.preventDefault();
      }
    }

    function isInputLetter(evt) {
      var ch = String.fromCharCode(evt.which);
      if (!(/[a-zA-Z]/.test(ch) || ch === " " || evt.keyCode === 8)) {
        evt.preventDefault();
      }
    }
  </script>
</head>

<body>
  <div class="form-container">
    <h4 class="text-center mb-4">PRODUCT ADD PAGE</h4>

    <form action="{{ url('products') }}" method="post">
      {!! csrf_field() !!}
      <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}" class="form-control" required>

      <div class="mb-3">
        <label for="productname" class="form-label">Product Name</label>
        <input type="text" name="productname" id="productname" class="form-control" onkeypress="isInputLetter(event)" required>
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" name="price" id="price" class="form-control" onkeypress="isInputNumber(event)" required>
      </div>

      <div class="mb-3">
        <label for="quantity" class="form-label">Quantity</label>
        <input type="text" name="quantity" id="quantity" class="form-control" onkeypress="isInputNumber(event)" required>
      </div>

      <div class="d-flex justify-content-between">
        <a href="/products" class="btn btn-secondary" style="margin-right: 400px;">Home</a>
        <input type="submit" value="Save" class="btn btn-success" >
      </div>
    </form>
  </div>

  <!-- Bootstrap JS (Optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
