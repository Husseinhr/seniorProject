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
</head>

<form  method="post" action="userSettingCD.php" onsubmit="return validateForm()">
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
      <select name="maritalState"  id="maritalState">
                  <option value="" hidden><?php echo"$maritalState";?></option>
                  <option value="Aufenthaltserlaubnis" >Aufenthaltserlaubnis</option>
                  <option value="Niederlassungserlaubnis">Niederlassungserlaubnis</option>
                  <option value="Staatsangehörigkeit">Staatsangehörigkeit</option>
                  <option value="Duldung">Duldung</option>
                  <option value="Aufenthaltsgestattung">Aufenthaltsgestattung</option>
                  <option value="Sonstiges">Sonstiges</option>
       </select>
    </div>
    <div class="field">
      <p class="field-label">Nationality:</p>
      <input name="nationality" type="text" placeholder="<?php echo"$nationality";?>">
    </div>
    <input  type="submit" name="editPI" value="save" id="inp">
</form>
</html>