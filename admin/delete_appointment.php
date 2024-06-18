<?php
    // Connect to database
    $conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());

    // Check if ID is set and not empty
    if(isset($_GET['id']) && !empty($_GET['id'])) {
        // Escape the ID to prevent SQL injection
        $info_id = $conn->real_escape_string($_GET['id']);

        // Perform delete query
        $delete_query = $conn->query("DELETE FROM patient_info WHERE info_id = '$info_id'") or die(mysqli_error());

        if($delete_query) {
            // Redirect back to the page where the table is displayed
            header("Location: appointment.php");
            exit();
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        echo "Invalid ID";
    }

    // Close database connection
    $conn->close();
?>
