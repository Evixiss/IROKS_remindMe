<?php
$nazivdatoteke = "deljeno/".substr(md5(microtime()),rand(0,26),10).".php";
$datoteka = fopen($nazivdatoteke, "w");
$prvaVrstica ="PrvaVrsticaDatoteke<br />
Druga
<br />
Vrstica";
fwrite($datoteka, $prvaVrstica);
header('Location:'.$nazivdatoteke);
 ?>
