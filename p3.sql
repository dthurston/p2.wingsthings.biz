-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2013 at 08:22 PM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `wingsthi_p3_wingsthings_biz`
--

-- --------------------------------------------------------

--
-- Table structure for table `booze`
--

CREATE TABLE `booze` (
  `booze_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `proof` int(11) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `distillery_name` varchar(40) DEFAULT NULL,
  `distillery_city` varchar(40) DEFAULT NULL,
  `distillery_state` varchar(2) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`booze_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `booze`
--

INSERT INTO `booze` (`booze_id`, `name`, `size`, `age`, `proof`, `price`, `type`, `distillery_name`, `distillery_city`, `distillery_state`, `url`) VALUES
(1, '1792 Ridgemont Reserve', 750, NULL, 94, 31.95, 1, NULL, NULL, NULL, NULL),
(2, 'Abraham Bowman', 750, NULL, 90, 69.90, 1, NULL, NULL, NULL, NULL),
(3, 'Ancient Age', 375, 4, 80, 5.50, 1, NULL, NULL, NULL, NULL),
(4, 'Ancient Age', 750, 4, 80, 10.95, 1, NULL, NULL, NULL, NULL),
(5, 'Ancient Age', 1000, 4, 80, 11.95, 1, NULL, NULL, NULL, NULL),
(6, 'Ancient Age', 1750, 4, 80, 22.95, 1, NULL, NULL, NULL, NULL),
(7, 'Ancient Age Traveler', 750, 4, 80, 10.95, 1, NULL, NULL, NULL, NULL),
(8, 'Ancient Ancient Age', 1000, 4, 90, 12.50, 1, NULL, NULL, NULL, NULL),
(9, 'Ancient Ancient Age', 1750, 4, 90, 25.95, 1, NULL, NULL, NULL, NULL),
(10, 'Angel''s Envy Kentucky Straight', 750, NULL, 87, 49.95, 1, NULL, NULL, NULL, NULL),
(11, 'Baker''s', 750, 7, 107, 46.95, 1, NULL, NULL, NULL, NULL),
(12, 'Basil Hayden''s', 750, 8, 80, 41.95, 1, NULL, NULL, NULL, NULL),
(13, 'Benchmark Bourbon #8', 750, NULL, 80, 10.45, 1, NULL, NULL, NULL, NULL),
(14, 'Benchmark Bourbon #8', 1750, NULL, 80, 19.95, 1, NULL, NULL, NULL, NULL),
(15, 'Blanton Single Barrel', 375, NULL, 93, 22.95, 1, NULL, NULL, NULL, NULL),
(16, 'Blanton Single Barrel', 750, NULL, 93, 55.95, 1, NULL, NULL, NULL, NULL),
(17, 'Booker''s', 750, 8, 126, 59.95, 1, NULL, NULL, NULL, NULL),
(18, 'Bourbon Supreme Rare', 1750, 4, 80, 19.95, 1, NULL, NULL, NULL, NULL),
(19, 'Bowman Brothers', 750, NULL, 90, 29.95, 1, NULL, NULL, NULL, NULL),
(20, 'Bowman''s Bourbon', 1000, 3, 80, 10.45, 1, NULL, NULL, NULL, NULL),
(21, 'Buffalo Trace Bourbon', 750, NULL, 90, 25.95, 1, NULL, NULL, NULL, NULL),
(22, 'Buffalo Trace Bourbon', 1750, NULL, 90, 52.95, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `booze_type`
--

CREATE TABLE `booze_type` (
  `type_id` int(11) DEFAULT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booze_type`
--

INSERT INTO `booze_type` (`type_id`, `type`) VALUES
(1, 'Straight Bourbon Whiskey');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` int(11) NOT NULL,
  `timezone` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_users`
--

CREATE TABLE `users_users` (
  `user_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'follower',
  `user_id_followed` int(11) NOT NULL COMMENT 'followed',
  PRIMARY KEY (`user_user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_users`
--
ALTER TABLE `users_users`
  ADD CONSTRAINT `users_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
