<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'collage';  // Replace with your actual database name

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $class = $_POST['class'];
    $roll_no = $_POST['roll_no'];
    $phone_number = $_POST['phone_number'];

    $stmt = $conn->prepare("INSERT INTO students (name, class, roll_no, phone_number) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $class, $roll_no, $phone_number);

    if ($stmt->execute()) {
        header("Location: students.php");
        exit();
    } else {
        header("Location: insert.php?status=error");
        exit();
    }

    $stmt->close();
}

$conn->close();

?>
