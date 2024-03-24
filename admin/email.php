<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Appointment Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #4caf50;
    }
    .container {
      max-width: 500px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    input[type="text"], input[type="date"], input[type="time"], input[type="submit"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }
    input[type="submit"] {
      background-color: #4caf50;
      color: #fff;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Appointment Form</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <label for="patient_name">Patient Name:</label>
      <input type="text" id="patient_name" name="patient_name" required>
      <label for="patient_email">Patient Email:</label>
      <input type="email" id="patient_email" name="patient_email" required>
      <label for="appointment_date">Appointment Date:</label>
      <input type="date" id="appointment_date" name="appointment_date" required>
      <label for="appointment_time">Appointment Time:</label>
      <input type="time" id="appointment_time" name="appointment_time" required>
      <input type="submit" value="Schedule Appointment">
    </form>
  </div>
</body>
</html>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $patientName = $_POST['patient_name'];
    $patientEmail = $_POST['patient_email'];
    $appointmentDate = $_POST['appointment_date'];
    $appointmentTime = $_POST['appointment_time'];
    $healthcareProviderEmail = "healthcare@example.com"; // Change this to your healthcare provider's email

    // Compose email message
    $subject = "Appointment Confirmation";
    $message = "Dear $patientName,\n\n";
    $message .= "Your appointment has been scheduled successfully.\n";
    $message .= "Date: $appointmentDate\n";
    $message .= "Time: $appointmentTime\n\n";
    $message .= "Thank you for choosing our healthcare services.\n\n";
    $message .= "Regards,\nHealthcare Management System";

    // Send email to patient
    $headers = "From: healthcare@example.com\r\n";
    $headers .= "Reply-To: healthcare@example.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    mail($patientEmail, $subject, $message, $headers);

    // Send email to healthcare provider
    $providerSubject = "New Appointment Scheduled";
    $providerMessage = "Dear Healthcare Provider,\n\n";
    $providerMessage .= "A new appointment has been scheduled by $patientName.\n";
    $providerMessage .= "Date: $appointmentDate\n";
    $providerMessage .= "Time: $appointmentTime\n";
    $providerMessage .= "Patient's Email: $patientEmail\n\n";
    $providerMessage .= "Please make necessary arrangements.\n\n";
    $providerMessage .= "Regards,\nHealthcare Management System";
    mail($healthcareProviderEmail, $providerSubject, $providerMessage, $headers);

    // Redirect to a confirmation page
    header("Location: confirmation.php");
    exit();
}
?>