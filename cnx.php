<?php
include 'config.php';


if (isset($_POST['login_conn'])) {
    $id = $_POST['login_conn'] ?? '';
    $login = $_POST['password_conn'] ?? '';

    $sql = "SELECT * FROM adhérent WHERE login='$login' and idAderant='$id' ";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
       
            require 'index.html';
        
    } else {
        $message_login = "Identifiant ou Login inexistant.";
        echo($message_login);
    }
}
?>