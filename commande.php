<?php
    require_once('configuration/config.php');
    require_once('includes/connection.php');


    
    $nomc = $_POST['nomclient'];
    $prenomc = $_POST['prenomclient'];
    $adressec = $_POST['adresseclient'];
    

    // ajout à la base de donné des informations sur le client

    $req = $connection->prepare('
        INSERT INTO client (nom_client_client, prenom_client_client, adresse_client_client)
        SELECT :cnomc, :cprenomc, :cadressec FROM dual
        WHERE NOT EXISTS (SELECT 1 FROM client WHERE nom_client_client = :cnomc AND prenom_client_client = :cprenomc);
    ');

    $req->execute(array(
        'cnomc' => $nomc,
        'cprenomc' => $prenomc,
        'cadressec' => $adressec,
        
    ));
    
 
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Wall Bot</title>
    <?php include_once('inc/head.php'); ?>
</head>

<body>
    <!--page d'accueil-->
  
        <nav>
            <div class="logo">
                <a href="index.php"><img src="images/logo.png"></a>
            </div>
            <ul class="nav-links">
                <li><a href="#cards">Le produit</a></li>
                <li><a href="#offre">Nos offres</a></li>
                <li><a href="#respon">FAQ</a></li>
            </ul>
            <div class="burger">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
            </div>
        </nav>
<div class="echo">
<?php

echo("Récapitulatif de votre commande:");
echo("<br>");
echo("<b>Nom :</b> $nomc ");
echo("<br>");
echo("<b>Prénom:</b> $prenomc");
echo("<br>");
echo("<b>Adresse:</b> $adressec ");
echo("<br>");
echo("Vous receverez bientôt un mail pour confirmer votre précommande.");


?>
<br>
<img src="images/illustration-07.png">
</div>
</body>
<script src="js/script.js"></script>

</html>