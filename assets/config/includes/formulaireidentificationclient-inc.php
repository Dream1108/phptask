<?php

if(isset($_POST["submit"])) {

    $email = $_POST["email"];
    $mdp = $_POST["mdp"];

    require_once 'connexionmysqli.php';
    require_once 'fonctionsclient.php';

    if (emptyInputLogin($email, $mdp) !== false) {
        header("location:../../../formulaireidentificationclient.php?error=emptyinput");
        exit();
        }

        LoginUser($conn, $email, $mdp);
}
else {
    header("location:../../../formulaireidentificationclient.php");
    exit();
}
?>