<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="reg.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .home-link {
            position: absolute;
            top: 10px;
            left: 10px;
            text-decoration: none;
            color: #fff; /* Change color to white */
            font-size: 18px;
            font-weight: bold;
            background-color: #333; /* Change background color to match the body background */
            padding: 8px 12px; /* Add padding for better appearance */
            border-radius: 5px; /* Add rounded corners */
            display: flex; /* Use flexbox for better alignment */
            align-items: center; /* Center items vertically in the container */
        }

        .home-link::before {
            content: "→ "; /* Change the arrow direction by swapping the arrow character */
            margin-right: 5px;
            transform: rotateY(180deg);
        }

        .register-container {
            margin: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            position: relative;
        }

        .register-container h2 {
            color: #333;
        }

        .success-message {
            color: #008000; /* Green color for success message */
            margin-top: 10px; /* Add some space between the form and the success message */
        }

        .error-message {
            color: #ff0000; /* Red color for the error message */
            margin-top: 10px; /* Add some space between the form and the error message */
        }

        .already-logged-in {
            margin-top: 20px;
            text-align: center;
        }

        .already-logged-in a {
            text-decoration: none;
            color: #007bff; /* Blue color for link */
            font-weight: bold;
        }
    </style>
</head>
<body>
    <a href="home.php" class="home-link">Home</a>
    <div class="register-container animate__animated animate__fadeIn">
        <form action="register_process.php" method="post">
            <h2>Register</h2>
            <?php
            // Check if there is a status in the URL
            if (isset($_GET['status'])) {
                $status = $_GET['status'];
                if ($status == 'registered') {
                    echo '<p class="success-message">Registration successful! Redirecting to Student Data...</p>';
                    header('Refresh: 3; URL=students.php'); // Redirect after 3 seconds
                } elseif ($status == 'error') {
                    echo '<p class="error-message">An error occurred. Please try again later.</p>';
                }
            }
            ?>
            <label for="employeeName">Employee Name</label>
            <input type="text" id="employeeName" name="employeeName" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Register</button>
        </form>
        <div class="already-logged-in">
            <p>Already logged in? <a href="login.php">Log in here</a>.</p>
        </div>
    </div>
</body>
</html>
