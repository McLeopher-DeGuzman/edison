<?php
	session_start();
		if(!ISSET($_SESSION['patient_id']))
			{
				header('location:home.php');
			}
?>