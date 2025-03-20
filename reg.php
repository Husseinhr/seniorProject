<?php
session_start();

// First page 
if(isset($_POST['sig'])){

    $_SESSION['FN'] = $_POST['FN'];
    $_SESSION['LN'] = $_POST['LN'];
    $_SESSION['email'] = $_POST['email'];
    $password = $_POST['password'];
    
    // Encrypt password
    $_SESSION['encrypted_password'] = password_hash($password, PASSWORD_DEFAULT);
    
    // Generate authentication code
    $authCode = mt_rand(100000, 999999);
    
    // Store authentication code in session
    $_SESSION['auth_code'] = $authCode;
    
    // Set up PHPMailer
    
    $receiver = $_SESSION['email'];
    $subject = "Email Test via PHP using Localhost";
    $body = 'Hi, there... This is a test email sent from Localhost '.$_SESSION['auth_code'];
    $sender = "From: 11931520@students.liu.edu.lb";
    $headers = "From: $sender\r\n"; // Corrected "From" header format
    
    // Send email containing authentication code
    if (mail($receiver, $subject, $body, $sender)) {
        // Redirect to authentication page
        header("Location: auth.php");
        exit();
    } else {
        // Email sending failed
        echo 'Email sending failed. Please try again. Error: ' ;
    }}
?>
