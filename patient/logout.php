<?php
// Simulan ang session
session_start();

// Tanggalin ang lahat ng session variables
session_unset();

// Sirain ang session
session_destroy();

// I-redirect ang user sa login page o kung saan man ang tamang lugar sa iyong sistema
header("Location: index.php");
exit();
?>
