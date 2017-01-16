-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2017 at 07:03 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cashback`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Automotive'),
(3, 'Apparel'),
(4, 'Baby & Kids'),
(5, 'Beauty'),
(6, 'candas');

-- --------------------------------------------------------

--
-- Table structure for table `members_details`
--

CREATE TABLE `members_details` (
  `member_id` int(3) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ref_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members_details`
--

INSERT INTO `members_details` (`member_id`, `first_name`, `last_name`, `email_address`, `password`, `ref_id`) VALUES
(37, 'Mony', 'Motiur', 'cashback@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '60'),
(39, 'Motiur', 'Rahman', 'motiur943@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '33'),
(40, 'Emon', 'Mony', 'shahedbrur.cse@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '20');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `shop_des` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `coupon_code` varchar(255) DEFAULT NULL,
  `cashback` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`shop_id`, `name`, `cat_id`, `picture`, `shop_des`, `url`, `coupon_code`, `cashback`) VALUES
(1, '1-800-FLOWERS', 1, '1.png', '<p>Save Up to 50% Off on Flowers and Gifts! Send Truly Original Arrangements at 1800flowers. (No Promo Code Required)!&nbsp;										</p>', 'http://www.cashbackkaboom.com/retailers-guest.php', 'CJP-XW17', '3'),
(3, 'Home Shopping Network 	 Home Shopping Network', 3, '2.jpg', '<p>New customers get $10 off your first purchase of $20 or more from HSN! Use Code: 169662&nbsp;										</p>', 'http://www.cashbackkaboom.com/retailers-guest.php', 'CJP-XW19', '3'),
(6, 'Orbitz 	 Orbitz', 4, '3.jpg', '<p>Find paradise! Save 50% off or more on select hotels at ORBITZ New Year Week Sale! End 1/7&nbsp;										</p>', 'http://www.cashbackkaboom.com/retailers-guest.php', 'dJP-XW17', '3.5'),
(7, 'Advance Auto Parts', 6, 'za5ailf46nns6kmw13ar_1395767819.png', '<p>10% Off All Orders with code AAP10OFF at AdvanceAutoParts.com! Valid until 1/13/18.&nbsp;										</p>', 'https://awwazz.com/', '2123', '5%'),
(8, 'Contacts America', 6, '43voesh7mud6zhr0d9t2_1421434291.jpg', '<p>Get $25 off on all orders of $249 or more - Use Coupon Code CJP-XW17. Expires 01/31/17 </p>', 'https://awwazz.com/', NULL, '5%');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'cashback@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `members_details`
--
ALTER TABLE `members_details`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `members_details`
--
ALTER TABLE `members_details`
  MODIFY `member_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
