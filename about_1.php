<?php include('navbar.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
         body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .slider-container {
            position: relative;
            overflow: hidden;
            width: 100%;
            max-width: 1200px;
            margin: 20px auto 0;
        }

        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            min-width: 100%;
            box-sizing: border-box;
        }

        .slide img {
            width: 100%;
            height: auto;
            display: block;
        }

        .controls {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .control-left,
        .control-right {
            background-color: rgba(255, 255, 255, 0.7);
            padding: 10px;
            border: none;
            cursor: pointer;
            font-size: 18px;
            color: #333;
            outline: none;
            transition: background-color 0.3s ease;
        }

        .control-left:hover,
        .control-right:hover {
            background-color: rgba(255, 255, 255, 0.9);
        }

        .space-for-content {
            height: 300px;
            background-color: #f0f0f0;
            text-align: center;
            padding: 20px;
        }

        /* Responsive Styles */
        @media screen and (max-width: 768px) {
            .slider-container {
                margin-top: 10px;
            }

            .space-for-content {
                height: 200px;
            }
        }

        @media screen and (max-width: 480px) {
            .controls {
                flex-direction: column;
                align-items: center;
            }

            .control-left,
            .control-right {
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>
<br>
<style>
    .slider-container {
        max-width: 700px; /* Set your preferred max-width */
        margin: 0 auto;
    }

    .slide {
        width: 100%;
        max-width: 300px; /* Set your preferred max-width for individual slides */
        margin: 0 auto;
    }

    .slide img {
        width: 100%;
        height: auto;
        border-radius: 8px; /* Add border-radius for rounded corners if desired */
    }
</style>

<div class="slider-container">
    <div class="slider">
        <!-- Add your images with href attribute -->
        <div class="slide">
            <img src="stu2.jpeg" alt="Slide 1">
        </div>
        <div class="slide">
            <img src="e.jpeg" alt="Slide 2">
        </div>
        <div class="slide">
            <img src="p.jpeg" alt="Slide 3">
        </div>
        <div class="slide">
            <img src="c.jpeg" alt="Slide 4">
        </div>
        <div class="slide">
            <img src="6.jpeg" alt="Slide 5">
        </div>
      <!--   <div class="slide">
            <img src="7.jpeg" alt="Slide 6">
        </div> -->
        <!-- Add more slides as needed -->
    </div>

    <div class="controls">
        <button class="control-left" onclick="prevSlide()">❮</button>
        <button class="control-right" onclick="nextSlide()">❯</button>
    </div>
</div>

    <div class="space-for-content">
        <!-- Add your content here -->
        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About PMC College</title>
<style>
        .footer {
            font-size: 10px; /* You can adjust the font size as needed */
        }
    </style>
    <style>
        /* Common Styles */

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Fade-in animation */

        .animate__animated {
            animation-duration: 1s;
            animation-fill-mode: both;
        }

        .animate__fadeIn {
            opacity: 0;
        }

        .animate__fadeIn.animate__delay-1s {
            animation-delay: 1s;
        }

        .animate__fadeIn.animate__delay-2s {
            animation-delay: 2s;
        }

        .animate__fadeIn.animate__delay-3s {
            animation-delay: 3s;
        }

        /* Cool entrance animation */

        @keyframes coolEntrance {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .cool-entrance {
            animation: coolEntrance 3s ease-out forwards;
        }

        /* Home Button */

        .home-button {
            position: fixed;
            top: 10px;
            left: 10px;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
            font-size: 16px;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .home-button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        /* Page-Specific Styles */

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1,
        h2 {
            color: #333;
        }

        p {
            color: #555;
        }

        .core-values ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .core-values li {
            margin-bottom: 10px;
        }

        .footer {
            background-color: #B3D2B2;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>

</head>

<body>
    <br>
    <div class="container animate__animated animate__fadeIn animate__delay-1s cool-entrance">
        <h1>About PMC College</h1>
        <p>Welcome to PMC College, a distinguished institution in the heart of Nilore, Islamabad, committed to fostering academic excellence since its establishment in the year 2000.</p>

        <!-- Other content with cool entrance animation -->

        <h2>Our History</h2>
        <p>PMC College has a rich history of providing quality education and shaping the minds of students for more than two decades. Founded with the vision to create a learning environment that promotes knowledge, innovation, and character development, PMC College has been a pillar of academic strength in the local community.</p>

        <h2>Academic Excellence</h2>
        <p>At PMC College, we take pride in our commitment to academic excellence. Our dedicated faculty members, state-of-the-art facilities, and a comprehensive curriculum ensure that students receive a well-rounded education that prepares them for the challenges of the future.</p>

        <div class="core-values">
            <h2>Core Values</h2>
            <ul>
                <li><strong>Excellence:</strong> Striving for the highest standards in education and character development.</li>
                <li><strong>Innovation:</strong> Encouraging creativity, critical thinking, and problem-solving skills.</li>
                <li><strong>Community:</strong> Fostering a sense of community and collaboration among students, faculty, and staff.</li>
            </ul>
        </div>

        <div class="location">
            <h2>Location</h2>
            <p>Situated in the picturesque surroundings of Nilore, Islamabad, our campus provides a serene and conducive atmosphere for learning. The beautiful landscape and modern infrastructure contribute to a positive and inspiring educational journey.</p>
        </div>

        <h2>Vision for the Future</h2>
        <p>As we move forward, PMC College remains dedicated to evolving with the changing educational landscape. Our vision is to continue being a center of academic excellence, producing graduates who are not only well-versed in their fields but also possess the skills and values needed to make a positive impact on society.</p>

        <p>Join us at PMC College, where education meets inspiration.</p>
    </div>
<br>
<br>
<br>
    <!-- <div class="footer">
        <p>&copy; <a href="#" class="text-white">PMC</a>. All Rights Reserved.</p>
    </div>
</body> -->

</html>

    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // JavaScript for slider controls
        var currentSlide = 0;
        var totalSlides = document.querySelectorAll('.slide').length;

        function showSlide(index) {
            var slider = document.querySelector('.slider');
            if (index >= totalSlides) {
                currentSlide = 0;
            } else if (index < 0) {
                currentSlide = totalSlides - 1;
            } else {
                currentSlide = index;
            }
            var translateValue = -currentSlide * 100 + '%';
            slider.style.transform = 'translateX(' + translateValue + ')';
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        function prevSlide() {
            showSlide(currentSlide - 1);
        }
    </script>
</body>

</html>
