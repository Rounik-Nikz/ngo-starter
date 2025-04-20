<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include '_dbconnect.php';

  $filename = $_FILES["image"]["name"];
  $tempname = $_FILES["image"]["tmp_name"];
  $folder = "users/" . $filename;
  move_uploaded_file($tempname, $folder);

  $image = $_POST['image'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  $exists = false;
  if (($password == $cpassword) && $exists == false) {
    $sql = "INSERT INTO users(image, name, email, phone, username, password ) VALUES ('$folder','$name', '$email', '$phone', '$username', '$password')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $showAlert = true;
    }
  } else {
    echo "<script>alert('Password Do not match')</script>";
  }
  header("location: login.php");

  if ($showAlert) {
    echo '<script>alert("Your Form has been Submitted..")</script>';
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no minimum-scale=1, maximum-scale=1, user-scalable=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Animation CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <title>SIGN UP - WE FOR YOU</title>

  <style>
    :root {
      --primary-color: #fbfe65;
      --dark-color: #232323;
      --light-color: #ffffff;
    }
    
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f9fa;
    }
    
    /* Signup Container */
    .signup-container {
      max-width: 600px;
      margin: 50px auto;
      background: white;
      border-radius: 15px;
      box-shadow: 0 15px 30px rgba(0,0,0,0.1);
      overflow: hidden;
      transition: all 0.3s ease;
    }
    
    .signup-container:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }
    
    .signup-header {
      background-color: var(--dark-color);
      color: var(--primary-color);
      padding: 25px;
      text-align: center;
    }
    
    .signup-header h2 {
      font-weight: 700;
      margin: 0;
      position: relative;
    }
    
    .signup-header h2::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 50px;
      height: 3px;
      background: var(--primary-color);
    }
    
    .signup-body {
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
    
    /* File Upload */
    .custom-file-upload {
      display: inline-block;
      padding: 10px 15px;
      background-color: var(--primary-color);
      color: var(--dark-color);
      border-radius: 8px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    
    .custom-file-upload:hover {
      background-color: var(--dark-color);
      color: var(--primary-color);
    }
    
    .file-input {
      display: none;
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
    .btn-signup {
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
    
    .btn-signup:hover {
      background-color: var(--primary-color);
      border-color: var(--primary-color);
      color: var(--dark-color);
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    /* Login Link */
    .login-link {
      text-align: center;
      margin-top: 20px;
    }
    
    .login-link a {
      color: var(--dark-color);
      font-weight: 500;
      transition: all 0.3s ease;
      text-decoration: none;
    }
    
    .login-link a:hover {
      color: var(--primary-color);
      text-decoration: underline;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
      .signup-container {
        margin: 20px 15px;
      }
      
      .signup-body {
        padding: 20px;
      }
    }
  </style>
</head>

<body>
  <div class="signup-container" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-delay="200">
    <div class="signup-header">
      <h2>Create Account</h2>
    </div>
    <div class="signup-body">
      <form action="signup.php" name='signupform' id="signupform" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="resume-btn">Profile Image</label>
          <label class="custom-file-upload">
            <i class="fas fa-upload"></i> Choose Image
            <input type="file" name="image" id="resume-btn" class="file-input form-control" required>
          </label>
        </div>
        
        <div class="form-group">
          <label for="name">Full Name</label>
          <input class="form-control" type="text" name='name' pattern="[A-Za-z A-Za-z]+" title="Name should contain only letters." placeholder="Enter your full name" required>
        </div>
        
        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" name="phone" class="form-control" maxlength="10" pattern="[0-9]{10}" title="Only 10 Numbers are allowed." placeholder="Enter your phone number" required>
        </div>
        
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" class="form-control" name="email" pattern="[A-Za-z0-9._+-]+@[A-Za-z0-9-]+\.[a-z]{2,3}" placeholder="Enter your email" required>
        </div>
        
        <div class="form-group">
          <label for="username">Username</label>
          <input class="form-control" name="username" placeholder="Choose a username" required>
        </div>
        
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Create a password" required>
          <span class="password-toggle" onclick="toggle()">
            <i class="fa fa-eye" aria-hidden="true" id="eye"></i>
          </span>
        </div>
        
        <div class="form-group">
          <label for="cpassword">Confirm Password</label>
          <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm your password" required>
          <small class="form-text text-muted">Make sure to type the same password</small>
        </div>
        
        <button type="submit" class="btn btn-signup" name="submit">Sign Up</button>
        
        <div class="login-link">
          Already have an account? <a href="login.php">Login here</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  
  <!-- Animation JS -->
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
    
    // Show selected file name
    document.getElementById('resume-btn').addEventListener('change', function(e) {
      var fileName = e.target.files[0].name;
      var nextSibling = e.target.nextElementSibling;
      document.querySelector('.custom-file-upload').innerHTML = 
        '<i class="fas fa-check"></i> ' + fileName;
    });
  </script>
</body>

</html>