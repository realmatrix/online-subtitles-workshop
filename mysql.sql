-- phpMyAdmin SQL Dump
-- version 3.5.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2013 at 07:33 AM
-- Server version: 5.5.29-log
-- PHP Version: 5.3.21

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `new`
--

-- --------------------------------------------------------

--
-- Table structure for table `Forums`
--

CREATE TABLE IF NOT EXISTS `Forums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL,
  `IsCategory` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ForumThreads`
--

CREATE TABLE IF NOT EXISTS `ForumThreads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `forum` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `uid` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Groups`
--

CREATE TABLE IF NOT EXISTS `Groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `Groups`
--

INSERT INTO `Groups` (`id`, `group`) VALUES
(1, 'admins'),
(2, 'moderators'),
(3, 'users'),
(4, 'approval');

-- --------------------------------------------------------

--
-- Table structure for table `Language`
--

CREATE TABLE IF NOT EXISTS `Language` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `language` varchar(50) NOT NULL,
  `iso639code` varchar(2) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `Language`
--

INSERT INTO `Language` (`id`, `language`, `iso639code`, `status`) VALUES
(1, 'Alemannisch', 'al', 0),
(2, 'Ænglisc', 'an', 0),
(3, 'العربية', 'ar', 0),
(4, 'سنڌي', 'sd', 0),
(5, 'Azərbaycanca', 'az', 0),
(6, 'Български', 'bg', 0),
(7, 'Bahasa Banjar', 'bj', 0),
(8, 'বাংলা', 'bn', 0),
(9, 'Català', 'ca', 0),
(10, 'Česky', 'cs', 0),
(11, 'Словѣ́ньскъ', 'cu', 0),
(12, 'Deutsch', 'de', 0),
(13, 'Ελληνικά', 'el', 0),
(14, 'English', 'en', 0),
(15, 'Esperanto', 'eo', 0),
(16, 'Español', 'es', 0),
(17, 'فارسی', 'fa', 0),
(18, 'Suomi', 'fi', 0),
(19, 'Français', 'fr', 0),
(20, 'ગુજરાતી', 'gu', 0),
(21, 'עברית', 'he', 0),
(22, 'हिन्दी', 'hi', 0),
(23, 'Հայերեն', 'hy', 0),
(24, 'Bahasa Indonesia', 'id', 0),
(25, 'मराठी', 'mr', 0),
(26, 'Italiano', 'it', 0),
(27, '日本語', 'ja', 0),
(28, 'Basa Jawa', 'jv', 0),
(29, 'ქართული', 'ka', 0),
(30, '한국어', 'ko', 0),
(31, 'Latviešu', 'lv', 0),
(32, 'Lietuvių', 'lt', 0),
(33, 'Magyar', 'hu', 0),
(34, 'Bahasa Melayu', 'ms', 0),
(35, 'Македонски', 'mk', 0),
(36, 'مازِرونی', 'mz', 0),
(37, 'नेपाल भाषा', 'ne', 0),
(38, 'नेपाली', 'ne', 0),
(39, 'ਪੰਜਾਬੀ', 'pa', 0),
(40, 'Polski', 'pl', 0),
(41, 'پښتو', 'ps', 0),
(42, 'Português', 'pt', 0),
(43, 'Română', 'ro', 0),
(44, 'Русский', 'ru', 0),
(45, 'Svenska', 'sv', 0),
(46, 'தமிழ்', 'ta', 0),
(47, 'ไทย', 'th', 0),
(48, 'Türkçe', 'tr', 0),
(49, 'Українська', 'uk', 0),
(50, 'Tiếng Việt', 'vi', 0),
(51, 'Yorùbá', 'yo', 0),
(52, '中文', 'zh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `OnlineUsers`
--

CREATE TABLE IF NOT EXISTS `OnlineUsers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session` varchar(100) NOT NULL,
  `time` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `OnlineUsers`
--

INSERT INTO `OnlineUsers` (`id`, `session`, `time`, `username`) VALUES
(21, 'bqdpq4sg7jfq1itltgkma3i441', 1369116625, '');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `BirthYear` int(11) NOT NULL,
  `group` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `username`, `password`, `email`, `BirthYear`, `group`) VALUES
(18, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'test@test.test', 2009, 3),
(19, 'ghfghh', '7e240de74fb1ed08fa08d38063f6a6a91462a815', 'dsd@sd.sd', 2006, 3);

-- --------------------------------------------------------

--
-- Table structure for table `VideoCategory`
--

CREATE TABLE IF NOT EXISTS `VideoCategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `VideoType`
--

CREATE TABLE IF NOT EXISTS `VideoType` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `VideoType`
--

INSERT INTO `VideoType` (`id`, `type`) VALUES
(1, 'movie'),
(2, 'tv show'),
(3, 'anime');
