<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'collage';  // Replace with your actual database name

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM students WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $stmt->close();
}

$conn->close();

header("Location: students.php");
exit();
?>
