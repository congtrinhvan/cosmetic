-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2022 at 06:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cosmetic_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Son'),
(2, 'Kem chống nắng'),
(3, 'Sữa rửa mặt'),
(4, 'Nước tẩy trang'),
(5, 'Kem dưỡng da'),
(6, 'Mặt nạ');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `item` varchar(100) CHARACTER SET latin1 NOT NULL,
  `qtyleft` int(11) NOT NULL,
  `qty_sold` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `sales` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `item`, `qtyleft`, `qty_sold`, `price`, `sales`) VALUES
(1, 'KCN_Skin Aqua', 45, 55, 180000, NULL),
(2, 'SON_Romand 01', 72, 28, 150000, NULL),
(8, 'Son Lì Shu Uemura Matte OR570', 58, 42, 200000, NULL),
(9, 'Son Th?i Lì 3CE V? Trong Su?t Red Muse', 91, 9, 300000, NULL),
(10, 'Son Th?i Lì 3CE V? Trong Su?t', 147, 3, 350000, NULL),
(11, 'Son Th?i Lì 3CE', 96, 4, 265000, NULL),
(12, 'Son Lì B.O.M My Lipstick', 98, 2, 150000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `discount_percent` int(11) DEFAULT NULL,
  `discount_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `price` float DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `discount_percent` int(11) DEFAULT NULL,
  `discount_price` int(11) DEFAULT NULL,
  `sold_quantity` int(11) DEFAULT NULL,
  `total_quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `description`, `category_id`, `status`, `discount_percent`, `discount_price`, `sold_quantity`, `total_quantity`) VALUES
(1, 'KCN_Skin Aqua', 180000, 'assets/img/menu/menu-item-1.png', 'Son Môi Lancôme L\'Absolu Rouge Intimatte 3.4g là dòng son thỏi trang điểm môi cao cấp đầy quyền năng có công nghệ độc quyền từ Lancôme. Sắc màu thời thượng, chất son lì mềm mượt với chiết xuất hoa hồng, dưỡng chất Pro-xylane™ và Hyaluronic Acid cho đôi môi ngậm nước, mềm mịn và lên màu cực chuẩn.', 2, NULL, 10, NULL, NULL, NULL),
(2, 'SON_Romand 01', 150000, 'assets/img/menu/menu-item-2.jpg', 'Son Môi Lancôme L\'Absolu Rouge Intimatte 3.4g là dòng son thỏi trang điểm môi cao cấp đầy quyền năng có công nghệ độc quyền từ Lancôme. Sắc màu thời thượng, chất son lì mềm mượt với chiết xuất hoa hồng, dưỡng chất Pro-xylane™ và Hyaluronic Acid cho đôi môi ngậm nước, mềm mịn và lên màu cực chuẩn.', 1, NULL, NULL, 50000, NULL, NULL),
(3, 'Son Lì Shu Uemura Matte OR570', 200000, 'assets/img/menu/menu-item-3.jpg', 'Son Môi Lancôme L\'Absolu Rouge Intimatte 3.4g là dòng son thỏi trang điểm môi cao cấp đầy quyền năng có công nghệ độc quyền từ Lancôme. Sắc màu thời thượng, chất son lì mềm mượt với chiết xuất hoa hồng, dưỡng chất Pro-xylane™ và Hyaluronic Acid cho đôi môi ngậm nước, mềm mịn và lên màu cực chuẩn.', 1, NULL, NULL, NULL, NULL, NULL),
(4, 'Son Thỏi Lì 3CE Vỏ Trong Suốt Red Muse', 300000, 'assets/img/menu/menu-item-4.jpg', 'Son Môi Lancôme L\'Absolu Rouge Intimatte 3.4g là dòng son thỏi trang điểm môi cao cấp đầy quyền năng có công nghệ độc quyền từ Lancôme. Sắc màu thời thượng, chất son lì mềm mượt với chiết xuất hoa hồng, dưỡng chất Pro-xylane™ và Hyaluronic Acid cho đôi môi ngậm nước, mềm mịn và lên màu cực chuẩn.', 1, NULL, NULL, NULL, NULL, NULL),
(5, 'Son Thỏi Lì 3CE Vỏ Trong Suốt', 350000, 'assets/img/menu/menu-item-5.jpg', 'Son Môi Lancôme L\'Absolu Rouge Intimatte 3.4g là dòng son thỏi trang điểm môi cao cấp đầy quyền năng có công nghệ độc quyền từ Lancôme. Sắc màu thời thượng, chất son lì mềm mượt với chiết xuất hoa hồng, dưỡng chất Pro-xylane™ và Hyaluronic Acid cho đôi môi ngậm nước, mềm mịn và lên màu cực chuẩn.', 1, NULL, NULL, NULL, NULL, NULL),
(6, 'Son Thỏi Lì 3CE', 265000, 'assets/img/menu/menu-item-6.jpg', 'Son Môi Lancôme L\'Absolu Rouge Intimatte 3.4g là dòng son thỏi trang điểm môi cao cấp đầy quyền năng có công nghệ độc quyền từ Lancôme. Sắc màu thời thượng, chất son lì mềm mượt với chiết xuất hoa hồng, dưỡng chất Pro-xylane™ và Hyaluronic Acid cho đôi môi ngậm nước, mềm mịn và lên màu cực chuẩn.', 1, NULL, NULL, NULL, NULL, NULL),
(7, 'Son Lì B.O.M My Lipstick', 150000, 'assets/img/menu/menu-item-7.jpg', 'Son Môi Lancôme L\'Absolu Rouge Intimatte 3.4g là dòng son thỏi trang điểm môi cao cấp đầy quyền năng có công nghệ độc quyền từ Lancôme. Sắc màu thời thượng, chất son lì mềm mượt với chiết xuất hoa hồng, dưỡng chất Pro-xylane™ và Hyaluronic Acid cho đôi môi ngậm nước, mềm mịn và lên màu cực chuẩn.', 1, NULL, NULL, NULL, NULL, NULL),
(8, 'Son Môi Lancôme L\'Absolu Intimatte 274 Màu Hồng Đất', 900000, 'assets/img/menu/menu-item-1.png', NULL, 1, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(20) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `sales` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `product_id`, `qty`, `date`, `sales`) VALUES
(1, 1, 100, '2022-10-22', 7200000),
(17, 7, 2, '2022-10-22', 300000),
(18, 8, 42, '2022-10-22', 7800000),
(19, 9, 9, '2022-10-22', 2700000),
(20, 2, 26, '2022-10-22', 300000),
(21, 10, 3, '2022-10-22', 1050000),
(22, 11, 4, '2022-10-22', 1060000),
(23, 12, 2, '2022-10-22', 300000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(9, 'argie', '6cf51b9070c74b2b7b90a24428e9a99b'),
(10, 'febe', '9f51ce8e8e4374fd0736f3ece4a679dc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id_idx` (`product_id`),
  ADD KEY `order_id_idx` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `category_id_idx` (`category_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_id` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
