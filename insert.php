<?php include('navbar.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Student Data</title>

  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    nav {
      background-color: #007bff;
      color: #fff;
      padding: 15px;
    }

    nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    nav ul li {
      display: inline;
      margin-right: 20px;
    }

    nav a {
      text-decoration: none;
      color: #fff;
      font-weight: bold;
    }

    .form-container {
      max-width: 400px;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      animation: fadeIn 1s ease-in-out; /* Fade-in animation added */
    }

    form {
      display: flex;
      flex-direction: column;
    }

    h2 {
      text-align: center;
      color: #333;
    }

    label {
      margin-top: 10px;
      margin-bottom: 5px;
      color: #555;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    button {
      background-color: #007bff;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    /* Responsive styles */
    @media (max-width: 600px) {
      .form-container {
        width: 90%;
      }
    }
  </style>
</head>
<body>
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="students.php">Student Data</a></li>
      <li><a href="insert.php">Insert Student</a></li>
    </ul>
  </nav>

  <div class="form-container">
    <form action="insert_process.php" method="post">
      <h2>Insert Student Data</h2>
      <label for="name">Student Name</label>
      <input type="text" id="name" name="name" required>

      <label for="class">Class</label>
      <input type="text" id="class" name="class" required>

      <label for="roll_no">Roll Number</label>
      <input type="text" id="roll_no" name="roll_no" required>

      <label for="phone_number">Phone Number</label>
      <input type="tel" id="phone_number" name="phone_number" required>

      <button type="submit">Insert</button>
    </form>
  </div>
</body>
</html>
