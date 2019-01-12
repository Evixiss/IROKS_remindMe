<?php
include("DB_Scripts\povezava_na_bazo.php");
include("web/styleLinks.php");
?>
 <head>
   <title>
     RemindMe &mdash; Registracija
   </title>
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
                           <li><a href="oNasemProjektu.php">O projektu</a></li>
                           <li><a href="oEkipi.php">O ekipi</a></li>
                         </ul>
                       </li>
   <?php
   session_start();
   if(empty($_SESSION['logged_in'])){
     echo '<li><a href="prijava.php">Prijava</a></li>';
     echo '<li class="active"><a href="registracija.php">Registracija</a></li>';

   }
   else {
     header("Location:samoZaPrijavljene.php");
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
                         <h1><strong>Registracija</strong></h1>
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
               <form action="DB_Scripts/dodajUporabnika.php" method="post" class="p-5 bg-white">

                 <div class="row form-group">
                   <div class="col-md-12 mb-3 mb-md-0">
                     <label class="font-weight-bold" for="ime">Ime</label>
                     <input type="text" id="ime" name="ime" class="form-control" placeholder="Ime">
                   </div>
                 </div>

                 <div class="row form-group">
                   <div class="col-md-12 mb-3 mb-md-0">
                     <label class="font-weight-bold" for="priimek">Priimek</label>
                     <input type="text" id="priimek" name="priimek" class="form-control" placeholder="Priimek">
                   </div>
                 </div>

                 <div class="row form-group">
                   <div class="col-md-12">
                     <label class="font-weight-bold" for="email">Email</label>
                     <input type="email" id="email" name="email" class="form-control" placeholder="Email naslov">
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
                     <input type="submit" value="Registracija" class="btn btn-primary pill px-4 py-2">
                   </div>
                 </div>


               </form>
             </div>

             <!-- Desni del strani -->

             <div class="col-lg-4">
               <div class="p-4 mb-3 bg-white">
                 <h3 class="h5 text-black mb-3">Kontakt</h3>
                 <p class="mb-0 font-weight-bold">Naslov</p>
                 <p class="mb-4">Koroška cesta 46, 2000 Maribor, Slovenija</p>

                 <p class="mb-0 font-weight-bold">Telefon:</p>
                 <p class="mb-4"><a href="#">070 123 456</a></p>

                 <p class="mb-0 font-weight-bold">Email naslov:</p>
                 <p class="mb-0"><a href="#">kontakt@remindme.com</a></p>

               </div>

               <!-- <div class="p-4 mb-3 bg-white">
                 <h3 class="h5 text-black mb-3">More Info</h3>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur? Fugiat quaerat eos qui, libero neque sed nulla.</p>
                 <p><a href="#" class="btn btn-primary px-4 py-2 text-white pill">Learn More</a></p>
               </div> -->
             </div>
           </div>
         </div>
       </div>

   </div>

   <?php
   include("sharedPageContent/footer.php");
   include("DB_Scripts/zapiranje_povezave_na_bazo.php");
   include("web/scriptLinks.php"); ?>

</body>
</html>
