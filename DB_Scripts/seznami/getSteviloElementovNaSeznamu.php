<?php
include 'DB_Scripts/povezava_na_bazo.php';

$sqlStavek = "SELECT count(nazivElementa) FROM Elementi WHERE id IN (SELECT tk_element FROM seznami_elementi WHERE tk_seznam=$idSeznama);";

$result = $conn->query($sqlStavek);

if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
  $steviloVrstic = $row['count(nazivElementa)'];
}
}

include 'DB_Scripts/zapiranje_povezave_na_bazo.php';
 ?>
