<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the submitted email
    $email = $_POST["email"];

    // Validate the email (you can add more validation if needed)
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Connect to the database (update these values with your database credentials)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "subs";

        // Create a database connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert the email into the database
        $sql = "INSERT INTO subscribers (email) VALUES ('$email')";

        if ($conn->query($sql) === TRUE) {
            // Subscription successful, redirect to home.php
            header("Location: home.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the database connection
        $conn->close();
    } else {
        echo "Invalid email address";
    }
}
?>
