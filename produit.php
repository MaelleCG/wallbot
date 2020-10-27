<?php
session_start ();

?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Wall Bots</title>
    <?php include_once('inc/head.php'); ?>
</head>


<body>
    
<?php if (isset($_SESSION['username']) && isset($_SESSION['userpwd'])) { ?>


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
<section class="addproduct">
        <h1>Ajout d'un nouveau module:</h1>
        <div class="login-container1">
        <fieldset>
        <legend id="login-title">Ajout</legend>
            <p id="login-text">Rentrez les données pour ajouter un module</p>
            <form method="POST" class="login-form" action="proresult.php">
                <div class="input-test">
                    <label for="username">Nom du module:</label>
                    <input type="text" name="modulename" placeholder="Nom">
                </div>
                <div class="input-test">
                    <label for="userpwd">Description du module:</label>
                    <input type="text" name="moduledesc" placeholder="Description">
                    <label for="userpwd">Collection du module:</label>
                    <input type="text" name="modulecoll" placeholder="Collection">
                </div>
                <input type="submit" value="Ajouter">
            </form>
        </fieldset>
    </div>

        </section>


        <footer><?php include_once('inc/footer.php'); ?></footer>



</body>
<script src="js/script.js"></script>





</html>

<?php } 

else {
	echo 'Page non accessible.';
}?>