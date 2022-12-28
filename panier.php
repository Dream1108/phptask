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

    if(isset($_GET['vider'])) {
        $_SESSION['lepanier'] = array();
    } // vider le panier 

    if(isset($_GET['IDproduit'])) {
        $IDproduit = $_GET['IDproduit'];
        $quantiteproduit = $_GET['quantiteproduit'];

        if($quantiteproduit > 0 && filter_var($quantiteproduit, FILTER_VALIDATE_INT)) {
                $_SESSION['lepanier'][$IDproduit] = $quantiteproduit;
         } elseif($quantiteproduit == 0) {
                unset($_SESSION['lepanier'][$IDproduit]);
         } else {
                echo "Mauvaise quantité";
         } 
        }
    require_once('assets/config/head/include.php');

    require('assets/config/includes/connexionmysqli.php');
    
    require('assets/config/commande/commandes.php');

    /*echo "<pre>";
    print_r($_SESSION['lepanier']);
    echo "</pre>";*/

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
        <h1>Votre panier</h1>
    </div>
<div style="margin: auto; padding-top: 2%; padding-bottom: 2%; width: 75%;">
    <a class="btn btn-secondary" href="<?php echo $_SERVER['PHP_SELF'];?>?vider=1'>" role="button">Vider le panier</a>
</div>

<div style="margin: auto; width: 75%;">
    <table class="table table-striped table-dark">
        <thead class="thead-light">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prix</th>
            <th scope="col">Quantité</th>
            <th scope="col">Sous-total</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $total = 0;
                foreach($_SESSION['lepanier'] as $key => $val) {
                    $afficherproduitpanier = "SELECT * FROM produit WHERE id_produit = '$key'";
                    $result = mysqli_query($conn, $afficherproduitpanier) or die("Problème SQL");
                    $row = mysqli_fetch_assoc($result);
                    $subtotal = $val*$row['prix_produit'];
                    $total += $subtotal;
                    echo"
                    <tr>
                        <td>{$row['id_produit']}</td>
                        <td>{$row['nom_produit']}</td>
                        <td>{$row['prix_produit']}</td>
                        <td>
                        <form action='panier.php' method='GET'>
                            <input value='$val' name='quantiteproduit'>
                            <input type='hidden' value='$key' name='IDproduit'>
                            <input type='submit'>
                        </form>
                        </td>
                        <td>€ $subtotal</td>
                    </tr>
                    ";
                } // pour chaque produit dans le panier
                
                if(empty($_SESSION['lepanier'])) {
                    echo "<tr><td colspan='5'>Le panier est vide</td></tr>";
                } else {
                    echo "<tr><td colspan='5'>Total : € $total</td></tr>";
                } // si cart vide
            ?>
        </tbody>
    </table>
    <form action="panier.php" method="POST">
            <div class="mb-3"><button class="btn btn-primary d-block w-100" name="passercommande" type="submit">Passer la commande</button></div>
    </form>
</div>

  

<!--FOOTER-->
<?php
    require_once('assets/config/footer/footer.php')
?>
<!--FIN FOOTER-->
</body>

</html>

<?php
if (isset($_POST['passercommande'])) {
            $produitdelacommande = $_SESSION['lepanier'];
            $today = date("Y-m-d H:i:s");
			$mysqli = new mysqli("localhost", "root", "root", "dropnft", 3306);
            $mysqli->set_charset("utf8");
            $serializer = serialize($produitdelacommande);
            $requete = "INSERT INTO commande (id_commande, date_commande, produitcommande, statutcommande, statutcommandeclient) VALUES (NULL, '$today', '$serializer', 'A préparer', 'En cours');";
		    $resultat = $mysqli->query($requete);

        print_r($produitdelacommande);
		}

?>