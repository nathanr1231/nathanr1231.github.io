-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 07 avr. 2026 à 13:41
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `nhl`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$1/P1dSKrtRLmOMadTL29T.N0iaUYv0S83h722dS0W8MGX//nX/Yua');

-- --------------------------------------------------------

--
-- Structure de la table `conference`
--

CREATE TABLE `conference` (
  `idconference` int(10) NOT NULL,
  `nomconference` varchar(50) NOT NULL,
  `idequipe` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `conference`
--

INSERT INTO `conference` (`idconference`, `nomconference`, `idequipe`) VALUES
(33, 'Est', 33),
(34, 'Est', 34),
(35, 'Est', 35),
(36, 'Est', 36),
(37, 'Est', 37),
(38, 'Est', 38),
(39, 'Est', 39),
(40, 'Est', 40),
(41, 'Est', 41),
(42, 'Est', 42),
(43, 'Est', 43),
(44, 'Est', 44),
(45, 'Est', 45),
(46, 'Est', 46),
(47, 'Est', 47),
(48, 'Est', 48),
(49, 'Ouest', 49),
(50, 'Ouest', 50),
(51, 'Ouest', 51),
(52, 'Ouest', 52),
(53, 'Ouest', 53),
(54, 'Ouest', 54),
(55, 'Ouest', 55),
(56, 'Ouest', 56),
(57, 'Ouest', 57),
(58, 'Ouest', 58),
(59, 'Ouest', 59),
(60, 'Ouest', 60),
(61, 'Ouest', 61),
(62, 'Ouest', 62),
(63, 'Ouest', 63),
(64, 'Ouest', 64);

-- --------------------------------------------------------

--
-- Structure de la table `division`
--

CREATE TABLE `division` (
  `iddivision` int(10) NOT NULL,
  `nomdivision` varchar(50) NOT NULL,
  `idequipe` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `division`
--

INSERT INTO `division` (`iddivision`, `nomdivision`, `idequipe`) VALUES
(1, 'Atlantique', 33),
(2, 'Atlantique', 34),
(3, 'Atlantique', 35),
(4, 'Atlantique', 36),
(5, 'Atlantique', 37),
(6, 'Atlantique', 38),
(7, 'Atlantique', 39),
(8, 'Atlantique', 40),
(9, 'Metropolitaine', 41),
(10, 'Metropolitaine', 42),
(11, 'Metropolitaine', 43),
(12, 'Metropolitaine', 44),
(13, 'Metropolitaine', 45),
(14, 'Metropolitaine', 46),
(15, 'Metropolitaine', 47),
(16, 'Metropolitaine', 48),
(17, 'Centrale', 49),
(18, 'Centrale', 50),
(19, 'Centrale', 51),
(20, 'Centrale', 52),
(21, 'Centrale', 53),
(22, 'Centrale', 54),
(23, 'Centrale', 55),
(24, 'Centrale', 56),
(25, 'Pacifique', 57),
(26, 'Pacifique', 58),
(27, 'Pacifique', 59),
(28, 'Pacifique', 60),
(29, 'Pacifique', 61),
(30, 'Pacifique', 62),
(31, 'Pacifique', 63),
(32, 'Pacifique', 64);

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `idequipe` int(10) NOT NULL,
  `nomequipe` varchar(30) NOT NULL,
  `classementequipe` int(50) NOT NULL,
  `imgequipe` varchar(80) NOT NULL,
  `vequipe` int(100) NOT NULL,
  `dequipe` int(100) NOT NULL,
  `pequipe` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`idequipe`, `nomequipe`, `classementequipe`, `imgequipe`, `vequipe`, `dequipe`, `pequipe`) VALUES
(33, 'Buffalo Sabres', 1, 'sabres.png', 39, 25, 84),
(34, 'Tampa Bay Lightning', 2, 'tampa_bay_lightning.png', 39, 19, 82),
(35, 'Detroit Red Wings', 3, 'Red_Wings.jpg', 36, 21, 79),
(36, 'Montreal Canadiens', 4, 'montreal-canadiens.webp', 34, 18, 78),
(37, 'Boston Bruins', 5, 'boston_bruins_logo_primary_dark_2025_sportslogosnet-5647.png', 35, 22, 76),
(38, 'Florida Panthers', 6, 'Save_Image_16x9_zb5kvc.jpg', 31, 29, 65),
(39, 'Ottawa Senators', 7, 'Ottawa_Senators.JPG.webp', 32, 27, 73),
(40, 'Toronto Maple Leafs', 8, 'toronto.png', 27, 26, 65),
(41, 'Carolina Hurricanes', 9, 'images.jpg', 40, 17, 86),
(42, 'New York Islanders', 10, 'Generic-Logo-1920.jpg', 36, 23, 77),
(43, 'New York Rangers', 11, 'new-york-rangers.webp', 25, 30, 58),
(44, 'Philadelphia Flyers', 12, 'phi_2568x1144.png', 29, 23, 69),
(45, 'Washington Capitals', 13, 'de5d5158f72626656fe2127883c849ca.webp', 32, 26, 71),
(46, 'New Jersey Devils', 14, 'njd-web-share-image-1920x1080.jpg', 32, 30, 66),
(47, 'Columbus Blue Jackets', 15, 'Columbus_Blue_Jackets.JPG.webp', 32, 21, 74),
(48, 'Pittsburgh Penguins', 16, 'pit_2568x1144.png', 32, 17, 78),
(49, 'Colorado Avalanche', 17, 'Colorado_Avalanche.JPG.webp\r\n', 43, 10, 95),
(50, 'Dallas Stars', 18, 'URLShare_10_LessTexture.png\r\n', 39, 14, 88),
(51, 'Minnesota Wild', 19, 'Minnesota_Wild.JPG.webp', 37, 16, 85),
(52, 'Nashville Predators', 20, 'xiyi37yb2uqrhtgujwiz.jpg', 28, 27, 64),
(53, 'Chicago Blackhawks', 21, 'to3az8gqs5kom07go3am.png', 24, 29, 59),
(54, 'Winnipeg Jets', 22, 'winnipeg-jets.jpg', 26, 26, 62),
(55, 'St. Louis Blues', 23, 'large-1.png', 25, 29, 72),
(56, 'Utah Hockey Club', 24, 'woivun60qb6mdz6xxjys.png', 34, 25, 73),
(57, 'Vegas Golden Knights', 25, 'r154944_1084x610_16-9.jpg', 29, 21, 72),
(58, 'Edmonton Oilers', 26, 'Edmonton_Oilers.webp', 31, 25, 70),
(59, 'Vancouver Canucks', 27, 'vancouver-canucks.webp', 19, 37, 46),
(60, 'Calgary Flames', 28, 'Calgary_Flames.JPG.webp', 25, 31, 67),
(61, 'Seattle Kraken', 29, 'seattle_kraken_logo_primary_dark_20229947.png', 29, 24, 67),
(62, 'Anaheim Ducks', 30, 'Anaheim-Ducks-emblem.jpg', 35, 25, 73),
(63, 'San Jose Sharks', 31, 'sharks-logo-sapc-website.png', 30, 25, 66),
(64, 'Los Angeles Kings', 32, 'hkr4fmzverpgiovshyo0.png', 26, 23, 66);

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE `joueur` (
  `idjoueur` int(10) NOT NULL,
  `nomjoueur` varchar(20) NOT NULL,
  `idequipe` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `joueur`
--

INSERT INTO `joueur` (`idjoueur`, `nomjoueur`, `idequipe`) VALUES
(1, 'Tage Thompson', 33),
(2, 'Nikita Kucherov', 34),
(3, 'Dylan Larkin', 35),
(4, 'Nick Suzuki', 36),
(5, 'David Pastrnak', 37),
(6, 'Aleksander Barkov', 38),
(7, 'Brady Tkachuk', 39),
(8, 'Auston Matthews', 40),
(9, 'Sebastian Aho', 41),
(10, 'Mathew Barzal', 42),
(11, 'Artemi Panarin', 43),
(12, 'Travis Konecny', 44),
(13, 'Alex Ovechkin', 45),
(14, 'Jack Hughes', 46),
(15, 'Johnny Gaudreau', 47),
(16, 'Sidney Crosby', 48),
(17, 'Nathan MacKinnon', 49),
(18, 'Jason Robertson', 50),
(19, 'Kirill Kaprizov', 51),
(20, 'Roman Josi', 52),
(21, 'Connor Bedard', 53),
(22, 'Kyle Connor', 54),
(23, 'Jordan Kyrou', 55),
(24, 'Clayton Keller', 56),
(25, 'Jack Eichel', 57),
(26, 'Connor McDavid', 58),
(27, 'Elias Pettersson', 59),
(28, 'Jonathan Huberdeau', 60),
(29, 'Matty Beniers', 61),
(30, 'Trevor Zegras', 62),
(31, 'Tomas Hertl', 63),
(32, 'Anze Kopitar', 64);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Index pour la table `conference`
--
ALTER TABLE `conference`
  ADD PRIMARY KEY (`idconference`),
  ADD KEY `idequipe` (`idequipe`);

--
-- Index pour la table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`iddivision`),
  ADD KEY `idequipe` (`idequipe`);

--
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`idequipe`);

--
-- Index pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD PRIMARY KEY (`idjoueur`),
  ADD KEY `fk_equipe` (`idequipe`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `conference`
--
ALTER TABLE `conference`
  MODIFY `idconference` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT pour la table `division`
--
ALTER TABLE `division`
  MODIFY `iddivision` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `idequipe` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT pour la table `joueur`
--
ALTER TABLE `joueur`
  MODIFY `idjoueur` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `conference`
--
ALTER TABLE `conference`
  ADD CONSTRAINT `conference_ibfk_1` FOREIGN KEY (`idequipe`) REFERENCES `equipe` (`idequipe`);

--
-- Contraintes pour la table `division`
--
ALTER TABLE `division`
  ADD CONSTRAINT `division_ibfk_1` FOREIGN KEY (`idequipe`) REFERENCES `equipe` (`idequipe`);

--
-- Contraintes pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD CONSTRAINT `fk_equipe` FOREIGN KEY (`idequipe`) REFERENCES `equipe` (`idequipe`),
  ADD CONSTRAINT `joueur_ibfk_1` FOREIGN KEY (`idequipe`) REFERENCES `equipe` (`idequipe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
