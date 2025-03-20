<?php
include "../db_config.php";
session_start(); 
$email = $_SESSION['email'];

$sql = "SELECT `country`, `state`, `district`, `street`, `houseNumber`, `postalCode`
        FROM `client` 
        WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);


$country = $row['country'];
$state = $row['state'];
$district = $row['district'];
$street = $row['street'];
$houseNumber = $row['houseNumber'];
$postalCode = $row['postalCode'];


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
        <link rel="stylesheet" href="../css/userAccount.css">
    <title>USER ACCOUNT</title>
</head>
<body>
<div class="containeraddress">
<div class="info-boxaddress">
  <div class="info-headeraddress">
    <p>Address</p>
    <img src="../pics/edit.png" style="width:30px;" id="ADEdit" >
  </div>
  <div class="info-fieldsaddress" id="info-fieldsaddress">
    <div class="fieldaddress">
      <p class="field-labeladdress">Country:</p>
      <p class="field-valueaddress"><?php echo"$country";?></p>
    </div>
    <div class="fieldaddress">
      <p class="field-labeladdress">State:</p>
      <p class="field-valueaddress"><?php echo"$state";?></p>
    </div>
    <div class="fieldaddress">
      <p class="field-labeladdress">District:</p>
      <p class="field-valueaddress"><?php echo"$district";?></p>
    </div>
    <div class="field">
      <p class="field-labeladdress">Postal Code:</p>
      <p class="field-valueaddress"><?php echo"$postalCode";?></p>
    </div>
    <div class="field">
      <p class="field-labeladdress">Hausnummer:</p>
      <p class="field-valueaddress"><?php echo"$houseNumber";?></p>
    </div>
  </div>
</div>
</div>
</body>
</html>