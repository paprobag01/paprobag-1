-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2015 at 07:32 AM
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
  `cat_type` int(11) NOT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_meta_title`, `cat_meta_keywords`, `cat_meta_description`, `cat_name`, `cat_type`, `section_id`) VALUES
(0, 'PaperBags', 'PaperBag', 'PaperBag', 'PaperBag', 1, 0),
(1, 'Ecobags', 'Ecobags', 'Ecobags', 'Ecobags', 1, 0),
(2, 'Boxes', 'Boxes', 'Boxes', 'Boxes', 1, 0),
(3, 'Pouches', 'Pouches', 'Pouches', 'Pouches', 1, 0),
(4, 'Office Products', 'OfficeProducts', 'OfficeProducts', 'OfficeProducts', 1, 0),
(5, 'PaperBags', 'PaperBags', 'PaperBags', 'PaperBags', 1, 1),
(6, 'Ecobags', 'Ecobags', 'Ecobags', 'Ecobags', 1, 1),
(7, 'Boxes', 'Boxes', 'Boxes', 'Boxes', 1, 1),
(8, 'Pouches', 'Pouches', 'Pouches', 'Pouches', 1, 1),
(9, 'OfficeProducts', 'OfficeProducts', 'OfficeProducts', 'OfficeProducts', 1, 1),
(10, 'Wholesale', 'Wholesale', 'Wholesale', 'Wholesale', 1, 2),
(11, 'Retail', 'Retail', 'Retail', 'Retail', 1, 2),
(12, 'Offers', 'Offers', 'Offers', 'Offers', 1, 2),
(13, 'Printed NewsPaper Bags', 'PrintedNewsPaperBags', 'PrintedNewsPaperBags', 'PrintedNewsPaperBags', 1, 3),
(14, 'Ad-Newspaper Bags', 'Ad-Newspaper Bags', 'Ad-Newspaper Bags', 'Ad-Newspaper Bags', 1, 3),
(15, 'Accessories', 'Accessories', 'Accessories', 'Accessories', 1, 1);

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
  `material_id` int(11) NOT NULL,
  `material_name` varchar(100) DEFAULT NULL,
  `section_id` int(11) NOT NULL,
  `cat_id` varchar(100) DEFAULT NULL,
  `sub_cat_id` varchar(100) DEFAULT NULL,
  `GSM_name` varchar(100) NOT NULL,
  `style_id` int(11) NOT NULL,
  `handle` varchar(50) NOT NULL,
  `print` varchar(50) NOT NULL,
  `print_color` int(11) NOT NULL,
  `lamination` varchar(100) NOT NULL,
  `special_wrk` varchar(100) NOT NULL,
  `sub_subcat_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filters`
--

INSERT INTO `filters` (`material_id`, `material_name`, `section_id`, `cat_id`, `sub_cat_id`, `GSM_name`, `style_id`, `handle`, `print`, `print_color`, `lamination`, `special_wrk`, `sub_subcat_id`) VALUES
(0, 'Recycled Brown Kraft Paper', 0, '0', '0', '', 0, '', '', 0, '', '', 'Not available'),
(1, 'Recycled white Kraft Paper', 0, '0', '0', '', 0, '', '', 0, '', '', 'Not available'),
(2, 'Recycled Color Kraft Paper', 1, '5', '31', '', 0, '', '', 0, '', '', 'Not available'),
(3, 'Recycled Color Kraft Paper', 0, '1', '10', '', 0, '', '', 0, '', '', 'Not available'),
(4, 'Recycled White Kraft Paper', 0, '2', '17', '', 0, '', '', 0, '', '', 'Not available'),
(5, 'Glossy Paper', 0, '3', '21', '', 0, '', '', 0, '', '', 'Not available'),
(6, 'Recycled Brown Kraft Paper', 0, '4', '27', '', 0, '', '', 0, '', '', 'Not available'),
(7, 'Recycled Color Kraft Paper', 2, '10', '69', '', 0, '', '', 0, '', '', '0'),
(8, 'Recycled White Kraft Paper', 2, '11', '66', '', 0, '', '', 0, '', '', '27'),
(9, 'Recycled Brown Craft Paper', 2, '12', '73', '', 0, '', '', 0, '', '', '32'),
(10, 'Recycle Brown Craft Paper', 1, '6', '41', '', 0, '', '', 0, '', '', 'Not available'),
(11, 'Recycled Color Kraft Paper', 1, '7', '48', '', 0, '', '', 0, '', '', 'Not available'),
(12, 'Recycled White Kraft Paper', 1, '8', '52', '', 0, '', '', 0, '', '', 'Not available'),
(13, 'Glossy Paper', 1, '9', '58', '', 0, '', '', 0, '', '', 'Not available'),
(14, 'Recycled Color Kraft Paper', 1, '15', '62', '', 0, '', '', 0, '', '', 'Not available'),
(15, 'Recycled Color Kraft Paper', 1, '9', '59', '', 0, '', '', 0, '', '', 'Not available'),
(16, 'Glossy Paper', 1, '15', '63', '', 0, '', '', 0, '', '', 'Not available'),
(17, 'Recycled Color Kraft Paper', 2, '10', '70', '', 0, '', '', 0, '', '', '17');

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
  `material_id` int(11) NOT NULL,
  `material` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`material_id`, `material`) VALUES
(0, 'Recycled Brown Kraft Pape'),
(1, 'Recycled White Kraft Paper'),
(2, 'Recycled Color Kraft Paper'),
(3, 'Glossy Paper'),
(4, 'Gray Duplex Paper'),
(5, 'White duplex Paper'),
(6, 'Art Duplex Paper'),
(7, 'Recycled Brown Kraft Paper'),
(8, 'Recycled Color Kraft Paper'),
(9, 'Vergine Brown Paper'),
(10, 'Vergine White Paper'),
(11, 'Recycled Brown Kraft Paper'),
(12, 'Recycled White Kraft Paper'),
(13, 'Recycled Color Kraft Paper'),
(14, 'Vergine Brown Paper'),
(15, 'Vergine White Paper'),
(16, 'Recycled Brown Kraft Paper'),
(17, 'Recycled White Kraft Paper'),
(18, 'Recycled Color Kraft Paper'),
(19, 'Recycled Brown Kraft Paper'),
(20, 'Recycled White Kraft Paper'),
(21, 'Recycled White Kraft Paper'),
(22, 'Recycled Color Kraft Paper'),
(23, 'Glossy Paper'),
(24, 'Gray Duplex Paper'),
(25, 'White duplex Paper'),
(26, 'Art Duplex Paper'),
(27, 'Recycled Brown Kraft Paper'),
(28, 'Recycled White Kraft Paper'),
(29, 'Recycled Color Kraft Paper'),
(30, 'Glossy Paper'),
(31, 'Gray Duplex Paper'),
(32, 'White duplex Paper'),
(33, 'Art Duplex Paper'),
(34, 'Recycled Brown Kraft Paper'),
(35, 'Recycled White Kraft Paper'),
(36, 'Recycled Color Kraft Paper'),
(37, 'Glossy Paper'),
(38, 'Gray Duplex Paper'),
(39, 'White duplex Paper'),
(40, 'Art Duplex Paper'),
(41, 'Recycle Brown Craft Paper'),
(42, 'Recycled White Kraft Paper'),
(43, 'Recycled Color Kraft Paper'),
(44, 'Glossy Paper'),
(45, 'Gray Duplex Paper'),
(46, 'White duplex Paper'),
(47, 'Art Duplex Paper'),
(47, 'Art Duplex Paper'),
(49, 'Recycled Brown Craft Paper'),
(50, 'Recycled White Kraft Paper'),
(51, 'Recycled Color Kraft Paper'),
(52, 'Glossy Paper'),
(53, 'Gray Duplex Paper'),
(54, 'White duplex Paper'),
(55, 'Art Duplex Paper');

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
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `prod_description`, `prod_short_description`, `cat_id`, `section_id`, `sub_cat_id`, `prod_sub_categories`, `prod_sku`, `prod_price`, `prod_tax_class`, `prod_status`, `prod_meta_title`, `prod_meta_keyword`, `prod_meta_description`, `prod_image`, `prod_image1`, `prod_image2`, `prod_image3`, `prod_image4`, `prod_on_home`, `created_on`, `prod_sell_price`, `prod_qty`, `prod_stock`, `require_shipping`, `prod_shipping_price`, `prod_discount`, `filter_id`, `complete_the_look`, `taggings`, `prod_customizable`, `url_for_product_details`, `prod_gift_card`, `prod_gift_code`, `sold_by`, `material_id`, `GSM_name`, `size`, `style`, `handle`, `print`, `print_color`, `lamination`, `special_wrk`, `seller_id`, `approved`, `seller_request_status`, `product_status`) VALUES
(40, 'Customize Paper Bag', '<p>Customize Paper Bag</p>\r\n', 'Customize Paper Bag', 0, 0, 0, 0, 'Customize Paper Bag', '500', NULL, 0, 'Customize Paper Bag', 'Customize Paper Bag', 'Customize Paper Bag', 'upload/products/7de6cd35982b5384abd11277d1c25f4f.jpg', '0', '0', '0', '0', 1, '0000-00-00', '480', '500', '', '1', '20', '4.00', NULL, 0, 1, 0, '0', 0, 0, 'abc', 0, '0', '0', '0', '0', '0', 0, '0', '0', '', 0, 0, 0),
(41, 'Customizable ecobag', '<p>Customizable ecobag</p>\r\n', 'Customizable ecobag', 1, 0, 10, 1, 'Customizable ecobag', '400', NULL, 0, 'Customizable ecobag', 'Customizable ecobag', 'Customizable ecobag', 'upload/products/536eecee295b92db6b32194e269541f8.jpg', '0', '0', '0', '0', 1, '0000-00-00', '350', '500', '', '1', '30', '12.50', NULL, 0, 2, 0, '0', 0, 0, 'cxvcxv', 3, '3', '0', '0', '3', '3', 3, '3', '3', '', 0, 0, 0),
(42, 'Customizable Boxes', '<p>Customizable Boxes</p>\r\n', 'Customizable Boxes', 2, 0, 17, 2, 'Customizable Boxes', '300', NULL, 0, 'Customizable Boxes', 'Customizable Boxes', 'Customizable Boxes', 'upload/products/85b9a5ac91cd629bd3afe396ec07270a.jpg', '0', '0', '0', '0', 1, '0000-00-00', '250', '500', '', '1', '50', '16.67', NULL, 0, 1, 0, '0', 0, 0, 'nmjjkk', 4, '4', '0', '0', '4', '4', 4, '4', '4', '', 0, 0, 0),
(43, 'Customizable Pouches', '<p>Customizable Pouches</p>\r\n', 'Customizable Pouches', 3, 0, 21, 3, 'Customizable Pouches', '800', NULL, 0, 'Customizable Pouches', 'Customizable Pouches', 'Customizable Pouches', 'upload/products/fc75bd9622425bbc421653770069faf5.jpg', '0', '0', '0', '0', 1, '0000-00-00', '750', '500', '', '1', '30', '6.25', NULL, 0, 1, 0, '0', 0, 0, 'dkmn', 5, '5', '0', '0', '5', '5', 5, '5', '5', '', 0, 0, 0),
(44, 'Office Products', '<p>Customizable Office Products</p>\r\n', 'Customizable Office Products', 4, 0, 27, 4, 'Customizable Office Products', '350', NULL, 0, 'Customizable Office Products', 'Customizable Office Products', 'Customizable Office Products', 'upload/products/87d2df31d91c857ffb1a3d5caf45f766.jpg', '0', '0', '0', '0', 1, '0000-00-00', '310', '500', '', '1', '30', '11.43', NULL, 0, 1, 0, '0', 0, 0, 'sdffgf', 6, '6', '0', '0', '6', '6', 6, '6', '6', '', 0, 0, 0),
(45, 'Retail Products', '<p>Retail Products</p>\r\n', 'Retail Products', 11, 2, 69, 10, 'Retail Products', '400', NULL, 0, 'Retail Products', 'Retail Products', 'Retail Products', 'upload/products/2e28dda26c212b9fddfcfa1e44ab97b1.jpg', '0', '0', '0', '0', 1, '0000-00-00', '350', '1', '', '1', '30', '12.50', NULL, 0, 1, 0, '0', 0, 0, 'cfvfv', 7, '7', '0', '0', '7', '7', 7, '7', '7', '', 0, 0, 0),
(46, 'Offers', '<p>Offer&nbsp;Products</p>\r\n', 'Wholesale', 12, 2, 0, 10, 'Wholesale', '800', NULL, 0, 'Offers', 'Offers', 'Offers', 'upload/products/9c502490400407d66aff75b9fff0be36.jpg', '', '', '', '', 1, '0000-00-00', '800', '5', '', '1', '30', '6.25', 0, 0, 1, 0, '0', 0, 0, 'bhjjjn', 0, '0', '0', '0', '0', '0', 0, '0', '0', '', 0, 0, 0),
(47, 'Wholesale', '<p>Wholesale Products</p>\r\n', 'Wholesale', 10, 2, 69, 10, 'Wholesale', '100', NULL, 0, 'Wholesale', 'Wholesale', 'Wholesale', 'upload/products/7c6f8dba4a02404f97b5953d2c4172a7.jpg', '0', '0', '0', '0', 1, '0000-00-00', '80', '10', '', '1', '40', '20.00', NULL, 0, 1, 0, '0', 0, 0, 'hgnb', 7, '7', '0', '0', '7', '7', 7, '7', '7', '', 0, 0, 0),
(48, 'Paperbag (Shopping Carry Bags)', '<p>Ready To Print&nbsp;Paperbag</p>\r\n', 'Paperbag', 5, 1, 31, 5, 'Paperbag', '200', NULL, 0, 'Paperbag', 'Paperbag', 'Paperbag', 'upload/products/498bce62bd2bda584246701fa0166482.jpg', '', '', '', '', 1, '0000-00-00', '200', '100', '', '1', '30', '10', 0, 0, 1, 0, '0', 0, 0, 'bhvjb', 0, '0', '0', '0', '0', '0', 0, '0', '0', '', 0, 0, 0),
(49, 'Paperbag (Color Kraft Paper)', '<p>paperbag</p>\r\n', 'paperbag', 5, 1, 31, 5, 'paperbag', '300', NULL, 0, 'paperbag', 'paperbag', 'paperbag', 'upload/products/18b18272ed31e60bafbdef233b87afc0.jpg', '0', '0', '0', '0', 1, '0000-00-00', '280', '100', '', '1', '30', '6.67', NULL, 0, 1, 0, '0', 0, 0, 'mncvjh', 2, '2', '2', '0', '2', '2', 2, '2', '2', '', 0, 0, 0),
(50, 'Ecobags (Jute Bags)', '<p>Ecobags (Jute Bags)</p>\r\n', 'Ecobags (Jute Bags)', 6, 1, 41, 6, 'Ecobags (Jute Bags)', '200', NULL, 0, 'Ecobags (Jute Bags)', 'Ecobags (Jute Bags)', 'Ecobags (Jute Bags)', 'upload/products/f0adc8838f4bdedde4ec2cfad0515589.jpg', '0', '0', '0', '0', 1, '0000-00-00', '180', '100', '', '1', '30', '10.00', NULL, 0, 1, 0, '0', 0, 0, 'cvfg', 10, '10', '0', '0', '10', '10', 10, '10', '10', '', 0, 0, 0),
(51, 'Ecobags (Non Woven Bags)', '<p>Ecobags</p>\r\n', 'Ecobags', 6, 1, 41, 6, 'Ecobags', '5', NULL, 0, 'Ecobags', 'Ecobags', 'Ecobags', 'upload/products/1dc7f3464a4839e6009992502eabb7a1.jpg', '0', '0', '0', '0', 1, '0000-00-00', '4', '100', '', '1', '30', '20.00', NULL, 0, 1, 0, '0', 0, 0, 'Paprobag', 10, '10', '0', '0', '10', '10', 10, '10', '10', '', 0, 0, 0),
(52, 'Boxes (Courier Boxes)', '<p>Boxes&nbsp;</p>\r\n', 'Boxes ', 7, 1, 48, 7, 'Boxes ', '12', NULL, 0, 'Boxes ', 'Boxes ', 'Boxes ', 'upload/products/2d1838bd5b731e64a54439dac82b3a4e.jpg', '0', '0', '0', '0', 1, '0000-00-00', '10', '100', '', '1', '30', '16.67', NULL, 0, 1, 0, '0', 0, 0, 'Paprobag', 11, '11', '0', '0', '11', '11', 11, '11', '11', '', 0, 0, 0),
(53, 'Boxes (white Boxes)', '<p>White Box</p>\r\n', 'White Box', 7, 1, 48, 7, 'White Box', '15', NULL, 0, 'White Box', 'White Box', 'White Box', 'upload/products/7690dd4db7a92524c684e3191919eb6b.jpg', '0', '0', '0', '0', 1, '0000-00-00', '13', '100', '', '1', '30', '13.33', NULL, 0, 1, 0, '0', 0, 0, 'Paprobag', 11, '11', '0', '0', '11', '11', 11, '11', '11', '', 0, 0, 0),
(54, 'Pouches (Jute Pouches)', '<p>Jute Pouches</p>\r\n', 'Jute Pouches', 8, 1, 52, 8, 'Jute Pouches', '10', NULL, 0, 'Jute Pouches', 'Jute Pouches', 'Jute Pouches', 'upload/products/3fe230348e9a12c13120749e3f9fa4cd.jpg', '0', '0', '0', '0', 1, '0000-00-00', '9', '100', '', '1', '30', '10.00', NULL, 0, 1, 0, '0', 0, 0, 'Paprobag', 12, '12', '0', '0', '12', '12', 12, '12', '12', '', 0, 0, 0),
(55, 'Pouches (Canvas Pouches)', '<p>Canvas Pouches</p>\r\n', 'Canvas Pouches', 8, 1, 52, 8, 'Canvas Pouches', '15', NULL, 0, 'Canvas Pouches', 'Canvas Pouches', 'Canvas Pouches', 'upload/products/5c1d3094cb6ad88a8fe5a64e0bdd8b1e.jpg', '0', '0', '0', '0', 1, '0000-00-00', '12', '100', '', '1', '30', '20.00', NULL, 0, 1, 0, '0', 0, 0, 'Paprobag', 12, '12', '0', '0', '12', '12', 12, '12', '12', '', 0, 0, 0),
(56, 'Office Products (Files and Folders)', '<p>&nbsp;Files and Folders For&nbsp;<span style="line-height: 20.7999992370605px;">Office Products</span></p>\r\n', 'Office Products', 9, 1, 59, 9, 'Office Products', '100', NULL, 0, 'Office Products Files and Folders', 'Office Products Files and Folders', 'Office Products Files and Folders', 'upload/products/06c765902df5e6af92864147e1995fa3.jpg', '0', '0', '0', '0', 1, '0000-00-00', '80', '100', '', '1', '30', '20.00', NULL, 0, 1, 0, '0', 0, 0, 'Paprobag', 15, '15', '0', '0', '15', '15', 15, '15', '15', '', 0, 0, 0),
(57, 'Office Products (Envelopes)', '<p>Envelopes For Office Products</p>\r\n', 'Envelopes For Office Products', 9, 1, 58, 9, 'Envelopes For Office Products', '5', NULL, 0, 'Envelopes For Office Products', 'Envelopes For Office Products', 'Envelopes For Office Products', 'upload/products/e4f37b9ed429c1fe5ce61860d9902521.jpg', '0', '0', '0', '0', 1, '0000-00-00', '4', '100', '', '1', '20', '20.00', NULL, 0, 1, 0, '0', 0, 0, 'Paprobag', 13, '13', '0', '0', '13', '13', 13, '13', '13', '', 0, 0, 0),
(58, 'Accessories (Tissue Paper)', '<p>Tissue Papers</p>\r\n', 'Tissue Paper', 15, 1, 63, 15, 'Tissue Paper', '10', NULL, 0, 'Tissue Paper', 'Tissue Paper', 'Tissue Paper', 'upload/products/76ea811ab0fa4779bc19b003bec98570.jpg', '0', '0', '0', '0', 1, '0000-00-00', '9', '100', '', '1', '20', '10.00', NULL, 0, 1, 0, '0', 0, 0, 'Paprobag', 16, '16', '0', '0', '16', '16', 16, '16', '16', '', 0, 0, 0),
(59, 'Office Products (Tags)', '<p>Office Products&nbsp;</p>\r\n', 'Office Products', 15, 1, 62, 15, 'Office Products', '8', NULL, 0, 'Office Products', 'Office Products', 'Office Products', 'upload/products/b64bd4b2d025a7635eabf84b086f65fe.jpg', '0', '0', '0', '0', 1, '0000-00-00', '7', '100', '', '1', '5', '12.50', NULL, 0, 1, 0, '0', 0, 0, 'Paprobag', 14, '14', '0', '0', '14', '14', 14, '14', '14', '', 0, 0, 0),
(60, 'Boxes (Gift Boxes)', '<p>Gift Boxes</p>\r\n', 'Gift Boxes', 7, 1, 48, 10, 'Gift Boxes', '10', NULL, 0, 'Gift Boxes', 'Gift Boxes', 'Gift Boxes', 'upload/products/f7620fbc20ce5ea030e60b8c6f96a346.jpg', '', '', '', '', 1, '0000-00-00', '10', '100', '', '1', '8', '10', 0, 0, 1, 0, '0', 0, 0, 'Paprobag', 0, '0', '0', '0', '0', '0', 0, '0', '0', '', 0, 0, 0);

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
  `section_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`section_id`, `section_name`) VALUES
(0, 'Customizable'),
(1, 'Ready To Print'),
(2, 'Ready To Deliver'),
(3, 'Ecological AdBags');

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
-- Table structure for table `style_details`
--

CREATE TABLE IF NOT EXISTS `style_details` (
  `section_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `style` varchar(50) NOT NULL,
  `style_id` int(11) NOT NULL,
  `size` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `style_details`
--

INSERT INTO `style_details` (`section_id`, `cat_id`, `sub_cat_id`, `style`, `style_id`, `size`) VALUES
(0, 0, 0, 'Horizontal', 0, '16w*13h*4g,150,123'),
(0, 0, 2, 'Vertical', 1, ''),
(1, 5, 31, 'Horizontal', 2, ''),
(0, 0, 7, 'Vertical', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `sub_cat_id` int(11) NOT NULL,
  `sub_cat_name` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `moq` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`sub_cat_id`, `sub_cat_name`, `cat_id`, `section_id`, `moq`) VALUES
(0, 'Shopping Carry Bags', 0, 0, 500),
(1, 'Handmade Paper bags', 0, 0, 500),
(2, 'Food parshal bags', 0, 0, 500),
(3, 'Counter Bags', 0, 0, 500),
(4, 'Grocery Bags', 0, 0, 500),
(5, 'Wine Bags', 0, 0, 500),
(6, 'Medical Bags', 0, 0, 500),
(7, 'Box Bags', 0, 0, 500),
(8, 'Basket Bags', 0, 0, 500),
(9, 'Neckties Bags', 0, 0, 500),
(10, 'Non Woven Bags', 1, 0, 500),
(11, 'Woven Stitch Bags', 1, 0, 500),
(12, 'Jute Bags', 1, 0, 500),
(13, 'Cotton Bags', 1, 0, 500),
(14, 'Canvas Bags', 1, 0, 500),
(15, 'Bamboo Bags', 1, 0, 500),
(16, 'Khadi Bags', 1, 0, 500),
(17, 'Courier Boxes', 2, 0, 500),
(18, 'Mailing Boxes', 2, 0, 500),
(19, 'Food Boxes', 2, 0, 500),
(20, 'Paper Board Conisters', 2, 0, 500),
(21, 'Paper Pouches', 3, 0, 500),
(22, 'Non Woven Pouches', 3, 0, 500),
(23, 'Woven Pouches', 3, 0, 500),
(24, 'Jute Pouches', 3, 0, 500),
(25, 'Cotton Pouches', 3, 0, 500),
(26, 'Canvas Pouches', 3, 0, 500),
(27, 'Envolopes', 4, 0, 500),
(28, 'Files and Folders', 4, 0, 500),
(29, 'Stickers', 4, 0, 500),
(30, 'Pamplets', 4, 0, 500),
(31, 'Shopping Carry Bags', 5, 1, 100),
(32, 'Handmade Paper bags', 5, 1, 100),
(33, 'Food parshal bags', 5, 1, 100),
(34, 'Counter Bags', 5, 1, 100),
(35, 'Grocery Bags', 5, 1, 100),
(36, 'Wine Bags', 5, 1, 100),
(37, 'Medical Bags', 5, 1, 100),
(38, 'Box Bags', 5, 1, 100),
(39, 'Basket Bags', 5, 1, 100),
(40, 'Bag For Neckties', 5, 1, 100),
(41, 'Non Woven Bags', 6, 1, 100),
(42, 'Woven Stitch Bags', 6, 1, 100),
(43, 'Jute Bags', 6, 1, 100),
(44, 'Canvas Bags', 6, 1, 100),
(45, 'Cotton Bags', 6, 1, 100),
(46, 'Bamboo Bags', 6, 1, 100),
(47, 'Khadi Bags', 6, 1, 100),
(48, 'Courier Boxes', 7, 1, 100),
(49, 'Mailing Boxes', 7, 1, 100),
(50, 'Food Boxes', 7, 1, 100),
(51, 'Paper Board Conisters', 7, 1, 100),
(52, 'Paper Pouches', 8, 1, 100),
(53, 'Non Woven Pouches', 8, 1, 100),
(54, 'Woven Pouches', 8, 1, 100),
(55, 'Jute Pouches', 8, 1, 100),
(56, 'Cotton Pouches', 8, 1, 100),
(57, 'Canvas Pouches', 8, 1, 100),
(58, 'Envolopes', 9, 1, 100),
(59, 'Files and Folders', 9, 1, 100),
(60, 'Stickers', 9, 1, 100),
(61, 'Pamplets', 9, 1, 100),
(62, 'Tags', 15, 1, 100),
(63, 'Tissue Paper', 15, 1, 100),
(64, 'Bookmarks', 15, 1, 100),
(65, 'Shutcovers', 15, 1, 100),
(66, 'Bags', 11, 2, 1),
(67, 'Hand Made Diaries', 11, 2, 1),
(68, 'Hand Made Lams', 11, 2, 1),
(69, 'Bags', 10, 2, 5),
(70, 'Boxes', 10, 2, 5),
(71, 'Pouches', 10, 2, 5),
(72, 'Office Products', 10, 2, 5),
(73, 'Offers On Retail', 12, 2, 5),
(74, 'Offers On Wholesale', 12, 2, 5);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_subcategories`
--

INSERT INTO `sub_subcategories` (`sub_sub_cat_id`, `sub_sub_cat_name`, `sub_cat_id`, `cat_id`, `created_on`, `deleted`) VALUES
(1, 'Laminated bags', 23, 26, '16-03-2015', 0),
(2, 'test1', 24, 26, '17-03-2015', 0),
(3, '0', 0, 10, '23-07-2015', 0),
(4, '0', 0, 0, '23-07-2015', 0),
(5, '0', 69, 10, '23-07-2015', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub_subcategory`
--

CREATE TABLE IF NOT EXISTS `sub_subcategory` (
  `section_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `sub_subcat_id` int(11) NOT NULL,
  `sub_subcat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_subcategory`
--

INSERT INTO `sub_subcategory` (`section_id`, `cat_id`, `sub_cat_id`, `sub_subcat_id`, `sub_subcat_name`) VALUES
(2, 10, 69, 0, 'Paperbag'),
(2, 10, 69, 1, 'Non Wovenbags'),
(2, 10, 69, 2, 'Woven Stich Bags'),
(2, 10, 69, 3, 'Jute Bags'),
(2, 10, 69, 4, 'Handmade Paper Bags'),
(2, 10, 69, 5, 'Gift Bags'),
(2, 10, 69, 6, 'Birthday Bags'),
(2, 10, 69, 7, 'Marriage Bags'),
(2, 10, 69, 8, 'Color Kraft Bags'),
(2, 10, 69, 9, 'Grossary Bags'),
(2, 10, 69, 10, 'Counter Bags'),
(2, 10, 70, 11, 'Courier Boxes'),
(2, 10, 70, 12, 'Mailing Boxes'),
(2, 10, 70, 13, 'Food Boxes'),
(2, 10, 70, 14, 'Sweet Boxes'),
(2, 10, 70, 15, 'Chocolate Boxes'),
(2, 10, 70, 16, 'Cake Boxes'),
(2, 10, 70, 17, 'Gift Boxes'),
(2, 10, 71, 18, 'Non Woven Pouches'),
(2, 10, 71, 19, 'Woven Stitch Pouches'),
(2, 10, 71, 20, 'Jute Pouches'),
(2, 10, 71, 21, 'Cotton Pouches'),
(2, 10, 71, 22, 'Canvas Pouches'),
(2, 10, 71, 23, 'Mix Pouches'),
(2, 10, 72, 24, 'Envelopes'),
(2, 10, 72, 25, 'Files and Folders'),
(2, 10, 72, 26, 'Mailing Boxes'),
(2, 11, 66, 27, 'Jute Bags'),
(2, 11, 66, 28, 'Cotton Bags'),
(2, 11, 66, 29, 'Canvas Bags'),
(2, 11, 66, 30, 'Khadi Bags'),
(2, 11, 66, 31, 'Bamboo Bags'),
(2, 12, 73, 32, 'Bags'),
(2, 12, 73, 33, 'Hand Made Diaries'),
(2, 12, 73, 34, 'Hand Made Paper Lamps'),
(2, 12, 74, 35, 'Bags'),
(2, 12, 74, 36, 'Boxes'),
(2, 12, 74, 37, 'Pouches'),
(2, 12, 74, 38, 'Office Products');

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
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
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
-- AUTO_INCREMENT for table `sub_subcategories`
--
ALTER TABLE `sub_subcategories`
  MODIFY `sub_sub_cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
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
