<?php
// Database connection
$servername = "localhost";
$username = "root"; // Use your database username
$password = ""; // Use your database password
$dbname = "SRS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$first_name = $_POST['first_name'];
$middle_initial = $_POST['middle_initial'];
$last_name = $_POST['last_name'];
$date_of_birth = $_POST['date_of_birth'];
$gender = $_POST['gender'];
$email_address = $_POST['email_address'];
$phone_number = $_POST['phone_number'];

// Insert the data into the database
$sql = "INSERT INTO basic_information (first_name, middle_initial, last_name, date_of_birth, gender, email_address, phone_number)
        VALUES ('$first_name', '$middle_initial', '$last_name', '$date_of_birth', '$gender', '$email_address', '$phone_number')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully. <a href='index.html'>Go back</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
