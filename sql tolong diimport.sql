-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.30-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table faisal.gejala_kerusakan: ~15 rows (approximately)
DELETE FROM `gejala_kerusakan`;
/*!40000 ALTER TABLE `gejala_kerusakan` DISABLE KEYS */;
INSERT INTO `gejala_kerusakan` (`id`, `nama`, `cf`, `kode`) VALUES
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
	(20, 'Ponsel tidak bisa Charging', 0.6, 'G15'),
	(21, 'Touch Screen', 0.8, 'G01');
/*!40000 ALTER TABLE `gejala_kerusakan` ENABLE KEYS */;

-- Dumping data for table faisal.jenis_kerusakan: ~10 rows (approximately)
DELETE FROM `jenis_kerusakan`;
/*!40000 ALTER TABLE `jenis_kerusakan` DISABLE KEYS */;
INSERT INTO `jenis_kerusakan` (`id`, `nama`, `kode`) VALUES
	(3, 'Mainboard', 'K03'),
	(4, 'Speaker', 'K04'),
	(5, 'Batrai', 'K05'),
	(6, 'Kamera', 'K06'),
	(7, 'Lampu Flash', 'K07'),
	(8, 'Konektor Charger/USB', 'K08'),
	(9, 'Konektor SIM Card', 'K09'),
	(10, 'Konektor Micro SD', 'K10'),
	(11, 'Microphone', 'K11'),
	(13, 'LED', 'K13');
/*!40000 ALTER TABLE `jenis_kerusakan` ENABLE KEYS */;

-- Dumping data for table faisal.relasi: ~0 rows (approximately)
DELETE FROM `relasi`;
/*!40000 ALTER TABLE `relasi` DISABLE KEYS */;
/*!40000 ALTER TABLE `relasi` ENABLE KEYS */;

-- Dumping data for table faisal.solusi_kerusakan: ~11 rows (approximately)
DELETE FROM `solusi_kerusakan`;
/*!40000 ALTER TABLE `solusi_kerusakan` DISABLE KEYS */;
INSERT INTO `solusi_kerusakan` (`id`, `kode`, `nama`) VALUES
	(1, 'S1', 'Perbaikan pada software/OS (Flash/instal ulang OS)'),
	(2, 'S2', 'Penggantian pada LCD.'),
	(3, 'S3', 'Penggantian pada Mainboard.'),
	(4, 'S4', 'Penggantian pada Speaker.'),
	(6, 'S6', 'Penggantian pada kamera xxxx'),
	(7, 'S7', 'Penggantian pada konektor charger/USB.'),
	(8, 'S8', 'Penggantian pada konektor simcard.'),
	(9, 'S9', 'Penggantian pada simcard.'),
	(10, 'S10', 'Penggantian pada konektor micro sd.'),
	(11, 'S11', 'Penggantian pada microphone.'),
	(13, 'S13', 'Penggantian pada lampu LED.  ');
/*!40000 ALTER TABLE `solusi_kerusakan` ENABLE KEYS */;

-- Dumping data for table faisal.users: ~0 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
