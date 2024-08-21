<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'admission_data';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $course = $_POST['course'];
    $address = $_POST['address'];

    $stmt = $conn->prepare("INSERT INTO new_students (name, email, phone, dob, course, address) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $phone, $dob, $course, $address);

    if ($stmt->execute()) {
        // Redirect to the student information page with the new student ID
        header("Location: student_info.php?student_id=" . $stmt->insert_id);
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
