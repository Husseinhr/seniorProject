<!DOCTYPE html>
<html lang="en">

<head>
    <title>Signup</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/auth.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css"/>
    <script>
        function validateForm() {
            var firstName = document.getElementById('auth').value;

            if (firstName === '' || lastName === '' || username === '' || password === '') {
                alert('All fields must be filled out');
                return false;
            }

            return true;
        }
    </script>
</head>

<body>
    <div class="background">
       <div class="container">
            <form  method="post" >
                <h1>Authentication</h1>
                <div>
                    <input type="text" id="auth" name="authcd" placeholder="Enter code you receive">
                </div>
                <button type="submit" name="auth">submit</button>
            </form>
        </div>
    </div>

</body>
</html>

<?php
session_start();
echo $_SESSION['auth_code'];
?>

<!-- -->
<?php
if(isset($_POST['auth'])){

// Include database configuration
include('db_config.php');

// Check if the form is submitted
if(isset($_POST['authcd'])) {
    // Get authentication code entered by the user
    $user_auth_code = (int) $_POST['authcd'];
    // Retrieve authentication code from session
    $stored_auth_code = (int) $_SESSION['auth_code'];

    // Compare the entered code with the stored one
    if($user_auth_code === $stored_auth_code) {
        // Get user input
        $email = $_SESSION['email'];
$password1=$_SESSION['encrypted_password'];
        // Store user data in the database
        $sql = "INSERT INTO `client`(`FN`, `LN`, `email`, `password`) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $_SESSION['FN'], $_SESSION['LN'], $_SESSION['email'], $password1);
        if($stmt->execute()){
        $stmt->close();
        header("Location: homepgCL.php");
        exit();
    } else {
        // Authentication failed
        echo "Invalid authentication code. Please try again.";
    }
} else {
    // Redirect to authentication page if accessed directly
    header("Location: auth.html");
    exit();
}
}}
?>