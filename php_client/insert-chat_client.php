<?php 
    session_start();
    if(isset($_SESSION['clientID'])){
        include_once "../db_config.php";
        $outgoing_id = $_SESSION['clientID'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        if(!empty($message)){
            $sql = mysqli_query($conn, "INSERT INTO chat (incoming_msg_id, outgoing_msg_id, msg)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}')") or die();
        }
    }else{
        header("location: ../login_sign.html");
    }


    
?>