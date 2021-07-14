-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2021 at 04:12 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `anupom`
--

CREATE TABLE `anupom` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 = user , 2 = admin',
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active , 0=deactivate'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anupom`
--

INSERT INTO `anupom` (`id`, `name`, `email`, `phone`, `images`, `role`, `password`, `status`) VALUES
(6, 'prema bro', 'prema@gmail.com', '01674809776', NULL, 1, '$2y$10$gGILisAqzfVKJNpktK92Cu92zoLXBWAYU0Td9tF1pXBWzalOvKe.W', 1),
(12, 'TukiTaki', 'prothomchakraborty@gmail.com', '0198736537', NULL, 1, '$2y$10$/NbBtq6or8GuW0m5Sgzsr.AAzCT2bIJv9WmMXm9aWe2bOggziokAy', 1),
(13, 'parijat', 'parijat@gmail.com', '017766776532', NULL, 1, '$2y$10$MCGd9dcuvWX3dqgMc7e3m.vEJ/myPzDyPFESKuUE7BQBbrppeTDRm', 1),
(14, 'prema Chakraborty', 'anupomchakra@gmail.com', '01860284892', 'prema-chakraborty-14.jpg', 1, '$2y$10$E/inyyRCGnD3mdHCuIQQwecbvmWh3mWFghM3kfjXgO2R14mguGKhS', 1),
(15, 'Anupom Chakraborty', 'accajoyjit@gmail.com', '01674809776', 'anupom-chakraborty-15.jpg', 1, '$2y$10$j48snTCnKsTAulw1HBwNTeCbiA4gInBGkHSq/cVE.E7Krigf9/NoS', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `read_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 = unread , 2 = read',
  `deleted` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 = active , 2 = deactive '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `create_time`, `read_status`, `deleted`) VALUES
(2, 'anupom', 'accajoyjit@gmail.com', 'amkamsmkmakm\'lsmdclmskldcolsm\r\n', '2021-07-08 04:12:54', 2, 1),
(3, 'prema Chakraborty', 'prema@gmail', '\r\nYou may be able to remove the other two classes, @Kris. They both extend Traversable now and seem to have been born that way in 5.0.0. Though I\'m feeling a tiny doubt as to whether instanceof always applied to extends. – Bob Stein Mar 8 \'14 at 10:44\r\n1\r\n@BobStein-VisiBone: yes (except they are interfaces, not classes) However; I put Traversable in before those, neither Iterator nor IteratorAggregate would ever need verifying (this way they won\'t slow down execution). I left them in to keep the answer as close as possible to the original answer I gave and to keep it obvious/readable. – Kris Mar 14 \'14 at 6:51\r\n', '2021-07-08 04:12:54', 1, 1),
(4, 'joy', 'accajoyjit@gmail.com', '\r\nYou may be able to remove the other two classes, @Kris. They both extend Traversable now and seem to have been born that way in 5.0.0. Though I\'m feeling a tiny doubt as to whether \r\n', '2021-07-08 04:12:54', 2, 1),
(6, 'utsho', 'hhdjsjkkokooiio@gamol', '\r\nYou may be able to remove the other two classes, @Kris. They both extend Traversable now and seem to have been', '2021-07-08 04:12:54', 1, 1),
(7, 'pushpa', 'pushpa@gamil.com', 'pushpagamil.compushpagamil.compushpagamil.compushpagamil.compushpagamil.compushpagamil.compushpagamil.compushpagamil.compushpagamil.compushpagamil.compushpagamil.compushpagamil.compushpagamil.compushpagamil.compushpagamil.compushpagamil.compushpagamil.compushpagamil.compushpagamil.compushpagamil.compushpagamil.compushpagamil.compushpagamil.com', '2021-07-08 04:14:33', 1, 1),
(8, 'talha', 'talha@gmai.com', 'ami talha what about you ?\r\n', '2021-07-14 12:10:32', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `progress` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 = active , 2 = deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `title`, `year`, `progress`, `status`) VALUES
(1, 'linked in', 2001, 65, 1),
(2, 'php', 2005, 40, 1),
(3, 'anupom', 2020, 85, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 = active , 2 = not active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `summary`, `icon`, `status`) VALUES
(1, 'facebook', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust. ', 'fab fa-facebook', 1),
(2, 'twitter', 'utsho Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust. ', 'fab fa-twitter', 1),
(9, 'instagram', 'insta is an American business and employment-oriented online service that operates via websites and mobile apps. Launched on May 5, 2003, the platform is mainly used for professional networking, and allows job seekers to post their CVs and employers to po', 'fab fa-instagram', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anupom`
--
ALTER TABLE `anupom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anupom`
--
ALTER TABLE `anupom`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
