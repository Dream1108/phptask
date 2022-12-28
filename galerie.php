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
        <h1>Notre galerie</h1>
    </div>
<!--FIN TEXTE-->

<!--GALERIE + TEXTE -->
    <div class="container d-flex flex-column align-items-center py-4 py-xl-5">
        <div class="row gy-4 row-cols-1 row-cols-md-2 w-100" style="max-width: 800px;">
            <div class="col order-md-first">
                <div class="card"><img class="card-img w-100 d-block" src="assets/img/singegalerie1.png">
                    <div class="card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4"></div>
                </div>
            </div>
            <div class="col d-md-flex order-first justify-content-md-start align-items-md-end order-md-1">
                <div style="width: 80%;">
                    <h2>Retrouvez ici des inédits !</h2>
                    <p class="w-lg-50">Un échantillon de nos plus belles pièces</p>
                </div>
            </div>
            <div class="col order-md-2">
                <div class="card"><img class="card-img w-100 d-block" src="assets/img/singegalerie2.jpeg">
                    <div class="card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4">
                        <h4></h4>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col order-md-2">
                <div class="card"><img class="card-img w-100 d-block" src="assets/img/singegalerie3.png" width="374" height="375">
                    <div class="card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4">
                        <h4></h4>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--FIN GALERIE + TEXTE-->

<!--FOOTER-->
<?php
    require_once('assets/config/footer/footer.php')
?>
<!--FIN FOOTER-->
</body>

</html>