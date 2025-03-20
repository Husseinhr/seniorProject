<?php

    session_start();
    include_once "../db_config.php";
    $outgoing_id = $_SESSION['employeeID'];
    $sql = "SELECT * FROM client WHERE 1 ORDER BY clientID DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>