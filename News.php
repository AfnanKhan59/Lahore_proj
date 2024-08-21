<?php include('navbar.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        header {
            background-color: #4285f4;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        .container {
            margin: 10px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 10px;
            max-width: 100%;
            border-radius: 8px;
            position: relative;
            box-sizing: border-box;
        }

        .news-image-container {
            position: relative;
            overflow: hidden;
            margin-top: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .news-image-container img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 8px;
            transition: transform 0.3s ease-in-out;
        }

        .news-image-container img:hover {
            transform: scale(1.05);
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.2));
            border-radius: 8px;
        }

        .section-title {
            margin-bottom: 10px;
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 5px;
            color: #555;
        }

        /* Home, Back to Home, and Back to Top Button Styles */
        .home-button,
        .back-to-home,
        .back-to-top {
            position: fixed;
            background-color: #333;
            color: #fff;
            padding: 5px;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            font-size: 14px;
        }

        .home-button {
            top: 10px;
            left: 10px;
        }

        .back-to-home,
        .back-to-top {
            bottom: 10px;
            right: 10px;
            display: none;
        }

        .back-to-top {
            bottom: 50px;
        }

        .home-button i,
        .back-to-home i,
        .back-to-top i {
            display: inline-block;
            margin-right: 5px;
        }

        video {
            width: 100%;
            border-radius: 8px;
            margin-top: 10px;
        }

        /* Responsive Styles */
        @media only screen and (max-width: 600px) {
            .container {
                padding: 5px;
            }

            .news-image-container {
                margin-top: 5px;
            }

            .home-button,
            .back-to-home,
            .back-to-top {
                font-size: 12px;
            }
        }
            .container {
    margin: 10px auto;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 10px;
    max-width: 100%;
    border-radius: 8px;
    position: relative;
    box-sizing: border-box;
}

.smaller-image {
    width: 50%;
    margin: 0 auto;
}

.smaller-image img {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 8px;
    transition: transform 0.3s ease-in-out;
}

.smaller-image img:hover {
    transform: scale(1.05);
}

.container video {
    width: 50%;
    max-width: 100%;
    height: auto;
}

    </style>
    
</head>

<body>

   <div class="container text-center">
    <!-- Recent Sports Week News -->
    <div class="news-image-container smaller-image">
        <div class="image-overlay"></div>
        <img src="news.jpeg" alt="Science Exhibition News" class="img-fluid">
    </div>
    <div class="section-title">
        <h2>Recent Sports Week Highlights</h2>
    </div>
    <ul>
        <li>The recent sports week saw intense competition in various sports.</li>
        <li>Athletes from different regions showcased their skills and sportsmanship.</li>
        <li>Exciting moments and close matches kept the audience on the edge of their seats.</li>
    </ul>

    <!-- Video -->
    <video autoplay loop muted class="img-fluid">
        <source src="visit.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Upcoming Science Exhibition News -->
    <div class="news-image-container smaller-image">
        <div class="image-overlay"></div>
        <img src="drk.png" alt="Science Exhibition News" class="img-fluid">
    </div>
    <div class="section-title">
        <h2>Upcoming Science Exhibition</h2>
    </div>
    <ul>
        <li>Get ready for an enlightening experience at the upcoming science exhibition.</li>
        <li>Leading scientists and innovators will showcase groundbreaking discoveries.</li>
        <li>Interactive exhibits and demonstrations will make science accessible to all attendees.</li>
    </ul>
</div>

    </div>
  <!-- Admissions Open -->
<div class="container" style="margin: 20px auto; max-width: 600px; background-color: #fff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); padding: 20px; border-radius: 8px; position: relative;">
    <div class="news-image-container" style="position: relative; text-align: center;">
        <div class="image-overlay" style="background-color: rgba(255, 255, 255, 0.5);"></div>
        <img src="adms.png" alt="Science Exhibition News" class="img-fluid" style="width: 150%; max-width: 100%; display: block; filter: brightness(120%);">
    </div>
    <div class="section-title">
        <h2>Admissions Open</h2>
    </div>
    <ul style="list-style-type: none; padding: 0;">
        <h4>🌟 Admissions Open at PAEC Model College! 🌟</h4>
        <p>Unlock the gateway to a world-class education at PAEC Model College,
        <br> where excellence meets opportunity. We are thrilled to announce that admissions are now open for the upcoming academic session. This is your chance to be part of a prestigious institution committed to fostering knowledge, skills, and character.</p>
        <h4>Why Choose PAEC Model College?</h4>
        <p>
            <h5>Academic Excellence:</h5> <p>Our curriculum is designed to nurture critical thinking, creativity, and innovation.</p>
            <h5>Experienced Faculty:</h5><p>Learn from seasoned educators dedicated to your academic and personal growth.</p>
        </p>
        <h5>State-of-the-Art Facilities:</h5><p>Access modern facilities and resources to enhance your learning experience.</p>
        <h5>Holistic Development: </h5>
        <p>Beyond academics, we focus on developing well-rounded individuals ready to face the challenges of the future.</p>
        <h5>Programs Offered:</h5>
        <p>
            Intermediate (Pre-Engineering,
            <br> Pre-Medical, Computer Science) <br>
            F.Sc. (Engineering) <br>
            ICS (Computer Science)
        </p>
        <h5>How to Apply</h5>
        <p>Visit our website: PAECModelCollege.edu.pk for detailed information. <br>
        Fill out the online application form. <br>
        Submit required documents.
        <br>
        Prepare for an exciting educational journey!</p>
        <h6>Don't miss this opportunity to become part of a community dedicated to shaping future leaders. 
            <br>Admissions are competitive, so apply early to secure your spot.  <br> For inquiries, contact us at pmcforboys@gmail.com or call us at
            <br> +92 319486502.

        Join PAEC Model College – Where Education Transcends Boundaries! 🎓🚀</h6>
    </ul>
</div>


    <script>
        // Smooth scroll to top function
        function scrollToTop() {
            window.scroll({
                top: 0,
                left: 0,
                behavior: 'smooth'
            });
        }

        // Show/Hide Back to Home and Back to Top buttons based on scroll position
        window.onscroll = function () {
            var backToHomeButton = document.querySelector('.back-to-home');
            var backToTopButton = document.querySelector('.back-to-top');
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                backToHomeButton.style.display = "block";
                backToTopButton.style.display = "block";
            } else {
                backToHomeButton.style.display = "none";
                backToTopButton.style.display = "none";
            }
        };

        // Go to Home Page function
        function goToHomePage() {
            // Adjust the href attribute based on your home page URL
            window.location.href = 'home.php';
        }
    </script>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
