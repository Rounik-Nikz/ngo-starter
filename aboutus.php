<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bring Bright Smile - About Us</title>
  
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
    
    /* Custom card hover effect */
    .impact-card {
      transition: all 0.3s ease;
      border-bottom: 4px solid transparent;
    }
    
    .impact-card:hover {
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
            <a href="./aboutus.php" class="text-secondary font-medium">About us</a>
            <a href="./events.php" class="text-gray-600 hover:text-secondary transition">Events</a>
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
          <a href="./aboutus.php" class="block py-2 text-secondary font-medium">About us</a>
          <a href="./events.php" class="block py-2 text-gray-600 hover:text-secondary">Events</a>
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
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4" data-aos="fade-up">Our Story & Values</h1>
        <div class="divider" data-aos="fade-up" data-aos-delay="100"></div>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
          Learn about our journey, mission, and the principles that guide us in bringing bright smiles to underprivileged children.
        </p>
      </div>
    </div>
  </section>

  <!-------------------------------- Mission Cards ---------------------------------------->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-6">
      <div class="grid md:grid-cols-3 gap-8 -mt-16">
        <!-- Mission Card -->
        <div class="bg-white p-8 rounded-xl shadow-lg impact-card" data-aos="fade-up" data-aos-delay="100">
          <div class="text-secondary text-4xl mb-4">
            <i class="fas fa-bullseye"></i>
          </div>
          <h3 class="text-xl font-bold text-dark mb-3">Our Mission</h3>
          <div class="divider" style="margin: 10px 0 15px 0; width: 50px;"></div>
          <p class="text-gray-600">
            To reach out as many people as possible and make a difference in their life. Our mission is to make their inner self happy. We want to bring a change in society by trying to eliminate discrimination based on privilege by birth.
          </p>
        </div>
        
        <!-- Values Card -->
        <div class="bg-white p-8 rounded-xl shadow-lg impact-card" data-aos="fade-up" data-aos-delay="200">
          <div class="text-secondary text-4xl mb-4">
            <i class="fas fa-heart"></i>
          </div>
          <h3 class="text-xl font-bold text-dark mb-3">Our Values</h3>
          <div class="divider" style="margin: 10px 0 15px 0; width: 50px;"></div>
          <ul class="text-gray-600 space-y-2">
            <li class="flex items-start">
              <i class="fas fa-check text-secondary mr-2 mt-1"></i>
              <span>Transparency & Integrity</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check text-secondary mr-2 mt-1"></i>
              <span>Respect for human rights</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check text-secondary mr-2 mt-1"></i>
              <span>No Discrimination</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check text-secondary mr-2 mt-1"></i>
              <span>See potential in every child</span>
            </li>
          </ul>
        </div>
        
        <!-- Vision Card -->
        <div class="bg-white p-8 rounded-xl shadow-lg impact-card" data-aos="fade-up" data-aos-delay="300">
          <div class="text-secondary text-4xl mb-4">
            <i class="fas fa-eye"></i>
          </div>
          <h3 class="text-xl font-bold text-dark mb-3">Our Vision</h3>
          <div class="divider" style="margin: 10px 0 15px 0; width: 50px;"></div>
          <p class="text-gray-600">
            To make this world a better place for unprivileged people by providing them whatever required to our full potential. We believe that talent and skills are god's gift and are product of hard work and not birth.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-------------------------------- Our Approach ---------------------------------------->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
      <div class="flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 mb-10 md:mb-0" data-aos="fade-right">
          <div class="bg-secondary p-1 inline-block rounded-lg mb-6">
            <h2 class="text-3xl md:text-4xl font-bold text-dark px-4 py-2">Our Approach</h2>
          </div>
          <h3 class="text-2xl font-semibold text-dark mb-4">How We Make a Difference</h3>
          <p class="text-gray-600 mb-6">
            We reach out to children and make them interact with young people from universities and teach them in a friendly way so as to provide them with a family environment for learning, make them understand our culture and hardships they need to overcome in the journey of their life.
          </p>
          <p class="text-gray-600">
            Our main motives are making children aware of the current scenario in which the world exists and train them to overcome the taboos of society. We also make them aware of the social issues they are in and how to make it a better place for them to survive and grow.
          </p>
        </div>
        <div class="md:w-1/2 md:pl-10" data-aos="fade-left">
          <div class="relative rounded-xl overflow-hidden shadow-2xl">
            <img src="img1.png" 
                 alt="Our Approach" 
                 class="w-full h-auto">
            <div class="absolute inset-0 bg-gradient-to-t from-dark to-transparent flex items-end p-6">
              <h3 class="text-white text-xl font-bold">A well defined smile is what we care for</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-------------------------------- Impact Timeline ---------------------------------------->
  <section class="py-16 bg-primary text-white">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16" data-aos="zoom-in">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Journey</h2>
        <div class="w-24 h-1 bg-secondary mx-auto mb-6"></div>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
          Milestones in our mission to bring bright smiles to underprivileged children
        </p>
      </div>
      
      <div class="relative">
        <!-- Timeline line -->
        <div class="hidden md:block absolute left-1/2 h-full w-1 bg-secondary" style="transform: translateX(-50%);"></div>
        
        <!-- Timeline items -->
        <div class="space-y-8 md:space-y-16">
          <!-- Item 1 -->
          <div class="flex flex-col md:flex-row items-center" data-aos="fade-up">
            <div class="md:w-1/2 md:pr-10 md:text-right mb-4 md:mb-0">
              <h3 class="text-2xl font-bold text-secondary">2018</h3>
              <h4 class="text-xl font-semibold mb-2">Foundation Established</h4>
              <p class="text-gray-300">Bring Bright Smile was founded with a vision to support underprivileged children in Patna.</p>
            </div>
            <div class="hidden md:flex w-16 h-16 rounded-full bg-secondary items-center justify-center mx-4 flex-shrink-0">
              <i class="fas fa-star text-dark text-xl"></i>
            </div>
            <div class="md:w-1/2 md:pl-10">
              <div class="bg-dark p-6 rounded-lg shadow-lg">
                <img src="https://images.unsplash.com/photo-1522661067900-ab829854a57f?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fHNjaG9vbCUyMGluZGlhbnxlbnwwfHwwfHx8MA%3D%3D" 
                     alt="Foundation" 
                     class="w-full h-48 object-cover rounded-lg mb-4">
              </div>
            </div>
          </div>
          
          <!-- Item 2 -->
          <div class="flex flex-col md:flex-row items-center" data-aos="fade-up" data-aos-delay="100">
            <div class="md:w-1/2 md:pr-10 md:text-right order-3 md:order-1">
              <div class="bg-dark p-6 rounded-lg shadow-lg">
                <img src="img3.png" 
                     alt="First Program" 
                     class="w-full h-48 object-cover rounded-lg mb-4">
              </div>
            </div>
            <div class="hidden md:flex w-16 h-16 rounded-full bg-secondary items-center justify-center mx-4 flex-shrink-0 order-2">
              <i class="fas fa-users text-dark text-xl"></i>
            </div>
            <div class="md:w-1/2 md:pl-10 mb-4 md:mb-0 order-1 md:order-3">
              <h3 class="text-2xl font-bold text-secondary">2019</h3>
              <h4 class="text-xl font-semibold mb-2">First Education Program</h4>
              <p class="text-gray-300">Launched our first educational initiative reaching 50 children in the Kankarbagh area.</p>
            </div>
          </div>
          
          <!-- Item 3 -->
          <div class="flex flex-col md:flex-row items-center" data-aos="fade-up" data-aos-delay="200">
            <div class="md:w-1/2 md:pr-10 md:text-right mb-4 md:mb-0">
              <h3 class="text-2xl font-bold text-secondary">2020</h3>
              <h4 class="text-xl font-semibold mb-2">Project Aahar Begins</h4>
              <p class="text-gray-300">Started our nutrition program providing meals to 100+ children daily during pandemic.</p>
            </div>
            <div class="hidden md:flex w-16 h-16 rounded-full bg-secondary items-center justify-center mx-4 flex-shrink-0">
              <i class="fas fa-utensils text-dark text-xl"></i>
            </div>
            <div class="md:w-1/2 md:pl-10">
              <div class="bg-dark p-6 rounded-lg shadow-lg">
                <img src="https://media.istockphoto.com/id/471253793/photo/hungry-boy.jpg?s=2048x2048&w=is&k=20&c=4R3M4cj1Yu7EnHSPgTC-Mm6x6KQf4mayLK4wlQlqqXk=" 
                     alt="Project Aahar" 
                     class="w-full h-48 object-cover rounded-lg mb-4">
              </div>
            </div>
          </div>
          
          <!-- Item 4 -->
          <div class="flex flex-col md:flex-row items-center" data-aos="fade-up" data-aos-delay="300">
            <div class="md:w-1/2 md:pr-10 md:text-right order-3 md:order-1">
              <div class="bg-dark p-6 rounded-lg shadow-lg">
                <img src="https://media.istockphoto.com/id/471253793/photo/hungry-boy.jpg?s=2048x2048&w=is&k=20&c=4R3M4cj1Yu7EnHSPgTC-Mm6x6KQf4mayLK4wlQlqqXk=" 
                     alt="Growth" 
                     class="w-full h-48 object-cover rounded-lg mb-4">
              </div>
            </div>
            <div class="hidden md:flex w-16 h-16 rounded-full bg-secondary items-center justify-center mx-4 flex-shrink-0 order-2">
              <i class="fas fa-chart-line text-dark text-xl"></i>
            </div>
            <div class="md:w-1/2 md:pl-10 mb-4 md:mb-0 order-1 md:order-3">
              <h3 class="text-2xl font-bold text-secondary">2023</h3>
              <h4 class="text-xl font-semibold mb-2">Expanding Our Reach</h4>
              <p class="text-gray-300">Now serving 500+ children across 10 communities with education and nutrition programs.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-------------------------------- Team Section ---------------------------------------->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16" data-aos="zoom-in">
        <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">Meet Our Core Team</h2>
        <div class="w-24 h-1 bg-secondary mx-auto mb-6"></div>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">
          Dedicated individuals working tirelessly to bring bright smiles to children in need
        </p>
      </div>
      
      <div class="grid md:grid-cols-3 gap-8">
        <!-- Team Member 1 -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden impact-card" data-aos="fade-up" data-aos-delay="100">
          <div class="relative h-64 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1631819539802-720166c2651f?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjZ8fGluZGlhbiUyMHRlYWNoZXJ8ZW58MHx8MHx8fDA%3D" 
                 alt="Team Member" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-dark to-transparent opacity-70"></div>
            <div class="absolute bottom-0 left-0 p-6">
              <h3 class="text-xl font-bold text-white">Rahul Kumar</h3>
              <p class="text-secondary">Founder & Director</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4">Passionate about social change and education equality with 10+ years of experience in community development.</p>
            <div class="flex space-x-4">
              <a href="#" class="text-gray-500 hover:text-secondary"><i class="fab fa-linkedin-in"></i></a>
              <a href="#" class="text-gray-500 hover:text-secondary"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
        </div>
        
        <!-- Team Member 2 -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden impact-card" data-aos="fade-up" data-aos-delay="200">
          <div class="relative h-64 overflow-hidden">
            <img src="img7.png" 
                 alt="Team Member" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-dark to-transparent opacity-70"></div>
            <div class="absolute bottom-0 left-0 p-6">
              <h3 class="text-xl font-bold text-white">Priya Sharma</h3>
              <p class="text-secondary">Education Coordinator</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4">Former teacher with expertise in child psychology and innovative learning methodologies.</p>
            <div class="flex space-x-4">
              <a href="#" class="text-gray-500 hover:text-secondary"><i class="fab fa-linkedin-in"></i></a>
              <a href="#" class="text-gray-500 hover:text-secondary"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
        </div>
        
        <!-- Team Member 3 -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden impact-card" data-aos="fade-up" data-aos-delay="300">
          <div class="relative h-64 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1581125119293-4803aa54b372?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGluZGlhbiUyMHRlYWNoZXJ8ZW58MHx8MHx8fDA%3D" 
                 alt="Team Member" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-dark to-transparent opacity-70"></div>
            <div class="absolute bottom-0 left-0 p-6">
              <h3 class="text-xl font-bold text-white">Amit Patel</h3>
              <p class="text-secondary">Operations Manager</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4">Ensures smooth operations and logistics for all our programs and initiatives.</p>
            <div class="flex space-x-4">
              <a href="#" class="text-gray-500 hover:text-secondary"><i class="fab fa-linkedin-in"></i></a>
              <a href="#" class="text-gray-500 hover:text-secondary"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-------------------------------- CTA Section ---------------------------------------->
  <section class="py-16 bg-secondary text-dark">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6" data-aos="fade-up">Join Our Mission</h2>
      <p class="text-xl mb-8 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
        Whether you want to volunteer, donate, or partner with us, together we can bring more bright smiles to children in need.
      </p>
      <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4" data-aos="fade-up" data-aos-delay="200">
        <a href="./vol.php" class="bg-dark text-white px-8 py-3 rounded-lg font-medium hover:bg-gray-800 transition shadow-lg">Become a Volunteer</a>
        <a href="./donateform.php" class="bg-white text-dark px-8 py-3 rounded-lg font-medium hover:bg-gray-100 transition shadow-lg">Make a Donation</a>
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