-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 15, 2021 at 01:02 PM
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
  `emza` varchar(30) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `code_meli` varchar(12) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `monshi` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `masolan_sj_tamdid_sahami_khas`
--

INSERT INTO `masolan_sj_tamdid_sahami_khas` (`id`, `id_sj`, `fname`, `lname`, `masoliat`, `scan_cart_meli`, `scan_shenasname_meli`, `phone`, `emza`, `code_meli`, `monshi`) VALUES
(92, 123, 'امیرحسین', 'بشکار', 'مدیر عامل', NULL, './upload/img/sj_tamdid_sahami_khas/123/sahamdar/09172253815/3.png', '09172253815', NULL, '2520149663', NULL),
(91, 123, 'امیر', 'خودی', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/123/namaiande/3.png', '09365214758', NULL, '2520149663', NULL),
(90, 123, 'امیرحسین', 'خدادوست', 'بازرس علی البدل', NULL, './upload/img/sj_tamdid_sahami_khas/123/bazresin/bazresAlalbadal/3.png', '09363236838', NULL, '2520142543', 'منشی جلسه'),
(89, 123, 'امیرحسین', 'خدادوست', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/123/bazresin/bazresAsli/3.png', '09362542546', NULL, '2520143253', NULL);

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
  `chek_modiamel` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `meli_code` varchar(12) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `tedad_saham` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `scan_cart_meli` text COLLATE utf8mb4_persian_ci,
  `scan_shenasname` text COLLATE utf8mb4_persian_ci,
  `vazife_jalase` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `semat` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `emza` text COLLATE utf8mb4_persian_ci,
  `semat_nahaei` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=184 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `sahamdaran`
--

INSERT INTO `sahamdaran` (`id`, `id_sj_tamdid_sahami_khas`, `phone`, `fname`, `lname`, `chek_modiamel`, `meli_code`, `tedad_saham`, `scan_cart_meli`, `scan_shenasname`, `vazife_jalase`, `semat`, `emza`, `semat_nahaei`) VALUES
(181, 123, '09172253815', 'امیرحسین', 'بشکار', 'مدیر عامل', '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/123/sahamdar/09172253815/3.png', 'رئیس جلسه', 'سهامدار', NULL, 'رئیس هیئت مدیره'),
(182, 123, '09363236838', 'امیر', 'بشکار', '', '2520125463', '100', '', './upload/img/sj_tamdid_sahami_khas/123/sahamdar/09363236838/3.png', 'ناظر جلسه', 'سهامدار', NULL, 'نائب رئیس هیئت مدیره'),
(183, 123, '09363225438', 'امیرحسین', 'بشکار', '', '2520125663', '100', '', './upload/img/sj_tamdid_sahami_khas/123/sahamdar/09363225438/3.png', 'ناظر جلسه', 'سهامدار', NULL, 'عضو اصلی هیئت مدیره');

-- --------------------------------------------------------

--
-- Table structure for table `sj_taein_modiran`
--

DROP TABLE IF EXISTS `sj_taein_modiran`;
CREATE TABLE IF NOT EXISTS `sj_taein_modiran` (
  `sj_id` int(10) NOT NULL AUTO_INCREMENT,
  `rel_sj_id` varchar(15) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `t_shorooe_jalase` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `d_shorooe_jalase` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `end_date` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  PRIMARY KEY (`sj_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `sj_taein_modiran`
--

INSERT INTO `sj_taein_modiran` (`sj_id`, `rel_sj_id`, `t_shorooe_jalase`, `d_shorooe_jalase`, `end_date`) VALUES
(11, '123', '21:19', '1400/11/18', NULL);

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
  `rooz_adress_file` text COLLATE utf8mb4_persian_ci,
  `c_adress` text COLLATE utf8mb4_persian_ci,
  `t_sahamdar` tinyint(1) DEFAULT NULL,
  `hozor` varchar(30) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `emza` text COLLATE utf8mb4_persian_ci,
  `emza2` text COLLATE utf8mb4_persian_ci,
  PRIMARY KEY (`sj_id`)
) ENGINE=MyISAM AUTO_INCREMENT=124 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `sj_tamdid_sahami_khas`
--

INSERT INTO `sj_tamdid_sahami_khas` (`sj_id`, `rel_user`, `c_shenase_meli`, `c_name`, `c_shomare_sabt`, `c_sarmaye`, `t_shorooe_jalase`, `d_shorooe_jalase`, `t_saham`, `rooz_name`, `rooz_adress_file`, `c_adress`, `t_sahamdar`, `hozor`, `emza`, `emza2`) VALUES
(123, '09363236838', '32569874', 'مهندسان برتر', '32569874', 25698744, '19:18', '1400/10/19', '800', 'کیهان', './upload/img/sj_tamdid_sahami_khas/123/rozname/3.png', 'استهبان', 3, 'با حضور اکثریت سهامداران', 'مدیر عامل و رئیس هیئت مدیره و نائب رئیس هیئت مدیره', 'مدیر عامل و رئیس هیئت مدیره یا نائب رئیس هیئت مدیره');

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `phone`, `PASSWORD`, `first_name`, `last_name`, `email`, `cell_phone`, `verified`) VALUES
(2, '09365236838', '70873e8580c9900986939611618d7b1e', 'امیرحسین', 'خدادوستی', 'amir@gmail.com', '07153225604', 1),
(3, '09363236838', '25d55ad283aa400af464c76d713c07ad', 'امیرعلی', 'خدادوستی', 'amirhossein6838@gmail.com', '07153225604', 1),
(4, '09399052485', '2e9ec317e197819358fbc43afca7d837', 'احمد', 'ذوقی', 'cyber000cyber@gmail.com', '07153225604', 1),
(6, '09172253815', '25d55ad283aa400af464c76d713c07ad', 'امیرحسین', 'خدادوست', 'amirhosin3103@yahoo.com', '07153225604', 1);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `userid` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
