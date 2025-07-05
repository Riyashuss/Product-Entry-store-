<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Product</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="height:100vh;">
  <div class="card p-4" style="width: 600px;">
    <h4 class="text-center mb-4">Edit Product</h4>

    <form method="POST" action="{{ url('products/' . $products->id) }}">
      @csrf
      @method('PUT')

      <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

      <div class="mb-3">
        <label for="productname" class="form-label">Product Name</label>
        <input type="text" name="productname" class="form-control" value="{{ $products->productname }}"     class="form-control" onkeypress="isInputLetter(event)" required>
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" name="price" class="form-control" value="{{ $products->price }}"    class="form-control" onkeypress="isInputNumber(event)" required>
      </div>

      <div class="mb-3">
        <label for="quantity" class="form-label">Quantity</label>
        <input type="text" name="quantity" class="form-control" value="{{ $products->quantity }}" class="form-control" onkeypress="isInputNumber(event)"required>
      </div>

      <div class="d-flex justify-content-between">
        <a href="/products" class="btn btn-secondary">Back</a>
        <button type="submit" class="btn btn-success">Update</button>
      </div>
    </form>
  </div>

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
</body>
</html>
