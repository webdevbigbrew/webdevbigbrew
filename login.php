<?php
// Establish database connection - Replace with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Example query (use prepared statements for better security)
$sql = "SELECT * FROM admintbl WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Successful login
    // Redirect to homeAdmin.php or another page
    header("Location: homeAdmin.php");
    exit();
} else {
    // Failed login
    // Redirect back to login.html with error parameter
    header("Location: loginform.php?error=1");
    exit();
}

// Close the database connection
$conn->close();
?>