<?php
include("povezava_na_bazo.php");

$id = $_SESSION['id_uporabnika'];
$sqlStavek = "select * from Uporabniki where id='$id';";

$result = $conn->query($sqlStavek);

if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
  $ime = $row["ime"];
  $priimek = $row["priimek"];
  $email = $row["email"];
  $geslo = $row["geslo"];
}
}else {
  // echo "Error: " . $sqlStavek . "<br>" . $conn->error;

    header('Location: napaka.php');
}

include("zapiranje_povezave_na_bazo.php");
