<?php

include("povezava_na_bazo.php");
$ime = "";
$priimek = "";
$email = $_POST["email"];
$geslo = "";

$sqlStavek = "select * from Uporabniki where email='$email';";

$result = $conn->query($sqlStavek);

if ($result->num_rows > 0) {

$row = $result->fetch_assoc();

  $ime = $row["ime"];
  $priimek = $row["priimek"];
  $email = $row["email"];
  $geslo = $row["geslo"];

$to = $email;
include("../funkcije/pozabljenoGesloEmail.php");
}else {
    // header('Location: napaka.php');
    header("Location: ../index.php");
}

include("zapiranje_povezave_na_bazo.php");
 ?>
