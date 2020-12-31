<?php

$passwort = 'san4m1s';
$passwort_hashed = '';
$passwort_verified = 'Nein';

$passwort_hashed = password_hash($passwort, PASSWORD_DEFAULT, ['cost' => 10]);

echo ('Passwort: '.$passwort.'<br/>');
echo ('Hashed: '.$passwort_hashed.'<br/><br/>');

?>