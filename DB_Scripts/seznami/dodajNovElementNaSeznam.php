<?php
include("../povezava_na_bazo.php");

$nazivElementa = $_POST['nazivElementa'];
$idSeznama = $_POST['idSeznama'];
$sqlStavek = "INSERT INTO Elementi (nazivElementa) values ('$nazivElementa');";

if ($conn->query($sqlStavek) === TRUE) {
  $sqlStavek3 = "select * from Elementi where nazivElementa='$nazivElementa';";
  $result = $conn->query($sqlStavek3);
  if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $idElementa = $row["id"];
  }
  }else {
 // echo "Error: " . $sqlStavek . "<br>" . $conn->error;
      header('Location: ../../napaka.php');
  }



$sqlStavek2 = "INSERT INTO Seznami_Elementi (tk_seznam, tk_element) values ($idSeznama,$idElementa);";
if ($conn->query($sqlStavek2) === TRUE) {
    header('Location: ../../podrobnostiSeznam.php?id='.$idSeznama);
} else {
  // echo "Error: " . $sqlStavek . "<br>" . $conn->error;
 header('Location: ../../napaka.php');
}
}
include("../zapiranje_povezave_na_bazo.php");
 ?>
