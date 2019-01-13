<?php
include("../povezava_na_bazo.php");

session_start();

$nazivSeznama = $_POST["nazivSeznama"];

$id=$_SESSION["id_uporabnika"];
$sqlStavek = "insert into Seznami (tk_idUporabnik,nazivSeznama) values ('$id','$nazivSeznama');";

if ($conn->query($sqlStavek) === TRUE) {

header("Location: ../../prijavljen.php");

} else {

 header('Location: ../../napaka.php');
}
include("../zapiranje_povezave_na_bazo.php");
 ?>
