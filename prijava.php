<?php
include("DB_Scripts\povezava_na_bazo.php");
include("web/styleLinks.php");

session_start();


            $napaka = '<p id="napaka" hidden>Napačni vnosni podatki pri prijavi.</p>';
         if($_SERVER["REQUEST_METHOD"] == "POST") {
            // username and password sent from form


            $uporabniskoIme = $_POST['email'];
            $mypassword = $_POST['geslo'];

            $sql = "SELECT id FROM Uporabniki WHERE email = '$uporabniskoIme' and geslo = '$mypassword'";
            $result = $conn->query($sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);

            // If result matched $uporabniskoIme and $mypassword, table row must be 1 row

            if($count == 1) {
               $_SESSION['login_user'] = $uporabniskoIme;
                $_SESSION['logged_in'] = 'YES';
                $napaka = '<p id="napaka">Prijava je uspešna</p>';
               // header("location: samoZaPrijavljene.php");
            }elseif($count<1) {
               $napaka = '<p id="napaka"><h3 style="color: red;">Napačni vnosni podatki pri prijavi.</h3></p><br />';
            }
            else {
              $napaka = '<p id="napaka"><h3 style="color: red;">Prišlo je do napake na strežniku prosimo poizkusite kasneje</h3></p><br />';
           }
         }







$jeZePrijavlen = "";
if(!empty($_SESSION['logged_in']))
{
    header('Location: samoZaPrijavljene.php');
    exit;
}
else {
$jeZePrijavlen= '<li class="active"><a href="prijava.php">Prijava</a></li>
    <li ><a href="registracija.php">Registracija</a></li>';
}

 ?>
<html>
<head>
  <title>RemindMe &mdash; Prijava</title>
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
                            <a href="oNasemProjektu.php">O nas</a>
                          <ul class="dropdown arrow-top">
                          <li><a href="projekt/oNasemProjektu.php">O projektu</a></li>
                          <li><a href="projekt/oEkipi.php">O ekipi</a></li>
                        </ul>
                      </li>
  <?php
echo $jeZePrijavlen;
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
                        <h1><strong>Prijava</strong></h1>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


      <div class="site-section">
        <div class="container">
          <div class="row align-items-center">

<!-- Registracija forma -->
            <div class="col-md-12 col-lg-8 mb-5">
              <form action="prijava.php" method="post" class="p-5 bg-white">

                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="font-weight-bold" for="email">Email</label>
                    <!-- SPODAJ MORE BIT EMAIL NAMESTO TEXT -->
                    <input type="text" id="email" name="email" class="form-control" placeholder="Email naslov">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="font-weight-bold" for="geslo">Geslo</label>
                    <input type="password" id="geslo" name="geslo" class="form-control" placeholder="Geslo">
                  </div>
                </div>

                <!-- <div class="row form-group">
                  <div class="col-md-12">
                    <label class="font-weight-bold" for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
                  </div>
                </div> -->

                <div class="row form-group">
                  <div class="col-md-12">
                    <input type="submit" value="Prijava" class="btn btn-primary pill px-4 py-2">
                  </div>
                </div>


              </form>
            </div>

          </div>
        </div>
      </div>

  </div>

<?php
include("sharedPageContent/footer.php");
include("DB_Scripts/zapiranje_povezave_na_bazo.php");
include("web/scriptLinks.php");
 ?>
</body>
 </html>
