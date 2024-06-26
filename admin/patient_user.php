<!DOCTYPE html>
<?php
	require_once 'logincheck.php';
?>
<html lang = "eng">
	<head>
		<title>San Carlos Health Care Management System 2023 Patient Record Healthcare San Carlos Healthcare Management System 2023 System</title>
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
	<div class = "navbar navbar-default navbar-fixed-top">
		<img src = "../images/hc.png" style = "float:left;" height = "55px" /><label class = "navbar-brand">San Carlos Health Care Management System 2023</label>
			<?php
				$conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());
				$q = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_SESSION[admin_id]'") or die(mysqli_error());
				$f = $q->fetch_array();
			?>
			<ul class = "nav navbar-right">	
				<li class = "dropdown">
					<a class = "user dropdown-toggle" data-toggle = "dropdown" href = "#">
						<span class = "glyphicon glyphicon-user"></span>
						<?php
							echo $f['firstname']." ".$f['lastname'];
							$conn->close();
						?>
						<b class = "caret"></b>
					</a>
				<ul class = "dropdown-menu">
					<li>
						<a class = "me" href = "logout.php"><i class = "glyphicon glyphicon-log-out"></i> Logout</a>
					</li>
				</ul>
				</li>
			</ul>
	</div>
	<div id = "sidebar">
			<ul id = "menu" class = "nav menu">
				<li><a href = "home.php"><i class = "glyphicon glyphicon-home"></i> Dashboard</a></li>
				<li><a href = ""><i class = "glyphicon glyphicon-cog"></i> Accounts</a>
					<ul>
						<li><a href = "admin.php"><i class = "glyphicon glyphicon-cog"></i> Medical Technologist</a></li>
						<li><a href = "user.php"><i class = "glyphicon glyphicon-cog"></i> Chief Laboratory</a></li>
                        <li><a href = "patient_user.php"><i class = "glyphicon glyphicon-cog"></i> Chief Laboratory</a></li>

					</ul>
					
				</li>
				<li><a href="appointment.php"><i class="glyphicon glyphicon-calendar"></i> Appointment</a></li>
				<li><li><a href = "patient.php"><i class = "glyphicon glyphicon-user"></i> Patient</a></li></li>
				<li><li><a href = "med.php"><i class = "glyphicon glyphicon-user"></i> Medical certificate</a></li></li>
				
				<li><a href = ""><i class = "glyphicon glyphicon-folder-close"></i> Sections</a>
					<ul>
						<li><a href = "fecalysis.php"><i class = "glyphicon glyphicon-folder-open"></i> Fecalysis</a></li>
						<!-- <li><a href = "maternity.php"><i class = "glyphicon glyphicon-folder-open"></i> Maternity</a></li> -->
						<li><a href = "hematology.php"><i class = "glyphicon glyphicon-folder-open"></i> Hematology</a></li>
						<li><a href = "dental.php"><i class = "glyphicon glyphicon-folder-open"></i> Dental</a></li>
						<!-- <li><a href = "xray.php"><i class = "glyphicon glyphicon-folder-open"></i> Xray</a></li> -->
						<!-- <li><a href = "rehabilitation.php"><i class = "glyphicon glyphicon-folder-open"></i> Rehabilitation</a></li> -->
						<li><a href = "sputum.php"><i class = "glyphicon glyphicon-folder-open"></i> Sputum</a></li>
						<li><a href = "urinalysis.php"><i class = "glyphicon glyphicon-folder-open"></i> Urinalysis</a></li>
					</ul>
				</li>
			</ul>
	</div>
	<div id = "content">
		<br />
		<br />
		<br />
		<!-- <div id = "add" class = "panel panel-success">	
			<div class = "panel-heading">
				<label>ADD USER</label>
				<button id = "hide" class = "btn btn-sm btn-danger" style = "float:right; margin-top:-5px;"><span class = "glyphicon glyphicon-remove"></span> CLOSE</button>
			</div>
			<div class = "panel-body">
				<form id = "form_patient" method = "POST" enctype = "multi-part/form-data">
					<div class = "panel panel-default" style = "width:60%; margin:auto;">
					<div class = "panel-heading">
					</div>
					<div class = "panel-body">
						<div class = "form-group">
							<label for = "email">Username: </label>
							<input class = "form-control" name = "email" type = "text" required = "required">
						</div>
                        <div class = "form-group">
							<label for = "fullName">Name: </label>
							<input class = "form-control" name = "fullName" type = "text" required = "required">
						</div>
						<div class = "form-group">	
							<label for = "password">Password: </label>
							<input class = "form-control" name = "password" maxlength = "12" type = "password" required = "required">
						</div>
						
							<button class = "btn btn-primary" name = "save_patient" ><span class = "glyphicon glyphicon-save"></span> SAVE</button>
							<br />
					</div>	
					<?php require 'add_patient_user.php'?>
					</div>
				</form>			
			</div>	
		</div>	 -->
		<div class = "panel panel-primary">
			<div class = "panel-heading">
				<label>patient user</Label>
			</div>
			<div class = "panel-body">
				<!-- <button id = "show" class = "btn btn-info"><span class  = "glyphicon glyphicon-plus"></span> ADD</button> -->
				<br />
				<br />
				<table id = "table" class = "display" width = "100%" cellspacing = "0">
					<thead>
						<tr>
							<th>Phone Number</th>
							<th>Username</th>
							<th>Password</th>
							<th>Name</th>
							<th>date and time</th>
							<th>Action</th>
							<!-- <th>Section</th> -->
							<!-- <th><center>Action</center></th> -->
						</tr>
					</thead>
					<tbody>
					<?php
						$conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());
						$query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
						while($fetch = $query->fetch_array()){
					?>
						<tr>	
							<td><?php echo $fetch['phone_number']?></td>
							<td><?php echo $fetch['email']?></td>
							<td><?php echo md5($fetch['password'])?></td>
                            <td><?php echo $fetch['first_name']?></td>
							<!-- <td><?php echo $fetch['middle_name']?></td>
							<td><?php echo $fetch['last_name']?></td> -->
							<td><?php echo $fetch['date_time']?></td>
							<td>
    <a href="delete_patient.php?id=<?php echo $fetch['patient_id']; ?>" onclick="return confirm('Are you sure you want to delete this record?');" class="btn btn-sm btn-danger">
        <i class="glyphicon glyphicon-remove"></i> Delete
    </a>
</td>


							<!-- <td><?php echo $fetch['firstname']." ".$fetch['lastname']?></td>
							<td><?php echo $fetch['section']?></td> -->
							<!-- <td><center><a href = "edit_user.php?id=<?php echo $fetch['user_id']?>&lastname=<?php echo $fetch['lastname']?>"class = "btn btn-sm btn-warning"><i class = "glyphicon glyphicon-edit"></i> Update</a> <a onclick = "delete_user(this); return false;"  href = "delete_user.php?id=<?php echo $fetch['user_id']?>&lastname=<?php echo $fetch['lastname']?>" class = "btn btn-sm btn-danger"><i class = "glyphicon glyphicon-remove"></i> Delete</a></center></td> -->
						</tr>
					<?php
						}
						$conn->close();
					?>
					</tbody>
					</table>
			</div>
		</div>
	</div>
	<div id = "footer">
		<label class = "footer-title">San Carlos Health Care Management System 2023</label>
	</div>
	<script type = "text/javascript">
		function delete_user(that){
			var delete_func = confirm("Are you sure you want to delete this record?")
			if(delete_func){
				window.location = anchor.attr("href");
			}
		}
	</script>
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