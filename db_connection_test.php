<?php
// Database connection
$host = "localhost";
$user = "root";
$password = "";
$dbname = "doctor_appointments";

$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Database connection successful!";
$conn->close();
?>
