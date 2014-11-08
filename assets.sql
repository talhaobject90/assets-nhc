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
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assets`
--

LOCK TABLES `assets` WRITE;
/*!40000 ALTER TABLE `assets` DISABLE KEYS */;
INSERT INTO `assets` VALUES (2,'liftsqaa','Main lift this wayaa','rPaa','Mohammed Talha','active','2014-11-26','2014-10-08','2014-10-09','2014-10-10','2014-10-11','2014-10-12','aaaaaaaa','vvvvaaaaaa','','fhf','zdfwe','','','','','','','0000-00-00','0000-00-00');
INSERT INTO `assets` VALUES (14,'Computer','IBMs','Main server room','','active','2014-11-10','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','','','','','','','','','','','','0000-00-00','0000-00-00');
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
INSERT INTO `assets` VALUES (48,'Moto E','My Own motorolla','table','Mohammed Talha','active','2014-10-01','2014-10-02','2014-10-03','2014-10-04','2014-10-05','2014-10-06','NIL','nil','Mazdas','Vehicle','Human resources','9788755','XT895','7000','6999','tot mina','tot dep','2014-10-07','2014-10-08');
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
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
-- Table structure for table `google_users`
--

DROP TABLE IF EXISTS `google_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `google_users` (
  `google_id` decimal(21,0) NOT NULL,
  `google_name` varchar(60) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `google_email` varchar(60) NOT NULL,
  `users_user_role_id` int(3) NOT NULL DEFAULT '0',
  `google_link` varchar(60) NOT NULL,
  `google_picture_link` varchar(60) NOT NULL,
  PRIMARY KEY (`google_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `google_users`
--

LOCK TABLES `google_users` WRITE;
/*!40000 ALTER TABLE `google_users` DISABLE KEYS */;
INSERT INTO `google_users` VALUES (100428232109775983047,'Mohammed Talha','','','talhaqqq@gmail.com',2,'https://plus.google.com/100428232109775983047','https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/A');
INSERT INTO `google_users` VALUES (100678434091494690900,'Mohammed Talha','','','talha@object90.com',1,'https://plus.google.com/100678434091494690900','https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/A');
INSERT INTO `google_users` VALUES (106053436166547787694,'Mariappan C','','','mars@object90.com',11,'','https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/A');
INSERT INTO `google_users` VALUES (106219740134865583912,'ramesh balakrishnan','','','rameshkumar86@gmail.com',3,'https://plus.google.com/106219740134865583912','https://lh5.googleusercontent.com/-nCqLiYHWuJM/AAAAAAAAAAI/A');
INSERT INTO `google_users` VALUES (106803781885381507211,'Bala P','','','bala223344@gmail.com',11,'https://plus.google.com/106803781885381507211','https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/A');
INSERT INTO `google_users` VALUES (118161579513011654715,'Roney Philip','','','roneyp20@gmail.com',11,'https://plus.google.com/118161579513011654715','https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/A');
/*!40000 ALTER TABLE `google_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notifications` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `asset_id` int(10) NOT NULL,
  `asset_name` varchar(100) NOT NULL,
  `notified_on` date NOT NULL,
  `notify` enum('yes','no') NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
INSERT INTO `notifications` VALUES (1,1,'car','2014-11-09','yes');
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `screens`
--

DROP TABLE IF EXISTS `screens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `screens` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `screen_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `screens`
--

LOCK TABLES `screens` WRITE;
/*!40000 ALTER TABLE `screens` DISABLE KEYS */;
INSERT INTO `screens` VALUES (1,'assets_screens');
INSERT INTO `screens` VALUES (2,'alerts_screen');
INSERT INTO `screens` VALUES (3,'employees_screen');
INSERT INTO `screens` VALUES (4,'configure_screen');
INSERT INTO `screens` VALUES (5,'test');
/*!40000 ALTER TABLE `screens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_roles` (
  `user_role_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_role_name` varchar(100) NOT NULL,
  `user_role_screens` varchar(500) NOT NULL,
  PRIMARY KEY (`user_role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
INSERT INTO `user_roles` VALUES (1,'Admin','a:5:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"3\";i:3;s:1:\"4\";i:4;s:1:\"5\";}');
INSERT INTO `user_roles` VALUES (2,'Data Entry Operator','a:2:{i:0;s:1:\"1\";i:1;s:1:\"5\";}');
INSERT INTO `user_roles` VALUES (3,'Asset Co-ordinators','a:3:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"3\";}');
INSERT INTO `user_roles` VALUES (4,'Approver','');
INSERT INTO `user_roles` VALUES (11,'trainee','a:2:{i:0;s:1:\"1\";i:1;s:1:\"2\";}');
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_screens`
--

DROP TABLE IF EXISTS `users_screens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_screens` (
  `userrole_screen_id` int(5) DEFAULT NULL,
  `user_role_id` int(5) NOT NULL,
  `screen_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_screens`
--

LOCK TABLES `users_screens` WRITE;
/*!40000 ALTER TABLE `users_screens` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_screens` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
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

-- Dump completed on 2014-11-08 14:58:31
