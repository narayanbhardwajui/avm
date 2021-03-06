<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ace Value Management</title>
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
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

<?php include 'header.php';?>


  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/HeroBanner3_Homepage.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2 class="text-uppercase text-center">Welcome to ACE VALUE Management</h2>
              <p class="lead text-center">A full service appraisal management company that focus on partnerships by
              providing innovative solutions that bring <strong>Lenders </strong>close to <strong>Appraisers</strong> and
              add value to business.</p>
                            <div class="text-center"><a href="about.php" class="btn btn-danger">Learn More</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/HeroBanner2_Homepage.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2 class="text-uppercase text-center">One Stop Appraisal Management Solution </h2>
              <p class="lead text-center">One-stop Appraisal Management Solution to get the most efficient Valuation Management
              with our unique blend of high tech tools and direct personal service.</p>
              <div class="text-center"><a href="services.php" class="btn btn-danger">Learn More</a></div>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section>
  <!-- End Hero -->

  <main id="main">



    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 col-md-6 position-relative">
            <a href="lenders.php" class="position-absolute w-100 h-100" style="z-index:10"></a>
            <div class="icon-box" data-aos="fade-up">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi" viewBox="0 0 16 16">
                  <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z"/>
                </svg>
              </div>
              <h4 class="title"><a href="">Lenders</a></h4>
              <p class="description">At Ace Value Management we bridge the most affordable, highest quality
              technological solutions in the market with best customer service.</p>
              <a href="lenders.php" class="btn btn-outline-danger btn-sm position-relative" style="z-index:11">Read More</a>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 position-relative">
          <a href="appraisers.php" class="position-absolute w-100 h-100" style="z-index:10"></a>
            <div class="icon-box">
              <div class="icon"><i class="bi bi-clipboard-data"></i></div>
              <h4 class="title"><a href="">Appraisers</a></h4>
              <p class="description">The excellent service provided to our clients depends on the quality of our appraisal solutions
               and our very best professionals...</p>
              <a href="appraisers.php" class="btn btn-outline-danger btn-sm position-relative" style="z-index:11">Read More</a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>It???s easy to get started with our reliable and proven solutions.</h3>
            <p> Reach out today to put the AVM Advantage to the test.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <button class="btn btn-danger align-middle" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get More Info</button>
          </div>
        </div>
      </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">AVM Solutions - Get More Info</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <div class="row">
          <div class="col-md-12 mb-3">
            <form class="contact-form h-100 bg-light p-5" method="POST">
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
        </div>
          </div>
        </div>
      </div>
    </div>


  </main><!-- End #main -->

  <?php include 'footer.php';?>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>