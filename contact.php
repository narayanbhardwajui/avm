<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact- AVM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

<?php include 'header.php';?>

<?php
  if(isset($_POST['submitbutton']))
    {
      $from=$_POST['userName'];
      $email=$_POST['userEmail'];
      $message=$_POST['userMsg'];
      $phone=$_POST['userPhone'];
      $message=" \r\n Name: " .$from . " \r\n Phone no: " .$phone . " \r\n Email: " .$email . " \r\n Message: " .$message ;
      $from="From: $name<$email>\r\nReturn-path: $email";
      $subject="Enquiry Form";
      mail("info@acevaluemanagement.com", $subject, $message, $from);
    ?>
    <script>
        setTimeout(function(){
            document.getElementById("alert").style.display = "block";
        }, 1000);
        setTimeout(function(){
            window.location.href = window.location.href;
        }, 3000);
    </script>
    <?php

    }
?>
 



  <main id="main">

    <section class="sdwan spacer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-3">
            <form class="contact-form h-100 bg-light p-2 p-md-5" method="POST">
              <h3 class="h3 mb-3 text-danger">Have Us Contact You</h3>
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Enter your name" name="userName" required>
              </div>
              <div class="mb-3">
                <input type="number" class="form-control" placeholder="Enter your phone number" name="userPhone" required>
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" placeholder="Enter your email" name="userEmail" required>
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Subject" name="userMsg" required>
              </div>
              <div class="mb-3">
              <textarea class="form-control" placeholder="Message" rows="6" cols="100"></textarea>
              </div>
              <input type="submit" class="btn btn-danger w-100" name="submitbutton" value="Submit">
              <div id="alert" class="alert alert-success alert-dismissible fade show mt-3" role="alert" style="display:none;">
               Email Sent Successfully.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            </form>

          </div>
          <div class="col-md-6 mb-3">
            <h3 class="h3">Contact Details:</h3>
            <address class="lead text-secondary lh-lg mb-3 fw-normal">
              Call: <a href="tel:(213) 338-7887" class="border-bottom ms-1 me-3 d-block d-md-inline-block">(213) 338-7887</a><br>
              E-mail:&nbsp;<a href="mailto:info@acevaluemanagement.com" class="border-bottom d-block d-md-inline-block">info@acevaluemanagement.com<br></a>
            </address>
            <hr>

            <address>
              <h3 class="h3">Office Locations:</h3>
              <p class="text-secondary"><strong class="text-danger">Ace Value Management</strong><br>
              695 S Harvard bl 2nd floor<br>
                  Los Angeles, Ca. 90005</p>
            </address>
            <div class="map-section">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.36928412091!2d-118.30660298544426!3d34.0600466247676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2b981e0b91801%3A0x281acf16ddd6a6da!2sAce%20Value%20Management!5e0!3m2!1sen!2sin!4v1624727725246!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php include 'footer.php';?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>