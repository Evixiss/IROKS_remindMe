<?php

include '../povezava_na_bazo.php';

$idSeznama = $_POST['id'];

$sqlStavek = "DELETE FROM Seznami WHERE id ='$idSeznama'";

if ($conn->query($sqlStavek) === TRUE) {

header("Location: ../../prijavljen.php");

} else {

 header('Location: ../../napaka.php');
}


include '../zapiranje_povezave_na_bazo.php';
 ?>
