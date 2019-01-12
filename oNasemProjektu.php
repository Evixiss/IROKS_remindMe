<html>
<body>
  <head>
<?php include("web/styleLinks.php"); ?>
<title>
  RemindMe &mdash; Projekt
</title>
</head>

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
                          <li class="has-children active">
                            <a href="oNasemProjektu.php">O nas</a>
                            <ul class="dropdown arrow-top">
                            <li><a href="projekt/oNasemProjektu.php">O projektu</a></li>
                            <li><a href="projekt/oEkipi.php">O ekipi</a></li>
                          </ul>
                        </li>
    <?php
    session_start();
    if(empty($_SESSION['logged_in'])){
      echo '<li><a href="prijava.php">Prijava</a></li>';
      echo '<li><a href="registracija.php">Registracija</a></li>';

    }
    else {
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
                  <h1>O projektu <strong>RemindMe!</strong></h1>
                </div>
              </div>
            </div>
          </div>
        </div>

<!-- Content -->
<div class="site-block-half d-flex">
  <div class="image bg-image order-2" style="background-image: url('web/images/php-logo-png-transparent.png');"></div>
  <div class="text">
    <div class="section-heading text-left">
      <h2 class="mb-5">Naloga #1</h2>
      <p>Sprva nam je bila naloga, da smo se odločili v katerem programskem jeziku bomo programirali. Odločili smo se za PHP in MySQL, saj smo ga precej dobro spoznali in se dan danes v industriji zelo uporablja.</p>
    </div>
  </div>
</div>
<div class="site-block-half d-flex">
  <div class="image bg-image" style="background-image: url('web/images/funkcijonalnosti.jpg');"></div>
  <div class="text">
    <div class="section-heading text-left">
      <h2 class="mb-5">Naloga #2</h2>
      <p>Po tem ko je asistent vse naše ideje odobril smo se lotili dela.</p>
      <p>Iziv, ki smo ga morali opraviti je bil, da smo vzpostavili projekt in naredili nekaterih osnovnih strani in začeli delati na funkcijonalnostih, ki smo jih opisali pred začetkom projekta.</p>
    </div>
  </div>
</div>
<div class="site-block-half d-flex">
  <div class="image bg-image order-2" style="background-image: url('web/images/hero_bg_3.jpg');"></div>
  <div class="text">
    <div class="section-heading text-left">
      <h2 class="mb-5">Naloga #3</h2>
      <p>Stran smo morali preurediti tako, da je bila uporabniku prijazna, saj nihče ne bi uporabljal naše storitve, če bi se zgubljal v nepreglednih tabelah in obrazcih. To nam je vzelo največ časa ampak smo sedaj srečni z našim delom. </p>
    </div>
  </div>
</div>



</div>

<?php
include("sharedPageContent/footer.php");
include("web/scriptLinks.php");
?>
</body>
</html>
