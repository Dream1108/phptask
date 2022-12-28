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
    <div class="container text-start">
        <h1>Page Produit</h1>
    </div>
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 row-cols-2 row-cols-md-4">
            <div class="col">
                <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                    <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg">
                        <i class="bi bi-person-circle"></i></div>
                    <div class="px-3">
                        <h2 class="fw-bold mb-0">+700</h2>
                        <p class="mb-0">Commandes</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                    <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg">
                        <i class="bi bi-person-circle"></i></div>
                    <div class="px-3">
                        <h2 class="fw-bold mb-0">3</h2>
                        <p class="mb-0">Systèmes de sécurité Paiement</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                    <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg">
                        <i class="bi bi-person-circle"></i></div>
                    <div class="px-3">
                        <h2 class="fw-bold mb-0">10</h2>
                        <p class="mb-0">Personnes disponibles en SAV</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                    <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg">
                        <i class="bi bi-person-circle"></i></div>
                    <div class="px-3">
                        <h2 class="fw-bold mb-0">24h</h2>
                        <p class="mb-0">Temps de livraison&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--FOOTER-->
<?php
    require_once('assets/config/footer/footer.php')
?>
<!--FIN FOOTER-->
</body>

</html>