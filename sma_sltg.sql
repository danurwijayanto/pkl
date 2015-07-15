-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2015 at 07:03 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sma_sltg`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id` int(255) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `text` varchar(10000) NOT NULL,
  `kategori` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `text`, `kategori`, `time`) VALUES
(1, '', '0', 0, 0),
(2, '', 'asdasfcxzcasfasd', 0, 0),
(3, '', 'asdasfcxzcasfasd', 0, 0),
(4, '', '0', 0, 0),
(5, '', '0', 0, 0),
(6, '', '<p>Initial value.</p>\r\n', 0, 0),
(7, '', '<p style="text-align: center;">Initial value.</p>\r\n\r\n<p style="text-align: center;">&nbsp;</p>\r\n\r\n<p><strong>sampah doel&nbsp;</strong></p>\r\n', 0, 0),
(8, '', '<p style="text-align:center">Initial value.</p>\r\n\r\n<p style="text-align:center">&nbsp;</p>\r\n\r\n<p><strong>sampah doel </strong></p>\r\n\r\n<p><strong>&nbsp;<img alt="" src="/pkl/upload/Gambar/images/Chrysanthemum.jpg" style="height:300px; width:400px" /></strong></p>\r\n', 0, 0),
(9, '', '<p>aduhdel</p>\r\n', 0, 0),
(10, '', '<p>aduhdelnmnm,</p>\r\n', 0, 0),
(11, 'Mengapa Bla Bla', '<p>yag</p>\r\n', 3, 20150715);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(255) NOT NULL,
  `nama` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(3, 'Artikel'),
(6, 'Pengumuman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
