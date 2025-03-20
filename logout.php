<?php
session_start();
include('db_config.php');
$email = $_SESSION['email'];
$online = "off";
date_default_timezone_set('Asia/Beirut');
$current_time = date('H:i:s');
$stmt4 = $conn->prepare("UPDATE `employees` SET `status`=?, `lastLogout`=? WHERE `email`='$email' " );
$stmt4->bind_param("ss", $online, $current_time);
$stmt4->execute();

?>