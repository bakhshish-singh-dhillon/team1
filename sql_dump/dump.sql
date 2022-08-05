-- MySQL dump 10.13  Distrib 8.0.30, for Linux (x86_64)
--
-- Host: localhost    Database: farm_fresh
-- ------------------------------------------------------
-- Server version	8.0.30-0ubuntu0.20.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `addresses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `address_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
INSERT INTO `addresses` VALUES (1,1,'Home','105 harledan drive','Winnipeg','MB','CA','R4A 0C9','10983019830',NULL,NULL,'2022-08-05 02:51:18'),(2,1,'Office','1 blossom drive','Winnipeg','MB','CA','R4A 0C9','10983019830',NULL,NULL,'2022-08-05 02:51:18'),(3,1,'School','22 Kim drive','Winnipeg','MB','CA','R4A0C9','10983019830',NULL,NULL,NULL),(4,1,'Parking','345 Karls drive','Winnipeg','MB','CA','R4A 0C9','10983019830',NULL,NULL,'2022-08-05 02:06:48');
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Dairy',NULL,NULL,NULL,NULL),(2,'vegetables',NULL,NULL,NULL,NULL),(3,'fruits',NULL,NULL,NULL,NULL),(4,'eggs',1,NULL,NULL,NULL),(5,'cheese',1,NULL,NULL,NULL),(6,'yogurt',2,NULL,NULL,'2022-08-05 16:34:03'),(7,'butter',1,NULL,NULL,NULL),(8,'milk',1,NULL,NULL,NULL),(9,'Tropical',3,NULL,NULL,NULL),(10,'Berries',3,NULL,NULL,NULL),(11,'Leafy Green',2,NULL,NULL,NULL),(12,'Root',2,NULL,NULL,NULL),(13,'Marrow',2,NULL,NULL,NULL),(14,'Melons',3,NULL,NULL,NULL),(15,'white eggs',4,'2022-08-05 01:58:50','2022-08-05 01:55:39','2022-08-05 01:58:50'),(16,'myegg',4,'2022-08-05 14:03:37','2022-08-05 14:02:23','2022-08-05 14:03:37'),(17,'black egg',4,'2022-08-05 15:27:06','2022-08-05 15:26:45','2022-08-05 15:27:06'),(18,'milk 2%',10,'2022-08-05 16:52:57','2022-08-05 16:52:52','2022-08-05 16:52:57'),(19,'asdasasd',12,'2022-08-05 16:53:15','2022-08-05 16:53:09','2022-08-05 16:53:15'),(20,'milk 2%',11,'2022-08-05 16:53:48','2022-08-05 16:53:28','2022-08-05 16:53:48'),(21,'milk 2%',10,'2022-08-05 16:53:46','2022-08-05 16:53:42','2022-08-05 16:53:46'),(22,'gin',4,'2022-08-05 16:54:21','2022-08-05 16:54:17','2022-08-05 16:54:21'),(23,'milk 2%',9,'2022-08-05 17:05:24','2022-08-05 17:04:06','2022-08-05 17:05:24'),(24,'asdasasd',14,'2022-08-05 17:05:21','2022-08-05 17:04:43','2022-08-05 17:05:21'),(25,'asd',23,'2022-08-05 17:05:19','2022-08-05 17:05:15','2022-08-05 17:05:19');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_product`
--

DROP TABLE IF EXISTS `category_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category_product` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint NOT NULL,
  `product_id` bigint NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=346 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_product`
--

LOCK TABLES `category_product` WRITE;
/*!40000 ALTER TABLE `category_product` DISABLE KEYS */;
INSERT INTO `category_product` VALUES (84,14,12),(113,2,34),(114,12,34),(138,2,39),(139,12,39),(141,13,4),(142,12,6),(143,2,7),(145,2,9),(149,3,35),(150,9,35),(151,2,5),(154,3,33),(155,12,33),(162,3,32),(163,9,32),(166,3,31),(167,10,31),(170,2,30),(171,11,30),(188,11,8),(191,3,29),(192,10,29),(195,2,28),(196,12,28),(199,3,46),(200,9,46),(203,3,47),(204,9,47),(207,3,48),(208,9,48),(215,2,50),(216,12,50),(225,11,11),(228,1,15),(229,7,15),(230,2,13),(237,1,16),(238,5,16),(242,1,18),(243,6,18),(248,1,20),(251,1,21),(252,5,21),(255,1,22),(256,4,22),(259,1,23),(260,4,23),(261,2,24),(264,2,25),(265,13,25),(272,3,27),(273,9,27),(276,2,45),(277,11,45),(280,3,44),(281,9,44),(284,3,49),(285,10,49),(288,1,14),(289,8,14),(290,10,3),(291,2,10),(294,3,36),(295,9,36),(298,3,26),(299,9,26),(302,3,38),(303,9,38),(310,3,41),(311,9,41),(318,3,42),(319,9,42),(322,2,37),(323,12,37),(324,2,43),(325,1,17),(328,1,19),(329,6,19),(332,3,40),(333,9,40),(334,1,51),(335,4,52),(336,15,52),(337,4,52),(338,15,52),(339,9,2),(340,4,53),(341,16,53),(342,4,53),(343,16,53),(345,3,1);
/*!40000 ALTER TABLE `category_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint NOT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=195 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,1,'apple.png','2022-08-04 19:33:58',NULL,'2022-08-04 19:33:58'),(2,1,'apple.png','2022-08-04 19:33:58',NULL,'2022-08-04 19:33:58'),(3,2,'banana.png','2022-08-04 19:58:49',NULL,'2022-08-04 19:58:49'),(4,2,'banana.png','2022-08-04 19:58:49',NULL,'2022-08-04 19:58:49'),(5,3,'strawberry.png','2022-08-04 19:59:56',NULL,'2022-08-04 19:59:56'),(6,3,'strawberry.png','2022-08-04 19:59:56',NULL,'2022-08-04 19:59:56'),(7,4,'engcuc.png','2022-08-04 20:01:39',NULL,'2022-08-04 20:01:39'),(8,4,'engcuc.png','2022-08-04 20:01:39',NULL,'2022-08-04 20:01:39'),(9,5,'cs.png','2022-08-04 20:05:51',NULL,'2022-08-04 20:05:51'),(10,5,'cs.png','2022-08-04 20:05:51',NULL,'2022-08-04 20:05:51'),(11,6,'yellowon.png','2022-08-04 20:06:53',NULL,'2022-08-04 20:06:53'),(12,7,'tomato.png','2022-08-04 20:08:39',NULL,'2022-08-04 20:08:39'),(13,8,'iceberg.png','2022-08-04 20:10:08',NULL,'2022-08-04 20:10:08'),(14,9,'lemon.png','2022-08-04 20:11:24',NULL,'2022-08-04 20:11:24'),(15,10,'couliflower.png','2022-08-04 20:14:24',NULL,'2022-08-04 20:14:24'),(16,11,'broccoli.png','2022-08-05 00:17:07',NULL,'2022-08-05 00:17:07'),(17,12,'cantaloupe.png','2022-08-04 19:36:05',NULL,'2022-08-04 19:36:05'),(18,13,'redpep.png','2022-08-05 00:19:18',NULL,'2022-08-05 00:19:18'),(19,14,'milk_1.89L.png','2022-08-05 00:14:22',NULL,'2022-08-05 00:14:22'),(20,15,'butter.png','2022-08-05 00:16:12',NULL,'2022-08-05 00:16:12'),(21,16,'cheese.png','2022-08-05 00:20:27',NULL,'2022-08-05 00:20:27'),(22,17,'whipped.png','2022-08-05 00:23:54',NULL,'2022-08-05 00:23:54'),(23,18,'yougurt.png','2022-08-05 00:25:22',NULL,'2022-08-05 00:25:22'),(24,19,'flavour.png','2022-08-05 00:26:23',NULL,'2022-08-05 00:26:23'),(25,20,'chocolate.png','2022-08-05 00:27:12',NULL,'2022-08-05 00:27:12'),(26,21,'creame_cheese.png','2022-08-05 00:28:18',NULL,'2022-08-05 00:28:18'),(27,22,'white.png','2022-08-05 00:29:17',NULL,'2022-08-05 00:29:17'),(28,23,'brown.png','2022-08-05 00:30:14',NULL,'2022-08-05 00:30:14'),(29,24,'sweetgrnpep.png','2022-08-05 00:31:02',NULL,'2022-08-05 00:31:02'),(30,25,'zucchini.png','2022-08-05 00:31:50',NULL,'2022-08-05 00:31:50'),(31,26,'greengr.png','2022-08-05 00:33:44',NULL,'2022-08-05 00:33:44'),(32,27,'redgr.png','2022-08-04 20:41:56',NULL,'2022-08-04 20:41:56'),(33,28,'sweetpt.png','2022-08-04 20:41:01',NULL,'2022-08-04 20:41:01'),(34,29,'raspberry.png','2022-08-04 20:40:37',NULL,'2022-08-04 20:40:37'),(35,30,'cilantro.png','2022-08-04 20:40:08',NULL,'2022-08-04 20:40:08'),(36,31,'blueberry.png','2022-08-04 20:34:24',NULL,'2022-08-04 20:34:24'),(37,32,'limes.png','2022-08-04 20:29:57',NULL,'2022-08-04 20:29:57'),(38,33,'potatos.png','2022-08-04 20:29:14',NULL,'2022-08-04 20:29:14'),(39,34,'asparagus.png','2022-08-04 20:24:01',NULL,'2022-08-04 20:24:01'),(40,35,'avacodo.png','2022-08-04 20:22:59',NULL,'2022-08-04 20:22:59'),(41,36,'pineapple.png','2022-08-05 00:52:37',NULL,'2022-08-05 00:52:37'),(42,37,'ginger.png','2022-08-05 00:59:27',NULL,'2022-08-05 00:59:27'),(43,38,'pears.png','2022-08-05 00:55:06',NULL,'2022-08-05 00:55:06'),(44,39,'garlic.png','2022-08-04 20:20:42',NULL,'2022-08-04 20:20:42'),(45,40,'apricot.png','2022-08-05 00:56:10',NULL,'2022-08-05 00:56:10'),(46,41,'mango.png','2022-08-05 00:57:44',NULL,'2022-08-05 00:57:44'),(47,42,'kiwi.png','2022-08-05 00:58:21',NULL,'2022-08-05 00:58:21'),(48,43,'jalapino.png','2022-08-05 01:00:25',NULL,'2022-08-05 01:00:25'),(49,44,'grapefruit.png','2022-08-05 00:36:19',NULL,'2022-08-05 00:36:19'),(50,45,'greenbeans.png','2022-08-05 00:35:16',NULL,'2022-08-05 00:35:16'),(51,46,'plum.png','2022-08-05 00:04:55',NULL,'2022-08-05 00:04:55'),(52,47,'peach.png','2022-08-05 00:06:46',NULL,'2022-08-05 00:06:46'),(53,48,'orange.png','2022-08-05 00:08:41',NULL,'2022-08-05 00:08:41'),(54,49,'cherry.png','2022-08-05 00:11:26',NULL,'2022-08-05 00:11:26'),(55,50,'carrot.png','2022-08-05 00:12:19',NULL,'2022-08-05 00:12:19'),(56,1,'sZxQqJqUFKKIRAJM2e5D2vT5Wl7K3eC4IZ9CRSUp.png','2022-08-04 19:56:28','2022-08-04 19:33:58','2022-08-04 19:56:28'),(57,12,'ukBU6hQjZ2pQ6apL3EfcGdX1TT88bUThlNY6yHJE.png',NULL,'2022-08-04 19:36:05','2022-08-04 19:36:05'),(58,1,'bQhwQvpwnIis36UiPNfFOv7PleuxW2E5C2AsrMoI.png','2022-08-04 19:57:32','2022-08-04 19:56:28','2022-08-04 19:57:32'),(59,1,'HefVnFEyqMMgi4G8VEImIb3pCqBQ9dospIPa1jbD.png','2022-08-04 19:57:32','2022-08-04 19:56:28','2022-08-04 19:57:32'),(60,1,'kQoDsDSozKwr5OstGR7xrhdCLjEuP1Yy615TrWXp.png','2022-08-04 19:57:32','2022-08-04 19:56:28','2022-08-04 19:57:32'),(61,1,'M82RHjfygqdwBI64elL5gPkRporm5rZ3ObnLaqel.png',NULL,'2022-08-04 19:57:32','2022-08-04 19:57:32'),(62,1,'fj1AX8bb3QEZ7g8Expbd3OOCPCXJtXnN77VqS38o.png',NULL,'2022-08-04 19:57:32','2022-08-04 19:57:32'),(63,1,'fFUodIgmZzLD08ZEnvZfNkocDSOj2Cy9PDvzl7kF.png',NULL,'2022-08-04 19:57:32','2022-08-04 19:57:32'),(64,2,'6Gf0CRZEouJGDZZRhaW4gvAQ07xap7e4z57tLjuS.png',NULL,'2022-08-04 19:58:49','2022-08-04 19:58:49'),(65,2,'Qv523tdX0VROP8MgQCTZ7VEbqK9bXPO3W2Vxn1a6.png',NULL,'2022-08-04 19:58:49','2022-08-04 19:58:49'),(66,3,'vw8Z96W1Yagxs0YKJo2VoB6kc1uuGBWt4FdmHc8E.png','2022-08-05 00:40:47','2022-08-04 19:59:56','2022-08-05 00:40:47'),(67,3,'YTYEjPShaxEviFm7wH3666hWbv6yuNJzWZHj2iWJ.png','2022-08-05 00:40:47','2022-08-04 19:59:56','2022-08-05 00:40:47'),(68,3,'xQSUY8Kv0ICGQAwqvOzEgk1zw1XHHq6kd4JqpxbA.png','2022-08-05 00:40:47','2022-08-04 19:59:56','2022-08-05 00:40:47'),(69,4,'gTM98q7KKAhOmTsBLrY5kKpDAdHitaIcOn1xAvAF.png',NULL,'2022-08-04 20:01:39','2022-08-04 20:01:39'),(70,4,'O9VWZLprKwc5CQBIs02Fu5cqdDqNv9r0rQN7L9cj.png',NULL,'2022-08-04 20:01:39','2022-08-04 20:01:39'),(71,5,'QKIzlFSChQcIrpo7MYqg9dr2YxHZ6nsewdVh3QfV.png',NULL,'2022-08-04 20:05:51','2022-08-04 20:05:51'),(72,5,'XY56uM2URFI98OwZGz48Vxd1sbVBg7RcFEB7Fwmr.png',NULL,'2022-08-04 20:05:52','2022-08-04 20:05:52'),(73,6,'a3jjdel7eyHXorMAaUquOk6MX2JMDFavv7vVuZAP.png',NULL,'2022-08-04 20:06:53','2022-08-04 20:06:53'),(74,6,'gB9a97jO3KGmy3Y4vqUDyF1r4t1R2BnzuavsNbyY.png',NULL,'2022-08-04 20:06:53','2022-08-04 20:06:53'),(75,7,'UJR0SZLs3ByWZqrqc2xqohdAwFNF7SAbS8Q5OObO.png',NULL,'2022-08-04 20:08:39','2022-08-04 20:08:39'),(76,7,'hO4U5hqAOVkCtLQ1lASRhORpBp6FwbDGRHkRUW1w.png',NULL,'2022-08-04 20:08:39','2022-08-04 20:08:39'),(77,7,'IlET06MqIZQx8tVc3Cj9ro9VHLNTTrDcVZ3kpmCr.png',NULL,'2022-08-04 20:08:39','2022-08-04 20:08:39'),(78,7,'36v4dnnUfrdiK6l4sP2UZMcGUMCHyV8wolC7sH1A.png',NULL,'2022-08-04 20:08:39','2022-08-04 20:08:39'),(79,8,'vBb7CZ0hzL3acW3DDU0qPA3DMzG9Gknp7AL7GLPt.png',NULL,'2022-08-04 20:10:08','2022-08-04 20:10:08'),(80,8,'P8JlSyqyRIJ5Vtiu82fGYkJsYs6BkAU8R0NgzwZm.png',NULL,'2022-08-04 20:10:08','2022-08-04 20:10:08'),(81,9,'Ocu2hGgTNrTbPVm5uxiyknYdlYdz4nsU95FrbSdC.png',NULL,'2022-08-04 20:11:24','2022-08-04 20:11:24'),(82,9,'6HPNj1vjIobw7GwIRHDxyUArLJUt3wtSBM2d6qYp.png',NULL,'2022-08-04 20:11:24','2022-08-04 20:11:24'),(83,9,'4ejREMJlCTmwt701QbyKO1XyNZUhFge9tMo3jUIx.png',NULL,'2022-08-04 20:11:24','2022-08-04 20:11:24'),(84,10,'z2OcuohKvaQXKONBRgRvA9c1pw2HYWIxmP5NJ8Mn.png','2022-08-05 00:43:13','2022-08-04 20:14:24','2022-08-05 00:43:13'),(85,10,'09PRX4Ll1Q2wWsx055sMfJvDB6ocstByOrTj7GHS.png','2022-08-05 00:43:13','2022-08-04 20:14:24','2022-08-05 00:43:13'),(86,10,'RMPHRxkAYziJRHaz7RcVgPmM5HWoyvZpwSaT8z8u.png','2022-08-05 00:43:13','2022-08-04 20:14:24','2022-08-05 00:43:13'),(87,39,'5pdLL8eC8SoeSQIFef5Oop7LtKprahsUGUeoOuha.png',NULL,'2022-08-04 20:20:42','2022-08-04 20:20:42'),(88,39,'SW0X1IOgdJN7zXe32FkjuvXCVtCRkjk8xhojf0kg.png',NULL,'2022-08-04 20:20:42','2022-08-04 20:20:42'),(89,35,'2xSFdqY18IP5ioTictwA8DunjzzOeMB8cX4exDV7.png',NULL,'2022-08-04 20:22:59','2022-08-04 20:22:59'),(90,35,'wRKFnUP2AKsORINbokGDKTBem4QcG322BHDUXObA.png',NULL,'2022-08-04 20:22:59','2022-08-04 20:22:59'),(91,35,'T7M5HXsn1itGj1bekMhdItvAgO0huuQGDh0IvU1A.png',NULL,'2022-08-04 20:22:59','2022-08-04 20:22:59'),(92,34,'QS1xT6k8bla80zVM2bdA7FMOJzvhq30VzOC7c3wU.png',NULL,'2022-08-04 20:24:01','2022-08-04 20:24:01'),(93,34,'q1nfuN4a50Vh78zp4o6Tv2w1AshOTZi5um4q7TsV.png',NULL,'2022-08-04 20:24:01','2022-08-04 20:24:01'),(94,33,'jwpxeim7EPs25Ij0OUbBLoJp5fFwbQFLcivFuuIZ.png',NULL,'2022-08-04 20:29:14','2022-08-04 20:29:14'),(95,33,'6E98PBGpB3a37FkoBEz8b3EdVrVtNyrn0ftXgaCq.png',NULL,'2022-08-04 20:29:14','2022-08-04 20:29:14'),(96,32,'RFZd5f74drQMRGIrmQLUUTZmX0tvLxfQqQGhkLt4.png',NULL,'2022-08-04 20:29:57','2022-08-04 20:29:57'),(97,32,'2NE2nYP9OYyc0YlH69BydoQz2KpVvsLUag5JeyEE.png',NULL,'2022-08-04 20:29:57','2022-08-04 20:29:57'),(98,31,'QOIrDzizm0CnVs6vxm1fkMZj0UqGITHq1EDOfQiF.png',NULL,'2022-08-04 20:34:24','2022-08-04 20:34:24'),(99,31,'FQpTBii5FXgli1sgyVzcldxU128cQyPookkyDOq9.png',NULL,'2022-08-04 20:34:24','2022-08-04 20:34:24'),(100,31,'NER17DLYWMwMOLOkqV3KoqAGR3F5Ip8MtTKIzHcR.png',NULL,'2022-08-04 20:34:24','2022-08-04 20:34:24'),(101,30,'0gGT8zkIwt2cRc0lfrOl60yUAuvWyqac2HyKERVx.png',NULL,'2022-08-04 20:40:08','2022-08-04 20:40:08'),(102,30,'f4sKs5JHqDx2HGQW9p353M4Ak4IgP5gSxLxNHKEZ.png',NULL,'2022-08-04 20:40:08','2022-08-04 20:40:08'),(103,29,'y3EHhdhLg1j3NXYaBf5rIcr6GerrSFmMgBz74ihH.png',NULL,'2022-08-04 20:40:37','2022-08-04 20:40:37'),(104,29,'VJgcsMqdiK7gqCgd3GqxZ8DScBvSaLlutfCul0Bi.png',NULL,'2022-08-04 20:40:37','2022-08-04 20:40:37'),(105,28,'VQN8BzWC7qaaVrpSCx63nJreW9vxDTUzpThbxozJ.png',NULL,'2022-08-04 20:41:01','2022-08-04 20:41:01'),(106,28,'O0raxcJmv6gw7Irflv4h1p3Vrdt4M2aVeBEKkLQE.png',NULL,'2022-08-04 20:41:01','2022-08-04 20:41:01'),(107,27,'rNAk0qK4PgKf7q9Wa0JDgpuEuVWCzk31d9vpUZnW.png','2022-08-05 00:34:15','2022-08-04 20:41:56','2022-08-05 00:34:15'),(108,27,'3AYBRPICaiXYcSQ651XXsBYhTEaZ2Usz4MJ7u0Bz.png','2022-08-05 00:34:15','2022-08-04 20:41:56','2022-08-05 00:34:15'),(109,27,'zjEimcY58skO8vosrQCgOoUAQ03FJWXfmnatmkf7.png','2022-08-05 00:34:15','2022-08-04 20:41:56','2022-08-05 00:34:15'),(110,46,'wSfGgRRjU3wKJlPVsEqHDrZQLEz5pwBh4v11iGzf.png',NULL,'2022-08-05 00:04:55','2022-08-05 00:04:55'),(111,46,'pbXZxAoj4AsJnIeAad2dbzC8fdUfJFAmPRDLjda2.png',NULL,'2022-08-05 00:04:55','2022-08-05 00:04:55'),(112,46,'S4jT6IuE140UJpCc47PA3J9ads5hrU0JCe2Q2cT8.png',NULL,'2022-08-05 00:04:55','2022-08-05 00:04:55'),(113,47,'WJdYIo1VkVgfmXW5RWDEHDQaOjIzK5F1bdtb4CKO.png',NULL,'2022-08-05 00:06:46','2022-08-05 00:06:46'),(114,47,'RCG5nPCWSk0GzDWLBJgFYf96fOJathLtxDLBitSw.png',NULL,'2022-08-05 00:06:46','2022-08-05 00:06:46'),(115,47,'m3OZYmuBdi743uFEHpSED4PTgtbsL0r0pipCdqMA.png',NULL,'2022-08-05 00:06:46','2022-08-05 00:06:46'),(116,48,'d5pMFkLZRypOIy3lDrIJwNLlt7GFvowTuZsByOzz.png',NULL,'2022-08-05 00:08:41','2022-08-05 00:08:41'),(117,48,'bY7NCvG4SEqAljRnejYDUfp84welcpQraOfKl2kX.png',NULL,'2022-08-05 00:08:41','2022-08-05 00:08:41'),(118,48,'TC7FtO1rtmu8XVBhhJkjHfU7VMy1h2NKAcm3WXQn.png',NULL,'2022-08-05 00:08:41','2022-08-05 00:08:41'),(119,49,'Sv93HZuWG0eTWUUbnkgAIQXMpQMGIQyWE50Qt9Zy.png','2022-08-05 00:37:57','2022-08-05 00:11:26','2022-08-05 00:37:57'),(120,49,'p3058mxaZDioWW6IrAkJHu4Pjc95Eo5xsmrb88YZ.png','2022-08-05 00:37:57','2022-08-05 00:11:26','2022-08-05 00:37:57'),(121,49,'F4pi0qjLzkn0Bk0FyHMkqznx9wNQirxzcW78xoDd.png','2022-08-05 00:37:57','2022-08-05 00:11:26','2022-08-05 00:37:57'),(122,50,'5M0XLvZHNUbp7USfdtUNkJpBPtw8FMZnTgjhSF1J.png',NULL,'2022-08-05 00:12:19','2022-08-05 00:12:19'),(123,50,'ivYVbG1vtZJLnMKhq7fevHwSbw7bCU0yRkZCFRDu.png',NULL,'2022-08-05 00:12:19','2022-08-05 00:12:19'),(124,50,'Or8qOGuHRv7VvxQNfzZhakYXXtR6uAFARcmJnQKP.png',NULL,'2022-08-05 00:12:19','2022-08-05 00:12:19'),(125,14,'zBBzkLNTDmGyMmIqfzN2GMoQ029XPNNU5n3mpVey.png','2022-08-05 00:38:53','2022-08-05 00:14:22','2022-08-05 00:38:53'),(126,14,'xplg9yF4MFKQOY8BYvgNZ8YESin2bfUeF9Up1eKH.png','2022-08-05 00:38:53','2022-08-05 00:14:22','2022-08-05 00:38:53'),(127,15,'GUjrtoERCdR60WpKx5c6uSqDVjRPX0j9M7b2ULRW.png',NULL,'2022-08-05 00:16:12','2022-08-05 00:16:12'),(128,15,'ShJMvyK7EAIux57SJYEQTPtW9p06rNbmq0OGW7MO.png',NULL,'2022-08-05 00:16:12','2022-08-05 00:16:12'),(129,15,'Y0505D4XrgdDSj9okJfjf3PXLKT1mbezZNjWfLWg.png',NULL,'2022-08-05 00:16:12','2022-08-05 00:16:12'),(130,11,'XStvixD4OmGi9vc9QFcLQKQaKU06Oj5CsTZXg1BZ.png',NULL,'2022-08-05 00:17:07','2022-08-05 00:17:07'),(131,11,'079u4XiQlMr4sJmh78TPnI3Z2NFkYxA5UxsW5PCP.png',NULL,'2022-08-05 00:17:07','2022-08-05 00:17:07'),(132,11,'Jy6Be8owdpK7zwzHi3ZxcAEPuclkT1ZfXrEhWAiP.png',NULL,'2022-08-05 00:17:07','2022-08-05 00:17:07'),(133,13,'NYGqOYti3gemhyKn51jR3buEdiiwmgyMIDGM8bOH.png',NULL,'2022-08-05 00:19:18','2022-08-05 00:19:18'),(134,13,'HGlhXzULf9EJrqpu3J79G0A3mQ2sWU9AmtqpZV9v.png',NULL,'2022-08-05 00:19:18','2022-08-05 00:19:18'),(135,13,'55OORr5a5ZMrkjGPfdduyFSIPF1xtHtT2vvV3YnB.png',NULL,'2022-08-05 00:19:18','2022-08-05 00:19:18'),(136,16,'7ok81mXBqtUjlGZwpPPcBy1SGbtk6tbe6YWA32cQ.png',NULL,'2022-08-05 00:20:27','2022-08-05 00:20:27'),(137,16,'01g2PAWzNUvD8EQNli319hdWuAeSZvMN8LRVmD7a.png',NULL,'2022-08-05 00:20:27','2022-08-05 00:20:27'),(138,16,'6mNiDPpeIeafKQSr7m1cm5u3IGfnvRIJcjEp0D17.png',NULL,'2022-08-05 00:20:27','2022-08-05 00:20:27'),(139,17,'4b3HLswFjmzr0MiM7juILBtnMlzh8x4WsqAXWpe0.png','2022-08-05 01:06:02','2022-08-05 00:23:54','2022-08-05 01:06:02'),(140,17,'RUWVztZkzwMyGbZWqUnUsJK2iuLZO4yK6R2jhn03.png','2022-08-05 01:06:02','2022-08-05 00:23:54','2022-08-05 01:06:02'),(141,18,'BlUwX3IFcqNJhCA2z8ksvzC3Qa1hqXFOqKXW13p6.png',NULL,'2022-08-05 00:25:22','2022-08-05 00:25:22'),(142,18,'HLEZK4Sp7IWIcqqL2Ht0Vl7B9kOXs9rOWwAV7nS9.png',NULL,'2022-08-05 00:25:22','2022-08-05 00:25:22'),(143,19,'x0sQmObvayXvA8pNxjro7XHZNWpzz91GwpHGRdTi.png',NULL,'2022-08-05 00:26:23','2022-08-05 00:26:23'),(144,19,'dhJWnGaYDbmIhIgrDmP5NgZQD8ZL0UB1PLS4d8kX.png',NULL,'2022-08-05 00:26:23','2022-08-05 00:26:23'),(145,20,'Drzr1YofM3UQLpUcCHWqPHJGaX0JBYbdM83U47Rx.png',NULL,'2022-08-05 00:27:12','2022-08-05 00:27:12'),(146,20,'Hi8CjMu27y9mYOwMQjJM1IWyd9uTbw9OmaxAKdlL.png',NULL,'2022-08-05 00:27:12','2022-08-05 00:27:12'),(147,20,'2kQXO8vWMCTaFoRbQBaRCwTbxkskyOVOateHBFy2.png',NULL,'2022-08-05 00:27:12','2022-08-05 00:27:12'),(148,21,'fYfNREIGDnoM35LwpNmK7wyC9Rf8gCYZCvZF0UCE.png',NULL,'2022-08-05 00:28:18','2022-08-05 00:28:18'),(149,21,'VCtHzILHyvL568RVZd47IdIkPGUbFYBQ8JYowK38.png',NULL,'2022-08-05 00:28:18','2022-08-05 00:28:18'),(150,22,'A8aHE7SarOSSchMWob0R0C98DVrRJpDPMsa57fS9.png',NULL,'2022-08-05 00:29:17','2022-08-05 00:29:17'),(151,22,'QPDCyXnE8zTAZdZ8Ole027tYN1O0vwppi03mCoUm.png',NULL,'2022-08-05 00:29:17','2022-08-05 00:29:17'),(152,23,'LQbyNR8gBEOVKQbuOtgxmHI9djtBMQeMD99v3WIT.png',NULL,'2022-08-05 00:30:14','2022-08-05 00:30:14'),(153,23,'6ZKqSOyScTQLpnZrzDjqy87wmAAFvQ433bGp9gCA.png',NULL,'2022-08-05 00:30:14','2022-08-05 00:30:14'),(154,24,'HPOOtgPHBy0Sxm5DMHCaW5DiIcwifebyiMW65uc9.png',NULL,'2022-08-05 00:31:02','2022-08-05 00:31:02'),(155,24,'LnqSVnKKk0byQCepyvmMkcfb5wrb9WgNvt1vztEG.png',NULL,'2022-08-05 00:31:02','2022-08-05 00:31:02'),(156,24,'OW60Lt0AhGs7xEA08TRdcupRwr6dbuy6HadpJgKI.png',NULL,'2022-08-05 00:31:02','2022-08-05 00:31:02'),(157,25,'DTlscqfnwk0InviO5NXoTqqlg3KR3R8X3qQ2MpRp.png',NULL,'2022-08-05 00:31:50','2022-08-05 00:31:50'),(158,25,'XIW2QP2IKdsxejJJR1IwH8Nd36JGkRx8FMYNZDD0.png',NULL,'2022-08-05 00:31:50','2022-08-05 00:31:50'),(159,25,'pLaTaHj2uqWlyxOP93EpqxKAoywPev1OUyr676wx.png',NULL,'2022-08-05 00:31:50','2022-08-05 00:31:50'),(160,26,'qg3Lq1BgRwUoZRXcemKD2SdqfuKylTk429ZVf4ih.png','2022-08-05 00:54:17','2022-08-05 00:33:44','2022-08-05 00:54:17'),(161,26,'us3gfkjCJvAe6u47RQaKbJ103hRM5AywMwuxliuc.png','2022-08-05 00:54:17','2022-08-05 00:33:44','2022-08-05 00:54:17'),(162,27,'LtyMGsmbCxm5bCPDS9bjPuoM6QZrv7mM2ac9Nj2Z.png',NULL,'2022-08-05 00:34:15','2022-08-05 00:34:15'),(163,27,'piueJoChfaZOlgJGDd3nkZJ6bQ1VL6TLrL1FmiYC.png',NULL,'2022-08-05 00:34:15','2022-08-05 00:34:15'),(164,45,'q7MoJ5JFPpy230qTK7QaKoOEakkIzyYp4g0VvjQb.png',NULL,'2022-08-05 00:35:16','2022-08-05 00:35:16'),(165,45,'8h1bLweBH40diHRt5QVar8jbuPisOZpnEqtrXFOh.png',NULL,'2022-08-05 00:35:16','2022-08-05 00:35:16'),(166,44,'FxkKPtBzLK5MtVKlvMeRlBWnm11UFdLQGPDB8tsM.png',NULL,'2022-08-05 00:36:19','2022-08-05 00:36:19'),(167,44,'KgqNOAMUtTUyIAd9DtkBdbQXqAB61ia4V7we4dWs.png',NULL,'2022-08-05 00:36:19','2022-08-05 00:36:19'),(168,44,'j5FXqiXvmPARU11A13Rizm4RVJQUBkXaK9LYxfqy.png',NULL,'2022-08-05 00:36:19','2022-08-05 00:36:19'),(169,49,'CT9VIycWv52OXDbJIfghpEkfe17Je9FgJ0qsU2Qh.png',NULL,'2022-08-05 00:37:57','2022-08-05 00:37:57'),(170,49,'c0m3Y5kRvAGw9oKbo6QpJOHb3aMo4seypIOhZe8y.png',NULL,'2022-08-05 00:37:57','2022-08-05 00:37:57'),(171,14,'z0UIke7HgWX9IYeiYDzAKGtDF2b7GF5HQ97ksjqj.png',NULL,'2022-08-05 00:38:53','2022-08-05 00:38:53'),(172,3,'ufAb6DFzKYzq2RGFThFkzseKDsvak9noGYGaL6xi.png',NULL,'2022-08-05 00:40:47','2022-08-05 00:40:47'),(173,10,'C66BXx7w4okAQHT66CwPuUgHJkbXdrcPRmpaC7NX.png',NULL,'2022-08-05 00:43:13','2022-08-05 00:43:13'),(174,10,'b1y0rm0Wzp1A6TLKtJ0FJDHJgJJurLMUpTqhw8NT.png',NULL,'2022-08-05 00:43:13','2022-08-05 00:43:13'),(175,36,'UvyJJRmtilLUUubprLKfjPzYGitbaMrmUFYPV1Ko.png',NULL,'2022-08-05 00:52:37','2022-08-05 00:52:37'),(176,36,'d7ukIp3S6PnmNHUfoKwOmla4ISWpO1sUkkCRpX5r.png',NULL,'2022-08-05 00:52:37','2022-08-05 00:52:37'),(177,26,'XYdfpm3SJKErmzGGtSlDfoPLSmLvCzpQf1hbtjSO.png',NULL,'2022-08-05 00:54:17','2022-08-05 00:54:17'),(178,26,'wiVloVqLbfczQTPcszYHig98ZdGCx17QSLsDlrG4.png',NULL,'2022-08-05 00:54:17','2022-08-05 00:54:17'),(179,38,'uxcYRluBCbAINHkhRbOz8gDg01szliftRQLgrBn5.png',NULL,'2022-08-05 00:55:06','2022-08-05 00:55:06'),(180,40,'Hqi7MwkHJ7aTM2QGOQut0Ka7vaP1lnZBQG0lqWzB.png',NULL,'2022-08-05 00:56:10','2022-08-05 00:56:10'),(181,40,'Ya5AVvq3piWeR6hLEHMl2H8yXN1woKQuSavw6zkt.png',NULL,'2022-08-05 00:56:10','2022-08-05 00:56:10'),(182,41,'ak1BnCi0h92iio43GGvVz6qNKqSVg1GYea9ui6Qo.png',NULL,'2022-08-05 00:57:44','2022-08-05 00:57:44'),(183,42,'zeCswXx5oHEoKhHZaR12BEU9twexrxE7EFVl9aKB.png','2022-08-05 00:58:21','2022-08-05 00:58:21','2022-08-05 00:58:21'),(184,42,'MCdxwQmDXssLMlyGZZ0ZGuxmdHuzVfgoH6xL5ysQ.png','2022-08-05 00:58:21','2022-08-05 00:58:21','2022-08-05 00:58:21'),(185,42,'7gTjw7EUjlo16aoeUMFPiqorhOmL6ZZGieIIslQI.png',NULL,'2022-08-05 00:58:21','2022-08-05 00:58:21'),(186,42,'PjaWNP8TLdhboWk60wx4CbGymJcXrnPHgBrmasvn.png',NULL,'2022-08-05 00:58:21','2022-08-05 00:58:21'),(187,37,'zd4QjjDC8E5sUc2nSzODYde45fcfEQnijHg8P0Ov.png',NULL,'2022-08-05 00:59:27','2022-08-05 00:59:27'),(188,37,'nuHTgtGEhKfTKS4nDRYkD8zAVPgIa2juCWuG72Up.png',NULL,'2022-08-05 00:59:27','2022-08-05 00:59:27'),(189,43,'QNmxZ8FGYTCzaD1ZPvmSsC5MEjDRjSCvGv4EzNy7.png',NULL,'2022-08-05 01:00:25','2022-08-05 01:00:25'),(190,17,'Ju7J3adTbD15RqYylZdqRWQrlZwkaFe9cHr4hMOa.png',NULL,'2022-08-05 01:06:02','2022-08-05 01:06:02'),(191,17,'Wtzb6rsWyYNnl1or8X0RX4H5V2f6rvveD2ud10EK.png',NULL,'2022-08-05 01:06:02','2022-08-05 01:06:02'),(192,51,'K9I6FGsOlIWDr832CLkqsYGxV6b8ptbGiwLR7Mvx.png',NULL,'2022-08-05 01:30:47','2022-08-05 01:30:47'),(193,52,'XOYVR4LBoggZaszg4yJeso0JR7qLplMsBpOhxDmX.png',NULL,'2022-08-05 01:56:46','2022-08-05 01:56:46'),(194,53,'SbaOyYsupMpMUCcv8vrSfwxti8LvWkQu0LSPMG9w.png',NULL,'2022-08-05 14:03:22','2022-08-05 14:03:22');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (23,'2014_10_12_000000_create_users_table',1),(24,'2014_10_12_100000_create_password_resets_table',1),(25,'2019_08_19_000000_create_failed_jobs_table',1),(26,'2019_12_14_000001_create_personal_access_tokens_table',1),(27,'2022_07_16_193936_create_products_table',1),(28,'2022_07_16_203642_create_categories_table',1),(29,'2022_07_16_203722_create_product_metas_table',1),(30,'2022_07_16_203748_create_orders_table',1),(31,'2022_07_16_203818_create_reviews_table',1),(32,'2022_07_16_203831_create_images_table',1),(33,'2022_07_16_203923_create_addresses_table',1),(34,'2022_07_16_204012_create_order_line_items_table',1),(35,'2022_07_16_204202_create_category_product_table',1),(36,'2022_07_16_225445_create_transactions_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_line_items`
--

DROP TABLE IF EXISTS `order_line_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_line_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint NOT NULL,
  `product_id` bigint NOT NULL,
  `unit_price` decimal(8,2) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_line_items`
--

LOCK TABLES `order_line_items` WRITE;
/*!40000 ALTER TABLE `order_line_items` DISABLE KEYS */;
INSERT INTO `order_line_items` VALUES (1,1,1,2.49,'Gala Apple','10',NULL,'2022-03-17 10:30:34',NULL),(2,2,4,2.49,'Cucumber','12',NULL,'2021-08-17 10:30:34',NULL),(3,3,4,2.49,'Cucumber','12',NULL,'2022-01-17 10:30:34',NULL),(4,4,7,2.49,'Cucumber','12',NULL,'2022-02-17 10:30:34',NULL),(5,5,7,2.49,'Cucumber','12',NULL,'2022-02-17 10:30:34',NULL),(6,6,7,2.49,'Cucumber','12',NULL,'2022-02-01 10:30:34',NULL),(7,7,22,2.49,'Cucumber','12',NULL,'2021-09-01 10:30:34',NULL),(8,8,6,2.49,'Cucumber','12',NULL,'2022-06-01 10:30:34',NULL),(9,9,18,2.49,'Cucumber','12',NULL,'2022-06-01 10:30:34',NULL),(10,10,31,2.49,'Cucumber','12',NULL,'2022-06-01 10:30:34',NULL),(11,11,38,2.49,'Cucumber','12',NULL,'2022-04-01 10:30:34',NULL),(12,12,38,2.49,'Cucumber','12',NULL,'2022-04-01 10:30:34',NULL),(13,13,38,2.49,'Cucumber','12',NULL,'2022-04-01 10:30:34',NULL),(14,14,38,2.49,'Cucumber','12',NULL,'2022-04-01 10:30:34',NULL),(15,15,38,2.49,'Cucumber','12',NULL,'2022-04-01 10:30:34',NULL),(16,16,38,2.49,'Cucumber','12',NULL,'2022-04-01 10:30:34',NULL),(17,17,38,2.49,'Cucumber','12',NULL,'2022-04-01 10:30:34',NULL),(18,27,38,2.49,'Cucumber','12',NULL,'2022-04-01 10:30:34',NULL),(19,30,38,2.49,'Cucumber','12',NULL,'2022-04-01 10:30:34',NULL),(20,33,38,2.49,'Cucumber','12',NULL,'2022-04-01 10:30:34',NULL),(21,40,38,2.49,'Cucumber','12',NULL,'2022-04-01 10:30:34',NULL),(22,45,38,2.49,'Cucumber','12',NULL,'2022-04-01 10:30:34',NULL),(23,21,1,2.49,'Gala Apple','1',NULL,'2022-08-04 18:45:49','2022-08-04 18:45:49'),(24,22,37,0.99,'Ginger','3',NULL,'2022-08-05 02:09:07','2022-08-05 02:09:07'),(25,22,28,1.79,'Sweet Potato','3',NULL,'2022-08-05 02:09:07','2022-08-05 02:09:07'),(26,23,7,2.33,'Tomato Vine','3',NULL,'2022-08-05 02:51:38','2022-08-05 02:51:38'),(27,24,1,2.49,'Gala Apple','4',NULL,'2022-08-05 14:32:05','2022-08-05 14:32:05'),(28,25,1,2.49,'Gala Apple','3',NULL,'2022-08-05 15:15:31','2022-08-05 15:15:31');
/*!40000 ALTER TABLE `order_line_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `delivery_charges` decimal(8,2) NOT NULL,
  `gst` decimal(8,2) NOT NULL,
  `pst` decimal(8,2) NOT NULL,
  `vat` decimal(8,2) NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `subtotal` decimal(8,2) NOT NULL,
  `billing_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1,12.99,3.50,4.90,3.50,'Shipped',4.89,2.00,'{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','1234','Successful',NULL,'2022-03-17 10:30:34',NULL),(2,2,12.99,3.50,4.90,3.50,'Shipped',4.89,2.00,'{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','1234','Successful',NULL,'2021-08-17 10:30:34',NULL),(3,3,10.99,3.50,4.90,3.50,'Shipped',9.89,7.00,'{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','1234','Successful',NULL,'2022-02-17 10:30:34',NULL),(4,5,10.99,3.50,4.90,3.50,'Shipped',9.89,7.00,'{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','1234','Successful',NULL,'2022-02-17 10:30:34',NULL),(5,5,10.99,3.50,4.90,3.50,'Shipped',9.89,7.00,'{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','1234','Successful',NULL,'2022-02-01 10:30:34',NULL),(6,6,10.99,3.50,4.90,3.50,'Shipped',39.89,57.00,'{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','1234','Successful',NULL,'2021-09-01 10:30:34',NULL),(7,6,10.99,3.50,4.90,3.50,'Shipped',9.89,7.00,'{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','1234','Successful',NULL,'2022-06-01 10:30:34',NULL),(8,6,10.99,3.50,4.90,3.50,'Shipped',9.89,7.00,'{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','1234','Successful',NULL,'2022-06-01 10:30:34',NULL),(9,6,10.99,3.50,4.90,3.50,'Shipped',9.89,7.00,'{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','1234','Successful',NULL,'2022-06-01 10:30:34',NULL),(10,8,10.99,3.50,4.90,3.50,'Shipped',9.89,7.00,'{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','1234','Successful',NULL,'2022-04-01 10:30:34',NULL),(11,7,10.99,3.50,4.90,3.50,'Shipped',9.89,7.00,'{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','1234','Successful',NULL,'2022-04-01 10:30:34',NULL),(12,7,10.99,3.50,4.90,3.50,'Shipped',9.89,4.00,'{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','1234','Successful',NULL,'2022-04-01 10:30:34',NULL),(13,7,10.99,3.50,4.90,3.50,'Shipped',9.89,4.00,'{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','1234','Successful',NULL,'2022-04-01 10:30:34',NULL),(14,7,10.99,3.50,4.90,3.50,'Shipped',9.89,4.00,'{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','1234','Successful',NULL,'2022-04-01 10:30:34',NULL),(15,7,10.99,3.50,4.90,3.50,'Shipped',4.89,2.00,'{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','1234','Successful',NULL,'2022-04-01 10:30:34',NULL),(16,7,10.99,3.50,4.90,3.50,'Shipped',4.89,2.00,'{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','1234','Successful',NULL,'2022-04-01 10:30:34',NULL),(17,7,10.99,3.50,4.90,3.50,'Shipped',5.89,3.00,'{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','1234','Successful',NULL,'2022-04-01 10:30:34',NULL),(18,7,10.99,3.50,4.90,3.50,'Shipped',4.89,2.00,'{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','1234','Successful',NULL,'2022-04-01 10:30:34',NULL),(19,7,10.99,3.50,4.90,3.50,'Shipped',4.89,2.00,'{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','1234','Successful',NULL,'2022-04-01 10:30:34',NULL),(20,7,10.99,3.50,4.90,3.50,'Shipped',4.89,2.00,'{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','{\"address_type\":\"Home\",\"address\":\"234, 1792 Pambina Hwy\",\"city\":\"WINNIPEG\",\"province\":\"MB\",\"country\":\"Canada\",\"postal_code\":\"R3T 6G8\",\"phone\":\"4313369999\"}','1234','Successful',NULL,'2022-04-01 10:30:34',NULL),(21,1,10.00,0.00,0.00,0.00,'Delivered',12.49,2.49,'{\"address_type\":\"Office\",\"address\":\"1 blossom drive\",\"city\":\"Winnipeg\",\"province\":\"MB\",\"country\":\"CA\",\"postal_code\":\"R4A0C9\",\"phone\":\"10983019830\"}','{\"address_type\":\"School\",\"address\":\"22 Kim drive\",\"city\":\"Winnipeg\",\"province\":\"MB\",\"country\":\"CA\",\"postal_code\":\"R4A0C9\",\"phone\":\"10983019830\"}','2022-14228','Successful',NULL,'2022-08-04 18:45:49','2022-08-04 18:47:21'),(22,1,10.00,0.00,0.00,0.00,'Pending',18.34,8.34,'{\"address_type\":\"Parking\",\"address\":\"345 Karls drive\",\"city\":\"Winnipeg\",\"province\":\"MB\",\"country\":\"CA\",\"postal_code\":\"R4A 0C9\",\"phone\":\"10983019830\"}','{\"address_type\":\"Parking\",\"address\":\"345 Karls drive\",\"city\":\"Winnipeg\",\"province\":\"MB\",\"country\":\"CA\",\"postal_code\":\"R4A 0C9\",\"phone\":\"10983019830\"}','2022-14239','Successful',NULL,'2022-08-05 02:09:07','2022-08-05 02:09:07'),(23,1,10.00,0.00,0.00,0.00,'Pending',16.99,6.99,'{\"address_type\":\"Office\",\"address\":\"1 blossom drive\",\"city\":\"Winnipeg\",\"province\":\"MB\",\"country\":\"CA\",\"postal_code\":\"R4A 0C9\",\"phone\":\"10983019830\"}','{\"address_type\":\"Home\",\"address\":\"105 harledan drive\",\"city\":\"Winnipeg\",\"province\":\"MB\",\"country\":\"CA\",\"postal_code\":\"R4A 0C9\",\"phone\":\"10983019830\"}','2022-14249','Successful',NULL,'2022-08-05 02:51:38','2022-08-05 02:51:38'),(24,1,10.00,0.00,0.00,0.00,'Pending',19.96,9.96,'{\"address_type\":\"Office\",\"address\":\"1 blossom drive\",\"city\":\"Winnipeg\",\"province\":\"MB\",\"country\":\"CA\",\"postal_code\":\"R4A 0C9\",\"phone\":\"10983019830\"}','{\"address_type\":\"Office\",\"address\":\"1 blossom drive\",\"city\":\"Winnipeg\",\"province\":\"MB\",\"country\":\"CA\",\"postal_code\":\"R4A 0C9\",\"phone\":\"10983019830\"}','2022-14269','Successful',NULL,'2022-08-05 14:32:05','2022-08-05 14:32:05'),(25,1,10.00,0.00,0.00,0.00,'Pending',17.47,7.47,'{\"address_type\":\"Home\",\"address\":\"105 harledan drive\",\"city\":\"Winnipeg\",\"province\":\"MB\",\"country\":\"CA\",\"postal_code\":\"R4A 0C9\",\"phone\":\"10983019830\"}','{\"address_type\":\"Office\",\"address\":\"1 blossom drive\",\"city\":\"Winnipeg\",\"province\":\"MB\",\"country\":\"CA\",\"postal_code\":\"R4A 0C9\",\"phone\":\"10983019830\"}','2022-14272','Successful',NULL,'2022-08-05 15:15:31','2022-08-05 15:15:31');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_metas`
--

DROP TABLE IF EXISTS `product_metas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_metas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_metas`
--

LOCK TABLES `product_metas` WRITE;
/*!40000 ALTER TABLE `product_metas` DISABLE KEYS */;
INSERT INTO `product_metas` VALUES (1,1,'Size','Medium','2022-08-05 14:46:08','2022-08-04 20:13:15','2022-08-05 14:46:08'),(2,1,'Sodium','1.7mg','2022-08-05 14:46:08','2022-08-04 20:13:15','2022-08-05 14:46:08'),(3,1,'Pottasium','186mg','2022-08-05 14:46:08','2022-08-04 20:13:15','2022-08-05 14:46:08'),(4,1,'Fat','0.2g','2022-08-05 14:46:08','2022-08-04 20:13:15','2022-08-05 14:46:08'),(5,2,'Size','Medium','2022-08-05 13:57:04','2022-08-04 20:19:07','2022-08-05 13:57:04'),(6,2,'Sugar','15gms','2022-08-05 13:57:04','2022-08-04 20:19:07','2022-08-05 13:57:04'),(7,2,'Protein','1gm','2022-08-05 13:57:04','2022-08-04 20:19:07','2022-08-05 13:57:04'),(8,14,'Quantity','1 Cup','2022-08-05 00:14:22','2022-08-04 20:21:41','2022-08-05 00:14:22'),(9,14,'Calories','149','2022-08-05 00:14:22','2022-08-04 20:21:41','2022-08-05 00:14:22'),(10,14,'Protein','8gms','2022-08-05 00:14:22','2022-08-04 20:21:41','2022-08-05 00:14:22'),(11,14,'Fat','8gms','2022-08-05 00:14:22','2022-08-04 20:21:41','2022-08-05 00:14:22'),(12,14,'Fiber','0gm','2022-08-05 00:14:22','2022-08-04 20:21:41','2022-08-05 00:14:22'),(13,14,'Sugar','18gms','2022-08-05 00:14:22','2022-08-04 20:21:41','2022-08-05 00:14:22'),(14,16,'Quantity','1 Ounce','2022-08-05 00:20:27','2022-08-04 20:24:34','2022-08-05 00:20:27'),(15,16,'Calories','120','2022-08-05 00:20:27','2022-08-04 20:24:34','2022-08-05 00:20:27'),(16,16,'Protein','8gms','2022-08-05 00:20:27','2022-08-04 20:24:34','2022-08-05 00:20:27'),(17,16,'Saturated fat','6gms','2022-08-05 00:20:27','2022-08-04 20:24:34','2022-08-05 00:20:27'),(18,16,'Calcium','180mls','2022-08-05 00:20:27','2022-08-04 20:24:34','2022-08-05 00:20:27'),(19,17,'Quantity','2 tablespoon','2022-08-05 00:23:54','2022-08-04 20:27:00','2022-08-05 00:23:54'),(20,17,'Calories','400','2022-08-05 00:23:54','2022-08-04 20:27:00','2022-08-05 00:23:54'),(21,17,'Protein','3gms','2022-08-05 00:23:54','2022-08-04 20:27:00','2022-08-05 00:23:54'),(22,17,'Vitamin A','35% of the Reference Daily Intake (RDI)','2022-08-05 00:23:54','2022-08-04 20:27:00','2022-08-05 00:23:54'),(23,17,'Vitamin D','10% of the Reference Daily Intake (RDI)','2022-08-05 00:23:54','2022-08-04 20:27:00','2022-08-05 00:23:54'),(24,18,'Quantity','100gms','2022-08-05 00:25:22','2022-08-04 20:28:13','2022-08-05 00:25:22'),(25,18,'Calories','61','2022-08-05 00:25:22','2022-08-04 20:28:13','2022-08-05 00:25:22'),(26,18,'Water','88%','2022-08-05 00:25:22','2022-08-04 20:28:13','2022-08-05 00:25:22'),(27,18,'Protein','4.5gms','2022-08-05 00:25:22','2022-08-04 20:28:13','2022-08-05 00:25:22'),(28,18,'Carbs','3.7gms','2022-08-05 00:25:22','2022-08-04 20:28:13','2022-08-05 00:25:22'),(29,19,'Quantity','100gms','2022-08-05 00:26:23','2022-08-04 20:29:33','2022-08-05 00:26:23'),(30,19,'Calories','61gms','2022-08-05 00:26:23','2022-08-04 20:29:33','2022-08-05 00:26:23'),(31,19,'Water','88%','2022-08-05 00:26:23','2022-08-04 20:29:33','2022-08-05 00:26:23'),(32,19,'Protein','3.5gms','2022-08-05 00:26:23','2022-08-04 20:29:33','2022-08-05 00:26:23'),(33,14,'Quantity','1 Cup','2022-08-05 00:38:53','2022-08-05 00:14:22','2022-08-05 00:38:53'),(34,14,'Calories','149','2022-08-05 00:38:53','2022-08-05 00:14:22','2022-08-05 00:38:53'),(35,14,'Protein','8gms','2022-08-05 00:38:53','2022-08-05 00:14:22','2022-08-05 00:38:53'),(36,14,'Fat','8gms','2022-08-05 00:38:53','2022-08-05 00:14:22','2022-08-05 00:38:53'),(37,14,'Fiber','0gm','2022-08-05 00:38:53','2022-08-05 00:14:22','2022-08-05 00:38:53'),(38,14,'Sugar','18gms','2022-08-05 00:38:53','2022-08-05 00:14:22','2022-08-05 00:38:53'),(39,16,'Quantity','1 Ounce','2022-08-05 00:21:10','2022-08-05 00:20:27','2022-08-05 00:21:10'),(40,16,'Calories','120','2022-08-05 00:21:10','2022-08-05 00:20:27','2022-08-05 00:21:10'),(41,16,'Protein','8gms','2022-08-05 00:21:10','2022-08-05 00:20:27','2022-08-05 00:21:10'),(42,16,'Saturated fat','6gms','2022-08-05 00:21:10','2022-08-05 00:20:27','2022-08-05 00:21:10'),(43,16,'Calcium','180mls','2022-08-05 00:21:10','2022-08-05 00:20:27','2022-08-05 00:21:10'),(44,16,'Quantity','1 Ounce',NULL,'2022-08-05 00:21:10','2022-08-05 00:21:10'),(45,16,'Calories','120',NULL,'2022-08-05 00:21:10','2022-08-05 00:21:10'),(46,16,'Protein','8gms',NULL,'2022-08-05 00:21:10','2022-08-05 00:21:10'),(47,16,'Saturated fat','6gms',NULL,'2022-08-05 00:21:10','2022-08-05 00:21:10'),(48,16,'Calcium','180mls',NULL,'2022-08-05 00:21:10','2022-08-05 00:21:10'),(49,17,'Quantity','2 tablespoon','2022-08-05 01:06:02','2022-08-05 00:23:54','2022-08-05 01:06:02'),(50,17,'Calories','400','2022-08-05 01:06:02','2022-08-05 00:23:54','2022-08-05 01:06:02'),(51,17,'Protein','3gms','2022-08-05 01:06:02','2022-08-05 00:23:54','2022-08-05 01:06:02'),(52,17,'Vitamin A','35% of the Reference Daily Intake (RDI)','2022-08-05 01:06:02','2022-08-05 00:23:54','2022-08-05 01:06:02'),(53,17,'Vitamin D','10% of the Reference Daily Intake (RDI)','2022-08-05 01:06:02','2022-08-05 00:23:54','2022-08-05 01:06:02'),(54,18,'Quantity','100gms',NULL,'2022-08-05 00:25:22','2022-08-05 00:25:22'),(55,18,'Calories','61',NULL,'2022-08-05 00:25:22','2022-08-05 00:25:22'),(56,18,'Water','88%',NULL,'2022-08-05 00:25:22','2022-08-05 00:25:22'),(57,18,'Protein','4.5gms',NULL,'2022-08-05 00:25:22','2022-08-05 00:25:22'),(58,18,'Carbs','3.7gms',NULL,'2022-08-05 00:25:22','2022-08-05 00:25:22'),(59,19,'Quantity','100gms','2022-08-05 01:09:54','2022-08-05 00:26:23','2022-08-05 01:09:54'),(60,19,'Calories','61gms','2022-08-05 01:09:54','2022-08-05 00:26:23','2022-08-05 01:09:54'),(61,19,'Water','88%','2022-08-05 01:09:54','2022-08-05 00:26:23','2022-08-05 01:09:54'),(62,19,'Protein','3.5gms','2022-08-05 01:09:54','2022-08-05 00:26:23','2022-08-05 01:09:54'),(63,14,'Quantity','1 Cup',NULL,'2022-08-05 00:38:53','2022-08-05 00:38:53'),(64,14,'Calories','149',NULL,'2022-08-05 00:38:53','2022-08-05 00:38:53'),(65,14,'Protein','8gms',NULL,'2022-08-05 00:38:53','2022-08-05 00:38:53'),(66,14,'Fat','8gms',NULL,'2022-08-05 00:38:53','2022-08-05 00:38:53'),(67,14,'Fiber','0gm',NULL,'2022-08-05 00:38:53','2022-08-05 00:38:53'),(68,14,'Sugar','18gms',NULL,'2022-08-05 00:38:53','2022-08-05 00:38:53'),(69,17,'Quantity','2 tablespoon',NULL,'2022-08-05 01:06:02','2022-08-05 01:06:02'),(70,17,'Calories','400',NULL,'2022-08-05 01:06:02','2022-08-05 01:06:02'),(71,17,'Protein','3gms',NULL,'2022-08-05 01:06:02','2022-08-05 01:06:02'),(72,17,'Vitamin A','35% of the Reference Daily Intake (RDI)',NULL,'2022-08-05 01:06:02','2022-08-05 01:06:02'),(73,17,'Vitamin D','10% of the Reference Daily Intake (RDI)',NULL,'2022-08-05 01:06:02','2022-08-05 01:06:02'),(74,19,'Quantity','100gms',NULL,'2022-08-05 01:09:54','2022-08-05 01:09:54'),(75,19,'Calories','61gms',NULL,'2022-08-05 01:09:54','2022-08-05 01:09:54'),(76,19,'Water','88%',NULL,'2022-08-05 01:09:54','2022-08-05 01:09:54'),(77,19,'Protein','3.5gms',NULL,'2022-08-05 01:09:54','2022-08-05 01:09:54'),(78,2,'Size','Medium',NULL,'2022-08-05 13:57:04','2022-08-05 13:57:04'),(79,2,'Sugar','15gms',NULL,'2022-08-05 13:57:04','2022-08-05 13:57:04'),(80,2,'Protein','1gm',NULL,'2022-08-05 13:57:04','2022-08-05 13:57:04'),(81,1,'Size','Medium','2022-08-05 15:20:40','2022-08-05 14:46:08','2022-08-05 15:20:40'),(82,1,'Sodium','1.7mg','2022-08-05 15:20:40','2022-08-05 14:46:08','2022-08-05 15:20:40'),(83,1,'Pottasium','186mg','2022-08-05 15:20:40','2022-08-05 14:46:08','2022-08-05 15:20:40'),(84,1,'Fat','0.2g','2022-08-05 15:20:40','2022-08-05 14:46:08','2022-08-05 15:20:40'),(85,1,'Size','Medium',NULL,'2022-08-05 15:20:40','2022-08-05 15:20:40'),(86,1,'Sodium','1.7mg',NULL,'2022-08-05 15:20:40','2022-08-05 15:20:40'),(87,1,'Pottasium','186mg',NULL,'2022-08-05 15:20:40','2022-08-05 15:20:40'),(88,1,'Fat','0.2g',NULL,'2022-08-05 15:20:40','2022-08-05 15:20:40'),(89,1,'Flavour','Juicy',NULL,'2022-08-05 15:20:40','2022-08-05 15:20:40');
/*!40000 ALTER TABLE `product_metas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `measure_unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'PROD1','Gala Apple',2.49,'Gala apples are sweet and crisp with pink-orange stripes over a yellow background. They are juicy, fragrant, and best enjoyed raw.','lb','2',NULL,NULL,'2022-08-05 15:15:32'),(2,'PROD2','Banana',0.70,'Bananas are typically 6-10 inches long and have a green peel when unripe. They taste best when the peel turns yellow and is speckled with dark spots.','lb','0',NULL,NULL,'2022-08-05 13:57:04'),(3,'PROD3','Strawberry',4.49,'Strawberries vary in colour, shape, and size but their flavour is distinctively sweet. They are topped with a hull of green leaves and are speckled with seeds on the surface.','lb','4',NULL,NULL,'2022-08-04 20:30:35'),(4,'PROD4','English Cucumber',1.49,'English (or hothouse) cucumbers are cylindrical green-skinned fruit with a crisp white flesh and edible seeds. English cucumbers are typically enjoyed raw and can be peeled or eaten with the skin on.','lb','0',NULL,NULL,'2022-08-04 20:30:42'),(5,'PROD5','Celery Stalks',2.99,'Celery has a cluster of pale green leaved ribs surrounding a heart (inner ribs). Trimmed celery leaves can be used as a garnish or added to a mixed greens salad.','lb','10',NULL,NULL,'2022-08-04 20:32:11'),(6,'PROD6','Yellow Onions',2.49,'It is higher in sulfur content than the white onion, which gives it a stronger, more complex flavor.','lb','3',NULL,NULL,'2022-08-04 20:30:49'),(7,'PROD7','Tomato Vine',2.33,'Tomatoes are excellent when used fresh in salads, but they can also be roasted or used in many tomato-based recipes.','lb','-1',NULL,NULL,'2022-08-05 02:51:40'),(8,'PROD8','Lettuce Iceberg',1.79,'Iceberg (or crisphead) lettuce is a round, tightly-packed head of pale green leaves. It has a crisp texture and a mild flavour and is mainly used fresh.','lb','3',NULL,NULL,'2022-08-04 20:31:13'),(9,'PROD9','Lemon',0.99,'Lemons have a bright yellow peel and can vary in size depending on the variety. This citrus fruit produces a tart, acidic juice that will add flavour to your salad dressings, beverages, and marinades.','lb','3',NULL,NULL,'2022-08-04 20:31:28'),(10,'PROD10','Couliflower',3.99,'Cauliflower is a cruciferous vegetable that comes in a tight cluster of florets surrounded by crisp green leaves. It is normally white but also comes in green, purple, and orange.','lb','3',NULL,NULL,'2022-08-04 20:31:39'),(11,'PROD11','Broccoli',1.99,'Broccoli is a cruciferous vegetable that comes in a tight cluster of florets on top of firm, edible stalks. It is deep green in colour.','lb','3',NULL,NULL,'2022-08-05 00:17:07'),(12,'PROD12','Cantaloupe',3.99,'Cantaloupes have a greyish-beige skin with a raised netting overtop. The flesh is pale orange, juicy, and sweet. When ripe, cantaloupes are fragrant and yield to pressure at the blossom end.','lbs','3',NULL,NULL,NULL),(13,'PROD13','Red Pepper',3.49,'Red bell peppers start with green skin but are left to ripen longer, giving them their bright red skin and sweet, fruity flavor.','lb','23',NULL,NULL,'2022-08-05 00:19:18'),(14,'PROD14','Milk',1.00,'Milk has been subjected to at least one heat treatment and has a content of fat of at least 1.5% to a maximum of 2%. With 2% milk fat, it is possible to reduce fat intake while preserving whole milk flavour.','lt','105',NULL,NULL,NULL),(15,'PROD15','Butter',4.99,'Butter is the solid mass resulting from churning freshly separated, pasteurized cream. Product shall be smooth textured with a solid body.','lb','43',NULL,NULL,'2022-08-05 00:17:22'),(16,'PROD16','Cheese',4.99,'This mouth-watering blend of shredded old, medium and mild Cheddar cheeses saves you much needed time in the kitchen.','lb','93',NULL,NULL,'2022-08-05 00:21:10'),(17,'PROD17','Whipped Cream',4.19,'Light and fluffy Whipped Cream, perfect for any dessert.','lb','205',NULL,NULL,'2022-08-05 00:23:54'),(18,'PROD18','Yogurt',2.77,'6% M.F. traditional set style yogourt.','lb','215',NULL,NULL,'2022-08-05 00:25:22'),(19,'PROD19','Flavour Yogurt 4PK',5.49,'Strawberry and Vanilla, two exquisite flavours available in one convenient 4 x 250g format.','lb','15',NULL,NULL,'2022-08-05 01:09:54'),(20,'PROD20','Milk Chocolate',1.99,'The classic, creamy taste of Milk Chocolate.100% sustainably sourced cocoa.','lb','24',NULL,NULL,'2022-08-05 00:27:12'),(21,'PROD21','Cream Cheese',2.49,'Cream cheese is the perfect spread on a bagel in the morning.','lb','95',NULL,NULL,'2022-08-05 00:28:18'),(22,'PROD22','Egg White 12 Pk',4.19,'Eggs range in size (extra-large, large, medium, etc.) and their shells are either white or brown, depending on the breed of the hen.','lb','200',NULL,NULL,'2022-08-05 00:29:17'),(23,'PROD23','Egg Brown 12 Pk',4.99,'Eggs range in size (extra-large, large, medium, etc.) and their shells are either white or brown, depending on the breed of the hen.','lb','265',NULL,NULL,'2022-08-05 00:30:14'),(24,'PROD24','Sweet Green Pepper',2.49,'Green bell peppers have a bright green skin and mild, sweet flavour. Their flesh is crisp and juicy, perfect for enjoying raw with dips or hummus.','lb','221',NULL,NULL,'2022-08-05 00:31:02'),(25,'PROD25','Zucchini',1.49,'Zucchini are summer squash with dark to light green skin, white flesh, and tiny edible seeds. They have a delicate flavour and can be eaten raw or cooked in a variety of ways.','lb','201',NULL,NULL,'2022-08-05 00:31:50'),(26,'PROD26','Green Grapes',3.99,'Green grapes range in colour from pale green to amber yellow and are considered white grape varieties.','lbs','101',NULL,NULL,NULL),(27,'PROD27','Red Grapes',3.99,'Red grapes, such as the popular Flame and Ruby varieties, should be plump and firmly attached to green stems.','lb','111',NULL,NULL,'2022-08-04 20:42:06'),(28,'PROD28','Sweet Potato',1.79,'Sweet potatoes have a thick dark orange skin and sweet orange flesh. Yams are similar in size and shape but are not related to the sweet potato at all.','lb','8',NULL,NULL,'2022-08-05 02:09:07'),(29,'PROD29','Raspberry',4.49,'Raspberries are delicate fruit with bright red drupelets that connect to each other around a hollow central core. Their flavour is sweet but can also be tart if they aren’t quite ripe.','lb','85',NULL,NULL,'2022-08-05 00:03:29'),(30,'PROD30','Cilantro',0.99,'Cilantro is the bunched leafy green from the coriander plant. It has a distinctive flavour and fragrance that some describe as “soapy”.','lb','100',NULL,NULL,'2022-08-04 20:40:08'),(31,'PROD31','Blueberry',3.99,'Blueberries range in colour from a deep purple-blue to a blue-black, both with a silvery sheen called bloom.','lb','100',NULL,NULL,'2022-08-04 20:34:24'),(32,'PROD32','Limes',2.99,'Limes are shaped like lemons but a little smaller in size. They have green skin and their green pulp produces a tart, aromatic juice that is used in everything from dressings to desserts.','lb','100',NULL,NULL,'2022-08-04 20:33:04'),(33,'PROD33','Potato',1.29,'Potatoes have a rough brown skin and a tender white flesh with a mild flavour. They are a popular variety of potato and a good choice for baking, mashing, and frying.','lb','100',NULL,NULL,'2022-08-04 20:32:47'),(34,'PROD34','Asparagus',6.49,'Asparagus stalks range in colour from green to purple, with dark green or purplish tips.','lbs','100',NULL,NULL,NULL),(35,'PROD35','Avocados',8.99,'Avocados have a pebbly skin that turns from dark green to near black when ripe. Cut lengthwise, twist to separate the halves, and scoop out the creamy.','lb','100',NULL,NULL,'2022-08-04 20:31:59'),(36,'PROD36','Pineapples',1.99,'Pineapples have a diamond-patterned skin that resembles a pinecone with crisp, green leaves shooting out the top.','lb','100',NULL,NULL,'2022-08-05 00:52:37'),(37,'PROD37','Ginger',0.99,'Ginger (or gingerroot) has a tough tan skin and a fresh spicy fragrance. Ginger can be grated, slivered, or ground and its peppery flavour is used in a variety of dishes.','lbs','97',NULL,NULL,'2022-08-05 02:09:07'),(38,'PROD38','Pears',2.49,'Bartlett pears are bell shaped with smooth yellowish-green skin, often with a hint of red. They are sweet and juicy, the perfect choice for eating fresh as a snack.','lb','100',NULL,NULL,'2022-08-05 00:55:06'),(39,'PROD39','Garlic',2.49,'Garlic is the small, white, round bulb of a plant that is related to the onion plant.','lb','100',NULL,NULL,'2022-08-04 20:30:21'),(40,'PROD40','Apricot',2.49,'Apricots are related to peaches and have smooth skin that ranges in colour from bright yellow to deep orange.','lbs','100',NULL,NULL,'2022-08-05 01:10:09'),(41,'PROD41','Mango',4.49,'Mangoes have a firm, fibrous orange flesh and sweet flavour.','lbs','100',NULL,NULL,NULL),(42,'PROD42','Kiwi',2.99,'Kiwi is a fruit of ovoid shape, of variable size and covered with a brown fuzzy thin skin.','lbs','100',NULL,NULL,NULL),(43,'PROD43','Jalapeno',1.99,'Jalapeno peppers are slightly rounded chilies with smooth green skin that turns red when ripe. Jalapenos are popular because of their flavour and because they are easy to seed.','lb','100',NULL,NULL,'2022-08-05 01:00:25'),(44,'PROD44','Grapefruit',3.99,'Grapefruit is a juicy citrus fruit with yellow skin that sometimes has a pinkish hue. Grapefruits that feel heavy for their size will likely be the juiciest.','lb','100',NULL,NULL,'2022-08-05 00:36:19'),(45,'PROD45','Greenbeans',1.39,'Greenbeans hearts are the pale green, tender inner ribs of celery. Enjoy celery hearts on their own or with dip as a snack, or chop for soups, stews, or a flavourful tuna salad sandwich.','lb','100',NULL,NULL,'2022-08-05 00:35:16'),(46,'PROD46','Plum',3.99,'Plums are available in a wide range of colours including black, yellow, and red. Their flavour also ranges from very sweet to tart, and they can be enjoyed cooked or raw.','lb','100',NULL,NULL,'2022-08-05 00:04:55'),(47,'PROD47','Peach',2.99,'Peaches range in colour from pinkish-white to reddish-yellow and their flavour can be tart or sweet.','lb','100',NULL,NULL,'2022-08-05 00:06:46'),(48,'PROD48','Orange',2.49,'The orange is usually round or oval citrus; its rind and flesh are generally orange, except the varieties of red pulp.','lb','100',NULL,NULL,'2022-08-05 00:08:41'),(49,'PROD49','Cherry',5.19,'Cherries are firm, juicy, and sweet and turn from dark red to almost black when fully ripe.','lb','100',NULL,NULL,'2022-08-05 00:11:26'),(50,'PROD50','Carrot',2.29,'Carrots are long and slender and come in a variety of colours in addition to orange. This popular vegetable is available all year and can be eaten raw or cooked in many ways.','lb','100',NULL,NULL,'2022-08-05 00:12:19'),(51,'pr0d3','pravindra',12.00,'asdasdadasda','lb','5','2022-08-05 01:32:06','2022-08-05 01:30:47','2022-08-05 01:32:06'),(52,'pr0d3','eggiii',12.00,'This is white eggii','lb','3','2022-08-05 01:57:25','2022-08-05 01:56:46','2022-08-05 01:57:25'),(53,'pr0d3','myegg',12.00,'thi is bestest egg','lb','3','2022-08-05 14:03:34','2022-08-05 14:03:22','2022-08-05 14:03:34');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reviews` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `product_id` bigint NOT NULL,
  `review` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` VALUES (1,3,1,'Very bad experience !!',2,0,NULL,NULL,'2022-08-05 03:03:13'),(2,2,1,'Perfect to get everyting at once!',5,1,NULL,NULL,'2022-08-05 14:51:31'),(3,3,2,'Delievered on time! Everything was fresh!',4,1,NULL,NULL,'2022-08-05 15:08:44'),(4,2,3,'Overriped strwberries!',4,1,NULL,NULL,NULL),(5,3,4,'Sweet cucumbers!',4,1,NULL,NULL,NULL),(6,4,4,'Bad experiene with deleivery',2,1,NULL,NULL,NULL),(7,5,4,'I had an amazing experience.',5,1,NULL,NULL,NULL),(8,5,4,'Disappointed!!',1,1,NULL,NULL,NULL),(9,5,4,'Good Quality',2,1,NULL,NULL,NULL),(10,5,4,'Wonderfull!',5,1,NULL,NULL,NULL),(11,6,4,'nice!',5,1,NULL,NULL,NULL),(12,1,1,'Nice',4,1,NULL,'2022-08-05 02:34:11','2022-08-05 02:34:11'),(13,1,35,'Nice',3,1,NULL,'2022-08-05 02:43:50','2022-08-05 02:43:50'),(14,1,1,'this is amazing produ=uct',1,1,NULL,'2022-08-05 15:11:53','2022-08-05 15:11:53');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transactions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint NOT NULL,
  `cc_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `response` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` VALUES (1,1,'xxxx-xxxx-xxxx-1234','1','Successful','Order Placed',NULL,'2022-03-17 10:30:34',NULL),(2,2,'xxxx-xxxx-xxxx-3432','2','Successful','Order Placed',NULL,'2021-08-17 10:30:34',NULL),(3,3,'xxxx-xxxx-xxxx-3432','3','Successful','Order Placed',NULL,'2022-02-17 10:30:34',NULL),(4,4,'xxxx-xxxx-xxxx-3432','3','Successful','Order Placed',NULL,'2022-02-17 10:30:34',NULL),(5,5,'xxxx-xxxx-xxxx-3432','3','Successful','Order Placed',NULL,'2022-02-01 10:30:34',NULL),(6,6,'xxxx-xxxx-xxxx-3432','3','Successful','Order Placed',NULL,'2021-09-01 10:30:34',NULL),(7,7,'xxxx-xxxx-xxxx-3432','3','Successful','Order Placed',NULL,'2022-06-01 10:30:34',NULL),(8,8,'xxxx-xxxx-xxxx-3432','3','Successful','Order Placed',NULL,'2022-06-01 10:30:34',NULL),(9,9,'xxxx-xxxx-xxxx-3432','3','Successful','Order Placed',NULL,'2022-06-01 10:30:34',NULL),(10,10,'xxxx-xxxx-xxxx-3432','3','Successful','Order Placed',NULL,'2022-04-01 10:30:34',NULL),(11,11,'xxxx-xxxx-xxxx-3432','3','Successful','Order Placed',NULL,'2022-04-01 10:30:34',NULL),(12,12,'xxxx-xxxx-xxxx-3432','3','Successful','Order Placed',NULL,'2022-04-01 10:30:34',NULL),(13,13,'xxxx-xxxx-xxxx-3432','3','Successful','Order Placed',NULL,'2022-04-01 10:30:34',NULL),(14,14,'xxxx-xxxx-xxxx-3432','3','Successful','Order Placed',NULL,'2022-04-01 10:30:34',NULL),(15,15,'xxxx-xxxx-xxxx-3432','3','Successful','Order Placed',NULL,'2022-04-01 10:30:34',NULL),(16,16,'xxxx-xxxx-xxxx-3432','3','Successful','Order Placed',NULL,'2022-04-01 10:30:34',NULL),(17,27,'xxxx-xxxx-xxxx-3432','3','Successful','Order Placed',NULL,'2022-04-01 10:30:34',NULL),(18,30,'xxxx-xxxx-xxxx-3432','3','Successful','Order Placed',NULL,'2022-04-01 10:30:34',NULL),(19,33,'xxxx-xxxx-xxxx-3432','3','Successful','Order Placed',NULL,'2022-04-01 10:30:34',NULL),(20,40,'xxxx-xxxx-xxxx-3432','3','Successful','Order Placed',NULL,'2022-04-01 10:30:34',NULL),(21,45,'xxxx-xxxx-xxxx-3432','3','Successful','Order Placed',NULL,'2022-04-01 10:30:34',NULL),(22,21,'1111','14228','ok','{\"ref_number\":21,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2022-14228\",\"errors\":[],\"trans_id\":14228}}',NULL,'2022-08-04 18:45:49','2022-08-04 18:45:49'),(23,22,'1111','14239','ok','{\"ref_number\":22,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2022-14239\",\"errors\":[],\"trans_id\":14239}}',NULL,'2022-08-05 02:09:07','2022-08-05 02:09:07'),(24,23,'1111','14249','ok','{\"ref_number\":23,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2022-14249\",\"errors\":[],\"trans_id\":14249}}',NULL,'2022-08-05 02:51:38','2022-08-05 02:51:38'),(25,24,'1111','14269','ok','{\"ref_number\":24,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2022-14269\",\"errors\":[],\"trans_id\":14269}}',NULL,'2022-08-05 14:32:05','2022-08-05 14:32:05'),(26,25,'1111','14272','ok','{\"ref_number\":25,\"result_code\":\"ok\",\"result_message\":\"Connection successful\",\"transaction_response\":{\"response_code\":\"1\",\"auth_code\":\"2022-14272\",\"errors\":[],\"trans_id\":14272}}',NULL,'2022-08-05 15:15:31','2022-08-05 15:15:31');
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `is_subscribed` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','Team1','ecom.farmfresh@gmail.com',NULL,'$2y$10$50yOdr6s/JI.nSham2CNI.PH7XLZuwZw5bUM3by7bTr6WJsmWpVX6',1,0,1,NULL,NULL,NULL,NULL),(2,'Silk','Doe','silk@gmail.com',NULL,'$2y$10$TY.tMdiUPzSVe2rlD7JrM.A.xO8audVT2PLiq5Jssi.nxE6JI58Xa',0,0,1,NULL,NULL,NULL,NULL),(3,'Jhon','Davie','jhon@gmail.com',NULL,'$2y$10$Qkn1BPjz5icw88U62KWR7eA3hz3PXg7Bx878PEoMu1PfXkO8fh5e6',0,0,1,NULL,NULL,NULL,NULL),(4,'Mike','Rollie','mike@gmail.com',NULL,'$2y$10$W2wK289sEulTak3wdaZVguYv8LwqvZZ/6qzkER/cG8SfVbcRX7UQa',0,0,1,NULL,NULL,NULL,NULL),(5,'Shawn','merrelle','shawn@gmail.com',NULL,'$2y$10$R2nFBgQhRnJ9m6hBMyBwqeyUZC64eVwWxgoGnH4UvwgfWJ7FbI2PK',0,0,1,NULL,NULL,NULL,NULL),(6,'Narendra','Modi','narendra@gmail.com',NULL,'$2y$10$7EqaTrdIEbwDG6uYNUGi4u4JtqOWSOb9Dvl5Nwi8nqsxGTuJfW2Lm',0,0,1,NULL,NULL,NULL,NULL),(7,'Marry','Kom','marry@gmail.com',NULL,'$2y$10$BPQgE57ZC8cAdPx5tqUSY..SBXgOc74fXrCDFoDLstWypIm6HXLf.',0,0,1,NULL,NULL,NULL,NULL),(8,'Cyber','Crime','cyber@gmail.com',NULL,'$2y$10$KI8w33uzxfpEkWEFRQQEPu9D7ojXUsSwdkV4CjGzZSMu38g0v9NXK',0,0,1,NULL,NULL,NULL,NULL),(9,'Honey','Bee','honey@gmail.com',NULL,'$2y$10$QIl/4Y3GY0M.QcxobLQp6ee9iM2a6S.d0Lzz5pLfzxSGtlYqTu9rK',0,0,1,NULL,NULL,NULL,NULL),(10,'Dhara','Patel','dhara@gmail.com',NULL,'$2y$10$DIAv0djRrKfdilMPLM4gnuyCSXIcxaiizharfvmkJwycYOLOO3O7.',0,0,1,NULL,NULL,NULL,'2022-08-05 03:58:11'),(11,'Sargam','Sanghani','sargam@gmail.com',NULL,'$2y$10$SXfYYrJBEnTvuZyX1arDIuK95DqGYGaqGvLWrYIWzUwZhlFyIXtMa',0,0,1,NULL,NULL,NULL,NULL),(12,'Pulkit','Bardwaj','pulkit@gmail.com',NULL,'$2y$10$GqMrA7fcUzWetJxBdMoQaeoLhmC8hGcwagtgjdDIm516DGSqftuO.',0,0,1,NULL,NULL,NULL,NULL),(13,'Pravindra','Singh','pravindra@gmail.com',NULL,'$2y$10$AI9voRP.nD1GI8McjkFXnu0.TTOjz90iOT49y16Y5kdrc310eE8pS',0,0,1,NULL,NULL,NULL,NULL),(14,'Harry','Singh','harry@gmail.com',NULL,'$2y$10$IltN9ohcxCymUVU/yW6.HuO7o9Oe89TcXlVdBLAWv4NBTqOiR06dq',0,0,1,NULL,NULL,NULL,'2022-08-05 04:02:21'),(15,'Bakhshish','Singh','bakhshish@gmail.com',NULL,'$2y$10$WiEx3NtJA4d3S.pp7CDWfOE1Sd40UJhVYzhV45bOZq.wScCSjEJKO',0,0,1,NULL,NULL,NULL,NULL),(16,'Mishti','Patel','mishti@uwpace.com',NULL,'$2y$10$GLzcCgqz2E1K1iNjVVTDe.33m875ynbZqEPKNJawru8bIcGpjJ0Xu',0,0,1,NULL,NULL,'2022-08-05 00:06:47','2022-08-05 00:06:47'),(17,'Mishti','Patel','dhara199013@gmail.com',NULL,'$2y$10$V6JsNfRUOw63EvvJtmGztuBSOCfE1RLRjhtgFRDGqXhy3sObg0s9m',0,0,1,NULL,NULL,'2022-08-05 00:07:38','2022-08-05 14:50:16'),(18,'Jhon','Merry','jhaon@gmail.com',NULL,'$2y$10$y4wlEtQe./Xm9QNBLe7e2.WocauBf8fl66ulAr0kPV6Kt53qZoiMK',0,0,1,NULL,NULL,'2022-08-05 14:57:49','2022-08-05 15:08:32');
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

-- Dump completed on 2022-08-05 17:22:55
