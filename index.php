<?php
    error_reporting(E_ERROR | E_PARSE);
    
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

<!--CAROUSEL BANNIERE-->
    <section>
        <div>
            <div class="carousel slide" data-bs-ride="false" id="carousel-1">
                <div class="carousel-inner">
                    <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/banner1.jpeg" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="assets/img/banner2.jpg" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="assets/img/banner3.jpg" alt="Slide Image"></div>
                </div>
                <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Précédent</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Suivant</span></a></div>
                <ol class="carousel-indicators">
                    <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </section>
<!--FIN CAROUSEL BANNIERE-->

<!--3 CARDS-->
    <section>
        <div>
            <div class="container py-4 py-xl-5">
                <div class="row mb-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h2>Un marketplace inédit sur le marché actuel</h2>
                        <p class="w-lg-50">Retrouvez des NFTs connus et amateurs vendus par des professionnels du marché à destination des particuliers qui souhaitent acquérir et développer leur portefeuille Crypto</p>
                    </div>
                </div>
                <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                    <div class="col">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center d-inline-block mb-3 bs-icon">
                                    <i class="bi bi-lock-fill"></i></div>
                                <h4 class="card-title">Vos achats en toute sécurité<br></h4>
                                <p class="card-text">Grâce à notre système Blockchain 5.0 même la Nasa ne peut pas avoir accès à votre portefeuille&nbsp;&nbsp;</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center d-inline-block mb-3 bs-icon">
                                    <i class="bi bi-person-circle"></i></div>
                                <h4 class="card-title">Une communauté d'experts&nbsp;<br></h4>
                                <p class="card-text">Notre plateforme permet de faciliter les échanges en B2C mais également vous aider dans vos choix&nbsp;</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center d-inline-block mb-3 bs-icon">
                                    <i class="bi bi-card-image"></i></div>
                                <h4 class="card-title">Des collections inédites<br></h4>
                                <p class="card-text">Retrouvez un choix exceptionnel grâce à un nombre important de vendeurs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--FIN 3 CARDS-->

<!--IMAGE QUI BOUGE-->
    <section>
        <div class="container" style="padding-right: 45px;padding-left: 45px;">
            <div class="row">
                <div class="col-md-12 col-xxl-12 text-start">
                    <div class="card"><img class="card-img w-100 d-block" src="assets/img/imglandingpage.png">
                        <div class="card-img-overlay" style="padding-left: 64px;padding-top: 28px;">
                            <h4 class="text-light text-bg-dark">Vous souhaitez avoir un aperçu de notre collection ?</h4>
                            <p class="text-white">Dans ce cas ne réfléchissez plus</p><button class="btn btn-primary" type="button">Voir la galerie</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--FIN IMAGE QUI BOUGE-->

<!--ICON CHIFFRES-->
    <section>
        <div class="container py-4 py-xl-5">
            <div class="row gy-4 row-cols-2 row-cols-md-4">
                <div class="col">
                    <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                        <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg"><i class="bi bi-card-image"></i></div>
                        <div class="px-3">
                            <h2 class="fw-bold mb-0">+459</h2>
                            <p class="mb-0">NFTs vendus</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                        <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg"><i class="bi bi-person-circle"></i></div>
                        <div class="px-3">
                            <h2 class="fw-bold mb-0">+120</h2>
                            <p class="mb-0">Vendeurs</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                        <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg"><i class="bi bi-people-fill"></i></div>
                        <div class="px-3">
                            <h2 class="fw-bold mb-0">+260</h2>
                            <p class="mb-0">Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                        <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg"><i class="bi bi-cart-check-fill"></i></div>
                        <div class="px-3">
                            <h2 class="fw-bold mb-0">4</h2>
                            <p class="mb-0">Articles vendus par heure</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--FIN ICON CHIFFRES-->

<!--CALL 2 ACTION-->
    <section>
        <div>
            <section class="py-4 py-xl-5">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-md-10 col-xl-8 text-center d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
                            <div>
                                <h2 class="fw-bold mb-3">Alors vous aussi, joignez-vous à la communauté NFTdrop</h2>
                                <p class="mb-4">Veuillez être majeur et en possession d'une carte d'identité valide afin d'avoir accès à notre catalogue inédit</p><a class="btn btn-primary fs-5 me-2 py-2 px-4" role="button" href="pageinscription.php">M'inscrire</a><a class="btn btn-outline-primary fs-5 py-2 px-4" role="button" href="pageidentification.php">Me connecter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
<!--FIN CALL 2 ACTION-->

<!--FOOTER-->
<?php
    require_once('assets/config/footer/footer.php')
?>
<!--FIN FOOTER-->
   
</body>

</html>