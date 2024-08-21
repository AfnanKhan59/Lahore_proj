<?php include('navbar.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column; /* Adjust the flex direction */
            min-height: 100vh; /* Ensure the body covers the full viewport height */
        }

        /* Navbar styling */
        .navbar {
            margin-bottom: 20px; /* Add margin-bottom for spacing */
        }

        /* Fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate__animated {
            animation-duration: 1.5s;
            animation-fill-mode: both;
        }

        .animate__fadeIn {
            animation: fadeIn ease-out;
        }

        .contact-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
            margin: auto; /* Center the contact container horizontally */
            /* Centering the contact container vertically */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 60vh; /* Adjust the minimum height for vertical centering */
        }

        .back-button {
            position: absolute;
            top: 10px;
            left: 10px;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            font-size: 16px;
            background-color: #ffffff;
            padding: 8px 12px;
            border-radius: 5px;
            transition: color 0.3s, background-color 0.3s;
        }

        .back-button:hover {
            color: #fff;
            background-color: #007bff;
        }

        h1 {
            color: #343a40;
            margin-bottom: 20px;
        }

        p {
            color: #6c757d;
            margin-bottom: 30px;
        }

        .contact-info {
            margin-bottom: 20px;
        }

        .contact-info p {
            margin: 10px 0;
            color: #495057;
        }

        a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .social-icons {
            display: flex;
            justify-content: center;
        }

        .social-icons a {
            display: inline-block;
            margin: 0 10px;
            color: #495057;
            font-size: 20px;
            transition: color 0.3s ease-in-out;
        }

        .social-icons a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="contact-container animate__animated animate__fadeIn">
        <h1>Contact Us</h1>
        <p>We would love to hear from you!</p>

        <div class="contact-info">
            <p>Email: <a href="mailto:pmcforboys@gmail.com">pmcforboys@gmail.com</a></p>
            <p>Phone: <a href="tel:+923368390694">+92 336 8390694</a></p>
        </div>

        <div class="social-icons">
            <a href="#" target="_blank">Facebook</a>
            <a href="#" target="_blank">Twitter</a>
            <a href="#" target="_blank">Instagram</a>
        </div>
    </div>
</body>
</html>
