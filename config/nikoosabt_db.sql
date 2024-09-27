-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 04, 2022 at 04:24 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
) ENGINE=MyISAM AUTO_INCREMENT=137 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `masolan_sj_tamdid_sahami_khas`
--

INSERT INTO `masolan_sj_tamdid_sahami_khas` (`id`, `id_sj`, `fname`, `lname`, `masoliat`, `scan_cart_meli`, `scan_shenasname_meli`, `phone`, `emza`, `code_meli`, `monshi`) VALUES
(136, 140, 'امیرحسین', 'بشکاری', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/140/sahamdar/09363225438/Capture.JPG', '09363225438', NULL, '2520125463', NULL),
(135, 140, 'امیرحسین', 'بشکاری', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/140/sahamdar/09363225438/Capture.JPG', '09363225438', NULL, '2520125463', NULL),
(134, 140, 'حسین', 'علی پور', 'بازرس علی البدل', NULL, './upload/img/sj_tamdid_sahami_khas/140/bazresin/bazresAlalbadal/Capture.JPG', '09362541725', NULL, '2520156532', 'منشی جلسه'),
(133, 140, 'امیرحسین', 'خدادوست', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/140/bazresin/bazresAsli/Capture.JPG', '09362145796', NULL, '2523698714', NULL),
(132, 139, 'امیرحسین', 'بشکار', 'نماینده قانونی', NULL, './upload/img/sj_tamdid_sahami_khas/139/sahamdar/09172253815/1.jpg', '09172253815', NULL, '2520149663', NULL),
(131, 139, 'امیرحسین', 'بشکار', 'نماینده قانونی', NULL, './upload/img/sj_tamdid_sahami_khas/139/sahamdar/09172253815/1.jpg', '09172253815', NULL, '2520149663', NULL),
(130, 139, 'علی ', 'خودی', 'بازرس علی البدل', NULL, './upload/img/sj_tamdid_sahami_khas/139/bazresin/bazresAlalbadal/2.jpg', '09363236838', NULL, '2520142543', 'منشی جلسه'),
(129, 139, 'قلی', 'قلی پور', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/139/bazresin/bazresAsli/3.png', '09362548796', NULL, '2523698714', NULL),
(128, 138, 'امیرحسین', 'بشکار', 'نماینده قانونی', NULL, './upload/img/sj_tamdid_sahami_khas/138/sahamdar/09172253815/1.jpg', '09172253815', NULL, '2520149663', NULL),
(127, 138, 'امیرحسین', 'بشکار', 'نماینده قانونی', NULL, './upload/img/sj_tamdid_sahami_khas/138/sahamdar/09172253815/1.jpg', '09172253815', NULL, '2520149663', NULL),
(126, 138, 'امیرحسین', 'علی پور', 'بازرس علی البدل', NULL, './upload/img/sj_tamdid_sahami_khas/138/bazresin/bazresAlalbadal/dice6.png', '09363654838', NULL, '2520854543', NULL),
(125, 138, 'امیرحسین', 'خدادوست', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/138/bazresin/bazresAsli/dice5.png', '09367865796', NULL, '2521242543', NULL),
(124, 137, 'امیرحسین', 'بشکار', 'نماینده قانونی', NULL, './upload/img/sj_tamdid_sahami_khas/137/sahamdar/09172253815/1.jpg', '09172253815', NULL, '2520149663', NULL),
(123, 137, 'امیرحسین', 'بشکار', 'نماینده قانونی', NULL, './upload/img/sj_tamdid_sahami_khas/137/sahamdar/09172253815/1.jpg', '09172253815', NULL, '2520149663', NULL),
(122, 137, 'امیرحسین', 'خدادوست', 'بازرس علی البدل', NULL, './upload/img/sj_tamdid_sahami_khas/137/bazresin/bazresAlalbadal/dice5.png', '09173653815', NULL, '2520259663', NULL),
(121, 137, 'امیرحسین', 'خدادوست', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/137/bazresin/bazresAsli/3.png', '09362145796', NULL, '2520149663', NULL),
(120, 133, 'امیرحسین', 'بشکار', 'نماینده قانونی', NULL, './upload/img/sj_tamdid_sahami_khas/133/sahamdar/09172253815/1.jpg', '09172253815', NULL, '2520149663', NULL),
(119, 133, 'امیرحسین', 'خدادوستی', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/133/sahamdar/09363236838/2.jpg', '09363236838', NULL, '2520125463', 'منشی جلسه'),
(118, 133, 'حسین', 'علی پور', 'بازرس علی البدل', NULL, './upload/img/sj_tamdid_sahami_khas/133/bazresin/bazresAlalbadal/dice6.png', '09363235438', NULL, '2520156532', NULL),
(116, 132, 'امیرحسین', 'بشکار', 'نماینده قانونی', NULL, './upload/img/sj_tamdid_sahami_khas/132/sahamdar/09172253815/1.jpg', '09172253815', NULL, '2520149663', NULL),
(115, 132, 'امیرعلی', 'بشکار', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/132/sahamdar/09363236838/2.jpg', '09363236838', NULL, '2520125463', 'منشی جلسه'),
(114, 132, 'امیرحسین', 'علی پور', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/132/bazresin/bazresAlalbadal/dice6.png', '09363236838', NULL, '2520142543', 'منشی جلسه'),
(112, 131, 'امیرحسین', 'خدادوستی', 'نماینده قانونی', NULL, './upload/img/sj_tamdid_sahami_khas/131/sahamdar/09172253815/1.jpg', '09172253815', NULL, '2520149663', NULL),
(111, 131, 'امیرحسین', 'خدادوستی', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/131/sahamdar/09363236838/2.jpg', '09363236838', NULL, '2520125463', 'منشی جلسه'),
(110, 131, 'امیرحسین', 'علی پور', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/131/bazresin/bazresAlalbadal/1.jpg', '09363236838', NULL, '2520149663', 'منشی جلسه'),
(109, 131, 'امیرحسین', 'خدادوست', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/131/bazresin/bazresAsli/2.jpg', '09362145796', NULL, '2520125663', NULL),
(108, 130, 'امیرحسین', 'خدادوستی', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/130/sahamdar/09363236838/2.jpg', '09363236838', NULL, '2520125463', 'منشی جلسه'),
(107, 130, 'امیرحسین', 'خدادوستی', 'نماینده قانونی', NULL, './upload/img/sj_tamdid_sahami_khas/130/sahamdar/09172253815/1.jpg', '09172253815', NULL, '2520149663', NULL),
(106, 130, 'امیرحسین', 'خودی', 'بازرس علی البدل', NULL, './upload/img/sj_tamdid_sahami_khas/130/bazresin/bazresAlalbadal/2.jpg', '09363232548', NULL, '2520124563', NULL),
(105, 130, 'امیرحسین', 'خدادوست', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/130/bazresin/bazresAsli/1.jpg', '09362145796', NULL, '2536149663', NULL),
(117, 133, 'امیرحسین', 'خدادوست', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/133/bazresin/bazresAsli/dice5.png', '09362548796', NULL, '2525789663', NULL),
(104, 126, 'امیرحسین', 'خدادوستی', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/126/sahamdar/09363236838/3.png', '09363236838', NULL, '2520125463', 'منشی جلسه'),
(103, 126, 'مریم', 'اژه ای', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/126/namaiande/3.png', '09365214758', NULL, '2520149663', NULL),
(102, 126, 'حسین', 'خودی', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/126/bazresin/bazresAlalbadal/3.png', '09363236838', NULL, '2520142543', 'منشی جلسه'),
(101, 126, 'امیرحسین', 'خدادوست', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/126/bazresin/bazresAsli/3.png', '09362548796', NULL, '2520125463', NULL),
(100, 125, 'امیرحسین', 'بشکار', 'نماینده قانونی', NULL, './upload/img/sj_tamdid_sahami_khas/125/sahamdar/09172253815/3.png', '09172253815', NULL, '2520149663', NULL),
(99, 125, 'مریم', 'اژه ای', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/125/namaiande/3.png', '09365214758', NULL, '2520135663', NULL),
(98, 125, 'امیرحسین', 'خدادوست', 'بازرس علی البدل', NULL, './upload/img/sj_tamdid_sahami_khas/125/bazresin/bazresAlalbadal/modirAmel.png', '09363269838', NULL, '2520147853', 'منشی جلسه'),
(97, 125, 'امیرحسین', 'خدادوست', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/125/bazresin/bazresAsli/3.png', '09362545796', NULL, '2520236663', NULL),
(96, 124, 'امیرحسین', 'خدادوست', 'نماینده قانونی', NULL, './upload/img/sj_tamdid_sahami_khas/124/sahamdar/09172253815/3.png', '09172253815', NULL, '2520149663', NULL),
(95, 124, 'مریم', 'خودی', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/124/namaiande/3.png', '09365214758', NULL, '2520135663', NULL),
(94, 124, 'امیرحسین', 'خودی', 'بازرس علی البدل', NULL, './upload/img/sj_tamdid_sahami_khas/124/bazresin/bazresAlalbadal/3.png', '09363239878', NULL, '2520142543', 'منشی جلسه'),
(113, 132, 'امیرحسین', 'خدادوست', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/132/bazresin/bazresAsli/dice5.png', '09362548796', NULL, '2520149663', NULL),
(93, 124, 'امیرحسین', 'خدادوست', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/124/bazresin/bazresAsli/3.png', '09363365838', NULL, '2525782563', NULL),
(92, 123, 'امیرحسین', 'بشکار', 'نماینده قانونی', NULL, './upload/img/sj_tamdid_sahami_khas/123/sahamdar/09172253815/3.png', '09172253815', NULL, '2520149663', NULL),
(91, 123, 'امیر', 'خودی', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/123/namaiande/3.png', '09365214758', NULL, '2520149663', NULL),
(90, 123, 'امیرحسین', 'خدادوست', 'وکالت داده', NULL, './upload/img/sj_tamdid_sahami_khas/123/bazresin/bazresAlalbadal/3.png', '09363236838', NULL, '2520142543', 'منشی جلسه'),
(89, 123, 'امیرحسین', 'خدادوست', 'بازرس اصلی', NULL, './upload/img/sj_tamdid_sahami_khas/123/bazresin/bazresAsli/3.png', '09362542546', NULL, '2520143253', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `namaiandegiha`
--

DROP TABLE IF EXISTS `namaiandegiha`;
CREATE TABLE IF NOT EXISTS `namaiandegiha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `codemelli` varchar(15) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `adresswork` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `codeposti` varchar(15) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `email` varchar(40) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `shenasname_pic` varchar(150) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `cardmelli_pic` varchar(150) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `mojavez_pic` varchar(150) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `namaiandegiha`
--

INSERT INTO `namaiandegiha` (`id`, `user_id`, `name`, `codemelli`, `phone`, `adresswork`, `codeposti`, `email`, `shenasname_pic`, `cardmelli_pic`, `mojavez_pic`) VALUES
(1, 'NULL', 'کربلایی محمد', '2520149663', '09363236838', 'بیلا', '654987', 'amirhossein6838@gmail.com', '', '', ''),
(2, 'NULL', 'کربلایی محمد', '2520149663', '09363236838', 'بیلا', '654987', 'amirhossein6838@gmail.com', '', '', ''),
(3, 'NULL', 'کربلایی محمد', '2520149663', '09363225438', 'بیلا', '654987', 'amirhossein6838@gmail.com', '', '', ''),
(4, 'NULL', 'کربلایی محمد', '2520149663', '09363236838', 'بیلا', '654987', 'amirhosin3103@yahoo.com', '', '', ''),
(5, 'NULL', 'کربلایی محمد', '2520149663', '09363236838', 'بیلا', '654987', 'amirhosin3103@yahoo.com', '', '', ''),
(6, 'NULL', 'کربلایی محمد', '2520149663', '09363236838', 'بیلا', '654987', 'amirhosin3103@yahoo.com', '', '', ''),
(7, 'NULL', 'کربلایی محمد', '2520149663', '09363236838', 'بیلا', '654987', 'amirhosin3103@yahoo.com', '', '', ''),
(8, 'NULL', 'کربلایی محمد', '2520149663', '09363236838', 'بیلا', '654987', 'amirhosin3103@yahoo.com', '', '', '');

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
  `chek_vakil` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `meli_code` varchar(12) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `tedad_saham` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `scan_cart_meli` text COLLATE utf8mb4_persian_ci,
  `scan_shenasname` text COLLATE utf8mb4_persian_ci,
  `vazife_jalase` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `semat` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `emza` text COLLATE utf8mb4_persian_ci,
  `semat_nahaei` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=234 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `sahamdaran`
--

INSERT INTO `sahamdaran` (`id`, `id_sj_tamdid_sahami_khas`, `phone`, `fname`, `lname`, `chek_modiamel`, `chek_vakil`, `meli_code`, `tedad_saham`, `scan_cart_meli`, `scan_shenasname`, `vazife_jalase`, `semat`, `emza`, `semat_nahaei`) VALUES
(181, 123, '09172253815', 'امیرحسین', 'بشکار', '', NULL, '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/123/sahamdar/09172253815/3.png', 'رئیس جلسه', 'سهامدار', NULL, 'رئیس هیئت مدیره'),
(182, 123, '09363236838', 'امیر', 'بشکار', NULL, NULL, '2520125463', '100', '', './upload/img/sj_tamdid_sahami_khas/123/sahamdar/09363236838/3.png', 'ناظر جلسه', 'سهامدار', NULL, 'نائب رئیس هیئت مدیره'),
(183, 123, '09363225438', 'امیرحسین', 'بشکار', '', NULL, '2520125663', '100', '', './upload/img/sj_tamdid_sahami_khas/123/sahamdar/09363225438/3.png', 'ناظر جلسه', 'سهامدار', NULL, 'عضو اصلی هیئت مدیره'),
(184, 124, '09172253815', 'امیرحسین', 'خدادوست', 'مدیر عامل', NULL, '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/124/sahamdar/09172253815/3.png', 'رئیس جلسه', 'سهامدار', NULL, 'نائب رئیس هیئت مدیره'),
(185, 124, '09172214815', 'امیر', 'بشکار', '', NULL, '2520142563', '100', '', './upload/img/sj_tamdid_sahami_khas/124/sahamdar/09172214815/3.png', 'ناظر جلسه', 'سهامدار', NULL, 'رئیس هیئت میره'),
(186, 124, '09363225838', 'امیرعلی', 'بشکاری', '', NULL, '2520254663', '100', '', './upload/img/sj_tamdid_sahami_khas/124/sahamdar/09363225838/3.png', 'ناظر جلسه', 'سهامدار', NULL, 'عضو اصلی هیئت مدیره'),
(187, 125, '09172253815', 'امیرحسین', 'بشکار', 'مدیر عامل', NULL, '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/125/sahamdar/09172253815/3.png', 'رئیس جلسه', 'سهامدار', NULL, 'رئیس هیئت مدیره'),
(188, 125, '09363236838', 'امیرحسین', 'بشکار', '', NULL, '2520125463', '100', '', './upload/img/sj_tamdid_sahami_khas/125/sahamdar/09363236838/3.png', 'ناظر جلسه', 'سهامدار', NULL, 'نائب رئیس هیئت مدیره'),
(189, 125, '09363232548', 'امیرحسین', 'بشکار', '', NULL, '2520122563', '100', '', './upload/img/sj_tamdid_sahami_khas/125/sahamdar/09363232548/3.png', 'ناظر جلسه', 'سهامدار', NULL, 'عضو اصلی هیئت مدیره'),
(190, 126, '09172253815', 'امیرحسین', 'بشکار', '', NULL, '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/126/sahamdar/09172253815/3.png', 'رئیس جلسه', 'سهامدار', NULL, 'رئیس هیئت مدیره'),
(191, 126, '09363236838', 'امیرحسین', 'خدادوستی', 'مدیر عامل', NULL, '2520125463', '100', '', './upload/img/sj_tamdid_sahami_khas/126/sahamdar/09363236838/3.png', 'ناظر جلسه', 'سهامدار', NULL, 'نائب رئیس هیئت مدیره'),
(192, 126, '09363225438', 'امیرحسین', 'بشکار', '', NULL, '2520125663', '100', '', './upload/img/sj_tamdid_sahami_khas/126/sahamdar/09363225438/3.png', 'ناظر جلسه', 'سهامدار', NULL, 'عضو اصلی هیئت مدیره'),
(193, 127, '09172253815', 'امیرحسین', 'بشکار', 'مدیر عامل', NULL, '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/127/sahamdar/09172253815/1637158236766.JPEG', 'ناظر جلسه', 'سهامدار', NULL, 'نائب رئیس هیئت مدیره'),
(194, 127, '09363236838', 'امیرحسین', 'بشکار', '', NULL, '2520125463', '100', '', './upload/img/sj_tamdid_sahami_khas/127/sahamdar/09363236838/1.jpg', 'رئیس جلسه', 'سهامدار', NULL, 'رئیس هیئت میره'),
(195, 127, '09363231438', 'امیرحسین', 'بشکار', '', NULL, '2520125254', '100', '', './upload/img/sj_tamdid_sahami_khas/127/sahamdar/09363231438/1.jpg', 'منشی جلسه', 'سهامدار', NULL, 'رئیس هیئت میره'),
(196, 127, '09363225838', 'امیرحسینی', 'خدادوست', '', NULL, '2520114763', '100', '', './upload/img/sj_tamdid_sahami_khas/127/sahamdar/09363225838/2.jpg', 'ناظر جلسه', 'سهامدار', NULL, 'عضو اصلی هیئت مدیره'),
(197, 128, '09172253815', 'امیرحسین', 'خدادوستی', 'مدیر عامل', NULL, '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/128/sahamdar/09172253815/1.jpg', 'رئیس جلسه', 'سهامدار', NULL, 'رئیس هیئت مدیره'),
(198, 129, '09172253815', 'امیرحسین', 'بشکار', 'مدیر عامل', NULL, '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/129/sahamdar/09172253815/1.jpg', 'رئیس جلسه', 'سهامدار', NULL, 'نائب رئیس هیئت مدیره'),
(199, 129, '09363236838', 'امیرحسین', 'بشکار', '', NULL, '2520125463', '100', '', './upload/img/sj_tamdid_sahami_khas/129/sahamdar/09363236838/2.jpg', 'منشی جلسه', 'سهامدار', NULL, 'رئیس هیئت مدیره'),
(200, 129, '09363232548', 'امیرحسین', 'بشکار', '', NULL, '2536145463', '100', '', './upload/img/sj_tamdid_sahami_khas/129/sahamdar/09363232548/2.jpg', 'ناظر جلسه', 'سهامدار', NULL, 'عضو اصلی هیئت مدیره'),
(201, 129, '09363225438', 'امیرحسینی', 'خدادوست', '', NULL, '2520125663', '100', '', './upload/img/sj_tamdid_sahami_khas/129/sahamdar/09363225438/3.png', 'ناظر جلسه', 'سهامدار', NULL, 'سهامدار'),
(202, 130, '09172253815', 'امیرحسین', 'خدادوستی', '', 'وکیل', '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/130/sahamdar/09172253815/1.jpg', 'رئیس جلسه', 'سهامدار', NULL, 'رئیس هیئت مدیره'),
(203, 130, '09363236838', 'امیرحسین', 'خدادوستی', 'مدیر عامل', '', '2520125463', '100', '', './upload/img/sj_tamdid_sahami_khas/130/sahamdar/09363236838/2.jpg', 'منشی جلسه', 'سهامدار', NULL, 'نائب رئیس هیئت مدیره'),
(204, 130, '09363225438', 'امیرعلی', 'خدادوستی', '', '', '2520125663', '100', '', './upload/img/sj_tamdid_sahami_khas/130/sahamdar/09363225438/3.png', 'ناظر جلسه', 'سهامدار', NULL, 'عضو اصلی هیئت مدیره'),
(205, 130, '09363225838', 'امیرحسین', 'بشکار', '', '', '2520122543', '100', '', './upload/img/sj_tamdid_sahami_khas/130/sahamdar/09363225838/3.png', 'ناظر جلسه', 'سهامدار', NULL, 'سهامدار'),
(206, 131, '09172253815', 'امیرحسین', 'خدادوستی', '', '', '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/131/sahamdar/09172253815/1.jpg', 'رئیس جلسه', 'سهامدار', NULL, 'رئیس هیئت مدیره'),
(207, 131, '09363236838', 'امیرحسین', 'خدادوستی', '', 'وکیل', '2520125463', '100', '', './upload/img/sj_tamdid_sahami_khas/131/sahamdar/09363236838/2.jpg', 'منشی جلسه', 'سهامدار', NULL, 'نائب رئیس هیئت مدیره'),
(208, 131, '09363225438', 'امیرحسین', 'خدادوست', '', '', '2520125663', '100', '', './upload/img/sj_tamdid_sahami_khas/131/sahamdar/09363225438/3.png', 'ناظر جلسه', 'سهامدار', NULL, 'عضو اصلی هیئت مدیره'),
(209, 131, '09363225838', 'امیرحسین', 'بشکار', '', '', '2520254663', '100', '', './upload/img/sj_tamdid_sahami_khas/131/sahamdar/09363225838/3.png', 'ناظر جلسه', 'سهامدار', NULL, 'سهامدار'),
(210, 132, '09172253815', 'امیرحسین', 'بشکار', 'مدیر عامل', '', '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/132/sahamdar/09172253815/1.jpg', 'رئیس جلسه', 'سهامدار', NULL, 'رئیس هیئت مدیره'),
(211, 132, '09363236838', 'امیرعلی', 'بشکار', '', 'وکیل', '2520125463', '100', '', './upload/img/sj_tamdid_sahami_khas/132/sahamdar/09363236838/2.jpg', 'منشی جلسه', 'سهامدار', NULL, 'نائب رئیس هیئت مدیره'),
(212, 132, '09363225438', 'امیرحسین', 'خدادوست', '', '', '2520125663', '100', '', './upload/img/sj_tamdid_sahami_khas/132/sahamdar/09363225438/3.png', 'ناظر جلسه', 'سهامدار', NULL, 'عضو اصلی هیئت مدیره'),
(213, 132, '09363225838', 'امیرحسین', 'بشکاری', '', '', '2520254663', '100', '', './upload/img/sj_tamdid_sahami_khas/132/sahamdar/09363225838/dice1.png', 'ناظر جلسه', 'سهامدار', NULL, 'سهامدار'),
(214, 133, '09172253815', 'امیرحسین', 'بشکار', 'مدیر عامل', '', '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/133/sahamdar/09172253815/1.jpg', 'رئیس جلسه', 'سهامدار', NULL, 'رئیس هیئت مدیره'),
(215, 133, '09363236838', 'امیرحسین', 'خدادوستی', '', 'وکیل', '2520125463', '100', '', './upload/img/sj_tamdid_sahami_khas/133/sahamdar/09363236838/2.jpg', 'منشی جلسه', 'سهامدار', NULL, 'نائب رئیس هیئت مدیره'),
(216, 133, '09363225438', 'امیرعلی', 'خدادوست', '', '', '2520125663', '100', '', './upload/img/sj_tamdid_sahami_khas/133/sahamdar/09363225438/3.png', 'ناظر جلسه', 'سهامدار', NULL, 'عضو اصلی هیئت مدیره'),
(217, 133, '09363225838', 'امیرحسین', 'خدادوستی', '', '', '2520254663', '100', '', './upload/img/sj_tamdid_sahami_khas/133/sahamdar/09363225838/dice6.png', 'ناظر جلسه', 'سهامدار', NULL, 'سهامدار'),
(218, 136, '09172253815', 'امیرحسین', 'بشکار', '', 'وکیل', '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/136/sahamdar/09172253815/1.jpg', 'رئیس جلسه', 'سهامدار', NULL, 'نائب رئیس هیئت مدیره'),
(219, 136, '09363225838', 'امیرحسین', 'بشکار', '', '', '2520254663', '100', '', './upload/img/sj_tamdid_sahami_khas/136/sahamdar/09363225838/2.jpg', 'منشی جلسه', 'سهامدار', NULL, 'رئیس هیئت مدیره'),
(220, 137, '09172253815', 'امیرحسین', 'بشکار', 'مدیر عامل', 'وکیل', '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/137/sahamdar/09172253815/1.jpg', 'رئیس جلسه', 'سهامدار', NULL, 'عضو اصلی هیئت مدیره'),
(221, 137, '09363236838', 'امیرعلی', 'خدادوستی', '', '', '2520125463', '100', '', './upload/img/sj_tamdid_sahami_khas/137/sahamdar/09363236838/1.jpg', 'منشی جلسه', 'سهامدار', NULL, 'عضو اصلی هیئت مدیره'),
(222, 137, '09363225838', 'ابوالفضل', 'بشکار', '', '', '2520254663', '100', '', './upload/img/sj_tamdid_sahami_khas/137/sahamdar/09363225838/3.png', 'ناظر جلسه', 'سهامدار', NULL, 'رئیس هیئت مدیره'),
(223, 137, '09363232548', 'امیر', 'بشکاری', '', '', '2520114663', '100', '', './upload/img/sj_tamdid_sahami_khas/137/sahamdar/09363232548/3.png', 'ناظر جلسه', 'سهامدار', NULL, 'نائب رئیس هیئت مدیره'),
(224, 138, '09172253815', 'امیرحسین', 'بشکار', 'مدیر عامل', 'وکیل', '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/138/sahamdar/09172253815/1.jpg', 'رئیس جلسه', 'سهامدار', NULL, 'عضو اصلی هیئت مدیره'),
(225, 138, '09363236838', 'امیرحسین', 'بشکار', '', '', '2520125463', '100', '', './upload/img/sj_tamdid_sahami_khas/138/sahamdar/09363236838/2.jpg', 'منشی جلسه', 'سهامدار', NULL, 'رئیس هیئت مدیره'),
(226, 138, '09363225438', 'امیرحسین', 'خدادوستی', '', '', '2520125663', '100', '', './upload/img/sj_tamdid_sahami_khas/138/sahamdar/09363225438/2.jpg', 'ناظر جلسه', 'سهامدار', NULL, 'نائب رئیس هیئت مدیره'),
(227, 138, '09363225838', 'امیرحسین', 'بشکار', '', '', '2520254663', '100', '', './upload/img/sj_tamdid_sahami_khas/138/sahamdar/09363225838/dice1.png', 'ناظر جلسه', 'سهامدار', NULL, 'عضو اصلی هیئت مدیره'),
(228, 139, '09172253815', 'امیرحسین', 'بشکار', 'مدیر عامل', 'وکیل', '2520149663', '100', '', './upload/img/sj_tamdid_sahami_khas/139/sahamdar/09172253815/1.jpg', 'رئیس جلسه', 'سهامدار', NULL, 'رئیس هیئت مدیره'),
(229, 139, '09363236838', 'امیرعلی', 'بشکار', '', '', '2520125463', '100', '', './upload/img/sj_tamdid_sahami_khas/139/sahamdar/09363236838/2.jpg', 'ناظر جلسه', 'سهامدار', NULL, 'نائب رئیس هیئت مدیره'),
(230, 139, '09363225438', 'امیرحسین', 'بشکار', '', '', '2520125663', '100', '', './upload/img/sj_tamdid_sahami_khas/139/sahamdar/09363225438/2.jpg', 'ناظر جلسه', 'سهامدار', NULL, 'عضو اصلی هیئت مدیره'),
(231, 140, '09363236838', 'امیرحسین', 'خدادوستی', '', '', '2520149663', '40', '', './upload/img/sj_tamdid_sahami_khas/140/sahamdar/09363236838/Capture.JPG', 'رئیس جلسه', 'سهامدار', NULL, 'رئیس هیئت مدیره'),
(232, 140, '09363225438', 'امیرحسین', 'بشکاری', 'مدیر عامل', 'وکیل', '2520125463', '40', '', './upload/img/sj_tamdid_sahami_khas/140/sahamdar/09363225438/Capture.JPG', 'ناظر جلسه', 'سهامدار', NULL, 'نائب رئیس هیئت مدیره'),
(233, 140, '09363225838', 'امیرعلی', 'بشکاری', '', '', '2520125663', '40', '', './upload/img/sj_tamdid_sahami_khas/140/sahamdar/09363225838/Capture.JPG', 'ناظر جلسه', 'سهامدار', NULL, 'عضو اصلی هیئت مدیره');

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
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `sj_taein_modiran`
--

INSERT INTO `sj_taein_modiran` (`sj_id`, `rel_sj_id`, `t_shorooe_jalase`, `d_shorooe_jalase`, `end_date`) VALUES
(19, '138', '11:00', '1401/3/13', NULL),
(18, '137', '17:17', '1401/11/20', NULL),
(17, '133', '20:18', '1401/11/18', NULL),
(16, '132', '19:17', '1400/12/21', NULL),
(15, '131', '17:16', '1400/12/17', NULL),
(14, '126', '16:14', '1400/2/16', NULL),
(13, '125', '19:16', '1400/- ماه -/18', NULL),
(12, '124', '4:3', '1400/3/4', NULL),
(11, '123', '21:19', '1400/11/18', NULL),
(20, '139', '18:17', '1400/12/19', NULL),
(21, '140', '16:14', '1400/4/15', NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=141 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `sj_tamdid_sahami_khas`
--

INSERT INTO `sj_tamdid_sahami_khas` (`sj_id`, `rel_user`, `c_shenase_meli`, `c_name`, `c_shomare_sabt`, `c_sarmaye`, `t_shorooe_jalase`, `d_shorooe_jalase`, `t_saham`, `rooz_name`, `rooz_adress_file`, `c_adress`, `t_sahamdar`, `hozor`, `emza`, `emza2`) VALUES
(140, '09172253815', '32569874', 'مهندسان برتر', '32569874', 25698744, '19:16', '1401/9/18', '250', 'بشارت نو', './upload/img/sj_tamdid_sahami_khas/140/rozname/Capture.JPG', 'استهبان', 3, 'با حضور اکثریت سهامداران', '', NULL),
(139, '09172253815', '32569874', 'مهندسان برتر', '32569874', 25698744, '4:5', '1400/2/5', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/139/rozname/3.png', 'استهبان', 3, 'با حضور اکثریت سهامداران', 'مدیر عامل', NULL),
(138, '09172253815', '32569874', 'نیکو ثبت', '88445522', 25698744, '21:00', '1400/7/17', '800', 'چهره نما', './upload/img/sj_tamdid_sahami_khas/138/rozname/PngItem_650808.png', 'استهبان', 4, 'با حضور اکثریت سهامداران', 'مدیر عامل یا رئیس هیئت مدیره', 'نائب رئیس هیئت مدیره یا عضو اصلی هیئت مدیره'),
(137, '09172253815', '32569874', 'مهندسان برتر', '32569874', 25698744, '21:00', '1400/12/17', '800', 'ابتکار', './upload/img/sj_tamdid_sahami_khas/137/rozname/PngItem_650808.png', 'استهبان', 4, 'با حضور اکثریت سهامداران', 'مدیر عامل و عضو اصلی هیئت مدیره یا عضو اصلی هیئت مدیره', 'رئیس هیئت مدیره و نائب رئیس هیئت مدیره'),
(136, '09172253815', '32569874', 'نیکو ثبت', '32569874', 25698744, '5:3', '1400/3/4', '800', 'ابرار', '', 'استهبان', 4, 'با حضور اکثریت سهامداران', NULL, NULL),
(135, '09172253815', '32569874', 'مهندسان برتر', '32569874', 25698744, '3:1', '1400/3/4', '800', '', '', 'sdf', 5, 'با حضور اکثریت سهامداران', NULL, NULL),
(134, '09172253815', '32569874', 'مهندسان برتر', '32569874', 25698744, '17:19', '1400/12/18', '800', 'اقتصاد', '', 'استهبان', 4, 'با حضور اکثریت سهامداران', NULL, NULL),
(133, '09172253815', '32569874', 'مهندسان برتر', '32569874', 25698744, '17:18', '1400/11/20', '800', 'همشهری', './upload/img/sj_tamdid_sahami_khas/133/rozname/dice6.png', 'استهبان', 4, 'با حضور اکثریت سهامداران', 'مدیر عامل و رئیس هیئت مدیره', NULL),
(132, '09172253815', '32569874', 'مهندسان برتر', '32569874', 25698744, '21:20', '1400/10/19', '800', 'کیهان', './upload/img/sj_tamdid_sahami_khas/132/rozname/PngItem_650808.png', 'استهبان', 4, 'با حضور اکثریت سهامداران', 'مدیر عامل و رئیس هیئت مدیره', NULL),
(130, '09172253815', '32569874', 'مهندسان برتر', '32569874', 25698744, '3:2', '1400/4/6', '800', 'کیهان', '', 'استهبان', 4, 'با حضور اکثریت سهامداران', NULL, NULL),
(131, '09172253815', '32569874', 'مهندسان برتر', '32569874', 25698744, '21:18', '1400/11/19', '800', 'کیهان', './upload/img/sj_tamdid_sahami_khas/131/rozname/1.jpg', 'استهبان', 4, 'با حضور کلیه سهامداران', 'مدیر عامل و رئیس هیئت مدیره', NULL),
(129, '09172253815', '32569874', 'مهندسان برتر', '32569874', 25698744, '3:1', '1401/1/1', '800', 'کیهان', '', 'استتهبان', 4, 'با حضور اکثریت سهامداران', NULL, NULL),
(127, '09172253815', '32569874', 'مهندسان برتر', '32569874', 25698744, '18:19', '1400/11/19', '800', 'کیهان', '', 'استهبان', 4, 'با حضور اکثریت سهامداران', NULL, NULL),
(128, '09172253815', '32569874', 'مهندسان برتر', '32569874', 25698744, '18:17', '1400/12/18', '800', 'کیهان', '', 'استهبان', 4, 'با حضور اکثریت سهامداران', NULL, NULL),
(126, '09363236838', '32569874', 'مهندسان برتر', '32569874', 25698744, '18:17', '1401/9/17', '800', 'کیهان', './upload/img/sj_tamdid_sahami_khas/126/rozname/3.png', 'استهبان', 3, 'با حضور اکثریت سهامداران', 'رئیس هیئت مدیره و مدیر عامل و نائب رئیس هیئت مدیره', 'رئیس هیئت مدیره یا عضو اصلی هیئت مدیره'),
(123, '09363236838', '32569874', 'مهندسان برتر', '32569874', 25698744, '19:18', '1400/10/19', '800', 'کیهان', './upload/img/sj_tamdid_sahami_khas/123/rozname/3.png', 'استهبان', 3, 'با حضور اکثریت سهامداران', 'مدیر عامل و رئیس هیئت مدیره و نائب رئیس هیئت مدیره', ''),
(124, '09363236838', '32569874', 'مهندسان برتر', '32569874', 25698744, '4:2', '1400/5/4', '800', 'کیهان', './upload/img/sj_tamdid_sahami_khas/124/rozname/3.png', 'استهبان', 3, 'با حضور اکثریت سهامداران', 'مدیر عامل و نائب رئیس هیئت مدیره و رئیس هیئت میره', ''),
(125, '09363236838', '32569874', 'مهندسان برتر', '32569874', 25698744, '20:20', '1400/12/19', '800', 'کیهان', './upload/img/sj_tamdid_sahami_khas/125/rozname/3.png', 'استهبان', 3, 'با حضور اکثریت سهامداران', 'مدیر عامل و رئیس هیئت مدیره و نائب رئیس هیئت مدیره', 'مدیر عامل و رئیس هیئت مدیره و مدیر عامل و رئیس هیئت مدیره');

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
