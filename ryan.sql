/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50734 (5.7.34)
 Source Host           : localhost:3306
 Source Schema         : ryan

 Target Server Type    : MySQL
 Target Server Version : 50734 (5.7.34)
 File Encoding         : 65001

 Date: 09/06/2023 14:09:21
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for pegawai
-- ----------------------------
DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE `pegawai` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `pangkat` varchar(255) DEFAULT NULL,
  `golruang` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `unitkerja` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pegawai
-- ----------------------------
BEGIN;
INSERT INTO `pegawai` (`id`, `nip`, `nama`, `pangkat`, `golruang`, `jabatan`, `unitkerja`, `user_id`) VALUES (1, '1243532', 'Adi', 'Penata Muda I', 'III/d', 'Kabid', 'disdukcapil', NULL);
INSERT INTO `pegawai` (`id`, `nip`, `nama`, `pangkat`, `golruang`, `jabatan`, `unitkerja`, `user_id`) VALUES (3, '986897897', 'Adinda', 'Penata Muda', 'III/C', 'Pranata Komputer', 'disdukcapil', NULL);
COMMIT;

-- ----------------------------
-- Table structure for penilaian
-- ----------------------------
DROP TABLE IF EXISTS `penilaian`;
CREATE TABLE `penilaian` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tahun` varchar(255) DEFAULT NULL,
  `penilai` int(11) DEFAULT NULL,
  `dinilai` int(11) DEFAULT NULL,
  `nilai_skp` varchar(255) DEFAULT NULL,
  `nilai_perilaku` varchar(255) DEFAULT NULL,
  `nilai_kinerja` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of penilaian
-- ----------------------------
BEGIN;
INSERT INTO `penilaian` (`id`, `tahun`, `penilai`, `dinilai`, `nilai_skp`, `nilai_perilaku`, `nilai_kinerja`, `created_at`, `updated_at`) VALUES (1, '2024', 3, 1, '90', '80', '77', '2023-06-09 12:34:28', '2023-06-09 12:59:19');
COMMIT;

-- ----------------------------
-- Table structure for role_users
-- ----------------------------
DROP TABLE IF EXISTS `role_users`;
CREATE TABLE `role_users` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  UNIQUE KEY `role_users_user_id_role_id_unique` (`user_id`,`role_id`) USING BTREE,
  KEY `role_users_role_id_foreign` (`role_id`) USING BTREE,
  CONSTRAINT `role_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of role_users
-- ----------------------------
BEGIN;
INSERT INTO `role_users` (`user_id`, `role_id`) VALUES (1, 1);
COMMIT;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
BEGIN;
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (1, 'superadmin', '2020-12-23 23:17:35', '2020-12-23 23:17:35');
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (2, 'pemohon', '2022-10-19 14:20:54', '2022-10-19 14:20:54');
COMMIT;

-- ----------------------------
-- Table structure for skp
-- ----------------------------
DROP TABLE IF EXISTS `skp`;
CREATE TABLE `skp` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pegawai_id` int(11) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `target_tugas` varchar(255) DEFAULT NULL,
  `target_kuantitas` varchar(255) DEFAULT NULL,
  `target_kualitas` varchar(255) DEFAULT NULL,
  `target_waktu` varchar(255) DEFAULT NULL,
  `target_biaya` varchar(255) DEFAULT NULL,
  `tgl_realisasi` date DEFAULT NULL,
  `realisasi_kuantitas` varchar(255) DEFAULT NULL,
  `realisasi_kualitas` varchar(255) DEFAULT NULL,
  `realisasi_waktu` varchar(255) DEFAULT NULL,
  `realisasi_biaya` varchar(255) DEFAULT NULL,
  `nilai_skp` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of skp
-- ----------------------------
BEGIN;
INSERT INTO `skp` (`id`, `pegawai_id`, `tahun`, `target_tugas`, `target_kuantitas`, `target_kualitas`, `target_waktu`, `target_biaya`, `tgl_realisasi`, `realisasi_kuantitas`, `realisasi_kualitas`, `realisasi_waktu`, `realisasi_biaya`, `nilai_skp`, `created_at`, `updated_at`) VALUES (1, 1, '2023', '12', '2', '2', '2 bulan', '2 jt', '2023-06-09', 'sdf', 'gfd', 'sdf', 'sdf', 'qwe', '2023-06-09 10:03:00', '2023-06-09 10:54:25');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(255) NOT NULL,
  `password_superadmin` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `api_token` varchar(255) DEFAULT NULL,
  `last_session` varchar(255) DEFAULT NULL,
  `change_password` int(1) unsigned DEFAULT '0' COMMENT '0: belum, 1: sudah',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `users_username_unique` (`username`) USING BTREE,
  UNIQUE KEY `users_email_unique` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `password_superadmin`, `remember_token`, `created_at`, `updated_at`, `api_token`, `last_session`, `change_password`) VALUES (1, 'admin', NULL, 'admin', '2023-06-09 00:09:03', '$2y$10$E9xG1OtIFvBRbHqlwHCC3u48vO5eBf2OQ9wFNpi.qKOAzVqNDUdW2', NULL, NULL, '2023-06-09 00:09:03', '2023-06-09 00:09:03', '$2y$10$tjMANlV25IUwvKuPxEODW.3qE3zPSKjwhmgTcZUgsPDZRGcpgGAN.', NULL, 0);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
