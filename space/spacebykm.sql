-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 24, 2020 at 05:35 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spacebykm`
--

-- --------------------------------------------------------

--
-- Table structure for table `picproject`
--

CREATE TABLE `picproject` (
  `pic_id` int(11) NOT NULL,
  `pic_projs_id` int(11) NOT NULL,
  `pic_title` varchar(255) NOT NULL,
  `pic_text` text NOT NULL,
  `pic_photo` varchar(255) NOT NULL,
  `pic_datetime` datetime NOT NULL,
  `pic_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `picproject`
--

INSERT INTO `picproject` (`pic_id`, `pic_projs_id`, `pic_title`, `pic_text`, `pic_photo`, `pic_datetime`, `pic_status`) VALUES
(1, 2, 'Intime1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam cursus quam vel mi egestas consectetur. Vivamus ornare justo ac orci lacinia, et tempor magna pulvinar. Nullam finibus vel leo eu congue. Etiam sit amet luctus libero. Quisque porta ultricies venenatis. Maecenas eget suscipit nisl.', 'intime1.png', '2020-01-14 03:09:37', 0),
(2, 2, 'Intime2', 'Morbi ultrices elit mi, nec dapibus felis auctor a. Integer velit sapien, lobortis ac malesuada vel, consectetur ut tellus. Praesent gravida vel urna in commodo. Proin id urna nec neque lobortis dapibus non sed enim. ', 'intime2.png', '2020-01-14 09:11:26', 0),
(3, 2, 'Intime3', 'Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque pharetra finibus nibh, eget iaculis erat luctus nec. Integer vehicula massa justo, at cursus turpis pharetra at.', 'intime3.png', '2020-01-22 04:28:17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `projs_id` int(11) NOT NULL,
  `projs_name` varchar(255) NOT NULL,
  `projs_photo` varchar(255) NOT NULL,
  `projs_datetime` datetime NOT NULL,
  `projs_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projs_id`, `projs_name`, `projs_photo`, `projs_datetime`, `projs_status`) VALUES
(1, 'PARTYHOLICS', 'partyholic.png', '2020-01-01 03:17:06', 0),
(2, 'INTIME', 'intime.png', '2020-01-02 03:28:20', 0),
(3, 'Curvy', 'curvy.png', '2020-01-03 08:21:32', 0),
(4, 'Space X COR', 'spaceXcor.png', '2020-01-06 05:02:56', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vidproject`
--

CREATE TABLE `vidproject` (
  `vid_id` int(11) NOT NULL,
  `vid_proj_id` int(11) NOT NULL,
  `vid_title` varchar(255) NOT NULL,
  `vid_text` text NOT NULL,
  `vid_photo` varchar(255) NOT NULL,
  `vid_datetime` datetime NOT NULL,
  `vid_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `picproject`
--
ALTER TABLE `picproject`
  ADD PRIMARY KEY (`pic_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`projs_id`),
  ADD UNIQUE KEY `projs_name` (`projs_name`);

--
-- Indexes for table `vidproject`
--
ALTER TABLE `vidproject`
  ADD PRIMARY KEY (`vid_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `picproject`
--
ALTER TABLE `picproject`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `projs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vidproject`
--
ALTER TABLE `vidproject`
  MODIFY `vid_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
