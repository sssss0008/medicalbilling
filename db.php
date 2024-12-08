<?php
// Database credentials
$host = "localhost"; // Change if the database is hosted on a different server
$user = "root";      // Your MySQL username
$password = "";      // Your MySQL password
$dbname = "doctor_appointments"; // The database name

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: Uncomment the following line to confirm successful connection
// echo "Database connected successfully!";
?>
