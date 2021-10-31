-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 31, 2021 at 01:33 PM
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
  `monshi` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `masolan_sj_tamdid_sahami_khas`
--

INSERT INTO `masolan_sj_tamdid_sahami_khas` (`id`, `id_sj`, `fname`, `lname`, `masoliat`, `scan_cart_meli`, `scan_shenasname_meli`, `phone`, `code_meli`, `monshi`) VALUES
(24, 89, 'امیرحسن', 'خدادوست', 'مدیر عامل', NULL, './upload/img/sj_tamdid_sahami_khas/89/sahamdar/09363225838/2.jpg', '09363225838', '2520149663', NULL),
(23, 89, 'امیر', 'خودی', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/89/namaiande/3.png', '09365214758', '2520149663', NULL),
(21, 89, 'امیرحسین', 'خدادوست', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/89/bazresin/bazresAsli/pexels-aleksandar-pasaric-325185.jpg', '09363236838', '2520149663', 'منشی جلسه'),
(9, 87, 'امیرحسین', 'خدادوست', 'بازرس اصلی', NULL, NULL, '09363236838', '2520149663', 'منشی جلسه'),
(10, 87, 'امیرحسین', 'خدادوست', 'بازرس علی البدل', NULL, NULL, '09172253815', '2521149663', 'منشی جلسه'),
(11, 87, 'امیر', 'خودی', 'وکالت داده', NULL, NULL, '09365214758', '2520149663', NULL),
(12, 87, 'امیرحسن', 'خدادوست', 'مدیر عامل', NULL, NULL, '09363232538', '2520254663', NULL),
(22, 89, 'امیرحسین', 'خدادوست', 'بازرس علی البدل', NULL, './upload/img/sj_tamdid_sahami_khas/89/bazresin/bazresAlalbadal/4.jpg', '09172253815', '2520156532', 'منشی جلسه'),
(25, 90, 'امیرحسین', 'خدادوست', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/90/bazresin/bazresAsli1.jpg', '09363236838', '2520149663', 'منشی جلسه'),
(26, 90, 'امیرحسین', 'خدادوست', 'بازرس علی البدل', NULL, './upload/img/sj_tamdid_sahami_khas/90/bazresin/bazresAlalbadal/2.jpg', '09172253815', '2521149663', NULL),
(27, 90, 'امیر', 'خودی', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/90/namaiande/3.png', '09365214758', '2520135663', NULL),
(28, 90, 'حسن', 'خیخیخیخ', 'مدیر عامل', NULL, './upload/img/sj_tamdid_sahami_khas/90/modirAmel/4.jpg', '09365326838', '2520963256', NULL),
(29, 91, 'ابوالفضل', 'خدادوست', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/91/bazresin/bazresAsli/1.jpg', '09363236838', '2520149663', 'منشی جلسه'),
(30, 91, 'امیرحسین', 'خدادوست', 'بازرس علی البدل', NULL, './upload/img/sj_tamdid_sahami_khas/91/bazresin/bazresAlalbadal/2.jpg', '09172253815', '2521149663', NULL),
(31, 91, 'امیر', 'خودی', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/91/namaiande/3.png', '09365214758', '2520149663', NULL),
(32, 91, 'امیرحسن', 'خدادوست', 'مدیر عامل', NULL, './upload/img/sj_tamdid_sahami_khas/91/sahamdar/09363225438/1.jpg', '09363225438', '2520149663', NULL),
(33, 92, 'قلی', 'قلی پور', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/92/bazresin/bazresAsli/bazres.jpg', '09362548796', '2523698714', 'منشی جلسه'),
(34, 92, 'علی ', 'علی پور', 'بازرس علی البدل', NULL, './upload/img/sj_tamdid_sahami_khas/92/bazresin/bazresAlalbadal/bazres2.jpg', '09362541725', '2520139663', NULL),
(35, 92, 'مریم', 'اژه ای', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/92/namaiande/vakil.jpg', '09362541235', '2520149612', NULL),
(36, 92, 'حسین', 'بیابانی', 'مدیر عامل', NULL, './upload/img/sj_tamdid_sahami_khas/92/modirAmel/modirAmel.png', '09325698547', '2520369841', NULL),
(37, 93, 'امیرحسین', 'خدادوست', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/93/bazresin/bazresAsli/3.png', '09362548796', '2525789663', 'منشی جلسه'),
(38, 93, 'امیرحسین', 'خدادوست', 'بازرس علی البدل', NULL, './upload/img/sj_tamdid_sahami_khas/93/bazresin/bazresAlalbadal/3.png', '09363236838', '2520149663', NULL),
(39, 93, 'امیر', 'خودی', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/93/namaiande/3.png', '09365254758', '2520255663', NULL),
(40, 93, 'حسن', 'بیابانی', 'مدیر عامل', NULL, './upload/img/sj_tamdid_sahami_khas/93/modirAmel/4.jpg', '09362546838', '2520925456', NULL),
(41, 97, 'امیرحسین', 'خدادوست', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/97/bazresin/bazresAsli/1.jpg', '09362548796', '2520149663', 'منشی جلسه'),
(42, 97, 'امیرحسین', 'خدادوست', 'بازرس علی البدل', NULL, './upload/img/sj_tamdid_sahami_khas/97/bazresin/bazresAlalbadal/2.jpg', '09172253815', '2521149663', NULL),
(43, 97, 'امیر', 'خودی', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/97/namaiande/4.jpg', '09365214758', '2520149663', NULL),
(44, 97, 'امیر', 'بشکار', 'مدیر عامل', NULL, './upload/img/sj_tamdid_sahami_khas/97/sahamdar/09363225438/2.jpg', '09363225438', '2520149663', NULL),
(45, 98, 'امیرحسین', 'خدادوست', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/98/bazresin/bazresAsli/1.jpg', '09362548796', '2520149663', 'منشی جلسه'),
(46, 98, 'امیرحسین', 'خدادوست', 'بازرس علی البدل', NULL, './upload/img/sj_tamdid_sahami_khas/98/bazresin/bazresAlalbadal/2.jpg', '09172253815', '2521149663', NULL),
(47, 98, 'امیر', 'خودی', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/98/namaiande/4.jpg', '09365214758', '2520149663', NULL),
(48, 98, 'امیرحسین', 'خدادوستی', 'مدیر عامل', NULL, './upload/img/sj_tamdid_sahami_khas/98/sahamdar/09363225438/1.jpg', '09363225438', '2520149663', NULL),
(49, 99, 'امیرحسین', 'خدادوست', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/99/bazresin/bazresAsli/2.jpg', '09362548796', '2525789663', 'منشی جلسه'),
(50, 99, 'امیرحسین', 'خدادوست', 'بازرس علی البدل', NULL, './upload/img/sj_tamdid_sahami_khas/99/bazresin/bazresAlalbadal/3.png', '09172253815', '2521149663', NULL),
(51, 99, 'امیر', 'خودی', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/99/namaiande/4.jpg', '09365214758', '2520149663', NULL),
(52, 99, 'حسن', 'خیخیخیخ', 'مدیر عامل', NULL, './upload/img/sj_tamdid_sahami_khas/99/modirAmel/3.png', '09365326838', '2520963256', NULL),
(53, 100, 'امیرحسین', 'خدادوست', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/100/bazresin/bazresAsli/1.jpg', '09362548796', '2520149663', 'منشی جلسه'),
(54, 100, 'امیرحسین', 'خدادوست', 'بازرس علی البدل', NULL, './upload/img/sj_tamdid_sahami_khas/100/bazresin/bazresAlalbadal/2.jpg', '09172253815', '2521149663', NULL),
(55, 100, 'امیر', 'خودی', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/100/namaiande/3.png', '09365214758', '2520149663', NULL),
(56, 100, 'امیرحسین', 'خدادوستی', 'مدیر عامل', NULL, './upload/img/sj_tamdid_sahami_khas/100/sahamdar/09172253815/1.jpg', '09172253815', '2520125463', NULL),
(57, 101, 'امیرحسین', 'خدادوست', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/101/bazresin/bazresAsli/1.jpg', '09362548796', '2520149663', 'منشی جلسه'),
(58, 101, 'امیرحسین', 'خدادوست', 'بازرس علی البدل', NULL, './upload/img/sj_tamdid_sahami_khas/101/bazresin/bazresAlalbadal/2.jpg', '09172253815', '2521149663', NULL),
(59, 101, 'امیر', 'خودی', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/101/namaiande/3.png', '09365214758', '2520149663', NULL),
(60, 101, 'امیرحسین', 'بشکار', 'مدیر عامل', NULL, './upload/img/sj_tamdid_sahami_khas/101/sahamdar/09363225438/2.jpg', '09363225438', '2520149663', NULL),
(61, 102, 'حسن', 'بشکار', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/102/bazresin/bazresAsli/1.jpg', '09363235824', '2520146523', 'منشی جلسه'),
(62, 102, 'علی', 'خدادوست', 'بازرس علی البدل', NULL, './upload/img/sj_tamdid_sahami_khas/102/bazresin/bazresAlalbadal/2.jpg', '09363235841', '2523697845', NULL),
(63, 102, 'کملا', 'کمال آبادی', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/102/namaiande/3.png', '09362541236', '2520369845', NULL),
(64, 102, 'امیرحسین', 'خدادوست', 'مدیر عامل', NULL, './upload/img/sj_tamdid_sahami_khas/102/sahamdar/09363236838/1.jpg', '09363236838', '2520149665', NULL),
(65, 109, 'امیرحسین', 'خدادوست', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/109/bazresin/bazresAsli/1.jpg', '09362548796', '2523698714', 'منشی جلسه'),
(66, 109, 'امیرحسینی', 'خدادوستی', 'بازرس علی البدل', NULL, './upload/img/sj_tamdid_sahami_khas/109/bazresin/bazresAlalbadal/2.jpg', '09172253815', '2521149663', NULL),
(67, 109, 'امیر', 'خودی', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/109/namaiande/3.png', '09365214758', '2520149663', NULL),
(68, 109, 'امیرعلی', 'خدادوستی', 'مدیر عامل', NULL, './upload/img/sj_tamdid_sahami_khas/109/sahamdar/09363214538/cropped-Untitled-1-1-192x192.jpg', '09363214538', '2520254663', NULL),
(69, 110, 'امیرحسین', 'خدادوست', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/110/bazresin/bazresAsli/3.png', '09362548796', '2520149663', 'منشی جلسه'),
(70, 110, 'امیرحسین', 'خودی', 'بازرس علی البدل', NULL, './upload/img/sj_tamdid_sahami_khas/110/bazresin/bazresAlalbadal/2.jpg', '09172253815', '2521149663', NULL),
(71, 110, 'امیر', 'خودی', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/110/namaiande/4.jpg', '09365214758', '2520149663', NULL),
(72, 110, 'امیرحسین', 'بشکار', 'مدیر عامل', NULL, './upload/img/sj_tamdid_sahami_khas/110/sahamdar/09363225438/1.jpg', '09363225438', '2520149663', NULL),
(73, 113, 'قلی', 'خدادوست', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/113/bazresin/bazresAsli/cropped-Untitled-1-1-192x192.jpg', '09362548796', '2520149663', 'منشی جلسه'),
(74, 113, 'امیرحسین', 'خدادوست', 'بازرس علی البدل', NULL, './upload/img/sj_tamdid_sahami_khas/113/bazresin/bazresAlalbadal/cropped-Untitled-1-1-192x192.jpg', '09172253815', '2521149663', NULL),
(75, 113, 'امیر', 'خودی', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/113/namaiande/ArmanMeli_s.jpg', '09365214758', '2520149663', NULL),
(76, 113, 'امیرحسین', 'بشکار', 'مدیر عامل', NULL, './upload/img/sj_tamdid_sahami_khas/113/sahamdar/09363236838/ArmanMeli_s.jpg', '09363236838', '2520149663', NULL),
(77, 114, 'قلی', 'قلی پور', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/114/bazresin/bazresAsli/1.jpg', '09362548796', '2525789663', 'منشی جلسه'),
(78, 114, 'حسین', 'خودی', 'بازرس علی البدل', NULL, './upload/img/sj_tamdid_sahami_khas/114/bazresin/bazresAlalbadal/2.jpg', '09363236838', '2520149663', NULL),
(79, 114, 'مریم', 'اژه ای', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/114/namaiande/3.png', '09365214758', '2520135663', NULL),
(80, 114, 'امیرحسین', 'بشکار', 'مدیر عامل', NULL, './upload/img/sj_tamdid_sahami_khas/114/sahamdar/09172253815/1.jpg', '09172253815', '2520149663', NULL),
(81, 115, 'قلی', 'قلی پور', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/115/bazresin/bazresAsli/1.jpg', '09362548796', '2525789663', 'منشی جلسه'),
(82, 115, 'حسین', 'خودی', 'بازرس علی البدل', NULL, './upload/img/sj_tamdid_sahami_khas/115/bazresin/bazresAlalbadal/2.jpg', '09363236838', '2521149663', NULL),
(83, 115, 'مریم', 'اژه ای', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/115/namaiande/3.png', '09365214758', '2520149663', NULL),
(84, 115, 'امیرحسین', 'بشکار', 'مدیر عامل', NULL, './upload/img/sj_tamdid_sahami_khas/115/sahamdar/09172253815/1.jpg', '09172253815', '2520149663', NULL),
(85, 116, 'حسن', 'بشکار', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/116/bazresin/bazresAsli/1.jpg', '09363235824', '2520146523', 'منشی جلسه'),
(86, 116, 'علی', 'خدادوست', 'بازرس علی البدل', NULL, './upload/img/sj_tamdid_sahami_khas/116/bazresin/bazresAlalbadal/2.jpg', '09362514785', '2523697845', NULL),
(87, 116, 'کملا', 'کمال آبادی', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/116/namaiande/4.jpg', '09362541236', '2520369845', NULL),
(88, 116, 'امیرحسین', 'خدادوست', 'مدیر عامل', NULL, './upload/img/sj_tamdid_sahami_khas/116/sahamdar/09363236838/modirAmel.png', '09363236838', '2520149663', NULL);

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
  `semat_nahaei` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=163 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `sahamdaran`
--

INSERT INTO `sahamdaran` (`id`, `id_sj_tamdid_sahami_khas`, `phone`, `fname`, `lname`, `chek_modiamel`, `meli_code`, `tedad_saham`, `scan_cart_meli`, `scan_shenasname`, `vazife_jalase`, `semat`, `semat_nahaei`) VALUES
(92, 83, '09172253815', 'امیرحسینی', 'خدادوستی', NULL, '2520125463', '100', '', './upload/img/sj_tamdid_sahami_khas/83/sahamdar/09172253815/2.jpg', 'ناظر جلسه', 'سهامدار', 'عضو اصلی هیئت مدیره'),
(91, 83, '09363254838', 'امیر', 'بشکار', NULL, '2520125663', '100', '', './upload/img/sj_tamdid_sahami_khas/83/sahamdar/09363254838/one.jpg', 'منشی جلسه', 'سهامدار', 'نائب رئیس هیئت مدیره'),
(90, 83, '09363225838', 'امیرحسن', 'خدادوست', NULL, '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/83/sahamdar/09363225838/tow.png', 'رئیس جلسه', 'سهامدار', 'مدیر عامل و رئیس هیئت مدیره'),
(93, 84, '09363225838', 'امیرحسن', 'خدادوست', NULL, '2520125463', '100', '', './upload/img/sj_tamdid_sahami_khas/84/sahamdar/09363225838/one.jpg', 'ناظر جلسه', 'سهامدار', 'مدیر عامل و رئیس هیئت مدیره'),
(94, 84, '09363225438', 'امیرحسن', 'خدادوست', NULL, '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/84/sahamdar/09363225438/tow.png', 'رئیس جلسه', 'سهامدار', 'نائب رئیس هیئت مدیره'),
(95, 84, '09362575438', 'امیرحسن', 'خدادوست', NULL, '2520254663', '100', '', './upload/img/sj_tamdid_sahami_khas/84/sahamdar/09362575438/2.jpg', 'منشی جلسه', 'سهامدار', 'عضو اصلی هیئت مدیره'),
(96, 85, '09363225438', 'امیرحسن', 'خدادوست', NULL, '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/85/sahamdar/09363225438/1.jpg', 'رئیس جلسه', 'سهامدار', 'مدیر عامل و رئیس هیئت مدیره'),
(97, 85, '09363224178', 'امیرحسن', 'خدادوست', NULL, '2520125663', '100', '', './upload/img/sj_tamdid_sahami_khas/85/sahamdar/09363224178/2 - Copy.jpg', 'منشی جلسه', 'سهامدار', 'نائب رئیس هیئت مدیره'),
(98, 85, '09363214438', 'امیرحسن', 'خدادوست', NULL, '2520125463', '100', '', './upload/img/sj_tamdid_sahami_khas/85/sahamdar/09363214438/3.png', 'ناظر جلسه', 'سهامدار', 'عضو اصلی هیئت مدیره'),
(99, 86, '09363225838', 'امیرحسن', 'خدادوست', NULL, '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/86/sahamdar/09363225838/561471_871.jpg', 'رئیس جلسه', 'سهامدار', 'مدیر عامل و رئیس هیئت مدیره'),
(100, 86, '09363225438', 'امیرحسن', 'بشکار', NULL, '2520145663', '100', '', './upload/img/sj_tamdid_sahami_khas/86/sahamdar/09363225438/2.jpg', 'منشی جلسه', 'سهامدار', 'نائب رئیس هیئت مدیره'),
(101, 86, '09363232538', 'امیرحسن', 'خدادوست', NULL, '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/86/sahamdar/09363232538/3.png', 'ناظر جلسه', 'سهامدار', 'عضو اصلی هیئت مدیره'),
(102, 87, '09363232538', 'امیرحسن', 'خدادوست', NULL, '2520254663', '100', '', './upload/img/sj_tamdid_sahami_khas/87/sahamdar/09363232538/1.jpg', 'رئیس جلسه', 'سهامدار', 'مدیر عامل و رئیس هیئت مدیره'),
(103, 87, '09363225838', 'امیرحسن', 'خدادوست', NULL, '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/87/sahamdar/09363225838/2.jpg', 'منشی جلسه', 'سهامدار', 'نائب رئیس هیئت مدیره'),
(104, 87, '09363254838', 'امیرحسن', 'بشکار', NULL, '2520125463', '100', '', './upload/img/sj_tamdid_sahami_khas/87/sahamdar/09363254838/3.png', 'ناظر جلسه', 'سهامدار', 'عضو اصلی هیئت مدیره'),
(105, 88, '09363225438', 'امیرحسن', 'خدادوست', NULL, '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/88/sahamdar/09363225438/2.jpg', 'ناظر جلسه', 'سهامدار', 'رئیس هیئت میره'),
(106, 88, '09363236838', 'امیرحسن', 'بشکار', NULL, '2520125463', '100', '', './upload/img/sj_tamdid_sahami_khas/88/sahamdar/09363236838/4.jpg', 'رئیس جلسه', 'سهامدار', 'نائب رئیس هیئت مدیره'),
(107, 88, '09172253815', 'امیرحسین', 'بشکاری', NULL, '2520136563', '100', '', './upload/img/sj_tamdid_sahami_khas/88/sahamdar/09172253815/4.jpg', 'منشی جلسه', 'سهامدار', 'عضو اصلی هیئت مدیره'),
(108, 89, '09363225838', 'امیرحسن', 'خدادوست', NULL, '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/89/sahamdar/09363225838/2.jpg', 'رئیس جلسه', 'سهامدار', 'مدیر عامل و رئیس هیئت مدیره'),
(109, 89, '09363225438', 'امیرحسن', 'خدادوست', NULL, '2520141453', '100', '', './upload/img/sj_tamdid_sahami_khas/89/sahamdar/09363225438/4.jpg', 'منشی جلسه', 'سهامدار', 'نائب رئیس هیئت مدیره'),
(110, 89, '09172253815', 'امیرحسن', 'خدادوست', NULL, '2520125463', '100', '', './upload/img/sj_tamdid_sahami_khas/89/sahamdar/09172253815/3.png', 'ناظر جلسه', 'سهامدار', 'عضو اصلی هیئت مدیره'),
(111, 89, '09363236838', 'امیرحسن', 'خدادوست', NULL, '2520254663', '100', '', './upload/img/sj_tamdid_sahami_khas/89/sahamdar/09363236838/2.jpg', 'ناظر جلسه', 'سهامدار', 'همه سمت ها انتخاب شده اند'),
(112, 90, '09363225438', 'امیرحسن', 'خدادوست', NULL, '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/90/sahamdar/09363225438/2.jpg', 'ناظر جلسه', 'سهامدار', 'رئیس هیئت میره'),
(113, 90, '09363254838', 'امیرحسن', 'خدادوست', NULL, '2520114563', '100', '', './upload/img/sj_tamdid_sahami_khas/90/sahamdar/09363254838/3.png', 'رئیس جلسه', 'سهامدار', 'نائب رئیس هیئت مدیره'),
(114, 90, '09363236838', 'امیرحسن', 'خدادوست', NULL, '2520125663', '100', '', './upload/img/sj_tamdid_sahami_khas/90/sahamdar/09363236838/2.jpg', 'ناظر جلسه', 'سهامدار', 'عضو اصلی هیئت مدیره'),
(115, 91, '09363225438', 'امیرحسن', 'خدادوست', NULL, '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/91/sahamdar/09363225438/1.jpg', 'رئیس جلسه', 'سهامدار', 'مدیر عامل و رئیس هیئت مدیره'),
(116, 91, '09363225838', 'امیر', 'بشکار', NULL, '2520114663', '100', '', './upload/img/sj_tamdid_sahami_khas/91/sahamdar/09363225838/2.jpg', 'ناظر جلسه', 'سهامدار', 'نائب رئیس هیئت مدیره'),
(117, 91, '09172253815', 'امیر', 'خدادوست', NULL, '2520125663', '100', '', './upload/img/sj_tamdid_sahami_khas/91/sahamdar/09172253815/3.png', 'ناظر جلسه', 'سهامدار', 'عضو اصلی هیئت مدیره'),
(118, 92, '09363236838', 'امیرحسن', 'خدادوست', NULL, '2520149663', '500', '', './upload/img/sj_tamdid_sahami_khas/92/sahamdar/09363236838/1.jpg', 'رئیس جلسه', 'سهامدار', 'رئیس هیئت میره'),
(119, 92, '09363225838', 'امیرعلی', 'بشکار', NULL, '2520125463', '100', '', './upload/img/sj_tamdid_sahami_khas/92/sahamdar/09363225838/2.jpg', 'ناظر جلسه', 'سهامدار', 'نائب رئیس هیئت مدیره'),
(120, 92, '09363254838', 'ابوالفضل', 'مصباحی', NULL, '2520125663', '100', '', './upload/img/sj_tamdid_sahami_khas/92/sahamdar/09363254838/3.png', 'ناظر جلسه', 'سهامدار', 'عضو اصلی هیئت مدیره'),
(121, 92, '09172253815', 'فهمیمه', 'خواست', NULL, '2520254663', '100', '', './upload/img/sj_tamdid_sahami_khas/92/sahamdar/09172253815/4.jpg', 'منشی جلسه', 'سهامدار', 'همه سمت ها انتخاب شده اند'),
(122, 93, '09363225838', 'امیرحسین', 'خدادوستی', NULL, '2520125463', '100', '', './upload/img/sj_tamdid_sahami_khas/93/sahamdar/09363225838/1.jpg', 'ناظر جلسه', 'سهامدار', 'رئیس هیئت میره'),
(123, 93, '09363225438', 'امیرحسین', 'بشکاری', NULL, '2520125663', '100', '', './upload/img/sj_tamdid_sahami_khas/93/sahamdar/09363225438/2 - Copy.jpg', 'منشی جلسه', 'سهامدار', 'عضو اصلی هیئت مدیره'),
(124, 93, '09363236838', 'امیرعلی', 'بشکاری', NULL, '2520215463', '100', '', './upload/img/sj_tamdid_sahami_khas/93/sahamdar/09363236838/3.png', 'رئیس جلسه', 'سهامدار', 'نائب رئیس هیئت مدیره'),
(125, 93, '09363232538', 'امیر', 'خدادوستی', NULL, '2520254663', '100', '', './upload/img/sj_tamdid_sahami_khas/93/sahamdar/09363232538/4.jpg', 'ناظر جلسه', 'سهامدار', 'همه سمت ها انتخاب شده اند'),
(126, 95, '09363225438', 'امیر', 'بشکار', NULL, '2520852663', '100', '', './upload/img/sj_tamdid_sahami_khas/95/sahamdar/09363225438/1.jpg', 'ناظر جلسه', 'سهامدار', 'نائب رئیس هیئت مدیره'),
(127, 95, '09172253815', 'امیرعلی', 'بشکار', NULL, '2520125463', '100', '', './upload/img/sj_tamdid_sahami_khas/95/sahamdar/09172253815/2 - Copy.jpg', 'رئیس جلسه', 'سهامدار', 'رئیس هیئت میره'),
(128, 95, '09363225838', 'امیرحسین', 'خدادوستی', NULL, '2520125663', '500', '', './upload/img/sj_tamdid_sahami_khas/95/sahamdar/09363225838/1.jpg', 'منشی جلسه', 'سهامدار', 'عضو اصلی هیئت مدیره'),
(129, 97, '09363225438', 'امیر', 'بشکار', NULL, '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/97/sahamdar/09363225438/2.jpg', 'رئیس جلسه', 'سهامدار', 'مدیر عامل و رئیس هیئت مدیره'),
(130, 97, '09172253815', 'امیر', 'بشکار', NULL, '2520125663', '100', '', './upload/img/sj_tamdid_sahami_khas/97/sahamdar/09172253815/2.jpg', 'منشی جلسه', 'سهامدار', 'نائب رئیس هیئت مدیره'),
(131, 97, '09363236838', 'امیر', 'بشکار', NULL, '2520114563', '100', '', './upload/img/sj_tamdid_sahami_khas/97/sahamdar/09363236838/4.jpg', 'ناظر جلسه', 'سهامدار', 'عضو اصلی هیئت مدیره'),
(132, 98, '09363225438', 'امیرحسین', 'خدادوستی', NULL, '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/98/sahamdar/09363225438/1.jpg', 'رئیس جلسه', 'سهامدار', 'مدیر عامل و رئیس هیئت مدیره'),
(133, 98, '09363236838', 'امیرحسین', 'خدادوستی', NULL, '2520145663', '100', '', './upload/img/sj_tamdid_sahami_khas/98/sahamdar/09363236838/2.jpg', 'منشی جلسه', 'سهامدار', 'نائب رئیس هیئت مدیره'),
(134, 98, '09363225838', 'امیر', 'خدادوستی', NULL, '2520114663', '200', '', './upload/img/sj_tamdid_sahami_khas/98/sahamdar/09363225838/3.png', 'ناظر جلسه', 'سهامدار', 'عضو اصلی هیئت مدیره'),
(135, 99, '09172253815', 'امیر', 'خدادوستی', NULL, '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/99/sahamdar/09172253815/1.jpg', 'منشی جلسه', 'سهامدار', 'رئیس هیئت میره'),
(136, 99, '09363225838', 'امیرحسین', 'خدادوستی', NULL, '2520125463', '100', '', './upload/img/sj_tamdid_sahami_khas/99/sahamdar/09363225838/2.jpg', 'ناظر جلسه', 'سهامدار', 'عضو اصلی هیئت مدیره'),
(137, 99, '09363232538', 'ابوالفضل', 'بشکاری', NULL, '2520254663', '100', '', './upload/img/sj_tamdid_sahami_khas/99/sahamdar/09363232538/2.jpg', 'رئیس جلسه', 'سهامدار', 'نائب رئیس هیئت مدیره'),
(138, 100, '09172253815', 'امیرحسین', 'خدادوستی', NULL, '2520125463', '500', '', './upload/img/sj_tamdid_sahami_khas/100/sahamdar/09172253815/1.jpg', 'ناظر جلسه', 'سهامدار', 'مدیر عامل و رئیس هیئت مدیره'),
(139, 100, '09365253815', 'امیر', 'بشکار', NULL, '2520852663', '100', '', './upload/img/sj_tamdid_sahami_khas/100/sahamdar/09365253815/2.jpg', 'رئیس جلسه', 'سهامدار', 'نائب رئیس هیئت مدیره'),
(140, 100, '09363225838', 'امیر', 'بشکار', NULL, '2520254663', '500', '', './upload/img/sj_tamdid_sahami_khas/100/sahamdar/09363225838/3.png', 'منشی جلسه', 'سهامدار', 'عضو اصلی هیئت مدیره'),
(141, 101, '09363225438', 'امیرحسین', 'بشکار', NULL, '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/101/sahamdar/09363225438/2.jpg', 'ناظر جلسه', 'سهامدار', 'مدیر عامل و رئیس هیئت مدیره'),
(142, 101, '09363232538', 'امیرحسین', 'بشکار', NULL, '2520125463', '100', '', './upload/img/sj_tamdid_sahami_khas/101/sahamdar/09363232538/2.jpg', 'رئیس جلسه', 'سهامدار', 'نائب رئیس هیئت مدیره'),
(143, 101, '09363415438', 'امیرحسین', 'بشکار', NULL, '2520148725', '100', '', './upload/img/sj_tamdid_sahami_khas/101/sahamdar/09363415438/4.jpg', 'منشی جلسه', 'سهامدار', 'عضو اصلی هیئت مدیره'),
(144, 108, '09172253815', 'امیرحسین', 'بشکار', 'مدیر عامل', '25201498666', '100', '', './upload/img/sj_tamdid_sahami_khas/108/sahamdar/09172253815/cropped-Untitled-1-1-192x192.jpg', 'رئیس جلسه', 'سهامدار', 'مدیر عامل و رئیس هیئت مدیره'),
(145, 109, '09363225838', 'امیرحسین', 'بشکار', '', '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/109/sahamdar/09363225838/cropped-Untitled-1-1-192x192.jpg', 'رئیس جلسه', 'سهامدار', 'رئیس هیئت میره'),
(146, 109, '09363236838', 'امیرعلی', 'بشکاری', '', '2520125663', '100', '', './upload/img/sj_tamdid_sahami_khas/109/sahamdar/09363236838/ArmanMeli_s.jpg', 'منشی جلسه', 'سهامدار', 'نائب رئیس هیئت مدیره'),
(147, 109, '09363214538', 'امیرعلی', 'خدادوستی', 'مدیر عامل', '2520254663', '100', '', './upload/img/sj_tamdid_sahami_khas/109/sahamdar/09363214538/cropped-Untitled-1-1-192x192.jpg', 'ناظر جلسه', 'سهامدار', 'عضو اصلی هیئت مدیره'),
(148, 110, '09363225438', 'امیرحسین', 'بشکار', 'مدیر عامل', '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/110/sahamdar/09363225438/1.jpg', 'رئیس جلسه', 'سهامدار', 'رئیس هیئت میره'),
(149, 110, '09363221458', 'امیرحسین', 'بشکار', '', '2520114563', '100', '', './upload/img/sj_tamdid_sahami_khas/110/sahamdar/09363221458/1.jpg', 'ناظر جلسه', 'سهامدار', 'نائب رئیس هیئت مدیره'),
(150, 110, '09363232538', 'امیرعلی', 'خدادوستی', '', '2520852663', '100', '', './upload/img/sj_tamdid_sahami_khas/110/sahamdar/09363232538/2.jpg', 'ناظر جلسه', 'سهامدار', 'عضو اصلی هیئت مدیره'),
(151, 113, '09363236838', 'امیرحسین', 'بشکار', 'مدیر عامل', '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/113/sahamdar/09363236838/ArmanMeli_s.jpg', 'ناظر جلسه', 'سهامدار', 'نائب رئیس هیئت مدیره'),
(152, 113, '09363225438', 'امیرحسین', 'بشکار', '', '2520122543', '100', '', './upload/img/sj_tamdid_sahami_khas/113/sahamdar/09363225438/cropped-Untitled-1-1-192x192.jpg', 'رئیس جلسه', 'سهامدار', 'رئیس هیئت میره'),
(153, 113, '09363225838', 'امیرحسین', 'بشکار', '', '2520254663', '100', '', './upload/img/sj_tamdid_sahami_khas/113/sahamdar/09363225838/cropped-Untitled-1-1-192x192.png', 'ناظر جلسه', 'سهامدار', 'عضو اصلی هیئت مدیره'),
(154, 114, '09172253815', 'امیرحسین', 'بشکار', 'مدیر عامل', '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/114/sahamdar/09172253815/1.jpg', 'رئیس جلسه', 'سهامدار', 'رئیس هیئت میره'),
(155, 114, '09363236838', 'امیرحسین', 'خدادوستی', '', '2520125463', '100', '', './upload/img/sj_tamdid_sahami_khas/114/sahamdar/09363236838/4.jpg', 'ناظر جلسه', 'سهامدار', 'نائب رئیس هیئت مدیره'),
(156, 114, '09363225838', 'امیرحسین', 'بشکار', '', '2520125663', '100', '', './upload/img/sj_tamdid_sahami_khas/114/sahamdar/09363225838/3.png', 'ناظر جلسه', 'سهامدار', 'عضو اصلی هیئت مدیره'),
(157, 115, '09172253815', 'امیرحسین', 'بشکار', 'مدیر عامل', '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/115/sahamdar/09172253815/1.jpg', 'رئیس جلسه', 'سهامدار', 'رئیس هیئت میره'),
(158, 115, '09363236838', 'امیرحسین', 'بشکار', '', '2520125463', '100', '', './upload/img/sj_tamdid_sahami_khas/115/sahamdar/09363236838/2.jpg', 'ناظر جلسه', 'سهامدار', 'نائب رئیس هیئت مدیره'),
(159, 115, '09363214538', 'امیرحسین', 'بشکار', '', '2520141453', '100', '', './upload/img/sj_tamdid_sahami_khas/115/sahamdar/09363214538/2.jpg', 'ناظر جلسه', 'سهامدار', 'عضو اصلی هیئت مدیره'),
(160, 116, '09363236838', 'امیرحسین', 'خدادوست', 'مدیر عامل', '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/116/sahamdar/09363236838/modirAmel.png', 'رئیس جلسه', 'سهامدار', 'رئیس هیئت میره'),
(161, 116, '09172253815', 'احمد', 'ذوقی', '', '2520149665', '100', '', './upload/img/sj_tamdid_sahami_khas/116/sahamdar/09172253815/2.jpg', 'ناظر جلسه', 'سهامدار', 'نائب رئیس هیئت مدیره'),
(162, 116, '09399052485', 'امیرحسین', 'ذدئ', '', '2520169663', '100', '', './upload/img/sj_tamdid_sahami_khas/116/sahamdar/09399052485/3.png', 'ناظر جلسه', 'سهامدار', 'عضو اصلی هیئت مدیره');

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `sj_taein_modiran`
--

INSERT INTO `sj_taein_modiran` (`sj_id`, `rel_sj_id`, `t_shorooe_jalase`, `d_shorooe_jalase`, `end_date`) VALUES
(2, '102', '18:30', '1400/03/21', NULL),
(3, '109', '19:15', '1400/12/20', NULL),
(4, '110', '17:32', '1400/9/17', NULL),
(5, '113', '18:17', '1400/11/17', NULL),
(6, '114', '17:12', '1400/11/17', NULL),
(7, '115', '- ساعت -:- دقیقه -', '1400/11/19', NULL),
(8, '116', '- ساعت -:- دقیقه -', '1400/11/15', NULL);

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
  `va_ya` varchar(30) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  PRIMARY KEY (`sj_id`)
) ENGINE=MyISAM AUTO_INCREMENT=117 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `sj_tamdid_sahami_khas`
--

INSERT INTO `sj_tamdid_sahami_khas` (`sj_id`, `rel_user`, `c_shenase_meli`, `c_name`, `c_shomare_sabt`, `c_sarmaye`, `t_shorooe_jalase`, `d_shorooe_jalase`, `t_saham`, `rooz_name`, `rooz_adress_file`, `c_adress`, `t_sahamdar`, `hozor`, `va_ya`) VALUES
(64, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '17-18', '1400-11-17', '800', 'همشهری', '', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(65, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '20-16', '1400-11-20', '800', 'همشهری', '', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(66, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '3-3', '1400-3-3', '800', 'همشهری', 'با حضور اکثریت سهامداران', 'استهبان', 3, 'adress', '0'),
(67, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '20-18', '1400-11-18', '800', 'همشهری', 'adress', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(68, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '18-18', '1400-11-19', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/rozname/682.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(69, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '17-18', '1400-12-17', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/rozname/69/2.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(70, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '17-18', '1400-12-18', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/rozname/70/2.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(71, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '16-20', '1400-10-16', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/rozname/71/2.jpg', 'استهبان', 4, 'با حضور اکثریت سهامداران', '0'),
(72, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '18-17', '1400-12-19', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/rozname/72/2 - Copy.jpg', 'استهبان', 4, 'با حضور اکثریت سهامداران', '0'),
(73, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '20-18', '1400-12-19', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/rozname/73/2.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(74, '09363236838', '32سشسی874', 'نیکو ثبت', '32569874', 25698744, '19-19', '1400-11-20', '500', 'همشهری', './upload/img/sj_tamdid_sahami_khas/rozname/74/2 - Copy.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(75, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '20-18', '1400-10-18', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/rozname/75/2.jpg', 'استهبان', 4, 'با حضور اکثریت سهامداران', '0'),
(76, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '20-15', '1400-10-18', '100', 'همشهری', './upload/img/sj_tamdid_sahami_khas/rozname/76/one.jpg', 'استهبان', 4, 'با حضور اکثریت سهامداران', '0'),
(77, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '17-19', '1400-10-17', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/rozname/77/tow - Copy.png', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(78, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '18-19', '1400-12-18', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/rozname/78/rozname/2.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(79, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '19-20', '1400-12-21', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/79/rozname/', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(80, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '2-1', '1400-3-3', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/80/rozname/2.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(81, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '18-18', '1400-12-17', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/81/rozname/2.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(82, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '14-12', '1400-1-16', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/82/rozname/2.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(83, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '21-19', '1400-12-19', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/83/rozname/2.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(84, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '18-19', '1400-11-19', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/84/rozname/2.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(85, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '14-13', '1400-2-15', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/85/rozname/2.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(86, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '17-17', '1400-11-17', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/86/rozname/2.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(87, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '4-4', '1400-3-3', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/87/rozname/4.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(88, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '3-3', '1401-2-3', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/88/rozname/1.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(89, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '13-12', '1400-3-14', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/89/rozname/1.jpg', 'استهبان', 4, 'با حضور اکثریت سهامداران', '0'),
(90, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '14-13', '1400-3-15', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/90/rozname/1.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', 'به تنهایی حق امضا دارد'),
(91, '09363236838', '32569874', 'نیکو ثبت', '32569874', 25698744, '2:1', '1400/2/2', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/91/rozname/1.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', 'به تنهایی حق امضا دارد'),
(92, '09363236838', '335522', 'مهندسان برتر', '88445522', 3652147, '15:30', '1400/5/8', '2000', 'آرمان ملی', './upload/img/sj_tamdid_sahami_khas/92/rozname/ArmanMeli_s.jpg', 'استهبان خیابان ابوذر', 4, 'با حضور کلیه سهامداران', 'به تنهایی حق امضا دارد'),
(93, '09363236838', '32569874', 'مهندسان برتر', '32569874', 25698744, '4:4', '1401/3/4', '500', 'کیهان', './upload/img/sj_tamdid_sahami_khas/93/rozname/1.jpg', 'استهبان', 4, 'با حضور اکثریت سهامداران', 'به تنهایی حق امضا دارد'),
(94, '09363236838', '32569874', 'مهندسان برتر', '3256سشیب4', 25698744, '19:14', '1400/12/21', '20', 'کیهان', './upload/img/sj_tamdid_sahami_khas/94/rozname/1.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(95, '09363236838', '32569874', 'مهندسان برتر', '32569874', 25698744, '4:4', '1400/4/4', '500', 'کیهان', './upload/img/sj_tamdid_sahami_khas/95/rozname/1.jpg', 'استهبان', 4, 'با', '0'),
(96, '09363236838', '32569874', 'مهندسان برتر', '32569874', 25698744, '3:2', '1401/5/4', 'sdfg', 'کیهان', './upload/img/sj_tamdid_sahami_khas/96/rozname/1.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(97, '09363236838', '32569874', 'مهندسان برتر', '32569874', 25698744, '3:3', '1400/4/4', '800', 'آرمان ملی', './upload/img/sj_tamdid_sahami_khas/97/rozname/1.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', 'به تنهایی حق امضا دارد'),
(98, '09172253815', '32569874', 'مهندسان برتر', '32569874', 25698744, '3:3', '1401/2/3', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/98/rozname/1.jpg', 'استهان', 3, 'با حضور کلیه سهامداران', 'به تنهایی حق امضا دارد'),
(99, '09363236838', '32569874', 'مهندسان برتر', '32569874', 25698744, '17:18', '1400/10/18', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/99/rozname/ArmanMeli_s.jpg', 'استهبان', 3, 'با حضور کلیه سهامداران', 'به تنهایی حق امضا دارد'),
(100, '09172253815', '32569874', 'مهندسان برتر', '32569874', 25698744, '18:20', '1401/11/18', '800', 'آرمان ملی', './upload/img/sj_tamdid_sahami_khas/100/rozname/1.jpg', 'استهبان', 3, 'با حضور کلیه سهامداران', 'به تنهایی حق امضا دارد'),
(101, '09172253815', '32569874', 'مهندسان برتر', '32569874', 25698744, '5:3', '1400/5/5', '800', 'کیهان', './upload/img/sj_tamdid_sahami_khas/101/rozname/1.jpg', '125478963355', 3, 'با حضور اکثریت سهامداران', 'به تنهایی حق امضا دارد'),
(102, '09172253815', '2525', 'پشمالوها', '245245', 13123, '16:15', '1400/12/16', '800', 'پشم صبح', './upload/img/sj_tamdid_sahami_khas/102/rozname/1.jpg', 'شیراز', 3, 'با حضور اکثریت سهامداران', 'به تنهایی حق امضا دارد'),
(103, '', '32569874', 'مهندسان برتر', '32569874', 25698744, '18:20', '1400/12/19', '800', 'کیهان', './upload/img/sj_tamdid_sahami_khas/103/rozname/ArmanMeli_s.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(104, '', '32569874', 'مهندسان برتر', '32569874', 25698744, '21:18', '1400/11/23', '800', 'کیهان', './upload/img/sj_tamdid_sahami_khas/104/rozname/cropped-Untitled-1-1-192x192.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(105, '', '32569874', 'مهندسان برتر', '32569874', 25698744, '21:18', '1400/11/23', '800', 'کیهان', './upload/img/sj_tamdid_sahami_khas/105/rozname/cropped-Untitled-1-1-192x192.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(106, '', '32569874', 'مهندسان برتر', '32569874', 25698744, '19:20', '1400/12/19', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/106/rozname/cropped-Untitled-1-1-192x192.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(107, '', '32569874', 'مهندسان برتر', '32569874', 25698744, '19:20', '1400/12/19', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/107/rozname/ArmanMeli_s.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(108, '09172253815', '252542', 'پشمالوها', '245245', 25789611, '14:11', '1400/10/15', '800', 'پشم صبح', './upload/img/sj_tamdid_sahami_khas/108/rozname/ArmanMeli_s.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(109, '09172253815', '32569874', 'مهندسان برتر', '32569874', 25698744, '20:17', '1400/12/19', '800', 'کیهان', './upload/img/sj_tamdid_sahami_khas/109/rozname/cropped-Untitled-1-1-192x192.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', 'به تنهایی حق امضا دارد'),
(110, '09172253815', '32569874', 'مهندسان برتر', '32569874', 25698744, '19:18', '1400/12/21', '800', 'کیهان', './upload/img/sj_tamdid_sahami_khas/110/rozname/1.jpg', 'استهبان', 3, 'با حضور اکثریت سهامداران', 'به تنهایی حق امضا دارد'),
(111, '09172253815', '32569874', 'مهندسان برتر', '32569874', 25698744, '19:18', '1400/11/21', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/111/rozname/', 'استهبان', 3, 'با حضور اکثریت سهامداران', '0'),
(112, '09172253815', '32569874', 'مهندسان برتر', '32569874', 25698744, '17:20', '1400/11/18', '800', 'کیهان', '', 'استهبان', 3, 'با حضور کلیه سهامداران', '0'),
(113, '09172253815', '32569874', 'مهندسان برتر', '32569874', 25698744, '21:17', '1400/12/19', '800', 'کیهان', './upload/img/sj_tamdid_sahami_khas/113/rozname/1.jpg', 'استهبان', 3, 'با حضور کلیه سهامداران', 'به تنهایی حق امضا دارد'),
(114, '09172253815', '32569874', 'مهندسان برتر', '32569874', 25698744, '17:17', '1400/11/18', '800', 'کیهان', './upload/img/sj_tamdid_sahami_khas/114/rozname/1.jpg', 'استهبان', 3, 'با حضور کلیه سهامداران', 'به تنهایی حق امضا دارد'),
(115, '09172253815', '32569874', 'مهندسان برتر', '32569874', 25698744, '20:20', '1400/12/18', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/115/rozname/1.jpg', 'استهبان', 3, 'با حضور کلیه سهامداران', 'به تنهایی حق امضا دارد'),
(116, '09172253815', '252542', 'پشمالوها', '245245', 25789611, '16:16', '1400/11/14', '800', 'پشم صبح', './upload/img/sj_tamdid_sahami_khas/116/rozname/1.jpg', 'استهبان', 3, 'با حضور کلیه سهامداران', 'به تنهایی حق امضا دارد');

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
(3, '09363236838', '70873e8580c9900986939611618d7b1e', 'امیرعلی', 'خدادوستی', 'amirhossein6838@gmail.com', '07153225604', 1),
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
