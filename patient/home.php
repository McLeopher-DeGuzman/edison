<!DOCTYPE html>
<?php
// Update fullName column
$conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
$fetch = $query->fetch_array();

// Assuming `fullName` is formatted as "firstname lastname"
// $q = $conn->query("SELECT * FROM `itr` ORDER BY `itr_no` DESC") or die(mysqli_error());

?>
<?php require '../add_patient.php'?>
<html lang="en">
<head>
    <title>San Carlos Healthcare Management System 2023</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/hc.png"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css"/>
    <link rel="stylesheet" type="text/css" href="css/customize.css"/>
    <style>
        body {
            background-color: #9ADE7B; /* Set your desired background color */
            margin: 0;
            padding: 0;
        }

        /* You can customize other styles as needed */
        .navbar-default {
            background-color: #508D69; /* Set your desired navbar color */
            border-color: #9ADE7B;
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        .navbar-default .navbar-brand {
            color: #ffffff; /* Set your desired navbar brand color */
        }

        .navbar-default .navbar-brand:hover,
        .navbar-default .navbar-brand:focus {
            color: #ffffff; /* Set your desired navbar brand color on hover/focus */
        }

        /* Add more styles as needed */
        .sidebar {
            background-color: #508D69;
            color: #ffffff;
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            overflow-x: hidden;
            padding-top: 70px; /* Adjusted to match navbar height */
            z-index: 999; /* Ensure sidebar is behind the navbar */
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: #ffffff;
            display: block;
        }

        .sidebar a:hover {
            background-color: #355e46;
        }

        .content {
            margin-left: 250px;
            padding-top: 70px; /* Adjusted to match navbar height */
            padding-left: 20px;
        }

        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #508D69;
            color: #ffffff;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
<div class="navbar navbar-default">
    <img src="images/hc.png" style="float:left;" height="55px"/><label class="navbar-brand">San Carlos Health Care
        Management System 2023</label>
    <ul class="nav navbar-right">
        <li class="dropdown">
            <a class="user dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="glyphicon glyphicon-user"></span>
                <?php echo $fetch['first_name']?>  <?php echo $fetch['middle_name']?>  <?php echo $fetch['last_name']?>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a class="me" href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
                </li>
            </ul>
        </li>
    </ul>
</div>

<div class="sidebar">
    <br/>
    <a href="#">Dashboard</a>
    <a href="../add_appointment.php">Appointment</a>
    <!-- Add more sidebar links as needed -->
</div>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>DASHBOARD</h4>
                    </div>
                    <div class="panel-body">
                        <!-- Add your dashboard content here -->
                        <p>Welcome, <?php echo $fetch['first_name']?>!</p>
                        <!-- You can add more dashboard elements as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <label class="footer-title">San Carlos Healthcare Management System 2023</label>
</div>

<?php require "../script.php" ?>
<script src="js/add_dental.js"></script>
</body>
</html>
