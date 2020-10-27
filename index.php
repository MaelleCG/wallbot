
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
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149820460-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149820460-2');
</script>

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


    </section>
    <!--produit-->
    <section id="cards">
   <div class="cards-container">
        <?php foreach ($robots as $a) { ?>
            <div class="cardrobot">
                <img src="images/BBROND-06.png">
                <h1><?= $a->nom_robot_robot ?></h1>
                <div class="text"> <?= $a->descrip_robot_robot ?>
                </div>
                <div class="panelrobot">
                    <a href="bbwall.html" target="_blank"> <button>En savoir plus</button></a>
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
        <form action="index.php" method="POST" id="carform">

            <select class="selectrobot" name="carlist" form="carform">
                <option class="optionrobot" value="">Selectionner un robot:</option>
                <option class="optionrobot" value="bbwall">BBWall</option>
                <option class="optionrobot" value="wall">Wall</option>
                <option class="optionrobot" value="okwall">OKWall</option>
                <option class="optionrobot" value="gbwall">GBWall</option>
            </select>
            <input class="inputrobot" name="valider" type="submit" value="Voir les robots" />
        </form>

    
        <?php 

        
switch($_POST['carlist']){
    case 'bbwall':
        echo "<script type='text/javascript'>window.top.location='bbwall1.php#colums';</script>"; exit;
    break;
    case 'wall':
        echo "<script type='text/javascript'>window.top.location='wall1.php#colums';</script>"; exit;
    break;
    case 'okwall':
        echo "<script type='text/javascript'>window.top.location='okwall1.php#colums';</script>"; exit;
    break;
    case 'gbwall':
        echo "<script type='text/javascript'>window.top.location='gbwall1.php#colums';</script>"; exit;
    break;
    
    default:
    echo "<script type='text/javascript'>window.top.location='bbwall1.php';</script>"; exit;
    }
    ?>



    </section>

    <section id="respon">
    <div class="respontext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi varius vestibulum lectus,
            laoreet molestie sapien tempor a. Nam viverra aliquet velit eget volutpat. Vestibulum ante ipsum primis in
            faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus sed tristique ex, eget laoreet purus. Nam
            metus ante, venenatis sodales vehicula ac, bibendum vitae augue. Nulla ultricies orci maximus felis accumsan
            porttitor. Cras nec ligula leo.

            Donec orci neque, bibendum quis semper et, tempor quis velit. Nunc diam enim, aliquam a velit mollis,
            lobortis maximus enim. Nulla id neque a est sagittis sodales at sed orc
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi varius vestibulum lectus,
            laoreet molestie sapien tempor a. Nam viverra aliquet velit eget volutpat. Vestibulum ante ipsum primis in
            faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus sed tristique ex, eget laoreet purus. Nam
            metus ante, venenatis sodales vehicula ac, bibendum vitae augue. Nulla ultricies orci maximus felis accumsan
            porttitor. Cras nec ligula leo.

            Donec orci neque, bibendum quis semper et, tempor quis velit. Nunc diam enim, aliquam a velit mollis,
            lobortis maximus enim. Nulla id neque a est sagittis sodales at sed orc</div>
    </section>

    <footer><?php include_once('inc/footer.php'); ?></footer>

</body>


<script src="js/script.js"></script>


</html>