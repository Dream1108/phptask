<?php

if(isset($_POST["submit"])) {

    $email = $_POST["email"];
    $mdp = $_POST["mdp"];

    require_once 'connexionmysqli.php';
    require_once 'fonctionsadmin.php';

    if (emptyInputLogin($email, $mdp) !== false) {
        header("location:../../../formulaireidentificationadmin.php?error=emptyinput");
        exit();
        }

        LoginUser($conn, $email, $mdp);
}
else {
    header("location:../../../formulaireidentificationadmin.php");
    exit();
}
?>