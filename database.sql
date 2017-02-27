-- MySQL dump 10.13  Distrib 5.5.53, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: ansville
-- ------------------------------------------------------
-- Server version	5.5.53-0ubuntu0.14.04.1

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
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `postID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `comment` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,1,1,'I don\'t know man the are always acting crazy. ignoring them help tho.','2017-01-16 02:49:21','2017-01-16 02:49:21'),(2,1,1,'You have to understand them tho because they think differently.','2017-01-16 02:51:02','2017-01-16 02:51:02'),(3,1,1,'I suggest to ignore them man.','2017-01-16 02:54:27','2017-01-16 02:54:27'),(9,2,1,'This is fun let me say more.','2017-01-17 04:28:59','2017-01-17 04:28:59'),(10,3,1,'Yeahhh','2017-01-18 03:27:06','2017-01-18 03:27:06'),(11,6,1,'hellooo yoo','2017-01-21 17:57:49','2017-01-21 17:57:49'),(13,7,1,'helloooo','2017-01-22 06:05:47','2017-01-22 06:05:47'),(14,7,1,'hello yo','2017-01-22 06:26:14','2017-01-22 06:26:14'),(15,7,1,'fdsfsg fed','2017-01-22 06:40:30','2017-01-22 06:40:30'),(16,7,1,'testing','2017-01-22 06:45:19','2017-01-22 06:45:19'),(17,7,1,'Another one','2017-01-22 06:46:33','2017-01-22 06:46:33'),(18,7,1,'hgfdvv','2017-01-22 06:47:56','2017-01-22 06:47:56'),(19,7,1,'gdfsfdf gffgggf','2017-01-22 06:49:09','2017-01-22 06:49:09'),(20,7,1,'This better work son','2017-01-22 06:54:52','2017-01-22 06:54:52'),(21,7,1,'ok','2017-01-22 06:55:52','2017-01-22 06:55:52'),(22,7,1,'thhh','2017-01-22 06:56:54','2017-01-22 06:56:54'),(23,7,1,'uff','2017-01-22 06:58:16','2017-01-22 06:58:16'),(24,7,1,'cvbnm','2017-01-22 07:02:42','2017-01-22 07:02:42'),(25,7,1,'dddd','2017-01-22 07:14:38','2017-01-22 07:14:38'),(26,7,1,'sdfghjkmm  j','2017-01-22 07:16:24','2017-01-22 07:16:24'),(27,7,1,'mmm','2017-01-22 07:20:44','2017-01-22 07:20:44'),(28,7,1,'jjjj jjjj jjjkk ','2017-01-22 07:27:52','2017-01-22 07:27:52'),(29,2,1,'jjjnn too ','2017-01-22 07:28:28','2017-01-22 07:28:28'),(30,2,1,'jjjj hhh ','2017-01-22 07:29:49','2017-01-22 07:29:49'),(32,2,1,'jhgfd','2017-01-22 07:38:38','2017-01-22 07:38:38'),(33,2,1,'jhgfd','2017-01-22 07:39:05','2017-01-22 07:39:05'),(35,8,1,'nnnnn  mmmmml kk','2017-01-22 07:59:46','2017-01-22 07:59:46'),(36,8,1,'cccccc vv','2017-01-22 08:09:40','2017-01-22 08:09:40'),(37,8,1,'cccc vvv','2017-01-22 08:12:49','2017-01-22 08:12:49'),(38,8,1,'ddsdds sad','2017-01-22 08:19:46','2017-01-22 08:19:46'),(39,8,1,'dads','2017-01-22 08:20:26','2017-01-22 08:20:26'),(45,2,1,'vvcxvxc','2017-01-22 08:27:13','2017-01-22 08:27:13'),(47,2,1,'dffdfd fdfdd','2017-01-22 08:34:02','2017-01-22 08:34:02'),(48,2,1,'dffdfd fdfdd','2017-01-22 08:34:07','2017-01-22 08:34:07'),(49,2,1,'nnnnn bb','2017-01-22 08:34:21','2017-01-22 08:34:21'),(50,2,1,'nnnnn bb','2017-01-22 08:39:30','2017-01-22 08:39:30'),(51,2,1,'nnn','2017-01-22 08:39:43','2017-01-22 08:39:43'),(52,2,1,'nnn','2017-01-22 08:41:31','2017-01-22 08:41:31'),(53,2,1,'nnn','2017-01-22 08:42:04','2017-01-22 08:42:04'),(54,2,1,'cc','2017-01-22 08:47:31','2017-01-22 08:47:31'),(55,2,1,'  xxxxx cccc ','2017-01-22 08:50:05','2017-01-22 08:50:05'),(56,2,1,'  xxxxx cccc ','2017-01-22 08:51:36','2017-01-22 08:51:36'),(58,8,1,'bonn jjj ','2017-01-22 16:56:23','2017-01-22 16:56:23'),(59,8,1,'bonn jjj ','2017-01-22 16:57:19','2017-01-22 16:57:19'),(60,8,1,'nnnm mm','2017-01-22 16:59:08','2017-01-22 16:59:08'),(61,8,1,'nnnm mm','2017-01-22 17:12:17','2017-01-22 17:12:17'),(62,8,1,'nab ban ','2017-01-22 17:12:31','2017-01-22 17:12:31'),(63,8,1,'nab ban ','2017-01-22 17:12:52','2017-01-22 17:12:52'),(64,8,1,'nab ban ','2017-01-22 17:13:11','2017-01-22 17:13:11'),(65,2,1,'xxx','2017-01-22 17:34:07','2017-01-22 17:34:07'),(66,8,1,'sssd cccc dwww','2017-01-22 17:36:08','2017-01-22 17:36:08'),(67,8,1,'ccc cc','2017-01-22 17:39:01','2017-01-22 17:39:01'),(68,8,1,'ggggggf g','2017-01-22 17:45:47','2017-01-22 17:45:47'),(69,4,1,'ddddd foggy fffd ','2017-01-22 17:55:13','2017-01-22 17:55:13'),(70,2,1,'ccc fffggg ','2017-01-22 17:59:00','2017-01-22 17:59:00'),(71,2,1,'huh nnn mm','2017-01-22 19:26:23','2017-01-22 19:26:23'),(72,2,1,'huh nnn mm','2017-01-22 19:29:34','2017-01-22 19:29:34'),(73,2,1,'NNNNBBB BBBVVBB','2017-01-22 19:36:06','2017-01-22 19:36:06'),(74,2,1,'hhhh  nnnnnnnnnn njkkkkk','2017-01-22 20:04:38','2017-01-22 20:04:38'),(75,2,1,'hhh bbbbb mmmm ','2017-01-22 20:10:03','2017-01-22 20:10:03'),(76,6,1,'xxx vvv','2017-01-23 03:52:52','2017-01-23 03:52:52'),(77,9,1,'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.','2017-01-23 21:28:57','2017-01-23 21:28:57'),(78,9,1,'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae\r\n\r\n\r\n vitae dicta sunt explicabo. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.\r\n','2017-01-23 21:39:45','2017-01-23 21:39:45'),(79,10,1,'hjjdkjkjd nkmjdjkjdj ','2017-01-23 22:29:35','2017-01-23 22:29:35'),(80,9,5,'Here is something cool I love doing.','2017-01-26 20:30:54','2017-01-26 20:30:54');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2014_10_12_000000_create_users_table',1),(4,'2014_10_12_100000_create_password_resets_table',1),(5,'2017_01_15_030314_create_post_table',2),(6,'2017_01_15_030430_create_comment_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('segzo810@gmail.com','abc2105169016adce5f0a74e33cbfc6600b2c54363b1ea0ca759476a6d9b4924','2017-01-26 16:51:30');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `likeCount` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,1,'Women','Why are women so hard to deal with. I really don\'t know what is wrong with them it is crazy.',NULL,'2017-01-15 05:44:02','2017-01-15 05:44:02'),(2,2,'Nothing','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,',NULL,'2017-01-17 04:16:19','2017-01-17 04:16:19'),(3,1,'My First',' depends on the school, how much money they have in the budget for food, if they grow their own veggies - some schools do - and who cooks the food. Generally speaking, homemade food at home tastes better, unless you\'re a terrible cook or it\'s not a househ',NULL,'2017-01-18 03:24:02','2017-01-18 03:24:02'),(4,1,'The Internet','The Internet is a huge resource of knowledge and information where you can find virtually anything. But, very often there are situations where you aren’t able to find the answers to your questions.  Your question may require local knowledge or particular ',NULL,'2017-01-18 03:28:33','2017-01-18 03:28:33'),(5,1,'Who is Lorem Ipsum?','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',NULL,'2017-01-21 17:37:37','2017-01-21 17:41:42'),(6,1,'What is Lorem Ipsum?','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ',NULL,'2017-01-21 17:38:32','2017-01-21 17:38:32'),(7,1,'Yo','Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical .\r\n\r\npassage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes.',NULL,'2017-01-22 03:33:10','2017-01-26 16:25:05'),(8,1,'ugh','gj   jjjjjjjnnnnmm bbbbbbb uuuk,,m but',NULL,'2017-01-22 07:55:56','2017-01-22 07:55:56'),(9,1,'Testing ','Here we go again yo ',NULL,'2017-01-23 04:33:03','2017-01-23 04:33:03'),(10,3,'hey','yahooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooon nnnnnnnnnnnnnnnnn jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj ggggggggggggggg\r\n \r\nggggggggggggggggg',NULL,'2017-01-26 20:20:14','2017-01-26 20:20:14'),(11,4,'Serigne ','Testing for something really important..\r\n\r\nHere we go boy.',NULL,'2017-01-26 20:24:55','2017-01-26 20:24:55');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Selo810','loserigne810@gmail.com','$2y$10$myMzJyQb2MIKs68FUzaXLumqgfjp.jIrPB8LXmiZAVRnbtTuWIJDC','Y6gTJ52JgPqg7dY0jNwR4ksWpA0xrMOVU8fI3piOcPhkV0tepoQOTQPbu9Y6','2017-01-21 04:27:06','2017-01-27 01:50:46'),(2,0,'Segzo810','segzo810@gmail.com','$2y$10$pobNqMDcqlxvaqSRe6PqtuFVMOD0b4Rmdl0UMCS13Enfx6K81zE6u','hzrivLUB4HazmdJI8xaHt6AvDLg3plhibiEmAUK0n6ewF0wIsyvb48hrPJB0','2017-01-21 04:28:30','2017-01-26 17:52:59');
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

-- Dump completed on 2017-01-28  0:15:02
