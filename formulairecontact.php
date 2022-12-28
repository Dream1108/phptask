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

<!--FORMULAIRE-->
    <div class="container">
        <section class="position-relative py-4 py-xl-5">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                        <div class="card mb-5">
                            <div class="card-body p-sm-5">
                                <h2 class="text-center mb-4">Nous contacter</h2>
                                <form method="post">
                                    <div class="mb-3"><input class="form-control" type="text" id="name-2" name="name" placeholder="Name"></div>
                                    <div class="mb-3"><input class="form-control" type="email" id="email-2" name="email" placeholder="Email"></div>
                                    <div class="mb-3"><textarea class="form-control" id="message-2" name="message" rows="6" placeholder="Message"></textarea></div>
                                    <div><button class="btn btn-primary d-block w-100" type="submit">Envoyer</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<!--FIN FORMULAIRE-->

<!--FOOTER-->
<?php
    require_once('assets/config/footer/footer.php')
?>
<!--FIN FOOTER-->
</body>

</html>