-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 20, 2019 at 07:55 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_title` varchar(225) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_title`) VALUES
(1, 'Wrogn'),
(2, 'Being Human'),
(3, 'Jack & Jones'),
(4, 'Arrow'),
(5, 'Roadster');

-- --------------------------------------------------------

--
-- Table structure for table `cartitems`
--

DROP TABLE IF EXISTS `cartitems`;
CREATE TABLE IF NOT EXISTS `cartitems` (
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Brand` varchar(30) NOT NULL,
  `title` varchar(60) NOT NULL,
  `image` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `size` varchar(255) NOT NULL,
  `quantity` int(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cate`
--

DROP TABLE IF EXISTS `cate`;
CREATE TABLE IF NOT EXISTS `cate` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(225) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cate`
--

INSERT INTO `cate` (`cat_id`, `cat_title`) VALUES
(1, 'Shirts'),
(2, 'Tshirts'),
(3, 'Jeans'),
(4, 'Trousers');

-- --------------------------------------------------------

--
-- Table structure for table `products_`
--

DROP TABLE IF EXISTS `products_`;
CREATE TABLE IF NOT EXISTS `products_` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_cat` int(11) NOT NULL,
  `product_brand` int(11) NOT NULL,
  `Brand` varchar(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(30) NOT NULL,
  `price` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `f_r` int(11) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_`
--

INSERT INTO `products_` (`product_id`, `product_cat`, `product_brand`, `Brand`, `title`, `image`, `price`, `color`, `f_r`) VALUES
(1, 2, 1, 'WROGN', 'Tshirts', 'ts.jpg', '1500', 'red', 1),
(2, 2, 2, 'Being Human', 'Tshirts', 'ts2.jpg', '1500', 'white', 1),
(3, 2, 3, 'Arrow', 'Tshirts', 'ts3.jpg', '1400', 'black', 1),
(4, 2, 4, 'Roadster', 'Tshirts', 'ts.jpg', '1000', 'black', 1),
(5, 1, 3, 'Jack & Jones', 'Shirts', 's1.jpg', '3000', 'black', 1),
(6, 1, 5, 'Arrow', 'Shirts', 's2.jpg', '3000', 'blue', 1),
(7, 1, 5, 'Being Human', 'Shirts', 's3.jpg', '4000', 'white', 1),
(8, 1, 5, 'Roadster', 'Shirts', 's4.jpg', '2000', 'black', 1),
(9, 3, 5, 'Roadster', 'Jeans', 'p1.jpg', '4000', 'blue', 1),
(10, 3, 2, 'Being Human', 'Jeans', 'p2.jpg', '4000', 'blue', 1),
(11, 3, 3, 'Being Human', 'Jeans', 'p3.jpg', '4000', 'blue', 1),
(12, 0, 0, 'WROGN', 'Tshirts', 'top1.jpg', '1000', 'red', 0),
(13, 0, 0, 'Being human', 'Tshirts', 'top2.jpg', '1000', 'black', 0),
(15, 0, 0, 'Roadster', 'Tshirts', 'top4.jpg', '1300', 'white', 0),
(16, 0, 0, 'Roadster', 'Jeans', 'jw1.jpg', '3000', 'blue', 0),
(17, 0, 0, 'Being Human', 'Jeans', 'jw2.jpg', '2000', 'black', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `dob`, `mobile`, `bio`, `location`, `gender`) VALUES
(1, 'vipin', 'kumar', 'montukothari11@gmail.com', 'montu1344', 'asZXC', '9115731788', 'dsa', 'as', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
