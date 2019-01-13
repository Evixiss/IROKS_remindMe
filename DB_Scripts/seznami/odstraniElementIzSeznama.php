<?php
include '../povezava_na_bazo.php';

$nazivElementa = $_POST['nazivElementa'];
$nazivSeznama = $_POST['idSeznama'];

$sqlStavek = "DELETE FROM seznami_elementi WHERE tk_element =
                                                              (select id from elementi where nazivElementa = '$nazivElementa' limit 1)
                                                              AND tk_seznam = '$nazivSeznama';
                                                              ";

if ($conn->query($sqlStavek) === TRUE) {

  header('Location: ../../podrobnostiSeznam.php?id='.$nazivSeznama);

} else {

 header('Location: ../../napaka.php');
}


include '../zapiranje_povezave_na_bazo.php';
 ?>
