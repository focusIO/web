<?php
// Database configuration
$host = 'localhost'; // Change if your database is hosted elsewhere
$db = 'focus';
$user = 'root'; // Replace with your database username
$pass = ''; // Replace with your database password

// Create a connection
$conn = new mysqli($host, $user, $pass, $db);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO contact_sub (email, name, mob_num, concerns) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $email, $name, $mob_num, $concerns);

// Set parameters and execute
$email = $_POST['email'];
$name = $_POST['name'];
$mob_num = $_POST['mob_num'];
$concerns = $_POST['concerns'];

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();