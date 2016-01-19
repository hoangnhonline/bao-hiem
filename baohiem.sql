-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2016 at 05:30 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `baohiem`
--
CREATE DATABASE IF NOT EXISTS `baohiem` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `baohiem`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '2',
  `phone` varchar(20) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `birthday` int(11) DEFAULT NULL,
  `cmnd` varchar(20) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_address` varchar(255) DEFAULT NULL,
  `tax_no` varchar(20) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `last_login` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `phone`, `fullname`, `birthday`, `cmnd`, `company_name`, `company_address`, `tax_no`, `created_at`, `updated_at`, `last_login`, `address`, `status`) VALUES
(1, 'hoangnhonline@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, '0932535212', 'Nguyen Huy Hoang', 318121200, '0987654', 'asfaf fa', 'fasfasdf asdgf', '098657465', 1453220636, 1453220636, 1453220636, '123 acb', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
