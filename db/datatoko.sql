-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 28, 2025 at 08:37 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datatoko`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_img`
--

CREATE TABLE `detail_img` (
  `id_img` int NOT NULL,
  `img_1` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `img_2` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `img_3` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `img_4` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_img`
--

INSERT INTO `detail_img` (`id_img`, `img_1`, `img_2`, `img_3`, `img_4`) VALUES
(1, 'd1.jpg', 'd2.jpg', 'd3.jpg', 'd4.jpg'),
(2, 'p1.png', 'p2.jpg', 'p3.jpg', 'p4.jpg'),
(3, 'w1.jpg', 'w2.jpg', 'w3.jpg', 'w4.jpg'),
(4, 'q1.png', 'q2.jpg', 'q3.jpg', 'q4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `product_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `product_detail` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `product_price` int NOT NULL,
  `img` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_detail`, `product_price`, `img`) VALUES
(1, 'People Pleaser', 'Oversize', 120000, 'p1.png'),
(2, 'DEKGRAFI\'s', 'Low', 120000, 'p2.png'),
(3, 'OOTDstudios', 'Low', 115000, 'p3.png'),
(4, 'Erazor', 'Oversize', 135000, 'p.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `oauth_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `last_login` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `fullname`, `email`, `password`, `oauth_id`, `last_login`, `created_at`) VALUES
(1, 'Ataraxia', 'ataraxia.oc@gmail.com', '', '101820833294777155876', '2024-04-18 23:16:09', '2024-04-18 16:16:09'),
(2, 'Muhammad Daffa', 'daffaxzy890@gmail.com', '', '113882127930841067573', '2025-07-25 18:27:32', '2025-07-25 11:27:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_img`
--
ALTER TABLE `detail_img`
  ADD PRIMARY KEY (`id_img`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_img`
--
ALTER TABLE `detail_img`
  MODIFY `id_img` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
