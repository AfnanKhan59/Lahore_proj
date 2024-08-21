<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'admission_data';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Student Information</title>";
echo "<link rel='stylesheet' href='student_info.css'>";
echo "</head>";
echo "<body>";
echo "<a href='home.php' class='back-to-home-button'>Back to Home</a>"; // Back to Home button
echo "<div class='form-container'>";
echo "<h2>Student Information</h2>";

$stmt = $conn->prepare("SELECT * FROM new_students");
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $counter = 1;

    while ($student = $result->fetch_assoc()) {
        echo "<div class='student-container'>";
        echo "<p><strong>Student #$counter</strong></p>";
        echo "<p><strong>Name:</strong> " . htmlspecialchars($student['name']) . "</p>";
        echo "<p><strong>Email:</strong> " . htmlspecialchars($student['email']) . "</p>";
        echo "<p><strong>Phone:</strong> " . htmlspecialchars($student['phone']) . "</p>";
        echo "<p><strong>Date of Birth:</strong> " . htmlspecialchars($student['dob']) . "</p>";
        echo "<p><strong>Course:</strong> " . htmlspecialchars($student['course']) . "</p>";
        echo "<p><strong>Address:</strong> " . htmlspecialchars($student['address']) . "</p>";
        echo "<p><strong>Registered on:</strong> " . htmlspecialchars($student['registration_datetime']) . "</p>";
        echo "<form action='delete_student.php' method='post'>";
        echo "<input type='hidden' name='student_id' value='" . $student['id'] . "'>";
        echo "<button type='submit' class='delete-button'>Delete</button>";
        echo "</form>";
        echo "</div>";
        echo "<hr>"; // Add a horizontal line for separation

        $counter++;
    }
} else {
    echo "<p>No students found.</p>";
}

$stmt->close();
$conn->close();

echo "</div>";
echo "</body>";
echo "</html>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <link rel="stylesheet" href="student_info.css:">
</head>
<body>
    <div class="form-container">
        <!-- Displayed student information dynamically -->
    </div>
</body>
</html>
