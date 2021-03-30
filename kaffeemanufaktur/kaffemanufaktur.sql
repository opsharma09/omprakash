-- MySQL dump 10.13  Distrib 5.7.31, for Linux (x86_64)
--
-- Host: localhost    Database: kaffemanufaktur
-- ------------------------------------------------------
-- Server version	5.7.31-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `add_to_cart`
--

DROP TABLE IF EXISTS `add_to_cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `add_to_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `availability_details_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `add_to_cart`
--

LOCK TABLES `add_to_cart` WRITE;
/*!40000 ALTER TABLE `add_to_cart` DISABLE KEYS */;
INSERT INTO `add_to_cart` VALUES (21,5,NULL,1,1,'2020-08-22 12:30:40','2020-08-22 12:30:40'),(22,8,NULL,1,1,'2020-08-22 12:31:33','2020-08-22 12:31:33'),(26,21,1,2,1,'2020-08-24 13:07:45','2020-08-24 13:07:45');
/*!40000 ALTER TABLE `add_to_cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `availability`
--

DROP TABLE IF EXISTS `availability`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `availability` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_details_id` int(11) NOT NULL,
  `size` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `availability`
--

LOCK TABLES `availability` WRITE;
/*!40000 ALTER TABLE `availability` DISABLE KEYS */;
INSERT INTO `availability` VALUES (1,1,'1000 g Packung',10,'22.00','2020-08-21 12:32:06','2020-08-22 07:26:54'),(2,1,'500 g Packung',10,'12.00','2020-08-21 12:32:06','2020-08-22 07:27:01'),(3,1,'250 g Packung',10,'06.30','2020-08-21 12:32:06','2020-08-22 07:27:05'),(4,4,'1000 g Packung',10,'22.00','2020-08-21 12:32:06','2020-08-22 07:27:10'),(5,4,'500 g Packung',10,'12.00','2020-08-21 12:32:06','2020-08-22 07:27:15'),(6,4,'250 g Packung',10,'06.30','2020-08-21 12:32:06','2020-08-22 07:27:20'),(7,7,'1000 g Packung',10,'22.00','2020-08-21 12:32:06','2020-08-22 07:27:25'),(8,7,'500 g Packung',10,'12.00','2020-08-21 12:32:06','2020-08-22 07:27:30'),(9,7,'250 g Packung',10,'06.30','2020-08-21 12:32:06','2020-08-22 07:27:34'),(10,10,'1000 g Packung',10,'22.00','2020-08-21 12:32:06','2020-08-22 07:27:39'),(11,10,'500 g Packung',10,'12.00','2020-08-21 12:32:06','2020-08-22 07:27:44'),(12,10,'250 g Packung',10,'06.30','2020-08-21 12:32:06','2020-08-22 07:27:51'),(13,13,'250 g Packung',10,'06.96','2020-08-21 12:32:06','2020-08-22 07:27:56'),(14,14,'250 g Packung',10,'06.96','2020-08-21 12:32:06','2020-08-22 07:28:01'),(15,15,'250 g Packung',10,'06.96','2020-08-21 12:32:06','2020-08-22 07:28:04'),(16,16,'1000 g Packung',10,'24.40','2020-08-21 12:32:06','2020-08-22 07:28:04'),(17,16,'500 g Packung',10,'12.90','2020-08-21 12:32:06','2020-08-22 07:28:04'),(18,16,'250 g Packung',10,'6.70','2020-08-21 12:32:06','2020-08-22 07:28:04'),(19,17,'1000 g Packung',10,'24.40','2020-08-21 12:32:06','2020-08-22 07:28:04'),(20,17,'500 g Packung',10,'12.90','2020-08-21 12:32:06','2020-08-22 07:28:04'),(21,17,'250 g Packung',10,'6.70','2020-08-21 12:32:06','2020-08-22 07:28:04'),(22,18,'1000 g Packung',10,'24.40','2020-08-21 12:32:06','2020-08-22 07:28:04'),(23,18,'500 g Packung',10,'12.90','2020-08-21 12:32:06','2020-08-22 07:28:04'),(24,18,'250 g Packung',10,'6.70','2020-08-21 12:32:06','2020-08-22 07:28:04'),(25,19,'1000 g Packung',10,'24.40','2020-08-21 12:32:06','2020-08-22 07:28:04'),(26,19,'500 g Packung',10,'12.90','2020-08-21 12:32:06','2020-08-22 07:28:04'),(27,19,'250 g Packung',10,'6.70','2020-08-21 12:32:06','2020-08-22 07:28:04'),(28,20,'1000 g Packung',10,'24.40','2020-08-21 12:32:06','2020-08-22 07:28:04'),(29,20,'500 g Packung',10,'12.90','2020-08-21 12:32:06','2020-08-22 07:28:04'),(30,20,'250 g Packung',10,'6.70','2020-08-21 12:32:06','2020-08-22 07:28:04'),(31,21,'1000 g Packung',10,'24.40','2020-08-21 12:32:06','2020-08-22 07:28:04'),(32,21,'500 g Packung',10,'12.90','2020-08-21 12:32:06','2020-08-22 07:28:04'),(33,21,'250 g Packung',10,'6.70','2020-08-21 12:32:06','2020-08-22 07:28:04'),(34,22,'1000 g Packung',10,'24.40','2020-08-21 12:32:06','2020-08-22 07:28:04'),(35,22,'500 g Packung',10,'12.90','2020-08-21 12:32:06','2020-08-22 07:28:04'),(36,22,'250 g Packung',10,'6.70','2020-08-21 12:32:06','2020-08-22 07:28:04'),(37,23,'250 g Packung',10,'06.96','2020-08-21 12:32:06','2020-08-22 07:27:20'),(38,24,'250 g Packung',10,'06.96','2020-08-21 12:32:06','2020-08-22 07:27:34'),(39,25,'250 g Packung',10,'06.96','2020-08-21 12:32:06','2020-08-22 07:27:51'),(40,26,'250 g Packung',10,'06.96','2020-08-21 12:32:06','2020-08-22 07:27:56'),(41,27,'250 g Packung',10,'06.96','2020-08-21 12:32:06','2020-08-22 07:28:01'),(42,28,'250 g Packung',10,'06.96','2020-08-21 12:32:06','2020-08-22 07:28:04'),(43,29,'250 g Packung',10,'06.96','2020-08-21 12:32:06','2020-08-22 07:28:04');
/*!40000 ALTER TABLE `availability` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_category`
--

DROP TABLE IF EXISTS `product_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `staus` enum('0','1') NOT NULL DEFAULT '0',
  `category` enum('1','2','3','4','5') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_category`
--

LOCK TABLES `product_category` WRITE;
/*!40000 ALTER TABLE `product_category` DISABLE KEYS */;
INSERT INTO `product_category` VALUES (3,'Kaffee','0','2','2020-08-21 07:10:25','2020-08-21 07:10:25'),(4,'Espresso','0','2','2020-08-21 07:10:36','2020-08-21 07:10:36'),(5,'Nach Zubereitungsempfehlung','0','2','2020-08-25 09:13:03','2020-08-25 09:13:03'),(6,'Nach Aroma','0','2','2020-08-25 09:13:49','2020-08-25 09:13:49'),(7,'Nach Region','0','2','2020-08-25 09:14:06','2020-08-25 09:14:06'),(8,'Wasserkocher & Kaffeemaschinen','0','3','2020-08-25 09:14:54','2020-08-25 09:14:54'),(9,'Mühlen','0','3','2020-08-25 09:21:26','2020-08-25 09:21:26'),(10,'Handfilter','0','3','2020-08-25 09:22:09','2020-08-25 09:22:09'),(11,'Manuelle Zubereiter','0','3','2020-08-25 09:22:27','2020-08-25 09:22:27'),(12,'Espressozubehör','0','3','2020-08-25 09:22:39','2020-08-25 09:22:39'),(13,'Geschirr','0','3','2020-08-25 09:22:49','2020-08-25 09:22:49'),(14,'Bücher','0','3','2020-08-25 09:23:01','2020-08-25 09:23:01'),(15,'Nach Marke','0','3','2020-08-25 09:23:18','2020-08-25 09:23:18');
/*!40000 ALTER TABLE `product_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_details`
--

DROP TABLE IF EXISTS `product_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_details`
--

LOCK TABLES `product_details` WRITE;
/*!40000 ALTER TABLE `product_details` DISABLE KEYS */;
INSERT INTO `product_details` VALUES (1,13,'ganze Bohne','2020-08-21 12:03:45','2020-08-21 12:06:15'),(4,13,'gemahlen - Filterkaffee','2020-08-21 12:03:45','2020-08-21 12:06:15'),(7,13,'gemahlen - Stempelkanne','2020-08-21 12:03:45','2020-08-21 12:06:15'),(10,13,'gemahlen - Karlsbader Kanne','2020-08-21 12:03:45','2020-08-21 12:06:15'),(13,14,'ganze Bohne','2020-08-21 12:03:45','2020-08-21 12:08:46'),(14,14,'gemahlen - Filterkaffee','2020-08-21 12:03:45','2020-08-21 12:06:15'),(15,14,'gemahlen - Stempelkanne','2020-08-21 12:03:45','2020-08-21 12:06:15'),(16,15,'ganze Bohne','2020-08-21 12:03:45','2020-08-21 12:06:15'),(17,15,'gemahlen - Filterkaffee','2020-08-21 12:03:45','2020-08-21 12:06:15'),(18,15,'gemahlen - Stempelkanne','2020-08-21 12:03:45','2020-08-21 12:06:15'),(19,15,'gemahlen - Karlsbader Kanne','2020-08-21 12:03:45','2020-08-21 12:06:15'),(20,15,'gemahlen - Espresso Siebträger','2020-08-21 12:03:45','2020-08-21 12:06:15'),(21,15,'gemahlen - Mokka (puderfein)','2020-08-21 12:03:45','2020-08-21 12:06:15'),(22,15,'gemahlen - Espresso Herdkännchen','2020-08-21 12:03:45','2020-08-21 12:06:15'),(23,16,'ganze Bohne','2020-08-21 12:03:45','2020-08-21 12:06:15'),(24,16,'gemahlen - Filterkaffee','2020-08-21 12:03:45','2020-08-21 12:06:15'),(25,16,'gemahlen - Stempelkanne','2020-08-21 12:03:45','2020-08-21 12:06:15'),(26,16,'gemahlen - Karlsbader Kanne','2020-08-21 12:03:45','2020-08-21 12:06:15'),(27,16,'gemahlen - Espresso Siebträger','2020-08-21 12:03:45','2020-08-21 12:06:15'),(28,16,'gemahlen - Mokka (puderfein)','2020-08-21 12:03:45','2020-08-21 12:06:15'),(29,16,'gemahlen - Espresso Herdkännchen','2020-08-21 12:03:45','2020-08-21 12:06:15');
/*!40000 ALTER TABLE `product_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_sub_category`
--

DROP TABLE IF EXISTS `product_sub_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_sub_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_sub_category`
--

LOCK TABLES `product_sub_category` WRITE;
/*!40000 ALTER TABLE `product_sub_category` DISABLE KEYS */;
INSERT INTO `product_sub_category` VALUES (11,'Kaffee Blends',3,1,'2020-08-21 07:36:53','2020-08-21 07:58:07'),(12,'Espresso Blends',4,1,'2020-08-24 12:28:41','2020-08-24 12:28:41'),(13,'Drip-Bags',3,1,'2020-08-25 09:33:20','2020-08-25 09:33:20'),(14,'Sortenreine Kaffees',3,1,'2020-08-25 09:33:56','2020-08-25 09:33:56'),(15,'Bio Kaffees',3,1,'2020-08-25 09:34:12','2020-08-25 09:34:12'),(16,'Special Editions',3,1,'2020-08-25 09:34:25','2020-08-25 09:34:25'),(17,'Probierpakete',3,1,'2020-08-25 09:34:48','2020-08-25 09:34:48'),(18,'Drip-Bag Collections',3,1,'2020-08-25 09:35:03','2020-08-25 09:35:03'),(19,'Sortenreine Espressi',4,1,'2020-08-25 09:35:38','2020-08-25 09:35:38'),(20,'Bio Espresso',4,1,'2020-08-25 09:35:52','2020-08-25 09:35:52'),(21,'Handfilter',5,1,'2020-08-25 09:39:27','2020-08-25 09:39:27'),(22,'Filter',5,1,'2020-08-25 09:39:44','2020-08-25 09:39:44'),(23,'French Press',5,1,'2020-08-25 09:40:01','2020-08-25 09:40:01'),(24,'Herdkanne',5,1,'2020-08-25 09:40:16','2020-08-25 09:40:16'),(25,'Siebträger',5,1,'2020-08-25 09:40:34','2020-08-25 09:40:34'),(26,'Syphon',5,1,'2020-08-25 09:40:47','2020-08-25 09:40:47'),(27,'Vollautomat',5,1,'2020-08-25 09:41:05','2020-08-25 09:41:05'),(28,'Erdig',6,1,'2020-08-25 09:41:31','2020-08-25 09:41:31'),(29,'Kräuter',6,1,'2020-08-25 09:41:43','2020-08-25 09:41:43'),(30,'Röstbrot',6,1,'2020-08-25 09:41:54','2020-08-25 09:41:54'),(31,'Steinfrucht',6,1,'2020-08-25 09:42:06','2020-08-25 09:42:06'),(32,'Süß & Zuckerig',6,1,'2020-08-25 09:42:20','2020-08-25 09:42:20'),(33,'Zitrus',6,1,'2020-08-25 09:42:32','2020-08-25 09:42:32'),(34,'Beerig',6,1,'2020-08-25 09:42:45','2020-08-25 09:42:45'),(35,'Blumig',6,1,'2020-08-25 09:42:56','2020-08-25 09:42:56'),(36,'Nussig',6,1,'2020-08-25 09:43:15','2020-08-25 09:43:15'),(37,'Schokoladig',6,1,'2020-08-25 09:43:33','2020-08-25 09:43:33'),(38,'Gewürze',6,1,'2020-08-25 09:44:03','2020-08-25 09:44:03'),(39,'Afrika',7,1,'2020-08-25 09:44:32','2020-08-25 09:44:32'),(40,'Asien',7,1,'2020-08-25 09:44:47','2020-08-25 09:44:47'),(41,'Mittelamerika',7,1,'2020-08-25 09:45:00','2020-08-25 09:45:00'),(42,'Mix',7,1,'2020-08-25 09:58:06','2020-08-25 09:58:06'),(43,'Ozeanien',7,1,'2020-08-25 09:58:20','2020-08-25 09:58:20'),(44,'Südamerika',7,1,'2020-08-25 09:58:35','2020-08-25 09:58:35'),(45,'Hannoversche Kaffeemanufaktur',15,1,'2020-08-25 10:33:15','2020-08-25 10:33:15'),(46,'Barista Space',15,1,'2020-08-25 10:33:45','2020-08-25 10:33:45');
/*!40000 ALTER TABLE `product_sub_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_under_category`
--

DROP TABLE IF EXISTS `product_under_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_under_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_under_category`
--

LOCK TABLES `product_under_category` WRITE;
/*!40000 ALTER TABLE `product_under_category` DISABLE KEYS */;
INSERT INTO `product_under_category` VALUES (1,'Geschenke','2020-08-25 10:12:15','2020-08-25 10:12:15'),(2,'Kaffee & Espresso','2020-08-25 10:12:15','2020-08-25 10:12:15'),(3,'Zubehör','2020-08-25 10:12:54','2020-08-25 10:12:54'),(4,'Erlebnisse','2020-08-25 10:12:54','2020-08-25 10:12:54'),(5,'Gutscheine','2020-08-25 10:13:14','2020-08-25 10:13:14');
/*!40000 ALTER TABLE `product_under_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `description` text,
  `qty` varchar(250) DEFAULT NULL,
  `Price` varchar(250) DEFAULT NULL,
  `image` text,
  `image1` text,
  `category` varchar(250) DEFAULT NULL,
  `subcategory` varchar(250) DEFAULT NULL,
  `brand` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT '1',
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (13,'Melange Hanovera','Unglaublich rund abgestimmte Kaffeemischung aus den feinsten Hochlandarabicas Afrikas, Mittel- und Südamerikas. Ausgewogen und kräftig überzeugt dieser Hannoversche Blend durch Qualität und Regionalität. Ein echter Allrounder, der zum Frühstück, im Büro und zum Sonntagskuchen schmeckt.','20','€ 6.30  - € 22.00','public/images/product_images/MelangeHanoveraFG.png','public/images/product/MelangeHanoveraFG.png','3','11',NULL,5,1,'2020-08-21 07:42:11'),(14,'96 Melange “Alte Liebe”','Auch beim Genuss spielen Sie mit diesem Kaffee in der ersten Liga. Mit den Röstmeistern der Hannoverschen Kaffeemanufaktur haben wir einen 96-Cuvee aus den besten Hochlandarabicas entwickelt. Samtig, hocharomatisch und mit geschmeidiger, weicher Fülle überzeugt er in jeder Spielsituation.','10','6,96 €','public/images/product_images/Hannover96FG.png','public/images/product/Hannover96FG.png','3','11',NULL,5,1,'2020-08-21 07:47:06'),(15,'Espresso arabica','Mild und leicht fruchtig im Geschmack mit einer nachhaltigen schokoladigen Note und einer überraschend intensiven Crema.','10','6,70 € – 24,40 €','public/images/product_images/EspressoArabica.png','public/images/product/EspressoArabica.png','4','12',NULL,5,1,'2020-08-21 07:47:06'),(16,'96 Espresso Campione','Ob Espresso, Cappuccino oder Latte Macchiato, in jeder Phase des Genusses überzeugt er mit Charakter, leichter Schokoladennote und einer ausgeprägten Crema. Der Original Hannover 96 Espresso \"Campione\". Rassig, kraftvoll und mit großer Leidenschaft - das gilt nicht nur auf dem Platz.','10','6,96 €','public/images/product_images/96EspressoCampione.png','public/images/product/96EspressoCampione.png','4','12',NULL,5,1,'2020-08-21 07:47:06');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscribers`
--

DROP TABLE IF EXISTS `subscribers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscribers`
--

LOCK TABLES `subscribers` WRITE;
/*!40000 ALTER TABLE `subscribers` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscribers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` enum('1','2','3') NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `option_1` enum('0','1') NOT NULL DEFAULT '0',
  `option_2` enum('0','1') NOT NULL DEFAULT '0',
  `option_3` enum('0','1') NOT NULL DEFAULT '0',
  `token` varchar(255) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Rahul','Rai','rhlraiji@gmail.com','$2y$10$BaDb7VgFEAurAKloArUc/ukSbYI0UkpLt0E9dpcvlRY4.cCWY2UF.','1','+919999999999','New Pasrj','0','0','0',NULL,'0','2020-08-17 12:33:46','2020-08-17 12:33:46'),(4,'Rahul','Rai','rahulgauc13169@gmail.com','$2y$10$69WFr.PvOnZKo.B0hVnojemS8G9E9Sdmpr.1rIgNqPLJboEm2IlKm','1','+919899098767','sdfcsdcsdc','0','0','0','37a48887e0e3dfaeb09daf1556a2c70e','0','2020-08-18 11:55:25','2020-08-18 11:55:25'),(5,'Raul','Rai','admin@gmail.com','$2y$10$69WFr.PvOnZKo.B0hVnojemS8G9E9Sdmpr.1rIgNqPLJboEm2IlKm','3','+919898767898','No Address','0','0','0',NULL,'0','2020-08-19 06:48:05','2020-08-19 06:48:36');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-03  4:24:58
