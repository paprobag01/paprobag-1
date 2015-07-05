-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2015 at 01:33 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `paprobag`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL,
  `session_id` varchar(100) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `cart_subtotal` float DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `shipping_charges` float DEFAULT NULL,
  `cart_total` float DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `session_id`, `user_id`, `cart_subtotal`, `discount`, `shipping_charges`, `cart_total`, `ip_address`) VALUES
(1, '1e6be6d07eb88dcf39de4131ad120c44', NULL, 500, 0, 0, 500, NULL),
(2, '377931cec702135579a24bac4212671d', NULL, 1500, 0, 0, 1500, NULL),
(3, '08ca0676de04f7ebcc59d20b8a48ed0a', NULL, 900, 0, 0, 900, NULL),
(4, 'a567a3e1302c006d472ecc0bab818a46', NULL, 1000, 0, 0, 1000, NULL),
(5, '9c292e54d498f9e8f23880e253d4efe4', NULL, 3000, 0, 0, 3000, NULL),
(6, '9c61401e40e5da519875f90fd8d873f8', NULL, 500, 0, 0, 500, NULL),
(7, '6b142c8ac319a78ca21a2220836661f1', NULL, 2800, 0, 0, 2800, NULL),
(8, '44bc958c6729f21106035838cd225d41', NULL, 1500, 0, 0, 1500, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart_product`
--

CREATE TABLE IF NOT EXISTS `cart_product` (
  `cart_product_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_id` varchar(7) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_wise_total` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_product`
--

INSERT INTO `cart_product` (`cart_product_id`, `cart_id`, `product_id`, `quantity`, `product_price`, `product_wise_total`) VALUES
(1, 1, '1', 1, 500, 500),
(2, 2, '1', 3, 500, 1500),
(3, 3, '8', 3, 300, 900),
(4, 4, '13', 2, 500, 1000),
(5, 4, '15', 1, 0, 0),
(6, 5, '13', 6, 500, 3000),
(7, 5, '15', 4, 0, 0),
(8, 6, '13', 1, 500, 500),
(10, 7, '15', 1, 0, 0),
(11, 7, '13', 1, 500, 500),
(12, 7, '16', 1, 300, 300),
(13, 7, '13', 4, 500, 2000),
(22, 8, '13', 3, 500, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(11) NOT NULL,
  `category_name` varchar(100) DEFAULT NULL,
  `cat_meta_keywords` varchar(100) DEFAULT NULL,
  `created_on` varchar(100) DEFAULT NULL,
  `deleted` int(11) DEFAULT '0',
  `cat_meta_title` varchar(100) DEFAULT NULL,
  `cat_meta_description` varchar(100) DEFAULT NULL,
  `image_url` varchar(100) DEFAULT NULL,
  `IsHome` int(11) DEFAULT '0',
  `IsOnProdDetails` int(11) DEFAULT NULL,
  `cat_position` int(11) DEFAULT '0',
  `ready_to_deliver` int(11) DEFAULT '0',
  `ready_to_print` int(11) DEFAULT '0',
  `customize_now` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `category_name`, `cat_meta_keywords`, `created_on`, `deleted`, `cat_meta_title`, `cat_meta_description`, `image_url`, `IsHome`, `IsOnProdDetails`, `cat_position`, `ready_to_deliver`, `ready_to_print`, `customize_now`) VALUES
(11, 'Jute Bags (Ready To Print)', 'Jute Bags', '25-03-2015', 0, 'Jute Bags', 'Jute Bags', 'upload/products/abcd57b3f26fd98d60f6c1f85d1e48de.jpg', 0, 0, 3, 0, 1, 0),
(12, 'Paper Bags(Ready To Print)', 'Paper Bags', '17-03-2015', 0, 'Paper Bags', 'Paper Bags', 'upload/products/a120cbe81a9c5d6c1f699e15a2691de8.jpg', 0, 0, 2, 0, 1, 0),
(13, 'Eco Bags', 'Eco Bags', '10-03-2015', 1, 'Eco Bags', 'Eco Bags', 'upload/products/fa3395b241c4665f95f2f71a5b59cb74.jpg', 1, 0, 3, 0, 1, 0),
(14, 'Boxes', 'Boxes', '10-03-2015', 0, 'Boxes', 'Boxes', 'upload/products/82d06664f103890e512a109d0b5d1011.jpg', 1, 0, 5, 0, 1, 0),
(15, 'Pouches', 'Pouches', '10-03-2015', 0, 'Pouches', 'Pouches', 'upload/products/eae048851f0bf3279e3650da896306d9.jpg', 1, 0, 6, 0, 1, 0),
(16, 'bags', 'bags', '10-03-2015', 1, 'bags', 'bags', 'upload/products/42547f5a44d87da3bc40ee5d09624606.jpg', 1, 0, 6, 0, 1, 0),
(19, 'Envelopes', 'Envelopes', '10-03-2015', 0, 'Envelopes', 'Envelopes', 'upload/products/db5868f688fa2aedf45453ed89299e8a.jpg', 1, 0, 4, 0, 1, 0),
(20, 'Non Woven Bags(Ready To Print)', 'Non Woven Bags', '17-03-2015', 0, 'Non Woven Bags', 'Non Woven Bags', 'upload/products/93a819cbd635bd1505ef0f804c21cc2a.jpg', 1, 0, 1, 0, 1, 0),
(23, 'Gift Bags', 'Gift Bags', '12-03-2015', 0, 'Gift Bags', 'Gift Bags', '0', 0, 0, 99999, 1, 0, 0),
(24, 'Test1', 'Test1', '11-03-2015', 0, 'Test1', 'Test1', '0', 0, 0, 9999999, 2, 0, 0),
(25, 'Test2', 'Test2', '11-03-2015', 0, 'Test2', 'Test2', '', 0, 0, 99999, 1, 0, 0),
(26, 'Paper Bags c', 'Paper Bags', '16-03-2015', 0, 'Paper Bags c', 'Paper Bags', 'upload/products/d5a24856959a183b69834f99fad86e5d.jpg', 0, 1, 1, 0, 0, 1),
(27, 'Eco Bags', 'Eco Bags', '12-03-2015', 0, 'Eco Bags', 'Eco Bags', 'upload/products/f610a13de080fb8df6cf972fc01ad93f.jpg', 1, 1, 2, 0, 0, 1),
(28, 'boxes', 'Eco Bags', '12-03-2015', 0, 'Eco Bags', 'Eco Bags', 'upload/products/5c1917d0afc16d36b7b2471ae6a664ad.jpg', 1, 0, 3, 0, 0, 1),
(29, 'Pouches', 'Pouches', '12-03-2015', 0, 'Pouches', 'Pouches', 'upload/products/4b657671b583d45e63cada58d6f555dc.jpg', 1, 1, 4, 0, 0, 1),
(30, 'Office Products', 'Office Products', '12-03-2015', 0, 'Office Products', 'Office Products', 'upload/products/8ad3c1db0f3411d9825cb088de789857.jpg', 1, 0, 5, 0, 0, 1),
(31, 'Paper Bag', 'Paper Bag w', '16-03-2015', 0, 'Paper Bag', 'Paper Bag w', '0', 0, 1, 999999, 3, 0, 0),
(32, 'Non Woven W', 'Non Woven W', '16-03-2015', 0, 'Non Woven W', 'Non Woven W', '0', 0, 0, 9999999, 3, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL,
  `cat_meta_title` varchar(100) NOT NULL,
  `cat_meta_keywords` varchar(200) NOT NULL,
  `cat_meta_description` varchar(500) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `created_on` varchar(100) NOT NULL,
  `cat_group` int(11) NOT NULL DEFAULT '0',
  `subcat` int(11) NOT NULL DEFAULT '0',
  `cat_type` int(11) NOT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_meta_title`, `cat_meta_keywords`, `cat_meta_description`, `cat_name`, `parent`, `created_on`, `cat_group`, `subcat`, `cat_type`, `section_id`) VALUES
(1, 'Paper Bag', 'Paper Bag', 'Paper Bag', 'Paper Bag', 0, '22-06-2015', 0, 0, 1, 5),
(2, 'Ecobags', 'Ecobags', 'Ecobags', 'Ecobags', 0, '22-06-2015', 0, 0, 1, 5),
(3, 'Ecobags', 'Ecobags', 'Ecobags', 'Boxes', 0, '22-06-2015', 0, 0, 1, 5),
(4, 'Pouches', 'Pouches', 'Pouches', 'Pouches', 0, '22-06-2015', 0, 0, 1, 5),
(5, 'Office Product', 'Office Product', 'Office Product', 'Office Product', 0, '22-06-2015', 0, 0, 1, 5),
(6, 'wholesale', 'wholesale', 'wholesale', 'Wholesale', 0, '22-06-2015', 0, 0, 1, 7),
(7, 'Retail', 'Retail', 'Retail', 'Retail', 0, '22-06-2015', 0, 0, 1, 7),
(8, 'Offers', 'Offers', 'Offers', 'Offers', 0, '22-06-2015', 0, 0, 1, 7),
(9, 'Paper Bag', 'Paper Bag', 'Paper Bag', 'Paper Bag', 0, '22-06-2015', 0, 0, 1, 6),
(10, 'Accessories', 'Accessories', 'Accessories', 'Accesseries', 0, '22-06-2015', 0, 0, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `customizations`
--

CREATE TABLE IF NOT EXISTS `customizations` (
  `customize_id` int(11) NOT NULL,
  `custom_cat_id` int(11) DEFAULT NULL,
  `custom_name` varchar(100) DEFAULT NULL,
  `created` varchar(20) DEFAULT NULL,
  `deleted` int(11) DEFAULT '0',
  `image_url` varchar(100) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `custom_price` int(100) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customizations`
--

INSERT INTO `customizations` (`customize_id`, `custom_cat_id`, `custom_name`, `created`, `deleted`, `image_url`, `cat_id`, `custom_price`) VALUES
(1, 41, 'Slim Fit', '12-03-2015', 0, 'upload/customizations/24400.png', 12, 200),
(2, 42, 'length', '24-02-2015', 0, 'upload/customizations/32095.jpg', 12, 0),
(3, 41, 'Test1', '13-03-2015', 0, 'upload/customizations/20801.jpg', 11, 200),
(4, 43, 'test1', '12-03-2015', 0, 'upload/customizations/17673.jpg', 12, 300),
(5, 41, 'test2', '16-03-2015', 0, 'upload/customizations/809.jpg', 13, 0),
(6, 41, 'test3', '16-03-2015', 0, 'upload/customizations/1710.jpg', 12, 0),
(7, 41, 'test3', '16-03-2015', 0, 'upload/customizations/21281.jpg', 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customize_type`
--

CREATE TABLE IF NOT EXISTS `customize_type` (
  `custom_cat_id` int(11) NOT NULL,
  `custom_type_name` varchar(100) DEFAULT NULL,
  `created_on` varchar(20) DEFAULT NULL,
  `deleted` int(11) DEFAULT '0',
  `steps` int(11) DEFAULT NULL,
  `customize_div_id` varchar(100) DEFAULT NULL,
  `data_id` varchar(100) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `customize_description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customize_type`
--

INSERT INTO `customize_type` (`custom_cat_id`, `custom_type_name`, `created_on`, `deleted`, `steps`, `customize_div_id`, `data_id`, `cat_id`, `customize_description`) VALUES
(41, 'FIT TYPE', '12-03-2015', 0, 1, 'FIT_TYPE', 'fit_type', 12, '<p>Description about Last Step Type</p>\r\n'),
(42, 'JACKET TYPE', '24-02-2015', 0, 2, 'Jacket_Type', 'jacket_type', 12, NULL),
(43, 'LAST STEP', '12-03-2015', 0, 3, 'LAST_STEP', 'last_step', 12, '<p><strong><span style="line-height: 20.7999992370605px;">Description of All Steps</span></strong></p>\r\n\r\n<p><span style="line-height: 1.6em;">Description of All Steps,&nbsp;</span><span style="line-height: 20.7999992370605px;">Description of All Steps</span></p>\r\n\r\n<p><span style="line-height: 20.7999992370605px;">Description of All Steps,&nbsp;</span><span style="line-height: 20.7999992370605px;">Description of All Steps</span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `filters`
--

CREATE TABLE IF NOT EXISTS `filters` (
  `filter_id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `material_name` varchar(100) DEFAULT NULL,
  `section_id` int(11) NOT NULL,
  `cat_id` varchar(100) DEFAULT NULL,
  `sub_cat_id` varchar(100) DEFAULT NULL,
  `GSM_name` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `style` varchar(50) NOT NULL,
  `handle` varchar(50) NOT NULL,
  `print` varchar(50) NOT NULL,
  `print_color` int(11) NOT NULL,
  `lamination` varchar(100) NOT NULL,
  `special_wrk` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filters`
--

INSERT INTO `filters` (`filter_id`, `material_id`, `material_name`, `section_id`, `cat_id`, `sub_cat_id`, `GSM_name`, `size`, `style`, `handle`, `print`, `print_color`, `lamination`, `special_wrk`) VALUES
(23, 1, 'Recycle Brown Craft Paper', 5, '1', '1', '120', '16w*13h*4g', '', 'D-Cut', 'Offset', 2, 'No', ''),
(24, 0, 'Recycle White Craft Paper', 5, '1', '1', '180', '', '', 'Twisted Handle', '', 2, 'Yes', ''),
(25, 2, 'Glossy Paper', 5, '1', '1', '200', '17w*13h*4g', '', '', 'Screen', 0, 'Glossy', ''),
(26, 0, 'Recycle Color Craft Paper', 5, '1', '3', '100', '', 'Horizontal', 'Folded', 'Screen', 5, 'No', ''),
(27, 0, 'Recycle Brown Craft Paper', 5, '1', '2', '', '', '', '', '', 0, '', ''),
(28, 1, 'Recycle Brown Craft Paper', 5, '1', '1', '250', '14', 'Vertcal', 'Rope', 'offset', 3, 'yes', 'yes'),
(29, 0, 'Recycle Brown Craft Paper', 5, '1', '4', '', '', '', '', '', 0, '', ''),
(30, 12, 'Natural Brown Craft Paper', 5, '1', '2', '', '', '', '', '', 0, '', ''),
(31, 13, 'Natural Brown Craft Paper', 5, '1', '5', '', '', '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `filter_detail`
--

CREATE TABLE IF NOT EXISTS `filter_detail` (
  `id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `material` tinyint(4) NOT NULL,
  `material_IDs` varchar(100) NOT NULL,
  `GSM` tinyint(4) NOT NULL,
  `GSM_IDs` varchar(100) NOT NULL,
  `size` tinyint(4) NOT NULL,
  `size_IDs` varchar(100) NOT NULL,
  `style` tinyint(4) NOT NULL,
  `style_IDs` varchar(100) NOT NULL,
  `handle` tinyint(4) NOT NULL,
  `handle_IDs` varchar(100) NOT NULL,
  `print` tinyint(4) NOT NULL,
  `print_IDs` varchar(100) NOT NULL,
  `lamination` tinyint(4) NOT NULL,
  `lamination_IDs` varchar(100) NOT NULL,
  `special_wrok` tinyint(4) NOT NULL,
  `special_work_IDs` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filter_detail`
--

INSERT INTO `filter_detail` (`id`, `sub_cat_id`, `material`, `material_IDs`, `GSM`, `GSM_IDs`, `size`, `size_IDs`, `style`, `style_IDs`, `handle`, `handle_IDs`, `print`, `print_IDs`, `lamination`, `lamination_IDs`, `special_wrok`, `special_work_IDs`) VALUES
(1, 1, 1, '1', 1, '1', 1, '1', 1, '1', 1, '1', 1, '1', 1, '1', 1, '1'),
(2, 2, 1, '2', 1, '2', 1, '2', 1, '2', 1, '2', 1, '2', 1, '2', 1, '2');

-- --------------------------------------------------------

--
-- Table structure for table `gsm`
--

CREATE TABLE IF NOT EXISTS `gsm` (
  `id` int(11) NOT NULL,
  `GSM_name` varchar(100) NOT NULL,
  `GSM_IDs` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gsm`
--

INSERT INTO `gsm` (`id`, `GSM_name`, `GSM_IDs`) VALUES
(1, '140', '1'),
(2, '100', '2');

-- --------------------------------------------------------

--
-- Table structure for table `handle`
--

CREATE TABLE IF NOT EXISTS `handle` (
  `id` int(11) NOT NULL,
  `handle_name` varchar(100) NOT NULL,
  `handle_id` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `handle`
--

INSERT INTO `handle` (`id`, `handle_name`, `handle_id`) VALUES
(1, 'Twisted', '1'),
(2, 'Rope', '2');

-- --------------------------------------------------------

--
-- Table structure for table `home_details`
--

CREATE TABLE IF NOT EXISTS `home_details` (
  `id` int(50) NOT NULL,
  `details` text NOT NULL,
  `name` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_details`
--

INSERT INTO `home_details` (`id`, `details`, `name`, `status`) VALUES
(2, '<p>Order Your Garments&nbsp;</p>\r\n\r\n<p>Order Your Garments</p>\r\n<!--<p>Taesha Tours is a spectacular travel services agent in Mumbai offering best deal for Tours & Travels related solutions for making your travel journey easier than before. We know just how to transform your heart desire into your dream holidays. We have been in this field from past saveral years.</p>\r\n\r\n<p>?</p>\r\n\r\n<p>We provide Great destinations, stunning sightseeing, and the exquisite hotels for the ultimate in luxury. At Taesha Tours every detail is taken care of, so that you are free to experience and enjoy your dream holidays. One need not worry about travel plans as every segment of the plan will be taken care by Taesha Tours.</p>-->\r\n\r\n<p>&nbsp;</p>\r\n', 'Order Your Garments', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `lamination`
--

CREATE TABLE IF NOT EXISTS `lamination` (
  `id` int(11) NOT NULL,
  `lamination_name` varchar(100) NOT NULL,
  `lamination_id` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lamination`
--

INSERT INTO `lamination` (`id`, `lamination_name`, `lamination_id`) VALUES
(1, 'No', '1'),
(2, 'yes', '2');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user_id` bigint(20) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `account_status` varchar(10) DEFAULT NULL,
  `profile_pic` varchar(100) DEFAULT NULL,
  `date_of_deactivation` date NOT NULL,
  `role_id` int(5) NOT NULL,
  `email` varchar(25) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `mobile_number` varchar(15) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `first_name`, `last_name`, `password`, `username`, `user_type`, `account_status`, `profile_pic`, `date_of_deactivation`, `role_id`, `email`, `cart_id`, `mobile_number`) VALUES
(18, 'paprobag', 'paprobag', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 'Admin', 'yes', 'upload/users/29615.jpg', '2015-01-29', 1, '', 0, ''),
(26, 'monica', 'sadafule', 'e10adc3949ba59abbe56e057f20f883e', 'monica', '123456', 'yes', '0', '0000-00-00', 3, '', 0, ''),
(27, '0', '0', 'd41d8cd98f00b204e9800998ecf8427e', '0', '', NULL, NULL, '0000-00-00', 0, '0', 0, ''),
(28, '0', '0', 'd41d8cd98f00b204e9800998ecf8427e', '0', '', NULL, NULL, '0000-00-00', 0, '0', 0, ''),
(29, '0', '0', 'd41d8cd98f00b204e9800998ecf8427e', '0', '', NULL, NULL, '0000-00-00', 0, '0', 0, ''),
(30, '0', '0', 'd41d8cd98f00b204e9800998ecf8427e', '0', '', NULL, NULL, '0000-00-00', 0, '0', 0, ''),
(31, '0', 'singh', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', '', NULL, NULL, '0000-00-00', 0, 'ashussingh91@gmail.com', 0, ''),
(32, '0', 'singh', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', '', NULL, NULL, '0000-00-00', 0, 'ashussingh91@gmail.com', 0, ''),
(33, '0', 'singh', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', '', NULL, NULL, '0000-00-00', 0, 'ashussingh91@gmail.com', 0, ''),
(34, '0', 'singh', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', '', NULL, NULL, '0000-00-00', 0, 'ashussingh91@gmail.com', 0, ''),
(35, '0', 'dsds', '202cb962ac59075b964b07152d234b70', 'sddsd', '', NULL, NULL, '0000-00-00', 0, 'dsdsa@ff.com', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `material_id` int(11) NOT NULL,
  `material_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`material_id`, `material_name`) VALUES
(1, 'Recycle White Craft'),
(2, 'Recycle Brown'),
(11, 'Recycle White Craft Paper1'),
(12, 'Natural Brown Craft Paper'),
(13, 'Natural Brown Craft Paper');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE IF NOT EXISTS `materials` (
  `id` int(11) NOT NULL,
  `material_id` varchar(10) NOT NULL,
  `material_name` varchar(100) NOT NULL,
  `gsm_link_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `Sr.No` int(11) NOT NULL,
  `email_list` varchar(30) NOT NULL,
  `offer_details` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`Sr.No`, `email_list`, `offer_details`) VALUES
(1, 'msjhijh@gmail.com', 'newoffersss');

-- --------------------------------------------------------

--
-- Table structure for table `print`
--

CREATE TABLE IF NOT EXISTS `print` (
  `id` int(11) NOT NULL,
  `print_id` varchar(10) NOT NULL,
  `print` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `print`
--

INSERT INTO `print` (`id`, `print_id`, `print`) VALUES
(1, '1', 'offset'),
(2, '2', 'screen');

-- --------------------------------------------------------

--
-- Table structure for table `print_color`
--

CREATE TABLE IF NOT EXISTS `print_color` (
  `id` int(11) NOT NULL,
  `print` varchar(10) NOT NULL,
  `print_num_colors` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `print_color`
--

INSERT INTO `print_color` (`id`, `print`, `print_num_colors`) VALUES
(1, '1', '2'),
(2, '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(100) DEFAULT NULL,
  `prod_description` varchar(500) DEFAULT NULL,
  `prod_short_description` varchar(200) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `prod_sub_categories` int(11) DEFAULT NULL,
  `prod_sku` varchar(100) DEFAULT NULL,
  `prod_price` varchar(100) DEFAULT NULL,
  `prod_tax_class` varchar(100) DEFAULT NULL,
  `prod_status` int(11) DEFAULT NULL,
  `prod_meta_title` varchar(100) DEFAULT NULL,
  `prod_meta_keyword` varchar(100) DEFAULT NULL,
  `prod_meta_description` varchar(200) DEFAULT NULL,
  `prod_image` varchar(100) DEFAULT NULL,
  `prod_image1` varchar(100) DEFAULT NULL,
  `prod_image2` varchar(100) DEFAULT NULL,
  `prod_image3` varchar(100) DEFAULT NULL,
  `prod_image4` varchar(100) DEFAULT NULL,
  `prod_on_home` int(11) NOT NULL,
  `created_on` date DEFAULT NULL,
  `prod_sell_price` varchar(100) DEFAULT NULL,
  `prod_qty` varchar(100) DEFAULT NULL,
  `prod_stock` varchar(100) DEFAULT NULL,
  `require_shipping` varchar(100) DEFAULT NULL,
  `prod_shipping_price` varchar(100) DEFAULT NULL,
  `prod_discount` varchar(100) DEFAULT NULL,
  `filter_id` int(11) DEFAULT NULL,
  `complete_the_look` int(11) NOT NULL,
  `taggings` int(11) NOT NULL,
  `prod_customizable` int(11) NOT NULL,
  `url_for_product_details` varchar(100) NOT NULL,
  `prod_gift_card` int(11) NOT NULL,
  `prod_gift_code` int(11) NOT NULL,
  `sold_by` varchar(50) NOT NULL,
  `material_id` int(11) NOT NULL,
  `GSM_name` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `style` varchar(100) NOT NULL,
  `handle` varchar(50) NOT NULL,
  `print` varchar(50) NOT NULL,
  `print_color` int(11) NOT NULL,
  `lamination` varchar(100) NOT NULL,
  `special_wrk` varchar(100) NOT NULL,
  `seller_id` varchar(10) NOT NULL,
  `approved` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `prod_description`, `prod_short_description`, `cat_id`, `section_id`, `sub_cat_id`, `prod_sub_categories`, `prod_sku`, `prod_price`, `prod_tax_class`, `prod_status`, `prod_meta_title`, `prod_meta_keyword`, `prod_meta_description`, `prod_image`, `prod_image1`, `prod_image2`, `prod_image3`, `prod_image4`, `prod_on_home`, `created_on`, `prod_sell_price`, `prod_qty`, `prod_stock`, `require_shipping`, `prod_shipping_price`, `prod_discount`, `filter_id`, `complete_the_look`, `taggings`, `prod_customizable`, `url_for_product_details`, `prod_gift_card`, `prod_gift_code`, `sold_by`, `material_id`, `GSM_name`, `size`, `style`, `handle`, `print`, `print_color`, `lamination`, `special_wrk`, `seller_id`, `approved`) VALUES
(13, 'paperbag', '<p>paperbag</p>\r\n', 'paperbag', 1, 5, 1, 1, 'paperbag', '500', NULL, 0, 'paperbag', 'paperbag', 'paperbag', 'upload/products/eddc3427c5d77843c2253f1e799fe933.jpg', '0', '0', '0', '0', 1, '0000-00-00', '480', '30', '', '1', '30', '4.00', 11, 0, 1, 0, 'paperbag', 0, 0, 'abc', 0, '17', '230', '', '', 'Screen', 0, '', '', '', 0),
(15, 'ecobag1', '<p>ecobag1</p>\r\n', 'ecobag1', 2, 5, 11, 2, 'ecobag1', '', NULL, 0, 'ecobag1', 'ecobag1', 'ecobag1', 'upload/products/9c8780d93f7077ed38cdc242778f7fdc.jpg', '0', '0', '0', '0', 1, '0000-00-00', '', '', '', '1', '', '0', 14, 0, 1, 0, 'ecobag1', 0, 0, '', 0, '', '', '', '', '', 0, '', '', '', 0),
(16, 'paperbag', '<p>paperbag</p>\r\n', 'paperbag', 1, 5, 5, 1, 'paperbag', '300', NULL, 0, 'paperbag', 'paperbag', 'paperbag', 'upload/products/a3060118db9026aba5f5248721d313df.jpg', '0', '0', '0', '0', 0, '0000-00-00', '250', '50', '', '1', '30', '16.67', 0, 0, 2, 0, 'paperbag', 0, 0, 'cdcf', 13, '100', '', 'Horizontal', 'Folded', 'Screen', 5, 'No', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `role_id` int(11) NOT NULL,
  `role` varchar(100) DEFAULT NULL,
  `role_rights` varchar(50) DEFAULT NULL,
  `active` varchar(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role`, `role_rights`, `active`) VALUES
(1, 'Admin', 'on,on,on,on', 'yes'),
(2, 'Customer', 'on,on,off,off', 'yes'),
(3, 'Staff', 'on,on,on,off', 'yes'),
(4, 'Agent', 'on,on,off,off', 'yes'),
(5, 'Seller', 'on,on,off,off', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE IF NOT EXISTS `sections` (
  `section_id` int(11) NOT NULL,
  `section_name` varchar(100) NOT NULL,
  `created_on` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`section_id`, `section_name`, `created_on`) VALUES
(5, 'Customizable', '18-06-2015'),
(6, 'Ready To Print', '31-05-2015'),
(7, 'Ready To Deliver', '31-05-2015'),
(8, 'Ecological AdBags', '18-06-2015');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE IF NOT EXISTS `seller` (
  `org_name` varchar(100) NOT NULL,
  `otp_number` int(11) NOT NULL,
  `otp_verified` int(11) NOT NULL,
  `address_1` varchar(70) NOT NULL,
  `address_2` varchar(70) NOT NULL,
  `zipcode` int(8) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`org_name`, `otp_number`, `otp_verified`, `address_1`, `address_2`, `zipcode`, `city`, `state`) VALUES
('', 0, 0, '', '', 0, '', ''),
('', 0, 0, '', '', 0, '', ''),
('', 0, 0, '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE IF NOT EXISTS `size` (
  `id` int(11) NOT NULL,
  `size` varchar(50) NOT NULL,
  `size_id` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `size`, `size_id`) VALUES
(1, '16w*14h*10g', '1'),
(2, '46', '2');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(50) NOT NULL,
  `slider_name` varchar(25) NOT NULL,
  `slider_image` varchar(250) NOT NULL,
  `slider_status` varchar(25) NOT NULL,
  `slide_on_home` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_name`, `slider_image`, `slider_status`, `slide_on_home`) VALUES
(25, 'cooncook', 'upload/slide/16725.jpg', 'Active', 0),
(27, 'slide', 'upload/slide/9444.JPG', 'Active', 0),
(28, 'img', 'upload/slide/13692.jpg', 'Active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `special_work`
--

CREATE TABLE IF NOT EXISTS `special_work` (
  `id` int(11) NOT NULL,
  `special_work` varchar(100) NOT NULL,
  `special_work_id` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `special_work`
--

INSERT INTO `special_work` (`id`, `special_work`, `special_work_id`) VALUES
(1, 'No', '1'),
(2, 'No', '2');

-- --------------------------------------------------------

--
-- Table structure for table `style`
--

CREATE TABLE IF NOT EXISTS `style` (
  `id` int(11) NOT NULL,
  `style` varchar(100) NOT NULL,
  `style_id` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `style`
--

INSERT INTO `style` (`id`, `style`, `style_id`) VALUES
(1, 'Horizontal', '1'),
(2, 'vertical', '2');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `sub_cat_id` int(11) NOT NULL,
  `sub_cat_name` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `material_link_id` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`sub_cat_id`, `sub_cat_name`, `cat_id`, `section_id`, `material_link_id`) VALUES
(1, 'Shopping Carry Bags', 1, 5, ''),
(2, 'Handmade Paper bags', 1, 5, ''),
(3, 'Food Parcel Bags', 1, 5, ''),
(4, 'Counter Bags', 1, 5, ''),
(5, 'Grocery Bags', 1, 5, ''),
(6, 'Wine Bags', 1, 5, ''),
(7, 'Medical Bags', 1, 5, ''),
(8, 'Box Bags', 1, 5, ''),
(9, 'Basket Bags', 1, 5, ''),
(10, 'Bag For Neckties', 1, 5, ''),
(11, 'Non woven Bags', 2, 5, ''),
(12, 'Woven Stitch Bags', 2, 5, ''),
(13, 'Jute Bags', 2, 5, ''),
(14, 'Canvas Bags', 2, 5, ''),
(15, 'Cotton Bags', 2, 5, ''),
(16, 'Khadi Bags', 2, 5, ''),
(17, 'Bamboo Bags', 2, 5, ''),
(18, 'Currier Boxes', 3, 5, ''),
(19, 'Packaging Boxes', 3, 5, ''),
(20, 'Mailing Boxes', 3, 5, ''),
(21, 'Food Boxes', 3, 5, ''),
(22, 'Non Woven Pouches', 4, 5, ''),
(23, 'Woven Stitch Pouches', 4, 5, ''),
(24, 'Jute Pouches', 4, 5, ''),
(25, 'Cotton Pouches', 4, 5, ''),
(26, 'Canvas Pouches', 4, 5, ''),
(27, 'Mixed Pouches', 4, 5, ''),
(28, 'Envolopes', 5, 5, ''),
(29, 'Files & Folders', 5, 5, ''),
(30, 'Stickers', 5, 5, ''),
(31, 'Pampletes', 5, 5, ''),
(32, 'Mascouats', 5, 5, ''),
(33, 'Tags', 10, 5, ''),
(34, 'Suite cover', 10, 5, ''),
(35, 'Tissue Paper', 10, 5, ''),
(36, 'Bookmark', 10, 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `sub_subcategories`
--

CREATE TABLE IF NOT EXISTS `sub_subcategories` (
  `sub_sub_cat_id` int(11) NOT NULL,
  `sub_sub_cat_name` varchar(100) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `created_on` varchar(100) DEFAULT NULL,
  `deleted` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_subcategories`
--

INSERT INTO `sub_subcategories` (`sub_sub_cat_id`, `sub_sub_cat_name`, `sub_cat_id`, `cat_id`, `created_on`, `deleted`) VALUES
(1, 'Laminated bags', 23, 26, '16-03-2015', 0),
(2, 'test1', 24, 26, '17-03-2015', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `cart_product`
--
ALTER TABLE `cart_product`
  ADD PRIMARY KEY (`cart_product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customizations`
--
ALTER TABLE `customizations`
  ADD PRIMARY KEY (`customize_id`), ADD KEY `cust_cat_is_fk` (`custom_cat_id`), ADD KEY `fk_ca_id` (`cat_id`);

--
-- Indexes for table `customize_type`
--
ALTER TABLE `customize_type`
  ADD PRIMARY KEY (`custom_cat_id`);

--
-- Indexes for table `filters`
--
ALTER TABLE `filters`
  ADD PRIMARY KEY (`filter_id`);

--
-- Indexes for table `filter_detail`
--
ALTER TABLE `filter_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsm`
--
ALTER TABLE `gsm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `handle`
--
ALTER TABLE `handle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_details`
--
ALTER TABLE `home_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lamination`
--
ALTER TABLE `lamination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`material_id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`Sr.No`);

--
-- Indexes for table `print`
--
ALTER TABLE `print`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `print_color`
--
ALTER TABLE `print_color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `special_work`
--
ALTER TABLE `special_work`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `style`
--
ALTER TABLE `style`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- Indexes for table `sub_subcategories`
--
ALTER TABLE `sub_subcategories`
  ADD PRIMARY KEY (`sub_sub_cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cart_product`
--
ALTER TABLE `cart_product`
  MODIFY `cart_product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `customizations`
--
ALTER TABLE `customizations`
  MODIFY `customize_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `customize_type`
--
ALTER TABLE `customize_type`
  MODIFY `custom_cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `filters`
--
ALTER TABLE `filters`
  MODIFY `filter_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `filter_detail`
--
ALTER TABLE `filter_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gsm`
--
ALTER TABLE `gsm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `handle`
--
ALTER TABLE `handle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `home_details`
--
ALTER TABLE `home_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lamination`
--
ALTER TABLE `lamination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `Sr.No` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `print`
--
ALTER TABLE `print`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `print_color`
--
ALTER TABLE `print_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `special_work`
--
ALTER TABLE `special_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `style`
--
ALTER TABLE `style`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `sub_subcategories`
--
ALTER TABLE `sub_subcategories`
  MODIFY `sub_sub_cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customizations`
--
ALTER TABLE `customizations`
ADD CONSTRAINT `cust_cat_is_fk` FOREIGN KEY (`custom_cat_id`) REFERENCES `customize_type` (`custom_cat_id`),
ADD CONSTRAINT `fk_ca_id` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
