<?php

if(isset($_POST["submit"])) {

    $email = $_POST["email"];
    $mdp = $_POST["mdp"];

    require_once 'connexionmysqli.php';
    require_once 'fonctionspro.php';

    if (emptyInputLogin($email, $mdp) !== false) {
        header("location:../../../formulaireidentificationpro.php?error=emptyinput");
        exit();
        }

        LoginUser($conn, $email, $mdp);
}
else {
    header("location:../../../formulaireidentificationpro.php");
    exit();
}
?>