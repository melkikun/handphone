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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- Dumping data for table faisal.gejala_kerusakan: ~42 rows (approximately)
DELETE FROM `gejala_kerusakan`;
/*!40000 ALTER TABLE `gejala_kerusakan` DISABLE KEYS */;
INSERT INTO `gejala_kerusakan` (`id`, `nama`, `cf`, `kode`) VALUES
	(1, 'Touch Screen bergerak sendiri', 0.6, 'G1'),
	(2, 'Touch Screen tidak berfungsi sama sekali', 0.6, 'G2'),
	(3, 'Touch Screen tidak berfungsi sebagian', 0.6, 'G3'),
	(4, 'LCD Blank putih', 0.6, 'G4'),
	(5, 'Muncul bercak di LCD', 0.6, 'G5'),
	(6, 'Tampilan Warna dari LCD agak buram', 0.6, 'G6'),
	(7, 'Muncul bintik-bintik hitam/putih di LCD', 0.6, 'G7'),
	(8, 'Ponsel mati total', 0.6, 'G8'),
	(9, 'Ponsel cepat panas', 0.6, 'G9'),
	(10, 'Batrai sangat boros', 0.6, 'G10'),
	(11, 'Speaker mati', 0.6, 'G11'),
	(12, 'Suara Speaker tidak jelas', 0.6, 'G12'),
	(13, 'Volume full tapi suara speaker sangat pelan', 0.6, 'G13'),
	(14, 'Ponsel mati ketika lepas dari charger', 0.6, 'G14'),
	(15, 'Ponsel tidak bisa Charging', 0.6, 'G15'),
	(16, 'Charging susah', 0.6, 'G16'),
	(17, 'Proses Charging sangat lama', 0.6, 'G17'),
	(18, 'Muncul bintik-bintik berwarna ketika membuka aplikasi kamera', 0.6, 'G18'),
	(19, 'Aplikasi kamera tidak dapat dibuka', 0.6, 'G19'),
	(20, 'Ketika aplikasi kamera dibuka, ponsel melakukan restart', 0.6, 'G20'),
	(21, 'Ketika aplikasi kamera dibuka, tampilan blank putih/hitam', 0.6, 'G21'),
	(22, 'Autofokus kamera tidak berfungsi', 0.6, 'G22'),
	(23, 'Lampu flash redup', 0.6, 'G23'),
	(24, 'Lampu flash tidak menyala pada aplikasi kamera dan senter', 0.6, 'G24'),
	(25, 'Port charger/USB agak longgar', 0.6, 'G25'),
	(26, 'Ponsel tidak dapat terhubung ke PC/Laptop melalui kabel USB', 0.6, 'G26'),
	(27, 'Simcard tiba-tiba eject', 0.6, 'G27'),
	(28, 'Simcard tidak terdeteksi', 0.6, 'G28'),
	(29, 'Muncul tulisan "insert simcard" padahal simcard sudah terpasang dengan baik', 0.6, 'G29'),
	(30, 'Kartu SD tiba-tiba eject', 0.6, 'G30'),
	(31, 'Kartu SD tidak terdeteksi', 0.6, 'G31'),
	(32, 'Pada saat melakukan panggilan suara kita tidak terdengar', 0.6, 'G32'),
	(33, 'Suara tidak keluar ketika digunakan untuk merekam video/audio', 0.6, 'G33'),
	(34, 'Signal naik turun/tidak stabil', 0.6, 'G34'),
	(35, 'Hanya tampil salah satu signal saja', 0.6, 'G35'),
	(36, 'Pada saat signal tampil, ponsel langsung mati', 0.6, 'G36'),
	(37, 'Lampu LED mati', 0.6, 'G37'),
	(38, 'Lampu LED redup', 0.6, 'G38'),
	(39, 'Lampu LED menyala lebih dari 1 warna', 0.6, 'G39'),
	(40, 'Ponsel sering restart sendiri', 0.6, 'G40'),
	(41, 'Signal sering hilang', 0.6, 'G41'),
	(42, 'Ponsel boot loop', 0.6, 'G42');
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
  `id_relasi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_relasi_jenis_kerusakan` (`id_jenis`),
  KEY `FK_relasi_gejala_kerusakan` (`id_gejala`),
  KEY `FK_relasi_solusi_kerusakan` (`id_solusi`),
  CONSTRAINT `FK_relasi_gejala_kerusakan` FOREIGN KEY (`id_gejala`) REFERENCES `gejala_kerusakan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_relasi_jenis_kerusakan` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_kerusakan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_relasi_solusi_kerusakan` FOREIGN KEY (`id_solusi`) REFERENCES `solusi_kerusakan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- Dumping data for table faisal.relasi: ~22 rows (approximately)
DELETE FROM `relasi`;
/*!40000 ALTER TABLE `relasi` DISABLE KEYS */;
INSERT INTO `relasi` (`id`, `id_jenis`, `id_gejala`, `id_solusi`, `id_relasi`) VALUES
	(9, 1, 1, 2, 2),
	(10, 1, 2, 2, 2),
	(11, 2, 4, 2, 3),
	(12, 2, 5, 2, 3),
	(13, 2, 6, 1, 4),
	(14, 2, 7, 1, 4),
	(15, 3, 10, 1, 5),
	(16, 3, 40, 1, 5),
	(18, 3, 8, 3, 6),
	(19, 3, 9, 3, 6),
	(20, 3, 42, 3, 6),
	(21, 4, 11, 4, 7),
	(22, 4, 12, 4, 7),
	(23, 4, 13, 4, 7),
	(26, 1, 1, 1, 8),
	(27, 1, 3, 1, 8),
	(28, 5, 10, 1, 9),
	(29, 5, 16, 1, 9),
	(30, 5, 17, 1, 9),
	(31, 5, 8, 5, 10),
	(32, 5, 14, 5, 10),
	(33, 5, 15, 5, 10);
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
  `role` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table faisal.users: ~1 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
	(3, 'admin', 'admin', 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
