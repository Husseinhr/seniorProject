<?php
include "db_config.php";
session_start(); 
$email = $_SESSION['email'];
if(!isset($_SESSION['email'])){
    header("location: login_sign.html");
  }
// Query 1
$sql = "SELECT `employeeID`, `FN`, `LN`, `email`, `position`, `picLoc`, `status` 
        FROM `employees` 
        WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
// Query 2
$sql1 = "SELECT `country`, `state`, `district`, `street`, `houseNumber`, `postalCode` 
         FROM `address`
         JOIN `employees` 
         ON address.`userID` = employees.`employeeID` 
         WHERE employees.email='$email'";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_array($result1);

// Query 3
$sql2 = "SELECT `DOB`, `gender`, `nationality`, `phoneNumber` 
         FROM `personalinfo`
         JOIN `employees` 
         ON personalinfo.`userID` = employees.`employeeID` 
         WHERE employees.email='$email'";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_array($result2);

// Assigning retrieved data to variables
$FN = $row['FN'];
$LN = $row['LN'];
$position = $row['position'];
$picLoc = $row['picLoc'];
$status = $row['status'];
$_SESSION['employeeID']=$row['employeeID'];

$country = $row1['country'];
$state = $row1['state'];
$district = $row1['district'];
$street = $row1['street'];
$houseNumber = $row1['houseNumber'];
$postalCode = $row1['postalCode'];

$DOB = $row2['DOB'];
$gender = $row2['gender'];
$nationality = $row2['nationality'];
$phoneNumber = $row2['phoneNumber'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src ="js/jquery-1.8.1.js" type="text/javascript" > 
    </script>
    <script src="js/scripts.js" type = "text/javascript">
    </script> 
    <!-- ===== ===== Custom Css ===== ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <!-- ===== ===== Remix Font Icons Cdn ===== ===== -->
    <link rel="stylesheet" href="fonts/remixicon.css">
        <link rel="stylesheet" href="css/employees.css">
        <title>Profile</title>

</head>

<body id="body">
<div id="mySidebar" class="sidebar">
  <a href="#" class="md">Main Dashboard</a>
  <hr style="height: 3px; border-width: 0; color: black; background-color: black;"> 
  <a href="#" id="showapplications">Applications</a>
  <hr style="height: 3px; border-width: 0; color: black; background-color: black;"> 
  <a href="#" id="manageEmployeeLink" >Manage Employee</a>
  <hr style="height: 3px; border-width: 0; color: black; background-color: black;">
  <a href="#" id="open-button" class="open-button">Client Message</a>
  <hr style="height: 3px; border-width: 0; color: black; background-color: black;">
  <a href="#" id="viewStatistics">View Statistics</a>
  <hr style="height: 3px; border-width: 0; color: black; background-color: black;">
  <a href="#" id="logout" >Logout</a>
</div>
    <!-- ===== ===== Body Main-Background ===== ===== -->
    <span class="main_bg" id="main_bg"></span>

    <div id="chat-popup" class="form-popup">
    <div id="chat-container"></div>
    <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
        <?php       
            $sql = mysqli_query($conn, "SELECT * FROM employees WHERE employeeID = {$_SESSION['employeeID']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="employeespic/<?php echo $row['picLoc']; ?>" alt="">

          <div class="details">
            <span><?php echo $row['FN']. " " . $row['LN'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>
    </div>
    <!-- ===== ===== Main-Container ===== ===== -->
    <div class="container" id="container">

        <!-- ===== ===== Header/Navbar ===== ===== -->
        <header>
            <div class="brandLogo">
                 <span>Your Account</span>
            </div>
        </header>
        <!-- ===== ===== User Main-Profile == === ===== -->
        <section class="userProfile card">
            <div class="profile">
                <figure><img src="employeespic/<?php echo"$picLoc";?>" alt="profile" width="250px" height="250px"></figure>
            </div>
        </section>

        
        <!-- ===== ===== Work & Skills Section ===== ===== -->
        <section class="work_skills card">

            <!-- ===== ===== Work Contaienr ===== ===== -->
            <div class="work">
                <h1 class="heading">Address</h1>
                <span class="info"><?php echo "$country"."-"."$state"."-"."$district"; ?></span>
                <br>
                <span class="info"><?php echo "$street"."-"."$houseNumber"."-"."$postalCode"; ?></span>
            </div>
            <div class="skills">
                <h1 class="heading">PersonalInfo</h1>
                <h2 class="label">Date of Birth</h2>
                <span class="info"><?php echo "$DOB"; ?></span>
                <h2 class="label">Gender:</h2>
                <span class="info"><?php echo "$gender"; ?></span>
                <h2 class="label">Nationality:</h2>
                <span class="info"><?php echo "$nationality"; ?></span>
            </div>
        </section>


        <!-- ===== ===== User Details Sections ===== ===== -->
        <section class="userDetails card">
            <div class="userName">
                <h1 style="text-transform: capitalize;" class="name"><?php echo "$FN"." "."$LN"; ?></h1>
                <div class="map">
                    <i class="ri-map-pin-fill ri"></i>
                    <span><?php echo "$country"; ?></span>
                </div>
            </div>

            <div class="rank">
                <h1 class="heading">Status</h1>
                <span style="color:green;"><?php echo "$status"; ?></span>
                
            </div>

        </section>

        <section class="timeline_about card" id="myBox">
            <div class="tabs">
                <ul>
                    <li class="about active">
                        <i class="ri-user-3-fill ri"></i>
                        <span >About</span>
                    </li>
                </ul>
            </div>

            <div class="contact_Info">
                <h1 class="heading">Contact Information</h1>
                <ul>
                    <li class="phone">
                        <h1 class="label">Name:</h1>
                        <span class="info"><?php echo "$FN"." "."$LN"; ?></span>
                    </li>

                    <li class="address">
                        <h1 class="label">Position:</h1>
                        <span class="info"><?php echo "$position"; ?></span>
                    </li>

                    <li class="email">
                        <h1 class="label">E-mail:</h1>
                        <span class="info"><?php echo "$email"; ?></span>
                    </li>

                    <li class="site">
                        <h1 class="label">phone:</h1>
                        <span class="info"><?php echo "$phoneNumber"; ?></span>
                    </li>
                </ul>
            </div>

        </section>
    </div>
    <script src="javascript/users.js"></script>
    <script>
document.addEventListener("DOMContentLoaded", function() {
    var openButton = document.getElementById('open-button');
    var chatPopup = document.getElementById('chat-popup');

    openButton.addEventListener('click', function() {
        chatPopup.style.display = 'block';
    });

    // Add an event listener to close the chat form when the user clicks outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.form-popup') && !event.target.closest('.open-button')) {
            chatPopup.style.display = 'none';
        }
    });
});
</script>
    <script src="script.js"></script>
<script>

    
</script>
</body>

</html>
