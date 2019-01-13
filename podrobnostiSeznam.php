 <html>
 <head>
   <title>
     RemindMe &mdash; Dodaj elemente
   </title>
 <?php include("web/styleLinks.php");
 ?>
 </head>
 <body>
   <?php $idSeznama = $_GET['id']; ?>

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
     echo '<li class="has-children active"><a href="prijavljen.php">Pregled seznamov</a>
     <ul class="dropdown arrow-top">
     <li><a href="dodajSeznam.php">Dodaj seznam</a></li>
       </ul>
     </li>';
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
                   <h1>Dodaj stvari na seznam:<br /><strong>
<?php include("DB_Scripts/seznami/getNazivSeznama.php"); ?></strong></h1>
                 </div>
               </div>
             </div>
           </div>
         </div>

         <!-- Page content -->
         <div class="site-section bg-light">
           <div class="container">
             <div class="row align-items-center">

               <div class="col-md-12 col-lg-8 mb-5 p-5 bg-white">
                 <form action="DB_Scripts\seznami\dodajNovElementNaSeznam.php" method="post">
                   <div class="row form-group">
                     <div class="col-md-12 mb-3 mb-md-0">
                       <label class="font-weight-bold" for="nazivElementa">Dodaj nov element na seznam</label>
                       <input type="text" id="nazivElementa" maxlength="39" name="nazivElementa" class="form-control" placeholder="Naziv elementa" required>
                       <?php echo '<input type="text" name="idSeznama" hidden value="'.$idSeznama.'">'; ?>
                     </div>
                   </div>
                   <div class="row form-group">
                     <div class="col-md-12">
                       <input type="submit" value="Dodaj nov element" class="btn btn-primary pill px-4 py-2">
                     </div>
                   </div>
                 </form>
                  <br />

                  <?php include('DB_Scripts/seznami/getSteviloElementovNaSeznamu.php');
                  if($steviloVrstic > 0){

                   echo'<form action="DB_Scripts/seznami/odstraniElementIzSeznama.php" method="post"><div class="row form-group">
                     <div class="col-md-12 mb-3 mb-md-0">
                       <label class="font-weight-bold" for="nazivElementa">Izbriši element iz seznama</label>
                       <br/><select name="nazivElementa" class="form-control">';
                           include("DB_Scripts/seznami/getVsiElementiNaSeznamuOption.php");
                         echo'</select>
                         <input type="text" name="idSeznama" hidden value="'.$idSeznama.'">';
                     echo '</div>
                   </div>
                   <div class="row form-group">
                     <div class="col-md-4">
                       <input type="submit" value="Izbriši element iz seznama" class="btn btn-danger pill px-4 py-2">
                       <input type="text" name="idSeznama" hidden value="'.$idSeznama.'">
                     </div>

                 </div></form>
                 ';}
?>
               </div>


               <div class="col-lg-4">
                 <div class="p-4 mb-3 bg-white">
                   <h3 class="h5 text-black mb-3">Elementi ki so že na seznamu</h3>
                   <?php
                   include 'DB_Scripts/povezava_na_bazo.php';
                   include('DB_Scripts/seznami/getVsiElementiNaSeznamu.php');
                   include 'DB_Scripts/zapiranje_povezave_na_bazo.php';

?>
<br />
                 <div class="col-md-12">
                   <form action="DB_Scripts/seznami/izbrisiSeznam.php" method="post">
                     <?php echo '<input type="text" name="id" hidden value="'.$idSeznama.'"/>'; ?>
                     <input type="submit" value="Izbriši seznam" class="btn btn-danger pill px-4 py-2">
                   </form>
<br /><br />
                     <form action="DB_Scripts/seznami/deliSeznam.php" method="post">
                       <?php echo '<input type="text" name="idSeznama" hidden value="'.$idSeznama.'"/>'; ?>
                       <?php echo '<input type="text" name="id_uporabnika" hidden value="'.$_SESSION['id_uporabnika'].'"/>'; ?>
                       <input type="submit" value="&nbsp;&nbsp;Deli seznam&nbsp;&nbsp;" class="btn btn-warning pill px-4 py-2">
                     </form>
                   </div>
                 </div>
                 </div>



             </div>
           </div>
         </div>

 <?php
 include("sharedPageContent/footer.php");
  ?>

   </div>

 <?php include("web/scriptLinks.php");
  ?>
 </body>
 </html>
