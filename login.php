<?php
session_start(); 
include('db_config.php');

$email = $_POST['email'];
$pass = $_POST['password'];

if (empty($email) || empty($pass)) {
  header("Location: login.html?error=Username and password are required");
  exit();
}

$stmt1 = $conn->prepare("SELECT password FROM client WHERE email = ?");
$stmt1->bind_param("s", $email);

$stmt2 = $conn->prepare("SELECT password FROM employees WHERE email = ?");
$stmt2->bind_param("s", $email);

$stmt1->execute();
$stmt1->store_result();
$stmt2->execute();
$stmt2->store_result();

// Debug: Check if email exists in client table
if ($stmt1->num_rows > 0) {
  $stmt1->bind_result($hashed_pass);
  $stmt1->fetch();
  
  // Debug: Check if password verification is successful
  if (password_verify($pass, $hashed_pass)) {
    $_SESSION['email'] = $email;
    $online = "online";
    
    $stmt3 = $conn->prepare("UPDATE client SET status = ? WHERE email = ?");
    $stmt3->bind_param("ss", $online, $email);
    $stmt3->execute();
    
    $sql = $conn->prepare("SELECT clientID FROM client WHERE email = ?");
    $sql->bind_param("s", $email);
    $sql->execute();
    $result = $sql->get_result();

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $_SESSION['clientID'] = $row['clientID'];
    }

    header("Location: homepgCL.php");
    exit();
  } else {
    // Debug: Password verification failed
    error_log("Password verification failed for client: $email");
  }
}

// Debug: Check if email exists in employees table
if ($stmt2->num_rows > 0) {
  $stmt2->bind_result($hashed_pass);
  $stmt2->fetch();
  
  // Debug: Check if password verification is successful
  if (password_verify($pass, $hashed_pass)) {
    $sql1 = $conn->prepare("SELECT email, FN, LN, password, position, picLoc FROM employees WHERE email = ?");
    $sql1->bind_param("s", $email);
    $sql1->execute();
    $result = $sql1->get_result();
    $emp = $result->fetch_assoc();

    $_SESSION['email'] = $email;
    $online = "online";
    date_default_timezone_set('Asia/Beirut');
    $current_time = date('H:i:s');
    
    $stmt4 = $conn->prepare("UPDATE employees SET status = ?, lastLogin = ? WHERE email = ?");
    $stmt4->bind_param("sss", $online, $current_time, $email);
    $stmt4->execute();
    
    header("Location: employee.php");
    exit();
  } else {
    // Debug: Password verification failed
    error_log("Password verification failed for employee: $email");
  }
}

$stmt1->close();
$stmt2->close();
$conn->close();

// Debug: Email not found or password incorrect
error_log("Invalid username or password for email: $email");
header("Location: login.html?error=Invalid username or password");
exit();
?>
