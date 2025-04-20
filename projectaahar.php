<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Aahar - Bring Bright Smile Foundation</title>
    
    <!-- Favicon-->
    <link rel="icon" type="image" href="./images/website-favicon.png" sizes="192x192" />
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --primary: #232323;
            --secondary: #fbfe65;
            --accent: #e53e3e;
            --light: #ffffff;
            --dark: #232323;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
            padding-top: 80px;
        }
        
        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
        }

        /* EXACT NAVIGATION FROM HOMEPAGE */
        .my-navbar {
            background-color: white;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            padding: 0.5rem 1rem;
        }
        
        .navbar-brand {
            display: flex;
            align-items: center;
        }
        
        .navbar-brand img {
            height: 60px;
            width: 60px;
            border-radius: 50%;
            border: 2px solid var(--secondary);
        }
        
        .navbar-brand span {
            font-size: 1.25rem;
            font-weight: 700;
            margin-left: 10px;
            color: var(--dark);
        }
        
        .navbar-brand span span {
            color: var(--secondary);
        }
        
        .nav-link {
            color: var(--dark) !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            color: var(--secondary) !important;
        }
        
        .nav-link.active {
            color: var(--secondary) !important;
            font-weight: 600;
        }
        
        .custom-toggler {
            border: none;
            padding: 0.5rem;
            color: var(--dark);
        }
        
        .custom-toggler:focus {
            outline: none;
        }
        
        .custom-toggler-icon {
            background-image: none;
            font-size: 1.5rem;
            color: var(--dark);
        }

        /* Rest of your original styles */
        .green-hr {
            border: 0;
            height: 2px;
            background: var(--secondary);
            width: 100px;
            margin: 1rem auto;
        }
        
        .donate-btn {
            background-color: var(--secondary);
            color: var(--dark);
            font-weight: 600;
            padding: 0.5rem 2rem;
            border: none;
            transition: all 0.3s ease;
        }
        
        .donate-btn:hover {
            background-color: #e9ec5a;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        
        /* Footer hover fix */
        #footer a:hover {
            color: var(--secondary) !important;
        }
    </style>
</head>

<body>
    <!-- NAVIGATION BAR (EXACT COPY FROM HOME PAGE) -->
    <nav class="navbar navbar-expand-lg my-navbar fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="./images/website-favicon.png" alt="Logo">
                <span>Bring <span>Bright Smile</span></span>
            </a>
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="events.php">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="internship.php">Internship</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vol.php">Volunteer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="projectaahar.php">Project Aahar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ALL YOUR ORIGINAL CONTENT REMAINS EXACTLY THE SAME -->
    <?php
    include '_dbconnect.php';
    $sql = "SELECT * FROM featureevent";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $eid = $row['id'];
            $date = date("M d, Y", strtotime($row['date']));
    ?>
            <!-- Heading -->
            <section class="pt-5 pb-0">
                <div class="container">
                    <div class="about text-center">
                        <h2><?php echo $row['name']; ?>
                            <hr class="green-hr">
                        </h2>
                    </div>
                </div>
            </section>

            <!--DONATION content -->
            <section class="bg-light">
                <div class="container py-4">
                    <div class="row">
                        <div class="col-lg-6 text-center">
                            <img src="images/aahar.png" alt="Project AAHAR SEVA" class="img-fluid shadow" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-delay="100">
                        </div>
                        <div class="col-lg-6" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-delay="100">
                            <div class="p-4">
                                <p><?php echo $row['description']; ?></p>
                                <h4 class="pb-2 font-weight-bold" style="font-variant: small-caps; text-shadow: 1px 1px 1px #777777;">Click here to donate <i class="fa fa-arrow-down" aria-hidden="true"></i></h4>
                                <a href="donateform.php" target="_blank" class="btn donate-btn">DONATE NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Our project-->
            <section class="py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="section-title">OUR PROJECT</h2>
                        </div>
                    </div>
                    <div class="row portfolio-container px-2 py-2">
                        <div class="col-lg-4 col-md-6 portfolio-item" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-delay="100">
                            <div class="portfolio-wrap">
                                <img src="images/projectaahar_images/2.png" class="img-fluid shadow">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-delay="100">
                            <div class="portfolio-wrap">
                                <img src="images/projectaahar_images/4.png" class="img-fluid shadow">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-delay="100">
                            <div class="portfolio-wrap">
                                <img src="images/projectaahar_images/3.png" class="img-fluid shadow">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-light py-4">
                <div class="container-fluid">
                    <div class="row mx-md-5 px-md-5 m-2">
                        <div class="col-12 p-4 shadow">
                            <h5><?php echo $row['details']; ?></h5>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2 class="section-title" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-delay="100">CONTRIBUTION</h2>
                        </div>
                        <div class="col-lg-8" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-delay="100">
                            <div class="p-4">
                                <p>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    Together, we can alleviate the distress that hunger has caused in our society. We at Bring Bright Smile, ensure you 100% transparency with your contribution. We'll share with you the picture of the donated packets marked with your name on it for you deserve to know when, where and how your donations are bringing a change in who's life.
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <?php 
        }
    }
    ?>

    <!-------------------------------- FOOTER ------------------------------------------>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center text-md-left">
                    <img src="./images/website-favicon.png" class="img-fluid" style="max-height: 120px;">
                </div>
                <div class="col-lg-4 col-md-6 footer-contact">
                    <h3 style="color: var(--secondary)"><b>Bring Bright Smile</b></h3>
                    <p>
                        <a href="https://maps.app.goo.gl/fZkQtg7iQaFNppAcA" target="_blank" style="color: #aaa;">
                            Kankarbagh<br>
                            Patna, 800001
                        </a><br><br>
                        <strong>Phone:</strong> <a href="tel:+918969862809" style="color: #aaa;">+91 8969862809</a><br>
                        <strong>Email:</strong> <a href="mailto:info@bigsmile.in" style="color: #aaa;">info@bigsmile.in</a>
                    </p>
                </div>
                <div class="col-lg-4 text-center text-md-right">
                    <div class="social-links">
                        <a href="https://www.facebook.com/aryanschoolhjp/" class="facebook" target="_blank" style="color: #aaa;"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/bringbrightsmilefoundation/" class="instagram" target="_blank" style="color: #aaa;"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- BACK TO TOP BUTTON -->
    <button onclick="topFunction()" id="topbtn"><i class="fa fa-arrow-up"></i></button>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Navbar scroll effect
        $(window).scroll(function() {
            if ($(window).scrollTop() > 50) {
                $('.navbar').addClass('navbar-scroll');
            } else {
                $('.navbar').removeClass('navbar-scroll');
            }
        });

        // Back to top button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
                document.getElementById("topbtn").style.display = "block";
            } else {
                document.getElementById("topbtn").style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>
</html>