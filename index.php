<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bring Bright Smile Foundation</title>
  
  <!-- Favicon-->
  <link rel="icon" type="image" href="images/website-favicon.png" sizes="192x192" />
  
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
  <link rel="stylesheet" href="styleV.css">
  
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
  </style>
</head>

<body class="bg-white">
  <!------ Navigation ------>
  <header class="fixed w-full z-50 transition-all duration-300" id="navbar">
    <nav style="background-color: #232323;" class=" shadow-lg">
      <div class="container mx-auto px-6 py-3">
        <div class="flex items-center justify-between">
          <!-- Logo -->
          <div class="flex items-center">
            <a class="navbar-brand" href="./index.php">
              <img src="logo.jpg" class="h-16 w-16 rounded-full border-2 border-secondary" alt="Logo">
            </a>
            <span class="ml-3 text-xl font-bold text-white">Bring <span class="text-secondary">Bright Smile</span></span>
          </div>

          <!-- Mobile menu button -->
          <div class="flex md:hidden">
            <button type="button" class="text-white hover:text-secondary focus:outline-none" id="menu-toggle">
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
            </button>
          </div>

          <!-- Desktop Menu -->
          <div class="hidden md:flex items-center space-x-8">
            <a href="./index.php" class="text-secondary font-medium hover:text-primary transition">Home</a>
            <a href="./aboutus.php" class="text-white hover:text-secondary transition">About us</a>
            <a href="./events.php" class="text-white hover:text-secondary transition">Events</a>
            <a href="./internship.php" class="text-white hover:text-secondary transition">Internship</a>
            <a href="./vol.php" class="text-white hover:text-secondary transition">Volunteer</a>
            <a href="./projectaahar.php" class="text-white hover:text-secondary transition">Project Aahar</a>
            <a href="./contactus.php" class="text-white hover:text-secondary transition">Contact Us</a>
            <a href="./login.php" class="btn-primary px-4 py-2 rounded-lg font-medium">Login</a>
          </div>
        </div>

        <!-- Mobile Menu -->
        <div class="md:hidden hidden mt-4 pb-3" id="mobile-menu">
          <a href="./index.php" class="block py-2 text-secondary font-medium">Home</a>
          <a href="./aboutus.php" class="block py-2 text-dark hover:text-secondary">About us</a>
          <a href="./events.php" class="block py-2 text-dark hover:text-secondary">Events</a>
          <a href="./internship.php" class="block py-2 text-dark hover:text-secondary">Internship</a>
          <a href="./vol.php" class="block py-2 text-dark hover:text-secondary">Volunteer</a>
          <a href="./projectaahar.php" class="block py-2 text-dark hover:text-secondary">Project Aahar</a>
          <a href="./contactus.php" class="block py-2 text-dark hover:text-secondary">Contact Us</a>
          <a href="./login.php" class="block py-2 text-secondary font-medium">Login</a>
        </div>
      </div>
    </nav>
  </header>
 <br><br><br><br>
  <marquee style="font-weight: 600; font-size:x-small;" behavior="alternate">2025 XYZ. All Rights Reserved.</marquee>
  
  <!--------------------------------------- Hero Section --------------------------------------->
  <section style="height: 80vh;" class="relative pt-24 pb-16 md:pt-32 md:pb-24 bg-primary">
    <div style=" background-image: url('m2.jpg') ; background-size: cover; " class="absolute inset-0 bg-gradient-to-r from-primary to-dark opacity-90"></div>
    <div class="container mx-auto px-6 relative z-10">
      <div class="flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 mb-10 md:mb-0" data-aos="fade-right">
          <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Bring Bright Smile to Every Child</h1>
          <p class="text-xl text-gray-300 mb-8">"Helping hand for those in need. Empowering underprivileged children through education and care."</p>
          <div class="flex space-x-4">
            <a href="./vol.php" class="bg-white text-dark px-6 py-3 rounded-lg font-medium hover:bg-gray-100 transition shadow-lg">Become a Volunteer</a>
            <a href="./donateform.php" class="btn-primary px-6 py-3 rounded-lg font-medium shadow-lg">Donate Now</a>
          </div>
        </div>
        <div class="md:w-1/2" data-aos="fade-left">
          <img src="" 
               alt="" 
               class="rounded-lg shadow-2xl floating">
        </div>
      </div>
    </div>
  </section>



<div style="display: flex; flex-direction: row; background-color: #ffffff; height: 30rem; width: 100%;">
  <div class="vid">
      <div> <video style=" margin-left: 17rem; height: 20rem; position: relative; top: 8rem; left: -9rem;" class="vidx"  autoplay loop muted playsinline >
      <source src="vdxv1.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>
      <div><video  style="margin-left: 14rem; height: 20rem; position: relative; top: 3rem; left: -15rem;" class="vidx" autoplay loop muted playsinline >
      <source src="vdxv2.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>
      <div><video  style="margin-top: 1rem; margin-left: 17rem ; height: 20rem; position: relative; top: 10rem; left: -25rem;" class="vidx" autoplay loop muted playsinline>
      <source src="vdxv3.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>
  </div>
  <div class="txt" style="width: 45%; text-align: center; color: #232323;">
      <p style="font-size: 2.5rem ; font-weight: 600; padding-top: 10rem;">Empowering </p>
      <p style="font-size: 2.5rem ; font-weight: 600;"><span style="font-family:cursive; font-size: 3.5rem; color: #fbfe65;">Every Child</span> for a</p>
      <p style="font-size: 2.5rem ; font-weight: 600;">Happier and</p>
      <p style="font-size: 2.5rem ; font-weight: 600;">Brighter Tomorrow.</p>
  </div>
</div>

<section style="color: #232323 ; background-color:#fbfe65;" class="bg-blue-800 text-white py-12">
  <div class="container mx-auto px-4">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
          <div style="background-color:lightyellow ; color: #232323" class="stats-item bg-blue-700 p-6 rounded-lg">
              <div class="text-4xl font-bold mb-2">8+</div>
              <div class="text-sm uppercase tracking-wider">Years of Service</div>
          </div>
          <div style="background-color:lightyellow ; color: #232323" class="stats-item bg-blue-700 p-6 rounded-lg">
              <div class="text-4xl font-bold mb-2">16+</div>
              <div class="text-sm uppercase tracking-wider">Communities Served</div>
          </div>
          <div style="background-color:lightyellow ; color: #232323" class="stats-item bg-blue-700 p-6 rounded-lg">
              <div class="text-4xl font-bold mb-2">19k+</div>
              <div class="text-sm uppercase tracking-wider">Lives Impacted</div>
          </div>
          <div style="background-color:lightyellow ; color: #232323" class="stats-item bg-blue-700 p-6 rounded-lg">
              <div class="text-4xl font-bold mb-2">10+</div>
              <div class="text-sm uppercase tracking-wider">Active Programs</div>
          </div>
      </div>
  </div>
</section>


  <!---------------------------------------- Mission Section ---------------------------------------->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16" data-aos="zoom-in">
        <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">WHO WE ARE AND WHAT DO WE DO?</h2>
        <div class="w-24 h-1 bg-secondary mx-auto mb-6"></div>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">
          Bring Bright Smile Foundation aims to build a better living ecosystem for underprivileged children in Patna by providing them with the right education and care at the right time in life.
        </p>
        <a href="./aboutus.php" class="inline-block mt-8 px-8 py-3 border-2 border-secondary text-dark font-medium rounded-lg hover:bg-secondary hover:text-dark transition duration-300">
          Read More
        </a>
      </div>
      
      <div class="grid md:grid-cols-3 gap-8 mt-12">
        <div class="bg-gray-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="100">
          <div class="text-secondary text-4xl mb-4">
            <i class="fas fa-hands-helping"></i>
          </div>
          <h3 class="text-xl font-bold text-dark mb-3">Donation Drives</h3>
          <p class="text-gray-600">
            One man's trash is another man's treasure. Our needy children receive donations every month from the privileged section. You never know, a pen to you, is worth a career to another.
          </p>
        </div>
        
        <div class="bg-gray-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="200">
          <div class="text-secondary text-4xl mb-4">
            <i class="fas fa-university"></i>
          </div>
          <h3 class="text-xl font-bold text-dark mb-3">Quality Education</h3>
          <p class="text-gray-600">
            We teach children from alphabets to advanced concepts, ensuring they don't just have fun but learn something valuable every day. Education is the key to breaking the cycle of poverty.
          </p>
        </div>
        
        <div class="bg-gray-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="300">
          <div class="text-secondary text-4xl mb-4">
            <i class="fas fa-utensils"></i>
          </div>
          <h3 class="text-xl font-bold text-dark mb-3">Project Aahar</h3>
          <p class="text-gray-600">
            Distribution of blankets and food materials to the needy and poor in the region during the tough times of harsh winters. No child should sleep hungry or cold.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!---------------------------------- Education Section ------------------------------------->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16" data-aos="zoom-in">
        <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">WE TEACH THEM THE RIGHT WAY</h2>
        <div class="w-24 h-1 bg-secondary mx-auto mb-6"></div>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">
          Bring Bright Smile is a joint programme with the mission to empower and support underprivileged children by ensuring that every child has at least 1 adult assigned to them.
        </p>
      </div>
      
      <div class="grid md:grid-cols-3 gap-6">
        <div class="relative overflow-hidden rounded-xl shadow-lg group" data-aos="fade-right">
          <img src="https://media.istockphoto.com/id/910384920/photo/kid-reading-near-locked-door.jpg?s=2048x2048&w=is&k=20&c=JWPGR5ITPwZxGVUAVd15PrIwiXgl786gDg6IoZA7rew=" 
               alt="We Love" 
               class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
          <div class="absolute inset-0 bg-dark bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
            <h3 class="text-white text-2xl font-bold">WE LOVE</h3>
          </div>
        </div>
        
        <div class="relative overflow-hidden rounded-xl shadow-lg group" data-aos="zoom-in">
          <img src="https://images.unsplash.com/photo-1542810634-71277d95dcbb?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
               alt="We Care" 
               class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
          <div class="absolute inset-0 bg-dark bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
            <h3 class="text-white text-2xl font-bold">WE CARE</h3>
          </div>
        </div>
        
        <div class="relative overflow-hidden rounded-xl shadow-lg group" data-aos="fade-left">
          <img src="https://images.unsplash.com/photo-1629273229664-11fabc0becc0?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
               alt="We Teach" 
               class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
          <div class="absolute inset-0 bg-dark bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
            <h3 class="text-white text-2xl font-bold">WE TEACH</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!----------------------------- Gallery Section ------------------------------>
  <section class="py-16 bg-white">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16" data-aos="zoom-in">
        <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">Our Gallery</h2>
        <div class="w-24 h-1 bg-secondary mx-auto mb-6"></div>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">
          We reach out to children and make them interact with young people from universities, teaching them in a friendly way to provide a family environment for learning.
        </p>
      </div>
      
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Gallery Item 1 -->
        <div class="relative group overflow-hidden rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="100">
          <img src="img1.png" 
               alt="Fun Time" 
               class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
          <div class="absolute inset-0 bg-gradient-to-t from-dark to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-6">
            <h3 class="text-white text-xl font-bold">Fun Learning Activities</h3>
          </div>
        </div>
        
        <!-- Gallery Item 2 -->
        <div class="relative group overflow-hidden rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="200">
          <img src="img2.png" 
               alt="Great Time" 
               class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
          <div class="absolute inset-0 bg-gradient-to-t from-dark to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-6">
            <h3 class="text-white text-xl font-bold">Interactive Sessions</h3>
          </div>
        </div>
        
        <!-- Gallery Item 3 -->
        <div class="relative group overflow-hidden rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="300">
          <img src="img3.png" 
               alt="Study Time" 
               class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
          <div class="absolute inset-0 bg-gradient-to-t from-dark to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-6">
            <h3 class="text-white text-xl font-bold">Focused Learning</h3>
          </div>
        </div>
        
        <!-- Gallery Item 4 -->
        <div class="relative group overflow-hidden rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="400">
          <img src="img4.png" 
               alt="Fun Time" 
               class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
          <div class="absolute inset-0 bg-gradient-to-t from-dark to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-6">
            <h3 class="text-white text-xl font-bold">Creative Workshops</h3>
          </div>
        </div>
        
        <!-- Gallery Item 5 -->
        <div class="relative group overflow-hidden rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="500">
          <img src="img5.png" 
               alt="Great Time" 
               class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
          <div class="absolute inset-0 bg-gradient-to-t from-dark to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-6">
            <h3 class="text-white text-xl font-bold">Team Activities</h3>
          </div>
        </div>
        
        <!-- Gallery Item 6 -->
        <div class="relative group overflow-hidden rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="600">
          <img src="img7.png" 
               alt="Study Time" 
               class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
          <div class="absolute inset-0 bg-gradient-to-t from-dark to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-6">
            <h3 class="text-white text-xl font-bold">Educational Support</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-------------------------------- Impact Stats Section --------------------------------->
  <section class="py-16 bg-primary text-white">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16" data-aos="zoom-in">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Impact</h2>
        <div class="w-24 h-1 bg-secondary mx-auto mb-6"></div>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
          Together, we're making a difference in the lives of underprivileged children in Patna.
        </p>
      </div>
      
      <div class="grid md:grid-cols-4 gap-8">
        <div class="text-center" data-aos="fade-up" data-aos-delay="100">
          <div class="text-5xl font-bold mb-2 text-secondary">500+</div>
          <div class="text-xl">Children Helped</div>
        </div>
        <div class="text-center" data-aos="fade-up" data-aos-delay="200">
          <div class="text-5xl font-bold mb-2 text-secondary">50+</div>
          <div class="text-xl">Volunteers</div>
        </div>
        <div class="text-center" data-aos="fade-up" data-aos-delay="300">
          <div class="text-5xl font-bold mb-2 text-secondary">1000+</div>
          <div class="text-xl">Meals Served</div>
        </div>
        <div class="text-center" data-aos="fade-up" data-aos-delay="400">
          <div class="text-5xl font-bold mb-2 text-secondary">10+</div>
          <div class="text-xl">Communities Reached</div>
        </div>
      </div>
    </div>
  </section>

  <!-------------------------------- Testimonials Section --------------------------------->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16" data-aos="zoom-in">
        <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">What People Say</h2>
        <div class="w-24 h-1 bg-secondary mx-auto mb-6"></div>
      </div>
      
      <div class="grid md:grid-cols-2 gap-8">
        <div class="bg-white p-8 rounded-xl shadow-lg" data-aos="fade-right">
          <div class="flex items-center mb-4">
            <img src="https://plus.unsplash.com/premium_photo-1723568666044-1b066e26b1fb?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTd8fGluZGlhbiUyMGdpcmx8ZW58MHx8MHx8fDA%3D" alt="Volunteer" class="w-12 h-12 rounded-full mr-4">
            <div>
              <h4 class="font-bold text-dark">Priya Sharma</h4>
              <p class="text-secondary">Volunteer</p>
            </div>
          </div>
          <p class="text-gray-600 italic">
            "Bring Bright Smile के साथ स्वयंसेवा करना मेरे जीवन के सबसे सुखद अनुभवों में से एक रहा है। बच्चों की प्रगति और उनके चेहरे की मुस्कान को देखना हर पल को सार्थक बना देता है।"
          </p>
          <div class="flex mt-4 text-yellow-400">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        
        <div class="bg-white p-8 rounded-xl shadow-lg" data-aos="fade-left">
          <div class="flex items-center mb-4">
            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Donor" class="w-12 h-12 rounded-full mr-4">
            <div>
              <h4 class="font-bold text-dark">Rahul Kumar</h4>
              <p class="text-secondary">Donor</p>
            </div>
          </div>
          <p class="text-gray-600 italic">
            "I've been supporting this foundation for 2 years and I'm amazed by their transparency and impact. They're truly changing lives in our community."
          </p>
          <div class="flex mt-4 text-yellow-400">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-------------------------------- Call to Action Section --------------------------------->
  <section class="py-16 bg-primary text-white">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6" data-aos="fade-up">Join Us in Making a Difference</h2>
      <p class="text-xl mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
        Whether you want to volunteer, donate, or just learn more about our work, we'd love to hear from you.
      </p>
      <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4" data-aos="fade-up" data-aos-delay="200">
        <a href="./vol.php" class="bg-yelow text-dark px-8 py-3 rounded-lg font-medium hover:bg-yellow-500 transition shadow-lg">Become a Volunteer</a>
        <a href="./contactus.php" class="btn-outline px-8 py-3 rounded-lg font-medium shadow-lg">Contact Us</a>
      </div>
    </div>
  </section>
  <br><br><br><br><br>
  <!-------------------------------- Footer ------------------------------------------>
  <footer style="background-color: #232323;" class="bg-dark text-white pt-16 pb-8">
    <div class="container mx-auto px-6">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Logo and About -->
        <div class="flex flex-col items-center md:items-start" data-aos="fade-up">
          <div class="flex items-center mb-6">
            <img src="logo.jpg" class="h-16 w-16 rounded-full border-2 border-secondary" alt="Logo">
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