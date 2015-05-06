-- MySQL dump 10.13  Distrib 5.6.19, for osx10.7 (i386)
--
-- Host: 127.0.0.1    Database: ecommerce
-- ------------------------------------------------------
-- Server version	5.5.38

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
-- Table structure for table `albums`
--

DROP TABLE IF EXISTS `albums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `artist` varchar(45) DEFAULT NULL,
  `genre` varchar(45) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albums`
--

LOCK TABLES `albums` WRITE;
/*!40000 ALTER TABLE `albums` DISABLE KEYS */;
INSERT INTO `albums` VALUES (1,'Unapologetic','Rihanna','hip-hop','Unapologetic is the seventh studio album by Barbadian recording artist Rihanna, released on November 19, 2012, by Def Jam Recordings. The album was recorded between June and November 2012, during promotion of her sixth studio album, Talk That Talk (2011).','19.99','http://userserve-ak.last.fm/serve/300x300/88046159.png',NULL,NULL),(2,'Loud','Rihanna','hip-hop','Loud is the fifth studio album by Barbadian recording artist Rihanna, first released on November 12, 2010 by Def Jam Recordings. The album was recorded between February and August 2010, predominantly during Rihanna’s Last Girl on Earth Tour and filming fo','24.99','http://userserve-ak.last.fm/serve/500/88146101/Loud.png',NULL,NULL),(3,'Parachutes','Coldplay','rock','Parachutes is the Grammy award-winning debut album by English rock band Coldplay, released on July 10, 2000 in the UK and on November 7 in the U.S… Parachutes quickly shot to number one in the United Kingdom, staying in the top ten for thirty-three weeks.','18.99','http://userserve-ak.last.fm/serve/500/100107463/Parachutes.png',NULL,NULL),(4,'Mylo Xyloto','Coldplay','rock','Mylo Xyloto (pronounced /ˈmaɪloʊ ˈzaɪlətoʊ/) is the fifth studio album by English alternative rock band Coldplay, which was released on 24 October 2011.','19.99','http://userserve-ak.last.fm/serve/500/88588967/Mylo+Xyloto.png',NULL,NULL),(5,'Don\'t','Ed Sheeran','pop','We don\'t have a description for this album','17.99','http://userserve-ak.last.fm/serve/500/100427361/Dont+Ed+Sheeran.png',NULL,NULL),(6,'V','Maroon 5','pop rock','We don\'t have a description for this album','18.99','http://userserve-ak.last.fm/serve/500/100240805/V.png',NULL,NULL),(7,'Overexposed','Maroon 5','pop rock','Overexposed is the fourth studio album by the American pop rock band Maroon 5. The album was recorded between 2011 and 2012 and was driven after the moderate success of their third album Hands All Over (2010) and later by the successful re-release single ','18.99','http://userserve-ak.last.fm/serve/500/98970721/Overexposed.png',NULL,NULL),(8,'1000 Forms of Fear','Sia','electronic','1000 Forms of Fear is the sixth studio album by Australian singer-songwriter Sia Furler, which comes after a wait of 4 years succeeding 2010’s We Are Born. The album was released on July 4, 2014 & Chandelier, served as the album’s lead single. On June 2, ','17.99','http://userserve-ak.last.fm/serve/_/103669447/1000+Forms+of+Fear++PNG.png',NULL,NULL),(9,'Halcyon Days','Ellie Golding','electronic','We don\'t have a description for this album','16.99','http://userserve-ak.last.fm/serve/500/91777855/Halcyon+Days.png',NULL,NULL),(10,'Burn','Ellie Golding','electronic','Burn” is a song by English recording artist Ellie Goulding from Halcyon Days (2013), the reissue of her second studio album, Halcyon (2012). The song was written by Ryan Tedder, Goulding, Greg Kurstin, Noel Zancanella and Brent Kutzle, while production wa','16.99','http://userserve-ak.last.fm/serve/500/91234909/Burn+PNG.png',NULL,NULL);
/*!40000 ALTER TABLE `albums` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `album_id` int(11) DEFAULT NULL,
  `image` varchar(155) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `album_id` int(11) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `total_price` decimal(10,0) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin_status` tinyint(1) DEFAULT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2015-05-05 21:28:49
