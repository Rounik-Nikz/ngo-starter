<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Volunteer - Bring Bright Smile Foundation</title>
  
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

    /* Form placeholder styles */
    ::placeholder {
      color: #6b7280;
      opacity: 1;
    }

    :-ms-input-placeholder {
      color: #6b7280;
    }

    ::-ms-input-placeholder {
      color: #6b7280;
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
            <a href="./index.php" class="text-dark hover:text-secondary transition">Home</a>
            <a href="./aboutus.php" class="text-dark hover:text-secondary transition">About us</a>
            <a href="./events.php" class="text-dark hover:text-secondary transition">Events</a>
            <a href="./internship.php" class="text-dark hover:text-secondary transition">Internship</a>
            <a href="./vol.php" class="text-secondary font-medium transition">Volunteer</a>
            <a href="./projectaahar.php" class="text-dark hover:text-secondary transition">Project Aahar</a>
            <a href="./contactus.php" class="text-dark hover:text-secondary transition">Contact Us</a>
            <a href="./login.php" class="btn-primary px-4 py-2 rounded-lg font-medium">Login</a>
          </div>
        </div>

        <!-- Mobile Menu -->
        <div class="md:hidden hidden mt-4 pb-3" id="mobile-menu">
          <a href="./index.php" class="block py-2 text-dark hover:text-secondary">Home</a>
          <a href="./aboutus.php" class="block py-2 text-dark hover:text-secondary">About us</a>
          <a href="./events.php" class="block py-2 text-dark hover:text-secondary">Events</a>
          <a href="./internship.php" class="block py-2 text-dark hover:text-secondary">Internship</a>
          <a href="./vol.php" class="block py-2 text-secondary font-medium">Volunteer</a>
          <a href="./projectaahar.php" class="block py-2 text-dark hover:text-secondary">Project Aahar</a>
          <a href="./contactus.php" class="block py-2 text-dark hover:text-secondary">Contact Us</a>
          <a href="./login.php" class="block py-2 text-dark hover:text-secondary">Login</a>
        </div>
      </div>
    </nav>
  </header>

  <!--------------------------------------- Hero Section --------------------------------------->
  <section class="relative pt-24 pb-16 md:pt-32 md:pb-24 bg-primary">
    <div class="absolute inset-0 bg-gradient-to-r from-primary to-dark opacity-90"></div>
    <div class="container mx-auto px-6 relative z-10">
      <div class="flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 mb-10 md:mb-0" data-aos="fade-right">
          <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Become a Volunteer</h1>
          <p class="text-xl text-gray-100 mb-8">Join our mission to bring bright smiles to underprivileged children through education, care, and community support.</p>
          <div class="flex space-x-4">
            <a href="#volunteer-form" class="btn-primary px-6 py-3 rounded-lg font-medium shadow-lg">Apply Now</a>
            <a href="#benefits" class="btn-outline px-6 py-3 rounded-lg font-medium shadow-lg">Learn More</a>
          </div>
        </div>
        <div class="md:w-1/2" data-aos="fade-left">
          <img src="https://images.unsplash.com/photo-1560220604-1985ebfe28b1?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8aW5kaWFuJTIwdm9sdW50ZWVyfGVufDB8fDB8fHww" 
               alt="Volunteers with children" 
               class="rounded-lg shadow-2xl floating">
        </div>
      </div>
    </div>
  </section>

  <!---------------------------------------- Why Volunteer Section ---------------------------------------->
  <section class="py-16 bg-white" id="benefits">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16" data-aos="zoom-in">
        <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">Why Volunteer With Us?</h2>
        <div class="w-24 h-1 bg-secondary mx-auto mb-6"></div>
        <p class="text-lg text-gray-700 max-w-3xl mx-auto">
          Volunteering with Bring Bright Smile Foundation is a rewarding experience that makes a real difference in children's lives.
        </p>
      </div>
      
      <div class="grid md:grid-cols-3 gap-8 mt-12">
        <div class="bg-gray-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="100">
          <div class="text-secondary text-4xl mb-4">
            <i class="fas fa-heart"></i>
          </div>
          <h3 class="text-xl font-bold text-dark mb-3">Make an Impact</h3>
          <p class="text-gray-700">
            Your time and skills directly contribute to improving the lives of underprivileged children in our community.
          </p>
        </div>
        
        <div class="bg-gray-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="200">
          <div class="text-secondary text-4xl mb-4">
            <i class="fas fa-users"></i>
          </div>
          <h3 class="text-xl font-bold text-dark mb-3">Build Community</h3>
          <p class="text-gray-700">
            Join a network of like-minded individuals who share your passion for helping others and making a difference.
          </p>
        </div>
        
        <div class="bg-gray-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="300">
          <div class="text-secondary text-4xl mb-4">
            <i class="fas fa-award"></i>
          </div>
          <h3 class="text-xl font-bold text-dark mb-3">Gain Experience</h3>
          <p class="text-gray-700">
            Develop valuable skills, enhance your resume, and receive volunteer certificates for your contributions.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!---------------------------------- Volunteer Opportunities Section ------------------------------------->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16" data-aos="zoom-in">
        <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">Volunteer Opportunities</h2>
        <div class="w-24 h-1 bg-secondary mx-auto mb-6"></div>
        <p class="text-lg text-gray-700 max-w-3xl mx-auto">
          We offer various ways for you to get involved based on your skills, interests, and availability.
        </p>
      </div>
      
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="100">
          <div class="bg-secondary text-dark text-xl w-12 h-12 rounded-full flex items-center justify-center mb-4">
            <i class="fas fa-chalkboard-teacher"></i>
          </div>
          <h3 class="text-xl font-bold text-dark mb-3">Teaching</h3>
          <p class="text-gray-700 mb-4">
            Help children with academic subjects, creative arts, or skill development. No formal teaching experience required.
          </p>
          <div class="text-sm text-gray-600">
            <i class="fas fa-clock mr-2"></i> 2-4 hours per week
          </div>
        </div>
        
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="200">
          <div class="bg-secondary text-dark text-xl w-12 h-12 rounded-full flex items-center justify-center mb-4">
            <i class="fas fa-utensils"></i>
          </div>
          <h3 class="text-xl font-bold text-dark mb-3">Food Distribution</h3>
          <p class="text-gray-700 mb-4">
            Assist with our Project Aahar initiative by helping prepare and distribute meals to those in need.
          </p>
          <div class="text-sm text-gray-600">
            <i class="fas fa-clock mr-2"></i> Flexible hours
          </div>
        </div>
        
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="300">
          <div class="bg-secondary text-dark text-xl w-12 h-12 rounded-full flex items-center justify-center mb-4">
            <i class="fas fa-camera"></i>
          </div>
          <h3 class="text-xl font-bold text-dark mb-3">Content Creation</h3>
          <p class="text-gray-700 mb-4">
            Help us document our work through photography, videography, or writing for our website and social media.
          </p>
          <div class="text-sm text-gray-600">
            <i class="fas fa-clock mr-2"></i> Project-based
          </div>
        </div>
        
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="100">
          <div class="bg-secondary text-dark text-xl w-12 h-12 rounded-full flex items-center justify-center mb-4">
            <i class="fas fa-hands-helping"></i>
          </div>
          <h3 class="text-xl font-bold text-dark mb-3">Event Coordination</h3>
          <p class="text-gray-700 mb-4">
            Help organize and run our fundraising events, donation drives, and community outreach programs.
          </p>
          <div class="text-sm text-gray-600">
            <i class="fas fa-clock mr-2"></i> Seasonal
          </div>
        </div>
        
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="200">
          <div class="bg-secondary text-dark text-xl w-12 h-12 rounded-full flex items-center justify-center mb-4">
            <i class="fas fa-laptop-code"></i>
          </div>
          <h3 class="text-xl font-bold text-dark mb-3">Tech Support</h3>
          <p class="text-gray-700 mb-4">
            Assist with website maintenance, app development, or tech solutions to help our organization run smoothly.
          </p>
          <div class="text-sm text-gray-600">
            <i class="fas fa-clock mr-2"></i> Remote possible
          </div>
        </div>
        
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="300">
          <div class="bg-secondary text-dark text-xl w-12 h-12 rounded-full flex items-center justify-center mb-4">
            <i class="fas fa-hands"></i>
          </div>
          <h3 class="text-xl font-bold text-dark mb-3">General Volunteer</h3>
          <p class="text-gray-700 mb-4">
            Lend a hand wherever needed - from administrative tasks to on-ground support for various initiatives.
          </p>
          <div class="text-sm text-gray-600">
            <i class="fas fa-clock mr-2"></i> Flexible
          </div>
        </div>
      </div>
    </div>
  </section>

  <!----------------------------- Volunteer Testimonials Section ------------------------------>
  <section class="py-16 bg-white">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16" data-aos="zoom-in">
        <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">What Our Volunteers Say</h2>
        <div class="w-24 h-1 bg-secondary mx-auto mb-6"></div>
        <p class="text-lg text-gray-700 max-w-3xl mx-auto">
          Hear from some of our amazing volunteers about their experiences.
        </p>
      </div>
      
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-gray-50 p-8 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="100">
          <div class="flex items-center mb-4">
            <img src="img8.png" alt="Volunteer" class="w-12 h-12 rounded-full mr-4">
            <div>
              <h4 class="font-bold text-dark">Priya Sharma</h4>
              <p class="text-secondary">Teaching Volunteer</p>
            </div>
          </div>
          <p class="text-gray-700 italic">
            "Volunteering with Bring Bright Smile has been one of the most rewarding experiences of my life. Seeing the children's progress and smiles makes every moment worthwhile."
          </p>
          <div class="flex mt-4 text-yellow-400">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        
        <div class="bg-gray-50 p-8 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="200">
          <div class="flex items-center mb-4">
            <img src="img7.png" alt="Volunteer" class="w-12 h-12 rounded-full mr-4">
            <div>
              <h4 class="font-bold text-dark">Rahul Kumar</h4>
              <p class="text-secondary">Event Coordinator</p>
            </div>
          </div>
          <p class="text-gray-700 italic">
            "I've been volunteering for 2 years and I'm amazed by the impact we make. The team is supportive and the children's enthusiasm is contagious!"
          </p>
          <div class="flex mt-4 text-yellow-400">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>
        
        <div class="bg-gray-50 p-8 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="300">
          <div class="flex items-center mb-4">
            <img src="img9.png" alt="Volunteer" class="w-12 h-12 rounded-full mr-4">
            <div>
              <h4 class="font-bold text-dark">Ananya Patel</h4>
              <p class="text-secondary">Content Creator</p>
            </div>
          </div>
          <p class="text-gray-700 italic">
            "Using my photography skills to document the foundation's work has been incredibly fulfilling. The stories we capture help bring in more support."
          </p>
          <div class="flex mt-4 text-yellow-400">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-------------------------------- Volunteer Form Section --------------------------------->
  <section class="py-16 bg-primary text-white" id="volunteer-form">
    <div class="container mx-auto px-6">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-12" data-aos="zoom-in">
          <h2 class="text-3xl md:text-4xl font-bold mb-4">Join Our Volunteer Team</h2>
          <div class="w-24 h-1 bg-secondary mx-auto mb-6"></div>
          <p class="text-xl text-gray-100">
            Fill out the form below and we'll get back to you with volunteer opportunities that match your interests and skills.
          </p>
        </div>
        
        <form class="bg-white text-dark p-8 rounded-xl shadow-2xl" data-aos="fade-up">
          <div class="grid md:grid-cols-2 gap-6 mb-6">
            <div>
              <label for="first-name" class="block text-gray-800 font-medium mb-2">First Name *</label>
              <input type="text" id="first-name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary" placeholder="Enter your first name">
            </div>
            <div>
              <label for="last-name" class="block text-gray-800 font-medium mb-2">Last Name *</label>
              <input type="text" id="last-name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary" placeholder="Enter your last name">
            </div>
          </div>
          
          <div class="grid md:grid-cols-2 gap-6 mb-6">
            <div>
              <label for="email" class="block text-gray-800 font-medium mb-2">Email *</label>
              <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary" placeholder="Enter your email">
            </div>
            <div>
              <label for="phone" class="block text-gray-800 font-medium mb-2">Phone Number *</label>
              <input type="tel" id="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary" placeholder="Enter your phone number">
            </div>
          </div>
          
          <div class="mb-6">
            <label class="block text-gray-800 font-medium mb-2">Areas of Interest *</label>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
              <div class="flex items-center">
                <input type="checkbox" id="teaching" class="mr-2">
                <label for="teaching" class="text-gray-800">Teaching</label>
              </div>
              <div class="flex items-center">
                <input type="checkbox" id="food-dist" class="mr-2">
                <label for="food-dist" class="text-gray-800">Food Distribution</label>
              </div>
              <div class="flex items-center">
                <input type="checkbox" id="content" class="mr-2">
                <label for="content" class="text-gray-800">Content Creation</label>
              </div>
              <div class="flex items-center">
                <input type="checkbox" id="events" class="mr-2">
                <label for="events" class="text-gray-800">Event Coordination</label>
              </div>
              <div class="flex items-center">
                <input type="checkbox" id="tech" class="mr-2">
                <label for="tech" class="text-gray-800">Tech Support</label>
              </div>
              <div class="flex items-center">
                <input type="checkbox" id="general" class="mr-2">
                <label for="general" class="text-gray-800">General Volunteer</label>
              </div>
            </div>
          </div>
          
          <div class="mb-6">
            <label for="availability" class="block text-gray-800 font-medium mb-2">Availability *</label>
            <select id="availability" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary">
              <option value="">Select your availability</option>
              <option value="weekdays">Weekdays</option>
              <option value="weekends">Weekends</option>
              <option value="flexible">Flexible</option>
              <option value="specific">Specific days/times</option>
            </select>
          </div>
          
          <div class="mb-6">
            <label for="skills" class="block text-gray-800 font-medium mb-2">Skills & Experience</label>
            <textarea id="skills" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary" placeholder="Describe your relevant skills and experience"></textarea>
          </div>
          
          <div class="mb-6">
            <label for="motivation" class="block text-gray-800 font-medium mb-2">Why do you want to volunteer with us? *</label>
            <textarea id="motivation" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary" placeholder="Tell us why you're interested in volunteering"></textarea>
          </div>
          
          <div class="text-center">
            <button type="submit" class="btn-primary px-8 py-3 rounded-lg font-medium shadow-lg hover:shadow-xl transition">
              Submit Application
            </button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-------------------------------- FAQ Section --------------------------------->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16" data-aos="zoom-in">
        <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">Frequently Asked Questions</h2>
        <div class="w-24 h-1 bg-secondary mx-auto mb-6"></div>
      </div>
      
      <div class="max-w-3xl mx-auto">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-6" data-aos="fade-up">
          <button class="w-full text-left p-6 focus:outline-none flex justify-between items-center text-gray-800">
            <span class="text-lg font-medium">What is the time commitment required for volunteering?</span>
            <i class="fas fa-chevron-down text-secondary transition-transform duration-300"></i>
          </button>
          <div class="px-6 pb-6 hidden">
            <p class="text-gray-700">
              The time commitment varies depending on the volunteer role. Teaching volunteers typically commit 2-4 hours per week, while event volunteers might help for a few hours during specific events. We're flexible and can work with your availability.
            </p>
          </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-6" data-aos="fade-up" data-aos-delay="100">
          <button class="w-full text-left p-6 focus:outline-none flex justify-between items-center text-gray-800">
            <span class="text-lg font-medium">Do I need any special qualifications to volunteer?</span>
            <i class="fas fa-chevron-down text-secondary transition-transform duration-300"></i>
          </button>
          <div class="px-6 pb-6 hidden">
            <p class="text-gray-700">
              Most of our volunteer positions don't require special qualifications—just enthusiasm and a willingness to help! For teaching roles, we provide training and lesson plans. Some specialized roles (like medical volunteers) may require relevant qualifications.
            </p>
          </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-6" data-aos="fade-up" data-aos-delay="200">
          <button class="w-full text-left p-6 focus:outline-none flex justify-between items-center text-gray-800">
            <span class="text-lg font-medium">Can I volunteer remotely?</span>
            <i class="fas fa-chevron-down text-secondary transition-transform duration-300"></i>
          </button>
          <div class="px-6 pb-6 hidden">
            <p class="text-gray-700">
              Some roles like content creation, graphic design, and tech support can be done remotely. Teaching and food distribution require in-person participation. We're happy to discuss remote options that match your skills.
            </p>
          </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-6" data-aos="fade-up" data-aos-delay="300">
          <button class="w-full text-left p-6 focus:outline-none flex justify-between items-center text-gray-800">
            <span class="text-lg font-medium">Will I receive training as a volunteer?</span>
            <i class="fas fa-chevron-down text-secondary transition-transform duration-300"></i>
          </button>
          <div class="px-6 pb-6 hidden">
            <p class="text-gray-700">
              Yes! All volunteers receive an orientation about our organization and their specific role. Teaching volunteers get additional training and resources. We provide ongoing support to all our volunteers.
            </p>
          </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="400">
          <button class="w-full text-left p-6 focus:outline-none flex justify-between items-center text-gray-800">
            <span class="text-lg font-medium">Can I get a volunteer certificate?</span>
            <i class="fas fa-chevron-down text-secondary transition-transform duration-300"></i>
          </button>
          <div class="px-6 pb-6 hidden">
            <p class="text-gray-700">
              Absolutely! After completing 30 hours of volunteer service, we're happy to provide a certificate acknowledging your contribution. This can be useful for academic requirements or professional development.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-------------------------------- Call to Action Section --------------------------------->
  <section class="py-16 bg-secondary text-gray-800">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6" data-aos="fade-up">Ready to Make a Difference?</h2>
      <p class="text-xl mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
        Join our team of dedicated volunteers and help bring bright smiles to children in need.
      </p>
      <div data-aos="fade-up" data-aos-delay="200">
        <a href="#volunteer-form" class="bg-dark text-white px-8 py-3 rounded-lg font-medium hover:bg-opacity-90 transition shadow-lg">Apply Now</a>
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
          <p class="text-gray-700 text-center md:text-left mb-6">
            Empowering underprivileged children through education, nutrition, and care to build a brighter future for our community.
          </p>
          <div class="flex space-x-4">
            <a href="https://www.facebook.com/aryanschoolhjp/" class="text-gray-700 hover:text-white text-xl" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/bringbrightsmilefoundation/" class="text-gray-700 hover:text-white text-xl" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-gray-700 hover:text-white text-xl">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-gray-700 hover:text-white text-xl">
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
              <a href="https://maps.app.goo.gl/fZkQtg7iQaFNppAcA" target="_blank" class="text-gray-700 hover:text-white">
                Kankarbagh, Patna, 800001
              </a>
            </div>
            <div class="flex items-center justify-center md:justify-start">
              <i class="fas fa-phone-alt mr-3 text-secondary"></i>
              <a href="tel:+918969862809" class="text-gray-800 hover:text-white">+91 8969862809</a>
            </div>
            <div class="flex items-center justify-center md:justify-start">
              <i class="fas fa-envelope mr-3 text-secondary"></i>
              <a href="mailto:info@bigsmile.in" class="text-gray-800 hover:text-white">info@bigsmile.in</a>
            </div>
          </div>
        </div>
        
        <!-- Quick Links -->
        <div class="text-center md:text-left" data-aos="fade-up" data-aos-delay="200">
          <h3 class="text-xl font-bold mb-6 text-secondary">Quick Links</h3>
          <ul class="space-y-3">
            <li><a href="./index.php" class="text-gray-700 hover:text-white transition">Home</a></li>
            <li><a href="./aboutus.php" class="text-gray-700 hover:text-white transition">About Us</a></li>
            <li><a href="./events.php" class="text-gray-700 hover:text-white transition">Events</a></li>
            <li><a href="./internship.php" class="text-gray-700 hover:text-white transition">Internship</a></li>
            <li><a href="./vol.php" class="text-secondary hover:text-white transition">Volunteer</a></li>
            <li><a href="./projectaahar.php" class="text-gray-700 hover:text-white transition">Project Aahar</a></li>
          </ul>
        </div>
      </div>
      
      <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-900" data-aos="fade-up">
        <p>&copy; 2023 Bring Bright Smile Foundation. All Rights Reserved.</p>
        <div class="mt-2">
          <a href="#" class="text-gray-700 hover:text-white text-sm">Privacy Policy</a> | 
          <a href="#" class="text-gray-700 hover:text-white text-sm">Terms of Service</a>
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
    
    // FAQ accordion functionality
    const faqButtons = document.querySelectorAll('.bg-white button');
    faqButtons.forEach(button => {
      button.addEventListener('click', () => {
        const content = button.nextElementSibling;
        const icon = button.querySelector('i');
        
        // Toggle content visibility
        content.classList.toggle('hidden');
        
        // Rotate icon
        icon.classList.toggle('transform');
        icon.classList.toggle('rotate-180');
      });
    });
  </script>
</body>
</html>