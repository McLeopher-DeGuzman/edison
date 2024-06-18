<?php
    $conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());
    $query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
    $fetch = $query->fetch_array();

?>

<!DOCTYPE html>
<?php require 'add_patient.php'?>
<html lang = "eng">
        <head>
        <title>San Carlos Health Care Management System 2023</title>
		<meta charset = "UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "shorcut icon" href = "images/hc.png" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/jquery.dataTables.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/customize.css" />
		<style>
        body {
            background-color: #9ADE7B; /* Set your desired background color */
        }

        /* You can customize other styles as needed */
        .navbar-default {
            background-color: #508D69; /* Set your desired navbar color */
            border-color: #9ADE7B;
        }

        .navbar-default .navbar-brand {
            color: #ffffff; /* Set your desired navbar brand color */
        }

        .navbar-default .navbar-brand:hover,
        .navbar-default .navbar-brand:focus {
            color: #ffffff; /* Set your desired navbar brand color on hover/focus */
        }
        .form-control {
    width: 100%; /* I-set ang lapad ng mga input fields sa 100% ng kanilang container */
    /* Iba pang mga estilo ay maaari mo pang idagdag o baguhin depende sa iyong preference */
}

        /* Add more styles as needed */
    </style>
	</head>
<body>
	
	
<div id="add_itr" class="panel panel-success">
    <div class="panel-heading">
        <label>ADD APPOINTMENT</label>
        <a href="patient/home.php" id="hide_itr" onclick="hideElement();" style="float:right; margin-top:-4px;" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove"></span> CLOSE</a>
    </div>
    <div class="panel-body">
  
        <form id="form_dental" method="POST" enctype="multipart/form-data"> 
        <!-- <form id="form_dental" method="POST" enctype="multipart/form-data" action="add_patient.php"> -->
<!-- 
            <div class="form-inline">
                <label for="itr_no">Individual Treatment Record No:</label>
                <input class="form-control" size="3" min="0" type="number" name="itr_no">
            </div>
            <div class="form-inline">
                <label for="family_no">Family no:</label>
                <input class="form-control" placeholder="(Optional)" size="5" type="text" name="family_no">
            </div> -->
            <br>
            <br>
            <div class="form-inline">
                <label for="first_name">First name:</label>
                <input class="form-control" name="first_name" type="text" required="required" value="<?php echo isset($fetch['first_name']) ? $fetch['first_name'] : ''; ?>">
                &nbsp;&nbsp;&nbsp;
                <label for="middle_name">Middle Name:</label>
                <input class="form-control" name="middle_name" placeholder="(Optional)" type="text" value="<?php echo isset($fetch['middle_name']) ? $fetch['middle_name'] : ''; ?>">
                &nbsp;&nbsp;&nbsp;
                <label for="last_name">Last Name:</label>
                <input class="form-control" name="last_name" type="text" required="required" value="<?php echo isset($fetch['last_name']) ? $fetch['last_name'] : ''; ?>">
            </div>
            <br>
            <div class="form-group">
            <label for="birthdate" style="float:left;">Birthdate:</label>
                <br style="clear:both;">
                <select id="month" name="month" style="width:15%; float:left;" class="form-control" required="required" onchange="calculateAge()">
                    <option value="">Select a month</option>
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <select id="day" name="day" class="form-control" style="width:13%; float:left;" required="required" onchange="calculateAge()">
                    <option value="">Select a day</option>
                    <?php
                    $a = 1;
                    while ($a <= 31) {
                        echo "<option value='" . $a . "'>" . $a++ . "</option>";
                    }
                    ?>
                </select>
                <select id="year" name="year" class="form-control" style="width:13%; float:left;" required="required" onchange="calculateAge()">
                    <option value="">Select a year</option>
                    <?php
                    $a = date('Y');
                    while (1965 <= $a) {
                        echo "<option value='" . $a . "'>" . $a-- . "</option>";
                    }
                    ?>
                </select>
                <br style="clear:both;">
                
                <br>
                <!-- <label for="phil_health_no">Phil Health no:</label>
                <input name="phil_health_no" placeholder="(if any)" class="form-control" type="text"> -->
                <br>
                <label for="address">Phil Health Id:</label>
                <input class="form-control" name="address" type="text"  placeholder="optional" style="width: 50%;">
                <br>
                <br>
                <label for="address">Address:</label>
                <input class="form-control" name="address" type="text" required="required" style="width: 50%;">
                <br>
                <label for="age">Age:</label>
                <input id="age" class="form-control" style="width:20%;" min="0" max="999" name="age" type="number" readonly>
                <br>
                <label for="civil_status">Civil Status:</label>
                <select style="width:22%;" class="form-control" name="civil_status" required="required">
                    <option value="">--Please select an option--</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                </select>
                <br>
                <label for="gender">Gender:</label>
                <select style="width:22%;" class="form-control" name="gender" required="required">
                    <option value="">--Please select an option--</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <br>
            <input type="hidden" id="appointment_datetime" name="appointment_datetime">

            <div class="form-inline">
                <label for="event_date">Event Date:</label>
                <input class="form-control" name="event_date" type="datetime-local" required="required">
            </div>

            <!-- <div class="form-inline">
                <label for="bp">BLOOD PRESSURE:</label>
                <input class="form-control" name="bp" type="text" required="required">
                &nbsp;&nbsp;&nbsp;
                <label for="temp">TEMPERATURE:</label>
                <input class="form-control" name="temp" type="number" max="999" min="0" size="15" required="required"><label>&deg;C</label>
                &nbsp;&nbsp;&nbsp;
                <label for="pr">PULSE RATE:</label>
                <input class="form-control" name="pr" type="text" required="required">
                <br>
                <br>
                <label for="rr">RESPIRATORY RATE:</label>
                <input class="form-control" name="rr" type="text" required="required">
                &nbsp;&nbsp;&nbsp;
                <label for="wt">WEIGHT:</label>
                <input class="form-control" name="wt" style="width:10%;" type="number" required="required"><label>kg</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="ht">HEIGHT:</label>
                <input class="form-control" name="ht" style="margin-right:10px;" type="text" required="required">
            </div> -->
            <br>
            <div class="form-inline">
            <button class="btn btn-primary" name="save_patient" onclick="showAlert()"><span class="glyphicon glyphicon-save"></span> Register</button>
            </div>
        </form>
    </div>
</div>  


	<div id = "footer">
		<label class = "footer-title">San Carlos Health Care Management System 2023</label>
	</div>
<?php include("script.php"); ?>
<script type = "text/javascript">
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
    function calculateAge() {
        var month = document.getElementById("month").value;
        var day = document.getElementById("day").value;
        var year = document.getElementById("year").value;

        if (month !== "" && day !== "" && year !== "") {
            var dob = new Date(year, month - 1, day);
            var today = new Date();
            var age = today.getFullYear() - dob.getFullYear();
            var monthDiff = today.getMonth() - dob.getMonth();

            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < dob.getDate())) {
                age--;
            }

            document.getElementById("age").value = age;
        }
        function captureDateTime() {
        // Get the current date and time
        var currentDate = new Date();
        var formattedDate = currentDate.toISOString().slice(0, 19).replace('T', ' '); // Format: YYYY-MM-DD HH:MM:SS

        // Set the value of the hidden input field to the current date and time
        document.getElementById("appointment_datetime").value = formattedDate;
    }
    function showAlert() {
        alert("Patient information successfully registered!");
    }
    }
</script>	
</body>
</html>

