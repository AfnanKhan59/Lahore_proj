<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'collage';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $class = $_POST['class'];
  $roll_no = $_POST['roll_no'];
  $phone_number = $_POST['phone_number'];

  // Update the student data
  $query = "UPDATE students SET name='$name', class='$class', roll_no='$roll_no', phone_number='$phone_number' WHERE id=$id";

  if ($conn->query($query) === TRUE) {
    echo "Record updated successfully. <a href='students.php'>Go back to Student Data</a>";
  } else {
    echo "Error updating record: " . $conn->error;
  }
}

$conn->close();
?>
