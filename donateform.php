<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Project Aahar - Bring Bright Smile Foundation</title>
  
  <!-- Favicon-->
  <link rel="icon" type="image" href="images/website-favicon.png" sizes="192x192" />
  
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
      padding-top: 80px; /* Added for fixed navbar */
    }
    
    h1, h2, h3, h4 {
      font-family: 'Playfair Display', serif;
    }

    /* EXACT NAVBAR STYLING FROM FRONT PAGE */
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
    }
    
    .custom-toggler:focus {
      outline: none;
    }
    
    .custom-toggler .navbar-toggler-icon {
      background-image: none;
      color: var(--dark);
      font-size: 1.5rem;
    }

    /* DONATION FORM STYLING */
    .donation-form-container {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      padding: 2rem;
      margin-top: 2rem;
    }
    
    .donation-green-hr {
      border: 0;
      height: 2px;
      background: var(--secondary);
      width: 100px;
      margin: 1rem auto;
    }
    
    .form-control:focus {
      border-color: var(--secondary);
      box-shadow: 0 0 0 0.2rem rgba(251, 254, 101, 0.25);
    }
    
    .btn-donate {
      background-color: var(--secondary);
      color: var(--dark);
      font-weight: 600;
      padding: 0.5rem 2rem;
      border: none;
      transition: all 0.3s ease;
    }
    
    .btn-donate:hover {
      background-color: #e9ec5a;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    /* QR CODE SECTION */
    .qr-section {
      margin-top: 3rem;
      padding: 2rem 0;
    }
    
    .qr-card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      padding: 1.5rem;
      height: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    
    .qr-title {
      font-weight: 600;
      margin-bottom: 1rem;
      text-decoration: underline;
      color: var(--dark);
    }

    /* FOOTER STYLING */
    footer {
      background-color: var(--dark);
      color: white;
      padding: 3rem 0 1.5rem;
      margin-top: 3rem;
    }
    
    .footer-logo {
      height: 80px;
      margin-bottom: 1rem;
    }
    
    .footer-contact a {
      color: #aaa;
      transition: color 0.3s ease;
    }
    
    .footer-contact a:hover {
      color: var(--secondary);
      text-decoration: none;
    }
    
    .social-links a {
      display: inline-block;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: rgba(255,255,255,0.1);
      color: white;
      text-align: center;
      line-height: 40px;
      margin: 0 5px;
      transition: all 0.3s ease;
    }
    
    .social-links a:hover {
      background: var(--secondary);
      color: var(--dark);
      transform: translateY(-3px);
    }

    /* BACK TO TOP BUTTON */
    #topbtn {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 99;
      border: none;
      background-color: var(--secondary);
      color: var(--dark);
      cursor: pointer;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      font-size: 18px;
      display: none;
      transition: all 0.3s ease;
    }
    
    #topbtn:hover {
      background-color: #e9ec5a;
      transform: translateY(-3px);
    }
  </style>
</head>

<body>
  <!-- NAVIGATION BAR (EXACT COPY FROM FRONT PAGE) -->
  <nav class="navbar navbar-expand-lg my-navbar fixed-top">
    <div class="container">
      <a class="navbar-brand" href="./index.php">
        <img src="./images/website-favicon.png" alt="Logo">
        <span>Bring <span>Bright Smile</span></span>
      </a>
      <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <i class="fas fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./aboutus.php">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./events.php">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./internship.php">Internship</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./vol.php">Volunteer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="./projectaahar.php">Project Aahar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./contactus.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- DONATION FORM SECTION -->
  <div class="container">
    <div class="donation-form-container" data-aos="fade-up">
      <h2 class="text-center">PROJECT AAHAR - DONATION FORM</h2>
      <div class="donation-green-hr"></div>
      
      <div class="row justify-content-center">
        <div class="col-md-8">
          <form action="bill.php" name="donationform" method="post">
            <div class="form-group">
              <label for="name">Name</label>
              <input class="form-control" type="text" name="name" pattern="[A-Za-z A-Za-z]+" title="Name should contain only letters." placeholder="Your Name..." required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" pattern="[A-Za-z0-9._+-]+@[A-Za-z0-9-]+\.[a-z]{2,3}" name="email" placeholder="Your Email..." required>
            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="tel" id="phone" name="phone" maxlength="10" pattern="[0-9]{10}" title="Only 10 Numbers are allowed." class="form-control" placeholder="Your Phone Number..." required>
            </div>
            <div class="form-group">
              <label for="donation-option">No. of Packets want to pay for</label>
              <select class="form-control" name="packets" id="donation-option" onchange="setAmount()" required>
                <option value="">--Select Option--</option>
                <option value="1 Packet">1 Packet</option>
                <option value="2 Packets">2 Packets</option>
                <option value="3 Packets">3 Packets</option>
                <option value="4 Packets">4 Packets</option>
                <option value="5 Packets">5 Packets</option>
                <option value="More than 5 Packets">More than 5 Packets</option>
              </select>
            </div>
            <div class="form-group">
              <label for="amount">Amount (₹)</label>
              <input class="form-control" type="text" name="amount" id="amount" pattern="[0-9]+" title="Amount should be in numbers" required>
            </div>
            <div class="text-center mt-4">
              <button type="submit" name="submit" class="btn btn-donate">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="qr-section">
      <h3 class="text-center mb-4">Our each Packet costs ₹50, so pay in multiples of ₹50</h3>
      <div class="row">
        <div class="col-md-6 mb-4" data-aos="fade-right">
          <div class="qr-card">
            <h4 class="qr-title">Pay via Paytm</h4>
            <img src="./images/donation_images/paytm-payment-gateway.jpg" alt="Paytm QR code" class="img-fluid" style="max-height: 300px;">
          </div>
        </div>
        <div class="col-md-6 mb-4" data-aos="fade-left">
          <div class="qr-card">
            <h4 class="qr-title">Pay via Google Pay</h4>
            <img src="./images/donation_images/google-pay-payment-gateway1.jpg" alt="Google Pay QR code" class="img-fluid" style="max-height: 300px;">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-------------------------------- FOOTER ------------------------------------------>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 text-center text-md-left">
          <img src="./images/website-favicon.png" class="footer-logo">
        </div>
        <div class="col-lg-4 col-md-6">
          <h5>Contact Us</h5>
          <p class="footer-contact">
            <a href="https://maps.app.goo.gl/fZkQtg7iQaFNppAcA" target="_blank">
              Kankarbagh, Patna, 800001
            </a><br>
            <strong>Phone:</strong> <a href="tel:+918969862809">+91 8969862809</a><br>
            <strong>Email:</strong> <a href="mailto:info@bigsmile.in">info@bigsmile.in</a>
          </p>
        </div>
        <div class="col-lg-4 text-center text-md-right">
          <h5>Follow Us</h5>
          <div class="social-links">
            <a href="https://www.facebook.com/aryanschoolhjp/" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/bringbrightsmilefoundation/" target="_blank"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
      <hr style="background-color: rgba(255,255,255,0.1);">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-0">&copy; 2023 Bring Bright Smile Foundation. All Rights Reserved.</p>
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

    // Set amount based on packet selection
    function setAmount() {
      var select = document.getElementById("donation-option");
      var amountInput = document.getElementById("amount");

      if (select.value == "More than 5 Packets") {
        amountInput.value = amountInput.value.trim();
        if (amountInput.value == "00" | "50" | "100" | "150" | "200" | "250") {
          amountInput.value = "1000";
        }
      } else {
        if (select.value == "1 Packet") {
          amountInput.value = "50";
        } else if (select.value == "2 Packets") {
          amountInput.value = "100";
        } else if (select.value == "3 Packets") {
          amountInput.value = "150";
        } else if (select.value == "4 Packets") {
          amountInput.value = "200";
        } else if (select.value == "5 Packets") {
          amountInput.value = "250";
        } else if (select.value == "") {
          amountInput.value = "00";
        }
      }
    }
  </script>
</body>
</html>