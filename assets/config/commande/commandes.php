<?php


    function afficher()
        {
            $printcatalogue = null;
            if(require('assets/config/includes/connexionmysqli.php'))
            {
                $printcatalogue = mysqli_query($conn, "SELECT * FROM produit ORDER BY id_produit DESC");
            }
            return $printcatalogue;
        }

    
?>