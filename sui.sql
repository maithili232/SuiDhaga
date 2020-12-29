-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 04:27 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sui`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Men'),
(2, 'Women'),
(3, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `user_id` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `trx_id` varchar(255) NOT NULL,
  `p_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders_info`
--

CREATE TABLE `orders_info` (
  `order_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` int(10) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `cardnumber` varchar(20) NOT NULL,
  `expdate` varchar(255) NOT NULL,
  `prod_count` int(15) DEFAULT NULL,
  `total_amt` int(15) DEFAULT NULL,
  `cvv` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_info`
--

INSERT INTO `orders_info` (`order_id`, `user_id`, `f_name`, `email`, `address`, `city`, `state`, `zip`, `cardname`, `cardnumber`, `expdate`, `prod_count`, `total_amt`, `cvv`) VALUES
(1, 2, 'Alex', 'alex@gmail.com', 'land', 'where', 'some', 234567, 'alex wasabi', '123456789', '12/22', NULL, NULL, 222),
(2, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '122', '12/22', NULL, NULL, 222),
(3, 2, 'alex wasabi', 'alex@gmail.com', '311', 'where', 'some', 440009, 'alex wasabi', '1234567890', '12/22', NULL, NULL, 222),
(4, 2, 'alex wasabi', 'alex@gmail.com', '311', 'where', 'some', 440009, 'alex wasabi', '1234567890', '12/22', NULL, NULL, 222),
(5, 2, 'alex wasabi', 'alex@gmail.com', '311', 'where', 'some', 440009, 'alex wasabi', '1234567890', '12/22', NULL, NULL, 222),
(6, 2, 'alex wasabi', 'alex@gmail.com', '311', 'where', 'some', 440009, 'alex wasabi', '1234567890', '12/22', NULL, NULL, 222),
(7, 2, 'alex wasabi', 'alex@gmail.com', '311', 'where', 'some', 440009, 'alex wasabi', '1234567890', '12/22', NULL, NULL, 222),
(8, 2, 'alex wasabi', 'alex@gmail.com', '311', 'where', 'some', 440009, 'alex wasabi', '1234567890', '12/22', NULL, NULL, 222),
(9, 2, 'alex wasabi', 'alex@gmail.com', '311', 'where', 'some', 440009, 'alex wasabi', '1234567890', '12/22', NULL, NULL, 222),
(10, 2, 'alex wasabi', 'alex@gmail.com', '311', 'where', 'some', 440009, 'alex wasabi', '1234567890', '12/22', NULL, NULL, 222),
(11, 2, 'alex wasabi', 'alex@gmail.com', '311', 'where', 'some', 440009, 'alex wasabi', '1234567890', '12/22', NULL, NULL, 222),
(12, 2, 'alex wasabi', 'alex@gmail.com', '311', 'where', 'some', 440009, 'alex wasabi', '1234567890', '12/22', NULL, NULL, 222),
(13, 2, 'alex wasabi', 'alex@gmail.com', '311', 'where', 'some', 440009, 'alex wasabi', '1234567890', '12/22', NULL, NULL, 222),
(14, 2, 'alex wasabi', 'alex@gmail.com', '311', 'where', 'some', 440009, 'alex wasabi', '1234567890', '12/22', NULL, NULL, 222),
(15, 2, 'alex wasabi', 'alex@gmail.com', '311', 'where', 'some', 440009, 'alex wasabi', '1234567890', '12/22', NULL, NULL, 222),
(16, 2, 'alex wasabi', 'alex@gmail.com', '311', 'where', 'some', 440009, 'alex wasabi', '1234567890', '12/22', NULL, NULL, 222),
(17, 2, 'alex wasabi', 'alex@gmail.com', '311', 'where', 'some', 440009, 'alex wasabi', '1234567890', '12/22', NULL, NULL, 222),
(18, 2, 'alex wasabi', 'alex@gmail.com', '311', 'where', 'some', 440009, 'alex wasabi', '1234567890', '12/22', NULL, NULL, 222),
(19, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '1234677890', '12/22', NULL, NULL, 222),
(20, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(21, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(22, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(23, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(24, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(25, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(26, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(27, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(28, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(29, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(30, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(31, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(32, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(33, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(34, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(35, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(36, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(37, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(38, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(39, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(40, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(41, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(42, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(43, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(44, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(45, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(46, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(47, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(48, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(49, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(50, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(51, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(52, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(53, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(54, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(55, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(56, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(57, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(58, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(59, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(60, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(61, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(62, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(63, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(64, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(65, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(66, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(67, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(68, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(69, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(70, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(71, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(72, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(73, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(74, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(75, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '12345677980', '12/22', NULL, NULL, 222),
(76, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '1234567890', '12/22', NULL, NULL, 222),
(77, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '1234567890', '12/22', NULL, NULL, 222),
(78, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '1234567890', '12/22', NULL, NULL, 222),
(79, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '1234567890', '12/22', NULL, NULL, 222),
(80, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '1234567890', '12/22', NULL, NULL, 222),
(81, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '1234567890', '12/22', NULL, NULL, 222),
(82, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '1234567890', '12/22', NULL, NULL, 222),
(83, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '1234567890', '12/22', NULL, NULL, 222),
(84, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '1234567890', '12/22', NULL, NULL, 222),
(85, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '1234567890', '12/22', NULL, NULL, 222),
(86, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '123456780', '12/22', NULL, NULL, 222),
(87, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '123456780', '12/22', NULL, NULL, 222),
(88, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '123456780', '12/22', NULL, NULL, 222),
(89, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '123456780', '12/22', NULL, NULL, 222),
(90, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '123456780', '12/22', NULL, NULL, 222),
(91, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '123456780', '12/22', NULL, NULL, 222),
(92, 2, 'Alex', 'alex@gmail.com', '311', 'where', 'some', 123445, 'alex wasabi', '123456780', '12/22', NULL, NULL, 222);

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `order_pro_id` int(10) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(15) DEFAULT NULL,
  `amt` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `proId` int(100) NOT NULL,
  `prodName` varchar(255) NOT NULL,
  `prodPrice` int(100) NOT NULL,
  `prodDescripShort` text NOT NULL,
  `prodPicNameLarge` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`proId`, `prodName`, `prodPrice`, `prodDescripShort`, `prodPicNameLarge`) VALUES
(1, 'Printed Nehru Jacket set', 2500, 'Pink Nehru jacket with floral print all over', '1000.png'),
(2, 'Beige Maroon Anarkali Sherwani', 2000, 'Wine maroon velvet groom designer anarkali sherwani', '1001.jpg'),
(3, 'Black Embossed Bandhgala Set', 1750, 'Elegance in this black velvet bandhgala with bronze-hued embossed buttons', '1002.jpg'),
(4, 'Blue Sherwani Set', 1200, 'Light blue colored readymade art silk full sleeve groom indo western sherwani', '1003.jpg'),
(5, 'BlackGold Embroidered Sherwani', 2000, 'jazzy black shade jacquard sherwani is stylized with tone on tone designs', '1004.jpg'),
(6, 'Floral Printed Jacket set', 2500, 'Red Set paired with a golden Floral Printed Jacket', '1005.jpg'),
(7, 'Solid Blue Sherwani', 1500, 'Solid blue sherwani paired with Red bandhej shawl', '1006.jpg'),
(8, 'Textured fawn kurta', 3000, 'Textured white fawn kurta paired with blue denim jeans', '1007.jpg'),
(9, 'A Eternal Black Sherwani', 4500, 'Solid black sherwani with buttons down paired with golden shawl', '1008.jpg'),
(10, 'Black Linen kurta', 3500, 'black blended linen and cotton fabric kurta', '1009.jpg'),
(11, 'Brown-Beige Kurta with Pockets', 1300, 'Beige Cotton double pocket men\'s kurta pajama set', '1010.png'),
(12, 'Robe of royalty in beige', 3500, 'Brown-beige slant cut kurta with bandhgala paired with black pants', '1011.jpg'),
(13, 'Classy beige kurta', 1570, 'Golden-Beige embroidered kurta pant set', '1012.jpg'),
(14, 'Embroidered Kurta Set', 1399, 'Dusky purple embroidered kurat set ', '1013.png'),
(15, 'Maroon Kurta & Gold Harem Pant', 3000, 'Velvet red kurta paired with dhoti style salwar', '1014.jpg'),
(16, 'Black Pathani Kurta Salwar Set', 2300, 'Solid black Pathani cotton kurta', '1015.jpg'),
(17, 'Silver stripped kurti set', 2500, 'Cut sleeves stripped Kurti paired with floral skirt and chunni ', '22.jpg'),
(18, 'Kurti-plazo set', 2000, 'Pink kurti paired with grey plazo', '333.jpg'),
(19, 'Patiala short kurti salwar', 1750, 'Satin Green patiala kurta paired with dhoti style short salwar', '111.jpeg'),
(20, 'Long white silk Kurti', 1200, 'Cotton-Net anarkali golden kurti set', '60.jpg'),
(21, 'jacket kurti-salwar set', 2000, 'Beige short kurti paired with waist coat and short dhoti', '80.jpg'),
(22, 'Red Bandhej long kurti', 2500, 'Red bandhej long kurti with white net dupatta', '2000.jpg'),
(23, 'Kurti with yellow shrug', 1500, 'Yellow floral jacket paired with sleek blue blouse and plazo ', '120.jpg'),
(24, 'Black kurti with golden shrug set', 3000, 'Black Blouse-Plazo paired with golden satin jacket', '40.jpg'),
(25, 'Blouse-plazo with shrug set', 4500, 'Floral Red blouse-plazo paired with floral jacket', '70.jpg'),
(26, 'Teal printed kurti set', 3500, 'Teal designer long kurti paired with red skirt', '290.jpg'),
(27, 'Designer Grey Kurti set', 1300, 'Rajasthani style Red/grey long kurti set', '260.jpg'),
(28, 'Off-White Lehenga Choli', 3500, 'White designer lehenga with pink floral print', '270.jpg'),
(29, 'Peach Palazzo Kurti', 1570, 'Dusky Pink top paired with dark green skirt and dupatta', '3000.jpg'),
(30, 'Printed Kurti With Shrug', 1399, 'Blue Long kurti paired with lime green shrug', '320.jpg'),
(31, 'Punjabi salwar kameez', 3000, 'Navy blue A-line kurti paired with short plazo and dupatta', '340.jpg'),
(32, 'Short Kurta dhoti', 2300, 'Short frock-top paired with red dhoti', '370.jpg'),
(33, 'Ethnic Band Choker', 1200, 'Golden Ethnic choker with white moti', '33.jpg'),
(34, 'Oxidised Gold Plated Jhumka', 2400, 'Leaf Shape Lightweight Black Gold Plating Oxidised Jhumki ', '72.jpg'),
(35, 'Hollow Flower Earrings', 1550, 'Disk shaped hollow black earrings', '100.jpg'),
(36, 'Temple Jewelry Set', 1200, 'Temple green necklace with golden embellishing', '46.jpg'),
(37, 'Diamond Set (moissanite)', 2499, 'Solid diamond necklace-earring set mixed with moti', '2.jpg'),
(38, 'Gold Jhumkas', 1999, 'Sun Shape Lightweight Gold Plating Jhumka', '3.jpg'),
(39, 'Gold Plated Neck piece for men', 1800, 'Gold beaded sherwani Maala for Men', '26.jpg'),
(40, 'Green Beaded Neck piece for men', 2000, 'Green beaded sherwani Maala for Men', '38.jpg'),
(41, 'Beaded Jutis', 1799, 'Golden shimmery beaded jutis', '11.jpg'),
(42, 'Threaded Jaipuri Jutis', 2500, 'Traditional jaipuri floral jutis', '12.jpg'),
(43, 'Zari Embroidery Jutis', 2300, 'Golden Zari embellished jutis', '56.jpg'),
(44, 'Velvet Maroon Jutis', 1500, 'Red velvet beaded jutis', '75.jpg'),
(45, 'Pink Floral bag', 500, 'Pink floral designer Handbag with beaded strips', '20.jpg'),
(46, 'Beaded Potli bag', 800, 'Pink beaded potli saree handbag', '5.jpg'),
(47, 'Designer Bag', 300, 'Traditional jodhpuri hand woven bag', '17.jpg'),
(48, 'Multi-colored Potli Bag', 3500, 'Multicoloured Potli Handbag with moti', '18.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `full_name`, `email`, `password`) VALUES
(1, 'Keval', 'kevalsayar@hotmail.com', '1234'),
(2, 'Alex', 'alex@gmail.com', '1234'),
(3, 'Kay', 'kevalsayar1@hotmail.com', '1234'),
(4, 'KevKev', 'keva@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `user_info_backup`
--

CREATE TABLE `user_info_backup` (
  `user_id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info_backup`
--

INSERT INTO `user_info_backup` (`user_id`, `full_name`, `email`, `password`) VALUES
(0, 'Kev', 'kevalsayar@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orders_info`
--
ALTER TABLE `orders_info`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`order_pro_id`),
  ADD KEY `order_products` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`proId`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_info_backup`
--
ALTER TABLE `user_info_backup`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
