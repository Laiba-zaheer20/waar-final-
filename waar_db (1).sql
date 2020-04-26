/*
SQLyog Professional v13.1.1 (32 bit)
MySQL - 10.4.11-MariaDB : Database - waar_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`waar_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `waar_db`;

/*Table structure for table `addresses` */

DROP TABLE IF EXISTS `addresses`;

CREATE TABLE `addresses` (
  `AddressID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `AddressLine1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AddressLine2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CityID` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`AddressID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `addresses` */

insert  into `addresses`(`AddressID`,`AddressLine1`,`AddressLine2`,`Contact`,`CityID`,`remember_token`,`created_at`,`updated_at`) values 
(1,'b98','block 3','0222234',1,NULL,NULL,NULL),
(2,'a54','block 5','02145',2,NULL,NULL,NULL),
(3,'b44','block 7','03215',3,NULL,NULL,NULL),
(4,'c45','block 2','0214444',4,NULL,NULL,NULL),
(5,'sdfghj','wefghnm','1',5,NULL,'2020-04-13 09:52:29','2020-04-13 09:52:29'),
(6,'sdfghj','wefghnm','1',5,NULL,'2020-04-13 09:54:33','2020-04-13 09:54:33'),
(7,'qwedfgbn','iiohjgf','1',6,NULL,'2020-04-13 09:54:57','2020-04-13 09:54:57'),
(8,'qwsdfcvbhji','plkhgfr','1',7,NULL,'2020-04-13 09:57:56','2020-04-13 09:57:56'),
(9,'asdfghj','llkjhgfds','1',8,NULL,'2020-04-13 10:00:37','2020-04-13 10:00:37'),
(10,'pokjhbv','qwdfghji','1',9,NULL,'2020-04-13 10:01:14','2020-04-13 10:01:14'),
(11,'A 88','block 10A','1',1,NULL,'2020-04-13 11:54:03','2020-04-13 11:54:03');

/*Table structure for table `adminreports` */

DROP TABLE IF EXISTS `adminreports`;

CREATE TABLE `adminreports` (
  `AdminReportID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `CompletedTask` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PendingTask` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TotalSale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TotalProfit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TotalLoss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AdminID` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`AdminReportID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `adminreports` */

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `CategoryID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `CategoryType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CatName` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`CategoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `categories` */

insert  into `categories`(`CategoryID`,`CategoryType`,`CatName`,`image`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Fabric','Winter collection','img/1585424291.jpg',NULL,'2020-03-28 17:52:30','2020-03-28 17:52:30'),
(2,'Embroidery','summer collection','img/1585418646.jpg',NULL,'2020-03-28 18:04:06','2020-03-28 18:04:06'),
(21,'Tailor','general','img/1585420746.jpg',NULL,'2020-03-28 18:39:06','2020-03-28 18:39:06');

/*Table structure for table `cities` */

DROP TABLE IF EXISTS `cities`;

CREATE TABLE `cities` (
  `CityID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `CityName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CountryID` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`CityID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cities` */

insert  into `cities`(`CityID`,`CityName`,`CountryID`,`remember_token`,`created_at`,`updated_at`) values 
(1,'karachi',1,NULL,NULL,NULL),
(2,'lahore',2,NULL,NULL,NULL),
(3,'mumbai',3,NULL,NULL,NULL),
(4,'quetta',4,NULL,NULL,NULL),
(5,'ojkbnvfd',5,NULL,NULL,NULL),
(6,'9ikjhgfdre',6,NULL,NULL,NULL),
(7,'asxcvbhu',7,NULL,NULL,NULL),
(8,'wefghm',8,NULL,NULL,NULL),
(9,'wsdcvhu',9,NULL,NULL,NULL);

/*Table structure for table `colors` */

DROP TABLE IF EXISTS `colors`;

CREATE TABLE `colors` (
  `ColorID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SubCatID` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ColorID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `colors` */

insert  into `colors`(`ColorID`,`Color`,`SubCatID`,`remember_token`,`created_at`,`updated_at`) values 
(1,'#000000',1,NULL,NULL,NULL),
(2,'#ff0000',2,NULL,NULL,NULL),
(3,'#0316fc',3,NULL,NULL,NULL),
(4,'#01fe14',4,NULL,NULL,NULL),
(5,'#ffffff',6,NULL,NULL,NULL);

/*Table structure for table `countries` */

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `CountryID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `CountryName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`CountryID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `countries` */

insert  into `countries`(`CountryID`,`CountryName`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Pakistan',NULL,NULL,NULL),
(2,'india',NULL,NULL,NULL),
(3,'china',NULL,NULL,NULL),
(4,'Pak',NULL,NULL,NULL),
(5,'efgbnmk',NULL,'2020-04-13 09:52:29','2020-04-13 09:52:29'),
(6,'qqwedfghuy',NULL,'2020-04-13 09:54:57','2020-04-13 09:54:57'),
(7,'asdxcfghu',NULL,'2020-04-13 09:57:56','2020-04-13 09:57:56'),
(8,'iuhggvc',NULL,'2020-04-13 10:00:37','2020-04-13 10:00:37'),
(9,'okjhgfe',NULL,'2020-04-13 10:01:14','2020-04-13 10:01:14');

/*Table structure for table `customerdetails` */

DROP TABLE IF EXISTS `customerdetails`;

CREATE TABLE `customerdetails` (
  `CustomerID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `CustomerFirstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CustomerLastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CustomerEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CustomerPassword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`CustomerID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `customerdetails` */

insert  into `customerdetails`(`CustomerID`,`CustomerFirstName`,`CustomerLastName`,`CustomerEmail`,`CustomerPassword`,`remember_token`,`created_at`,`updated_at`) values 
(1,'khalid','Tariq','gukk@gmail.com','123457d',NULL,NULL,NULL),
(2,'umer','naeem','um@hotmail','poibrf',NULL,NULL,NULL),
(3,'amjad','ali ','aa@ggj','aabc',NULL,NULL,NULL),
(7,'uneeb ','hasan','fdfd@g','dfdfdfd',NULL,NULL,NULL),
(8,'Laiba','Laiba','laibazaheer123@gmail.com','laiba',NULL,NULL,NULL);

/*Table structure for table `customersizes` */

DROP TABLE IF EXISTS `customersizes`;

CREATE TABLE `customersizes` (
  `CustSizeID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `SizeName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Height` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `CustomerID` int(10) DEFAULT NULL,
  PRIMARY KEY (`CustSizeID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `customersizes` */

insert  into `customersizes`(`CustSizeID`,`SizeName`,`Height`,`Weight`,`remember_token`,`created_at`,`updated_at`,`CustomerID`) values 
(1,'small','10','25',NULL,NULL,NULL,1),
(2,'medium','12','27',NULL,NULL,NULL,2),
(3,'large','15','30',NULL,NULL,NULL,3),
(7,'small','45','55',NULL,NULL,NULL,7),
(8,'large','6','56',NULL,NULL,NULL,1);

/*Table structure for table `departments` */

DROP TABLE IF EXISTS `departments`;

CREATE TABLE `departments` (
  `departmentID` int(11) NOT NULL AUTO_INCREMENT,
  `departmentName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`departmentID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `departments` */

insert  into `departments`(`departmentID`,`departmentName`,`created_at`,`updated_at`) values 
(1,'Administration',NULL,NULL),
(2,'Finance','2020-03-21 14:34:14','2020-03-21 14:34:14'),
(3,'Finance','2020-03-21 14:35:27','2020-03-21 14:35:27'),
(4,'Finance','2020-03-21 14:37:18','2020-03-21 14:37:18'),
(5,'Finance','2020-03-21 14:39:27','2020-03-21 14:39:27'),
(6,'Finance','2020-03-21 14:40:32','2020-03-21 14:40:32'),
(7,'Finance','2020-03-21 14:41:26','2020-03-21 14:41:26'),
(8,'Finance','2020-03-21 14:41:41','2020-03-21 14:41:41'),
(9,'Marketing','2020-03-21 14:41:52','2020-03-21 14:41:52'),
(10,'IT','2020-03-22 06:04:44','2020-03-22 06:04:44'),
(11,'jhkgjk','2020-03-22 08:56:40','2020-03-22 08:56:40'),
(12,'iot','2020-03-26 15:52:24','2020-03-26 15:52:24');

/*Table structure for table `descriptions` */

DROP TABLE IF EXISTS `descriptions`;

CREATE TABLE `descriptions` (
  `DescriptionID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SubCatID` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`DescriptionID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `descriptions` */

insert  into `descriptions`(`DescriptionID`,`Description`,`SubCatID`,`remember_token`,`created_at`,`updated_at`) values 
(1,'25%',1,NULL,NULL,NULL),
(2,'50%',2,NULL,NULL,NULL),
(3,'100%',3,NULL,NULL,NULL);

/*Table structure for table `employees` */

DROP TABLE IF EXISTS `employees`;

CREATE TABLE `employees` (
  `employeeID` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roleID` int(11) NOT NULL,
  `departmentID` int(11) NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT 'img/default-avatar.png',
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`employeeID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `employees` */

insert  into `employees`(`employeeID`,`firstName`,`lastName`,`email`,`password`,`phone`,`gender`,`roleID`,`departmentID`,`image`,`created_at`,`updated_at`) values 
(1,'admin','admin','admin@gmail.com','admin123',2,'male',1,1,'img/1585026504.jpg','2020-03-20','2020-03-21'),
(16,'sasha','fish','sasha@gmail.com','shasha',123123,'female',2,9,'img/1585494759.jpg','2020-03-27','2020-03-27'),
(17,'jango','fet','jango@gmail.com','ddd',111,'male',5,2,'img/1585494778.jpg','2020-03-27','2020-03-27'),
(18,'gildfoyle','san','senpai@gmail.com','sdsd',2323,'male',10,10,'img/1585494807.jpg','2020-03-27','2020-03-27'),
(19,'sasha','han','saad@gmail.com','sd',33333,'female',5,2,'img/1585304507.jpg','2020-03-27','2020-03-27');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1);

/*Table structure for table `orderdetails` */

DROP TABLE IF EXISTS `orderdetails`;

CREATE TABLE `orderdetails` (
  `OrderDetailID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `OrderDate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StatusID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `OrderID` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`OrderDetailID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `orderdetails` */

insert  into `orderdetails`(`OrderDetailID`,`OrderDate`,`StatusID`,`ProductID`,`OrderID`,`remember_token`,`created_at`,`updated_at`) values 
(1,'12-1-2020',1,3,1,NULL,NULL,NULL),
(2,'12-1-2020',1,2,1,NULL,NULL,NULL),
(3,'12-1-2020',1,3,2,NULL,NULL,NULL),
(4,'12-1-2020',1,4,2,NULL,NULL,NULL);

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `OrderID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `CustomerID` int(11) NOT NULL,
  `PaymentID` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`OrderID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `orders` */

insert  into `orders`(`OrderID`,`CustomerID`,`PaymentID`,`remember_token`,`created_at`,`updated_at`) values 
(1,1,1,NULL,NULL,NULL),
(2,2,2,NULL,NULL,NULL);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

insert  into `password_resets`(`email`,`token`,`created_at`) values 
('laibazaheer123@gmail.com','KKUFRedpDoAytn0AcrdmslEsjlis0E8acjxHpaAB','2020-04-11 23:19:59'),
('laibazaheer123@gmail.com','HObftvt58EdBvdsuwsldpIdqROPXL8lNkPmZKXCc','2020-04-11 23:22:53'),
('laibazaheer123@gmail.com','Eyg2OBpt1c5U5PUmc954pKarVDKGZqO7uq6gtQS6','2020-04-11 23:23:00'),
('laibazaheer123@gmail.com','9HqsWEqAY9DKYPzUDp9duW3wiqLxD2tVHrqArqTO','2020-04-11 23:25:44'),
('laibazaheer123@gmail.com','qFM2InEgAite173q2HMRbv5Nn4rpw0eqqd8XRdae','2020-04-11 23:28:01');

/*Table structure for table `paymentdetails` */

DROP TABLE IF EXISTS `paymentdetails`;

CREATE TABLE `paymentdetails` (
  `PaymentID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `PaymentDate` date NOT NULL,
  `CardType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CardNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CardHolderName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CardExpDate` date NOT NULL,
  `CVV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `amount` int(100) DEFAULT NULL,
  PRIMARY KEY (`PaymentID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `paymentdetails` */

insert  into `paymentdetails`(`PaymentID`,`PaymentDate`,`CardType`,`CardNumber`,`CardHolderName`,`CardExpDate`,`CVV`,`remember_token`,`created_at`,`updated_at`,`amount`) values 
(1,'2020-03-01','visa','12455552','khalid','2025-07-02','120',NULL,NULL,NULL,NULL),
(2,'2019-11-06','master','4578888','umer','2025-11-20','1455',NULL,NULL,NULL,NULL);

/*Table structure for table `prices` */

DROP TABLE IF EXISTS `prices`;

CREATE TABLE `prices` (
  `PriceID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SubCatID` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`PriceID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `prices` */

insert  into `prices`(`PriceID`,`Price`,`SubCatID`,`remember_token`,`created_at`,`updated_at`) values 
(1,'100',1,NULL,NULL,NULL),
(2,'200',2,NULL,NULL,NULL),
(3,'300',3,NULL,NULL,NULL);

/*Table structure for table `privileges` */

DROP TABLE IF EXISTS `privileges`;

CREATE TABLE `privileges` (
  `privilegeID` int(11) NOT NULL AUTO_INCREMENT,
  `privilageName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roleID` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`privilegeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `privileges` */

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `ProductID` int(150) NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SubCatID` int(11) NOT NULL,
  `YardID` int(11) NOT NULL,
  `SizeID` int(11) NOT NULL,
  `ColorID` int(11) NOT NULL,
  `DescriptionID` int(11) NOT NULL,
  `ProductPrice` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `products` */

insert  into `products`(`ProductID`,`ProductName`,`SubCatID`,`YardID`,`SizeID`,`ColorID`,`DescriptionID`,`ProductPrice`,`Image`,`created_at`,`updated_at`) values 
(2,'Polyester-cotton',1,2,2,2,2,'13.33$','img/1585085698.jpg','2020-03-24','2020-03-24'),
(3,'Designer-Lace',3,3,3,3,3,'53.32$','img/1585086648.jpg','2020-03-24','2020-03-25'),
(4,'Cotton',1,2,4,3,3,'23.33$','img/1585123043.jpg','2020-03-25','2020-03-25'),
(16,'25% silk',5,1,2,3,2,'32.32$','img/silk123.jfif','2020-03-29','2020-03-29'),
(17,'Saphyr ',2,1,0,1,1,'13$','img/linen1.JFIF','2020-04-09','2020-04-09'),
(18,'Audra Blush',2,2,0,2,2,'13$','img/linen2.JFIF',NULL,NULL),
(19,'Natural Linen 60\'\'',2,1,0,3,2,'13$','img/linen4.JFIF',NULL,NULL),
(20,'Organic Gem',4,2,0,4,3,'13$','img/pearl1.JFIF',NULL,NULL),
(21,'Classic Chokar',4,3,0,1,1,'11$','img/pearl2.JPG',NULL,NULL),
(22,'Gold Tous',4,3,0,2,2,'12$','img/pearl3.JFIF',NULL,NULL),
(23,'Pony Beads',7,1,0,3,2,'13$','img/bead1.JFIF',NULL,NULL),
(24,'Beaded collar neck',7,3,0,1,2,'13$','img/bead2.JPG',NULL,NULL),
(25,'Rhinestone Beads',7,2,0,4,2,'13$','img/bead3.JPG',NULL,NULL),
(26,'African French Lace',3,1,0,1,2,'13$','img/lace1.JFIF',NULL,NULL),
(27,'Lace Ribbon',3,1,0,2,2,'13$','img/lace2.JPG',NULL,NULL),
(28,'Matt Diamante',5,3,0,3,2,'13$','img/silk1.JFIF',NULL,NULL),
(29,'Raining Silk Fabric',5,2,0,4,1,'13$','img/silk2.JFIF',NULL,NULL),
(30,'Crystal Beads',7,1,0,0,1,'15$','img/bead4.JPG',NULL,NULL),
(31,'Seed Beads',7,2,0,0,1,'16$','img/bead5.JPG',NULL,NULL),
(32,'Bali Beads',7,1,0,0,3,'17$','img/bead6.JPG',NULL,NULL),
(33,'Drop Beads',7,1,0,0,1,'18$','img/bead7.JPG',NULL,NULL),
(34,'Ceramic Beads',7,2,0,0,3,'19$','img/bead8.JPG',NULL,NULL),
(35,'Acrylic Fancy Beads',7,1,0,0,3,'20$','img/bead9.JPG',NULL,NULL),
(36,'Lampwork Beads',7,2,0,0,3,'21$','img/bead10.JPG',NULL,NULL);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `roleID` int(11) NOT NULL AUTO_INCREMENT,
  `roleName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departmentID` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`roleID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`roleID`,`roleName`,`salary`,`departmentID`,`created_at`,`updated_at`) values 
(1,'Administrator','',1,NULL,NULL),
(2,'supervisor','$23,230',1,'2020-03-21 14:32:38','2020-03-21 14:32:38'),
(3,'supervisor','$23,230',1,'2020-03-21 14:32:58','2020-03-21 14:32:58'),
(4,'supervisor','$23,230',1,'2020-03-21 14:33:45','2020-03-21 14:33:45'),
(5,'Manager','$23,230',1,'2020-03-21 14:33:55','2020-03-21 14:33:55'),
(6,'accountant','$54,230',9,'2020-03-21 14:42:19','2020-03-21 14:42:19'),
(7,'vendor','$23,230',9,'2020-03-22 06:04:15','2020-03-22 06:04:15'),
(8,'programmer','$54,230',10,'2020-03-22 08:56:26','2020-03-22 08:56:26'),
(9,'Manager','$40,230',10,'2020-03-22 09:53:21','2020-03-22 09:53:21'),
(10,'developer','$90,230',10,'2020-03-22 17:39:57','2020-03-22 17:39:57'),
(11,'developer','$90,230',10,'2020-03-22 17:50:29','2020-03-22 17:50:29'),
(12,'developer','$90,230',10,'2020-03-22 17:51:26','2020-03-22 17:51:26'),
(13,'programmer','$54,230',9,'2020-03-26 15:52:03','2020-03-26 15:52:03');

/*Table structure for table `shippingdetails` */

DROP TABLE IF EXISTS `shippingdetails`;

CREATE TABLE `shippingdetails` (
  `ShippingID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ShippingDate` date NOT NULL,
  `AddressID` int(11) NOT NULL,
  `OrderID` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ShippingID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `shippingdetails` */

insert  into `shippingdetails`(`ShippingID`,`ShippingDate`,`AddressID`,`OrderID`,`remember_token`,`created_at`,`updated_at`) values 
(1,'2020-03-15',1,1,NULL,NULL,NULL),
(2,'2020-03-11',2,2,NULL,NULL,NULL),
(3,'2020-03-10',3,3,NULL,NULL,NULL),
(4,'2020-03-01',4,4,NULL,NULL,NULL);

/*Table structure for table `sizes` */

DROP TABLE IF EXISTS `sizes`;

CREATE TABLE `sizes` (
  `SizeID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SubCatID` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`SizeID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `sizes` */

insert  into `sizes`(`SizeID`,`Size`,`SubCatID`,`remember_token`,`created_at`,`updated_at`) values 
(1,'S',1,NULL,NULL,NULL),
(2,'M',2,NULL,NULL,NULL),
(3,'L',3,NULL,NULL,NULL),
(4,'XL',4,NULL,NULL,NULL);

/*Table structure for table `statusdetails` */

DROP TABLE IF EXISTS `statusdetails`;

CREATE TABLE `statusdetails` (
  `StatusID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `StatusName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`StatusID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `statusdetails` */

insert  into `statusdetails`(`StatusID`,`StatusName`,`remember_token`,`created_at`,`updated_at`) values 
(1,'delivered',NULL,NULL,NULL),
(2,'pending',NULL,NULL,NULL),
(3,'pending',NULL,NULL,NULL),
(4,'pending',NULL,NULL,NULL);

/*Table structure for table `statuses` */

DROP TABLE IF EXISTS `statuses`;

CREATE TABLE `statuses` (
  `statusID` int(11) NOT NULL AUTO_INCREMENT,
  `edit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delete` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privilegeID` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`statusID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `statuses` */

/*Table structure for table `subcategories` */

DROP TABLE IF EXISTS `subcategories`;

CREATE TABLE `subcategories` (
  `SubCatID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `SubCatType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`SubCatID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `subcategories` */

insert  into `subcategories`(`SubCatID`,`SubCatType`,`CategoryID`,`remember_token`,`created_at`,`updated_at`) values 
(1,'POLYSTER',1,NULL,'2020-03-24 12:18:08','2020-03-24 12:18:08'),
(2,'LINEN',1,NULL,'2020-03-24 12:18:13','2020-03-24 12:18:13'),
(3,'LACE',2,NULL,'2020-03-24 12:18:23','2020-03-24 12:18:23'),
(4,'PEARL',2,NULL,'2020-03-24 12:18:33','2020-03-24 12:18:33'),
(5,'SILK',1,NULL,'2020-03-24 15:19:06','2020-03-24 15:19:06'),
(7,'BEEDS',2,NULL,NULL,NULL),
(8,'LACE',18,NULL,NULL,NULL);

/*Table structure for table `userinfo` */

DROP TABLE IF EXISTS `userinfo`;

CREATE TABLE `userinfo` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` char(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `userinfo` */

insert  into `userinfo`(`id`,`name`,`email`,`password`) values 
(1,'','',''),
(2,'','',''),
(3,'','',''),
(4,'','',''),
(5,'','',''),
(6,'kt','khalid','khghtadf'),
(7,'uneeb','unibgmail','unibabcd');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Talal','m.talalkhan1822@gmail.com',NULL,'$2y$10$/ph4i91GghOPqyB7Ngf36.y0iXLjjnG.7AqgkAEZ45tjCXYHRX28G',NULL,'2020-04-11 23:01:03','2020-04-11 23:01:03'),
(3,'Laiba','laibazaheer123@gmail.com',NULL,'$2y$10$8hMpPi8yCVrrBb4tKLcepOpxyM8iOUtUCZn.nbeEkQUKAMvllpO52',NULL,'2020-04-11 23:08:35','2020-04-11 23:29:53');

/*Table structure for table `wishlistdetails` */

DROP TABLE IF EXISTS `wishlistdetails`;

CREATE TABLE `wishlistdetails` (
  `WishlistDetailID` int(150) NOT NULL AUTO_INCREMENT,
  `ProductID` int(150) NOT NULL,
  `WishlistID` int(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`WishlistDetailID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

/*Data for the table `wishlistdetails` */

insert  into `wishlistdetails`(`WishlistDetailID`,`ProductID`,`WishlistID`,`created_at`,`updated_at`) values 
(1,2,1,NULL,NULL),
(2,3,2,NULL,NULL),
(3,4,3,NULL,NULL),
(5,2,4,NULL,NULL),
(14,4,5,NULL,NULL),
(15,3,5,NULL,NULL);

/*Table structure for table `wishlists` */

DROP TABLE IF EXISTS `wishlists`;

CREATE TABLE `wishlists` (
  `WishlistID` int(150) NOT NULL AUTO_INCREMENT,
  `CustomerID` int(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`WishlistID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `wishlists` */

insert  into `wishlists`(`WishlistID`,`CustomerID`,`created_at`,`updated_at`) values 
(1,10,NULL,NULL),
(2,2,NULL,NULL),
(3,3,NULL,NULL),
(4,7,NULL,NULL),
(5,1,NULL,NULL);

/*Table structure for table `yards` */

DROP TABLE IF EXISTS `yards`;

CREATE TABLE `yards` (
  `YardID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `SubCatID` int(11) NOT NULL,
  `Min` int(150) NOT NULL,
  `Max` int(150) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`YardID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `yards` */

insert  into `yards`(`YardID`,`SubCatID`,`Min`,`Max`,`remember_token`,`created_at`,`updated_at`) values 
(1,1,100,200,NULL,NULL,NULL),
(2,2,10,100,NULL,NULL,NULL),
(3,3,40,100,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
