
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
    print_r($_SESSION['typeclient']);
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
        <h1>Bienvenue sur votre Espace Admin!</h1>
    </div>
<!--FIN NAVBAR-->
<div class="card" style="margin: auto; width: 50%;">
    <div class="card-header">
      My tasks
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Notifications from back office (an order has been created, message has arrived, a product is out of stock)</li>
      <li class="list-group-item">Notifications from the back office</li>
    </ul>
  </div>
  <br>
<div class="card" style="margin: auto; width: 50%;">
    <div class="card-header">
      My dashboard
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Summary table of the sales by month</li>
    </ul>
  </div>
  <br>
  <div class="card" style="margin: auto; width: 50%;">
    <div class="card-header">
      My orders
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">A table containing all the orders pasted (you can filtered by month, week)</li><!--each order will have a status (check out our specifications in details, in this page you can move the order from one status to another-->
      <li class="list-group-item">Download an order as a PDF</li>
    </ul>
  </div>
  <br>
<div class="card" style="margin: auto; width: 50%;">
    <div class="card-header">
      Mes produits
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><a href="pagesupprimerproduit.php">Voir/Supprimer vos produits</a></li>
      <li class="list-group-item"><a href="pageajouterproduit.php">Ajouter un produit</a></li>
      <li class="list-group-item"><a href="#">Modifier les informations d'un produit</a></li>
    </ul>
  </div>
  <br>
  <div class="card" style="margin: auto; width: 50%;">
    <div class="card-header">
      Contact
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Message box(receive and respond to the client messages)</li>
    </ul>
  </div>
<!--FIN NAVBAR-->

<!--FOOTER-->
<?php
    require_once('assets/config/footer/footer.php') 
?>
<!--FIN FOOTER-->
</body>

</html>