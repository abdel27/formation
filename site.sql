-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 13 Juin 2016 à 15:01
-- Version du serveur :  10.1.10-MariaDB
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `site`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `idespece` int(11) NOT NULL,
  `idrace` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `lof` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `qualites` varchar(255) NOT NULL,
  `active` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `departement_id` int(11) NOT NULL,
  `departement_code` int(11) NOT NULL,
  `departement_nom` varchar(100) NOT NULL,
  `departement_nom_uppercase` varchar(100) NOT NULL,
  `departement_slug` varchar(100) NOT NULL,
  `departement_nom_soundex` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `espece`
--

CREATE TABLE `espece` (
  `id` int(11) NOT NULL,
  `intitule` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `race`
--

CREATE TABLE `race` (
  `id` int(11) NOT NULL,
  `intitule` varchar(100) NOT NULL,
  `idespece` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `situation`
--

CREATE TABLE `situation` (
  `id_situation` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `situation`
--

INSERT INTO `situation` (`id_situation`, `name`) VALUES
(1, 'Cadre / Dirigeant'),
(2, 'Profession libérale'),
(3, 'Indépendant'),
(4, 'Technicien agent de maitrise'),
(5, 'Professeur Enseignant'),
(6, 'Artisan'),
(7, 'Employé de bureau ou administratif'),
(8, 'Service au  particulier'),
(9, 'Commerçant'),
(10, 'Ouvrier'),
(11, 'Retraité'),
(12, 'Etudiant'),
(13, 'Femme / Homme au foyer'),
(14, 'Militaire'),
(15, 'Sans emploi');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date_naissance` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `departement` int(3) NOT NULL,
  `role` varchar(10) NOT NULL,
  `active` varchar(3) NOT NULL,
  `last_connection` datetime NOT NULL,
  `situation` varchar(100) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `codepostal` varchar(100) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `username`, `date_naissance`, `email`, `password`, `token`, `ip`, `created_at`, `departement`, `role`, `active`, `last_connection`, `situation`, `adresse`, `codepostal`, `tel`, `city`) VALUES
(1, 'ouasri', 'abdel', 'abdel1', '2016-06-05', 'aouasri@gmail.com', 'aouasri@gmail.com', 'aoausri@gmail.com', '123.3.3.69', '2016-06-06 00:00:00', 1, 'user', 'yes', '2016-05-01 00:00:00', '', '', '', '', ''),
(11, 'esrezqrfezqr', 'ezsfrdsqfqdsf', 'dsfdsfdsfds', '2016-06-13', 'gfdsdfgdsfgfds@yahoo.fr', '$2y$10$YgV3vhKL33pOUja8OY20MO5MctVWXu1o1SYIQEcdiA4WGL9YFF0qO', 'K8PH9zgwR9FH4JZSwDJ6qIQ0ukNEXizFwYC6pdUAllUcxdCxJa', '::1', '2016-06-13 00:00:00', 1, 'user', 'no', '2016-06-13 00:00:00', '', '', '', '', ''),
(12, 'ouasri', 'abdel', 'rani', '2016-06-13', 'ouasri@yahoo.fr', '$2y$10$C73A/Y4cq4oDR40RWwX9guZnKzvmWrYJ5p2mi7AaJAWZztwyDirfm', 'ym5RgBB4uGSE5zvkoKAlfaGp0iVJv7T355FyAcRZnSzyg8mYCp', '::1', '2016-06-13 00:00:00', 1, 'user', 'no', '2016-06-13 00:00:00', '', '', '', '', ''),
(13, 'abdel', 'rani', 'rani', '2016-06-13', 'pseudo2@gmail.com', '$2y$10$Ku/nPj1y0MTKmULbnIUmFeOgv5HEkaCCWvfeQq31BOigLUAXKiEcO', 'CW7ZHD7iEvMCXCkOyBudWvtF5X0wr2iBYl4haYynZvsfT3ZJRc', '::1', '2016-06-13 00:00:00', 1, 'user', 'no', '2016-06-13 00:00:00', '', '', '', '', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idrace` (`idrace`),
  ADD KEY `idespece` (`idespece`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`departement_id`);

--
-- Index pour la table `espece`
--
ALTER TABLE `espece`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `race`
--
ALTER TABLE `race`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idespece` (`idespece`);

--
-- Index pour la table `situation`
--
ALTER TABLE `situation`
  ADD PRIMARY KEY (`id_situation`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departement` (`departement`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `departement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `espece`
--
ALTER TABLE `espece`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `race`
--
ALTER TABLE `race`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `situation`
--
ALTER TABLE `situation`
  MODIFY `id_situation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `annonce_ibfk_2` FOREIGN KEY (`idespece`) REFERENCES `espece` (`id`),
  ADD CONSTRAINT `annonce_ibfk_3` FOREIGN KEY (`idrace`) REFERENCES `race` (`id`),
  ADD CONSTRAINT `annonce_ibfk_4` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `departement`
--
ALTER TABLE `departement`
  ADD CONSTRAINT `departement_ibfk_1` FOREIGN KEY (`departement_id`) REFERENCES `user` (`departement`);

--
-- Contraintes pour la table `race`
--
ALTER TABLE `race`
  ADD CONSTRAINT `race_ibfk_1` FOREIGN KEY (`idespece`) REFERENCES `espece` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
