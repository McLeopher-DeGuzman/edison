<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Registration</title>
</head>
<body>
    <div class="container">
        <h2>Registration</h2>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="register_name">Full Name:</label>
                <input type="text" class="form-control" id="register_name" name="register_name" required>
            </div>
            <div class="form-group">
                <label for="register_email">Email:</label>
                <input type="email" class="form-control" id="register_email" name="register_email" required>
            </div>
            <div class="form-group">
                <label for="register_password">Password:</label>
                <input type="password" class="form-control" id="register_password" name="register_password" required>
            </div>
            <button type="submit" class="btn btn-success" name="register">Register</button>
        </form>

        <div class="mt-4">
            <p>Already have an account? <a href="index.php">Login here</a>.</p>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
