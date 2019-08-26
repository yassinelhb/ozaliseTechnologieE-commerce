-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2017 at 12:24 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `otechnologie`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `user-prenom` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_pass` varchar(20) NOT NULL,
  `user-img` varchar(80) NOT NULL,
  `user_date` date NOT NULL,
  `date_cre` varchar(30) NOT NULL,
  `sexe` varchar(5) NOT NULL,
  PRIMARY KEY (`id`,`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user-prenom`, `user_name`, `user_email`, `user_pass`, `user-img`, `user_date`, `date_cre`, `sexe`) VALUES
(1, 'yassine', 'lahbib', 'yassinelahbib@gmail.com', 'azertyu', 'IMG_6654.jpg', '1996-09-11', '', 'homme');

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `numcom` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `qtee` int(11) NOT NULL,
  `date_com` varchar(39) NOT NULL,
  `confirme` varchar(3) NOT NULL,
  `paiment` varchar(30) NOT NULL,
  `vu` varchar(3) NOT NULL,
  PRIMARY KEY (`numcom`),
  KEY `pro_id` (`pro_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=130 ;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`numcom`, `pro_id`, `user_id`, `qtee`, `date_com`, `confirme`, `paiment`, `vu`) VALUES
(114, 19, 1, 1, '2017-04-22 22:44:08', 'oui', 'Virement bancaire', 'oui'),
(117, 30, 2, 3, '2017-04-24 11:36:26', 'oui', 'Virement bancaire', 'oui'),
(126, 19, 2, 5, '2017-04-28 08:53:48', 'oui', 'Virement bancaire', 'oui'),
(128, 19, 24, 3, '2017-04-29 13:18:22', 'oui', 'Virement bancaire', 'oui'),
(129, 19, 25, 2, '2017-05-04 16:08:28', 'oui', 'Virement bancaire', 'oui');

-- --------------------------------------------------------

--
-- Table structure for table `fichet`
--

CREATE TABLE IF NOT EXISTS `fichet` (
  `design` varchar(30) DEFAULT NULL,
  `dimensions` varchar(40) DEFAULT NULL,
  `poids` varchar(25) DEFAULT NULL,
  `processeur` varchar(100) DEFAULT NULL,
  `syse` varchar(50) DEFAULT NULL,
  `resolusion` varchar(40) DEFAULT NULL,
  `apphoto` varchar(70) DEFAULT NULL,
  `memoire` varchar(50) DEFAULT NULL,
  `catg` varchar(30) DEFAULT NULL,
  `date_sortie` varchar(30) DEFAULT NULL,
  `referance` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`referance`),
  KEY `referance` (`referance`),
  KEY `referance_2` (`referance`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fichet`
--

INSERT INTO `fichet` (`design`, `dimensions`, `poids`, `processeur`, `syse`, `resolusion`, `apphoto`, `memoire`, `catg`, `date_sortie`, `referance`) VALUES
('Classique (Monobloc)', '118,00 x 50,20 x 13,50 mm', '81,00 g', '?', '?', '240 x 320 px (2,40") 167 ppi', '0,3 Mpx', '?', 'x', '22/08/2016', '150DS'),
('Classique (full tactile)', '146 x 70,9 x 8,19 mm', '135 grammes', 'Qualcomm MSM8916 Snapdragon 410 - 1.2 GHz', 'Android 4.4 KitKat', '1280 x 720 pixels', '13 mÃ©gapixels avec Flash LED + Auto Focus', '16 Go, 2 Go RAM', '150 Mbps (Cat.4)', '02/09/2015', 'Desire626'),
('ASUS FX753VD-GC012', '', '3 kg', 'Intel Core i7', 'Endless OS', '1920 x 1080 pixels', '', '8 Go', '', '', 'FX753VD-GC012'),
('Classique (full tactile)', '124,4 x 59,2 x 9 mm', '132 grammes', 'Apple A6 - 1.3 GHz', 'IOS', '1136 x 640 pixels', '8 mÃ©gapixels avec Flash LED + Auto Focus', '8 Go, 1 Go RAM', '100 Mbps (Cat.3)', '16/03/2014', 'i5c32b'),
('zrzfe', 'gfhf', 'ghf', 'jgh', 'gfhjgh', '22gh', 'dgf', 'ghf', 'ghf', '11/02/5213', 'i732n'),
('Classique (full tactile)', '138,1 x 67 x 6,9 mm', '129 grammes', 'Apple A8 - 1.4 GHz', 'iOS', '1334 x 750 pixels', '8 mÃ©gapixels avec Flash double LED + Auto Focus', '16 Go, 1 Go RAM', '150 Mbps (Cat.4)', 'Septembre 2014', 'MGA82ZD/A'),
('Classique (full tactile)', '142.3 x 71 x 7,9 mm', '138 grammes', 'Spreadtrum SC8830 - 1.2 GHz', 'Android 5.1 Lollipop', '1280 x 720 pixels', '8 mÃ©gapixels avec Flash LED + Auto Focus', '8 Go, 1,5 Go RAM', '150 Mbps (Cat.4)', '20/04/2016', 'SM-J320FZKNXEF'),
('Classique (full tactile)', '142 x 71,8 x 7,9 mm', '146 grammes', 'Qualcomm MSM8916 Snapdragon 410 - 1.2 GHz', 'Android 5.1 Lollipop', '1280 x 720 pixels', '13 mÃ©gapixels avec Flash LED + Auto Focus', '8 Go, 1,5 Go RAM', '150 Mbps (Cat.4)', '02/08/2015', 'SM-J500FN');

-- --------------------------------------------------------

--
-- Table structure for table `formweb`
--

CREATE TABLE IF NOT EXISTS `formweb` (
  `imgleft` varchar(100) NOT NULL,
  `imgright` varchar(100) NOT NULL,
  `imgtop` varchar(100) NOT NULL,
  `imgcarousel1` varchar(100) NOT NULL,
  `imgcarousel2` varchar(100) NOT NULL,
  `imgbot1` varchar(100) NOT NULL,
  `imgbot2` varchar(100) NOT NULL,
  `imgbot3` varchar(100) NOT NULL,
  `imgbcar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formweb`
--

INSERT INTO `formweb` (`imgleft`, `imgright`, `imgtop`, `imgcarousel1`, `imgcarousel2`, `imgbot1`, `imgbot2`, `imgbot3`, `imgbcar`) VALUES
('60.jpg', '50.jpg', 'public.jpg', 'pp.jpg', 'pp3.jpg', 'publ1.jpg', 'publ2.jpg', 'publ3.jpg', 'pp2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mailbox`
--

CREATE TABLE IF NOT EXISTS `mailbox` (
  `nummail` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `objet` varchar(50) NOT NULL,
  `refcom` varchar(40) NOT NULL,
  `vu` varchar(3) NOT NULL,
  `date_msg` varchar(20) NOT NULL,
  PRIMARY KEY (`nummail`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `mailbox`
--

INSERT INTO `mailbox` (`nummail`, `user_id`, `message`, `objet`, `refcom`, `vu`, `date_msg`) VALUES
(1, 2, 'problem', 'cgjfgh', 'asus', 'oui', '24 Apr 2017'),
(9, 2, 'aaa', 'fdbdfbdf', 'i5c32b', 'oui', '28 Apr 2017');

-- --------------------------------------------------------

--
-- Table structure for table `mesliste`
--

CREATE TABLE IF NOT EXISTS `mesliste` (
  `numliste` int(11) NOT NULL AUTO_INCREMENT,
  `numpro` int(11) NOT NULL,
  `numuser` int(11) NOT NULL,
  `date_cree` varchar(50) NOT NULL,
  PRIMARY KEY (`numliste`),
  KEY `fk` (`numpro`),
  KEY `fk2` (`numuser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `mesliste`
--

INSERT INTO `mesliste` (`numliste`, `numpro`, `numuser`, `date_cree`) VALUES
(4, 19, 2, '2017-02-06 13:53:19'),
(5, 19, 2, '2017-02-06 13:53:36'),
(8, 19, 2, '2017-04-05 09:51:59'),
(11, 19, 2, '2017-04-18 15:43:57'),
(12, 30, 1, '2017-04-23 12:23:57'),
(13, 22, 1, '2017-04-23 14:45:32'),
(14, 19, 2, '2017-04-24 11:35:22'),
(19, 30, 2, '2017-04-28 08:52:42'),
(20, 19, 24, '2017-04-29 13:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `marque` varchar(30) NOT NULL,
  `referance` varchar(30) NOT NULL,
  `prix` float NOT NULL,
  `img` varchar(100) NOT NULL,
  `img_face` varchar(100) NOT NULL,
  `img_darrier` varchar(100) NOT NULL,
  `etat` varchar(20) NOT NULL,
  `color` varchar(15) NOT NULL,
  `quantite` int(5) NOT NULL,
  `date_entre` varchar(50) NOT NULL,
  `description` varchar(2000) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `datefinsolde` varchar(35) NOT NULL,
  `pourcentage` float NOT NULL,
  `star` int(11) NOT NULL,
  `prixsolde` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `referance` (`referance`),
  KEY `id` (`id`),
  FULLTEXT KEY `description` (`description`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id`, `categorie`, `model`, `marque`, `referance`, `prix`, `img`, `img_face`, `img_darrier`, `etat`, `color`, `quantite`, `date_entre`, `description`, `datefinsolde`, `pourcentage`, `star`, `prixsolde`) VALUES
(19, 'mobile', 'iphone', 'iphone 6 16Gb', 'MGA82ZD/A', 750, 'iphone6.jpg', 'iphonef6.jpg', 'iphonea6.jpg', 'Neuf', '#d4bba3', 10, '2017-01-28 12:41:39', 'L iPhone 6 signe Apple est sorti en septembre 2014. Avec son design épuré en verre et en aluminium, l’iPhone 6 est plus grand et offre désormais un écran multi-touch Retina HD de 4,7 pouces (résolution de 1 334 x 750 pixels à 326 ppp), contre 4 pouces...', '', 0, 4, 0),
(22, 'mobile', 'HTC', 'HTC Desire 626', 'Desire626', 620, 'htc-desire-626-bleu-lagon.jpg', 'htc-desire-626-a.jpg', 'htc-desire-626-f.jpg', 'Neuf', '#0000a0', 5, '2017-04-22 22:13:53', 'Le Desire 626 d''HTC est un smartphone fonctionnant sous Android 5.1 et compatible 4G. Decliné en une multitude de couleurs, cet appareil à écran 5 pouces bénéficie pour son prix de 300 euros d''un processeur quadricoeur, de 2 Go de mémoire vive et de 16 Go de mémoire interne.', '', 0, 1, 0),
(27, 'mobile', 'Iphone', 'Iphone 5c 32Gb\n', 'i5c32b', 273, 'iphone-5c-16-go-blanca.jpg', 'iphone-5c-16-go-blanc.jpg', 'iphone-5c-16-go-blancf.jpg', 'Neuf', '#ffffff', 11, '2017-04-23 11:12:54', 'Apple présente l''iPhone 5C, remplaçant de l''iPhone 5 sorti en 2012. Il en conserve l''écran Retina de 4" (1136 x 640 pixels), la puce A6 mais aussi l''appareil photo principal de 8 mégapixels qui vous permettra de filmer en 1080p. FaceTime profitera tout de même d''une webcam mieux définie avec une résolution de 1,9 mégapixels alors que la batterie offrira une plus grande autonomie : 10 heures navigation en 4G LTE, 10 heures conversation, 10 heures en lecture vidéo.\n', '', 0, 1, 0),
(28, 'mobile', 'Samsung ', 'Samsung Galaxy J5 4G\n', 'SM-J500FN', 499, 'j54g.jpg', 'telephone-portable-samsung-galaxy-j5-4g-gold-tunisie (1).jpg', 'telephone-portable-samsung-galaxy-j5-4g-gold-tunisie.jpg', 'Neuf', '#ecc49b', 6, '2017-04-23 11:22:54', 'Si son petit frère le Galaxy J1 était un smartphone d''entrée de gamme aux capacités limitées, le Samsung Galaxy J5 se positionne quant à lui sur le segment milieu de gamme, en disposant d''une fiche technique bien équipée. ', '', 0, 0, 0),
(29, 'laptop', 'Asus', 'ASUS GMAER ', 'FX753VD-GC012', 2578, 'LD0004179801_2.jpg', 'LD0004179806_2.jpg', 'LD0004179821_2.jpg', 'Neuf', '#000000', 1, '2017-04-23 12:11:28', 'Intel Core i7-7700HQ 8 Go 1 To 17.3" LED Full HD NVIDIA GeForce GTX 1050 4 Go Wi-Fi AC/Bluetooth Webcam Endless OS - Bonne affaire (article utilisé, garantie 3 mois', '', 0, 0, 0),
(30, 'mobile', 'Nokia', 'Nokia 150 Ds', '150DS', 85, 'LD0004192495_2.jpg', 'LD0004192500_2.jpg', '', 'Neuf', '#000000', 16, '2017-04-23 12:22:56', 'Le Nokia 150 est un téléphone mobile 2G Dual SIM qui vous permet de restez connecter à tous vos contacts, à internet ou encore de suivre vos réseaux sociaux. Compact et élégant, profitez d''un téléphone design et pratique à longue autonomie.\n', '', 0, 1, 0),
(35, 'mobile', 'Samsung', 'Galaxy j3 2016', 'SM-J320FZKNXEF', 399, 'j32.jpg', 'j31.jpg', 'j3.jpg', 'Neuf', '#000000', 6, '2017-04-26 23:02:04', 'Le Samsung Galaxy J3 (2016) ou Ã©galement appelÃ© J3, se positionne entre le J1 et le J5. Il occupe donc le segment milieu de gamme, en disposant dune fiche technique correcte, trÃ¨s proche du J5 sorti en 2015. Une rÃ©fÃ©rence de choix puisque le J5 est lun des best-sellers de Samsung.\r\n', '', 0, 0, 0),
(36, 'mobile', 'iphone', 'Iphone 7 32Gb', 'i732n', 1669, '1.jpg', '2.jpg', '3.jpg', 'Neuf', '#000000', 4, '2017-04-29 13:28:44', 'jrtjfyjhsldgdhh;lfd', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_pass` varchar(20) NOT NULL,
  `user_sexe` varchar(5) NOT NULL,
  `user_date` date NOT NULL,
  `user_prenom` varchar(20) NOT NULL,
  `user_img` varchar(100) NOT NULL DEFAULT 'default.png',
  `personnalite` varchar(10) NOT NULL,
  `societe` varchar(30) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `etat` varchar(20) NOT NULL,
  `cod_postal` int(10) NOT NULL,
  `pays` varchar(20) NOT NULL,
  `num_tel` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_email` (`user_email`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_sexe`, `user_date`, `user_prenom`, `user_img`, `personnalite`, `societe`, `adresse`, `ville`, `etat`, `cod_postal`, `pays`, `num_tel`) VALUES
(1, 'Yassine', 'yassinelahbib@gmail.com', 'azertyu', 'homme', '2004-09-11', 'Lahbib', 'IMG_6654.JPG', 'admin', '', 'Habib bourguiba', 'El alia', 'Bizerte', 7016, 'Tunisie', 29902660),
(2, 'lahbib', 'mklahbib@gmail.com', 'azerty', 'homme', '2017-04-20', 'karimlgfb', 'default.png', 'user', 'Ozalise technologie', 'fd', 'El alia', 'Bizerte', 7016, 'Tunisie', 22732431),
(23, 'test', 'test@test.com', 'azerty', 'femme', '2004-01-01', 'test', 'default.png', 'user', '', '', '', '', 0, '', 0),
(24, 'lahbib', 'aa@aa.com', 'AZERTY', 'homme', '1996-09-10', 'yasine', 'default.png', 'user', 'OZALISE TECHNOLOGIE', 'AZE', 'AZE', 'AEZR', 7016, 'TUNISIE', 22555555),
(25, 'khaoula', 'khaoulajri@gmail.com', 'khaoula', 'femme', '0000-00-00', 'Jridi', 'default.png', 'user', '', 'Tunis', 'Tunis', 'Tunis', 1002, 'Tunisie', 88775566);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fka` FOREIGN KEY (`pro_id`) REFERENCES `produit` (`id`),
  ADD CONSTRAINT `fkb` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `fichet`
--
ALTER TABLE `fichet`
  ADD CONSTRAINT `kk` FOREIGN KEY (`referance`) REFERENCES `produit` (`referance`);

--
-- Constraints for table `mailbox`
--
ALTER TABLE `mailbox`
  ADD CONSTRAINT `fkp` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `mesliste`
--
ALTER TABLE `mesliste`
  ADD CONSTRAINT `fk` FOREIGN KEY (`numpro`) REFERENCES `produit` (`id`),
  ADD CONSTRAINT `fk2` FOREIGN KEY (`numuser`) REFERENCES `users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
