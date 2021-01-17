-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 10:40 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `redstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(10) UNSIGNED NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productDetails` text NOT NULL,
  `productSize` varchar(255) NOT NULL,
  `productImage1` varchar(255) DEFAULT NULL,
  `productImage2` varchar(255) NOT NULL,
  `productImage3` varchar(255) NOT NULL,
  `productImage4` varchar(255) NOT NULL,
  `productImage5` varchar(255) NOT NULL,
  `productAddedDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `productEditedDate` timestamp NULL DEFAULT NULL,
  `categoryName` varchar(255) NOT NULL,
  `productQuantity` int(11) NOT NULL DEFAULT 1,
  `productPublished` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productName`, `productPrice`, `productDetails`, `productSize`, `productImage1`, `productImage2`, `productImage3`, `productImage4`, `productImage5`, `productAddedDate`, `productEditedDate`, `categoryName`, `productQuantity`, `productPublished`) VALUES
(1, 'Red Printed T-Shirt by HRX', 50, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio culpa aspernatur, quo dignissimos hic aut saepe aliquid amet soluta cum, et corporis, similique iure doloribus numquam magni laudantium eius accusantium.', 'Medium', '/RedStore/img/productsImages/0bc9d561df296bf487627d822c1edfc4product-1.jpg', '/RedStore/img/productsImages/0bc9d561df296bf487627d822c1edfc4gallery-1.jpg', '/RedStore/img/productsImages/0bc9d561df296bf487627d822c1edfc4gallery-2.jpg', '/RedStore/img/productsImages/0bc9d561df296bf487627d822c1edfc4gallery-3.jpg', '/RedStore/img/productsImages/0bc9d561df296bf487627d822c1edfc4gallery-4.jpg', '2021-01-12 11:31:21', '2021-01-14 17:12:57', 'T-Shirt', 5, 1),
(2, 'Black Nike Shoes', 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio culpa aspernatur, quo dignissimos hic aut saepe aliquid amet soluta cum, et corporis, similique iure doloribus numquam magni laudantium eius accusantium.', 'Small', '/RedStore/img/product-2.jpg', '/RedStore/img/gallery-1.jpg', '/RedStore/img/gallery-2.jpg', '/RedStore/img/gallery-3.jpg', '/RedStore/img/gallery-4.jpg', '2021-01-12 11:35:19', NULL, 'Shoes', 1, 1),
(3, 'Black Pant', 40, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio culpa aspernatur, quo dignissimos hic aut saepe aliquid amet soluta cum, et corporis, similique iure doloribus numquam magni laudantium eius accusantium.', 'Large', '/RedStore/img/product-3.jpg', '/RedStore/img/gallery-1.jpg', '/RedStore/img/gallery-2.jpg', '/RedStore/img/gallery-3.jpg', '/RedStore/img/gallery-4.jpg', '2021-01-12 11:38:09', NULL, 'Pants', 1, 1),
(4, 'Red Printed T-Shirt by HRX', 50, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio culpa aspernatur, quo dignissimos hic aut saepe aliquid amet soluta cum, et corporis, similique iure doloribus numquam magni laudantium eius accusantium.', 'Medium', '/RedStore/img/product-1.jpg', '/RedStore/img/gallery-1.jpg', '/RedStore/img/gallery-2.jpg', '/RedStore/img/gallery-3.jpg', '/RedStore/img/gallery-4.jpg', '2021-01-12 15:32:36', NULL, 'T-Shirt', 1, 1),
(5, 'Black Nike Shoes', 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio culpa aspernatur, quo dignissimos hic aut saepe aliquid amet soluta cum, et corporis, similique iure doloribus numquam magni laudantium eius accusantium.', 'Small', '/RedStore/img/product-2.jpg', '/RedStore/img/gallery-1.jpg', '/RedStore/img/gallery-2.jpg', '/RedStore/img/gallery-3.jpg', '/RedStore/img/gallery-4.jpg', '2021-01-12 15:32:36', NULL, 'Shoes', 1, 1),
(6, 'Black Pant', 40, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio culpa aspernatur, quo dignissimos hic aut saepe aliquid amet soluta cum, et corporis, similique iure doloribus numquam magni laudantium eius accusantium.', 'Large', '/RedStore/img/product-3.jpg', '/RedStore/img/gallery-1.jpg', '/RedStore/img/gallery-2.jpg', '/RedStore/img/gallery-3.jpg', '/RedStore/img/gallery-4.jpg', '2021-01-12 15:32:37', NULL, 'Pants', 1, 1),
(7, 'Red Printed T-Shirt by HRX', 50, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio culpa aspernatur, quo dignissimos hic aut saepe aliquid amet soluta cum, et corporis, similique iure doloribus numquam magni laudantium eius accusantium.', 'Medium', '/RedStore/img/product-1.jpg', '/RedStore/img/gallery-1.jpg', '/RedStore/img/gallery-2.jpg', '/RedStore/img/gallery-3.jpg', '/RedStore/img/gallery-4.jpg', '2021-01-12 15:33:25', NULL, 'T-Shirt', 1, 1),
(8, 'Black Nike Shoes', 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio culpa aspernatur, quo dignissimos hic aut saepe aliquid amet soluta cum, et corporis, similique iure doloribus numquam magni laudantium eius accusantium.', 'Small', '/RedStore/img/product-2.jpg', '/RedStore/img/gallery-1.jpg', '/RedStore/img/gallery-2.jpg', '/RedStore/img/gallery-3.jpg', '/RedStore/img/gallery-4.jpg', '2021-01-12 15:33:25', NULL, 'Shoes', 1, 1),
(9, 'Black Pant', 40, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio culpa aspernatur, quo dignissimos hic aut saepe aliquid amet soluta cum, et corporis, similique iure doloribus numquam magni laudantium eius accusantium.', 'Large', ' /ShopStore/img/product-3.jpg', '/RedStore/img/gallery-1.jpg', '/RedStore/img/gallery-2.jpg', '/RedStore/img/gallery-3.jpg', '/RedStoree/img/gallery-4.jpg', '2021-01-12 15:33:25', NULL, 'Pants', 1, 1),
(13, 'Red Printed T-Shirt by HRX', 50, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio culpa aspernatur, quo dignissimos hic aut saepe aliquid amet soluta cum, et corporis, similique iure doloribus numquam magni laudantium eius accusantium.', 'Medium', '/RedStore/img/product-1.jpg', '/RedStore/img/gallery-1.jpg', '/RedStore/img/gallery-2.jpg', '/RedStore/img/gallery-3.jpg', '/RedStore/img/gallery-4.jpg', '2021-01-12 22:58:25', NULL, 'T-Shirt', 1, 1),
(14, 'Black Nike Shoes', 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio culpa aspernatur, quo dignissimos hic aut saepe aliquid amet soluta cum, et corporis, similique iure doloribus numquam magni laudantium eius accusantium.', 'Small', '/RedStore/img/product-2.jpg', '/RedStore/img/gallery-1.jpg', '/RedStore/img/gallery-2.jpg', '/RedStore/img/gallery-3.jpg', '/RedStore/img/gallery-4.jpg', '2021-01-12 22:58:25', NULL, 'Shoes', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `UserPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `userName`, `userEmail`, `UserPassword`) VALUES
(1, 'Elpacific', 'elpacificmb@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(2, 'ken', 'ken@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(3, 'ben', 'ben@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
