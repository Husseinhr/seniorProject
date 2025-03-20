<?php
include "../db_config.php";
session_start(); 
$email = $_SESSION['email'];

$sql = "SELECT `phoneNumber`  
        FROM `client` 
        WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

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
</head>
<form  method="post" action="userSettingCD.php" onsubmit="return validateForm()">
     <div class="fieldContakt">
      <p class="field-labelContakt">TelephoneNumer:</p>
      <input type="text" name="phoneNumber" placeholder="<?php echo "$phoneNumber";?>"> 
    </div>
    <div class="fieldContakt">
      <p class="field-labelContakt">Email:</p>
      <p class="field-valueContakt"><?php echo "$email";?></p>
    </div>
    <input  type="submit" name="editC" value="save" id="inp">
    </form>
</div>
</div>
 </html>