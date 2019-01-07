<?php
include("DB_Scripts\povezava_na_bazo.php");

session_start();
if(!empty($_SESSION['logged_in']))
{
    header('Location: samoZaPrijavljene.php');
    exit;
}
session_destroy();

 ?>
<html>
<head>
  <title>Prijava</title>
</head>
<body>
       <?php

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
               header("location: samoZaPrijavljene.php");
            }elseif($count<1) {
               $napaka = '<p id="napaka"><h3 style="color: red;">Napačni vnosni podatki pri prijavi.</h3></p><br />';
            }
            else {
              $napaka = '<p id="napaka"><h3 style="color: red;">Prišlo je do napake na strežniku prosimo poizkusite kasneje</h3></p><br />';
           }
         }

       ?>
			 <form method="post" action="prijava.php">
				 <div class="col-md-6">
					  <input type="text" placeholder="E-mail" name="email" required/>
					  <input type="password" placeholder="Geslo" name="geslo" required/>
            <?php
            echo $napaka;
            ?>
            <input type="submit" value="Prijava"/>
				  </div>
			 </form>

</body>
</html>
<?php
include("DB_Scripts\zapiranje_povezave_na_bazo.php");
 ?>
