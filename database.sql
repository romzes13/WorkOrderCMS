-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: workorder
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(45) DEFAULT NULL,
  `address` varchar(70) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `website` varchar(45) DEFAULT NULL,
  `description` varchar(450) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='Company table contains information about retail store';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` VALUES (1,'Ferrandino','Albany','518963254','','fer@email.com','ferrandino.com','Maintanance company'),(2,'Pioneers Properties','New Jersey','831-869-7423','8884563217','pioneer@pioneeer.com','','Contractors'),(3,'Gap','New York','907-963-8521','','admin@gap.com','gap.com','Retail store'),(4,'Wallmart','Chicago','800-987-2591','888-723-4916','','walmart.com','Retail'),(5,'TD Bank','Benington, VT','800-742-4691','800-943-75182','ask@tdbank.com','tdbank.com','Bank ');
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contractor`
--

DROP TABLE IF EXISTS `contractor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contractor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `rate` varchar(45) DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contractor_users1_idx` (`users_id`),
  CONSTRAINT `fk_contractor_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contractor`
--

LOCK TABLES `contractor` WRITE;
/*!40000 ALTER TABLE `contractor` DISABLE KEYS */;
INSERT INTO `contractor` VALUES (1,'Roman','Lake George','518-366-8521','email@email','55',31),(2,'Alex','Albany','518-777-5482','alex@email.com','53',2),(3,'John Doe','Chicago','787-852-1593','john@handyman.com','75',8);
/*!40000 ALTER TABLE `contractor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dispatcher`
--

DROP TABLE IF EXISTS `dispatcher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dispatcher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_dispatcher_users1_idx` (`users_id`),
  CONSTRAINT `fk_dispatcher_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dispatcher`
--

LOCK TABLES `dispatcher` WRITE;
/*!40000 ALTER TABLE `dispatcher` DISABLE KEYS */;
INSERT INTO `dispatcher` VALUES (1,'Tom Benny','518-742-4268',NULL),(2,'Corbent Hall','548-953-7429',NULL),(3,'Alexa Larbe','631-852-7419',NULL);
/*!40000 ALTER TABLE `dispatcher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `company_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_location_company_idx` (`company_id`),
  CONSTRAINT `fk_location_company` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COMMENT='Retail store location';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location`
--

LOCK TABLES `location` WRITE;
/*!40000 ALTER TABLE `location` DISABLE KEYS */;
INSERT INTO `location` VALUES (1,'Gap','Test','55555','',3),(4,'Gap','Albany','518-365-9874','',3),(6,'Walmart','Albant','518-742-8532','',4),(7,'Walmart','Albany','518-742-4366','',4),(8,'Walmart','Troy','518-742-8533','',4);
/*!40000 ALTER TABLE `location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manager`
--

DROP TABLE IF EXISTS `manager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_manager_location1_idx` (`location_id`),
  KEY `fk_manager_users1_idx` (`users_id`),
  CONSTRAINT `fk_manager_location` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_manager_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 COMMENT='Retail store manager';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manager`
--

LOCK TABLES `manager` WRITE;
/*!40000 ALTER TABLE `manager` DISABLE KEYS */;
INSERT INTO `manager` VALUES (13,'Alex Mint',1,NULL),(18,'Jenna Miller',6,NULL),(19,'Roman Babushkin',7,NULL),(20,'John Doe',4,NULL),(21,'Tom Presto',8,NULL);
/*!40000 ALTER TABLE `manager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `received_wo`
--

DROP TABLE IF EXISTS `received_wo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `received_wo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dispatcher_id` int(11) DEFAULT NULL,
  `workorder_id` int(11) NOT NULL,
  `contractor_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_received_wo_dispatcher1_idx` (`dispatcher_id`),
  KEY `fk_received_wo_workorder1_idx` (`workorder_id`),
  KEY `fk_received_wo_contractor1_idx` (`contractor_id`),
  CONSTRAINT `fk_received_wo_contractor1` FOREIGN KEY (`contractor_id`) REFERENCES `contractor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_received_wo_dispatcher1` FOREIGN KEY (`dispatcher_id`) REFERENCES `dispatcher` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_received_wo_workorder1` FOREIGN KEY (`workorder_id`) REFERENCES `workorder` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1 COMMENT='Workorders received by a dispatcher and assigned to a contractor.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `received_wo`
--

LOCK TABLES `received_wo` WRITE;
/*!40000 ALTER TABLE `received_wo` DISABLE KEYS */;
INSERT INTO `received_wo` VALUES (1,1,1,NULL),(2,2,2,1),(41,1,1,1),(42,1,3,1),(43,1,15,1),(44,1,4,1);
/*!40000 ALTER TABLE `received_wo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `password` varchar(45) NOT NULL,
  `role` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'Alex','test','contractor'),(3,'admin','0000','admin'),(4,'Roland','9999',NULL),(5,'Jessika','TEST','dispatcher'),(7,'Jenna','111110000',NULL),(8,'John Doe','77777','contractor'),(13,'Test','rrrrr','admin'),(15,'Paul','fdhfdhgfh','client'),(17,'Tom','Clinton','contractor'),(21,'Roman','0000','admin'),(23,'Dimka','1111','contractor'),(31,'Roman','222','contractor'),(33,'Alex','password','dispatcher'),(36,'Jenna','111','client'),(38,'Sarah','1234','admin'),(39,'Dimka','1111','contractor'),(40,'','','admin');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workorder`
--

DROP TABLE IF EXISTS `workorder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(450) DEFAULT NULL,
  `estimate` double DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `received` date DEFAULT NULL,
  `scheduled` date DEFAULT NULL,
  `compleated` varchar(45) DEFAULT NULL,
  `location_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_workorder_location1_idx` (`location_id`),
  CONSTRAINT `fk_workorder_location1` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workorder`
--

LOCK TABLES `workorder` WRITE;
/*!40000 ALTER TABLE `workorder` DISABLE KEYS */;
INSERT INTO `workorder` VALUES (1,'Drywall repair',470,'Albany',NULL,NULL,NULL,1),(2,'Roofing',2500,'Saratoga',NULL,NULL,NULL,4),(3,'Hardwood floor repair',500,'Lake George','2018-05-18','2018-12-18','',1),(4,'Hardwood floor repair',500,'Lake George','0003-05-18','2031-12-18','',1),(6,'Door installation',350,'Troy','0001-02-18','2012-04-18','',8),(7,'Tile',333,'Albany','2002-02-18','2002-03-18','',1),(8,'Tile',333,'Albany','2002-02-18','2002-03-18','',1),(15,'Tile',222,'Albany','2010-10-18','2010-11-18','',4),(16,'Tile',222,'Albany','2010-10-18','2010-11-18','',4),(17,'Tile',222,'Albany','2010-10-18','2010-11-18','',4),(18,'Test',2000,'Troy','2004-05-18','2014-12-18','no',4),(19,'Test',222,'Albany','2018-04-07','2018-04-18','no',4),(20,'Test',222,'Albany','2018-04-07','2018-04-18','no',4),(21,'Test',222,'Albany','2018-04-07','2018-04-18','no',4),(22,'Test',222,'Albany','2018-04-07','2018-04-18','no',4),(23,'Test',222,'Albany','2018-04-07','2018-04-18','no',4),(24,'Test df',55555,'Troy','2018-04-07','2018-04-13','no',4);
/*!40000 ALTER TABLE `workorder` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-12 14:53:52
