<html>
<head>
  <title>
    RemindMe &mdash; Moj Račun
  </title>
<?php include("web/styleLinks.php");
 ?>

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
    include("DB_Scripts/getUporabnik.php");
    if(empty($_SESSION['logged_in'])){
      header("Location: index.php");
    }
    else {
    echo '<li><a href="prijavljen.php">Pregled seznamov</a></li>';
echo '<li class="active"><a href="mojRacun.php">Moj račun</a></li>';
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
                  <h1><strong>Moj račun</strong></h1>
                </div>
              </div>
            </div>
          </div>
        </div>

                       <!-- Registracija forma -->
               <div class="site-section bg-light">
                 <div class="container">
                   <div class="row align-items-center">

                     <div class="col-md-12 col-lg-8 mb-5">
                       <form action="DB_Scripts/updateUporabnik.php" method="post" class="p-5 bg-white">

                         <div class="row form-group">
                           <div class="col-md-12 mb-3 mb-md-0">
                             <label class="font-weight-bold" for="ime">Ime</label>
<?php                         echo '<input type="text" id="ime" name="ime" class="form-control" placeholder="Ime" value="'.$ime.'" required>';
?>                           </div>
                         </div>

                         <div class="row form-group">
                           <div class="col-md-12 mb-3 mb-md-0">
                             <label class="font-weight-bold" for="priimek">Priimek</label>
<?php                             echo '<input type="text" id="priimek" name="priimek" class="form-control" placeholder="Priimek" value="'.$priimek.'" required>';
 ?>                           </div>
                         </div>

                         <div class="row form-group">
                           <div class="col-md-12">
                             <label class="font-weight-bold" for="email">Email</label>
<?php                       echo '<input type="email" id="email" name="email" class="form-control" placeholder="Email" value="'.$email.'" required>';
 ?>
                           </div>
                         </div>

                         <div class="row form-group">
                           <div class="col-md-12">
                             <label class="font-weight-bold" for="geslo">Geslo</label>
  <?php                           echo '<input type="password" id="geslo" name="geslo" class="form-control" placeholder="Geslo" value="'.$geslo.'">';
  ?>                     </div>
                         </div>

                         <!-- <div class="row form-group">
                           <div class="col-md-12">
                             <label class="font-weight-bold" for="message">Message</label>
                             <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
                           </div>
                         </div> -->

                         <div class="row form-group">
                           <div class="col-md-12">
                             <input type="submit" value="Posodobi" class="btn btn-primary pill px-4 py-2">
                           </div>
                         </div>


                       </form>
                     </div>

                     <!-- Desni del strani -->


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
