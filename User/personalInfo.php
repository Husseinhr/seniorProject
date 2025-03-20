<?php
include "../db_config.php";
session_start(); 
$email = $_SESSION['email'];

$sql = "SELECT `clientID`, `FN`, `LN`, `DOB`, `gender`, `nationality`,`maritalState`
        FROM `client` 
        WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);


// Assigning retrieved data to variables
$FN = $row['FN'];
$LN = $row['LN'];
$clientID = $row['clientID'];
$DOB = $row['DOB'];
$gender = $row['gender'];
$nationality = $row['nationality'];
$maritalState = $row['maritalState'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src ="../js/jquery-1.8.1.js" type="text/javascript" > 
    </script>
    <script src="../js/user.js" type = "text/javascript">
    </script>
        <link rel="stylesheet" href="../userAccount.css">
    <title>USER ACCOUNT</title>
</head>
<body>
<div class="containerP">
<div class="info-box">
  <div class="info-header">
    <p>Personal info</p>
    <img src="../pics/edit.png" style="width:30px;" id="PIEdit">
  </div>
  <div class="info-fields" id="info-fields">
  <div class="field">
      <p class="field-label">ID:</p>
      <p class="field-value"><?php echo"$clientID";?></p>
    </div>
    <div class="field">
      <p class="field-label">Name:</p>
      <p class="field-value"><?php echo"$FN".' '."$LN";?></p>
    </div>
    <div class="field">
      <p class="field-label">DOB:</p>
      <p class="field-value"><?php echo"$DOB";?></p>
    </div>
    <div class="field">
      <p class="field-label">Marital state:</p>
      <p class="field-value"><?php echo"$maritalState";?></p>
    </div>
    <div class="field">
      <p class="field-label">Nationality:</p>
      <p class="field-value"><?php echo"$nationality";?></p>
    </div>
  </div>
</div>
</div>
</body>
</html>