<?php
 //                       CHANGE PASSWORD                     //
if (isset($_POST['chngps'])) {
    session_start();
    include '../db_config.php'; 
    $email = $_SESSION['email'];
    $oldpassword = $_POST['oldpassword'];
    $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT password FROM client WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($hashed_pass);
        $stmt->fetch();

        if (password_verify($oldpassword, $hashed_pass)) {
            $new_hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt_update = $conn->prepare("UPDATE client SET password = ? WHERE email = ?");
            $stmt_update->bind_param("ss", $new_hashed_password, $email);
            if ($stmt_update->execute()) {
                echo "<script>alert('Password changed successfully');</script>";
                header('Location: ../login_sign.html'); // redirect to dashboard after password change
                exit;
            } else {
                echo "<script>alert('Error updating password');</script>";
            }
        } else {
            echo "<script>alert('Incorrect old password');</script>";
        }
    } 
//           DELET ACCOUNT           //      

 if (isset($_POST['deleteAc'])) {
    session_start();
    include '../db_config.php';
    $email = $_SESSION['email'] ;
    $password = $_POST['password'];

    if ($email) {
        $stmt = $conn->prepare("SELECT password FROM client WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($hashed_pass);
        $stmt->fetch();

        if (password_verify($password, $hashed_pass)) {
            $stmt_delete = $conn->prepare("DELETE FROM `client` WHERE email = ?");
            $stmt_delete->bind_param("s", $email);
            if ($stmt_delete->execute()) {
                echo "acc deleted successfully";
                header('Location: ../login_sign.html'); // redirect to dashboard after password change
            } else {
                echo "Error deleting acc";
            }
        } else {
            echo "Incorrect  password";
        }
    } else {
        echo "User not authenticated";
    }
}


//            change Contact info           //      

if (isset($_POST['editPI'])) {
    session_start();
    include '../db_config.php';
    $email = $_SESSION['email'] ;
    $maritalState = $_POST['maritalState'];
    $nationality = $_POST['nationality'];

    if ($email) {
        if($maritalState !== ""){
            $stmt_update = $conn->prepare("UPDATE `client` SET `maritalState`=? WHERE email = ?");
            $stmt_update->bind_param("si", $maritalState, $email);
            if ($stmt_update->execute()) {
            } else {
                echo "Error updating marital state";
            }
        }

        if($nationality !== ""){
            $stmt_update = $conn->prepare("UPDATE `client` SET `nationality`=? WHERE email = ?");
            $stmt_update->bind_param("si", $nationality, $email);
            if ($stmt_update->execute()) {
             } else {
                echo "Error updating nationality";
            }
        }
        header('Location: userAccount.php'); // redirect to dashboard after password change

    } else {
        echo "User not authenticated";
    }
}




////////////////////////////////////////

if (isset($_POST['editC'])) {
    session_start();
    include '../db_config.php';
    $email = $_SESSION['email'] ;
    $phoneNumber = $_POST['phoneNumber'];

    if ($email) {
        if($phoneNumber !== ""){
            $stmt_update = $conn->prepare("UPDATE `client` SET `phoneNumber`=? WHERE email = ?");
            $stmt_update->bind_param("si", $phoneNumber, $email);
            if ($stmt_update->execute()) {
                header('Location: userAccount.php');
            } else {
                echo "Error updating marital state";
            }
        }
    } else {
        echo "User not authenticated";
    }
}


///////////////
if (isset($_POST['editAd'])) {
    session_start();
    include '../db_config.php';
    $email=$_SESSION['email'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $houseNumber = $_POST['houseNumber'];
    $postalCode = $_POST['postalCode'];


    if ($email) {
        if($country !== ""){
            $stmt_update = $conn->prepare("UPDATE `client` SET `country`=? WHERE email = ?");
            $stmt_update->bind_param("si", $country, $email);
            if ($stmt_update->execute()) {
            } else {
                echo "Error updating marital state";
            }
        }
         
        if($state !== ""){
            $stmt_update = $conn->prepare("UPDATE `client` SET `state`=? WHERE email = ?");
            $stmt_update->bind_param("si", $state, $email);
            if ($stmt_update->execute()) {
             } else {
                echo "Error updating marital state";
            }
        }
        if($district !== ""){
            $stmt_update = $conn->prepare("UPDATE `client` SET `district`=? WHERE email = ?");
            $stmt_update->bind_param("si", $district, $email);
            if ($stmt_update->execute()) {
             } else {
                echo "Error updating marital state";
            }
        }
        if($postalCode !== ""){
            $stmt_update = $conn->prepare("UPDATE `client` SET `postalCode`=? WHERE email = ?");
            $stmt_update->bind_param("si", $postalCode, $email);
            if ($stmt_update->execute()) {
             } else {
                echo "Error updating marital state";
            }
        }
        if($houseNumber !== ""){
            $stmt_update = $conn->prepare("UPDATE `client` SET `houseNumber`=? WHERE email = ?");
            $stmt_update->bind_param("si", $houseNumber, $email);
            if ($stmt_update->execute()) {
            } else {
                echo "Error updating marital state";
            }
        }
        header('Location: userAccount.php');
    } else {
        echo "User not authenticated";
    }
}

?>