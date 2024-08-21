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

// Initialize error message
$error_message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input
    $employeeName = isset($_POST['employeeName']) ? $_POST['employeeName'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Check for empty fields
    if (empty($employeeName) || empty($email) || empty($password)) {
        $error_message = "All fields are required.";
    } else {
        // Hash the password securely (use bcrypt or another secure hashing algorithm)
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Perform SQL query (use prepared statements for security)
        $stmt = $conn->prepare("INSERT INTO users (employee_name, email, password) VALUES (?, ?, ?)");

        // Check if the prepare statement is successful
        if ($stmt) {
            // Bind parameters
            $stmt->bind_param("sss", $employeeName, $email, $hashedPassword);

            // Execute the statement and check for errors
            if ($stmt->execute()) {
                header("Location: register.php?status=registered");
                exit();
            } else {
                // Check if the error is due to a duplicate entry (email already exists)
                if ($stmt->errno == 1062) {
                    $error_message = "Email address is already registered. Please use a different email.";
                } else {
                    $error_message = "An error occurred. Please try again later.";
                }
            }

            // Close the statement
            $stmt->close();
        } else {
            $error_message = "An error occurred. Please try again later.";
        }
    }
}

// Close the database connection
$conn->close();
?>

<!-- Your existing HTML code -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your existing head section -->
    <!-- Add any necessary CSS or JavaScript here -->
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form method="post" action="register_process.php">
            <!-- Your existing form fields -->
        </form>

        <?php if (!empty($error_message)) : ?>
            <div class="error-message"><?php echo $error_message; ?></div>
        <?php endif; ?>

        <!-- Your existing HTML for success message and other elements -->
    </div>
</body>
</html>
