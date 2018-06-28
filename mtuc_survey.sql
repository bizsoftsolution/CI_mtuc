-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2018 at 03:43 AM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mtuc_survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE IF NOT EXISTS `survey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `question1` varchar(250) NOT NULL,
  `question2` varchar(250) NOT NULL,
  `question3` varchar(250) NOT NULL,
  `survey_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `name`, `email`, `question1`, `question2`, `question3`, `survey_date`) VALUES
(1, '', '', 'RM1,100 - RM1,500', 'Industri pembuatan', '11', '2017-10-14'),
(2, 'test', 'test@g.com', 'RM900 - RM1,000', 'Test', '11,Test', '2017-10-14'),
(3, 'fghfgh', 'gfhfg', 'RM900 - RM1,000', 'gfhfghfgh', '10,11,gfhfgh', '2017-10-14'),
(4, '', '', 'RM1,100 - RM1,500', 'Industri servis', '1,5,10,', '2017-10-14'),
(5, '', '', 'RM1,100 - RM1,500', 'Industri servis', '1,5,10,', '2017-10-14'),
(6, '', '', 'More than RM2,800', 'Kerajaan', '2,', '2017-10-14'),
(7, '', '', 'More than RM2,800', 'Kerajaan', '2,T', '2017-10-14'),
(8, 'test', 'test@g.com', 'RM900 - RM1,000', 'Kerajaan', '10,11,', '2017-10-14'),
(9, 'Test', 'test@g.com', 'RM1,100 - RM1,500', 'Test', '11,Test', '2017-10-14'),
(10, 'test', 'test@g.com', 'RM900 - RM1,000', 'Kerajaan', '11,', '2017-10-14'),
(11, '', '', 'RM1,600 - RM2,800', 'Kerajaan', '2,', '2017-10-14'),
(12, '', '', 'RM1,100 - RM1,500', 'Industri servis', '1,2,3,4,', '2017-10-14'),
(13, '', '', 'RM1,600 - RM2,800', 'Kerajaan', '2,', '2017-10-15'),
(14, '', '', 'RM1,600 - RM2,800', 'Test', '7,8,11,A', '2017-10-15'),
(15, '', '', 'RM1,600 - RM2,800', 'Kerajaan', '1,2,3,', '2017-10-15'),
(16, '', '', 'RM1,600 - RM2,800', 'Kerajaan', '', '2017-10-15'),
(17, 'sdfsd', 'sdfsf#@tg.com', 'RM900 - RM1,000', 'Kerajaan', '10,11,', '2017-10-15'),
(18, 'Test', 'Test@g.com', 'RM1,100 - RM1,500', 'Industri servis', '10,11,', '2017-10-15'),
(19, 'test', 'test@g.com', 'RM1,100 - RM1,500', 'Industri servis', '11,', '2017-10-15'),
(20, '', '', 'RM900 - RM1,000', 'Tsc', '6,10,11,V', '2017-10-15'),
(21, 'Test', 'Test@g.com', 'RM900 - RM1,000', 'Test', '11,Test', '2017-10-15'),
(22, 'tesr', 'tes', 'More than RM2,800', 'test', '11,test', '2017-10-15'),
(23, '', '', 'RM1,100 - RM1,500', 'Gshdvdv', '10,11,G', '2017-10-15'),
(24, '', '', 'More than RM2,800', 'Vhhh', '10,11,Gghhvv', '2017-10-15'),
(25, '', '', 'RM900 - RM1,000', 'Health', '2,3,5,Isteri kedua ', '2017-10-15'),
(26, '', '', 'RM900 - RM1,000', 'Health', '2,3,5,Isteri kedua ', '2017-10-15'),
(27, '', '', 'RM900 - RM1,000', 'Health', '2,3,5,Isteri kedua ', '2017-10-15'),
(28, '', '', 'RM900 - RM1,000', 'Health', '2,3,5,Isteri kedua ', '2017-10-15'),
(29, '', '', 'RM1,600 - RM2,800', 'Kerajaan', '1,2,3,4,6,', '2017-10-15'),
(30, 'sd', 'sfdf', 'RM900 - RM1,000', 'Industri pembuatan', 'cxzcxc', '2017-10-16'),
(31, 'sd', 'sdsd', 'RM900 - RM1,000', 'dsadsd', '9,10,11,sdsadsd', '2017-10-16'),
(32, 'test', 'test', 'RM900 - RM1,000', 'Kerajaan', '11,test', '2017-10-16'),
(33, '', '', 'RM1,100 - RM1,500', 'Hdnd', '9,10,11,Bsjdbdb', '2017-10-16'),
(34, '', '', 'RM1,100 - RM1,500', 'Industri servis', '2,3,', '2017-10-16'),
(35, '', '', 'More than RM2,800', 'frsfdsf', '10,11,sdfsdf', '2017-10-16'),
(36, 'w', 'wqr', 'More than RM2,800', 'fefefe', '', '2017-10-16'),
(37, '', '', 'More than RM2,800', 'Transportation ', '1,4,5,8,9,10,11,Transportation ', '2017-10-16'),
(38, 'sxdsaf', 'scsacs', 'More than RM2,800', 'dsf', '', '2017-10-16'),
(39, 'C', 'XCZXC', 'More than RM2,800', 'on', '', '2017-10-16'),
(40, 'sd', 'adsd', 'More than RM2,800', 'asdsad', '', '2017-10-16'),
(41, 'asd', 'dasd', 'RM1,600 - RM2,800', 'Kerajaan', '2,asdsd', '2017-10-16'),
(42, 'Tedt', 'tesgg@gmail.com', 'RM900 - RM1,000', 'Industri servis', '3,', '2018-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `tour_reg_form`
--

CREATE TABLE IF NOT EXISTS `tour_reg_form` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) DEFAULT NULL,
  `address` text,
  `mobileno` varchar(50) DEFAULT NULL,
  `emailid` varchar(50) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `sex` varchar(25) DEFAULT NULL,
  `marital_status` varchar(25) DEFAULT NULL,
  `physical_limitations` text,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `tour_reg_form`
--

INSERT INTO `tour_reg_form` (`id`, `fullname`, `address`, `mobileno`, `emailid`, `age`, `sex`, `marital_status`, `physical_limitations`, `date`) VALUES
(45, 'anitha', 'hjhhhh', '9876543210', 'anitha@gmail.com', 23, 'female', 'single', 'no', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `logged_in` varchar(255) NOT NULL,
  `last_login` datetime NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `emp_no` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `password`, `user_type`, `email`, `logged_in`, `last_login`, `first_name`, `middle_name`, `last_name`, `emp_no`, `created`, `modified`) VALUES
(1, '1234', 'ADMIN', 'admin@gmail.com', 'FALSE', '2017-10-10 19:59:32', 'Survey', '', '', 0, '2017-07-30 20:48:33', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
