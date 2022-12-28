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

<!--TEXTE-->
    <div class="container text-center">
        <h1>Faites votre choix !</h1>
    </div>
<!--FIN TEXTE-->


<!--2 CARDS QUI BOUGENT-->
    <section>
        <div class="container">
            <div class="row gx-3">
                <div class="col-md-6" style="margin-bottom: 20px;">
                    <div class="card"><img class="card-img w-100 d-block" src="assets/img/singecatalogue.png">
                        <div class="card-img-overlay">
                            <h4 class="text-white">Accéder au catalogue</h4>
                            <p class="text-white">Retrouvez notre collection</p><button class="btn btn-primary" type="button">Accéder à la boutique<i class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="margin-bottom: 20px;">
                    <div class="card"><img class="card-img w-100 d-block" src="assets/img/imagesinge2.jpeg">
                        <div class="card-img-overlay">
                            <h4 class="text-dark">Accéder à votre espace perso</h4>
                            <p class="text-dark">Retrouvez toutes les informations concernant votre compte</p><button class="btn btn-primary" type="button">Accéder à mon espace perso<i class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--FIN 2 CARDS QUI BOUGENT-->

<!--PHOTO + BOUTON-->
    <section>
        <div class="container py-4 py-xl-5">
            <div class="row gy-4 gy-md-0">
                <div class="col-md-6">
                    <div class="p-xl-5 m-xl-5"><img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;" src="assets/img/imagesinge3.png" width="444" height="444"></div>
                </div>
                <div class="col-md-6 d-md-flex align-items-md-center">
                    <div style="max-width: 350px;">
                        <h2 class="fw-bold">Une nouvelle collection arrive !</h2>
                        <p class="my-3">On se répète mais venez vite sur notre catalogue !</p><a class="btn btn-primary btn-lg me-2" role="button" href="catalogueproduitclient.php">Notre boutique</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--PHOTO + BOUTON-->

<!--FOOTER-->
<?php
    require_once('assets/config/footer/footer.php')
?>
<!--FIN FOOTER-->
</body>

</html>