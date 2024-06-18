<!DOCTYPE html>
<?php
    require_once 'logincheck.php';
    $date = date("Y", strtotime("+ 8 HOURS"));
    $conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());
    $qfecalysis = $conn->query("SELECT COUNT(*) as total FROM `fecalisys` WHERE `year` = '$date'");
    $ffecalysis = $qfecalysis->fetch_array();
    $qhematology = $conn->query("SELECT COUNT(*) as total FROM `hematology` WHERE `year` = '$date'");
    $fhematology = $qhematology->fetch_array();
    $qdental = $conn->query("SELECT COUNT(*) as total FROM `dental` WHERE `year` = '$date'");
    $fdental = $qdental->fetch_array();
    $qsputum = $conn->query("SELECT COUNT(*) as total FROM `sputum` WHERE `year` = '$date'");
    $fsputum = $qsputum->fetch_array();
    $qurinalysis = $conn->query("SELECT COUNT(*) as total FROM `urinalysis` WHERE `year` = '$date'");
    $furinalysis = $qurinalysis->fetch_array();
    $qpatients = $conn->query("SELECT COUNT(*) as total FROM `patient`"); // Count patients
    $fpatients = $qpatients->fetch_array(); // Fetch patients count
?>
<html lang="eng">
<head>
    <title>San Carlos Health Care Management System 2023</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../images/hc.png" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.css" />
    <link rel="stylesheet" type="text/css" href="../css/customize.css" />
    <?php require 'script.php'?>
    <style>
        body {
            background-color: #9ADE7B;
        }

        .navbar-default {
            background-color: #508D69;
            border-color: #9ADE7B;
        }

        .navbar-default .navbar-brand {
            color: #ffffff;
        }

        .navbar-default .navbar-brand:hover,
        .navbar-default .navbar-brand:focus {
            color: #ffffff;
        }

        .section-icon {
            font-size: 36px;
            margin-bottom: 10px;
        }
        <style>
    /* Define hover effect */
    .chart {
    transition: opacity 0.3s ease; /* Add transition effect */
}

.chart:hover {
    opacity: 0.8; /* Reduce opacity on hover */
}

</style>
    </style>
</head>
<body>
    <div class="navbar navbar-default navbar-fixed-top">
        <img src="../images/hc.png" style="float:center;" height="55px" /><label class="navbar-brand">San Carlos Health Care Management System</label>
        <?php 
            $q = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = $_SESSION[admin_id]") or die(mysqli_error());
            $f = $q->fetch_array();
        ?>
            <ul class="nav navbar-right">    
                <li class="dropdown">
                    <a class="user dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="glyphicon glyphicon-user"></span>
                        <?php 
                            echo $f['firstname']." ".$f['lastname'];
                        ?>
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
    <div id="sidebar">
            <ul id="menu" class="nav menu">
                <li><a href="home.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                <li><a href=""><i class="glyphicon glyphicon-cog"></i> Accounts</a>
                    <ul>
                        <li><a href="admin.php"><i class="glyphicon glyphicon-cog"></i> Medical Technologist</a></li>
                        <li><a href="user.php"><i class="glyphicon glyphicon-cog"></i> Chief Laboratory</a></li>
                        <li><a href="patient_user.php"><i class="glyphicon glyphicon-cog"></i> Patient Account</a></li>

                    </ul>
                </li>
                <li><a href="appointment.php"><i class="glyphicon glyphicon-calendar"></i> Appointment</a></li>
                <li><a href="patient.php"><i class="glyphicon glyphicon-user"></i> Patient</a></li>
                <li><a href="med.php"><i class="glyphicon glyphicon-user"></i> Medical Certificate</a></li>
                <li><a href=""><i class="glyphicon glyphicon-folder-close"></i> Sections</a>
                    <ul>
                        <li><a href="fecalysis.php"><i class="glyphicon glyphicon-folder-open"></i> Fecalysis</a></li>
                        <li><a href="hematology.php"><i class="glyphicon glyphicon-folder-open"></i> Hematology</a></li>
                        <li><a href="dental.php"><i class="glyphicon glyphicon-folder-open"></i> Dental</a></li>
                        <li><a href="sputum.php"><i class="glyphicon glyphicon-folder-open"></i> Sputum</a></li>
                        <li><a href="urinalysis.php"><i class="glyphicon glyphicon-folder-open"></i> Urinalysis</a></li>
                    </ul>
                </li>
            </ul>
    </div>
    <div id="content">
        <br />
        <br />
        <br />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>

        <div class="well">
            <div class="text-center">
            <div class="row">
                <div class="col-md-2">
                    <span class="glyphicon glyphicon-user section-icon" style="color: green;"></span>
                    <p>Patient Account: <?php echo $fpatients ? $fpatients['total'] : 0; ?></p> <!-- Display patient count -->
                </div>
                <div class="col-md-2">
                    <span class="glyphicon glyphicon-user section-icon" style="color: red;"></span>
                    <canvas id="fecalysisChart" width="100" height="100"></canvas>
                    <p>Fecalysis</p>
                </div>
                <div class="col-md-2">
                    <span class="glyphicon glyphicon-user section-icon" style="color: blue;"></span>
                    <canvas class="chart" id="hematologyChart" width="100" height="100"></canvas>
                    <p>Hematology</p>
                </div>
                <div class="col-md-2">
                    <span class="glyphicon glyphicon-user section-icon" style="color: green;"></span>
                    <canvas class="chart" id="dentalChart" width="100" height="100"></canvas>
                    <p>Dental</p>
                </div>
                <div class="col-md-2">
                    <span class="glyphicon glyphicon-user section-icon" style="color: orange;"></span>
                    <canvas class="chart" id="sputumChart" width="100" height="100"></canvas>
                    <p>Sputum</p>
                </div>
                <div class="col-md-2">
                    <span class="glyphicon glyphicon-user section-icon" style="color: purple;"></span>
                    <canvas class="chart" id="urinalysisChart" width="100" height="100"></canvas>
                    <p>Urinalysis</p>
                </div>
</div>

            </div>
        </div>
    </div>
    <div id="footer">
        <label class="footer-title">San Carlos Health Care Management System 2023</label>
    </div> 
</body>
</html>
<script>
    // Get all canvas elements with class "chart"
    var charts = document.querySelectorAll('.chart');

    // Add mouseover and mouseout event listeners to each canvas
    charts.forEach(function(chart) {
        chart.addEventListener('mouseover', function() {
            this.style.opacity = '0.8'; // Change opacity on hover
        });
        chart.addEventListener('mouseout', function() {
            this.style.opacity = '1'; // Reset opacity on mouseout
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#fecalysisChart').click(function() {
            drawChart('fecalysisChart', 'Fecalysis Chart', <?php echo $ffecalysis ? $ffecalysis['total'] : 0; ?>);
        });
        
        $('#hematologyChart').click(function() {
            drawChart('hematologyChart', 'Hematology Chart', <?php echo $fhematology ? $fhematology['total'] : 0; ?>);
        });
        
        $('#dentalChart').click(function() {
            drawChart('dentalChart', 'Dental Chart', <?php echo $fdental ? $fdental['total'] : 0; ?>);
        });
        
        $('#sputumChart').click(function() {
            drawChart('sputumChart', 'Sputum Chart', <?php echo $fsputum ? $fsputum['total'] : 0; ?>);
        });
        
        $('#urinalysisChart').click(function() {
            drawChart('urinalysisChart', 'Urinalysis Chart', <?php echo $furinalysis ? $furinalysis['total'] : 0; ?>);
        });
    });

    function drawChart(canvasId, title, data) {
        var ctx = document.getElementById(canvasId).getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Complaints'],
                datasets: [{
                    label: title,
                    data: [data],
                    backgroundColor: 'rgba(0, 100, 0, 0.2)', // Dark green background
borderColor: 'rgba(0, 100, 0, 1)', // Solid dark green border


                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        display: false // Hide the legend
                    }
                }
            }
        });
    }
</script>
