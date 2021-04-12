<!--
=========================================================
Material Kit - v2.0.7
=========================================================

Product Page: https://www.creative-tim.com/product/material-kit
Copyright 2020 Creative Tim (https://www.creative-tim.com/)

Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
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
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#">
          KURINTA </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
            <a class="nav-link" href="login.php" onclick="scrollToDownload()">
              <i class="material-icons">login</i> Login
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
              <i class="material-icons">account_circle</i> Tentang
            </a>
          </li>

            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Twitter" rel="nofollow">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Like us on Facebook" rel="nofollow">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram" rel="nofollow">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="page-header header-filter black-filter" data-parallax="true" style="background-image: url('./assets/img/bg-masthead.jpg');">
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
  </div>

<!--  batas atas -->

  <div class="main main-raised">
    <div class="section section-basic">
      <div class="container">
        <div class="row">
        <div class="col-12">
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">

                        <label for="sel1">Kata Kunci:</label>


                        <div class="row">
                            <div class="col-sm-10">
                                <?php
                                $kata_kunci = "";
                                if (isset($_POST['kata_kunci'])) {
                                    $kata_kunci = $_POST['kata_kunci'];
                                }
                                ?>
                                <div class="form-group">
                                  <input type="text" name="kata_kunci" id="kata_kunci" value="<?php echo $kata_kunci; ?>" class="form-control" required />
                                  <span class="bmd-help">Dapat menggunakan Bahasa Toraja atau Bahasa Indonesia.</span>
                                </div>
                            </div>

                            <div class="col-2">

                                <input type="submit" class="btn btn-light button-lg" value="Cari">

                            </div>

                        </div>
                    </form>
                </div>

        </div>


        <div>

                <?php

                include "conn.php";
                if (isset($_POST['kata_kunci'])) {
                    $kata_kunci = mysqli_real_escape_string($koneksi, trim($_POST['kata_kunci']));
                    $sql = "SELECT * from tbl_kamus where toraja like '%" . $kata_kunci . "%' or indonesia like '%" . $kata_kunci . "%' order by toraja asc";
                } else {
                    $sql = "SELECT * from tbl_kamus order by toraja asc limit 9";
                }
                $hasil = mysqli_query($koneksi, $sql);

                $i = 0;
                while ($data = mysqli_fetch_array($hasil)) {
                    if ($i % 3 == 0) {
                ?>
                        <div class="row mt-3">
                        <?php
                    }

                        ?>
                        <div class="col-sm-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $data["toraja"]; ?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $data["indonesia"];   ?></h6>
                                    <p class="card-text"><?php echo $data["makna"];   ?></p>
                                    <p class="card-text"><?php echo $data["contoh"];   ?></p>
                                </div>
                            </div>
                        </div>

                        <?php
                        if ($i % 3 == 2) {
                        ?>
                        </div>
                        <br>
                <?php
                        }

                        $i++;
                    }
                    if ($i < 3) {
                      ?>
                        </div>
                        <br>
                <?php
                        }

                ?>


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
              Creative Tim
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