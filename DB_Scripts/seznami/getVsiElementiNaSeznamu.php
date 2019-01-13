<?php

$sqlStavek = "SELECT nazivElementa FROM Elementi WHERE id IN (SELECT tk_element FROM seznami_elementi WHERE tk_seznam=$idSeznama);";

$result2 = $conn->query($sqlStavek);

if ($result2->num_rows > 0) {

while($row = $result2->fetch_assoc()) {
  echo '<p class="mb-0 font-weight-bold">'.$row['nazivElementa'].'</p>';
}
}else {
  echo '<p class="mb-0 font-weight-bold">Ni elementov na seznamu.</p>';
}


 ?>
