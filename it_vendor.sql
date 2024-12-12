-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for it_vendor
CREATE DATABASE IF NOT EXISTS `it_vendor` /*!40100 DEFAULT CHARACTER SET armscii8 COLLATE armscii8_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `it_vendor`;

-- Dumping structure for table it_vendor.data_bobot
CREATE TABLE IF NOT EXISTS `data_bobot` (
  `id_bobot` int NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(50) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `nilai_bobot` int DEFAULT NULL,
  PRIMARY KEY (`id_bobot`),
  KEY `nilai_bobot` (`nilai_bobot`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dumping data for table it_vendor.data_bobot: ~4 rows (approximately)
INSERT INTO `data_bobot` (`id_bobot`, `keterangan`, `nilai_bobot`) VALUES
	(1, 'Tidak Baik ', 1),
	(2, 'Cukup Baik ', 2),
	(3, 'Baik', 3),
	(4, 'Sangat Baik', 4),
	(5, 'Sangat Penting', 1);

-- Dumping structure for table it_vendor.data_kriteria
CREATE TABLE IF NOT EXISTS `data_kriteria` (
  `kode_kriteria` varchar(50) COLLATE armscii8_bin NOT NULL,
  `nama_kriteria` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `tipe` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `bobot` float DEFAULT NULL,
  PRIMARY KEY (`kode_kriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dumping data for table it_vendor.data_kriteria: ~4 rows (approximately)
INSERT INTO `data_kriteria` (`kode_kriteria`, `nama_kriteria`, `tipe`, `bobot`) VALUES
	('C1', 'Pengalaman menangani Proyek IT', 'Benefit', 0.456),
	('C2', '	Kualitas Layanan', '	Benefit', 0.256),
	('C3', 'Keamanan Layanan', '	Benefit', 0.156),
	('C4', 'Keahlian Teknis', '	Benefit', 0.09),
	('C5', '	Keterlibatan Tim', '	Benefit', 0.04);

-- Dumping structure for table it_vendor.data_penilaian
CREATE TABLE IF NOT EXISTS `data_penilaian` (
  `id_penilaian` int NOT NULL AUTO_INCREMENT,
  `kode_alternatif` varchar(50) COLLATE armscii8_bin DEFAULT '0',
  `kode_kriteria` varchar(50) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `nilai` int DEFAULT NULL,
  PRIMARY KEY (`id_penilaian`),
  KEY `FK__data_alternatif` (`kode_alternatif`),
  KEY `FK_data_penilaian_data_kriteria` (`kode_kriteria`),
  CONSTRAINT `FK__data_alternatif` FOREIGN KEY (`kode_alternatif`) REFERENCES `data_vendor` (`kode_vendor`),
  CONSTRAINT `FK_data_penilaian_data_kriteria` FOREIGN KEY (`kode_kriteria`) REFERENCES `data_kriteria` (`kode_kriteria`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dumping data for table it_vendor.data_penilaian: ~38 rows (approximately)
INSERT INTO `data_penilaian` (`id_penilaian`, `kode_alternatif`, `kode_kriteria`, `nilai`) VALUES
	(1, 'A1', 'C1', 15),
	(2, 'A1', 'C2', 4),
	(3, 'A1', 'C3', 3),
	(4, 'A1', 'C4', 4),
	(5, 'A1', 'C5', 4),
	(6, 'A2', 'C1', 14),
	(7, 'A2', 'C2', 4),
	(8, 'A2', 'C3', 3),
	(9, 'A2', 'C4', 3),
	(10, 'A2', 'C5', 4),
	(11, 'A3', 'C1', 10),
	(12, 'A3', 'C2', 3),
	(13, 'A3', 'C3', 3),
	(14, 'A3', 'C4', 3),
	(15, 'A3', 'C5', 3),
	(16, 'A4', 'C1', 8),
	(17, 'A4', 'C2', 3),
	(18, 'A4', 'C3', 2),
	(19, 'A4', 'C4', 2),
	(20, 'A4', 'C5', 3),
	(21, 'A5', 'C1', 15),
	(22, 'A5', 'C2', 3),
	(23, 'A5', 'C3', 4),
	(24, 'A5', 'C4', 4),
	(25, 'A5', 'C5', 4),
	(26, 'A6', 'C1', 12),
	(27, 'A6', 'C2', 4),
	(28, 'A6', 'C3', 3),
	(29, 'A6', 'C4', 2),
	(30, 'A6', 'C5', 4),
	(31, 'A7', 'C1', 13),
	(32, 'A7', 'C2', 3),
	(33, 'A7', 'C3', 2),
	(34, 'A7', 'C4', 3),
	(35, 'A7', 'C5', 4),
	(36, 'A8', 'C1', 15),
	(37, 'A8', 'C2', 4),
	(38, 'A8', 'C3', 4),
	(39, 'A8', 'C4', 3),
	(40, 'A8', 'C5', 4);

-- Dumping structure for table it_vendor.data_vendor
CREATE TABLE IF NOT EXISTS `data_vendor` (
  `kode_vendor` varchar(50) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `nama_vendor` varchar(50) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  PRIMARY KEY (`kode_vendor`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dumping data for table it_vendor.data_vendor: ~8 rows (approximately)
INSERT INTO `data_vendor` (`kode_vendor`, `nama_vendor`) VALUES
	('A1', 'PT. A'),
	('A2', 'PT. B'),
	('A3', 'PT. C'),
	('A4', 'PT. D'),
	('A5', 'PT. E'),
	('A6', 'PT. F'),
	('A7', 'PT. G'),
	('A8', 'PT. H');

-- Dumping structure for view it_vendor.vw_nilai_preferensi
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `vw_nilai_preferensi` (
	`kode_alternatif` VARCHAR(50) NULL COLLATE 'armscii8_bin',
	`nilai_preferensi` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view it_vendor.vw_normalisasi_nilai
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `vw_normalisasi_nilai` (
	`kode_alternatif` VARCHAR(50) NULL COLLATE 'armscii8_bin',
	`kode_kriteria` VARCHAR(50) NULL COLLATE 'armscii8_bin',
	`nilai_ternormalisasi` DECIMAL(14,4) NULL
) ENGINE=MyISAM;

-- Dumping structure for view it_vendor.vw_pembobotan_nilai
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `vw_pembobotan_nilai` (
	`kode_alternatif` VARCHAR(50) NULL COLLATE 'armscii8_bin',
	`kode_kriteria` VARCHAR(50) NULL COLLATE 'armscii8_bin',
	`nilai_ternormalisasi` DECIMAL(14,4) NULL,
	`bobot` FLOAT NULL,
	`nilai_berbobot` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view it_vendor.vw_rangking
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `vw_rangking` (
	`kode_alternatif` VARCHAR(50) NULL COLLATE 'armscii8_bin',
	`nilai_preferensi` DOUBLE NULL,
	`peringkat` BIGINT(20) UNSIGNED NOT NULL
) ENGINE=MyISAM;

-- Dumping structure for view it_vendor.vw_nilai_preferensi
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `vw_nilai_preferensi`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `vw_nilai_preferensi` AS select `pn`.`kode_alternatif` AS `kode_alternatif`,exp(sum(log(`pn`.`nilai_berbobot`))) AS `nilai_preferensi` from `vw_pembobotan_nilai` `pn` group by `pn`.`kode_alternatif`;

-- Dumping structure for view it_vendor.vw_normalisasi_nilai
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `vw_normalisasi_nilai`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `vw_normalisasi_nilai` AS select `dp`.`kode_alternatif` AS `kode_alternatif`,`dp`.`kode_kriteria` AS `kode_kriteria`,(`dp`.`nilai` / (select max(`data_penilaian`.`nilai`) from `data_penilaian` where (`data_penilaian`.`kode_kriteria` = `dp`.`kode_kriteria`))) AS `nilai_ternormalisasi` from (`data_penilaian` `dp` join `data_kriteria` `dk` on((`dp`.`kode_kriteria` = `dk`.`kode_kriteria`)));

-- Dumping structure for view it_vendor.vw_pembobotan_nilai
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `vw_pembobotan_nilai`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `vw_pembobotan_nilai` AS select `vn`.`kode_alternatif` AS `kode_alternatif`,`vn`.`kode_kriteria` AS `kode_kriteria`,`vn`.`nilai_ternormalisasi` AS `nilai_ternormalisasi`,`dk`.`bobot` AS `bobot`,pow(`vn`.`nilai_ternormalisasi`,`dk`.`bobot`) AS `nilai_berbobot` from (`vw_normalisasi_nilai` `vn` join `data_kriteria` `dk` on((`vn`.`kode_kriteria` = `dk`.`kode_kriteria`)));

-- Dumping structure for view it_vendor.vw_rangking
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `vw_rangking`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `vw_rangking` AS select `np`.`kode_alternatif` AS `kode_alternatif`,`np`.`nilai_preferensi` AS `nilai_preferensi`,rank() OVER (ORDER BY `np`.`nilai_preferensi` desc )  AS `peringkat` from `vw_nilai_preferensi` `np`;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
