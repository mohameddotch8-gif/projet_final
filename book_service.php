<?php
include 'config.php';
$services = [
    'musculation' => ['name' => 'Musculation', 'price' => 50, 'adress' => 'Nabeul'],
    'fitness'     => ['name' => 'Fitness', 'price' => 100, 'adress' => 'Nabeul'],
    'cardio'      => ['name' => 'Cardio Training', 'price' => 70, 'adress' => 'Nabeul']
];
$nom = $_POST['name'] ?? '';
$prenom = $_POST['surname'] ?? '';
$sportKey = $_POST['sport'] ?? '';
$date_reservation = date("Y-m-d");
$sport = $services[$sportKey]['name'];
$prix = $services[$sportKey]['price'];
$adress = $services[$sportKey]['adress'];
$sql = "INSERT INTO paiement (nom, prenom, sport, prix, adress)
        VALUES ('$nom', '$prenom', '$sport', $prix, '$adress')";
if ($conn->query($sql)) {
    echo "<h1 style='color:green;'>Réservation enregistrée ✔️</h1>";
    echo("<table border='2'>");
    echo("<tr><td>$nom</td><td>$prenom</td><td>$prix</td><td>$date_reservation</td><td>$sport</td><td>$adress</td>");
    echo("</table>");
    echo "<a href='formular.php'>Retour</a>";
} else {
    echo "Erreur : " . $conn->error;
}
$conn->close();
?>
