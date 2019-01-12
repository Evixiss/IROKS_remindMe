<?php

include 'povezava_na_bazo.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form
   $ime = $_POST['ime'];
   $priimek = $_POST['priimek'];
   $email = $_POST['email'];
   $geslo = $_POST['geslo'];

   $sql = "UPDATE Uporabniki SET ime = '$ime', priimek = '$priimek', geslo='$geslo' WHERE email = '$email'";
   if ($conn->query($sql) === TRUE) {
 } else {
   header("Location: ../napaka.php");
     // echo "Vnosa ni bilo možno izbrisati: " . $conn->error;
 }
}
header ("Location: ../mojRacun.php");
include 'zapiranje_povezave_na_bazo.php';
 ?>
