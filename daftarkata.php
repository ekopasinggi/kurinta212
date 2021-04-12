<!--
=========================================================
Material Kit - v2.0.7
=========================================================

Product Page: https://www.creative-tim.com/product/material-kit
Copyright 2020 Creative Tim (https://www.creative-tim.com/)

Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<?php
/**
 * using mysqli_connect for database connection
 */
include_once ("conn.php");

$result = mysqli_query($koneksi, "SELECT * FROM tbl_kamus");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Kurinta by Pande Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./assets/css/material-kit.css?v=2.0.7" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">
  <nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-lg"  id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#">
          KURINTA - ADMIN DASHBOARD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      
      
    </div>
  </nav>


  
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
            <h1>KURINTA</h1>
            <h3>Kamus Daring Bahasa Toraja.</h3>
          </div>
        </div>
      </div>
    </div>
  

<!--  batas atas -->

  <div class="main main-raised">
    <div class="section section-basic">
      <div class="container">

        <div class="row ">
          <h2 class="text-center">Daftar Kata Bahasa Toraja.</h2>
        </div>

        <div class="row">
        <form action="tambahkata.php">
            <input class="btn btn-primary btn-lg" type="submit" value="+ Tambah Kata" />
            
        </form>
          
          
        </div>

        <div class="row">
        <div class="card shadow mb-4">
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th style="width:25%">Toraja</th>
                      <th style="width:40%">Indonesia</th>
                      <th style="width:20%">Aksi</th>
                      
                    </tr>
                  </thead>
                  
                  <tbody>
                    <?php
                      while($data = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td>".$data['toraja']."</td>";
                        echo "<td>".$data['indonesia']."</td>";
                      
                        echo "<td><a class='btn btn-primary btn-sm' href='suntingkata.php?id=$data[id]'>Sunting</a> <a class='btn btn-primary btn-sm' href='hapus.php?id=$data[id]'>Hapus</a></td></tr>";
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>


                    </div>
    </div>
  </div>

<!--  batas bawah-->

  <!-- Classic Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body">
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link">Nice Button</button>
          <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!--  End Modal -->
  <footer class="footer" data-background-color="black">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="#">
              Pande Tim
            </a>
          </li>
          
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com/" target="_blank">Pande Tim</a> for Toraja.
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-kit.js?v=2.0.7" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();

      // Sliders Init
      materialKit.initSliders();
    });


    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>

</html>