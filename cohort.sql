# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.6.28)
# Database: cohort
# Generation Time: 2017-04-17 10:02:53 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table attending
# ------------------------------------------------------------

DROP TABLE IF EXISTS `attending`;

CREATE TABLE `attending` (
  `attendingID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `eventID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `hostID` int(11) NOT NULL,
  `attendingTime` datetime NOT NULL,
  PRIMARY KEY (`attendingID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table conversations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `conversations`;

CREATE TABLE `conversations` (
  `conversationID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `senderID` int(11) NOT NULL,
  `recipientID` int(11) NOT NULL,
  `conversationTime` datetime DEFAULT NULL,
  PRIMARY KEY (`conversationID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table event
# ------------------------------------------------------------

DROP TABLE IF EXISTS `event`;

CREATE TABLE `event` (
  `eventID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `hostID` int(11) NOT NULL,
  `routeID` int(11) NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT '',
  `eventDate` date NOT NULL,
  `terrain` varchar(20) NOT NULL DEFAULT '',
  `distance` int(4) NOT NULL,
  `unitOfM` varchar(2) NOT NULL DEFAULT '',
  `skillLevel` int(2) NOT NULL,
  `description` text,
  `meetingPoint` varchar(250) DEFAULT NULL,
  `attending` int(100) DEFAULT NULL,
  `location` varchar(200) NOT NULL DEFAULT '',
  `duration` time NOT NULL,
  `eventTime` time NOT NULL,
  PRIMARY KEY (`eventID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `event` WRITE;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;

INSERT INTO `event` (`eventID`, `hostID`, `routeID`, `title`, `eventDate`, `terrain`, `distance`, `unitOfM`, `skillLevel`, `description`, `meetingPoint`, `attending`, `location`, `duration`, `eventTime`)
VALUES
	(20,1,1,'Running Test','2017-04-15','road',2,'km',3,'lol','At the shop',2,'newcastle','22:22:22','16:07:00'),
	(21,1,1,'Running Event','2017-04-21','road',2,'km',1,'hello','Habita',2,'newcastle','00:25:00','12:30:00');

/*!40000 ALTER TABLE `event` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table eventRating
# ------------------------------------------------------------

DROP TABLE IF EXISTS `eventRating`;

CREATE TABLE `eventRating` (
  `eRatingID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `eventID` int(11) NOT NULL,
  `eRatingTime` datetime NOT NULL,
  `eRating` int(11) NOT NULL,
  `eFeedback` text,
  PRIMARY KEY (`eRatingID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table host
# ------------------------------------------------------------

DROP TABLE IF EXISTS `host`;

CREATE TABLE `host` (
  `hostID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  PRIMARY KEY (`hostID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `host` WRITE;
/*!40000 ALTER TABLE `host` DISABLE KEYS */;

INSERT INTO `host` (`hostID`, `userID`)
VALUES
	(1,5);

/*!40000 ALTER TABLE `host` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table hostRating
# ------------------------------------------------------------

DROP TABLE IF EXISTS `hostRating`;

CREATE TABLE `hostRating` (
  `hRatingID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `hostID` int(11) NOT NULL,
  `ratingTime` datetime NOT NULL,
  `hRating` int(11) NOT NULL,
  `hFeedback` text,
  PRIMARY KEY (`hRatingID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table messages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `messageID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `recipientID` int(11) NOT NULL,
  `senderID` int(11) NOT NULL,
  `message` text NOT NULL,
  `timeSent` time NOT NULL,
  `conversationID` int(11) NOT NULL,
  PRIMARY KEY (`messageID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table notifications
# ------------------------------------------------------------

DROP TABLE IF EXISTS `notifications`;

CREATE TABLE `notifications` (
  `notificationID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `notifyType` int(10) NOT NULL,
  `notifyTime` datetime NOT NULL,
  PRIMARY KEY (`notificationID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table route
# ------------------------------------------------------------

DROP TABLE IF EXISTS `route`;

CREATE TABLE `route` (
  `routeID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `hostID` int(11) NOT NULL,
  `route` varchar(50) NOT NULL DEFAULT '',
  `media` varchar(50) DEFAULT '',
  PRIMARY KEY (`routeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `route` WRITE;
/*!40000 ALTER TABLE `route` DISABLE KEYS */;

INSERT INTO `route` (`routeID`, `hostID`, `route`, `media`)
VALUES
	(1,1,'','');

/*!40000 ALTER TABLE `route` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table routeRating
# ------------------------------------------------------------

DROP TABLE IF EXISTS `routeRating`;

CREATE TABLE `routeRating` (
  `rRatingID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `routeID` int(11) NOT NULL,
  `rRatingTime` datetime NOT NULL,
  `rRating` int(11) NOT NULL,
  `rFeeback` text,
  PRIMARY KEY (`rRatingID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `userID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `forename` varchar(20) NOT NULL DEFAULT '',
  `surname` varchar(50) NOT NULL DEFAULT '',
  `dob` date NOT NULL,
  `email` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(20) NOT NULL DEFAULT '',
  `description` text,
  `skillLevel` int(2) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`userID`, `forename`, `surname`, `dob`, `email`, `password`, `description`, `skillLevel`)
VALUES
	(5,'test','test','2222-02-22','test@test.com','$2y$10$dtGbZ.WQcTkal',NULL,1),
	(6,'Sam','Towel','1996-06-21','test1@test.com','$2y$10$Uk3VluTxFbStc',NULL,2);

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
