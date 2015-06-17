-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2015 at 07:44 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) DEFAULT NULL,
  `cat_meta_keywords` varchar(100) DEFAULT NULL,
  `created_on` varchar(100) DEFAULT NULL,
  `deleted` int(11) DEFAULT '0',
  `cat_meta_title` varchar(100) DEFAULT NULL,
  `cat_meta_description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `category_name`, `cat_meta_keywords`, `created_on`, `deleted`, `cat_meta_title`, `cat_meta_description`) VALUES
(4, 'Shirts', 'Shirts', '23-02-2015', 1, 'Shirts', 'shirts'),
(11, 'Jute Bags', 'Jute Bags', '23-02-2015', 0, 'Jute Bags', 'Jute Bags');

-- --------------------------------------------------------

--
-- Table structure for table `filters`
--

CREATE TABLE IF NOT EXISTS `filters` (
  `filter_id` int(11) NOT NULL AUTO_INCREMENT,
  `filter_name` varchar(100) DEFAULT NULL,
  `filter_values` varchar(100) DEFAULT NULL,
  `cat_ids` varchar(100) DEFAULT NULL,
  `sub_cat_ids` varchar(100) DEFAULT NULL,
  `created_on` varchar(100) DEFAULT NULL,
  `deleted` int(11) DEFAULT '0',
  PRIMARY KEY (`filter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `filters`
--

INSERT INTO `filters` (`filter_id`, `filter_name`, `filter_values`, `cat_ids`, `sub_cat_ids`, `created_on`, `deleted`) VALUES
(7, 'Color', 'red,green,blue,black', '4,5,6', '3,4,6,7', '23-02-2015', 1),
(8, 'Design', 'Solids,Stripes,Patterns,Formals', '5', '6,7', '23-02-2015', 1),
(9, 'color', 'red,green,blue,white,black', '11', '8', '23-02-2015', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `account_status` varchar(10) DEFAULT NULL,
  `profile_pic` varchar(100) DEFAULT NULL,
  `date_of_deactivation` date NOT NULL,
  `role_id` int(5) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `first_name`, `last_name`, `password`, `username`, `user_type`, `account_status`, `profile_pic`, `date_of_deactivation`, `role_id`) VALUES
(18, 'paprobag', 'paprobag', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 'Admin', 'yes', 'upload/users/29615.jpg', '2015-01-29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(100) DEFAULT NULL,
  `prod_description` varchar(500) DEFAULT NULL,
  `prod_short_description` varchar(200) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
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
  `created_on` varchar(100) DEFAULT NULL,
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
  PRIMARY KEY (`prod_id`),
  KEY `cat_id_fk` (`cat_id`),
  KEY `subcat_id_fk` (`prod_sub_categories`),
  KEY `fk_filters` (`filter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `prod_description`, `prod_short_description`, `cat_id`, `prod_sub_categories`, `prod_sku`, `prod_price`, `prod_tax_class`, `prod_status`, `prod_meta_title`, `prod_meta_keyword`, `prod_meta_description`, `prod_image`, `prod_image1`, `prod_image2`, `prod_image3`, `prod_image4`, `prod_reviews`, `prod_on_home`, `created_on`, `prod_sell_price`, `prod_qty`, `prod_stock`, `require_shipping`, `prod_shipping_price`, `prod_discount`, `deleted`, `filter_id`, `filter_val`, `ready_to_deliver_tabs`) VALUES
(70, 'Gift Bags', '<p>Gift Bags</p>\r\n', 'Gift Bags', 11, 8, 'Gift Bags', '100', NULL, 0, 'Gift Bags', 'Gift Bags', 'Gift Bags', 'upload/products/4acbedbe977480d19b7b682d4878cae2.jpg', 'upload/products/f2e939d15e4f4d852c246293137196be.jpg', 'upload/products/f4ef8355f2db482222fe8d3a030e2279.jpg', 'upload/products/c292b3e9629fee6bbb741eb109321cf8.jpg', 'upload/products/8aa168167e983b0cb8b753e7ce8f0307.jpg', NULL, 0, '', '50', '4', '', '1', '100', '50', 0, 9, '9', 1),
(71, 'Jute Bags', '<p>Jute Bags</p>\r\n', 'Jute Bags', 11, 8, 'Jute Bags', '100', NULL, 0, 'Jute Bags', 'Jute Bags', 'Jute Bags', 'upload/products/809e9662b4e80c26d6d720f9cb956809.jpg', 'upload/products/64dc9a6c0360fbe40c49a20e4c0aaa6f.jpg', 'upload/products/284c1ffedc349416c5a95b82a0f6a6d7.jpg', 'upload/products/7ad45ac2157d72801438b07dffcbbb20.jpg', '0', NULL, 0, '', '50', '234', '', '1', '100', '50', 1, 9, '0', 1),
(72, 'Handmade Bags', '<p>Handmade Bags</p>\r\n', 'Handmade Bags', 11, 8, 'Handmade Bags', '100', NULL, 0, 'Handmade Bags', 'Handmade Bags', 'Handmade Bags', 'upload/products/f77ecc17109b1b806350eb7e7bbfd861.jpg', 'upload/products/409cc060198690137a12782c09282608.jpg', 'upload/products/09ba3f0df1447f40e98674ba9d62c747.jpg', 'upload/products/52c670999cdef4b09eb656850da777c4.jpg', 'upload/products/e557bfa4e959dc5025f60ee6f5cb4298.jpg', NULL, 0, '', '50', '123', '', '1', '100', '50', 0, 9, '0', 1),
(73, 'Canvas Bags', '<p>Canvas Bags</p>\r\n', 'Canvas Bags', 11, 8, 'Canvas Bags', '100', NULL, 0, 'Canvas Bags', 'Canvas Bags', 'Canvas Bags', 'upload/products/4c9d1fbce4890fc2731b6a61262313b1.jpg', 'upload/products/c1502ae5a4d514baec129f72948c266e.jpg', 'upload/products/7651301cabf91a1be8e3cf0b72e8734f.jpg', 'upload/products/0b9dcc39ddecd3359566b59d3c9a6b9c.jpg', 'upload/products/587b7b833034299fdd5f4b10e7dc9fca.jpg', NULL, 0, '', '50', '123', '', '1', '100', '50', 0, 9, '0', 1),
(74, 'Handmade Diaries', '<p>Handmade Diaries</p>\r\n', 'Handmade Diaries', 11, 8, 'Handmade Diaries', '', NULL, 0, 'Handmade Diaries', 'Handmade Diaries', 'Handmade Diaries', 'upload/products/7e909d0e18cec1ad8ad9076be0b669c2.jpg', 'upload/products/d185c5ed37536ac0063f735f7a15dd24.jpg', 'upload/products/ad16fe8f92f051afbf656271afd7872d.jpg', 'upload/products/2adee3823fe0b1c49ce2b4124cdcecda.jpg', 'upload/products/b88524c1561b782a1a78bd24d1712ffb.jpg', NULL, 0, '', '', '', '', '1', '', '', 0, 9, '0', 1),
(75, 'Frames', '<p>Frames</p>\r\n', 'Frames', 11, 8, 'Frames', '100', NULL, 0, 'Frames', 'Frames', 'Frames', 'upload/products/3fb04953d95a94367bb133f862402bce.jpg', 'upload/products/63c34979acf3fe9ef1f8faa3f43ca5f7.jpg', 'upload/products/8de87e06e082806f690692c0ca47d3cc.jpg', 'upload/products/9a912f218d27a625d946ed56081d9123.jpg', 'upload/products/6ac37313e074d4fa4c73335747f35fa1.jpg', NULL, 0, '', '100', '234', '', '1', '100', '50', 0, 9, '0', 1),
(76, 'Lamps', '<p>Lamps</p>\r\n', 'Lamps', 11, 8, 'Lamps', '100', NULL, 0, 'Lamps', 'Lamps', 'Lamps', 'upload/products/36ac2b589744fa94bfe694b604971bf0.jpg', 'upload/products/677fa4059ee76333f9bb9a7920aef719.jpg', 'upload/products/e347d981d19e6088b67f640ce48c4c32.jpg', 'upload/products/4ac20f72e05b86b3dc759608b60f5d67.jpg', 'upload/products/e2e14235335d2c0aa5f6855e339233d9.jpg', NULL, 0, '', '40', '234', '', '1', '100', '60', 0, 9, '0', 1),
(77, 'Wood Boxes', '<p>Wood Boxes</p>\r\n', 'Wood Boxes', 11, 8, 'Wood Boxes', '200', NULL, 0, 'Wood Boxes', 'Wood Boxes', 'Wood Boxes', 'upload/products/aa6bd2e165570e4e692173ebf219c803.jpg', 'upload/products/14edc6ebfdae2e23bbed83d67f50e983.jpg', 'upload/products/e11e328234b5eeffca4362f9e364da0f.jpg', 'upload/products/3a93a609b97ec0ab0ff5539eb79ef33a.jpg', 'upload/products/8735c937a659ef5138a7f5bd7bf59ae6.jpg', NULL, 0, '', '180', '234', '', '1', '100', '10', 0, 9, '0', 1),
(78, 'Brown Kraft bags', '<p>Brown Kraft bags</p>\r\n', 'Brown Kraft bags', 11, 8, 'Brown Kraft bags', '400', NULL, 0, 'Brown Kraft bags', 'Brown Kraft bags', 'Brown Kraft bags', 'upload/products/c9db91a33f7c9b95eeb17aa5d3cdef5c.jpg', 'upload/products/03fcd68e5673f08be96d2b6bb5be8261.jpg', 'upload/products/e90472e9ea9853ecd17b1c9ab92b1c86.jpg', 'upload/products/d58f855fdcc76daf232aee454c4e59f7.jpg', '', NULL, 0, '', '400', '234', '', '1', '100', '50', 0, 9, '0', 3),
(79, 'White Kraft bags', '<p>White Kraft bags</p>\r\n', 'White Kraft bags', 11, 8, 'White Kraft bags', '500', NULL, 0, 'White Kraft bags', 'White Kraft bags', 'White Kraft bags', 'upload/products/5a4e1f98b2c8560d0a4d8206f4fa2f09.jpg', '', '', '', '', NULL, 0, '', '500', '', '', '1', '', '', 0, 9, '0', 3),
(80, 'Color Kraft', '<p>Color Kraft</p>\r\n', 'Color Kraft', 11, 8, 'Color Kraft', '200', NULL, 0, 'Color Kraft', 'Color Kraft', 'Color Kraft', 'upload/products/74ad61495004090c5043987b671d1dda.jpg', '', '', '', '', NULL, 0, '', '200', '', '', '1', '', '', 0, 9, '0', 3),
(81, 'Glossy Bags', '<p>Glossy Bags</p>\r\n', 'Glossy Bags', 11, 8, 'Glossy Bags', '200', NULL, 0, 'Glossy Bags', 'Glossy Bags', 'Glossy Bags', 'upload/products/debcaf71bee6f0241371e32f2620b2dd.jpg', 'upload/products/a8884e9c752930207aeea09cc88b3988.jpg', '', '', '', NULL, 0, '', '200', '4', '', '1', '100', '50', 0, 9, '0', 3),
(82, 'Envelopes', '<p>Envelopes</p>\r\n', 'Envelopes', 11, 8, 'Envelopes', '600', NULL, 0, 'Envelopes', 'Envelopes', 'Envelopes', 'upload/products/362387494f6be6613daea643a7706a42.jpg', '0', '0', '0', '0', NULL, 0, '', '1500', '', '', '1', '', '', 0, 9, '0', 3),
(83, 'Boxes', '<p>Boxes</p>\r\n', 'Boxes', 11, 8, 'Boxes', '500', NULL, 0, 'Boxes', 'Boxes', 'Boxes', 'upload/products/7b308824b9a5a738569e0908bd7c9656.jpg', '0', '0', '0', '0', NULL, 0, '', '', '', '', '1', '', '', 0, 9, '0', 3),
(84, 'Jute bags', '<p>Jute bags</p>\r\n', 'Jute bags', 11, 8, 'Jute bags', '400', NULL, 0, 'Jute bags', 'Jute bags', 'Jute bags', 'upload/products/9a1158154dfa42caddbd0694a4e9bdc8.jpg', '', '', '', '', NULL, 0, '', '400', '', '', '1', '', '', 0, 9, '0', 1),
(85, 'Non Woven Bags', '<p>Non Woven Bags</p>\r\n', 'Non Woven Bags', 11, 8, 'Non Woven Bags', '300', NULL, 0, 'Non Woven Bags', 'Non Woven Bags', 'Non Woven Bags', 'upload/products/6d0ca152a941f960431082ec429f6f11.jpg', '0', '0', '0', '0', NULL, 0, '', '', '', '', '1', '', '', 0, 9, '0', 3),
(87, 'Non Woven Bags', '<p>Non Woven Bags</p>\r\n', 'Non Woven Bags', 11, 8, 'Non Woven Bags', '100', NULL, 0, 'Non Woven Bags', 'Non Woven Bags', 'Non Woven Bags', 'upload/products/4bfbd52f4e8466dc12aaf30b7e057b66.jpg', '0', '0', '0', '0', NULL, 0, '', '100', '', '', '1', '', '0', 0, 9, '9', 2),
(88, 'Diaries', '<p>Diaries</p>\r\n', 'Diaries', 11, 8, 'Diaries', '100', NULL, 0, 'Diaries', 'Diaries', 'Diaries', 'upload/products/fc7079c59bf3610c28028522c22f6ef8.jpg', '0', '0', '0', '0', NULL, 0, '', '100', '', '', '1', '', '0', 0, 9, '0', 2),
(89, 'Jute Bags', '<p>Jute Bags</p>\r\n', 'Jute Bags', 11, 8, 'Jute Bags', '200', NULL, 0, 'Jute Bags', 'Jute Bags', 'Jute Bags', 'upload/products/65f148c815a4ebfaf8eb150460ba94fc.jpg', 'upload/products/8cbd005a556ccd4211ce43f309bc0eac.jpg', '0', '0', '0', NULL, 0, '', '100', '4', '', '1', '100', '95', 1, 9, '0', 1),
(90, 'Envelopes', '<p>Envelopes</p>\r\n', 'Envelopes', 11, 8, 'Envelopes', '200', NULL, 0, 'Envelopes', 'Envelopes', 'Envelopes', 'upload/products/8d6fd71d81a15e4faaa1078845097647.jpg', '0', '0', '0', '0', NULL, 0, '', '100', '4', '', '1', '100', '50', 1, 9, '0', 1),
(91, 'Envelopes', '<p>Envelopes</p>\r\n', 'Envelopes', 11, 8, 'Envelopes', '100', NULL, 0, 'Envelopes', 'Envelopes', 'Envelopes', 'upload/products/1e932f24dc0aa4e7a6ac2beec387416d.jpg', '0', '0', '0', '0', NULL, 0, '', '100', '4', '', '1', '100', '50', 0, 9, '0', 2),
(92, 'Gift Bags', '<p>Gift Bags</p>\r\n', 'Gift Bags', 11, 8, 'Gift Bags', '200', NULL, 0, 'Gift Bags', 'Gift Bags', 'Gift Bags', 'upload/products/0a7428310ebcbb3b8d6760fe98b7158e.jpg', '0', '0', '0', '0', NULL, 0, '', '100', '4', '', '1', '100', '50', 0, 9, '0', 2),
(93, 'Color Bags', '<p>Color Bags</p>\r\n', 'Color Bags', 11, 8, 'Color Bags', '200', NULL, 0, 'Color Bags', 'Color Bags', 'Color Bags', 'upload/products/02b1be0d48924c327124732726097157.jpg', '0', '0', '0', '0', NULL, 0, '', '100', '4', '', '1', '100', '50', 0, 9, '0', 2),
(94, 'Lamps', '<p>Lamps</p>\r\n', 'Lamps', 11, 8, 'Lamps', '400', NULL, 0, 'Lamps', 'Lamps', 'Lamps', 'upload/products/e05baf3e0c3214593c5ee81af5917770.jpg', '', '', '', '', NULL, 0, '', '400', '4', '', '1', '100', '50', 0, 9, '0', 2),
(95, 'Jute Bags', '<p>Jute Bags</p>\r\n', 'Jute Bags', 11, 8, 'Jute Bags', '200', NULL, 0, 'Jute Bags', 'Jute Bags', 'Jute Bags', 'upload/products/cfe04034c4af619cfabd5f2c785131d2.jpg', '', '', '', '', NULL, 0, '', '200', '4', '', '1', '100', '50', 0, 9, '9', 2),
(96, 'Frames', '<p>Frames</p>\r\n', 'Frames', 11, 8, 'Frames', '200', NULL, 0, 'Frames', 'Frames', 'Frames', 'upload/products/e87152a7cbeb2c3262d51598e1de52d5.jpg', '', '', '', '', NULL, 0, '', '200', '4', '', '1', '100', '50', 0, 9, '0', 2),
(97, 'Jute Bags', '<p>Jute Bags</p>\r\n', 'Jute Bags', 11, 8, 'Jute Bags', '200', NULL, 0, 'Jute Bags', 'Jute Bags', 'Jute Bags', 'upload/products/a9f7b62f1fa0212d6809420dc83023e8.jpg', '0', '0', '0', '0', NULL, 0, '', '100', '4', '', '1', '100', '50', 0, 9, '0', 3);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(100) DEFAULT NULL,
  `role_rights` varchar(50) DEFAULT NULL,
  `active` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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
-- Table structure for table `subcategories`
--

CREATE TABLE IF NOT EXISTS `subcategories` (
  `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_cat_name` varchar(100) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_meta_title` varchar(100) DEFAULT NULL,
  `sub_cat_meta_keywords` varchar(100) DEFAULT NULL,
  `sub_cat_meta_description` varchar(100) DEFAULT NULL,
  `created_on` varchar(100) DEFAULT NULL,
  `deleted` int(11) DEFAULT '0',
  PRIMARY KEY (`sub_cat_id`),
  KEY `cat_fk` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`sub_cat_id`, `sub_cat_name`, `cat_id`, `sub_cat_meta_title`, `sub_cat_meta_keywords`, `sub_cat_meta_description`, `created_on`, `deleted`) VALUES
(3, 'shirt1', 4, 'asfasdasd', 'sdad', 'asdasd', '12-02-2015', 0),
(8, 'bags', 11, 'sfsdf', 'sdfdsf', 'sdfsdf', '23-02-2015', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `cat_id_fk` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`),
  ADD CONSTRAINT `fk_filters` FOREIGN KEY (`filter_id`) REFERENCES `filters` (`filter_id`),
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`),
  ADD CONSTRAINT `subcat_id_fk` FOREIGN KEY (`prod_sub_categories`) REFERENCES `subcategories` (`sub_cat_id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `cat_fk` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
