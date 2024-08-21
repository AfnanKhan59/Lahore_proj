<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PMC - Nilore Education Center</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
 <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
 <style>
        /* CSS for typing animation */
        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }

        .typewriter h1 {
            overflow: hidden;
            border-right: .15em solid orange; /* Adjust color as needed */
            white-space: nowrap;
            margin: 0;
            font-size: 1.5em;
            animation: typing 3s steps(30) 1; /* Play the animation only once */
        }
    </style>
    <style>
        /* Global styles for your entire page (outside the calendar) */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Styles specific to the calendar container */
        #calendar-container {
            max-width: 600px; /* Adjust the max-width for a wider calendar */
            margin: 20px auto;
        }

        /* FullCalendar styles */
        .fc {
            background-color: #fff; /* Calendar background color */
            border-radius: 2px; /* Calendar container border-radius */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Calendar container box shadow */
        }

        /* Other styles remain unchanged */
    </style>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
          rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="style.css" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
<style>
   body {
        transform: scale(1); /* Adjust the scale value for a larger size */
        transform-origin: 0 0;
    }

    /* Add responsive styles here */
    @media (max-width: 768px) {
        /* Adjust styles for smaller screens */
        .text {
            width: 100%;
            margin-left: 0;
        }

        .image {
            width: 100%;
            margin-left: 0;
        }

        .container {
            display: flex;
            justify-content: space-between;
        }

        .text {
            width: 100%; /* Adjust the width as needed */
            text-align: justify;
        }

        .image {
            width: 40%; /* Adjust the width as needed */
            margin-left: 90px; /* Adjust the margin as needed to move the image to the right */
        }

        .rounded-20 {
            border-radius: 20%; /* Make the image round */
        }

        .logo {
            border-radius: 50%;
        }
    }
</style>

</style>
</style>
    <style>
         /* Add responsive styles here */
        @media (max-width: 768px) {
            .text {
                width: 100%; /* Adjust the width for smaller screens */
                margin-left: 0; /* Reset margin */
            }

            .image {
                width: 100%; /* Adjust the width for smaller screens */
                margin-left: 0; /* Reset margin */
            }
        }

        /* Other existing styles */
        .news-image-container {
            position: relative;
            overflow: hidden;
        }
        .news-image-container {
            position: relative;
            overflow: hidden;
        }

        .news-image-container img {
            width: 100%;
            height: auto;
            display: block;
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }
    </style>
    <style>
        .section-title {
            border-bottom: 2px solid #007bff; /* Add a blue line under the section title */
            padding-bottom: 10px; /* Add some space between the title and the line */
            margin-bottom: 20px; /* Add space below the section */
        }

        .welcome-title {
            font-size: 32px;
            color: #007bff;
            margin-bottom: 20px;
        }

        .welcome-content {
            font-size: 18px;
            color: #333;
            line-height: 1.6;
        }
    </style>
    <script>
        // Function to show or hide the back-to-top button based on scroll position
        function handleScroll() {
            var scrollPosition = window.scrollY || document.documentElement.scrollTop;

            var backToTopButton = document.querySelector('.back-to-top');

            // Show or hide the button based on the scroll position
            if (scrollPosition > 300) {
                backToTopButton.style.display = 'block';
            } else {
                backToTopButton.style.display = 'none';
            }
        }

        // Smooth scroll to the top when the button is clicked
        document.querySelector('.back-to-top').addEventListener('click', function (e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Attach the scroll event listener
        window.addEventListener('scroll', handleScroll);

        // Trigger the handleScroll function on page load
        handleScroll();
    </script>
    <style>
        /* Your back-to-top button styles */
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .back-to-top:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        // Function to show or hide the back-to-top button based on scroll position
        function handleScroll() {
            var scrollPosition = window.scrollY || document.documentElement.scrollTop;

            var backToTopButton = document.querySelector('.back-to-top');

            // Show or hide the button based on the scroll position
            if (scrollPosition > 300) {
                backToTopButton.style.display = 'block';
            } else {
                backToTopButton.style.display = 'none';
            }
        }

        // Smooth scroll to the top when the button is clicked
        document.querySelector('.back-to-top').addEventListener('click', function (e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Attach the scroll event listener
        window.addEventListener('scroll', handleScroll);

        // Trigger the handleScroll function on page load
        handleScroll();
    </script>


    <script>
        // Function to handle the scroll-triggered animation
        function handleAnimation(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__animated', 'animate__fadeInUp', 'animate__slow');
                    observer.unobserve(entry.target);
                }
            });
        }

        // Set up the Intersection Observer
        const observer = new IntersectionObserver(handleAnimation, {threshold: 0.5});

        // Observe each animated element
        document.querySelectorAll('.animate-container').forEach(container => {
            observer.observe(container);
        });
    </script>
    <style>
        /* Add to your CSS file */
.fade {
    transition: opacity 0.5s ease-in-out;
}

.fade-out {
    opacity: 0;
}

.fade-in {
    opacity: 1;
}

        .container {
            display: flex;
            justify-content: space-between;
        }

        .text {
            width: 700%; /* Adjust the width as needed */
            text-align: justify;
        }

        .image {
            width: 40%; /* Adjust the width as needed */
            margin-left: 90px; /* Adjust the margin as needed to move the image to the right */
        }

        .rounded-20 {
            border-radius: 20%; /* Make the image round */
        }
    </style>

    <style>
        .logo {
            border-radius: 50%;
        }
    </style>
</head>

<body>
  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
  rel="stylesheet">
  
  <!-- Include Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-...." crossorigin="anonymous" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="style.css" rel="stylesheet">
  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
  <!--  <div class="container-fluid p-0"> -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
        <!-- <a href="register.php" class="navbar-brand ml-3"> -->
        <h1 class="m-0 text-uppercase text-primary" style="margin: 0; display: flex; align-items: center; justify-content: center; position: relative;">
    <img src="Pmc.jpg" alt="PMC Logo" style="max-width: 80px; max-height:90px; border: 0; position: absolute; left: ;">
    <!-- PMC -->
</h1>
<style type="text/css">
    .custom-button {
    background-color: blue;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.custom-button:hover {
    background-color: white;
    color: blue;
    border: 2px solid blue;
}

</style>
     </a>
     <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
            <a href="home.php" class="nav-item nav-link">
                <i class="fas fa-home"></i> Home
            </a>
            <a href="about_1.php" class="nav-item nav-link">
                <i class="fas fa-info-circle"></i> About
            </a>
            <a href="view_papers.php" class="nav-item nav-link">
                <i class="fas fa-file-alt"></i> Past Papers
            </a>

            <a href="News.php" class="nav-item nav-link">
                <i class="fas fa-newspaper"></i> News & Events
            </a>

            <a href="newsletter.php" class="nav-item nav-link">
                <i class="fas fa-envelope"></i> News Letter
            </a>
            <a href="register.php" class="nav-item nav-link">
                <i class="fas fa-address-card"></i> Login
            </a>
            <a href="gallery.php" class="nav-item nav-link">
    <i class="fas fa-camera-retro"></i> Gallery
        </div>
        <a href="loader.html" class="nav-item nav-link" id="switch-link">
    <i class="fas fa-toggle-on"></i> switch
</a>

</a>

    </div>
    <a href="admission_form.php" class="btn btn-primary py-2 px-4 d-none d-lg-block">
    <i class="fas fa-user-plus"></i> Join Us
</a>
<script>
    function toggleNavbar() {
        var navbarList = document.querySelector('.navbar-list');
        navbarList.classList.toggle('show');
    }
</script>
</div>
</nav>
</div>
    <!-- Navbar End -->
<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="background-color: #3d86ed; padding: 0; margin: 0; min-height: 300px;">
    <div class="container-fluid py-0 d-flex align-items-start justify-content-center" style="padding-left: 100px; padding-right: 100px; max-width: 100%;">
        <div class="text-center" style="margin-top: 100px;">
            <h6 class="text-white display-1" style="white-space: nowrap; margin: 0;">
                PAEC Model College For Boys
            </h6>
        </div>
    </div>
</div>
<!-- Header-End-->
<br>
</div>
</div>
<div class="row pt-0 mx-0">
    <div class="col-3 px-0 animate__animated animate__fadeInUp animate__slow">
        <div class="bg-success text-center p-3">
            <h1 class="text-white" data-toggle="counter-up">3</h1>
            <h6 class="text-uppercase text-white">Available<span class="d-block">Subjects (ICS, ENGINEERING, <br>
                    MEDICAL)</span></h6>
        </div>
    </div>
    <div class="col-3 px-0 animate__animated animate__fadeInUp animate__slow">
        <div class="bg-primary text-center p-3">
            <h1 class="text-white" data-toggle="counter-up">2000 </h1>
            <h6 class="text-uppercase text-white"><br>Establishment <br>Since<span class="d-block"></span></h6>
        </div>
    </div>
    <div class="col-3 px-0 animate__animated animate__fadeInUp animate__slow">
        <div class="bg-secondary text-center p-3">
            <h1 class="text-white" data-toggle="counter-up">40</h1>
            <h6 class="text-uppercase text-white"><br>Skilled<br><span class="d-block">Teachers</span></h6>
        </div>
    </div>
    <div class="col-3 px-0 animate__animated animate__fadeInUp animate__slow">
        <div class="bg-warning text-center p-3">
            <h1 class="text-white" data-toggle="counter-up">800</h1>
            <h6 class="text-uppercase text-white"><br>Happy<br><span class="d-block">Students</span></h6>
        </div>
    </div>
</div>


<!-- About End -->


<!-- Feature Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12 mb-5 mb-lg-0">
                <div class="content-container">
                    <div class="text-container" align="justify">
                        <div class="row">
                            <div class="col-lg-8">
                                <div align="justify"><h4><strong>In the Name of Allah, the Most Gracious and Infinitely
                                            Merciful</strong></h4>
                                    <p>
                                        Sir Faisal, the esteemed principal of PMC (For Boys), is a beacon of leadership
                                        and inspiration within the academic community. With a wealth of experience and a
                                        passion for nurturing young minds, Sir Faisal has transformed PMC into a haven
                                        of academic excellence and character development.
                                        Known for his unwavering commitment to the holistic growth of his students, Sir
                                        Faisal fosters an environment that encourages curiosity, critical thinking, and
                                        a sense of responsibility. His innovative approach to education goes beyond
                                        textbooks, emphasizing real-world skills and values that prepare students for
                                        the challenges of tomorrow. </p></div>
                            </div>
                            <br>
                            <div class="col-lg-4 ">
                                <img class="img-fluid rounded rounded-20" src="f.jpeg">
                            </div>
                        </div>
                        <br>
                        <h6>Why Choose Us?</h6>
                        <div class="section-title position-relative mb-6">
                            <h1 class="display-7">Why You Should Start Learning with Us?</h1>
                            <div style="display: flex; align-items: center;">
  <!-- <img src="sh.jpeg" style="width: 50%;" alt="nai"> -->
  <img src="whatsapp.jpeg" style="width: 100%; height:0%;"alt="m">
</div>
                        </div>
                        <p class="mb-4 pb-2">Discover the unparalleled advantages of studying with us! Our educational
                            institution is dedicated to fostering an environment of academic excellence, innovation, and
                            personal growth. With a team of highly qualified and experienced educators, state-of-the-art
                            facilities, and a curriculum designed to meet the demands of the modern world, we provide
                            students with a solid foundation for success.</p>
                        <div class="d-flex mb-3 animate__animated animate__fadeInUp animate__duration-6s">
                            <div class="btn-icon bg-primary mr-4">
                                <i class="fa fa-2x fa-graduation-cap text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Skilled Instructors</h4>
                                <div class="d-flex mb-3 animate-container">
                                    <p>Our institution takes pride in the caliber of our instructors who are not just
                                        educators but mentors and industry experts. Comprising a diverse and highly
                                        skilled team, our instructors bring a wealth of practical knowledge and
                                        real-world experience to the classroom.</p>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex mb-3 animate__animated animate__fadeInUp animate__duration-6s">
                            <div class="btn-icon bg-secondary mr-4">
                                <i class="fa fa-2x fa-certificate text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Federal Certificate</h4>
                                <div class="d-flex mb-3 animate-container">
                                    <p>Embark on a journey of academic distinction with the Federal Certificate program at PMC FOR BOYS College. Our Federal Certificate curriculum is designed to provide a comprehensive and specialized education, ensuring students acquire the knowledge and skills needed for success.</p>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex mb-1 animate__animated animate__fadeInUp animate__duration-6s">
                            <div class="btn-icon bg-secondary mr-3 ">
                                <i class='fas fa-basketball-ball text-white' style='font-size:50px;color:red'></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Sports</h4>
                                <div class="d-flex mb-1 animate-container">
                                    <p>At PMC (For Boys), we emphasize the importance of sports in fostering physical
                                        fitness, teamwork, and leadership skills. Our diverse sports program includes
                                        football, cricket, basketball, and athletics. With state-of-the-art facilities,
                                        we aim to instill a passion for an active lifestyle and holistic development
                                        among our students every year we conduct sports weak for students before mids
                                        paper. PT Teacher sir Abdul hanan marwat is the head of sports community </p>
                                </div>
                            </div>
                        </div>
                        <br>
<div class="d-flex mb-1 animate__animated animate__fadeInUp animate__duration-6s">
                            <div class="btn-icon bg-secondary mr-3 ">
                                <i class='fas fa-microchip text-white' style='font-size:50px;color:red'></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Technology&Inovation</h4>
                                <div class="d-flex mb-1 animate-container">
                                    <p>Welcome to the forefront of education at PMC FOR BOYS College, where technology meets learning excellence. Our commitment to technological advancement ensures a dynamic and innovative environment for students. From state-of-the-art classrooms equipped with interactive smart boards to cutting-edge laboratories for hands-on experimentation, we embrace technology to enhance the educational experience.</p>
                                </div>
                            </div>
                        </div>
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include"home_footer.php"  ?>
<div class="container-fluid bg-dark text-white-500 border-top py-4"
     style="border-color: rgba(256, 256, 256, .1) !important;">
    <div class="container">
        <div class="row">

            <!-- <p class="m-2">Copyright &copy; <a class="text-white">PMC</a>. All Rights Reserved.
            </p> -->


            <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top">
                <i class="fa fa-angle-double-up"></i>
            </a>

            <!-- Scripts -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

            <script>
                // Function to show or hide the back-to-top button based on scroll position
                function handleScroll() {
                    var scrollPosition = window.scrollY || document.documentElement.scrollTop;

                    var backToTopButton = document.querySelector('.back-to-top');

                    // Show or hide the button based on the scroll position
                    if (scrollPosition > 300) {
                        backToTopButton.style.display = 'block';
                    } else {
                        backToTopButton.style.display = 'none';
                    }
                }

                // Smooth scroll to the top when the button is clicked
                document.querySelector('.back-to-top').addEventListener('click', function (e) {
                    e.preventDefault();
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });

                // Attach the scroll event listener
                window.addEventListener('scroll', handleScroll);

                // Trigger the handleScroll function on page load
                handleScroll();
            </script>

            <script src="script.js"></script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
 <script>
        // Function to show or hide the back-to-top button based on scroll position
        function handleScroll() {
            var scrollPosition = window.scrollY || document.documentElement.scrollTop;

            var backToTopButton = document.querySelector('.back-to-top');

            // Show or hide the button based on the scroll position
            if (scrollPosition > 300) {
                backToTopButton.style.display = 'block';
            } else {
                backToTopButton.style.display = 'none';
            }
        }

        // Smooth scroll to the top when the button is clicked
        document.querySelector('.back-to-top').addEventListener('click', function (e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Attach the scroll event listener
        window.addEventListener('scroll', handleScroll);

        // Trigger the handleScroll function on page load
        handleScroll();
    </script>

    <script src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
<!--Scripts end-->
<!-- Add this style in the head section -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- FullCalendar JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
 <script>
        $(document).ready(function () {
            $('#calendar').fullCalendar({
                // Customize your calendar options here
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                events: [
                    // Add your events here
                    {
                        title: 'Annual',
                        start: '2024-02-06' // Corrected date format
                    },
                    {
                        title: 'Science Exhibition',
                        start: '2024-01-24'
                    },
                    // Add more events here
                    {
                        title: 'Ramadan Start',
                        start: '2024-03-11'
                    },
                    {
                        title: 'Additional Event',
                        start: '2024-03-05'
                    },
                    {
                        title: 'Happy New Year',
                        start: '2024-01-01'
                    }
                ],
                eventMouseover: function (event, jsEvent, view) {
                    // Display the event name on hover
                    var tooltip = '<div class="tooltipevent">' + event.title + '</div>';
                    $("body").append(tooltip);
                    $(this).mouseover(function (e) {
                        $(this).css('z-index', 10000);
                        $('.tooltipevent').fadeIn('500');
                        $('.tooltipevent').fadeTo('10', 1.9);
                    }).mousemove(function (e) {
                        $('.tooltipevent').css('top', e.pageY + 10);
                        $('.tooltipevent').css('left', e.pageX + 20);
                    });
                },
                eventMouseout: function (event, jsEvent, view) {
                    // Hide the event name when mouse is out
                    $(this).css('z-index', 8);
                    $('.tooltipevent').remove();
                }
            });
        });
    </script>



</body>

</html>