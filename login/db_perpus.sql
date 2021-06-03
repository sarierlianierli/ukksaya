/*
Navicat MySQL Data Transfer

Source Server         : Lokal
Source Server Version : 100119
Source Host           : localhost:3306
Source Database       : db_perpusbijember

Target Server Type    : MYSQL
Target Server Version : 100119
File Encoding         : 65001

Date: 2018-05-16 09:57:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_anggota
-- ----------------------------
DROP TABLE IF EXISTS `tb_anggota`;
CREATE TABLE `tb_anggota` (
  `id_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('Administrator','Member') NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `nim` varchar(50) DEFAULT NULL,
  `perguruan_tinggi` varchar(200) DEFAULT NULL,
  `prodi` varchar(200) DEFAULT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  PRIMARY KEY (`id_anggota`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `nim` (`nim`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_anggota
-- ----------------------------
INSERT INTO `tb_anggota` VALUES ('1', 'admin', 'admin', 'Administrator', 'Denny Wahyudi', null, null, null, 'Jember', '085204569510');
INSERT INTO `tb_anggota` VALUES ('4', 'denny@gmail.com', 'denny', 'Member', 'Mochamad Denny Wahyudi', '1500631011', 'Universitas Muhammadiyah Jember', 'Manajemen Informatika', 'Jl. Gajah Mada No .11 Kaliwates - Jember', '085204569510');
