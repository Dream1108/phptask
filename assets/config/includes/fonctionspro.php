<?php

function emptyInputSignup($prenom, $nom, $email, $mdp, $date, $telephone, $raisonsociale, $pays, $postal, $rue, $iban) {
    $result;
    if (empty($prenom) || empty($nom) || empty($email) || empty($mdp) || empty($date)|| empty($telephone) || empty($raisonsociale) || empty($pays) || empty($postal) || empty($rue) || empty($iban)) {
        $result = true;
    }
    else {
        $result = false; 
    }
    return $result; 

}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false; 
    }
    return $result; 

}

function emailExists($conn, $email) {
    $sql = "SELECT * FROM vendeur WHERE email_vendeur = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../../../inscriptionpro.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $prenom, $nom, $email, $mdp, $date, $telephone, $raisonsociale, $pays, $postal, $rue, $iban) {
    $sql = "INSERT INTO vendeur (prenom_vendeur, nom_vendeur, email_vendeur, mdp_vendeur, date_vendeur, telephone_vendeur, raisonsociale_vendeur, pays_vendeur, postal_vendeur, rue_vendeur, iban_vendeur) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../../../inscriptionpro.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssssssssss", $prenom, $nom, $email, $mdp, $date, $telephone, $raisonsociale, $pays, $postal, $rue, $iban);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:../../../inscriptionpro.php?error=none");
    exit();
}

function emptyInputLogin($email, $mdp) {
    $result;
    if (empty($email) || empty($mdp)) {
        $result = true;
    }
    else {
        $result = false; 
    }
    return $result; 

}

function LoginUser($conn, $email, $mdp) {


    
    $emailExists = emailExists($conn, $email);

    if($emailExists === false) {
    header("location:../../../formulaireidentificationpro.php?error=mauvaisidentifiant");
    exit();
    }

    $mdpbdd = $emailExists["mdp_vendeur"];
    

    

    if($mdpbdd != $mdp) {
    header("location:../../../formulaireidentificationpro.php?error=mauvaisidentifiant");
    exit();
    }
    
  else if($mdpbdd== $mdp) {
  session_start();
  $_SESSION["idclient"] = $emailExists["id_vendeur"];
  $_SESSION["emailclient"] = $emailExists["email_vendeur"];
  $_SESSION["typeclient"] = 1;
  header("location:../../../espaceadmin.php");
  exit();
  }
}

  ?>