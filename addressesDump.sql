CREATE DATABASE  IF NOT EXISTS `sandbox` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `sandbox`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: sandbox
-- ------------------------------------------------------
-- Server version	5.6.15

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
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addresses` (
  `fname` varchar(40) DEFAULT NULL,
  `lname` varchar(40) DEFAULT NULL,
  `street` varchar(40) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(40) DEFAULT NULL,
  `zipcode` varchar(10) DEFAULT NULL,
  `note` varchar(200) DEFAULT NULL,
  `id` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
INSERT INTO `addresses` VALUES ('Albert','Adams','1234 A Street','Attica','NY','11111-1111','This is the first test note in the system',1),('Bob','Bobbart','567 B Street','Brunswick','NJ','22222-2222','The second note.',2),('Charlie','Chaplin','8 Champ Road','Chicago','IL','33333-3333','An excellent actor',3),('Dave','Drummond','9 Dumbledore Drive','Denver','CO','44444-4444','A wizard?',4),('Ed','Egbert','10 Fake Lane','Eagle\'s ROCK','WA','55555-5555','let\'s see how you handle quotes on import',5),('Frank','Fakerton','2a O\'Malley Street','Fumble Falls','GA','66666-6666','Getting slightly more interesting data',6),('George','Gimestock','2b O\'Malley Street','Georgiana','GA','77777-7777','Did you read through the data first and look for invalid entries? Have your CSV fix the state on this one.',7),('Hogarth','Hogarth','99 Hogarth Hogarth','Hogarth','MA','88888-8888','Should be MA.  Solution should be handled by your import.',8),('Ganesha','Venkatanarasimharajuvaripeta','1234 A Street','Milwulkie','WI','89898-564a','Got room for long names?',9),('Igloo','IguanaMan','1 Freezy Street','Baja','CA','99999-9999','nothing fancy',10),('Julius','Adams','1234 A Street','Attica','NY','11111-1111','This is the first test note in the system',11),('Albert','Adams','1235 A Street','Attica','NY','11111-1111','neighbors',12),('Another','Record','456 outa ideas street','Granite','NV','98989-9999','Just trying to pad out the list so pages aren\'t always 5 records tall',13);
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-01-03  2:17:20
