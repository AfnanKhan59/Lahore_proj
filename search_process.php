<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'collage';  // Replace with your actual database name

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $searchName = isset($_GET['searchName']) ? $_GET['searchName'] : '';
    $searchClass = isset($_GET['searchClass']) ? $_GET['searchClass'] : '';
    $searchRollNo = isset($_GET['searchRollNo']) ? $_GET['searchRollNo'] : '';

    $query = "SELECT * FROM students WHERE 1";

    if ($searchName !== '') {
        $query .= " AND name LIKE '%$searchName%'";
    }

    if ($searchClass !== '') {
        $query .= " AND class LIKE '%$searchClass%'";
    }

    if ($searchRollNo !== '') {
        $query .= " AND roll_no LIKE '%$searchRollNo%'";
    }

    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Class: " . $row["class"]
                 . " - Roll Number: " . $row["roll_no"]. " - Phone Number: " . $row["phone_number"]
                 . " - Marks: " . $row["marks"]. "<br>";
        }
    } else {
        echo "No results found.";
    }

    $result->close();
}

$conn->close();

?>
                                                                                                                                                                              