<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Cancellation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, p {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Appointment Cancellation</h1>
        <?php
        // Include database connection or any necessary classes

        // Retrieve appointment ID from form
        $appointment_id = $_POST['appointment_id'];

        // Query to check if appointment exists
        // Example assuming you have a MySQL database connection
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "healthcare_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if appointment exists
        $sql = "SELECT * FROM appointments WHERE id = $appointment_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Appointment found, proceed with cancellation
            $row = $result->fetch_assoc();
            $patient_id = $row['patient_id'];
            $doctor_id = $row['doctor_id'];

            // Perform cancellation (e.g., update appointment status in database)
            $update_sql = "UPDATE appointments SET status = 'Cancelled' WHERE id = $appointment_id";
            if ($conn->query($update_sql) === TRUE) {
                echo "<p>Appointment with ID $appointment_id has been cancelled successfully.</p>";
            } else {
                echo "<p>Error updating record: " . $conn->error . "</p>";
            }
        } else {
            // Appointment not found
            echo "<p>Appointment with ID $appointment_id not found.</p>";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
