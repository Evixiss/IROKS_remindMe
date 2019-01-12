<html>
<head>
  <title>
    RemindMe &mdash; Index
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
                          <li class="active">
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
                  <h1>Najboljši opomnik <strong>RemindMe!</strong></h1>
                </div>
              </div>
            </div>
          </div>
        </div>


    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">

              <div class="img-border">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <span class="icon-wrap">
                    <span class="icon icon-play"></span>
                  </span>
                  <img src="web/images/about_3.jpg" alt="" class="img-fluid">
                </a>
              </div>

          </div>
          <div class="col-md-5 ml-auto">
            <h2 class="h2 mb-3">O našem projektu</h2>
            <p class="h5 mb-3">Projekt se opravlja pri predmetu IROKS</p>
            <p class="mb-4">Tema projekta je aplikacija RemindMe!, s katero imamo namen opraviti težave na katere naletimo, ko se kam odpravljamo. S pomočjo aplikacije, si lahko shranimo vse kar potrebujemo.</p>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section site-block-feature bg-light">
      <div class="container">
        <div class="d-block d-md-flex border-bottom">
          <div class="text-center p-4 item border-right">
            <span class="flaticon-paper-plane display-3 mb-3 d-block text-primary"></span>
            <h2 class="h5 text-uppercase">Problem</h2>
            <p>Zagotovo ste se kam odpravili in ste nato, ko ste prispeli na cilj ugotovili, da vam nekaj manjka. Naša naloga je da se to nebi zgodilo.</p>
            <p><a href="oNasemProjektu.php">Preberite več <span class="icon-arrow-right small"></span></a></p>
          </div>
          <div class="text-center p-4 item">
            <span class="flaticon-avatar display-3 mb-3 d-block text-primary"></span>
            <h2 class="h5 text-uppercase">Ekipa</h2>


              <div class="d-flex block-testimony stopar1">
                <div class="person mr-3">
                  <img src="web/images/3.jpg" alt="Image" class="img-fluid rounded-circle">
                </div>
                <div class="stopar1"><br />
                  <h2 class="h5">Nejc Vnuk <br /> OFR</h2>
                </div>
            </div>

<br />

            <div class="d-flex block-testimony stopar1">
              <div class="person mr-3">
                <img src="web/images/1.jpg" alt="Image" class="img-fluid rounded-circle">
              </div>
              <div><br />
                <h2 class="h5">Primož Stopar <br /> CEO</h2>
              </div>
          </div>

<br />
            <p><a href="oEkipi.php">Preberite več <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
        </div>
      </div>




    <!-- <div class="site-section block-15">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2>Recent Events</h2>
          </div>
        </div>


        <div class="nonloop-block-15 owl-carousel">


            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <img src="web/images/img_1.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Church Bible Study</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>

            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <img src="web/images/img_2.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Church Building Accomplishments in January 2018</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>

            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <img src="web/images/img_3.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Learn How To Pray</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>

            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <img src="web/images/img_1.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Church Bible Study</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>

            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <img src="web/images/img_2.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Church Building Accomplishments in January 2018</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>

            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <img src="web/images/img_3.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Learn How To Pray</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>

            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <img src="web/images/img_1.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Church Bible Study</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>

            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <img src="web/images/img_2.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Church Building Accomplishments in January 2018</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>

            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <img src="web/images/img_3.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Learn How To Pray</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>



        </div> -->

        <div class="row">

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
