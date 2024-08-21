<?php include('navbar.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help & Support - PMC For Boys</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
            opacity: 0; /* Initially set opacity to 0 for fade-in effect */
        }

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

        @keyframes slideIn {
            from {
                transform: translateX(-20px);
            }
            to {
                transform: translateX(0);
            }
        }

        .animate__animated {
            animation-fill-mode: both;
        }

        .animate__fadeIn {
            animation: fadeIn ease-out 3s; /* Changed to 3 seconds */
        }

        .animate__slideIn {
            animation: slideIn ease-out 3s;
        }

        h2 {
            color: #333;
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
        /* Additional CSS */

.contact-info {
    margin-top: 20px;
}

.contact-info p {
    margin-bottom: 10px;
}

footer {
    margin-top: 20px;
    text-align: center;
    color: #777;
}

/* Responsive styling for small screens */
@media only screen and (max-width: 600px) {
    body {
        margin: 10px;
    }

    .back-button {
        font-size: 14px;
        padding: 6px 10px;
    }

    h1 {
        font-size: 24px;
    }
}

    </style>
</head>
<body class="animate__animated animate__fadeIn animate__slideIn">
    <br>
    <h1>Help & Support</h1>
    <p>If you require assistance or have any questions, our support team is here to help you. Please feel free to reach out to us through the following channels:</p>

    <div class="contact-info">
        <p><strong>Email:</strong> <a href="mailto:pmcforboys@gmail.com">pmcforboys@gmail.com</a></p>
        <p><strong>Phone:</strong> <a href="tel:+923368390694">+92 336 8390694</a></p>
    </div>

    <p>We strive to respond to all inquiries as promptly as possible. Your satisfaction is our priority.</p>

    <!-- Add additional content or information as needed -->

    <footer>
        <p>&copy; 2024 PMC For Boys. All rights reserved.</p>
    </footer>
    
    <script>
        // Script to set opacity to 1 after the animation
        document.addEventListener('DOMContentLoaded', function () {
            document.body.style.opacity = '1';
        });
    </script>
</body>
</html>
