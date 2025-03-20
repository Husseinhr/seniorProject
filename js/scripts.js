
//////////////////////////

$(document).on('click', '#showapplications', function (e) {
    e.preventDefault(); // Prevent default link behavior
    console.log("Add Employee link clicked"); // Debugging statement
    $.ajax({
        url: 'showapplication.php',
        type: 'POST',
        data: { emp: true }, // Send data to identify the request
        success: function (response) {
            $('#container').html(response);
            console.log("AJAX success"); // Debugging statement
        },
        error: function (xhr, status, error) {
            console.error(xhr, status, error); // Debugging statement
        }
    });
});








$(document).on('click', '#manageEmployeeLink', function (e) {
    e.preventDefault(); // Prevent default link behavior
    console.log("Add Employee link clicked"); // Debugging statement
    $.ajax({
        url: 'manageEmployee.php',
        type: 'POST',
        data: { emp: true }, // Send data to identify the request
        success: function (response) {
            $('#container').html(response);
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
        url: 'logout.php',
        type: 'POST',
        data: { emp: true }, // Send data to identify the request
        success: function (response) {
            console.log("Logout successful"); // Debugging statement
            window.location.href = 'login_sign.html';
        },
        error: function (xhr, status, error) {
            console.error(xhr, status, error); // Debugging statement
        }
    });
});

$(document).on('click', '#addEmployee', function (e) {
    e.preventDefault(); // Prevent default link behavior
    console.log("Add Employee link clicked"); // Debugging statement
    $.ajax({
        url: 'addEmployee.php',
        type: 'POST',
        data: { emp: true }, // Send data to identify the request
        success: function (response) {
            $('#containerA').html(response);
            console.log("AJAX success"); // Debugging statement
        },
        error: function (xhr, status, error) {
            console.error(xhr, status, error); // Debugging statement
        }
    });
});



$(document).on('click', '#deleteEmployee', function (e) {
    e.preventDefault(); // Prevent default link behavior
    console.log("Add Employee link clicked"); // Debugging statement
    $.ajax({
        url: 'deleteEmployee.php',
        type: 'POST',
        data: { emp: true }, // Send data to identify the request
        success: function (response) {
            $('#containerA').html(response);
            console.log("AJAX success"); // Debugging statement
        },
        error: function (xhr, status, error) {
            console.error(xhr, status, error); // Debugging statement
        }
    });
});


$(document).on('click', '#updateEmployee', function (e) {
    e.preventDefault(); // Prevent default link behavior
    console.log("Add Employee link clicked"); // Debugging statement
    $.ajax({
        url: 'updateEmployee.php',
        type: 'POST',
        data: { emp: true }, // Send data to identify the request
        success: function (response) {
            $('#containerA').html(response);
            console.log("AJAX success"); // Debugging statement
        },
        error: function (xhr, status, error) {
            console.error(xhr, status, error); // Debugging statement
        }
    });
});



$(document).on('click', '#viewStatistics', function (e) {
    e.preventDefault(); // Prevent default link behavior
    console.log("Add Employee link clicked"); // Debugging statement
    $.ajax({
        url: 'Statistics.php',
        type: 'POST',
        data: { emp: true }, // Send data to identify the request
        success: function (response) {
            $('#container').html(response);
            console.log("AJAX success"); // Debugging statement
        },
        error: function (xhr, status, error) {
            console.error(xhr, status, error); // Debugging statement
        }
    });
});













///////////////////////////////////////////////////////////////////////



$(document).on('click', '#addEmployeeLink', function (e) {
    e.preventDefault(); // Prevent default link behavior
    console.log("Add Employee link clicked"); // Debugging statement
    $.ajax({
        url: 'addEmployee.php',
        type: 'POST',
        data: { emp: true }, // Send data to identify the request
        success: function (response) {
            $('#myBox').html(response);
            console.log("AJAX success"); // Debugging statement
        },
        error: function (xhr, status, error) {
            console.error(xhr, status, error); // Debugging statement
        }
    });
});
$(document).on('click', '#addUserLink', function (e) {
    e.preventDefault(); // Prevent default link behavior
    console.log("Add user link clicked"); // Debugging statement
    $.ajax({
        url: 'addUser.php',
        type: 'POST',
        data: { user: true }, // Send data to identify the request
        success: function (response) {
            $('#myBox').html(response);
            console.log("AJAX success"); // Debugging statement
        },
        error: function (xhr, status, error) {
            console.error(xhr, status, error); // Debugging statement
        }
    });
});
$(document).on('click', '#addTimeLink', function (e) {
    e.preventDefault(); // Prevent default link behavior
    console.log("Add time link clicked"); // Debugging statement
    $.ajax({
        url: 'addTime.php',
        type: 'POST',
        data: { time: true }, // Send data to identify the request
        success: function (response) {
            $('#myBox').html(response);
            console.log("AJAX success"); // Debugging statement
        },
        error: function (xhr, status, error) {
            console.error(xhr, status, error); // Debugging statement
        }
    });
});