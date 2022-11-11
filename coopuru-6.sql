-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 03:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coopuru`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sp` varchar(50) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `sp`, `comment`) VALUES
(32, 11, 'สก.01', 'ชื่อสถานประกอบการไม่ถูก'),
(33, 16, 'สก.01', 'ชื่อสถานประกอบการไม่ถูก');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(11) NOT NULL,
  `mou` int(11) NOT NULL,
  `project` int(11) NOT NULL,
  `award` int(11) NOT NULL,
  `gotwork` int(11) NOT NULL,
  `satisfaction` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`id`, `mou`, `project`, `award`, `gotwork`, `satisfaction`) VALUES
(1, 255, 300, 20, 200, 100);

-- --------------------------------------------------------

--
-- Table structure for table `enterprise`
--

CREATE TABLE `enterprise` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name0` varchar(100) NOT NULL,
  `nameeng0` varchar(100) NOT NULL,
  `address0` varchar(255) NOT NULL,
  `work` varchar(50) NOT NULL,
  `workuntil` varchar(50) NOT NULL,
  `phone0` varchar(10) NOT NULL,
  `email0` varchar(100) NOT NULL,
  `takename` varchar(100) NOT NULL,
  `housenumber0` varchar(50) NOT NULL,
  `alley0` varchar(50) NOT NULL,
  `road0` varchar(50) NOT NULL,
  `subdistrict0` varchar(50) NOT NULL,
  `district0` varchar(50) NOT NULL,
  `province0` varchar(50) NOT NULL,
  `postalcode0` int(6) NOT NULL,
  `fax0` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enterprise`
--

INSERT INTO `enterprise` (`id`, `user_id`, `name0`, `nameeng0`, `address0`, `work`, `workuntil`, `phone0`, `email0`, `takename`, `housenumber0`, `alley0`, `road0`, `subdistrict0`, `district0`, `province0`, `postalcode0`, `fax0`) VALUES
(1, 3, 'บริษัท ศักดิ์สยาม', 'ไๆำๆไำqweqweq', '49, 47 ถนน เจษฎาบดินทร์ ตำบล ท่าอิฐ อำเภอเมืองอุตรดิตถ์ อุตรดิตถ์ 53000', '2565', '2565', 'qweqweqwe1', 'qweqweqwe12313', 'qweqweqwe12313', '12', 'ๆw', 'ๆw', 'ๆw', 'ๆw3', 'w32', 0, 0),
(2, 7, 'โรงแรมแชงกรีลา เชียงใหม่', '', '89/8 ถ.ช้างคลาน ต.ช้างคลาน อ.เมือง จ.เชียงใหม่ 50100', '14 พฤศจิกายน 2565', '3 มีนาคม 2566', '053-253-88', 'chiangmai@shangri-la.com', '', '', '', '', '', '', '', 0, 0),
(3, 8, 'โรงแรมแชงกรีลา เชียงใหม่', '', '89/8 ถ.ช้างคลาน ต.ช้างคลาน อ.เมือง จ.เชียงใหม่ 50100', '14 พฤศจิกายน 2565', '3 มีนาคม 2566', '053-253-88', 'chiangmai@shangri-la.com', '', '', '', '', '', '', '', 0, 0),
(4, 9, 'โรงพยาบาลค่ายพิชัยดาบหัก', '', '102 หมู่ 8 ถ.สำราญรื่น ตำบลท่าเสา อำเภอเมือง จังหวัดอุตรดิตถ์ 53000', '', '', '055428111', 'fort.pichai.hospital@gmail.com', '', '', '', '', '', '', '', 0, 0),
(5, 10, 'โรงพยาบาลค่ายพิชัยดาบหัก', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0),
(6, 11, 'บริษัท ซัมมิท แหลมฉบัง โอโต บอดี้ เวิร์ค จำกัด (สาขา 00001)', '', '300/11 หมู่ที่ 1 นิคมอุตสาหกรรมอีสเทิร์นซีบอร์ดฯ ต.ตาสิทธิ์ อ.ปลวกแดง จ.ระยอง 21140', '', '', '', '', '', '', '', '', '', '', '', 0, 0),
(7, 16, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `enterpriseusers`
--

CREATE TABLE `enterpriseusers` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `nameenterprise` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL,
  `urole` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enterpriseusers`
--

INSERT INTO `enterpriseusers` (`id`, `name`, `nameenterprise`, `email`, `password`, `urole`) VALUES
(1, 'นายการงาน ภพภัย', 'โรงพยาบาลค่ายพิชัยดาบหัก', 'teacher1@gmail.com', '$2y$10$fUpmhZ7vMjY8d7QDGAHKfOz2vvWi.OwCTZSh5iA8i7MNr.KwA0IQW', 'users');

-- --------------------------------------------------------

--
-- Table structure for table `sp01`
--

CREATE TABLE `sp01` (
  `id` int(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `housenumber1` varchar(10) NOT NULL,
  `road1` varchar(100) NOT NULL,
  `subdistrict1` varchar(100) NOT NULL,
  `district1` varchar(50) NOT NULL,
  `province1` varchar(50) NOT NULL,
  `postalcode1` int(10) NOT NULL,
  `phone1` varchar(10) NOT NULL,
  `email1` varchar(100) NOT NULL,
  `name2` varchar(100) NOT NULL,
  `relation2` varchar(50) NOT NULL,
  `housenumber2` varchar(10) NOT NULL,
  `road2` varchar(50) NOT NULL,
  `subdistrict2` varchar(50) NOT NULL,
  `district2` varchar(50) NOT NULL,
  `province2` varchar(50) NOT NULL,
  `postalcode2` int(10) NOT NULL,
  `phone2` varchar(10) NOT NULL,
  `email2` varchar(100) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sp01`
--

INSERT INTO `sp01` (`id`, `user_id`, `housenumber1`, `road1`, `subdistrict1`, `district1`, `province1`, `postalcode1`, `phone1`, `email1`, `name2`, `relation2`, `housenumber2`, `road2`, `subdistrict2`, `district2`, `province2`, `postalcode2`, `phone2`, `email2`, `status`) VALUES
(1, 2, '68', '', '', '', '', 0, '0', '', '', '', '', '', '', '', '', 0, '0', '', 0),
(2, 3, '67', '-', 'หาดกรวด', 'เมือง', 'อุตรดิตถ์', 53000, '0987765567', 'p@gmail.com', 'users podoung', 'ยาย', '67', '-', 'หาดกรวด', 'เมือง', 'อุตรดิตถ์', 53000, '088888888', 'q@gmail.com', 0),
(3, 4, '66', '', '', '', '', 0, '0', '', '', '', '', '', '', '', '', 0, '0', '', 0),
(4, 5, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', 0, '', '', 0),
(5, 7, '156/1 หมู่', '-', 'แม่พลู', 'ลับแล', 'อุตรดิตถ์', 53130, '061-369-13', 'phonenisara1@gmail.com', 'นางสาว ธันยาภา ขุนจ้อน', 'มารดา', '156/1 หมู่', '-', 'แม่พลู', 'ลับแล', 'อุตรดิตถ์', 53130, '084-509-64', '-', 0),
(6, 8, '27', '', 'ท่าอิฐ', 'เมือง', 'อุตรดิตถ์', 53000, '', 'sroifa.hankhrut@gmail.com', 'นายอนันต์ หาญครุฑ', 'บิดา', '139 หมู่ 2', '- ', 'ข้าวงาม', 'วังน้อย', 'พระนครศรีอยุธยา', 13170, '094-320-03', '-', 0),
(7, 9, '51/7', 'เจษฎาบดินทร์', 'ท่าอิฐ', 'เมือง', 'อุตรดิตถ์', 53000, '0846889327', '-', 'นางสัทธิรา สิทธวีราวุธ', 'มารดา', '129', '-', 'ผาเลือด', 'ท่าปลา', 'อุตรดิตถ์', 53190, '0930359545', '-', 0),
(8, 10, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', 0, '', '', 0),
(9, 11, '47/10', 'เจษฎาบดินทร์', 'ท่าอิฐ', 'เมือง', 'อุตรดิตถ์', 53000, '083-253-29', 'ct.teerapong@gmail.com', 'นางศรีวรรณ ตันกุระ', 'มารดา', '7/3 ม.13', 'เพชรเกษม', 'อ้อมน้อย', 'กระทุ่มแบน', 'สมุทรสาคร', 74130, '062-494-52', '-', 0),
(10, 12, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', 0, '', '', 0),
(11, 13, '188/5', 'อินใจมี 4', 'ท่าอิฐ', 'เมือง', 'อุตรดิตถ์', 53000, '095-797-92', '62044180103@gmail.com', 'นางสาวอรณา พรมภักดิ์', 'มารดา', '199/4', '-', 'บ้านโคก', 'บ้านโคก', 'อุตรดิตถ์', 53180, '064-163-15', '-', 0),
(12, 14, '17/206', 'เจษฎาบดินทร์', 'ท่าอิฐ', 'เมือง', 'อุตรดิตถ์', 53000, '0884078592', '62044180106', 'นายศศิวัจน์ ศิริรัตน์', 'บิดา', '90', '-', 'สถาน', 'ปัว', 'น่าน', 55120, '0819861002', '-', 0),
(13, 15, '', '', '', '', '', 0, '', '', 'พัณณ์ชิตา อุ่นทิม', 'มารดา', '329/1', '-', 'บ่อทอง', 'ทองแสนขัน', 'อุตรดิตถ์', 53230, '0818256498', '', 0),
(14, 16, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', 0, '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sp02`
--

CREATE TABLE `sp02` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nameeng` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `fax` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `em` int(5) NOT NULL,
  `hourwork` int(5) NOT NULL,
  `name2` varchar(200) NOT NULL,
  `rank2` varchar(200) NOT NULL,
  `department2` varchar(200) NOT NULL,
  `phone2` varchar(10) NOT NULL,
  `fax2` varchar(30) NOT NULL,
  `email2` varchar(100) NOT NULL,
  `choice2` varchar(100) NOT NULL,
  `term2` int(10) NOT NULL,
  `year2` int(5) NOT NULL,
  `when2` varchar(40) NOT NULL,
  `cuz2` varchar(100) NOT NULL,
  `name31` varchar(100) NOT NULL,
  `name32` varchar(100) NOT NULL,
  `name33` varchar(100) NOT NULL,
  `branch31` varchar(100) NOT NULL,
  `branch32` varchar(100) NOT NULL,
  `branch33` varchar(100) NOT NULL,
  `skill31` varchar(100) NOT NULL,
  `skill32` varchar(100) NOT NULL,
  `skill33` varchar(100) NOT NULL,
  `jobposition` varchar(100) NOT NULL,
  `pobdescription` varchar(100) NOT NULL,
  `term3` int(5) NOT NULL,
  `day3` int(5) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sp03`
--

CREATE TABLE `sp03` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cardno` varchar(13) NOT NULL,
  `at0` varchar(100) NOT NULL,
  `date0` varchar(50) NOT NULL,
  `race` varchar(20) NOT NULL,
  `nation` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `birth` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `height` int(3) NOT NULL,
  `weight0` int(3) NOT NULL,
  `disease` varchar(50) NOT NULL,
  `address00` varchar(200) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `mphone` varchar(10) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sp03`
--

INSERT INTO `sp03` (`id`, `user_id`, `cardno`, `at0`, `date0`, `race`, `nation`, `religion`, `birth`, `age`, `gender`, `height`, `weight0`, `disease`, `address00`, `phone`, `mphone`, `fax`, `email`, `status`) VALUES
(1, 2, '15', '', '', '', '', '', '', 0, '', 0, 0, '', '', '', '', '', '', 0),
(2, 3, '1539900724554', 'w', 'w', 'w', 'w', 'w', 'w', 12, 'w', 123, 123, 'w', '49, 47 ถนน เจษฎาบดินทร์ ตำบล ท่าอิฐ อำเภอเมืองอุตรดิตถ์ อุตรดิตถ์ 53000', '0876661875', '0876666666', '0876666666', 'wasdasdsad@gmail.com', 0),
(3, 4, '0', '', '', '', '', '', '', 0, '', 0, 0, '', '', '', '', '', '', 0),
(4, 5, '0', '', '', '', '', '', '', 0, '', 0, 0, '', '', '', '', '', '', 0),
(5, 7, '1553990013939', 'อำเภอลับแล', '7 เม.ย. 2565 ', 'ไทย', 'ไทย', 'คริสต์', '16 พ.ย. 2543', 21, 'หญิง', 163, 54, '-', '188/5 ถ.อินใจมี 4 ต.ท่าอิฐ อ.เมือง จ.อุตรดิตถ์ 53000', '-', '061-369-13', '-', 'phonenisara1@gmail.com', 0),
(6, 8, '1101000081751', 'ที่ว่าการอำเภอหนองแค', '29 มี.ค 2559', 'ไทย', 'ไทย', 'พุทธ', '10 ก.พ. 2543', 22, 'หญิง', 153, 59, '-', 'เลขที่ 27 ถ.อินใจมี ต.ท่าอิฐ อ.เมือง จ.อุตรดิตถ์ 53000 (หอ 15 บ้านกาสลอง)', '-', '093-232-07', '-', 'sroifa.hankhrut@gmail.com', 0),
(7, 9, '1539900741955', 'อำเภอท่าปลา', '16 มิ.ย.', 'ไทย', 'ไทย', 'พุทธ', '11 ธันวาคม 2543', 21, 'หญิง', 157, 51, '-', '51/7 ถ.เจษฎาบดินทร์(เหนือ) ซอย 14 ตำบลท่าอิฐ อำเภอเมืองอุตรดิตถ์ จังหวัดอุตรดิตถ์ 53000', '-', '0846889327', '-', '-', 0),
(8, 10, '', '', '', '', '', '', '', 0, '', 0, 0, '', '', '', '', '', '', 0),
(9, 11, '1550501211831', 'เทศบาลเมืองอุตรดิตถ์', '1 ธ.ค. 2564', 'ไทย', 'ไทย', 'พุทธ', '12 ธ.ค. 2543', 21, 'ชาย', 170, 115, '-', '47/10 ซอยเจษฎาบดินทร์ 1/1 ถนนเจษฎายดินทร์ ตำบลท่าอิฐ อำเภอเมืองอุตรดิตถ์ จังหวัดอุตรดิตถ์ 53000', '-', '0832532939', '-', 'ct.teerapong@gmail.com', 0),
(10, 12, '', '', '', '', '', '', '', 0, '', 0, 0, '', '', '', '', '', '', 0),
(11, 13, '1530600040198', 'อำเภอบ้านโคก', '24 พ.ย. 2558', 'ไทย', 'ไทย', 'พุทธ', '17 ก.พ 2543', 22, 'หญิง', 155, 70, '-', '188/5 ถ.อินใจมี 4 ต.ท่าอิฐ อ.เมือง จ.อุตรดิตถ์ 53000', '-', '095-797-92', '-', '61044180103', 0),
(12, 14, '1403703090496', '', '', 'ไทย', 'ไทย', 'พุทธ', '30 ธ.ค. 2543', 22, 'ชาย', 183, 130, '-', '12/106 เจษฎาบดินทร์ 8 ต.ท่าอิฐ อ.เมือง จ.อุตรดิตถ์ 53000', '-', '0884078592', '-', '62044180106@gmail.com', 0),
(13, 15, '1100702475483', 'เขตพระโขนง', '', 'ไทย', 'ไทย', '-', ' 06/2000', 22, 'ชาย', 175, 50, '-', '', '', '', '', '', 0),
(14, 16, '', '', '', '', '', '', '', 0, '', 0, 0, '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sp03e`
--

CREATE TABLE `sp03e` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `school1` varchar(100) NOT NULL,
  `school2` varchar(100) NOT NULL,
  `school3` varchar(100) NOT NULL,
  `school4` varchar(100) NOT NULL,
  `school5` varchar(100) NOT NULL,
  `year_att1` varchar(5) NOT NULL,
  `year_att2` varchar(5) NOT NULL,
  `year_att3` varchar(5) NOT NULL,
  `year_att4` varchar(5) NOT NULL,
  `year_att5` varchar(5) NOT NULL,
  `year_grad1` varchar(5) NOT NULL,
  `year_grad2` varchar(5) NOT NULL,
  `year_grad3` varchar(5) NOT NULL,
  `year_grad4` varchar(5) NOT NULL,
  `year_grad5` varchar(5) NOT NULL,
  `certificate1` varchar(30) NOT NULL,
  `certificate2` varchar(30) NOT NULL,
  `certificate3` varchar(30) NOT NULL,
  `certificate4` varchar(30) NOT NULL,
  `certificate5` varchar(30) NOT NULL,
  `major1` varchar(30) NOT NULL,
  `major2` varchar(30) NOT NULL,
  `major3` varchar(30) NOT NULL,
  `major4` varchar(30) NOT NULL,
  `major5` varchar(30) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sp03e`
--

INSERT INTO `sp03e` (`id`, `user_id`, `school1`, `school2`, `school3`, `school4`, `school5`, `year_att1`, `year_att2`, `year_att3`, `year_att4`, `year_att5`, `year_grad1`, `year_grad2`, `year_grad3`, `year_grad4`, `year_grad5`, `certificate1`, `certificate2`, `certificate3`, `certificate4`, `certificate5`, `major1`, `major2`, `major3`, `major4`, `major5`, `status`) VALUES
(1, 3, 'qw', 'w', 'qweqwe', 'qweqwe', '3eqweqwe', '2', '1', '2', '3', '3', '2', '1', '2', '3', '3', 'w', 'w', 'wqeqwe', 'qweqwe', 'qweqwe', 'w', 'we', 'wqe', 'qweqw', 'qweqwe', 0),
(2, 7, 'โรงเรียนบ้านถิ่นสำราญ', 'โรงเรียนอนุบาลชุมชนหัวดง', 'โรงเรียนอุตรดิตถ์', '-', 'มหาวิทยาลัยราชภัฏอุตรดิตถ์', '2550', '2556', '2559', '-', '2562', '2556', '2559', '2562', '-', '2565', 'วุฒิ ป.6', 'วุฒิ ม.3', 'วุฒิ ม.6', '-', '-', '-', '-', '-', '-', '-', 0),
(3, 8, 'โรงเรียนวัดธรรมจริยา', 'โรงเรียนวัดธรรมจริยา', 'โรงเรียนลิไทพิทยาคม', '', '', '2550', '2556', '2560', '0', '0', '2556', '2559', '2562', '0', '0', 'วุฒิ ป.6', 'วุฒิ ม.3', 'วุฒิ ม.6', '', '', '', '', 'วิทย์ - คณิต', '', '', 0),
(4, 9, 'โรงเรียนสหคริสเตียน', 'โรงเรียนสหคริสเตียน', 'โรงเรียนสหคริสเตียน', '', 'มหาวิทยาลัยราชภัฏอุตรดิตถ์', '2550', '2555', '2561', '0', '2562', '2555', '2558', '2562', '0', '0', 'ประถมศึกษา', 'มัธยมต้น', 'มัธยมปลาย', '', '', '', '', '', '', 'ชีววิทยา', 0),
(5, 10, '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', '', 0),
(6, 11, 'โรงเรียนวัดศรีสำราญราษฎร์บำรุง', 'โรงเรียนอ้อมน้อยโสภณชนูปถัมภ์', 'โรงเรียนอ้อมน้อยโสภณชนูปถัมภ์', '-', 'มหาวิทยาลัยราชภัฏอุตรดิตถ์', '2551', '2556', '2559', '-', '2565', '2556', '2559', '2562', '-', '', 'ประถมศึกษา', 'มัธยมศึกษาตอนต้น', 'มัธยมศึกษาตอนปลาย', '-', 'วิศวกรรมศาสตรบัณฑิต', '', 'วิทย์ - คณิต', 'วิทย์ - คณิต', '-', 'วิศวกรรมคอมพิวเตอร์', 0),
(7, 12, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(8, 13, 'โรงเรียนอนุบาลบ้านโคก', 'โรงเรียนบ้านโคกวิทยาคม', 'โรงเรียนบ้านโคกวิทยาคม', '-', 'มหาวิทยาลัยราชภัฏอุตรดิตถ์', '2550', '2556', '2559', '-', '2562', '2556', '2559', '2562', '-', '', 'วุฒิ ป.6', 'วิุฒิ ม.3', 'วุฒิ ม.6', '-', '', '-', '-', 'วิทย์ - คณิต', '-', 'การท่องเที่ยว', 0),
(9, 14, 'โรงเรียนบ้านปราง', 'โรงเรียนปัว', 'โรงเรียนปัว', '', 'มหาวิทยาลัยราชภัฏอุตรดิตถ์', '2550', '2556', '2560', '', '', '2556', '2559', '2562', '', '', '', '', '', '', '', '', '', 'ศิลป์ - จีน', '', '', 0),
(10, 15, 'โรงเรียนสมาหารศึกกษา', 'พระโขนงพิทยาลัย', 'พระโขนงพิทยาลัย', '', 'มหาวิทยาลัยราชภัฏอุตรดิตถ์', '', '', '', '', '2562', '', '', '', '', '', '', '', '', '', '', '', '', 'ศิลป์ - จีน', '', 'ท่องเที่ยว', 0),
(11, 16, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sp03l`
--

CREATE TABLE `sp03l` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `listen1` varchar(5) NOT NULL,
  `listen2` varchar(5) NOT NULL,
  `listen3` varchar(5) NOT NULL,
  `speaking1` varchar(5) NOT NULL,
  `speaking2` varchar(5) NOT NULL,
  `speaking3` varchar(5) NOT NULL,
  `writing1` varchar(5) NOT NULL,
  `writing2` varchar(5) NOT NULL,
  `writing3` varchar(5) NOT NULL,
  `orther` varchar(20) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sp03l`
--

INSERT INTO `sp03l` (`id`, `user_id`, `listen1`, `listen2`, `listen3`, `speaking1`, `speaking2`, `speaking3`, `writing1`, `writing2`, `writing3`, `orther`, `status`) VALUES
(1, 3, '1', '2', '3', '1', '2', '3', '1', '2', '3', '3', 0),
(2, 7, 'fair', 'good', 'good', 'fair', 'good', 'good', 'fair', 'good', 'good', '-', 0),
(3, 8, '', '', '', '', '', '', '', '', '', '', 0),
(4, 9, '', '', '', '', '', '', '', '', '', '', 0),
(5, 10, '', '', '', '', '', '', '', '', '', '', 0),
(6, 11, '', '', '', '', '', '', '', '', '', '', 0),
(7, 12, '', '', '', '', '', '', '', '', '', '', 0),
(8, 13, 'fair', '', '', 'fair', '', '', 'fair', '', '', '', 0),
(9, 14, 'fair', '', '', 'fair', '', '', 'fair', '', '', '', 0),
(10, 15, '', '', '', '', '', '', '', '', '', '', 0),
(11, 16, '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sp031`
--

CREATE TABLE `sp031` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name1` varchar(100) NOT NULL,
  `job1` varchar(50) NOT NULL,
  `placework1` varchar(100) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `phone1` varchar(10) NOT NULL,
  `mphone1` varchar(10) NOT NULL,
  `fax1` varchar(20) NOT NULL,
  `email1` varchar(100) NOT NULL,
  `name2` varchar(100) NOT NULL,
  `name3` varchar(100) NOT NULL,
  `age2` varchar(2) NOT NULL,
  `age3` varchar(2) NOT NULL,
  `job2` varchar(50) NOT NULL,
  `job3` varchar(50) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `address3` varchar(200) NOT NULL,
  `phone2` text NOT NULL,
  `phone3` varchar(10) NOT NULL,
  `norelative` int(2) NOT NULL,
  `noyou` int(2) NOT NULL,
  `name4` varchar(100) NOT NULL,
  `name5` varchar(100) NOT NULL,
  `name6` varchar(100) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sp031`
--

INSERT INTO `sp031` (`id`, `user_id`, `name1`, `job1`, `placework1`, `address1`, `phone1`, `mphone1`, `fax1`, `email1`, `name2`, `name3`, `age2`, `age3`, `job2`, `job3`, `address2`, `address3`, `phone2`, `phone3`, `norelative`, `noyou`, `name4`, `name5`, `name6`, `status`) VALUES
(1, 3, 'qweqwe', 'qwewqe', 'qwewqe', 'qwewq', '2', '2', '2', 'qwewq', 'wqe', 'w', 'eq', 'w', 'ewqeqwe', 'w', '49, 47 ถนน เจษฎาบดินทร์ ตำบล ท่าอิฐ อำเภอเมืองอุตรดิตถ์ อุตรดิตถ์ 53000', '49, 47 ถนน เจษฎาบดินทร์ ตำบล ท่าอิฐ อำเภอเมืองอุตรดิตถ์ อุตรดิตถ์ 53000', 'w', 'w', 2, 2, 'สมกก', 'สมมก', 'สมสา', 0),
(2, 7, 'ธันยาภา ขุนจ้อน (มารดา)', 'แม่บ้าน', 'อบต.นานกกก', '156/1 หมู่ 1 ต.แม่พลู อ.ลับแล จ.อุตรดิตถ์ 53130', '-', '087-509-64', '-', '-', 'นายประดิษฐ์ โพธิ์งาม', 'นางสาวธันยาภา ขุนจ้อน', '49', '49', 'ค้าขาย', 'แม่บ้าน', '95/221 ซ.13/15 หมู่บ้านบัวทอง ต.บางรักพัฒนา อ.บางบัวทอง จ.นนทบุรี 11000', '156/1 หมู่ 1 ต.แม่พลู อ.ลับแล จ.อุตรดิตถ์ 53130', '080-045-5950', '084-509-64', 1, 1, 'นายปวิชญา โพธิ์งาม 19 ปี', '', '', 0),
(3, 8, 'อนันต์ หาญครุฑ (บิดา)', 'พนักงานรักษาความปลอดภัย', 'บริษัท ปตท.', '139 ม.2 ต.ข้าวงาม อ.วังน้อย จ.พระนครศรีอยุธยา 13170', '-', '096-328-32', '-', '-', 'นายประดิษฐ์ โพธิ์งาม', 'นางประนอม เกตุขาว', '51', '54', 'รปภ.', 'รับจ้าง', '139 ม.2 ต.ข้าวงาม อ.วังน้อย จ.พระนครศรีอยุธยา 13170', '139 ม.2 ต.ข้าวงาม อ.วังน้อย จ.พระนครศรีอยุธยา 13170', '094-320-0341', '092-732-90', 1, 1, '', '', '', 0),
(4, 9, 'ภัทธรา สิทธวีราวุธ (มารดา)', 'ค้าขาย', '-', '129 หมู่ 13 ตำบลผาเลือด อำเภอท่าปลา จังหวัดอุตรดิตถ์', '-', '0930359454', '-', '-', 'นายถคิน สิทธวีราวุธ', 'นางภัทธิรา สิทธวีราวุธ', '55', '50', 'รับจ้าง', 'ค้าขาย', '129 หมู่ 13 ตำบลผาเลือด อำเภอท่าปลา จังหวัดอุตรดิตถ์ 53190', '129 หมู่ 13 ตำบลผาเลือด อำเภอท่าปลา จังหวัดอุตรดิตถ์ 53190', '0627255075', '0930359454', 3, 3, 'นายเอกกาย สิทธิวีราวุธ อายุ 33 ปี', 'นายโทภวัต สิทธวีราวุธ อายุ 29 ปี', 'นางสาวตรีภคมบบ์ สิทธวีราวุธ อายุ 21 ปี', 0),
(5, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', 0),
(6, 11, 'ศรีวรรณ ตันกุระ (มารดา)', 'รับจ้าง', 'บริษัท เกรียงถาวร คอนเทรนเนอร์ จำกัด', '7/3 ม.13 ซ.เพชรเกษม 95 ถ.เพชรเกษม ต.อ้อมน้อย อ.กระทุ่มแบน จ.สมุทรสาคร 74130 ', '-', '0624945244', '-', '-', 'นายคชาคริด ตันกุระ', 'นางศรีวรรณ ตันกุระ', '55', '54', 'รับจ้าง', 'รับจ้าง', '121 หมู่ที่ 2 ตำบลสถาน อำเภอปัว จังหวัดน่าน 55120', '121 หมู่ที่ 2 ตำบลสถาน อำเภอปัว จังหวัดน่าน 55120', '0811041750', '0624945244', 1, 1, 'นายธีรพงศ์ ตันกุระ อายุ 21 ปี', '', '', 0),
(7, 12, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', 0),
(8, 13, 'อรณา พรมภักดิ์ (มารดา)', 'ค้าขาย , เกษตรกร  ', 'บ้าน , ไร่', '199/4 หมู้ 7 ต.บ้านโคก อ.บ้านโคก จ.อุตรดิตถ์ 53180', '-', '064-163-15', '-', '-', 'ร.ต.ท. มวี มานพกวี', 'นางสาวอรณา พรมภักดิ์', '60', '48', 'ตำรวจภูธร', 'ค้าขาย , เกษตรกร', '393/7 หมู่ 9 ต.ฟากท่า อ.ฟากท่า จ.อุตรดิตถ์ 53160', '199/4 หมู่ 7 ต.บ้านโคก อ.บ้านโคก จ.อุตรดิตถ์ 53180', '081-626-9948', '064-163-15', 3, 3, 'นางสาวอรพิร ธิตา', 'นางสาวกุลศิริ พรมภักดิ์', 'เด็กหญิงกวินธิดา สีหะวงษ์', 0),
(9, 14, 'ศศิวัจน์ ศิริรัตน์ (บิดา)', 'ตากล้อง,อิสระ', '', '90 หมู่5 ต.สถาน อ.ปัว จ.น่าน ', '-', '0819861002', '-', '-', 'ศศิวัจน์ ศิริรัตน์', 'อำพา บุญตัน', '', '', 'อิสระ', 'อิสระ', '90 หมู่ 5 ต.สถาน อ.ปัว จ.น่าน 55120', '90 หมู่ 5 ต.สถาน อ.ปัว จ.น่าน 55120', '0812361002', '0852221782', 1, 1, '', '', '', 0),
(10, 15, 'พัณณ์ชิตา อุ่นทิม', 'แม่บ้าน', '', '329/1 ต.บ่อทอง อ.ทองแสนขัน จ.อุตรดิตถ์ ', '', '0818256498', '', '', 'ธนทรรศ เทียมมีเชาน์', 'พัณณ์ชิตา อุ่นทิม', '50', '50', 'รับจ้าง', 'แม่บ้าน', '-', '329/1 ต.บ่อทอง อ.ทองแสนขัน จ.อุตรดิตถ์', '-', '0818256498', 1, 1, '', '', '', 0),
(11, 16, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sp04`
--

CREATE TABLE `sp04` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name1` varchar(100) NOT NULL,
  `name2` varchar(100) NOT NULL,
  `name3` varchar(100) NOT NULL,
  `studentid1` varchar(15) NOT NULL,
  `studentid2` varchar(15) NOT NULL,
  `studentid3` varchar(15) NOT NULL,
  `branch1` varchar(100) NOT NULL,
  `branch2` varchar(100) NOT NULL,
  `branch3` varchar(100) NOT NULL,
  `faculty1` varchar(100) NOT NULL,
  `faculty2` varchar(100) NOT NULL,
  `faculty3` varchar(100) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sp04`
--

INSERT INTO `sp04` (`id`, `user_id`, `name1`, `name2`, `name3`, `studentid1`, `studentid2`, `studentid3`, `branch1`, `branch2`, `branch3`, `faculty1`, `faculty2`, `faculty3`, `status`) VALUES
(1, 2, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0),
(2, 3, 'qweqweq', 'qweqweqwe12313', '0qweqweqwe12313', '632434235232432', '632434235232437', '632434235232438', 'qweqweqwe', '0qweqweqwe12313', 'qweqweqwe12313', 'qweqweqwe12313', '0qweqweqwe12313', 'qweqweqwe12313', 0),
(3, 4, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0),
(4, 7, 'สร้อยฟ้า หาญครุฑ', '', '', '62044180113', '', '', 'การท่องเที่ยว', '', '', 'มนุษยศาสตร์และสังคมศาสตร์', '', '', 0),
(5, 8, 'ณิศรา โพธิ์งาม', '', '', '62044180102', '', '', 'การท่องเที่ยว', '', '', 'มนุษยศาสตร์และสังคมศาสตร์', '', '', 0),
(6, 9, 'ศิรินันท์ คำบุทอง', '', '', '62042530111', '', '', 'ชีววิทยา', '', '', 'วิทยาศาสตร์และเทคโนโลยี', '', '', 0),
(7, 10, '', '', '', '', '', '', '', '', '', '', '', '', 0),
(8, 11, 'นางสาว ขวัญนรี ชถมพลรัตน์', '', '', '61046680133', '', '', 'วิศวกรรมคอมพิวเตอร์', '', '', 'เทคโนโลยีอุตสหกรรม', '', '', 0),
(9, 12, '', '', '', '', '', '', '', '', '', '', '', '', 0),
(10, 13, 'ศิวกร ศิริรัตน์', '', '', '62044180106', '', '', 'การท่องเที่ยว', '', '', 'มนุษยศาสตร์และสังคมศาสตร์', '', '', 0),
(11, 14, 'ปวีณา มานพกาวี', '', '', '62044180106', '', '', 'การท่องเที่ยว', '', '', 'มนุษยศาสตร์และสังคมศาสตร์', '', '', 0),
(12, 15, '', '', '', '', '', '', '', '', '', '', '', '', 0),
(13, 16, '', '', '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sp07`
--

CREATE TABLE `sp07` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name1` varchar(100) NOT NULL,
  `rank1` varchar(50) NOT NULL,
  `phone1` varchar(10) NOT NULL,
  `fax1` varchar(20) NOT NULL,
  `email1` varchar(100) NOT NULL,
  `contact1` varchar(50) NOT NULL,
  `name2` varchar(100) NOT NULL,
  `rank2` varchar(50) NOT NULL,
  `department2` varchar(50) NOT NULL,
  `phone2` varchar(10) NOT NULL,
  `fax2` varchar(20) NOT NULL,
  `email2` varchar(100) NOT NULL,
  `name3` varchar(100) NOT NULL,
  `rank3` varchar(50) NOT NULL,
  `department3` varchar(50) NOT NULL,
  `phone3` varchar(10) NOT NULL,
  `fax3` varchar(20) NOT NULL,
  `email3` varchar(100) NOT NULL,
  `jobposition4` varchar(50) NOT NULL,
  `jobdescription4` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name5` varchar(100) NOT NULL,
  `housenumber5` varchar(10) NOT NULL,
  `alley5` varchar(40) NOT NULL,
  `road5` varchar(40) NOT NULL,
  `subdistrict5` varchar(40) NOT NULL,
  `district5` varchar(40) NOT NULL,
  `province5` varchar(40) NOT NULL,
  `postalcode5` varchar(5) NOT NULL,
  `phone5` varchar(10) NOT NULL,
  `fax5` varchar(20) NOT NULL,
  `email5` varchar(100) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sp07`
--

INSERT INTO `sp07` (`id`, `user_id`, `name1`, `rank1`, `phone1`, `fax1`, `email1`, `contact1`, `name2`, `rank2`, `department2`, `phone2`, `fax2`, `email2`, `name3`, `rank3`, `department3`, `phone3`, `fax3`, `email3`, `jobposition4`, `jobdescription4`, `image`, `name5`, `housenumber5`, `alley5`, `road5`, `subdistrict5`, `district5`, `province5`, `postalcode5`, `phone5`, `fax5`, `email5`, `status`) VALUES
(1, 3, '1241241', 'qweqweqw', 'ๆไำ', 'qweqwe', 'qweqw', 'asdasd', 'asdasd', 'w', 'w', 'w', 'w', 'w', 'ss', 's', 's', 's', 'sๆไำๆไำ', 's', 'e', 'e', 'Screenshot 2022-08-21 215509.png', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'ee', 'easdas@gmail.com', 0),
(2, 7, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(3, 8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(4, 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(5, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(6, 11, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(7, 12, 'จ.ส.ต. ศักดิ์ชัย จริสกิจจิจะกลู', 'ปลัดเทศบาล', '055442817', '', '', 'มอบหมายให้บุคคลต่อไปนี้ประสานงานแทน', 'นางสาวชมพูนุช จิรัฐกูล', 'หัวหน้าฝ่ายอำนวยการ', 'สำนักปลัดเทศบาล', '0879389064', '', '', 'นางลิศิขวัญ เชื้อต่าย', 'นักพัฒนาชุมชน', 'สำนักปลัด', '0952619392', '', '', 'งานบริหารทั่วไป สำนักปลัดเทศบาล', 'งานธุรการ', '1.png', 'นางสาว กริชญา ครุธผาสุข', '86/5', '', 'นาดวาร', 'ป่าเซ่า', 'เมือง', 'อุตรดิตถ์', '53000', '0957573643', '', '', 0),
(8, 13, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(9, 14, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(10, 15, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(11, 16, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sp08`
--

CREATE TABLE `sp08` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title1` varchar(100) NOT NULL,
  `title2` varchar(100) NOT NULL,
  `title3` varchar(100) NOT NULL,
  `title4` varchar(100) NOT NULL,
  `title5` varchar(100) NOT NULL,
  `title6` varchar(100) NOT NULL,
  `title7` varchar(100) NOT NULL,
  `title8` varchar(100) NOT NULL,
  `title9` varchar(100) NOT NULL,
  `title10` varchar(100) NOT NULL,
  `title11` varchar(100) NOT NULL,
  `title12` varchar(100) NOT NULL,
  `date1` varchar(50) NOT NULL,
  `date2` varchar(50) NOT NULL,
  `date3` varchar(50) NOT NULL,
  `date4` varchar(50) NOT NULL,
  `date5` varchar(50) NOT NULL,
  `date6` varchar(50) NOT NULL,
  `date7` varchar(50) NOT NULL,
  `date8` varchar(50) NOT NULL,
  `date9` varchar(50) NOT NULL,
  `date10` varchar(50) NOT NULL,
  `date11` varchar(50) NOT NULL,
  `date12` varchar(50) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sp08`
--

INSERT INTO `sp08` (`id`, `user_id`, `title1`, `title2`, `title3`, `title4`, `title5`, `title6`, `title7`, `title8`, `title9`, `title10`, `title11`, `title12`, `date1`, `date2`, `date3`, `date4`, `date5`, `date6`, `date7`, `date8`, `date9`, `date10`, `date11`, `date12`, `status`) VALUES
(1, 3, 'ฟหกฟหกฟหกฟหไๆฟหกำด', 'ฟหกๆไพดๆไๆกฟหกๆไำๆไกฟหก', 'ๆไดๆไพดฟหดฟกดฟกฟหดฟหเฟอฟห', 'ๆไดฟหดกฟหอหกอกหอหกดเหกดเ', 'ฟหกเฟกอฟกอพอำอำพอฟ', 'efefwdasdgasgsdgasdfsdf', 'sadfasfasf343534fasdfasdfsd', 'หกฟดหกดฟหกด-พพภะ-ภ/-/-///-ภ/-ไหกดฟหด', 'ฟหกดฟหกดฟหกดเดท', 'หฟกดฟหกดำไๆพ', 'ฟหกดฟหกดฟด-', 'ฟหกดฟหกดพำพะ', 'w', 'w', 'w', 'ww', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 0),
(2, 7, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(3, 8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(4, 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(5, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(6, 11, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(7, 12, 'การขึ้นทะเบียนเพื่อนขึ้นรับเบี้ยบังยังชีพผู้สูงอายุและคนพิการ', 'การจ่ายเบี้ยงผู้สูงอายุและคนพิการ', 'บันทึกข้อมูลในระบบคอมพิวเตอร์ e-plan', 'งานธุรการ', 'งานบริหารทั่วไป', 'ศึกษาข้อมูลเกี่ยวกับสถานประกอบการ - ปรึกษาอาจารย์', 'วิเคราะสถานประกอบการ-กิจกรรมที่ไปลงพื้นที่', 'หาปัญหาวัตถุประสงค์ประโยชน์ที่คาดว่าจะได้รับในการทำโครงการ', 'จัดทำหนังสือคู่มือ', 'แจกจ่ายหนังสือให้กับผู้สูงอายุแต่ละครัวเรือน', '', '', 'ธันวาคม 2564 - มีนาคม 2565', 'ธันวาคม 2564 - มีนาคม 2565', 'มกราคม 2565', 'ธันวาคม 2564 - มีนาคม 2565', 'ธันวาคม 2564 - มีนาคม 2565', 'ธันวาคม 2564 - มกราคม 2565', 'ธันวาคม 2564 - มกราคม 2565', 'ธันวาคม 2564 - มกราคม 2565', 'กุมภาพันธ์ 2565', 'มีนาคม 2565', '', '', 0),
(8, 13, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(9, 14, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(10, 15, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(11, 16, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sp09`
--

CREATE TABLE `sp09` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `titleeng` varchar(100) NOT NULL,
  `detail` varchar(150) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sp09`
--

INSERT INTO `sp09` (`id`, `user_id`, `title`, `titleeng`, `detail`, `status`) VALUES
(1, 3, 'รายงาน', 'report', 'asd123123432wqqweasd123123432wqqwe123432wqqweasd123123432wqqweasd123123432wqqweasd123123432wq', 0),
(2, 7, '', '', '', 0),
(3, 8, '', '', '', 0),
(4, 9, '', '', '', 0),
(5, 10, '', '', '', 0),
(6, 11, '', '', '', 0),
(7, 12, 'อัศจรรย์น้ำผักผลไม้กับผู้สูงอายุ', '', 'เป็นคู่มือหนังสือเกี่ยวกับวิธีทำน้ำผักผลไม้โดยใช้ผักผลไม้ท้องถิ่นหรือหาซื้อได้ง่ายและเป็นหนังสือที่มีวิธีการทำที่ง่ายและบอกคุณประโยชน์ของน้ำผักผลไม้ต่', 0),
(8, 13, '', '', '', 0),
(9, 14, '', '', '', 0),
(10, 15, '', '', '', 0),
(11, 16, '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sp12`
--

CREATE TABLE `sp12` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name012` varchar(100) NOT NULL,
  `term012` int(2) NOT NULL,
  `schoolyear012` int(5) NOT NULL,
  `name112` varchar(100) NOT NULL,
  `branch112` varchar(50) NOT NULL,
  `d01` int(2) NOT NULL,
  `d02` int(2) NOT NULL,
  `d03` int(2) NOT NULL,
  `d04` int(2) NOT NULL,
  `d05` int(2) NOT NULL,
  `d06` int(2) NOT NULL,
  `d07` int(2) NOT NULL,
  `d08` int(2) NOT NULL,
  `d09` int(2) NOT NULL,
  `d10` int(2) NOT NULL,
  `d11` int(2) NOT NULL,
  `d12` int(2) NOT NULL,
  `d13` int(2) NOT NULL,
  `d14` int(2) NOT NULL,
  `d15` int(2) NOT NULL,
  `d16` int(2) NOT NULL,
  `d17` int(2) NOT NULL,
  `d18` int(2) NOT NULL,
  `d19` int(2) NOT NULL,
  `d20` int(2) NOT NULL,
  `d21` int(2) NOT NULL,
  `d22` int(2) NOT NULL,
  `d23` int(2) NOT NULL,
  `d24` int(2) NOT NULL,
  `d25` int(2) NOT NULL,
  `d26` int(2) NOT NULL,
  `d27` int(2) NOT NULL,
  `d28` int(2) NOT NULL,
  `d29` int(2) NOT NULL,
  `d30` int(2) NOT NULL,
  `d31` int(2) NOT NULL,
  `d32` int(2) NOT NULL,
  `d33` int(2) NOT NULL,
  `d34` int(2) NOT NULL,
  `d35` int(2) NOT NULL,
  `d36` int(2) NOT NULL,
  `d37` int(2) NOT NULL,
  `d38` int(2) NOT NULL,
  `d39` int(2) NOT NULL,
  `d40` int(2) NOT NULL,
  `date12` datetime NOT NULL,
  `point` int(5) NOT NULL,
  `result` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sp12`
--

INSERT INTO `sp12` (`id`, `user_id`, `name012`, `term012`, `schoolyear012`, `name112`, `branch112`, `d01`, `d02`, `d03`, `d04`, `d05`, `d06`, `d07`, `d08`, `d09`, `d10`, `d11`, `d12`, `d13`, `d14`, `d15`, `d16`, `d17`, `d18`, `d19`, `d20`, `d21`, `d22`, `d23`, `d24`, `d25`, `d26`, `d27`, `d28`, `d29`, `d30`, `d31`, `d32`, `d33`, `d34`, `d35`, `d36`, `d37`, `d38`, `d39`, `d40`, `date12`, `point`, `result`) VALUES
(5, 2, 'ศักดิ์สยามas2q1231', 312312, 2565, 'พิสิด โพด้วง', 'วิศกรรมคอม', 5, 5, 1, 2, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 2, 5, 5, 1, 5, 5, 3, 4, 4, 0, 3, 3, 4, 4, 3, 3, 2, 2, 3, 1, '0000-00-00 00:00:00', 0, '39.4'),
(6, 7, '', 0, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', 0, '36'),
(7, 4, 'ศักดิ์สยาม', 2, 2565, 'พิสิษฐ์ โพธิ์ด้วง', 'วิศวกรรมคอมพิวเตอร์', 4, 5, 5, 4, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 4, 5, 5, 5, '0000-00-00 00:00:00', 0, '36.7'),
(8, 4, 'dasd', 0, 2564, 'sdfsdf', 'sdfsdfsdf', 4, 5, 5, 4, 5, 4, 5, 4, 3, 5, 4, 3, 5, 4, 4, 5, 5, 4, 4, 4, 4, 5, 4, 4, 4, 5, 4, 4, 4, 4, 4, 5, 5, 5, 4, 4, 4, 4, 4, 5, '0000-00-00 00:00:00', 0, '34.4'),
(9, 4, 'ๆไำๆไำ', 0, 2563, '', '', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, '0000-00-00 00:00:00', 0, '40');

-- --------------------------------------------------------

--
-- Table structure for table `sp12a`
--

CREATE TABLE `sp12a` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sp12a`
--

INSERT INTO `sp12a` (`id`, `user_id`, `image1`, `image2`) VALUES
(3, 2, 'Screenshot 2022-01-23 160611.png', 'Screenshot 2022-01-23 160803.png'),
(6, 4, 'localhost_coopuru_visituser.php.png', 'localhost_coopuru_teachercourse.php.png');

-- --------------------------------------------------------

--
-- Table structure for table `sp13`
--

CREATE TABLE `sp13` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name013` varchar(100) NOT NULL,
  `studentid013` varchar(15) NOT NULL,
  `branch013` varchar(50) NOT NULL,
  `faculty013` varchar(50) NOT NULL,
  `name113` varchar(100) NOT NULL,
  `name213` varchar(100) NOT NULL,
  `rank213` varchar(50) NOT NULL,
  `department213` varchar(50) NOT NULL,
  `d01` int(2) NOT NULL,
  `d02` int(2) NOT NULL,
  `d03` int(2) NOT NULL,
  `d04` int(2) NOT NULL,
  `d05` int(2) NOT NULL,
  `d06` int(2) NOT NULL,
  `d07` int(2) NOT NULL,
  `d08` int(2) NOT NULL,
  `d09` int(2) NOT NULL,
  `d10` int(2) NOT NULL,
  `d11` int(2) NOT NULL,
  `d12` int(2) NOT NULL,
  `d13` int(2) NOT NULL,
  `d14` int(2) NOT NULL,
  `d15` int(2) NOT NULL,
  `d16` int(2) NOT NULL,
  `d17` int(2) NOT NULL,
  `d18` int(2) NOT NULL,
  `d19` int(2) NOT NULL,
  `d20` int(2) NOT NULL,
  `date13` datetime NOT NULL,
  `result` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sp13`
--

INSERT INTO `sp13` (`id`, `user_id`, `name013`, `studentid013`, `branch013`, `faculty013`, `name113`, `name213`, `rank213`, `department213`, `d01`, `d02`, `d03`, `d04`, `d05`, `d06`, `d07`, `d08`, `d09`, `d10`, `d11`, `d12`, `d13`, `d14`, `d15`, `d16`, `d17`, `d18`, `d19`, `d20`, `date13`, `result`) VALUES
(1, 2, 'ศักดิ์สยาม', '62046680109', 'วิศวคอม', 'เทคโนโลยี', 'ศักดิ์สยาม', 'ศักดิ์สยามๆไำๆไำ', 'ๆไำๆไำ', 'ๆไำๆไำ/ๅ-ๅ-/', 15, 20, 9, 4, 6, 8, 0, 0, 7, 7, 9, 8, 9, 9, 10, 7, 7, 5, 0, 0, '2022-08-28 23:26:20', ''),
(2, 2, 'ศักดิ์สยาม', '62046680109', 'วิศวคอม', 'เทคโนโลยี', 'ศักดิ์สยาม', 'ศักดิ์สยามๆไำๆไำ', 'ๆไำๆไำ', 'ๆไำๆไำ/ๅ-ๅ-/', 15, 20, 9, 4, 6, 8, 0, 0, 7, 7, 9, 8, 9, 9, 10, 7, 7, 5, 0, 0, '0000-00-00 00:00:00', ''),
(3, 1, 'ฟหกกฟหก', '', '', '', '', '', '', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(4, 7, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `sp13a`
--

CREATE TABLE `sp13a` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sp14`
--

CREATE TABLE `sp14` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name014` varchar(100) NOT NULL,
  `studentid014` varchar(15) NOT NULL,
  `branch014` varchar(50) NOT NULL,
  `faculty014` varchar(50) NOT NULL,
  `name114` varchar(100) NOT NULL,
  `name214` varchar(100) NOT NULL,
  `rank214` varchar(50) NOT NULL,
  `department214` varchar(50) NOT NULL,
  `name314` varchar(100) NOT NULL,
  `name414` varchar(100) NOT NULL,
  `d01` int(2) NOT NULL,
  `d02` int(2) NOT NULL,
  `d03` int(2) NOT NULL,
  `d04` int(2) NOT NULL,
  `d05` int(2) NOT NULL,
  `d06` int(2) NOT NULL,
  `d07` int(2) NOT NULL,
  `d08` int(2) NOT NULL,
  `d09` int(2) NOT NULL,
  `d10` int(2) NOT NULL,
  `d11` int(2) NOT NULL,
  `d12` int(2) NOT NULL,
  `d13` int(2) NOT NULL,
  `d14` int(2) NOT NULL,
  `date14` datetime NOT NULL,
  `result` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sp14`
--

INSERT INTO `sp14` (`id`, `user_id`, `name014`, `studentid014`, `branch014`, `faculty014`, `name114`, `name214`, `rank214`, `department214`, `name314`, `name414`, `d01`, `d02`, `d03`, `d04`, `d05`, `d06`, `d07`, `d08`, `d09`, `d10`, `d11`, `d12`, `d13`, `d14`, `date14`, `result`) VALUES
(1, 2, 'พิสิด โพด้วงadadas213123', '62046680109', ';sdasdasqw', 'eqwe', 'asdasdas', 'qweqw', 'asdas', 'asdasd', 'asdasd', 'wqrqwr', 3, 5, 5, 4, 5, 17, 10, 8, 4, 10, 5, 5, 4, 4, '2022-08-28 23:26:47', ''),
(2, 2, 'พิสิด โพด้วง', '62046680109', ';sdasdasqw', 'eqwe', 'asdasdas', 'qweqw', 'asdas', 'asdasd', 'asdasd', 'wqrqwr', 3, 5, 5, 4, 5, 17, 10, 8, 4, 10, 5, 5, 4, 4, '0000-00-00 00:00:00', ''),
(3, 7, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `sp14a`
--

CREATE TABLE `sp14a` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sp15`
--

CREATE TABLE `sp15` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name015` varchar(100) NOT NULL,
  `studentid015` varchar(15) NOT NULL,
  `branch015` varchar(50) NOT NULL,
  `faculty015` varchar(50) NOT NULL,
  `name115` varchar(100) NOT NULL,
  `name215` varchar(100) NOT NULL,
  `rank215` varchar(50) NOT NULL,
  `department215` varchar(50) NOT NULL,
  `name315` varchar(100) NOT NULL,
  `name415` varchar(100) NOT NULL,
  `d01` int(2) NOT NULL,
  `d02` int(2) NOT NULL,
  `d03` int(2) NOT NULL,
  `d04` int(2) NOT NULL,
  `d05` int(2) NOT NULL,
  `d06` int(2) NOT NULL,
  `d07` int(2) NOT NULL,
  `d08` int(2) NOT NULL,
  `d09` int(2) NOT NULL,
  `d10` int(2) NOT NULL,
  `d11` int(2) NOT NULL,
  `d12` int(2) NOT NULL,
  `d13` int(2) NOT NULL,
  `d14` int(2) NOT NULL,
  `date15` datetime NOT NULL,
  `result` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sp15`
--

INSERT INTO `sp15` (`id`, `user_id`, `name015`, `studentid015`, `branch015`, `faculty015`, `name115`, `name215`, `rank215`, `department215`, `name315`, `name415`, `d01`, `d02`, `d03`, `d04`, `d05`, `d06`, `d07`, `d08`, `d09`, `d10`, `d11`, `d12`, `d13`, `d14`, `date15`, `result`) VALUES
(1, 2, 'พิสิด โพด้วง213132', '123123123', '23qweqw', 'eqweqwe', 'eqweqweqwe', 'e', 'e', 'wqe', 'we', 'e', 5, 3, 3, 3, 5, 13, 8, 8, 3, 8, 4, 4, 2, 4, '2022-08-28 23:27:15', ''),
(2, 2, 'พิสิด โพด้วง', '123123123', '23qweqw', 'eqweqwe', 'eqweqweqwe', 'e', 'e', 'wqe', 'we', 'e', 5, 3, 3, 3, 5, 13, 8, 8, 3, 8, 4, 4, 2, 4, '0000-00-00 00:00:00', ''),
(3, 7, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', ''),
(4, 4, 'พิสิษฐ์ โพธิ์ด้วง', '62046680109', 'วิศวกรรมคอมพิวเตอร์', 'เทคโนโลยีอุตสหกรรม', 'ศักดิ์สยาม', 'อ.พิทักษ์ คล้ายชม', 'ฟหก', 'ฟหกฟหก', 'ฟหกฟหก', 'ฟหกฟหก', 5, 4, 4, 5, 5, 15, 9, 8, 5, 9, 4, 5, 4, 4, '0000-00-00 00:00:00', '0.86');

-- --------------------------------------------------------

--
-- Table structure for table `sp15a`
--

CREATE TABLE `sp15a` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `AdminUserName` varchar(255) NOT NULL,
  `AdminPassword` varchar(255) NOT NULL,
  `AdminEmailId` varchar(255) NOT NULL,
  `Is_Active` int(11) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `AdminUserName`, `AdminPassword`, `AdminEmailId`, `Is_Active`, `CreationDate`, `UpdationDate`) VALUES
(1, 'admin', '$2y$12$/2QGABaOK4G9VpAR7TpuiOK5yinix9AmjboI3C/HUqMeVs0cWb3o.', 'campcodes@gmail.com', 1, '2020-03-27 17:51:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL,
  `CategoryName` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Description` mediumtext CHARACTER SET utf8mb4 DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `CategoryName`, `Description`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(8, '2565', 'เกี่ยวกับโพสหน้าเพจ', '2022-07-23 11:13:23', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblcomments`
--

CREATE TABLE `tblcomments` (
  `id` int(11) NOT NULL,
  `postId` char(11) CHARACTER SET utf8mb4 DEFAULT NULL,
  `fullname` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `faculty` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `studentid` varchar(20) NOT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcomments`
--

INSERT INTO `tblcomments` (`id`, `postId`, `fullname`, `faculty`, `studentid`, `postingDate`, `status`, `user_id`) VALUES
(135, '25', 'นนทภร อ่อนชูศรี', 'คณะวิทยาศาสตร์และเทคโนโลยี', '62043530103', '2022-10-18 04:21:24', 2, 16),
(136, '26', 'นนทภร อ่อนชูศรี', 'คณะวิทยาศาสตร์และเทคโนโลยี', '62043530103', '2022-10-18 04:29:23', 2, 16),
(137, '27', 'นนทภร อ่อนชูศรี', 'คณะวิทยาศาสตร์และเทคโนโลยี', '62043530103', '2022-10-18 04:48:19', 2, 16),
(138, '28', 'นนทภร อ่อนชูศรี', 'คณะวิทยาศาสตร์และเทคโนโลยี', '62043530103', '2022-10-18 04:48:22', 2, 16),
(139, '29', 'นนทภร อ่อนชูศรี', 'คณะวิทยาศาสตร์และเทคโนโลยี', '62043530103', '2022-10-18 04:48:25', 2, 16);

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `PageName` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL,
  `PageTitle` mediumtext CHARACTER SET utf8mb4 DEFAULT NULL,
  `Description` longtext CHARACTER SET utf8mb4 DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `PageTitle`, `Description`, `PostingDate`, `UpdationDate`) VALUES
(1, 'aboutus', 'About News Portal', '<font color=\"#7b8898\" face=\"Mercury SSm A, Mercury SSm B, Georgia, Times, Times New Roman, Microsoft YaHei New, Microsoft Yahei, 微软雅黑, 宋体, SimSun, STXihei, 华文细黑, serif\"><span style=\"font-size: 26px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></font><br>', '2018-06-30 18:01:03', '2018-06-30 19:19:51'),
(2, 'contactus', 'Contact Details', '<p><br></p><p><b>Address :&nbsp; </b>New Delhi India</p><p><b>Phone Number : </b>+91 -01234567890</p><p><b>Email -id : </b>phpgurukulofficial@gmail.com</p>', '2018-06-30 18:01:36', '2018-06-30 19:23:25');

-- --------------------------------------------------------

--
-- Table structure for table `tblposts`
--

CREATE TABLE `tblposts` (
  `id` int(11) NOT NULL,
  `PostTitle` longtext CHARACTER SET utf8mb4 DEFAULT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `SubCategoryId` int(11) DEFAULT NULL,
  `PostDetails` longtext CHARACTER SET utf8mb4 DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL,
  `PostUrl` mediumtext CHARACTER SET utf8mb4 DEFAULT NULL,
  `PostImage` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `hourspost` int(2) NOT NULL,
  `status` int(11) NOT NULL,
  `userlimit` int(11) NOT NULL,
  `limitcount` int(11) NOT NULL,
  `evendate` date NOT NULL,
  `evendate2` date NOT NULL,
  `doc_name` varchar(200) NOT NULL,
  `doc_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblposts`
--

INSERT INTO `tblposts` (`id`, `PostTitle`, `CategoryId`, `SubCategoryId`, `PostDetails`, `PostingDate`, `UpdationDate`, `Is_Active`, `PostUrl`, `PostImage`, `hourspost`, `status`, `userlimit`, `limitcount`, `evendate`, `evendate2`, `doc_name`, `doc_file`) VALUES
(24, 'โครงการเตรียมความพร้อมปรับพื้นฐานร่วมกับผู้ใช้บัณฑิต \"New mormal Pre-course Experience\" ปีการศึกษา ๒๕๖๕', 8, 10, '<p>โครงการเตรียมความพร้อมปรับพื้นฐานร่วมกับผู้ใช้บัณฑิต<br></p>', '2022-08-29 04:23:17', '2022-10-18 04:20:54', 1, 'โครงการเตรียมความพร้อมปรับพื้นฐานร่วมกับผู้ใช้บัณฑิต-\"New-mormal-Pre-course-Experience\"-ปีการศึกษา-๒๕๖๕', 'e152c9213d032cbc7e89f5f522e3032e.jpg', 8, 1, 55, 2, '0000-00-00', '0000-00-00', '', ''),
(25, 'โครงการเตรียมความพร้อมนักศึกษาเพื่อพัฒนาและนำเสนอโครงงาน (project) สหกิจศึกษาด้านสังคมศาสตร์', 8, 10, '<p>โครงการเตรียมความพร้อมนักศึกษาเพื่อพัฒนาและนำเสนอโครงงาน (project) สหกิจศึกษาด้านสังคมศาสตร์<br></p>', '2022-08-29 04:55:22', '2022-10-18 04:21:49', 1, 'โครงการเตรียมความพร้อมนักศึกษาเพื่อพัฒนาและนำเสนอโครงงาน-(project)-สหกิจศึกษาด้านสังคมศาสตร์', '9bcf357de401edaf63409eea5294d71f.jpg', 8, 0, 50, 1, '0000-00-00', '0000-00-00', '', ''),
(26, 'โครงการเตรียมความพร้อมlสู่บริการ service Exellence ตอน \"Service Management ... ช่วงเวลาดีๆ จากพี่ถึงน้องๆ\"', 8, 10, '<p>โครงการเตรียมความพร้อมlสู่บริการ service Exellence ตอน \"Service Management ... ช่วงเวลาดีๆ จากพี่ถึงน้องๆ\"<br></p>', '2022-08-29 06:40:56', '2022-10-18 04:32:03', 1, 'โครงการเตรียมความพร้อมlสู่บริการ-service-Exellence-ตอน-\"Service-Management-...-ช่วงเวลาดีๆ-จากพี่ถึงน้องๆ\"', '8da3262c10582e42e08a5648546b7ae1.jpg', 8, 0, 101, 1, '0000-00-00', '0000-00-00', '', ''),
(27, 'โครงการเตรียมความพร้อมส่งเสริมสมรรถนะทางด้านภาษาและทักษะดิจิทัล สำหรับบัณฑิตในศตวรรษที๒๑วิทยาลัยน่าน', 8, 10, '<p>โครงการเตรียมความพร้อมส่งเสริมสมรรถนะทางด้านภาษาและทักษะดิจิทัล สำหรับบัณฑิตในศตวรรษที๒๑วิทยาลัยน่าน<br></p>', '2022-08-29 06:47:49', '2022-10-18 04:48:30', 1, 'โครงการเตรียมความพร้อมส่งเสริมสมรรถนะทางด้านภาษาและทักษะดิจิทัล-สำหรับบัณฑิตในศตวรรษที๒๑วิทยาลัยน่าน', '98e7fe7b2dff3c7fd785ae20a11078f7.jpg', 8, 0, 120, 1, '0000-00-00', '0000-00-00', '', ''),
(28, 'โครงการอบรมเชิงปฏิบัติการ \"Service Growth Mindset เตรียมพร้อมสู่การทำงานในยุค Next Normal\" หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาการจัดการธุรกิจบริการ คณะวิทยาการจัดการ มหาวิทยาลัยราชภัฏอุตรดิตถ์', 8, 10, '<p>โครงการอบรมเชิงปฏิบัติการ \"Service Growth Mindset เตรียมพร้อมสู่การทำงานในยุค Next Normal\" หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาการจัดการธุรกิจบริการ คณะวิทยาการจัดการ มหาวิทยาลัยราชภัฏอุตรดิตถ์<br></p>', '2022-08-29 06:58:04', '2022-10-18 04:48:32', 1, 'โครงการอบรมเชิงปฏิบัติการ-\"Service-Growth-Mindset-เตรียมพร้อมสู่การทำงานในยุค-Next-Normal\"-หลักสูตรบริหารธุรกิจบัณฑิต-สาขาวิชาการจัดการธุรกิจบริการ-คณะวิทยาการจัดการ-มหาวิทยาลัยราชภัฏอุตรดิตถ์', '44d4f315f248c4e3f1fa37777787c365.jpg', 8, 0, 68, 1, '0000-00-00', '0000-00-00', '', ''),
(29, 'โครงการเตรียมความพร้อมนักศึกษาสหกิจศึกษา เรื่อง \"ศิษย์เก่าโชว์ให้น้องดู เล่าสู่กันฟัง ปฏิบัติสหกิจศึจแบบปังๆต้องทำ (ยัง) ไง\"', 8, 10, '<p><span class=\"pq6dq46d tbxw36s4 knj5qynh kvgmc6g5 ditlmg2l oygrvhab nvdbi5me sf5mxxl7 gl3lb2sf hhz5lgdu\" style=\"margin: 0px 1px; height: 16px; width: 16px; display: inline-flex; vertical-align: middle; font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; animation-name: none !important; transition-property: none !important;\"><img height=\"16\" width=\"16\" alt=\"📢\" referrerpolicy=\"origin-when-cross-origin\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t92/1.5/16/1f4e2.png\" style=\"animation-name: none !important; transition-property: none !important;\"></span><span class=\"pq6dq46d tbxw36s4 knj5qynh kvgmc6g5 ditlmg2l oygrvhab nvdbi5me sf5mxxl7 gl3lb2sf hhz5lgdu\" style=\"margin: 0px 1px; height: 16px; width: 16px; display: inline-flex; vertical-align: middle; font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; animation-name: none !important; transition-property: none !important;\"><img height=\"16\" width=\"16\" alt=\"📣\" referrerpolicy=\"origin-when-cross-origin\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t13/1.5/16/1f4e3.png\" style=\"animation-name: none !important; transition-property: none !important;\"></span><span style=\"font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px;\">นักศึกษาไม่ควรพลาดนะคะ พุธหน้าแล้วน๊าาาาาา</span><span class=\"pq6dq46d tbxw36s4 knj5qynh kvgmc6g5 ditlmg2l oygrvhab nvdbi5me sf5mxxl7 gl3lb2sf hhz5lgdu\" style=\"margin: 0px 1px; height: 16px; width: 16px; display: inline-flex; vertical-align: middle; font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; animation-name: none !important; transition-property: none !important;\"><img height=\"16\" width=\"16\" alt=\"😉\" referrerpolicy=\"origin-when-cross-origin\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb0/1.5/16/1f609.png\" style=\"animation-name: none !important; transition-property: none !important;\"></span><span class=\"pq6dq46d tbxw36s4 knj5qynh kvgmc6g5 ditlmg2l oygrvhab nvdbi5me sf5mxxl7 gl3lb2sf hhz5lgdu\" style=\"margin: 0px 1px; height: 16px; width: 16px; display: inline-flex; vertical-align: middle; font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; animation-name: none !important; transition-property: none !important;\"><img height=\"16\" width=\"16\" alt=\"✅\" referrerpolicy=\"origin-when-cross-origin\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tba/1.5/16/2705.png\" style=\"animation-name: none !important; transition-property: none !important;\"></span><br style=\"font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; animation-name: none !important; transition-property: none !important;\"><span style=\"font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px;\">วิทยากรระดับเทพ ล้วนเป็นศิษย์เก่ามหาวิทยาลัยราชภัฏุอุตรดิตถ์ ประกอบด้วย</span><br style=\"font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; animation-name: none !important; transition-property: none !important;\"><span class=\"pq6dq46d tbxw36s4 knj5qynh kvgmc6g5 ditlmg2l oygrvhab nvdbi5me sf5mxxl7 gl3lb2sf hhz5lgdu\" style=\"margin: 0px 1px; height: 16px; width: 16px; display: inline-flex; vertical-align: middle; font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; animation-name: none !important; transition-property: none !important;\"><img height=\"16\" width=\"16\" alt=\"💎\" referrerpolicy=\"origin-when-cross-origin\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t52/1.5/16/1f48e.png\" style=\"animation-name: none !important; transition-property: none !important;\"></span><span style=\"font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px;\">&nbsp;1. คุณนรากรณ์ ส่งกิตติโรจน์ (พี่นิก) ศิษย์เก่าคณะเทคโนโลยีอุตสาหกรรม สาขาวิศวกรรมคอมพิวเตอร์ เจ้าของโครงงานด้านนวัตกรรมสหกิจศึกษา รางวัลดีเด่นระดับชาติ ประจำปี 2559</span><br style=\"font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; animation-name: none !important; transition-property: none !important;\"><br style=\"font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; animation-name: none !important; transition-property: none !important;\"><span class=\"pq6dq46d tbxw36s4 knj5qynh kvgmc6g5 ditlmg2l oygrvhab nvdbi5me sf5mxxl7 gl3lb2sf hhz5lgdu\" style=\"margin: 0px 1px; height: 16px; width: 16px; display: inline-flex; vertical-align: middle; font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; animation-name: none !important; transition-property: none !important;\"><img height=\"16\" width=\"16\" alt=\"🏆\" referrerpolicy=\"origin-when-cross-origin\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t17/1.5/16/1f3c6.png\" style=\"animation-name: none !important; transition-property: none !important;\"></span><span style=\"font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px;\">2. คุณพิชญ์พงษ์ จันทา (พี่แมน) อดีตประธานชมรม URU English Club ศิษย์เก่าคณะมนุษยศาสตร์และสังคมศาสตร์ สาขาภาษาอังกฤษ เจ้าของโครงงานสหกิจศึกษาดีเด่น ประเภท Poster Presentation ด้านมนุษยศาสตร์และสังคมศาสตร์ และการจัดการ ระดับเครือข่ายภาคเหนือตอนล่าง ประจำปีการศึกษา 2559 ได้รับทุนศึกษาต่อในระดับปริญญาโท มหาวิทยาลัย National Chin-Yi University of Technology ประเทศไต้หวัน จบการศึกษาระดับปริญญาโทด้วยเกรดเฉลี่ย 3.98 และได้รับรางวัล Award for Excellent Academic Performance</span><br style=\"font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; animation-name: none !important; transition-property: none !important;\"><br style=\"font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; animation-name: none !important; transition-property: none !important;\"><span class=\"pq6dq46d tbxw36s4 knj5qynh kvgmc6g5 ditlmg2l oygrvhab nvdbi5me sf5mxxl7 gl3lb2sf hhz5lgdu\" style=\"margin: 0px 1px; height: 16px; width: 16px; display: inline-flex; vertical-align: middle; font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; animation-name: none !important; transition-property: none !important;\"><img height=\"16\" width=\"16\" alt=\"🎖\" referrerpolicy=\"origin-when-cross-origin\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t1/1.5/16/1f396.png\" style=\"animation-name: none !important; transition-property: none !important;\"></span><span style=\"font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px;\">3. ว่าที่ ร.ต. พงษ์สิทธิ์ แก้วโต (พี่ดรีม) อดีตประธานสโมสรคณะมนุษยศาสตร์และสังคมศาสตร์ ศิษย์เก่าคณะมนุษยศาสตร์และสังคมศาสตร์ สาขารัฐประศาสนศาสตร์ ได้รับคัดเลือกร่วมโครงการ Singha Biz Course ปี 9</span><br></p>', '2022-08-29 07:03:46', '2022-10-18 04:48:33', 1, 'โครงการเตรียมความพร้อมนักศึกษาสหกิจศึกษา-เรื่อง-\"ศิษย์เก่าโชว์ให้น้องดู-เล่าสู่กันฟัง-ปฏิบัติสหกิจศึจแบบปังๆต้องทำ-(ยัง)-ไง\"', 'f35315d14fe379ef66d6ea4210da4422.jpg', 8, 0, 300, 1, '0000-00-00', '0000-00-00', '', ''),
(30, 'โครงการเตรียมความพร้อมนักศึกษาสหกิจศึกษา เรื่อง \"Self-Esteems Mindset และ Growth Mindset เพื่อการรู้คุณค่าและพัฒนาตัวเอง\"', 8, 10, '<p>นักศึกษาไม่ควรพลาดนะครับ มีโครงการดีๆบอกต่อ พุธหน้าแล้วน๊าาาาาา<br style=\"animation-name: none !important; transition-property: none !important;\">วิทยากรระดับเทพ<br style=\"animation-name: none !important; transition-property: none !important;\"><br style=\"animation-name: none !important; transition-property: none !important;\">แจ้งข่าวประชาสัมพันธ์ให้กับนักศึกษาทุกคน<br style=\"animation-name: none !important; transition-property: none !important;\"><br style=\"animation-name: none !important; transition-property: none !important;\">ประชาสัมพันธ์โครงการเตรียมความพร้อมนักศึกษาสหกิจศึกษา เรื่อง \"Self-Esteems Mindset และ Growth Mindset เพื่อการรู้คุณค่าและพัฒนาตัวเอง\"<br style=\"animation-name: none !important; transition-property: none !important;\"><br style=\"animation-name: none !important; transition-property: none !important;\">ในวันพุธที่ 2 มีนาคม 2565 เวลา 12.30 - 16.30 น. ผ่านระบบ Zoom<br style=\"animation-name: none !important; transition-property: none !important;\"><br style=\"animation-name: none !important; transition-property: none !important;\">ทั้งนี้ นักศึกษาที่ลงทะเบียนรายวิชาการเตรียมประสบการณ์ภาคสนามการ เตรียมประสบการณ์วิชาชีพและการเตรียมความพร้อมนักศึกษาสหกิจศึกษา ภาคเรียนที่ 2/2564 และนักศึกษาที่สนใจ ทุกชั้นปี สามารถลงทะเบียนตั้งแต่บัดนี้ ถึง วันจัดโครงการฯ ในกิจกรรมมีบาร์โค้ดและเกียรติบัตรแจก<br style=\"animation-name: none !important; transition-property: none !important;\"><br style=\"animation-name: none !important; transition-property: none !important;\">ตามลิงก์ที่แนบมาพร้อมนี้ครับ<br style=\"animation-name: none !important; transition-property: none !important;\"><br style=\"animation-name: none !important; transition-property: none !important;\"><span style=\"animation-name: none !important; transition-property: none !important;\"><a class=\"oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 nc684nl6 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl gpro0wi8 py34i1dx\" href=\"https://forms.gle/Rvqybh4q6ChQc1QP6?fbclid=IwAR1ez5nQKSr9GSWIxkX59_1-oKdr5Z3ypGf6K6Zz-VA0TjAjXWD-S2nVb7Q\" rel=\"nofollow\" role=\"link\" tabindex=\"0\" target=\"_blank\" style=\"cursor: pointer; list-style: none; border-width: 0px; border-style: initial; border-color: initial; padding: 0px; margin: 0px; touch-action: manipulation; text-align: inherit; display: inline; -webkit-tap-highlight-color: transparent; animation-name: none !important; transition-property: none !important;\">https://forms.gle/Rvqybh4q6ChQc1QP6</a></span><br></p>', '2022-08-29 07:06:07', '2022-10-07 07:54:49', 1, 'โครงการเตรียมความพร้อมนักศึกษาสหกิจศึกษา-เรื่อง-\"Self-Esteems-Mindset-และ-Growth-Mindset-เพื่อการรู้คุณค่าและพัฒนาตัวเอง\"', '91a578bb40da860ea413ee8a12ec5912.jpg', 8, 0, 300, 0, '0000-00-00', '0000-00-00', '', ''),
(31, 'โครงการเตรียมความพร้อมนักศึกษาสหกิจศึกษา เรื่อง \"Powerful Skills for a Better Life ทักษะทรงพลัง พลิกวิกฤต เพื่อชีวิตที่ดีกว่า ผ่านระบบ Zoom\"', 8, 10, '<p><span class=\"pq6dq46d tbxw36s4 knj5qynh kvgmc6g5 ditlmg2l oygrvhab nvdbi5me sf5mxxl7 gl3lb2sf hhz5lgdu\" style=\"margin: 0px 1px; height: 16px; width: 16px; display: inline-flex; vertical-align: middle; font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; animation-name: none !important; transition-property: none !important;\"><img height=\"16\" width=\"16\" alt=\"📌\" referrerpolicy=\"origin-when-cross-origin\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t5/1.5/16/1f4cc.png\" style=\"animation-name: none !important; transition-property: none !important;\"></span><span style=\"font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px;\">เสาร์ที่ 19 มีนาคม 2565 เวลา 08.00 - 16.30 น. ผ่านระบบ Zoom</span><br style=\"font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; animation-name: none !important; transition-property: none !important;\"><span class=\"pq6dq46d tbxw36s4 knj5qynh kvgmc6g5 ditlmg2l oygrvhab nvdbi5me sf5mxxl7 gl3lb2sf hhz5lgdu\" style=\"margin: 0px 1px; height: 16px; width: 16px; display: inline-flex; vertical-align: middle; font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; animation-name: none !important; transition-property: none !important;\"><img height=\"16\" width=\"16\" alt=\"📣\" referrerpolicy=\"origin-when-cross-origin\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t13/1.5/16/1f4e3.png\" style=\"animation-name: none !important; transition-property: none !important;\"></span><span class=\"pq6dq46d tbxw36s4 knj5qynh kvgmc6g5 ditlmg2l oygrvhab nvdbi5me sf5mxxl7 gl3lb2sf hhz5lgdu\" style=\"margin: 0px 1px; height: 16px; width: 16px; display: inline-flex; vertical-align: middle; font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; animation-name: none !important; transition-property: none !important;\"><img height=\"16\" width=\"16\" alt=\"📣\" referrerpolicy=\"origin-when-cross-origin\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t13/1.5/16/1f4e3.png\" style=\"animation-name: none !important; transition-property: none !important;\"></span><span style=\"font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px;\">จะมีโครงการเตรียมความพร้อมนักศึกษาสหกิจศึกษา เรื่อง \"Powerful Skills for a Better Life ทักษะทรงพลัง พลิกวิกฤต เพื่อชีวิตที่ดีกว่า\"</span><br style=\"font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; animation-name: none !important; transition-property: none !important;\"><span class=\"pq6dq46d tbxw36s4 knj5qynh kvgmc6g5 ditlmg2l oygrvhab nvdbi5me sf5mxxl7 gl3lb2sf hhz5lgdu\" style=\"margin: 0px 1px; height: 16px; width: 16px; display: inline-flex; vertical-align: middle; font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; animation-name: none !important; transition-property: none !important;\"><img height=\"16\" width=\"16\" alt=\"💎\" referrerpolicy=\"origin-when-cross-origin\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t52/1.5/16/1f48e.png\" style=\"animation-name: none !important; transition-property: none !important;\"></span><span style=\"font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px;\">วิทยากรจาก สำนักงานพัฒนาฝีมือแรงงาน อุตรดิตถ์</span><br style=\"font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; animation-name: none !important; transition-property: none !important;\"><span class=\"pq6dq46d tbxw36s4 knj5qynh kvgmc6g5 ditlmg2l oygrvhab nvdbi5me sf5mxxl7 gl3lb2sf hhz5lgdu\" style=\"margin: 0px 1px; height: 16px; width: 16px; display: inline-flex; vertical-align: middle; font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; animation-name: none !important; transition-property: none !important;\"><img height=\"16\" width=\"16\" alt=\"🎯\" referrerpolicy=\"origin-when-cross-origin\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t9/1.5/16/1f3af.png\" style=\"animation-name: none !important; transition-property: none !important;\"></span><span style=\"font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px;\">นักศึกษาเข้าร่วมได้ทุกคน ทั้งคนที่ลงทะเบียนรายวิชาการเตรียมประสบการณ์ภาคสนามการ เตรียมประสบการณ์วิชาชีพและการเตรียมความพร้อมนักศึกษาสหกิจศึกษา ภาคเรียนที่ 2/2564 และนักศึกษาที่สนใจ ทุกชั้นปี สามารถลงทะเบียนตั้งแต่บัดนี้ ถึง วันจัดโครงการฯ</span><br style=\"font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; animation-name: none !important; transition-property: none !important;\"><br style=\"font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; animation-name: none !important; transition-property: none !important;\"><span class=\"pq6dq46d tbxw36s4 knj5qynh kvgmc6g5 ditlmg2l oygrvhab nvdbi5me sf5mxxl7 gl3lb2sf hhz5lgdu\" style=\"margin: 0px 1px; height: 16px; width: 16px; display: inline-flex; vertical-align: middle; font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; animation-name: none !important; transition-property: none !important;\"><img height=\"16\" width=\"16\" alt=\"💻\" referrerpolicy=\"origin-when-cross-origin\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/te5/1.5/16/1f4bb.png\" style=\"animation-name: none !important; transition-property: none !important;\"></span><span style=\"font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px;\">ลิงก์ลงทะเบียน</span><span class=\"pq6dq46d tbxw36s4 knj5qynh kvgmc6g5 ditlmg2l oygrvhab nvdbi5me sf5mxxl7 gl3lb2sf hhz5lgdu\" style=\"margin: 0px 1px; height: 16px; width: 16px; display: inline-flex; vertical-align: middle; font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; animation-name: none !important; transition-property: none !important;\"><img height=\"16\" width=\"16\" alt=\"💻\" referrerpolicy=\"origin-when-cross-origin\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/te5/1.5/16/1f4bb.png\" style=\"animation-name: none !important; transition-property: none !important;\"></span><br style=\"font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; animation-name: none !important; transition-property: none !important;\"><span style=\"font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; animation-name: none !important; transition-property: none !important;\"><a class=\"oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 nc684nl6 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl gpro0wi8 py34i1dx\" href=\"https://forms.gle/9jZYMKT9SyKPD4eB9?fbclid=IwAR1QovT-ttFp4ei5rA70_UTfDKWqUVEFKzwdSQxBiMmPQ45GJnUF-pBqbp4\" rel=\"nofollow\" role=\"link\" tabindex=\"0\" target=\"_blank\" style=\"cursor: pointer; list-style: none; border-width: 0px; border-style: initial; border-color: initial; padding: 0px; margin: 0px; touch-action: manipulation; text-align: inherit; display: inline; -webkit-tap-highlight-color: transparent; font-family: inherit; animation-name: none !important; transition-property: none !important;\">https://forms.gle/9jZYMKT9SyKPD4eB9</a></span><br></p>', '2022-08-29 07:08:15', '2022-10-15 15:23:03', 1, 'โครงการเตรียมความพร้อมนักศึกษาสหกิจศึกษา-เรื่อง-\"Powerful-Skills-for-a-Better-Life-ทักษะทรงพลัง-พลิกวิกฤต-เพื่อชีวิตที่ดีกว่า-ผ่านระบบ-Zoom\"', '58522548d7735df419c67b5bace1103b.jpg', 8, 0, 500, 0, '2022-03-19', '2022-03-19', '', ''),
(32, 'โครงการเตรียมความพร้อมนักศึกษาสหกิจศึกษา หัวข้อ \"ศักยภาพนักศึกษาสหกิจศึกษาในศตวรรษที่ 21\"  ผ่านระบบ Zoom ', 8, 10, '<p>โครงการเตรียมความพร้อมนักศึกษาสหกิจศึกษา หัวข้อ \"ศักยภาพนักศึกษาสหกิจศึกษาในศตวรรษที่ 21\"  ผ่านระบบ Zoom  วันพุธที่ 2 กุมภาพันธ์ 2565 ได้รับเกียรติจาก อาจารย์ ดร.อรรจน์ สีหะอำไพ  นักวิชาการอิสระและที่ปรึกษาด้านพัฒนาองค์กรภาครัฐและเอกชน เป็นวิทยากรในครั้งนี้<br></p>', '2022-08-29 07:15:14', '2022-10-17 09:28:55', 1, 'โครงการเตรียมความพร้อมนักศึกษาสหกิจศึกษา-หัวข้อ-\"ศักยภาพนักศึกษาสหกิจศึกษาในศตวรรษที่-21\"--ผ่านระบบ-Zoom-', 'd21d4c8b83949cd9f7e6f5dfedb23bd2.jpg', 8, 0, 300, 1, '2022-02-02', '2022-02-02', '', ''),
(40, 'test', 8, 10, '<p>test</p>', '2022-10-17 09:18:59', '2022-10-17 09:20:18', 1, 'test', '9aefd1b73405f8521b24162cacd12571.png', 8, 1, 100, 0, '2022-10-17', '2022-10-17', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubcategory`
--

CREATE TABLE `tblsubcategory` (
  `SubCategoryId` int(11) NOT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `Subcategory` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `SubCatDescription` mediumtext CHARACTER SET utf8mb4 DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubcategory`
--

INSERT INTO `tblsubcategory` (`SubCategoryId`, `CategoryId`, `Subcategory`, `SubCatDescription`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(10, 8, 'เตรียมความพร้อม', 'เกี่ยวกับเตรียมความพร้อม', '2022-07-23 11:14:12', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacherusers`
--

CREATE TABLE `teacherusers` (
  `id` int(11) NOT NULL,
  `nameprefix` varchar(40) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `urole` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacherusers`
--

INSERT INTO `teacherusers` (`id`, `nameprefix`, `fullname`, `urole`, `email`, `password`, `branch`, `faculty`, `phone`) VALUES
(2, 'ผู้ช่วยศาสตราจารย์ ดร.', 'พิทักษ์ คล้ายชม', 'อาจารย์ที่ปรึกษา', 'teacher1@gmail.com', '$2y$10$fUpmhZ7vMjY8d7QDGAHKfOz2vvWi.OwCTZSh5iA8i7MNr.KwA0IQW', 'วิศวกรรมคอมพิวเตอร์', 'เทคโนโลยีอุตสาหกรรม', '0987765567'),
(3, 'ผู้ช่วยศาสตราจารย์ ดร.', 'พิทักษ์ คล้ายชม', 'ประธานหลักสูตร', 'teacher2@gmail.com', '$2y$10$fUpmhZ7vMjY8d7QDGAHKfOz2vvWi.OwCTZSh5iA8i7MNr.KwA0IQW', 'วิศวกรรมคอมพิวเตอร์', 'เทคโนโลยีอุตสาหกรรม', '0987765567'),
(4, 'อาจารย์', 'สารัลย์ กระจง', 'อาจารย์นิเทศ', 'teacher3@gmail.com', '$2y$10$fUpmhZ7vMjY8d7QDGAHKfOz2vvWi.OwCTZSh5iA8i7MNr.KwA0IQW', 'วิศวกรรมคอมพิวเตอร์', 'เทคโนโลยีอุตสาหกรรม', '0987765567'),
(6, 'อาจารย์', 'สารัลย์ กระจง', 'ผู้บริหาร', 'teacher5@gmail.com', '$2y$10$fUpmhZ7vMjY8d7QDGAHKfOz2vvWi.OwCTZSh5iA8i7MNr.KwA0IQW', 'วิศวกรรมคอมพิวเตอร์', 'เทคโนโลยีอุตสาหกรรม', '0987765567'),
(7, 'อาจารย์', 'สารัลย์ กระจง', 'อาจารย์ที่ปรึกษา', 'teachersaran@gmail.com', '$2y$10$nayC0T.oGTzHvhdxRlGwv.o0jopZdTfC87txZZS7OlguwjC2Zsaei', 'วิศวกรรมคอมพิวเตอร์', 'เทคโนโลยีอุตสาหกรรม', '0623088877');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `nameprefix` varchar(20) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `fullnameeng` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `urole` varchar(20) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `studentid` varchar(15) NOT NULL,
  `course` varchar(30) NOT NULL,
  `yearclass` int(4) NOT NULL,
  `teacher` varchar(100) NOT NULL,
  `hoursactivity` int(4) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `housenumber` varchar(10) NOT NULL,
  `village` varchar(50) NOT NULL,
  `alley` varchar(50) NOT NULL,
  `road` varchar(50) NOT NULL,
  `subdistrict` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `postalcode` int(10) NOT NULL,
  `sector` varchar(20) NOT NULL,
  `gpa` varchar(10) NOT NULL,
  `gpax` varchar(10) NOT NULL,
  `preschoolyear` int(5) NOT NULL,
  `schoolyear` int(5) NOT NULL,
  `image` varchar(255) NOT NULL,
  `semester` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nameprefix`, `fullname`, `fullnameeng`, `email`, `password`, `urole`, `faculty`, `branch`, `studentid`, `course`, `yearclass`, `teacher`, `hoursactivity`, `phone`, `housenumber`, `village`, `alley`, `road`, `subdistrict`, `district`, `province`, `postalcode`, `sector`, `gpa`, `gpax`, `preschoolyear`, `schoolyear`, `image`, `semester`) VALUES
(3, 'นาย', 'พิสิษฐ์ โพธิ์ด้วง', 'PISITH PODOUNG', 'kollxia@gmail.com', '$2y$10$8EA6v1WH30gJADXsCxoUc.16JWVxhXWTCWuxdqbTKxNn6DPUP/M/i', 'user', 'วิศวกรรมคอมพิวเตอร์', 'เทคโนโลยีอุตสาหกรรม', '62046680109', '4 ปี', 0, 'อาจารย์สารัล กระจง', 30, '0988876543', '67', '213', '-', '-', 'หาดกรวด', 'เมือง', 'อุตรดิตถ์', 53000, 'ปกติ', '3.43', '3.56', 2565, 2565, '300833428_197959189244085_8203338960455951536_n.jpg', 2),
(7, 'นางสาว', 'ณิศรา โพธิ์งาม', 'NISARA PHONGAM', 'phonenisara1@gmail.com', '$2y$10$8EA6v1WH30gJADXsCxoUc.16JWVxhXWTCWuxdqbTKxNn6DPUP/M/i', 'user', 'คณะมนุษยศาสตร์และสังคมศาสตร์', 'การท่องเที่ยว', '62044180102', 'การท่องเที่ยว', 4, 'อาจารย์ ทิพาพร โพธิ์ศรี', 30, '0613691350', '156/1 ', '1', '-', '-', 'แม่พลู', 'ลับแล', 'อุตรดิตถ์', 53130, 'ภาคปกติ', '3.43', '2.86', 2, 2565, 'sp02.png', 2),
(8, 'นางสาว', 'สร้อยฟ้า หาญครุฑ', 'SROIFA HANKHRUT', 'sroifa.hankhrut@gmail.com', '$2y$10$ElnJpghZgmkKrogEYIdLT.22o82P0KggFmYpiNPgorwrMCJYs54AO', 'user', 'คณะมนุษยศาสตร์และสังคมศาสตร์', 'การท่องเที่ยว', '62044180113', 'การท่องเที่ยว', 0, 'อาจารย์ ทิพาพร โพธิ์ศรี', 0, '093-232-072', '76', '', '', '-', 'นาขุนไกร', 'ศรีสำโรง', 'สุโขทัย', 64120, 'ภาคปกติ', '115', '4.27', 2, 2565, 'สร้อยฟ้า หาญครุฑ.png', 0),
(9, 'นางสาว', 'ตรีภคมล์ สิทธวีราวุธ', 'TEIPHAKMON SITHAVERAUTH', 'triphakamon@gmail.com', '$2y$10$Vogg9MlX1yKSYsXlMO/9eO1uz3EFfa/1sMUb2Z.jH6kibLlVWpeYe', 'user', 'คณะวิทยาศาสตร์และเทคโนโลยี', 'ชีววิทยา', '62042530110', '', 0, 'ผศ. ดร. สิริวดี พรหมน้อย', 0, '0623105731', '129', '13', '-', '-', 'ผาเลือด', 'ท่าปลา', 'อุตรดิตถ์', 53190, 'ภาคปกติ', '2.40', '2.59', 2, 2565, 'ตรีภถมลล์ สิทธิวีราวุธ.png', 2),
(10, 'นางสาว', 'ศิรินันท์ คำบุทอง', 'SIRINAN KAMBUTHONG', 'sirinun.4233@gmail.com', '$2y$10$g0/wd2v50W5jaLJz9x7mAOjx1aH8/U9j5jSO6yBZtktaV63x6Y1E6', 'user', 'คณะวิทยาศาสตร์และเทคโนโลยี', 'ชีววิทยา', '62042530111', '', 4, 'ผศ. ดร. สิริวดี พรหมน้อย', 0, '0631074991', '', '', '', '', '', '', '', 0, '', '', '', 0, 0, 'ศิรินันท์ คำบุทอง.png', 0),
(11, 'นาย', 'ธีรพงศ์ ตันกุระ', 'TEERAPONG TANKURA', 'ct.teerapong@gmail.com', '$2y$10$NfZG2qNqbGfUxTes3xKgfesGF1NTJuMkjcJQdDBOzTtxknFrVo/6y', 'user', 'คณะเทคโนโลยีอุตสาหกรรม', 'วิศวกรรมคอมพิวเตอร์', '62046680106', 'วิศวกรรมศาสตรบัณฑิต', 4, 'ผศ.อภิศักดิ์ พรหมฝาย', 0, '083-253-293', '7/3 ', '13', 'เพชรเกษม 95', 'เพชรเกษม', 'อ้อมน้อย', 'กระทุ่มแบน', 'สมุทรสาคร', 74130, 'ภาคปกติ', '3.29', '2.74', 2, 2565, '292444699_3205525539665759_7549029006824971931_n (1).jpg', 2),
(12, 'นางสาว', 'กริชญา ครุธผาสุข', 'KRITYA KRUTPHASUK', '61044990101@gmail.com', '$2y$10$8EA6v1WH30gJADXsCxoUc.16JWVxhXWTCWuxdqbTKxNn6DPUP/M/i', 'user', 'คณะมนุษยศาสตร์และสังคมศาสตร์', 'สังคมศาสตร์เพื่อการพัฒนาท้องถิ่น', '61044990101', '', 4, '', 30, '053442817', '', '', '', 'นาดวาร', 'ป่าเซ่า', 'เมือง', 'อุตรดิตถ์', 53000, 'ภาคปกติ', '', '', 2, 2564, '', 0),
(13, 'นางสาว', 'ปรีณา มานพกาวี', 'PAWEENA MANOPKAWEE', '62044180103@gmail.com', '$2y$10$N2x3s3OegY1YXufMLpfqNOcJYcTnTFmgZgxlxWaLi9WaOGVoUJHnW', 'user', 'คณะมนุษยศาสตร์และสังคมศาสตร์', 'การท่องเที่ยว', '62044180103', 'การท่องเที่ยว', 0, 'อาจารย์ ทิพาพร โพธิ์ศรี', 0, '095-797-929', '41/14', '2', '-', '-', 'ห้วยมุ่น', 'น้ำปาด', 'อุตรดิตถ์', 53110, 'ปกติ', '4.00', '3.66', 2, 2565, '', 2),
(14, 'นาย', 'ศิวกร ศิริรัตน์', 'SIVAKORN SIRIRAT', '62044180106@gmail.com', '$2y$10$qPR3iofAy95cId3aUrfFPeqjUkDqLDwExI87BEF8t5rMa9Gwi6kH.', 'user', 'คณะมนุษยศาสตร์และสังคมศาสตร์', 'การท่องเที่ยว', '62044180106', 'ท่องเที่ยว', 0, 'อาจารย์ ทิพาพร โพธิ์ศรี', 0, '0884078592', '90', '', '', '-', 'สถาน', 'ปีว', 'น่าน', 55120, 'ปกติ', '3.06', '2.77', 2, 2565, '', 0),
(15, 'นาย', 'พิสิฐชัย เทียมมีเชาว์', 'PHISITCHAI TIEMMECHOU', '62044180110@gmail.com', '$2y$10$tmNCvNJeyI4RZBhq1xVoLu2BMOzCxQSWj4EgbZo8HK05Dl2ucTEY6', 'user', 'คณะมนุษยศาสตร์และสังคมศาสตร์', 'การท่องเที่ยว', '62044180110', '', 0, 'อาจารย์ ทิพาพร โพธิ์ศรี', 0, '0960562417', '329/1', '7', '', '-', 'บ่อทอง', 'ทองแสนขัน', 'อุตรดิตถ์', 53230, 'ภาคปกติ', '112', '323.5', 2, 2565, '', 0),
(16, 'นาย', 'นนทภร อ่อนชูศรี', 'NONTAKORN ONCHUSRI', 'nontakorn@gmail.com', '$2y$10$03aLKIysmUJYAkTJcPbSXO./xk5bCW44valWAT2pCypGHXEgRPJai', 'user', 'คณะวิทยาศาสตร์และเทคโนโลยี', 'ชีววิทยา', '62043530103', '', 4, 'ผู้ช่วยศาสตร์ตราจารย์ ดร. สิริวดี พรหมน้อย', 40, '0638902997', '', '', '', '', '', '', '', 0, '', '', '', 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `visitusers`
--

CREATE TABLE `visitusers` (
  `id` int(11) NOT NULL,
  `nameprefix` varchar(30) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `urole` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `nameenterprise` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitusers`
--

INSERT INTO `visitusers` (`id`, `nameprefix`, `fullname`, `urole`, `email`, `password`, `phone`, `nameenterprise`) VALUES
(1, 'อาจารย์', 'สารัลย์ กระจง', 'ผู้นิเทศ', 'teacher1@gmail.com', '$2y$12$r846uvWUsuu3PvJZ6PiHA.PSr3QrsCr0nKDqoraRt8HGhJMAfQbYC', '0655555555', 'โรงพยาบาลอุตรดิตถ์');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enterprise`
--
ALTER TABLE `enterprise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enterpriseusers`
--
ALTER TABLE `enterpriseusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp01`
--
ALTER TABLE `sp01`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp02`
--
ALTER TABLE `sp02`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp03`
--
ALTER TABLE `sp03`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp03e`
--
ALTER TABLE `sp03e`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp03l`
--
ALTER TABLE `sp03l`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp031`
--
ALTER TABLE `sp031`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp04`
--
ALTER TABLE `sp04`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp07`
--
ALTER TABLE `sp07`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp08`
--
ALTER TABLE `sp08`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp09`
--
ALTER TABLE `sp09`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp12`
--
ALTER TABLE `sp12`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp12a`
--
ALTER TABLE `sp12a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp13`
--
ALTER TABLE `sp13`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp13a`
--
ALTER TABLE `sp13a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp14`
--
ALTER TABLE `sp14`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp14a`
--
ALTER TABLE `sp14a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp15`
--
ALTER TABLE `sp15`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp15a`
--
ALTER TABLE `sp15a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcomments`
--
ALTER TABLE `tblcomments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblposts`
--
ALTER TABLE `tblposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD PRIMARY KEY (`SubCategoryId`);

--
-- Indexes for table `teacherusers`
--
ALTER TABLE `teacherusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitusers`
--
ALTER TABLE `visitusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enterprise`
--
ALTER TABLE `enterprise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `enterpriseusers`
--
ALTER TABLE `enterpriseusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sp01`
--
ALTER TABLE `sp01`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sp02`
--
ALTER TABLE `sp02`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sp03`
--
ALTER TABLE `sp03`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sp03e`
--
ALTER TABLE `sp03e`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sp03l`
--
ALTER TABLE `sp03l`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sp031`
--
ALTER TABLE `sp031`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sp04`
--
ALTER TABLE `sp04`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sp07`
--
ALTER TABLE `sp07`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sp08`
--
ALTER TABLE `sp08`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sp09`
--
ALTER TABLE `sp09`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sp12`
--
ALTER TABLE `sp12`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sp12a`
--
ALTER TABLE `sp12a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sp13`
--
ALTER TABLE `sp13`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sp13a`
--
ALTER TABLE `sp13a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sp14`
--
ALTER TABLE `sp14`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sp14a`
--
ALTER TABLE `sp14a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sp15`
--
ALTER TABLE `sp15`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sp15a`
--
ALTER TABLE `sp15a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblcomments`
--
ALTER TABLE `tblcomments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblposts`
--
ALTER TABLE `tblposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  MODIFY `SubCategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teacherusers`
--
ALTER TABLE `teacherusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `visitusers`
--
ALTER TABLE `visitusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
