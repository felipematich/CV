<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$mail = $_POST['email'];
$question = $_POST['textarea'];

$question = "This message has been sent by: " . $name . ",\r\n";
$question = "His/Her surname is: " . $surname . ",\r\n";
$question = "His/Her email is: " . $mail . ",\r\n";
$question = "Question: " . $_POST['question'] . ",\r\n";
$question = "Sent on: " . date('d/m/Y', time());

$addressee = 'felipematich@gmail.com';
$affair = 'This email has been sent from CV page';

mail($addressee, $affair, utf8_decode($question));


?>