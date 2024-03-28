
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Login and Registration</title>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="post"> <!-- Corrected action attribute -->
            <div class="form-group">
                <label for="login_email">Email:</label>
                <input type="email" class="form-control" id="login_email" name="login_email" required>
            </div>
            <div class="form-group">
                <label for="login_password">Password:</label>
                <input type="password" class="form-control" id="login_password" name="login_password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="login">Login</button>
        </form>
        
        <div class="mt-4">
            <p>Don't have an account? <a href="registration.php">Register here</a>.</p>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
