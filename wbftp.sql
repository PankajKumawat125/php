-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 27, 2017 at 01:36 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wbftp`
--
CREATE DATABASE IF NOT EXISTS `wbftp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wbftp`;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `uname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `uname`, `email`, `subject`, `message`) VALUES
(1, 'vaibhav123', 'gandhivaibhav99@gmail.com', 'AAAAAAAAAAA', 'aaaaaaaaaaa'),
(2, 'vaibhav123', 'gandhivaibhav99@gmail.com', 'aaaaaaaa', 'aaaaaaaaaaa'),
(3, 'vaibhav123', 'gandhivaibhav99@gmail.com', 'aaaaaaaaaa', 'aaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `uname` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pswd` varchar(32) NOT NULL,
  `cpswd` varchar(32) NOT NULL,
  `day` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(4) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `count` int(10) NOT NULL,
  `request` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uname` (`uname`,`email`,`contact`),
  UNIQUE KEY `uname_2` (`uname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fname`, `lname`, `uname`, `email`, `pswd`, `cpswd`, `day`, `month`, `year`, `contact`, `gender`, `count`, `request`) VALUES
(14, 'pankaj', 'kumawat', 'pankaj123', 'pankajkumawat125@gmail.com', ';„ð¶òÛªÌÈ³ü³˜þ', ';„ð¶òÛªÌÈ³ü³˜þ', 20, 10, 1995, '7666469895', 'male', 21, '14,15,21'),
(15, 'vaibhav', 'gandhi', 'vaibhav123', 'gandhivaibhav99@gmail.com', '+ž­®™‡˜tåÄë´þ', '+ž­®™‡˜tåÄë´þ', 15, 9, 1995, '7303009760', 'male', 58, ''),
(17, 'Bhavana', 'Mishra', 'Bhavana123', 'bhavanamishra17@gmail.com', '’«ìLQtÃ?˜tåÄë´þ', '’«ìLQtÃ?˜tåÄë´þ', 17, 12, 1994, '8888234542', 'female', 13, ''),
(18, 'Shejal', 'Sawant', 'shejal123', 'shejalsawant941994@gmail.com', ';ßg©Û•ŽµÈ³ü³˜þ', ';ßg©Û•ŽµÈ³ü³˜þ', 9, 4, 1994, '8983539389', 'female', 2, ''),
(19, 'anuj', 'tiwari', 'anjtwr58', 'anjtwr58@gmail.com', '³f‘Wz÷™6ûn,R¿y', '³f‘Wz÷™6ûn,R¿y', 23, 4, 1996, '8796283216', 'male', 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `uname` varchar(40) NOT NULL,
  `uploads` varchar(1000) NOT NULL,
  `temp` varchar(1000) NOT NULL,
  `date1` varchar(1000) NOT NULL,
  `size` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uname_2` (`uname`),
  KEY `uname_3` (`uname`),
  KEY `uname_4` (`uname`),
  FULLTEXT KEY `uname` (`uname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `uname`, `uploads`, `temp`, `date1`, `size`) VALUES
(9, 'pankaj123', '6tenta11.gif', '', '30-03-2017', '124352'),
(10, 'vaibhav123', '5325 specs.pdf', '', '30-03-2017', '314524'),
(11, 'pankaj123', '6tenta111.gif', '', '30-03-2017', '124352'),
(12, 'pankaj123', '2016-09-0113-16-55.png', '', '30-03-2017', '10350'),
(13, 'pankaj123', 'Bhavana Mishra.docx', '', '30-03-2017', '18677'),
(14, 'vaibhav123', '4047-718Spec.pdf', '', '30-03-2017', '113448'),
(15, 'vaibhav123', 'Bhavik.docx', '', '30-03-2017', '22132'),
(16, 'vaibhav123', 'captcha.jpg', '', '30-03-2017', '1371'),
(17, 'vaibhav123', 'clockwork-php-master.zip', '', '30-03-2017', '18139'),
(18, 'vaibhav123', 'captcha1.jpg', '', '30-03-2017', '1371'),
(19, 'vaibhav123', 'clockwork-php-master1.zip', '', '30-03-2017', '18139'),
(20, 'Bhavana123', 'Activity Diagram.png', '', '31-03-2017', '77953'),
(21, 'shejal123', 'primee.java', '', '06-04-2017', '404'),
(22, 'shejal123', 'c.png', '', '06-04-2017', '64785'),
(23, 'anjtwr58', 'a.png', '', '06-04-2017', '47557'),
(24, 'Bhavana123', 'aa.jpg', '', '06-04-2017', '53516');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
