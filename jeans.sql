/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.30-MariaDB : Database - jeans
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`jeans` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `jeans`;

/*Table structure for table `custom` */

DROP TABLE IF EXISTS `custom`;

CREATE TABLE `custom` (
  `custom_id` int(11) NOT NULL AUTO_INCREMENT,
  `custom_name` varchar(100) DEFAULT NULL,
  `category` enum('button','thread_color','pocket_lining_fabric','zipper','back_pocket','product') DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `img_path` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`custom_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `custom` */

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `custom_id` int(10) DEFAULT NULL,
  `poct_init_1` varchar(100) DEFAULT NULL,
  `poct_init_2` varchar(100) DEFAULT NULL,
  `lbl_mono_1` varchar(100) DEFAULT NULL,
  `lbl_mono_2` varchar(100) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `product` varchar(100) DEFAULT NULL,
  `buttons` varchar(100) DEFAULT NULL,
  `fly` varchar(100) DEFAULT NULL,
  `pkt_ln_fbr` varchar(100) DEFAULT NULL,
  `thrd_clr` varchar(100) DEFAULT NULL,
  `bck_pkt_style` varchar(100) DEFAULT NULL,
  `user_id` int(10) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `orders` */

/*Table structure for table `userapp` */

DROP TABLE IF EXISTS `userapp`;

CREATE TABLE `userapp` (
  `username` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `userapp` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
