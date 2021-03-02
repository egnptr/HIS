# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.5-10.4.17-MariaDB)
# Database: his
# Generation Time: 2021-02-24 01:59:01 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table consulting_rooms
# ------------------------------------------------------------

DROP TABLE IF EXISTS `consulting_rooms`;

CREATE TABLE `consulting_rooms` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `doctor_in_charge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `consulting_rooms` WRITE;
/*!40000 ALTER TABLE `consulting_rooms` DISABLE KEYS */;

INSERT INTO `consulting_rooms` (`id`, `doctor_in_charge`, `status`, `created_at`, `updated_at`)
VALUES
	(1,'Test','Available','2021-01-24 14:00:11','2021-01-24 14:00:11'),
	(2,'Test','Available','2021-01-24 14:00:11','2021-01-24 14:00:11'),
	(3,'Test','Not Available','2021-01-24 14:00:11','2021-01-24 14:00:11'),
	(4,'Test','Available','2021-01-24 14:00:11','2021-01-24 14:00:11'),
	(5,'Test','Available','2021-01-24 14:00:11','2021-01-24 14:00:11');

/*!40000 ALTER TABLE `consulting_rooms` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table doctors
# ------------------------------------------------------------

DROP TABLE IF EXISTS `doctors`;

CREATE TABLE `doctors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nokta` bigint(15) NOT NULL,
  `sex` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `dob` date NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `doctors_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `doctors` WRITE;
/*!40000 ALTER TABLE `doctors` DISABLE KEYS */;

INSERT INTO `doctors` (`id`, `name`, `nokta`, `sex`, `dob`, `position`, `education`, `email`, `phone`, `created_at`, `updated_at`)
VALUES
	(3,'Dokter Palsu',143193490120342,'M','2020-02-19','Anak','SMK','dokter@test.com',131902381203812,'2021-01-21 14:55:30','2021-01-21 14:55:30'),
	(5,'Dokter Asli',1209830128308,'M','2020-03-26','Umum','SMK','dokter1@test.com',129037012391273,'2021-01-21 14:57:14','2021-01-24 13:48:50'),
	(8,'Doctor Stone',123801283074917,'M','2017-04-19','Stone','S3','drstone@test.com',1324340729347,'2021-02-09 08:35:23','2021-02-09 08:35:23');

/*!40000 ALTER TABLE `doctors` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table failed_jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(7,'2014_10_12_000000_create_users_table',1),
	(8,'2014_10_12_100000_create_password_resets_table',1),
	(9,'2019_08_19_000000_create_failed_jobs_table',1),
	(10,'2021_01_14_143249_add_username_to_user_table',1),
	(12,'2021_01_20_032413_create_doctors_table',2),
	(20,'2021_01_27_035438_create_rooms_table',3),
	(22,'2021_01_27_041148_create_receipts_table',4),
	(23,'2021_01_20_033510_create_patients_table',5),
	(25,'2021_02_16_053204_create_consulting_rooms_table',6);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table patients
# ------------------------------------------------------------

DROP TABLE IF EXISTS `patients`;

CREATE TABLE `patients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin` bigint(20) NOT NULL,
  `cin` bigint(20) NOT NULL,
  `sex` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `patients_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `patients` WRITE;
/*!40000 ALTER TABLE `patients` DISABLE KEYS */;

INSERT INTO `patients` (`id`, `name`, `pin`, `cin`, `sex`, `dob`, `email`, `phone`, `address`, `created_at`, `updated_at`)
VALUES
	(1,'Kyra Vasquez',236,539,'M','1990-05-09','fokihevul@mailinator.com',16,'Numquam delectus au','2021-02-16 05:27:13','2021-02-16 05:27:13'),
	(2,'Forrest Bryant',543,538,'F','1978-10-13','fowymumag@mailinator.com',83,'Nemo voluptate conse','2021-02-16 05:54:33','2021-02-16 05:54:33'),
	(3,'Sandra Rodriquez',606,842,'M','2011-07-26','ryqi@mailinator.com',44,'Sunt magni nostrud a','2021-02-16 05:54:41','2021-02-16 05:54:41');

/*!40000 ALTER TABLE `patients` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table receipts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `receipts`;

CREATE TABLE `receipts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL,
  `room_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_cost` int(11) NOT NULL,
  `medicine_cost` int(11) NOT NULL,
  `consumption_cost` int(11) NOT NULL,
  `lab_cost` int(11) NOT NULL,
  `radiology_cost` int(11) NOT NULL,
  `maintenance_cost` int(11) NOT NULL,
  `total_cost` int(11) NOT NULL,
  `paid_off` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `receipts` WRITE;
/*!40000 ALTER TABLE `receipts` DISABLE KEYS */;

INSERT INTO `receipts` (`id`, `patient_name`, `doctor_name`, `date_in`, `date_out`, `room_type`, `room_cost`, `medicine_cost`, `consumption_cost`, `lab_cost`, `radiology_cost`, `maintenance_cost`, `total_cost`, `paid_off`, `created_at`, `updated_at`)
VALUES
	(2,'Jane Doe','Doctor Stone','2021-02-08','2021-02-12','Gold Room',20000000,120000,450000,20000,220000,810000,20810000,1,'2021-02-09 14:11:00','2021-02-09 14:27:28'),
	(3,'Gray Leblanc','Dokter Asli','2021-02-08','2021-02-12','VIP Room',40000000,100000,100000,100000,0,300000,40300000,0,'2021-02-09 14:15:22','2021-02-09 14:15:22');

/*!40000 ALTER TABLE `receipts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table rooms
# ------------------------------------------------------------

DROP TABLE IF EXISTS `rooms`;

CREATE TABLE `rooms` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `room_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_bed` int(11) NOT NULL,
  `bed_used` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;

INSERT INTO `rooms` (`id`, `room_name`, `total_bed`, `bed_used`, `status`, `cost`, `created_at`, `updated_at`)
VALUES
	(1,'VIP Room',1,1,'Not Available',10000000,'2021-01-24 14:00:11','2021-02-10 01:27:27'),
	(2,'Platinum Room',5,2,'Available',8000000,'2021-01-24 14:00:11','2021-02-02 17:35:40'),
	(3,'Gold Room',10,10,'Not Available',5000000,'2021-01-24 14:00:11','2021-02-03 02:39:40'),
	(4,'Silver Room',15,11,'Available',3000000,'2021-01-24 14:00:11','2021-02-02 17:58:22'),
	(5,'Regular Room',20,8,'Available',1000000,'2021-01-24 14:00:11','2021-01-24 14:00:11');

/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

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
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `username`)
VALUES
	(1,'Herman Soetodjo','hermansoetodjo@gmail.com',NULL,'$2y$10$MYagmMmF3zTLAB5OQIz6r.i8vudkbUdMt9TQ25TJpLISzmTp/iJLG','KnyKxaaeh2IrE4cjEO5G2yoJ2uSmfKE9uQijRZUZyvzDUvVNdUmRot6nBzqd','2021-01-14 16:00:16','2021-01-14 16:00:16','herman'),
	(2,'Tester','test@test.com',NULL,'$2y$10$.qTZzik3KCVhnQIcjQPs2.o/sOaXfo1lB2hRwveCDpuLbviB.MlMG',NULL,'2021-01-17 13:27:44','2021-01-17 13:27:44','test');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
