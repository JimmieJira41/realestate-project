-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 07:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

DROP TABLE IF EXISTS `building`;
CREATE TABLE `building` (
  `id_building` int(10) NOT NULL,
  `id_type` int(2) NOT NULL,
  `title_building` varchar(500) NOT NULL,
  `img_building` varchar(500) NOT NULL,
  `img_building_main` varchar(500) NOT NULL,
  `price_building_sale` int(11) NOT NULL,
  `price_building_minimum` int(12) NOT NULL,
  `price_building_maximum` int(12) NOT NULL,
  `description_building` varchar(1000) NOT NULL,
  `location_building` varchar(500) NOT NULL,
  `map_building` varchar(1000) NOT NULL,
  `date_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `estate`
--

DROP TABLE IF EXISTS `estate`;
CREATE TABLE `estate` (
  `id_estate` int(10) NOT NULL,
  `id_type` int(2) NOT NULL,
  `title_estate` varchar(500) NOT NULL,
  `img_estate` varchar(500) NOT NULL,
  `img_estate_main` varchar(500) NOT NULL,
  `price_estate_sale` int(10) NOT NULL,
  `price_estate_minimum` int(10) NOT NULL,
  `price_estate_maximum` int(10) NOT NULL,
  `description_estate` varchar(500) NOT NULL,
  `location_estate` varchar(500) NOT NULL,
  `map_estate` varchar(500) NOT NULL,
  `date_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `estate`
--

INSERT INTO `estate` (`id_estate`, `id_type`, `title_estate`, `img_estate`, `img_estate_main`, `price_estate_sale`, `price_estate_minimum`, `price_estate_maximum`, `description_estate`, `location_estate`, `map_estate`, `date_update`) VALUES
(32, 1, 'ขายที่ดินเปล่า 197 ตรว. ป่าข่อยเหนือ  ต.สันผีเสื่อ อ.เมือง จ.เชียงใหม่1', '2916c168.jpg,34689f2d.jpg', '2916c168.jpg', 0, 0, 0, '<p>ป่าข่อยเหนือ</p>\r\n<p>ต.สันผีเสื่อ</p>\r\n<p>อ.เมือง</p>\r\n<p>จ.เชียงใหม่</p>', 'ป่าข่อยเหนือ  ต.สันผีเสื่อ อ.เมือง จ.เชียงใหม่2', 'test1', '2020-09-28 17:35:42'),
(36, 1, '', '', '', 0, 0, 0, '', '', '', '2020-10-04 02:41:51'),
(37, 1, '', '', '', 0, 0, 0, '', '', '', '2020-10-04 02:42:43'),
(38, 1, 'aaa', '', '', 0, 0, 0, 'aaa', 'aaa', 'aaa', '2020-10-04 02:43:22'),
(39, 1, '', '', '', 0, 0, 0, '', '', '', '2020-10-04 02:44:10'),
(40, 1, '', '', '', 0, 0, 0, '', '', '', '2020-10-04 02:44:18'),
(42, 2, '', '', '', 0, 0, 0, '', '', '', '2020-10-04 02:47:05'),
(43, 3, '', '', '', 0, 0, 0, '', '', '', '2020-10-04 02:47:09'),
(44, 1, 'jimmie', '', '', 0, 0, 0, '', '', '', '2020-10-04 04:31:49'),
(45, 2, 'qqq', '', '', 0, 0, 0, '', '', '', '2020-10-04 13:58:40'),
(46, 3, 'ggggggggg', '', '', 1111111, 11111111, 1111111111, '11111', '111111', '11111', '2020-10-04 13:59:41'),
(47, 0, 'estate test 1 ', '9a24c68c.png,7f70d3ef.png', '', 0, 5000, 6000, 'estate test 111', 'estate test 111', 'estate test 111', '2020-10-15 03:48:01'),
(48, 0, 'estate test 222', '34390bbf.png,c09faf07.png', '', 100000, 0, 0, 'estate test 222', 'estate test 222', 'estate test 222', '2020-10-15 03:49:58'),
(49, 0, 'estate test 333', '917d16cf.png,ea3205bf.png,810df34c.png', '', 300000, 0, 3000, 'estate test 333', 'estate test 333', 'estate test 333', '2020-10-15 03:52:11'),
(50, 1, 'estate1', '6017b8db.png,fdfa0086.png,0edd9093.png', '', 0, 1000, 2000, 'estate1', 'estate1', 'estate1', '2020-10-15 04:51:58'),
(51, 2, 'estate 2', '0eb90235.png,3d14bfc4.png,cc62f950.png', '', 200000, 0, 0, 'estate 2', 'estate 2', 'estate 2', '2020-10-15 04:52:29'),
(52, 3, 'estate 3', 'de88e02b.png,d68ed03e.png,8f214eb4.png', '', 200000, 1000, 1000, 'estate 3', 'estate 3', 'estate 3', '2020-10-15 04:54:53'),
(53, 1, 'estate none img', 'none-img.jpg', '', 0, 1000, 2000, 'estate none img', 'estate none img', 'estate none img', '2020-10-15 04:55:34'),
(54, 2, 'estate none img', 'none-img.jpg', '', 5000, 0, 0, 'estate none img', 'estate none img', 'estate none img', '2020-10-15 04:55:45');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
  `id_type` int(2) NOT NULL,
  `title_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `title_type`) VALUES
(1, 'เช่า'),
(2, 'ขาย'),
(3, 'เช่า-ขาย');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(2) NOT NULL,
  `name_user` varchar(50) NOT NULL,
  `username_user` varchar(50) NOT NULL,
  `password_user` varchar(50) NOT NULL,
  `permission_user` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name_user`, `username_user`, `password_user`, `permission_user`) VALUES
(1, 'krisanapong', 'fronghpreales', '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

DROP TABLE IF EXISTS `view`;
CREATE TABLE `view` (
  `view` int(255) NOT NULL,
  `date_view` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `view`
--

INSERT INTO `view` (`view`, `date_view`) VALUES
(2, '2020-10-21'),
(3, '2020-10-22'),
(2, '2020-10-24'),
(1, '2020-11-04'),
(1, '2020-12-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`id_building`);

--
-- Indexes for table `estate`
--
ALTER TABLE `estate`
  ADD PRIMARY KEY (`id_estate`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `building`
--
ALTER TABLE `building`
  MODIFY `id_building` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=482;

--
-- AUTO_INCREMENT for table `estate`
--
ALTER TABLE `estate`
  MODIFY `id_estate` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
