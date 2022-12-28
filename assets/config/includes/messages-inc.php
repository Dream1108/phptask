<?php

if(isset($_POST["submit"])) {

    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];
    $telephone = $_POST["telephone"];
    $raisonsociale = $_POST["raisonsociale"];
    $pays = $_POST["pays"];
    $postal = $_POST["postal"];
    $rue = $_POST["rue"];
    $iban = $_POST["iban"];

    require_once 'connexionmysqli.php';
    require_once 'fonctionsclient.php';

    if (emptyInputSignup($prenom, $nom, $email, $mdp, $telephone, $raisonsociale, $pays, $postal, $rue, $iban) !== false) {
    header("location:../../../inscriptionclient.php?error=emptyinput");
    exit();
    }
    if (invalidEmail($email) !== false) {
    header("location:../../../inscriptionclient.php?error=invalidemail");
    exit();
     }
    if (emailExists($conn, $email) !== false) {
    header("location:../../../inscriptionclient.php?error=emailexists");
    exit();
     }
    
     createUser($conn, $prenom, $nom, $email, $mdp, $telephone, $raisonsociale, $pays, $postal, $rue, $iban);

}
else {
    header("location:../../../inscriptionclient.php");
    exit();
}
?>