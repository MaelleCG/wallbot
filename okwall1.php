<?php 

require_once('configuration/config.php');
    require_once('includes/connection.php');


    $requete='SELECT * FROM robot';
    $robots=$connection->query($requete);
    $robots->setFetchMode(PDO::FETCH_OBJ);
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
     <section class="accueil" id="accueil">
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
        <video width="100%" height="100%" autoplay muted >
			<source src="images/BON.mp4"" type="video/mp4" />
			
		</video>


    </section>
    <!--produit-->
    <section id="cards">
        <h1 class="titlepro">Le Produit🤖</h1>
        <div class="cards-container">
        <?php foreach ($robots as $a) { ?>
            <div class="cardrobot">
                <img src="<?= $a->photo_robot_robot ?>">
                <h1><?= $a->nom_robot_robot ?></h1>
                <div class="text"> <?= $a->descrip_robot_robot ?>
                <br>
                <p class="prix"><?= $a->prix_robot_robot ?></p>
                </div>
                <div class="panelrobot">
                    <a href="<?= $a->lien_robot_robot ?>" target="_blank"> <button>En savoir plus</button></a>
                </div>
            </div>

            <?php 
                    } 
                    $robots->closeCursor();
            ?>
        </div>
    </section>
    <!-- section offre-->

    <section id="offre">
    <h1 class="titlepro">Nos Offres🤖</h1>
        <form action="index.php" method="POST" id="carform">

            <select class="selectrobot" name="carlist" form="carform">
                <option class="optionrobot" value="">Selectionner un robot:</option>
                <option class="optionrobot" value="bbwall">BBWall</option>
                <option class="optionrobot" value="wall">Wall</option>
                <option class="optionrobot" selected value="okwall">OKWall</option>
                <option class="optionrobot" value="gbwall">GBWall</option>
            </select>
            <input class="inputrobot" name="valider" type="submit" value="Voir le robot" />
        </form>

    <div class="black2">
    <div class="columns"  id="colums">
    <div class="column">
        <div class="a1">Nouveaux jeux<br><a href="okwall.php" target="_blank">  En savoir plus</a> </div>
        <div class="a2">Maths <br><a href="okwall.php" target="_blank"> En savoir plus</a></div>
        <div class="a3">LV2 <br><a href="okwall.php" target="_blank">  En savoir plus</a></div> 
      </div>

      <div class="column"><img src="images/gifc.gif" width="30%"></div>
      <div class="column">
        <div class="a1">Blagues <br><a href="okwall.php" target="_blank">  En savoir plus</a></div> 
        <div class="a2">Planétarium <br><a href="okwall.php" target="_blank">  En savoir plus</a></div> 
        <div class="a3">Journal Intime <br><a href="okwall.php" target="_blank">  En savoir plus</a> </div>
      </div>
    </div>
    </div>
  </section>
<h1 class="titlepro">FAQ🤖</h1>
<?php include_once('inc/faq.php'); ?>

<section id="preco">
  <section class="contact-wrap">
  <h1 class="titlepro">Précommande🤖</h1>
				  <form action="commande.php" method="POST" class="contact-form">
					<div class="col-sm-6">
					  <div class="input-block">
						
						<input type="text" placeholder="Nom" name="nomclient"class="form-control">
					  </div>
					</div>
					<div class="col-sm-6">
					  <div class="input-block">
						<input type="text" placeholder ="Prenom" name="prenomclient" class="form-control">
					  </div>
					</div>
					<div class="col-sm-12">
					  <div class="input-block">
						<input type="text" placeholder="Mail" name="adresseclient"class="form-control">
					  </div>
					</div>
					<div class="col-sm-12">
					  <div class="input-block textarea">
						<textarea rows="3" type="text" name="produitclient" placeholder= "Ajouter les produits souhaités" class="form-control"></textarea>
					  </div>
					</div>
					<div class="col-sm-12">
					  <button class="square-button">Envoyer</button>
					</div>
				  </form>
				</section>
  </section>
<footer><?php include_once('inc/footer.php'); ?></footer>


</body>

<script type="text/javascript" src="//opt-out.ferank.eu/tarteaucitron.js?domain=wallbot.tp.mmi-lepuy.fr&uuid=67768a12d5b55d4deaf9b6001993e011c4cb4b65"></script>
<script src="js/script.js"></script>


</html>