-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 01:05 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `Username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`Username`, `password`) VALUES
('admin@gmail.com', 'admin123'),
('admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'hoodie', 'Reebok Full hoodie', 999.00, './assets/products/hoodie-5.png', '2022-02-20 20:12:07'),
(2, 'bag', 'Puma Deck Bagpack', 1299.00, './assets/products/bag-5.png', '2022-02-20 20:12:07'),
(3, 'shoes', 'Air Jordan-1', 1499.00, './assets/products/shoes-5.png', '2022-02-20 20:12:07'),
(4, 'watch', 'Maurice Lacroix watch', 299.00, './assets/products/watch-5.png', '2022-02-20 20:12:07'),
(5, 'hoodie', 'Wyoming Hoodie', 990.00, './assets/products/hoodie-2.png', '2022-02-20 20:12:07'),
(6, 'bag', 'Cubern Women Bag', 349.00, './assets/products/bag-2.png', '2022-02-20 20:12:07'),
(7, 'shoes', 'Vokstar Shoes', 699.00, './assets/products/shoes-2.png', '2022-02-20 20:12:07'),
(8, 'watch', 'Grand Seiko Watch', 849.00, './assets/products/watch-2.png', '2022-02-20 20:12:07'),
(9, 'hoodie', 'Paul-Shark hoodie', 649.00, './assets/products/hoodie-3.png', '2022-02-20 20:12:07'),
(10, 'bag', 'POLESTAR vintage bag', 629.00, './assets/products/bag-3.png', '2022-02-20 20:12:07'),
(11, 'shoes', 'Orange Canvas sneakers', 999.00, './assets/products/shoes-3.png', '2022-02-20 20:12:07'),
(12, 'watch', 'ASW vintage Watch', 499.00, './assets/products/watch-3.png', '2022-02-20 20:12:07'),
(14, 'bag', 'Herschel fashion bag', 549.00, './assets/products/bag-4.png', '2022-02-20 20:12:07'),
(15, 'shoes', 'Ardeo Sneakers', 899.00, './assets/products/shoes-4.png', '2022-02-20 20:12:07'),
(16, 'watch', 'Hamilton khaki Watch', 2999.00, './assets/products/watch-4.png', '2022-02-20 20:12:07'),
(17, 'hoodie', 'Plain hoodie gildan', 999.00, './assets/products/hoodie-1.png', '2022-02-20 20:12:07'),
(18, 'bag', 'BELIZE fashion bag', 749.00, './assets/products/bag-1.png', '2022-02-20 20:12:07'),
(19, 'shoes', 'Nike-Air Max', 799.00, './assets/products/shoes-1.png', '2022-02-20 20:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(254) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `pincode` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `Username`, `email`, `password`, `phone`, `address`, `city`, `state`, `pincode`) VALUES
(14, 'sam', 'sam@gmail.com', '1234', 99887654, 'Chanod road', 'Vapi', 'Gujarat', 396191);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
