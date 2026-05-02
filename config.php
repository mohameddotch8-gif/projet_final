<?php
$host = "localhost";
$user = "root";       
$pass = "";         
$db   = "database galaxy_gym";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}
?>
