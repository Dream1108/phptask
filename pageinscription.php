
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
        <h1>Inscrivez-vous dans votre espace !</h1>
    </div>
<!--FIN TEXTE-->

<!--2 CARDS QUI BOUGENT-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card"><img class="card-img w-100 d-block" src="assets/img/imageidentification1.png">
                        <div class="card-img-overlay">
                            <h4 class="text-white">Vous souhaitez devenir client ?</h4><a class="btn btn-primary" role="button" href="inscriptionclient.php">Création Espace Particulier</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card"><img class="card-img w-100 d-block" src="assets/img/imageidentification2.png">
                        <div class="card-img-overlay">
                            <h4 class="text-white">Vous souhaitez devenir vendeur ?</h4><a class="btn btn-primary" role="button" href="inscriptionpro.php"> Création Espace Professionnel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--FIN 3 CARDS QUI BOUGENT-->

<!--FOOTER-->
<?php
    require_once('assets/config/footer/footer.php')
?>
<!--FIN FOOTER-->
</body>

</html>