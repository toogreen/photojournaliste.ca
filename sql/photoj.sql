-- MySQL dump 10.11
--
-- Host: localhost    Database: photoj
-- ------------------------------------------------------
-- Server version	5.0.83-1

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
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog` (
  `id` int(11) NOT NULL default '0',
  `date` varchar(255) NOT NULL default '',
  `time` varchar(255) NOT NULL default '',
  `text` longtext NOT NULL,
  `poster` varchar(255) NOT NULL default '',
  `comments` varchar(255) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` VALUES (3,'Wednesday 05th of May 2004','10:01:45 AM','test 123e42r2','Phil',''),(4,'Wednesday 05th of May 2004','10:01:45 AM','prout.','DAvid','');
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_comments`
--

DROP TABLE IF EXISTS `blog_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_comments` (
  `id` int(11) NOT NULL default '0',
  `blog_id` int(11) NOT NULL default '0',
  `name` varchar(32) NOT NULL default '',
  `email` varchar(56) NOT NULL default '',
  `url` varchar(92) NOT NULL default '',
  `comment` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_comments`
--

LOCK TABLES `blog_comments` WRITE;
/*!40000 ALTER TABLE `blog_comments` DISABLE KEYS */;
INSERT INTO `blog_comments` VALUES (1,1,'David Gagnon','toogreen@hotmail.com','http://24.203.190.4:99/','Your site rocks man!!!!'),(2,1,'Joe bine','joebine@hotmail.com','joebine.com','joebine seasdofi jaoisjoisadj oasdf iosadj osdj ojasdfio jsd oifjdoasjf oasdijf ojasdfsad '),(4,2,'dude','dude@dudes.com','dudes.com','yeah dude....'),(5,4,'Testing','testing','testing','testing'),(6,5,'someone','someone@somewhere.com','somewhere','something');
/*!40000 ALTER TABLE `blog_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `cat` int(1) NOT NULL default '0',
  `id` int(100) unsigned NOT NULL default '0',
  `comment` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,1,'this is crazy'),(1,2,'Nice char sti!'),(1,4,'palmiers\r\n'),(2,1,'Bandit! test <b>bold</b>'),(1,3,'testing'),(2,3,'En chine'),(1,5,'wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall wall '),(1,6,'comment round nice wow\r\n'),(2,2,'manif SRC'),(2,4,''),(2,10,' \r\n'),(2,5,'ouin les mains maganés! sti!'),(2,11,' '),(1,15,'Trop fiable le dragon'),(1,7,'montreal'),(1,9,'Graffiti'),(4,8,'Ma pitoune!!!');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2009-07-24 15:21:15
