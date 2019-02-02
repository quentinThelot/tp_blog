-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 31 jan. 2019 à 18:52
-- Version du serveur :  10.1.32-MariaDB
-- Version de PHP :  7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tp_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `author`, `comment`, `comment_date`) VALUES
(1, 2, 'Quentin', 'trop cool ton nouveau blog !!', '2018-10-29 12:21:10'),
(2, 2, 'patrick', 'mon blog est mieux que ca !!', '2018-10-31 11:25:51'),
(3, 1, 'quentin', 'le php c\'est naze !!', '2018-10-30 17:04:32'),
(4, 1, 'fion', 'he , on sait ce que c\'est le php !!', '2018-11-08 10:10:47'),
(7, 2, 'zizou', 'sdqjhvqshdjkh', '2018-10-30 18:49:41'),
(8, 2, 'duga', 'zizou j t\'M', '2018-10-30 19:02:58'),
(9, 2, 'ZIZOU', 'merci monn duga !!', '2018-10-30 19:03:31'),
(10, 2, 'zizou', '<3', '2018-10-30 19:03:58'),
(11, 2, 'duga ', '+1', '2018-10-30 19:04:25'),
(12, 1, 'caroline', 'Bonjour !! :)', '2018-10-30 19:06:54'),
(13, 1, 'quentin', 'salut comment ca va ?', '2018-10-30 19:07:18'),
(14, 1, 'caroline ', 'ca va bien !', '2018-10-30 19:07:56'),
(15, 1, 'caroline', 'et toi ?\r\n', '2018-10-30 19:08:53'),
(16, 2, 'JEROME ROTHEN', 'C\'est moi le meilleur les gars !!!', '2018-10-30 19:24:56'),
(17, 2, 'quentin', 'salut les gars, c\'est samedi aujourd\'hui !! :)', '2018-11-24 14:59:38'),
(18, 2, 'caroline', 'connard !!!', '2018-11-25 09:00:56'),
(19, 2, 'ducon', 'ksjfksjk', '2019-01-09 18:55:58'),
(20, 2, 'ejkj', 'qirejfqjel', '2019-01-09 18:56:06'),
(21, 2, 'ducon ', 'ca marche !!!! :)\r\n', '2019-01-09 18:56:27'),
(22, 2, 'kdj', 'j\'ai fait de mon mieux', '2019-01-09 19:03:20'),
(23, 2, 'toto', 'bonne blague toto !! ;)', '2019-01-09 19:50:47'),
(24, 2, 'titi', 'je ne comprend rien au PHP ! :(', '2019-01-09 22:09:58'),
(25, 2, 'quentin', 'accroche toi ca va finir par venir !', '2019-01-10 00:11:01'),
(26, 2, 'quentin', 'merci de votre indulgence', '2019-01-16 18:49:13'),
(27, 2, 'bruno', 'j\'adore symfony !!', '2019-01-16 19:13:06'),
(28, 2, 'kevin', 'merci beaucoup !!', '2019-01-16 22:40:14'),
(29, 1, 'denis', 'Bonjour à tous !\r\nQuoi de neuf ici ?', '2019-01-19 09:47:51'),
(30, 1, 'didier', 'super ce blog !', '2019-01-19 15:38:54'),
(31, 2, 'adrien', 'super !\r\n', '2019-01-19 22:53:18'),
(32, 2, 'charles', 'et l\'URL rewriting , on en parle ?', '2019-01-19 22:55:20'),
(33, 2, 'denis', 'oui c\'est intéressant !!', '2019-01-19 22:59:36'),
(34, 2, 'jEAN', 'c\'est clair !', '2019-01-19 23:06:31'),
(35, 2, 'albert', 'Ca consiste en quoi ? :)', '2019-01-19 23:07:29'),
(36, 2, 'robert', 'Moi non plus je ne connais pas ... ;)', '2019-01-19 23:09:18');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `creation_date`) VALUES
(1, 'le php a la conquete du monde', 'PHP: Hypertext Preprocessor, plus connu sous son sigle PHP, est un langage de programmation libre, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP, mais pouvant également fonctionner comme n\'importe quel langage interprété de façon locale. ', '2018-10-28 16:31:15'),
(2, 'PHP et Symfony', 'Symfony est un ensemble de composants PHP ainsi qu\'un framework MVC libre écrit en PHP. Il fournit des fonctionnalités modulables et adaptables qui permettent de faciliter et d’accélérer le développement d\'un site web.  \r\nL\'agence web française SensioLabs est à l\'origine du framework Sensio Framework2. À force de toujours recréer les mêmes fonctionnalités de gestion d\'utilisateurs, gestion ORM, etc., elle a développé ce framework pour ses propres besoins3. Comme ces problématiques étaient souvent les mêmes pour d\'autres développeurs, le code a été par la suite partagé avec la communauté des développeurs PHP.\r\n\r\nLe projet est alors devenu Symfony (conformément à la volonté du créateur de conserver les initiales S et F de Sensio Framework), puis Symfony2 à partir de la version 24. La version 2 de Symfony casse la compatibilité avec la branche 1.x.\r\n\r\nLe 5 septembre 2017, Symfony passe la barre du milliard de téléchargements.5', '2018-10-27 06:15:16');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_billet` (`post_id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
