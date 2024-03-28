<?php
    session_start(); // Start the session

    if(isset($_POST['login'])){   
        if(isset($_POST['login_email']) && isset($_POST['login_password'])){ // Check if email and password are set
            $email = $_POST['login_email']; 
            $password = $_POST['login_password'];

            // Create a new mysqli connection
            $conn = new mysqli("localhost", "root", "", "hcpms");

            // Check if connection was successful
            if($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Prepare and bind the SELECT statement to prevent SQL injection
            $stmt = $conn->prepare("SELECT * FROM `patient` WHERE `email` = ? AND `password` = ?");
            $stmt->bind_param("ss", $email, $password); // Bind parameters
            $stmt->execute();
            $result = $stmt->get_result();

            // Check if there's a match for the provided email and password
            if($result->num_rows == 1){
                // Authentication successful, set session variables
                $_SESSION['email'] = $email;
                $_SESSION['logged_in'] = true;

                // Redirect to patient dashboard after successful login
                header("Location: home.php");
                exit();
            } else {
                // Authentication failed, display an error message
                echo "<script>alert('Invalid email or password')</script>";
                echo "<script>window.location='index.php'</script>";
                exit;
            }

            // Close the prepared statement and database connection
            $stmt->close();
            $conn->close();
        }
    }
?>
