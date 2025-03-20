<html lang="en">
    <title>Add employee</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src ="js/jquery-1.8.1.js" type="text/javascript" > 
    </script>
    <script src="js/script.js" type = "text/javascript">
    </script> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css"/>
    <link rel="stylesheet" href="css/employee.css"/>
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
    <div class="regfcontainera">
       <div class="regfa">
                <h1>Delete Employee</h1>
                <div>
                    <input type="text" class="email" id="email" name="email" placeholder="Email">
                </div>
                <div>
                    <input type="password" class="password" id="password" name="password" placeholder="Passwort">
                </div>
                <div class="dropzone-actions">
            <button type="reset">
                Cancel
            </button>
            <input  type="submit" name="deleteEmp" value="add">
       </div>
        </div>
    </div>
    </form>
    <?php
    session_start(); 
    $_SESSION['email'];
    if (isset($_POST['deleteEmp'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT password FROM employees WHERE email = ?");
        $stmt->bind_param("s", $_SESSION['email']);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($hashed_pass);
        $stmt->fetch();
        if (password_verify($password, $hashed_pass)) {
            $sql ="DELETE FROM `employees` WHERE email = ?";
            $stmt_delete = $conn->prepare($sql);
            $stmt_delete->bind_param("s", $email); // Bind email to placeholder
            $stmt_delete->execute();
        }
    }
   ?>

    <script src="script.js"></script>
</html>
