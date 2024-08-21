<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'search_past_papers';  // New database name

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $searchName = isset($_GET['searchName']) ? $_GET['searchName'] : '';
    $searchClass = isset($_GET['searchClass']) ? $_GET['searchClass'] : '';

    $query = "SELECT * FROM past_papers WHERE 1";

    if ($searchName !== '') {
        $query .= " AND name LIKE '%$searchName%'";
    }

    if ($searchClass !== '') {
        $query .= " AND class LIKE '%$searchClass%'";
    }

    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Paper ID: " . $row["paper_id"] . " - Name: " . $row["name"] . " - Class: " . $row["class"]
                . " - Subject: " . $row["subject"] . " - Date: " . $row["paper_date"] . "<br>";
        }
    } else {
        echo "No results found.";
    }

    $result->close();
}

$conn->close();
?>
