-- MySQL dump 10.13  Distrib 5.6.45, for Linux (x86_64)
--
-- Host: rdbms.strato.de    Database: DB4400435
-- ------------------------------------------------------
-- Server version	5.6.42-log

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
-- Table structure for table `klausuren`
--

DROP TABLE IF EXISTS `klausuren`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `klausuren` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE latin1_german1_ci NOT NULL,
  `datei` text COLLATE latin1_german1_ci NOT NULL,
  `downloads` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `klausuren`
--

LOCK TABLES `klausuren` WRITE;
/*!40000 ALTER TABLE `klausuren` DISABLE KEYS */;
INSERT INTO `klausuren` VALUES (1,'schlechte klausur','klausur1',0),(2,'gute klausur','klausur2',0),(3,'dumme klausur','klausur3',0);
/*!40000 ALTER TABLE `klausuren` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `klausurenmitglieder`
--

DROP TABLE IF EXISTS `klausurenmitglieder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `klausurenmitglieder` (
  `klausurID` int(3) NOT NULL,
  `mitgliedID` int(3) NOT NULL,
  PRIMARY KEY (`klausurID`,`mitgliedID`),
  KEY `mitgliedID` (`mitgliedID`),
  CONSTRAINT `klausurenmitglieder_ibfk_1` FOREIGN KEY (`klausurID`) REFERENCES `klausuren` (`id`),
  CONSTRAINT `klausurenmitglieder_ibfk_2` FOREIGN KEY (`mitgliedID`) REFERENCES `mitglieder` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `klausurenmitglieder`
--

LOCK TABLES `klausurenmitglieder` WRITE;
/*!40000 ALTER TABLE `klausurenmitglieder` DISABLE KEYS */;
INSERT INTO `klausurenmitglieder` VALUES (1,3),(2,3),(3,3);
/*!40000 ALTER TABLE `klausurenmitglieder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mitglieder`
--

DROP TABLE IF EXISTS `mitglieder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mitglieder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text COLLATE latin1_german1_ci NOT NULL,
  `password` text COLLATE latin1_german1_ci NOT NULL,
  `name` text COLLATE latin1_german1_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mitglieder`
--

LOCK TABLES `mitglieder` WRITE;
/*!40000 ALTER TABLE `mitglieder` DISABLE KEYS */;
INSERT INTO `mitglieder` VALUES (3,'test','$2y$10$YptiFNkszGfPtmICrCMUFeZ6Tlcl2eLeUs9q2LRtcw1stSZidU5jy','test');
/*!40000 ALTER TABLE `mitglieder` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-05 22:10:37
