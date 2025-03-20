<?php
include "../db_config.php";
session_start(); 
$email = $_SESSION['email'];

$sql = "SELECT `phoneNumber`  
        FROM `client` 
        WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);


// Assigning retrieved data to variables
$phoneNumber = $row['phoneNumber'];
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
<div class="containerContakt">
<div class="info-boxContakt">
  <div class="info-headerContakt">
    <p>Contakt</p>
    <img src="../pics/edit.png" style="width:30px;" id="CEdit">
  </div>
  <div class="info-fieldsContakt" id="info-fieldsContakt">
    <div class="fieldContakt">
      <p class="field-labelContakt">TelephoneNumer:</p>
      <p class="field-valueContakt"><?php echo "$phoneNumber";?></p>
    </div>
    <div class="fieldContakt">
      <p class="field-labelContakt">Email:</p>
      <p class="field-valueContakt"><?php echo "$email";?></p>
    </div>
  </div>
</div>
</div>
</body>
</html>