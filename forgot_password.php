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

  <title>Recover Account - WE FOR YOU</title>

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
    
    /* Recovery Container */
    .recovery-container {
      max-width: 500px;
      margin: 50px auto;
      background: white;
      border-radius: 15px;
      box-shadow: 0 15px 30px rgba(0,0,0,0.1);
      overflow: hidden;
      transition: all 0.3s ease;
    }
    
    .recovery-container:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }
    
    .recovery-header {
      background-color: var(--dark-color);
      color: var(--primary-color);
      padding: 25px;
      text-align: center;
    }
    
    .recovery-header h2 {
      font-weight: 700;
      margin: 0;
      position: relative;
    }
    
    .recovery-header h2::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 50px;
      height: 3px;
      background: var(--primary-color);
    }
    
    .recovery-body {
      padding: 30px;
    }
    
    /* Form Styles */
    .form-group {
      margin-bottom: 25px;
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
    
    /* Button Styles */
    .btn-recovery {
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
    
    .btn-recovery:hover {
      background-color: var(--primary-color);
      border-color: var(--primary-color);
      color: var(--dark-color);
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    /* Instruction Text */
    .instruction-text {
      text-align: center;
      color: #6c757d;
      margin-bottom: 25px;
      font-size: 0.95rem;
    }
    
    /* Back Link */
    .back-link {
      text-align: center;
      margin-top: 20px;
    }
    
    .back-link a {
      color: var(--dark-color);
      font-weight: 500;
      transition: all 0.3s ease;
      text-decoration: none;
    }
    
    .back-link a:hover {
      color: var(--primary-color);
      text-decoration: underline;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
      .recovery-container {
        margin: 20px 15px;
      }
      
      .recovery-body {
        padding: 20px;
      }
    }
  </style>
</head>

<body>
  <div class="recovery-container" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-delay="200">
    <div class="recovery-header">
      <h2>Account Recovery</h2>
    </div>
    <div class="recovery-body">
      <p class="instruction-text">Enter your email address and we'll send you a link to reset your password</p>
      
      <form action="forgot_password_process.php" id="recover_email" method="post">
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" class="form-control" name="email" pattern="[A-Za-z0-9._+-]+@[A-Za-z0-9-]+\.[a-z]{2,3}" placeholder="Enter your registered email" required>
        </div>
        
        <button type="submit" class="btn btn-recovery" name="reset">Send Recovery Link</button>
        
        <div class="back-link">
          <a href="login.php"><i class="fas fa-arrow-left"></i> Back to Login</a>
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
</body>

</html>