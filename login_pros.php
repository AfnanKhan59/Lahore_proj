<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'auth';

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user input
$email = $_POST['email'];
$password = $_POST['password'];

// Perform SQL query (use prepared statements for security)
$stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($userId, $hashedPassword);
$stmt->fetch();

// Verify the password
if (password_verify($password, $hashedPassword)) {
    // Login successful
    // Redirect to students.php
    header("Location: students.php");
    exit();
} else {
    // Login failed
    header("Location: login.php?status=error");
    exit();
}

// Close the statement
$stmt->close();

// Close the database connection
$conn->close();
?>
