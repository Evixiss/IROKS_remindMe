

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
                      <li class="active">
                        <a href="index.php">Indeks</a>
                      </li>
                      <!-- <li class="has-children">
                        <a href="beliefs.html">Beliefs</a>
                        <ul class="dropdown arrow-top">
                          <li><a href="beliefs.html">God</a></li>
                          <li><a href="beliefs.html">Humanity</a></li>
                          <li><a href="beliefs.html">Salvation</a></li>
                          <li class="has-children">
                            <a href="beliefs.html">Churches</a>
                            <ul class="dropdown">
                              <li><a href="beliefs.html">America</a></li>
                              <li><a href="beliefs.html">Europe</a></li>
                              <li><a href="beliefs.html">Asia</a></li>
                              <li><a href="beliefs.html">Africa</a></li>

                            </ul>
                          </li>

                        </ul>
                      </li> -->
                      <li class="has-children">
                        <a href="events.html">O nas</a>
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
              <h1>Najboljši opomnik <strong>RemindMe!</strong></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
