<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png">
  <link href="./assets/favicon.ico" rel="icon">

  <link rel="stylesheet" href="./bootstrap@4.5.3-dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


  <title>Title page</title>

  <link href="./main.550dcf66.css" rel="stylesheet">
</head>

<body>
  <!-- Add your content of header -->
  <?php include "navbar.php" ?>

  <!-- Add your site or app content here -->
  <div class="hero-full-container background-image-container white-text-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1>Rp. 1,000,000</h1>
          <p>Selamat Datang</p>
          <p>SILAKAN TRANSAKSI MELAUI MENU DI BAWAH.</p>
          <br>
          <div>
            <a href="./project.php" class="btn btn-info btn-lg" title="">Top Up</a>
            <a href="./project.php" class="btn btn-info btn-lg" title="">Transfer</a>
            <a href="./project.php" class="btn btn-info btn-lg" title="">History</a>
            <a href="./project.php" class="btn btn-info btn-lg" title="">PLN</a>
            <a href="./project.php" class="btn btn-info btn-lg" title="">Pulsa</a>
            <a href="./project.php" class="btn btn-info btn-lg" title="">Tokopedia</a>
            <a href="./project.php" class="btn btn-info btn-lg" title="">Shopee</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function(event) {
      navbarFixedTopAnimation();
    });
  </script>

  <?php include "footer.php" ?>

  <script>
    document.addEventListener("DOMContentLoaded", function(event) {
      navActivePage();
      scrollRevelation('.reveal');
    });
  </script>

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID 

<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>

-->
  <script type="text/javascript" src="./main.0cf8b554.js"></script>
</body>

</html>