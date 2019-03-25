-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 23, 2019 at 11:58 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_pharma`
--

DROP TABLE IF EXISTS `add_pharma`;
CREATE TABLE IF NOT EXISTS `add_pharma` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pharma_nm` varchar(255) CHARACTER SET utf8 NOT NULL,
  `EGM` longtext CHARACTER SET utf8 NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_pharma`
--

INSERT INTO `add_pharma` (`ID`, `pharma_nm`, `EGM`, `city`) VALUES
(12, 'Ariyo Pharmacy', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"1200\" height=\"500\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=Ariyo%20Pharmacy&t=&z=15&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://www.emojilib.com\">emojilib.com</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:1200px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1200px;}</style></div>', 'Erbil'),
(14, 'Arena Pharmacy', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"1200\" height=\"500\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=%20slemani&t=&z=15&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://www.emojilib.com\">emojilib.com</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:1200px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1200px;}</style></div>', 'Slemani');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nm` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pp` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `nm`, `pp`) VALUES
(2, 'admin', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
