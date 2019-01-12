<?php
include("povezava_na_bazo.php");

$ime=$_POST["ime"];
$priimek=$_POST["priimek"];
$email=$_POST["email"];
$geslo=$_POST["geslo"];
$sqlStavek = "insert into Uporabniki (ime,priimek,email,geslo) values ('$ime','$priimek','$email','$geslo');";

if ($conn->query($sqlStavek) === TRUE) {
header("Location: ../index.php");

} else {
    echo "Error: " . $sqlStavek . "<br>" . $conn->error;
}

include("zapiranje_povezave_na_bazo.php");

die();
