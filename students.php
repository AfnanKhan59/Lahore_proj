<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Data</title>
  <link rel="stylesheet" href="student.css">
  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<style>
    .button-container {
        margin-left: 14px;
    }

    .delete-link,
    .edit-link {
        display: inline-block;
        margin-right: 8px;
        text-decoration: none;
        padding: 5px 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        color: #333;
    }

    .delete-link {
        background-color: #FF6347; /* Tomato color */
    }

    .edit-link {
        background-color: #00FFFF; /* Cyan color */
    }

    nav {
        display: flex;
        justify-content: space-between; /* Adjust the spacing as needed */
        align-items: center;
        background-color: #007FFF; /* Change the background color as needed */
        padding: 10px;
    }

    nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    nav ul li {
        margin-right: 20px;
    }

    nav a {
        text-decoration: none;
        color: white;
        font-weight: bold;
        font-size: 16px;
    }

    /* Add animation to the search bar */
    form input[type="text"] {
        width: 150px; /* Set the initial width */
        transition: width 0.3s ease; /* Add a smooth transition */
    }

    form input[type="text"]:focus {
        width: 250px; /* Adjust the width as needed when focused */
    }

    /* Add animation to the student container */
    .student-container {
        animation-duration: 1s;
    }

    /* Optional: Add more specific animation classes for different animations */
    .animate__bounceInDown {
        animation-name: bounceInDown;
    }

    /* Add more animation classes as needed */
</style>

  <style>
      .button-container {
          margin-left: 14px;
      }

      .delete-link,
      .edit-link {
          display: inline-block;
          margin-right: 8px;
          text-decoration: none;
          padding: 5px 10px;
          border: 1px solid #ccc;
          border-radius: 5px;
          color: #333;
      }

      .delete-link {
          background-color: #FF6347; /* Tomato color */
      }

      .edit-link {
          background-color: #00FFFF; /* Cyan color */
      }

      nav {
          display: flex;
          justify-content: space-between; /* Adjust the spacing as needed */
          align-items: center;
          background-color: #007FFF; /* Change the background color as needed */
          padding: 10px;
      }

      nav ul {
          list-style: none;
          margin: 0;
          padding: 0;
          display: flex;
      }

      nav ul li {
          margin-right: 20px;
      }

      nav a {
          text-decoration: none;
          color: white;
          font-weight: bold;
          font-size: 16px;
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
    <form action="students.php" method="get">
      <input type="text" name="search" placeholder="Search by Name">
      <button type="submit">Search</button>
    </form>
  </nav>
  
  <div class="student-container animate__animated animate__bounceInDown">
    <h2>Student Data</h2>
    <?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'collage';  // Replace with your actual database name

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $searchName = isset($_GET['search']) ? $_GET['search'] : '';

    $query = "SELECT * FROM students";
    if ($searchName !== '') {
        $query .= " WHERE name LIKE '%$searchName%'";
    }

    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Name: " . $row["name"] . " - Class: " . $row["class"]
                . " - Roll Number: " . $row["roll_no"] . " - Phone Number: " . $row["phone_number"]
                . "<div class='button-container'>"
                . "<a href='delete.php?id=" . $row['id'] . "' class='delete-link'>Delete</a>"
                . "<a href='edit.php?id=" . $row['id'] . "' class='edit-link'>Edit</a>"
                . "</div><br>";
        }
    } else {
        echo "No results found.";
    }

    $result->close();
    $conn->close();
    ?>
  </div>
</body>
</html>
