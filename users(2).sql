-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2017 at 04:46 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shoubikloubik`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_pass` varchar(20) NOT NULL,
  `user_desc` varchar(100) NOT NULL,
  `user_sexe` varchar(5) NOT NULL,
  `user_date` date NOT NULL,
  `user_skype` varchar(50) NOT NULL,
  `user_insta` varchar(50) NOT NULL,
  `user_fb` varchar(50) NOT NULL,
  `user_prenom` varchar(20) NOT NULL,
  `user_city` varchar(50) NOT NULL,
  `user_img` varchar(100) NOT NULL DEFAULT 'default.png',
  `personnalite` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_email` (`user_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_desc`, `user_sexe`, `user_date`, `user_skype`, `user_insta`, `user_fb`, `user_prenom`, `user_city`, `user_img`, `personnalite`) VALUES
(1, 'lahbib', 'yassinelahbib@gmail.com', 'azertyu', '', 'homme', '1996-09-11', '', '', '', 'yassine', '', 'IMG_6602.jpg', 'admin'),
(2, 'lahbib', 'mklahbib@gmail.com', 'azertyu', '', '', '1988-00-00', '', '', '', 'karim', 'homme', 'default.png', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
