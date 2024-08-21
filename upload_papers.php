<?php include('navbar.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Papers</title>
    <!--bootstraplink-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h2 {
            color: #333;
            text-align: center;
            margin-top: 20px;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            position: relative;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input[type="text"],
        input[type="file"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .back-button {
            position: absolute;
            top: 10px;
            left: 10px;
            text-decoration: none;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            background-color: #333;
            padding: 8px 12px;
            border-radius: 5px;
            display: flex;
            align-items: center;
        }

        .back-button::before {
            content: "← "; /* Changed arrow direction */
            margin-right: 5px;
        }
    </style>    
    <!-- Animate.css Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
     <!-- Bootstrap JS Bundle Link -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- ... your existing styles ... -->
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

    h2,
    form {
        animation: fadeInUp 1s ease-in-out forwards; /* Apply fade-in and slide-up to these elements */
    }

    .back-button {
        animation: fadeInLeft 1s ease-in-out forwards; /* Apply fade-in and slide-left to the back button */
    }

    /* ... your existing styles ... */
</style>

</head>

<body>

    <h2>Upload Papers</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <label for="title">Paper Title:</label>
        <input type="text" name="title" id="title" required>

        <label for="file">Select File:</label>
        <input type="file" name="file" id="file" accept=".pdf" required>

        <button type="submit">Upload</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = isset($_POST['title']) ? $_POST['title'] : '';

        $file_path = 'uploads/' . basename($_FILES['file']['name']);

        if (move_uploaded_file($_FILES['file']['tmp_name'], $file_path)) {
            // Save information to the database (replace with your database connection code)
            $pdo = new PDO('mysql:host=localhost;dbname=past_papers', 'root', '');

            $stmt = $pdo->prepare('INSERT INTO papers (title, file_path) VALUES (?, ?)');
            $stmt->execute([$title, $file_path]);

            echo '<p style="color: green;">File uploaded successfully!</p>';
        } else {
            echo '<p style="color: red;">Failed to upload file.</p>';
        }
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
