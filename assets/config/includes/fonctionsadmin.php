<?php


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
    $sql = "SELECT * FROM gestionnaire WHERE email_gestionnaire = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../../../formulaireidentificationadmin.php?error=stmtfailed");
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
    header("location:../../../formulaireidentificationadmin.php?error=mauvaisidentifiant");
    exit();
    }

    $mdpbdd = $emailExists["mdp_gestionnaire"];
    


    if($mdpbdd != $mdp) {
    header("location:../../../formulaireidentificationadmin.php?error=mauvaisidentifiant");
    exit();
    }
    
  else if($mdpbdd== $mdp) {
  session_start();
  $_SESSION["idclient"] = $emailExists["id_gestionnaire"];
  $_SESSION["emailclient"] = $emailExists["email_gestionnaire"];
  header("location:../../../espaceadmin.php");
  exit();
  }
}
