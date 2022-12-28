<?php
session_start();
// S'il n'y pas de session, on se rends sur la page index 
if (!isset($_SESSION['idclient'])){
header('Location: index.php');
exit;
}
?>
<?php
    require_once('assets/config/head/include.php');
    var_dump($_SESSION['typeclient'])
?>

<!DOCTYPE html>
<html lang="fr">
<!--DEBUT head-->
<head>
<title>landingpage</title>
<?php
    require_once('assets/config/head/head.php')
?>
</head>
<!--FIN head-->
<body style="background: url(&quot;assets/img/bghomepage.png&quot;);">
    <a id="haut"></a>

<!--DEBUT NAVBAR-->
<?php
 if($_SESSION['typeclient'] == '2'){
     require('assets/config/menu/navbarconnecte2.php'); 
 } else { if($_SESSION['typeclient'] == '1') {
    require('assets/config/menu/navbarconnecte1.php'); 
 } else {
    require('assets/config/menu/navbarnonconnecte.php'); 
 }}
 ?>
<!--FIN NAVBAR-->

    <div class="container text-start">
        <h1>Welcome to your buyer page !</h1>
    </div>
    <div class="card" style="margin: auto; width: 50%;">
        <div class="card-header">
         Your personnal informations
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Modify your personnal informations</li>
        </ul>
      </div>
      <br>
      <div class="card" style="margin: auto; width: 50%;">
        <div class="card-header">
          My orders
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">check the status of your order</li>
          <li class="list-group-item">download my invoice in pdf</li>
        </ul>
      </div>
      <br>
      <div class="card" style="margin: auto; width: 50%;">
        <div class="card-header">
          Contact
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Message box</li>
        </ul>
      </div>
<!--FOOTER-->
<?php
    require_once('assets/config/footer/footer.php')
?>
<!--FIN FOOTER-->
</body>

</html>