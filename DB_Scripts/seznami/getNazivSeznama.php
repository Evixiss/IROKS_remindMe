<?php
include("DB_Scripts/povezava_na_bazo.php");

$sqlStavek = "SELECT nazivSeznama FROM Seznami WHERE id = '$idSeznama';";

$result = $conn->query($sqlStavek);

if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
  echo $row['nazivSeznama'];
}
}else {
  // echo "Error: " . $sqlStavek . "<br>" . $conn->error;

    header('Location: ../../napaka.php');
}


include("DB_Scripts/zapiranje_povezave_na_bazo.php");
 ?>
