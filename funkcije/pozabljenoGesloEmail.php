<?php
include("../DB_Scripts/generirajNovoGeslo.php");
require_once "Mail.php";

$from = '<mestniutripmaribo@gmail.com>';
$subject = 'RemindMe! - Novo geslo';
$body = "RemindMe!\n
\n
Pošiljamo vam novo geslo, ki ste ga zahtevali.\n
\n
Vaše email za prijavo je: $email\nVaše geslo za prijavo je: $novoGeslo";

$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);
$host = "ssl://smtp.gmail.com";
$smtp = Mail::factory('smtp', array(
        'host' => $host,
        'port' => '465',
        'auth' => true,
        'username' => 'mestniutripmaribor@gmail.com',
        'password' => 'mestniutrip1',
    ));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    header('Location: ../napaka.php');
} else {
  header("Location: ../index.php");
}
?>
