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

    $query = afficher();

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
        <h1>Supprimer un produit</h1>
    </div>
    
    <div class="container py-4 py-xl-5">
        <div class="row d-flex justify-content-center">
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-5">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"> <i class="bi bi-person-circle"></i></div>
                                    <form class="text-center" method="post">
                                        <label for="idproduitasupprimer">Entrez l'id du produit à supprimer (la liste de vos produits est disponible à la suite de ce formulaire</label>
                                        <div class="mb-3"><input class="form-control" type="text" name="idproduit" placeholder="#123"></div>
                                        <div class="mb-3"><button class="btn btn-primary d-block w-100" name="supprimerproduit" type="submit">Supprimer le produit</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
        </div>
    </div>
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
        <?php while($row = mysqli_fetch_array($query)) { ?>
            <div class="col-lg-4">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="<?= $row['photo_produit'] ?>">
                    <div class="card-body p-4">
                        <p class="text-primary card-text mb-0"><?= $row['id_produit'] ?></p>
                        <h4 class="card-title"><?= $row['nom_produit'] ?></h4>
                        <p class="card-text"><?= $row['description_produit'] ?></p>
                        <div class="d-flex"><button class="btn btn-primary" type="button">Ajouter au panier</button></div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
<!--FOOTER-->
<?php
    require_once('assets/config/footer/footer.php')
?>
<!--FIN FOOTER-->
</body>

</html>

<?php
if (isset($_POST['supprimerproduit'])) {
            $idproduit = $_POST['idproduit'];

			$mysqli = new mysqli("localhost", "root", "root", "dropnft", 3306);
            $mysqli->set_charset("utf8");
            $requete = "DELETE FROM produit WHERE id_produit=$idproduit";
		    $resultat = $mysqli->query($requete);
            header("Refresh:0");
		}
?>