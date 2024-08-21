<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Papers</title>
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

        .view-button {
            text-align: center;
            margin-top: 10px;
        }

        .view-button a {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            background-color: #007bff;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .view-button a:hover {
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
            content: "→ ";
            margin-right: 5px;
            transform: rotateY(180deg);
        }
    </style>
</head>

<body>
    <a href="javascript:history.back()" class="back-button">Back</a>

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

    <div class="view-button">
        <p>View uploaded papers <a href="view_papers.php">here</a>.</p>
    </div>
</body>

</html>
