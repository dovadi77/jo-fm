-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 09, 2021 at 02:21 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fm`
--

-- --------------------------------------------------------

--
-- Table structure for table `combo`
--

CREATE TABLE `combo` (
  `id` int(30) NOT NULL,
  `nama-paket` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `kecepatan` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `channel` varchar(15) NOT NULL,
  `desc-depan` text NOT NULL,
  `desc-detail` text NOT NULL,
  `channel-detail` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `combo`
--

INSERT INTO `combo` (`id`, `nama-paket`, `harga`, `kecepatan`, `status`, `channel`, `desc-depan`, `desc-detail`, `channel-detail`, `image`) VALUES
(1, 'Combo Easy', 'Rp -', '2', 'false', '79', '<p>asasasasd</p><p>sadas</p><p>sa</p><p>dsa</p><p>sa</p><p>das</p><p>d</p>', '<p>sadsadsadas</p>', '', 'combo1.png'),
(2, 'Combo Easy Plus', 'Rp -', '3', 'false', '115', '0', '0', '', ''),
(3, 'combo Family HD', '281.325', '10', 'true', '130', '<p><span style=\"background-color:rgb(255,255,255);color:hsl(0,0%,0%);\">Free Open All Channel selama 3 bulan</span></p>', '<h2 style=\"margin-left:0px;text-align:center;\"><span style=\"color:hsl(0,0%,0%);\"><sub>Rp. </sub><strong>281.325</strong><sub>,-/Bln</sub></span></h2><p style=\"margin-left:0px;text-align:center;\"><span style=\"color:hsl(0,0%,0%);\">(Rp <strong>315.700</strong>,-/bulan dibulan ke 13)</span></p><ul><li><span style=\"color:hsl(0,0%,0%);\">Koneksi Internet Unlimited</span></li><li><span style=\"color:hsl(0,0%,0%);\">Free Open All Chanel selama 3 bulan</span></li><li><span style=\"color:hsl(0,0%,0%);\">Free Biaya Instalasi/ Pemasangan</span></li><li><span style=\"color:hsl(0,0%,0%);\">Free Kabel 40 Meter</span></li><li><span style=\"color:hsl(0,0%,0%);\">Free Speed Boost up to 10 Mbps (3 Bulan)</span></li><li><span style=\"color:hsl(0,0%,0%);\">Normal Speed 8 Mbps dibulan ke 4</span></li><li><span style=\"color:hsl(0,0%,0%);\">Pembayaran 1 Minggu Setelah Terpasang</span></li><li><span style=\"color:hsl(0,0%,0%);\">Harga Sudah Termasuk Ppn 10%</span></li></ul>', '32 HD | 77 SD', 'f3.jpeg'),
(4, 'combo Family Plus HD', '371.855', '15', 'true', '130', '<p>Free Open All Channel selama 3 bulan</p>', '<h2 style=\"margin-left:0px;text-align:center;\"><sub>Rp.</sub><strong><sub> </sub>371.855</strong><sub>,-/Bln</sub></h2><p style=\"margin-left:0px;text-align:center;\">(Rp <strong>397.100</strong>,-/bulan dibulan ke 13)</p><ul><li>Koneksi Internet Unlimited</li><li>Free Open All Chanel selama 3 bulan</li><li>Free Biaya Instalasi/ Pemasangan</li><li>Free Kabel 40 Meter</li><li>Free Speed Boost up to 20 Mbps (3 Bulan)</li><li>Pembayaran 1 Minggu Setelah Terpasang</li><li>Harga Sudah Termasuk Ppn 10%</li></ul>', '34 HD | 84 SD', 'f4.jpeg'),
(5, 'combo D\'Lite HD', '456.005', '20', 'true', '142', '<p>Free Open All Channel selama 3 bulan</p>', '<h2 style=\"margin-left:0px;text-align:center;\"><sub>Rp. </sub><strong>456.005</strong><sub>,-/Bln</sub></h2><p style=\"margin-left:0px;text-align:center;\">(Rp <strong>496.100</strong>,-/bulan dibulan ke 13)</p><ul><li>Koneksi Internet Unlimited</li><li>Free Open All Chanel selama 3 bulan</li><li>Free Biaya Instalasi/ Pemasangan</li><li>Free Kabel 40 Meter</li><li>Free Speed Boost up to 35 Mbps (6 bulan)</li><li>Pembayaran 1 Minggu Setelah Terpasang</li><li>Harga Sudah Termasuk Ppn 10%</li></ul>', '40 HD | 84 SD', 'f5.jpeg'),
(6, 'combo Elite X1', '563.475', '40', 'true', '163', '<p>Free Open All Channel selama 3 bulan</p>', '<h2 style=\"margin-left:0px;text-align:center;\"><sub>Rp.</sub><strong> 563.475</strong><sub>,-/Bln</sub></h2><p style=\"margin-left:0px;text-align:center;\">(Rp <strong>656.700</strong>,-/bulan dibulan ke 13)</p><ul><li>Koneksi Internet Unlimited</li><li>Free Open All Chanel selama 3 bulan</li><li>Free Biaya Instalasi/ Pemasangan</li><li>Free Kabel 40 Meter</li><li>Free Speed Boost up to 60 Mbps (6 bulan)</li><li>Di lengkapi STB berbasis android (youtube on tv, internet on tv)</li><li>Pembayaran 1 Minggu Setelah Terpasang</li><li>Harga Sudah Termasuk Ppn 10%</li></ul>', '33 HD | 77 SD', 'f6.jpeg'),
(7, 'combo Supreme HD', '806.025', '75', 'true', '178', '<p>Free Open All Channel selama 3 bulan</p>', '<h2 style=\"margin-left:0px;text-align:center;\"><sub>Rp. </sub><strong>806.025</strong><sub>,-/Bln</sub></h2><p style=\"margin-left:0px;text-align:center;\">(Rp <strong>1.032.900</strong>,-/bulan dibulan ke 13)</p><ul><li>Koneksi Internet Unlimited</li><li>Free Open All Chanel selama 3 bulan</li><li>Free Biaya Instalasi/ Pemasangan</li><li>Free Kabel 40 Meter</li><li>Free Speed Boost up to 100 Mbps (6 bulan)</li><li>Dilengkapi STB berbasis android (youtube on tv, internet on tv)</li><li>Pembayaran 1 Minggu Setelah Terpasang</li><li>Harga Sudah Termasuk Ppn 10%</li></ul>', '65 HD | 105 SD', 'f7.jpeg'),
(8, 'combo MAXIMA X1 4K', '1.515.525', '100', 'true', '170', '<p>Free Open All Channel selama 3 bulan</p>', '<h2 style=\"margin-left:0px;text-align:center;\"><sub>Rp. </sub><strong>1.515.525</strong><sub>,-/Bln</sub></h2><p style=\"margin-left:0px;text-align:center;\">(Rp <strong>1.989.000</strong>,-/bulan dibulan ke 13)</p><ul><li>Koneksi Internet Unlimited</li><li>Free Open All Chanel selama 3 bulan</li><li>Free Biaya Instalasi/ Pemasangan</li><li>Free Kabel 40 Meter</li><li>Free Speed Boost up to 150 Mbps</li><li>Dilengkapi STB berbasis android (youtube on tv, internet on tv)</li><li>Pembayaran 1 Minggu Setelah Terpasang</li><li>Harga Sudah Termasuk Ppn 10%</li></ul>', '65 HD | 105 SD', 'f8.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `email` varchar(300) NOT NULL,
  `nowa` varchar(20) NOT NULL,
  `telegram` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nohp`, `email`, `nowa`, `telegram`) VALUES
(1, '6282298942018', 'jo.firstmedia21@gmail.com', '6282298942018', '');

-- --------------------------------------------------------

--
-- Table structure for table `livechat`
--

CREATE TABLE `livechat` (
  `id` int(10) NOT NULL,
  `syntax` varchar(5000) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livechat`
--

INSERT INTO `livechat` (`id`, `syntax`, `status`) VALUES
(1, 'mamaia', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(3, 'nando', '45a9a31e5f1ff59621b681a5edbffe85');

-- --------------------------------------------------------

--
-- Table structure for table `zone`
--

CREATE TABLE `zone` (
  `id` int(11) NOT NULL,
  `fastnet` varchar(10) NOT NULL,
  `combo` varchar(10) NOT NULL,
  `fastnet_color` varchar(30) NOT NULL,
  `combo_color` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zone`
--

INSERT INTO `zone` (`id`, `fastnet`, `combo`, `fastnet_color`, `combo_color`) VALUES
(1, 'false', 'true', '#FFFFFF', '#FFFFFF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `combo`
--
ALTER TABLE `combo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livechat`
--
ALTER TABLE `livechat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `combo`
--
ALTER TABLE `combo`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `livechat`
--
ALTER TABLE `livechat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `zone`
--
ALTER TABLE `zone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
