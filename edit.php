<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Student</title>
  <link rel="stylesheet" href="student.css">
  <style>
     .back-to-home-button {
  display: block;
  text-align: center;
  text-decoration: none;
  background-color: #28a745; /* Green color */
  color: #fff;
  padding: 10px;
  border-radius: 4px;
  margin-top: 20px;
  transition: background-color 0.3s ease;
  position: absolute; /* Position absolute to take it out of the normal document flow */
  top: 10px; /* Adjust top value as needed */
  left: 10px; /* Adjust left value as needed */
}

.back-to-home-button:hover {
  background-color: #218838; /* Darker green on hover */
}

  </style>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    h2 {
      color: #1E90FF;
      text-align: center;
    }

    form {
      max-width: 400px;
      width: 100%;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #333;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }

    button {
      background-color: #007bff;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <?php
  $host = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'collage';

  $conn = new mysqli($host, $username, $password, $database);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if (isset($_GET['id'])) {
    $student_id = $_GET['id'];

    // Fetch the student data based on the ID
    $query = "SELECT * FROM students WHERE id = $student_id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      // Display a form with the current data
      ?>
      <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>

        <label for="class">Class:</label>
        <input type="text" name="class" value="<?php echo $row['class']; ?>"><br>

        <label for="roll_no">Roll Number:</label>
        <input type="text" name="roll_no" value="<?php echo $row['roll_no']; ?>"><br>

        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" value="<?php echo $row['phone_number']; ?>"><br>

        <button type="submit">Update</button>
      </form>
      <a href="home.php" class="back-to-home-button">Back to Home</a>
      <?php
      
    } else {
      echo "Student not found.";
    }

    $result->close();
  } else {
    echo "Invalid request.";
  }

  $conn->close();
  ?>

</body>
</html>
