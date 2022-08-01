# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.8.3-MariaDB-1:10.8.3+maria~jammy)
# Database: CollectionGB
# Generation Time: 2022-08-01 09:45:46 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table guidebooks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `guidebooks`;

CREATE TABLE `guidebooks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `bookName` varchar(50) NOT NULL DEFAULT '',
  `country` varchar(20) NOT NULL DEFAULT '',
  `bookRating` tinyint(1) unsigned NOT NULL,
  `destinationRating` tinyint(1) unsigned NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `guidebooks` WRITE;
/*!40000 ALTER TABLE `guidebooks` DISABLE KEYS */;

INSERT INTO `guidebooks` (`id`, `bookName`, `country`, `bookRating`, `destinationRating`, `year`)
VALUES
	(1,'Fontainebleau Fun Bloc','France ',4,5,'2012'),
	(2,'Kalymnos Rock Climbing','Greece',5,5,'2015'),
	(3,'Chulilla Climbing Guide','Spain',2,4,'2018'),
	(4,'Margalef','Spain',3,5,'2017'),
	(5,'Squamish Bouldering','Canada',5,5,'2014'),
	(6,'North Wales Bouldering ','Wales ',4,4,'2017'),
	(7,'South Wales Sport Climbing','Wales',3,3,'2016'),
	(8,'South Wales Bouldering','Wales',4,3,'2022');

/*!40000 ALTER TABLE `guidebooks` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
