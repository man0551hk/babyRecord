-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 31, 2019 at 12:01 PM
-- Server version: 5.7.25
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `sq_babyRecord`
--

-- --------------------------------------------------------

--
-- Table structure for table `milk`
--

CREATE TABLE `milk` (
  `id` int(11) NOT NULL,
  `milkType` int(11) NOT NULL,
  `startTime` datetime NOT NULL,
  `endtime` datetime NOT NULL DEFAULT '1900-01-01 00:00:00',
  `remark` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `milk`
--

INSERT INTO `milk` (`id`, `milkType`, `startTime`, `endtime`, `remark`) VALUES
(1, 2, '2019-07-31 13:00:08', '2019-07-31 13:30:09', '1安'),
(2, 4, '2019-07-31 13:35:38', '1900-01-01 00:00:00', '綠色 帶粒粒'),
(3, 4, '2019-07-31 13:45:19', '1900-01-01 00:00:00', '綠色 帶粒粒'),
(4, 1, '2019-07-31 15:30:13', '2019-07-31 15:40:48', '少過1邊');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `milk`
--
ALTER TABLE `milk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `milk`
--
ALTER TABLE `milk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
