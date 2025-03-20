<?php
session_start();
include('../db_config.php');
$email = $_SESSION['email'];
$online = "off";
$stmt4 = $conn->prepare("UPDATE `client` SET `status`=? WHERE `email`='$email' " );
$stmt4->bind_param("s", $online);
$stmt4->execute();
session_destroy();
?>