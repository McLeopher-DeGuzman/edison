<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patient Readmission Prediction</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #4caf50;
    }
    .container {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    label {
      font-weight: bold;
    }
    input[type="text"], input[type="submit"] {
      padding: 8px;
      margin-bottom: 10px;
      border-radius: 4px;
      border: 1px solid #4caf50;
    }
    input[type="submit"] {
      background-color: #4caf50;
      color: #000;
      cursor: pointer;
    }
    h2 {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Patient Readmission Prediction</h1>
    <form method="post" action="predict.php">
      <label for="patient_id">Enter Patient ID:</label><br>
      <input type="text" id="patient_id" name="patient_id" required><br><br>
      <input type="submit" value="Predict">
    </form>

    <?php
    if(isset($_POST['patient_id'])) {
        $patient_id = $_POST['patient_id'];

        function predict_readmission($patient_id) {
            // You can implement your predictive analysis logic here
            // For the sake of this example, let's just return a random prediction (0 or 1)
            return rand(0, 1);
        }

        $prediction = predict_readmission($patient_id);

        echo "<h2>Patient Readmission Risk Prediction</h2>";
        echo "<p>Patient ID: $patient_id</p>";
        echo "<p>Readmission Risk: " . ($prediction ? "Pwede ka nang mamatay" : "Low") . "</p>";
    } else {
        echo "<p>Please enter a patient ID.</p>";
    }
    ?>
  </div>
</body>
</html>
