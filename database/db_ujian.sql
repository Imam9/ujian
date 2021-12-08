-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 04:20 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ujian`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_driver`
--

CREATE TABLE `tbl_driver` (
  `id_driver` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `platno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_driver`
--

INSERT INTO `tbl_driver` (`id_driver`, `nama`, `platno`) VALUES
(2, 'Suparman', 'PA 1234'),
(3, 'Ice Juice', 'PA 1235'),
(4, 'Kli Won', 'PA 1236'),
(5, 'Bram E', 'PA 1237');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rute`
--

CREATE TABLE `tbl_rute` (
  `id_rute` int(11) NOT NULL,
  `point_start` varchar(5) NOT NULL,
  `point_end` varchar(5) NOT NULL,
  `distance` int(11) NOT NULL,
  `standart_time` int(11) NOT NULL,
  `priceperkm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_driver`
--
ALTER TABLE `tbl_driver`
  ADD PRIMARY KEY (`id_driver`);

--
-- Indexes for table `tbl_rute`
--
ALTER TABLE `tbl_rute`
  ADD PRIMARY KEY (`id_rute`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_driver`
--
ALTER TABLE `tbl_driver`
  MODIFY `id_driver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_rute`
--
ALTER TABLE `tbl_rute`
  MODIFY `id_rute` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
