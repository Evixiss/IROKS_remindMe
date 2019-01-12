<?php
include("povezava_na_bazo.php");

$ime=$_POST["ime"];
$priimek=$_POST["priimek"];
$email=$_POST["email"];
$geslo=$_POST["geslo"];
$sqlStavek = "insert into Uporabniki (ime,priimek,email,geslo) values ('$ime','$priimek','$email','$geslo');";

if ($conn->query($sqlStavek) === TRUE) {

include '../funkcije/posljiMail.php';
header("Location: ../index.php");

} else {
    header('Location: ../napaka.php');
}

include("zapiranje_povezave_na_bazo.php");

die();
