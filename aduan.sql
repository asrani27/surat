/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : aduan

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 10/07/2021 10:22:03
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for aduan
-- ----------------------------
DROP TABLE IF EXISTS `aduan`;
CREATE TABLE `aduan`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `kustomer_id` int(11) UNSIGNED NULL DEFAULT NULL,
  `tanggal` date NULL DEFAULT NULL,
  `no_kiriman` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_produk` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `berat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `isi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_pengirim` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat_pengirim` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telp_pengirim` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenis_aduan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `isi_aduan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `status` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `kustomer_id_aduan`(`kustomer_id`) USING BTREE,
  CONSTRAINT `kustomer_id_aduan` FOREIGN KEY (`kustomer_id`) REFERENCES `kustomer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of aduan
-- ----------------------------

-- ----------------------------
-- Table structure for kustomer
-- ----------------------------
DROP TABLE IF EXISTS `kustomer`;
CREATE TABLE `kustomer`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `user_id` bigint(11) UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id_kustomer`(`user_id`) USING BTREE,
  CONSTRAINT `user_id_kustomer` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kustomer
-- ----------------------------
INSERT INTO `kustomer` VALUES (3, 'asrani', 'Jl Pramuka Km 6 Komplek Rahayu', '0987654', 'ade@gmail.com', '2021-05-23 13:19:38', '2021-05-25 04:55:17', 13);

-- ----------------------------
-- Table structure for pegawai
-- ----------------------------
DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE `pegawai`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `telp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tempat_lahir` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal_lahir` date NULL DEFAULT NULL,
  `pendidikan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `agama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_kawin` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jumlah_anak` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pegawai
-- ----------------------------

-- ----------------------------
-- Table structure for respon
-- ----------------------------
DROP TABLE IF EXISTS `respon`;
CREATE TABLE `respon`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `isi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `aduan_id` int(11) UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `aduan_id_respon`(`aduan_id`) USING BTREE,
  CONSTRAINT `aduan_id_respon` FOREIGN KEY (`aduan_id`) REFERENCES `aduan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of respon
-- ----------------------------

-- ----------------------------
-- Table structure for role_users
-- ----------------------------
DROP TABLE IF EXISTS `role_users`;
CREATE TABLE `role_users`  (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  UNIQUE INDEX `role_users_user_id_role_id_unique`(`user_id`, `role_id`) USING BTREE,
  INDEX `role_users_role_id_foreign`(`role_id`) USING BTREE,
  CONSTRAINT `role_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of role_users
-- ----------------------------
INSERT INTO `role_users` VALUES (1, 1);
INSERT INTO `role_users` VALUES (13, 2);
INSERT INTO `role_users` VALUES (14, 2);
INSERT INTO `role_users` VALUES (15, 2);

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `updated_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'superadmin', '2020-12-23 23:17:35', '2020-12-23 23:17:35');
INSERT INTO `roles` VALUES (2, 'user', '2021-05-23 17:58:37', '2021-05-23 17:58:37');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `updated_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_username_unique`(`username`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'superadmin', NULL, 'superadmin', '2021-04-02 12:07:25', '$2y$10$w1n.FHSCLaF5raIUkeRIsugF4EJzuyU/aAK0iMVQ69TzG3sTzLYZa', NULL, '2021-04-02 12:07:25', '2021-04-02 12:07:25');
INSERT INTO `users` VALUES (13, 'asrani', NULL, 'asrani', '2021-05-23 21:19:38', '$2y$10$UwOlNQ5KjkuUebiMGqmsAOAsotYsC2TFVclEHPXrgkz49Ksvl0Ko6', NULL, '2021-05-23 13:19:38', '2021-05-23 13:19:38');
INSERT INTO `users` VALUES (14, 'adi', NULL, 'adi', '2021-05-24 16:05:03', '$2y$10$ncQS4Q43eq8rMAQf/OovUOWzd5GVT49evDGVDO0THUhy4rOY3.d7q', NULL, '2021-05-24 08:05:03', '2021-05-24 08:05:03');
INSERT INTO `users` VALUES (15, 'budi', NULL, 'budi', '2021-07-02 13:31:47', '$2y$10$gpfRSKuMYchrZnt7ad3Pc.3WVmzqb9g.9bPel5O7JNNvGnGGjJKgC', NULL, '2021-07-02 05:31:47', '2021-07-02 05:31:47');

SET FOREIGN_KEY_CHECKS = 1;
