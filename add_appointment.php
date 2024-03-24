<?php
    $conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());
?>

<!DOCTYPE html>
<?php
	require_once 'login.php';
?>
<html lang = "eng">
	<head>
		<title>San Carlos Health Care Management System 2023</title>
		<meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "shortcut icon" href = "../images/hc.png" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/jquery.dataTables.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/customize.css" />
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

        /* Add more styles as needed */
    </style>
	</head>
<body>
	
	
<div id="add_itr" class="panel panel-success">
    <div class="panel-heading">
        <label>ADD APPOINTMENT</label>
        <button id="hide_itr" style="float:right; margin-top:-4px;" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove"></span> CLOSE</button>
    </div>
    <div class="panel-body">
        <form id="form_dental" method="POST" enctype="multipart/form-data">
            <div class="form-inline">
                <label for="itr_no">Individual Treatment Record No:</label>
                <input class="form-control" size="3" min="0" type="number" name="itr_no">
            </div>
            <div class="form-inline">
                <label for="family_no">Family no:</label>
                <input class="form-control" placeholder="(Optional)" size="5" type="text" name="family_no">
            </div>
            <br>
            <br>
            <div class="form-inline">
                <label for="firstname">First name:</label>
                <input class="form-control" name="firstname" type="text" required="required">
                &nbsp;&nbsp;&nbsp;
                <label for="middlename">Middle Name:</label>
                <input class="form-control" name="middlename" placeholder="(Optional)" type="text">
                &nbsp;&nbsp;&nbsp;
                <label for="lastname">Last Name:</label>
                <input class="form-control" name="lastname" type="text" required="required">
            </div>
            <br>
            <div class="form-group">
                <label for="birthdate" style="float:left;">Birthdate:</label>
                <br style="clear:both;">
                <select name="month" style="width:15%; float:left;" class="form-control" required="required">
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
                <select name="day" class="form-control" style="width:13%; float:left;" required="required">
                    <option value="">Select a day</option>
                    <?php
                        $a = 1;
                        while($a <= 31){
                            echo "<option value='".$a."'>".$a++."</option>";
                        }
                    ?>
                </select>
                <select name="year" class="form-control" style="width:13%; float:left;" required="required">
                    <option value="">Select a year</option>
                    <?php
                        $a = date('Y');
                        while(1965 <= $a){
                            echo "<option value='".$a."'>".$a--."</option>";
                        }
                    ?>
                </select>
                <br style="clear:both;">
                <br>
                <label for="phil_health_no">Phil Health no:</label>
                <input name="phil_health_no" placeholder="(if any)" class="form-control" type="text">
                <br>
                <label for="address">Address:</label>
                <input class="form-control" name="address" type="text" required="required">
                <br>
                <label for="age">Age:</label>
                <input class="form-control" style="width:20%;" min="0" max="999" name="age" type="number">
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
            <div class="form-inline">
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
            </div>
            <br>
            <div class="form-inline">
                <button class="btn btn-primary" name="save_patient"><span class="glyphicon glyphicon-save"></span> SAVE</button>
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
</script>	
</body>
</html>

