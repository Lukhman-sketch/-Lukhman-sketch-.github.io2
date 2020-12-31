-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 11, 2018 at 04:30 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luk`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `comment` text NOT NULL,
  `post_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `post_time`) VALUES
(13, 'luk', 'hello', '2018-06-11 10:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `daftarrumahsukan`
--

CREATE TABLE `daftarrumahsukan` (
  `nokp` varchar(12) NOT NULL,
  `rumahsukan` varchar(100) NOT NULL,
  `jawatan` varchar(100) NOT NULL,
  `tarikhdaftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `daftarrumahsukan`
--

INSERT INTO `daftarrumahsukan` (`nokp`, `rumahsukan`, `jawatan`, `tarikhdaftar`) VALUES
('010120050045', 'SYAHBANDAR', 'PENGERUSI', '2018-02-15 07:51:39'),
('010218030149', 'SYAHBANDAR', 'BENDAHARI', '2018-05-26 03:49:16'),
('010802050317', 'SYAHBANDAR', 'NAIB PENGERUSI', '2018-02-15 07:50:05'),
('010831050463', 'LAKSAMANA', 'NAIB PENGERUSI', '2018-02-20 02:52:06'),
('010914050047', 'TEMENGGONG', 'AJK', '2018-02-15 07:50:43'),
('011216050247', 'SYAHBANDAR', 'BENDAHARI', '2018-02-15 07:51:03'),
('012345674896', 'SYAHBANDAR', 'SETIAUSAHA', '2018-05-19 11:51:41'),
('014567890000', 'SYAHBANDAR', 'AHLI BIASA', '2018-06-09 15:22:57'),
('123456789123', 'SYAHBANDAR', 'PENGERUSI', '2018-06-08 09:11:29'),
('555555555555', 'SYAHBANDAR', 'PENGERUSI', '2018-06-07 14:22:39'),
('789456123123', 'SYAHBANDAR', 'PENGERUSI', '2018-06-08 09:21:44'),
('NoKp yang te', 'SYAHBANDAR', 'PENGERUSI', '2018-06-08 08:45:02');

-- --------------------------------------------------------

--
-- Table structure for table `datamurid`
--

CREATE TABLE `datamurid` (
  `nokp` varchar(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tingkatan` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `datamurid`
--

INSERT INTO `datamurid` (`nokp`, `nama`, `tingkatan`, `kelas`, `email`) VALUES
('010120050045', ' WAN MUHAMMAD NAJMI BIN WAN OTHMAN', '5', 'UM', ' diwrdrobe@gmail.com'),
('010218030149', 'MUHAMAD LUKHMAN HAKIM BIN MOHD NIZAM', '5', 'UM', 'monster1.m78@gmail.com'),
('010802050317', 'MOHD KHALID HASIF BIN ANUWAR', '5', 'UM', 'khalidhasif123@gmail.com'),
('010831050463', 'AHMAD JARUL FUAD BIN NAHARUDDIN', '5', 'UM', 'ahmdjxrul11@gmail.com'),
('010914050047', 'ADIB SOHIFA BIN AFFENDI', '5', 'UM', 'asohifaa@yes.my'),
('011216050247', 'MUHAMMAD AIMAN NAJMI BIN ZULKEFLI', '5', 'UM', 'aimannajmi5612@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'admin', 'admin', 'admin'),
(3, 'admin', 'admin', 'admin'),
(4, 'admin', 'admin', 'admin'),
(5, 'luk', 'luk', 'luk'),
(6, 'luk', 'luk', 'luk'),
(12, 'risya', 'risya123456', 'risya'),
(13, 'lukman', 'hakim', '123'),
(14, 'aqiel', '12', 'aqiel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftarrumahsukan`
--
ALTER TABLE `daftarrumahsukan`
  ADD PRIMARY KEY (`nokp`);

--
-- Indexes for table `datamurid`
--
ALTER TABLE `datamurid`
  ADD PRIMARY KEY (`nokp`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
