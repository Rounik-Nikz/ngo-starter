<!DOCTYPE html>
<html lang="en">

<head>
  <!--meta tags-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1, maximum-scale=1, user-scalable=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!--page Title-->
  <title>ADMIN</title>
  <!-- Favicon-->
  <link rel="icon" type="image" href="./images/website-favicon.png" sizes="192x192" />

  <!--stylesheet link-->
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="add.css">

  <!-- Icons -->
  <link href="boxicons/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <style>
    header, main, footer { padding-left: 240px; }
    body { background: white; }
    @media only screen and (max-width: 992px) {
      header, main, footer { padding-left: 0; }
    }
    #credits li, #credits li a { color: white; }
    #credits li a { font-weight: bold; }
    .footer-copyright .container, .footer-copyright .container a {
      color: #BCC2E2;
    }
    .fab-tip {
      position: fixed; right: 85px; padding: 0px 0.5rem;
      text-align: right; background-color: #323232;
      border-radius: 2px; color: #FFF; width: auto;
    }
  </style>
</head>

<body>
  <div class="container-fluid menu">
    <nav class="navbar navbar-expand-lg my-navbar">
      <a class="navbar-brand" href="./donations.php"><img src="./images/website-favicon.png" height="150" width='150' alt="Logo"></a>
      <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="./adminpage.php">Home</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Events</a>
            <div class="dropdown-menu">
              <a class="nav-link" href="managefeatureevent.php">Featured Event</a>
              <a class="nav-link" href="manageevents.php">Events</a>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="./donations.php">View Donations</a></li>
          <li class="nav-item"><a class="nav-link" href="./registeredusers.php">Registered Users</a></li>
          <li class="nav-item"><a class="nav-link" href="./viewvolunteer.php">View Volunteer</a></li>
          <li class="nav-item"><a class="nav-link" href="./contactqueries.php">View Queries</a></li>
          <li class="nav-item"><a class="nav-link" href="./adminlogin.php">Logout</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <section>
    <?php
    include '_dbconnect.php';
    if (isset($_GET['id'])) {
      $eid = $_GET['id'];
      $q = "SELECT * FROM event WHERE id = '$eid'";
      $result = mysqli_query($conn, $q);
      if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    ?>
    <div class="container">
      <div class="row">
        <div class="col"></div>
        <div class="col internship" data-aos="zoom-in-up">
          <h2>Edit Events<hr class="internship-green-hr"></h2>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Event Name</label>
              <input class="form-control" pattern="[A-Za-z -]+" type="text" name="name" value="<?= htmlspecialchars($row['name']) ?>">
            </div>
            <div class="form-group">
              <label>Event Date</label>
              <input type="date" class="form-control" name="date" value="<?= $row['date'] ?>">
            </div>
            <div class="form-group">
              <label>Event Description</label>
              <textarea class="form-control" rows="5" name="description"><?= trim($row['description']) ?></textarea>
            </div>
            <div class="form-group">
              <label>Event Details</label>
              <textarea class="form-control" rows="5" name="details"><?= trim($row['details']) ?></textarea>
            </div>
            <div class="form-group">
              <label>Upload Events Image</label>
              <input type="file" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-outline-success mt-2" name="submit">Save</button>
            <a href="manageevents.php" class="btn btn-outline-success mt-2">Back</a>
          </form>
        </div>
        <div class="col"></div>
      </div>
    </div>
    <?php }
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['id'])) {
      $eid = $_GET['id'];
      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $date = $_POST['date'];
      $description = mysqli_real_escape_string($conn, $_POST['description']);
      $details = mysqli_real_escape_string($conn, $_POST['details']);
      $image = $_FILES['image'];

      $query = "UPDATE event SET name='$name', date='$date', description='$description', details='$details'";

      if ($image['name'] != '') {
        $folder = "images/event_images/";
        if (!is_dir($folder)) mkdir($folder, 0755, true);

        $stmt = mysqli_query($conn, "SELECT image FROM event WHERE id='$eid'");
        if ($stmt && $old = mysqli_fetch_assoc($stmt)) {
          if (file_exists($old['image'])) unlink($old['image']);
        }

        $final_image = $folder . basename($image['name']);
        move_uploaded_file($image['tmp_name'], $final_image);
        $query .= ", image='$final_image'";
      }

      $query .= " WHERE id='$eid'";
      if (mysqli_query($conn, $query)) {
        echo "<script>alert('Event Updated');window.location='manageevents.php';</script>";
        exit();
      } else {
        echo "<script>alert('Update Failed');</script>";
      }
    }
    ?>
  </section>

  <button onclick="topFunction()" id="topbtn"><i class="fa fa-arrow-up"></i></button>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
    window.onscroll = function () {
      document.getElementById("topbtn").style.display = (document.documentElement.scrollTop > 40) ? "block" : "none";
    };
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
</body>
</html>