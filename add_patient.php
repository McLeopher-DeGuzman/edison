<?php
    if(isset($_POST['save_patient'])){
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $last_name = $_POST['last_name'];
        $birthdate = $_POST['year']."-".$_POST['month']."-".$_POST['day']; // Convert to YYYY-MM-DD
        $address = $_POST['address'];
        $civil_status = $_POST['civil_status'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $event_date = $_POST['event_date']; // Assuming 'event_date' is the name of your field

        $conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());
        
        // Assuming patient_id is AUTO_INCREMENT, no need to insert it here
        
        // You can adjust this part depending on how you handle your database schema
        $conn->query("INSERT INTO `patient_info` (`first_name`, `middle_name`, `last_name`, `birthdate`, `address`, `civil_status`, `age`, `gender`, `event_date`) 
                      VALUES ('$first_name', '$middle_name', '$last_name', '$birthdate', '$address', '$civil_status', '$age', '$gender', '$event_date')") 
                      or die(mysqli_error($conn));
        
        echo "<script>alert('Patient information successfully saved!');</script>"; // Move the alert here
        echo ("<script> location.replace('patient/home.php');</script>");
    }
?>
