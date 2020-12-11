<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "header.php" ?>
</head>

<body>

  <?php include "navbar.php" ?>

  <div class="page-hero-section bg-image hero-mini" style="background-image: url(../assets/img/hero_mini.svg);">
    <div class="page-section col-lg-30">
      <div class="container p-5">
        <div class="container bg-light rounded">
          <div class="row">
            <div class="col-lg py-3">
              <article class="blog-entry">
                <div class="entry-header">
                </div>
                <form action="">
                  <h3>Registration Form</h3>
                  <div class="form-group">
                    <input type="text" placeholder="First Name" class="form-control">
                    <input type="text" placeholder="Last Name" class="form-control">
                  </div>
                  <div class="form-wrapper">
                    <input type="text" placeholder="Username" class="form-control">
                    <i class="zmdi zmdi-account"></i>
                  </div>
                  <div class="form-wrapper">
                    <input type="text" placeholder="Email Address" class="form-control">
                    <i class="zmdi zmdi-email"></i>
                  </div>
                  <div class="form-wrapper">
                    <select name="" id="" class="form-control">
                      <option value="" disabled selected>Gender</option>
                      <option value="male">Male</option>
                      <option value="femal">Female</option>
                      <option value="other">Other</option>
                    </select>
                    <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
                  </div>
                  <div class="form-wrapper">
                    <input type="password" placeholder="Password" class="form-control">
                    <i class="zmdi zmdi-lock"></i>
                  </div>
                  <div class="form-wrapper">
                    <input type="password" placeholder="Confirm Password" class="form-control">
                    <i class="zmdi zmdi-lock"></i>
                  </div>
                  <div class="entry-header">
                  </div>
                  <div class="btn btn-primary rounded-pill">
                    <button class="btn btn-primary rounded-pill p-0">
                      Register
                    </button>
                  </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->

    <?php include "footer.php" ?>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/mobster.js"></script>

    <script src="../assets/js/google-maps.js"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>

</body>

</html>