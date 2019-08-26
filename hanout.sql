-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 28 Mars 2017 à 19:21
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `hanout`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `referance` varchar(10) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `tel` int(8) NOT NULL,
  `matriel` varchar(20) NOT NULL,
  `marque` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `color` varchar(10) NOT NULL,
  `panne` varchar(50) NOT NULL,
  `batterie` varchar(3) NOT NULL,
  `sim` varchar(3) NOT NULL,
  `resultat` varchar(20) NOT NULL,
  `date_sortie` varchar(50) NOT NULL,
  `date_entre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `referance`, `nom`, `prenom`, `tel`, `matriel`, `marque`, `model`, `color`, `panne`, `batterie`, `sim`, `resultat`, `date_sortie`, `date_entre`) VALUES
(1, '2219', 'benahmed', 'abdkader', 22672771, 'GSM', 'sumsang', 's5', 'noir', 'flash', 'oui', 'non', 'Repaired', '', ''),
(3, '2221', 'ben mefteh', 'med ali', 93636754, 'GSM', 'nokia', 'RM976', 'noir', 'nfp', 'oui', 'non', 'Repaired', '2017-01-22 16:09:26', ''),
(4, '2222', 'hanachi', 'nada', 50440449, 'GSM', 'nokia', 'x1', 'blanc', 'tactile', 'oui', 'non', '', '', ''),
(5, '2223', 'werghani', 'amani', 97817851, 'GSM', 'iku', 'ivok410', 'blanc', 'flash', 'oui', 'non', '', '', ''),
(6, '2224', 'derouich', 'amor', 52660541, 'GSM', 'bluboo', '', 'gold', 'nfp', 'oui', 'non', '', '', ''),
(7, '2225', 'mihob', 'hadi', 21903649, 'GSM', 'versus', 'b450', 'noir', 'connecteur', 'oui', 'non', '', '', ''),
(8, '2226', 'aouini', 'med amine', 50649923, 'GSM', 'versus', 'vpadpop', 'noir', 'tactile', 'oui', 'non', '', '', ''),
(9, '2227', 'gharbia', 'sounia', 55207813, 'GSM', 'sumsang', 's5839i', 'blanc', 'micro', 'oui', 'non', '', '', ''),
(10, '2228', 'sahli', 'abbes', 20242168, 'GSM', 'TAB', 'YOOZ', 'gris', 'flash', 'oui', 'non', '', '', ''),
(11, '2229', 'bensadi', 'riadh', 50632824, 'GSM', 'samsung', 'galaxy s4', 'noir', 'deblocage', 'oui', 'non', '', '', ''),
(12, '2230', 'limem', 'hichem', 53168506, 'GSM', 'h', 'y836', 'noir', 'clavier flash', 'oui', 'non', '', '', ''),
(13, '2231', 'kboubi', 'wissem', 27032655, 'GSM', 'samsung', 'galaxy s5830', 'noir ', 'tactil', 'non', 'non', '', '', ''),
(14, '2232', 'lahbib', 'ayda', 55629829, 'Gsm', 'tablette', 'iconix', 'noir ', 'connecteur charge', 'non', 'non', '', '', ''),
(15, '', 'antit', 'najwa', 26542201, 'GSM', 'nokia', 'x1', 'rouge', 'prb charge', 'non', 'non', '', '', ''),
(17, '2220', 'hamami', 'souhail', 54043980, 'GSM', 'huawei', 'y520', 'blanc', 'tactile', 'oui', 'non', '', '', ''),
(18, '2234', 'tlich', 'anoir', 22913455, 'GSM', 'sony', 'z3', 'noir', 'connecteur', 'oui', 'non', 'encours', '2017-01-13 17:05:53', '2017-01-08 16:43:17'),
(32, '', '', '', 0, '', '', '', '', '', '', '', 'encours', '', '2017-01-08 17:33:15'),
(33, '', '', '', 0, '', '', '', '', '', '', '', 'encours', '', '2017-01-08 17:33:40'),
(34, '', '', '', 0, '', '', '', '', '', 'non', 'non', 'encours', '', '2017-01-14 14:20:35'),
(35, '', '', '', 0, '', '', '', '', '', 'non', 'non', 'encours', '', '2017-01-14 14:20:58'),
(36, '2090', '', '', 0, '', '', '', '', '', 'non', 'non', 'encours', '2017-01-14 14:21:23', '2017-01-14 14:21:05'),
(37, '', '', '', 0, '', '', '', '', '', 'non', 'non', 'encours', '', '2017-01-22 16:07:55'),
(38, '', '', '', 0, '', '', '', '', '', 'non', 'non', 'encours', '', '2017-01-22 16:08:45');

-- --------------------------------------------------------

--
-- Structure de la table `entre`
--

CREATE TABLE IF NOT EXISTS `entre` (
  `famille` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `referance` varchar(30) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `Quantite` int(5) NOT NULL,
  `Prix` float NOT NULL,
  `date_entre` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `entre`
--

INSERT INTO `entre` (`famille`, `model`, `referance`, `designation`, `Quantite`, `Prix`, `date_entre`, `id`) VALUES
('', '', '', '', 1, 0, '2017-01-22 11:25:04', 21);

-- --------------------------------------------------------

--
-- Structure de la table `modifie`
--

CREATE TABLE IF NOT EXISTS `modifie` (
  `id` int(11) NOT NULL,
  `famille` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `referance` varchar(30) NOT NULL,
  `Quantite` int(5) NOT NULL,
  `date_modifie` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `famille` varchar(50) NOT NULL,
  `referance` varchar(50) NOT NULL,
  `designation` varchar(120) NOT NULL,
  `Quantite` int(5) NOT NULL,
  `Prix` float NOT NULL,
  `model` varchar(40) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`famille`, `referance`, `designation`, `Quantite`, `Prix`, `model`, `id`) VALUES
('Commande', '5300', '', 10, 5000, 'start sat', 1),
('Commande', 'C1', '', 10, 5000, 'start sat', 2),
('Commande', 'Ed3000', '', 0, 20000, 'New Box', 3),
('Commande', 'FTA200', '', 9, 5000, 'sam sat', 4),
('Commande', 'HD2000', '', 1, 15000, 'start sat', 5),
('Batterie', 'BL-5c', '', 4, 8000, 'Nokia', 6),
('Batterie', 'BL-4c', '', 5, 8000, 'Nokia', 7),
('Batterie', 'x2', '', 1, 15000, 'Nokia', 8),
('Batterie', 'E17', '', 3, 10000, 'Evertek', 9),
('Batterie', 'D35', '', 1, 16000, 'Evertek', 10),
('Batterie', ' trendy', '', 1, 16000, 'Evertek', 11),
('Batterie', 'E250', '', 5, 8000, 'Samsung', 12),
('Batterie', 'I8190', '', 2, 10000, 'Samsung', 13),
('Batterie', 'S3', '', 1, 16000, 'Samsung', 14),
('Batterie', 'S4', '', 1, 20000, 'Samsung', 15),
('Batterie', 'J7', '', 1, 16000, 'Samsung', 16),
('Batterie', 'J3', '', 2, 16000, 'Samsung', 17),
('Batterie', 'G313', '', 3, 15000, 'Samsung', 18),
('Batterie', 'S7262', '', 1, 15000, 'Samsung', 19),
('Batterie', 'J100', '', 2, 15000, 'Samsung', 20),
('', '', '', 1, 0, '', 21);

-- --------------------------------------------------------

--
-- Structure de la table `vendu`
--

CREATE TABLE IF NOT EXISTS `vendu` (
  `famille` varchar(50) NOT NULL,
  `model` varchar(40) NOT NULL,
  `referance` varchar(50) NOT NULL,
  `Quantite` int(5) NOT NULL,
  `remis` int(7) NOT NULL,
  `Prix` float NOT NULL,
  `date_sortie` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `vendu`
--

INSERT INTO `vendu` (`famille`, `model`, `referance`, `Quantite`, `remis`, `Prix`, `date_sortie`, `id`) VALUES
('Commande', 'New Box', 'Ed3000', 1, 0, 20000, '2017-03-28 19:18:54', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
