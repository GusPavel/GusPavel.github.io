<?php
$host = "localhost"; 
$db = "cv";
$user = "root";
$pass = "";

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_error) {
    die ("Connection failed: ".$mysqli->connect_errno);
}
?>