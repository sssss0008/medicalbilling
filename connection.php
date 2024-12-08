<?php
// Include the database connection file
require 'db.php';

// Check if the connection is successful
if ($conn->connect_error) {
    echo "Database connection failed: " . $conn->connect_error;
} else {
    echo "Database connected successfully!";
}

// Close the connection after testing
$conn->close();
?>
