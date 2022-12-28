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
                        <h2>Création de votre compte Pro</h2>
                        <p class="w-lg-50">Merci de bien vouloir créer un compte</p>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 col-xl-4">
                        <div class="card mb-5">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"><i class="bi bi-person-circle"></i></div>
                                <form class="text-center" action="assets/config/includes/inscriptionpro-inc.php" method="post">
                                    <div class="mb-3"><input class="form-control" type="text" name="prenom" value="" placeholder="Prénom"></div>
                                    <div class="mb-3"><input class="form-control" type="text" name="nom" value="" placeholder="Nom"></div>
                                    <div class="mb-3"><input class="form-control" type="email" name="email" value="" placeholder="Mail"/></div>
                                    <div class="mb-3"><input class="form-control" type="password" name="mdp" value="" placeholder="Nouveau Mot de Passe"/></div>
                                    <div class="mb-3"><input class="form-control" type="date" name="date" value="" placeholder="Date de naissance"/></div>
                                    <div class="mb-3"><input class="form-control" type="number" name="telephone" value="" placeholder="Téléphone"/></div>
                                    <div class="mb-3"><input class="form-control" type="text" name="raisonsociale" value="" placeholder="Raison Sociale"/></div>
                                    <div class="mb-3"><input class="form-control" type="text" name="pays" value="" placeholder="Pays"/></div>
                                    <div class="mb-3"><input class="form-control" type="number" name="postal" value="" placeholder="Code Postal"/></div>
                                    <div class="mb-3"><input class="form-control" type="text" name="rue" value="" placeholder="Nom de la rue"/></div>
                                    <div class="mb-3"><input class="form-control" type="text" name="iban" value="" placeholder="IBAN"/></div>
                                    <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" name="submit">Se connecter</button></div>
                                    <p class="text-muted">
                                        <?php
                                            if(isset($_GET["error"])){
                                            if($_GET["error"] == "emptyinput") {
                                            echo "<p>Remplir tous les champs</p>";
                                            }
                                            else if($_GET["error"] == "invalidemail"){
                                                echo"<p>Email invalide</p>";
                                            }
                                            else if($_GET["error"] == "emailexists"){
                                                echo"<p>Merci de choisir une adresse mail qui n'est pas dans notre base de données</p>";
                                            }
                                            else if($_GET["error"] == "stmtfailed"){
                                                echo"<p>Il y a eu un problème...Merci de réessayer!</p>";
                                            }
                                            else if($_GET["error"] == "none"){
                                                echo"<p>votre compte est créé! Cliquez sur 'Me connecter'</p>";
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