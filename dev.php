<?php  include"new_nav.php"  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Info</title>
    <style>
        
    </style>
    <style>
          body {
        font-family: 'Arial', sans-serif;
        background-image: url('awesome-background.jpg');
        background-size: cover;
        background-position: center;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-size: 12px; /* Adjust the font size to make the text smaller */
        color: black;
    }

    header {
        background-color: rgba(51, 51, 51, 0.8);
        color: white;
        text-align: center;
        padding: 30px; /* Reduce the padding to make the header smaller */
    }
.developer-container {
        display: flex;
        justify-content: space-around; /* Spread the cards out horizontally */
        flex-wrap: wrap;
        padding: 20px; /* Increase the padding to add more space around the cards */
    }

    .developer-card {
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 8px;
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.3);
        margin: 20px; /* Increase the margin to add more space between the cards */
        padding: 20px; /* Adjust the padding to your liking */
        max-width: 250px;
        text-align: center;
        position: relative;
    }

    .developer-card img {
        border-radius: 50%;
        max-width: 100%;
        height: auto;
        margin-bottom: 20px;
    }

    /* ... Your existing styles ... */

    @media (max-width: 600px) {
        .developer-container {
            flex-direction: column;
            align-items: center;
        }
    }

    /* ... Your existing styles ... */

    @keyframes scaleRotateIn {
        from {
            opacity: 0;
            transform: scale(0.8) rotate(-10deg);
        }
        to {
            opacity: 1;
            transform: scale(1) rotate(0deg);
        }
    }

    .developer-card {
        /* ... Your existing styles ... */
        animation: scaleRotateIn 1s cubic-bezier(0.68, -0.55, 0.27, 1.55);
    }

    .home-button {
        position: fixed;
        bottom: 10px;
        right: 10px;
        background-color: #3498db;
        color: white;
        padding: 8px 16px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 14px;
        cursor: pointer;
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.3);
    }

    .social-buttons {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
    }

    .social-buttons a {
        display: inline-block;
        margin: 0 8px;
        color: #333;
        background-color: #fff;
        padding: 8px;
        border-radius: 50%;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .social-buttons i {
        margin-right: 5px;
    }

    footer {
        background-color:#0B7DE1;
        color: white;
        text-align: center;
        padding: 5px;
        position: fixed;
        bottom: 0;
        width: 100%;
    </style>
</head>
<body>
<!-- 
    <header>
        <h1>Meet Our Developers</h1>
    </header> -->
    <div class="developer-container">

        <!-- Developer 1 -->
        <div class="developer-card">
            <img src="me.jpeg" alt="Developer 1">
            <h2>Afnan Saeed</h2>
            <h3>Full Stack Developer</h3>
            <h5>Experience:(Learning More Languages)</h5>
            <h6>Skills: HTML, CSS, JavaScript, PHP, MySql</h6>
        </div>

        <!-- Developer 2 -->
        <div class="developer-card">
            <img src="saif.jpeg" alt="Designer">
            <h2>Saif Shahzad</h2>
            <h5>Designer</h5>
            <h5>Experience: Continued</h5>
            <h6>Skills: Canva and Photoshop</h6>
        </div>

        <!-- Developer 3 -->
        <div class="developer-card">
            <img src="meg.jpg" alt="Designer">
            <h2>Umar Shahjahan</h2>
            <h5>Designer</h5>
            <h5>Experience: Continued</h5>
            <h6>Skills:Ghraphic Desginer</h6>
            <br>
        </div>

    </div>

    <!-- <footer>
        <h5>&copy; copyright PMC dev Info Page</h5>
    </footer> -->

</body>
<a href="home.php" class="home-button">Home</a>
</html>
