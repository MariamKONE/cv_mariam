-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 20 Juillet 2017 à 17:04
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mkone_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `atouts`
--

DROP TABLE IF EXISTS `atouts`;
CREATE TABLE `atouts` (
  `id_atout` int(11) NOT NULL,
  `titre_a` varchar(45) NOT NULL,
  `sous_titre_a` varchar(45) CHARACTER SET utf8 NOT NULL,
  `dates_a` date NOT NULL,
  `description_a` varchar(400) NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `atouts`
--

INSERT INTO `atouts` (`id_atout`, `titre_a`, `sous_titre_a`, `dates_a`, `description_a`, `utilisateur_id`) VALUES
(1, 'atouts', 'test atout', '2017-07-11', 'test atout', 1),
(2, 'test atout', 'test atout', '2017-07-11', 'test atout', 1);

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

DROP TABLE IF EXISTS `competences`;
CREATE TABLE `competences` (
  `id_competence` int(11) NOT NULL,
  `titre_c` varchar(45) NOT NULL,
  `description_c` varchar(45) NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `competences`
--

INSERT INTO `competences` (`id_competence`, `titre_c`, `description_c`, `utilisateur_id`) VALUES
(11, 'compétences numériques', 'Magento', 1),
(13, '', 'SEO', 1),
(14, '', 'HTML5', 1),
(16, '', 'mmmmm', 1);

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

DROP TABLE IF EXISTS `experiences`;
CREATE TABLE `experiences` (
  `id_experience` int(11) NOT NULL,
  `titre_e` varchar(45) NOT NULL,
  `sous_titre_e` varchar(45) NOT NULL,
  `dates_e` varchar(45) DEFAULT NULL,
  `description_e` text NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `experiences`
--

INSERT INTO `experiences` (`id_experience`, `titre_e`, `sous_titre_e`, `dates_e`, `description_e`, `utilisateur_id`) VALUES
(1, 'TEST1', 'TEST1', '10/03/2015', 'TEST1', 0),
(4, 'experiences', 'pppppppppppp', 'pppppppppp', '<p>pppppppppp</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

DROP TABLE IF EXISTS `formations`;
CREATE TABLE `formations` (
  `id_formation` int(11) NOT NULL,
  `titre_f` varchar(45) NOT NULL,
  `sous_titre_f` varchar(45) DEFAULT NULL,
  `dates_f` varchar(45) NOT NULL,
  `description_f` text NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `formations`
--

INSERT INTO `formations` (`id_formation`, `titre_f`, `sous_titre_f`, `dates_f`, `description_f`, `utilisateur_id`) VALUES
(4, 'formations', 'hhhhhhhhhhhhhh', '', 'hhhhhhhh', 1),
(5, 'rrrrrrrrrrrr', 'dfdddddddddddd', 'dddddddddd', '', 1),
(6, 'kkkkkkkkkkkk', 'uuuuuuuu', 'uuuuuuuuuu', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `interets`
--

DROP TABLE IF EXISTS `interets`;
CREATE TABLE `interets` (
  `id_interet` int(11) NOT NULL,
  `titre_i` varchar(45) NOT NULL,
  `sous_titre_i` varchar(45) NOT NULL,
  `dates_i` varchar(45) NOT NULL,
  `description_i` text NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `interets`
--

INSERT INTO `interets` (`id_interet`, `titre_i`, `sous_titre_i`, `dates_i`, `description_i`, `utilisateur_id`) VALUES
(3, 'interets', 'aaaaaaattttttttttttttt', 'aaaaaaaaaaattttttttttttt', '<p>aaaaaaaaattttttttttttttttt</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Structure de la table `profils`
--

DROP TABLE IF EXISTS `profils`;
CREATE TABLE `profils` (
  `id_profil` int(11) NOT NULL,
  `titre_p` varchar(45) NOT NULL,
  `description_p` text NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `profils`
--

INSERT INTO `profils` (`id_profil`, `titre_p`, `description_p`, `utilisateur_id`) VALUES
(8, 'coucou', 'aaaaaaaaaaaaaaaaaaaaaaa', 1);

-- --------------------------------------------------------

--
-- Structure de la table `realisations`
--

DROP TABLE IF EXISTS `realisations`;
CREATE TABLE `realisations` (
  `id_realisation` int(11) NOT NULL,
  `titre_r` varchar(45) NOT NULL,
  `sous_titre_r` varchar(45) DEFAULT NULL,
  `dates_r` date NOT NULL,
  `description_r` text NOT NULL,
  `photo_r` varchar(300) NOT NULL,
  `lien_r` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `realisations`
--

INSERT INTO `realisations` (`id_realisation`, `titre_r`, `sous_titre_r`, `dates_r`, `description_r`, `photo_r`, `lien_r`, `utilisateur_id`) VALUES
(1, 'réalisations', 'test_r', '0000-00-00', 'test_r', '', 0, 1),
(2, 'test_r', 'test_r', '0000-00-00', 'test_r', '', 0, 1),
(3, 'aaaaaaa', 'aaaaaaaaa', '0000-00-00', '<p>aaaaaaaaaaaa</p>\r\n', '', 0, 1),
(4, 'ddddddddd', 'dddddddddd', '0000-00-00', '<p>ddddddddddddd</p>\r\n', 'logo_html.png', 0, 1),
(5, 'ccccccccccccc', 'ccccccccccccc', '0000-00-00', '<p>cccccccccccccc</p>\r\n', 'profil.png', 0, 1),
(6, 'ppppppppppppp', 'ppppppppppppp', '2015-10-00', '<p>aaaaaaaaaaaaaatttttttttttttttttttt</p>\r\n', 'profil.png', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `titres_cv`
--

DROP TABLE IF EXISTS `titres_cv`;
CREATE TABLE `titres_cv` (
  `id_titre_cv` int(11) NOT NULL,
  `titre_cv` mediumtext CHARACTER SET utf8 NOT NULL,
  `accroche` mediumtext CHARACTER SET utf8 NOT NULL,
  `logo` varchar(25) CHARACTER SET utf8 NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `titres_cv`
--

INSERT INTO `titres_cv` (`id_titre_cv`, `titre_cv`, `accroche`, `logo`, `utilisateur_id`) VALUES
(1, 'Développeur/Intégrateur web', 'Titulaire d’un Master 2 en E-Business et communication des grandes marques, je me forme actuellement aux métiers d’intégrateur et développeur web. Indépendante et créative, je recherche un stage pour compléter ma formation.\r\n', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` int(20) NOT NULL,
  `mdp` varchar(13) NOT NULL,
  `pseudo` varchar(13) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `age` int(5) NOT NULL,
  `date_naissance` date NOT NULL,
  `sexe` enum('Femme','Homme','Autre') NOT NULL,
  `etat_civil` enum('M','Mme','Autre') NOT NULL,
  `statut_martial` varchar(13) NOT NULL,
  `adresse` text NOT NULL,
  `code_postal` int(11) NOT NULL,
  `ville` varchar(25) NOT NULL,
  `pays` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `prenom`, `nom`, `email`, `telephone`, `mdp`, `pseudo`, `avatar`, `age`, `date_naissance`, `sexe`, `etat_civil`, `statut_martial`, `adresse`, `code_postal`, `ville`, `pays`) VALUES
(1, 'Mariam', 'Kone', 'mariam.kone@lepoles.com', 652937553, 'mariam', 'mamou', '', 25, '1989-07-23', 'Femme', 'Mme', 'Celibataire', '', 93380, 'Pierrefitte sur seine', 'Frnace'),
(2, 'Ali', 'Dupond', 'alidupont@gmail.com', 148489768, 'alidupond', 'alibaba', 'chemin.jpg', 22, '1996-07-04', 'Homme', 'M', 'Celibataire', '21 avenue jacques rousseau', 93180, 'Pierrefitte sur seine', 'france');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `atouts`
--
ALTER TABLE `atouts`
  ADD PRIMARY KEY (`id_atout`);

--
-- Index pour la table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`id_competence`);

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id_experience`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`id_formation`);

--
-- Index pour la table `interets`
--
ALTER TABLE `interets`
  ADD PRIMARY KEY (`id_interet`);

--
-- Index pour la table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id_profil`);

--
-- Index pour la table `realisations`
--
ALTER TABLE `realisations`
  ADD PRIMARY KEY (`id_realisation`);

--
-- Index pour la table `titres_cv`
--
ALTER TABLE `titres_cv`
  ADD PRIMARY KEY (`id_titre_cv`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `atouts`
--
ALTER TABLE `atouts`
  MODIFY `id_atout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `id_competence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id_experience` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `id_formation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `interets`
--
ALTER TABLE `interets`
  MODIFY `id_interet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `profils`
--
ALTER TABLE `profils`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `realisations`
--
ALTER TABLE `realisations`
  MODIFY `id_realisation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `titres_cv`
--
ALTER TABLE `titres_cv`
  MODIFY `id_titre_cv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
