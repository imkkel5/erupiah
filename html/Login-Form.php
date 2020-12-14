<?php session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "header.php" ?>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    /* The Modal (background) */
    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 1000;
      /* Sit on top */
      padding-top: 100px;
      /* Location of the box */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
    }

    /* The Close Button */
    .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
  </style>
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
                <form action="/member/index.php" method="POST" id="fLogin">
                  <h3>Login</h3>
                  <form class="login100-form validate-form">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="User ID is required">
                      <span class="label-input100">User ID</span>
                      <input class="form-control" type="text" autofocus name="user" id="user" placeholder="Enter User ID">
                      <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                      <span class="label-input100">Password</span>
                      <input class="form-control" type="password" name="pass" id="pass" placeholder="Enter password">
                      <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-b-30">
                      <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                          Remember me
                        </label>
                      </div>

                      <div>
                        Didn't Have account?
                        <a href="Register-Form.php" class="txt1">
                          Sign Up
                        </a>
                      </div>

                      <div>
                        <a href="#"  class="txt1" id="forgotPass" >
                          Forgot Password?
                        </a>
                      </div>
                    </div>

                    <div class="btn btn-primary rounded-pill">
                      <button type="submit" class="btn btn-primary rounded-pill p-0" id="login">
                        Login
                      </button>
                    </div>
                  </form>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->


    <div id="forgotPassword" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <form action="" id="formEmailRec">
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" id="email" placeholder="type your old email here ">
        </div>
        <div>
          <input type="submit" name="submit" value="Kirim" class="form-control btn-primary" id="submit" placeholder="Rp">
        </div>
      </form>
    </div>

  </div>


    <?php include "footer.php" ?>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/mobster.js"></script>

    <script src="../assets/js/google-maps.js"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
    <script>
      $(document).ready(function() {
        $('#btLogin').hide();
        $('#fLogin').on("submit", function(event) {
          event.preventDefault();
          if ($('#user').val() == '' || $('#pass').val() == '' || $('#user').val() != $('#pass').val()) {
            alert("Mohon Isi Username dan password dengan benar");
          } else {
            window.location = './member/index.php?usr=' + $('#pass').val();
          }
        })
      })
    </script>
    <script>
    var forgotPass = document.getElementById("forgotPass");
    forgotPass.onclick = function() {
      alert("oke");
      forgotPassword.style.display = "block";
      $('#formEmailRec').on("submit", function(event) {
          if ($('#email').val() == '') {
            alert("Mohon Isi Email yang pernah terdaftar");
          } else {
            val getEmail = $('#email').val();
            alert("Link mengganti password telah di kirimken ke email anda. Silakan Cek");
          }
        })
    }

    </script>

</body>

</html>