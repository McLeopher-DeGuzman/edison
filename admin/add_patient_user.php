<?php
    if(isset($_POST['save_patient'])){   
        $fullName = $_POST['fullName']; 
        $email = $_POST['email']; 
        $password = $_POST['password'];
        
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
        } else {
            // Prepare and bind the INSERT statement to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO `patient` (`email`, `password`, `fullName`) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $email, $password, $fullName);
            $stmt->execute();

            // Redirect to another page after successful insertion
            echo("<script>location.replace('patient_user.php');</script>");
        }

        // Close the prepared statement and database connection
        $stmt->close();
        $conn->close();
    }
?>
