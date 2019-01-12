<html>
<head>
  <title>
    RemindMe &mdash; Prijavljen
  </title>
<?php include("web/styleLinks.php"); ?>
<style>
.stopar1 {
margin: auto;
width: 50%;
}

</style>
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
                    <h2 class="mb-0 site-logo"><a href="index.php">RemindMe!</a></h2>
                  </div>
                  <div class="col-10">
                    <nav class="site-navigation text-right" role="navigation">
                      <div class="container">
                        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                          <li>
                            <a href="index.php">Indeks</a>
                          </li>
                          <li class="has-children">
                            <a href="oNasemProjektu.php">O nas</a>
                            <ul class="dropdown arrow-top">
                            <li><a href="oNasemProjektu.php">O projektu</a></li>
                            <li><a href="oEkipi.php">O ekipi</a></li>
                          </ul>
                        </li>
    <?php
    session_start();
    if(empty($_SESSION['logged_in'])){
      header("Location: index.php");
    }
    else {
    echo '<li class="active"><a href="prijavljen.php">Pregled seznamov</a></li>';
echo '<li><a href="mojRacun.php">Moj račun</a></li>';
      echo '<li><a href="odjava.php">Odjava</a></li>';
    }
    ?>
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

          <div class="site-blocks-cover" style="background-image: url(web/images/hero_b1_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade">
                  <h1><strong>Pregled seznamov</strong></h1>
                </div>
              </div>
            </div>
          </div>
        </div>



<?php
include("sharedPageContent/footer.php");
 ?>

  </div>

<?php include("web/scriptLinks.php") ?>
</body>
</html>
