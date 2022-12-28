<?php

function emptyInputSignup($prenom, $nom, $email, $mdp, $telephone, $raisonsociale, $pays, $postal, $rue, $iban) {
    $result;
    if (empty($prenom) || empty($nom) || empty($email) || empty($mdp) || empty($telephone) || empty($raisonsociale) || empty($pays) || empty($postal) || empty($rue) || empty($iban)) {
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
    $sql = "SELECT * FROM client WHERE email_client = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../../../inscriptionclient.php?error=stmtfailed");
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

function createUser($conn, $prenom, $nom, $email, $mdp, $telephone, $raisonsociale, $pays, $postal, $rue, $iban) {
    $sql = "INSERT INTO client (prenom_client, nom_client, email_client, mdp_client, telephone_client, raisonsociale_client, pays_client, postal_client, rue_client, iban_client) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../../../inscriptionclient.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssssssss", $prenom, $nom, $email, $mdp, $telephone, $raisonsociale, $pays, $postal, $rue, $iban);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:../../../inscriptionclient.php?error=none");
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
    header("location:../../../formulaireidentificationclient.php?error=mauvaisidentifiant");
    exit();
    }

    $mdpbdd = $emailExists["mdp_client"];
    

    

    if($mdpbdd != $mdp) {
    header("location:../../../formulaireidentificationclient.php?error=mauvaisidentifiant");
    exit();
    }
    
  else if($mdpbdd== $mdp) {
  session_start();
  $_SESSION["idclient"] = $emailExists["id_client"];
  $_SESSION["emailclient"] = $emailExists["email_client"];
  $_SESSION["typeclient"] = 2;
  header("location:../../../espaceclient.php");
  exit();
  }
}

  ?>