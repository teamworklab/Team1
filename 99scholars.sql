-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2013 at 06:36 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `99scholars`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `address` varchar(500) DEFAULT NULL,
  `city` varchar(300) DEFAULT NULL,
  `state` varchar(300) DEFAULT NULL,
  `postal_code` varchar(100) DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `address`, `city`, `state`, `postal_code`, `country`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'test test', 'Test City', 'California', '20132', 1, NULL, NULL, NULL, NULL),
(2, 'test test', 'Test City', 'Rio de Janeiro', '20132', 2, NULL, NULL, NULL, NULL),
(3, 'Test Street', 'Test City', 'Beijing', '10230', 3, NULL, NULL, NULL, NULL),
(4, 'Test Street', 'Test City', 'Hong Kong', '10230', 4, NULL, NULL, NULL, NULL),
(5, 'Test Street', 'Test City', 'Singapore', '10900', 5, NULL, NULL, NULL, NULL),
(6, 'test', 'Test', 'Bangkok', '1056 TS', 6, NULL, NULL, NULL, NULL),
(7, 'Test Street', 'Test City', 'New York', '10222', 1, NULL, NULL, NULL, NULL),
(8, 'Test Street', 'Test City', 'New York', '10222', 1, NULL, NULL, NULL, NULL),
(9, 'Test', 'Test', 'California', '12398', 1, NULL, NULL, NULL, NULL),
(10, 'Test', 'Test', 'California', '12354', 1, NULL, NULL, NULL, NULL),
(11, '', '', '', '', 0, NULL, NULL, NULL, NULL),
(12, '', '', '', '', 0, NULL, NULL, NULL, NULL),
(13, '', '', '', '', 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attendee`
--

CREATE TABLE IF NOT EXISTS `attendee` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user` int(11) DEFAULT NULL,
  `conference` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `attendee`
--

INSERT INTO `attendee` (`id`, `user`, `conference`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(8, 6, 20, NULL, NULL, NULL, NULL),
(9, 6, 16, NULL, NULL, NULL, NULL),
(38, 7, 16, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` int(11) DEFAULT NULL,
  `has_coauthor` int(11) DEFAULT NULL,
  `status` char(2) CHARACTER SET utf8 DEFAULT NULL,
  `publish_year` int(11) DEFAULT NULL,
  `title` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `book_name` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `book_city` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `book_country` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `start_page` int(11) DEFAULT NULL,
  `end_page` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `author`, `has_coauthor`, `status`, `publish_year`, `title`, `book_name`, `book_city`, `book_country`, `start_page`, `end_page`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 7, 0, 'p', 1970, 'test', '', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL),
(2, 7, 0, 'p', 1970, 'test2', 'jhvhbkjnl', NULL, NULL, 20, 15, NULL, NULL, NULL, NULL),
(4, 7, 0, 'p', 1970, 'third123', 'test123', NULL, NULL, 30, 30, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `book_chapter`
--

CREATE TABLE IF NOT EXISTS `book_chapter` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `author` int(11) DEFAULT NULL,
  `has_coauthor` int(11) DEFAULT NULL,
  `status` char(2) DEFAULT NULL,
  `publish_year` int(11) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  `book_chapter` varchar(500) DEFAULT NULL,
  `book_city` varchar(300) DEFAULT NULL,
  `book_country` varchar(300) DEFAULT NULL,
  `start_page` int(11) DEFAULT NULL,
  `end_page` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `book_chapter`
--

INSERT INTO `book_chapter` (`id`, `author`, `has_coauthor`, `status`, `publish_year`, `title`, `book_chapter`, `book_city`, `book_country`, `start_page`, `end_page`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(2, 7, 0, 'a', 2000, 'start_done', 'testing_done', NULL, NULL, 22, 40, NULL, NULL, NULL, NULL),
(4, 7, 0, 'p', 1970, 'test', 'third', NULL, NULL, 10, 20, NULL, NULL, NULL, NULL),
(5, 7, 0, 'p', 1970, 'uvuibkj', 'lubiunblkm', NULL, NULL, 15, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_conference`
--

CREATE TABLE IF NOT EXISTS `category_conference` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `conference` int(11) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `category_conference`
--

INSERT INTO `category_conference` (`id`, `conference`, `category`, `created_by`, `created_date`) VALUES
(1, 15, 1, NULL, NULL),
(2, 15, 2, NULL, NULL),
(3, 15, 3, NULL, NULL),
(5, 16, 2, NULL, NULL),
(9, 17, 3, NULL, NULL),
(10, 15, 1, NULL, NULL),
(11, 15, 2, NULL, NULL),
(12, 15, 3, NULL, NULL),
(13, 16, 2, NULL, NULL),
(14, 17, 3, NULL, NULL),
(15, 18, 1, NULL, NULL),
(16, 18, 2, NULL, NULL),
(17, 18, 3, NULL, NULL),
(18, 19, 2, NULL, NULL),
(19, 20, 3, NULL, NULL),
(20, 21, 1, NULL, NULL),
(21, 21, 2, NULL, NULL),
(22, 21, 3, NULL, NULL),
(23, 22, 2, NULL, NULL),
(24, 23, 3, NULL, NULL),
(25, 24, 1, NULL, NULL),
(26, 24, 2, NULL, NULL),
(27, 24, 3, NULL, NULL),
(28, 25, 2, NULL, NULL),
(29, 26, 3, NULL, NULL),
(30, 27, 1, NULL, NULL),
(31, 27, 2, NULL, NULL),
(32, 27, 3, NULL, NULL),
(33, 28, 2, NULL, NULL),
(34, 29, 3, NULL, NULL),
(35, 30, 1, NULL, NULL),
(36, 30, 2, NULL, NULL),
(37, 30, 3, NULL, NULL),
(38, 31, 2, NULL, NULL),
(39, 32, 3, NULL, NULL),
(40, 33, 1, NULL, NULL),
(41, 33, 2, NULL, NULL),
(42, 33, 3, NULL, NULL),
(43, 34, 2, NULL, NULL),
(44, 35, 3, NULL, NULL),
(45, 36, 1, NULL, NULL),
(46, 36, 2, NULL, NULL),
(47, 36, 3, NULL, NULL),
(48, 37, 2, NULL, NULL),
(49, 38, 3, NULL, NULL),
(50, 39, 1, NULL, NULL),
(51, 39, 2, NULL, NULL),
(52, 39, 3, NULL, NULL),
(53, 40, 1, NULL, NULL),
(54, 41, 1, NULL, NULL),
(55, 42, 1, NULL, NULL),
(56, 43, 2, NULL, NULL),
(57, 44, 0, NULL, NULL),
(58, 44, 0, NULL, NULL),
(59, 44, 0, NULL, NULL),
(60, 45, 0, NULL, NULL),
(61, 46, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `conference`
--

CREATE TABLE IF NOT EXISTS `conference` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL DEFAULT '',
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `organizer` int(11) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `contact_person` varchar(200) DEFAULT NULL,
  `contact_email` varchar(100) DEFAULT NULL,
  `accept_notify` date DEFAULT NULL,
  `venue` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `conference`
--

INSERT INTO `conference` (`id`, `name`, `start_date`, `end_date`, `description`, `organizer`, `website`, `type`, `deadline`, `contact_person`, `contact_email`, `accept_notify`, `venue`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(14, 'Test Conference', '2013-09-30', '2013-10-20', 'This is a test conference.', 3, 'http://test.com', 1, '2013-09-15', 'Test Person', 'test@test.com', '2013-09-21', 5, NULL, NULL, NULL, NULL),
(15, 'Test Conference', '2013-10-01', '2013-10-05', 'This is a test conference.', 4, 'http://test.com', 1, '2013-09-15', 'Test Person', 'test@test.com', '2013-09-21', 1, NULL, NULL, NULL, NULL),
(16, 'Build and deploy your own Big Data distribution with Apache Bigtop', '2013-10-01', '2013-10-05', 'This is a test conference.', 4, 'http://test.com', 2, '2013-09-15', 'Test Person', 'test@test.com', '2013-09-21', 2, NULL, NULL, NULL, NULL),
(17, 'Test Conference', '2013-10-01', '2013-10-05', 'This is a test conference.', 4, 'http://test.com', 3, '2013-09-15', 'Test Person', 'test@test.com', '2013-09-21', 3, NULL, NULL, NULL, NULL),
(18, 'Test Conference', '2013-10-06', '2013-10-10', 'This is a test conference.', 3, 'http://test.com', 4, '2013-09-15', 'Test Person', 'test@test.com', '2013-09-21', 4, NULL, NULL, NULL, NULL),
(19, 'Test Conference', '2013-10-06', '2013-10-10', 'This is a test conference.', 4, 'http://test.com', 5, '2013-09-15', 'Test Person', 'test@test.com', '2013-09-21', 5, NULL, NULL, NULL, NULL),
(20, 'The Best in Heritage 2013 ', '2013-10-06', '2013-10-10', 'This is a test conference.', 4, 'http://test.com', 2, '2013-09-15', 'Test Person', 'test@test.com', '2013-09-21', 6, NULL, NULL, NULL, NULL),
(21, 'Test Conference', '2013-10-06', '2013-10-10', 'This is a test conference.', 4, 'http://test.com', 3, '2013-09-15', 'Test Person', 'test@test.com', '2013-09-21', 1, NULL, NULL, NULL, NULL),
(22, 'Test Conference', '2013-10-11', '2013-10-20', 'This is a test conference.', 4, 'http://test.com', 1, '2013-11-15', 'Test Person', 'test@test.com', '2013-09-21', 2, NULL, NULL, NULL, NULL),
(23, 'Test Conference', '2013-10-11', '2013-10-20', 'This is a test conference.', 4, 'http://test.com', 2, '2013-11-15', 'Test Person', 'test@test.com', '2013-09-21', 3, NULL, NULL, NULL, NULL),
(24, 'Test Conference', '2013-10-11', '2013-10-20', 'This is a test conference.', 4, 'http://test.com', 3, '2013-11-15', 'Test Person', 'test@test.com', '2013-09-21', 4, NULL, NULL, NULL, NULL),
(25, 'Test Conference', '2013-10-11', '2013-10-20', 'This is a test conference.', 4, 'http://test.com', 4, '2013-11-15', 'Test Person', 'test@test.com', '2013-09-21', 5, NULL, NULL, NULL, NULL),
(26, 'Test Conference', '2013-10-11', '2013-10-20', 'This is a test conference.', 4, 'http://test.com', 5, '2013-11-15', 'Test Person', 'test@test.com', '2013-09-21', 6, NULL, NULL, NULL, NULL),
(27, 'Test Conference', '2013-10-21', '2013-10-31', 'This is a test conference.', 4, 'http://test.com', 3, '2013-11-15', 'Test Person', 'test@test.com', '2013-09-21', 1, NULL, NULL, NULL, NULL),
(28, 'Test Conference', '2013-10-21', '2013-10-31', 'This is a test conference.', 4, 'http://test.com', 1, '2013-11-15', 'Test Person', 'test@test.com', '2013-09-21', 2, NULL, NULL, NULL, NULL),
(29, 'Test Conference', '2013-10-21', '2013-10-31', 'This is a test conference.', 4, 'http://test.com', 2, '2013-11-15', 'Test Person', 'test@test.com', '2013-09-21', 3, NULL, NULL, NULL, NULL),
(30, 'Test Conference', '2013-10-21', '2013-10-31', 'This is a test conference.', 4, 'http://test.com', 3, '2013-11-15', 'Test Person', 'test@test.com', '2013-09-21', 4, NULL, NULL, NULL, NULL),
(31, 'Test Conference', '2013-10-21', '2013-10-31', 'This is a test conference.', 4, 'http://test.com', 4, '2013-11-15', 'Test Person', 'test@test.com', '2013-09-21', 5, NULL, NULL, NULL, NULL),
(32, 'Test Conference', '2013-11-01', '2013-11-10', 'This is a test conference.', 4, 'http://test.com', 5, '2013-11-15', 'Test Person', 'test@test.com', '2013-09-21', 6, NULL, NULL, NULL, NULL),
(33, 'Test Conference', '2013-11-01', '2013-11-10', 'This is a test conference.', 4, 'http://test.com', 3, '2013-11-15', 'Test Person', 'test@test.com', '2013-09-21', 1, NULL, NULL, NULL, NULL),
(34, 'Test Conference', '2013-11-01', '2013-11-10', 'This is a test conference.', 4, 'http://test.com', 1, '2013-11-15', 'Test Person', 'test@test.com', '2013-09-21', 2, NULL, NULL, NULL, NULL),
(35, 'Test Conference', '2013-11-01', '2013-11-10', 'This is a test conference.', 4, 'http://test.com', 2, '2013-11-15', 'Test Person', 'test@test.com', '2013-09-21', 3, NULL, NULL, NULL, NULL),
(36, 'Test Conference', '2013-11-11', '2013-11-20', 'This is a test conference.', 4, 'http://test.com', 3, '2013-11-15', 'Test Person', 'test@test.com', '2013-09-21', 4, NULL, NULL, NULL, NULL),
(37, 'Test Conference', '2013-11-11', '2013-11-20', 'This is a test conference.', 4, 'http://test.com', 1, '2013-11-15', 'Test Person', 'test@test.com', '2013-09-21', 5, NULL, NULL, NULL, NULL),
(38, 'Test Conference', '2013-11-11', '2013-11-20', 'This is a test conference.', 4, 'http://test.com', 4, '2013-11-15', 'Test Person', 'test@test.com', '2013-09-21', 6, NULL, NULL, NULL, NULL),
(39, 'Test Conference', '2013-11-11', '2013-11-20', 'This is a test conference.', 4, 'http://test.com', 5, '2013-11-15', 'Test Person', 'test@test.com', '2013-09-21', 6, NULL, NULL, NULL, NULL),
(41, 'Test Conference', '2013-10-01', '2013-10-05', 'This is a test conference.', 6, 'http://test.com', 1, '2013-09-21', 'Test Person', 'test@test.com', '2013-09-28', 8, NULL, NULL, NULL, NULL),
(43, 'Test Seminar', '2013-11-08', NULL, 'Test Test', 21, 'http://test.com', 2, NULL, 'Test Person', 'test@test.com', NULL, 10, NULL, NULL, NULL, NULL),
(44, '', '0000-00-00', NULL, '', 24, '', 2, NULL, '', '', NULL, 11, NULL, NULL, NULL, NULL),
(45, '', '0000-00-00', '0000-00-00', '', 25, '', 1, '0000-00-00', '', '', '0000-00-00', 12, NULL, NULL, NULL, NULL),
(46, '', '0000-00-00', NULL, '', 26, '', 2, NULL, '', '', NULL, 13, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `conference_category`
--

CREATE TABLE IF NOT EXISTS `conference_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `conference_category`
--

INSERT INTO `conference_category` (`id`, `name`, `description`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'Technology', NULL, NULL, NULL, NULL, NULL),
(2, 'Linguistics', NULL, NULL, NULL, NULL, NULL),
(3, 'Psychology', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `conference_proceeding`
--

CREATE TABLE IF NOT EXISTS `conference_proceeding` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `author` int(11) DEFAULT NULL,
  `has_coauthor` int(11) DEFAULT NULL,
  `status` char(2) DEFAULT NULL,
  `publish_year` int(11) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  `conference` varchar(500) DEFAULT NULL,
  `conference_city` varchar(300) DEFAULT NULL,
  `conference_country` varchar(300) DEFAULT NULL,
  `start_page` int(11) DEFAULT NULL,
  `end_page` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `conference_proceeding`
--

INSERT INTO `conference_proceeding` (`id`, `author`, `has_coauthor`, `status`, `publish_year`, `title`, `conference`, `conference_city`, `conference_country`, `start_page`, `end_page`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(5, 7, 0, 'p', 1970, 'test', 'start', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL),
(27, 7, 0, 'p', 1970, 'hahaha', 'changed', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL),
(28, 7, 0, 'p', 1970, '', '', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL),
(29, 7, 0, 'p', 1970, '', '', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL),
(30, 7, 0, 'p', 1970, '', '', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL),
(31, 7, 0, 'p', 1970, '', '', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL),
(32, 7, 0, 'p', 1970, '', '', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL),
(33, 7, 0, 'a', 2013, 'hahahaha', 'start doing', NULL, NULL, 15, 32, NULL, NULL, NULL, NULL),
(34, 7, 0, 'p', 1970, 'test', 'start test', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL),
(35, 7, 0, 'p', 2013, 'new test', 'start new building', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL),
(36, 7, 0, 'r', 2013, 'dummy', 'content', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL),
(37, 7, 0, 'p', 1970, 'start', 'testing', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL),
(38, 7, 0, 'p', 1970, '', '', NULL, NULL, 0, 10, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `conference_topic`
--

CREATE TABLE IF NOT EXISTS `conference_topic` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `conference` int(11) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  `content` text,
  `created_by` int(11) DEFAULT NULL,
  `created_date` int(8) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `conference_topic`
--

INSERT INTO `conference_topic` (`id`, `conference`, `title`, `content`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(8, 43, 'Test Test', 'Test', 7, 1384254126, NULL, NULL),
(9, 43, 'Test Test', 'Test', 7, 1384254128, NULL, NULL),
(10, 43, 'Test', 'Test', 7, 1384254285, NULL, NULL),
(16, 43, 'Test New Topic', 'This is a new topic', 7, 1384340859, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `conference_topic_discussion`
--

CREATE TABLE IF NOT EXISTS `conference_topic_discussion` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `topic` int(11) DEFAULT NULL,
  `content` text,
  `created_by` int(11) DEFAULT NULL,
  `created_date` int(8) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `conference_topic_discussion`
--

INSERT INTO `conference_topic_discussion` (`id`, `topic`, `content`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 8, 'Test comment', 7, 1384337478, NULL, NULL),
(2, 8, 'Test Comment', 7, 1384337532, NULL, NULL),
(3, 8, 'Test comment again', 7, 1384339998, NULL, NULL),
(4, 16, 'This is a new comment', 7, 1384340871, NULL, NULL),
(5, 9, 'Test comment', 7, 1384340914, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `conference_type`
--

CREATE TABLE IF NOT EXISTS `conference_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `conference_type`
--

INSERT INTO `conference_type` (`id`, `name`, `description`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'Conference', NULL, NULL, NULL, NULL, NULL),
(2, 'Seminar', NULL, NULL, NULL, NULL, NULL),
(3, 'Workshop', NULL, NULL, NULL, NULL, NULL),
(4, 'Webinar', NULL, NULL, NULL, NULL, NULL),
(5, 'Online Conference', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(300) DEFAULT NULL,
  `region` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `region`) VALUES
(1, 'United States', NULL),
(2, 'Brazil', NULL),
(3, 'China', NULL),
(4, 'Hong Kong', NULL),
(5, 'Singapore', NULL),
(6, 'Thailand', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `co_author`
--

CREATE TABLE IF NOT EXISTS `co_author` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `journal` int(11) DEFAULT NULL,
  `author_name` varchar(200) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `co_author`
--

INSERT INTO `co_author` (`id`, `journal`, `author_name`, `author_id`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(62, 45, 'author1^^^^author2^^^^', NULL, NULL, NULL, NULL, NULL),
(63, 46, 'author12^^^^author34^^^^', NULL, NULL, NULL, NULL, NULL),
(64, 47, 'author1^^^^author2^^^^', NULL, NULL, NULL, NULL, NULL),
(65, 48, 'author one three^^^^author two^^^^author third^^^^author forth^^^^', NULL, NULL, NULL, NULL, NULL),
(66, 49, 'first name author^^^^second name author^^^^third name author^^^^forth name author^^^^five name author^^^^', NULL, NULL, NULL, NULL, NULL),
(67, 50, 'test one author^^^^test two author^^^^test three author^^^^test four author^^^^test five author^^^^', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `degree_type`
--

CREATE TABLE IF NOT EXISTS `degree_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `initial` varchar(50) DEFAULT NULL,
  `full_name` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `degree_type`
--

INSERT INTO `degree_type` (`id`, `initial`, `full_name`) VALUES
(1, 'B.A.', NULL),
(2, 'M.A.', NULL),
(3, 'Ph.D.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(300) DEFAULT NULL,
  `description` text,
  `organization` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `description`, `organization`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'Computer Science', NULL, 17, NULL, NULL, NULL, NULL),
(2, 'Computer Science', NULL, 18, NULL, NULL, NULL, NULL),
(3, 'Computer Science', NULL, 19, NULL, NULL, NULL, NULL),
(4, '', NULL, 23, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE IF NOT EXISTS `journal` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `author` int(11) DEFAULT NULL,
  `has_coauthor` int(11) DEFAULT NULL,
  `status` char(2) DEFAULT NULL,
  `publish_year` int(11) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  `journal` varchar(500) DEFAULT NULL,
  `volume` varchar(20) DEFAULT NULL,
  `issue` varchar(20) DEFAULT NULL,
  `start_page` varchar(10) DEFAULT NULL,
  `end_page` varchar(10) DEFAULT NULL,
  `link` varchar(500) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`id`, `author`, `has_coauthor`, `status`, `publish_year`, `title`, `journal`, `volume`, `issue`, `start_page`, `end_page`, `link`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(45, 7, 0, 'p', 1970, 'title', 'journal', '', '', '', '', '', NULL, NULL, NULL, NULL),
(46, 7, 0, 'p', 1970, '', '', '', '', '', '', '', NULL, NULL, NULL, NULL),
(47, 7, 0, 'p', 2010, 'title', 'journal', '10', '2', '10', '10', '', NULL, NULL, NULL, NULL),
(48, 7, 0, 'p', 1970, 'new title', 'new journal', '', '', '', '', '', NULL, NULL, NULL, NULL),
(49, 7, 0, 'p', 1989, 'journal title', 'journal name', '20', '5', '20', '30', '', NULL, NULL, NULL, NULL),
(50, 7, 0, 'p', 1970, 'test title', 'test journal', '25', '5', '20', '20', '', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `journal_publish_status`
--

CREATE TABLE IF NOT EXISTS `journal_publish_status` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `status` char(2) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `journal_publish_status`
--

INSERT INTO `journal_publish_status` (`id`, `status`, `name`, `description`) VALUES
(1, 'p', NULL, NULL),
(2, 's', NULL, NULL),
(3, 'r', NULL, NULL),
(4, 'a', NULL, NULL),
(5, 't', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE IF NOT EXISTS `organization` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(400) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`id`, `name`, `description`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'Test Organizer', NULL, NULL, NULL, NULL, NULL),
(2, 'Test Organizer', NULL, NULL, NULL, NULL, NULL),
(3, 'Test Organizer', NULL, NULL, NULL, NULL, NULL),
(4, 'Test Organizer', NULL, NULL, NULL, NULL, NULL),
(5, 'Test Organizer', NULL, NULL, NULL, NULL, NULL),
(6, 'Test Organizer', NULL, NULL, NULL, NULL, NULL),
(7, 'Cornell University', NULL, NULL, NULL, NULL, NULL),
(8, 'Cornell University', NULL, NULL, NULL, NULL, NULL),
(9, 'Cornell University', NULL, NULL, NULL, NULL, NULL),
(10, 'Cornell University', NULL, NULL, NULL, NULL, NULL),
(11, 'Cornell University', NULL, NULL, NULL, NULL, NULL),
(12, 'Cornell University', NULL, NULL, NULL, NULL, NULL),
(13, 'Cornell University', NULL, NULL, NULL, NULL, NULL),
(14, 'Cornell University', NULL, NULL, NULL, NULL, NULL),
(15, 'Cornell University', NULL, NULL, NULL, NULL, NULL),
(16, 'Massachusetts Institute of Technology', NULL, NULL, NULL, NULL, NULL),
(17, 'Cornell University', NULL, NULL, NULL, NULL, NULL),
(18, 'Massachusetts Institute of Technology', NULL, NULL, NULL, NULL, NULL),
(19, 'Massachusetts Institute of Technology', NULL, NULL, NULL, NULL, NULL),
(20, 'Test', NULL, NULL, NULL, NULL, NULL),
(21, 'Test Test', NULL, NULL, NULL, NULL, NULL),
(22, '', NULL, NULL, NULL, NULL, NULL),
(23, '', NULL, NULL, NULL, NULL, NULL),
(24, '', NULL, NULL, NULL, NULL, NULL),
(25, '', NULL, NULL, NULL, NULL, NULL),
(26, '', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `presentation`
--

CREATE TABLE IF NOT EXISTS `presentation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` int(11) DEFAULT NULL,
  `has_coauthor` int(11) DEFAULT NULL,
  `status` char(2) CHARACTER SET utf8 DEFAULT NULL,
  `publish_year` int(11) DEFAULT NULL,
  `title` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `presentation_name` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `presentation_city` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `presentation_country` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `start_page` int(11) DEFAULT NULL,
  `end_page` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `presentation`
--

INSERT INTO `presentation` (`id`, `author`, `has_coauthor`, `status`, `publish_year`, `title`, `presentation_name`, `presentation_city`, `presentation_country`, `start_page`, `end_page`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 7, 0, 'a', 2000, 'start 123', 'test 123', NULL, NULL, 10, 15, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` int(11) DEFAULT NULL,
  `has_coauthor` int(11) DEFAULT NULL,
  `status` char(2) CHARACTER SET utf8 DEFAULT NULL,
  `publish_year` int(11) DEFAULT NULL,
  `title` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `project_name` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `project_city` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `project_country` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `start_page` int(11) DEFAULT NULL,
  `end_page` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `author`, `has_coauthor`, `status`, `publish_year`, `title`, `project_name`, `project_city`, `project_country`, `start_page`, `end_page`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 7, 0, 'p', 1970, 'start123', 'test123', NULL, NULL, 11, 22, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `conference_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `start_date`, `end_date`, `conference_id`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, '2013-08-01', '2013-09-20', 9, NULL, NULL, NULL, NULL),
(2, '2013-08-01', '2013-09-20', 10, NULL, NULL, NULL, NULL),
(3, '2013-08-01', '2013-09-20', 11, NULL, NULL, NULL, NULL),
(4, '2013-08-01', '2013-09-20', 12, NULL, NULL, NULL, NULL),
(5, '2013-01-09', '0000-00-00', 13, NULL, NULL, NULL, NULL),
(6, '2013-09-01', '2013-09-29', 14, NULL, NULL, NULL, NULL),
(7, '2013-09-02', '2013-09-30', 15, NULL, NULL, NULL, NULL),
(8, '2013-09-01', '2013-09-30', 40, NULL, NULL, NULL, NULL),
(9, '2013-09-01', '2013-09-30', 41, NULL, NULL, NULL, NULL),
(10, '0000-00-00', '0000-00-00', 45, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seminar`
--

CREATE TABLE IF NOT EXISTS `seminar` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `conference` int(11) DEFAULT NULL,
  `speaker` varchar(300) DEFAULT NULL,
  `abstract` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `seminar`
--

INSERT INTO `seminar` (`id`, `conference`, `speaker`, `abstract`) VALUES
(1, 43, 'Test Speaker', 'Test Abstract'),
(2, 44, '', ''),
(3, 46, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber_launch`
--

CREATE TABLE IF NOT EXISTS `subscriber_launch` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(300) DEFAULT NULL,
  `created_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `subscriber_launch`
--

INSERT INTO `subscriber_launch` (`id`, `email`, `created_date`) VALUES
(1, 'test@test.com', 1384955929),
(2, 'test@test.com', 1384956070),
(3, 'test@test.com', 1384956143),
(4, 'test@test.com', 1384956152),
(5, 'test@test.com', 1384956182);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) DEFAULT NULL,
  `lastname` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `background` text,
  `birth_date` date DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `background`, `birth_date`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, NULL, NULL, 'test@test.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, 'test1@test.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, 'test2@test.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, 'test3@test.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'John', 'Doer', 'test4@test.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Hi. I''m a professor.', NULL, NULL, NULL, NULL, NULL),
(6, 'Johny', 'Doerim', 'test5@test.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Hi. I am a professor.', '1970-02-05', NULL, NULL, NULL, NULL),
(7, 'Jim', 'Parson', 'test6@test.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Hi. I''m interested in topics related to computer science.', '1980-03-11', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_contact`
--

CREATE TABLE IF NOT EXISTS `user_contact` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user` int(11) DEFAULT NULL,
  `address` int(11) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `website` varchar(300) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_contact`
--

INSERT INTO `user_contact` (`id`, `user`, `address`, `tel`, `fax`, `email`, `website`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 6, NULL, '66915543039', '66998549625', 'test5@test.com', 'http://test.com', NULL, NULL, NULL, NULL),
(2, 7, NULL, '', '', 'test6@test.com', '', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_degree`
--

CREATE TABLE IF NOT EXISTS `user_degree` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user` int(11) DEFAULT NULL,
  `degree` int(11) DEFAULT NULL,
  `major` varchar(200) DEFAULT NULL,
  `institute` int(11) DEFAULT NULL,
  `graduate_year` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user_degree`
--

INSERT INTO `user_degree` (`id`, `user`, `degree`, `major`, `institute`, `graduate_year`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(2, 6, 1, 'Computer Science', 8, 1987, NULL, NULL, NULL, NULL),
(8, 6, 2, 'Computer Science', 14, 2004, NULL, NULL, NULL, NULL),
(9, 6, 3, 'Computer Science', 15, 2010, NULL, NULL, NULL, NULL),
(10, 7, 1, 'Computer Science', 16, 1992, NULL, NULL, NULL, NULL),
(11, 7, 1, '', 22, 1970, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_position`
--

CREATE TABLE IF NOT EXISTS `user_position` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user` int(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `department` int(11) DEFAULT NULL,
  `affiliation` int(11) DEFAULT NULL,
  `start` int(11) DEFAULT NULL,
  `end` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_position`
--

INSERT INTO `user_position` (`id`, `user`, `title`, `department`, `affiliation`, `start`, `end`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 7, 'Professor', 1, 17, 2000, 2007, NULL, NULL, NULL, NULL),
(3, 7, 'Professor', 3, 19, 2008, 2012, NULL, NULL, NULL, NULL),
(4, 7, '', 4, 23, 1970, 1970, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE IF NOT EXISTS `venue` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(400) DEFAULT NULL,
  `address` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`id`, `name`, `address`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'Test Venue', 1, NULL, NULL, NULL, NULL),
(2, 'Test Venue', 2, NULL, NULL, NULL, NULL),
(3, 'Test Venue', 3, NULL, NULL, NULL, NULL),
(4, 'Test Venue', 4, NULL, NULL, NULL, NULL),
(5, 'Test Venue', 5, NULL, NULL, NULL, NULL),
(6, 'Test Venue', 6, NULL, NULL, NULL, NULL),
(7, 'Test Venue', 7, NULL, NULL, NULL, NULL),
(8, 'Test Venue', 8, NULL, NULL, NULL, NULL),
(9, 'Test', 9, NULL, NULL, NULL, NULL),
(10, 'Test', 10, NULL, NULL, NULL, NULL),
(11, '', 11, NULL, NULL, NULL, NULL),
(12, '', 12, NULL, NULL, NULL, NULL),
(13, '', 13, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
