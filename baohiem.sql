-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2016 at 06:21 PM
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


-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE IF NOT EXISTS `contract` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `date_from` int(11) NOT NULL,
  `date_to` int(11) NOT NULL,
  `no_date` tinyint(4) NOT NULL,
  `persons` tinyint(4) NOT NULL,
  `type` varchar(20) NOT NULL,
  `incidental_plan` tinyint(4) NOT NULL,
  `medical_plan` varchar(2) NOT NULL,
  `area` varchar(2) NOT NULL,
  `personal_accident` tinyint(4) NOT NULL,
  `total_price` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `holder_name` varchar(255) NOT NULL,
  `holder_address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `inv_company` varchar(255) DEFAULT NULL,
  `inv_address` varchar(255) DEFAULT NULL,
  `inv_tax` varchar(100) DEFAULT NULL,
  `residence_country` varchar(100) NOT NULL,
  `departure_country` varchar(100) NOT NULL,
  `method_id` tinyint(4) NOT NULL,
  `notes` varchar(500) NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1 : chua duyet, 2 : da duyet , 3 : da xuat file',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`id`, `customer_id`, `date_from`, `date_to`, `no_date`, `persons`, `type`, `incidental_plan`, `medical_plan`, `area`, `personal_accident`, `total_price`, `unit_price`, `holder_name`, `holder_address`, `phone`, `inv_company`, `inv_address`, `inv_tax`, `residence_country`, `departure_country`, `method_id`, `notes`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 1453158000, 1453417200, 3, 3, 'Individual', 1, 'B', 'W', 2, 1032, 344, '', '', '', NULL, NULL, NULL, '', '', 1, 'dasgdsabsfh', 1, 1453223581, 1453223581),
(2, NULL, 1453244400, 1453590000, 4, 3, 'Individual', 1, 'B', 'W', 2, 1032, 344, '', '', '', NULL, NULL, NULL, '', '', 3, 'safasfasf', 1, 1453223742, 1453223742),
(3, NULL, 1453244400, 1453590000, 4, 3, 'Individual', 1, 'B', 'W', 2, 1032, 344, '', '', '', NULL, NULL, NULL, '', '', 3, 'safasfasf', 1, 1453223753, 1453223753),
(4, NULL, 1453244400, 1453417200, 2, 2, 'Individual', 1, 'B', 'W', 2, 688, 344, '', '', '', NULL, NULL, NULL, '', '', 1, 'scasdfasf', 1, 1453223865, 1453223865),
(5, 3, 1453244400, 1453417200, 2, 2, 'Individual', 1, 'B', 'W', 2, 688, 344, '', '', '', NULL, NULL, NULL, '', '', 1, 'scasdfasf', 1, 1453223940, 1453223940),
(6, 3, 1453244400, 1453417200, 2, 3, 'Individual', 1, 'B', 'W', 2, 1032, 344, '', '', '', NULL, NULL, NULL, '', '', 1, 'dFSFSFASFASF', 1, 1453224002, 1453224002),
(7, 3, 1453244400, 1453417200, 2, 3, 'Individual', 1, 'B', 'W', 2, 1032, 344, '', '', '', NULL, NULL, NULL, '', '', 1, 'HSRHASRHS', 1, 1453224031, 1453224031);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contract_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `birthday` int(11) NOT NULL,
  `member_type` varchar(20) DEFAULT NULL,
  `passport` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
