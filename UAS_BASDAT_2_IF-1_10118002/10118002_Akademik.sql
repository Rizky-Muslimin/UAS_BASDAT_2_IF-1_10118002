/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 5.6.49-log : Database - akademik
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`akademik` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `akademik`;

/*Table structure for table `dosen` */

DROP TABLE IF EXISTS `dosen`;

CREATE TABLE `dosen` (
  `NIP` varchar(10) NOT NULL,
  `Nama_Dosen` varchar(26) NOT NULL,
  PRIMARY KEY (`NIP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dosen` */

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NIM` varchar(8) NOT NULL,
  `Nama_Mhs` varchar(26) NOT NULL,
  `Alamat` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`id`,`NIM`,`Nama_Mhs`,`Alamat`) values 
(1,'10118001','RIO','Palembang'),
(2,'10118002','Rizky Muslimin','Belitung');

/*Table structure for table `matakuliah` */

DROP TABLE IF EXISTS `matakuliah`;

CREATE TABLE `matakuliah` (
  `Kode_MK` varchar(5) NOT NULL,
  `Nama_MK` varchar(30) NOT NULL,
  `SKS` int(2) NOT NULL,
  PRIMARY KEY (`Kode_MK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `matakuliah` */

/*Table structure for table `perkuliahan` */

DROP TABLE IF EXISTS `perkuliahan`;

CREATE TABLE `perkuliahan` (
  `NIM` varchar(8) DEFAULT NULL,
  `NIP` varchar(10) DEFAULT NULL,
  `Kode_MK` varchar(5) DEFAULT NULL,
  `Nilai` char(2) NOT NULL,
  KEY `NIM` (`NIM`),
  KEY `NIP` (`NIP`),
  KEY `Kode_MK` (`Kode_MK`),
  CONSTRAINT `perkuliahan_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`),
  CONSTRAINT `perkuliahan_ibfk_2` FOREIGN KEY (`NIP`) REFERENCES `dosen` (`NIP`),
  CONSTRAINT `perkuliahan_ibfk_3` FOREIGN KEY (`Kode_MK`) REFERENCES `matakuliah` (`Kode_MK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `perkuliahan` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
