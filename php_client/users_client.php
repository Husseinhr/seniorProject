<?php

    session_start();
    include_once "../db_config.php";
    $outgoing_id = $_SESSION['clientID'];
    $sql = "SELECT * FROM employees WHERE 1 ORDER BY employeeID DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data_client.php";
    }
    echo $output;
?>