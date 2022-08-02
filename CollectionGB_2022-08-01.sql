# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.8.3-MariaDB-1:10.8.3+maria~jammy)
# Database: CollectionGB
# Generation Time: 2022-08-02 09:43:17 +0000
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
  `imgURL` varchar(1000) NOT NULL DEFAULT '',
  `bookName` varchar(50) NOT NULL DEFAULT '',
  `country` varchar(20) NOT NULL DEFAULT '',
  `bookRating` tinyint(1) unsigned NOT NULL,
  `destinationRating` tinyint(1) unsigned NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `guidebooks` WRITE;
/*!40000 ALTER TABLE `guidebooks` DISABLE KEYS */;

INSERT INTO `guidebooks` (`id`, `imgURL`, `bookName`, `country`, `bookRating`, `destinationRating`, `year`)
VALUES
	(1,'https://images-na.ssl-images-amazon.com/images/I/61hGG71AzHL.jpg','Fontainebleau Fun Bloc','France ',4,5,'2012'),
	(2,'https://images-na.ssl-images-amazon.com/images/I/71fvxHfh-+L.jpg','Kalymnos Rock Climbing','Greece',5,5,'2015'),
	(3,'https://imgcdn.ukc2.com/i/277482?fm=jpg&time=1555251300&dpr=1&w=600&s=006ec41c9cfad2405193d3a20d1d257c','Chulilla Climbing Guide','Spain',2,4,'2018'),
	(4,'https://static.tildacdn.com/tild3864-6438-4530-b831-313532626630/Portada_guia_de_Marg.jpg','Margalef','Spain',3,5,'2017'),
	(5,'https://images-na.ssl-images-amazon.com/images/I/51jfOgxQ06L._SX354_BO1,204,203,200_.jpg','Squamish Bouldering','Canada',5,5,'2014'),
	(6,'https://images-na.ssl-images-amazon.com/images/I/51zK8wuCuzL.jpg','North Wales Bouldering ','Wales ',4,4,'2017'),
	(7,'https://rockfax.com/wp-content/uploads/2016/10/South-Wales-Sport.jpg','South Wales Sport Climbing','Wales',3,3,'2016'),
	(8,'http://cdn.shopify.com/s/files/1/0528/9200/8604/products/SouthWalesBoulderingGuidebook.jpg?v=1648918424','South Wales Bouldering','Wales',4,3,'2022');

/*!40000 ALTER TABLE `guidebooks` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
