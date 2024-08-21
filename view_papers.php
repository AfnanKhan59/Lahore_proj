<?php include('navbar.php'); ?>
<?php
// Database connection code (replace with your credentials)
$pdo = new PDO('mysql:host=localhost;dbname=past_papers', 'root', '');

// Fetch papers from the database
$stmt = $pdo->query('SELECT * FROM papers');

// Check for errors in the query
if (!$stmt) {
    echo "Error in query: " . $pdo->errorInfo()[2]; // Output the specific error message
    exit; // Stop execution
}

$papers = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Past Papers</title>
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            opacity: 0;
            animation: fadeIn 1s ease-in-out forwards;
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        h2 {
            color: #333;
            text-align: center;
            margin-top: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
            text-align: center;
        }

        li {
            margin: 10px 0;
        }

        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .button-container,
        h2,
        ul,
        .back-button,
        .upload-button,
        .home-button {
            animation: fadeIn 1s ease-in-out forwards;
        }

        .back-button,
        .upload-button,
        .home-button {
            background-color: #28a745;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .upload-button:hover {
            background-color: #ffff;
            transform: scale(1.1);
        }

        .home-button {
            background-color: #f8d7da;
            color: #721c24;
        }

        .home-button:hover {
            background-color: #e8616c;
            color: #fff;
        }

        .back-button {
            background-color: #007bff;
            color: #fff;
        }

        .back-button:hover {
            background-color: #0056b3;
        }

        .upload-button {
            background-color: #28a745;
            color: #fff;
        }

        .upload-button:hover {
            background-color: #218838;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            padding: 0 20px;
        }
    </style>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
     <style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        opacity: 0; /* Set initial opacity to 0 for fade-in effect */
        animation: fadeIn 1s ease-in-out forwards; /* Animation definition */
    }

    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }

    /* ... your existing styles ... */

    .button-container,
    h2,
    ul,
    .back-button,
    .upload-button,
    .home-button {
        animation: fadeIn 1s ease-in-out forwards; /* Apply fade-in to these elements */
    }
</style>
 <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
   

    <h2>View Past Papers</h2>

    <ul>
        <?php foreach ($papers as $paper): ?>
            <li>
                <a href="<?php echo $paper['file_path']; ?>" target="_blank">
                    <?php echo $paper['title']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
     <div class="button-container">
        <!-- <a href="javascript:history.back()" class="back-button">Back</a> -->
        <a href="upload_papers.php" class="upload-button">Upload Papers</a>
    </div>
    <?php include('footer.php')  ?>
</body>
</html>
