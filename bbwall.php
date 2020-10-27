<?php 

require_once('configuration/config.php');
    require_once('includes/connection.php');


    $requete='SELECT * FROM module WHERE collection_module_module=1';
    $resultats=$connection->query($requete);
    $resultats->setFetchMode(PDO::FETCH_OBJ);
?>


<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>BBWall</title>
    <?php include_once('inc/head.php'); ?>
</head>

<body>

    <!--page d'accueil-->
   
        <nav>
            <div class="logo">
                <a href="index.php"><img src="images/logo.png"></a>
            </div>
            <ul class="nav-links">
                <li><a href="bbwall1.php#cards">Le produit</a></li>
                <li><a href="bbwall1.php#offre">Nos offres</a></li>
                <li><a href="bbwall1.php#respon">FAQ</a></li>
            </ul>
            <div class="burger">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
            </div>
        </nav>
      <div id="background_container">
         >

      </div>
        <section id="bbwall">

       <div class="info"> <h1>BBWall</h1>

        <p>Voici les différents modules disponibles pour le BBWall:</p>


       
        <div class="css-grid">
        <?php foreach ($resultats as $b) { ?>
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="front"><img src="<?= $b->photo_module_module ?>"/>
                </div>
                <div class="back">
                  <h1><?= $b->nom_module_module ?></h1>
                  <p><?= $b->descrip_module_module ?>
                </p>
                
              </div>
             
            </div>
          
          </div>
          <?php 
                    } 
                    $resultats->closeCursor();
            ?>
        </section>
        <footer><?php include_once('inc/footer.php'); ?></footer>

        </body>

        <script src="js/script.js"></script>

        </html>