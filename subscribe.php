<?php
$host = 'localhost';
$username = 'root';
$password = ''; // Replace with your actual database password
$database = 'subs';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    // Use prepared statement to prevent SQL injection
    $sql = $conn->prepare("INSERT INTO subscribers (email) VALUES (?)");
    $sql->bind_param("s", $email);

    if ($sql->execute()) {
        echo "Subscription successful! Redirecting...";
        // Redirect after 3 seconds
        header("refresh:3;url=home.php");
        exit();
    } else {
        echo "Error: " . $sql->error;
    }

    $sql->close();
}

$conn->close();
?>
