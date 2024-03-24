
<!-- print_patient.php -->
<?php
    if(isset($_GET['id']) && isset($_GET['lastname'])){
        $id = $_GET['id'];
        $lastname = $_GET['lastname'];

        // Fetch patient information from the database using $id

        $conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `itr` WHERE `itr_no` = '$id'") or die(mysqli_error());
        $fetch = $query->fetch_array();
        $conn->close();

        // Include the patient information in the medical certificate
        $patientName = $fetch['firstname'] . ' ' . $fetch['middlename'] . ' ' . $fetch['lastname'];
        $birthdate = $fetch['birthdate'];
        $age = $fetch['age'];
        $address = $fetch['address'];
        $civilStatus = $fetch['civil_status'];

        // Rest of the HTML content for the medical certificate
        // You can customize this part based on your needs
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Certificate</title>
    <!-- Add any additional styling or meta tags as needed -->
    <style>
    body {
        font-family: 'Arial', sans-serif;
        line-height: 1.6;
        margin: 20px;
    }

    h1 {
        text-align: center;
        text-transform: uppercase;
        font-size: 24px;
        margin-bottom: 20px;
    }

    p {
        margin-bottom: 10px;
        text-align: center;
    }

    strong {
        font-weight: bold;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
    }

    /* Add any additional styles as needed */

    /* Style to hide the button */
    #saveButton {
        display: block;
    }

    /* Additional styles */
    #certificateContent {
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 10px;
        /* background-color: #4caf50; */
    }

    /* Customize the appearance of the printed document */
    @media print {
        body {
            background-color: #fff;
        }

        #certificateContent {
            border: none;
            background-color: #fff;
        }
    }
</style>

</head>
<body>
<div id="certificateContent">
<div style="flex: 1;">
                <img src="images/hc.png" alt="Left Logo" class="left-logo" style="width:100px;">
            </div>
    <center>Republic of the Philippines</center>
    <center>OFFICE OF THE CITY HEALTH OFFICER</center>
    <center>San Carlos City Pangasinan</center>
    <center>=2420=</center>
    <hr>
    <p style="font-size: 35px">MEDICAL CERTIFICATE</p>
        <p style="text-align: left;">TO WHOM IT MAY CONCERN:</p>
        <p>This is to certify that <strong><?php echo $patientName; ?>,  </strong><strong><?php echo $age; ?></strong> years old residing at <strong><?php echo $address; ?></strong> has been medically attended/physically examined by the undersigned on <strong>20__</strong> with the following findings:</p>
        <p>REMARKS: _______________________________________________________ _______________________________________________________  _______________________________________________________   _______________________________________________________</p>
        <p>This certification is issued upon request of <strong>_________________________</strong> for general purposes.</p>

    <!-- Doctor's Information and Signature -->
    

    <!-- You can customize the appearance of the printed document using CSS -->

    <button id="saveButton" onclick="saveCertificate()">Save Certificate</button>
</div>

<!-- JavaScript function to save the certificate and hide the button -->
<script>
    function saveCertificate() {
        // Hide the button before printing
        var saveButton = document.getElementById('saveButton');
        if (saveButton) {
            saveButton.style.display = 'none';
        }

        // Print the content
        window.print();

        // Show the button again after printing
        if (saveButton) {
            saveButton.style.display = 'block';
        }
    }
</script>

</body>
</html>

<?php
    } else {
        // Handle the case when parameters are not set
        echo "Invalid request!";
    }
?>


