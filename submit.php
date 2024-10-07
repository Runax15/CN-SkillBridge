<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_registration";

// Create connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die(json_encode(['status' => 'error', 'message' => 'Connection failed: ' . $conn->connect_error]));
}

// Retrieve and sanitize POST data from the form
$full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$personal_email = mysqli_real_escape_string($conn, $_POST['personal_email']);
$mobile_number = mysqli_real_escape_string($conn, $_POST['mobile_number']);
$prn_no = mysqli_real_escape_string($conn, $_POST['prn_no']);
$year = mysqli_real_escape_string($conn, $_POST['year']);
$branch = mysqli_real_escape_string($conn, $_POST['branch']);
$college = mysqli_real_escape_string($conn, $_POST['college']);
$college_email = mysqli_real_escape_string($conn, $_POST['college_email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Hash the password before storing it in the database
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Prepare the SQL query to insert data into the students table
$sql = "INSERT INTO students (full_name, gender, personal_email, mobile_number, prn_no, year, branch, college, college_email, password)
VALUES ('$full_name', '$gender', '$personal_email', '$mobile_number', '$prn_no', '$year', '$branch', '$college', '$college_email', '$hashed_password')";

// Execute the query and return a JSON response based on success or error
if ($conn->query($sql) === TRUE) {
    echo json_encode(['status' => 'success', 'message' => 'Registration successful! You may close this tab']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'An error occurred. Please try again. ' . $conn->error]);
}

// Close the database connection
$conn->close();
?>
