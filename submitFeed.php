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
$stmt = $conn->prepare("INSERT INTO feedback (f_name, l_name, rate_con, enjoy, satisfaction, clarity, rate_all, add_com) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $f_name, $l_name, $rate_con, $enjoy, $satisfaction, $clarity, $rate_all, $add_com);

// Set parameters and execute
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$rate_con = $_POST['rate_con'];
$enjoy = $_POST['enjoy'];
$satisfaction = $_POST['satisfaction'];
$clarity = $_POST['clarity'];
$rate_all = $_POST['rate_all'];
$add_com = $_POST['add_com'];

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();