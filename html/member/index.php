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
  <!-- <link rel="stylesheet" type="text/css" href="./bootstrap-4.5.3-dist/css/bootstrap.css" /> -->



  <title>Home : E-Rupiah</title>

  <link href="./main.550dcf66.css" rel="stylesheet">
  <!-- <link href="./bootstrap-4.5.3-dist/css/bootstrap.css" rel="stylesheet"> -->
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
      z-index: 1;
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
  <!-- Add your content of header -->
  <div style="position: relative;">
    <?php include "navbar.php" ?>
  </div>
  <!-- Add your site or app content here -->
  <div class="hero-full-container background-image-container white-text-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1>Rp. 1,000,000</h1>
          <p>Selamat Datang <?php echo $_GET["usr"] ?></p>
          <p>SILAKAN TRANSAKSI MELAUI MENU DI BAWAH.</p>
          <br>
          <div>
            <a href="#" class="btn btn-info btn-lg" id="topUp" onclick="" title="Menambah Saldo">Top Up</a>
            <a href="#" class="btn btn-info btn-lg" id="tf" title="Transfer Ke Akun Lain">Transfer</a>
            <a href="#" class="btn btn-info btn-lg" id="history" title="Laporan rincian lalu lintas Uang anda">History</a>
            <a href="#" class="btn btn-info btn-lg" id="pay" title="Bayar tagihan PLN">PLN</a>
            <a href="#" class="btn btn-info btn-lg" id="pulsa" title="Isi Pulsa menggukan Fitur ini">Pulsa</a>
            <a href="#" class="btn btn-info btn-lg" id="tokPed" title="Top Up Saldo Dompet Tokopedia">Tokopedia</a>
            <a href="#" class="btn btn-info btn-lg" id="shopee" title="Top Up Saldo Dompet Shopee">Shopee</a>
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



  <button id="myBtn">Open Modal</button>

  <!-- The Modal -->
  <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <form action="" id="inputVal">
        <div class="form-group">
          <label for="exampleInputEmail1">Value</label>
          <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Rp">
        </div>
        <div>
          <input type="submit" name="submit" value="Kirim" class="form-control btn-primary" id="submit" placeholder="Rp">
        </div>
      </form>
    </div>

  </div>

  <!-- The Modal -->
  <div id="tfModal2" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <form action="" id="trForm">
        <div class="form-group">
          <label for="exampleInputEmail1">No/ID Account Tujuan</label>
          <input type="number" class="form-control" id="exampleInputEmail1" placeholder="No. Rekening">
        </div>

        <div class="form-group">
          <select class="form-control">
            <option>BRI</option>
            <option>BNI</option>
            <option>BCA</option>
            <option>BTN</option>
            <option>LAINNYA</option>
            <div>
              <input type="submit" name="submit2" value="Kirim" class="form-control btn-primary" id="submit2" placeholder="Rp">
            </div>
          </select>
        </div>
      </form>
    </div>

  </div>

  <script>
    // Get the modal
    var modal = document.getElementById("myModal");
    var btnTopUp = document.getElementById("topUp");
    var tfModal = document.getElementById("tf");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }
    tfModal.onclick = function() {
      tfModal2.style.display = "block";
      $("#trForm").on("submit", function() {
        // confirm("Apakah anda yakin akan transfer?");
        alert("Transfer berhasil ");
        tfModal2.style.display = "none";
      });
    }

    //ketika klik top up
    btnTopUp.onclick = function(event) {
      modal.style.display = "block";
      $("#inputVal").on("submit", function() {
        alert("No. Virtual Account Anda adalah : 0823982398xxxx \
        Transaksi akan segera di proses, Setelah Pembayaran berhasil ");
        modal.style.display = "none";
      });
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

  <script type="text/javascript" src="./main.0cf8b554.js"></script>
</body>

</html>