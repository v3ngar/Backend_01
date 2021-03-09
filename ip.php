<?php
// PHP code goes here
$remoteUser = $_SERVER['REMOTE_USER'];
$serverPort = $_SERVER['SERVER_PORT'];
$serverSoftware = $_SERVER['SERVER_SOFTWARE'];

print("<p> Du är användare" . $remoteUser . " och du snurrar på server port:" . $serverPort . " Mjukvaran som servern använder är: " . $serverSoftware . "<p>");
?>