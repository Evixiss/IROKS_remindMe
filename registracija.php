<!-- <form method="post" action="DB_Scripts/dodajUporabnika.php">
  <input name="email">
  <input name="geslo">
  <button type="submit">Potrdi!</button>
</form> -->
<?php
include("DB_Scripts\povezava_na_bazo.php");
?>
 <head>
   <title>
     Registracija
   </title>
 </head>
     <form method="post" action="DB_Scripts/dodajUporabnika.php">
       <div class="col-md-6">
         <input type="text" placeholder="Ime" name="ime" required />
         <input type="text" placeholder="Priimek" name="priimek" required />
          <input type="text" placeholder="E-mail" name="email" required/>
          <input type="password" placeholder="Geslo" name="geslo" required/>
          <input type="submit" value="Registracija"/>
        </div>
     </form>
