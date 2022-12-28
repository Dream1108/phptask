<?php
session_start();
// S'il n'y pas de session, on se rends sur la page index 
if (!isset($_SESSION['idclient'])){
header('Location: index.php');
exit;
}
?>
<?php

if(!(isset($_SESSION['lepanier']))) {
    $_SESSION['lepanier'] = array();
} //si panier n'existe pas, on créer le panier

$bad = "";
$quantite ="";

if(isset($_GET['IDproduit'])) {
    $IDproduit = $_GET['IDproduit'];
    $quantiteproduit = $_GET['quantiteproduit'];

    if($quantiteproduit > 0 && filter_var($quantiteproduit, FILTER_VALIDATE_INT)) {
        if(isset($_SESSION['lepanier'][$IDproduit])) {
            $_SESSION['lepanier'][$IDproduit] += $quantiteproduit;
        } else {
            $_SESSION['lepanier'][$IDproduit] = $quantiteproduit;
        } //si le produit n'existe pas dans le panier
    } else {
        $bad = "Quantité négative";
    } //si la quantité est négative ou autres

}







echo "<pre>";
print_r($_SESSION['lepanier']);
echo "</pre>";

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
    <h1>Catalogue</h1>
</div>

<?php
echo($bad);
?>

<div class="container py-4 py-xl-5">
    <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
    <?php while($row = mysqli_fetch_array($query)) { ?>
        <div class="col-lg-4">
            <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="<?= $row['photo_produit'] ?>">
                <div class="card-body p-4">
                    <p class="text-primary card-text mb-0"><?= $row['id_produit'] ?></p>
                    <h4 class="card-title"><?= $row['nom_produit'] ?></h4>
                    <p class="card-text"><?= $row['description_produit'] ?></p>
                    <div class="d-flex">
                        <form action="catalogueproduitclient.php" method="GET">
                                <div class="mb-3"><input class="form-control" type="number" name="quantiteproduit" placeholder="1"></div>
                                <div class="mb-3"><input class="form-control" type="hidden" name="IDproduit" value="<?= $row['id_produit'] ?>"></div>
                                <div class="mb-3"><button class="btn btn-primary d-block w-100" name="ajouterproduitaupanier" type="submit">Ajouter le produit</button></div>
                        </form>
                    </div>
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