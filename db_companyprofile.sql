-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2020 at 08:19 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_companyprofile`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admingallery`
--

CREATE TABLE `tb_admingallery` (
  `id_picture` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admingallery`
--

INSERT INTO `tb_admingallery` (`id_picture`, `name`, `type`) VALUES
(1, '1', 'jpeg'),
(2, '2', 'jpeg'),
(3, '3', 'jpeg'),
(4, '4', 'jpeg'),
(5, '5', 'jpeg'),
(6, '6', 'jpeg'),
(7, '7', 'jpeg'),
(8, '8', 'jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_adminportofolio`
--

CREATE TABLE `tb_adminportofolio` (
  `id_portofolio` int(11) NOT NULL,
  `type_title` varchar(50) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `file_type` varchar(4) NOT NULL,
  `portofolio_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_adminportofolio`
--

INSERT INTO `tb_adminportofolio` (`id_portofolio`, `type_title`, `file_name`, `file_type`, `portofolio_type`) VALUES
(1, 'Web Design', 'dw1', 'png', 'web-design'),
(2, 'Web Desain', 'dw2', 'png', 'web-design'),
(3, 'Photography', 'pg1', 'jpeg', 'photography'),
(4, 'Logo Design', 'dl1', 'jpeg', 'logo-design'),
(5, 'Logo Design', 'dl2', 'jpeg', 'logo-design'),
(6, 'Photography', 'pg4', 'jpg', 'photography'),
(7, 'Photography', 'pg2', 'jpeg', 'photography'),
(8, 'Photography', 'pg3', 'jpeg', 'photography');

-- --------------------------------------------------------

--
-- Table structure for table `tb_adminvideo`
--

CREATE TABLE `tb_adminvideo` (
  `id_video` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_adminvideo`
--

INSERT INTO `tb_adminvideo` (`id_video`, `name`, `type`) VALUES
(1, '1', 'mp4');

-- --------------------------------------------------------

--
-- Table structure for table `tb_visitors`
--

CREATE TABLE `tb_visitors` (
  `id_visitor` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_visitors`
--

INSERT INTO `tb_visitors` (`id_visitor`, `nama`, `email`, `subject`, `message`) VALUES
(2, 'Rizaldi Fathan Qorib', 'rizaldy.fatahn.rfa@gmail.com', 'testimoni', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi quaerat rerum eos culpa blanditiis pariatur reiciendis, perferendis voluptatum quam, necessitatibus ducimus dicta! Officia nihil molestiae nemo, voluptatibus dolorem a repellat? Illo praesentium deserunt consequuntur accusamus distinctio dolorum laborum impedit doloribus iure eos magnam deleniti in, quas nobis excepturi veniam quos molestiae et vitae blanditiis nihil quod ab voluptatum. Officia, cumque.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admingallery`
--
ALTER TABLE `tb_admingallery`
  ADD PRIMARY KEY (`id_picture`);

--
-- Indexes for table `tb_adminportofolio`
--
ALTER TABLE `tb_adminportofolio`
  ADD PRIMARY KEY (`id_portofolio`);

--
-- Indexes for table `tb_adminvideo`
--
ALTER TABLE `tb_adminvideo`
  ADD PRIMARY KEY (`id_video`);

--
-- Indexes for table `tb_visitors`
--
ALTER TABLE `tb_visitors`
  ADD PRIMARY KEY (`id_visitor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admingallery`
--
ALTER TABLE `tb_admingallery`
  MODIFY `id_picture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_adminportofolio`
--
ALTER TABLE `tb_adminportofolio`
  MODIFY `id_portofolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_adminvideo`
--
ALTER TABLE `tb_adminvideo`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_visitors`
--
ALTER TABLE `tb_visitors`
  MODIFY `id_visitor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
