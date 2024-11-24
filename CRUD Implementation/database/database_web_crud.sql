-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 11, 2024 at 06:42 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_web_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `datareview`
--

CREATE TABLE `datareview` (
  `id` int NOT NULL,
  `prod` varchar(100) NOT NULL,
  `review` longtext NOT NULL,
  `user` varchar(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `datareview`
--

INSERT INTO `datareview` (`id`, `prod`, `review`, `user`, `date`) VALUES
(1, 'Radeon 3 720X', 'Performa yang stabil saat digeber edit dan Render video 4k durasi 30 menit', 'Carbonara', '2024-11-11 05:47:05.854453'),
(2, 'Ryzen 7 5200HX', 'Menghasilkan suhu yang lebih rendah daripada Generasi sebelumnya saat dipakai untuk kebutuhan Gaming', 'PejedSikma', '2024-11-11 05:48:19.918355'),
(3, 'Ryzen 9 7000XD', 'Performa yang lebih kencang daripada ryzen 7, namun menghasilkan panas yang lebih besar ', 'Carbonara', '2024-11-11 05:52:49.023971');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datareview`
--
ALTER TABLE `datareview`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datareview`
--
ALTER TABLE `datareview`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
