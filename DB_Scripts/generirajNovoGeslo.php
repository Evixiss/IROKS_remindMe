<?php
$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
$pass = array(); //remember to declare $pass as an array
$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
for ($i = 0; $i < 8; $i++) {
    $n = rand(0, $alphaLength);
    $pass[] = $alphabet[$n];
}
$novoGeslo = implode($pass); //turn the array into a string

   $sql = "UPDATE Uporabniki SET geslo = '$novoGeslo' WHERE email = '$email'";
   if ($conn->query($sql) === TRUE) {
 } else {
   header("Location: ../napaka.php");
     // echo "Vnosa ni bilo možno izbrisati: " . $conn->error;
 }

 ?>
