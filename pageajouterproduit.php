<?php
session_start();
// S'il n'y pas de session, on se rends sur la page index 
if (!isset($_SESSION['idclient'])){
header('Location: index.php');
exit;
}
?>
<?php
    require_once('assets/config/head/include.php');

    require('assets/config/includes/connexionmysqli.php');
    
    require('assets/config/commande/commandes.php');
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
        <h1>Ajouter un produit</h1>
    </div>
    
    <div class="row d-flex justify-content-center">
                    <div class="col-md-6 col-xl-4">
                        <div class="card mb-5">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"> <i class="bi bi-person-circle"></i></div>
                                <form class="text-center" action="pageajouterproduit.php" method="post">
                                    <div class="mb-3"><input class="form-control" type="text" name="nomproduit" placeholder="Bored Giovanni"></div>
                                    <div class="mb-3"><textarea class="form-control" type="text" name="descproduit" placeholder="Description du produit"></textarea></div>
                                    <div class="mb-3"><input class="form-control" type="number" name="prixproduit" placeholder="1999,99"></div>
                                    <div class="mb-3"><input class="form-control" type="url" name="urlproduit" placeholder="dropnft.fr/image.png"></div>
                                    <div class="mb-3"><button class="btn btn-primary d-block w-100" name="ajouterproduit" type="submit">Ajouter le produit</button></div>
                                </form>
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

<?php
if (isset($_POST['ajouterproduit'])) {
            $description = $_POST['descproduit'];
            $nomproduit = $_POST['nomproduit'];
            $photoproduit = $_POST['urlproduit'];
            $prixproduit = $_POST['prixproduit'];

			$mysqli = new mysqli("localhost", "root", "root", "dropnft", 3306);
            $mysqli->set_charset("utf8");
            $requete = "INSERT INTO produit (description_produit, nom_produit, photo_produit, prix_produit) VALUES ('$description', '$nomproduit', '$photoproduit', '$prixproduit');";
		    $resultat = $mysqli->query($requete);
		}
?>