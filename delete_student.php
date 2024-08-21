<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'admission_data';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['student_id'])) {
    $student_id = $_POST['student_id'];

    $stmt = $conn->prepare("DELETE FROM new_students WHERE id = ?");
    $stmt->bind_param("i", $student_id);

    if ($stmt->execute()) {
        header("Location: student_info.php");
        exit();
    } else {
        echo "Error deleting student: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid request.";
}

$conn->close();
?>
