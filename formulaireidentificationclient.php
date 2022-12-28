
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
    <div class="container">
        <section class="position-relative py-4 py-xl-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h2>Accéder à votre espace Client</h2>
                        <p class="w-lg-50">Merci de bien vouloir vous identifier</p>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 col-xl-4">
                        <div class="card mb-5">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"><i class="bi bi-person-circle"></i></div>
                                <form class="text-center" action="assets/config/includes/formulaireidentificationclient-inc.php" method="post">
                                    <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                                    <div class="mb-3"><input class="form-control" type="password" name="mdp" placeholder="Mot de passe"></div>
                                    <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" name="submit">Se connecter</button></div>
                                    <p class="text-muted">
                                        <?php
                                            if(isset($_GET["error"])){
                                            if($_GET["error"] == "emptyinput") {
                                            echo "<p>Remplir tous les champs</p>";
                                            }
                                            else if($_GET["error"] == "mauvaisidentifiant1"){
                                            echo"<p>Mauvais identifiant !</p>";
                                            }
                                            }
                                         ?>
                                     </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<!--FOOTER-->
<?php
    require_once('assets/config/footer/footer.php')
?>
<!--FIN FOOTER-->
</body>

</html>