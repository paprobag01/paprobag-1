-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2015 at 03:40 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_meta_title`, `cat_meta_keywords`, `cat_meta_description`, `cat_name`, `parent`, `created_on`, `cat_group`, `subcat`, `cat_type`, `section_id`) VALUES
(2, 'Ecobags', 'Ecobags', 'Ecobags', 'Ecobags', 0, '22-06-2015', 0, 0, 1, 5),
(3, 'Ecobags', 'Ecobags', 'Ecobags', 'Boxes', 0, '22-06-2015', 0, 0, 1, 5),
(4, 'Pouches', 'Pouches', 'Pouches', 'Pouches', 0, '22-06-2015', 0, 0, 1, 5),
(5, 'Office Product', 'Office Product', 'Office Product', 'Office Product', 0, '22-06-2015', 0, 0, 1, 5),
(6, 'wholesale', 'wholesale', 'wholesale', 'Wholesale', 0, '22-06-2015', 0, 0, 1, 7),
(7, 'Retail', 'Retail', 'Retail', 'Retail', 0, '22-06-2015', 0, 0, 1, 7),
(8, 'Offers', 'Offers', 'Offers', 'Offers', 0, '22-06-2015', 0, 0, 1, 7),
(9, 'Paper Bag', 'Paper Bag', 'Paper Bag', 'Paper Bag', 0, '22-06-2015', 0, 0, 1, 6),
(10, 'Accessories', 'Accessories', 'Accessories', 'Accesseries', 0, '22-06-2015', 0, 0, 1, 5),
(11, 'Paper Bag', 'Paper Bag', 'Paper Bag', 'PaperBags', 0, '20-07-2015', 0, 0, 1, 5),
(12, 'Ijmnmbnm', 'Ijmnmbnm', 'Ijmnmbnm', 'Ijmnmbnm', 0, '21-07-2015', 0, 0, 1, 5),
(13, 'Cdcwcewcew', 'Cdcwcewcew', 'Cdcwcewcew', 'Cdcwcewcew', 0, '21-07-2015', 0, 0, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE IF NOT EXISTS `category_table` (
  `id` int(11) NOT NULL,
  `category` varchar(110) NOT NULL,
  `category_id` varchar(5) NOT NULL,
  `section_ids` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`id`, `category`, `category_id`, `section_ids`) VALUES
(1, 'paperbags', 'pab', '1');

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
  `wcc` int(11) NOT NULL,
  `size` varchar(100) NOT NULL,
  `style` varchar(50) NOT NULL,
  `handle` varchar(50) NOT NULL,
  `print` varchar(50) NOT NULL,
  `print_color` int(11) NOT NULL,
  `lamination` varchar(100) NOT NULL,
  `special_wrk` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filters`
--

INSERT INTO `filters` (`filter_id`, `material_id`, `material_name`, `section_id`, `cat_id`, `sub_cat_id`, `GSM_name`, `wcc`, `size`, `style`, `handle`, `print`, `print_color`, `lamination`, `special_wrk`) VALUES
(85, 67, 'Recycled White Kraft Paper', 5, '2', '11', '150,120,163,10', 0, '16w*13h*4g,12w*12*4g,14w*12*6g', 'Horizontal', 'Twisted Handle,Rope', '', 0, 'offset,Scrren', ''),
(86, 68, 'Recycled Color Kraft Paper', 5, '1', '10', '', 0, '', '', '', '', 0, '', ''),
(87, 69, 'Glossy Paper', 5, '1', '10', '', 0, '', '', '', '', 0, '', ''),
(88, 70, 'Grey Duplex Paper', 5, '1', '10', '', 0, '', '', '', '', 0, '', ''),
(89, 71, 'White duplex Paper', 5, '1', '10', '', 0, '', '', '', '', 0, '', ''),
(90, 72, 'White duplex Paper', 5, '1', '10', '', 0, '', '', '', '', 0, '', ''),
(91, 73, 'Art Duplex Paper', 5, '1', '10', '', 0, '2w*14h*1g', '', '', '', 0, '', ''),
(92, 74, '12w*10h*4g', 5, '1', '3', '', 0, '', '', '', '', 0, '', ''),
(94, 2, 'Natural Brown Craft Paper', 5, '2', '11', '135-2kg', 0, '', '', 'Ribbon', '', 0, '', ''),
(95, 3, 'Recycle Brown Craft Paper', 5, '2', '12', '', 0, '', '', 'Ribbon', '', 0, '', ''),
(96, 15, 'Natural Brown Paper', 5, '2', '12', '', 0, '45', '', '', '', 0, '', ''),
(97, 16, 'Recycle Brown Craft Paper', 5, '2', '12', '', 0, '', '', 'Twisted Handle', '', 0, '', ''),
(98, 17, 'Natural Colour Kraft Paper', 5, '3', '18', '', 0, '', '', '', '', 0, '', ''),
(99, 18, 'Glossy Paper', 5, '4', '22', '', 0, '', '', '', '', 0, '', ''),
(100, 19, 'Natural Brown Craft Paper', 5, '5', '28', '', 0, '', '', '', '', 0, '', '');

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
-- Table structure for table `filter_details`
--

CREATE TABLE IF NOT EXISTS `filter_details` (
  `filter_id` int(11) NOT NULL,
  `material_id` varchar(10) NOT NULL,
  `gsm_ids` varchar(100) NOT NULL,
  `size_ids` varchar(100) NOT NULL,
  `style_ids` varchar(25) NOT NULL,
  `handle_ids` varchar(35) NOT NULL,
  `print_ids` varchar(25) NOT NULL,
  `lamination_ids` varchar(30) NOT NULL,
  `special_work_ids` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filter_details`
--

INSERT INTO `filter_details` (`filter_id`, `material_id`, `gsm_ids`, `size_ids`, `style_ids`, `handle_ids`, `print_ids`, `lamination_ids`, `special_work_ids`) VALUES
(1, '1', '10', '1', '3', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `gsm`
--

CREATE TABLE IF NOT EXISTS `gsm` (
  `id` int(11) NOT NULL,
  `gsm` varchar(100) NOT NULL,
  `gsm_id` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gsm`
--

INSERT INTO `gsm` (`id`, `gsm`, `gsm_id`) VALUES
(3, '100', '10');

-- --------------------------------------------------------

--
-- Table structure for table `handle`
--

CREATE TABLE IF NOT EXISTS `handle` (
  `id` int(11) NOT NULL,
  `handle` varchar(100) NOT NULL,
  `handle_id` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `handle`
--

INSERT INTO `handle` (`id`, `handle`, `handle_id`) VALUES
(1, 'twisted handle', '1');

-- --------------------------------------------------------

--
-- Table structure for table `header_slider`
--

CREATE TABLE IF NOT EXISTS `header_slider` (
  `id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `slide_on_head` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header_slider`
--

INSERT INTO `header_slider` (`id`, `section_id`, `cat_id`, `sub_cat_id`, `image`, `image_name`, `status`, `slide_on_head`) VALUES
(9, 5, 1, 1, 'upload/slide/23449.jpg', 'Ecobag', 'Active', 1);

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
  `lamination` varchar(100) NOT NULL,
  `lamination_id` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lamination`
--

INSERT INTO `lamination` (`id`, `lamination`, `lamination_id`) VALUES
(1, 'Gloosy', '1');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user_id` bigint(20) NOT NULL,
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `name` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `account_status` varchar(10) DEFAULT NULL,
  `profile_pic` varchar(100) DEFAULT NULL,
  `date_of_deactivation` date NOT NULL,
  `role_id` int(5) NOT NULL,
  `email` varchar(65) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `mobile_number_verified` tinyint(1) NOT NULL,
  `email_verification_code` varchar(100) NOT NULL,
  `email_verified` tinyint(1) NOT NULL,
  `org_name` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `first_name`, `last_name`, `name`, `password`, `username`, `user_type`, `account_status`, `profile_pic`, `date_of_deactivation`, `role_id`, `email`, `cart_id`, `mobile_number`, `mobile_number_verified`, `email_verification_code`, `email_verified`, `org_name`) VALUES
(18, 'paprobag', 'paprobag', '', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 'Admin', 'yes', 'upload/users/29615.jpg', '2015-01-29', 1, '', 0, '', 0, '', 0, ''),
(26, 'monica', 'sadafule', '', 'e10adc3949ba59abbe56e057f20f883e', 'monica', '123456', 'yes', '0', '0000-00-00', 3, '', 0, '', 0, '', 0, ''),
(57, NULL, NULL, 'ashish singh', 'd41d8cd98f00b204e9800998ecf8427e', 'ashish', '', 'No', NULL, '0000-00-00', 5, 'ashussingh91@gmail.com', 0, '+918425902552', 1, '826cb5f8262757b6a2b9c4bd04032135', 1, 'paprobag'),
(56, NULL, NULL, 'ashish singh', 'd41d8cd98f00b204e9800998ecf8427e', 'ashish', '', 'No', NULL, '0000-00-00', 5, 'ashussingh91@gmail.com', 0, '+919637280316', 1, '78d2eef99a06a280ff651bc91430078a', 1, 'paprobag'),
(55, NULL, NULL, 'ashish singh', 'd41d8cd98f00b204e9800998ecf8427e', 'ashish', '', 'No', NULL, '0000-00-00', 5, 'ashussingh91@gmail.com', 0, '+918425902552', 1, '7e833b86be22a49612da20b1db4447e0', 1, 'paprobag'),
(54, NULL, NULL, 'ashish singh', 'd41d8cd98f00b204e9800998ecf8427e', 'ashish', '', 'No', NULL, '0000-00-00', 5, 'ashussingh91@gmail.com', 0, '+918425902552', 1, 'b64407ef9c08bc02ba66a19cc8e87dfa', 1, 'paprobag'),
(53, NULL, NULL, 'ashish singh', 'd41d8cd98f00b204e9800998ecf8427e', 'ashish', '', 'No', NULL, '0000-00-00', 5, 'ashussingh91@gmail.com', 0, '+919637280316', 1, '42cb9ee3ab976e086d8c8692f122e10a', 1, 'paprobag'),
(58, NULL, NULL, 'ashish singh', 'd41d8cd98f00b204e9800998ecf8427e', 'ashish', '', 'No', NULL, '0000-00-00', 5, 'ashussingh91@gmail.com', 0, '+919637280316', 1, 'c7ff9622dceafcbd3667d51271037304', 1, 'paprobag'),
(59, NULL, NULL, '43536', 'd41d8cd98f00b204e9800998ecf8427e', '43536', '', 'No', NULL, '0000-00-00', 5, '34543@ede.com', 0, '3', 0, '3961e68faa82a00c51310baed9a43c7c', 0, '343244'),
(60, NULL, NULL, 'somesh', 'd41d8cd98f00b204e9800998ecf8427e', 'somesh', '', 'No', NULL, '0000-00-00', 5, 'someshford@gmail.com', 0, '9867714425', 0, '0795dcc0a3c2a5138a2fc6ddafc0a78b', 0, 'paprobag');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `Ai` int(11) NOT NULL,
  `material` varchar(100) NOT NULL,
  `material_id` varchar(10) NOT NULL,
  `sub_category_ids` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`Ai`, `material`, `material_id`, `sub_category_ids`) VALUES
(1, 'vergine brown paper', '1', '1'),
(2, 'Natural Brown Craft Paper', '2', 'scb'),
(3, 'Recycle Brown Craft Paper', 'Avwgk', 'scb'),
(4, 'papernew', 'Ck0G0', ''),
(16, 'Recycle Brown Craft Paper', 'oapwR', ''),
(17, 'Natural Colour Kraft Paper', 'axXfY', ''),
(18, 'Glossy Paper', 'tedQz', ''),
(19, 'Natural Brown Craft Paper', '8BTJ4', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `print`
--

INSERT INTO `print` (`id`, `print_id`, `print`) VALUES
(1, '1', 'offset');

-- --------------------------------------------------------

--
-- Table structure for table `print_color`
--

CREATE TABLE IF NOT EXISTS `print_color` (
  `id` int(11) NOT NULL,
  `print_color` int(11) NOT NULL,
  `print_color_id` varchar(10) NOT NULL,
  `print_ids` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `print_color`
--

INSERT INTO `print_color` (`id`, `print_color`, `print_color_id`, `print_ids`) VALUES
(1, 1, '01', '1');

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
  `approved` tinyint(4) NOT NULL,
  `seller_request_status` int(11) NOT NULL,
  `product_status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `prod_description`, `prod_short_description`, `cat_id`, `section_id`, `sub_cat_id`, `prod_sub_categories`, `prod_sku`, `prod_price`, `prod_tax_class`, `prod_status`, `prod_meta_title`, `prod_meta_keyword`, `prod_meta_description`, `prod_image`, `prod_image1`, `prod_image2`, `prod_image3`, `prod_image4`, `prod_on_home`, `created_on`, `prod_sell_price`, `prod_qty`, `prod_stock`, `require_shipping`, `prod_shipping_price`, `prod_discount`, `filter_id`, `complete_the_look`, `taggings`, `prod_customizable`, `url_for_product_details`, `prod_gift_card`, `prod_gift_code`, `sold_by`, `material_id`, `GSM_name`, `size`, `style`, `handle`, `print`, `print_color`, `lamination`, `special_wrk`, `seller_id`, `approved`, `seller_request_status`, `product_status`) VALUES
(16, 'ecobags', '<p>ecobags</p>\r\n', '0', 1, 5, 3, 1, 'ecobags', '500', NULL, 0, 'ecobags', 'ecobags', 'ecobags', '', '', '', '', '', 1, '0000-00-00', '480', '400', '0', '1', '30', '4.00', 0, 0, 1, 0, '0', 0, 0, 'abc', 13, '0', '0', '0', '0', '0', 0, '0', '0', '', 0, 0, 2),
(23, 'customize_paperbag', '<p>customize_paperbag</p>\r\n', 'customize_paperbag', 11, 5, 0, 2, 'customize_paperbag', '500', NULL, 0, 'customize_paperbag', 'customize_paperbag', 'customize_paperbag', 'upload/products/da8ce53cf0240070ce6c69c48cd588ee.jpg', '', '', '', '', 1, '0000-00-00', '500', '30', '', '1', '10', '4', 0, 0, 1, 0, '0', 0, 0, 'vghh', 0, '0', '0', '0', '0', '0', 0, '0', '0', '', 0, 0, 0),
(24, 'customize_ecobag', '<p>customize_ecobag</p>\r\n', 'customize_ecobag', 2, 5, 11, 2, 'customize_ecobag', '500', NULL, 0, 'customize_ecobag', 'customize_ecobag', 'customize_ecobag', 'upload/products/9e020ebb181dfd3fb1229c6ceb076a60.jpg', '0', '0', '0', '0', 1, '0000-00-00', '480', '10', '', '1', '20', '4.00', 0, 0, 1, 0, '0', 0, 0, 'cmdnckj', 0, '0', '0', '0', '0', '0', 0, '0', '0', '', 0, 0, 0),
(25, 'Boxes', '<p>Boxes</p>\r\n', 'Boxes', 3, 5, 18, 3, 'Boxes', '300', NULL, 0, 'Boxes', 'Boxes', 'Boxes', 'upload/products/0bf727e907c5fc9d5356f11e4c45d613.jpg', '0', '0', '0', '0', 1, '0000-00-00', '250', '30', '', '1', '60', '16.67', 0, 0, 1, 0, '0', 0, 0, 'bjbjh', 0, '0', '0', '0', '0', '0', 0, '0', '0', '', 0, 0, 0),
(26, 'pouches', '<p>pouches</p>\r\n', 'pouches', 4, 5, 22, 4, 'pouches', '400', NULL, 0, 'pouches', 'pouches', 'pouches', 'upload/products/523b96f500fcb4459aa8718e387c9b23.jpg', '0', '0', '0', '0', 1, '0000-00-00', '350', '30', '', '1', '20', '12.50', 0, 0, 1, 0, '0', 0, 0, 'fdvfd', 0, '0', '0', '0', '0', '0', 0, '0', '0', '', 0, 0, 0),
(27, 'Office Product', '<p>Office Product</p>\r\n', 'Office Product', 5, 5, 28, 5, 'Office Product', '400', NULL, 0, 'Office Product', 'Office Product', 'Office Product', 'upload/products/3c19211bcc34fabc8ec48e601e97e4a5.jpg', '0', '0', '0', '0', 1, '0000-00-00', '350', '4', '', '1', '10', '12.50', 0, 0, 0, 0, '0', 0, 0, 'xdce', 0, '0', '0', '0', '0', '0', 0, '0', '0', '', 0, 0, 0),
(28, 'Ready To Print', '<p>Ready To Print</p>\r\n', 'Ready To Print', 9, 6, 0, 9, 'Ready To Print', '500', NULL, 0, 'Ready To Print', 'Ready To Print', 'Ready To Print', 'upload/products/6fae4e7975cfb72a356e6a8682456c6e.png', '0', '0', '0', '0', 1, '0000-00-00', '480', '30', '', '1', '20', '4.00', 0, 0, 1, 0, '0', 0, 0, 'vnbmgfn', 0, '0', '0', '0', '0', '0', 0, '0', '0', '', 0, 0, 0),
(29, 'Ready To Print_prod', '<p>Ready To Print_prod</p>\r\n', 'Ready To Print_prod', 9, 6, 0, 9, 'Ready To Print_prod', '300', NULL, 0, 'Ready To Print_prod', 'Ready To Print_prod', 'Ready To Print_prod', 'upload/products/e03814c1d555e06aa5d562d95ed29bd2.png', '0', '0', '0', '0', 1, '0000-00-00', '250', '10', '', '1', '50', '16.67', 0, 0, 1, 0, '0', 0, 0, 'nmmk', 0, '0', '0', '0', '0', '0', 0, '0', '0', '', 0, 0, 0),
(30, 'ready_prod3', '<p>ready_prod3</p>\r\n', 'ready_prod3', 9, 6, 0, 9, 'ready_prod3', '300', NULL, 0, 'ready_prod3', 'ready_prod3', 'ready_prod3', 'upload/products/cc26f87f3f9f7c0fbf2d36ad880a9a4e.png', '0', '0', '0', '0', 1, '0000-00-00', '250', '50', '', '1', '50', '16.67', 0, 0, 1, 0, '0', 0, 0, 'xdrdrf', 0, '0', '0', '0', '0', '0', 0, '0', '0', '', 0, 0, 0),
(33, 'ready_prod4', '<p>ready_prod4</p>\r\n', 'ready_prod4', 9, 6, 0, 9, 'ready_prod4', '400', NULL, 0, 'ready_prod4', 'ready_prod4', 'ready_prod4', 'upload/products/2907d2584b4215ec733f9b4b09d83765.png', '0', '0', '0', '0', 1, '0000-00-00', '350', '20', '', '1', '4', '12.50', 0, 0, 1, 0, '0', 0, 0, 'cxvcxv', 0, '0', '0', '0', '0', '0', 0, '0', '0', '', 0, 0, 0),
(34, 'retail_products', '<p>retail_products</p>\r\n', 'retail_products', 7, 7, 0, 7, 'retail_products', '400', NULL, 0, 'retail_products', 'retail_products', 'retail_products', 'upload/products/515f4b1414c40dd89c5d73bb0c1671ac.jpg', '0', '0', '0', '0', 1, '0000-00-00', '350', '20', '', '1', '40', '12.50', 0, 0, 1, 0, '0', 0, 0, 'smcsc', 0, '0', '0', '0', '0', '0', 0, '0', '0', '', 0, 0, 0),
(35, 'offers', '<p>offers</p>\r\n', 'offers', 8, 7, 0, 8, 'offers', '300', NULL, 0, 'offers', 'offers', 'offers', 'upload/products/478ee79434a295d016f91d90ea301bcc.jpg', '0', '0', '0', '0', 1, '0000-00-00', '250', '30', '', '1', '40', '16.67', 0, 0, 2, 0, '0', 0, 0, 'sercbv', 0, '0', '0', '0', '0', '0', 0, '0', '0', '', 0, 0, 0),
(36, 'wholesale_products', '<p>wholesale_products</p>\r\n', 'wholesale_products', 6, 7, 0, 6, 'wholesale_products', '400', NULL, 0, 'wholesale_products', 'wholesale_products', 'wholesale_products', 'upload/products/546ba6ad0ece03a14523470c72264e09.jpg', '0', '0', '0', '0', 1, '0000-00-00', '350', '20', '', '1', '30', '12.50', 0, 0, 1, 0, '0', 0, 0, 'srdfgcv', 0, '0', '0', '0', '0', '0', 0, '0', '0', '', 0, 0, 0);

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
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `id` int(11) NOT NULL,
  `section` varchar(50) NOT NULL,
  `section_id` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `section`, `section_id`) VALUES
(1, 'customizable_products', '1'),
(2, 'ready to print', '2'),
(3, 'ready to deliever', '3');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE IF NOT EXISTS `sections` (
  `section_id` int(11) NOT NULL,
  `section_name` varchar(100) NOT NULL,
  `created_on` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`section_id`, `section_name`, `created_on`) VALUES
(0, 'Rvxvxc', '0'),
(5, 'Customizable', '18-06-2015'),
(6, 'Ready To Print', '31-05-2015'),
(7, 'Ready To Deliver', '31-05-2015'),
(8, 'Ecological AdBags', '18-06-2015');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE IF NOT EXISTS `seller` (
  `id` int(11) NOT NULL,
  `email_id` varchar(65) NOT NULL,
  `address_1` varchar(70) NOT NULL,
  `address_2` varchar(70) NOT NULL,
  `zipcode` int(8) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `email_id`, `address_1`, `address_2`, `zipcode`, `city`, `state`) VALUES
(4, 'ashussingh91@gmail.com', 'G273,Dreams Mall , Near Railway station', 'Bhandup West', 400078, 'Bhandup', 'Maharashtra'),
(5, 'ashussingh91@gmail.com', 'G273,Dreams Mall , Near Railway station,Bhandup West', 'bhandup', 400078, 'Bhandup', 'Maharashtra'),
(6, 'ashussingh91@gmail.com', 'G273,Dreams Mall , Near Railway station,Bhandup West', 'bhandup', 400078, 'Bhandup', 'Maharashtra'),
(7, 'ashussingh91@gmail.com', 'G273,Dreams Mall , Near Railway station,Bhandup West', 'bhandup', 400078, 'Bhandup', 'Maharashtra');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE IF NOT EXISTS `size` (
  `id` int(11) NOT NULL,
  `size` varchar(50) NOT NULL,
  `size_id` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `size`, `size_id`) VALUES
(1, '16w*13h*4g', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `special_work`
--

INSERT INTO `special_work` (`id`, `special_work`, `special_work_id`) VALUES
(1, 'Emmbossing', '1');

-- --------------------------------------------------------

--
-- Table structure for table `style`
--

CREATE TABLE IF NOT EXISTS `style` (
  `id` int(11) NOT NULL,
  `style` varchar(100) NOT NULL,
  `style_id` varchar(10) NOT NULL,
  `size_ids` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `style`
--

INSERT INTO `style` (`id`, `style`, `style_id`, `size_ids`) VALUES
(1, 'vertical', '3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `sub_cat_id` int(11) NOT NULL,
  `sub_cat_name` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`sub_cat_id`, `sub_cat_name`, `cat_id`, `section_id`) VALUES
(1, 'Shopping Carry Bags', 1, 5),
(2, 'Handmade Paper bags', 1, 5),
(3, 'Food Parcel Bags', 1, 5),
(4, 'Counter Bags', 1, 5),
(5, 'Grocery Bags', 1, 5),
(6, 'Wine Bags', 1, 5),
(7, 'Medical Bags', 1, 5),
(8, 'Box Bags', 1, 5),
(9, 'Basket Bags', 1, 5),
(10, 'Bag For Neckties', 1, 5),
(11, 'Non woven Bags', 2, 5),
(12, 'Woven Stitch Bags', 2, 5),
(13, 'Jute Bags', 2, 5),
(14, 'Canvas Bags', 2, 5),
(15, 'Cotton Bags', 2, 5),
(16, 'Khadi Bags', 2, 5),
(17, 'Bamboo Bags', 2, 5),
(18, 'Currier Boxes', 3, 5),
(19, 'Packaging Boxes', 3, 5),
(20, 'Mailing Boxes', 3, 5),
(21, 'Food Boxes', 3, 5),
(22, 'Non Woven Pouches', 4, 5),
(23, 'Woven Stitch Pouches', 4, 5),
(24, 'Jute Pouches', 4, 5),
(25, 'Cotton Pouches', 4, 5),
(26, 'Canvas Pouches', 4, 5),
(27, 'Mixed Pouches', 4, 5),
(28, 'Envolopes', 5, 5),
(29, 'Files & Folders', 5, 5),
(30, 'Stickers', 5, 5),
(31, 'Pampletes', 5, 5),
(32, 'Mascouats', 5, 5),
(33, 'Tags', 10, 5),
(34, 'Suite cover', 10, 5),
(35, 'Tissue Paper', 10, 5),
(36, 'Bookmark', 10, 5);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory_table`
--

CREATE TABLE IF NOT EXISTS `subcategory_table` (
  `id` int(11) NOT NULL,
  `subcategory` varchar(60) NOT NULL,
  `subcategory_id` varchar(10) NOT NULL,
  `category_ids` varchar(30) NOT NULL,
  `section_ids` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory_table`
--

INSERT INTO `subcategory_table` (`id`, `subcategory`, `subcategory_id`, `category_ids`, `section_ids`) VALUES
(1, 'shopping carry bags', 'scb', 'pab', '1');

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
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `filter_details`
--
ALTER TABLE `filter_details`
  ADD PRIMARY KEY (`filter_id`);

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
-- Indexes for table `header_slider`
--
ALTER TABLE `header_slider`
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
  ADD PRIMARY KEY (`Ai`);

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
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `subcategory_table`
--
ALTER TABLE `subcategory_table`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `category_table`
--
ALTER TABLE `category_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
  MODIFY `filter_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `filter_detail`
--
ALTER TABLE `filter_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `filter_details`
--
ALTER TABLE `filter_details`
  MODIFY `filter_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gsm`
--
ALTER TABLE `gsm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `handle`
--
ALTER TABLE `handle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `header_slider`
--
ALTER TABLE `header_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `home_details`
--
ALTER TABLE `home_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lamination`
--
ALTER TABLE `lamination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `Ai` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `Sr.No` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `print`
--
ALTER TABLE `print`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `print_color`
--
ALTER TABLE `print_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `special_work`
--
ALTER TABLE `special_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `style`
--
ALTER TABLE `style`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `subcategory_table`
--
ALTER TABLE `subcategory_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
