<html lang="en">
<head>
    <title>Change Password</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css"/>
    <link rel="stylesheet" href="../css/userAccount.css"/>
</head>
<body>
    <div class="regfcontainera">
        <div class="regfaa">
            <h1>Change Password</h1>
            <form method="post" action="userSettingCD.php" onsubmit="return validateForm()">
                <div>
                    <input type="password" class="password" id="password" name="password" placeholder="New Password">
                </div>
                <div>
                    <input type="password" class="repassword" id="repassword" name="repassword" placeholder="Confirm Password">
                </div>
                <div>
                    <input type="password" class="oldpassword" id="oldpassword" name="oldpassword" placeholder="Old Password">
                </div>
                <div class="dropzone-actions">
                    <button type="reset">
                        Cancel
                    </button>
                    <input type="submit" name="chngps" value="Change">
                </div>
            </form>
        </div>
    </div>

    <script src="js/jquery-1.8.1.js"></script>
    <script src="js/script.js"></script>
    <script>
        function validateForm() {
            var password = document.getElementById('password').value;
            var repassword = document.getElementById('repassword').value;
            var oldpassword = document.getElementById('oldpassword').value;

            if (password === '' || repassword === '' || oldpassword ==='' ) {
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
</body>
</html>

