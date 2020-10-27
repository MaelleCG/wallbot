
    <?php


/*
$username = $_POST['username'];
$userpwd = $_POST['userpwd'];
   

if ((isset($username)) && ($_POST['username'] == 'WallBot' )  && (isset($userpwd))  && ($_POST['userpwd'] == 'motdepasse' ))  {
    header("Location: produit.php");
} 
else if (isset($_POST['userpwd']) && ($_POST['userpwd'] != 'motdepasse' )){
    echo '<b>Mauvais mot de passe</b>';
}
*/

$username_valide = "WallBots";
$userpwd_valide = "motdepasse";

if (isset($_POST['username']) && isset($_POST['userpwd'])) {
    if ($username_valide == $_POST['username'] && $userpwd_valide == $_POST['userpwd']) {
        session_start ();
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['userpwd'] = $_POST['userpwd'];
        header ('location: produit.php');exit;
    }
	else {
		
		echo '<body onLoad="alert(\'Page non accessible...\')">';
	
		echo '<meta http-equiv="refresh" content="0;URL=index.php">';
	}
}

?>



<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Wall Bots</title>
    <?php include_once('inc/head.php'); ?>
</head>

<body>
    


    <!--page d'accueil-->
    <section class="connexion">
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


        <div class="login-container">
        <fieldset>
            <legend id="login-title">Bienvenue</legend>
            <p id="login-text">Connectez vous pour ajouter un produit:</p>
            <form method="POST" class="login-form" action="ajout.php">
                <div class="input-test">
                    <label for="username">Identifiant:</label>
                    <input type="text" name="username" placeholder="Identifiant">
                </div>
                <div class="input-test">
                    <label for="userpwd">Mot de passe:</label>
                    <input type="password" name="userpwd" placeholder="Mot de passe">
                </div>
                <input type="submit" value="Connexion">
            </form>
        </fieldset>
    </div>
    </section>


    <footer><?php include_once('inc/footer.php'); ?></footer>


</body>
<script src="js/script.js"></script>





</html>