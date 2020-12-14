<?php
session_start();
error_reporting(0);
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
          <?php
            if($_GET["usr"]==''){
              $_GET["usr"] ="Guest" ;
            }
          ?>
          <p>Selamat Datang <?php echo $_GET["usr"] ?></p>
          <p>SILAKAN TRANSAKSI MELAUI MENU DI BAWAH.</p>
          <br>
          <div>
            <a href="#" class="btn btn-info btn-lg" style="background-color:transparent; border-color:transparent;" id="topUp" title="Menambah Saldo"><img src="./assets/images/topup.png" height="35" />Top Up</a>
            <a href="#" class="btn btn-info btn-lg" style="background-color:transparent; border-color:transparent;" id="tf" title="Transfer Ke Akun Lain"><img src="./assets/images/transfer.png" height="35" />Transfer</a>
            <a href="#" class="btn btn-info btn-lg" style="background-color:transparent; border-color:transparent;" id="laporan" title="Laporan rincian lalu lintas Uang anda"><img src="./assets/images/History.png" height="35" />History</a>
            <a href="#" class="btn btn-info btn-lg" style="background-color:transparent; border-color:transparent;" id="pay" title="Bayar tagihan PLN"><img src="./assets/images/pln.png" height="35" />PLN</a>
            <a href="#" class="btn btn-info btn-lg" style="background-color:transparent; border-color:transparent;" id="pulsa" title="Isi Pulsa menggukan Fitur ini"><img src="./assets/images/pulsa.png" height="35" />Pulsa</a>
            <a href="#" class="btn btn-info btn-lg" style="background-color:transparent; border-color:transparent;" id="tokPed" title="Top Up Saldo Dompet Tokopedia"><img src="./assets/images/tokped.jpg" height="35" />Tokopedia</a>
            <a href="#" class="btn btn-info btn-lg" style="background-color:transparent; border-color:transparent;" id="shopee" title="Top Up Saldo Dompet Shopee"><img src="./assets/images/shopee.png" height="35" />Shopee</a>
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
          <input type="number" class="form-control" id="valTr" placeholder="No. Rekening">
        </div>

        <div class="form-group">
          <select class="form-control">
            <option>BRI</option>
            <option>BNI</option>
            <option>BCA</option>
            <option>BTN</option>
            <option>LAINNYA</option>
          </select>
          <div>
            <input type="submit" name="submit2" value="Kirim" class="form-control btn-primary" id="submit2" placeholder="Rp">
          </div>
        </div>
      </form>
    </div>
  </div>
  <div id="pulsaForm" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <form action="" id="pulsaPayForm">
        <div class="form-group">
          <label for="noTel">No Telepon</label>
          <input type="number" class="form-control" id="noTel" placeholder="No Telepon">
        </div>
        <div>
          <select id="voucher" class="form-control">
            <option>V10</option>
            <option>V20</option>
            <option>V200</option>
            <option>V1000</option>
          </select>
        </div>
        <div>
          <input type="submit" name="submit2" value="Kirim" class="form-control btn-primary" id="submit2" placeholder="Rp">
        </div>
    </div>
    </form>
  </div>
  <div id="payModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <form action="" id="payForm">
        <div class="form-group">
          <label for="Number">No Rekening Listrik</label>
          <input type="number" class="form-control" id="noRekListrik" placeholder="">
        </div>
        <div class="form-group">
          <label for="nominal">Nominal Pembayaran</label>
          <input type="number" class="form-control" id="nominal" placeholder="">
        </div>
        <select class="form-control">
          <option>Pra-bayar</option>
          <option>Pasca-bayar</option>
        </select>
        <div>
          <input type="submit" name="submit" value="Kirim" class="form-control btn-primary" id="submit3" placeholder="Rp">
        </div>
      </form>
    </div>

  </div>

  <div id="modalTokped" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <form action="" id="tokpedForm">
        <div class="form-group">
          <label for="Number">ID Account Tokopedia</label>
          <input type="number" class="form-control" id="idTokped" placeholder="">
        </div>
        <div class="form-group">
          <label for="nominal">Nominal Pembayaran</label>
          <input type="number" class="form-control" id="nominalPtokped" placeholder="">
        </div>
        <div>
          <input type="submit" name="submit" value="Kirim" class="form-control btn-primary" id="submit3" placeholder="Rp">
        </div>
      </form>
    </div>

  </div>

  <div id="modalShopee" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <form action="" id="shopeeForm">
        <div class="form-group">
          <label for="Number">ID Account Shopee</label>
          <input type="number" class="form-control" id="idShopee" placeholder="">
        </div>
        <div class="form-group">
          <label for="nominal">Nominal Pembayaran</label>
          <input type="number" class="form-control" id="nominalPshopee" placeholder="">
        </div>
        <div>
          <input type="submit" name="submit" value="Kirim" class="form-control btn-primary" id="submit3" placeholder="Rp">
        </div>
      </form>
    </div>

  </div>

  <div id="modalHistory" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <table>
        <td>
        <th>No</th>
        <th>Tanggal</th>
        <th width="50%">Tranksaksi</th>
        <th>Debet</th>
        <th>Kredit</th>
        </td>
        <tr>
          <th>1</th>
          <th>2 November 2020</th>
          <th>Top Up</th>
          <th>10000</th>
          <th>-</th>
        </tr>
        <tr>
          <th>2</th>
          <th>3 November 2020</th>
          <th>Top Up Tokopedia</th>
          <th>-</th>
          <th>100</th>
        </tr>
        <tr>
          <th>1</th>
          <th>2 November 2020</th>
          <th>Top Up</th>
          <th>10000</th>
          <th>-</th>
        </tr>
        <tr>
          <th>2</th>
          <th>3 November 2020</th>
          <th>Top Up Tokopedia</th>
          <th>-</th>
          <th>100</th>
        </tr>
        <tr>
          <th>1</th>
          <th>2 November 2020</th>
          <th>Top Up</th>
          <th>10000</th>
          <th>-</th>
        </tr>
        <tr>
          <th>2</th>
          <th>3 November 2020</th>
          <th>Top Up Tokopedia</th>
          <th>-</th>
          <th>100</th>
        </tr>
      </table>
    </div>

  </div> -->

  <script>
    // Get the modal
    var modal = document.getElementById("myModal");
    var btnTopUp = document.getElementById("topUp");
    var tfModal = document.getElementById("tf");
    var pay = document.getElementById("pay");
    var pulsa = document.getElementById("pulsa");
    var tokped = document.getElementById("tokPed");
    var shopee = document.getElementById("shopee");
    var laporan = document.getElementById("laporan");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }

    shopee.onclick = function() {
      modalShopee.style.display = "block";
      $("#shopeeForm").on("submit", function() {
        if ($("#idShopee").val() != '' || $("#nominalPshopee").val() != '') {

          if (confirm("Apakah anda yakin TopUp") == true) {
            alert("Pembayaran berhasil ");
          } else {
            alert("Pembayaran dibatalkan ");
          }
          modalShopee.style.display = "none";
        } else {
          alert("ID dan nominal tidak boleh kosong");
        }
      });

    }

    laporan.onclick = function() {
      modalHistory.style.display = "block";
      // $("#historyForm").on("submit", function() {

      // });

    }


    tokped.onclick = function() {
      modalTokped.style.display = "block";
      $("#tokpedForm").on("submit", function() {
        if ($("#idTokped").val() != '' || $("#nominalPTokped").val() != '') {

          if (confirm("Apakah anda yakin TopUp") == true) {
            alert("Pembayaran berhasil ");
          } else {
            alert("Pembayaran dibatalkan ");
          }
          modalTokped.style.display = "none";
        } else {
          alert("Nominal atau voucher tidak boleh kosong");
        }
      });

    }

    pulsa.onclick = function() {
      pulsaForm.style.display = "block";
      $("#pulsaPayForm").on("submit", function() {
        if ($("#noTel").val() != '' || $("#voucher").val() != '') {

          if (confirm("Apakah anda yakin membeli voucher ini?") == true) {
            alert("Pembayaran berhasil ");
          } else {
            alert("Pembayaran dibatalkan ");
          }
          pulsaForm.style.display = "none";
        } else {
          alert("Nominal atau voucher tidak boleh kosong");
        }
      });
    }

    pay.onclick = function() {
      payModal.style.display = "block";
      $("#payModal").on("submit", function() {
        if ($("#nominal").val() != '') {

          if (confirm("Apakah anda yakin membayar tagihan ini?") == true) {
            alert("Pembayaran berhasil ");
          } else {
            alert("Pembayaran dibatalkan ");
          }
          payModal.style.display = "none";
        } else {
          alert("Nominal tidak boleh kosong");
        }
      });
    }

    tfModal.onclick = function() {
      tfModal2.style.display = "block";
      $("#trForm").on("submit", function() {
        if ($("#valTr").val() != '') {

          if (confirm("Apakah anda yakin akan transfer?") == true) {
            alert("Transfer berhasil ");
          } else {
            alert("Transfer dibatalkan ");
          }
          tfModal2.style.display = "none";
        } else {
          alert("Nominal tidak boleh kosong");
        }
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
      if (event.target == modalTokped) {
        modalTokped.style.display = "none";
      }
      if (event.target == modalShopee) {
        modalShopee.style.display = "none";
      }
      if (event.target == payModal) {
        payModal.style.display = "none";
      }
      if (event.target == pulsaForm) {
        pulsaForm.style.display = "none";
      }
      if (event.target == tfModal2) {
        tfModal2.style.display = "none";
      }
      if (event.target == modalHistory) {
        modalHistory.style.display = "none";
      }


    }
  </script>

  <script type="text/javascript" src="./main.0cf8b554.js"></script>
</body>

</html>