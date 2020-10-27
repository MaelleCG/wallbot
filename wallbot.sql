-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 16 déc. 2019 à 23:14
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `wallbot`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client_client` int(11) NOT NULL,
  `nom_client_client` varchar(30) DEFAULT NULL,
  `prenom_client_client` varchar(20) DEFAULT NULL,
  `adresse_client_client` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande_commande` int(11) NOT NULL,
  `id_client_client` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `est_composé`
--

CREATE TABLE `est_composé` (
  `id_module_module` int(11) NOT NULL,
  `id_commande_ligne_commande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

CREATE TABLE `ligne_commande` (
  `id_commande_ligne_commande` int(11) NOT NULL,
  `id_robot_robot` int(11) DEFAULT NULL,
  `id_commande_commande` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id_module_module` int(11) NOT NULL,
  `nom_module_module` varchar(20) DEFAULT NULL,
  `descrip_module_module` text DEFAULT NULL,
  `collection_module_module` int(10) NOT NULL,
  `photo_module_module` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id_module_module`, `nom_module_module`, `descrip_module_module`, `collection_module_module`, `photo_module_module`) VALUES
(1, 'Alphabet', 'BBwall peut apprendre les lettres à votre enfant en lui chantant l’alphabet. BBwall détecte si votre enfant se trompe et peut le corriger. C’est une manière ludique d’apprendre l’alphabet grâce à BBwall.', 1, 'images/aalphabet.png'),
(2, 'Veilleuse', 'BBwall change de couleur et va accompagner votre enfant tout au long de son endormissement. Dès que l’enfant dort, BBwall s\'éteint progressivement. Grâce à lui vous pourrez voir le cycle de sommeil de votre enfant.', 1, 'images/aveilleuse.png'),
(3, 'Couleur', 'BBwall change la couleur de sa tête pour faire apprendre les différentes couleurs à votre enfant de manière amusante. Votre enfant sera vite conquis par les changements de couleurs qui vont l\'émerveiller.', 1, 'images/acouleur.png'),
(4, 'Jouet', 'Pour développer ses capacités motrices, votre enfant peut faire rouler BBWall et s’amuser avec lui grâce à sa forme sphérique.', 1, 'images/aballon.png'),
(5, 'Chanter', 'BBwall va divertir votre enfant, il peut chanter différentes comptines, et votre enfant pourra chanter avec lui !', 1, 'images/achanter.png'),
(6, 'Histoires', 'BBwall connaît plusieurs histoires qu’il peut raconter à votre enfant. Faites votre choix et BBwall transmettra les différentes émotions en racontant de magnifiques histoires à votre enfant.', 1, 'images/ahistoire.png'),
(7, 'Conversation', 'Wall répond à une conversation simple avec votre enfant. Parlez lui de n’importe quel sujet : foot, dessin animés… Wall connaît tout!', 2, 'images/adialogue.png'),
(8, 'Vocabulaire', 'Wall intègre de nouveaux mots au fur et à mesure de l\'évolution et de la scolarité de votre enfant. Il lui permet d’avoir une conversation plus soutenu et de développer son vocabulaire. ', 2, 'images/avoc.png'),
(9, 'Anglais', 'Wall commence a introduire des notions d’anglais chez votre enfant dès le plus jeune âge. Pour utiliser ce module vous devez mettre à jour les modules de BBWall “chanter” et “alphabet”. Apprenez l’anglais facilement avec Wall. ', 2, 'images/aanglais.png'),
(10, 'Nature', 'Wall développe la conscience écologique de votre enfant en leur permettant d’en apprendre plus sur les animaux, les plantes ou encore le tri sélectif.', 2, 'images/anature.png'),
(11, 'Emotions', 'Wall réagit à la conversation en changeant la forme de ses yeux et la couleur de sa tête. Votre enfant apprend ce qui est bien ou mal de dire en fonction de la réaction de Wall. ', 2, 'images/aemotion.png'),
(12, 'Nouveaux Jeux', 'Votre enfant peut jouer à des jeux simples grâce à l’application. Wall joue à des jeux interactifs avec votre enfant.', 2, 'images/1ajeux.png'),
(13, 'Nouveaux Jeux1', 'De nouveaux jeux ont été ajoutés, OKWall pourra faire des charades avec votre enfant, il pourra aussi lui poser des quizz sur différents sujets grâce à l’application.', 3, 'images/1ajeux.png'),
(14, 'Maths', 'OKWall peut aider votre enfant à lui apprendre les tables de multiplications, les additions en lui faisant quelques petits calculs mentaux. OKWall pourra aussi lui poser des petites questions de logiques.', 3, 'images/amath.png'),
(15, 'LV2', 'Maintenant il est possible grâce à OKWall d’apprendre une deuxième langue à votre enfant : l’alphabet, les nombres, des mots de vocabulaires simples.\r\n', 3, 'images/alv2.png'),
(16, 'Blagues', 'Pour faire rire votre enfant, OKWall possède une bibliothèque de blagues intégrée et peut les raconter à votre demande. Il est également possible pour l’enfant de raconter de nouvelles blagues, OKwall les ajoutera à sa bibliothèque.\r\n', 3, 'images/ablague.png'),
(17, 'Planétarium', 'Avec le planétarium , votre enfant pourra apprendre plein de nouvelles choses sur les différentes constellations et le monde qui l’entoure. OKWall pourra lui montrer les différentes étoiles, leurs noms. \r\n', 3, 'images/aetoile.png'),
(18, 'Journal Intime', 'Votre enfant grandit et a besoin de s’exprimer. Grâce à la fonction journal intime de OKWall, il pourra lui raconter sans craintes ses différents problèmes et OKWall pourra en parler avec lui.\r\n', 3, 'images/ajournal.png'),
(19, 'Algorithme', ' Avec le développement du numérique, les enfants apprennent de plus en plus tôt de nouvelles technologies. Avec GBWall, votre enfant pourra commencer son apprentissage de l\'algorithme de manière ludique et amusante.', 4, 'images/acode.png'),
(20, 'Nouveaux Jeux2', 'En plus des anciens jeux, GBWall a de nouveaux jeux adaptés à l\'âge de votre enfant. Il y a des jeux de logiques, mais aussi des jeux plus amusants en rapport avec ses passions.\r\n', 4, 'images/1ajeux.png'),
(21, 'Code de la route', 'Votre enfant commence à aller à l’école à vélo. Pour vous rassurer, GBWall va lui apprendre le code de la route pour être sur qu’il soit en sécurité à l\'extérieur.\r\n', 4, 'images/aroute.png'),
(22, 'Internet', 'Votre enfant grandit, il a maintenant besoin d’internet et GBWall pourra devenir son assistant. Dès que votre enfant à une question, GBWall lui répondra. GBWall sera répondre à toutes les demandes de votre enfant.\r\n', 4, 'images/aworld.png'),
(23, 'Actualités', 'GBWall pourra raconter différentes actualités à votre enfant adaptés à son âge. Et si votre enfant a besoin d’une actualité par rapport à un sujet, GBWall sera capable de lui répondre.', 4, 'images/aactu.png'),
(24, 'Musique', 'Maintenant, GBWall est capable d’être utilisé en tant qu’enceinte, votre enfant pourra ajouter les musiques qu’il aime pour les écouter grâce à GBWall.\r\n', 4, 'images/amusique.png'),
(45, 'eee', 'zzz', 5, ''),
(47, 'Dialogue', ' Wall pourra discuter avec votre enfant', 6, ''),
(48, 'Histoire Geo', 'GBWall vous aide pour le brevet', 8, ''),
(49, 'Jeux de role', 'GBWall', 10, ''),
(50, '', '', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `possede`
--

CREATE TABLE `possede` (
  `id_robot_robot` int(11) NOT NULL,
  `id_module_module` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `robot`
--

CREATE TABLE `robot` (
  `id_robot_robot` int(11) NOT NULL,
  `nom_robot_robot` varchar(20) DEFAULT NULL,
  `descrip_robot_robot` text DEFAULT NULL,
  `photo_robot_robot` varchar(50) DEFAULT NULL,
  `lien_robot_robot` varchar(20) NOT NULL,
  `prix_robot_robot` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `robot`
--

INSERT INTO `robot` (`id_robot_robot`, `nom_robot_robot`, `descrip_robot_robot`, `photo_robot_robot`, `lien_robot_robot`, `prix_robot_robot`) VALUES
(1, 'BBWall', 'Le BBwall est le robot le plus simple de la gamme. Il est adapté aux enfants de 2-6 ans avec l\'ajout de  modules. Il accompagne l’enfant lui apprend des comptines. Il peut apprendre à votre enfant l’alphabet et les couleurs. BBwall peut lui raconter des histoires. Il accompagne votre enfant le soir avec une veilleuse intelligente.Il est sphérique, votre enfant pourra développer ses capacités motrices en jouant avec lui', 'images/bbrond.png', 'bbwall.php', '50€'),
(2, 'Wall', ' Le robot Wall est la gamme supérieur au BBWall. Il permet au BBWall d’évoluer avec l\'ajout d\'un corps. Il est adapté aux enfants de 7-10 ans avec la possibilité d’ajouter de tout nouveaux modules. Wall développe un vocabulaire adapté à la tranche d\'âge. Il commence à avoir une conversation avec votre enfant. Wall peut intégrer des notions d’anglais, en apprenant cette langue grâce à des chansons ou des histoires. \r\n', 'images/wallrond-07.png', 'wall.php', '70€'),
(3, 'OKWall', 'OKWall est adapté aux enfants de 11-13 ans avec l\'ajout de tout nouveaux modules. Il y a de nouvelles fonctionnalités avec OKWall : il peut aider votre enfant avec ses devoirs de math,il peut apprendre à votre enfant une deuxième langue!  Pour découvrir le monde de l’astronomie, il aura une fonction planétarium. Pour être au plus proche de lui, une fonctionnalité journal intime a été ajoutée pour que l\'enfant puisse se confier.', 'images/OKrond-08.png', 'okwall.php', '100€'),
(4, 'GBWall', 'C’est la dernière évolution de la gamme WallBot, il peut maintenant marcher ! Il est adapté aux enfants de 14 ans et plus avec la possibilité d’ajouter les dernier modules.Votre enfant peut apprendre les bases de l\'algorithme, ainsi que le code de la route et différentes actualités qui seront adaptées à son âge ! Il est maintenant capable d’être utilisé en tant qu’enceinte.Il sera également connecté à internet.', 'images/gbwall-09.png', 'gbwall.php', '150€');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client_client`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande_commande`),
  ADD KEY `FK_commande_id_client_client` (`id_client_client`);

--
-- Index pour la table `est_composé`
--
ALTER TABLE `est_composé`
  ADD PRIMARY KEY (`id_module_module`,`id_commande_ligne_commande`),
  ADD KEY `FK_est_composé_id_commande_ligne_commande` (`id_commande_ligne_commande`);

--
-- Index pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD PRIMARY KEY (`id_commande_ligne_commande`),
  ADD KEY `FK_ligne_commande_id_robot_robot` (`id_robot_robot`),
  ADD KEY `FK_ligne_commande_id_commande_commande` (`id_commande_commande`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id_module_module`);

--
-- Index pour la table `possede`
--
ALTER TABLE `possede`
  ADD PRIMARY KEY (`id_robot_robot`,`id_module_module`),
  ADD KEY `FK_possede_id_module_module` (`id_module_module`);

--
-- Index pour la table `robot`
--
ALTER TABLE `robot`
  ADD PRIMARY KEY (`id_robot_robot`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client_client` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande_commande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `est_composé`
--
ALTER TABLE `est_composé`
  MODIFY `id_module_module` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  MODIFY `id_commande_ligne_commande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id_module_module` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `possede`
--
ALTER TABLE `possede`
  MODIFY `id_robot_robot` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `robot`
--
ALTER TABLE `robot`
  MODIFY `id_robot_robot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_commande_id_client_client` FOREIGN KEY (`id_client_client`) REFERENCES `client` (`id_client_client`);

--
-- Contraintes pour la table `est_composé`
--
ALTER TABLE `est_composé`
  ADD CONSTRAINT `FK_est_composé_id_commande_ligne_commande` FOREIGN KEY (`id_commande_ligne_commande`) REFERENCES `ligne_commande` (`id_commande_ligne_commande`),
  ADD CONSTRAINT `FK_est_composé_id_module_module` FOREIGN KEY (`id_module_module`) REFERENCES `module` (`id_module_module`);

--
-- Contraintes pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD CONSTRAINT `FK_ligne_commande_id_commande_commande` FOREIGN KEY (`id_commande_commande`) REFERENCES `commande` (`id_commande_commande`),
  ADD CONSTRAINT `FK_ligne_commande_id_robot_robot` FOREIGN KEY (`id_robot_robot`) REFERENCES `robot` (`id_robot_robot`);

--
-- Contraintes pour la table `possede`
--
ALTER TABLE `possede`
  ADD CONSTRAINT `FK_possede_id_module_module` FOREIGN KEY (`id_module_module`) REFERENCES `module` (`id_module_module`),
  ADD CONSTRAINT `FK_possede_id_robot_robot` FOREIGN KEY (`id_robot_robot`) REFERENCES `robot` (`id_robot_robot`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
