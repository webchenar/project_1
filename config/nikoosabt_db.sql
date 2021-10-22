-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 22, 2021 at 08:24 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nikoosabt_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `masolan_sj_tamdid_sahami_khas`
--

DROP TABLE IF EXISTS `masolan_sj_tamdid_sahami_khas`;
CREATE TABLE IF NOT EXISTS `masolan_sj_tamdid_sahami_khas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_sj` int(10) DEFAULT NULL,
  `fname` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `lname` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `masoliat` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `scan_cart_meli` text COLLATE utf8mb4_persian_ci,
  `scan_shenasname_meli` text COLLATE utf8mb4_persian_ci,
  `phone` varchar(15) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `code_meli` varchar(12) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sabt_sherkat`
--

DROP TABLE IF EXISTS `sabt_sherkat`;
CREATE TABLE IF NOT EXISTS `sabt_sherkat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_type` varchar(250) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `activity_subject` varchar(200) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `other_activity` varchar(200) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `state` varchar(200) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `city` varchar(200) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `company_postal_code` varchar(12) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `board_postal_code` varchar(12) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `national_code` varchar(12) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `CEO_cert_picture` text COLLATE utf8mb4_persian_ci,
  `CEO_ID_picture` text COLLATE utf8mb4_persian_ci,
  `board_cert_picture` text COLLATE utf8mb4_persian_ci,
  `board_ID_picture` text COLLATE utf8mb4_persian_ci,
  `inspector_cert_picture` text COLLATE utf8mb4_persian_ci,
  `inspector_ID_picture` text COLLATE utf8mb4_persian_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sahamdaran`
--

DROP TABLE IF EXISTS `sahamdaran`;
CREATE TABLE IF NOT EXISTS `sahamdaran` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_sj_tamdid_sahami_khas` int(10) DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `fname` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `lname` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `meli_code` varchar(12) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `tedad_saham` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `scan_cart_meli` text COLLATE utf8mb4_persian_ci,
  `scan_shenasname_meli` text COLLATE utf8mb4_persian_ci,
  `vazife_jalase` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `semat` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `semat_nahaei` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `sahamdaran`
--

INSERT INTO `sahamdaran` (`id`, `id_sj_tamdid_sahami_khas`, `phone`, `fname`, `lname`, `meli_code`, `tedad_saham`, `scan_cart_meli`, `scan_shenasname_meli`, `vazife_jalase`, `semat`, `semat_nahaei`) VALUES
(89, 64, '09363656838', 'امیرحسن', 'بشکار', '2520365663', '100', '', '', 'ناظر جلسه', 'سهامدار', 'عضو اصلی هیئت مدیره'),
(88, 64, '09325225438', 'امیرحسن', 'خدادوست', '2520149363', '100', '', '', 'ناظر جلسه', 'سهامدار', 'نائب رئیس هیئت مدیره'),
(87, 64, '09363225438', 'امیرحسن', 'خدادوست', '2520149663', '100', '', '', 'رئیس جلسه', 'سهامدار', 'مدیر عامل و رئیس هیئت مدیره');

-- --------------------------------------------------------

--
-- Table structure for table `sj_taein_modiran`
--

DROP TABLE IF EXISTS `sj_taein_modiran`;
CREATE TABLE IF NOT EXISTS `sj_taein_modiran` (
  `sj_id` int(10) NOT NULL AUTO_INCREMENT,
  `rel_sj_id` int(10) DEFAULT NULL,
  `t_shorooe_jalase` date DEFAULT NULL,
  `d_shorooe_jalase` time DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  PRIMARY KEY (`sj_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sj_tamdid_sahami_khas`
--

DROP TABLE IF EXISTS `sj_tamdid_sahami_khas`;
CREATE TABLE IF NOT EXISTS `sj_tamdid_sahami_khas` (
  `sj_id` int(10) NOT NULL AUTO_INCREMENT,
  `rel_user` varchar(15) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `c_shenase_meli` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `c_name` varchar(250) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `c_shomare_sabt` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `c_sarmaye` int(11) DEFAULT NULL,
  `t_shorooe_jalase` varchar(30) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `d_shorooe_jalase` varchar(30) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `t_saham` varchar(30) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `rooz_name` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `rooz_name_file` text COLLATE utf8mb4_persian_ci,
  `c_adress` text COLLATE utf8mb4_persian_ci,
  `t_sahamdar` tinyint(1) DEFAULT NULL,
  `hozor` varchar(30) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `va_ya` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`sj_id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `sj_tamdid_sahami_khas`
--

INSERT INTO `sj_tamdid_sahami_khas` (`sj_id`, `rel_user`, `c_shenase_meli`, `c_name`, `c_shomare_sabt`, `c_sarmaye`, `t_shorooe_jalase`, `d_shorooe_jalase`, `t_saham`, `rooz_name`, `rooz_name_file`, `c_adress`, `t_sahamdar`, `hozor`, `va_ya`) VALUES
(64, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '17-18', '1400-11-17', '800', 'همشهری', '', 'استهبان', 3, 'با حضور اکثریت سهامداران', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(15) COLLATE utf8mb4_persian_ci NOT NULL,
  `PASSWORD` varchar(200) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `cell_phone` varchar(15) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `verified` int(10) DEFAULT '0',
  `username` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `access_level` varchar(10) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `last_login_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`phone`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `phone`, `PASSWORD`, `first_name`, `last_name`, `email`, `cell_phone`, `verified`, `username`, `access_level`, `last_login_datetime`) VALUES
(1, '1', 'c4ca4238a0b923820dcc509a6f75849b', 'admin', 'admin', 'example@gmail.com', '9999999999', 1, 'test admin', '3', '2021-10-13 07:23:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(15) COLLATE utf8mb4_persian_ci NOT NULL,
  `PASSWORD` varchar(200) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `cell_phone` varchar(15) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `verified` int(10) DEFAULT '0',
  PRIMARY KEY (`id`,`phone`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `phone`, `PASSWORD`, `first_name`, `last_name`, `email`, `cell_phone`, `verified`) VALUES
(2, '09363236838', '25f9e794323b453885f5181f1b624d0b', 'امیرحسین', 'خدادوستی', 'beheshtestahban@yahoo.com', '07153225604', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
