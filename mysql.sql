-- phpMyAdmin SQL Dump
-- version 3.5.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 06, 2013 at 02:51 PM
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
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group`) VALUES
(1, 'admins'),
(2, 'moderators'),
(3, 'users'),
(4, 'approval');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `OnlineUsers`
--

INSERT INTO `OnlineUsers` (`id`, `session`, `time`, `username`) VALUES
(5, 'jj0a8258a4g5mp5it3bbg31s70', 1367634132, ''),
(7, 'fkmr8egmjf92g9heqll7pkdj30', 1367727502, 'test'),
(8, 'efsigrror7pln8cud3fj1mqii0', 1367742735, ''),
(10, 'aubelj8s9s63q63fcin9fk6kt7', 1367808974, ''),
(12, 'klnapinjrcidk0cqoo3n7n3hb0', 1367841233, 'test'),
(13, '?', 0, ''),
(14, 'es77s9tenhlk11c2oktnti2hq3', 1367846115, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `BirthYear`, `group`) VALUES
(18, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'test@test.test', 2009, 3),
(19, 'ghfghh', '7e240de74fb1ed08fa08d38063f6a6a91462a815', 'dsd@sd.sd', 2006, 3);