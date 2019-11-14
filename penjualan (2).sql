-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2019 at 10:45 AM
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
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_nama` varchar(50) NOT NULL,
  `customer_alamat` tinytext NOT NULL,
  `customer_tgl` date NOT NULL,
  `telepon` varchar(25) NOT NULL,
  `kode_jenis` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_nama`, `customer_alamat`, `customer_tgl`, `telepon`, `kode_jenis`) VALUES
(1, 'Andika kurniawan', 'Jln Santai Masih Panjang No.1', '2019-10-30', '081574083369', 2),
(7, 'Farhan', 'Jl.Ketinggian No.11', '2019-10-16', '0875484154', 2),
(10, 'Ucup', 'Jl.Salatiga Mentega No.11', '2019-10-30', '085741248646', 1),
(11, 'Dimas', 'Jl.Sini situ salah', '2019-10-30', '087578435416', 1),
(12, 'Jay', 'Jl.Selamat nuju surga No.11', '2019-10-30', '087574898561', 2),
(15, 'Jayend', 'Jl.Tinggi sekali No.11', '2019-10-30', '087954245161', 1),
(21, 'Menma', 'Jl.Sendiri Tanjungan Tinggi No.7', '2019-11-06', '0875412564845', 2),
(22, 'Galih Sunanjar', 'Jl. Menadiri Jakarta Utara No.7', '2019-11-06', '08548975431215', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
