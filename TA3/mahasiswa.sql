-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2018 at 08:54 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ta3`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nama` varchar(100) NOT NULL,
  `nim` int(10) NOT NULL,
  `fakultas` varchar(5) NOT NULL,
  `jenisKelamin` varchar(10) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nama`, `nim`, `fakultas`, `jenisKelamin`, `gambar`) VALUES
('nanam', 1234567, 'FIT', 'Laki-laki', 'gambar/12715784_1070999279587961_4818659580571065866_n.jpg'),
('tempe', 46464646, 'FTE', 'Perempuan', 'gambar/307594-591692-p.jpg'),
('tahu', 738383938, 'FIT', 'Laki-laki', 'gambar/2013-supra-vaider-high-tops-white-black-green-shoes.jpg'),
('ichad', 1234567890, 'FIT', 'Laki-laki', 'gambar/2290a198fc95e04436f617e8d19f69db.jpg'),
('edi', 2147483647, 'FIT', 'Laki-laki', 'gambar/13_osuprableeker_9.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
