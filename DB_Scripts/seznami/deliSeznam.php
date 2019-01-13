<?php
ob_start();

 $idSeznama = $_POST["idSeznama"];
$id_Uporabnika = $_POST["id_uporabnika"];
 ?>
<html>
<head>
  <title>
    RemindMe &mdash; Deljen seznam
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="../web/fonts/icomoon/style.css">

  <link rel="stylesheet" href="../web/css/bootstrap.min.css">
  <link rel="stylesheet" href="../web/css/magnific-popup.css">
  <link rel="stylesheet" href="../web/css/jquery-ui.css">
  <link rel="stylesheet" href="../web/css/owl.carousel.min.css">
  <link rel="stylesheet" href="../web/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../web/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="../web/css/animate.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
  <link rel="stylesheet" href="../web/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="../web/css/aos.css">
  <link rel="stylesheet" href="../web/css/style.css">
</head>
<body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->



        <div class="site-navbar-wrap js-site-navbar bg-white">

          <div class="container">
            <div class="site-navbar bg-light">
              <div class="py-1">
                <div class="row align-items-center">
                  <div class="col-2">
                    <h2 class="mb-0 site-logo"><a href="../index.php">RemindMe!</a></h2>
                  </div>
                  <div class="col-10">
                    <nav class="site-navigation text-right" role="navigation">
                      <div class="container">
                        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                          <li class="active">
                            <a href="../index.php">Indeks</a>
                          </li>
                          <li class="has-children">
                            <a href="../oNasemProjektu.php">O nas</a>
                            <ul class="dropdown arrow-top">
                            <li><a href="../oNasemProjektu.php">O projektu</a></li>
                            <li><a href="../oEkipi.php">O ekipi</a></li>
                          </ul>
                        </li>
    <?php
    session_start();
    ?>
<li><a href="../prijava.php">Prijava</a></li>
<li><a href="../registracija.php">Registracija</a></li>
                        </ul>
                      </div>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div style="height: 113px;"></div>
        <div class="slide-one-item home-slider owl-carousel">

          <div class="site-blocks-cover" style="background-image: url(../web/images/hero_b1_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade">
                  <h1>Seznam <strong>

                    <?php
                    include("../povezava_na_bazo.php");
                    $sqlStavek = "SELECT nazivSeznama FROM Seznami WHERE id = '$idSeznama';";
                    $result = $conn->query($sqlStavek);
                    if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                      echo $row['nazivSeznama'];

                    $sqlStavek2 = "SELECT * FROM Uporabniki where id = $id_Uporabnika;";
                    $result2 = $conn->query($sqlStavek2);
                    if ($result2->num_rows > 0) {
                    $row2 = $result2->fetch_assoc();
                      $ime = $row2['ime'];
                      $priimek= $row2['priimek'];

                    }
                    }else {
                      // echo "Error: " . $sqlStavek . "<br>" . $conn->error;
                        header('Location: ../napaka.php');
                    }
                     ?>

                  </strong><br /> Osebe: <br /><strong><?php echo $ime." ".$priimek; ?></strong></h1>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="site-section">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-8 mb-5 mb-md-0">
        <div class="col-lg-4">
          <div class="p-12 mb-3 bg-white">
            <div class="col-md-12 mx-auto text-center mb-5 section-heading">
              <h2><?php $sqlStavek = "SELECT nazivSeznama FROM Seznami WHERE id = '$idSeznama';";
              $result = $conn->query($sqlStavek);
              if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
                echo $row['nazivSeznama'];}else {
                    header('Location: ../napaka.php');
                } ?></h2>
            </div>
<?php
                    include('../seznami/getVsiElementiNaSeznamu.php');
 ?>
</div>
</div>
</div>
</div>
</div>
</div>
<?php  include("../../sharedPageContent/footer.php");
include("../zapiranje_povezave_na_bazo.php");

         ?>

</div>

<script src="../web/js/jquery-3.3.1.min.js"></script>
<script src="../web/js/jquery-migrate-3.0.1.min.js"></script>
<script src="../web/js/jquery-ui.js"></script>
<script src="../web/js/popper.min.js"></script>
<script src="../web/js/bootstrap.min.js"></script>
<script src="../web/js/owl.carousel.min.js"></script>
<script src="../web/js/jquery.stellar.min.js"></script>
<script src="../web/js/jquery.countdown.min.js"></script>
<script src="../web/js/jquery.magnific-popup.min.js"></script>
<script src="../web/js/bootstrap-datepicker.min.js"></script>
<script src="../web/js/aos.js"></script>

<script src="../web/js/mediaelement-and-player.min.js"></script>

<script src="../web/js/main.js"></script>
</body>
</html>



<?php
$nazivdatoteke = "../../deljeno/".substr(md5(microtime()),rand(0,26),10).".php";
file_put_contents($nazivdatoteke, ob_get_contents());
header('Location:'.$nazivdatoteke);
 ?>
