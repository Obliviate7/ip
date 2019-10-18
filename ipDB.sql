# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.23)
# Database: ipDB
# Generation Time: 2019-10-18 15:27:16 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table calculadora
# ------------------------------------------------------------

DROP TABLE IF EXISTS `calculadora`;

CREATE TABLE `calculadora` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `badlar` varchar(30) NOT NULL,
  `comision_SGR` varchar(30) NOT NULL,
  `arancel_bolsa` varchar(30) NOT NULL,
  `arancel_mercado` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `calculadora` WRITE;
/*!40000 ALTER TABLE `calculadora` DISABLE KEYS */;

INSERT INTO `calculadora` (`id`, `badlar`, `comision_SGR`, `arancel_bolsa`, `arancel_mercado`, `reg_date`)
VALUES
	(1,'2','4','6','8','2019-10-18 01:05:43'),
	(2,'57.18','3.5','1','0.03','2019-10-18 02:44:22'),
	(3,'57.18%','3.5%','1%','0.03%','2019-10-18 03:28:38'),
	(4,'57.18','3.5','1','0.03','2019-10-18 03:29:36');

/*!40000 ALTER TABLE `calculadora` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
