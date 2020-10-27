<?php
    require_once('configuration/config.php');
    require_once('includes/connection.php');


    
    $nom = $_POST['modulename'];
    $descrip = $_POST['moduledesc'];
    $colle = $_POST['modulecoll'];
   

    // ajout à la base de donné des informations sur le client

    $req = $connection->prepare('
        INSERT INTO module (nom_module_module, descrip_module_module, collection_module_module)
        SELECT :cnom, :cdescrip, :ccolle FROM dual
        WHERE NOT EXISTS (SELECT 1 FROM module WHERE nom_module_module = :cnom AND descrip_module_module = :cdescrip);
    ');

    $req->execute(array(
        'cnom' => $nom,
        'cdescrip' => $descrip,
        'ccolle' => $colle,
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

echo("<b>Nom du module:</b> $nom ");
echo("<br>");
echo("<b>Description du module:</b> $descrip ");
echo("<br>");
echo("<b>Collection du module:</b> $colle ");
echo("<br>");
echo "Le module a bien été ajouté. Il sera ajouté sous peu sur le site."

?>
<br>
<img src="images/illustration-07.png">
</div>
</body>
<script src="js/script.js"></script>

</html>