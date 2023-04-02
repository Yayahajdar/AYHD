-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 30, 2023 at 03:43 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yportef`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_general_ci NOT NULL,
  `subject` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `con_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `con_id`) VALUES
(104, 'fdgqg', 'lolo@gmail.com', 'ddd', 'dfghjkl', 0),
(105, 'fdgqg', 'ay_hd@hotmail.com', 'qgq', 'jghgjhgyug', 0),
(115, 'fdgqg', 'yahdar@gmail.com', 'qgq', 'wxwgdhfjgkhlh;,nbv', 46),
(119, 'sameer', 'samer@gmail.com', 'sv', 'jhciudshdsjqvnsdbh voisqvsqysisqjhfjsdh \r\nslkjh qifjheoui\r\nish iHFOIDHV¨S\r\nISHhv)udoshvbu sd$\r\nslkncHVv\r\nkcCSQFQGQDXG\r\nJDNCICFJ¨QOIJ¨F\r\njijfifj ngo\r\nj\r\njfij,foqj\r\nldjvcopgjqsojg\r\njf,cpogjqspogjsqgj=\r\nozfjcnçàjs=ifjc=sàijf=ià\r\nkjnpoiJNOJ+Ngà\r\nkjfniqsjfnIQJ+NFIQ\r\nJ?QJ+F0GIU+0\r\nodjvkldjb d\r\ndj ojf ojgbe\r\nljcvpodjgc irjh\r\ndkjvpo=gj rijb\r\ndkvj a^gpoja rie\r\nkvjoijgh io=', 50),
(120, 'haj', 'lolo@gmail.com', 'hello', 'kxjkjskcjskcj<klv', 50),
(121, 'lolo', 'lolo@gmail.com', 'for website', 'kcklwvlxwkvh<wxvhxwlvkjhù<', 50);

-- --------------------------------------------------------

--
-- Table structure for table `exper`
--

DROP TABLE IF EXISTS `exper`;
CREATE TABLE IF NOT EXISTS `exper` (
  `exper_id` int NOT NULL AUTO_INCREMENT,
  `dateexp` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `Titreexp` varchar(180) COLLATE utf8mb4_general_ci NOT NULL,
  `descexp` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `id_exp` int NOT NULL,
  PRIMARY KEY (`exper_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exper`
--

INSERT INTO `exper` (`exper_id`, `dateexp`, `Titreexp`, `descexp`, `id_exp`) VALUES
(1, '2005', 'economic', 'yyyyyyyy', 50),
(5, '2005', 'WDDM', 'yyyyyyyy', 50),
(11, '2005', 'informaticien ', 'xjgvbvjg', 46),
(22, '2013 ', 'economic', 'CCC', 46),
(36, '2004', 'uhdudshu', 'jidjifjzifjzi', 46);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id_news` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `dat_sub` date NOT NULL,
  `nlet_id` int NOT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=MyISAM AUTO_INCREMENT=480 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id_news`, `email`, `dat_sub`, `nlet_id`) VALUES
(475, 'yayadroi@gmail.com', '2023-03-25', 46),
(476, 'ay_hd@hotmail.com', '2023-03-25', 50),
(477, 'yayadroi@gmail.com', '2023-03-25', 50),
(478, 'lolo@gmail.com', '2023-03-28', 46);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `projets_id` int NOT NULL AUTO_INCREMENT,
  `Titre` varchar(180) NOT NULL,
  `descriptif` varchar(250) NOT NULL,
  `ful_desc` varchar(1024) NOT NULL DEFAULT 'votre project descriptif',
  `imgpro` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'image/1.png',
  `author` varchar(256) NOT NULL,
  `date` date NOT NULL,
  `proid` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`projets_id`),
  UNIQUE KEY `id` (`projets_id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projets_id`, `Titre`, `descriptif`, `ful_desc`, `imgpro`, `author`, `date`, `proid`) VALUES
(1, 'titre de projet', 'text court descbdshvdxkj ghqsjkhg<shu', 'votre project descriptif', 'images/1.png', 'hygygyg', '2022-12-22', 1),
(58, 'web site ', ' ', ' ', 'images/abs100-Abstract-Collage-no.-1-02-416x624.jpg', 'qdsfg', '2023-04-01', 50),
(60, 'web site ', ' ', ' ', 'images/Capture d’écran (3).png', 'wfdxgfhgh', '2023-04-06', 46),
(62, 'AI  projet 3', ' ', ' ', 'images/Capture d’écran 2023-03-18 221016.png', 'mat', '2023-03-29', 46),
(63, 'web site ', ' ghjkl', 'votre project descriptif', 'images/0_ZEPJsASfB2z7hi_0.png', 'bnj,klm', '2023-03-23', 46),
(65, 'web site ', ' hgf', 'votre project descriptif', 'images/abs100-Abstract-Collage-no.-1-02-416x624.jpg', 'hgfds', '2023-03-22', 46),
(67, 'yyyhdushduhsqu', ' ', ' ', 'images/1640.jpg', 'sssss', '2023-03-15', 50),
(69, 'web ', ' ', ' ', 'images/Les-avantages-de-la-certification-PMP.jpg', 'yahya', '2023-03-31', 46);

-- --------------------------------------------------------

--
-- Table structure for table `skillbar`
--

DROP TABLE IF EXISTS `skillbar`;
CREATE TABLE IF NOT EXISTS `skillbar` (
  `id_skill` int NOT NULL AUTO_INCREMENT,
  `sname` varchar(10) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'skill1',
  `percent` int NOT NULL DEFAULT '50',
  `color` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'orange',
  `sk_id` int NOT NULL,
  PRIMARY KEY (`id_skill`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skillbar`
--

INSERT INTO `skillbar` (`id_skill`, `sname`, `percent`, `color`, `sk_id`) VALUES
(1, 'skill1', 50, 'red', 0),
(24, 'css', 50, 'black', 46),
(21, 'css', 50, 'green', 50),
(15, 'java ', 70, 'red', 46),
(20, 'html', 40, 'orange', 50),
(22, 'java ', 70, 'red', 50),
(30, 'htnl', 70, 'orange', 46);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `proid` int NOT NULL DEFAULT '1',
  `username` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'username ',
  `email` varchar(180) COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Images/1.jpg',
  `pass` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  `email2` varchar(180) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'work-email@work.com',
  `location` varchar(250) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'france- paris ',
  `tele` int NOT NULL DEFAULT '0',
  `descrip` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'write your word here',
  `role` int NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `proid`, `username`, `email`, `img`, `pass`, `email2`, `location`, `tele`, `descrip`, `role`) VALUES
(46, 1, 'yahya', 'lolo@gmail.com', 'images/1.jpg', '$2y$10$EFPOQiv.KdODa4Kn2Rt1hu22d8pc5Kl2mftLW9ZI0a4mflCOaRP/O', 'lolopro@gmail.com', 'tours', 7879798, 'hello i am lolo', 0),
(50, 0, 'mat', 'mat@g.com', 'images/colorful-abstract-desktop-4k-wallpaper-27.jpg', '$2y$10$zLGbAAf37AuLhwacOqG0mewitn//Agbdmoy6kb5cJ05WfP/btmIja', 'work-email@work.com', 'france- paris ', 2147483647, 'write your word here', 0),
(51, 1, 'toto', 'toto@gmail.com', 'Images/1.png', '$2y$10$DqnhTwE6.k0pAbwgwBZxIuHs29LzwPD0OMVR/7RNV8PjVJeyQ56nm', 'work-email@work.com', 'france- paris ', 0, 'write your word here', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
