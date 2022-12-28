<?php
session_start();
// S'il n'y pas de session, on se rends sur la page index 
if (!isset($_SESSION['idclient'])){
header('Location: index.php');
exit;
}
?>
<?php
    require_once('assets/config/head/include.php')
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

<!--Partie texte+bouton-->
    <div class="container">
        <h1>Merci pour votre achat !</h1>
        <p>Nous vous remercions pour votre achat et espérons vous revoir vite :)<br>Un soucis dans votre commande ?</p><a class="btn btn-primary" role="button" href="formulairecontact.html">Nous contacter</a>
    </div>
<!--Fin Partie texte+bouton-->

<!--IMAGE GIF-->
    <div class="container text-center"><img src="assets/img/singesucces.gif" style="margin-left: 0px;margin-bottom: 50px;margin-top: 20px;" width="500" height="500"></div>
<!--IMAGE GIF-->

<!--FOOTER-->
<?php
    require_once('assets/config/footer/footer.php')
?>
<!--FIN FOOTER-->
</body>

</html>