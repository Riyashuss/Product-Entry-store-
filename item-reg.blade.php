
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row bg-dark p-2">
            <h3 class="text-white">laravel Project</h3>
        </div>
        <div class="row bg-info py-5">
            <div class="col-6">
                <h2>Registration</h2>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="productname" class="form-label">productName:</label>
                        <input type="text" class="form-control" name="productname" required>
                    </div>

                    <div class="form-group">
                        <label for="price" class="form-label">price:</label>
                        <input type="text" class="form-control" name="price" required>
                    </div>
					
					<div class="form-group">
					    <label for="quantity" class="form-label">quantity:</label>
						<input type="text" class="form-control" name="quantity" required>

                     <button type="submit" class="btn btn-dark">Submit</button>
                </form>
            </div>
            <div class="col-6">
                <h3>Registered Students</h3>
                <ul class="list-group">
                    <li class="list-group-item">John Doe - john@example.com - 2023-01-15</li>
                    <li class="list-group-item">Jane Smith - jane@example.com - 2023-02-20</li>
                    <li class="list-group-item">Alex Johnson - alex@example.com - 2023-03-25</li>
                </ul>
                
            </div>
        </div>
    </div>
</body>
</html>
