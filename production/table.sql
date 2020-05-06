-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: 34.87.171.41    Database: main
-- ------------------------------------------------------
-- Server version	5.7.25-google-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
SET @MYSQLDUMP_TEMP_LOG_BIN = @@SESSION.SQL_LOG_BIN;
SET @@SESSION.SQL_LOG_BIN= 0;

--
-- GTID state at the beginning of the backup 
--

SET @@GLOBAL.GTID_PURGED=/*!80000 '+'*/ 'e2d74de8-852e-11ea-a75d-42010a940016:1-222704';

--
-- Table structure for table `1815`
--

DROP TABLE IF EXISTS `1815`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `1815` (
  `id` int(11) NOT NULL,
  `number_before` int(11) DEFAULT NULL,
  `number_after` int(11) DEFAULT NULL,
  `get` double DEFAULT NULL,
  `cost` double DEFAULT '2800',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `1815`
--

LOCK TABLES `1815` WRITE;
/*!40000 ALTER TABLE `1815` DISABLE KEYS */;
/*!40000 ALTER TABLE `1815` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `6134`
--

DROP TABLE IF EXISTS `6134`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `6134` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number_before` int(11) NOT NULL,
  `number_after` int(11) NOT NULL,
  `get` double NOT NULL,
  `cost` double NOT NULL DEFAULT '2800',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `6134`
--

LOCK TABLES `6134` WRITE;
/*!40000 ALTER TABLE `6134` DISABLE KEYS */;
/*!40000 ALTER TABLE `6134` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ISUZU`
--

DROP TABLE IF EXISTS `ISUZU`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ISUZU` (
  `id` int(11) NOT NULL,
  `number_before` int(11) DEFAULT NULL,
  `number_after` int(11) DEFAULT NULL,
  `get` double DEFAULT NULL,
  `cost` double DEFAULT '2800',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ISUZU`
--

LOCK TABLES `ISUZU` WRITE;
/*!40000 ALTER TABLE `ISUZU` DISABLE KEYS */;
/*!40000 ALTER TABLE `ISUZU` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buy`
--

DROP TABLE IF EXISTS `buy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `buy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gas_id` int(11) NOT NULL,
  `account` int(11) NOT NULL DEFAULT '0',
  `price` double NOT NULL DEFAULT '0',
  `discount` double NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `timestamp` varchar(100) NOT NULL,
  `name_stamp` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buy`
--

LOCK TABLES `buy` WRITE;
/*!40000 ALTER TABLE `buy` DISABLE KEYS */;
/*!40000 ALTER TABLE `buy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car`
--

LOCK TABLES `car` WRITE;
/*!40000 ALTER TABLE `car` DISABLE KEYS */;
INSERT INTO `car` VALUES (1,'83-6692/6134'),(2,'83-1058/1815'),(3,'ISUZU');
/*!40000 ALTER TABLE `car` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cost`
--

DROP TABLE IF EXISTS `cost`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gas_id` int(11) NOT NULL,
  `value` double NOT NULL DEFAULT '0',
  `account` int(11) NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `timestamp` varchar(100) NOT NULL,
  `name_stamp` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cost`
--

LOCK TABLES `cost` WRITE;
/*!40000 ALTER TABLE `cost` DISABLE KEYS */;
/*!40000 ALTER TABLE `cost` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gas`
--

DROP TABLE IF EXISTS `gas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gas`
--

LOCK TABLES `gas` WRITE;
/*!40000 ALTER TABLE `gas` DISABLE KEYS */;
INSERT INTO `gas` VALUES (1,'G91'),(2,'G95'),(3,'ดีเซล');
/*!40000 ALTER TABLE `gas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gastank`
--

DROP TABLE IF EXISTS `gastank`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gastank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gas_id` int(11) NOT NULL,
  `value` double NOT NULL DEFAULT '0',
  `buy` double NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `timestamp` varchar(100) NOT NULL,
  `name_stamp` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gastank`
--

LOCK TABLES `gastank` WRITE;
/*!40000 ALTER TABLE `gastank` DISABLE KEYS */;
/*!40000 ALTER TABLE `gastank` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `car_id` int(11) NOT NULL,
  `gas_id` int(11) NOT NULL,
  `value` double NOT NULL DEFAULT '0',
  `account` int(11) NOT NULL,
  `date` date NOT NULL,
  `timestamp` varchar(100) NOT NULL,
  `name_stamp` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history`
--

LOCK TABLES `history` WRITE;
/*!40000 ALTER TABLE `history` DISABLE KEYS */;
/*!40000 ALTER TABLE `history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `receivegas`
--

DROP TABLE IF EXISTS `receivegas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `receivegas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `car_id` int(11) NOT NULL,
  `gas_id` int(11) NOT NULL,
  `value` double NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `timestamp` varchar(100) NOT NULL,
  `name_stamp` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `receivegas`
--

LOCK TABLES `receivegas` WRITE;
/*!40000 ALTER TABLE `receivegas` DISABLE KEYS */;
/*!40000 ALTER TABLE `receivegas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sell`
--

DROP TABLE IF EXISTS `sell`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sell` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gas_id` int(11) NOT NULL,
  `price` double NOT NULL DEFAULT '0',
  `discount` double NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `timestamp` varchar(100) NOT NULL,
  `name_stamp` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sell`
--

LOCK TABLES `sell` WRITE;
/*!40000 ALTER TABLE `sell` DISABLE KEYS */;
/*!40000 ALTER TABLE `sell` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (15,'Admin','server','admin','1234',2),(16,'ถิรเจตน์','วังแง่','tirajetw','5big09oN',2),(18,'พีรภัทร','วังแง่','rui4ymipat','rui4ymi123',2),(19,'check','1234','check','1234',1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
SET @@SESSION.SQL_LOG_BIN = @MYSQLDUMP_TEMP_LOG_BIN;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-06 11:22:57
