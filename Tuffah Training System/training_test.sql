/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.6.12-log : Database - training_test
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`training_test` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `training_test`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

LOCK TABLES `admin` WRITE;

insert  into `admin`(`username`,`password`) values ('sufi','sufi123');

UNLOCK TABLES;

/*Table structure for table `instructor` */

DROP TABLE IF EXISTS `instructor`;

CREATE TABLE `instructor` (
  `IDinstructor` int(11) NOT NULL AUTO_INCREMENT,
  `nameinstructor` varchar(200) DEFAULT NULL,
  `icinstructor` varchar(200) DEFAULT NULL,
  `noinstructor` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`IDinstructor`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `instructor` */

LOCK TABLES `instructor` WRITE;

insert  into `instructor`(`IDinstructor`,`nameinstructor`,`icinstructor`,`noinstructor`) values (1,'Jamal Bin Hussien','800423-10-0921','+60191231415'),(4,'Malim','780716-12-5602','+60185670892');

UNLOCK TABLES;

/*Table structure for table `subject` */

DROP TABLE IF EXISTS `subject`;

CREATE TABLE `subject` (
  `IDsubject` int(11) NOT NULL AUTO_INCREMENT,
  `namesubject` varchar(200) DEFAULT NULL,
  `codesubject` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`IDsubject`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `subject` */

LOCK TABLES `subject` WRITE;

insert  into `subject`(`IDsubject`,`namesubject`,`codesubject`) values (1,'Java Were Easy Enough','Java'),(4,'J Query Modify The Structure Of Coding','JQuery');

UNLOCK TABLES;

/*Table structure for table `tibridge` */

DROP TABLE IF EXISTS `tibridge`;

CREATE TABLE `tibridge` (
  `IDtibridge` int(11) NOT NULL AUTO_INCREMENT,
  `IDtraining` int(11) DEFAULT NULL,
  `IDinstructor` int(11) DEFAULT NULL,
  `timelearn` varchar(200) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`IDtibridge`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tibridge` */

LOCK TABLES `tibridge` WRITE;

insert  into `tibridge`(`IDtibridge`,`IDtraining`,`IDinstructor`,`timelearn`,`date`) values (1,1,1,'3 Hari','2014-12-15 10:59:18'),(2,2,2,'2 Hari','2014-11-25 10:59:48');

UNLOCK TABLES;

/*Table structure for table `training` */

DROP TABLE IF EXISTS `training`;

CREATE TABLE `training` (
  `IDtraining` int(11) NOT NULL AUTO_INCREMENT,
  `trainingname` varchar(200) DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `place` varchar(200) DEFAULT NULL,
  `totalstudent` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`IDtraining`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `training` */

LOCK TABLES `training` WRITE;

insert  into `training`(`IDtraining`,`trainingname`,`startdate`,`enddate`,`place`,`totalstudent`) values (1,'','0000-00-00','0000-00-00','',''),(4,'Daus','2014-05-14','2014-05-16','BB Plaza','190 Student');

UNLOCK TABLES;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `IDuser` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `userIC` varchar(200) DEFAULT NULL,
  `userGender` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`IDuser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

LOCK TABLES `users` WRITE;

insert  into `users`(`IDuser`,`name`,`password`,`username`,`userIC`,`userGender`) values (1,'Muhammad Sufi Zainureen Bin Azmi','sufi123','sufi','940914-10-6363','Male'),(2,'Muhd Ahmad Bin Kamal','ahmad012','ahmad','941010-14-6921','Male');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
