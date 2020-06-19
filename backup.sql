-- MySQL dump 10.16  Distrib 10.1.44-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: main
-- ------------------------------------------------------
-- Server version	10.1.44-MariaDB-0+deb9u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `1815`
--

DROP TABLE IF EXISTS `1815`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = utf8 */;
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
-- Table structure for table `C1815`
--

DROP TABLE IF EXISTS `C1815`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `C1815` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) DEFAULT NULL,
  `cost` double DEFAULT '2800',
  `value` double DEFAULT '0',
  `other_price` double DEFAULT '0',
  `detail` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `name_stamp` varchar(255) DEFAULT NULL,
  `time_stamp` varchar(255) DEFAULT NULL,
  `G91` double DEFAULT '0',
  `G95` double DEFAULT '0',
  `Desel` double DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `C1815`
--

LOCK TABLES `C1815` WRITE;
/*!40000 ALTER TABLE `C1815` DISABLE KEYS */;
INSERT INTO `C1815` VALUES (11,1089222,2800,0,0,NULL,'2020-06-09',NULL,NULL,0,0,0),(12,0,2800,0,0,NULL,'2020-06-11',NULL,NULL,0,0,0);
/*!40000 ALTER TABLE `C1815` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `C6134`
--

DROP TABLE IF EXISTS `C6134`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `C6134` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) DEFAULT NULL,
  `cost` double DEFAULT '2800',
  `value` double DEFAULT '0',
  `other_price` double DEFAULT '0',
  `detail` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `name_stamp` varchar(255) DEFAULT NULL,
  `time_stamp` varchar(255) DEFAULT NULL,
  `G91` double DEFAULT '0',
  `G95` double DEFAULT '0',
  `Desel` double DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `C6134`
--

LOCK TABLES `C6134` WRITE;
/*!40000 ALTER TABLE `C6134` DISABLE KEYS */;
INSERT INTO `C6134` VALUES (10,205674,2800,0,0,NULL,'2020-06-09',NULL,NULL,0,0,0),(11,205696,2800,450,0,NULL,'2020-06-11',NULL,NULL,0,0,0),(12,NULL,2800,0,0,'','2020-06-12','nid','06:15:19pm',0,7000,29000),(13,NULL,2800,0,0,'','2020-06-17','nid','11:32:32am',7000,7000,23000);
/*!40000 ALTER TABLE `C6134` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ISUZU`
--

DROP TABLE IF EXISTS `ISUZU`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ISUZU` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) DEFAULT NULL,
  `cost` double DEFAULT '2800',
  `value` double DEFAULT '0',
  `other_price` double DEFAULT '0',
  `detail` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `name_stamp` varchar(255) DEFAULT NULL,
  `time_stamp` varchar(255) DEFAULT NULL,
  `G91` double DEFAULT '0',
  `G95` double DEFAULT '0',
  `Desel` double DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ISUZU`
--

LOCK TABLES `ISUZU` WRITE;
/*!40000 ALTER TABLE `ISUZU` DISABLE KEYS */;
INSERT INTO `ISUZU` VALUES (9,0,2800,0,0,NULL,'2020-06-09',NULL,NULL,0,0,0),(10,0,2800,0,0,NULL,'2020-06-11',NULL,NULL,0,0,0);
/*!40000 ALTER TABLE `ISUZU` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buy`
--

DROP TABLE IF EXISTS `buy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
-- Table structure for table `buy_gas`
--

DROP TABLE IF EXISTS `buy_gas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buy_gas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `name_stamp` varchar(255) DEFAULT NULL,
  `time_stamp` varchar(255) DEFAULT NULL,
  `G91` double DEFAULT '0',
  `G95` double DEFAULT '0',
  `Desel` double DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buy_gas`
--

LOCK TABLES `buy_gas` WRITE;
/*!40000 ALTER TABLE `buy_gas` DISABLE KEYS */;
INSERT INTO `buy_gas` VALUES (12,'2020-06-09','nid','10:03:37pm',0,0,14000),(13,'2020-06-16','nid','05:23:08pm',7000,7000,8000),(14,'2020-06-18','วอร์ม','05:19:29pm',7000,7000,10000);
/*!40000 ALTER TABLE `buy_gas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gas_id` int(11) NOT NULL,
  `value` double NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cost`
--

LOCK TABLES `cost` WRITE;
/*!40000 ALTER TABLE `cost` DISABLE KEYS */;
INSERT INTO `cost` VALUES (36,1,20.5,'2020-06-08'),(37,2,20.66,'2020-06-08'),(38,3,20.76,'2020-06-08'),(42,2,21.311485148515,'2020-06-12'),(43,3,20.68914285714286,'2020-06-12'),(44,1,20.5,'2020-06-12'),(45,1,20.636956521739,'2020-06-15'),(46,2,21.087556295453,'2020-06-15'),(47,3,20.05463157894737,'2020-06-15'),(48,1,20.83,'2020-06-17'),(49,2,21.1,'2020-06-17'),(50,3,20.21,'2020-06-17');
/*!40000 ALTER TABLE `cost` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gas`
--

DROP TABLE IF EXISTS `gas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
-- Table structure for table `gas1815`
--

DROP TABLE IF EXISTS `gas1815`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gas1815` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `g91` double DEFAULT '0',
  `g95` double DEFAULT '0',
  `diesel` double DEFAULT '0',
  `date` date DEFAULT NULL,
  `timestamp` varchar(100) DEFAULT NULL,
  `name_stamp` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gas1815`
--

LOCK TABLES `gas1815` WRITE;
/*!40000 ALTER TABLE `gas1815` DISABLE KEYS */;
INSERT INTO `gas1815` VALUES (6,0,0,0,'2020-06-03','05:07:58pm','กะ1'),(7,0,0,0,'2020-06-04','05:00:50pm','กะ1'),(8,0,0,0,'2020-06-05','05:24:55pm','กะ1'),(9,0,0,0,'2020-06-06','05:10:31pm','กะ1'),(10,0,0,0,'2020-06-07','05:04:27pm','กะ1'),(11,0,0,0,'2020-06-08','04:59:21pm','กะ1'),(12,0,0,23000,'2020-06-09','05:04:47pm','กะ1'),(13,0,0,0,'2020-06-10','05:19:06pm','กะ1'),(14,0,0,0,'2020-06-11','05:15:43pm','กะ1'),(15,0,0,0,'2020-06-12','05:00:44pm','กะ1'),(16,0,0,0,'2020-06-13','05:06:51pm','กะ1'),(17,0,0,0,'2020-06-14','05:11:04pm','กะ1'),(18,0,0,0,'2020-06-15','05:03:50pm','กะ1'),(19,0,0,0,'2020-06-16','05:11:21pm','กะ1'),(20,0,0,0,'2020-06-17','05:02:48pm','กะ1'),(21,0,0,0,'2020-06-18','05:05:15pm','กะ1');
/*!40000 ALTER TABLE `gas1815` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gas6134`
--

DROP TABLE IF EXISTS `gas6134`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gas6134` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `g91` double DEFAULT '0',
  `g95` double DEFAULT '0',
  `diesel` double DEFAULT '0',
  `date` date DEFAULT NULL,
  `timestamp` varchar(100) DEFAULT NULL,
  `name_stamp` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gas6134`
--

LOCK TABLES `gas6134` WRITE;
/*!40000 ALTER TABLE `gas6134` DISABLE KEYS */;
INSERT INTO `gas6134` VALUES (8,0,0,0,'2020-06-03','05:07:58pm','กะ1'),(9,0,0,0,'2020-06-04','05:00:50pm','กะ1'),(10,0,0,0,'2020-06-05','05:24:55pm','กะ1'),(11,0,0,0,'2020-06-06','05:10:31pm','กะ1'),(12,0,0,0,'2020-06-07','05:04:27pm','กะ1'),(13,0,0,0,'2020-06-08','04:59:21pm','กะ1'),(14,0,0,0,'2020-06-09','05:04:47pm','กะ1'),(15,0,0,0,'2020-06-10','05:19:06pm','กะ1'),(16,0,0,0,'2020-06-11','05:15:43pm','กะ1'),(17,0,0,0,'2020-06-12','05:00:44pm','กะ1'),(18,0,0,0,'2020-06-13','05:06:51pm','กะ1'),(19,0,0,0,'2020-06-14','05:11:04pm','กะ1'),(20,0,0,0,'2020-06-15','05:03:50pm','กะ1'),(21,0,0,0,'2020-06-16','05:11:21pm','กะ1'),(22,0,0,0,'2020-06-17','05:02:48pm','กะ1'),(23,0,0,0,'2020-06-18','05:05:15pm','กะ1');
/*!40000 ALTER TABLE `gas6134` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gasisuzu`
--

DROP TABLE IF EXISTS `gasisuzu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gasisuzu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `g91` double DEFAULT '0',
  `g95` double DEFAULT '0',
  `diesel` double DEFAULT '0',
  `date` date DEFAULT NULL,
  `timestamp` varchar(100) DEFAULT NULL,
  `name_stamp` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gasisuzu`
--

LOCK TABLES `gasisuzu` WRITE;
/*!40000 ALTER TABLE `gasisuzu` DISABLE KEYS */;
INSERT INTO `gasisuzu` VALUES (13,0,0,16000,'2020-06-02','05:00:34pm','กะ1'),(14,0,0,16000,'2020-06-03','05:07:58pm','กะ1'),(15,0,0,16000,'2020-06-04','05:00:50pm','กะ1'),(16,0,0,10000,'2020-06-05','05:24:55pm','กะ1'),(17,0,0,10000,'2020-06-06','05:10:31pm','กะ1'),(18,0,0,10000,'2020-06-07','05:04:27pm','กะ1'),(19,0,0,6000,'2020-06-08','04:59:21pm','กะ1'),(20,0,0,0,'2020-06-09','05:04:47pm','กะ1'),(21,0,0,13000,'2020-06-10','05:19:06pm','กะ1'),(22,0,0,0,'2020-06-11','05:15:43pm','กะ1'),(23,0,0,0,'2020-06-12','05:00:44pm','กะ1'),(24,0,0,4000,'2020-06-13','05:06:51pm','กะ1'),(25,0,0,4000,'2020-06-14','05:11:04pm','กะ1'),(26,0,0,0,'2020-06-15','05:03:50pm','กะ1'),(27,0,0,0,'2020-06-16','05:11:21pm','กะ1'),(28,0,0,0,'2020-06-17','05:02:48pm','กะ1'),(29,0,0,0,'2020-06-18','05:05:15pm','กะ1');
/*!40000 ALTER TABLE `gasisuzu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gastank`
--

DROP TABLE IF EXISTS `gastank`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gastank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gas_id` int(11) NOT NULL,
  `value` double NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `timestamp` varchar(100) NOT NULL,
  `name_stamp` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=193 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gastank`
--

LOCK TABLES `gastank` WRITE;
/*!40000 ALTER TABLE `gastank` DISABLE KEYS */;
INSERT INTO `gastank` VALUES (136,1,9700,'2020-06-09','17:03:31pm','กะ1'),(137,2,10100,'2020-06-09','17:03:31pm','กะ1'),(138,3,16700,'2020-06-09','17:03:31pm','กะ1'),(139,1,9100,'2020-06-09','22:01:12pm','กะ2'),(140,2,9100,'2020-06-09','22:01:12pm','กะ2'),(141,3,15700,'2020-06-09','22:01:12pm','กะ2'),(142,1,8500,'2020-06-10','17:18:53pm','กะ1'),(143,2,7100,'2020-06-10','17:18:53pm','กะ1'),(144,3,12000,'2020-06-10','17:18:53pm','กะ1'),(145,1,8200,'2020-06-10','08:09:01am','กะ2'),(146,2,6400,'2020-06-10','08:09:01am','กะ2'),(147,3,10000,'2020-06-10','08:09:01am','กะ2'),(148,1,7400,'2020-06-11','17:15:32pm','กะ1'),(149,2,5100,'2020-06-11','17:15:32pm','กะ1'),(150,3,8800,'2020-06-11','17:15:32pm','กะ1'),(151,1,7100,'2020-06-11','21:40:57pm','กะ2'),(152,2,4700,'2020-06-11','21:40:57pm','กะ2'),(153,3,8400,'2020-06-11','21:40:57pm','กะ2'),(154,1,6100,'2020-06-12','17:00:36pm','กะ1'),(155,2,3100,'2020-06-12','17:00:36pm','กะ1'),(156,3,6000,'2020-06-12','17:00:36pm','กะ1'),(157,1,5900,'2020-06-12','08:05:07am','กะ2'),(158,2,9100,'2020-06-12','08:05:07am','กะ2'),(159,3,12000,'2020-06-12','08:05:07am','กะ2'),(160,1,5300,'2020-06-13','17:06:41pm','กะ1'),(161,2,8200,'2020-06-13','17:06:41pm','กะ1'),(162,3,12100,'2020-06-13','17:06:41pm','กะ1'),(163,1,4100,'2020-06-13','08:03:02am','กะ2'),(164,2,7000,'2020-06-13','08:03:02am','กะ2'),(165,3,11100,'2020-06-13','08:03:02am','กะ2'),(166,1,3600,'2020-06-14','17:10:18pm','กะ1'),(167,2,6200,'2020-06-14','17:10:18pm','กะ1'),(168,3,9400,'2020-06-14','17:10:18pm','กะ1'),(169,1,3100,'2020-06-14','08:05:24am','กะ2'),(170,2,5500,'2020-06-14','08:05:24am','กะ2'),(171,3,8400,'2020-06-14','08:05:24am','กะ2'),(172,1,2200,'2020-06-15','17:03:37pm','กะ1'),(173,2,4300,'2020-06-15','17:03:37pm','กะ1'),(174,3,6400,'2020-06-15','17:03:37pm','กะ1'),(175,1,8800,'2020-06-15','07:59:52am','กะ2'),(176,2,10900,'2020-06-15','07:59:52am','กะ2'),(177,3,13200,'2020-06-15','07:59:52am','กะ2'),(178,1,8000,'2020-06-16','17:11:09pm','กะ1'),(179,2,9700,'2020-06-16','17:11:09pm','กะ1'),(180,3,9400,'2020-06-16','17:11:09pm','กะ1'),(181,1,7800,'2020-06-16','07:54:27am','กะ2'),(182,2,9300,'2020-06-16','07:54:27am','กะ2'),(183,3,9000,'2020-06-16','07:54:27am','กะ2'),(184,1,6600,'2020-06-17','17:02:39pm','กะ1'),(185,2,8100,'2020-06-17','17:02:39pm','กะ1'),(186,3,5800,'2020-06-17','17:02:39pm','กะ1'),(187,1,13300,'2020-06-17','08:01:37am','กะ2'),(188,2,14600,'2020-06-17','08:01:37am','กะ2'),(189,3,12700,'2020-06-17','08:01:37am','กะ2'),(190,1,12600,'2020-06-18','17:05:02pm','กะ1'),(191,2,13100,'2020-06-18','17:05:02pm','กะ1'),(192,3,10200,'2020-06-18','17:05:02pm','กะ1');
/*!40000 ALTER TABLE `gastank` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `car_id` int(11) NOT NULL,
  `gas_id` int(11) NOT NULL,
  `price` double DEFAULT '0',
  `value` double NOT NULL DEFAULT '0',
  `tran_price` double DEFAULT '0',
  `account` int(11) NOT NULL,
  `date` date NOT NULL,
  `timestamp` varchar(100) NOT NULL,
  `name_stamp` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=408 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history`
--

LOCK TABLES `history` WRITE;
/*!40000 ALTER TABLE `history` DISABLE KEYS */;
INSERT INTO `history` VALUES (381,1,1,0,0,0.9,1,'2020-06-12','03:00:57pm','วอร์ม'),(382,1,2,20.7,7000,0.9,1,'2020-06-12','05:59:34pm','nid'),(383,1,3,21.14,7000,0.9,1,'2020-06-12','05:59:34pm','nid'),(384,1,1,0,0,0.9,2,'2020-06-12','03:00:57pm','วอร์ม'),(385,1,2,0,0,0.9,2,'2020-06-12','03:00:57pm','วอร์ม'),(386,1,3,0,0,0.9,2,'2020-06-12','03:00:57pm','วอร์ม'),(387,1,1,0,0,0.9,3,'2020-06-12','03:00:57pm','วอร์ม'),(388,1,2,0,0,0.9,3,'2020-06-12','03:00:57pm','วอร์ม'),(389,1,3,19.34,22000,0.9,3,'2020-06-12','05:59:34pm','nid'),(390,1,1,0,0,0.9,1,'2020-06-15','06:46:59pm','nid'),(391,1,2,0,0,0.9,1,'2020-06-15','06:46:59pm','nid'),(392,1,3,0,0,0.9,1,'2020-06-15','06:46:59pm','nid'),(393,1,1,19.78,7000,0.9,2,'2020-06-15','06:46:59pm','nid'),(394,1,2,20.05,7000,0.9,2,'2020-06-15','06:46:59pm','nid'),(395,1,3,0,0,0.9,2,'2020-06-15','06:46:59pm','nid'),(396,1,1,0,0,0.9,3,'2020-06-15','06:46:59pm','nid'),(397,1,2,0,0,0.9,3,'2020-06-15','06:46:59pm','nid'),(398,1,3,18.99,24000,0.9,3,'2020-06-15','06:46:59pm','nid'),(399,1,1,19.93,7000,0.9,1,'2020-06-17','11:26:50am','nid'),(400,1,2,20.2,7000,0.9,1,'2020-06-17','11:26:50am','nid'),(401,1,3,0,0,0.9,1,'2020-06-17','11:26:50am','nid'),(402,1,1,0,0,0.9,2,'2020-06-17','11:26:50am','nid'),(403,1,2,0,0,0.9,2,'2020-06-17','11:26:50am','nid'),(404,1,3,0,0,0.9,2,'2020-06-17','11:26:50am','nid'),(405,1,1,0,0,0.9,3,'2020-06-17','11:26:50am','nid'),(406,1,2,0,0,0.9,3,'2020-06-17','11:26:50am','nid'),(407,1,3,19.31,23000,0.9,3,'2020-06-17','11:26:50am','nid');
/*!40000 ALTER TABLE `history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `receivegas`
--

DROP TABLE IF EXISTS `receivegas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sell` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gas_id` int(11) NOT NULL,
  `account` int(11) DEFAULT NULL,
  `price` double NOT NULL DEFAULT '0',
  `discount` double NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `timestamp` varchar(100) NOT NULL,
  `name_stamp` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=816 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sell`
--

LOCK TABLES `sell` WRITE;
/*!40000 ALTER TABLE `sell` DISABLE KEYS */;
INSERT INTO `sell` VALUES (631,1,1,20.13,0,'2020-06-09','07:21:46pm','nid'),(632,2,1,20.4,0,'2020-06-09','07:21:46pm','nid'),(633,3,1,20.54,0,'2020-06-09','07:21:46pm','nid'),(634,1,2,20.13,0,'2020-06-09','07:21:46pm','nid'),(635,2,2,20.4,0,'2020-06-09','07:21:46pm','nid'),(636,3,2,20.54,0.2,'2020-06-09','07:21:46pm','nid'),(637,1,3,20.13,0.63,'2020-06-09','07:21:46pm','nid'),(638,2,3,20.4,0.71,'2020-06-09','07:21:46pm','nid'),(639,3,3,20.54,1.61,'2020-06-09','07:21:46pm','nid'),(658,1,1,20.73,0,'2020-06-10','11:31:34am','nid'),(659,2,1,21,0,'2020-06-10','11:31:34am','nid'),(660,3,1,21.14,0,'2020-06-10','11:31:34am','nid'),(661,1,2,20.73,0.2,'2020-06-10','11:31:34am','nid'),(662,2,2,21,0.2,'2020-06-10','11:31:34am','nid'),(663,3,2,21.14,0.2,'2020-06-10','11:31:34am','nid'),(664,1,3,20.73,1,'2020-06-10','11:31:34am','nid'),(665,2,3,21,1,'2020-06-10','11:31:34am','nid'),(666,3,3,21.14,1.9,'2020-06-10','11:31:34am','nid'),(683,1,1,20.73,0,'2020-06-11','11:03:23am','win'),(684,2,1,21,0,'2020-06-11','11:03:23am','win'),(685,3,1,21.14,0,'2020-06-11','11:03:23am','win'),(686,1,2,21,0.2,'2020-06-11','11:03:23am','win'),(687,2,2,21.14,0.2,'2020-06-11','11:03:23am','win'),(688,3,2,20.13,0.3,'2020-06-11','11:03:23am','win'),(689,1,3,21,1.1,'2020-06-11','11:03:23am','win'),(690,2,3,21.14,1.1,'2020-06-11','11:03:23am','win'),(691,3,3,20.13,1.85,'2020-06-11','11:03:23am','win'),(692,1,1,0,0,'2020-06-12','-','-'),(693,2,1,0,0,'2020-06-12','-','-'),(694,3,1,0,0,'2020-06-12','-','-'),(695,1,2,0,0,'2020-06-12','-','-'),(696,2,2,0,0,'2020-06-12','-','-'),(697,3,2,0,0,'2020-06-12','-','-'),(698,1,3,0,0,'2020-06-12','-','-'),(699,2,3,0,0,'2020-06-12','-','-'),(700,3,3,0,0,'2020-06-12','-','-'),(717,1,1,20.43,0,'2020-06-13','08:15:27pm','nid'),(718,2,1,20.7,0,'2020-06-13','08:15:27pm','nid'),(719,3,1,21.14,0,'2020-06-13','08:15:27pm','nid'),(720,1,2,20.43,0.4,'2020-06-13','08:15:27pm','nid'),(721,2,2,20.7,0.4,'2020-06-13','08:15:27pm','nid'),(722,3,2,21.14,0.4,'2020-06-13','08:15:27pm','nid'),(723,1,3,20.43,1.35,'2020-06-13','08:15:27pm','nid'),(724,2,3,20.7,1.35,'2020-06-13','08:15:27pm','nid'),(725,3,3,21.14,2.15,'2020-06-13','08:15:27pm','nid'),(726,1,1,0,0,'2020-06-14','-','-'),(727,2,1,0,0,'2020-06-14','-','-'),(728,3,1,0,0,'2020-06-14','-','-'),(729,1,2,0,0,'2020-06-14','-','-'),(730,2,2,0,0,'2020-06-14','-','-'),(731,3,2,0,0,'2020-06-14','-','-'),(732,1,3,0,0,'2020-06-14','-','-'),(733,2,3,0,0,'2020-06-14','-','-'),(734,3,3,0,0,'2020-06-14','-','-'),(762,1,1,20.43,0,'2020-06-15','06:40:38pm','nid'),(763,2,1,20.7,0,'2020-06-15','06:40:38pm','nid'),(764,3,1,21.14,0,'2020-06-15','06:40:38pm','nid'),(765,1,2,20.43,0.4,'2020-06-15','06:40:38pm','nid'),(766,2,2,20.7,0.4,'2020-06-15','06:40:38pm','nid'),(767,3,2,21.14,0.4,'2020-06-15','06:40:38pm','nid'),(768,1,3,20.43,1.45,'2020-06-15','06:40:38pm','nid'),(769,2,3,20.7,1.45,'2020-06-15','06:40:38pm','nid'),(770,3,3,21.14,2.15,'2020-06-15','06:40:38pm','nid'),(780,1,1,20.43,0,'2020-06-16','05:22:03pm','nid'),(781,2,1,20.7,0,'2020-06-16','05:22:03pm','nid'),(782,3,1,21.14,0,'2020-06-16','05:22:03pm','nid'),(783,1,2,20.43,0.2,'2020-06-16','05:22:03pm','nid'),(784,2,2,20.7,0.2,'2020-06-16','05:22:03pm','nid'),(785,3,2,21.14,0.4,'2020-06-16','05:22:03pm','nid'),(786,1,3,20.43,0.95,'2020-06-16','05:22:03pm','nid'),(787,2,3,20.7,0.95,'2020-06-16','05:22:03pm','nid'),(788,3,3,21.14,1.78,'2020-06-16','05:22:03pm','nid'),(798,1,1,19.93,0,'2020-06-17','11:23:49am','nid'),(799,2,1,20.2,0,'2020-06-17','11:23:49am','nid'),(800,3,1,20.64,0,'2020-06-17','11:23:49am','nid'),(801,1,2,19.93,0,'2020-06-17','11:23:49am','nid'),(802,2,2,20.2,0,'2020-06-17','11:23:49am','nid'),(803,3,2,20.64,0,'2020-06-17','11:23:49am','nid'),(804,1,3,19.93,0.35,'2020-06-17','11:23:49am','nid'),(805,2,3,20.2,0.3,'2020-06-17','11:23:49am','nid'),(806,3,3,20.64,1.33,'2020-06-17','11:23:49am','nid'),(807,1,1,0,0,'2020-06-18','-','-'),(808,2,1,0,0,'2020-06-18','-','-'),(809,3,1,0,0,'2020-06-18','-','-'),(810,1,2,0,0,'2020-06-18','-','-'),(811,2,2,0,0,'2020-06-18','-','-'),(812,3,2,0,0,'2020-06-18','-','-'),(813,1,3,0,0,'2020-06-18','-','-'),(814,2,3,0,0,'2020-06-18','-','-'),(815,3,3,0,0,'2020-06-18','-','-');
/*!40000 ALTER TABLE `sell` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `text`
--

DROP TABLE IF EXISTS `text`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `text` (
  `id` int(11) NOT NULL,
  `text` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `text`
--

LOCK TABLES `text` WRITE;
/*!40000 ALTER TABLE `text` DISABLE KEYS */;
INSERT INTO `text` VALUES (1,'\r\n');
/*!40000 ALTER TABLE `text` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `today_price`
--

DROP TABLE IF EXISTS `today_price`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `today_price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gas_id` int(11) DEFAULT NULL,
  `current_price` double DEFAULT NULL,
  `sell_price` double DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=177 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `today_price`
--

LOCK TABLES `today_price` WRITE;
/*!40000 ALTER TABLE `today_price` DISABLE KEYS */;
INSERT INTO `today_price` VALUES (147,1,20.88,21.8,'2020-06-09'),(148,2,21.15,22.05,'2020-06-09'),(149,3,21.29,22.2,'2020-06-09'),(150,1,21.48,22.4,'2020-06-10'),(151,2,21.75,22.65,'2020-06-10'),(152,3,21.89,22.8,'2020-06-10'),(153,1,21.48,22.4,'2020-06-11'),(154,2,21.75,22.65,'2020-06-11'),(155,3,21.89,22.8,'2020-06-11'),(156,1,21.18,22.1,'2020-06-12'),(157,2,21.45,22.35,'2020-06-12'),(158,3,21.89,22.8,'2020-06-12'),(159,1,21.18,22.1,'2020-06-13'),(160,2,21.45,22.35,'2020-06-13'),(161,3,21.89,22.8,'2020-06-13'),(162,1,21.18,22.1,'2020-06-14'),(163,2,21.45,22.35,'2020-06-14'),(164,3,21.89,22.8,'2020-06-14'),(165,1,21.18,22.1,'2020-06-15'),(166,2,21.45,22.35,'2020-06-15'),(167,3,21.89,22.8,'2020-06-15'),(168,1,21.18,22.1,'2020-06-16'),(169,2,21.45,22.35,'2020-06-16'),(170,3,21.89,22.8,'2020-06-16'),(171,1,20.68,21.6,'2020-06-17'),(172,2,20.95,21.85,'2020-06-17'),(173,3,21.39,22.3,'2020-06-17'),(174,1,20.68,21.6,'2020-06-18'),(175,2,20.95,21.85,'2020-06-18'),(176,3,21.39,22.3,'2020-06-18');
/*!40000 ALTER TABLE `today_price` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (15,'Admin','server','admin','1234',2),(20,'Employee','Server','employee','1234',1),(24,'วอร์ม','-','baantha01','280440',2),(25,'กะ1','-','bt01','bt01',1),(26,'กะ2','-','bt02','bt02',1),(27,'nid','siri','baantha02','457073',3),(28,'win','-','baantha03','baantha03',3);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-19  7:33:15
