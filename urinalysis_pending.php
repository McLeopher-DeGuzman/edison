<!DOCTYPE html>
<?php
	require_once'logincheck.php';
	$conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());
	$query = $conn->query("SELECT * FROM `user` WHERE `user_id` = '$_SESSION[user_id]'") or die(mysqli_error());
	$fetch = $query->fetch_array();
?>
<html lang = "en">
	<head>	
		<title>San Carlos Health Care Management System 2023</title>
		<meta charset = "UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "shortcut icon" href = "images/hc.png" />
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

        /* Add more styles as needed */
    </style>
	</head>
	<body>
	<div class = "navbar navbar-default navbar-fixed-top">
		<img src = "images/hc.png" style = "float:left;" height = "55px" /><label class = "navbar-brand">San Carlos Health Care Management System 2023</label>
		<ul class = "nav navbar-right">	
				<li class = "dropdown">
					<a class = "user dropdown-toggle" data-toggle = "dropdown" href = "#">
						<span class = "glyphicon glyphicon-user"></span>
						<?php echo $fetch['firstname']." ".$fetch['lastname'] ?>
						<b class = "caret"></b>
					</a>
				<ul class = "dropdown-menu">
					<li>
						<a class = "me" href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a>
					</li>
				</ul>
				</li>
			</ul>
	</div>
	<br />
	<br />
	<br />
	<div class = "well">
		<div class = "panel panel-warning">
			<div class = "panel-heading">
				<center><label>URINALYSIS</label></center>
			</div>
		</div>	
		<div class = "panel panel-success">
			<div class = "panel-heading">
				<label>URINALYSIS REQUEST</label>
				<a style = "float:right; margin-top:-4px;" href = "view_urinalysis.php?itr_no=<?php echo $_GET['itr_no']?>" class = "btn btn-info"><span class = "glyphicon glyphicon-hand-right"></span> BACK</a>
			</div>
			<div class = "panel-body">
			<!-- <?php
				$id = $_GET['itr_no'];
				$q1 = $conn->query("SELECT * FROM `itr` WHERE `itr_no` = '$id'") or die(mysqli_error());
				$f1 = $q1->fetch_array();
				$q = $conn->query("SELECT * FROM `complaints` WHERE `section` = 'Urinalysis' && `itr_no` = '$id' ORDER BY `status` DESC") or die(mysqli_error());
				while($f = $q->fetch_array()){
					if($f['status'] == 'Pending'){
						echo "<label style = 'color:#3399f3;'>".$f1['firstname']." ".$f1['lastname']."</label>"."<textarea  style = 'resize:none;' disabled = 'disabled' class = 'form-control'>".$f['remark']."</textarea>".$f['date']."<br /><a class = 'btn btn-primary' href = 'urinalysis_not.php?itr_no=".$id."&comp_id=".$f['com_id']."'><span class = 'glyphicon glyphicon-check'></span> Confirm</a><br /><br />";
					}else{
						echo "<label style = 'color:#3399f3;'>".$f1['firstname']." ".$f1['lastname']."</label>"."<textarea  style = 'resize:none;' disabled = 'disabled' class = 'form-control'>".$f['remark']."</textarea>".$f['date']."<br /><a class = 'btn btn-primary' disabled = 'disabled'><span class = 'glyphicon glyphicon-check'></span> Done</a><br /><br />";
					}
				}	
			?> -->
			<?php
    $id = $_GET['itr_no'];
    $q1 = $conn->query("SELECT * FROM `itr` WHERE `itr_no` = '$id'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $q = $conn->query("SELECT * FROM `complaints` WHERE `section` = 'Urinalysis' && `itr_no` = '$id' ORDER BY `status` DESC") or die(mysqli_error());
    while($f = $q->fetch_array()){
        if($f['status'] == 'Pending'){
            echo "<label style='color:#3399f3;'>Patient Name: </label>" . $f1['firstname'] . " " . $f1['lastname'] . "<br>";
            echo "<label style='color:#3399f3;'>Complaints: </label>" . "<textarea style='resize:none;' disabled='disabled' class='form-control'>" . $f['complaints'] . "</textarea><br>";
			echo "<label style='color:#3399f3;'>Objective: </label>" . "<textarea  style='resize:none;' disabled='disabled' class='form-control'>" . $f['remark'] . "</textarea><br>";
            echo "<label style='color:#3399f3;'>Assessment: </label>" . "<textarea style='resize:none;' disabled='disabled' class='form-control'>" . $f['ass'] . "</textarea><br>";
            echo "<label style='color:#3399f3;'>Plan: </label>" . "<textarea style='resize:none;' disabled='disabled' class='form-control'>" . $f['plan'] . "</textarea><br>";
            echo "<label style='color:#3399f3;'>Rx: </label>" . "<textarea style='resize:none;' disabled='disabled' class='form-control'>" . $f['rx'] . "</textarea><br>";
            echo $f['date'] . "<br>";
            echo "<a class='btn btn-primary' href='urinalysis_not.php?itr_no=" . $id . "&comp_id=" . $f['com_id'] . "'><span class='glyphicon glyphicon-check'></span> Confirm</a><br /><br />";
        } else {
            echo "<label style='color:#3399f3;'>Patient Name: </label>" . $f1['firstname'] . " " . $f1['lastname'] . "<br>";
            echo "<label style='color:#3399f3;'>Complaints: </label>" . "<textarea style='resize:none;' disabled='disabled' class='form-control'>" . $f['complaints'] . "</textarea><br>";
			echo "<label style='color:#3399f3;'>Objective: </label>" . "<textarea  style='resize:none;' disabled='disabled' class='form-control'>" . $f['remark'] . "</textarea><br>";
            echo "<label style='color:#3399f3;'>Assessment: </label>" . "<textarea style='resize:none;' disabled='disabled' class='form-control'>" . $f['ass'] . "</textarea><br>";
            echo "<label style='color:#3399f3;'>Plan: </label>" . "<textarea style='resize:none;' disabled='disabled' class='form-control'>" . $f['plan'] . "</textarea><br>";
            echo "<label style='color:#3399f3;'>Rx: </label>" . "<textarea style='resize:none;' disabled='disabled' class='form-control'>" . $f['rx'] . "</textarea><br>";
            echo $f['date'] . "<br>";
            echo "<a class='btn btn-primary' disabled='disabled'><span class='glyphicon glyphicon-check'></span> Done</a><br /><br />";
        }
    }   
?>

		</div>
	</div>
	<div id = "footer">
		<label class = "footer-title">San Carlos Health Care Management System 2023</label>
	</div>
	</body>
		<?php require "script.php" ?>
</html>