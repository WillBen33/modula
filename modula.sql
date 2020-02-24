-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 24 fév. 2020 à 09:30
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `modula`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `firstName`, `lastName`, `email`, `message`, `date`, `ip`) VALUES
(1, 'Ipsum', 'Lorem', 'loremipsum@email.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt gravida ipsum, sit amet commodo dui finibus nec. Maecenas magna dolor, sollicitudin at pellentesque ac, rutrum at felis. Mauris cursus sagittis nisi, non cursus odio consequat ac. Donec volutpat lectus ut ipsum fermentum faucibus. In iaculis sem ex, id aliquam ipsum molestie in. Vestibulum tempus feugiat laoreet. Nam finibus leo nunc, in consequat est ullamcorper a. In augue nunc, vulputate vel malesuada ut, dignissim vel.', '2020-02-24 10:29:28', '::1'),
(2, 'Ipsum', 'Lorem', 'loremipsum@email.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt gravida ipsum, sit amet commodo dui finibus nec. Maecenas magna dolor, sollicitudin at pellentesque ac, rutrum at felis. Mauris cursus sagittis nisi, non cursus odio consequat ac. Donec volutpat lectus ut ipsum fermentum faucibus. In iaculis sem ex, id aliquam ipsum molestie in. Vestibulum tempus feugiat laoreet. Nam finibus leo nunc, in consequat est ullamcorper a. In augue nunc, vulputate vel malesuada ut, dignissim vel.', '2020-02-24 10:29:39', '::1'),
(3, 'Ipsum', 'Lorem', 'loremipsum@email.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt gravida ipsum, sit amet commodo dui finibus nec. Maecenas magna dolor, sollicitudin at pellentesque ac, rutrum at felis. Mauris cursus sagittis nisi, non cursus odio consequat ac. Donec volutpat lectus ut ipsum fermentum faucibus. In iaculis sem ex, id aliquam ipsum molestie in. Vestibulum tempus feugiat laoreet. Nam finibus leo nunc, in consequat est ullamcorper a. In augue nunc, vulputate vel malesuada ut, dignissim vel.', '2020-02-24 10:29:46', '::1'),
(4, 'Ipsum', 'Lorem', 'loremipsum@email.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt gravida ipsum, sit amet commodo dui finibus nec. Maecenas magna dolor, sollicitudin at pellentesque ac, rutrum at felis. Mauris cursus sagittis nisi, non cursus odio consequat ac. Donec volutpat lectus ut ipsum fermentum faucibus. In iaculis sem ex, id aliquam ipsum molestie in. Vestibulum tempus feugiat laoreet. Nam finibus leo nunc, in consequat est ullamcorper a. In augue nunc, vulputate vel malesuada ut, dignissim vel.', '2020-02-24 10:29:52', '::1'),
(5, 'Ipsum', 'Lorem', 'loremipsum@email.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt gravida ipsum, sit amet commodo dui finibus nec. Maecenas magna dolor, sollicitudin at pellentesque ac, rutrum at felis. Mauris cursus sagittis nisi, non cursus odio consequat ac. Donec volutpat lectus ut ipsum fermentum faucibus. In iaculis sem ex, id aliquam ipsum molestie in. Vestibulum tempus feugiat laoreet. Nam finibus leo nunc, in consequat est ullamcorper a. In augue nunc, vulputate vel malesuada ut, dignissim vel.', '2020-02-24 10:29:57', '::1');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
