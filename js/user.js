$(document).on('click', '#settingDataLink', function (e) {
    e.preventDefault(); // Prevent default link behavior
    console.log("Add Employee link clicked"); // Debugging statement
    $.ajax({
        url: 'settingData.php',
        type: 'POST',
        data: { emp: true }, // Send data to identify the request
        success: function (response) {
            $('#containerz').html(response);
            console.log("AJAX success"); // Debugging statement
        },
        error: function (xhr, status, error) {
            console.error(xhr, status, error); // Debugging statement
        }
    });
});

$(document).on('click', '#PersonalLink', function (e) {
    e.preventDefault(); // Prevent default link behavior
    console.log("Add Employee link clicked"); // Debugging statement
    $.ajax({
        url: 'personalInfo.php',
        type: 'POST',
        data: { emp: true }, // Send data to identify the request
        success: function (response) {
            $('#containerz').html(response);
            console.log("AJAX success"); // Debugging statement
        },
        error: function (xhr, status, error) {
            console.error(xhr, status, error); // Debugging statement
        }
    });
});
$(document).on('click', '#addressLink', function (e) {
    e.preventDefault(); // Prevent default link behavior
    console.log("Add Employee link clicked"); // Debugging statement
    $.ajax({
        url: 'address.php',
        type: 'POST',
        data: { emp: true }, // Send data to identify the request
        success: function (response) {
            $('#containerz').html(response);
            console.log("AJAX success"); // Debugging statement
        },
        error: function (xhr, status, error) {
            console.error(xhr, status, error); // Debugging statement
        }
    });
});
$(document).on('click', '#contactLink', function (e) {
    e.preventDefault(); // Prevent default link behavior
    console.log("Add Employee link clicked"); // Debugging statement
    $.ajax({
        url: 'contact.php',
        type: 'POST',
        data: { emp: true }, // Send data to identify the request
        success: function (response) {
            $('#containerz').html(response);
            console.log("AJAX success"); // Debugging statement
        },
        error: function (xhr, status, error) {
            console.error(xhr, status, error); // Debugging statement
        }
    });
});
$(document).on('click', '#passwordLink', function (e) {
    e.preventDefault(); // Prevent default link behavior
    console.log("Add Employee link clicked"); // Debugging statement
    $.ajax({
        url: 'changePassword.php',
        type: 'POST',
        data: { emp: true }, // Send data to identify the request
        success: function (response) {
            $('#containerz').html(response);
            console.log("AJAX success"); // Debugging statement
        },
        error: function (xhr, status, error) {
            console.error(xhr, status, error); // Debugging statement
        }
    });
});
$(document).on('click', '#deleteLink', function (e) {
    e.preventDefault(); // Prevent default link behavior
    console.log("Add Employee link clicked"); // Debugging statement
    $.ajax({
        url: 'deleteAccount.php',
        type: 'POST',
        data: { emp: true }, // Send data to identify the request
        success: function (response) {
            $('#containerz').html(response);
            console.log("AJAX success"); // Debugging statement
        },
        error: function (xhr, status, error) {
            console.error(xhr, status, error); // Debugging statement
        }
    });
});
$(document).on('click', '#logout', function (e) {
    e.preventDefault(); // Prevent default link behavior
    console.log("Logout link clicked"); // Debugging statement
    $.ajax({
        url: 'logoutuser.php',
        type: 'POST',
        data: { emp: true }, // Send data to identify the request
        success: function (response) {
            console.log("Logout successful"); // Debugging statement
            window.location.href = 'http://localhost/senior/login_sign.html';
        },
        error: function (xhr, status, error) {
            console.error(xhr, status, error); // Debugging statement
        }
    });
});



 
$(document).on('click', '#PIEdit', function (e) {
    e.preventDefault(); // Prevent default link behavior
    console.log("Add Employee link clicked"); // Debugging statement
    $.ajax({
        url: 'personalInfoEdit.php',
        type: 'POST',
        data: { emp: true }, // Send data to identify the request
        success: function (response) {
            $('#info-fields').html(response);
            console.log("AJAX success"); // Debugging statement
        },
        error: function (xhr, status, error) {
            console.error(xhr, status, error); // Debugging statement
        }
    });
});

$(document).on('click', '#CEdit', function (e) {
    e.preventDefault(); // Prevent default link behavior
    console.log("Add Employee link clicked"); // Debugging statement
    $.ajax({
        url: 'contactEdit.php',
        type: 'POST',
        data: { emp: true }, // Send data to identify the request
        success: function (response) {
            $('#info-fieldsContakt').html(response);
            console.log("AJAX success"); // Debugging statement
        },
        error: function (xhr, status, error) {
            console.error(xhr, status, error); // Debugging statement
        }
    });
});


/////////////////////////////////////////////////
$(document).on('click', '#ADEdit', function (e) {
    e.preventDefault(); // Prevent default link behavior
    console.log("Add Employee link clicked"); // Debugging statement
    $.ajax({
        url: 'addressEdit.php',
        type: 'POST',
        data: { emp: true }, // Send data to identify the request
        success: function (response) {
            $('#info-fieldsaddress').html(response);
            console.log("AJAX success"); // Debugging statement
        },
        error: function (xhr, status, error) {
            console.error(xhr, status, error); // Debugging statement
        }
    });
});