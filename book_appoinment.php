<?php
// Include the database connection
require 'db.php';

// Fetch form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$doctor = $_POST['doctor'];
$date = $_POST['date'];
$time = $_POST['time'];

// Insert into database
$sql = "INSERT INTO appointments (name, email, phone, doctor, date, time) VALUES ('$name', '$email', '$phone', '$doctor', '$date', '$time')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Appointment Booked Successfully!</h1>";
    echo "<p>Thank you, $name. Your appointment with $doctor on $date at $time is confirmed.</p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
