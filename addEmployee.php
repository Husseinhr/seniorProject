<html lang="en">
    <title>Add employee</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src ="js/jquery-1.8.1.js" type="text/javascript" > 
    </script>
    <script src="js/script.js" type = "text/javascript">
    </script> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css"/>
    <link rel="stylesheet" href="css/emloyee.css"/>
    <script>
        function validateForm() {
            var firstName = document.getElementById('FN').value;
            var lastName = document.getElementById('LN').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;

            if (firstName === '' || lastName === '' || email === '' || password === '') {
                alert('All fields must be filled out');
                return false;
            }

            return true;
        }
    </script>
<div class="brandLogoA">
                 <span style="font-size:25px">Employees Accounts</span>
                 <hr style="height: 3px; border-width: 0; color: black; background-color: black; width: 28rem;">
            </div>
    <form  method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
    <div class="regfcontainer">
       <div class="regf">
                <h1>Account Info</h1>
                <div>
                    <input type="text" class="FN" id="FN" name="FN" placeholder="Vorname">
                </div>
                <div>
                    <input type="text" class="LN" id="LN" name="LN" placeholder="Familienname">
                </div>
                <div>
                    <input type="text" class="email" id="email" name="email" placeholder="Email">
                </div>
                <div>
                    <input type="password" class="password" id="password" name="password" placeholder="Passwort">
                </div>
                <div>
                    <input type="text" class="position" id="position" name="position" placeholder="Position">
                </div>
        </div>

        <div class="regf">
                <h1>Address</h1>
                <div>
                    <input type="text" class="FN" id="Country" name="Country" placeholder="Country">
                </div>
                <div>
                    <input type="text" class="LN" id="State" name="State" placeholder="State">
                </div>
                <div>
                    <input type="text" class="email" id="District" name="District" placeholder="District">
                </div>
                <div>
                    <input type="password" class="password" id="Street" name="Street" placeholder="Street">
                </div>
                <div>
                    <input type="text" class="position" id="HouseNumber" name="HouseNumber" placeholder="HouseNumber">
                </div>
                <div>
                    <input type="text" class="position" id="PostalCode" name="PostalCode" placeholder="PostalCode">
                </div>
        </div>
        <div class="regf">
                <h1>Personal Info</h1>
                <div>
                    <input type="text" class="FN" id="DOB" name="DOB" placeholder="DOB">
                </div>
                <div>
                    <input type="text" class="LN" id="Gender" name="Gender" placeholder="Gender">
                </div>
                <div>
                    <input type="text" class="email" id="Nationality" name="Nationality" placeholder="Nationality">
                </div>
                <div>
                    <input type="password" class="password" id="PhoneNumber" name="PhoneNumber" placeholder="Phone Number">
                </div>
        </div>

    <div class="dropzone-box">
        <h2>Upload and attach files</h2>
        <p>Click to upload or drag and drop</p>
        <div class="dropzone-area">
            <div class="file-upload-icon">
                <!-- svg -->
            </div>
            <input type="file" required id="upload-file" name="image">
            <p class="file-info">No Files Selected</p>
        </div>
        <div class="dropzone-actions">
            <button type="reset">
                Cancel
            </button>
            <input  type="submit" name="addEmp" value="add">
       </div>
    </div>
    </div>
    </form>
    <script>
        // Get the file input element
const fileInput = document.getElementById('upload-file');

// Get the dropzone area and file info element
const dropzoneArea = document.querySelector('.dropzone-area');
const fileInfo = document.querySelector('.file-info');

// Listen for the change event on the file input
fileInput.addEventListener('change', function() {
    // Check if files are selected
    if (this.files.length > 0) {
        // Update dropzone area styling
        dropzoneArea.style.borderStyle = 'solid';
        dropzoneArea.style.borderColor = '#005567';
        dropzoneArea.style.backgroundColor = '#005567'; // Set background color

        // Update file info text
        fileInfo.textContent = 'Filled';
        fileInfo.style.color = '#fff'; // Set text color to white
    } else {
        // Reset dropzone area styling
        dropzoneArea.style.borderStyle = 'dashed';
        dropzoneArea.style.borderColor = '#005567';

        // Reset file info text
        fileInfo.textContent = 'No Files Selected';
    }
});

const resetButton = document.querySelector('button[type="reset"]');

// Listen for the click event on the reset button
resetButton.addEventListener('click', function() {
    // Reset all input fields in the form
    const form = document.querySelector('form');
    form.reset();

    // Reset dropzone area styling
    const dropzoneArea = document.querySelector('.dropzone-area');
    dropzoneArea.style.borderStyle = 'dashed';
    dropzoneArea.style.borderColor = '#005567';
    dropzoneArea.style.backgroundColor = 'transparent'; // Reset background color

    // Reset file info text
    const fileInfo = document.querySelector('.file-info');
    fileInfo.textContent = 'No Files Selected';
    fileInfo.style.color = '#005567'; // Reset text color to original color
});
    </script>

    <script src="script.js"></script>
    <?php
        include('db_config.php');
    if (isset($_POST['addEmp'])) {

        $FN = $_POST['FN'];
        $LN = $_POST['LN'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $position= $_POST['position'];
        $Country= $_POST['Country'];
        $State= $_POST['State'];
        $Street= $_POST['Street'];
        $HouseNumber= $_POST['HouseNumber'];
        $PostalCode= $_POST['PostalCode'];
        $DOB= $_POST['DOB'];
        $Gender= $_POST['Gender'];
        $Nationality= $_POST['Nationality'];
        $PhoneNumber= $_POST['PhoneNumber'];


        $file = rand(1000,100000)."-".$FN;
        $file_loc = $_FILES['img']['tmp_name'];
        $file_size = $_FILES['img']['size'];
        $file_type = $_FILES['img']['type'];
        $folder="employeespic/";
        $new_size = $file_size/1024;  
        $new_file_name = strtolower($file);
        $final_file=str_replace(' ','-',$new_file_name);
        move_uploaded_file($file_loc,$folder.$final_file);
       
        $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `employees`(`FN`, `LN`, `email`, `password`, `position`, `picLoc`) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $FN, $LN, $email, $encrypted_password,$position, $final_file);
        if($stmt->execute()){
            $sql = "SELECT `employeeID` 
           FROM `employees` 
           WHERE email='$email'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            $employeeID = $row['employeeID'];
            $sql1 = "INSERT INTO `address`(`userID`, `country`, `state`, `district`, `street`, `houseNumber`, `postalCode`) VALUES (?, ?, ?, ?, ?, ?,?)";
            $stmt1 = $conn->prepare($sql1);
            $stmt1->bind_param("sssssss", $employeeID, $Country, $State, $District,$Street, $HouseNumber, $PostalCode);
            if($stmt1->execute()){
                $sql2 = "INSERT INTO `personalinfo`(`userID`, `DOB`, `gender`, `nationality`, `phoneNumber`) VALUES  (?, ?, ?, ?, ?,)";
                $stmt2 = $conn->prepare($sql2);
                $stmt2->bind_param("sssss", $employeeID, $DOB, $Gender, $Nationality, $PhoneNumber);
                if($stmt2->execute()){
                }
            }
        }
        else{
            echo '<script type="text/javascript"> alert("location not added .......") </script>';
        }
        $stmt->close();
        $stmt1->close();
        $stmt2->close();
    }
    ?>
</html>
