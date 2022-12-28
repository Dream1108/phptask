<?php
// Connexion (adress, user, password, database, port)
$conn = new mysqli ("localhost", "root", "root", "dropnft", 3306);
if ($conn->connect_errno) {
    die("Erreur de connexion(".$conn_errno."): ".$connect_error);
}
?>