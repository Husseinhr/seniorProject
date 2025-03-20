
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src ="js/jquery-1.8.1.js" type="text/javascript" > 
    </script>
    <script src="js/scripts.js" type = "text/javascript">
    </script> 

    <title>Document</title>
</head>
<body>
<div class="containerB" id="containerB">

            <div class="brandLogoA">
                 <span style="font-size:25px">Application</span>
                 <hr style="height: 3px; border-width: 0; color: black; background-color: black; width: 28rem;">
            </div>

            <div class="spec">
            <ul>
                    <li class="sendMsg active">
                        <p id="ApplicationID" >ApplicationID</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="Service" >Service Name</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="ClientName" >ClientName</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="Date" >Date of Submition</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="Status" >Status</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="paid" >paid</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="viewVA" >viewVolmacht</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="viewAA" >viewApplication</p>
                    </li>
                    <li class="sendMsg active">
                        <p id="upload" >upload</p>
                    </li>
                </ul>
                <hr style="height: 3px; border-width: 0; color: black; background-color: black; width: 110rem;">
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <?php
include('db_config.php');
        $sql = "SELECT `appID`, `applicationPath`, `vollmachtPath`, `serviceName`, `clientID`, `status`, `paid`, `submitionDate` FROM `appllications` WHERE 1";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $sql1 = "SELECT `FN`, `LN`, `email`, `status`, `country`, `state`, `district`, `street`, `houseNumber`, `postalCode`, `DOB`, `gender`, `nationality`, `maritalState`, `phoneNumber` FROM `client` WHERE `clientID`={$row['clientID']}";  
        $result2 = mysqli_query($conn, $sql1);
        $row1 = mysqli_fetch_array($result2);
           ?>
            <div class="specA">
            <ul>
                   <li class="sendMsg active">
                        <p id="ApplicationID" ><?php echo $row['appID']; ?></p>
                    </li>
                    <li class="sendMsg active">
                        <p id="Service" ><?php echo $row['serviceName']; ?></p>
                    </li>
                    <li class="sendMsg active">
                        <p id="ClientName" ><?php echo $row1['FN'].' '.$row1['LN']; ?></p>
                    </li>
                    <li class="sendMsg active">
                        <p id="Date" ><?php echo $row['submitionDate']; ?></p>
                    </li>
                    <li class="sendMsg active">
                        <p id="Status" ><?php echo $row['status']; ?></p>
                    </li>
                    <li class="sendMsg active">
                        <p id="paid" ><?php echo $row['paid']; ?></p>
                    </li>
                    <li class="sendMsg active">
                        <button style="background:#005567;color:white; border-radius: 10%; margin-right: 50px;" type="button" id="viewV" class="viewV">view</button>
                    </li>
                    <li class="sendMsg active">
                        <button style="background:#005567;color:white; border-radius: 10%; margin-left: 40px;" type="button" id="viewA" class="viewA">view</button>
                    </li>
                    <li class="sendMsg active">
    <input style="background:#005567;color:white; border-radius: 10%; margin-left: 40px;width:150px;" type="file" id="uploadFile-<?php echo $row['appID']; ?>" name="uploadFile-<?php echo $row['appID']; ?>" class="uploadFile">
</li>
<li class="sendMsg active">
    <button style="background:#005567;color:white; border-radius: 10%; margin-left: 40px;" type="submit" id="submit-button-<?php echo $row['appID']; ?>" name="submitted" value="1" class="submit-button">Submit</button>
</li>
                </ul>
                <hr style="height: 1px; border-width: 0; color: black; background-color: black; width: 110rem;">
            </div>
            <?php
session_start(); // start the session

include "db_config.php";

if (isset($_POST['submit'])) {
    $appID = $_POST['appID'];
    $uploadFile = $_FILES['uploadFile-' . $appID];

    if (isset($uploadFile) && is_uploaded_file($uploadFile['tmp_name'])) {
        $target_dir = "doneApp/";
        $target_file = $target_dir . basename($uploadFile["name"]);
        $uploadOk = 1;
        $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($uploadFile["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($fileType != "pdf" && $fileType != "docx" && $fileType != "doc") {
            echo "Sorry, only PDF, DOCX, and DOC files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($uploadFile["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($uploadFile["name"])) . " has been uploaded.";

                // Insert file path into database
                $sql = "UPDATE applications SET applicationPath = '$target_file' WHERE appID = '$appID'";
                mysqli_query($conn, $sql);
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "Error: There was a problem with your file upload.";
    }
}

?>
            <script>
document.querySelectorAll('.viewV').forEach(function(button) {
  button.addEventListener('click', function() {
    var vollmachtPath = 'vollmacht/<?php echo $row['vollmachtPath']; ?>';
    window.open(vollmachtPath);
  });
});
document.querySelectorAll('.viewA').forEach(function(button) {
  button.addEventListener('click', function() {
    var vollmachtPath = 'completed/<?php echo $row['applicationPath']; ?>';
    window.open(vollmachtPath);
  });
});
</script>
<?php }?>
</form>
</div>

<script src="script.js"></script>

</body>
</html>