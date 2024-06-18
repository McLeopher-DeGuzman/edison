<?php
// require_once '../vendor/autoload.php';

// // Twilio API credentials
// $account_sid = 'ACf6cecf37b8d891e8059f3c2afa102a96';
// $auth_token = '4b6faee11060a33edf167158ff94f95b';
// // $twilio_phone_number = '+12516511870';

session_start();
error_reporting(0);

if (isset($_POST['register'])) {
    if (isset($_POST['fname']) && isset($_POST['mname']) && isset($_POST['lname']) && isset($_POST['register_email']) && isset($_POST['register_password']) && isset($_POST['phone_number'])) {
        $first_name = $_POST['fname'];
        $middle_name = $_POST['mname'];
        $last_name = $_POST['lname'];
        $email = $_POST['register_email'];
        $password = $_POST['register_password'];
        $phone_number = $_POST['phone_number'];

        // Create a new mysqli connection
        $conn = new mysqli("localhost", "root", "", "hcpms");

        // Check if connection was successful
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and bind the SELECT statement to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM `patient` WHERE `email` = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if email already exists
        if ($result->num_rows > 0) {
            echo "<script>alert('Email already exists')</script>";
            echo "<script>window.location='registration.php'</script>";
            exit;
            // Redirect or handle accordingly
        } else {
            // Hash the password
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            // Clear existing registration-related session variables
            session_unset();

            // Generate a random OTP
            // $otp = rand(10000, 99999);
            $otp = rand(10000, 99999);

            // Store the OTP in the session variable
            $_SESSION['registration_otp'] = $otp;

            // Store other user data in session variables
            $_SESSION['fname'] = $first_name;
            $_SESSION['mname'] = $middle_name;
            $_SESSION['lname'] = $last_name;
            $_SESSION['register_email'] = $email;
            $_SESSION['register_password'] = $hashedPassword;
            $_SESSION['phone_number'] = $phone_number;

            // Initialize the Twilio client
            // $twilio = new Twilio\Rest\Client($account_sid, $auth_token);

            // Recipient's phone number (the user's phone number)
            $recipient_phone_number = $phone_number;

            // Send the OTP via SMS
            // $message = $twilio->messages->create(
            //     $recipient_phone_number,
            //     array(
            //         'from' => $twilio_phone_number,
            //         'body' => "Your OTP is: $otp"
            //     )
            // );

            // Redirect to the OTP verification page
            header("Location: verify_otp.php");
            exit;
        }

        // Close the prepared statement and database connection
        $stmt->close();
        $conn->close();
    }
}
?>
