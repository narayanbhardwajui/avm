<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ace Value Management</title>
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
                            <div class="text-center"><a href="about.php" class="btn-get-started">Learn More</a></div>
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
              <div class="text-center"><a href="services.php" class="btn-get-started">Learn More</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 3
        <div class="carousel-item" style="background-image: url(assets/img/HeroBanner3_Homepage.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2 class="text-uppercase text-center">The most efficient valuation management</h2>
              <p class="lead text-center">Get the most efficient Valuation Management available with our unique blend of
              high tech tools and direct personal service.</p>
              <div class="text-center"><a href="" class="btn-get-started">Learn More</a></div>
            </div>
          </div>
        </div>-->

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
          <div class="col-lg-6 col-md-6">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bi bi-cash-stack"></i></div>
              <h4 class="title"><a href="">Lenders</a></h4>
              <p class="description">At Ace Value Management we bridge the most affordable, highest quality
              technological solutions in the market with best customer service.</p>
              <a href="lenders.php" class="btn btn-outline-danger btn-sm">Read More</a>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-clipboard-data"></i></div>
              <h4 class="title"><a href="">Appraisers</a></h4>
              <p class="description">The excellent service provided to our clients depends on the quality of our appraisal solutions
               and our very best professionals...</p>
              <a href="appraisers.php" class="btn btn-outline-danger btn-sm">Read More</a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
    <!--<section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>We've created more than <span>200 websites</span> this year!</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Request a quote</a>
          </div>
        </div>

      </div>
    </section>--><!-- End Cta Section -->


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