<?php
    session_start();
    include_once "../db_config.php";

    $outgoing_id = $_SESSION['employeeID'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);

    $sql = "SELECT * FROM client WHERE (FN LIKE '%{$searchTerm}%' OR LN LIKE '%{$searchTerm}%') ";
    $output = "";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }else{
        $output .= 'No user found related to your search term';
    }
    echo $output;
?>