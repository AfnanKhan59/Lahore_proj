<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Papers</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h2 {
            color: #333;
            text-align: center; /* Center align the title */
            margin-top: 20px; /* Add margin to the top */
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

        input[type="text"], select {
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
        }

        button:hover {
            background-color: #0056b3;
        }

        .upload-link {
            display: block;
            text-align: center;
            margin-top: 10px;
        }

        .upload-link a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
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
</head>

<body>
    <a href="javascript:history.back()" class="back-button">Back</a>

    <h2>Search Papers</h2>

    <form action="search_results.php" method="get">
        <label for="classSearch">Search by Class:</label>
        <select name="classSearch" id="classSearch">
            <option value="class7">Class 9</option>
            <option value="class8">Class 10</option>
            <option value="class9">Class 11</option>
            <option value="class10">Class 12</option>
            <!-- Add more class options as needed -->
        </select>

        <label for="subjectSearch">Search by Subject:</label>
        <select name="subjectSearch" id="subjectSearch">
            <option value="maths">Mathematics</option>
            <option value="computer">Computer Science</option>
            <option value="english">English</option>
            <option value="urdu">Urdu</option>
            <option value="islamiyat">Islamiyat</option>
            <option value="biology">Biology</option>
        </select>

        <label for="query">Search by Paper Title:</label>
        <input type="text" name="query" id="query" placeholder="Enter paper title">

        <button type="submit">Search</button>
    </form>

    <div class="upload-link">
        <p>Want to upload a paper? <a href="upload_papers.php">Upload Paper</a></p>
    </div>
</body>

</html>
