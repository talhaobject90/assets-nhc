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
  `mvpi_expiry` date NOT NULL,
  `accident_history` text,
  `violation_history` text,
  `vendor` text NOT NULL,
  `asset_category` text NOT NULL,
  `department` text NOT NULL,
  `vehicle_number` text NOT NULL,
  `project` text NOT NULL,
  `purchase_price` text NOT NULL,
  `current_value` text NOT NULL,
  `total_maintenance` text NOT NULL,
  `total_depreciation` text NOT NULL,
  `date_acquired` date DEFAULT NULL,
  `date_sold` date DEFAULT NULL,
  `serial_number` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assets`
--

LOCK TABLES `assets` WRITE;
/*!40000 ALTER TABLE `assets` DISABLE KEYS */;
INSERT INTO `assets` VALUES (1,'Hyundai Vacuum Truck With Tanker','','JRD','Sajid Khan Muhammed Ismail','active','2014-12-08','2014-12-09','2014-12-09','2014-12-09','2015-02-05','2014-12-17','2014-12-29','','','Hyundai','Vehicles','Operations','1657  TLA','JRD Tank Repair LFC','','','','','0000-00-00','0000-00-00','NHV - 011');
INSERT INTO `assets` VALUES (2,'Mazda 2 Cabin p/up','','JRD','Mohammed Asif','active','2015-01-10','0000-00-00','0000-00-00','2014-12-20','2015-02-02','0000-00-00','0000-00-00','','','','Equipment','Operations','5526  TKA','','','','','','0000-00-00','0000-00-00','NHV - 014');
INSERT INTO `assets` VALUES (3,'Isuzu 1 Cabin P/up(Disel)','Parking In Aramco','JRD','','active','0000-00-00','0000-00-00','0000-00-00','0000-00-00','2015-02-02','0000-00-00','0000-00-00','','','Mazdas','Vehicle','Operations','8496  JGA','JRD','','','','','0000-00-00','0000-00-00','NHV - 022');
INSERT INTO `assets` VALUES (4,'Doosan (GX 30) Fork Lift - 3 Tons','','JRD','','active','0000-00-00','0000-00-00','0000-00-00','0000-00-00','2015-03-01','0000-00-00','0000-00-00','','','Hyundai','Vehicle','Operations','5668 VBA','JRD','','','','','0000-00-00','0000-00-00','NHV - 033');
INSERT INTO `assets` VALUES (5,'Mazda 2 Cabin p/up','','JRD','Palani Chinnasamy','active','2015-01-28','2015-01-22','2015-01-17','2015-01-25','2015-02-04','2015-01-15','2015-01-21','','','Nissan','','Operations','3747 GHA','','','','','','2015-01-31','2015-01-31','NHV - 038');
INSERT INTO `assets` VALUES (6,'Mazda 2 Cabin p/up','','JRD','Samadullah Shareef','active','0000-00-00','0000-00-00','0000-00-00','0000-00-00','2014-12-16','0000-00-00','0000-00-00','','','Mazdas','Vehicle','Operations','7130 KEA','JRD','','','','','0000-00-00','0000-00-00','NHV - 041');
INSERT INTO `assets` VALUES (7,'Genie Man Lift Model  S8513','Using In site.','JRD','','active','0000-00-00','0000-00-00','0000-00-00','0000-00-00','2015-03-15','0000-00-00','0000-00-00','','','Isuzu','Vehicle','Operations','S.N. :10163','JRD','','','','','0000-00-00','0000-00-00','NHV - 042');
INSERT INTO `assets` VALUES (8,'Toyota Coaster','Since 5 Dec 14 (Old Plate Number 8046  BBA)','JRD','Sherrehman Saifurahman','active','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','','','Toyota','Vehicle','Operations','9367 BVA','JRD','','','','','0000-00-00','0000-00-00','NHV - 017');
INSERT INTO `assets` VALUES (9,'Toyota Coaster','Since 5 Dec 14 (Old Plate Number 4723  BBA)','JRD','Sajid Khan Muhammed Ismail','active','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','','','Toyota','Vehicle','Operations','9644 BVA','JRD','','','','','0000-00-00','0000-00-00','NHV - 026');
INSERT INTO `assets` VALUES (10,'Nissan 2 Cabin Pick up','','JRD','Ajayakumar Anandan','active','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','','','Nissan','Vehicle','Operations','4867 DHA','JRD','','','','','0000-00-00','0000-00-00','NHV - 035');
INSERT INTO `assets` VALUES (11,'Boom/ Dump Truck','','JRD','Sajid Khan Muhammed Ismail','active','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','','','','Vehicle','Operations','4693 LUA','JRD','','','','','0000-00-00','0000-00-00','NHV -054');
INSERT INTO `assets` VALUES (12,'Nissan Mini Bus','','YNGL','Saleh Ahmed Zahrani','active','0000-00-00','0000-00-00','0000-00-00','0000-00-00','2015-07-07','0000-00-00','0000-00-00','','','Nissan','Vehicle','Operations','5536  LGA','YNGL','','','','','0000-00-00','0000-00-00','NHV - 004');
INSERT INTO `assets` VALUES (13,'Mazda 2 Cabin p/up','','YNGL','Nisar Ahmed','active','0000-00-00','0000-00-00','0000-00-00','0000-00-00','2015-03-15','0000-00-00','0000-00-00','','','Mazdas','Vehicle','Operations','6215  BEA','YNGL','','','','','0000-00-00','0000-00-00','NHV - 020');
INSERT INTO `assets` VALUES (14,'Nissan mini bus','','YRD','Abdullah Mohammed Suwailem Alanazi','active','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','','','Nissan','Vehicle','Operations','5537  LGA','YRD','','','','','0000-00-00','0000-00-00','NHV - 003');
INSERT INTO `assets` VALUES (15,'Hyundai HD 170 Boom Truck - 7 Tons','','YRD','Saeed Ali Bin Saeed Alzahrani Zahrani','active','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','','','Hyundai','Vehicle','Operations','5240  LGA','YRD','','','','','0000-00-00','0000-00-00','NHV - 005');
INSERT INTO `assets` VALUES (16,'Hyundai HD 260 Vacuum Truck','','YRD','Saeed Ali Bin Saeed Alzahrani Zahrani','active','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','','','Hyundai','Vehicle','Operations','6373  DGA','YRD','','','','','0000-00-00','0000-00-00','NHV - 012');
INSERT INTO `assets` VALUES (17,'Hyundai HD 46 Diesel Tanker-2000 Lts','','YRD','Eduardo Jr Almendras Perez','active','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','','','Hyundai','Vehicle','Operations','6372  DGA','YRD','','','','','0000-00-00','0000-00-00','NHV - 013');
INSERT INTO `assets` VALUES (18,'Mazda 2 Cabin p/up','','YRD','Mohammed Nazakat','active','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','','','Mazdas','Vehicle','Operations','7074  VKA','YRD','','','','','0000-00-00','0000-00-00','NHV - 016');
INSERT INTO `assets` VALUES (19,'Nissan 2 Cabin Pick up','','','Eduardo Jr Almendras Perez','active','2015-01-31','2015-02-20','2015-03-19','2015-02-27','2015-02-26','2015-02-10','2015-02-13','','','Nissan','','Operations','4868 DHA','YRD','','','','','2015-02-19','2015-01-23','NHV - 036');
INSERT INTO `assets` VALUES (20,'Genie Man Lift Model  S85 4WD','','YRD','Rajendra Sarki Bipin','active','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','','','Genie','Vehicle','Operations','','YRD','','','','','0000-00-00','0000-00-00','NHV - 039');
INSERT INTO `assets` VALUES (21,'Mazda 2 Cabin p/up','','YRD','Ram Kumar Tamang','active','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','','','Mazdas','Vehicle','Operations','7117 KEA','YRD','','','','','0000-00-00','0000-00-00','NHV - 040');
INSERT INTO `assets` VALUES (22,'Ashok Leyland Bus - 66 Seater','','YRD','Man Kumar Sintan','active','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','','','Ashok Leyland','Vehicle','Operations','2065 ZUA','YRD','','','','','0000-00-00','0000-00-00','NHV - 052');
INSERT INTO `assets` VALUES (23,'Nissan Pathfinder','','YRD','Ziyad Faraj Bin Saleh Al Johan','active','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','','','Nissan','Vehicle','Operations','8878 UNA','YRD','','','','','0000-00-00','0000-00-00','NHV -059');
INSERT INTO `assets` VALUES (24,'Mercedes Boom Truck - 10 Tons','','RRD','Hameedullah Khan','active','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','','','Mazdas','Vehicle','Operations','7772  HZA','RRD','','','','','0000-00-00','0000-00-00','NHV - 021');
INSERT INTO `assets` VALUES (25,'Isuzu Double Cabin p/up','','RRD','Ajaz Ahmed','active','0000-00-00','0000-00-00','0000-00-00','0000-00-00','2015-01-05','0000-00-00','0000-00-00','','','Isuzu','Vehicle','Operations','3091 UNA','RRD','','','','','0000-00-00','0000-00-00','NHV - 027');
INSERT INTO `assets` VALUES (26,'Toyota Hiace','','RRD','Noor Muhammad Sardar Khan','active','0000-00-00','0000-00-00','0000-00-00','0000-00-00','2015-01-05','0000-00-00','0000-00-00','','','Toyota','Vehicle','Operations','5508 UNA','RRD','','','','','0000-00-00','0000-00-00','NHV - 029');
INSERT INTO `assets` VALUES (27,'Hyundai Vacuum Truck With Tanker','','RRD','Noor Muhammad Sardar Khan','active','0000-00-00','0000-00-00','0000-00-00','0000-00-00','2015-02-16','0000-00-00','0000-00-00','','','Hyundai','Vehicle','Operations','1658  TLA','RRD','','','','','0000-00-00','0000-00-00','NHV - 015');
INSERT INTO `assets` VALUES (28,'Ford Explorer','','Rabigh','Asaad Adham Al Nemer','active','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','','','','Vehicle','Operations','4784 KXJ','YRD','','','','','0000-00-00','0000-00-00','NHV -056');
INSERT INTO `assets` VALUES (29,'_dummy asset for testing','','test','Sami Iskandrani','active','2014-12-17','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','','','Toyota','Vehicles','','asdasd','YRD Painting Svcs LFC','','','','','0000-00-00','0000-00-00','');
INSERT INTO `assets` VALUES (30,'Test asset','','','','','2014-12-15','2014-12-03','2014-12-24','2014-12-08','2014-12-23','2014-12-18','2014-12-10','','','','Vehicles','','','','','','','','0000-00-00','0000-00-00','2322');
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assets_category`
--

LOCK TABLES `assets_category` WRITE;
/*!40000 ALTER TABLE `assets_category` DISABLE KEYS */;
INSERT INTO `assets_category` VALUES (1,'Vehicles');
INSERT INTO `assets_category` VALUES (5,'Equipment');
INSERT INTO `assets_category` VALUES (7,'Tools');
INSERT INTO `assets_category` VALUES (17,'Electronics');
INSERT INTO `assets_category` VALUES (18,'Buildings');
INSERT INTO `assets_category` VALUES (19,'Portables');
INSERT INTO `assets_category` VALUES (20,'Furniture');
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` VALUES (1,'Human resources');
INSERT INTO `department` VALUES (7,'Operations');
INSERT INTO `department` VALUES (8,'Support Services');
INSERT INTO `department` VALUES (9,'IT');
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
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `employee_email` varchar(50) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `station` varchar(100) NOT NULL,
  `employee_department` varchar(200) NOT NULL,
  `employee_phone` varchar(20) NOT NULL,
  `employee_status` enum('inactive','active') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=355 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES (1,'Sami','Iskandrani','sami@nhc-ksa.com','iskandsa','CEO','Jeddah - HO','Office of the CEO','','active');
INSERT INTO `employee` VALUES (2,'Fahmi','T. Ahmed','fahmi@nhc-ksa.com','tanrak','Manager, Support Services','Jeddah - HO','Support Services','0500100250','active');
INSERT INTO `employee` VALUES (3,'Syed Abdul Aleem','','aaleem@nhc-ksa.com','10001','Commercial Manager','Jeddah - HO','Commercial and Business Development','','active');
INSERT INTO `employee` VALUES (4,'Ali Abdullah Alzahrani','','aalzahrani@nhc-ksa.com','10002','Operations Manager','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (5,'Abdul Rahman Abdullah Alzahran','','arzahrani@nhc-ksa.com','10083','H R Co-ordinator','Jeddah - HO','Human Resources Department','','active');
INSERT INTO `employee` VALUES (6,'Asaad Adham Al Nemer','','asaad@nhc-ksa.com','10310','Area Manager','Rabigh Workshop','Operations Department','','active');
INSERT INTO `employee` VALUES (7,'Fahad Ayman Al Saleh','','fahad.als@nhc-ksa.com','10285','HR Policy Supervisor','Jeddah - HO','Human Resources Department','','active');
INSERT INTO `employee` VALUES (8,'Shahid Zaffar Iqbal','','','10308','Marketing Manager','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (9,'Ramil Sevilla Nacua','','ramilnacua34@yahoo.com','10299','Safety Officer','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (10,'Muhammed','Hussain','','new019','Safety Officer','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (11,'Mahboob','Khan','','new020','Safety Officer','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (12,'Muhammed Ikram','','','10318','Safety Officer','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (13,'Muhammed Anjad Ali','','','10315','Safety Officer','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (14,'Fayaz','Mohammed Riyasat Ali','','10411','Safety Officer','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (15,'William Arevalo Cadangan','','williamcadangan@yahoo.com','10092','GRP Laminator','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (16,'Michael Lagat Santiago','','','10298','GRP Laminator','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (17,'Jun Rey Casama Dionglay','','','10296','GRP Laminator','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (18,'Syed Akbar Batcha','','','10154','Mech. Supervisor','Jeddah','Operations Department','507963892','active');
INSERT INTO `employee` VALUES (19,'Syed','Tasawar Hussain Shah','','10339','Mech. Supervisor','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (20,'Haseeb','Khalid','','10345','Mech. Supervisor','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (21,'Narayanan','Deivasigamani','dnarayan@nhc-ksa.com','10241','Project Manager','Jubail','Operations Department','567067003','active');
INSERT INTO `employee` VALUES (22,'Bansh','Raj Yadav','','10372','Welder-TIG','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (23,'Prakasam Ramasamy Ethiraj','','prakaaash1984@gmail.com','10151','Welder-TIG','Yanbu','Operations Department','544385238','active');
INSERT INTO `employee` VALUES (24,'Shamsudeen Kader Mydeen','','','10152','Welder-TIG','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (25,'Sureshbabu Arumugam','','','10179','Welder-TIG','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (26,'Reuban Franklin Gnanaprakasam','','','10186','Welder-TIG','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (27,'Percibal Bacay Sumalde','','','10203','Welder-TIG','Jeddah','Operations Department','503274386','active');
INSERT INTO `employee` VALUES (28,'Emil Padua Ronatay','','nhong_06@yahoo.com','10211','Welder-TIG','Jeddah','Operations Department','503274384','active');
INSERT INTO `employee` VALUES (29,'Sultan Abul Razaq Mohammed','','','10261','Welder-TIG','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (30,'MOHAMMAD','FARID ALAM MAHTAB ALAM','','iv1216','Welder-TIG','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (31,'NISHIKANT','PARIDA NARENDRA KUMAR PARIDA','','iv1214','Welder-TIG','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (32,'Fakhruddin','Ansari Abdul Kudus Ansari','','iv1215','Welder-TIG','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (33,'MOHAMMAD','ISTIYAK AHMAD MOHAMMED MUKHTAR','','iv1213','Welder-TIG','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (34,'Sajeesh Kombath Rajan','','','10323','Welder-TIG','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (35,'Pratab Kumar Singh','','','10324','Welder-TIG','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (36,'Fazal Akbar','','','10317','Welder-TIG','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (37,'BABALU','TIWARI KAUSHALAKISHOR TIWARI','','iv1229','Welder-TIG','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (38,'SADDAM','HUSAIN IDDRISHALI','','iv1228','Welder-TIG','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (39,'JALALUDDIN','ANSARI SATTAR AHMAD','','iv1227','Welder-TIG','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (40,'NOOR','ALAM MOHAMMAD MAHBOOB','','iv1226','Welder-TIG','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (41,'Ejaz','Hussain Kanjal Malik Ameer','','new066','Welder-TIG','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (42,'Sohail','Mehmood Chudry Mazhar','','new067','Welder-TIG','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (43,'Vineeth','Palliparambil Xavier','','10408','Welder-TIG','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (44,'Muhammad','Ashfaq Noor Muhammad','','10400','Welder-TIG','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (45,'Reji Philip','','reji.philip@nhc-ksa.com','10262','Technical Advisor','Abha','Operations Department','0501866826, 05476464','active');
INSERT INTO `employee` VALUES (46,'Sohel Arman','','','10026','Welder-TIG & SMAW','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (47,'Mustak Khan','','','10027','Welder-TIG & SMAW','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (48,'Mohammad Firoz Khan','','','10155','Welder-TIG & SMAW','Jeddah','Operations Department','531604537','active');
INSERT INTO `employee` VALUES (49,'Jamaluddin Saddar Din','','','10271','Welder-TIG & SMAW','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (50,'PREM','MISHRA RAMCHANDRA MISHRA','','iv1230','Electric Foreman','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (51,'Mohamed Nilufer Mohamed Shamsu','','','10198','Tea Boy','Jeddah - HO','Support Services','','active');
INSERT INTO `employee` VALUES (52,'Guillermo Dimaunahan Roque','','guilermoroque_25@yahoo.com','10049','Driver','Rabigh Workshop','Operations Department','','active');
INSERT INTO `employee` VALUES (53,'Saleh Ahmed Zahrani','','','10071','Driver','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (54,'Saeed Ali Bin Saeed Alzahrani','Zahrani','saeed0592009@hotmail.com','10072','Driver','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (55,'Eduardo Jr Almendras Perez','','','10290','Driver','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (56,'Abdullah Ali Zahrani','','','10130','Driver','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (57,'Mohammed Rafiq','','','10167','Driver','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (58,'Mohammed Shafeeq Khan','','','10169','Driver','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (59,'Khalid Khan Zaman Khan','','','10170','Driver','Jeddah - HO','Operations Department','','active');
INSERT INTO `employee` VALUES (60,'Sajid Khan Muhammed Ismail','','','10190','Driver','Jeddah','Operations Department','592844374','active');
INSERT INTO `employee` VALUES (61,'Noor Muhammad Sardar Khan','','','10191','Driver','Riyadh','Operations Department','','active');
INSERT INTO `employee` VALUES (62,'Geevarghse Thomman Jose','','','10278','Driver','Abha','Operations Department','','active');
INSERT INTO `employee` VALUES (63,'Mohammed Abdulkhaliq Al Asemi','','','10287','Driver','Abha','Operations Department','','active');
INSERT INTO `employee` VALUES (64,'Karamat Khan','','','10327','Driver','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (65,'Baburam','Sintan','','10363','Driver','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (66,'Man Kumar','Sintan','','10356','Driver','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (67,'Hameedullah','Khan','','10333','Driver','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (68,'Mohammed','Nazakat','','10331','Driver','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (69,'Ahsan Ahamd Abdul Rauf','','ehsanahmed43@gmail.com','10176','Electricion','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (70,'Mohamed Azharudeen','','dubaiazhar@gmail.com','10187','Electricion','Abha','Operations Department','536911233','active');
INSERT INTO `employee` VALUES (71,'Khaled Khalil Althugafi','','loodi_00@hotmail.com','10249','Electricion','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (72,'Ahmed Bilal Hafiz Tahir Naeem','','ahmad_bilal_minhas@yahoo.com','10304','Electricion','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (73,'Faiz Ullah','Khan Sher','','10401','Electricion','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (74,'Reynold Bejasa Romasanta','','mhavshr28@yahoo.com','10065','Pipe Fitter','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (75,'Rowel Dela Cruz Cabasal','','','10074','Pipe Fitter','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (76,'Wilson Gadores Sulit','Sulit','','10294','Pipe Fitter','Yanbu','Operations Department','639499450971','active');
INSERT INTO `employee` VALUES (77,'Jess Nicolas Hernandez Hernand','','','10293','Pipe Fitter','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (78,'Danilo Hernandez Villaruel','','danilovillaruel@yahoo.com','10297','Pipe Fitter','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (79,'Ernie Como Macalintal','','','10124','Pipe Fitter','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (80,'Santiago JR Mejico Resco','','','10295','Pipe Fitter','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (81,'Edgar Talavera Borillo','','','10291','Pipe Fitter','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (82,'Dominador Acdal Nicanor','','','10163','Pipe Fitter','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (83,'Pepito Alcantara Leal','','','10164','Pipe Fitter','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (84,'Edward Santos JR','','wards_21@yahoo.com','10172','Pipe Fitter','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (85,'Alvin Villamor','Lintan','','10174','Pipe Fitter','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (86,'Shah Azam Seraz Khan','','azam17575@gmail.com','10194','Pipe Fitter','Abha','Operations Department','534621947','active');
INSERT INTO `employee` VALUES (87,'Frederick Espirito Leyco','','','10204','Pipe Fitter','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (88,'Jordan Santiago Espera','','','10205','Pipe Fitter','Jeddah','Operations Department','507819247','active');
INSERT INTO `employee` VALUES (89,'Lamberto JR Villo Aguirre','','','10207','Pipe Fitter','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (90,'Dennis Panopio Rodriguez','','dennis_rodriguez20@yahoo.com','10208','Pipe Fitter','Riyadh','Operations Department','537559874','active');
INSERT INTO `employee` VALUES (91,'Raynante Banta Manalo','','','10209','Pipe Fitter','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (92,'Rouel Carandang Marasigan','','marasigan_rouel@yahoo.com','10210','Pipe Fitter','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (93,'Fritz Patrick Aguirre Dela Ros','','','10222','Pipe Fitter','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (94,'Florante JR Salazar Alcantara','','','10224','Pipe Fitter','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (95,'Ronald Falculan Culot','','','10225','Pipe Fitter','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (96,'Roland Aguirre Valdez','Valdez','','10228','Pipe Fitter','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (97,'Armando De Torres Dimayuga','','','10230','Pipe Fitter','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (98,'Jason Villo Aguirre','','','10232','Pipe Fitter','Jeddah','Operations Department','503274383','active');
INSERT INTO `employee` VALUES (99,'Andrew Cabaguio Manalo','','','10233','Pipe Fitter','Jubail','Operations Department','503274389','active');
INSERT INTO `employee` VALUES (100,'Nelson Garcia Demaculangan','','','10238','Pipe Fitter','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (101,'Noel Garcia Valdez','','valdeznoelg19@yahoo.com','10239','Pipe Fitter','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (102,'Henry Rosales Dimaculangan','','','10240','Pipe Fitter','Yanbu','Operations Department','533265705','active');
INSERT INTO `employee` VALUES (103,'Dionisio Cadevida De Torres','','','10257','Pipe Fitter','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (104,'ZULFQUAR','KHAN ALI IMAM KHAN','','iv1219','Pipe Fitter','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (105,'EQBAL','AHMAD SERAJUDDIN AHMAD','','iv1233','Pipe Fitter','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (106,'MANTAJ','ALI ISLAM MIYAN','','iv1211','Pipe Fitter','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (107,'NAUSHAD','AHAMAD NIJAMUDDIN','','iv1231','Pipe Fitter','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (108,'MOHAMMAD','ANWAR MOHAMMAD ISRAIL','','iv1224','Pipe Fitter','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (109,'DHARMENDRA','KUMAR SINGH','','iv1223','Pipe Fitter','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (110,'NURBASAR','ANSARI SAHABUDDIN ANSARI','','iv1222','Pipe Fitter','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (111,'SAHID','ANSARI MANJOOR ANSARI','','iv1221','Pipe Fitter','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (112,'SHIVPUJAN','SINGH SURESH SINGH','','iv1235','Pipe Fitter','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (113,'UPENDRA','SINGH RAMSEWAK SINGH','','iv1234','Pipe Fitter','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (114,'VINAY','KUMAR SINGH','','iv1220','Pipe Fitter','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (115,'NOOR','ALAM MOINUDDIN SHAIKH MOINUDDI','','iv1232','Pipe Fitter','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (116,'Muhammad','Naveed Naimat Ali','','new065','Pipe Fitter','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (117,'Siddkali Ali','','','10019','Harris','Rabigh Workshop','Operations Department','','active');
INSERT INTO `employee` VALUES (118,'MANJUR','ANSARY ASGAR ANSARY','','iv1236','Pipe Fabricator','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (119,'Mirza','Aftab Hussain','','10349','Pipe Fabricator','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (120,'Khalid','Mehmood Arain','','10343','Pipe Fabricator','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (121,'Muhammed','Jameel','','10348','Pipe Fabricator','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (122,'Ghulam','Mustafa','','10337','Pipe Fabricator','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (123,'Muhammed','Shahzad','','10347','Pipe Fabricator','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (124,'Muhammed','Sajid Javed','','10342','Pipe Fabricator','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (125,'Mohammed','Umer Shah','','10338','Pipe Fabricator','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (126,'Abdul Qayoom','Muhammad Siddique','','10346','Pipe Fabricator','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (127,'Muhammed','Shahbaz','','10341','Pipe Fabricator','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (128,'Ijaz','Ahmed Muhammad Latif','','10344','Pipe Fabricator','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (129,'Mohammad Safdar Ekram','','ezazahmed@yahoo.co.in','10033','Instrumentation Technician','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (130,'Gokul','Palani Selvi','','10409','Piping Engineer','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (131,'Yada','Giri Kona','','10377','Piping Engineer','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (132,'Reynaldo Lansangan','','reynaldo@nhc-ksa.com','10080','Site Engineer','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (133,'Ram Kumar Tamang','','','10161','Diesel Mechanic','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (134,'Samsudeen Syed Kadar','','syedkhader41@yahoo.com','10090','Painting Foreman','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (135,'Ahmed Basha Akbar','','akbarbasha58@yahoo.com','10116','Painting Foreman','Yanbu','Operations Department','509633962','active');
INSERT INTO `employee` VALUES (136,'Pereya Samy Thangavel','','','10252','Painting Foreman','Abha','Operations Department','','active');
INSERT INTO `employee` VALUES (137,'Mohammad','Ahmed Mohammad Jane Alam','','new063','Painting Foreman','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (138,'Gerardo Caraos Ramirez','','','10091','Blaster / Painter','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (139,'Prem Bahadur Khatri','','','10127','Blaster / Painter','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (140,'Devilal Bishwakarma Nara','','','10300','Blaster / Painter','Yanbu','Operations Department','597638478','active');
INSERT INTO `employee` VALUES (141,'Babu Ram Bishwokarma','','','10131','Blaster / Painter','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (142,'Abdull Asathi Patcha','','','10193','Blaster / Painter','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (143,'Rene Boy Mallari Sison','','reneboysison@yahoo.com','10221','Blaster / Painter','Abha','Operations Department','532160536','active');
INSERT INTO `employee` VALUES (144,'Leo Berdoro Balbaqurea','','','10244','Blaster / Painter','Yanbu','Operations Department','558391247','active');
INSERT INTO `employee` VALUES (145,'Ram Hirday','Mukhiya','','10361','Blaster / Painter','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (146,'Khadka Narayan','Newar','','10359','Blaster / Painter','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (147,'Abubakkar','Kalander Basha','','10371','Blaster / Painter','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (148,'Talib','Hussain','','10389','Blaster / Painter','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (149,'Saleem Abbas','','','10162','Rigger','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (150,'Ronjel Velano Aldovino','','','10237','Rigger','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (151,'Joel Solares Casabuena','','','10258','Rigger','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (152,'MOHAMMAD','SHAHABUDDIN ANSARI','','iv1242','Rigger','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (153,'MOHAMMAD','SHAMSHUDDIN MOHAMMAD AZAD','','iv1237','Rigger','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (154,'RUDRA','PRATAP SINGH','','iv1238','Rigger','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (155,'GHULAM','JILANI KHAN','','iv1239','Rigger','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (156,'MISTER','ALI KHAN','','iv1240','Rigger','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (157,'MOHAMMAD','ZIYAUL HAQUE KHAN','','iv1241','Rigger','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (158,'Omar Daraz','','','10326','Rigger','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (159,'SANJAY','KUMAR PANNALAL GUPTA','','iv1225','Rigger','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (160,'MAHMUD','ANSARI SAIYEK','','iv1218','Rigger','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (161,'Victorino Lat Anis','','','10108','General Worker','Abha','Operations Department','538855870','active');
INSERT INTO `employee` VALUES (162,'Rajendra Sarki Bipin','','','10133','General Worker','Yanbu','Operations Department','541950208','active');
INSERT INTO `employee` VALUES (163,'Nagaraj Ponnuchamy','','','10188','General Worker','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (164,'Pavalaraja Pavalappu Antonypil','','','10212','General Worker','Riyadh','Operations Department','','active');
INSERT INTO `employee` VALUES (165,'System','','','system','General Worker','Jeddah - HO','Human Resources Department','','active');
INSERT INTO `employee` VALUES (166,'Srikanth Bora','','bora@nhc-ksa.com','10260','Planning Engineer','Jeddah','Operations Department','563633250','active');
INSERT INTO `employee` VALUES (167,'Kul Bahadur Adhikari','','','10128','Cleaning Labor','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (168,'Gajendra Bahadur Tharu','','','10132','Cleaning Labor','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (169,'Dor Nidhi Khanal','','','10138','Cleaning Labor','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (170,'Sarke Khatri Radhika','','','10140','Cleaning Labor','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (171,'Bishnu Bahadur Thapa Kshetri','','','10141','Cleaning Labor','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (172,'Hem Bahadur Rokha','','','10143','Cleaning Labor','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (173,'Man Bahadur Magar','','','10148','Cleaning Labor','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (174,'Sahul Hameed Mohamed Asees','','','10200','Cleaning Labor','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (175,'Parnanthan Princemaks Rayappu','','','10202','Cleaning Labor','Riyadh','Operations Department','','active');
INSERT INTO `employee` VALUES (176,'Mousa Cesar Banzuela Borillo','','mcborillo@nhc-ksa.com','10066','Supervisor','Jeddah','Operations Department','0562070980, 05463896','active');
INSERT INTO `employee` VALUES (177,'Sadasivan Nair Perumbilathu','Gopala Krishnan','','10145','Supervisor','Yanbu','Operations Department','0551231078, 05463896','active');
INSERT INTO `employee` VALUES (178,'Nisar Ahmed Aziz','Aziz Mohammed','naziz@nhc-ksa.com','10006','Supervisor','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (179,'Gul','Arzan Akram','','10380','Supervisor','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (180,'Aftab','Ahmed','','10379','Supervisor','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (181,'Ajaz','Ahmed','','10328','Supervisor','Riyadh','Operations Department','','active');
INSERT INTO `employee` VALUES (182,'Pervaiz','Iqbal Raja Mohammad Akram','','10316','Supervisor','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (183,'Marithurai Subbiah','','s.marithurai@yahoo.com','10265','QA/QC Inspector','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (184,'Tamilarasan','Gajendran','','10369','QA/QC Inspector','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (185,'Sreekathiravan','pethaperumal R. Kannan','','10370','QA/QC Inspector','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (186,'Prakash','Narayanasamy Vedhachalam','','10368','QA/QC Inspector','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (187,'Ariel Navarro Mortilla','','','10156','GRP Laminator','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (188,'Rande Cobilla Marco','','','10157','GRP Laminator','Jeddah','Operations Department','559731456','active');
INSERT INTO `employee` VALUES (189,'Neeraj Kumar Bulan','','','10144','Scaffolder','Abha','Operations Department','','active');
INSERT INTO `employee` VALUES (190,'Mohammed Akram Fazal Subhan','','akram@nhc-ksa.com','10166','Scaffolder','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (191,'Bigyan','Paudel','','10360','Scaffolder','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (192,'Gyan','Rajbanshi','','10355','Scaffolder','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (193,'Karan','Sunar','','10362','Scaffolder','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (194,'Hazir','Khan','','10336','Scaffolder','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (195,'Muhammad','Arfan Muhammad Siddique','','10404','Scaffolder','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (196,'Kausal Kumar Pathak','','','10036','Fabricator','Jeddah','Operations Department','543715442','active');
INSERT INTO `employee` VALUES (197,'Ronald Medrano Moncawe','Moncawe','ronaldmoncawe@yahoo.com','10119','Fabricator','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (198,'Salahuddin Khanbhro Mohammed','','','10180','Fabricator','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (199,'Muhammad Ajmal Fazal Ellahi','','','10183','Fabricator','Abha','Operations Department','597954786','active');
INSERT INTO `employee` VALUES (200,'Eleazarde Labutap Agarao','','sangwen24@yahoo.com','10231','Fabricator','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (201,'MAHESH','SHARMA SHIVNATH SHARMA','','iv1212','Fabricator','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (202,'MOHAMMAD','NEYAZUDDIN MAQUESUD ALAM','','iv1217','Fabricator','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (203,'Mohammed','Obaidullah','','10376','Fabricator','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (204,'Masoom','Akhtar Abdul Rahim','','10375','Fabricator','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (205,'Faiyaz','Ahmad Ansari','','10374','Fabricator','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (206,'Eqbal','Ahmad Ansari','','10373','Fabricator','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (207,'Ponniah Arujunan','','','10023','Time Keeper','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (208,'Suliman Jumaan Salim Al Ghamdi','','','10182','Time Keeper','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (209,'Nisar Ahmed','','nahmed@nhc-ksa.com','10171','Project Engineer','Yanbu','Operations Department','537046747','active');
INSERT INTO `employee` VALUES (210,'Rene','Domdoma Heba','','new061','Project Engineer','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (211,'Sriram','Ramamurthy Jayachithra','','10410','Project Engineer','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (212,'Samadullah','Shareef','','10382','Project Supervisor','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (213,'Fahad Abdul Kareem Mohammed','','','10248','Maint. Technician','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (214,'Jayakrishnan Ramachandran Pill','','jkrishnan@nhc-ksa.com','10089','Mechanical Engineer','Riyadh','Operations Department','565520867','active');
INSERT INTO `employee` VALUES (215,'Waqas Ahmad Ashfaq Ahmad','','waqas@nhc-ksa.com','10277','Mechanical Engineer','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (216,'Ajayakumar Anandan','','ajay@nhc-ksa.com','10272','Electrical Supervisor','Jeddah','Operations Department','545830321','active');
INSERT INTO `employee` VALUES (217,'Harris Rahim','','','10322','Coordinator','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (218,'Atta Ullah','Khan Hashim Khan','','10402','MULTI WELDER','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (219,'Parvez','Ahmad Maqsood Ahmad','','10399','MULTI WELDER','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (220,'Habib Ullah','Muhammad Ali','','10398','MULTI WELDER','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (221,'Naeem','Yousaf Muhammad Yousaf','','10397','MULTI WELDER','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (222,'Shahid','Nadeem Muhammad Khalid','','10403','MULTI WELDER','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (223,'Abdul Hafeez','Abdul Aziz','','10351','LEADMAN FAB.','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (224,'Masood','Abid','','10340','LEADMAN FAB.','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (225,'Mohammad Afzal Langah','','','10286','Operation Coordinator','Jubail','Support Services','','active');
INSERT INTO `employee` VALUES (226,'Shams Ali Muhtahsan','','','10314','Piping Supervisor','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (227,'Bien Sebuc Gonzales','','biengonzales@yahoo.com','10226','Safety Officer/Permit Receiver','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (228,'Ronald Jeffrey Gundan Rivera','','rigrivera@yahoo.com','10227','Safety Officer/Permit Receiver','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (229,'Binoj Jose Thundathil','','binoj916@yahoo.com','10243','Safety Officer/Permit Receiver','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (230,'Robertson Abu Magnaye','','robertson@nhc-ksa.com','10268','Piping Engineer/Permit Receiver','Jubail','Operations Department','549154810','active');
INSERT INTO `employee` VALUES (231,'Eugene Tayson Villarias','','eugene@nhc-ksa.com','10270','Piping Engineer/Permit Receiver','Yanbu','Operations Department','549154808','active');
INSERT INTO `employee` VALUES (232,'Restituto Lacampuenga','','','10008','Fabricator/Permit Receiver','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (233,'Mohammed Asif','','','10184','Fabricator/Permit Receiver','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (234,'Nelford Abante Exconde','','','10236','Fabricator/Permit Receiver','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (235,'Rosendo Macatangay Brioness','Abdullah','','10007','Electric Foreman/Permit Receiver','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (236,'Dinesh Yadav Anita','','','10139','Blaster / Helper','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (237,'I.J. Chiresthoper','','','10214','Blaster / Helper','Riyadh','Operations Department','','active');
INSERT INTO `employee` VALUES (238,'P.T. Yavaneswaran','','','10215','Blaster / Helper','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (239,'Mahilkkarasan Mariaseelan Asir','','','10216','Blaster / Helper','Riyadh','Operations Department','','active');
INSERT INTO `employee` VALUES (240,'Gerald Ramos Calvo','','','10229','Welder/Permit Receiver','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (241,'Michael Tampic Flora','','cyrhared@yahoo.com','10173','Pipe Fitter/Permit Receiver','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (242,'Eudes Payod Tubil','','eudes.tubil@yahoo.com','10206','Pipe Fitter/Permit Receiver','Riyadh','Operations Department','537564865','active');
INSERT INTO `employee` VALUES (243,'Mark Francis Dimatatac Panopio','','','10223','Pipe Fitter/Permit Receiver','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (244,'Mohammed Ilyas','','','10303','Auto Electrician','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (245,'Mazhar','Khan','','10378','Heavy Driver','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (246,'Sherrehman Saifurahman','','','10312','Heavy Driver','Yanbu','Operations Department','597893493','active');
INSERT INTO `employee` VALUES (247,'Rama Samy Thangavel','','','10325','Heavy Driver','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (248,'Sajan','Khadgi','','10358','Heavy Driver','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (249,'Raja','Amanath Khan','','10381','Heavy Driver','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (250,'Mohammed','Akmal Mohammed Aslam','','new072','Heavy Driver','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (251,'Mohammed','Aslam Khan','','new073','Heavy Driver','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (252,'Fazal','Mohamed Mohamed Kalideen','','10405','Mechanic','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (253,'Muhammad','Akmal Muhammad Ibrahim','','10313','Mechanic','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (254,'Dilip','Kumar','','10357','Scaffolder/Driver','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (255,'Hukum','Bahadur Bista Kshetri','','10386','Labor','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (256,'Mod','Nath','','10354','Labor','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (257,'Mohammed','Kaleel','','10330','Labor','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (258,'Ganesan','Sandhanam','','10385','Helper','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (259,'Murad Ali','Gul Muhammad','','10395','Light Driver','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (260,'Ajmal','Khan Agmal','','10396','Light Driver','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (261,'Hassan','Ali Yormas Khan','','10393','Civil/Foreman','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (262,'Jonard','Montano Lapan','','10384','Planner / Quantity Surveyor','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (263,'Mohammed','Yusuf','','10335','Scaffolding Supervisor','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (264,'Jonathan Gallardo ATA','','','10053','Mechanical Foreman/ PR','Yanbu','Operations Department','536448789','active');
INSERT INTO `employee` VALUES (265,'Mohammed Akbar Khan','','khaan222@yahoo.com','10165','Mechanical Foreman/ PR','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (266,'Mohammed Aamer Ahmed','','mdaamer@nhc-ksa.com','10263','Mechanical Engineer/PR','Jeddah','Operations Department','596992618','active');
INSERT INTO `employee` VALUES (267,'Fhelum Crisostomo Bamba','','ehl08@yahoo.com','10259','Forklift Operator/PR','Riyadh','Operations Department','503274388','active');
INSERT INTO `employee` VALUES (268,'Sami Ullah Khan Hayat Ullah Kh','','','10273','Gen. Worker/Supervisor/PR','Abha','Operations Department','594570708','active');
INSERT INTO `employee` VALUES (269,'Khizar Hayat Muhammad Riaz','','','10234','Supervisor/Permit Receiver','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (270,'Mohammed','Sabir Mohammed Abbas','','10178','Cleaning Labor/Welder','Abha','Operations Department','','active');
INSERT INTO `employee` VALUES (271,'Jawad','Hussain Awan Mushtaq','','new064','HSE Supervisor','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (272,'Gerlito Evangelista Ilagan','','','10059','Pipe Fitter/Safety Officer','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (273,'Mohammed','Riyas Khan Meer','','10319','Crane Operator','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (274,'Salawat','Hussain','','10390','Grinder Man','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (275,'Noushad Poduvachola Kalathil','','noushad@nhc-ksa.com','10076','Accountant','Jeddah - HO','Finance / Accounts','','active');
INSERT INTO `employee` VALUES (276,'Sihabudeen Pulluparamban','','sihab@nhc-ksa.com','10247','Accountant','Jubail','Finance / Accounts','5466865534','active');
INSERT INTO `employee` VALUES (277,'Rabiah','Rashidahmed','ac-assit@nhc-ksa.com','10366','Accountant','Jeddah - HO','Support Services','','active');
INSERT INTO `employee` VALUES (278,'Sagabudeen','Nijamudeen Sagabudeen Late','','10406','Accountant','Jeddah - HO','Operations Department','','active');
INSERT INTO `employee` VALUES (279,'Mujeeb Rahman Parakatt','','mujeeb@nhc-ksa.com','10004','Purchaser','Jeddah - HO','Support Services','','active');
INSERT INTO `employee` VALUES (280,'Abdul Kadher','Jailani','akjailani@nhc-ksa.com','10255','Computer Programmer','Jeddah - HO','IT','','active');
INSERT INTO `employee` VALUES (281,'Moideen Karuvadi','','','10289','Tea Boy','Jeddah - HO','Support Services','','active');
INSERT INTO `employee` VALUES (282,'Ubai','Thullah Usain','','10329','Driver','Jeddah - HO','Operations Department','','active');
INSERT INTO `employee` VALUES (283,'Palani Chinnasamy','','','10267','Driver','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (284,'Fahad Mohammed','Junaih','','new003','Driver','Riyadh','Operations Department','','active');
INSERT INTO `employee` VALUES (285,'Abdullah','Mohammed Suwailem Alanazi','','new070','Driver','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (286,'Bryan Panopio Rodrigues','','bryanrodriguez30@yahoo.com','10246','Pipe Fitter','Jubail','Operations Department','537643404','active');
INSERT INTO `employee` VALUES (287,'Bonnie Flores Castriciones','','bonnie@nhc-ksa.com','10181','Administrator','Jeddah - HO','Support Services','530811350','active');
INSERT INTO `employee` VALUES (288,'System','Administrator','akjailani@nhc-ksa.com','admin','Administrator','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (289,'Khwaja Talha Bin Hassan','','talha@nhc-ksa.com','10254','Administrator','Jeddah - HO','Support Services','','active');
INSERT INTO `employee` VALUES (290,'Akhil Hassan','','hassan@nhc-ksa.com','10306','Administrator','Jeddah - HO','Human Resources Department','567064747','active');
INSERT INTO `employee` VALUES (291,'Fadil Atiah Al Zahrani','','fadil@nhc-ksa.com','10137','Mandoob','Jeddah - HO','Support Services','','active');
INSERT INTO `employee` VALUES (292,'Aydh','Jabir S. Abo Hammamah','','10388','Mandoob','Abha','Support Services','','active');
INSERT INTO `employee` VALUES (293,'Ahmed','Omar Abed Alkubaydi','','new016','Mandoob','Yanbu','Support Services','','active');
INSERT INTO `employee` VALUES (294,'Rami Atallah','Alharbi','','10367','Mandoob','Jeddah - HO','Support Services','','active');
INSERT INTO `employee` VALUES (295,'Abdullah','Saeed A.AlZahrani','','10321','Mandoob','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (296,'Faris','Saleh Abdullah','','10334','Mandoob','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (297,'Adil','Shudayyid Salem Aljohani','','new071','Mandoob','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (298,'Abdul Nazar N','','','10266','QA/QC Inspector','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (299,'Sattam Mabruk Fati Althalabi','','','10220','Expeditor','Jeddah - HO','Support Services','','active');
INSERT INTO `employee` VALUES (300,'Wael Ahmed Al Zahrani','','','10274','Expeditor','Jeddah - HO','Support Services','','active');
INSERT INTO `employee` VALUES (301,'Nasir Mansour Alsayed','','','10280','Expeditor','Jeddah','Support Services','','active');
INSERT INTO `employee` VALUES (302,'Ziyad Faraj Bin Saleh Al Johan','','','10284','Expeditor','Yanbu','Operations Department','','active');
INSERT INTO `employee` VALUES (303,'Jamal Mohammed','Alzahrani','','10305','Expeditor','Jeddah','Support Services','','active');
INSERT INTO `employee` VALUES (304,'Abdulqadar Mohammed Al Amoudi','','aqader@nhc-ksa.com','10242','Electrical Engineer','Jeddah','Support Services','','active');
INSERT INTO `employee` VALUES (305,'Ibrahim Hassan Almasodi','','','10250','Receptionist','Jeddah - HO','Support Services','','active');
INSERT INTO `employee` VALUES (306,'Saleh Abdullah Saleh Alomari','','','10283','Receptionist','Jeddah - HO','Support Services','','active');
INSERT INTO `employee` VALUES (307,'Asoka Singhe P Gamage','','asoka@nhc-ksa.com','10256','Maintanance Engineer','Jeddah','Support Services','','active');
INSERT INTO `employee` VALUES (308,'Abdul Rahman','Mohammed Tawfeeq','','new074','Admin. Assistant','Jeddah - HO','Operations Department','','active');
INSERT INTO `employee` VALUES (309,'Muhammed Muhsin','','muhsin@nhc-ksa.com','10282','Admin. Assistant','Jeddah - HO','Human Resources Department','531041309','active');
INSERT INTO `employee` VALUES (310,'Wadeed Youssef Qadore','','','10364','Admin. Assistant','Jeddah - HO','Support Services','','active');
INSERT INTO `employee` VALUES (311,'Meshal Al Ghamdi','','','10311','Admin. Assistant','Jeddah - HO','Support Services','','active');
INSERT INTO `employee` VALUES (312,'Amin Asaad','Alhaj','Ameen@nhc-ksa.com','10301','Support Service Coordinator','Jeddah','Support Services','509475319','active');
INSERT INTO `employee` VALUES (313,'Mohammed Yousuf Althaqafi','','','10276','Mechanical Technician','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (314,'Arvie Villanueva Rivera','','arvie@nhc-ksa.com','10269','Piping Engineer/Permit Receiver','Jubail','Operations Department','549154809','active');
INSERT INTO `employee` VALUES (315,'Mohamed Shahid','','shahid@nhc-ksa.com','10195','ID Co-ordinator','Yanbu','Operations Department','545962696','active');
INSERT INTO `employee` VALUES (316,'Athira Kayiparambil','Raveendranath','','10365','Secretary','Jeddah - HO','Support Services','','active');
INSERT INTO `employee` VALUES (317,'Abdulmalk Khalid Obaid','','','10309','Expeditor/Driver','Riyadh','Operations Department','','active');
INSERT INTO `employee` VALUES (318,'Abdulnasser','Rubayyi A. Albuhaysi','','10307','Insurance coordinator','Jeddah - HO','Support Services','','active');
INSERT INTO `employee` VALUES (319,'Mohammed','Nizar Ali Akber','','10332','Camp Boss','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (320,'Jaykumar Vijayakumaran','','jaykumar@nhc-ksa.com','10264','Site Engineer/PR','Jubail','Operations Department','567064567','active');
INSERT INTO `employee` VALUES (321,'Muhammad Mukhtar','Chuadhry Jan Muhammad','','v1188','Pipe Fitter','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (322,'Muhammad Khalid Saleem','Muhammad Aslam','','v1189','Pipe Fitter','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (323,'Tariq Waheed','Muhammad Alam','','v1190','Pipe Fitter','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (324,'Sohail Anjum','Abdul Hakeem Khan','','v1191','Pipe Fitter','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (325,'Mushtaq Ahmad','Abdul Rehman','','v1194','Pipe Fitter','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (326,'Mehdi Hassan','Jaan Muhammad Urf Bhoola','','v1204','Pipe Fitter','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (327,'Malik Muhammad Safdar','Haji Ghulam Rasool','','v1205','Pipe Fitter','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (328,'Muhammad Sibtain','Abdul Majeed','','v1206','Pipe Fitter','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (329,'Sharafat Ali','Zahoor Ali','','v1207','Pipe Fitter','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (330,'Adeel Javed','Mir Javed Iqbal','','v1208','Pipe Fitter','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (331,'Yasair Ali','Ali Bahadar','','v1210','Pipe Fitter','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (332,'Javed Iqbal','HaJi Muhammad','','10353','Pipe Fitter','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (333,'Ghazanfar Abbas','Allah Ditta','','v1182','Fabricator','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (334,'Adil Jamil','Asmat Ullah Gill','','v1180','Fabricator','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (335,'Muhammad Saqib Nazar Khan','Muhammad Taj Khan','','v1181','Helper','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (336,'Javed Iqbal','Ashiq Hussain','','v1183','Helper','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (337,'Tariq Farooq','Muhammad Dawood','','v1184','Helper','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (338,'Muhammad Ijaz Khan Niazi','Att Muhammad Khan Niazi','','v1185','Helper','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (339,'Kashif Nadeen','Muhammad Hanif','','v1186','Helper','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (340,'Shahid Jafar','Jafar Hussain','','v1187','Helper','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (341,'Hafiz Bilal Yousaf','Muhammad Yousaf','','v1192','Helper','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (342,'Hafiz Abdur Rehman Anwar','Muhammad Anwar','','v1193','Helper','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (343,'Zahid Rehan Sajid','Allah Dewaya','','v1195','Helper','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (344,'Noor Mustafa','Muhammad Farooq','','v1196','Helper','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (345,'Muhammad Aleem','Muhammad Ibrahim','','v1197','Helper','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (346,'Faiz Ahmed','Said','','v1198','Helper','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (347,'Rashid Mehmood','Abdul Sattat Raza','','v1199','Helper','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (348,'Muhammad Javed','Nazeer Ahmad','','v1200','Helper','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (349,'Muhammad Javed','Muhammad Irshad','','v1201','Helper','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (350,'Raja Muhammad Waseem','Najeeb Ali','','v1202','Helper','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (351,'Bilal Ahmed','Nisar Ahmed','','v1203','Helper','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (352,'Abdul Rashhed','Hakim Ali','','v1209','Helper','Jeddah','Operations Department','','active');
INSERT INTO `employee` VALUES (353,'Rana Sajid Ali','Rana Tufail Muhammad','','10350','Supervisor Mechanical','Jubail','Operations Department','','active');
INSERT INTO `employee` VALUES (354,'Hamid Ali','Rana Tufail Muhammad','','10352','Fabricator Pipe','Jubail','Operations Department','','active');
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
INSERT INTO `google_users` VALUES (100428232109775983047,'Mohammed Talha','','','talhaqqq@gmail.com',4,'https://plus.google.com/100428232109775983047','https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/A');
INSERT INTO `google_users` VALUES (100678434091494690900,'Mohammed Talha','talha@object90.com','monu','talha@object90.com',1,'https://plus.google.com/100678434091494690900','https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/A');
INSERT INTO `google_users` VALUES (103583028745737769566,'Sami A. Iskandrani','','','sami@nhc-ksa.coms',14,'','https://lh5.googleusercontent.com/-COWe5Xc1JxE/AAAAAAAAAAI/A');
INSERT INTO `google_users` VALUES (105295586601853475832,'Syed Abdul Aaleem','','','aaleem@nhc-ksa.coms',14,'https://plus.google.com/105295586601853475832','https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/A');
INSERT INTO `google_users` VALUES (106219740134865583912,'ramesh balakrishnan','','','rameshkumar86@gmail.coms',14,'https://plus.google.com/106219740134865583912','https://lh5.googleusercontent.com/-nCqLiYHWuJM/AAAAAAAAAAI/A');
INSERT INTO `google_users` VALUES (108217036843721318338,'Abdul Rahman','','','arahman@nhc-ksa.coms',14,'','https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/A');
INSERT INTO `google_users` VALUES (111812993465993205296,'Fahmi T.Ahmed','','','fahmi@nhc-ksa.coms',14,'https://plus.google.com/111812993465993205296','https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/A');
INSERT INTO `google_users` VALUES (116840605792335537520,'Abdulkadher Jailani','','','akjailani@nhc-ksa.coms',14,'https://plus.google.com/116840605792335537520','https://lh4.googleusercontent.com/-ldRWFmhs-rs/AAAAAAAAAAI/A');
INSERT INTO `google_users` VALUES (117736027063058566983,'talha mohammed','','','talhaobject90@gmail.com',1,'','https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/A');
INSERT INTO `google_users` VALUES (118161579513011654715,'Roney Philip','roneyp20@gmail.com','monu','roneyp20@gmail.com',3,'https://plus.google.com/118161579513011654715','https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/A');
/*!40000 ALTER TABLE `google_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locations` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `location` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (1,'Jeddah');
INSERT INTO `locations` VALUES (2,'JRD');
INSERT INTO `locations` VALUES (3,'YNGL');
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notification_types`
--

DROP TABLE IF EXISTS `notification_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notification_types` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `notification_type` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notification_types`
--

LOCK TABLES `notification_types` WRITE;
/*!40000 ALTER TABLE `notification_types` DISABLE KEYS */;
INSERT INTO `notification_types` VALUES (1,'Istemara Expiry');
INSERT INTO `notification_types` VALUES (2,'Insurance Expiry');
INSERT INTO `notification_types` VALUES (3,'Preventive Maintenance Expiry');
INSERT INTO `notification_types` VALUES (4,'TUV Sticker Expiry');
INSERT INTO `notification_types` VALUES (5,'Client Sticker Expiry');
INSERT INTO `notification_types` VALUES (6,'MOT License Expiry');
INSERT INTO `notification_types` VALUES (7,'MVPI Expiry');
/*!40000 ALTER TABLE `notification_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notify`
--

DROP TABLE IF EXISTS `notify`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notify` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `notification_type` varchar(50) NOT NULL,
  `send_to` varchar(200) NOT NULL,
  `days_before` int(4) NOT NULL,
  `stage` int(5) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notify`
--

LOCK TABLES `notify` WRITE;
/*!40000 ALTER TABLE `notify` DISABLE KEYS */;
INSERT INTO `notify` VALUES (1,'Insurance Expiry','1',36,1);
INSERT INTO `notify` VALUES (2,'Insurance Expiry','3',36,1);
INSERT INTO `notify` VALUES (3,'Insurance Expiry','4',36,1);
INSERT INTO `notify` VALUES (4,'Insurance Expiry','1',34,2);
INSERT INTO `notify` VALUES (5,'Insurance Expiry','4',34,2);
INSERT INTO `notify` VALUES (6,'Insurance Expiry','3',7,3);
INSERT INTO `notify` VALUES (7,'Istemara Expiry','1',16,1);
INSERT INTO `notify` VALUES (8,'Istemara Expiry','3',16,1);
INSERT INTO `notify` VALUES (9,'Istemara Expiry','4',16,1);
INSERT INTO `notify` VALUES (10,'Istemara Expiry','3',13,3);
INSERT INTO `notify` VALUES (11,'TUV Sticker Expiry','1',10,1);
INSERT INTO `notify` VALUES (12,'TUV Sticker Expiry','3',10,1);
INSERT INTO `notify` VALUES (13,'TUV Sticker Expiry','4',10,1);
INSERT INTO `notify` VALUES (14,'TUV Sticker Expiry','3',43,3);
INSERT INTO `notify` VALUES (15,'Client Sticker Expiry','1',18,1);
INSERT INTO `notify` VALUES (16,'Client Sticker Expiry','3',18,1);
INSERT INTO `notify` VALUES (17,'Client Sticker Expiry','4',18,1);
INSERT INTO `notify` VALUES (18,'Client Sticker Expiry','1',8,2);
INSERT INTO `notify` VALUES (19,'Client Sticker Expiry','4',8,2);
INSERT INTO `notify` VALUES (20,'Client Sticker Expiry','3',21,3);
INSERT INTO `notify` VALUES (21,'Preventive Maintenance Expiry','1',2,1);
INSERT INTO `notify` VALUES (22,'Preventive Maintenance Expiry','3',2,1);
INSERT INTO `notify` VALUES (23,'Preventive Maintenance Expiry','4',2,1);
INSERT INTO `notify` VALUES (24,'Preventive Maintenance Expiry','1',63,2);
INSERT INTO `notify` VALUES (25,'Preventive Maintenance Expiry','4',63,2);
/*!40000 ALTER TABLE `notify` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(100) NOT NULL,
  `project_description` varchar(500) NOT NULL,
  `status` enum('inactive','active','finished') NOT NULL DEFAULT 'inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (4,'JRD Tank Repair LFC','','active');
INSERT INTO `projects` VALUES (5,'YRD','','active');
INSERT INTO `projects` VALUES (6,'TEKFEN','','active');
INSERT INTO `projects` VALUES (7,'ABHA','','active');
INSERT INTO `projects` VALUES (8,'RRD','','active');
INSERT INTO `projects` VALUES (9,'YNGL','','active');
INSERT INTO `projects` VALUES (10,'YRD Painting Svcs LFC','','active');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
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
INSERT INTO `screens` VALUES (5,'role_table');
INSERT INTO `screens` VALUES (6,'reports_screen');
INSERT INTO `screens` VALUES (7,'tickets_screen');
/*!40000 ALTER TABLE `screens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tickets` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `asset_id` int(10) NOT NULL,
  `expiry_type` varchar(100) NOT NULL,
  `expiring_date` date NOT NULL,
  `status` enum('opened','assigned','closed') NOT NULL DEFAULT 'opened',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tickets`
--

LOCK TABLES `tickets` WRITE;
/*!40000 ALTER TABLE `tickets` DISABLE KEYS */;
INSERT INTO `tickets` VALUES (1,5,'Istemara Expiry','2015-01-28','opened');
INSERT INTO `tickets` VALUES (2,19,'Istemara Expiry','2015-01-31','opened');
INSERT INTO `tickets` VALUES (3,5,'Insurance Expiry','2015-01-22','opened');
INSERT INTO `tickets` VALUES (4,19,'Insurance Expiry','2015-02-20','opened');
INSERT INTO `tickets` VALUES (5,5,'Preventive Maintenance Expiry','2015-01-17','opened');
INSERT INTO `tickets` VALUES (6,19,'Preventive Maintenance Expiry','2015-03-19','opened');
INSERT INTO `tickets` VALUES (7,5,'TUV Sticker Expiry','2015-01-25','opened');
INSERT INTO `tickets` VALUES (8,19,'TUV Sticker Expiry','2015-02-27','opened');
INSERT INTO `tickets` VALUES (9,2,'Client Sticker Expiry','2015-02-02','opened');
INSERT INTO `tickets` VALUES (10,3,'Client Sticker Expiry','2015-02-02','opened');
INSERT INTO `tickets` VALUES (11,1,'Client Sticker Expiry','2015-02-05','opened');
INSERT INTO `tickets` VALUES (12,5,'Istemara Expiry','2015-01-28','opened');
INSERT INTO `tickets` VALUES (13,19,'Istemara Expiry','2015-01-31','opened');
INSERT INTO `tickets` VALUES (14,5,'Insurance Expiry','2015-01-22','opened');
INSERT INTO `tickets` VALUES (15,19,'Insurance Expiry','2015-02-20','opened');
INSERT INTO `tickets` VALUES (16,5,'Preventive Maintenance Expiry','2015-01-17','opened');
INSERT INTO `tickets` VALUES (17,19,'Preventive Maintenance Expiry','2015-03-19','opened');
INSERT INTO `tickets` VALUES (18,5,'TUV Sticker Expiry','2015-01-25','opened');
INSERT INTO `tickets` VALUES (19,19,'TUV Sticker Expiry','2015-02-27','opened');
INSERT INTO `tickets` VALUES (20,2,'Client Sticker Expiry','2015-02-02','opened');
INSERT INTO `tickets` VALUES (21,3,'Client Sticker Expiry','2015-02-02','opened');
INSERT INTO `tickets` VALUES (22,1,'Client Sticker Expiry','2015-02-05','opened');
INSERT INTO `tickets` VALUES (23,5,'Istemara Expiry','2015-01-28','opened');
INSERT INTO `tickets` VALUES (24,19,'Istemara Expiry','2015-01-31','opened');
INSERT INTO `tickets` VALUES (25,5,'Insurance Expiry','2015-01-22','opened');
INSERT INTO `tickets` VALUES (26,19,'Insurance Expiry','2015-02-20','opened');
INSERT INTO `tickets` VALUES (27,5,'Preventive Maintenance Expiry','2015-01-17','opened');
INSERT INTO `tickets` VALUES (28,19,'Preventive Maintenance Expiry','2015-03-19','opened');
INSERT INTO `tickets` VALUES (29,5,'TUV Sticker Expiry','2015-01-25','opened');
INSERT INTO `tickets` VALUES (30,19,'TUV Sticker Expiry','2015-02-27','opened');
INSERT INTO `tickets` VALUES (31,2,'Client Sticker Expiry','2015-02-02','opened');
INSERT INTO `tickets` VALUES (32,3,'Client Sticker Expiry','2015-02-02','opened');
INSERT INTO `tickets` VALUES (33,1,'Client Sticker Expiry','2015-02-05','opened');
INSERT INTO `tickets` VALUES (34,5,'Istemara Expiry','2015-01-28','opened');
INSERT INTO `tickets` VALUES (35,19,'Istemara Expiry','2015-01-31','opened');
INSERT INTO `tickets` VALUES (36,5,'Insurance Expiry','2015-01-22','opened');
INSERT INTO `tickets` VALUES (37,19,'Insurance Expiry','2015-02-20','opened');
INSERT INTO `tickets` VALUES (38,5,'Preventive Maintenance Expiry','2015-01-17','opened');
INSERT INTO `tickets` VALUES (39,19,'Preventive Maintenance Expiry','2015-03-19','opened');
INSERT INTO `tickets` VALUES (40,5,'TUV Sticker Expiry','2015-01-25','opened');
INSERT INTO `tickets` VALUES (41,19,'TUV Sticker Expiry','2015-02-27','opened');
INSERT INTO `tickets` VALUES (42,2,'Client Sticker Expiry','2015-02-02','opened');
INSERT INTO `tickets` VALUES (43,3,'Client Sticker Expiry','2015-02-02','opened');
INSERT INTO `tickets` VALUES (44,1,'Client Sticker Expiry','2015-02-05','opened');
/*!40000 ALTER TABLE `tickets` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
INSERT INTO `user_roles` VALUES (1,'System Admin','a:7:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"3\";i:3;s:1:\"4\";i:4;s:1:\"5\";i:5;s:1:\"6\";i:6;s:1:\"7\";}');
INSERT INTO `user_roles` VALUES (2,'Data Entry Operator','a:5:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"3\";i:3;s:1:\"4\";i:4;s:1:\"5\";}');
INSERT INTO `user_roles` VALUES (3,'Asset Coordinator','a:6:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"3\";i:3;s:1:\"5\";i:4;s:1:\"6\";i:5;s:1:\"7\";}');
INSERT INTO `user_roles` VALUES (4,'Approver','a:1:{i:0;s:1:\"1\";}');
INSERT INTO `user_roles` VALUES (11,'Site Processor','a:3:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"6\";}');
INSERT INTO `user_roles` VALUES (12,'CEO','a:7:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"3\";i:3;s:1:\"4\";i:4;s:1:\"5\";i:5;s:1:\"6\";i:6;s:1:\"7\";}');
INSERT INTO `user_roles` VALUES (13,'Site Coordinator','a:3:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"6\";}');
INSERT INTO `user_roles` VALUES (14,'Site Mgr','a:5:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"3\";i:3;s:1:\"6\";i:4;s:1:\"7\";}');
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nice_name` varchar(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_role` varchar(30) NOT NULL,
  `user_status` enum('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Talha','talha@object90.com','password1','1','active');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendor`
--

LOCK TABLES `vendor` WRITE;
/*!40000 ALTER TABLE `vendor` DISABLE KEYS */;
INSERT INTO `vendor` VALUES (1,'Mazda');
INSERT INTO `vendor` VALUES (8,'Toyota');
INSERT INTO `vendor` VALUES (9,'Nissan');
INSERT INTO `vendor` VALUES (10,'Geely');
INSERT INTO `vendor` VALUES (11,'Mercedes');
INSERT INTO `vendor` VALUES (12,'Ashok Leyland');
INSERT INTO `vendor` VALUES (13,'TATA');
INSERT INTO `vendor` VALUES (14,'Isuzu');
INSERT INTO `vendor` VALUES (15,'Hyundai');
INSERT INTO `vendor` VALUES (16,'Genie');
INSERT INTO `vendor` VALUES (17,'Ford');
INSERT INTO `vendor` VALUES (18,'Fordland');
INSERT INTO `vendor` VALUES (19,'BMW');
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

-- Dump completed on 2015-01-15 14:44:40
