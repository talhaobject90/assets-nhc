-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: assets
-- ------------------------------------------------------
-- Server version	5.5.37-0ubuntu0.14.04.1

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
-- Table structure for table `assets`
--

DROP TABLE IF EXISTS `assets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `assets` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `location` varchar(500) NOT NULL,
  `custodian` varchar(500) NOT NULL,
  `status` enum('inactive','active','under_maintenance') NOT NULL DEFAULT 'inactive',
  `istemara_expiry` date DEFAULT NULL,
  `insurance_expiry` date DEFAULT NULL,
  `preventive_maintenance` date DEFAULT NULL,
  `tuv_sticker` date DEFAULT NULL,
  `client_sticker` date DEFAULT NULL,
  `mot_license_expiry` date DEFAULT NULL,
  `accident_history` text,
  `violation_history` text,
  `vendor` text NOT NULL,
  `asset_category` text NOT NULL,
  `department` text NOT NULL,
  `vehicle_number` text NOT NULL,
  `serial_number` text NOT NULL,
  `purchase_price` text NOT NULL,
  `current_value` text NOT NULL,
  `total_maintenance` text NOT NULL,
  `total_depreciation` text NOT NULL,
  `date_acquired` date DEFAULT NULL,
  `date_sold` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assets`
--

LOCK TABLES `assets` WRITE;
/*!40000 ALTER TABLE `assets` DISABLE KEYS */;
INSERT INTO `assets` VALUES (2,'liftsqaa','Main lift this wayaa','rPaa','Mohammed Talha','active','2014-10-07','2014-10-08','2014-10-09','2014-10-10','2014-10-11','2014-10-12','aaaaaaaa','vvvvaaaaaa','','fhf','zdfwe','','','','','','','0000-00-00','0000-00-00');
INSERT INTO `assets` VALUES (14,'Computer','IBMs','Main server room','Salmans','active',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','','','','','','','',NULL,NULL);
INSERT INTO `assets` VALUES (15,'Moto e','sdf \r\n \r\n','pettai','talhaa','under_maintenance',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','','','','','','','',NULL,NULL);
INSERT INTO `assets` VALUES (16,'Sony','ericson prodct \r\n','pettai','talha','active',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','','','','','','','',NULL,NULL);
INSERT INTO `assets` VALUES (17,'Xpefia','tip \r\n','al','Ali','active',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','','','','','','','',NULL,NULL);
INSERT INTO `assets` VALUES (18,'CPU','intel \r\nsdf','rP','talhaa','inactive',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','','','','','','','',NULL,NULL);
INSERT INTO `assets` VALUES (19,'nokia 108','The brand new nokia 108 for us \r\n','table','Salman','active',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','','','','','','','',NULL,NULL);
INSERT INTO `assets` VALUES (20,'test asset','sdfsrfsf','sfd','Sdf','active','2014-10-08',NULL,NULL,NULL,NULL,NULL,'Thi is tesxt','sfdsfsf','','','','','','','','','',NULL,NULL);
INSERT INTO `assets` VALUES (23,'name','desc','loc','cust','active',NULL,NULL,NULL,NULL,NULL,NULL,'accsa','viosa','','','','','','','','','',NULL,NULL);
INSERT INTO `assets` VALUES (24,'test asset 1','asset desc','ass loc','custodia','active','2014-10-01','2014-10-02',NULL,NULL,NULL,NULL,'accid his','violhis','','','','','','','','','',NULL,NULL);
INSERT INTO `assets` VALUES (26,'test aset 2','asset desc','ass loc','cus','active','2014-10-01','2014-10-22',NULL,NULL,NULL,NULL,'acc his','vio his','','','','','','','','','',NULL,NULL);
INSERT INTO `assets` VALUES (27,'test aset 3','ASDF','ass loc','cus','active','2014-10-01','0000-00-00',NULL,NULL,NULL,NULL,'ACC','VIO','','','','','','','','','',NULL,NULL);
INSERT INTO `assets` VALUES (28,'Asset Name','deswc','loc','cus','under_maintenance','2014-10-01','2014-10-02','2014-10-03','2014-10-04','2014-10-05','2014-10-06','acc','vio','','','','','','','','','',NULL,NULL);
INSERT INTO `assets` VALUES (29,'Asset Name','deswc','loc','cus','under_maintenance','2014-10-01','2014-10-02','2014-10-03','2014-10-04','2014-10-05','2014-10-06','acc','vio','','','','','','','','','',NULL,NULL);
INSERT INTO `assets` VALUES (30,'Asset Name','deswc','loc','cus','under_maintenance','2014-10-01','2014-10-02','2014-10-03','2014-10-04','2014-10-05','2014-10-06','acc','vio','','','','','','','','','',NULL,NULL);
INSERT INTO `assets` VALUES (31,'aaaaa ba','asdf','ass loc','talhatha','under_maintenance','2014-10-20','2014-10-21','2014-10-22','2014-10-23','2014-10-24','2014-10-25','asfa','asdfbv','','','','','','','','','',NULL,NULL);
INSERT INTO `assets` VALUES (36,'NEW TEST','Ass desc','ass loc','cus','active','2014-10-01','2014-10-02','2014-10-02','2014-10-03','2014-10-04','2014-10-05','acc  ','vio','1','2','3','veh num','','pur','cur','tot mina','tot dep','2014-10-06','2014-10-07');
/*!40000 ALTER TABLE `assets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `assets_category`
--

DROP TABLE IF EXISTS `assets_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `assets_category` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `asset_category_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assets_category`
--

LOCK TABLES `assets_category` WRITE;
/*!40000 ALTER TABLE `assets_category` DISABLE KEYS */;
INSERT INTO `assets_category` VALUES (1,'Vehicle');
INSERT INTO `assets_category` VALUES (5,'ds gvfdsga');
INSERT INTO `assets_category` VALUES (7,'dfgbfg');
INSERT INTO `assets_category` VALUES (8,'bfg');
INSERT INTO `assets_category` VALUES (9,'fgnfgn');
INSERT INTO `assets_category` VALUES (10,'fhf');
INSERT INTO `assets_category` VALUES (11,'fghfgn');
INSERT INTO `assets_category` VALUES (12,'ffghfg');
INSERT INTO `assets_category` VALUES (13,'fgnfnf');
INSERT INTO `assets_category` VALUES (14,'nfnfgn');
INSERT INTO `assets_category` VALUES (16,'Baombs');
/*!40000 ALTER TABLE `assets_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` VALUES (1,'Human resources');
INSERT INTO `department` VALUES (7,'zdfwe');
INSERT INTO `department` VALUES (8,'fw');
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(200) NOT NULL,
  `employee_email` varchar(50) NOT NULL,
  `employee_department` varchar(200) NOT NULL,
  `employee_phone` varchar(20) NOT NULL,
  `employee_status` enum('inactive','active') NOT NULL DEFAULT 'inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES (1,'Mohammed Alisaa','sdsdf@gmcil.com','humansaa','9876465ss','active');
INSERT INTO `employee` VALUES (2,'Mohammed Talha','talha@object90.com','programmer','9788179303','active');
INSERT INTO `employee` VALUES (3,'Ramesh kumar','rameshkumar86@gmacil.com','','234234','active');
INSERT INTO `employee` VALUES (4,'Prasanth B','','','','');
INSERT INTO `employee` VALUES (5,'Mariappan C','','','','');
INSERT INTO `employee` VALUES (6,'Vally anand','','','','');
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendor`
--

DROP TABLE IF EXISTS `vendor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendor`
--

LOCK TABLES `vendor` WRITE;
/*!40000 ALTER TABLE `vendor` DISABLE KEYS */;
INSERT INTO `vendor` VALUES (1,'Mazdas');
INSERT INTO `vendor` VALUES (8,'sdfdfgdf');
INSERT INTO `vendor` VALUES (9,'dbdfsg');
INSERT INTO `vendor` VALUES (10,'dfgdb');
INSERT INTO `vendor` VALUES (11,'sdfgb sf');
INSERT INTO `vendor` VALUES (12,'fgbnf');
INSERT INTO `vendor` VALUES (13,'fgn');
INSERT INTO `vendor` VALUES (14,'sdbsdfg');
INSERT INTO `vendor` VALUES (15,'z bad');
INSERT INTO `vendor` VALUES (16,' dzfz');
/*!40000 ALTER TABLE `vendor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-10-29 21:36:48
