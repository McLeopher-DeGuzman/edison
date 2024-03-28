<?php
    if(isset($_POST['register'])){   
        if(isset($_POST['register_name']) && isset($_POST['register_email']) && isset($_POST['register_password'])){ // Check if name, email, and password are set
            $fullName = $_POST['register_name'];
            $email = $_POST['register_email']; 
            $password = $_POST['register_password'];

            // Create a new mysqli connection
            $conn = new mysqli("localhost", "root", "", "hcpms");

            // Check if connection was successful
            if($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Prepare and bind the SELECT statement to prevent SQL injection
            $stmt = $conn->prepare("SELECT * FROM `patient` WHERE `email` = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            // Check if email already exists
            if($result->num_rows > 0){
                echo "<script>alert('Email already exists')</script>";
                echo "<script>window.location='registration.php'</script>";
                exit; 
                // Redirect or handle accordingly
            } else {
                // Prepare and bind the INSERT statement to prevent SQL injection
                $stmt = $conn->prepare("INSERT INTO `patient` (`fullName`, `email`, `password`) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $fullName, $email, $password);
                if($stmt->execute()) {
                    echo "<script>alert('Registration successful')</script>";
                    echo "<script>window.location='registration.php'</script>";
                exit;
                    // Redirect or handle accordingly
                } else {
                    echo "<script>alert('Error in registration')</script>";
                    echo "<script>window.location='registration.php'</script>";
                exit;
                    // Redirect or handle accordingly
                }
            }

            // Close the prepared statement and database connection
            $stmt->close();
            $conn->close();
        }
    }
?>
