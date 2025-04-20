<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bring Bright Smile - Events</title>
  
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
  
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  
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
    }
    
    h1, h2, h3, h4 {
      font-family: 'Playfair Display', serif;
    }
    
    /* Custom animations */
    @keyframes float {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-15px); }
      100% { transform: translateY(0px); }
    }
    
    .floating {
      animation: float 3s ease-in-out infinite;
    }
    
    .gradient-text {
      background: linear-gradient(90deg, var(--primary), var(--secondary));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    
    /* Custom button styles */
    .btn-primary {
      background-color: var(--secondary);
      color: var(--dark);
      transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
      background-color: #e9ec5a;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    
    .btn-outline {
      border: 2px solid var(--secondary);
      color: var(--secondary);
      transition: all 0.3s ease;
    }
    
    .btn-outline:hover {
      background-color: var(--secondary);
      color: var(--dark);
    }
    
    /* Custom background colors */
    .bg-primary {
      background-color: var(--primary);
    }
    
    .bg-secondary {
      background-color: var(--secondary);
    }
    
    .bg-light {
      background-color: var(--light);
    }
    
    /* Text colors */
    .text-primary {
      color: var(--primary);
    }
    
    .text-secondary {
      color: var(--secondary);
    }
    
    /* Event card styles */
    .event-card {
      transition: all 0.3s ease;
      border-bottom: 4px solid transparent;
    }
    
    .event-card:hover {
      transform: translateY(-5px);
      border-bottom: 4px solid var(--secondary);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    /* Custom hr styles */
    .divider {
      height: 3px;
      width: 80px;
      background: var(--secondary);
      margin: 15px auto;
    }
    
    /* Hero overlay */
    .hero-overlay {
      background: linear-gradient(to right, rgba(35,35,35,0.9), rgba(35,35,35,0.7));
    }
    
    /* Date badge */
    .date-badge {
      position: absolute;
      top: 15px;
      left: 15px;
      background-color: var(--secondary);
      color: var(--dark);
      padding: 8px 12px;
      border-radius: 4px;
      font-weight: bold;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }
  </style>
</head>

<body class="bg-white">
  <!------ Navigation ------>
  <header class="fixed w-full z-50 transition-all duration-300" id="navbar">
    <nav class="bg-white shadow-lg">
      <div class="container mx-auto px-6 py-3">
        <div class="flex items-center justify-between">
          <!-- Logo -->
          <div class="flex items-center">
            <a class="navbar-brand" href="./index.php">
              <img src="./images/website-favicon.png" class="h-16 w-16 rounded-full border-2 border-secondary" alt="Logo">
            </a>
            <span class="ml-3 text-xl font-bold text-dark">Bring <span class="text-secondary">Bright Smile</span></span>
          </div>

          <!-- Mobile menu button -->
          <div class="flex md:hidden">
            <button type="button" class="text-dark hover:text-secondary focus:outline-none" id="menu-toggle">
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
            </button>
          </div>

          <!-- Desktop Menu -->
          <div class="hidden md:flex items-center space-x-8">
            <a href="./index.php" class="text-gray-600 hover:text-secondary transition">Home</a>
            <a href="./aboutus.php" class="text-gray-600 hover:text-secondary transition">About us</a>
            <a href="./events.php" class="text-secondary font-medium">Events</a>
            <a href="./internship.php" class="text-gray-600 hover:text-secondary transition">Internship</a>
            <a href="./vol.php" class="text-gray-600 hover:text-secondary transition">Volunteer</a>
            <a href="./projectaahar.php" class="text-gray-600 hover:text-secondary transition">Project Aahar</a>
            <a href="./contactus.php" class="text-gray-600 hover:text-secondary transition">Contact Us</a>
            <a href="./login.php" class="btn-primary px-4 py-2 rounded-lg font-medium">Login</a>
          </div>
        </div>

        <!-- Mobile Menu -->
        <div class="md:hidden hidden mt-4 pb-3" id="mobile-menu">
          <a href="./index.php" class="block py-2 text-gray-600 hover:text-secondary">Home</a>
          <a href="./aboutus.php" class="block py-2 text-gray-600 hover:text-secondary">About us</a>
          <a href="./events.php" class="block py-2 text-secondary font-medium">Events</a>
          <a href="./internship.php" class="block py-2 text-gray-600 hover:text-secondary">Internship</a>
          <a href="./vol.php" class="block py-2 text-gray-600 hover:text-secondary">Volunteer</a>
          <a href="./projectaahar.php" class="block py-2 text-gray-600 hover:text-secondary">Project Aahar</a>
          <a href="./contactus.php" class="block py-2 text-gray-600 hover:text-secondary">Contact Us</a>
          <a href="./login.php" class="block py-2 text-secondary font-medium">Login</a>
        </div>
      </div>
    </nav>
  </header>

  <!-------------------------------- Hero Banner --------------------------------------->
  <section class="relative pt-32 pb-20 md:pt-40 md:pb-28">
    <div class="absolute inset-0 hero-overlay"></div>
    <div class="container mx-auto px-6 relative z-10">
      <div class="flex flex-col items-center text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4" data-aos="fade-up">Our Events</h1>
        <div class="divider" data-aos="fade-up" data-aos-delay="100"></div>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
          Discover our upcoming and past events that bring smiles to underprivileged children
        </p>
      </div>
    </div>
  </section>

  <!-------------------------------- Events Section ---------------------------------------->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16" data-aos="zoom-in">
        <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">Featured Events</h2>
        <div class="w-24 h-1 bg-secondary mx-auto mb-6"></div>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">
          Highlighting our most impactful initiatives and programs
        </p>
      </div>
      
      <!-- Featured Events from PHP -->
      <?php
      $conn = mysqli_connect("localhost", "root", "", "ngo");
      $sql = "SELECT * FROM featureevent";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        while ($row1 = mysqli_fetch_assoc($result)) {
          $feid = $row1['id'];
          $date = date("d F, Y", strtotime($row1['date']));
          $maxCharacters = 300;
          $shortenedValue = (strlen($row1['description']) > $maxCharacters) ? 
                           substr($row1['description'], 0, $maxCharacters) . '...' : 
                           $row1['description'];
      ?>
      <div class="bg-gray-50 rounded-xl p-6 mb-12 event-card" data-aos="fade-up">
        <div class="flex flex-col md:flex-row">
          <div class="md:w-5/12 mb-6 md:mb-0 relative">
            <?php echo "<img src='" . $row1['image'] . "' class='w-full h-64 object-cover rounded-lg shadow-md'>"; ?>
            <div class="date-badge"><?php echo $date; ?></div>
          </div>
          <div class="md:w-7/12 md:pl-8">
            <h2 class="text-2xl font-bold text-dark mb-2"><?php echo $row1['name']; ?></h2>
            <div class="flex items-center text-gray-500 mb-4">
              <span class="mr-4"><i class="fas fa-tag mr-1"></i> Uncategorized</span>
              <span><i class="fas fa-user mr-1"></i> By Bring Bright Smile</span>
            </div>
            <p class="text-gray-600 mb-6"><?php echo $shortenedValue; ?></p>
            <div class="flex justify-between items-center">
              <a href="<?php echo 'myfeatureevent.php?id='.$feid; ?>" class="btn-primary px-6 py-2 rounded-lg font-medium">Read More</a>
              <div class="flex space-x-2">
                <span class="bg-gray-200 px-3 py-1 rounded-full text-sm">Education</span>
                <span class="bg-gray-200 px-3 py-1 rounded-full text-sm">Children</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php 
        }
        mysqli_close($conn);
      } 
      ?>

      <div class="text-center mb-16 mt-20" data-aos="zoom-in">
        <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">All Events</h2>
        <div class="w-24 h-1 bg-secondary mx-auto mb-6"></div>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">
          Our ongoing efforts to make a difference in children's lives
        </p>
      </div>
      
      <!-- Regular Events from PHP -->
      <?php
      include '_dbconnect.php';
      $sql1 = "SELECT * FROM event order by date";
      $result1 = mysqli_query($conn, $sql1);

      if (mysqli_num_rows($result1) > 0) {
        while ($row = mysqli_fetch_assoc($result1)) {
          $eid = $row['id'];
          $date = date("d F, Y", strtotime($row['date']));
          $maxCharacters1 = 300;
          $shortenedValue1 = (strlen($row['description']) > $maxCharacters1) ? 
                            substr($row['description'], 0, $maxCharacters1) . '...' : 
                            $row['description'];
      ?>
      <div class="bg-gray-50 rounded-xl p-6 mb-12 event-card" data-aos="fade-up">
        <div class="flex flex-col md:flex-row">
          <div class="md:w-5/12 mb-6 md:mb-0 relative">
            <?php echo "<img src='" . $row['image'] . "' class='w-full h-64 object-cover rounded-lg shadow-md'>"; ?>
            <div class="date-badge"><?php echo $date; ?></div>
          </div>
          <div class="md:w-7/12 md:pl-8">
            <h2 class="text-2xl font-bold text-dark mb-2"><?php echo $row['name']; ?></h2>
            <div class="flex items-center text-gray-500 mb-4">
              <span class="mr-4"><i class="fas fa-tag mr-1"></i> Uncategorized</span>
              <span><i class="fas fa-user mr-1"></i> By Bring Bright Smile</span>
            </div>
            <p class="text-gray-600 mb-6"><?php echo $shortenedValue1; ?></p>
            <div class="flex justify-between items-center">
              <a href="<?php echo 'myevent.php?id='.$eid; ?>" class="btn-primary px-6 py-2 rounded-lg font-medium">Read More</a>
              <div class="flex space-x-2">
                <span class="bg-gray-200 px-3 py-1 rounded-full text-sm">Community</span>
                <span class="bg-gray-200 px-3 py-1 rounded-full text-sm">Support</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php 
        }
      } 
      ?>
    </div>
  </section>

  <!-------------------------------- CTA Section ---------------------------------------->
  <section class="py-16 bg-primary text-white">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6" data-aos="fade-up">Want to Participate?</h2>
      <p class="text-xl mb-8 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
        Join our upcoming events as a volunteer or sponsor to help bring more bright smiles
      </p>
      <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4" data-aos="fade-up" data-aos-delay="200">
        <a href="./vol.php" class="bg-secondary text-dark px-8 py-3 rounded-lg font-medium hover:bg-yellow-400 transition shadow-lg">Become a Volunteer</a>
        <a href="./contactus.php" class="btn-outline px-8 py-3 rounded-lg font-medium shadow-lg">Contact Us</a>
      </div>
    </div>
  </section>

  <!-------------------------------- Footer ------------------------------------------>
  <footer class="bg-dark text-white pt-16 pb-8">
    <div class="container mx-auto px-6">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Logo and About -->
        <div class="flex flex-col items-center md:items-start" data-aos="fade-up">
          <div class="flex items-center mb-6">
            <img src="./images/website-favicon.png" class="h-16 w-16 rounded-full border-2 border-secondary" alt="Logo">
            <span class="ml-3 text-xl font-bold">Bring <span class="text-secondary">Bright Smile</span></span>
          </div>
          <p class="text-gray-400 text-center md:text-left mb-6">
            Empowering underprivileged children through education, nutrition, and care to build a brighter future for our community.
          </p>
          <div class="flex space-x-4">
            <a href="https://www.facebook.com/aryanschoolhjp/" class="text-gray-400 hover:text-white text-xl" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/bringbrightsmilefoundation/" class="text-gray-400 hover:text-white text-xl" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white text-xl">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white text-xl">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div>
        
        <!-- Contact Info -->
        <div class="text-center md:text-left" data-aos="fade-up" data-aos-delay="100">
          <h3 class="text-xl font-bold mb-6 text-secondary">Contact Us</h3>
          <div class="space-y-4">
            <div class="flex items-start justify-center md:justify-start">
              <i class="fas fa-map-marker-alt mt-1 mr-3 text-secondary"></i>
              <a href="https://maps.app.goo.gl/fZkQtg7iQaFNppAcA" target="_blank" class="text-gray-400 hover:text-white">
                Kankarbagh, Patna, 800001
              </a>
            </div>
            <div class="flex items-center justify-center md:justify-start">
              <i class="fas fa-phone-alt mr-3 text-secondary"></i>
              <a href="tel:+918969862809" class="text-gray-400 hover:text-white">+91 8969862809</a>
            </div>
            <div class="flex items-center justify-center md:justify-start">
              <i class="fas fa-envelope mr-3 text-secondary"></i>
              <a href="mailto:info@bigsmile.in" class="text-gray-400 hover:text-white">info@bigsmile.in</a>
            </div>
          </div>
        </div>
        
        <!-- Quick Links -->
        <div class="text-center md:text-left" data-aos="fade-up" data-aos-delay="200">
          <h3 class="text-xl font-bold mb-6 text-secondary">Quick Links</h3>
          <ul class="space-y-3">
            <li><a href="./index.php" class="text-gray-400 hover:text-white transition">Home</a></li>
            <li><a href="./aboutus.php" class="text-gray-400 hover:text-white transition">About Us</a></li>
            <li><a href="./events.php" class="text-gray-400 hover:text-white transition">Events</a></li>
            <li><a href="./internship.php" class="text-gray-400 hover:text-white transition">Internship</a></li>
            <li><a href="./vol.php" class="text-gray-400 hover:text-white transition">Volunteer</a></li>
            <li><a href="./projectaahar.php" class="text-gray-400 hover:text-white transition">Project Aahar</a></li>
          </ul>
        </div>
      </div>
      
      <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400" data-aos="fade-up">
        <p>&copy; 2023 Bring Bright Smile Foundation. All Rights Reserved.</p>
        <div class="mt-2">
          <a href="#" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a> | 
          <a href="#" class="text-gray-400 hover:text-white text-sm">Terms of Service</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Back to Top Button -->
  <button id="topbtn" class="fixed bottom-8 right-8 bg-secondary text-dark w-12 h-12 rounded-full flex items-center justify-center shadow-lg hover:bg-yellow-400 transition opacity-0 invisible">
    <i class="fas fa-arrow-up"></i>
  </button>

  <!-- AOS Animation -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  
  <!-- Custom Scripts -->
  <script>
    // Initialize AOS
    AOS.init({
      duration: 800,
      easing: 'ease-in-out',
      once: true
    });
    
    // Mobile menu toggle
    document.getElementById('menu-toggle').addEventListener('click', function() {
      const mobileMenu = document.getElementById('mobile-menu');
      mobileMenu.classList.toggle('hidden');
    });
    
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
      const navbar = document.getElementById('navbar');
      if (window.scrollY > 100) {
        navbar.classList.add('shadow-md', 'bg-opacity-90');
      } else {
        navbar.classList.remove('shadow-md', 'bg-opacity-90');
      }
    });
    
    // Back to top button
    const topButton = document.getElementById('topbtn');
    window.addEventListener('scroll', function() {
      if (window.pageYOffset > 300) {
        topButton.classList.remove('opacity-0', 'invisible');
        topButton.classList.add('opacity-100', 'visible');
      } else {
        topButton.classList.add('opacity-0', 'invisible');
        topButton.classList.remove('opacity-100', 'visible');
      }
    });
    
    topButton.addEventListener('click', function() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  </script>
</body>
</html>