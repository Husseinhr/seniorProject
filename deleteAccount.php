<html lang="en">
    <title>delete Account</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src ="js/jquery-1.8.1.js" type="text/javascript" > 
    </script>
    <script src="js/script.js" type = "text/javascript">
    </script> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css"/>
    <link rel="stylesheet" href="css/userAccount.css"/>
    <script>
        function validateForm() {
            var password = document.getElementById('password').value;
            var repassword = document.getElementById('repassword').value;

            if (password === '' || repassword === '' ) {
                alert('All fields must be filled out');
                return false;
            }
            if(password !== repassword){
                alert('password not match');
                return false;
            }
            return true;
        }
    </script>
    <form  method="post" action="userSettingCD.php" onsubmit="return validateForm()">
    <div class="regfcontainera">
       <div class="regfa">
                <h1>Delete Account</h1>
                <div>
                    <input type="password" class="password" id="password" name="password" placeholder="Password">
                </div>
                <div>
                    <input type="password" class="repassword" id="repassword" name="repassword" placeholder="Confirm Passwort">
                </div>
                <div class="dropzone-actions">
            <button type="reset">
                Cancel
            </button>
            <input  type="submit" name="deleteAc" value="add">
       </div>
        </div>
    </div>
    </form>
    <script src="script.js"></script>
</html>
