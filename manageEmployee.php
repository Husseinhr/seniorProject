<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src ="js/jquery-1.8.1.js" type="text/javascript" > 
    </script>
    <script src="js/scripts.js" type = "text/javascript">
    </script> 
    <link rel="stylesheet" href="employe.css">

    <title>Document</title>
</head>
<body>
<div id="mySidebar" class="sidebarA">
<a href="#" class="md">Manage Employee</a>
<hr style="height: 3px; border-width: 0; color: black; background-color: black;">
  <a href="#" >Employees Accounts</a>
  <hr style="height: 3px; border-width: 0; color: black; background-color: black;">
  <a href="#" id="addEmployee" >Add Employee</a>
  <hr style="height: 3px; border-width: 0; color: black; background-color: black;">
  <a href="#" id="deleteEmployee">Delete Employee</a>
  <hr style="height: 3px; border-width: 0; color: black; background-color: black;">
  <a href="#" id="updateEmployee">Update Employee</a>
</div>
<div class="containerA" id="containerA">

            <div class="brandLogoA">
                 <span style="font-size:25px">Employees Accounts</span>
                 <hr style="height: 3px; border-width: 0; color: black; background-color: black; width: 28rem;">
            </div>

            <div class="spec">
            <ul>
                    <li class="sendMsg active">
                        <p id="Name" >Name</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="Email" >Email</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="position" >position</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="Status" >Status</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="lastlogin" >last login</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="lastlogout" >last logout</p>
                    </li>
                </ul>
                <hr style="height: 3px; border-width: 0; color: black; background-color: black; width: 72rem;">
            </div>
            <?php
include('db_config.php');
        $sql = "SELECT `FN`, `LN`, `email`, `position`, `status`, `lastLogin`, `lastLogout` FROM `employees` WHERE 1";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
            ?>
            <div class="specA">
            <ul>
                   <li class="sendMsg active">
                        <p id="Name" ><?php echo $row['FN'].$row['LN']; ?></p>
                    </li>
                    <li class="sendMsg active">
                        <p id="Email" ><?php echo $row['email']; ?></p>
                    </li>
                    <li class="sendMsg active">
                        <p id="position" ><?php echo $row['position']; ?></p>
                    </li>
                    <li class="sendMsg active">
                        <p id="Status" ><?php echo $row['status']; ?></p>
                    </li>
                    <li class="sendMsg active">
                        <p id="lastlogin" ><?php echo $row['lastLogin']; ?></p>
                    </li>
                    <li class="sendMsg active">
                        <p id="lastlogout" ><?php echo $row['lastLogout']; ?></p>
                    </li>
                </ul>
                <hr style="height: 1px; border-width: 0; color: black; background-color: black; width: 72rem;">
            </div>
<?php }?>
</div>
<script src="script.js"></script>
</body>
</html>