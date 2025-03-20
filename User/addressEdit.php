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
<form  method="post" action="userSettingCD.php" onsubmit="return validateForm()">

    <div class="fieldaddress">
      <p class="field-labeladdress">Country:</p>
      <input type="text" name="country" placeholder=" <?php echo"$country";?>">
    </div>
    <div class="fieldaddress">
      <p class="field-labeladdress">State:</p>
      <input type="text"  name="state" placeholder="<?php echo"$state";?>"> 
    </div>
    <div class="fieldaddress">
      <p class="field-labeladdress">District:</p>
      <input type="text"  name="district" placeholder="<?php echo"$district";?>"> 
    </div>
    <div class="field">
      <p class="field-labeladdress">Postal Code:</p>
      <input type="text"  name="postalCode" placeholder="<?php echo"$postalCode";?>"> 
    </div>
    <div class="field">
      <p class="field-labeladdress">Hausnummer:</p>
      <input type="text"  name="houseNumber" placeholder="<?php echo"$houseNumber";?>"> 
    </div>
    <input  type="submit" name="editAd" value="save" id="inp">

    </form>
</form>
</html>