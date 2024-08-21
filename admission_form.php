<?php include('navbar.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
        }

        input,
        textarea {
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .back-button {
            display: block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
        }

        .back-button:hover {
            background-color: #218838;
        }

        .btn-download {
    background-color: #0cc0df;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.btn-download:hover {
    background-color: lightsteelblue;
}

    </style>
</head>
<body>
    <div class="form-container">
        <form action="process_admission.php" method="post">
            <h2>Admission Form</h2>

            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Father Name:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>

            <label for="course">Guardian Name(If Have Any):</label>
            <input type="text" id="course" name="course" required>

            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="4" required></textarea>

            <label for="address">Permanent Address:</label>
            <textarea id="address" name="address" rows="4" required></textarea>

           <label for="course">Course:</label>
<input type="text" id="course" name="course" placeholder="AVAILABLE COURSES ARE (ICS,MEDICAL,PRE-ENG)" required>


                    <ul>
                        <b>Required Student Files</b>
                      <li>Cnic Copy Of Father Or Legal Guardin</li> 
                        <li>A Copy Of Matric Certificate</li>
                          <li>A Folder To Attach The Files</li>
                            <li>A Character And School Leaving Certificate</li>
                         </ul>


            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

