<?php
include "../db_config.php";
session_start(); 
$email = $_SESSION['email'];

$sql = "SELECT `clientID`, `FN`, `LN`, `status`, `country`, `state`, `district`, `street`, `houseNumber`, `postalCode`, `DOB`, `gender`, `nationality`, `phoneNumber`  
        FROM `client` 
        WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);


// Assigning retrieved data to variables
$FN = $row['FN'];
$LN = $row['LN'];
$status = $row['status'];

$country = $row['country'];
$state = $row['state'];
$district = $row['district'];
$street = $row['street'];
$houseNumber = $row['houseNumber'];
$postalCode = $row['postalCode'];

$DOB = $row['DOB'];
$gender = $row['gender'];
$nationality = $row['nationality'];
$phoneNumber = $row['phoneNumber'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/jquery-1.8.1.js" type="text/javascript"></script>
    <script src="../js/user.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../css/userAccount.css">
    <title>USER ACCOUNT</title>
</head>
<body>

<div id="mySidebar" class="sidebar">
  <a href="#" class="md">Regoss</a>
  <hr style="height: 3px; border-width: 0; color: black; background-color: black;"> 
  <a href="#" class="acc" id="showapplications" name="showapplications">Account</a>
  <hr style="height: 3px; border-width: 0; color: black; background-color: black;"> 
  <a href="#" id="settingDataLink" >setting/data</a>
  <hr style="height: 3px; border-width: 0; color: black; background-color: black;">
  <a href="#" id="notification" class="acc">Notification</a>
  <hr style="height: 3px; border-width: 0; color: black; background-color: black;">
  <a href="#" id="logout">Logout</a>
</div>
    <!-- ===== ===== Body Main-Background ===== ===== -->
    <span class="main_bg" id="main_bg"></span>
    <div class="containerz" id="containerz">

            <div class="brandLogo">
            <figure><img src="../pics/prof.png" ></figure>
            <div class="top">
                 <span  class="name"><?php echo "$FN".' '."$LN";?></span>
                 <span class="status">status: <span style="color:green;"> <?php echo "$status";?></span></span>
                 </div>
            </div>
            <div class="brandLogoA">
                 <span style="font-size:20px">Service you apply in:</span>
            </div>
        <div class="spec">
            <ul>
                    <li class="sendMsg active">
                        <p id="Name" >Application ID</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="Email" >Service</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="position" >Date of submition</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="Status" >Status</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="lastlogin" >Paid</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="lastlogout" >Drop</p>
                    </li>
                </ul>
                <hr style="height: 3px; border-width: 0; color: black; background-color: black; width: 50rem;">
            </div>
            <div class="specA">
            <ul>
                    <li class="sendMsg active">
                        <p id="Name" >1234</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="Email" >Arbeitesloss</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="position" >8-12-2024</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="Status" >in progress</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="lastlogin" >not paid</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="lastlogout" >icon</p>
                    </li>
                </ul>
            </div>
            <div class="specA">
            <ul>
            <li class="sendMsg active">
                        <p id="Name" >1234</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="Email" >Arbeitesloss</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="position" >8-12-2024</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="Status" >in progress</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="lastlogin" >paid</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="lastlogout" >icon</p>
                    </li>
                </ul>
            </div>
            <div class="specA">
            <ul>
            <li class="sendMsg active">
                        <p id="Name" >1234</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="Email" >Arbeitesloss</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="position" >8-12-2024</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="Status" >in progress</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="lastlogin" >paid</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="lastlogout" >icon</p>
                    </li>
                </ul>
            </div>
        </div>
</body>
</html>