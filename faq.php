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
        <h1>Notre FAQ</h1>
    </div>
<!--FIN TEXTE-->

<!--3 ROW + TEXTE -->
    <section>
        <div class="container py-4 py-xl-5">
            <div class="row">
                <div class="col-md-8 col-xl-6 mx-auto p-4">
                    <div class="d-flex align-items-center align-items-md-start align-items-xl-center">
                        <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center me-4 d-inline-block bs-icon xl">
                            <i class="bi bi-question-circle"></i>
                        </div>
                        <div>
                            <h4>Qu'est ce qu'un NFT ?</h4>
                            <p>Un NFT, ou jeton non fongible, est un élément cryptographique et virtuel sur la blockchain avec des codes d'identification uniques et des métadonnées (auteur, signature, date, type, identifiant...) qui le distinguent des autres NFT. Chaque NFT est donc unique.</p><a href="https://faq.gaspardetjoseph.fr/faq/quest-ce-quun-nft">En savoir plus<i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <hr class="my-5">
                    <div class="d-flex align-items-center align-items-md-start align-items-xl-center">
                        <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center order-last ms-4 d-inline-block bs-icon xl">
                            <i class="bi bi-building"></i>
                        </div>
                        <div>
                            <h4>Comment vendre ses NFT achetés sur la plateforme ?</h4>
                            <p>Vous avez la possibilité de proposer à la vente les NFT que vous avez acquis lors des drops. Il vous suffit de les mettre en vente sur le marché secondaire grâce à la marketplace du site.</p><a href="https://faq.gaspardetjoseph.fr/faq/comment-vendre-ses-nft-achetes-sur-la-plateforme">En savoir plus<i class="bi bi-arrow-right"></i></a>
                            </a>
                        </div>
                    </div>
                    <hr class="my-5">
                    <div class="d-flex align-items-center align-items-md-start align-items-xl-center">
                        <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center me-4 d-inline-block bs-icon xl"> <i class="bi bi-binoculars"></i>
                        </div>
                        <div>
                            <h4>Qu’est ce qu’un ‘drop' de NFT ?<br></h4>
                            <p>Un drop NFT est la mise sur le marché d'un projet de jeton non fongible. Un 'drop' fait référence aux caractéristiques de cette mise en vente : la date, l'heure le prix d'achat du NFT, le nombre d'exemplaires créés (mints) et éventuellement la limite d'achat en nombre d'exemplaires par transaction ou par utilisateur.</p><a href="https://faq.gaspardetjoseph.fr/faq/quest-ce-quun-drop-de-nft">En savoir plus<i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--3 COLONNES + TEXTE-->

<!--FOOTER-->
<?php
    require_once('assets/config/footer/footer.php')
?>
<!--FIN FOOTER-->
</body>

</html>