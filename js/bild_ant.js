$(document).on('click', '#showjobs', function (e) {
    e.preventDefault(); // Prevent default link behavior
    console.log("Add Employee link clicked"); // Debugging statement
    $.ajax({
        url: 'BildungJobs.php',
        type: 'POST',
        data: { emp: true }, // Send data to identify the request
        success: function (response) {
            $('#servives-container').html(response);
            console.log("AJAX success"); // Debugging statement
        },
        error: function (xhr, status, error) {
            console.error(xhr, status, error); // Debugging statement
        }
    });
});
$(document).on('click', '#showAntrage', function (e) {
    e.preventDefault(); // Prevent default link behavior
    console.log("Add Employee link clicked"); // Debugging statement
    $.ajax({
        url: 'Antrage.php',
        type: 'POST',
        data: { emp: true }, // Send data to identify the request
        success: function (response) {
            $('#servives-container').html(response);
            console.log("AJAX success"); // Debugging statement
        },
        error: function (xhr, status, error) {
            console.error(xhr, status, error); // Debugging statement
        }
    });
});