# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.8.3-MariaDB-1:10.8.3+maria~jammy)
# Database: CollectionGB
# Generation Time: 2022-08-03 14:31:27 +0000
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
  `imgURL` varchar(1000) DEFAULT '',
  `bookName` varchar(50) NOT NULL DEFAULT '',
  `country` varchar(20) NOT NULL DEFAULT '',
  `bookRating` tinyint(1) unsigned NOT NULL,
  `destinationRating` tinyint(1) unsigned NOT NULL,
  `year` year(4) NOT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `guidebooks` WRITE;
/*!40000 ALTER TABLE `guidebooks` DISABLE KEYS */;

INSERT INTO `guidebooks` (`id`, `imgURL`, `bookName`, `country`, `bookRating`, `destinationRating`, `year`, `deleted`)
VALUES
	(1,'https://images-na.ssl-images-amazon.com/images/I/61hGG71AzHL.jpg','Fontainebleau Fun Bloc','France ',4,5,'2012',0),
	(2,'https://images-na.ssl-images-amazon.com/images/I/71fvxHfh-+L.jpg','Kalymnos Rock Climbing','Greece',5,5,'2015',0),
	(3,'https://imgcdn.ukc2.com/i/277482?fm=jpg&time=1555251300&dpr=1&w=600&s=006ec41c9cfad2405193d3a20d1d257c','Chulilla Climbing Guide','Spain',2,4,'2018',0),
	(4,'https://static.tildacdn.com/tild3864-6438-4530-b831-313532626630/Portada_guia_de_Marg.jpg','Margalef','Spain',3,5,'2017',0),
	(5,'https://images-na.ssl-images-amazon.com/images/I/51jfOgxQ06L._SX354_BO1,204,203,200_.jpg','Squamish Bouldering','Canada',5,5,'2014',0),
	(6,'https://images-na.ssl-images-amazon.com/images/I/51zK8wuCuzL.jpg','North Wales Bouldering ','Wales ',4,4,'2017',0),
	(7,'https://rockfax.com/wp-content/uploads/2016/10/South-Wales-Sport.jpg','South Wales Sport Climbing','Wales',3,3,'2016',0),
	(8,'http://cdn.shopify.com/s/files/1/0528/9200/8604/products/SouthWalesBoulderingGuidebook.jpg?v=1648918424','South Wales Bouldering','Wales',4,3,'2022',0),
	(12,'https://i0.wp.com/rockfax.com/wp-content/uploads/2009/12/France-Cover.jpg?fit=1811%2C2489&ssl=1','Haute Provence','France',3,3,'2010',0),
	(13,'https://www.rockface.com.au/wp-content/uploads/2015/10/ClimbwestWARock.jpg','West Australian Rock','Australia',2,3,'2012',0),
	(14,'https://needlesports-15a42.kxcdn.com/imagecache/010180ec-1a6c-456d-aed9-16f81471f216/Cheddar-Gorge-Climbs_844x1200.jpg','Cheddar Gorge Climbs','UK',4,2,'2015',0),
	(15,'https://rockfax.com/wp-content/uploads/2020/04/Mallorca-Cover-2020.jpg','Spain: Mallorca','Spain',3,4,'2016',0),
	(16,'https://static.vecteezy.com/system/resources/previews/002/398/513/original/blank-book-cover-free-vector.jpg','dog','denmark',2,1,'2000',1),
	(17,'https://static.vecteezy.com/system/resources/previews/002/398/513/original/blank-book-cover-free-vector.jpg','cat in','Kashmir in',4,2,'1905',1),
	(18,'https://static.vecteezy.com/system/resources/previews/002/398/513/original/blank-book-cover-free-vector.jpg','fish','are friends',4,3,'2007',1),
	(19,'https://static.vecteezy.com/system/resources/previews/002/398/513/original/blank-book-cover-free-vector.jpg','cat','and mouse',3,2,'2022',1),
	(20,'https://static.vecteezy.com/system/resources/previews/002/398/513/original/blank-book-cover-free-vector.jpg','hhdhdhd','hdhdhd',1,1,'2010',1);

/*!40000 ALTER TABLE `guidebooks` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
