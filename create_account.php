<?php
include 'config.php';
$noma  = $_POST['name'] ?? '';
$prenoma = $_POST['surname'] ?? '';
$logina  = $_POST['login'] ?? '';
$passworda = $_POST['password'] ?? '';
$poidsa = $_POST['poids'] ?? '';
$sexea   = $_POST['sexe'] ?? '';
$conn = new mysqli("localhost", "root", "", "database galaxy_gym");
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}
$d=date("Y-m-d");
$sql = "INSERT INTO adhérent
        VALUES ('$logina','$d','$noma', '$prenoma', '$passworda', '$poidsa', '$sexea')";

if ($conn->query($sql) === TRUE) {
    echo "Compte créé avec succès";
} else {
    echo "Erreur : " . $conn->error;
}
?>