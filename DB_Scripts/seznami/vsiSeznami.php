<?php
include("DB_Scripts/povezava_na_bazo.php");


$id=$_SESSION["id_uporabnika"];
$sqlStavek = "SELECT * FROM Seznami WHERE tk_idUporabnik = $id;";

// if ($conn->query($sqlStavek) === TRUE) {
//
// header("Location: ../../prijavljen.php");
//
// } else {
//
//  header('Location: ../../napaka.php');
// }
$form ='\'form\'';
$i=6454323;
$result = $conn->query($sqlStavek);

if ($result->num_rows > 0) {
echo '<div class="row justify-content-center" data-aos="fade" data-aos-delay="100"><div class="col-md-8"><div class="accordion unit-8" id="accordion">';
while($row = $result->fetch_assoc()) {
  $idSeznama = $row['id'];
  $i = $i +1;

  echo '<div class="accordion-item"><form action="podrobnostiSeznam.php" method="get">
  <input type="text" name="id" hidden value="'.$row['id'].'"/>';
    echo '<h3 class="mb-0 heading">
           <a class="btn-block" data-toggle="collapse" href="#'."collapse".$i.'" role="button" aria-expanded="false" aria-controls="'."collapse".$i.'">'.$row['nazivSeznama'].'<span class="icon"></span></a></h3><div id="'."collapse".$i.'" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordion">
           <div class="body-text">';
              include('DB_Scripts/seznami/getVsiElementiNaSeznamu.php');
           echo ' <a href="#" onclick="$(this).closest('.$form.').submit();"><p>Uredi seznam</p></a></div></div></form></div>';
}
}else {
    echo "Trenutno še nimate nobenega seznama.";

    // header('Location: ../../napaka.php');
}

echo '</div></div></div>';

include("DB_Scripts/zapiranje_povezave_na_bazo.php");
 ?>
