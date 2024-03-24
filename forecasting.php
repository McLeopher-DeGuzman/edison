<!DOCTYPE html>
<html>
<head>
    <title>Appointment Forecasting</title>
</head>
<body>
    <h2>Appointment Forecasting</h2>
    <form action="appointment_forecasting.php" method="post">
        <label for="start_date">Start Date:</label><br>
        <input type="date" id="start_date" name="start_date" required><br><br>
        <label for="end_date">End Date:</label><br>
        <input type="date" id="end_date" name="end_date" required><br><br>
        <input type="submit" value="Forecast Appointments">
    </form>
</body>
</html>


<?php

$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];


$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "healthcare_db";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT DATE(appointment_date) AS appointment_date, COUNT(*) AS appointment_count
        FROM appointments
        WHERE appointment_date BETWEEN '$start_date' AND '$end_date'
        GROUP BY DATE(appointment_date)
        ORDER BY appointment_date";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    echo "<h2>Appointment Forecast</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Date</th><th>Appointment Count</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['appointment_date']."</td>";
        echo "<td>".$row['appointment_count']."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No appointments found for the selected date range.";
}

$conn->close();
?>
