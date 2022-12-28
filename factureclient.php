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

    /*echo "<pre>";
    print_r($_SESSION['lepanier']);
    echo "</pre>";*/

    $printfacture = null;
    if(require('assets/config/includes/connexionmysqli.php'))
        {
            $printfacture = mysqli_query($conn, "SELECT * FROM commande ORDER BY id_commande DESC");
        } else {
            return $printfacture;

        }
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
        <h1>Vos factures</h1>
    </div>

<div style="margin: auto; width: 75%;">
    <table class="table table-striped table-dark">
        <thead class="thead-light">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Date commande</th>
            <th scope="col">Statut</th>
            </tr>
        </thead>
        <tbody>
            <?php   while($row = mysqli_fetch_array($printfacture)) { ?>
                    <tr>
                        <td><?= $row['id_commande'] ?></td>
                        <td><?= $row['date_commande'] ?></td>
                        <td><?= $row['statutcommande'] ?></td>
                    </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

  

<!--FOOTER-->
<?php
    require_once('assets/config/footer/footer.php')
?>
<!--FIN FOOTER-->
</body>

</html>

<?php
if (isset($_POST['updatestatut'])) {
			$mysqli = new mysqli("localhost", "root", "root", "dropnft", 3306);
            $mysqli->set_charset("utf8");
            $statutfutur = $_POST['dropdownstatut'];
            $idactuel = $_POST['iddelacommande']; 
            echo"$statutfutur";
            echo"$idactuel";

            $requete = "UPDATE commande SET statutcommande ='$statutfutur' WHERE id_commande = '$idactuel'";
		    $resultat = $mysqli->query($requete);

		}

?>