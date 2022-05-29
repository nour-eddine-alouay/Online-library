-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 11 mai 2022 à 05:44
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `library`
--

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `type` int(11) NOT NULL,
  `genre` int(11) NOT NULL,
  `date de sortie` date NOT NULL DEFAULT '1000-01-01',
  `language` int(11) NOT NULL,
  `score` float NOT NULL,
  `populaire` tinyint(1) NOT NULL,
  `prix` float NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `description`, `type`, `genre`, `date de sortie`, `language`, `score`, `populaire`, `prix`, `img`) VALUES
(1, 'The Locked Door', 'Freida McFadden', 'Some doors are locked for a reason…<br>\r\n\r\n\r\nWhile eleven-year-old Nora Davis was up in her bedroom doing homework, she had no idea her father was killing women in the basement.<br>\r\n\r\nUntil the day the police arrived at their front door.<br>\r\n\r\nDecades later, Nora’s father is spending his life behind bars, and Nora is a successful surgeon with a quiet, solitary existence. Nobody knows her father was a notorious serial killer. And she intends to keep it that way.<br>\r\n\r\nThen Nora discovers one of her young female patients has been murdered. In the same unique and horrific manner that her father used to kill his victims.<br>\r\n\r\nSomebody knows who Nora is. Somebody wants her to take the fall for this unthinkable ', 1, 5, '2021-06-01', 2, 4.4, 1, 13.99, 'https://m.media-amazon.com/images/I/41OfSb7-3oL.jpg'),
(2, 'It Ends with Us', 'Colleen Hoover ', 'In this “brave and heartbreaking novel that digs its claws into you and doesn’t let go, long after you’ve finished it” (Anna Todd, New York Times bestselling author) from the #1 New York Times bestselling author of All Your Perfects, a workaholic with a too-good-to-be-true romance can’t stop thinking about her first love.<br>\r\n\r\nLily hasn’t always had it easy, but that’s never stopped her from working hard for the life she wants. She’s come a long way from the small town where she grew up—she graduated from college, moved to Boston, and started her own business. And when she feels a spark with a gorgeous neurosurgeon named Ryle Kincaid, everything in Lily’s life seems too good to be true.<br>\r\n\r\nRyl', 1, 2, '2016-05-17', 2, 4.5, 1, 11.6, 'https://images-na.ssl-images-amazon.com/images/I/51irsfz72HL._SX320_BO1,204,203,200_.jpg'),
(3, 'Enola Holmes', 'Serena Blasco', 'A graphic novel adaptation of the hit books that inspired the Netflix film! Sherlock Holmes’ brilliant, strong-willed younger sister takes center stage in this delightfully drawn graphic novel based on Nancy Springer’s bestselling mystery series.<br>\r\n\r\n14-year-old Enola Holmes wakes on her birthday to discover that her mother has disappeared from the family\'s country manor, leaving only a collection of flowers and a coded message book. With Sherlock and Mycroft determined to ship her off to a boarding school, Enola escapes, displaying a cleverness that even impresses the elder Holmes. But nothing prepares her for what lies ahead…', 2, 1, '2018-03-14', 1, 3.9, 1, 7.5, 'https://images-na.ssl-images-amazon.com/images/I/51t9THtZMGL._SX387_BO1,204,203,200_.jpg'),
(4, 'The fishy dish', 'Colwan Hopper', 'Swann\'s Way, the first part of A la recherche de temps perdu, Marcel Proust\'s seven-part cycle, was published in 1913. In it, Proust introduces the themes that run through the entire work. The narrator recalls his childhood, aided by the famous madeleine; and describes M. Swann\'s passion for Odette. The work is incomparable. Edmund Wilson said \"[Proust] has supplied for the first time in literature an equivalent in the full scale for the new theory of modern physics.\"', 5, 4, '2015-05-23', 3, 4.6, 1, 11.6, 'https://d3i5mgdwi2ze58.cloudfront.net/ohbd3xqukj7do2f0o5txmhghfsva'),
(5, 'Risk Of Rain', 'Hopoo games', 'book about risk of rain saga of games<br>\r\n\r\ncontains risk of rain 1 and risk of rain 2 documentation\r\n', 5, 5, '2021-03-25', 5, 5, 1, 33.5, 'https://m.media-amazon.com/images/P/1501171348.01._SCLZZZZZZZ_SX500_.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `name_g` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id`, `name_g`) VALUES
(1, 'aventure'),
(2, 'romance'),
(3, 'horreur'),
(4, 'action'),
(5, 'policier'),
(6, 'fantastique'),
(7, 'drame');

-- --------------------------------------------------------

--
-- Structure de la table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `name_l` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `language`
--

INSERT INTO `language` (`id`, `name_l`) VALUES
(1, 'francais'),
(2, 'anglais'),
(3, 'espagnole'),
(4, 'italien'),
(5, 'japonais'),
(6, 'allemand');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name_t` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id`, `name_t`) VALUES
(1, 'romans'),
(2, 'nouvelles'),
(3, 'BD'),
(4, 'albums'),
(5, 'documentaires'),
(6, 'journaux'),
(7, 'mangas'),
(8, 'poésie');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_GENRE` (`genre`),
  ADD KEY `FK_TYPE` (`type`),
  ADD KEY `FK_LANGUAGE` (`language`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `FK_GENRE` FOREIGN KEY (`genre`) REFERENCES `genre` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_LANGUAGE` FOREIGN KEY (`language`) REFERENCES `language` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TYPE` FOREIGN KEY (`type`) REFERENCES `type` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
