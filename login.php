<?php
session_start();
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';
    // session_start();
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "Select * from users where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $login = true;
        // session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: donorpage.php");
        exit();
    } else {
        $showError = "Invalid Username and Password";
    }
}

if ($login) {
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Welcome</strong> Admin
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div> ';
}
if ($showError) {
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> ' . $showError . '
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div> ';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1, maximum-scale=1, user-scalable=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!--page Title-->
    <title>WE FOR YOU - LOGIN</title>
    <!-- Favicon-->
    <link rel="icon" type="image" href="./images/website-favicon.png" sizes="192x192" />

    <!-- Font Awesome CDN (for version 5.x) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Boxicons CDN -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
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
        
        /* Login Container */
        .login-container {
            background: linear-gradient(135deg, rgba(251, 254, 101, 0.1) 0%, rgba(255,255,255,1) 100%);
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            overflow: hidden;
            border: none;
            transition: all 0.3s ease;
        }
        
        .login-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        .login-header {
            background-color: var(--dark-color);
            color: var(--primary-color);
            padding: 20px;
            text-align: center;
        }
        
        .login-header h2 {
            font-weight: 700;
            margin: 0;
            position: relative;
        }
        
        .login-header h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: var(--primary-color);
        }
        
        .login-body {
            padding: 30px;
        }
        
        /* Form Styles */
        .form-group {
            margin-bottom: 25px;
            position: relative;
        }
        
        .form-group label {
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 8px;
            display: block;
        }
        
        .form-control {
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 12px 15px;
            transition: all 0.3s ease;
            height: 45px;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(251, 254, 101, 0.25);
        }
        
        /* Password Toggle */
        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #7a797e;
            transition: all 0.3s ease;
        }
        
        .password-toggle:hover {
            color: var(--primary-color);
        }
        
        /* Button Styles */
        .btn-login {
            background-color: var(--dark-color);
            border-color: var(--dark-color);
            color: var(--light-color);
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 50px;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 10px;
        }
        
        .btn-login:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: var(--dark-color);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        /* Links */
        .login-links {
            margin-top: 20px;
            text-align: center;
        }
        
        .login-links a {
            color: var(--dark-color);
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .login-links a:hover {
            color: var(--primary-color);
            text-decoration: underline;
        }
        
        /* Divider */
        .divider {
            border: 0;
            height: 1px;
            background: linear-gradient(to right, transparent, rgba(0,0,0,0.1), transparent);
            margin: 25px 0;
        }
        
        /* Alert Messages */
        .alert {
            border-radius: 8px;
            border: none;
        }
        
        .alert-success {
            background-color: rgba(40, 167, 69, 0.2);
            color: #28a745;
        }
        
        .alert-danger {
            background-color: rgba(220, 53, 69, 0.2);
            color: #dc3545;
        }
        
        /* Footer */
        #footer {
            background-color: var(--dark-color);
            color: var(--light-color);
            padding: 30px 0;
            margin-top: 50px;
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
            .login-container {
                margin: 0 15px;
            }
            
            .login-body {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    <!--navigation bar-->
    <div class="container-fluid menu">
        <nav class="navbar navbar-expand-lg my-navbar">
            <a class="navbar-brand " href="./index.php"><img src="./images/website-favicon.png" height="150" width='150' alt="" loading="lazy"></a>
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link " href="./index.php">Home</a>
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
                        <a href="./contactus.php" class="nav-link">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="./login.php" class="nav-link active">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!--nav bar end-->



    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="login-container" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-delay="200">
                    <div class="login-header">
                        <h2>Login</h2>
                    </div>
                    <div class="login-body">
                        <form action="login.php" method="post" id="loginform" name="loginform">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required>
                                <span class="password-toggle" onclick="toggle()">
                                    <i class="fa fa-eye" aria-hidden="true" id="eye"></i>
                                </span>
                            </div>
                            <button type="submit" class="btn btn-login" name="submit">Login</button>
                            <div class="divider"></div>
                            <div class="login-links">
                                <a href="forgot_password.php">Forgot Password?</a>
                                <p class="mt-3">New User? <a href="signup.php">Create an account</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <!-- Password Toggle Script -->
    <script>
        var state = false;

        function toggle() {
            if (state) {
                document.getElementById("password").setAttribute("type", "password");
                document.getElementById("eye").style.color = '#7a797e';
                state = false;
            } else {
                document.getElementById("password").setAttribute("type", "text");
                document.getElementById("eye").style.color = '#fbfe65';
                state = true;
            }
        }
    </script>

</body>

</html>