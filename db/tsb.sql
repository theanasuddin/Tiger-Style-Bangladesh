-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 07, 2019 at 04:44 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsb`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `text` text NOT NULL,
  `author` varchar(256) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `text`, `author`, `date`) VALUES
(1, 'Welcome to Our New Website!', 'We are delighted to announce the launch of our freshly designed website! We have been working hard designing and updating our website over the last few months and are excited to officially announce the launch. We hope you like the fresh new look of our brand new website. Our goal was to create an informative, welcoming, and user-friendly platform to move our company forward. With this new website, we desire to provide our visitors with an easier way to learn about TSB’s services and products and also to allow you to browse information easier. The website features a consistent and intuitive style to navigate and find relevant information easily. Our website is mobile responsive, making it easy to use on all browsers and portable devices. We hope that the design will allow you to find the information you need more quickly and easily. We are continuing to update our website with useful information and news regarding our company. So please do check back with TSB for updates. We value your opinion! Please comment below on what you think of our new website. All comments and feedback are welcomed. Please also allow us to know if you cannot find or realize something or would like to put any suggestions for new information or topics. Please feel free to contact us if you need more information at info@tigerstylebd.com. Thank you for visiting and we eagerly wait to hear from you! - TSB Team.', 'Anas Uddin', '2019-09-21'),
(2, 'Greetings from TSB!', 'Greetings from Tiger Style Bangladesh. TSB welcomes you to work with their creative, proactive and inspiring individuals with a passion for perfection. Founders Mohiuddin Ahmed Munir and William Amitav Dobey greet all the vendors to work with their diverse team and creative professionals. TSB embraces your brand\'s values and define a seamless experience for your customers together. Let’s work together to build a great partnership! We are good listeners. We care about what you are exactly looking for. We believe in having partners and not clients. We believe that the premium is in the details. TSB is committed to ensuring excellent development by qualified individuals. We believe a diverse workforce will enhance our ability to fulfill our mission of providing exceptional knitwears throughout the world. - TSB Team.', 'Anas Uddin', '2019-09-22');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

DROP TABLE IF EXISTS `mail`;
CREATE TABLE IF NOT EXISTS `mail` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `search_tsb`
--

DROP TABLE IF EXISTS `search_tsb`;
CREATE TABLE IF NOT EXISTS `search_tsb` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tsb_user_comments`
--

DROP TABLE IF EXISTS `tsb_user_comments`;
CREATE TABLE IF NOT EXISTS `tsb_user_comments` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tsb_user_comments2`
--

DROP TABLE IF EXISTS `tsb_user_comments2`;
CREATE TABLE IF NOT EXISTS `tsb_user_comments2` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
