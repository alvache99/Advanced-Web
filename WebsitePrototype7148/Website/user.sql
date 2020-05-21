-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 07:51 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `catlist`
--

CREATE TABLE `catlist` (
  `catName` varchar(255) NOT NULL,
  `catID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catlist`
--

INSERT INTO `catlist` (`catName`, `catID`) VALUES
('Phones', 1),
('TV', 2),
('Laptop', 3),
('Tablet', 4),
('All', 5);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` bigint(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_price` decimal(65,0) NOT NULL,
  `prod_category` int(255) NOT NULL,
  `prod_image` varchar(255) NOT NULL,
  `prod_description` varchar(255) NOT NULL,
  `key_words` varchar(255) NOT NULL,
  `prod_owner` varchar(255) NOT NULL,
  `prod_points` int(255) NOT NULL,
  `prod_condition` int(11) NOT NULL,
  `prod_age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `prod_name`, `prod_price`, `prod_category`, `prod_image`, `prod_description`, `key_words`, `prod_owner`, `prod_points`, `prod_condition`, `prod_age`) VALUES
(1, 'Iphone XS max', '1200', 1, 'iphonexs.jfif', 'Second hand iphone XS max. No scratches', 'XS', 'Loh Phey Sing', 2, 8, 12),
(2, 'Iphone X', '899', 1, 'iphonex.jpg', 'Iphone X with minor scratches only. The rest good condition', 'X', 'Von Jaughey', 3, 9, 18),
(3, 'Ipad Air', '499', 4, 'Ipadair1.jfif', 'Ipad air. Used for 1 year only. Good condition', 'air', 'Simon Wong', 5, 8, 12),
(4, 'MacBook Pro', '1599', 3, 'MacBookpro.jfif', 'Macbook Pro. Used 3 years. Good condition', 'pro', 'Candy Law\r\n', 4, 8, 36),
(5, 'RazerBlade', '1999', 3, 'Razerblade.jfif', 'A gaming laptop. Used for 3 years. No scratches. As good as new', 'Razer\r\n', 'Edy Gon', 3, 7, 36),
(6, 'Asusrog', '1599', 3, 'Asusrog.jfif', 'An Asus gaming laptop. Used for 3 months. Good as new', 'rog', 'Lon Boka\r\n', 4, 8, 3),
(7, 'Microsoft tablet', '899', 4, 'microsoftpro.jpg', 'A microsoft tablet. Good for work. Good condition. Used for a year', 'Microsoft', 'Zuzee wong', 7, 8, 12),
(8, 'Ipad Air 2020', '1200', 4, 'ipadair2020.jfif', 'Latest ipad. Bought for a month. Not suitable for me', 'air', 'Ankel Brokery', 4, 9, 1),
(9, 'LG\'s super thin TV', '2999', 2, 'lgthin.jpg', 'Lg\'s curved super thin tv. Used for 5 months. Reason of selling: Moving house. Good cond!', 'LG', 'Bud Simson\r\n', 3, 8, 5);

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `FirstName` varchar(15) DEFAULT NULL,
  `LastName` varchar(15) DEFAULT NULL,
  `Type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`Username`, `Password`, `Email`, `FirstName`, `LastName`, `Type`) VALUES
('', '', '', '', '', 0),
('Alvache99', 'Ash9923', 'Alvachelawtiawei@gmail.com', NULL, NULL, 1),
('Bomba99', '$2y$10$qUtel1UhdJDQkAZzeqjydOO7f4nXO7s4QLGC3zy5T4q4JLa32GLlW', 'Bomba@test.com', 'Bomba', 'Law', 1),
('Candy99', '$2y$10$O5aSMQ6KIWDeOrr1EHu0COdAVut9EYjRjwYkxZNZeEk.a7ycInhze', 'Candy@test.com', 'Candy', 'Law', 1),
('Johnny99', 'ss5211999', 'Jonny@test.com', 'Johnny', 'Bravo', 1),
('Law99', '$2y$10$xw6qpRmC3klOaPdcPH/cAO.NNFf8.PjIWMDWoT4t.N1ZM/yO5BRIS', 'Law@test.com', 'LIling', 'Law', 1),
('Pheysing99', '123456', 'ps@boboi.com', 'Phey Sing', 'Loh', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catlist`
--
ALTER TABLE `catlist`
  ADD PRIMARY KEY (`catID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
