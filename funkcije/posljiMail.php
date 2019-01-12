<?php
// Pear Mail Library
require_once "Mail.php";

$from = '<mestniutripmaribo@gmail.com>';
$to = '<primoz98@gmail.com>';
$subject = 'RemindMe! - Uspešna registracija';
$body = "RemindMe!\n
\n
Čestitke ob registraciji na naši spletni strani.\n
\n
Vaše email za prijavo je: $email\nVaše geslo za prijavo je: $geslo";

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
    echo('<p>Message successfully sent!</p>');
}
?>
