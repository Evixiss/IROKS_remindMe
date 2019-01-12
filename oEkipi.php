<html>
<body>
  <head>
<?php include("web/styleLinks.php"); ?>
<title>
  RemindMe &mdash; Ekipa
</title>
<style>
.person2{
  width: 300px;
  height: 300px;
}
.odmikOdSlike{
  padding-left: 15px;
}
</style>
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
                            <li><a href="oNasemProjektu.php">O projektu</a></li>
                            <li><a href="oEkipi.php">O ekipi</a></li>
                          </ul>
                        </li>
    <?php
    session_start();
    if(empty($_SESSION['logged_in'])){
      echo '<li><a href="prijava.php">Prijava</a></li>';
      echo '<li><a href="registracija.php">Registracija</a></li>';

    }
    else {
    echo '<li><a href="prijavljen.php">Pregled seznamov</a></li>';
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
                  <h1>O ekipi, ki stoji za <strong>RemindMe!</strong></h1>
                </div>
              </div>
            </div>
          </div>
        </div>

<!-- Content -->

          <div class="col-md-8 ml-auto">
<div class="d-flex block-testimony stopar1">
  <div class="person2">
    <img src="web/images/3.jpg" alt="Image" class="img-fluid rounded-circle">
  </div>
  <div class="stopar1"><br />
    <h2 class="h5"><strong>Nejc Vnuk</strong> <br /> OFR</h2>
<div class="odmikOdSlike">
    <p>Mlad razvijalec, ki je svoje življenje posvetil igranju nogometa in razvijanju kvalitetne programske kode. <br /><br/ ><b>Naloge pri projektu:</b></p>
    <ul style="list-style-type: none;">
      <li>Dodajanje, urejanje in brisanje novega seznama.</li>
      <li>Dodajanje, urejanje in brisanje stvari na seznamu.</li>
    </ul>
  </div>
  </div>
</div>
</div>

<br />

<div class="col-md-8 ml-auto">
  <div class="d-flex block-testimony stopar1">
    <div class="person2">
      <img src="web/images/1.jpg" alt="Image" class="img-fluid rounded-circle">
    </div>
    <div class="stopar1"><br />
      <h2 class="h5"><strong>Primož Stopar</strong> <br /> Vodja projekta</h2>
      <div class="odmikOdSlike">
        <p>Mlad razvijalec, katerega največje veselje je izpolniti zahteve njegovih uporabnikov in jim olajšati delo z njegovimi rešitvami. <br /> <br/ ><b>Naloge pri projektu:</b></p>
        <ul style="list-style-type: none;">
          <li>Registracija in prijava v sistem.</li>
          <li>Deljenje seznama z nekom ki še nima računa.</li>
          <li>Pošiljanje epošte ob registraciji in deljenju seznama.</li>
          <li>Urejanje uporabniškega računa.</li>
          <li>Pozabljeno Geslo.</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<br />

<?php
include("sharedPageContent/footer.php");
include("web/scriptLinks.php");
?>
</body>
</html>
