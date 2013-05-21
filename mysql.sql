-- phpMyAdmin SQL Dump
-- version 3.4.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 09, 2011 at 11:07 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wikipa`
--

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE IF NOT EXISTS `Language` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `language` varchar(50) NOT NULL,
  `iso639code` varchar(2) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `language`
--

INSERT INTO `Language` (`id`, `languag`, `iso639code`, `status`) VALUES
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
