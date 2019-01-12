<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "iroks";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
        header('Location: napaka.php');
}
?>
