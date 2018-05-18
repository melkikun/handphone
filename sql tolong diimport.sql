-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.12-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for faisal
CREATE DATABASE IF NOT EXISTS `faisal` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `faisal`;

-- Dumping structure for table faisal.gejala_kerusakan
CREATE TABLE IF NOT EXISTS `gejala_kerusakan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `cf` double NOT NULL,
  `kode` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kode` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- Dumping data for table faisal.gejala_kerusakan: ~15 rows (approximately)
DELETE FROM `gejala_kerusakan`;
/*!40000 ALTER TABLE `gejala_kerusakan` DISABLE KEYS */;
INSERT INTO `gejala_kerusakan` (`id`, `nama`, `cf`, `kode`) VALUES
	(1, 'Touch Screen bergerak sendiri', 0.6, 'G01'),
	(2, 'Touch Screen tidak berfungsi sama sekali', 0.6, 'G02'),
	(3, 'Touch Screen tidak berfungsi sebagian', 0.6, 'G03'),
	(4, 'LCD Blank putih', 0.6, 'G04'),
	(5, 'Muncul bercak di LCD', 0.6, 'G05'),
	(11, 'Tampilan Warna dari LCD agak buram', 0.6, 'G06'),
	(12, 'Muncul bintik-bintik hitam/putih di LCD', 0.6, 'G07'),
	(13, 'Ponsel mati total', 0.6, 'G08'),
	(14, 'Ponsel cepat panas', 0.6, 'G09'),
	(15, 'Batrai sangat boros', 0.6, 'G10'),
	(16, 'Speaker mati', 0.6, 'G11'),
	(17, 'Suara Speaker tidak jelas', 0.6, 'G12'),
	(18, 'Volume full tapi suara speaker sangat pelan', 0.6, 'G13'),
	(19, 'Ponsel mati ketika lepas dari charger', 0.6, 'G14'),
	(20, 'Ponsel tidak bisa Charging', 0.6, 'G15');
/*!40000 ALTER TABLE `gejala_kerusakan` ENABLE KEYS */;

-- Dumping structure for table faisal.jenis_kerusakan
CREATE TABLE IF NOT EXISTS `jenis_kerusakan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL DEFAULT '0',
  `kode` varchar(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `KODE` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Dumping data for table faisal.jenis_kerusakan: ~13 rows (approximately)
DELETE FROM `jenis_kerusakan`;
/*!40000 ALTER TABLE `jenis_kerusakan` DISABLE KEYS */;
INSERT INTO `jenis_kerusakan` (`id`, `nama`, `kode`) VALUES
	(1, 'Touch Screen', 'K01'),
	(2, 'LCD', 'K02'),
	(3, 'Mainboard', 'K03'),
	(4, 'Speaker', 'K04'),
	(5, 'Batrai', 'K05'),
	(6, 'Kamera', 'K06'),
	(7, 'Lampu Flash', 'K07'),
	(8, 'Konektor Charger/USB', 'K08'),
	(9, 'Konektor SIM Card', 'K09'),
	(10, 'Konektor Micro SD', 'K10'),
	(11, 'Microphone', 'K11'),
	(12, 'Antena signal', 'K12'),
	(13, 'LED', 'K13');
/*!40000 ALTER TABLE `jenis_kerusakan` ENABLE KEYS */;

-- Dumping structure for table faisal.relasi
CREATE TABLE IF NOT EXISTS `relasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_jenis` int(11) DEFAULT NULL,
  `id_gejala` int(11) DEFAULT NULL,
  `id_solusi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_relasi_jenis_kerusakan` (`id_jenis`),
  KEY `FK_relasi_gejala_kerusakan` (`id_gejala`),
  KEY `FK_relasi_solusi_kerusakan` (`id_solusi`),
  CONSTRAINT `FK_relasi_gejala_kerusakan` FOREIGN KEY (`id_gejala`) REFERENCES `gejala_kerusakan` (`id`),
  CONSTRAINT `FK_relasi_jenis_kerusakan` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_kerusakan` (`id`),
  CONSTRAINT `FK_relasi_solusi_kerusakan` FOREIGN KEY (`id_solusi`) REFERENCES `solusi_kerusakan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table faisal.relasi: ~2 rows (approximately)
DELETE FROM `relasi`;
/*!40000 ALTER TABLE `relasi` DISABLE KEYS */;
INSERT INTO `relasi` (`id`, `id_jenis`, `id_gejala`, `id_solusi`) VALUES
	(5, 1, 1, 1),
	(6, 1, 3, 1);
/*!40000 ALTER TABLE `relasi` ENABLE KEYS */;

-- Dumping structure for table faisal.solusi_kerusakan
CREATE TABLE IF NOT EXISTS `solusi_kerusakan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(200) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nama` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Dumping data for table faisal.solusi_kerusakan: ~13 rows (approximately)
DELETE FROM `solusi_kerusakan`;
/*!40000 ALTER TABLE `solusi_kerusakan` DISABLE KEYS */;
INSERT INTO `solusi_kerusakan` (`id`, `kode`, `nama`) VALUES
	(1, 'S1', 'Perbaikan pada software/OS (Flash/instal ulang OS)'),
	(2, 'S2', 'Penggantian pada LCD.'),
	(3, 'S3', 'Penggantian pada Mainboard.'),
	(4, 'S4', 'Penggantian pada Speaker.'),
	(5, 'S5', 'Penggantian pada batrai.'),
	(6, 'S6', 'Penggantian pada kamera.'),
	(7, 'S7', 'Penggantian pada konektor charger/USB.'),
	(8, 'S8', 'Penggantian pada konektor simcard.'),
	(9, 'S9', 'Penggantian pada simcard.'),
	(10, 'S10', 'Penggantian pada konektor micro sd.'),
	(11, 'S11', 'Penggantian pada microphone.'),
	(12, 'S12', 'Penggantian pada antena signal.123'),
	(13, 'S13', 'Penggantian pada lampu LED.  ');
/*!40000 ALTER TABLE `solusi_kerusakan` ENABLE KEYS */;

-- Dumping structure for table faisal.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table faisal.users: ~0 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
