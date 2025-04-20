<!DOCTYPE html>
<html lang="en">

<head>
    <!--meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1, maximum-scale=1, user-scalable=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Font Awesome CDN (for version 5.x) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Boxicons CDN -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--page Title-->
    <title>WE FOR YOU - CONTACT US</title>
    <!-- Favicon-->
    <link rel="icon" type="image" href="./images/website-favicon.png" sizes="192x192" />

    <!--animation (AOS - Animation on scroll) link-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary-color: #fbfe65;
            --dark-color: #232323;
            --light-color: #ffffff;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--dark-color);
            background-color: var(--light-color);
        }
        
        /* Navigation */
        .menu {
            background-color: var(--dark-color);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .my-navbar {
            transition: all 0.3s ease;
        }
        
        .navbar-scroll {
            background-color: var(--dark-color) !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .nav-link {
            color: var(--light-color) !important;
            font-weight: 500;
            padding: 0.5rem 1rem;
            margin: 0 0.25rem;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover, .nav-link.active {
            color: var(--primary-color) !important;
            transform: translateY(-2px);
        }
        
        .custom-toggler .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(251,254,101, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }
        
        .custom-toggler.navbar-toggler {
            border-color: var(--primary-color);
        }
        
        /* Contact Section */
        .contact {
            padding: 40px;
        }
        
        .contact h2 {
            color: var(--dark-color);
            font-weight: 700;
            margin-bottom: 30px;
            position: relative;
        }
        
        .contact-green-hr {
            border: 0;
            height: 3px;
            width: 80px;
            background: var(--primary-color);
            margin: 10px 0 20px 0;
        }
        
        .contact-h4 {
            color: var(--dark-color);
            font-weight: 600;
        }
        
        .contact p, .contact a {
            color: #666;
            transition: all 0.3s ease;
        }
        
        .contact a:hover {
            color: var(--primary-color);
            text-decoration: none;
        }
        
        .line {
            border: 0;
            height: 1px;
            background: rgba(0,0,0,0.1);
            margin: 15px 0;
        }
        
        /* Form Styles */
        .form-group label {
            font-weight: 600;
            color: var(--dark-color);
        }
        
        .form-control {
            border-radius: 4px;
            border: 1px solid #ddd;
            padding: 12px 15px;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(251, 254, 101, 0.25);
        }
        
        textarea.form-control {
            min-height: 150px;
        }
        
        /* Button Styles */
        .btn-outline-success {
            color: var(--dark-color);
            border-color: var(--dark-color);
            font-weight: 600;
            padding: 10px 30px;
            border-radius: 50px;
            transition: all 0.3s ease;
        }
        
        .btn-outline-success:hover {
            background-color: var(--dark-color);
            border-color: var(--dark-color);
            color: var(--light-color);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        /* Map Styles */
        iframe {
            width: 100%;
            height: 300px;
            border: 0;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        /* Social Icons */
        .social-icon {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        
        .sm-bttn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background-color: var(--dark-color);
            color: var(--light-color) !important;
            border-radius: 50%;
            font-size: 20px;
            transition: all 0.3s ease;
        }
        
        .sm-bttn:hover {
            background-color: var(--primary-color);
            color: var(--dark-color) !important;
            transform: translateY(-5px);
        }
        
        /* Divider */
        hr.divider {
            border: 0;
            height: 2px;
            background: var(--primary-color);
            width: 70%;
            margin: 40px auto;
            opacity: 1;
        }
        
        /* Footer */
        #footer {
            background-color: var(--dark-color);
            color: var(--light-color);
            padding: 30px 0;
        }
        
        .footer-contact h3 {
            color: var(--primary-color) !important;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .footer-contact p a {
            color: #ccc;
            transition: all 0.3s ease;
        }
        
        .footer-contact p a:hover {
            color: var(--primary-color);
            text-decoration: none;
        }
        
        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: rgba(255,255,255,0.1);
            color: var(--light-color) !important;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            margin: 0 10px 10px 0;
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            background-color: var(--primary-color);
            color: var(--dark-color) !important;
            transform: translateY(-3px);
        }
        
        /* Back to top button */
        #topbtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 99;
            border: none;
            outline: none;
            background-color: var(--dark-color);
            color: var(--primary-color);
            cursor: pointer;
            padding: 15px;
            border-radius: 50%;
            font-size: 18px;
            width: 50px;
            height: 50px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
        }
        
        #topbtn:hover {
            background-color: var(--primary-color);
            color: var(--dark-color);
            transform: translateY(-3px);
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .border-right {
                border-right: none !important;
                border-bottom: 1px solid rgba(0,0,0,0.1);
                padding-bottom: 40px;
                margin-bottom: 40px;
            }
            
            .contact {
                padding: 20px;
            }
            
            iframe {
                height: 250px;
            }
        }
    </style>
</head>

<body>

    <!--navigation bar-->
    <div class="container-fluid menu">
        <nav class="navbar navbar-expand-lg my-navbar">
            <a class="navbar-brand " href="#"><img src="./images/website-favicon.png" height="150" width="150" alt="" loading="lazy"></a>
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./aboutus.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a href="./events.php" class="nav-link">Events</a>
                    </li>
                    <li class="nav-item">
                        <a href="./internship.php" class="nav-link">Internship</a>
                    </li>
                    <li class="nav-item">
                        <a href="./vol.php" class="nav-link ">Volunteer</a>
                    </li>
                    <li class="nav-item">
                        <a href="./projectaahar.php" class="nav-link">Project Aahar</a>
                    </li>
                    <li class="nav-item">
                        <a href="./contactus.php" class="nav-link active">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="./login.php" class="nav-link">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!--nav bar end-->

    <!--form and details section-->
    <section class="py-5">
        <div class="container py-4">
            <div class="row">
                <!--details section-->
                <div class="col-lg-6 col-md-6 contact border-right" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-delay="100">
                    <h2>Get in touch</h2>
                    <div class="col pt-4">
                        <h4 class="contact-h4">Address</h4>
                        <p><a href="https://maps.app.goo.gl/fZkQtg7iQaFNppAcA" target="_blank">Kankarbagh, Patna, 80000</a></p>
                        <hr class="line">
                    </div>
                    <div class="col pt-3">
                        <h4 class="contact-h4">Phone</h4>
                        <p><a href="tel:+918969862809">+91 8969862809</a></p>
                        <hr class="line">
                    </div>
                    <div class="col pt-3">
                        <h4 class="contact-h4">Email</h4>
                        <p><a href="mailto:info@bigsmile.in">info@bigsmile.in</a></p>
                        <hr class="line">
                    </div>
                </div>
                <!--form section-->
                <div class="col-lg-6 col-md-6 contact" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-delay="100">
                    <h2>Contact us</h2>
                    <form action="contactus.php" name='contactform' method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" type="text" name='name' pattern="[A-Za-z A-Za-z]+" title="Name should contain only letters." placeholder="Your Name..." required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" pattern="[A-Za-z0-9._+-]+@[A-Za-z0-9-]+\.[a-z]{2,3}" name="email" placeholder="Your Email..." required>
                        </div>
                        <div class="form-group">
                            <label for="Phone">Phone</label>
                            <input type="tel" id="phone" name="phone" maxlength="10" pattern="[0-9]{10}" title="Only 10 Numbers are allowed." name='phone' class="form-control" placeholder="Your Phone Number..." required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" rows="5" name='message' placeholder="Write your message here..." required></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-outline-success mt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--form and details section end-->

    <hr class="divider" data-aos="flip-left" data-aos-easing="ease-in-sine" data-aos-delay="100">

    <!--locate us and contact us section-->
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 contact border-right" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-delay="100">
                    <h2>Locate us</h2>
                    <div class="row px-0 pt-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3636851.0151935215!2d78.56659703967682!3d27.105517319112423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed5c17bd712825%3A0xd6a6e85f13f52c6b!2sBring%20Smile%20foundation!5e0!3m2!1sen!2sin!4v1744530391963!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 contact" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-delay="100">
                    <h2>Connect with us</h2>
                    <div class="row pt-4 px-4 social-icon">
                        <a class="sm-bttn" target='_blank' href="https://www.facebook.com/aryanschoolhjp/"><i class="fab fa-facebook-f"></i></a>
                        <a class="sm-bttn" target='_blank' href="https://www.instagram.com/bringbrightsmilefoundation/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--locate us and contact us section end-->

    <!-------------------------------- footer ------------------------------------------>
    <footer id="footer">
        <div class="footer-top pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-contact" style="height:200px">
                        <img src="./images/website-favicon.png" height="85%">
                    </div>
                    <div class="col-lg-4 col-md-6 footer-contact" style="height: 200px">
                        <h3 style="color: var(--primary-color)"><b>Bring Bright Smile</b></h3>
                        <p><a href="https://maps.app.goo.gl/fZkQtg7iQaFNppAcA" target="_blank" style="color: #ccc;">
                                Kankarbagh<br>
                                Patna, 800001</a><br><br>
                            <strong>Phone:</strong> <a href="tel:+918969862809" style="color: #ccc;">+918969862809</a><br>
                            <strong>Email:</strong> <a href="mailto:info@bigsmile.in" style="color: #ccc;">info@bigsmile.in</a><br>
                        </p>
                    </div>
                    <div class="col-lg-4 pt-4 mt-2">
                        <div class="social-links text-center text-md-right pt-3 pt-md-0">
                            <a href="https://www.facebook.com/aryanschoolhjp/" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/bringbrightsmilefoundation/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <button onclick="topFunction()" id="topbtn"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- navbar animation -->
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(window).scrollTop() > 60) {
                    $('.my-navbar').addClass('navbar-scroll');
                } else {
                    $('.my-navbar').removeClass('navbar-scroll');
                }
            });
        });
    </script>
    
    <!--back to top btn-->
    <script type="text/javascript">
        myButton = document.getElementById("topbtn");
        window.onscroll = function() {
            scrollfunction()
        };

        function scrollfunction() {
            if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
                myButton.style.display = "Block";
            } else {
                myButton.style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    <!--Animation on scroll (Aos) link and script-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'ngo';

    $conn = mysqli_connect($host, $user, $pass, $dbname);

    $sql = "INSERT INTO contact_form(name, email, phone, message) values ('$name', '$email', '$phone', '$message')";

    mysqli_query($conn, $sql);

    echo '<script>alert("Your Form has been Submitted..")</script>';
}
?>