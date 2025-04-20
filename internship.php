<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bring Bright Smile - Internship</title>
  
  <!-- Favicon-->
  <link rel="icon" type="image" href="./images/website-favicon.png" sizes="192x192" />
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- AOS Animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
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
      color: #333;
    }
    
    h1, h2, h3, h4 {
      font-family: 'Playfair Display', serif;
    }
    
    /* Logo sizing */
    .navbar-brand img {
      height: 50px;
      width: 50px;
    }
    
    /* Navigation */
    .navbar {
      padding: 10px 0;
    }
    
    .nav-link {
      font-size: 1rem;
      padding: 8px 15px !important;
    }
    
    /* Hero section */
    .hero-section {
      padding: 100px 0;
      background-color: var(--primary);
      color: white;
      text-align: center;
    }
    
    .hero-title {
      font-size: 2.5rem;
      margin-bottom: 15px;
    }
    
    .divider {
      height: 3px;
      width: 80px;
      background: var(--secondary);
      margin: 0 auto 20px;
    }
    
    /* Form container */
    .form-container {
      max-width: 700px;
      margin: 50px auto;
      padding: 30px;
      background: white;
      border-radius: 8px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    /* Form elements */
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-control {
      height: 45px;
      border-radius: 4px;
      border: 1px solid #ddd;
    }
    
    textarea.form-control {
      height: auto;
    }
    
    /* Footer */
    footer {
      background-color: var(--primary);
      color: white;
      padding: 40px 0 20px;
    }
    
    .footer-logo img {
      width: 60px;
      height: 60px;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
      .hero-title {
        font-size: 2rem;
      }
      
      .form-container {
        padding: 20px;
        margin: 30px 15px;
      }
    }
  </style>
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="./index.php">
        <img src="./images/website-favicon.png" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNav">
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
            <a class="nav-link active" href="./internship.php">Internship</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./vol.php">Volunteer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./projectaahar.php">Project Aahar</a>
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

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <h1 class="hero-title" data-aos="fade-up">Internship Program</h1>
      <div class="divider" data-aos="fade-up" data-aos-delay="100"></div>
      <p class="lead" data-aos="fade-up" data-aos-delay="200">
        Gain valuable experience while making a difference in children's lives
      </p>
    </div>
  </section>

  <!-- Internship Form -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="form-container" data-aos="fade-up">
        <h2 class="text-center mb-4">Apply for Internship</h2>
        
        <form action="#" name="internshipform" id="internshipform" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required 
                   pattern="[A-Za-z A-Za-z]+" title="Name should contain only letters.">
          </div>
          
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required
                   pattern="[A-Za-z0-9._+-]+@[A-Za-z0-9-]+\.[a-z]{2,3}">
          </div>
          
          <div class="form-group">
            <label>Phone</label>
            <input type="tel" name="phone" class="form-control" required
                   maxlength="10" pattern="[0-9]{10}" title="Only 10 numbers allowed">
          </div>
          
          <div class="form-group">
            <label>Internship Field</label>
            <select name="post" class="form-control" required>
              <option value="">-- Select Option --</option>
              <option value="Teaching">Teaching</option>
              <option value="Doctor">Doctor</option>
              <option value="Counsellor">Counsellor</option>
              <option value="Photography">Photography</option>
              <option value="Public Relation">Public Relation</option>
              <option value="Creative Department">Creative Department</option>
            </select>
          </div>
          
          <div class="form-group">
            <label>Upload Resume (PDF)</label>
            <div class="custom-file">
              <input type="file" name="resume" class="custom-file-input" id="resume" required>
              <label class="custom-file-label" for="resume">Choose file</label>
            </div>
          </div>
          
          <div class="form-group">
            <label>Message</label>
            <textarea name="message" class="form-control" rows="4" required></textarea>
          </div>
          
          <button type="submit" name="submit" class="btn btn-block btn-warning font-weight-bold py-2">
            Submit Application
          </button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="footer-logo d-flex align-items-center mb-3">
            <img src="./images/website-favicon.png" class="mr-3">
            <h4 class="m-0">Bring Bright Smile</h4>
          </div>
          <p class="text-muted">
            Empowering underprivileged children through education, nutrition, and care.
          </p>
        </div>
        
        <div class="col-md-4 mb-4">
          <h5>Contact Us</h5>
          <ul class="list-unstyled">
            <li class="mb-2">
              <i class="fas fa-map-marker-alt mr-2"></i> Kankarbagh, Patna
            </li>
            <li class="mb-2">
              <i class="fas fa-phone mr-2"></i> +91 8969862809
            </li>
            <li>
              <i class="fas fa-envelope mr-2"></i> info@bigsmile.in
            </li>
          </ul>
        </div>
        
        <div class="col-md-4 mb-4">
          <h5>Quick Links</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="./index.php">Home</a></li>
            <li class="mb-2"><a href="./aboutus.php">About Us</a></li>
            <li class="mb-2"><a href="./events.php">Events</a></li>
            <li class="mb-2"><a href="./internship.php">Internship</a></li>
            <li><a href="./vol.php">Volunteer</a></li>
          </ul>
        </div>
      </div>
      
      <div class="text-center pt-3 border-top">
        <p class="small text-muted mb-0">
          &copy; 2023 Bring Bright Smile Foundation. All rights reserved.
        </p>
      </div>
    </div>
  </footer>

  <!-- Back to Top Button -->
  <a href="#" class="back-to-top" id="backToTop">
    <i class="fas fa-arrow-up"></i>
  </a>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  
  <script>
    // Initialize AOS
    AOS.init({
      duration: 800,
      easing: 'ease-in-out',
      once: true
    });
    
    // Back to top button
    window.addEventListener('scroll', function() {
      var backToTop = document.getElementById('backToTop');
      if (window.pageYOffset > 300) {
        backToTop.style.display = 'block';
      } else {
        backToTop.style.display = 'none';
      }
    });
    
    // File input label
    $('.custom-file-input').on('change', function() {
      let fileName = $(this).val().split('\\').pop();
      $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
  </script>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
  $filename = $_FILES["resume"]["name"];
  $tempname = $_FILES["resume"]["tmp_name"];
  $folder = "resume/" . $filename;
  move_uploaded_file($tempname, $folder);

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $post = $_POST['post'];
  $message = $_POST['message'];

  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $dbname = 'ngo';

  $conn = mysqli_connect($host, $user, $pass, $dbname);

  $sql = "INSERT INTO internship_form(name, email, phone, post, resume, message) 
          VALUES ('$name', '$email', '$phone', '$post', '$folder', '$message')";

  mysqli_query($conn, $sql);

  echo '<script>alert("Your application has been submitted successfully!")</script>';
}
?>