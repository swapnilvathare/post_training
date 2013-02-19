-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2013 at 03:44 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created`, `modified`) VALUES
(1, 'The HuMONGOus DB', '<p>In the race to stay on top of the latest trends, its easy to sway in the mobile direction these days. Be it a brand, a startup, or your own awesome idea. So, before you jump the gun and start with things like vendor hunting and which platform to support, make sure you fall in any of the below categories:</p>\r\n<p>In the race to stay on top of the latest trends, its easy to sway in the mobile direction these days. Be it a brand, a startup, or your own awesome idea. So, before you jump the gun and start with things like vendor hunting and which platform to support, make sure you fall in any of the below categories:</p>', '2013-02-11 16:41:59', NULL),
(2, 'Going Mobile', '<p>Mobile apps that were an unknown entity just 2 years back, have become a must have add-on to anything and everything online. Eventually, and that to in the very near future mobile devices will take over the personal computer space. From desktops, to laptops to smartphones and tabs, its all about evolution and survival of the sleekest.</p>\r\n<p>“Growth of any organization depends not on the solutions for today, but on having solutions for the future.”</p>\r\n<p>So, if you still think that you need a proven business model before jumping into this ecosystem then its better you stay ashore. From what I can see, all you need is to find your entry point with the shortest possible path.. asap</p>', '2013-02-11 16:41:59', NULL),
(3, 'Title strikes back', 'This is really exciting! Not.', '2013-02-11 16:41:59', NULL),
(4, 'this is my first test post', 'dummy content.. dummy content', '2013-02-15 15:41:54', '2013-02-15 15:41:54'),
(5, 'hi Akash', 'kahitari kar re....', '2013-02-18 12:05:00', '2013-02-18 12:05:00'),
(6, 'HI Nishant', 'I am done with assignment.', '2013-02-19 15:43:03', '2013-02-19 15:43:03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
