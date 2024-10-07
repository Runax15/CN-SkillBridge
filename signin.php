<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection variables
$host = 'localhost';
$username = 'root';
$password = ''; // Empty password as mentioned
$database = 'student_registration'; // Update this to match your database name

// Establish the connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die(json_encode(['status' => 'error', 'message' => 'Database connection failed: ' . $conn->connect_error]));
}

// Check if form is submitted and input fields are set
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['college_email']) && isset($_POST['password'])) {
    // Retrieve and sanitize input values
    $college_email = $conn->real_escape_string(trim($_POST['college_email']));
    $password = trim($_POST['password']); // Do not escape password

    // Construct the SQL query to find the user in the database
    $sql = "SELECT * FROM students WHERE college_email = '$college_email'";
    $result = $conn->query($sql);

    // Check if the query returned a result
    if ($result === false) {
        die(json_encode(['status' => 'error', 'message' => 'SQL query failed: ' . $conn->error]));
    }

    if ($result && $result->num_rows > 0) {
        // Fetch the user's data from the database
        $user = $result->fetch_assoc();

        // Verify the input password with the stored hashed password
        if (password_verify($password, $user['password'])) {
            // If password is correct, return success message
            echo json_encode(['status' => 'success', 'message' => 'You have successfully logged in!']);
        } else {
            // If password does not match, show incorrect password message
            echo json_encode(['status' => 'error', 'message' => 'Incorrect password.']);
        }
    } else {
        // If no matching user found
        echo json_encode(['status' => 'error', 'message' => 'No account found with the provided email.']);
    }
} else {
    // If required fields are not set or invalid request method
    echo json_encode(['status' => 'error', 'message' => 'Invalid form submission or missing fields.']);
}

// Close the database connection
$conn->close();
?>
