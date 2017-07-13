-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 13 Juillet 2017 à 16:23
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `site_cv`
--
CREATE DATABASE IF NOT EXISTS `site_cv` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `site_cv`;

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

DROP TABLE IF EXISTS `competences`;
CREATE TABLE `competences` (
  `id_competence` int(11) NOT NULL,
  `competence` varchar(45) NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `competences`
--

INSERT INTO `competences` (`id_competence`, `competence`, `utilisateur_id`) VALUES
(1, 'HTML5', 1),
(3, 'CSS3', 1),
(5, 'JavaScript', 1),
(6, 'JQuery', 1),
(10, 'WordPress', 1),
(11, 'Magento', 1),
(13, 'SEO', 1);

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

DROP TABLE IF EXISTS `experiences`;
CREATE TABLE `experiences` (
  `id_experience` int(11) NOT NULL,
  `tritre_e` varchar(45) NOT NULL,
  `sous_titre_e` varchar(45) NOT NULL,
  `dates_e` varchar(45) DEFAULT NULL,
  `description_e` text NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE `formation` (
  `id_formation` int(11) NOT NULL,
  `titre_f` varchar(45) NOT NULL,
  `sous_titre_f` varchar(45) DEFAULT NULL,
  `dates_f` varchar(45) NOT NULL,
  `description_f` text NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `intertitres`
--

DROP TABLE IF EXISTS `intertitres`;
CREATE TABLE `intertitres` (
  `id_intertitre` int(11) NOT NULL,
  `intertitre_1` varchar(45) NOT NULL,
  `intertitre_2` varchar(45) NOT NULL,
  `intertitre_3` varchar(45) NOT NULL,
  `intertitre_4` varchar(45) DEFAULT NULL,
  `intertitre_5` varchar(45) DEFAULT NULL,
  `intertitre_6` varchar(45) DEFAULT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `loisirs`
--

DROP TABLE IF EXISTS `loisirs`;
CREATE TABLE `loisirs` (
  `id_loisir` int(11) NOT NULL,
  `loisir` varchar(45) NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `realisations`
--

DROP TABLE IF EXISTS `realisations`;
CREATE TABLE `realisations` (
  `id_realisation` int(11) NOT NULL,
  `titre_r` varchar(45) NOT NULL,
  `sous_titre_r` varchar(45) DEFAULT NULL,
  `dates_r` varchar(45) NOT NULL,
  `description_r` text NOT NULL,
  `ut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id_formation`);

--
-- Index pour la table `intertitres`
--
ALTER TABLE `intertitres`
  ADD PRIMARY KEY (`id_intertitre`);

--
-- Index pour la table `loisirs`
--
ALTER TABLE `loisirs`
  ADD PRIMARY KEY (`id_loisir`);

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
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `id_competence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id_experience` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id_formation` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `intertitres`
--
ALTER TABLE `intertitres`
  MODIFY `id_intertitre` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `loisirs`
--
ALTER TABLE `loisirs`
  MODIFY `id_loisir` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `realisations`
--
ALTER TABLE `realisations`
  MODIFY `id_realisation` int(11) NOT NULL AUTO_INCREMENT;
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
