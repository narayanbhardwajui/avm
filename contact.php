<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact- AVM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
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

  <main id="main">

    <section class="sdwan spacer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-3">
            <form class="contact-form h-100 bg-light p-2 p-md-5" method="POST">
              <h3 class="h3 mb-3 text-danger">Have Us Contact You</h3>
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Enter your name" name="userName">
              </div>
              <div class="mb-3">
                <input type="number" class="form-control" placeholder="Enter your phone number" name="userPhone">
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" placeholder="Enter your email" name="userEmail">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Subject" name="userMsg">
              </div>
              <div class="mb-3">
              <textarea class="form-control" placeholder="Message" rows="6" cols="100"></textarea>
              </div>
              <input type="submit" class="btn btn-danger w-100" name="submitbutton" value="Submit">
            </form>
          </div>
          <div class="col-md-6 mb-3">
            <h3 class="h3">Contact Details:</h3>
            <address class="lead text-secondary lh-lg mb-3 fw-normal">
              Call: <a href="tel:(213) 338-7887" class="border-bottom ms-1 me-3 d-block d-md-inline-block">(213) 338-7887</a><br>
              E-mail:&nbsp;<a href="mailto:info@acemgmtappraisal.com" class="border-bottom d-block d-md-inline-block">info@acemgmtappraisal.com<br></a>
            </address>
            <hr>

            <address>
              <h3 class="h3">Office Locations:</h3>
              <p class="text-secondary"><strong>Ace Value Management</strong><br>
              695 S Harvard bl 2nd floor<br>
                  Los Angeles, Ca. 90005</p>
            </address>
            <div class="map-section">
              <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
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