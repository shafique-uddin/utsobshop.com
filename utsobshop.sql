-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2018 at 09:44 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utsobshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(1) NOT NULL,
  `adminID` varchar(50) NOT NULL,
  `adminEmail` varchar(50) NOT NULL,
  `adminPassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `adminID`, `adminEmail`, `adminPassword`) VALUES
(1, '01715161719', 'auwalblcemail@eamil.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(200) NOT NULL,
  `cat_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(9, 'ggggg');

-- --------------------------------------------------------

--
-- Table structure for table `order_data`
--

CREATE TABLE `order_data` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postalCode` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `paymentMethod` varchar(255) NOT NULL,
  `payment_amount` varchar(255) NOT NULL,
  `bkashMobileNo` varchar(255) NOT NULL,
  `rocketAccountNo` varchar(255) NOT NULL,
  `bkashTransactionID` varchar(255) NOT NULL,
  `numberOfProduct` varchar(255) NOT NULL,
  `productIdAndQantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_data`
--

INSERT INTO `order_data` (`id`, `name`, `userName`, `email`, `phoneNumber`, `country`, `district`, `city`, `postalCode`, `address`, `paymentMethod`, `payment_amount`, `bkashMobileNo`, `rocketAccountNo`, `bkashTransactionID`, `numberOfProduct`, `productIdAndQantity`) VALUES
(1, 'LLLLLLLLLLL', '', 'ddddd@dd.com', 'dddddddddddddd', 'ddddddddddd', 'ddddddddddddddddd', 'dddddddddddd', 'dddddddddddddddd', '22222222222222222', 'bkash', '444', '', '', '44444444444444444444', '2', ''),
(2, 'LLLLLLLLLLL', '', 'ddddd@dd.com', 'dddddddddddddd', 'ddddddddddd', 'ddddddddddddddddd', 'dddddddddddd', 'dddddddddddddddd', '22222222222222222', 'bkash', '444', '', '', '44444444444444444444', '2', ''),
(3, 'LLLLLLLLLLL', '', 'ddddd@dd.com', 'dddddddddddddd', 'ddddddddddd', 'ddddddddddddddddd', 'dddddddddddd', 'dddddddddddddddd', '22222222222222222', 'bkash', '444', '', '', '44444444444444444444', '2', ''),
(4, 'LLLLLLLLLLL', '', 'ddddd@dd.com', 'dddddddddddddd', 'ddddddddddd', 'ddddddddddddddddd', 'dddddddddddd', 'dddddddddddddddd', '22222222222222222', 'bkash', '444', '', '', '44444444444444444444', '2', ''),
(5, 'LLLLLLLLLLL', '', 'ddddd@dd.com', 'dddddddddddddd', 'ddddddddddd', 'ddddddddddddddddd', 'dddddddddddd', 'dddddddddddddddd', '22222222222222222', 'bkash', '444', '11111111111', '', '44444444444444444444', '2', ''),
(6, 'LLLLLLLLLLL', '', 'ddddd@dd.com', 'dddddddddddddd', 'ddddddddddd', 'ddddddddddddddddd', 'dddddddddddd', 'dddddddddddddddd', '22222222222222222', 'bkash', '444', '11111111111', '', '44444444444444444444', '2', ''),
(7, 'LLLLLLLLLLL', '', 'ddddd@dd.com', 'dddddddddddddd', 'ddddddddddd', 'ddddddddddddddddd', 'dddddddddddd', 'dddddddddddddddd', '22222222222222222', 'bkash', '444', '11111111111', '', '44444444444444444444', '2', ''),
(8, 'LLLLLLLLLLL', '', 'ddddd@dd.com', 'dddddddddddddd', 'ddddddddddd', 'ddddddddddddddddd', 'dddddddddddd', 'dddddddddddddddd', '22222222222222222', 'bkash', '444', '11111111111', '', '44444444444444444444', '2', ''),
(9, 'LLLLLLLLLLL', '', 'ddddd@dd.com', 'dddddddddddddd', 'ddddddddddd', 'ddddddddddddddddd', 'dddddddddddd', 'dddddddddddddddd', '22222222222222222', 'bkash', '444', '11111111111', '', '44444444444444444444', '2', ''),
(10, 'LLLLLLLLLLL', '', 'ddddd@dd.com', 'dddddddddddddd', 'ddddddddddd', 'ddddddddddddddddd', 'dddddddddddd', 'dddddddddddddddd', '22222222222222222', 'bkash', '444', '11111111111', '', '44444444444444444444', '2', ''),
(11, 'LLLLLLLLLLL', '', 'ddddd@dd.com', 'dddddddddddddd', 'ddddddddddd', 'ddddddddddddddddd', 'dddddddddddd', 'dddddddddddddddd', '22222222222222222', 'bkash', '444', '11111111111', '', '44444444444444444444', '2', ''),
(12, 'LLLLLLLLLLL', 'NU', 'ddddd@dd.com', 'dddddddddddddd', 'ddddddddddd', 'ddddddddddddddddd', 'dddddddddddd', 'dddddddddddddddd', '22222222222222222', 'bkash', '444', '11111111111', '', '44444444444444444444', '2', '1.2,2.2'),
(13, 'LLLLLLLLLLL', 'NU', 'ddddd@dd.com', 'dddddddddddddd', 'ddddddddddd', 'ddddddddddddddddd', 'dddddddddddd', 'dddddddddddddddd', 'llllllllllllllllll', 'bkash', '444', '11111111111', '', '44444444444444444444', '2', '1.2,2.1'),
(14, 'LLLLLLLLLLL', 'NU', 'ddddd@dd.com', 'dddddddddddddd', 'ddddddddddd', 'ddddddddddddddddd', 'dddddddddddd', 'dddddddddddddddd', 'llllllllllllllllll', 'bkash', '444', '11111111111', '', '44444444444444444444', '2', '1.2,2.1'),
(15, 'LLLLLLLLLLL', 'NU', 'ddddd@dd.com', 'dddddddddddddd', 'ddddddddddd', 'ddddddddddddddddd', 'dddddddddddd', 'dddddddddddddddd', 'llllllllllllllllll', 'bkash', '444', '11111111111', '', '44444444444444444444', '2', '1.2,2.1'),
(16, 'LLLLLLLLLLL', 'NU', 'ddddd@dd.com', 'dddddddddddddd', 'ddddddddddd', 'ddddddddddddddddd', 'dddddddddddd', 'dddddddddddddddd', 'llllllllllllllllll', 'bkash', '444', '11111111111', '', '44444444444444444444', '2', '1.2,2.1'),
(17, 'hhhhhhhhhh', 'NU', 'hhhhhhhh@fjasdl.omc', 'dddddddddddddddddddddddddddddd', 'ddddddddddddd', 'dddddddddddddddddddddddddddddddd', 'ddddddddddddddd', 'dddddddddddddd', 'ddddddddddd', 'bkash', 'ddd', 'ddddddddddd', '', 'dddddddddddddddd', '2', '1.2,2.3'),
(18, 'gggggggggggg', 'NU', 'gg@fasdlf.com', 'ssssssssssssss', 'sssss', 'sssssssssssssss', 'sssssssssssss', 'ssssssssssss', 'ggggggggggggggg', 'bkash', 'gggggggg', 'ggggggggggg', '', 'ggggggggggggg', '2', '1.3,2.2'),
(19, 'gggggggggggg', 'NU', 'gg@fasdlf.com', 'ssssssssssssss', 'sssss', 'sssssssssssssss', 'sssssssssssss', 'ssssssssssss', 'hhhhhhhhhhhhhh', 'bkash', 'gggggggg', 'ggggggggggg', '', 'ggggggggggggg', '2', '1.1,2.1'),
(20, 'gggggggggggg', 'NU', 'gg@fasdlf.com', 'ssssssssssssss', 'sssss', 'sssssssssssssss', 'sssssssssssss', 'ssssssssssss', 'ffffffffffff', 'bkash', 'gggggggg', 'ggggggggggg', '', 'ggggggggggggg', '2', '1.2,2.3'),
(21, 'hhhhhhhhhh', 'NU', 'hhhhhhhh@fjasdl.omc', 'dddddddddddddddddddddddddddddd', 'ddddddddddddd', 'dddddddddddddddddddddddddddddddd', 'ddddddddddddddd', 'dddddddddddddd', 'ddddddddddd', 'bkash', 'ddd', 'ddddddddddd', '', 'dddddddddddddddd', '2', '1.2,2.3'),
(22, 'hhhhhhhhhh', 'NU', 'hhhhhhhh@fjasdl.omc', 'dddddddddddddddddddddddddddddd', 'ddddddddddddd', 'dddddddddddddddddddddddddddddddd', 'ddddddddddddddd', 'dddddddddddddd', 'ddddddddddd', 'bkash', 'ddd', 'ddddddddddd', '', 'dddddddddddddddd', '2', '1.2,2.3'),
(23, 'hhhhhhhhhh', 'NU', 'hhhhhhhh@fjasdl.omc', 'dddddddddddddddddddddddddddddd', 'ddddddddddddd', 'dddddddddddddddddddddddddddddddd', 'ddddddddddddddd', 'dddddddddddddd', 'ddddddddddd', 'bkash', '4000', 'ddddddddddd', '', 'dddddddddddddddd', '2', '1.2,2.3'),
(24, 'hhhhhhhhhh', 'NU', 'hhhhhhhh@fjasdl.omc', 'dddddddddddddddddddddddddddddd', 'ddddddddddddd', 'dddddddddddddddddddddddddddddddd', 'ddddddddddddddd', 'dddddddddddddd', 'ddddddddddd', 'bkash', '8000', 'ddddddddddd', '', 'dddddddddddddddd', '2', '1.2,2.3'),
(25, 'hhhhhhhhhh', 'NU', 'hhhhhhhh@fjasdl.omc', 'dddddddddddddddddddddddddddddd', 'ddddddddddddd', 'dddddddddddddddddddddddddddddddd', 'ddddddddddddddd', 'dddddddddddddd', '444444444444444', 'bkash', 'ddd', 'ddddddddddd', '', 'dddddddddddddddd', '1', '1.1');

-- --------------------------------------------------------

--
-- Table structure for table `posted_product`
--

CREATE TABLE `posted_product` (
  `post_id` int(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_point` varchar(255) NOT NULL,
  `product_quantity` int(250) NOT NULL,
  `product_cat` varchar(255) NOT NULL,
  `product_summary` longtext NOT NULL,
  `product_img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posted_product`
--

INSERT INTO `posted_product` (`post_id`, `product_title`, `product_price`, `product_point`, `product_quantity`, `product_cat`, `product_summary`, `product_img`) VALUES
(1, 'first product', '200', '20', 10, 'dddd', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'product_19_1_thumb.png'),
(2, 'second product', '147', '120', 100, 'ggggg', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'product_11_1_thumb.png'),
(3, 'third pro', '33', '300', 300, 'dddd', 'Where does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'product_9_1_thumb.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `order_data`
--
ALTER TABLE `order_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posted_product`
--
ALTER TABLE `posted_product`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_data`
--
ALTER TABLE `order_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `posted_product`
--
ALTER TABLE `posted_product`
  MODIFY `post_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
