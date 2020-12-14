<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "header.php"?>
</head>
<body>

<?php include "navbar.php" ?>

<div class="bg-light">

  <div class="page-hero-section bg-image hero-mini" style="background-image: url(../assets/img/hero_mini.svg);">
    <div class="hero-caption">
      <div class="container fg-white h-100">
        <div class="row justify-content-center align-items-center text-center h-100">
          <div class="col-lg-6">
            <h3 class="mb-4 fw-medium">Contact</h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark justify-content-center bg-transparent">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 my-3 wow fadeInUp">
          <div class="card-page">
            <div class="row row-beam-md">
              <div class="col-md-4 text-center py-3 py-md-2">
                <i class="mai-location-outline h3"></i>
                <p class="fg-primary fw-medium fs-vlarge">Location</p>
                <p class="mb-0">3 East Ridgewood Avenue Los Angeles, CA 90022</p>
              </div>
              <div class="col-md-4 text-center py-3 py-md-2">
                <i class="mai-call-outline h3"></i>
                <p class="fg-primary fw-medium fs-vlarge">Contact</p>
                <p class="mb-1">+62 815437900</p>
              </div>
              <div class="col-md-4 text-center py-3 py-md-2">
                <i class="mai-mail-open-outline h3"></i>
                <p class="fg-primary fw-medium fs-vlarge">Email</p>
                <p class="mb-1">support@mobster.com</p>
                <p class="mb-0">support@macodeid.com</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 my-3 wow fadeInUp">
          <div class="card-page">
            <h3 class="fw-normal">Get in touch</h3>
            <form method="POST" class="mt-3">
              <div class="form-group">
                <label for="name" class="fw-medium fg-grey">Fullname</label>
                <input type="text" class="form-control" id="name">
              </div>
    
              <div class="form-group">
                <label for="email" class="fw-medium fg-grey">Email</label>
                <input type="text" class="form-control" id="email">
              </div>

              <div class="form-group">
                <label for="phone" class="fw-medium fg-grey">Phone(optional)</label>
                <input type="number" class="form-control" id="phone">
              </div>
    
              <div class="form-group">
                <label for="message" class="fw-medium fg-grey">Message</label>
                <textarea rows="6" class="form-control" id="message"></textarea>
              </div>

              <p>*Your information will never be shared with any third party.</p>
    
              <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary">Send Message</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 col-lg-7 my-3 wow fadeInUp">
          <div class="card-page">
            <div class="maps-container">
              <div id="myMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div> <!-- .bg-light -->

<?php include "footer.php"?>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/mobster.js"></script>

<script src="../assets/js/google-maps.js"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>

</body>
</html>