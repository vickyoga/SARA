-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 01:53 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hse_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `ab_attitude`
--

CREATE TABLE `ab_attitude` (
  `id_ab_attitude` int(11) NOT NULL,
  `attitude_img_path` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1,
  `ab_title` varchar(255) DEFAULT NULL,
  `ab_cont` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ab_attitude`
--

INSERT INTO `ab_attitude` (`id_ab_attitude`, `attitude_img_path`, `date_time`, `active_record`, `ab_title`, `ab_cont`) VALUES
(5, 'image/ab_hv_hs_apti/0affe8a861995a6836d56a1ed7fd292d.jpg', '2022-04-27 05:59:44', 1, 'Attitude', 'Hwaseung Enterprise has always been a values-driven organization. These values continue to direct the growth and business of Hwaseung companies.');

-- --------------------------------------------------------

--
-- Table structure for table `ab_banner`
--

CREATE TABLE `ab_banner` (
  `id_ab_banner` int(11) NOT NULL,
  `ab_b_img_path` varchar(255) NOT NULL,
  `ab_b_title` varchar(255) NOT NULL,
  `ab_b_content` mediumtext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ab_banner`
--

INSERT INTO `ab_banner` (`id_ab_banner`, `ab_b_img_path`, `ab_b_title`, `ab_b_content`, `date_time`, `active_record`) VALUES
(2, 'image/ab_hv_banner/90415deace169cb8058a713577e4cd67.webp', 'Heritage & Values', 'The ingenuity and vision of Hwaseung, and the way it inspired the industry to move forward.', '2022-04-25 07:30:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ab_heri`
--

CREATE TABLE `ab_heri` (
  `id_ab_heri` int(11) NOT NULL,
  `ab_heri_year` int(11) NOT NULL,
  `ab_heri_img_path` varchar(255) NOT NULL,
  `ab_heri_title` varchar(255) NOT NULL,
  `ab_heri_cont` mediumtext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ab_heri`
--

INSERT INTO `ab_heri` (`id_ab_heri`, `ab_heri_year`, `ab_heri_img_path`, `ab_heri_title`, `ab_heri_cont`, `date_time`, `active_record`) VALUES
(1, 2002, 'image/ab_heri/e93959ce53a674e0e90cd3c16eaa9404.webp', 'FOUNDATION', 'Hwaseung Vina was founded in the year 2002. which led to the beginning of new giant shoe manufacturing empire in Vietnam.', '2022-04-26 04:49:12', 1),
(2, 2008, 'image/ab_heri/1e98f25acef480a8fddea9d1470fff45.webp', 'SATELLITE FACTORY HWD, LT, VT', 'The first Satellite factory of Hwaseung Vina was set up in LT and Vung Tau (Vietnam).', '2022-04-26 05:43:24', 1),
(3, 2010, 'image/ab_heri/d657bd1ab0230c3cc75dbaf538552907.webp', 'DEVELOPMENT CENTRE NEO', 'The first In-house development center for NEO was set up in 2010 at Hwaseung Vina.', '2022-04-26 05:45:15', 1),
(4, 2014, 'image/ab_heri/46fa8091d7b5e0d50bc6c211c449c8d7.webp', 'DEVELOPMENT CENTRE ROYALS', 'The Second In-house development center for Royals was set up in 2014 at Hwaseung Vina.', '2022-04-26 05:46:00', 1),
(5, 2016, 'image/ab_heri/60e995aa9b799a18137149b6abbc0994.webp', 'HS ENTERPRISE IPO', 'The Second international factory of Hwaseung Vina was set up in Indonesia to spread manufacturing reach over Indonesia.', '2022-04-26 05:52:39', 1),
(6, 2016, 'image/ab_heri/df99d580c7c617eb1d57caec0130f404.webp', ' DEVELOPMENT CENTRE AD-RUNNING, HWI', 'The Third In-house development center for Adidas was set up in 2016 at Hwaseung Vina.', '2022-04-26 05:53:36', 1),
(7, 2017, 'image/ab_heri/4c2ef053ad101e0c5eb07d560af9b18e.webp', 'HS POLYTECH BOOST', 'he third subsidiary of Hwaseung Enterprise in Vietnam.', '2022-04-26 05:55:01', 1),
(8, 2018, 'image/ab_heri/bc8628009f0a48d378f2a07512863231.webp', 'DIRECT SOLING', 'Hwaseung Enterprise known for its innovation, came up with direct soling facility.', '2022-04-26 05:55:33', 1),
(9, 2018, 'image/ab_heri/2d12a7be9a74b8d12cad7f1eafd8cd83.webp', 'HS RACH GIA', 'The fourth subsidiary of Hwaseung Enterprise in Vietnam in Rach Gia.', '2022-04-26 05:56:27', 1),
(10, 2020, 'image/ab_heri/85594e26c992c845cbafdc89fdc0caec.webp', 'UNIPAX', 'The first Headwear Company was acquired by Hwaseung Enterprise.', '2022-04-26 05:57:24', 1),
(11, 2020, 'image/ab_heri/d1d342a6a73784521a76e74e8800051d.webp', 'DAE YOUNG', 'The first textile Company was acquired by Hwaseung Enterprise.', '2022-04-26 05:57:49', 1),
(12, 2020, 'image/ab_heri/c506b34fc0c963e788b69988e38aedc1.webp', 'ADIDAS INOVATION CENTRE', 'An innovation center was established by Hwaseung Enterprise.', '2022-04-26 05:58:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ab_hs_group`
--

CREATE TABLE `ab_hs_group` (
  `id_hs_group` int(11) NOT NULL,
  `hs_group_img_path` varchar(255) NOT NULL,
  `hs_group_title` varchar(255) NOT NULL,
  `hs_group_content` mediumtext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ab_hs_group`
--

INSERT INTO `ab_hs_group` (`id_hs_group`, `hs_group_img_path`, `hs_group_title`, `hs_group_content`, `date_time`, `active_record`) VALUES
(1, 'image/ab_hv_hs_group/6ac76303672fefc50ce9a0daeed07c05.jpg', 'About HS Group', 'The history of Hwaseung Group started with Dongyang Rubber Industry, which had manufactured rubber shoes titled in on Aug. 7, 1953. Since May of 1978 when Dongyang Chemical Industry, the matrix of Hwaseung R&A, Hwaseung established 6 affiliates and have g', '2022-04-25 09:25:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ab_hwaseung_enterprise`
--

CREATE TABLE `ab_hwaseung_enterprise` (
  `id_ab_hwa_ente` int(11) NOT NULL,
  `ab_hwa_ente_img_path` varchar(255) NOT NULL,
  `ab_hwa_ente_title` varchar(255) NOT NULL,
  `ab_hwa_ente_cont` mediumtext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ab_hwaseung_enterprise`
--

INSERT INTO `ab_hwaseung_enterprise` (`id_ab_hwa_ente`, `ab_hwa_ente_img_path`, `ab_hwa_ente_title`, `ab_hwa_ente_cont`, `date_time`, `active_record`) VALUES
(2, 'image/ab_hv_Hwaseung_Enterprise/963931b94cd5bf834d24bf7c4219ac03.jpg', 'Hwaseung Enterprise', 'Hwaseung Enterprise is a global enterprise, headquartered in South Korea, comprising 24 companies across 4 Verticals. With an aim to improve the quality of life of the communities globally, by creating value among our stakeholders and end customers based ', '2022-04-25 07:33:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ab_led_banner`
--

CREATE TABLE `ab_led_banner` (
  `id_ab_led_banner` int(11) NOT NULL,
  `ban_img_path` varchar(255) NOT NULL,
  `ban_title` varchar(255) NOT NULL,
  `ban_content` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ab_led_banner`
--

INSERT INTO `ab_led_banner` (`id_ab_led_banner`, `ban_img_path`, `ban_title`, `ban_content`, `date_time`, `active_record`) VALUES
(1, 'image/ab_led_banner/9d8c1aa169b5b4404ec2594985dca9d8.webp', 'Leadership & Management', 'The ingenuity and vision of Hwaseung, and the way it inspired the industry to move forward.', '2022-04-26 05:48:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ab_led_kylee`
--

CREATE TABLE `ab_led_kylee` (
  `id_ab_led_kylee` int(11) NOT NULL,
  `kylee_content` mediumtext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ab_led_kylee`
--

INSERT INTO `ab_led_kylee` (`id_ab_led_kylee`, `kylee_content`, `date_time`, `active_record`) VALUES
(1, 'CEO\r\nKY Lee born in 1962. He did his BA in Kyung Sung University. He was appointment as\r\nCEO of Hwaseung Enterprise in 2017. He has also been Vice President and CEO of\r\nHwaseung Vina between 2014-2016. Under his leadership, HSE became a Billion-dollar\r\nco', '2022-04-26 06:01:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ab_led_leadership`
--

CREATE TABLE `ab_led_leadership` (
  `id_leadership` int(11) NOT NULL,
  `leader_img_path` varchar(255) NOT NULL,
  `leader_name` varchar(255) NOT NULL,
  `leader_Designation` varchar(255) NOT NULL,
  `leader_content` mediumtext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ab_led_leadership`
--

INSERT INTO `ab_led_leadership` (`id_leadership`, `leader_img_path`, `leader_name`, `leader_Designation`, `leader_content`, `date_time`, `active_record`) VALUES
(1, 'image/ab_led_leadership/fca6e4ecdb9d9658173643cd000bf2ab.webp', 'Hugh Hamill', 'Strategic Advisor', 'Hugh Hamill holds a degree of Bachelor of Science from Pennsylvania State University. Hugh Hamill started his career with Hwaseung Enterprise in 2015. Before Hwaseung he was associated with major brands like Adidas and Reebok. His 28 years of working expe', '2022-04-26 06:14:51', 1),
(5, 'image/ab_led_leadership/0389cc9d71d32e261e56dbb64449de8d.webp', 'Mike Allicino', 'E. ECO', 'Mike Allicino obtained his bachelors degree in Business Administration from Miami University majoring in Marketing. <br>', '2022-04-26 09:52:28', 1),
(6, 'image/ab_led_leadership/81b5db213f2a95f1cba01a9a0b703179.webp', 'Darren Hamilton', 'E. COO (Apparel & Accessory)', 'Darren Hamilton did his bachelor’s in business administration from Simon\r\n Fraser University.  He holds the position of Executive COO at Hwaseung \r\nEnterprise (Apparel &amp; Accessory).\r\n<br>', '2022-04-26 09:53:00', 1),
(7, 'image/ab_led_leadership/bbcf29b9cf6fa0c664e5881061d8f4b1.webp', 'SD Lee', 'Vice President/ COO (Vertical)', 'SD Lee did his Bachelors in Polymer Engineering from Busan National University in the year\r\n1984. He holds the position of Vice President/COO (Vertical) at Hwaseung Enterprise\r\n(Vertical Division). SD Lee has 35 years in footwear chemical and product manu', '2022-04-26 09:53:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ab_mission`
--

CREATE TABLE `ab_mission` (
  `id_ab_mission` int(11) NOT NULL,
  `mission_img_path` varchar(255) NOT NULL,
  `mission_title` varchar(255) NOT NULL,
  `mission_content` mediumtext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ab_mission`
--

INSERT INTO `ab_mission` (`id_ab_mission`, `mission_img_path`, `mission_title`, `mission_content`, `date_time`, `active_record`) VALUES
(1, 'image/ab_hv_hs_mission/441112a45a0f92b50564a5c649dc8241.jpg', 'Mission', 'Hwaseung Enterprise has always been a values-driven organization. These values continue to direct the growth and business of Hwaseung companies.', '2022-04-25 09:24:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `app_access`
--

CREATE TABLE `app_access` (
  `id_app_access` int(11) NOT NULL,
  `app_access_title` varchar(255) NOT NULL,
  `app_access_cont` mediumtext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app_access`
--

INSERT INTO `app_access` (`id_app_access`, `app_access_title`, `app_access_cont`, `date_time`, `active_record`) VALUES
(1, 'Apparel & Accessories', 'Hwaseung has always been about excellence in manufacturing and sustainability. \r\nHence our venture into apparel business is a steppingstone to extend our excellence into this sector.\r\n<br>', '2022-04-26 10:17:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `app_acc_banner`
--

CREATE TABLE `app_acc_banner` (
  `id_app_acc_banner` int(11) NOT NULL,
  `app_acc_ban_img_path` varchar(255) NOT NULL,
  `app_acc_ban_title` varchar(255) NOT NULL,
  `app_acc_ban_cont` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app_acc_banner`
--

INSERT INTO `app_acc_banner` (`id_app_acc_banner`, `app_acc_ban_img_path`, `app_acc_ban_title`, `app_acc_ban_cont`, `date_time`, `active_record`) VALUES
(1, 'image/app_acc_banner_img/532261effa7eaf22a4776b89b0c3cd18.webp', 'Apparel & Accessories', 'Hwaseung has always been about excellence in manufacturing and sustainability. Hence our venture into apperal business is a stepping stone to extend our excellence into this sector.', '2022-04-25 07:10:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `app_acc_list`
--

CREATE TABLE `app_acc_list` (
  `id_app_acc_list` int(11) NOT NULL,
  `app_list_img_path` varchar(255) NOT NULL,
  `app_list_title` varchar(255) NOT NULL,
  `app_list_subtitle` varchar(255) NOT NULL,
  `app_list_cont` mediumtext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app_acc_list`
--

INSERT INTO `app_acc_list` (`id_app_acc_list`, `app_list_img_path`, `app_list_title`, `app_list_subtitle`, `app_list_cont`, `date_time`, `active_record`) VALUES
(1, 'image/app_acc_list_img/3c09f2761fdd945cb74f199409106e5e.webp', 'Unipax', 'UNIPAX Vi Thanh', 'Hwaseung has always been about excellence in manufacturing and sustainability. ', '2022-04-26 10:19:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bus_str`
--

CREATE TABLE `bus_str` (
  `id_bus_str` int(11) NOT NULL,
  `str_title` varchar(255) NOT NULL,
  `str_content` mediumtext NOT NULL,
  `str_img_path` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus_str`
--

INSERT INTO `bus_str` (`id_bus_str`, `str_title`, `str_content`, `str_img_path`, `date_time`, `active_record`) VALUES
(2, 'TRIPLE THREAT STRATEGY', 'Our Purpose is to move the world forward through the idea of being a creative platform for all.\r\nOur Triple threat strategy is our way forward to help our customers \r\nto be able to bring their ideas and dreams to turn them into reality in a\r\n sustainable ', 'image/bus_str/eda3c0f6c1523212390dbff353293362.webp', '2022-04-26 09:59:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bus_str_banner`
--

CREATE TABLE `bus_str_banner` (
  `id_str_banner` int(11) NOT NULL,
  `ban_img_path` varchar(255) NOT NULL,
  `ban_title` varchar(255) NOT NULL,
  `ban_content` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus_str_banner`
--

INSERT INTO `bus_str_banner` (`id_str_banner`, `ban_img_path`, `ban_title`, `ban_content`, `date_time`, `active_record`) VALUES
(1, 'image/bus_str_banner/371cbfe59e8edec2d967a2ceffaa8579.webp', 'Business Strategy', 'HWAESUNG consists of 24 seperate entities in multiple countries and continuing to expand its presence across the globe.', '2022-04-26 09:54:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bus_ventures`
--

CREATE TABLE `bus_ventures` (
  `id_bus_ventures` int(11) NOT NULL,
  `bus_ventures_img_path` varchar(255) NOT NULL,
  `bus_Ventures_title` varchar(255) NOT NULL,
  `bus_Ventures_cont` mediumtext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus_ventures`
--

INSERT INTO `bus_ventures` (`id_bus_ventures`, `bus_ventures_img_path`, `bus_Ventures_title`, `bus_Ventures_cont`, `date_time`, `active_record`) VALUES
(1, 'image/bus_ventures_img/d4470e856856ff07faec49cf0fedd1ea.webp', 'Footwear', 'HWASEUNG has a rich history and experience of footwear manufacturing. Starting from the first factory in Korea to present factories in Indonesia, China and Vietnam.', '2022-04-25 06:18:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bus_verti_banner`
--

CREATE TABLE `bus_verti_banner` (
  `id_bus_verti_ban` int(11) NOT NULL,
  `ban_img_path` varchar(255) NOT NULL,
  `verti_ban_title` varchar(255) NOT NULL,
  `verti_ban_content` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus_verti_banner`
--

INSERT INTO `bus_verti_banner` (`id_bus_verti_ban`, `ban_img_path`, `verti_ban_title`, `verti_ban_content`, `date_time`, `active_record`) VALUES
(1, 'image/banner_img/ddb8729c3bd6823a40fa21aed1ab61d2.webp', 'Business Divisions', 'HWASEUNG consists of 24 separate entities in multiple countries and continuing to expand its presence across the globe.', '2022-04-26 10:02:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `career_banner`
--

CREATE TABLE `career_banner` (
  `id_career_banner` int(11) NOT NULL,
  `career_ban_img_path` varchar(255) NOT NULL,
  `career_ban_title` varchar(255) NOT NULL,
  `career_ban_cont` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career_banner`
--

INSERT INTO `career_banner` (`id_career_banner`, `career_ban_img_path`, `career_ban_title`, `career_ban_cont`, `date_time`, `active_record`) VALUES
(1, 'image/career_ban_img/aaac7bc8eb3ca7c2e02688a596127134.webp', 'Careers', 'We expand the limits of human potential, include, and unite people trying to create a more efficient and sustainable world.', '2022-04-26 11:03:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `career_contact`
--

CREATE TABLE `career_contact` (
  `id_career_contact` int(11) NOT NULL,
  `career_cont_img_path` varchar(255) NOT NULL,
  `career_cont_title` varchar(255) NOT NULL,
  `career_cont_subtitle` varchar(255) NOT NULL,
  `career_cont_addr` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `career_ourmomt`
--

CREATE TABLE `career_ourmomt` (
  `id_career_our` int(11) NOT NULL,
  `our_momt_img_path` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career_ourmomt`
--

INSERT INTO `career_ourmomt` (`id_career_our`, `our_momt_img_path`, `date_time`, `active_record`) VALUES
(1, 'image/career_ourmot/983f654885ab46ca4a0dc046c07055e6.webp', '2022-04-26 11:03:45', 1),
(2, 'image/career_ourmot/8281d48800b6b9a56543e933cffc3007.webp', '2022-04-26 11:03:51', 1),
(3, 'image/career_ourmot/97c89ea34002a52fe69ec1f530a9d68c.webp', '2022-04-26 11:03:54', 1),
(4, 'image/career_ourmot/86d3fbffdce7d99c5776965594776d17.webp', '2022-04-26 11:03:57', 1),
(5, 'image/career_ourmot/7e7db6e9e4fc786425aab185ef710822.webp', '2022-04-26 11:04:01', 1),
(6, 'image/career_ourmot/5e0033125aa5c5e8e9c779c575040900.webp', '2022-04-26 11:04:04', 1),
(7, 'image/career_ourmot/f4177f7449b7394a31fd476aeb23c17b.webp', '2022-04-26 11:04:07', 1),
(8, 'image/career_ourmot/f07e43821e8c58089cfd88670d581779.webp', '2022-04-26 11:04:11', 1),
(9, 'image/career_ourmot/c243364c8237e7409ac993d04f2961ab.webp', '2022-04-26 11:04:15', 1),
(10, 'image/career_ourmot/5c5c4a138337c4c19160ead31d479bf3.webp', '2022-04-26 11:04:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cont`
--

CREATE TABLE `cont` (
  `id_cont` int(11) NOT NULL,
  `cont_title` varchar(255) NOT NULL,
  `cont_sub_title` varchar(255) NOT NULL,
  `cont_addr` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cont`
--

INSERT INTO `cont` (`id_cont`, `cont_title`, `cont_sub_title`, `cont_addr`, `date_time`, `active_record`) VALUES
(4, 'Contact Us', 'Reach Out to Us', '<div>ADDRESS.</div><div><span>8th floor, Dong lk Sung Bong Building,<br>301 Seocho DaeRo, Seocho Gu, Seoul,<br>Hwaseung Enterprise</span></div><div>PHONE.</div><div><h3>02-588-8043</h3></div><div>FAX.</div><div>02-588-8045</div><div>EMAIL.</div><div>conta', '2022-04-27 05:58:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cont_banner`
--

CREATE TABLE `cont_banner` (
  `id_Cont_banner` int(11) NOT NULL,
  `Cont_ban_img_path` varchar(255) NOT NULL,
  `Cont_ban_title` varchar(255) NOT NULL,
  `Cont_ban_cont` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cont_banner`
--

INSERT INTO `cont_banner` (`id_Cont_banner`, `Cont_ban_img_path`, `Cont_ban_title`, `Cont_ban_cont`, `date_time`, `active_record`) VALUES
(2, '', 'Contact', 'Get the latest news and feature stories on our businesses, community initiatives, heritage, and people. Scroll to read.', '2022-04-28 06:49:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id_footer` int(11) NOT NULL,
  `footer_title` varchar(255) NOT NULL,
  `footer_link` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hu_about_hse`
--

CREATE TABLE `hu_about_hse` (
  `ab_id` int(11) NOT NULL,
  `ab_title` varchar(255) NOT NULL,
  `ab_Content` longtext NOT NULL,
  `ab_video_path` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hu_ab_hse`
--

CREATE TABLE `hu_ab_hse` (
  `id_hu_hse` int(11) NOT NULL,
  `hu_hse_title` varchar(255) NOT NULL,
  `hu_hse_cont` longtext NOT NULL,
  `hu_hse_vido_path` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hu_ab_hse`
--

INSERT INTO `hu_ab_hse` (`id_hu_hse`, `hu_hse_title`, `hu_hse_cont`, `hu_hse_vido_path`, `date_time`, `active_record`) VALUES
(2, ' About Us', 'Hwaseung Enterprise is a global enterprise, headquartered in South Korea, comprising 24 companies across 4 Verticals. With an aim to improve the quality of life of the communities globally, by creating value among our stakeholders and end customers based ', 'image/hu_ab_hse/166c0da456fe4392256286cbd2236749.mp4', '2022-04-25 06:06:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hu_banner`
--

CREATE TABLE `hu_banner` (
  `b_id` int(11) NOT NULL,
  `b_tittle` varchar(255) NOT NULL,
  `b_content` varchar(255) NOT NULL,
  `b_img_path` varchar(255) NOT NULL,
  `b_img_path_mob` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hu_banner`
--

INSERT INTO `hu_banner` (`b_id`, `b_tittle`, `b_content`, `b_img_path`, `b_img_path_mob`, `date_time`, `active_record`) VALUES
(1, 'Moving Forward', 'To become a universal creator platform. ', 'image/banner_img/b49502e92956ef987bc91a53cc825b89.png', 'image/banner_img_mob/b49502e92956ef987bc91a53cc825b89.png', '2022-04-25 06:01:43', 1),
(2, 'Flawless Execution', 'To make the world suitable for our future generation. ', 'image/banner_img/7354aadeb19b12bb47b07fb6b551b41b.png', 'image/banner_img_mob/7354aadeb19b12bb47b07fb6b551b41b.png', '2022-04-25 06:02:18', 1),
(3, 'Industry Disruption', 'Helping brands to make their product from best to great.', 'image/banner_img/cd813920525ebc885e401d4a3130d0b8.png', 'image/banner_img_mob/cd813920525ebc885e401d4a3130d0b8.webp', '2022-04-25 06:03:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hu_business_ventures`
--

CREATE TABLE `hu_business_ventures` (
  `id_busi_ven` int(11) NOT NULL,
  `busi_ven_title` varchar(255) NOT NULL,
  `busi_ven_Content` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hu_careers`
--

CREATE TABLE `hu_careers` (
  `id_career` int(11) NOT NULL,
  `career_title` varchar(255) NOT NULL,
  `career_content` mediumtext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hu_careers`
--

INSERT INTO `hu_careers` (`id_career`, `career_title`, `career_content`, `date_time`, `active_record`) VALUES
(1, 'Careers', 'At Hwaseung we recognize the critical role that good talent plays in the success\r\nand growth of each of any business. Here’s an invitation to change the world.\r\nCome join our family which is driven by do-more, go-further attitude<br>', '2022-04-25 06:14:17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hu_investor_relations`
--

CREATE TABLE `hu_investor_relations` (
  `id_investor` int(11) NOT NULL,
  `investor_title` varchar(255) NOT NULL,
  `investor_content` mediumtext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hu_investor_relations`
--

INSERT INTO `hu_investor_relations` (`id_investor`, `investor_title`, `investor_content`, `date_time`, `active_record`) VALUES
(2, ' Investor Relations', 'Welcome to Hwaseung Enterprise’s Investor Relations. Here\r\nyou will find information on topics such as the company’s\r\nfinancials, E-disclosure, and financial yearly report.<br>', '2022-04-25 06:13:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hu_sustainability`
--

CREATE TABLE `hu_sustainability` (
  `id_sustain` int(11) NOT NULL,
  `sustain_title` varchar(255) NOT NULL,
  `sustain_content` mediumtext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hu_sustainability`
--

INSERT INTO `hu_sustainability` (`id_sustain`, `sustain_title`, `sustain_content`, `date_time`, `active_record`) VALUES
(1, 'Sustainability', 'Welcome to Hwaseung Enterprise innovation and\r\nsustainability page. Here you will find information on\r\ntopics such as the Hwaseung’s latest innovations, our\r\ninitiatives to save our environment, and safety\r\nmeasure for our employees.<br>', '2022-04-25 06:13:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ir`
--

CREATE TABLE `ir` (
  `id_ir` int(11) NOT NULL,
  `ir_img_path` varchar(255) NOT NULL,
  `ir_title` varchar(255) NOT NULL,
  `ir_content` mediumtext NOT NULL,
  `pdf_path` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ir`
--

INSERT INTO `ir` (`id_ir`, `ir_img_path`, `ir_title`, `ir_content`, `pdf_path`, `date_time`, `active_record`) VALUES
(1, 'image/ir_img/8db2a3712d434ce7e45af5f5a6549852.webp', 'Financials', 'Kindly check out financial reports for the past year.', 'image/Financials_pdf/7bac02577fc5065533ae870538f2dbbc.pdf', '2022-04-25 06:30:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ir_a`
--

CREATE TABLE `ir_a` (
  `id_ir` int(11) NOT NULL,
  `ir_img_path` varchar(255) NOT NULL,
  `ir_title` varchar(255) NOT NULL,
  `ir_content` mediumtext NOT NULL,
  `pdf_path` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ir_a`
--

INSERT INTO `ir_a` (`id_ir`, `ir_img_path`, `ir_title`, `ir_content`, `pdf_path`, `date_time`, `active_record`) VALUES
(1, 'image/ir_annual_img/87536180325bea8891bb404bf7107f0b.webp', 'Annual Reports', 'Kindly check out Annual report for the past one year.', 'image/Annual_pdf/87536180325bea8891bb404bf7107f0b.pdf', '2022-04-25 06:33:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ir_banner`
--

CREATE TABLE `ir_banner` (
  `id_ir_banner` int(11) NOT NULL,
  `ir_ban_img_path` varchar(255) NOT NULL,
  `ir_ban_title` varchar(255) NOT NULL,
  `ir_ban_cont` mediumtext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ir_banner`
--

INSERT INTO `ir_banner` (`id_ir_banner`, `ir_ban_img_path`, `ir_ban_title`, `ir_ban_cont`, `date_time`, `active_record`) VALUES
(1, 'image/ir_banner_img/20dfd9619e63709e6a2bd677adc65de7.webp', 'Investor Relations', 'Welcome to Hwaseung Enterprise’s Investor Relations Here you will find information on topics such as the company’s financials, E-disclosure, and financial yearly report.', '2022-04-25 06:36:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ir_e`
--

CREATE TABLE `ir_e` (
  `id_ir` int(11) NOT NULL,
  `ir_img_path` varchar(255) NOT NULL,
  `ir_title` varchar(255) NOT NULL,
  `ir_content` mediumtext NOT NULL,
  `pdf_path` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ir_e`
--

INSERT INTO `ir_e` (`id_ir`, `ir_img_path`, `ir_title`, `ir_content`, `pdf_path`, `date_time`, `active_record`) VALUES
(1, 'image/ir_e_img/c2abede97c429294c0769d2b596d5b68.webp', 'E-Disclosure', 'Kindly look into our E-Disclosure for more information.', 'image/E-Disclosure_pdf/c2abede97c429294c0769d2b596d5b68.pdf', '2022-04-25 06:34:50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `latest_news`
--

CREATE TABLE `latest_news` (
  `id_latest_news` int(11) NOT NULL,
  `news_img_path` varchar(255) NOT NULL,
  `latest_news_title` varchar(255) NOT NULL,
  `latest_news_cont` mediumtext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latest_news`
--

INSERT INTO `latest_news` (`id_latest_news`, `news_img_path`, `latest_news_title`, `latest_news_cont`, `date_time`, `active_record`) VALUES
(1, 'image/latest_news_img/ff93c83d347a91823ad4476fc2397912.webp', 'Amazing Family Initiative', 'Target: Model employee and family selected by Hwaseung Enterprise \r\naffiliates (2 persons)(6 HSVina, 2 Daeyoung Textile, 2 Unipax, 1 \r\nPolytech, 1 IBS (Total of 12 family/ month.). The employees are selected\r\n on the basis of their excellence in workplace', '2022-04-26 10:58:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mate`
--

CREATE TABLE `mate` (
  `id_mate` int(11) NOT NULL,
  `mate_title` varchar(255) NOT NULL,
  `mate_cont` mediumtext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mate`
--

INSERT INTO `mate` (`id_mate`, `mate_title`, `mate_cont`, `date_time`, `active_record`) VALUES
(1, 'Materials', 'HSE’s triple threat strategy has given birth to our venture into material manufacturing. \r\nWe intend to bring our flawless execution and better consumer experience in material manufacturing.\r\n<br>', '2022-04-26 10:21:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mate_banner`
--

CREATE TABLE `mate_banner` (
  `id_mate_banner` int(11) NOT NULL,
  `mate_ban_img_path` varchar(255) NOT NULL,
  `mate_ban_title` varchar(255) NOT NULL,
  `mate_ban_cont` mediumtext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mate_banner`
--

INSERT INTO `mate_banner` (`id_mate_banner`, `mate_ban_img_path`, `mate_ban_title`, `mate_ban_cont`, `date_time`, `active_record`) VALUES
(1, 'image/mate_banner_img/1c40dd091532d9ed92846429298648a3.webp', 'Materials', 'Hwaseung triple thread strategy has given birth to our venture into material manufacturing.', '2022-04-25 07:11:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mate_list`
--

CREATE TABLE `mate_list` (
  `id_mate_list` int(11) NOT NULL,
  `mate_list_img_path` varchar(255) NOT NULL,
  `mate_list_title` varchar(255) NOT NULL,
  `mate_list_subtitle` varchar(255) NOT NULL,
  `mate_list_cont` mediumtext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mate_list`
--

INSERT INTO `mate_list` (`id_mate_list`, `mate_list_img_path`, `mate_list_title`, `mate_list_subtitle`, `mate_list_cont`, `date_time`, `active_record`) VALUES
(1, 'image/mate_list_img/5505d76421121886b2fd7443f28149fe.webp', 'Dae Young', 'Dae Young', 'HSE’s triple threat strategy has given birth to our venture into material manufacturing. ', '2022-04-26 10:22:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_banner`
--

CREATE TABLE `news_banner` (
  `id_news_banner` int(11) NOT NULL,
  `news_ban_img_path` varchar(255) NOT NULL,
  `news_ban_title` varchar(255) NOT NULL,
  `news_ban_cont` mediumtext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_banner`
--

INSERT INTO `news_banner` (`id_news_banner`, `news_ban_img_path`, `news_ban_title`, `news_ban_cont`, `date_time`, `active_record`) VALUES
(1, 'image/news_banner_img/b6457274149b4ff0585ee6665d4409d7.webp', 'Newsroom', 'Get the latest news and feature stories on our businesses community initiative, heritage, and people. scroll to read.', '2022-04-26 10:49:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_blogs`
--

CREATE TABLE `news_blogs` (
  `id_news_blogs` int(11) NOT NULL,
  `news_blogs_img_path` varchar(255) NOT NULL,
  `news_blogs_title` varchar(255) NOT NULL,
  `news_blogs_cont` longtext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_blogs`
--

INSERT INTO `news_blogs` (`id_news_blogs`, `news_blogs_img_path`, `news_blogs_title`, `news_blogs_cont`, `date_time`, `active_record`) VALUES
(1, 'image/news_blogs_img/a7e5b2167a8a0c5551c9ccdaf9ab27d8.webp', 'Conference to review and commend the implementation of the Provincial Peoples Committee program on strengthening cooperation and mobilizing foreign non-governmental', 'On December 15th 2021, the Provincial Union of Friendship Organizations, the Department of Planning and Investment and the Management Board of Dong Nai Industrial Parks collectively organized a conference to review and praise distinctive collectives on im', '2022-04-26 11:00:12', 1),
(2, 'image/news_blogs_img/f44c26584b18ab83966a9051d5846113.webp', 'HWASEUNG Enterprise 2021 CDP Scoring Result', 'Hwaseung Enterprise achieved a score of B- for the first-time ever \r\nresponse to the Carbon Disclosure Project (CDP) Climate Change \r\nquestionnaire. This score is higher than the Textiles &amp; Fabric Goods\r\n sector average of C<br>', '2022-04-26 11:02:10', 1),
(3, 'image/news_blogs_img/e755e06d3d0efcd765fc7b9222ffaa6e.webp', 'Labor Conference 2021', 'Hwaseung Vina Co., Ltd., has following the direction of the District \r\nCommission for Mass Mobilization, the Nhon Trach District Labor \r\nConfederation on the organization of the Employee Conference in 2021<br>', '2022-04-26 11:02:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `our_sa`
--

CREATE TABLE `our_sa` (
  `id_our_sa` int(11) NOT NULL,
  `our_sa_title` varchar(255) NOT NULL,
  `our_sa_cont` mediumtext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `our_sa`
--

INSERT INTO `our_sa` (`id_our_sa`, `our_sa_title`, `our_sa_cont`, `date_time`, `active_record`) VALUES
(1, 'Our Sustainability', 'Being a sustainable business is about striking a perfect balance between\r\n shareholder expectations and the needs of our employees,\r\nthe workers in our supply chain and the world around us. We truly \r\nbelieve that acting as a responsible business – one wh', '2022-04-26 10:30:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sa_banner`
--

CREATE TABLE `sa_banner` (
  `id_sa_banner` int(11) NOT NULL,
  `sa_ban_img_path` varchar(255) NOT NULL,
  `sa_ban_title` varchar(255) NOT NULL,
  `sa_ban_cont` mediumtext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sa_banner`
--

INSERT INTO `sa_banner` (`id_sa_banner`, `sa_ban_img_path`, `sa_ban_title`, `sa_ban_cont`, `date_time`, `active_record`) VALUES
(1, 'image/sa_banner_img/32032f48d4ae2fc558816a8d6c759dcd.webp', 'Sustainability', 'Hwaseung Enterprise will strive to become a sustainable group through active social responsibility activities.', '2022-04-26 10:29:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sa_box`
--

CREATE TABLE `sa_box` (
  `id_sa_box` int(11) NOT NULL,
  `sa_box_img_path` varchar(255) NOT NULL,
  `sa_box_cont` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sa_box`
--

INSERT INTO `sa_box` (`id_sa_box`, `sa_box_img_path`, `sa_box_cont`, `date_time`, `active_record`) VALUES
(1, 'image/sa_box_icon/e976005e6364f09676ee42948aaff162.png', 'Commits to 30% GHG emissions reduction by 2030 w/2019 baseline', '2022-04-26 10:30:32', 1),
(2, 'image/sa_box_icon/705bcd433e1cc8e99e41b4a31be458c8.png', 'Establish a path to Decarbonization', '2022-04-26 10:33:21', 1),
(3, 'image/sa_box_icon/81b32e6ada5a3ba544603a8511ecc007.png', 'Promote climate friendly sustainable materials', '2022-04-26 10:33:36', 1),
(4, 'image/sa_box_icon/4c477d6123291cf03e69b7caf5801683.png', 'Eliminate coal boilers by 2023', '2022-04-26 10:33:58', 1),
(5, 'image/sa_box_icon/742d9dca1280450c373480d078d4839b.png', 'Coordinate roof top sollar installation on all manufacturing facilities', '2022-04-26 10:34:16', 1),
(6, 'image/sa_box_icon/536a8cd5e8fd97176bfe5c6d1a9117f5.png', 'Establish Energy Efficiency Programs in all manufacturing facilities', '2022-04-26 10:39:03', 1),
(7, 'image/sa_box_icon/98a3d5cbec0750bb0ca8979646a0316c.png', 'Consider RE100 Target in Future for 2030', '2022-04-26 10:39:16', 1),
(8, 'image/sa_box_icon/aa5bdb99ab9c8c4b9c3bf18777bec0e0.png', 'Establish a Sustainability Governance Organization & Process', '2022-04-26 10:39:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `supply`
--

CREATE TABLE `supply` (
  `id_supply` int(11) NOT NULL,
  `supply_title` varchar(255) NOT NULL,
  `supply_cont` mediumtext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supply`
--

INSERT INTO `supply` (`id_supply`, `supply_title`, `supply_cont`, `date_time`, `active_record`) VALUES
(1, 'Supply Chain Solution', 'Hwaseung has believed in serving its customers with all-in-one creator \r\nplatform. To support our manufacturing business Hwaseung has also\r\ninvested in business which support them.<br>', '2022-04-26 10:23:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `supply_banner`
--

CREATE TABLE `supply_banner` (
  `id_sply_banner` int(11) NOT NULL,
  `sply_ban_img_path` varchar(255) NOT NULL,
  `sply_ban_title` varchar(255) NOT NULL,
  `sply_ban_cont` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supply_banner`
--

INSERT INTO `supply_banner` (`id_sply_banner`, `sply_ban_img_path`, `sply_ban_title`, `sply_ban_cont`, `date_time`, `active_record`) VALUES
(2, 'image/supply_banner_img/1f207f9443842f90589463a66f003956.webp', 'Supply Chain Solution', 'Hwaseung has believed in serving its customers with all-in-one creator platform.', '2022-04-26 10:26:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `supply_list`
--

CREATE TABLE `supply_list` (
  `id_supply_list` int(11) NOT NULL,
  `sply_list_img_path` varchar(255) NOT NULL,
  `sply_list_title` varchar(255) NOT NULL,
  `sply_list_subtitle` varchar(255) NOT NULL,
  `suply_list_cont` mediumtext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supply_list`
--

INSERT INTO `supply_list` (`id_supply_list`, `sply_list_img_path`, `sply_list_title`, `sply_list_subtitle`, `suply_list_cont`, `date_time`, `active_record`) VALUES
(1, 'image/supply_list_img/63e1670255e9ae7737c7dccc9e442250.webp', 'IBS Trading', 'International B2B Solutions Trading', 'Hwaseung has believed in serving its customers with all-in-one creator platform.', '2022-04-26 10:23:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `user_type` smallint(6) NOT NULL,
  `log_status` smallint(6) NOT NULL,
  `login_ip` varchar(100) NOT NULL,
  `last_login` datetime NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('0','1','2') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`, `user_type`, `log_status`, `login_ip`, `last_login`, `created_on`, `updated_on`, `status`) VALUES
(1, 'a', 'a', 'cXQxN3Zsekl3NU82bEp3SlhXdDZ0UT09', 1, 0, '37.35.67.159', '2020-11-25 15:14:30', '2022-03-14 03:55:03', '2022-03-14 03:55:03', '1'),
(2, 'b', 'admin@hse.kr', 'QXRaaGNURWNzb2tJRHZLUXpMaWJyUT09', 2, 1, '::1', '2022-04-28 17:12:34', '2022-04-28 11:42:34', '2022-04-28 11:42:34', '1');

-- --------------------------------------------------------

--
-- Table structure for table `verti_ft`
--

CREATE TABLE `verti_ft` (
  `id_verti_ft` int(11) NOT NULL,
  `verti_ft_title` varchar(255) NOT NULL,
  `verti_ft_content` longtext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verti_ft`
--

INSERT INTO `verti_ft` (`id_verti_ft`, `verti_ft_title`, `verti_ft_content`, `date_time`, `active_record`) VALUES
(1, 'Footwear', 'Hwaseung Footwear division believes in delivering products with flawless execution. \r\nWe are currently 60,000 strong and our belief of everyone is a creator is the driving force \r\nfor us to provide our customers with products which are innovative, sustain', '2022-04-26 10:04:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `verti_ft_banner`
--

CREATE TABLE `verti_ft_banner` (
  `id_verti_id` int(11) NOT NULL,
  `verti_ft_img_path` varchar(255) NOT NULL,
  `verti_ft_title` varchar(255) NOT NULL,
  `verti_ft_content` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verti_ft_banner`
--

INSERT INTO `verti_ft_banner` (`id_verti_id`, `verti_ft_img_path`, `verti_ft_title`, `verti_ft_content`, `date_time`, `active_record`) VALUES
(2, 'image/verti_ft_banner_img/f4577eafe19bd65145a53f7ba6f639e3.webp', 'Footwear', 'HWASEUNG has a rich history and experience of footwear manufacturing. Starting from the first factory in Korea to present factories in Indonesia, China and Vietnam.', '2022-04-25 07:08:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `verti_ft_list`
--

CREATE TABLE `verti_ft_list` (
  `id_verti_ft_list` int(11) NOT NULL,
  `verti_ft_img_path` varchar(255) NOT NULL,
  `verti_ft_list_title` varchar(255) NOT NULL,
  `verti_ft_list_subtitle` varchar(255) NOT NULL,
  `verti_ft_list_cont` mediumtext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_record` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verti_ft_list`
--

INSERT INTO `verti_ft_list` (`id_verti_ft_list`, `verti_ft_img_path`, `verti_ft_list_title`, `verti_ft_list_subtitle`, `verti_ft_list_cont`, `date_time`, `active_record`) VALUES
(1, 'image/verti_ft_list_img/d88b71319b92967b16e34b8c885e337e.webp', 'HS Vina', 'Hwaesung Vina', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', '2022-04-26 10:06:05', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ab_attitude`
--
ALTER TABLE `ab_attitude`
  ADD PRIMARY KEY (`id_ab_attitude`);

--
-- Indexes for table `ab_banner`
--
ALTER TABLE `ab_banner`
  ADD PRIMARY KEY (`id_ab_banner`);

--
-- Indexes for table `ab_heri`
--
ALTER TABLE `ab_heri`
  ADD PRIMARY KEY (`id_ab_heri`);

--
-- Indexes for table `ab_hs_group`
--
ALTER TABLE `ab_hs_group`
  ADD PRIMARY KEY (`id_hs_group`);

--
-- Indexes for table `ab_hwaseung_enterprise`
--
ALTER TABLE `ab_hwaseung_enterprise`
  ADD PRIMARY KEY (`id_ab_hwa_ente`);

--
-- Indexes for table `ab_led_banner`
--
ALTER TABLE `ab_led_banner`
  ADD PRIMARY KEY (`id_ab_led_banner`);

--
-- Indexes for table `ab_led_kylee`
--
ALTER TABLE `ab_led_kylee`
  ADD PRIMARY KEY (`id_ab_led_kylee`);

--
-- Indexes for table `ab_led_leadership`
--
ALTER TABLE `ab_led_leadership`
  ADD PRIMARY KEY (`id_leadership`);

--
-- Indexes for table `ab_mission`
--
ALTER TABLE `ab_mission`
  ADD PRIMARY KEY (`id_ab_mission`);

--
-- Indexes for table `app_access`
--
ALTER TABLE `app_access`
  ADD PRIMARY KEY (`id_app_access`);

--
-- Indexes for table `app_acc_banner`
--
ALTER TABLE `app_acc_banner`
  ADD PRIMARY KEY (`id_app_acc_banner`);

--
-- Indexes for table `app_acc_list`
--
ALTER TABLE `app_acc_list`
  ADD PRIMARY KEY (`id_app_acc_list`);

--
-- Indexes for table `bus_str`
--
ALTER TABLE `bus_str`
  ADD PRIMARY KEY (`id_bus_str`);

--
-- Indexes for table `bus_str_banner`
--
ALTER TABLE `bus_str_banner`
  ADD PRIMARY KEY (`id_str_banner`);

--
-- Indexes for table `bus_ventures`
--
ALTER TABLE `bus_ventures`
  ADD PRIMARY KEY (`id_bus_ventures`);

--
-- Indexes for table `bus_verti_banner`
--
ALTER TABLE `bus_verti_banner`
  ADD PRIMARY KEY (`id_bus_verti_ban`);

--
-- Indexes for table `career_banner`
--
ALTER TABLE `career_banner`
  ADD PRIMARY KEY (`id_career_banner`);

--
-- Indexes for table `career_contact`
--
ALTER TABLE `career_contact`
  ADD PRIMARY KEY (`id_career_contact`);

--
-- Indexes for table `career_ourmomt`
--
ALTER TABLE `career_ourmomt`
  ADD PRIMARY KEY (`id_career_our`);

--
-- Indexes for table `cont`
--
ALTER TABLE `cont`
  ADD PRIMARY KEY (`id_cont`);

--
-- Indexes for table `cont_banner`
--
ALTER TABLE `cont_banner`
  ADD PRIMARY KEY (`id_Cont_banner`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id_footer`);

--
-- Indexes for table `hu_about_hse`
--
ALTER TABLE `hu_about_hse`
  ADD PRIMARY KEY (`ab_id`);

--
-- Indexes for table `hu_ab_hse`
--
ALTER TABLE `hu_ab_hse`
  ADD PRIMARY KEY (`id_hu_hse`);

--
-- Indexes for table `hu_banner`
--
ALTER TABLE `hu_banner`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `hu_business_ventures`
--
ALTER TABLE `hu_business_ventures`
  ADD PRIMARY KEY (`id_busi_ven`);

--
-- Indexes for table `hu_careers`
--
ALTER TABLE `hu_careers`
  ADD PRIMARY KEY (`id_career`);

--
-- Indexes for table `hu_investor_relations`
--
ALTER TABLE `hu_investor_relations`
  ADD PRIMARY KEY (`id_investor`);

--
-- Indexes for table `hu_sustainability`
--
ALTER TABLE `hu_sustainability`
  ADD PRIMARY KEY (`id_sustain`);

--
-- Indexes for table `ir`
--
ALTER TABLE `ir`
  ADD PRIMARY KEY (`id_ir`);

--
-- Indexes for table `ir_a`
--
ALTER TABLE `ir_a`
  ADD PRIMARY KEY (`id_ir`);

--
-- Indexes for table `ir_banner`
--
ALTER TABLE `ir_banner`
  ADD PRIMARY KEY (`id_ir_banner`);

--
-- Indexes for table `ir_e`
--
ALTER TABLE `ir_e`
  ADD PRIMARY KEY (`id_ir`);

--
-- Indexes for table `latest_news`
--
ALTER TABLE `latest_news`
  ADD PRIMARY KEY (`id_latest_news`);

--
-- Indexes for table `mate`
--
ALTER TABLE `mate`
  ADD PRIMARY KEY (`id_mate`);

--
-- Indexes for table `mate_banner`
--
ALTER TABLE `mate_banner`
  ADD PRIMARY KEY (`id_mate_banner`);

--
-- Indexes for table `mate_list`
--
ALTER TABLE `mate_list`
  ADD PRIMARY KEY (`id_mate_list`);

--
-- Indexes for table `news_banner`
--
ALTER TABLE `news_banner`
  ADD PRIMARY KEY (`id_news_banner`);

--
-- Indexes for table `news_blogs`
--
ALTER TABLE `news_blogs`
  ADD PRIMARY KEY (`id_news_blogs`);

--
-- Indexes for table `our_sa`
--
ALTER TABLE `our_sa`
  ADD PRIMARY KEY (`id_our_sa`);

--
-- Indexes for table `sa_banner`
--
ALTER TABLE `sa_banner`
  ADD PRIMARY KEY (`id_sa_banner`);

--
-- Indexes for table `sa_box`
--
ALTER TABLE `sa_box`
  ADD PRIMARY KEY (`id_sa_box`);

--
-- Indexes for table `supply`
--
ALTER TABLE `supply`
  ADD PRIMARY KEY (`id_supply`);

--
-- Indexes for table `supply_banner`
--
ALTER TABLE `supply_banner`
  ADD PRIMARY KEY (`id_sply_banner`);

--
-- Indexes for table `supply_list`
--
ALTER TABLE `supply_list`
  ADD PRIMARY KEY (`id_supply_list`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verti_ft`
--
ALTER TABLE `verti_ft`
  ADD PRIMARY KEY (`id_verti_ft`);

--
-- Indexes for table `verti_ft_banner`
--
ALTER TABLE `verti_ft_banner`
  ADD PRIMARY KEY (`id_verti_id`);

--
-- Indexes for table `verti_ft_list`
--
ALTER TABLE `verti_ft_list`
  ADD PRIMARY KEY (`id_verti_ft_list`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ab_attitude`
--
ALTER TABLE `ab_attitude`
  MODIFY `id_ab_attitude` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ab_banner`
--
ALTER TABLE `ab_banner`
  MODIFY `id_ab_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ab_heri`
--
ALTER TABLE `ab_heri`
  MODIFY `id_ab_heri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ab_hs_group`
--
ALTER TABLE `ab_hs_group`
  MODIFY `id_hs_group` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ab_hwaseung_enterprise`
--
ALTER TABLE `ab_hwaseung_enterprise`
  MODIFY `id_ab_hwa_ente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ab_led_banner`
--
ALTER TABLE `ab_led_banner`
  MODIFY `id_ab_led_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ab_led_kylee`
--
ALTER TABLE `ab_led_kylee`
  MODIFY `id_ab_led_kylee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ab_led_leadership`
--
ALTER TABLE `ab_led_leadership`
  MODIFY `id_leadership` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ab_mission`
--
ALTER TABLE `ab_mission`
  MODIFY `id_ab_mission` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_access`
--
ALTER TABLE `app_access`
  MODIFY `id_app_access` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_acc_banner`
--
ALTER TABLE `app_acc_banner`
  MODIFY `id_app_acc_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_acc_list`
--
ALTER TABLE `app_acc_list`
  MODIFY `id_app_acc_list` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bus_str`
--
ALTER TABLE `bus_str`
  MODIFY `id_bus_str` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bus_str_banner`
--
ALTER TABLE `bus_str_banner`
  MODIFY `id_str_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bus_ventures`
--
ALTER TABLE `bus_ventures`
  MODIFY `id_bus_ventures` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bus_verti_banner`
--
ALTER TABLE `bus_verti_banner`
  MODIFY `id_bus_verti_ban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career_banner`
--
ALTER TABLE `career_banner`
  MODIFY `id_career_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career_contact`
--
ALTER TABLE `career_contact`
  MODIFY `id_career_contact` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `career_ourmomt`
--
ALTER TABLE `career_ourmomt`
  MODIFY `id_career_our` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cont`
--
ALTER TABLE `cont`
  MODIFY `id_cont` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cont_banner`
--
ALTER TABLE `cont_banner`
  MODIFY `id_Cont_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id_footer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hu_about_hse`
--
ALTER TABLE `hu_about_hse`
  MODIFY `ab_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hu_ab_hse`
--
ALTER TABLE `hu_ab_hse`
  MODIFY `id_hu_hse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hu_banner`
--
ALTER TABLE `hu_banner`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hu_business_ventures`
--
ALTER TABLE `hu_business_ventures`
  MODIFY `id_busi_ven` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hu_careers`
--
ALTER TABLE `hu_careers`
  MODIFY `id_career` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hu_investor_relations`
--
ALTER TABLE `hu_investor_relations`
  MODIFY `id_investor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hu_sustainability`
--
ALTER TABLE `hu_sustainability`
  MODIFY `id_sustain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ir`
--
ALTER TABLE `ir`
  MODIFY `id_ir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ir_a`
--
ALTER TABLE `ir_a`
  MODIFY `id_ir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ir_banner`
--
ALTER TABLE `ir_banner`
  MODIFY `id_ir_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ir_e`
--
ALTER TABLE `ir_e`
  MODIFY `id_ir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `latest_news`
--
ALTER TABLE `latest_news`
  MODIFY `id_latest_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mate`
--
ALTER TABLE `mate`
  MODIFY `id_mate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mate_banner`
--
ALTER TABLE `mate_banner`
  MODIFY `id_mate_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mate_list`
--
ALTER TABLE `mate_list`
  MODIFY `id_mate_list` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news_banner`
--
ALTER TABLE `news_banner`
  MODIFY `id_news_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news_blogs`
--
ALTER TABLE `news_blogs`
  MODIFY `id_news_blogs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `our_sa`
--
ALTER TABLE `our_sa`
  MODIFY `id_our_sa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sa_banner`
--
ALTER TABLE `sa_banner`
  MODIFY `id_sa_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sa_box`
--
ALTER TABLE `sa_box`
  MODIFY `id_sa_box` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `supply`
--
ALTER TABLE `supply`
  MODIFY `id_supply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supply_banner`
--
ALTER TABLE `supply_banner`
  MODIFY `id_sply_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supply_list`
--
ALTER TABLE `supply_list`
  MODIFY `id_supply_list` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `verti_ft`
--
ALTER TABLE `verti_ft`
  MODIFY `id_verti_ft` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `verti_ft_banner`
--
ALTER TABLE `verti_ft_banner`
  MODIFY `id_verti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `verti_ft_list`
--
ALTER TABLE `verti_ft_list`
  MODIFY `id_verti_ft_list` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
