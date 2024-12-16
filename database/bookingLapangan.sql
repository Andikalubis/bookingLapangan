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

-- Dumping structure for table bookinglapangan.auth_user
CREATE TABLE IF NOT EXISTS `auth_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `no_tlp` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `roll` int DEFAULT '2',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `email` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table bookinglapangan.auth_user: ~0 rows (approximately)
INSERT INTO `auth_user` (`id`, `username`, `email`, `password`, `nama`, `alamat`, `no_tlp`, `roll`, `created_at`, `updated_at`, `created_by`) VALUES
	(1, 'admin', 'admin@gmail.com', '$2y$10$PP2dPbhcJJeBVUt6OpnxvOeFjRB4uH2GKM2G58u9l3F2mnXUPGBVy', 'admin', NULL, NULL, 1, '2024-12-14 18:09:27', NULL, NULL);

-- Dumping structure for table bookinglapangan.m_lapang
CREATE TABLE IF NOT EXISTS `m_lapang` (
  `id` int NOT NULL AUTO_INCREMENT,
  `no_lapang` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table bookinglapangan.m_lapang: ~3 rows (approximately)
INSERT INTO `m_lapang` (`id`, `no_lapang`, `status`, `created_at`, `updated_at`, `created_by`, `deleted`) VALUES
	(1, '001', 1, '2024-12-15 12:42:09', '2024-12-15 22:22:31', 1, 0),
	(3, '002', 1, '2024-12-15 13:15:03', '2024-12-15 22:12:08', 1, 0),
	(4, '003', 1, '2024-12-15 13:16:01', '2024-12-15 22:22:33', 1, 0);

-- Dumping structure for table bookinglapangan.t_booking
CREATE TABLE IF NOT EXISTS `t_booking` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `jam_booking` time NOT NULL,
  `tgl_booking` date NOT NULL,
  `durasi` int NOT NULL,
  `no_tlp` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_lapang` int NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(50) DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `Fkk_m_lapang` (`id`) USING BTREE,
  KEY `m_lapang_ibfk_1` (`id_lapang`),
  CONSTRAINT `m_lapang_ibfk_1` FOREIGN KEY (`id_lapang`) REFERENCES `m_lapang` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table bookinglapangan.t_booking: ~5 rows (approximately)
INSERT INTO `t_booking` (`id`, `nama`, `jam_booking`, `tgl_booking`, `durasi`, `no_tlp`, `id_lapang`, `created_at`, `updated_at`, `created_by`, `deleted`) VALUES
	(42, 'Yoga Prayudi', '20:49:00', '2024-12-16', 2, '08574112555', 4, '2024-12-15 22:12:22', NULL, NULL, 0),
	(43, 'Yoga Prayudi', '20:49:00', '2024-12-16', 2, '08574112555', 4, '2024-12-15 22:14:13', NULL, NULL, 0),
	(44, 'Yoga Prayudi', '20:49:00', '2024-12-16', 2, '08574112555', 4, '2024-12-15 22:17:11', NULL, NULL, 0),
	(45, 'Yoga Prayudi', '20:49:00', '2024-12-16', 2, '08574112555', 1, '2024-12-15 22:19:16', NULL, NULL, 0),
	(46, 'Yoga Prayudi', '20:49:00', '2024-12-16', 2, '08574112555', 1, '2024-12-15 22:19:39', NULL, NULL, 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
