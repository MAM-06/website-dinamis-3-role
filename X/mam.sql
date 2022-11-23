-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 07:25 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mam`
--

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `approve` enum('ya','tidak') DEFAULT NULL,
  `teks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `gambar`, `judul`, `approve`, `teks`) VALUES
(7, 'a7de1-wallpapersden.com_monkey-luffy-gear-5-art-one-piece_wxl.jpg', 'Luffy', 'ya', 'Captain'),
(8, 'a7fbc-zoro.jpg', 'Zoro', 'ya', 'Swordman'),
(9, 'cb267-nico-robin-6162fde16e7f010ca309c532.jpg', 'Robin', 'ya', 'archeology'),
(10, '16306-featured-image-nami-cropped.jpg', 'Nami', 'ya', 'Navigator'),
(11, '06a94-sanji.jpg', 'Sanji', 'ya', 'Cheff'),
(12, '71baa-one-piece-tony-tony-chopper-anime-wallpaper-preview.jpg', 'Chopper', 'ya', 'Doctor'),
(13, '3dc2c-franky.png', 'Franky', 'ya', 'shipwright'),
(14, '5fa6a-3650051691.jpg', 'Brook', 'ya', 'Musician'),
(15, '6f9d4-inilah-senjata-keren-buatan-usopp-di-one-piece.jpg', 'Usopp', 'ya', 'Sniper'),
(17, '86b44-maxresdefault.jpg', 'Jinbei', 'ya', 'Boat Driver');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `akses` enum('admin','writer','reviewer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `akses`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'reviewer', '7ba917e4e5158c8a9ed6eda08a6ec572', 'reviewer'),
(3, 'writer', 'a82feee3cc1af8bcabda979e8775ef0f', 'writer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
