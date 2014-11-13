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
-- Table structure for table `TABLE 12`
--

DROP TABLE IF EXISTS `TABLE 12`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TABLE 12` (
  `id` varchar(3) DEFAULT NULL,
  `employee_firstname` varchar(30) DEFAULT NULL,
  `employee_last_name` varchar(30) DEFAULT NULL,
  `username` varchar(8) DEFAULT NULL,
  `COL 5` varchar(17) DEFAULT NULL,
  `COL 6` varchar(17) DEFAULT NULL,
  `COL 7` varchar(32) DEFAULT NULL,
  `COL 8` varchar(15) DEFAULT NULL,
  `COL 9` varchar(28) DEFAULT NULL,
  `COL 10` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TABLE 12`
--

LOCK TABLES `TABLE 12` WRITE;
/*!40000 ALTER TABLE `TABLE 12` DISABLE KEYS */;
INSERT INTO `TABLE 12` VALUES ('S#','First Name','Last Name','Username','Employee Type','Employee Category','Designation','Station','Email Address','Department');
INSERT INTO `TABLE 12` VALUES ('1','Sami','Iskandrani','iskandsa','Consultant','Management','CEO','Jeddah - HO','sami@nhc-ksa.com','Office of the CEO');
INSERT INTO `TABLE 12` VALUES ('2','Fahmi','Ahmed','tanrak','Consultant','Management','Manager, Support Services','Jeddah - HO','fahmi@nhc-ksa.com','Support Services');
INSERT INTO `TABLE 12` VALUES ('3','Syed Abdul Aleem','','10001','Consultant','Management','Commercial Manager','Jeddah - HO','aaleem@nhc-ksa.com','Commercial and Business Development');
INSERT INTO `TABLE 12` VALUES ('4','Ali Abdullah Alzahrani','','10002','Consultant','Management','Operations Manager','Jeddah','aalzahrani@nhc-ksa.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('5','Abdul Rahman Abdullah Alzahran','','10083','Consultant','Management','H R Co-ordinator','Jeddah - HO','arzahrani@nhc-ksa.com','Human Resources Department');
INSERT INTO `TABLE 12` VALUES ('6','Asaad Adham Al Nemer','','10310','Consultant','Management','Area Manager','Rabigh Workshop','asaad@nhc-ksa.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('7','Fahad Ayman Al Saleh','','10285','Consultant','Management','HR Policy Supervisor','Jeddah - HO','fahad.als@nhc-ksa.com','Human Resources Department');
INSERT INTO `TABLE 12` VALUES ('8','Shahid Zaffar Iqbal','','10308','Consultant','Management','Marketing Manager','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('9','Ramil Sevilla Nacua','','10299','Project Employee','Industrial','Safety Officer','Yanbu','ramilnacua34@yahoo.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('10','Muhammed','Hussain','new019','Project Employee','Industrial','Safety Officer','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('11','Mahboob','Khan','new020','Project Employee','Industrial','Safety Officer','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('12','Muhammed Ikram','','10318','Project Employee','Industrial','Safety Officer','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('13','Muhammed Anjad Ali','','10315','Project Employee','Industrial','Safety Officer','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('14','Fayaz','Mohammed Riyasat Ali','10411','Project Employee','Industrial','Safety Officer','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('15','William Arevalo Cadangan','','10092','Project Employee','Industrial','GRP Laminator','Jeddah','williamcadangan@yahoo.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('16','Michael Lagat Santiago','','10298','Project Employee','Industrial','GRP Laminator','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('17','Jun Rey Casama Dionglay','','10296','Project Employee','Industrial','GRP Laminator','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('18','Syed Akbar Batcha','','10154','Project Employee','Professional','Mech. Supervisor','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('19','Syed','Tasawar Hussain Shah','10339','Project Employee','Industrial','Mech. Supervisor','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('20','Haseeb','Khalid','10345','Project Employee','Industrial','Mech. Supervisor','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('21','Narayanan','Deivasigamani','10241','Project Employee','Professional','Project Manager','Jubail','dnarayan@nhc-ksa.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('22','Bansh','Raj Yadav','10372','Project Employee','Industrial','Welder-TIG','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('23','Prakasam Ramasamy Ethiraj','','10151','Project Employee','Industrial','Welder-TIG','Yanbu','prakaaash1984@gmail.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('24','Shamsudeen Kader Mydeen','','10152','Project Employee','Industrial','Welder-TIG','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('25','Sureshbabu Arumugam','','10179','Project Employee','Industrial','Welder-TIG','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('26','Reuban Franklin Gnanaprakasam','','10186','Project Employee','Industrial','Welder-TIG','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('27','Percibal Bacay Sumalde','','10203','Project Employee','Industrial','Welder-TIG','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('28','Emil Padua Ronatay','','10211','Project Employee','Industrial','Welder-TIG','Jeddah','nhong_06@yahoo.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('29','Sultan Abul Razaq Mohammed','','10261','Project Employee','Industrial','Welder-TIG','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('30','MOHAMMAD','FARID ALAM MAHTAB ALAM','iv1216','Project Employee','Industrial','Welder-TIG','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('31','NISHIKANT','PARIDA NARENDRA KUMAR PARIDA','iv1214','Project Employee','Industrial','Welder-TIG','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('32','Fakhruddin','Ansari Abdul Kudus Ansari','iv1215','Project Employee','Industrial','Welder-TIG','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('33','MOHAMMAD','ISTIYAK AHMAD MOHAMMED MUKHTAR','iv1213','Project Employee','Industrial','Welder-TIG','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('34','Sajeesh Kombath Rajan','','10323','Project Employee','Industrial','Welder-TIG','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('35','Pratab Kumar Singh','','10324','Project Employee','Industrial','Welder-TIG','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('36','Fazal Akbar','','10317','Project Employee','Industrial','Welder-TIG','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('37','BABALU','TIWARI KAUSHALAKISHOR TIWARI','iv1229','Project Employee','Industrial','Welder-TIG','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('38','SADDAM','HUSAIN IDDRISHALI','iv1228','Project Employee','Industrial','Welder-TIG','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('39','JALALUDDIN','ANSARI SATTAR AHMAD','iv1227','Project Employee','Industrial','Welder-TIG','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('40','NOOR','ALAM MOHAMMAD MAHBOOB','iv1226','Project Employee','Industrial','Welder-TIG','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('41','Ejaz','Hussain Kanjal Malik Ameer','new066','Project Employee','Industrial','Welder-TIG','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('42','Sohail','Mehmood Chudry Mazhar','new067','Project Employee','Industrial','Welder-TIG','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('43','Vineeth','Palliparambil Xavier','10408','Project Employee','Industrial','Welder-TIG','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('44','Muhammad','Ashfaq Noor Muhammad','10400','Project Employee','Industrial','Welder-TIG','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('45','Reji Philip','','10262','Project Employee','Professional','Technical Advisor','Abha','reji.philip@nhc-ksa.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('46','Sohel Arman','','10026','Project Employee','Industrial','Welder-TIG & SMAW','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('47','Mustak Khan','','10027','Project Employee','Industrial','Welder-TIG & SMAW','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('48','Mohammad Firoz Khan','','10155','Project Employee','Industrial','Welder-TIG & SMAW','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('49','Jamaluddin Saddar Din','','10271','Project Employee','Industrial','Welder-TIG & SMAW','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('50','PREM','MISHRA RAMCHANDRA MISHRA','iv1230','Project Employee','Industrial','Electric Foreman','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('51','Mohamed Nilufer Mohamed Shamsu','','10198','Project Employee','Industrial','Tea Boy','Jeddah - HO','','Support Services');
INSERT INTO `TABLE 12` VALUES ('52','Guillermo Dimaunahan Roque','','10049','Project Employee','Industrial','Driver','Rabigh Workshop','guilermoroque_25@yahoo.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('53','Saleh Ahmed Zahrani','','10071','Project Employee','Industrial','Driver','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('54','Saeed Ali Bin Saeed Alzahrani','Zahrani','10072','Project Employee','Industrial','Driver','Yanbu','saeed0592009@hotmail.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('55','Eduardo Jr Almendras Perez','','10290','Project Employee','Industrial','Driver','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('56','Abdullah Ali Zahrani','','10130','Project Employee','Professional','Driver','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('57','Mohammed Rafiq','','10167','Project Employee','Industrial','Driver','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('58','Mohammed Shafeeq Khan','','10169','Project Employee','Industrial','Driver','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('59','Khalid Khan Zaman Khan','','10170','Project Employee','Industrial','Driver','Jeddah - HO','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('60','Sajid Khan Muhammed Ismail','','10190','Project Employee','Industrial','Driver','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('61','Noor Muhammad Sardar Khan','','10191','Project Employee','Industrial','Driver','Riyadh','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('62','Geevarghse Thomman Jose','','10278','Project Employee','Industrial','Driver','Abha','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('63','Mohammed Abdulkhaliq Al Asemi','','10287','Project Employee','Industrial','Driver','Abha','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('64','Karamat Khan','','10327','Project Employee','Industrial','Driver','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('65','Baburam','Sintan','10363','Project Employee','Industrial','Driver','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('66','Man Kumar','Sintan','10356','Project Employee','Industrial','Driver','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('67','Hameedullah','Khan','10333','Project Employee','Industrial','Driver','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('68','Mohammed','Nazakat','10331','Project Employee','Industrial','Driver','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('69','Ahsan Ahamd Abdul Rauf','','10176','Project Employee','Industrial','Electricion','Jeddah','ehsanahmed43@gmail.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('70','Mohamed Azharudeen','','10187','Project Employee','Industrial','Electricion','Abha','dubaiazhar@gmail.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('71','Khaled Khalil Althugafi','','10249','Project Employee','Industrial','Electricion','Jeddah','loodi_00@hotmail.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('72','Ahmed Bilal Hafiz Tahir Naeem','','10304','Project Employee','Industrial','Electricion','Jeddah','ahmad_bilal_minhas@yahoo.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('73','Faiz Ullah','Khan Sher','10401','Project Employee','Industrial','Electricion','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('74','Reynold Bejasa Romasanta','','10065','Project Employee','Industrial','Pipe Fitter','Jubail','mhavshr28@yahoo.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('75','Rowel Dela Cruz Cabasal','','10074','Project Employee','Industrial','Pipe Fitter','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('76','Wilson Gadores Sulit','Sulit','10294','Project Employee','Industrial','Pipe Fitter','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('77','Jess Nicolas Hernandez Hernand','','10293','Project Employee','Industrial','Pipe Fitter','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('78','Danilo Hernandez Villaruel','','10297','Project Employee','Industrial','Pipe Fitter','Yanbu','danilovillaruel@yahoo.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('79','Ernie Como Macalintal','','10124','Project Employee','Industrial','Pipe Fitter','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('80','Santiago JR Mejico Resco','','10295','Project Employee','Industrial','Pipe Fitter','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('81','Edgar Talavera Borillo','','10291','Project Employee','Industrial','Pipe Fitter','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('82','Dominador Acdal Nicanor','','10163','Project Employee','Industrial','Pipe Fitter','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('83','Pepito Alcantara Leal','','10164','Project Employee','Industrial','Pipe Fitter','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('84','Edward Santos JR','','10172','Project Employee','Industrial','Pipe Fitter','Jeddah','wards_21@yahoo.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('85','Alvin Villamor','Lintan','10174','Project Employee','Industrial','Pipe Fitter','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('86','Shah Azam Seraz Khan','','10194','Project Employee','Industrial','Pipe Fitter','Abha','azam17575@gmail.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('87','Frederick Espirito Leyco','','10204','Project Employee','Industrial','Pipe Fitter','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('88','Jordan Santiago Espera','','10205','Project Employee','Industrial','Pipe Fitter','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('89','Lamberto JR Villo Aguirre','','10207','Project Employee','Industrial','Pipe Fitter','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('90','Dennis Panopio Rodriguez','','10208','Project Employee','Industrial','Pipe Fitter','Riyadh','dennis_rodriguez20@yahoo.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('91','Raynante Banta Manalo','','10209','Project Employee','Industrial','Pipe Fitter','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('92','Rouel Carandang Marasigan','','10210','Project Employee','Industrial','Pipe Fitter','Jeddah','marasigan_rouel@yahoo.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('93','Fritz Patrick Aguirre Dela Ros','','10222','Project Employee','Industrial','Pipe Fitter','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('94','Florante JR Salazar Alcantara','','10224','Project Employee','Industrial','Pipe Fitter','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('95','Ronald Falculan Culot','','10225','Project Employee','Industrial','Pipe Fitter','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('96','Roland Aguirre Valdez','Valdez','10228','Project Employee','Industrial','Pipe Fitter','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('97','Armando De Torres Dimayuga','','10230','Project Employee','Industrial','Pipe Fitter','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('98','Jason Villo Aguirre','','10232','Project Employee','Industrial','Pipe Fitter','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('99','Andrew Cabaguio Manalo','','10233','Project Employee','Industrial','Pipe Fitter','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('100','Nelson Garcia Demaculangan','','10238','Project Employee','Industrial','Pipe Fitter','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('101','Noel Garcia Valdez','','10239','Project Employee','Industrial','Pipe Fitter','Yanbu','valdeznoelg19@yahoo.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('102','Henry Rosales Dimaculangan','','10240','Project Employee','Industrial','Pipe Fitter','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('103','Dionisio Cadevida De Torres','','10257','Project Employee','Industrial','Pipe Fitter','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('104','ZULFQUAR','KHAN ALI IMAM KHAN','iv1219','Project Employee','Industrial','Pipe Fitter','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('105','EQBAL','AHMAD SERAJUDDIN AHMAD','iv1233','Project Employee','Industrial','Pipe Fitter','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('106','MANTAJ','ALI ISLAM MIYAN','iv1211','Project Employee','Industrial','Pipe Fitter','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('107','NAUSHAD','AHAMAD NIJAMUDDIN','iv1231','Project Employee','Industrial','Pipe Fitter','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('108','MOHAMMAD','ANWAR MOHAMMAD ISRAIL','iv1224','Project Employee','Industrial','Pipe Fitter','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('109','DHARMENDRA','KUMAR SINGH','iv1223','Project Employee','Industrial','Pipe Fitter','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('110','NURBASAR','ANSARI SAHABUDDIN ANSARI','iv1222','Project Employee','Industrial','Pipe Fitter','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('111','SAHID','ANSARI MANJOOR ANSARI','iv1221','Project Employee','Industrial','Pipe Fitter','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('112','SHIVPUJAN','SINGH SURESH SINGH','iv1235','Project Employee','Industrial','Pipe Fitter','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('113','UPENDRA','SINGH RAMSEWAK SINGH','iv1234','Project Employee','Industrial','Pipe Fitter','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('114','VINAY','KUMAR SINGH','iv1220','Project Employee','Industrial','Pipe Fitter','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('115','NOOR','ALAM MOINUDDIN SHAIKH MOINUDDI','iv1232','Project Employee','Industrial','Pipe Fitter','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('116','Muhammad','Naveed Naimat Ali','new065','Project Employee','Industrial','Pipe Fitter','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('117','Siddkali Ali','','10019','Project Employee','Industrial','Harris','Rabigh Workshop','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('118','MANJUR','ANSARY ASGAR ANSARY','iv1236','Project Employee','Industrial','Pipe Fabricator','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('119','Mirza','Aftab Hussain','10349','Project Employee','Industrial','Pipe Fabricator','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('120','Khalid','Mehmood Arain','10343','Project Employee','Industrial','Pipe Fabricator','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('121','Muhammed','Jameel','10348','Project Employee','Industrial','Pipe Fabricator','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('122','Ghulam','Mustafa','10337','Project Employee','Industrial','Pipe Fabricator','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('123','Muhammed','Shahzad','10347','Project Employee','Industrial','Pipe Fabricator','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('124','Muhammed','Sajid Javed','10342','Project Employee','Industrial','Pipe Fabricator','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('125','Mohammed','Umer Shah','10338','Project Employee','Industrial','Pipe Fabricator','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('126','Abdul Qayoom','Muhammad Siddique','10346','Project Employee','Industrial','Pipe Fabricator','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('127','Muhammed','Shahbaz','10341','Project Employee','Industrial','Pipe Fabricator','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('128','Ijaz','Ahmed Muhammad Latif','10344','Project Employee','Industrial','Pipe Fabricator','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('129','Mohammad Safdar Ekram','','10033','Project Employee','Industrial','Instrumentation Technician','Yanbu','ezazahmed@yahoo.co.in','Operations Department');
INSERT INTO `TABLE 12` VALUES ('130','Gokul','Palani Selvi','10409','Project Employee','Industrial','Piping Engineer','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('131','Yada','Giri Kona','10377','Project Employee','Professional','Piping Engineer','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('132','Reynaldo Lansangan','','10080','Project Employee','Industrial','Site Engineer','Jubail','reynaldo@nhc-ksa.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('133','Ram Kumar Tamang','','10161','Project Employee','Industrial','Diesel Mechanic','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('134','Samsudeen Syed Kadar','','10090','Project Employee','Industrial','Painting Foreman','Yanbu','syedkhader41@yahoo.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('135','Ahmed Basha Akbar','','10116','Project Employee','Industrial','Painting Foreman','Yanbu','akbarbasha58@yahoo.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('136','Pereya Samy Thangavel','','10252','Project Employee','Industrial','Painting Foreman','Abha','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('137','Mohammad','Ahmed Mohammad Jane Alam','new063','Project Employee','Industrial','Painting Foreman','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('138','Gerardo Caraos Ramirez','','10091','Project Employee','Industrial','Blaster / Painter','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('139','Prem Bahadur Khatri','','10127','Project Employee','Industrial','Blaster / Painter','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('140','Devilal Bishwakarma Nara','','10300','Project Employee','Industrial','Blaster / Painter','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('141','Babu Ram Bishwokarma','','10131','Project Employee','Industrial','Blaster / Painter','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('142','Abdull Asathi Patcha','','10193','Project Employee','Industrial','Blaster / Painter','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('143','Rene Boy Mallari Sison','','10221','Project Employee','Industrial','Blaster / Painter','Abha','reneboysison@yahoo.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('144','Leo Berdoro Balbaqurea','','10244','Project Employee','Industrial','Blaster / Painter','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('145','Ram Hirday','Mukhiya','10361','Project Employee','Industrial','Blaster / Painter','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('146','Khadka Narayan','Newar','10359','Project Employee','Industrial','Blaster / Painter','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('147','Abubakkar','Kalander Basha','10371','Project Employee','Industrial','Blaster / Painter','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('148','Talib','Hussain','10389','Project Employee','Professional','Blaster / Painter','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('149','Saleem Abbas','','10162','Project Employee','Industrial','Rigger','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('150','Ronjel Velano Aldovino','','10237','Project Employee','Industrial','Rigger','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('151','Joel Solares Casabuena','','10258','Project Employee','Industrial','Rigger','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('152','MOHAMMAD','SHAHABUDDIN ANSARI','iv1242','Project Employee','Industrial','Rigger','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('153','MOHAMMAD','SHAMSHUDDIN MOHAMMAD AZAD','iv1237','Project Employee','Industrial','Rigger','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('154','RUDRA','PRATAP SINGH','iv1238','Project Employee','Industrial','Rigger','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('155','GHULAM','JILANI KHAN','iv1239','Project Employee','Industrial','Rigger','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('156','MISTER','ALI KHAN','iv1240','Project Employee','Industrial','Rigger','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('157','MOHAMMAD','ZIYAUL HAQUE KHAN','iv1241','Project Employee','Industrial','Rigger','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('158','Omar Daraz','','10326','Project Employee','Industrial','Rigger','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('159','SANJAY','KUMAR PANNALAL GUPTA','iv1225','Project Employee','Industrial','Rigger','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('160','MAHMUD','ANSARI SAIYEK','iv1218','Project Employee','Industrial','Rigger','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('161','Victorino Lat Anis','','10108','Project Employee','Industrial','General Worker','Abha','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('162','Rajendra Sarki Bipin','','10133','Project Employee','Industrial','General Worker','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('163','Nagaraj Ponnuchamy','','10188','Project Employee','Industrial','General Worker','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('164','Pavalaraja Pavalappu Antonypil','','10212','Project Employee','Industrial','General Worker','Riyadh','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('165','System','','system','Project Employee','Professional','General Worker','Jeddah - HO','','Human Resources Department');
INSERT INTO `TABLE 12` VALUES ('166','Srikanth Bora','','10260','Project Employee','Professional','Planning Engineer','Jeddah','bora@nhc-ksa.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('167','Kul Bahadur Adhikari','','10128','Project Employee','Industrial','Cleaning Labor','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('168','Gajendra Bahadur Tharu','','10132','Project Employee','Industrial','Cleaning Labor','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('169','Dor Nidhi Khanal','','10138','Project Employee','Industrial','Cleaning Labor','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('170','Sarke Khatri Radhika','','10140','Project Employee','Industrial','Cleaning Labor','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('171','Bishnu Bahadur Thapa Kshetri','','10141','Project Employee','Industrial','Cleaning Labor','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('172','Hem Bahadur Rokha','','10143','Project Employee','Industrial','Cleaning Labor','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('173','Man Bahadur Magar','','10148','Project Employee','Industrial','Cleaning Labor','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('174','Sahul Hameed Mohamed Asees','','10200','Project Employee','Industrial','Cleaning Labor','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('175','Parnanthan Princemaks Rayappu','','10202','Project Employee','Industrial','Cleaning Labor','Riyadh','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('176','Mousa Cesar Banzuela Borillo','','10066','Project Employee','Industrial','Supervisor','Jeddah','mcborillo@nhc-ksa.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('177','Sadasivan Nair Perumbilathu','Gopala Krishnan','10145','Project Employee','Professional','Supervisor','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('178','Nisar Ahmed Aziz','Aziz Mohammed','10006','Project Employee','Industrial','Supervisor','Yanbu','naziz@nhc-ksa.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('179','Gul','Arzan Akram','10380','Project Employee','Industrial','Supervisor','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('180','Aftab','Ahmed','10379','Project Employee','Industrial','Supervisor','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('181','Ajaz','Ahmed','10328','Project Employee','Industrial','Supervisor','Riyadh','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('182','Pervaiz','Iqbal Raja Mohammad Akram','10316','Project Employee','Professional','Supervisor','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('183','Marithurai Subbiah','','10265','Project Employee','Industrial','QA/QC Inspector','Jubail','s.marithurai@yahoo.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('184','Tamilarasan','Gajendran','10369','Project Employee','Management','QA/QC Inspector','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('185','Sreekathiravan','pethaperumal R. Kannan','10370','Project Employee','Professional','QA/QC Inspector','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('186','Prakash','Narayanasamy Vedhachalam','10368','Project Employee','Professional','QA/QC Inspector','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('187','Ariel Navarro Mortilla','','10156','Project Employee','Industrial','GRP Laminator','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('188','Rande Cobilla Marco','','10157','Project Employee','Industrial','GRP Laminator','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('189','Neeraj Kumar Bulan','','10144','Project Employee','Industrial','Scaffolder','Abha','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('190','Mohammed Akram Fazal Subhan','','10166','Project Employee','Industrial','Scaffolder','Jeddah','akram@nhc-ksa.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('191','Bigyan','Paudel','10360','Project Employee','Industrial','Scaffolder','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('192','Gyan','Rajbanshi','10355','Project Employee','Industrial','Scaffolder','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('193','Karan','Sunar','10362','Project Employee','Industrial','Scaffolder','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('194','Hazir','Khan','10336','Project Employee','Industrial','Scaffolder','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('195','Muhammad','Arfan Muhammad Siddique','10404','Project Employee','Professional','Scaffolder','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('196','Kausal Kumar Pathak','','10036','Project Employee','Industrial','Fabricator','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('197','Ronald Medrano Moncawe','Moncawe','10119','Project Employee','Industrial','Fabricator','Yanbu','ronaldmoncawe@yahoo.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('198','Salahuddin Khanbhro Mohammed','','10180','Project Employee','Industrial','Fabricator','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('199','Muhammad Ajmal Fazal Ellahi','','10183','Project Employee','Industrial','Fabricator','Abha','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('200','Eleazarde Labutap Agarao','','10231','Project Employee','Industrial','Fabricator','Jubail','sangwen24@yahoo.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('201','MAHESH','SHARMA SHIVNATH SHARMA','iv1212','Project Employee','Industrial','Fabricator','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('202','MOHAMMAD','NEYAZUDDIN MAQUESUD ALAM','iv1217','Project Employee','Industrial','Fabricator','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('203','Mohammed','Obaidullah','10376','Project Employee','Industrial','Fabricator','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('204','Masoom','Akhtar Abdul Rahim','10375','Project Employee','Industrial','Fabricator','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('205','Faiyaz','Ahmad Ansari','10374','Project Employee','Industrial','Fabricator','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('206','Eqbal','Ahmad Ansari','10373','Project Employee','Industrial','Fabricator','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('207','Ponniah Arujunan','','10023','Project Employee','Industrial','Time Keeper','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('208','Suliman Jumaan Salim Al Ghamdi','','10182','Project Employee','Industrial','Time Keeper','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('209','Nisar Ahmed','','10171','Project Employee','Professional','Project Engineer','Yanbu','nahmed@nhc-ksa.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('210','Rene','Domdoma Heba','new061','Project Employee','Professional','Project Engineer','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('211','Sriram','Ramamurthy Jayachithra','10410','Project Employee','Industrial','Project Engineer','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('212','Samadullah','Shareef','10382','Project Employee','Professional','Project Supervisor','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('213','Fahad Abdul Kareem Mohammed','','10248','Project Employee','Industrial','Maint. Technician','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('214','Jayakrishnan Ramachandran Pill','','10089','Project Employee','Professional','Mechanical Engineer','Riyadh','jkrishnan@nhc-ksa.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('215','Waqas Ahmad Ashfaq Ahmad','','10277','Project Employee','Industrial','Mechanical Engineer','Yanbu','waqas@nhc-ksa.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('216','Ajayakumar Anandan','','10272','Project Employee','Professional','Electrical Supervisor','Jeddah','ajay@nhc-ksa.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('217','Harris Rahim','','10322','Project Employee','Administrative','Coordinator','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('218','Atta Ullah','Khan Hashim Khan','10402','Project Employee','Industrial','MULTI WELDER','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('219','Parvez','Ahmad Maqsood Ahmad','10399','Project Employee','Industrial','MULTI WELDER','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('220','Habib Ullah','Muhammad Ali','10398','Project Employee','Industrial','MULTI WELDER','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('221','Naeem','Yousaf Muhammad Yousaf','10397','Project Employee','Industrial','MULTI WELDER','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('222','Shahid','Nadeem Muhammad Khalid','10403','Project Employee','Industrial','MULTI WELDER','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('223','Abdul Hafeez','Abdul Aziz','10351','Project Employee','Industrial','LEADMAN FAB.','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('224','Masood','Abid','10340','Project Employee','Industrial','LEADMAN FAB.','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('225','Mohammad Afzal Langah','','10286','Project Employee','Administrative','Operation Coordinator','Jubail','','Support Services');
INSERT INTO `TABLE 12` VALUES ('226','Shams Ali Muhtahsan','','10314','Project Employee','Industrial','Piping Supervisor','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('227','Bien Sebuc Gonzales','','10226','Project Employee','Professional','Safety Officer/Permit Receiver','Jeddah','biengonzales@yahoo.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('228','Ronald Jeffrey Gundan Rivera','','10227','Project Employee','Professional','Safety Officer/Permit Receiver','Yanbu','rigrivera@yahoo.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('229','Binoj Jose Thundathil','','10243','Project Employee','Professional','Safety Officer/Permit Receiver','Yanbu','binoj916@yahoo.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('230','Robertson Abu Magnaye','','10268','Project Employee','Professional','Piping Engineer/Permit Receiver','Jubail','robertson@nhc-ksa.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('231','Eugene Tayson Villarias','','10270','Project Employee','Professional','Piping Engineer/Permit Receiver','Yanbu','eugene@nhc-ksa.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('232','Restituto Lacampuenga','','10008','Project Employee','Industrial','Fabricator/Permit Receiver','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('233','Mohammed Asif','','10184','Project Employee','Industrial','Fabricator/Permit Receiver','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('234','Nelford Abante Exconde','','10236','Project Employee','Industrial','Fabricator/Permit Receiver','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('235','Rosendo Macatangay Brioness','Abdullah','10007','Project Employee','Industrial','Electric Foreman/Permit Receiver','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('236','Dinesh Yadav Anita','','10139','Project Employee','Industrial','Blaster / Helper','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('237','I.J. Chiresthoper','','10214','Project Employee','Industrial','Blaster / Helper','Riyadh','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('238','P.T. Yavaneswaran','','10215','Project Employee','Industrial','Blaster / Helper','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('239','Mahilkkarasan Mariaseelan Asir','','10216','Project Employee','Industrial','Blaster / Helper','Riyadh','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('240','Gerald Ramos Calvo','','10229','Project Employee','Industrial','Welder/Permit Receiver','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('241','Michael Tampic Flora','','10173','Project Employee','Industrial','Pipe Fitter/Permit Receiver','Jeddah','cyrhared@yahoo.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('242','Eudes Payod Tubil','','10206','Project Employee','Industrial','Pipe Fitter/Permit Receiver','Riyadh','eudes.tubil@yahoo.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('243','Mark Francis Dimatatac Panopio','','10223','Project Employee','Industrial','Pipe Fitter/Permit Receiver','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('244','Mohammed Ilyas','','10303','Project Employee','Industrial','Auto Electrician','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('245','Mazhar','Khan','10378','Project Employee','Industrial','Heavy Driver','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('246','Sherrehman Saifurahman','','10312','Project Employee','Industrial','Heavy Driver','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('247','Rama Samy Thangavel','','10325','Project Employee','Industrial','Heavy Driver','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('248','Sajan','Khadgi','10358','Project Employee','Industrial','Heavy Driver','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('249','Raja','Amanath Khan','10381','Project Employee','Industrial','Heavy Driver','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('250','Mohammed','Akmal Mohammed Aslam','new072','Project Employee','Industrial','Heavy Driver','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('251','Mohammed','Aslam Khan','new073','Project Employee','Industrial','Heavy Driver','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('252','Fazal','Mohamed Mohamed Kalideen','10405','Project Employee','Industrial','Mechanic','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('253','Muhammad','Akmal Muhammad Ibrahim','10313','Project Employee','Industrial','Mechanic','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('254','Dilip','Kumar','10357','Project Employee','Industrial','Scaffolder/Driver','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('255','Hukum','Bahadur Bista Kshetri','10386','Project Employee','Industrial','Labor','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('256','Mod','Nath','10354','Project Employee','Industrial','Labor','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('257','Mohammed','Kaleel','10330','Project Employee','Industrial','Labor','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('258','Ganesan','Sandhanam','10385','Project Employee','Industrial','Helper','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('259','Murad Ali','Gul Muhammad','10395','Project Employee','Industrial','Light Driver','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('260','Ajmal','Khan Agmal','10396','Project Employee','Industrial','Light Driver','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('261','Hassan','Ali Yormas Khan','10393','Project Employee','Industrial','Civil/Foreman','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('262','Jonard','Montano Lapan','10384','Project Employee','Professional','Planner / Quantity Surveyor','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('263','Mohammed','Yusuf','10335','Project Employee','Industrial','Scaffolding Supervisor','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('264','Jonathan Gallardo ATA','','10053','Project Employee','Industrial','Mechanical Foreman/ PR','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('265','Mohammed Akbar Khan','','10165','Project Employee','Professional','Mechanical Foreman/ PR','Yanbu','khaan222@yahoo.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('266','Mohammed Aamer Ahmed','','10263','Project Employee','Professional','Mechanical Engineer/PR','Jeddah','mdaamer@nhc-ksa.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('267','Fhelum Crisostomo Bamba','','10259','Project Employee','Industrial','Forklift Operator/PR','Riyadh','ehl08@yahoo.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('268','Sami Ullah Khan Hayat Ullah Kh','','10273','Project Employee','Professional','Gen. Worker/Supervisor/PR','Abha','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('269','Khizar Hayat Muhammad Riaz','','10234','Project Employee','Industrial','Supervisor/Permit Receiver','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('270','Mohammed','Sabir Mohammed Abbas','10178','Project Employee','Industrial','Cleaning Labor/Welder','Abha','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('271','Jawad','Hussain Awan Mushtaq','new064','Project Employee','Industrial','HSE Supervisor','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('272','Gerlito Evangelista Ilagan','','10059','Project Employee','Industrial','Pipe Fitter/Safety Officer','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('273','Mohammed','Riyas Khan Meer','10319','Project Employee','Professional','Crane Operator','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('274','Salawat','Hussain','10390','Project Employee','Industrial','Grinder Man','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('275','Noushad Poduvachola Kalathil','','10076','Regular Employee','Professional','Accountant','Jeddah - HO','noushad@nhc-ksa.com','Finance / Accounts');
INSERT INTO `TABLE 12` VALUES ('276','Sihabudeen Pulluparamban','','10247','Regular Employee','Professional','Accountant','Jubail','sihab@nhc-ksa.com','Finance / Accounts');
INSERT INTO `TABLE 12` VALUES ('277','Rabiah','Rashidahmed','10366','Regular Employee','Professional','Accountant','Jeddah - HO','ac-assit@nhc-ksa.com','Support Services');
INSERT INTO `TABLE 12` VALUES ('278','Sagabudeen','Nijamudeen Sagabudeen Late','10406','Regular Employee','Professional','Accountant','Jeddah - HO','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('279','Mujeeb Rahman Parakatt','','10004','Regular Employee','Administrative','Purchaser','Jeddah - HO','mujeeb@nhc-ksa.com','Support Services');
INSERT INTO `TABLE 12` VALUES ('280','Abdul Kadher','Jailani','10255','Regular Employee','Professional','Computer Programmer','Jeddah - HO','akjailani@nhc-ksa.com','IT');
INSERT INTO `TABLE 12` VALUES ('281','Moideen Karuvadi','','10289','Regular Employee','Administrative','Tea Boy','Jeddah - HO','','Support Services');
INSERT INTO `TABLE 12` VALUES ('282','Ubai','Thullah Usain','10329','Regular Employee','Administrative','Driver','Jeddah - HO','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('283','Palani Chinnasamy','','10267','Regular Employee','Industrial','Driver','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('284','Fahad Mohammed','Junaih','new003','Regular Employee','Industrial','Driver','Riyadh','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('285','Abdullah','Mohammed Suwailem Alanazi','new070','Regular Employee','Administrative','Driver','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('286','Bryan Panopio Rodrigues','','10246','Regular Employee','Industrial','Pipe Fitter','Jubail','bryanrodriguez30@yahoo.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('287','Bonnie Flores Castriciones','','10181','Regular Employee','Professional','Administrator','Jeddah - HO','bonnie@nhc-ksa.com','Support Services');
INSERT INTO `TABLE 12` VALUES ('288','System','Administrator','admin','Regular Employee','Management','Administrator','Jeddah','akjailani@nhc-ksa.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('289','Khwaja Talha Bin Hassan','','10254','Regular Employee','Professional','Administrator','Jeddah - HO','talha@nhc-ksa.com','Support Services');
INSERT INTO `TABLE 12` VALUES ('290','Akhil Hassan','','10306','Regular Employee','Administrative','Administrator','Jeddah - HO','hassan@nhc-ksa.com','Human Resources Department');
INSERT INTO `TABLE 12` VALUES ('291','Fadil Atiah Al Zahrani','','10137','Regular Employee','Administrative','Mandoob','Jeddah - HO','fadil@nhc-ksa.com','Support Services');
INSERT INTO `TABLE 12` VALUES ('292','Aydh','Jabir S. Abo Hammamah','10388','Regular Employee','Professional','Mandoob','Abha','','Support Services');
INSERT INTO `TABLE 12` VALUES ('293','Ahmed','Omar Abed Alkubaydi','new016','Regular Employee','Professional','Mandoob','Yanbu','','Support Services');
INSERT INTO `TABLE 12` VALUES ('294','Rami Atallah','Alharbi','10367','Regular Employee','Professional','Mandoob','Jeddah - HO','','Support Services');
INSERT INTO `TABLE 12` VALUES ('295','Abdullah','Saeed A.AlZahrani','10321','Regular Employee','Administrative','Mandoob','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('296','Faris','Saleh Abdullah','10334','Regular Employee','Administrative','Mandoob','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('297','Adil','Shudayyid Salem Aljohani','new071','Regular Employee','Administrative','Mandoob','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('298','Abdul Nazar N','','10266','Regular Employee','Industrial','QA/QC Inspector','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('299','Sattam Mabruk Fati Althalabi','','10220','Regular Employee','Administrative','Expeditor','Jeddah - HO','','Support Services');
INSERT INTO `TABLE 12` VALUES ('300','Wael Ahmed Al Zahrani','','10274','Regular Employee','Administrative','Expeditor','Jeddah - HO','','Support Services');
INSERT INTO `TABLE 12` VALUES ('301','Nasir Mansour Alsayed','','10280','Regular Employee','Administrative','Expeditor','Jeddah','','Support Services');
INSERT INTO `TABLE 12` VALUES ('302','Ziyad Faraj Bin Saleh Al Johan','','10284','Regular Employee','Administrative','Expeditor','Yanbu','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('303','Jamal Mohammed','Alzahrani','10305','Regular Employee','Administrative','Expeditor','Jeddah','','Support Services');
INSERT INTO `TABLE 12` VALUES ('304','Abdulqadar Mohammed Al Amoudi','','10242','Regular Employee','Professional','Electrical Engineer','Jeddah','aqader@nhc-ksa.com','Support Services');
INSERT INTO `TABLE 12` VALUES ('305','Ibrahim Hassan Almasodi','','10250','Regular Employee','Administrative','Receptionist','Jeddah - HO','','Support Services');
INSERT INTO `TABLE 12` VALUES ('306','Saleh Abdullah Saleh Alomari','','10283','Regular Employee','Professional','Receptionist','Jeddah - HO','','Support Services');
INSERT INTO `TABLE 12` VALUES ('307','Asoka Singhe P Gamage','','10256','Regular Employee','Professional','Maintanance Engineer','Jeddah','asoka@nhc-ksa.com','Support Services');
INSERT INTO `TABLE 12` VALUES ('308','Abdul Rahman','Mohammed Tawfeeq','new074','Regular Employee','Administrative','Admin. Assistant','Jeddah - HO','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('309','Muhammed Muhsin','','10282','Regular Employee','Professional','Admin. Assistant','Jeddah - HO','muhsin@nhc-ksa.com','Human Resources Department');
INSERT INTO `TABLE 12` VALUES ('310','Wadeed Youssef Qadore','','10364','Regular Employee','Administrative','Admin. Assistant','Jeddah - HO','','Support Services');
INSERT INTO `TABLE 12` VALUES ('311','Meshal Al Ghamdi','','10311','Regular Employee','Administrative','Admin. Assistant','Jeddah - HO','','Support Services');
INSERT INTO `TABLE 12` VALUES ('312','Amin Asaad','Alhaj','10301','Regular Employee','Professional','Support Service Coordinator','Jeddah','Ameen@nhc-ksa.com','Support Services');
INSERT INTO `TABLE 12` VALUES ('313','Mohammed Yousuf Althaqafi','','10276','Regular Employee','Professional','Mechanical Technician','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('314','Arvie Villanueva Rivera','','10269','Regular Employee','Professional','Piping Engineer/Permit Receiver','Jubail','arvie@nhc-ksa.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('315','Mohamed Shahid','','10195','Regular Employee','Professional','ID Co-ordinator','Yanbu','shahid@nhc-ksa.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('316','Athira Kayiparambil','Raveendranath','10365','Regular Employee','Professional','Secretary','Jeddah - HO','','Support Services');
INSERT INTO `TABLE 12` VALUES ('317','Abdulmalk Khalid Obaid','','10309','Regular Employee','Administrative','Expeditor/Driver','Riyadh','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('318','Abdulnasser','Rubayyi A. Albuhaysi','10307','Regular Employee','Professional','Insurance coordinator','Jeddah - HO','','Support Services');
INSERT INTO `TABLE 12` VALUES ('319','Mohammed','Nizar Ali Akber','10332','Regular Employee','Administrative','Camp Boss','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('320','Jaykumar Vijayakumaran','','10264','Regular Employee','Professional','Site Engineer/PR','Jubail','jaykumar@nhc-ksa.com','Operations Department');
INSERT INTO `TABLE 12` VALUES ('321','Muhammad Mukhtar','Chuadhry Jan Muhammad','v1188','Visitor work visa','Industrial','Pipe Fitter','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('322','Muhammad Khalid Saleem','Muhammad Aslam','v1189','Visitor work visa','Industrial','Pipe Fitter','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('323','Tariq Waheed','Muhammad Alam','v1190','Visitor work visa','Industrial','Pipe Fitter','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('324','Sohail Anjum','Abdul Hakeem Khan','v1191','Visitor work visa','Industrial','Pipe Fitter','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('325','Mushtaq Ahmad','Abdul Rehman','v1194','Visitor work visa','Industrial','Pipe Fitter','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('326','Mehdi Hassan','Jaan Muhammad Urf Bhoola','v1204','Visitor work visa','Industrial','Pipe Fitter','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('327','Malik Muhammad Safdar','Haji Ghulam Rasool','v1205','Visitor work visa','Industrial','Pipe Fitter','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('328','Muhammad Sibtain','Abdul Majeed','v1206','Visitor work visa','Industrial','Pipe Fitter','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('329','Sharafat Ali','Zahoor Ali','v1207','Visitor work visa','Industrial','Pipe Fitter','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('330','Adeel Javed','Mir Javed Iqbal','v1208','Visitor work visa','Industrial','Pipe Fitter','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('331','Yasair Ali','Ali Bahadar','v1210','Visitor work visa','Industrial','Pipe Fitter','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('332','Javed Iqbal','HaJi Muhammad','10353','Visitor work visa','Industrial','Pipe Fitter','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('333','Ghazanfar Abbas','Allah Ditta','v1182','Visitor work visa','Industrial','Fabricator','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('334','Adil Jamil','Asmat Ullah Gill','v1180','Visitor work visa','Industrial','Fabricator','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('335','Muhammad Saqib Nazar Khan','Muhammad Taj Khan','v1181','Visitor work visa','Industrial','Helper','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('336','Javed Iqbal','Ashiq Hussain','v1183','Visitor work visa','Industrial','Helper','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('337','Tariq Farooq','Muhammad Dawood','v1184','Visitor work visa','Industrial','Helper','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('338','Muhammad Ijaz Khan Niazi','Att Muhammad Khan Niazi','v1185','Visitor work visa','Industrial','Helper','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('339','Kashif Nadeen','Muhammad Hanif','v1186','Visitor work visa','Industrial','Helper','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('340','Shahid Jafar','Jafar Hussain','v1187','Visitor work visa','Industrial','Helper','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('341','Hafiz Bilal Yousaf','Muhammad Yousaf','v1192','Visitor work visa','Industrial','Helper','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('342','Hafiz Abdur Rehman Anwar','Muhammad Anwar','v1193','Visitor work visa','Industrial','Helper','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('343','Zahid Rehan Sajid','Allah Dewaya','v1195','Visitor work visa','Industrial','Helper','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('344','Noor Mustafa','Muhammad Farooq','v1196','Visitor work visa','Industrial','Helper','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('345','Muhammad Aleem','Muhammad Ibrahim','v1197','Visitor work visa','Industrial','Helper','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('346','Faiz Ahmed','Said','v1198','Visitor work visa','Industrial','Helper','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('347','Rashid Mehmood','Abdul Sattat Raza','v1199','Visitor work visa','Industrial','Helper','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('348','Muhammad Javed','Nazeer Ahmad','v1200','Visitor work visa','Industrial','Helper','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('349','Muhammad Javed','Muhammad Irshad','v1201','Visitor work visa','Industrial','Helper','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('350','Raja Muhammad Waseem','Najeeb Ali','v1202','Visitor work visa','Industrial','Helper','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('351','Bilal Ahmed','Nisar Ahmed','v1203','Visitor work visa','Industrial','Helper','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('352','Abdul Rashhed','Hakim Ali','v1209','Visitor work visa','Industrial','Helper','Jeddah','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('353','Rana Sajid Ali','Rana Tufail Muhammad','10350','Visitor work visa','Industrial','Supervisor Mechanical','Jubail','','Operations Department');
INSERT INTO `TABLE 12` VALUES ('354','Hamid Ali','Rana Tufail Muhammad','10352','Visitor work visa','Industrial','Fabricator Pipe','Jubail','','Operations Department');
/*!40000 ALTER TABLE `TABLE 12` ENABLE KEYS */;
UNLOCK TABLES;

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
  `project` text NOT NULL,
  `purchase_price` text NOT NULL,
  `current_value` text NOT NULL,
  `total_maintenance` text NOT NULL,
  `total_depreciation` text NOT NULL,
  `date_acquired` date DEFAULT NULL,
  `date_sold` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assets`
--

LOCK TABLES `assets` WRITE;
/*!40000 ALTER TABLE `assets` DISABLE KEYS */;
INSERT INTO `assets` VALUES (2,'liftsqaa','Main lift this wayaa','rPaa','','inactive','2014-11-26','2014-10-08','2014-10-09','2014-10-10','2014-10-11','2014-10-12','aaaaaaaa','vvvvaaaaaa','','fhf','zdfwe','veh num','testasas','','','','','0000-00-00','0000-00-00');
INSERT INTO `assets` VALUES (14,'Computer','IBMs','Main server room','','active','2014-11-10','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','','','','','','','','','','','','0000-00-00','0000-00-00');
INSERT INTO `assets` VALUES (15,'Moto e','sdf','pettai','','under_maintenance','2014-11-11','2014-11-12','2014-11-13','2014-11-14','2014-11-16','2014-11-16','','','','','','','','','','','','2014-11-17','2014-11-18');
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
INSERT INTO `assets` VALUES (49,'Black berry','thanseel','pocket','Mohammed Talha','active','2014-11-23','2014-11-24','2014-11-25','2014-11-26','2014-11-27','2014-11-28','nil','nil','Mazdas','Vehicle','Human resources','123123','23423','2323','234234','234','34','2014-11-29','2014-11-30');
INSERT INTO `assets` VALUES (50,'Goodday','','','','active','2014-11-21','2014-11-22','2014-11-23','2014-11-24','2014-11-25','2014-11-26','','','','','','','','','','','','2014-11-27','2014-11-28');
INSERT INTO `assets` VALUES (51,'sets','','','','','2014-11-18','2014-11-19','2014-11-20','2014-11-21','2014-11-22','2014-11-23','','','','','','','','','','','','0000-00-00','0000-00-00');
INSERT INTO `assets` VALUES (52,'jack','','','','','2014-11-12','2014-11-13','2014-11-14','2014-11-15','2014-11-16','2014-11-17','','','','','','','','','','','','0000-00-00','0000-00-00');
INSERT INTO `assets` VALUES (53,'sdfsdf','','','','','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','','','','','','','testasas','','','','','0000-00-00','0000-00-00');
INSERT INTO `assets` VALUES (54,'sdfsafdsadf','sdfsdf','','','','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','','','Mazdas','','','sdfs','testasas','','','','','0000-00-00','0000-00-00');
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
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
INSERT INTO `google_users` VALUES (100678434091494690900,'Mohammed Talha','talha@object90.com','monu','talha@object90.com',1,'https://plus.google.com/100678434091494690900','https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/A');
INSERT INTO `google_users` VALUES (106053436166547787694,'Mariappan C','','','mars@object90.com',11,'','https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/A');
INSERT INTO `google_users` VALUES (106219740134865583912,'ramesh balakrishnan','','','rameshkumar86@gmail.com',3,'https://plus.google.com/106219740134865583912','https://lh5.googleusercontent.com/-nCqLiYHWuJM/AAAAAAAAAAI/A');
INSERT INTO `google_users` VALUES (106803781885381507211,'Bala P','','','bala223344@gmail.com',1,'https://plus.google.com/106803781885381507211','https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/A');
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
  `expiry_type` varchar(100) NOT NULL,
  `expiry_date` date NOT NULL,
  `notified_on` date NOT NULL,
  `notify` enum('yes','no') NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
INSERT INTO `notifications` VALUES (1,14,'Computer','Istemara Expiry','2014-11-10','2014-11-08','yes');
INSERT INTO `notifications` VALUES (2,15,'Moto e','Istemara Expiry','2014-11-11','2014-11-08','yes');
INSERT INTO `notifications` VALUES (3,49,'Black berry','Istemara Expiry','2014-11-23','2014-11-08','yes');
INSERT INTO `notifications` VALUES (4,2,'liftsqaa','Istemara Expiry','2014-11-26','2014-11-08','yes');
INSERT INTO `notifications` VALUES (5,15,'Moto e','Insurance Expiry','2014-11-12','2014-11-08','yes');
INSERT INTO `notifications` VALUES (6,49,'Black berry','Insurance Expiry','2014-11-24','2014-11-08','yes');
INSERT INTO `notifications` VALUES (7,15,'Moto e','Preventive Maintenace Expiry','2014-11-13','2014-11-08','yes');
INSERT INTO `notifications` VALUES (8,49,'Black berry','Preventive Maintenace Expiry','2014-11-25','2014-11-08','yes');
INSERT INTO `notifications` VALUES (9,15,'Moto e','TUV Sticker Expiry','2014-11-14','2014-11-08','yes');
INSERT INTO `notifications` VALUES (10,49,'Black berry','TUV Sticker Expiry','2014-11-26','2014-11-08','yes');
INSERT INTO `notifications` VALUES (11,15,'Moto e','Client sticker Expiry','2014-11-16','2014-11-08','yes');
INSERT INTO `notifications` VALUES (12,49,'Black berry','Client sticker Expiry','2014-11-27','2014-11-08','yes');
INSERT INTO `notifications` VALUES (13,15,'Moto e','MOT License Expiry','2014-11-16','2014-11-08','yes');
INSERT INTO `notifications` VALUES (14,49,'Black berry','MOT License Expiry','2014-11-28','2014-11-08','yes');
INSERT INTO `notifications` VALUES (15,50,'Goodday','Istemara Expiry','2014-11-21','2014-11-08','yes');
INSERT INTO `notifications` VALUES (16,51,'sets','Istemara Expiry','2014-11-18','2014-11-08','yes');
INSERT INTO `notifications` VALUES (17,51,'sets','Insurance Expiry','2014-11-19','2014-11-08','yes');
INSERT INTO `notifications` VALUES (18,50,'Goodday','Insurance Expiry','2014-11-22','2014-11-08','yes');
INSERT INTO `notifications` VALUES (19,51,'sets','Preventive Maintenace Expiry','2014-11-20','2014-11-08','yes');
INSERT INTO `notifications` VALUES (20,50,'Goodday','Preventive Maintenace Expiry','2014-11-23','2014-11-08','yes');
INSERT INTO `notifications` VALUES (21,51,'sets','TUV Sticker Expiry','2014-11-21','2014-11-08','yes');
INSERT INTO `notifications` VALUES (22,50,'Goodday','TUV Sticker Expiry','2014-11-24','2014-11-08','yes');
INSERT INTO `notifications` VALUES (23,51,'sets','Client sticker Expiry','2014-11-22','2014-11-08','yes');
INSERT INTO `notifications` VALUES (24,50,'Goodday','Client sticker Expiry','2014-11-25','2014-11-08','yes');
INSERT INTO `notifications` VALUES (25,51,'sets','MOT License Expiry','2014-11-23','2014-11-08','yes');
INSERT INTO `notifications` VALUES (26,50,'Goodday','MOT License Expiry','2014-11-26','2014-11-08','yes');
INSERT INTO `notifications` VALUES (27,52,'jack','Istemara Expiry','2014-11-12','2014-11-08','yes');
INSERT INTO `notifications` VALUES (28,52,'jack','Insurance Expiry','2014-11-13','2014-11-08','yes');
INSERT INTO `notifications` VALUES (29,52,'jack','Preventive Maintenace Expiry','2014-11-14','2014-11-08','yes');
INSERT INTO `notifications` VALUES (30,52,'jack','Client sticker Expiry','2014-11-16','2014-11-08','yes');
INSERT INTO `notifications` VALUES (31,52,'jack','MOT License Expiry','2014-11-17','2014-11-08','yes');
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (2,'testasas','sfsfsfas','active');
INSERT INTO `projects` VALUES (3,'ssss','sssdasdfsdf','finished');
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
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
INSERT INTO `user_roles` VALUES (1,'Admin','a:6:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"3\";i:3;s:1:\"4\";i:4;s:1:\"5\";i:5;s:1:\"6\";}');
INSERT INTO `user_roles` VALUES (2,'Data Entry Operator','a:2:{i:0;s:1:\"1\";i:1;s:1:\"5\";}');
INSERT INTO `user_roles` VALUES (3,'Asset Co-ordinators','a:1:{i:0;s:1:\"1\";}');
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

-- Dump completed on 2014-11-13 22:07:55
