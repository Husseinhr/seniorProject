<?php
session_start();
require_once 'db_config.php';

$file = $_FILES['file'];

// Check if the file is uploaded successfully
    // Get the file extension
    $fileExtension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

    // Create a unique file name using the userID
    $userID = $_SESSION['userID'];
    $fileName = $userID . '_' . $file['name'];

    // Move the uploaded file to the "doneApp" folder
    $targetDir = "doneApp/";
    $targetFile = $targetDir . $fileName;
    move_uploaded_file($file['tmp_name'], $targetFile);

    // Insert the file path into the database
    $stmt = $conn->prepare("UPDATE applications SET uploadPath = ? WHERE appID = ?");
    $stmt->bind_param("ss", $uploadPath, $appID);
    $uploadPath = $targetFile;
    $stmt->execute();

    echo 'File uploaded and path inserted successfully';

?>