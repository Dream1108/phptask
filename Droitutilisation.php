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
    <div class="container text-start">
        <h1>Nos droits d'utilisation</h1>
    </div>
<!--FIN TEXTE-->

<!--IMAGE 2 COLONNES TEXTE-->
    <div class="container py-4 py-xl-5">
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col"><img class="rounded w-100 h-100 fit-cover" style="min-height: 300px;" src="assets/img/imagesinge1.jpeg"></div>
            <div class="col d-flex flex-column justify-content-center p-4">
                <div class="text-center text-md-start d-flex flex-column align-items-center align-items-md-start mb-5">
                    <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon md">
                        <i class="bi bi-easel-fill"></i>
                    </div>
                    <div>
                        <h4>Le NFT n’est pas, juridiquement, une œuvre d’art</h4>
                        <p>La définition du NFT est simple, c’est un jeton non fongible représentant un actif physique ou numérique inscrit sur une blockchain permettant de certifier l’authenticité de cet actif et sa non-interchangeabilité.</p><a href="https://beaubourg-avocats.fr/nft-droit-dauteur/">En savoir plus<i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="text-center text-md-start d-flex flex-column align-items-center align-items-md-start mb-5">
                    <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon md">
                        <i class="bi bi-building"></i>
                    </div>
                    <div>
                        <h4>Quel est le contrôle exercé par les plateformes permettant l’émission de NFT ?</h4>
                        <p>Les plateformes de blockchain, comme par exemple OPENSEA ou PIANITY, prennent soin de prévoir dans leurs Conditions Générales d’Utilisation que le créateur de NFT garantit la plateforme qu’il ne porte pas atteinte au droit d’auteur.</p><a href="https://www.village-justice.com/articles/nft-ovni-juridique,41584.html/">En savoir plus<i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="text-center text-md-start d-flex flex-column align-items-center align-items-md-start mb-5">
                    <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon md">
                        <i class="bi bi-card-checklist"></i>
                    </div>
                    <div>
                        <h4>Conditions d'inscription</h4>
                        <p>Les artistes ou représentants souhaitant soumettre des œuvres à Dropnft doivent s’inscrire ou se connecter et compléter l’ensemble des informations requises.</p><a href="https://www.frenchnft.fr/conditions-generales-d-utilisation/">En savoir plus
                            <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FIN IMAGE 2 COLONNES TEXTE -->

<!--FOOTER-->
<?php
    require_once('assets/config/footer/footer.php')
?>
<!--FIN FOOTER-->
</body>

</html>