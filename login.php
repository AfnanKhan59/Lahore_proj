<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
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
      content: "→"; /* Change the arrow direction */
      margin-right: 5px;
      transform: rotateY(180deg); /* Set rotation to 180deg for arrow to face the other way */
    }

    .login-container {
      margin: 20px;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
      position: relative;
    }

    .login-container h2 {
      color: #333;
    }

    .error-message {
      color: #ff0000; /* Red color for the error message */
      margin-top: 10px; /* Add some space between the form and the error message */
    }

    .register-link {
      display: block;
      text-align: center;
      margin-top: 20px;
      text-decoration: none;
      color: #007bff; /* Blue color for link */
      font-weight: bold;
    }
  </style>
</head>
<body>
  <a href="home.php" class="home-link">Home</a>
  <div class="login-container animate__animated animate__fadeIn">
    <form action="login_pros.php" method="post">
      <h2>Login</h2>
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Login</button>

      <?php
      if (isset($_GET['status']) && $_GET['status'] === 'error') {
          echo '<p class="error-message">Login failed. Please check your credentials.</p>';
      }
      ?>

      <a href="register.php" class="register-link">Don't have an account? Register here</a>
    </form>
  </div>
</body>
</html>
