-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2015 at 01:14 PM
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
  `child_cat_id` varchar(150) NOT NULL,
  `cat_group` int(11) NOT NULL DEFAULT '0',
  `subcat` int(11) NOT NULL DEFAULT '0',
  `cat_type` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `ready_to_deliver` int(11) NOT NULL,
  `ready_to_print` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_meta_title`, `cat_meta_keywords`, `cat_meta_description`, `cat_name`, `parent`, `created_on`, `child_cat_id`, `cat_group`, `subcat`, `cat_type`, `section_id`, `ready_to_deliver`, `ready_to_print`) VALUES
(14, 'Paper Bag', 'Paper Bag', 'Paper Bag', 'Paper Bag', 0, '10-06-2015', '15,16,15', 0, 0, 1, 5, 0, 0),
(15, 'Shopping Carry Bags', 'Shopping Carry Bags', 'Shopping Carry Bags', 'Ecobags', 0, '31-05-2015', '0', 0, 0, 2, 5, 0, 0),
(16, 'Handmade Paper Bag', 'Handmade Paper Bag', 'Handmade Paper Bag', 'Boxes', 0, '31-05-2015', '0', 0, 0, 2, 5, 0, 0),
(19, 'Paper bag2', 'Paper bag2', 'Paper bag2', 'Pouches', 0, '31-05-2015', '0', 0, 0, 1, 5, 0, 0),
(24, 'retail', 'retail', 'retail', 'Retail', 0, '15-06-2015', '0', 0, 0, 1, 7, 0, 0),
(25, 'offers', 'offers', 'offers', 'Offers', 0, '15-06-2015', '0', 0, 0, 1, 7, 0, 0),
(26, 'wholesale', 'wholesale', 'wholesale', 'Wholesale', 0, '15-06-2015', '0', 0, 0, 1, 7, 0, 0),
(27, 'Office Products', 'Office Products', 'Office Products', 'Office Products', 0, '15-06-2015', '0', 0, 0, 1, 5, 0, 0),
(28, 'Boxes', 'Boxes', 'Boxes', 'Boxes', 0, '15-06-2015', '0', 0, 0, 1, 8, 0, 0),
(29, 'paper1', 'paper1', 'paper1', 'Paper Bag', 0, '16-06-2015', '0', 0, 0, 1, 6, 0, 0),
(30, 'Ecobags', 'Ecobags', 'Ecobags', 'Ecobags', 0, '16-06-2015', '0', 0, 0, 1, 6, 0, 0),
(31, 'Pouches', 'Pouches', 'Pouches', 'Pouches', 0, '16-06-2015', '0', 0, 0, 1, 6, 0, 0);

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
  `filter_name` varchar(100) DEFAULT NULL,
  `filter_values` varchar(100) DEFAULT NULL,
  `cat_ids` varchar(100) DEFAULT NULL,
  `sub_cat_ids` varchar(100) DEFAULT NULL,
  `created_on` varchar(100) DEFAULT NULL,
  `deleted` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filters`
--

INSERT INTO `filters` (`filter_id`, `filter_name`, `filter_values`, `cat_ids`, `sub_cat_ids`, `created_on`, `deleted`) VALUES
(7, 'Color', 'red,green,blue,black', '4,5,6', '3,4,6,7', '23-02-2015', 1),
(8, 'Design', 'Solids,Stripes,Patterns,Formals', '5', '6,7', '23-02-2015', 1),
(9, 'color', 'red,green,blue,white,black', '11', '8', '23-02-2015', 0),
(10, 'GSM', '60,70', '12', '12', '23-03-2015', 0),
(11, 'abc', '', '0', '0', '09-06-2015', 1);

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
  `email` varchar(25) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `first_name`, `last_name`, `password`, `username`, `user_type`, `account_status`, `profile_pic`, `date_of_deactivation`, `role_id`, `email`) VALUES
(18, 'paprobag', 'paprobag', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 'Admin', 'yes', 'upload/users/29615.jpg', '2015-01-29', 1, ''),
(26, 'monica', 'sadafule', 'e10adc3949ba59abbe56e057f20f883e', 'monica', '123456', 'yes', '0', '0000-00-00', 3, ''),
(27, '0', '0', 'd41d8cd98f00b204e9800998ecf8427e', '0', '', NULL, NULL, '0000-00-00', 0, '0'),
(28, '0', '0', 'd41d8cd98f00b204e9800998ecf8427e', '0', '', NULL, NULL, '0000-00-00', 0, '0'),
(29, '0', '0', 'd41d8cd98f00b204e9800998ecf8427e', '0', '', NULL, NULL, '0000-00-00', 0, '0'),
(30, '0', '0', 'd41d8cd98f00b204e9800998ecf8427e', '0', '', NULL, NULL, '0000-00-00', 0, '0'),
(31, '0', 'singh', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', '', NULL, NULL, '0000-00-00', 0, 'ashussingh91@gmail.com'),
(32, '0', 'singh', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', '', NULL, NULL, '0000-00-00', 0, 'ashussingh91@gmail.com'),
(33, '0', 'singh', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', '', NULL, NULL, '0000-00-00', 0, 'ashussingh91@gmail.com'),
(34, '0', 'singh', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', '', NULL, NULL, '0000-00-00', 0, 'ashussingh91@gmail.com'),
(35, '0', 'dsds', '202cb962ac59075b964b07152d234b70', 'sddsd', '', NULL, NULL, '0000-00-00', 0, 'dsdsa@ff.com');

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
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(100) DEFAULT NULL,
  `prod_description` varchar(500) DEFAULT NULL,
  `prod_short_description` varchar(200) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `section_id` int(11) NOT NULL,
  `prod_sub_categories` int(11) DEFAULT NULL,
  `prod_sku` varchar(100) DEFAULT NULL,
  `prod_price` varchar(100) DEFAULT NULL,
  `prod_tax_class` varchar(100) DEFAULT NULL,
  `prod_status` int(11) DEFAULT '0',
  `prod_meta_title` varchar(100) DEFAULT NULL,
  `prod_meta_keyword` varchar(100) DEFAULT NULL,
  `prod_meta_description` varchar(200) DEFAULT NULL,
  `prod_image` varchar(100) DEFAULT NULL,
  `prod_image1` varchar(100) DEFAULT NULL,
  `prod_image2` varchar(100) DEFAULT NULL,
  `prod_image3` varchar(100) DEFAULT NULL,
  `prod_image4` varchar(100) DEFAULT NULL,
  `prod_reviews` varchar(100) DEFAULT NULL,
  `prod_on_home` int(11) DEFAULT '0',
  `created_on` date DEFAULT NULL,
  `prod_sell_price` varchar(100) DEFAULT NULL,
  `prod_qty` varchar(100) DEFAULT NULL,
  `prod_stock` varchar(100) DEFAULT NULL,
  `require_shipping` varchar(100) DEFAULT NULL,
  `prod_shipping_price` varchar(100) DEFAULT NULL,
  `prod_discount` varchar(100) DEFAULT NULL,
  `deleted` int(11) DEFAULT '0',
  `filter_id` int(11) DEFAULT NULL,
  `filter_val` varchar(100) DEFAULT NULL,
  `ready_to_deliver_tabs` int(11) DEFAULT NULL,
  `ready_to_print` int(11) DEFAULT '0',
  `sub_sub_cat_id` int(11) DEFAULT NULL,
  `complete_the_look` int(11) NOT NULL,
  `taggings` int(11) NOT NULL,
  `prod_customizable` int(11) NOT NULL,
  `url_for_product_details` varchar(100) NOT NULL,
  `prod_gift_card` int(11) NOT NULL,
  `prod_gift_code` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `sold_by` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=169 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `prod_description`, `prod_short_description`, `cat_id`, `section_id`, `prod_sub_categories`, `prod_sku`, `prod_price`, `prod_tax_class`, `prod_status`, `prod_meta_title`, `prod_meta_keyword`, `prod_meta_description`, `prod_image`, `prod_image1`, `prod_image2`, `prod_image3`, `prod_image4`, `prod_reviews`, `prod_on_home`, `created_on`, `prod_sell_price`, `prod_qty`, `prod_stock`, `require_shipping`, `prod_shipping_price`, `prod_discount`, `deleted`, `filter_id`, `filter_val`, `ready_to_deliver_tabs`, `ready_to_print`, `sub_sub_cat_id`, `complete_the_look`, `taggings`, `prod_customizable`, `url_for_product_details`, `prod_gift_card`, `prod_gift_code`, `sub_cat_id`, `sold_by`) VALUES
(70, 'Gift Bags', '<p>Gift Bags</p>\r\n', 'Gift Bags', 23, 0, 16, 'Gift Bags', '100', NULL, 0, 'Gift Bags', 'Gift Bags', 'Gift Bags', 'upload/products/4acbedbe977480d19b7b682d4878cae2.jpg', 'upload/products/f2e939d15e4f4d852c246293137196be.jpg', 'upload/products/f4ef8355f2db482222fe8d3a030e2279.jpg', 'upload/products/c292b3e9629fee6bbb741eb109321cf8.jpg', 'upload/products/8aa168167e983b0cb8b753e7ce8f0307.jpg', NULL, 0, '0000-00-00', '100', '4', '', '1', '100', '50', 0, 0, '0', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, ''),
(71, 'Jute Bags', '<p>Jute Bags</p>\r\n', 'Jute Bags', 11, 0, 8, 'Jute Bags', '100', NULL, 0, 'Jute Bags', 'Jute Bags', 'Jute Bags', 'upload/products/809e9662b4e80c26d6d720f9cb956809.jpg', 'upload/products/64dc9a6c0360fbe40c49a20e4c0aaa6f.jpg', 'upload/products/284c1ffedc349416c5a95b82a0f6a6d7.jpg', 'upload/products/7ad45ac2157d72801438b07dffcbbb20.jpg', '0', NULL, 0, '0000-00-00', '50', '234', '', '1', '100', '50', 1, 9, '0', 1, 0, NULL, 0, 0, 0, '', 0, 0, 0, ''),
(72, 'Handmade Bags', '<p>Handmade Bags</p>\r\n', 'Handmade Bags', 11, 0, 8, 'Handmade Bags', '100', NULL, 0, 'Handmade Bags', 'Handmade Bags', 'Handmade Bags', 'upload/products/f77ecc17109b1b806350eb7e7bbfd861.jpg', 'upload/products/409cc060198690137a12782c09282608.jpg', 'upload/products/09ba3f0df1447f40e98674ba9d62c747.jpg', 'upload/products/52c670999cdef4b09eb656850da777c4.jpg', 'upload/products/e557bfa4e959dc5025f60ee6f5cb4298.jpg', NULL, 0, '0000-00-00', '50', '123', '', '1', '100', '50', 0, 9, '0', 1, 0, NULL, 0, 0, 0, '', 0, 0, 0, ''),
(73, 'Canvas Bags', '<p>Canvas Bags</p>\r\n', 'Canvas Bags', 11, 0, 8, 'Canvas Bags', '100', NULL, 0, 'Canvas Bags', 'Canvas Bags', 'Canvas Bags', 'upload/products/4c9d1fbce4890fc2731b6a61262313b1.jpg', 'upload/products/c1502ae5a4d514baec129f72948c266e.jpg', 'upload/products/7651301cabf91a1be8e3cf0b72e8734f.jpg', 'upload/products/0b9dcc39ddecd3359566b59d3c9a6b9c.jpg', 'upload/products/587b7b833034299fdd5f4b10e7dc9fca.jpg', NULL, 0, '0000-00-00', '50', '123', '', '1', '100', '50', 0, 9, '0', 1, 0, NULL, 0, 0, 0, '', 0, 0, 0, ''),
(74, 'Handmade Diaries', '<p>Handmade Diaries</p>\r\n', 'Handmade Diaries', 11, 0, 8, 'Handmade Diaries', '', NULL, 0, 'Handmade Diaries', 'Handmade Diaries', 'Handmade Diaries', 'upload/products/7e909d0e18cec1ad8ad9076be0b669c2.jpg', 'upload/products/d185c5ed37536ac0063f735f7a15dd24.jpg', 'upload/products/ad16fe8f92f051afbf656271afd7872d.jpg', 'upload/products/2adee3823fe0b1c49ce2b4124cdcecda.jpg', 'upload/products/b88524c1561b782a1a78bd24d1712ffb.jpg', NULL, 0, '0000-00-00', '', '', '', '1', '', '', 0, 9, '0', 1, 0, NULL, 0, 0, 0, '', 0, 0, 0, ''),
(75, 'Frames', '<p>Frames</p>\r\n', 'Frames', 11, 0, 8, 'Frames', '100', NULL, 0, 'Frames', 'Frames', 'Frames', 'upload/products/3fb04953d95a94367bb133f862402bce.jpg', 'upload/products/63c34979acf3fe9ef1f8faa3f43ca5f7.jpg', 'upload/products/8de87e06e082806f690692c0ca47d3cc.jpg', 'upload/products/9a912f218d27a625d946ed56081d9123.jpg', 'upload/products/6ac37313e074d4fa4c73335747f35fa1.jpg', NULL, 0, '0000-00-00', '100', '234', '', '1', '100', '50', 0, 9, '0', 1, 0, NULL, 0, 0, 0, '', 0, 0, 0, ''),
(76, 'Lamps', '<p>Lamps</p>\r\n', 'Lamps', 11, 0, 8, 'Lamps', '100', NULL, 0, 'Lamps', 'Lamps', 'Lamps', 'upload/products/36ac2b589744fa94bfe694b604971bf0.jpg', 'upload/products/677fa4059ee76333f9bb9a7920aef719.jpg', 'upload/products/e347d981d19e6088b67f640ce48c4c32.jpg', 'upload/products/4ac20f72e05b86b3dc759608b60f5d67.jpg', 'upload/products/e2e14235335d2c0aa5f6855e339233d9.jpg', NULL, 0, '0000-00-00', '40', '234', '', '1', '100', '60', 0, 9, '0', 1, 0, NULL, 0, 0, 0, '', 0, 0, 0, ''),
(77, 'Wood Boxes', '<p>Wood Boxes</p>\r\n', 'Wood Boxes', 11, 0, 8, 'Wood Boxes', '200', NULL, 0, 'Wood Boxes', 'Wood Boxes', 'Wood Boxes', 'upload/products/aa6bd2e165570e4e692173ebf219c803.jpg', 'upload/products/14edc6ebfdae2e23bbed83d67f50e983.jpg', 'upload/products/e11e328234b5eeffca4362f9e364da0f.jpg', 'upload/products/3a93a609b97ec0ab0ff5539eb79ef33a.jpg', 'upload/products/8735c937a659ef5138a7f5bd7bf59ae6.jpg', NULL, 0, '0000-00-00', '180', '234', '', '1', '100', '10', 0, 9, '0', 1, 0, NULL, 0, 0, 0, '', 0, 0, 0, ''),
(78, 'Brown Kraft bags', '<p>Brown Kraft bags</p>\r\n', 'Brown Kraft bags', 12, 0, 12, 'Brown Kraft bags', '400', NULL, 0, 'Brown Kraft bags', 'Brown Kraft bags', 'Brown Kraft bags', 'upload/products/c9db91a33f7c9b95eeb17aa5d3cdef5c.jpg', 'upload/products/03fcd68e5673f08be96d2b6bb5be8261.jpg', 'upload/products/e90472e9ea9853ecd17b1c9ab92b1c86.jpg', 'upload/products/d58f855fdcc76daf232aee454c4e59f7.jpg', '', NULL, 0, '0000-00-00', '400', '234', '', '1', '100', '50', 0, 0, '0', 3, 0, 0, 0, 0, 0, '', 0, 0, 0, ''),
(79, 'White Kraft bags', '<p>White Kraft bags</p>\r\n', 'White Kraft bags', 11, 0, 8, 'White Kraft bags', '500', NULL, 0, 'White Kraft bags', 'White Kraft bags', 'White Kraft bags', 'upload/products/5a4e1f98b2c8560d0a4d8206f4fa2f09.jpg', '', '', '', '', NULL, 0, '0000-00-00', '500', '', '', '1', '', '', 0, 9, '0', 3, 0, NULL, 0, 0, 0, '', 0, 0, 0, ''),
(80, 'Color Kraft', '<p>Color Kraft</p>\r\n', 'Color Kraft', 11, 0, 8, 'Color Kraft', '200', NULL, 0, 'Color Kraft', 'Color Kraft', 'Color Kraft', 'upload/products/74ad61495004090c5043987b671d1dda.jpg', '', '', '', '', NULL, 0, '0000-00-00', '200', '', '', '1', '', '', 0, 9, '0', 3, 0, NULL, 0, 0, 0, '', 0, 0, 0, ''),
(81, 'Glossy Bags', '<p>Glossy Bags</p>\r\n', 'Glossy Bags', 11, 0, 8, 'Glossy Bags', '200', NULL, 0, 'Glossy Bags', 'Glossy Bags', 'Glossy Bags', 'upload/products/debcaf71bee6f0241371e32f2620b2dd.jpg', 'upload/products/a8884e9c752930207aeea09cc88b3988.jpg', '', '', '', NULL, 0, '0000-00-00', '200', '4', '', '1', '100', '50', 0, 9, '0', 3, 0, NULL, 0, 0, 0, '', 0, 0, 0, ''),
(82, 'Envelopes', '<p>Envelopes</p>\r\n', 'Envelopes', 11, 0, 8, 'Envelopes', '600', NULL, 0, 'Envelopes', 'Envelopes', 'Envelopes', 'upload/products/362387494f6be6613daea643a7706a42.jpg', '0', '0', '0', '0', NULL, 0, '0000-00-00', '1500', '', '', '1', '', '', 0, 9, '0', 3, 0, NULL, 0, 0, 0, '', 0, 0, 0, ''),
(83, 'Boxes', '<p>Boxes</p>\r\n', 'Boxes', 11, 0, 8, 'Boxes', '500', NULL, 0, 'Boxes', 'Boxes', 'Boxes', 'upload/products/7b308824b9a5a738569e0908bd7c9656.jpg', '0', '0', '0', '0', NULL, 0, '0000-00-00', '', '', '', '1', '', '', 0, 9, '0', 3, 0, NULL, 0, 0, 0, '', 0, 0, 0, ''),
(84, 'Jute bags', '<p>Jute bags</p>\r\n', 'Jute bags', 11, 0, 8, 'Jute bags', '400', NULL, 0, 'Jute bags', 'Jute bags', 'Jute bags', 'upload/products/9a1158154dfa42caddbd0694a4e9bdc8.jpg', '', '', '', '', NULL, 0, '0000-00-00', '400', '', '', '1', '', '', 1, 9, '0', 1, 0, NULL, 0, 0, 0, '', 0, 0, 0, ''),
(85, 'Non Woven Bags', '<p>Non Woven Bags</p>\r\n', 'Non Woven Bags', 11, 0, 8, 'Non Woven Bags', '300', NULL, 0, 'Non Woven Bags', 'Non Woven Bags', 'Non Woven Bags', 'upload/products/6d0ca152a941f960431082ec429f6f11.jpg', '0', '0', '0', '0', NULL, 0, '0000-00-00', '', '', '', '1', '', '', 1, 9, '0', 3, 0, NULL, 0, 0, 0, '', 0, 0, 0, ''),
(87, 'Non Woven Bags', '<p>Non Woven Bags</p>\r\n', 'Non Woven Bags', 11, 0, 8, 'Non Woven Bags', '100', NULL, 0, 'Non Woven Bags', 'Non Woven Bags', 'Non Woven Bags', 'upload/products/4bfbd52f4e8466dc12aaf30b7e057b66.jpg', '0', '0', '0', '0', NULL, 0, '0000-00-00', '100', '', '', '1', '', '0', 1, 9, '9', 2, 0, NULL, 0, 0, 0, '', 0, 0, 0, ''),
(88, 'Diaries', '<p>Diaries</p>\r\n', 'Diaries', 11, 0, 8, 'Diaries', '100', NULL, 0, 'Diaries', 'Diaries', 'Diaries', 'upload/products/fc7079c59bf3610c28028522c22f6ef8.jpg', '0', '0', '0', '0', NULL, 0, '0000-00-00', '100', '', '', '1', '', '0', 1, 9, '0', 2, 0, NULL, 0, 0, 0, '', 0, 0, 0, ''),
(89, 'Jute Bags', '<p>Jute Bags</p>\r\n', 'Jute Bags', 11, 0, 8, 'Jute Bags', '200', NULL, 0, 'Jute Bags', 'Jute Bags', 'Jute Bags', 'upload/products/65f148c815a4ebfaf8eb150460ba94fc.jpg', 'upload/products/8cbd005a556ccd4211ce43f309bc0eac.jpg', '0', '0', '0', NULL, 0, '0000-00-00', '100', '4', '', '1', '100', '95', 1, 9, '0', 1, 0, NULL, 0, 0, 0, '', 0, 0, 0, ''),
(90, 'Envelopes', '<p>Envelopes</p>\r\n', 'Envelopes', 11, 0, 8, 'Envelopes', '200', NULL, 0, 'Envelopes', 'Envelopes', 'Envelopes', 'upload/products/8d6fd71d81a15e4faaa1078845097647.jpg', '0', '0', '0', '0', NULL, 0, '0000-00-00', '100', '4', '', '1', '100', '50', 1, 9, '0', 1, 0, NULL, 0, 0, 0, '', 0, 0, 0, ''),
(91, 'Envelopes', '<p>Envelopes</p>\r\n', 'Envelopes', 11, 0, 8, 'Envelopes', '100', NULL, 0, 'Envelopes', 'Envelopes', 'Envelopes', 'upload/products/1e932f24dc0aa4e7a6ac2beec387416d.jpg', '0', '0', '0', '0', NULL, 0, '0000-00-00', '100', '4', '', '1', '100', '50', 1, 9, '0', 2, 0, NULL, 0, 0, 0, '', 0, 0, 0, ''),
(92, 'Gift Bags', '<p>Gift Bags</p>\r\n', 'Gift Bags', 12, 0, 9, 'Gift Bags', '200', NULL, 0, 'Gift Bags', 'Gift Bags', 'Gift Bags', 'upload/products/0a7428310ebcbb3b8d6760fe98b7158e.jpg', '', '', '', '', NULL, 0, '0000-00-00', '200', '4', '', '1', '100', '50', 1, 0, '0', 2, 0, NULL, 0, 0, 0, '', 0, 0, 0, ''),
(93, 'Color Bags', '<p>Color Bags</p>\r\n', 'Color Bags', 12, 0, 10, 'Color Bags', '200', NULL, 0, 'Color Bags', 'Color Bags', 'Color Bags', 'upload/products/02b1be0d48924c327124732726097157.jpg', '', '', '', '', NULL, 0, '0000-00-00', '200', '4', '', '1', '100', '50', 1, 0, '0', 2, 0, NULL, 0, 0, 0, '', 0, 0, 0, ''),
(94, 'Lamps', '<p>Lamps</p>\r\n', 'Lamps', 11, 0, 8, 'Lamps', '400', NULL, 0, 'Lamps', 'Lamps', 'Lamps', 'upload/products/e05baf3e0c3214593c5ee81af5917770.jpg', '', '', '', '', NULL, 0, '0000-00-00', '400', '4', '', '1', '100', '50', 1, 9, '0', 2, 0, NULL, 0, 0, 0, '', 0, 0, 0, ''),
(95, 'Jute Bags', '<p>Jute Bags</p>\r\n', 'Jute Bags', 11, 0, 0, 'Jute Bags', '200', NULL, 0, 'Jute Bags', 'Jute Bags', 'Jute Bags', 'upload/products/cfe04034c4af619cfabd5f2c785131d2.jpg', '', '', '', '', NULL, 0, '0000-00-00', '200', '4', '', '1', '100', '50', 1, 0, '0', 3, 0, NULL, 0, 0, 0, '', 0, 0, 0, ''),
(96, 'Frames', '<p>Frames</p>\r\n', 'Frames', 11, 0, 8, 'Frames', '200', NULL, 0, 'Frames', 'Frames', 'Frames', 'upload/products/e87152a7cbeb2c3262d51598e1de52d5.jpg', '', '', '', '', NULL, 0, '0000-00-00', '200', '4', '', '1', '100', '50', 1, 9, '0', 2, 0, NULL, 0, 0, 0, '', 0, 0, 0, ''),
(97, 'Jute Bags', '<p>Jute Bags</p>\r\n', 'Jute Bags', 12, 0, 0, 'Jute Bags', '200', NULL, 0, 'Jute Bags', 'Jute Bags', 'Jute Bags', 'upload/products/a9f7b62f1fa0212d6809420dc83023e8.jpg', '', '', '', '', NULL, 0, '0000-00-00', '200', '4', '', '1', '100', '50', 1, 0, '0', 2, 0, NULL, 0, 0, 0, '', 0, 0, 0, ''),
(98, 'mm', '<p>mmm</p>\r\n', 'mmm', 12, 0, 1, 'mmm', '4234', NULL, 0, 'mmm', 'mmm', 'mmm', 'upload/products/544defa9fddff50c53b71c43e0da72be.jpg', '0', '0', '0', '0', NULL, 0, '0000-00-00', '234', '', '', '1', '', '94.4733112895607', 1, 0, '0', 3, 0, NULL, 0, 0, 0, '', 0, 0, 0, ''),
(104, 'box', '<p>box</p>\r\n', 'dede', 19, 0, 1, 'edf', '120', NULL, 0, 'box', 'box', 'box', 'upload/products/e19347e1c3ca0c0b97de5fb3b690855a.jpg', 'upload/products/827db779e3e645101720d62feaea0cde.jpg', '0', '0', '0', NULL, 0, '0000-00-00', '100', '1', '', '1', '20', '16.666666666666668', 1, 0, '0', 0, 1, 0, 0, 0, 0, '', 0, 0, 0, ''),
(105, 'new_box', '<p>new_box</p>\r\n', 'njhiu', 14, 5, 0, 'Boxes', '200', NULL, 0, 'new_box', 'new_box', 'new_box', 'upload/products/9040276ea7561f9eb34bc0d3c32f47df.jpg', 'upload/products/0125141592fa9ededc665c55d9958f69.jpg', 'upload/products/9833dfe00e523737467c90974b3ff70c.jpg', 'upload/products/8fecb20817b3847419bb3de39a609afe.jpg', 'upload/products/e988d81b705df34d7735e84bdd0220f9.jpg', NULL, 0, '0000-00-00', '180', '20', '', '1', '20', '10.00', 1, 0, NULL, NULL, 0, NULL, 0, 1, 0, 'higuygy.com', 0, 0, 0, ''),
(106, 'pouch', '<p>pouch</p>\r\n', 'drdfg', 15, 5, 0, 'pouch', '400', NULL, 0, 'pouch', 'pouch', 'pouch', 'upload/products/306480606119b6515bb51e242379602a.png', 'upload/products/5b347a27844fa303dd8c02b7da1c9206.png', '0', '0', '0', NULL, 0, '0000-00-00', '350', '30', '', '1', '30', '12.50', 1, 0, NULL, NULL, 0, NULL, 0, 2, 0, 'bygy.com', 0, 0, 0, ''),
(137, 'mnju', '<p>nbhj</p>\r\n', 'nbhj', 14, 5, 0, 'nbhj', '400', NULL, 0, 'nbhj', 'nbhj', 'nbhj', 'upload/products/5a794da4f056dcd732eb706e9ef991d7.jpg', '0', '0', '0', '0', NULL, 0, '0000-00-00', '350', '2', '', '1', '20', '12.50', 1, 0, NULL, NULL, 0, NULL, 0, 2, 0, 'nbhj.com', 0, 0, 0, ''),
(141, 'custom_image', '<p>custom_image</p>\r\n', 'custom_image', 14, 5, 0, 'custom_image', '800', NULL, 0, 'custom_image', 'custom_image', 'custom_image', 'upload/products/a753a43564c29148df3150afb4475440.png', '0', '0', '0', '0', NULL, 0, '0000-00-00', '750', '50', '', '1', '20', '6.25', 0, 0, NULL, NULL, 0, NULL, 0, 1, 0, 'custom_image', 0, 0, 0, ''),
(143, 'new_offer', '<p>new_offer</p>\r\n', 'new_offer', 24, 7, 24, 'new_offer', '500', NULL, 0, 'new_offer', 'new_offer', 'new_offer', 'upload/products/88e71a1993534c0fa5327a63fdeb75bd.jpg', '0', '0', '0', '0', NULL, 0, '0000-00-00', '480', '30', '', '1', '20', '4.00', 0, NULL, NULL, NULL, 0, NULL, 0, 1, 1, 'new_offer.com', 0, 0, 0, ''),
(144, 'offers', '<p>offers</p>\r\n', 'offers', 25, 7, 25, 'offers', '500', NULL, 0, 'offers', 'offers', 'offers', 'upload/products/bca82e41ee7b0833588399b1fcd177c7.jpg', '0', '0', '0', '0', NULL, 0, '0000-00-00', '480', '50', '', '1', '50', '4.00', 0, NULL, NULL, NULL, 0, NULL, 0, 1, 1, 'offers.com', 0, 0, 0, ''),
(145, 'wholesale', '<p>wholesale</p>\r\n', 'wholesale', 26, 7, 26, 'wholesale', '700', NULL, 0, 'wholesale', 'wholesale', 'wholesale', 'upload/products/43a0340391b5cdbed42a609a0c2361a5.jpg', '0', '0', '0', '0', NULL, 0, '0000-00-00', '670', '60', '', '1', '20', '4.29', 0, NULL, NULL, NULL, 0, NULL, 0, 1, 1, 'wholesale', 0, 0, 0, ''),
(146, 'customize1', '<p>customize1</p>\r\n', 'customize1', 14, 5, 14, 'customize1', '400', NULL, 0, 'customize1', 'customize1', 'customize1', 'upload/products/0aa1883c6411f7873cb83dacb17b0afc.jpg', '0', '0', '0', '0', NULL, 0, '0000-00-00', '350', '4', '', '1', '20', '12.50', 1, NULL, NULL, NULL, 0, NULL, 0, 1, 0, 'customize1', 0, 0, 8, ''),
(147, 'custom', '<p>custom</p>\r\n', 'custom', 14, 5, 14, 'custom', '400', NULL, 0, 'custom', 'custom', 'custom', 'upload/products/b72a5a099433a2099fc3d92f6ad3accf.jpg', '0', '0', '0', '0', NULL, 1, '0000-00-00', '350', '20', '', '1', '20', '12.50', 0, NULL, NULL, NULL, 0, NULL, 0, 1, 0, 'custom.com', 0, 0, 8, ''),
(148, 'eco bags', '<p>eco bags</p>\r\n', 'eco bags', 15, 5, 15, 'eco bags', '500', NULL, 0, 'eco bags', 'eco bags', 'eco bags', 'upload/products/52720e003547c70561bf5e03b95aa99f.jpg', '', '', '', '', NULL, 1, '0000-00-00', '500', '50', '', '1', '20', '4', 0, NULL, NULL, NULL, 0, NULL, 0, 1, 0, 'eco bags.com', 0, 0, 9, ''),
(149, 'New_Boxes', '<p>New_Boxes</p>\r\n', 'New_Boxes', 16, 5, 16, 'New_Boxes', '400', NULL, 0, 'New_Boxes', 'New_Boxes', 'New_Boxes', 'upload/products/5b948b56ff119949410b6bd8acae9b66.jpg', '0', '0', '0', '0', NULL, 1, '0000-00-00', '350', '20', '', '1', '20', '12.50', 0, NULL, NULL, NULL, 0, NULL, 0, 1, 0, 'New_Boxes.com', 0, 0, 11, ''),
(150, 'New_pouches', '<p>New_pouches</p>\r\n', 'New_pouches', 19, 5, 19, 'New_pouches', '500', NULL, 0, 'New_pouches', 'New_pouches', 'New_pouches', 'upload/products/1c66f4627f1b9679f8db47d1287d7e98.jpg', '', '', '', '', NULL, 1, '0000-00-00', '500', '20', '', '1', '20', '4', 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 'New_pouches.com', 0, 0, 0, ''),
(158, 'officeProduct', '<p>officeProduct</p>\r\n', 'officeProduct', 27, 5, 27, 'officeProduct', '400', NULL, 0, 'officeProduct', 'officeProduct', 'officeProduct', 'upload/products/7b900d73c557c7dab192f70ee782dc92.jpg', '0', '0', '0', '0', NULL, 1, '0000-00-00', '350', '30', '', '1', '20', '12.50', 0, NULL, NULL, NULL, 0, NULL, 0, 1, 0, 'officeProduct.com', 0, 0, 0, ''),
(162, 'PaperBag', '<p>mxkasx</p>\r\n', 'mxkasx', 23, 6, 23, 'mxkasx', '400', NULL, 0, 'mxkasx', 'mxkasx', 'mxkasx', 'upload/products/ee091bf8c15bf02e47ba4b69d587fd03.png', '0', '0', '0', '0', NULL, 0, '0000-00-00', '350', '20', '', '1', '20', '12.50', 0, NULL, NULL, NULL, 0, NULL, 0, 1, 0, 'mxkasx', 0, 0, 16, ''),
(164, 'Ecobags', '<p>dwqdw</p>\r\n', 'dwqdw', 23, 6, 23, 'dwqdw', '300', NULL, 0, 'dwqdw', 'dwqdw', 'dwqdw', 'upload/products/7cb3c7c270c0a64cb5d19dbe79e769c9.jpg', '0', '0', '0', '0', NULL, 0, '0000-00-00', '250', '20', '', '1', '20', '16.67', 0, NULL, NULL, NULL, 0, NULL, 0, 1, 0, 'dwqdw.com', 0, 0, 16, 'abs'),
(165, 'Ready_prod', '<p>Ready_prod</p>\r\n', 'Ready_prod', 28, 8, 28, 'Ready_prod', '700', NULL, 0, 'Ready_prod', 'Ready_prod', 'Ready_prod', 'upload/products/7cf91b300ff3ecef82c59dd47b89253a.jpg', '0', '0', '0', '0', NULL, 0, '0000-00-00', '250', '30', '', '1', '35', '64.29', 0, NULL, NULL, NULL, 0, NULL, 0, 1, 0, 'Ready_prod.com', 0, 0, 0, ''),
(166, 'New_Prod', '<p>New_Prod</p>\r\n', 'New_Prod', 28, 8, 28, 'New_Prod', '500', NULL, 0, 'New_Prod', 'New_Prod', 'New_Prod', 'upload/products/8f3f311cc38b1c4ec1c8efe173a94845.jpg', '0', '0', '0', '0', NULL, 0, '0000-00-00', '350', '4', '', '1', '50', '30.00', 0, NULL, NULL, NULL, 0, NULL, 0, 2, 0, 'New_Prod.com', 0, 0, 0, ''),
(167, 'Pouches', '<p>Pouches</p>\r\n', 'Pouches', 31, 6, 31, 'Pouches', '500', NULL, 0, 'Pouches', 'Pouches', 'Pouches', 'upload/products/493733b1ea397d196293bbf12b839a4f.png', '0', '0', '0', '0', NULL, 0, '0000-00-00', '480', '10', '', '1', '20', '4.00', 0, NULL, NULL, NULL, 0, NULL, 0, 1, 0, 'Pouches.com', 0, 0, 0, ''),
(168, 'Eco_product', '<p>Eco_product</p>\r\n', 'Eco_product', 31, 6, 31, 'Eco_product', '400', NULL, 0, 'Eco_product', 'Eco_product', 'Eco_product', 'upload/products/cef21a66d373d6285f35519d5260c676.jpg', '', '', '', '', NULL, 1, '0000-00-00', '400', '50', '', '1', '30', '12.5', 1, NULL, NULL, NULL, 0, NULL, 0, 1, 0, 'Eco_product.com', 0, 0, 0, 'pqr');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `role_id` int(11) NOT NULL,
  `role` varchar(100) DEFAULT NULL,
  `role_rights` varchar(50) DEFAULT NULL,
  `active` varchar(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role`, `role_rights`, `active`) VALUES
(1, 'Admin', 'on,on,on,on', 'yes'),
(2, 'Customer', 'on,on,off,off', 'yes'),
(3, 'Staff', 'on,on,on,off', 'yes'),
(4, 'Agent', 'on,on,off,off', 'yes');

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
-- Table structure for table `subcategories`
--

CREATE TABLE IF NOT EXISTS `subcategories` (
  `sub_cat_id` int(11) NOT NULL,
  `sub_cat_name` varchar(100) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_meta_title` varchar(100) DEFAULT NULL,
  `sub_cat_meta_keywords` varchar(100) DEFAULT NULL,
  `sub_cat_meta_description` varchar(100) DEFAULT NULL,
  `created_on` varchar(100) DEFAULT NULL,
  `deleted` int(11) DEFAULT '0',
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`sub_cat_id`, `sub_cat_name`, `cat_id`, `sub_cat_meta_title`, `sub_cat_meta_keywords`, `sub_cat_meta_description`, `created_on`, `deleted`, `section_id`) VALUES
(8, 'D-Cut Handle Bags', 14, 'sfsdf', 'sdfdsf', 'sdfsdf', '10-03-2015', 0, 5),
(9, 'Vertical Loop Handel Bags', 15, 'Shopping Carry Bags', 'Shopping Carry Bags', 'Shopping Carry Bags', '10-03-2015', 0, 5),
(10, 'Horizontal Loop Handle Bags', 20, 'Handmade Paper Bags', 'Handmade Paper Bags', 'Handmade Paper Bags', '10-03-2015', 0, 0),
(11, 'W & U Cut Bags', 16, 'W & U Cut Bags', 'W & U Cut Bags', 'W & U Cut Bags', '10-03-2015', 0, 5),
(12, 'Brown Kraft Bags', 14, 'Brown Kraft Bags', 'Brown Kraft Bags', 'Brown Kraft Bags', '10-03-2015', 0, 5),
(13, 'White Kraft Bags', 14, 'White Kraft Bags', 'White Kraft Bags', 'White Kraft Bags', '11-03-2015', 0, 5),
(14, 'Color Kraft Bags', 12, 'Color Kraft Bags', 'Color Kraft Bags', 'Color Kraft Bags', '11-03-2015', 0, 0),
(15, 'Glossy Paper Bags', 12, 'Glossy Paper Bags', 'Glossy Paper Bags', 'Glossy Paper Bags', '11-03-2015', 0, 0),
(16, 'Gift bag1', 23, 'Gift bag1', 'Gift bag1', 'Gift bag1', '12-03-2015', 0, 6),
(17, 'Gift bag2', 23, 'Gift bag2', 'Gift bag2', 'Gift bag2', '12-03-2015', 0, 6),
(18, 'Natural Kraft Bags', 31, 'Natural Kraft Bags', 'Natural Kraft Bags', 'Natural Kraft Bags', '16-03-2015', 0, 0),
(19, 'White Kraft Bags', 31, 'White Kraft Bags', 'White Kraft Bags', 'White Kraft Bags', '16-03-2015', 0, 0),
(20, 'Color Kraft Bags', 31, 'Color Kraft Bags', 'Color Kraft Bags', 'Color Kraft Bags', '16-03-2015', 0, 0),
(21, 'D-cut Non Woven Bags', 32, 'D-cut Non Woven Bags', 'D-cut Non Woven Bags', 'D-cut Non Woven Bags', '16-03-2015', 0, 0),
(22, 'D-cut Non Woven Bags', 32, 'D-cut Non Woven Bags', 'D-cut Non Woven Bags', 'D-cut Non Woven Bags', '16-03-2015', 0, 0),
(23, 'Shopping Carry Bags', 26, 'Shopping Carry Bags', 'Shopping Carry Bags', 'Shopping Carry Bags', '16-03-2015', 0, 0),
(24, 'Handmade Paper Bags', 26, 'Handmade Paper Bags', 'Handmade Paper Bags', 'Handmade Paper Bags', '17-03-2015', 0, 0),
(25, 'Counter Bags', 12, 'Counter Bags', 'Counter Bags', 'Counter Bags', '25-03-2015', 0, 0),
(32, 'abc', 29, NULL, NULL, NULL, NULL, 0, 6),
(33, 'pqr', 30, NULL, NULL, NULL, NULL, 0, 6);

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
-- Indexes for table `home_details`
--
ALTER TABLE `home_details`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`), ADD KEY `cat_id_fk` (`cat_id`), ADD KEY `subcat_id_fk` (`prod_sub_categories`), ADD KEY `fk_filters` (`filter_id`);

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
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`sub_cat_id`), ADD KEY `cat_fk` (`cat_id`);

--
-- Indexes for table `sub_subcategories`
--
ALTER TABLE `sub_subcategories`
  ADD PRIMARY KEY (`sub_sub_cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
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
  MODIFY `filter_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `home_details`
--
ALTER TABLE `home_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `Sr.No` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=169;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
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

--
-- Constraints for table `products`
--
ALTER TABLE `products`
ADD CONSTRAINT `cat_id_fk` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`),
ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
ADD CONSTRAINT `cat_fk` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
