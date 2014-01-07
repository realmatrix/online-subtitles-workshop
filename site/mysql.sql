-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 07, 2014 at 05:14 PM
-- Server version: 5.5.29
-- PHP Version: 5.3.20

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `new_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminwidgets`
--

CREATE TABLE IF NOT EXISTS `adminwidgets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `adminwidgets`
--

INSERT INTO `adminwidgets` (`id`, `name`, `state`) VALUES
(1, 'widget_shoutbox', 1),
(2, 'widget_login', 1),
(3, 'widget_UserInfo', 1),
(4, 'widget_NewsLetter', 1),
(5, 'widget_QuickLinks', 1),
(6, 'widget_Manage', 1),
(7, 'widget_FeaturedVideos', 1),
(8, 'widget_ThumbnailsGallery', 0),
(9, 'widget_TeamChat', 1),
(10, 'widget_breadcrumbs', 1),
(11, 'widget_QuickAccess', 1),
(12, 'widget_ForumLatest', 1),
(13, 'widget_latest', 1),
(14, 'widget_LatestNewsByCategory', 1),
(15, 'widget_LatestVideosByCategory', 1),
(16, 'widget_top10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cds`
--

CREATE TABLE IF NOT EXISTS `cds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cd` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `cds`
--

INSERT INTO `cds` (`id`, `cd`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30),
(31, 30);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `uid` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `date`, `uid`, `text`, `username`) VALUES
(1, '2014-01-08 00:00:00', 1, '2', '3');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `iso2` char(2) DEFAULT NULL,
  `short_name` varchar(80) NOT NULL DEFAULT '',
  `long_name` varchar(80) NOT NULL DEFAULT '',
  `iso3` char(3) DEFAULT NULL,
  `numcode` varchar(6) DEFAULT NULL,
  `un_member` varchar(12) DEFAULT NULL,
  `calling_code` varchar(8) DEFAULT NULL,
  `cctld` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=251 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `iso2`, `short_name`, `long_name`, `iso3`, `numcode`, `un_member`, `calling_code`, `cctld`) VALUES
(1, 'AF', 'Afghanistan', 'Islamic Republic of Afghanistan', 'AFG', '004', 'yes', '93', '.af'),
(2, 'AX', 'Aland Islands', '&Aring;land Islands', 'ALA', '248', 'no', '358', '.ax'),
(3, 'AL', 'Albania', 'Republic of Albania', 'ALB', '008', 'yes', '355', '.al'),
(4, 'DZ', 'Algeria', 'People''s Democratic Republic of Algeria', 'DZA', '012', 'yes', '213', '.dz'),
(5, 'AS', 'American Samoa', 'American Samoa', 'ASM', '016', 'no', '1+684', '.as'),
(6, 'AD', 'Andorra', 'Principality of Andorra', 'AND', '020', 'yes', '376', '.ad'),
(7, 'AO', 'Angola', 'Republic of Angola', 'AGO', '024', 'yes', '244', '.ao'),
(8, 'AI', 'Anguilla', 'Anguilla', 'AIA', '660', 'no', '1+264', '.ai'),
(9, 'AQ', 'Antarctica', 'Antarctica', 'ATA', '010', 'no', '672', '.aq'),
(10, 'AG', 'Antigua and Barbuda', 'Antigua and Barbuda', 'ATG', '028', 'yes', '1+268', '.ag'),
(11, 'AR', 'Argentina', 'Argentine Republic', 'ARG', '032', 'yes', '54', '.ar'),
(12, 'AM', 'Armenia', 'Republic of Armenia', 'ARM', '051', 'yes', '374', '.am'),
(13, 'AW', 'Aruba', 'Aruba', 'ABW', '533', 'no', '297', '.aw'),
(14, 'AU', 'Australia', 'Commonwealth of Australia', 'AUS', '036', 'yes', '61', '.au'),
(15, 'AT', 'Austria', 'Republic of Austria', 'AUT', '040', 'yes', '43', '.at'),
(16, 'AZ', 'Azerbaijan', 'Republic of Azerbaijan', 'AZE', '031', 'yes', '994', '.az'),
(17, 'BS', 'Bahamas', 'Commonwealth of The Bahamas', 'BHS', '044', 'yes', '1+242', '.bs'),
(18, 'BH', 'Bahrain', 'Kingdom of Bahrain', 'BHR', '048', 'yes', '973', '.bh'),
(19, 'BD', 'Bangladesh', 'People''s Republic of Bangladesh', 'BGD', '050', 'yes', '880', '.bd'),
(20, 'BB', 'Barbados', 'Barbados', 'BRB', '052', 'yes', '1+246', '.bb'),
(21, 'BY', 'Belarus', 'Republic of Belarus', 'BLR', '112', 'yes', '375', '.by'),
(22, 'BE', 'Belgium', 'Kingdom of Belgium', 'BEL', '056', 'yes', '32', '.be'),
(23, 'BZ', 'Belize', 'Belize', 'BLZ', '084', 'yes', '501', '.bz'),
(24, 'BJ', 'Benin', 'Republic of Benin', 'BEN', '204', 'yes', '229', '.bj'),
(25, 'BM', 'Bermuda', 'Bermuda Islands', 'BMU', '060', 'no', '1+441', '.bm'),
(26, 'BT', 'Bhutan', 'Kingdom of Bhutan', 'BTN', '064', 'yes', '975', '.bt'),
(27, 'BO', 'Bolivia', 'Plurinational State of Bolivia', 'BOL', '068', 'yes', '591', '.bo'),
(28, 'BQ', 'Bonaire, Sint Eustatius and Saba', 'Bonaire, Sint Eustatius and Saba', 'BES', '535', 'no', '599', '.bq'),
(29, 'BA', 'Bosnia and Herzegovina', 'Bosnia and Herzegovina', 'BIH', '070', 'yes', '387', '.ba'),
(30, 'BW', 'Botswana', 'Republic of Botswana', 'BWA', '072', 'yes', '267', '.bw'),
(31, 'BV', 'Bouvet Island', 'Bouvet Island', 'BVT', '074', 'no', 'NONE', '.bv'),
(32, 'BR', 'Brazil', 'Federative Republic of Brazil', 'BRA', '076', 'yes', '55', '.br'),
(33, 'IO', 'British Indian Ocean Territory', 'British Indian Ocean Territory', 'IOT', '086', 'no', '246', '.io'),
(34, 'BN', 'Brunei', 'Brunei Darussalam', 'BRN', '096', 'yes', '673', '.bn'),
(35, 'BG', 'Bulgaria', 'Republic of Bulgaria', 'BGR', '100', 'yes', '359', '.bg'),
(36, 'BF', 'Burkina Faso', 'Burkina Faso', 'BFA', '854', 'yes', '226', '.bf'),
(37, 'BI', 'Burundi', 'Republic of Burundi', 'BDI', '108', 'yes', '257', '.bi'),
(38, 'KH', 'Cambodia', 'Kingdom of Cambodia', 'KHM', '116', 'yes', '855', '.kh'),
(39, 'CM', 'Cameroon', 'Republic of Cameroon', 'CMR', '120', 'yes', '237', '.cm'),
(40, 'CA', 'Canada', 'Canada', 'CAN', '124', 'yes', '1', '.ca'),
(41, 'CV', 'Cape Verde', 'Republic of Cape Verde', 'CPV', '132', 'yes', '238', '.cv'),
(42, 'KY', 'Cayman Islands', 'The Cayman Islands', 'CYM', '136', 'no', '1+345', '.ky'),
(43, 'CF', 'Central African Republic', 'Central African Republic', 'CAF', '140', 'yes', '236', '.cf'),
(44, 'TD', 'Chad', 'Republic of Chad', 'TCD', '148', 'yes', '235', '.td'),
(45, 'CL', 'Chile', 'Republic of Chile', 'CHL', '152', 'yes', '56', '.cl'),
(46, 'CN', 'China', 'People''s Republic of China', 'CHN', '156', 'yes', '86', '.cn'),
(47, 'CX', 'Christmas Island', 'Christmas Island', 'CXR', '162', 'no', '61', '.cx'),
(48, 'CC', 'Cocos (Keeling) Islands', 'Cocos (Keeling) Islands', 'CCK', '166', 'no', '61', '.cc'),
(49, 'CO', 'Colombia', 'Republic of Colombia', 'COL', '170', 'yes', '57', '.co'),
(50, 'KM', 'Comoros', 'Union of the Comoros', 'COM', '174', 'yes', '269', '.km'),
(51, 'CG', 'Congo', 'Republic of the Congo', 'COG', '178', 'yes', '242', '.cg'),
(52, 'CK', 'Cook Islands', 'Cook Islands', 'COK', '184', 'some', '682', '.ck'),
(53, 'CR', 'Costa Rica', 'Republic of Costa Rica', 'CRI', '188', 'yes', '506', '.cr'),
(54, 'CI', 'Cote d''ivoire (Ivory Coast)', 'Republic of C&ocirc;te D''Ivoire (Ivory Coast)', 'CIV', '384', 'yes', '225', '.ci'),
(55, 'HR', 'Croatia', 'Republic of Croatia', 'HRV', '191', 'yes', '385', '.hr'),
(56, 'CU', 'Cuba', 'Republic of Cuba', 'CUB', '192', 'yes', '53', '.cu'),
(57, 'CW', 'Curacao', 'Cura&ccedil;ao', 'CUW', '531', 'no', '599', '.cw'),
(58, 'CY', 'Cyprus', 'Republic of Cyprus', 'CYP', '196', 'yes', '357', '.cy'),
(59, 'CZ', 'Czech Republic', 'Czech Republic', 'CZE', '203', 'yes', '420', '.cz'),
(60, 'CD', 'Democratic Republic of the Congo', 'Democratic Republic of the Congo', 'COD', '180', 'yes', '243', '.cd'),
(61, 'DK', 'Denmark', 'Kingdom of Denmark', 'DNK', '208', 'yes', '45', '.dk'),
(62, 'DJ', 'Djibouti', 'Republic of Djibouti', 'DJI', '262', 'yes', '253', '.dj'),
(63, 'DM', 'Dominica', 'Commonwealth of Dominica', 'DMA', '212', 'yes', '1+767', '.dm'),
(64, 'DO', 'Dominican Republic', 'Dominican Republic', 'DOM', '214', 'yes', '1+809, 8', '.do'),
(65, 'EC', 'Ecuador', 'Republic of Ecuador', 'ECU', '218', 'yes', '593', '.ec'),
(66, 'EG', 'Egypt', 'Arab Republic of Egypt', 'EGY', '818', 'yes', '20', '.eg'),
(67, 'SV', 'El Salvador', 'Republic of El Salvador', 'SLV', '222', 'yes', '503', '.sv'),
(68, 'GQ', 'Equatorial Guinea', 'Republic of Equatorial Guinea', 'GNQ', '226', 'yes', '240', '.gq'),
(69, 'ER', 'Eritrea', 'State of Eritrea', 'ERI', '232', 'yes', '291', '.er'),
(70, 'EE', 'Estonia', 'Republic of Estonia', 'EST', '233', 'yes', '372', '.ee'),
(71, 'ET', 'Ethiopia', 'Federal Democratic Republic of Ethiopia', 'ETH', '231', 'yes', '251', '.et'),
(72, 'FK', 'Falkland Islands (Malvinas)', 'The Falkland Islands (Malvinas)', 'FLK', '238', 'no', '500', '.fk'),
(73, 'FO', 'Faroe Islands', 'The Faroe Islands', 'FRO', '234', 'no', '298', '.fo'),
(74, 'FJ', 'Fiji', 'Republic of Fiji', 'FJI', '242', 'yes', '679', '.fj'),
(75, 'FI', 'Finland', 'Republic of Finland', 'FIN', '246', 'yes', '358', '.fi'),
(76, 'FR', 'France', 'French Republic', 'FRA', '250', 'yes', '33', '.fr'),
(77, 'GF', 'French Guiana', 'French Guiana', 'GUF', '254', 'no', '594', '.gf'),
(78, 'PF', 'French Polynesia', 'French Polynesia', 'PYF', '258', 'no', '689', '.pf'),
(79, 'TF', 'French Southern Territories', 'French Southern Territories', 'ATF', '260', 'no', NULL, '.tf'),
(80, 'GA', 'Gabon', 'Gabonese Republic', 'GAB', '266', 'yes', '241', '.ga'),
(81, 'GM', 'Gambia', 'Republic of The Gambia', 'GMB', '270', 'yes', '220', '.gm'),
(82, 'GE', 'Georgia', 'Georgia', 'GEO', '268', 'yes', '995', '.ge'),
(83, 'DE', 'Germany', 'Federal Republic of Germany', 'DEU', '276', 'yes', '49', '.de'),
(84, 'GH', 'Ghana', 'Republic of Ghana', 'GHA', '288', 'yes', '233', '.gh'),
(85, 'GI', 'Gibraltar', 'Gibraltar', 'GIB', '292', 'no', '350', '.gi'),
(86, 'GR', 'Greece', 'Hellenic Republic', 'GRC', '300', 'yes', '30', '.gr'),
(87, 'GL', 'Greenland', 'Greenland', 'GRL', '304', 'no', '299', '.gl'),
(88, 'GD', 'Grenada', 'Grenada', 'GRD', '308', 'yes', '1+473', '.gd'),
(89, 'GP', 'Guadaloupe', 'Guadeloupe', 'GLP', '312', 'no', '590', '.gp'),
(90, 'GU', 'Guam', 'Guam', 'GUM', '316', 'no', '1+671', '.gu'),
(91, 'GT', 'Guatemala', 'Republic of Guatemala', 'GTM', '320', 'yes', '502', '.gt'),
(92, 'GG', 'Guernsey', 'Guernsey', 'GGY', '831', 'no', '44', '.gg'),
(93, 'GN', 'Guinea', 'Republic of Guinea', 'GIN', '324', 'yes', '224', '.gn'),
(94, 'GW', 'Guinea-Bissau', 'Republic of Guinea-Bissau', 'GNB', '624', 'yes', '245', '.gw'),
(95, 'GY', 'Guyana', 'Co-operative Republic of Guyana', 'GUY', '328', 'yes', '592', '.gy'),
(96, 'HT', 'Haiti', 'Republic of Haiti', 'HTI', '332', 'yes', '509', '.ht'),
(97, 'HM', 'Heard Island and McDonald Islands', 'Heard Island and McDonald Islands', 'HMD', '334', 'no', 'NONE', '.hm'),
(98, 'HN', 'Honduras', 'Republic of Honduras', 'HND', '340', 'yes', '504', '.hn'),
(99, 'HK', 'Hong Kong', 'Hong Kong', 'HKG', '344', 'no', '852', '.hk'),
(100, 'HU', 'Hungary', 'Hungary', 'HUN', '348', 'yes', '36', '.hu'),
(101, 'IS', 'Iceland', 'Republic of Iceland', 'ISL', '352', 'yes', '354', '.is'),
(102, 'IN', 'India', 'Republic of India', 'IND', '356', 'yes', '91', '.in'),
(103, 'ID', 'Indonesia', 'Republic of Indonesia', 'IDN', '360', 'yes', '62', '.id'),
(104, 'IR', 'Iran', 'Islamic Republic of Iran', 'IRN', '364', 'yes', '98', '.ir'),
(105, 'IQ', 'Iraq', 'Republic of Iraq', 'IRQ', '368', 'yes', '964', '.iq'),
(106, 'IE', 'Ireland', 'Ireland', 'IRL', '372', 'yes', '353', '.ie'),
(107, 'IM', 'Isle of Man', 'Isle of Man', 'IMN', '833', 'no', '44', '.im'),
(108, 'IL', 'Israel', 'State of Israel', 'ISR', '376', 'yes', '972', '.il'),
(109, 'IT', 'Italy', 'Italian Republic', 'ITA', '380', 'yes', '39', '.jm'),
(110, 'JM', 'Jamaica', 'Jamaica', 'JAM', '388', 'yes', '1+876', '.jm'),
(111, 'JP', 'Japan', 'Japan', 'JPN', '392', 'yes', '81', '.jp'),
(112, 'JE', 'Jersey', 'The Bailiwick of Jersey', 'JEY', '832', 'no', '44', '.je'),
(113, 'JO', 'Jordan', 'Hashemite Kingdom of Jordan', 'JOR', '400', 'yes', '962', '.jo'),
(114, 'KZ', 'Kazakhstan', 'Republic of Kazakhstan', 'KAZ', '398', 'yes', '7', '.kz'),
(115, 'KE', 'Kenya', 'Republic of Kenya', 'KEN', '404', 'yes', '254', '.ke'),
(116, 'KI', 'Kiribati', 'Republic of Kiribati', 'KIR', '296', 'yes', '686', '.ki'),
(117, 'XK', 'Kosovo', 'Republic of Kosovo', '---', '---', 'some', '381', ''),
(118, 'KW', 'Kuwait', 'State of Kuwait', 'KWT', '414', 'yes', '965', '.kw'),
(119, 'KG', 'Kyrgyzstan', 'Kyrgyz Republic', 'KGZ', '417', 'yes', '996', '.kg'),
(120, 'LA', 'Laos', 'Lao People''s Democratic Republic', 'LAO', '418', 'yes', '856', '.la'),
(121, 'LV', 'Latvia', 'Republic of Latvia', 'LVA', '428', 'yes', '371', '.lv'),
(122, 'LB', 'Lebanon', 'Republic of Lebanon', 'LBN', '422', 'yes', '961', '.lb'),
(123, 'LS', 'Lesotho', 'Kingdom of Lesotho', 'LSO', '426', 'yes', '266', '.ls'),
(124, 'LR', 'Liberia', 'Republic of Liberia', 'LBR', '430', 'yes', '231', '.lr'),
(125, 'LY', 'Libya', 'Libya', 'LBY', '434', 'yes', '218', '.ly'),
(126, 'LI', 'Liechtenstein', 'Principality of Liechtenstein', 'LIE', '438', 'yes', '423', '.li'),
(127, 'LT', 'Lithuania', 'Republic of Lithuania', 'LTU', '440', 'yes', '370', '.lt'),
(128, 'LU', 'Luxembourg', 'Grand Duchy of Luxembourg', 'LUX', '442', 'yes', '352', '.lu'),
(129, 'MO', 'Macao', 'The Macao Special Administrative Region', 'MAC', '446', 'no', '853', '.mo'),
(130, 'MK', 'Macedonia', 'The Former Yugoslav Republic of Macedonia', 'MKD', '807', 'yes', '389', '.mk'),
(131, 'MG', 'Madagascar', 'Republic of Madagascar', 'MDG', '450', 'yes', '261', '.mg'),
(132, 'MW', 'Malawi', 'Republic of Malawi', 'MWI', '454', 'yes', '265', '.mw'),
(133, 'MY', 'Malaysia', 'Malaysia', 'MYS', '458', 'yes', '60', '.my'),
(134, 'MV', 'Maldives', 'Republic of Maldives', 'MDV', '462', 'yes', '960', '.mv'),
(135, 'ML', 'Mali', 'Republic of Mali', 'MLI', '466', 'yes', '223', '.ml'),
(136, 'MT', 'Malta', 'Republic of Malta', 'MLT', '470', 'yes', '356', '.mt'),
(137, 'MH', 'Marshall Islands', 'Republic of the Marshall Islands', 'MHL', '584', 'yes', '692', '.mh'),
(138, 'MQ', 'Martinique', 'Martinique', 'MTQ', '474', 'no', '596', '.mq'),
(139, 'MR', 'Mauritania', 'Islamic Republic of Mauritania', 'MRT', '478', 'yes', '222', '.mr'),
(140, 'MU', 'Mauritius', 'Republic of Mauritius', 'MUS', '480', 'yes', '230', '.mu'),
(141, 'YT', 'Mayotte', 'Mayotte', 'MYT', '175', 'no', '262', '.yt'),
(142, 'MX', 'Mexico', 'United Mexican States', 'MEX', '484', 'yes', '52', '.mx'),
(143, 'FM', 'Micronesia', 'Federated States of Micronesia', 'FSM', '583', 'yes', '691', '.fm'),
(144, 'MD', 'Moldava', 'Republic of Moldova', 'MDA', '498', 'yes', '373', '.md'),
(145, 'MC', 'Monaco', 'Principality of Monaco', 'MCO', '492', 'yes', '377', '.mc'),
(146, 'MN', 'Mongolia', 'Mongolia', 'MNG', '496', 'yes', '976', '.mn'),
(147, 'ME', 'Montenegro', 'Montenegro', 'MNE', '499', 'yes', '382', '.me'),
(148, 'MS', 'Montserrat', 'Montserrat', 'MSR', '500', 'no', '1+664', '.ms'),
(149, 'MA', 'Morocco', 'Kingdom of Morocco', 'MAR', '504', 'yes', '212', '.ma'),
(150, 'MZ', 'Mozambique', 'Republic of Mozambique', 'MOZ', '508', 'yes', '258', '.mz'),
(151, 'MM', 'Myanmar (Burma)', 'Republic of the Union of Myanmar', 'MMR', '104', 'yes', '95', '.mm'),
(152, 'NA', 'Namibia', 'Republic of Namibia', 'NAM', '516', 'yes', '264', '.na'),
(153, 'NR', 'Nauru', 'Republic of Nauru', 'NRU', '520', 'yes', '674', '.nr'),
(154, 'NP', 'Nepal', 'Federal Democratic Republic of Nepal', 'NPL', '524', 'yes', '977', '.np'),
(155, 'NL', 'Netherlands', 'Kingdom of the Netherlands', 'NLD', '528', 'yes', '31', '.nl'),
(156, 'NC', 'New Caledonia', 'New Caledonia', 'NCL', '540', 'no', '687', '.nc'),
(157, 'NZ', 'New Zealand', 'New Zealand', 'NZL', '554', 'yes', '64', '.nz'),
(158, 'NI', 'Nicaragua', 'Republic of Nicaragua', 'NIC', '558', 'yes', '505', '.ni'),
(159, 'NE', 'Niger', 'Republic of Niger', 'NER', '562', 'yes', '227', '.ne'),
(160, 'NG', 'Nigeria', 'Federal Republic of Nigeria', 'NGA', '566', 'yes', '234', '.ng'),
(161, 'NU', 'Niue', 'Niue', 'NIU', '570', 'some', '683', '.nu'),
(162, 'NF', 'Norfolk Island', 'Norfolk Island', 'NFK', '574', 'no', '672', '.nf'),
(163, 'KP', 'North Korea', 'Democratic People''s Republic of Korea', 'PRK', '408', 'yes', '850', '.kp'),
(164, 'MP', 'Northern Mariana Islands', 'Northern Mariana Islands', 'MNP', '580', 'no', '1+670', '.mp'),
(165, 'NO', 'Norway', 'Kingdom of Norway', 'NOR', '578', 'yes', '47', '.no'),
(166, 'OM', 'Oman', 'Sultanate of Oman', 'OMN', '512', 'yes', '968', '.om'),
(167, 'PK', 'Pakistan', 'Islamic Republic of Pakistan', 'PAK', '586', 'yes', '92', '.pk'),
(168, 'PW', 'Palau', 'Republic of Palau', 'PLW', '585', 'yes', '680', '.pw'),
(169, 'PS', 'Palestine', 'State of Palestine (or Occupied Palestinian Territory)', 'PSE', '275', 'some', '970', '.ps'),
(170, 'PA', 'Panama', 'Republic of Panama', 'PAN', '591', 'yes', '507', '.pa'),
(171, 'PG', 'Papua New Guinea', 'Independent State of Papua New Guinea', 'PNG', '598', 'yes', '675', '.pg'),
(172, 'PY', 'Paraguay', 'Republic of Paraguay', 'PRY', '600', 'yes', '595', '.py'),
(173, 'PE', 'Peru', 'Republic of Peru', 'PER', '604', 'yes', '51', '.pe'),
(174, 'PH', 'Phillipines', 'Republic of the Philippines', 'PHL', '608', 'yes', '63', '.ph'),
(175, 'PN', 'Pitcairn', 'Pitcairn', 'PCN', '612', 'no', 'NONE', '.pn'),
(176, 'PL', 'Poland', 'Republic of Poland', 'POL', '616', 'yes', '48', '.pl'),
(177, 'PT', 'Portugal', 'Portuguese Republic', 'PRT', '620', 'yes', '351', '.pt'),
(178, 'PR', 'Puerto Rico', 'Commonwealth of Puerto Rico', 'PRI', '630', 'no', '1+939', '.pr'),
(179, 'QA', 'Qatar', 'State of Qatar', 'QAT', '634', 'yes', '974', '.qa'),
(180, 'RE', 'Reunion', 'R&eacute;union', 'REU', '638', 'no', '262', '.re'),
(181, 'RO', 'Romania', 'Romania', 'ROU', '642', 'yes', '40', '.ro'),
(182, 'RU', 'Russia', 'Russian Federation', 'RUS', '643', 'yes', '7', '.ru'),
(183, 'RW', 'Rwanda', 'Republic of Rwanda', 'RWA', '646', 'yes', '250', '.rw'),
(184, 'BL', 'Saint Barthelemy', 'Saint Barth&eacute;lemy', 'BLM', '652', 'no', '590', '.bl'),
(185, 'SH', 'Saint Helena', 'Saint Helena, Ascension and Tristan da Cunha', 'SHN', '654', 'no', '290', '.sh'),
(186, 'KN', 'Saint Kitts and Nevis', 'Federation of Saint Christopher and Nevis', 'KNA', '659', 'yes', '1+869', '.kn'),
(187, 'LC', 'Saint Lucia', 'Saint Lucia', 'LCA', '662', 'yes', '1+758', '.lc'),
(188, 'MF', 'Saint Martin', 'Saint Martin', 'MAF', '663', 'no', '590', '.mf'),
(189, 'PM', 'Saint Pierre and Miquelon', 'Saint Pierre and Miquelon', 'SPM', '666', 'no', '508', '.pm'),
(190, 'VC', 'Saint Vincent and the Grenadines', 'Saint Vincent and the Grenadines', 'VCT', '670', 'yes', '1+784', '.vc'),
(191, 'WS', 'Samoa', 'Independent State of Samoa', 'WSM', '882', 'yes', '685', '.ws'),
(192, 'SM', 'San Marino', 'Republic of San Marino', 'SMR', '674', 'yes', '378', '.sm'),
(193, 'ST', 'Sao Tome and Principe', 'Democratic Republic of S&atilde;o Tom&eacute; and Pr&iacute;ncipe', 'STP', '678', 'yes', '239', '.st'),
(194, 'SA', 'Saudi Arabia', 'Kingdom of Saudi Arabia', 'SAU', '682', 'yes', '966', '.sa'),
(195, 'SN', 'Senegal', 'Republic of Senegal', 'SEN', '686', 'yes', '221', '.sn'),
(196, 'RS', 'Serbia', 'Republic of Serbia', 'SRB', '688', 'yes', '381', '.rs'),
(197, 'SC', 'Seychelles', 'Republic of Seychelles', 'SYC', '690', 'yes', '248', '.sc'),
(198, 'SL', 'Sierra Leone', 'Republic of Sierra Leone', 'SLE', '694', 'yes', '232', '.sl'),
(199, 'SG', 'Singapore', 'Republic of Singapore', 'SGP', '702', 'yes', '65', '.sg'),
(200, 'SX', 'Sint Maarten', 'Sint Maarten', 'SXM', '534', 'no', '1+721', '.sx'),
(201, 'SK', 'Slovakia', 'Slovak Republic', 'SVK', '703', 'yes', '421', '.sk'),
(202, 'SI', 'Slovenia', 'Republic of Slovenia', 'SVN', '705', 'yes', '386', '.si'),
(203, 'SB', 'Solomon Islands', 'Solomon Islands', 'SLB', '090', 'yes', '677', '.sb'),
(204, 'SO', 'Somalia', 'Somali Republic', 'SOM', '706', 'yes', '252', '.so'),
(205, 'ZA', 'South Africa', 'Republic of South Africa', 'ZAF', '710', 'yes', '27', '.za'),
(206, 'GS', 'South Georgia and the South Sandwich Islands', 'South Georgia and the South Sandwich Islands', 'SGS', '239', 'no', '500', '.gs'),
(207, 'KR', 'South Korea', 'Republic of Korea', 'KOR', '410', 'yes', '82', '.kr'),
(208, 'SS', 'South Sudan', 'Republic of South Sudan', 'SSD', '728', 'yes', '211', '.ss'),
(209, 'ES', 'Spain', 'Kingdom of Spain', 'ESP', '724', 'yes', '34', '.es'),
(210, 'LK', 'Sri Lanka', 'Democratic Socialist Republic of Sri Lanka', 'LKA', '144', 'yes', '94', '.lk'),
(211, 'SD', 'Sudan', 'Republic of the Sudan', 'SDN', '729', 'yes', '249', '.sd'),
(212, 'SR', 'Suriname', 'Republic of Suriname', 'SUR', '740', 'yes', '597', '.sr'),
(213, 'SJ', 'Svalbard and Jan Mayen', 'Svalbard and Jan Mayen', 'SJM', '744', 'no', '47', '.sj'),
(214, 'SZ', 'Swaziland', 'Kingdom of Swaziland', 'SWZ', '748', 'yes', '268', '.sz'),
(215, 'SE', 'Sweden', 'Kingdom of Sweden', 'SWE', '752', 'yes', '46', '.se'),
(216, 'CH', 'Switzerland', 'Swiss Confederation', 'CHE', '756', 'yes', '41', '.ch'),
(217, 'SY', 'Syria', 'Syrian Arab Republic', 'SYR', '760', 'yes', '963', '.sy'),
(218, 'TW', 'Taiwan', 'Republic of China (Taiwan)', 'TWN', '158', 'former', '886', '.tw'),
(219, 'TJ', 'Tajikistan', 'Republic of Tajikistan', 'TJK', '762', 'yes', '992', '.tj'),
(220, 'TZ', 'Tanzania', 'United Republic of Tanzania', 'TZA', '834', 'yes', '255', '.tz'),
(221, 'TH', 'Thailand', 'Kingdom of Thailand', 'THA', '764', 'yes', '66', '.th'),
(222, 'TL', 'Timor-Leste (East Timor)', 'Democratic Republic of Timor-Leste', 'TLS', '626', 'yes', '670', '.tl'),
(223, 'TG', 'Togo', 'Togolese Republic', 'TGO', '768', 'yes', '228', '.tg'),
(224, 'TK', 'Tokelau', 'Tokelau', 'TKL', '772', 'no', '690', '.tk'),
(225, 'TO', 'Tonga', 'Kingdom of Tonga', 'TON', '776', 'yes', '676', '.to'),
(226, 'TT', 'Trinidad and Tobago', 'Republic of Trinidad and Tobago', 'TTO', '780', 'yes', '1+868', '.tt'),
(227, 'TN', 'Tunisia', 'Republic of Tunisia', 'TUN', '788', 'yes', '216', '.tn'),
(228, 'TR', 'Turkey', 'Republic of Turkey', 'TUR', '792', 'yes', '90', '.tr'),
(229, 'TM', 'Turkmenistan', 'Turkmenistan', 'TKM', '795', 'yes', '993', '.tm'),
(230, 'TC', 'Turks and Caicos Islands', 'Turks and Caicos Islands', 'TCA', '796', 'no', '1+649', '.tc'),
(231, 'TV', 'Tuvalu', 'Tuvalu', 'TUV', '798', 'yes', '688', '.tv'),
(232, 'UG', 'Uganda', 'Republic of Uganda', 'UGA', '800', 'yes', '256', '.ug'),
(233, 'UA', 'Ukraine', 'Ukraine', 'UKR', '804', 'yes', '380', '.ua'),
(234, 'AE', 'United Arab Emirates', 'United Arab Emirates', 'ARE', '784', 'yes', '971', '.ae'),
(235, 'GB', 'United Kingdom', 'United Kingdom of Great Britain and Nothern Ireland', 'GBR', '826', 'yes', '44', '.uk'),
(236, 'US', 'United States', 'United States of America', 'USA', '840', 'yes', '1', '.us'),
(237, 'UM', 'United States Minor Outlying Islands', 'United States Minor Outlying Islands', 'UMI', '581', 'no', 'NONE', 'NONE'),
(238, 'UY', 'Uruguay', 'Eastern Republic of Uruguay', 'URY', '858', 'yes', '598', '.uy'),
(239, 'UZ', 'Uzbekistan', 'Republic of Uzbekistan', 'UZB', '860', 'yes', '998', '.uz'),
(240, 'VU', 'Vanuatu', 'Republic of Vanuatu', 'VUT', '548', 'yes', '678', '.vu'),
(241, 'VA', 'Vatican City', 'State of the Vatican City', 'VAT', '336', 'no', '39', '.va'),
(242, 'VE', 'Venezuela', 'Bolivarian Republic of Venezuela', 'VEN', '862', 'yes', '58', '.ve'),
(243, 'VN', 'Vietnam', 'Socialist Republic of Vietnam', 'VNM', '704', 'yes', '84', '.vn'),
(244, 'VG', 'Virgin Islands, British', 'British Virgin Islands', 'VGB', '092', 'no', '1+284', '.vg'),
(245, 'VI', 'Virgin Islands, US', 'Virgin Islands of the United States', 'VIR', '850', 'no', '1+340', '.vi'),
(246, 'WF', 'Wallis and Futuna', 'Wallis and Futuna', 'WLF', '876', 'no', '681', '.wf'),
(247, 'EH', 'Western Sahara', 'Western Sahara', 'ESH', '732', 'no', '212', '.eh'),
(248, 'YE', 'Yemen', 'Republic of Yemen', 'YEM', '887', 'yes', '967', '.ye'),
(249, 'ZM', 'Zambia', 'Republic of Zambia', 'ZMB', '894', 'yes', '260', '.zm'),
(250, 'ZW', 'Zimbabwe', 'Republic of Zimbabwe', 'ZWE', '716', 'yes', '263', '.zw');

-- --------------------------------------------------------

--
-- Table structure for table `failedlogins`
--

CREATE TABLE IF NOT EXISTS `failedlogins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tries` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ip` (`ip`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `failedlogins`
--

INSERT INTO `failedlogins` (`id`, `ip`, `tries`, `time`) VALUES
(5, '127.0.0.1', 9, 1388578116);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `q` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `q`, `a`) VALUES
(1, 'How to create new account', 'dfjhb sdofijhdsoifh dsoifh sdoiufhdsoiufh'),
(2, 'How to add new video', ''),
(3, 'How to add new subtitle', ''),
(4, 'how to create new team', ''),
(5, 'how to add new user to team', '');

-- --------------------------------------------------------

--
-- Table structure for table `favouritevideos`
--

CREATE TABLE IF NOT EXISTS `favouritevideos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `favouritevideos`
--

INSERT INTO `favouritevideos` (`id`, `uid`, `vid`) VALUES
(1, 18, 27);

-- --------------------------------------------------------

--
-- Table structure for table `formats`
--

CREATE TABLE IF NOT EXISTS `formats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `format` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `formats`
--

INSERT INTO `formats` (`id`, `format`) VALUES
(1, 'DVDRip AVI'),
(2, 'WEBRIP MP4'),
(3, 'WEBRIP AVI'),
(4, 'WEBRIP 720p'),
(5, 'DVDrip MP4'),
(6, 'BDRip Avi'),
(7, 'HDRip Avi'),
(8, '720P MKV'),
(9, '1080 MKV'),
(10, 'FLV'),
(11, 'HDTV');

-- --------------------------------------------------------

--
-- Table structure for table `forumcategories`
--

CREATE TABLE IF NOT EXISTS `forumcategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `forumcategories`
--

INSERT INTO `forumcategories` (`id`, `title`, `description`) VALUES
(1, 'test cat 1', 'jhvb kjhgkjgh kjhg kjhg kjhgkjgh'),
(2, 'test cat 2', 'kg lkg lkjg lkjh lkhlkjhlkhpiojh'),
(3, 'test cat 3', 'kljgh lkhkkl;jhopijhiopjojhkljh kljhjklgh'),
(4, 'test cat 4', 'kjh lkjyhh oipjh pojhlk;jhkljhlkjhlkjh'),
(5, 'test cat 5', 'yhb opi poipoiu poi[poiuu p[iou[iu'),
(6, 'test cat 6', '0'),
(7, 'test cat 7', '0'),
(8, 'test cat 8', '0'),
(9, 'test cat 9', '0'),
(10, 'test cat 10', '0');

-- --------------------------------------------------------

--
-- Table structure for table `forumreplies`
--

CREATE TABLE IF NOT EXISTS `forumreplies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `reply` text COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `forumreplies`
--

INSERT INTO `forumreplies` (`id`, `tid`, `uid`, `reply`, `date`, `fid`) VALUES
(1, 1, 2, '3', '2013-12-17 17:20:45', 4),
(2, 7, 18, 'test reply', '2013-12-17 17:26:16', 1),
(3, 7, 18, 'new test', '2013-12-17 17:26:32', 1),
(4, 7, 18, 'test', '2013-12-17 17:27:15', 1),
(5, 7, 18, 'fhjghjgh ghjhgj', '2013-12-17 17:37:42', 1),
(6, 7, 18, '111111111111111111111111', '2013-12-17 17:38:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE IF NOT EXISTS `forums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`id`, `title`, `description`, `category`) VALUES
(1, 'test forum 1', 'test desc 1', 1),
(2, 'test forum 2', 'test desc 2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `forumthreads`
--

CREATE TABLE IF NOT EXISTS `forumthreads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `forum` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `uid` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cat` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `forumthreads`
--

INSERT INTO `forumthreads` (`id`, `forum`, `title`, `content`, `uid`, `time`, `cat`) VALUES
(1, 1, 'test thread title 1', 'test content 1', 18, '2013-07-09 22:00:00', 0),
(2, 1, 'test title 2', 'test content 2', 18, '2013-07-24 22:00:00', 0),
(3, 1, '2', '3', 4, '2013-12-17 16:57:26', 5),
(4, 1, '2', '3', 4, '2013-12-17 17:02:15', 5),
(5, 0, ':title', ':content', 0, '2013-12-17 17:03:04', 0),
(6, 1, 'aaaaaaaaaa', 'bbbbbbbbbbbbb', 18, '2013-12-17 17:03:51', 1),
(7, 1, 'dgik f;lgdflgjkdfgjk', 'dsfhsdlkfhdslkfjh sdlkfh sdlkjfh sdlkfh iouertueriwt skjfh lksdfhouiwertyth rt \r\nfdsg fdsgh fklghdfiougyhe rkthrkl hdflkgh iouertgkl erjtger\r\ngertg lkfgdfoigy eiorhgerlkg kljhviuohiopertger\r\nter toijboipgbjl;kj;lekrjerlkjt\r\nertgopegjkopijrtg', 18, '2013-12-17 17:07:37', 0),
(8, 1, 'new thread', 'test content', 18, '2013-12-26 03:56:43', 1),
(9, 2, 'dkjhdfklghj', 'df dfgklh dfglkdfjhg iuoerthskljdfhdl kjfhdjksfh', 18, '2013-12-26 03:58:07', 1),
(10, 2, 'dflisdfiopjsdflkjds', 'sdhdlskjfh slkdfjhsdf', 18, '2013-12-26 03:58:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE IF NOT EXISTS `genres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `genre`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Animation'),
(4, 'Biography'),
(5, 'Comedy'),
(6, 'Crime'),
(7, 'Documentary'),
(8, 'Drama'),
(9, 'Family'),
(10, 'Fantasy'),
(11, 'Film-Noir'),
(12, 'Game-Show'),
(13, 'History'),
(14, 'Horror'),
(15, 'Music'),
(16, 'Musical'),
(17, 'Mystery'),
(18, 'News'),
(19, 'Reality-TV'),
(20, 'Romance'),
(21, 'Sci-Fi'),
(22, 'Sport'),
(23, 'Talk-Show'),
(24, 'Thriller'),
(25, 'War'),
(26, 'Western');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group`) VALUES
(1, 'admin'),
(2, 'moderator'),
(3, 'user'),
(4, 'verified'),
(5, 'banned'),
(6, 'approved'),
(7, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `language` varchar(50) NOT NULL,
  `iso639code` varchar(2) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `language`, `iso639code`, `status`) VALUES
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
-- Table structure for table `lang_english`
--

CREATE TABLE IF NOT EXISTS `lang_english` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `key` (`key`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=228 ;

--
-- Dumping data for table `lang_english`
--

INSERT INTO `lang_english` (`id`, `key`, `text`) VALUES
(3, 'register_username', 'User Name'),
(4, 'register_password', 'Password'),
(5, 'register_password2', 'Password again'),
(6, 'register_email', 'Email'),
(7, 'register_birthyear', 'Birth year'),
(8, 'register_submit', 'Register'),
(9, 'register_NoUsername', 'Opps! You don''t enter a username!'),
(10, 'register_NoPassword', 'Opps! You didn''t enter one of your passwords!'),
(11, 'register_NoBirthYear', 'Opps! You never entered in your birth year!'),
(12, 'register_PasswordDontMatch', 'Ouch! Your passwords don''t match! Try again.'),
(13, 'register_InvalidEmail', 'Opps! That''s not an email!'),
(14, 'register_usernameaz', 'Invalid username only a-z 0-9 allowed.'),
(15, 'register_passwordaz', 'Invalid password only a-z 0-9 allowed.'),
(16, 'register_UsernameExist', 'Username already exist.'),
(17, 'register_EmailExist', 'email already exist.'),
(18, 'register_completed', 'Registration completed successfully, you will now be redirected to home page in 5 seconds.'),
(19, 'login_username', 'Username:'),
(20, 'login_password', 'Password:'),
(21, 'login_submit', 'login'),
(22, 'login_NoUsername', 'Opps! You don''t enter your username!'),
(23, 'login_NoPassword', 'Opps! You didn''t enter your passwords!'),
(24, 'login_usernameaz', 'Invalid username only a-z 0-9 allowed.'),
(25, 'login_passwordaz', 'Invalid password only a-z 0-9 allowed.'),
(26, 'login_failed', 'login failed Password was probably incorrect!.'),
(27, 'login_orregister', 'or register'),
(28, 'login_successfull', 'sucessfull login you will be redirected to home page in 5 seconds.'),
(29, 'login_welcomeback', 'welcome back '),
(30, 'logout_logout', 'logout'),
(31, 'home_test_title', 'test title for controller home section home change from language file'),
(32, 'widget_newsletter_name', 'Name:'),
(33, 'widget_newsletter_email', 'Email:'),
(34, 'widget_newsletter_submit', 'submit'),
(35, 'widget_quicklinks_addvideo', 'Add Video'),
(37, 'widget_quicklinks_logout', 'Logout'),
(38, 'video_AddVideo_title', 'Add Video'),
(39, 'video_AddVideo_NewVideoType', 'ADD A NEW'),
(40, 'video_AddVideo_VideoCategory', 'Category'),
(41, 'video_AddVideo_VideoLanguage', 'Language'),
(42, 'video_AddVideo_VideoTitle', 'Video Title'),
(43, 'video_AddVideo_VideoImage', 'Add Image'),
(44, 'video_AddVideo_VideoSubmit', 'Submit Form'),
(45, 'video_AddVideo_SelectVideoType', 'Select video type please'),
(46, 'video_AddVideo_SelectVideoCategory', 'Select video category please'),
(47, 'video_AddVideo_SelectVideoLanguage', 'Select video language please'),
(48, 'video_AddVideo_EnterVideoTitle', 'Enter video title please'),
(49, 'video_AddVideo_SelectCountry', 'Select country please'),
(50, 'video_AddVideo_EnterVideoOtherTitle', 'Enter video other title'),
(51, 'video_AddVideo_SelectGenres', 'Select video genres please'),
(52, 'video_AddVideo_SelectReleaseDay', 'Select Release Day'),
(53, 'video_AddVideo_SelectREleaseMonth', 'Select Release Month'),
(54, 'video_AddVideo_SelectReleaseYear', 'Select Release Year'),
(55, 'video_AddVideo_EnterCast', 'Enter cast information'),
(56, 'video_AddVideo_EnterDirector', 'Enter director information'),
(57, 'video_AddVideo_SelectVideoLength', 'Select video length'),
(58, 'video_AddVideo_EnterVideoTags', 'Enter video tags'),
(59, 'video_AddVideo_EnterVideoSynopsis', 'Enter video synopsis'),
(60, 'video_AddVideo_VideoType', 'Video type:'),
(61, 'video_AddVideo_Category', 'Category:'),
(62, 'video_AddVideo_Language', 'Language:'),
(63, 'video_AddVideo_Original_Title', 'Title:'),
(64, 'video_AddVideo_OtherTitle', 'Other title:'),
(65, 'video_AddVideo_Country', 'Country:'),
(66, 'video_AddVideo_Genres', 'Genres:'),
(67, 'video_AddVideo_ReleaseDate', 'Release date:'),
(68, 'video_AddVideo_Casting', 'Casting:'),
(69, 'video_AddVideo_Director', 'Director:'),
(70, 'video_AddVideo_Length', 'Length:'),
(71, 'video_AddVideo_Synopsis', 'Synopsis:'),
(72, 'video_AddVideo_Tags', 'Tags:'),
(73, 'video_AddVideo_Submit', 'Submit Video'),
(74, 'video_ViewVideo_OtherTitle', 'Other Title:'),
(75, 'video_ViewVideo_Country', 'Country:'),
(76, 'video_ViewVideo_Genre', 'Genre:'),
(77, 'video_ViewVideo_ReleaseDate', 'Release Date:'),
(78, 'video_ViewVideo_Casting', 'Casting:'),
(79, 'video_ViewVideo_Director', 'Director:'),
(80, 'video_ViewVideo_Length', 'Length:'),
(81, 'video_VideoSynopsis_Synopsis', 'Synopsis:'),
(82, 'video_UploadThumbnail_UploadThumbnail', 'Upload Thumbnail:'),
(83, 'subtitle_AddSubtitle_AddSubtitle', 'Create subtitle:'),
(84, 'subtitle_AddSubtitle_ReleaseName', 'Release Name:'),
(85, 'subtitle_AddSubtitle_Language', 'Language:'),
(86, 'subtitle_AddSubtitle_Country', 'Country:'),
(87, 'subtitle_AddSubtitle_Version', 'Version:'),
(88, 'subtitle_AddSubtitle_FPS', 'FPS:'),
(89, 'subtitle_AddSubtitle_Format', 'Format:'),
(90, 'subtitle_AddSubtitle_CDS', 'NO of cd''s:'),
(91, 'subtitle_AddSubtitle_Submit', 'Create'),
(92, 'subtitle_VideoSubtitles_VideosSubtitles', 'Video Subtitles'),
(93, 'search_AdvancedSearch_title', 'Advanced Search'),
(94, 'search_SearchResults_title', 'Search Results'),
(95, 'widget_quicklinks_addteam', 'Create Team'),
(96, 'team_AddTeam_title', 'Add Team'),
(97, 'team_AddTeam_TeamName', 'Team Name:'),
(98, 'team_AddTeam_submit', 'Submit'),
(99, 'team_ViewTeams_Title', 'Manage Teams'),
(100, 'team_ViewTeam_title', 'Team Information'),
(101, 'team_ManageTeam_title', 'Manage Team'),
(104, 'team_AddMember_title', 'Add Team Member'),
(105, 'team_AddMember_username', 'User Name:'),
(106, 'team_AddMember_submit', 'Submit'),
(107, 'subtitle_ViewSubtitle_title', 'Subtitle Information'),
(108, 'subtitle_UserSubtitles_title', 'My Subtitles'),
(109, 'subtitle_ViewSubtitle_ReleaseName', 'Release Name:'),
(110, 'subtitle_ViewSubtitle_version', 'Version:'),
(111, 'subtitle_ViewSubtitle_country', 'Country:'),
(112, 'subtitle_ViewSubtitle_language', 'Language:'),
(113, 'subtitle_ViewSubtitle_fps', 'FPS:'),
(114, 'subtitle_ViewSubtitle_format', 'Format:'),
(115, 'subtitle_ViewSubtitle_cds', 'NO of CDs:'),
(116, '', ''),
(117, 'subtitle_SubtitleEditor_title', 'Editing Subtitle'),
(118, 'subtitle_SubtitleCDS_title', 'Subtitle CDS'),
(119, 'subtitle_SubtitleListTeams_title', 'Subtitle Teams'),
(120, 'subtitle_SubtitleAddTeam_title', 'Add Team'),
(121, 'subtitle_SubtitleUploader_title', 'Upload/Create Subtitle'),
(122, 'subtitle_SubtitleUploader_cd', 'Select CD'),
(123, 'subtitle_SubtitleUploader_CDTitle', 'CD title (optional)'),
(124, 'subtitle_SubtitleUploader_SubtitleText', 'Subtitle Text'),
(125, 'subtitle_SubtitleUploader_SubtitleFile', 'Subtitle File'),
(126, 'subtitle_SubtitleUploader_note', 'note: you can add subtitle content to the text area above directly or select subtitle file to upload subtitle.'),
(127, 'subtitle_SubtitleUploader_submit', 'Upload'),
(128, 'subtitle_SubtitleDownload_title', 'Download Subtitle'),
(129, 'subtitle_EditorControls_title', 'Editor Controls'),
(130, 'player_EditorPlayer_title', 'Video Player'),
(131, 'subtitle_UserSubtitles_delete', 'Delete selected subtitles'),
(132, 'subtitles_UserSubtitles_del', 'Del'),
(133, 'subtitle_UserSubtitles_ReleaseName', 'Release Name'),
(134, 'subtitle_UserSubtitles_version', 'Version'),
(135, 'subtitle_UserSubtitles_language', 'Language'),
(136, 'subtitle_UserSubtitles_manage', 'Manage'),
(137, 'subtitle_UserSubtitles_edit', 'Edit'),
(138, 'subtitle_SubtitleCDS_edit', 'Edit'),
(139, 'video_VideoList_title', 'My Videos'),
(140, 'team_UserTeams_title', 'My Teams'),
(141, 'player_ViewPlayer_title', 'Video Player'),
(143, 'search_AdvancedSearch_VideoTitle', 'Title:'),
(144, 'search_AdvancedSearch_submit', 'search'),
(145, 'search_AdvancedSearch_reset', 'reset'),
(146, 'search_AdvancedSearch_language', 'Language'),
(147, 'search_AdvancedSearch_category', 'Category'),
(148, 'search_AdvancedSearch_genre', 'Genre'),
(149, 'search_AdvancedSearch_country', 'Country'),
(150, 'search_AdvancedSearch_year', 'Year'),
(151, 'search_AdvancedSearch_status', 'Status'),
(152, 'forum_ListForums_title', 'Forums'),
(153, 'forum_ListCategories_title', 'Categories'),
(154, 'widget_ThumbnailGallery_title', 'Video Gallery'),
(155, 'subtitle_SendPM_title', 'Send Message'),
(156, 'subtitle_UserPM_title', 'Inbox'),
(157, 'message_UserPM_from', 'From'),
(158, 'message_UserPM_subject', 'Subject'),
(159, 'message_UserPM_date', 'Date'),
(160, 'message_UserPM_del', 'Del'),
(161, 'message_UserSubtitle_submit', 'Delete selected messages'),
(162, 'video_AddVideo_VideoUrl', 'Video URL: (optional)'),
(163, 'widget_quicklinks_pms', 'Private messages'),
(164, 'subtitle_SendPM_to', 'To:'),
(165, 'subtitle_SendPM_subject', 'Subject:'),
(166, 'subtitle_SendPM_message', 'Message:'),
(167, 'subtitle_SendPM_submit', 'Send Message'),
(168, 'subtitle_ViewMessage_title', 'Message'),
(169, 'subtitle_ViewMessage_from', 'From:'),
(170, 'subtitle_ViewMessage_date', 'Date:'),
(171, 'subtitle_ViewMessage_subject', 'Subject:'),
(172, 'subtitle_ViewMessage_message', 'Message:'),
(173, 'subtitle_ReplyMessage_title', 'Reply'),
(174, 'subtitle_ReplyMessage_message', 'Message:'),
(175, 'subtitle_ReplyMessage_submit', 'Send'),
(176, 'subtitle_ReplyMessage_subject', 'Subject:'),
(177, 'forum_ListThreads_title', 'Threads'),
(178, 'forum_ViewThread_title', 'Thread'),
(180, 'subtitle_DownloadSubtitle_title', 'Download Subtitle'),
(181, 'subtitle_UserInvitations_title', 'Received Invitations'),
(182, 'subtitle_JoinedTeams_title', 'Joined Teams'),
(183, 'subtitle_ListSubtitles_title', 'Team Subtitles'),
(184, 'subtitle_ListMembers_title', 'Team Members'),
(185, 'message_ContactUs_title', 'Contact Us'),
(186, 'info_AboutUs_title', 'About Us'),
(187, 'faq_FaqList_title', 'Frequently Asked Questions'),
(188, 'team_ViewTeam_TeamName', 'Team Name:'),
(189, 'team_ViewTeam_MembersCount', 'Members Count:'),
(190, 'team_ViewTeam_Created', 'Created:'),
(191, 'team_ViewTeam_SubtitlesCount', 'Subtitles Count:'),
(192, 'team_UserProfile_title', 'User Profile'),
(193, 'widget_quicklinks_UserCp', 'Manage Account'),
(194, 'team_UserCp_title', 'User Control Panel'),
(195, 'widget_QuickAccess_title', 'Quick Access'),
(196, 'widget_QuickAccess_Videos', 'Videos:'),
(197, 'widget_QuickAccess_FavouriteVideos', 'Favourite Videos:'),
(198, 'widget_QuickAccess_Subtitles', 'Edit Subtitles:'),
(199, 'widget_QuickAccess_TeamSubtitles', 'Team Subtitles'),
(200, 'widget_QuickAccess_ManageSubtitles', 'Manage Subtitles:'),
(201, 'faq_answer_title', 'Answer'),
(202, 'message_LineInfo_title', 'Line Info'),
(203, 'subtitle_EditorInfo_title', 'Subtitle Info'),
(204, 'forum_reply_title', 'Reply'),
(205, 'forum_CreateThread_title', 'New Thread'),
(206, 'video_EditVideo_title', 'Edit Video Information'),
(207, 'video_EditVideo_NewVideoType', 'Video Type'),
(208, 'video_EditVideo_Category', 'Category'),
(209, 'video_EditVideo_Language', 'Language'),
(210, 'video_EditVideo_Original_Title', 'Title'),
(211, 'video_EditVideo_OtherTitle', 'Other Title'),
(212, 'video_EditVideo_Country', 'Country'),
(213, 'video_EditVideo_Genres', 'Genres'),
(214, 'video_EditVideo_ReleaseDate', 'Release Date'),
(215, 'video_EditVideo_Casting', 'Casting'),
(216, 'video_EditVideo_Director', 'Director'),
(217, 'video_EditVideo_Length', 'Length'),
(218, 'video_EditVideo_Synopsis', 'Synopsis'),
(219, 'video_EditVideo_Tags', 'Tags'),
(220, 'video_EditVideo_Submit', 'Edit'),
(221, 'video_EditVideo_VideoUrl', 'Video Url'),
(222, 'widget_QuickAccess_check', 'Check Subtitle:'),
(223, 'subtitle_CheckSubtitle_title', 'Check Subtitle'),
(224, 'video_ViewVideo_category', 'Category:'),
(225, 'video_ViewVideo_createdby', 'Created By:'),
(226, 'video_ViewVideo_views', 'Views:'),
(227, 'subtitle_SubtitleOptions_title', 'Subtitle Options');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `onlineusers`
--

CREATE TABLE IF NOT EXISTS `onlineusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session` varchar(100) NOT NULL,
  `time` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1493 ;

--
-- Dumping data for table `onlineusers`
--

INSERT INTO `onlineusers` (`id`, `session`, `time`, `username`) VALUES
(1492, 'p8ijtp12m0e5uv96vnvvauc0d4', 1389114700, '');

-- --------------------------------------------------------

--
-- Table structure for table `privatemessages`
--

CREATE TABLE IF NOT EXISTS `privatemessages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `opened` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `privatemessages`
--

INSERT INTO `privatemessages` (`id`, `from`, `to`, `subject`, `message`, `date`, `opened`) VALUES
(6, 18, 18, 'test subject', 'test message', '2013-07-10 08:16:46', 0),
(7, 18, 18, 'this is test subject 2', 'sdfg ;ksjhf ;sldkf ;slkjdf sdl;kfjowiqjef;sdlkjf ;lkjfi\n\nsdflkj sd;lkfj sd;lkfjoiwejfioewjrfkldjf;lsdkjf;lskjdf;lksdjfiowwjeoioij   ijerfl;ksdjf ;lskdf\n\n\nwer ;lkjksdflksdjf oisjdfoiwerjfowe4jrwejrpewokrpeowkrew \n\nwef; ljsdlfkjds;lkfj sodifj oiwejfoweijrf\nwero ijewroiwer powieuropeiwuroiweur\n\nweroijwe oruweoirueowirueiowru', '2013-07-10 22:06:48', 0),
(9, 18, 18, 'test reply subject', 'test reply message', '2013-07-10 23:08:23', 0);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`) VALUES
(1, 'run_cron_onload', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subtitlecds`
--

CREATE TABLE IF NOT EXISTS `subtitlecds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `subtitlecds`
--

INSERT INTO `subtitlecds` (`id`, `sid`, `title`) VALUES
(1, 1, 'CD 1');

-- --------------------------------------------------------

--
-- Table structure for table `subtitlepermissions`
--

CREATE TABLE IF NOT EXISTS `subtitlepermissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `addlines` int(11) NOT NULL DEFAULT '0',
  `deletelines` int(11) NOT NULL DEFAULT '0',
  `checklines` int(11) NOT NULL DEFAULT '0',
  `editlines` int(11) NOT NULL DEFAULT '0',
  `timing` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `subtitlepermissions`
--

INSERT INTO `subtitlepermissions` (`id`, `uid`, `sid`, `tid`, `addlines`, `deletelines`, `checklines`, `editlines`, `timing`) VALUES
(16, 22, 1, 4, 1, 1, 1, 1, 0),
(17, 23, 1, 4, 1, 1, 1, 1, 0),
(18, 24, 1, 4, 0, 0, 0, 0, 0),
(19, 18, 1, 4, 0, 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subtitles`
--

CREATE TABLE IF NOT EXISTS `subtitles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fps_sec` int(11) NOT NULL,
  `fps_mil_sec` int(11) NOT NULL,
  `release_name` varchar(255) NOT NULL,
  `version` varchar(255) NOT NULL,
  `language` int(11) NOT NULL,
  `format` int(11) NOT NULL,
  `cds` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `key` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `subtitles`
--

INSERT INTO `subtitles` (`id`, `fps_sec`, `fps_mil_sec`, `release_name`, `version`, `language`, `format`, `cds`, `vid`, `country`, `uid`, `key`) VALUES
(1, 8, 6, '2 guns test', '2 guns test version', 14, 2, 1, 21, 236, 18, '181383757068RiPGE');

-- --------------------------------------------------------

--
-- Table structure for table `subtitlescontent`
--

CREATE TABLE IF NOT EXISTS `subtitlescontent` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `line` int(11) NOT NULL,
  `start` varchar(12) CHARACTER SET latin1 NOT NULL,
  `end` varchar(12) CHARACTER SET latin1 NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `checked` int(11) NOT NULL DEFAULT '0' COMMENT '0=>not checked  1=>checked',
  `checked_text` text COLLATE utf8_unicode_ci NOT NULL,
  `done` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'mark line as finished',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `subtitlescontent`
--

INSERT INTO `subtitlescontent` (`id`, `sid`, `uid`, `cid`, `line`, `start`, `end`, `text`, `checked`, `checked_text`, `done`) VALUES
(1, 1, 18, 1, 1, '00:01:27,520', '00:01:28,987', '- Hi.\r\n- Hi.\r\n', 1, '- Hi.aaaaaaaaaa\n- Hi.', 0),
(2, 1, 18, 1, 2, '00:01:30,123', '00:01:31,156', 'How many?\r\n', 1, 'How many?', 0),
(3, 1, 18, 1, 3, '00:01:32,125', '00:01:33,525', 'Two.\r\n', 1, 'Two.', 0),
(4, 1, 18, 1, 4, '00:02:01,954', '00:02:06,792', 'Listen, I wanted to get a safe deposit box.\r\nCan you do that for me?\r\n', 1, 'Listen, I wanted to get a safe deposit box.\nCan you do that for me?', 0),
(5, 1, 18, 1, 5, '00:02:14,567', '00:02:16,868', 'Okay.\r\nYour box will be available\r\n', 1, 'Okay.\n Your box will be available', 0),
(6, 1, 18, 1, 6, '00:02:16,870', '00:02:18,637', 'any time from\r\nan hour after opening\r\n', 1, 'any time from\n an hour after opening', 0),
(7, 1, 18, 1, 7, '00:02:18,639', '00:02:21,173', 'to 30 minutes before close.\r\nThis is your key.\r\n', 1, 'to 30 minutes before close.\n This is your key.', 0),
(8, 1, 18, 1, 8, '00:02:21,175', '00:02:22,241', 'Thank you.\r\n', 1, 'Thank you.', 0),
(9, 1, 18, 1, 9, '00:02:22,243', '00:02:24,676', 'Oh, um, also, if you open\r\na checking account,\r\n', 1, 'Oh, um, also, if you open\n a checking account,', 0),
(10, 1, 18, 1, 10, '00:02:24,678', '00:02:27,679', 'we''ll give you 5% off the box\r\nalong with free overdraft protection.\r\n', 1, 'we''ll give you 5% off the box\n along with free overdraft protection.', 0),
(11, 1, 18, 1, 11, '00:02:27,681', '00:02:29,981', 'Oh, here I was hopin''\r\nfor a free toaster.\r\n', 0, '', 0),
(12, 1, 18, 1, 12, '00:02:31,985', '00:02:34,186', 'Why would a bank\r\ngive out free toasters?\r\n', 0, '', 0),
(13, 1, 18, 1, 13, '00:02:36,122', '00:02:37,522', 'Hello, Ma.\r\n', 0, '', 0),
(14, 1, 18, 1, 14, '00:02:37,524', '00:02:39,491', 'I''m ordering you\r\nthe French toast.\r\n', 0, '', 0),
(15, 1, 18, 1, 15, '00:02:39,493', '00:02:42,227', '- No, thank you.\r\n<i>- Our very patient waitress, Maggie,</i>\r\n', 0, '', 0),
(16, 1, 18, 1, 16, '00:02:42,229', '00:02:43,695', '<i>well, at least it says</i>\r\n<i>Maggie on her name tag,</i>\r\n', 0, '', 0),
(17, 1, 18, 1, 17, '00:02:43,697', '00:02:44,996', '<i>has asked me\r\nto order four times.</i>\r\n', 0, '', 0),
(18, 1, 18, 1, 18, '00:02:44,998', '00:02:46,698', 'If I don''t order at this point,\r\nit''s just rude.\r\n', 0, '', 0),
(19, 1, 18, 1, 19, '00:02:46,700', '00:02:48,166', '- I can come back.\r\n- No, it''s okay.\r\n', 0, '', 0),
(20, 1, 18, 1, 20, '00:02:48,168', '00:02:49,768', 'You know what?\r\nI''m making an executive decision.\r\n', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `systemcron`
--

CREATE TABLE IF NOT EXISTS `systemcron` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job` varchar(255) NOT NULL,
  `frequancy` int(11) NOT NULL,
  `last_run` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `systemcron`
--

INSERT INTO `systemcron` (`id`, `job`, `frequancy`, `last_run`) VALUES
(1, 'AutoTranslation', 300, 1389114700);

-- --------------------------------------------------------

--
-- Table structure for table `systemrouter`
--

CREATE TABLE IF NOT EXISTS `systemrouter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `head` tinyint(1) NOT NULL,
  `header` tinyint(1) NOT NULL,
  `left` tinyint(1) NOT NULL,
  `body` tinyint(1) NOT NULL,
  `right` tinyint(1) NOT NULL,
  `footer` tinyint(1) NOT NULL,
  `dataonly` tinyint(1) NOT NULL,
  `controller` tinyint(1) NOT NULL,
  `widget` tinyint(1) NOT NULL,
  `page` varchar(255) NOT NULL,
  `sec` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `page` (`page`,`sec`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `systemrouter`
--

INSERT INTO `systemrouter` (`id`, `head`, `header`, `left`, `body`, `right`, `footer`, `dataonly`, `controller`, `widget`, `page`, `sec`) VALUES
(1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'home', ''),
(2, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'video', ''),
(3, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'team', ''),
(4, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'subtitle', ''),
(6, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'home', 'home'),
(7, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'forum', ''),
(8, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'message', ''),
(9, 1, 1, 0, 1, 0, 1, 0, 0, 0, 'search', 'advanced'),
(10, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'video', 'list'),
(11, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'video', 'add'),
(12, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'team', 'add'),
(13, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'message', 'list'),
(14, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'video', 'followed'),
(15, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'subtitle', 'followed'),
(16, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'subtitle', 'list'),
(17, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'team', 'list'),
(18, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'team', 'joined'),
(19, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'forum', 'forums'),
(20, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'forum', 'threads'),
(22, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'video', 'view'),
(23, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'subtitle', 'edit'),
(24, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'subtitle', 'manage'),
(25, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'subtitle', 'view'),
(26, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'team', 'manage'),
(27, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'team', 'edit'),
(28, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'team', 'info'),
(29, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'message', 'contact'),
(30, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'info', 'about'),
(31, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'faq', 'list'),
(32, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'info', ''),
(33, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'user', 'profile'),
(34, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'user', 'cp'),
(35, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'video', 'edit'),
(36, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'subtitle', 'check');

-- --------------------------------------------------------

--
-- Table structure for table `teamchat`
--

CREATE TABLE IF NOT EXISTS `teamchat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `uid` int(11) NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sid` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Dumping data for table `teamchat`
--

INSERT INTO `teamchat` (`id`, `date`, `uid`, `text`, `sid`, `username`) VALUES
(24, '2013-12-16 23:08:42', 18, 'hi', 1, 'test'),
(25, '2013-12-17 05:00:30', 18, 'hello', 1, 'test'),
(26, '2013-12-17 05:02:00', 18, 'new test', 1, 'test'),
(27, '2013-12-26 04:45:54', 18, 'new test', 1, 'test'),
(28, '2013-12-27 08:33:23', 18, 'new test message', 1, 'test'),
(29, '2013-12-27 08:44:08', 18, 'test message', 1, 'test'),
(30, '2013-12-27 08:48:37', 18, 'this is a new text message to check the text area multi line', 1, 'test'),
(31, '2014-01-01 13:54:10', 18, '[b]test bold text[/b]', 1, 'test'),
(32, '2014-01-01 13:54:29', 18, '[i]test italic text[/i]', 1, 'test'),
(33, '2014-01-01 13:54:44', 18, '[u]test underline text[/u]', 1, 'test'),
(34, '2014-01-01 14:06:55', 18, '[b]new bold text test[/b]', 1, 'test'),
(35, '2014-01-01 14:09:06', 18, '', 1, 'test'),
(36, '2014-01-01 15:39:37', 18, 'happy image test [s]happy[/s]', 1, 'test'),
(37, '2014-01-01 16:01:13', 18, '[s]happy[/s]', 1, 'test'),
(38, '2014-01-01 16:10:23', 18, '[s]wink[/s][s]waii[/s][s]tonge[/s][s]smile[/s][s]evilgrin[/s][s]grin[/s][s]happy[/s][s]surprised[/s]', 1, 'test'),
(39, '2014-01-07 16:02:30', 18, '[s]wink[/s]', 1, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `teammembers`
--

CREATE TABLE IF NOT EXISTS `teammembers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `addlines` int(11) NOT NULL DEFAULT '0',
  `deletelines` int(11) NOT NULL DEFAULT '0',
  `checklines` int(11) NOT NULL DEFAULT '0',
  `editlines` int(11) NOT NULL DEFAULT '0',
  `timing` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `tid` (`tid`,`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `teammembers`
--

INSERT INTO `teammembers` (`id`, `tid`, `uid`, `state`, `addlines`, `deletelines`, `checklines`, `editlines`, `timing`) VALUES
(6, 4, 22, 1, 1, 1, 1, 1, 0),
(7, 4, 23, 1, 1, 1, 1, 1, 0),
(8, 4, 24, 1, 0, 0, 0, 0, 0),
(11, 4, 18, 1, 0, 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `owner` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `owner`, `title`, `created`) VALUES
(4, 18, 'team 1', '2013-06-27 21:33:19'),
(5, 18, 'team 2', '2013-06-27 21:34:15'),
(6, 18, 'team 3', '2013-06-27 21:34:39'),
(7, 18, 'team 4', '2013-06-28 23:30:15'),
(8, 18, 'vbnvghjghjghj', '2013-06-30 00:53:03'),
(9, 18, 'team 6', '2013-06-30 02:26:06'),
(10, 18, 'team 7', '2013-07-06 17:21:34');

-- --------------------------------------------------------

--
-- Table structure for table `teamsubtitles`
--

CREATE TABLE IF NOT EXISTS `teamsubtitles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `thumbnails`
--

CREATE TABLE IF NOT EXISTS `thumbnails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vid` int(11) NOT NULL,
  `thumbnail` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `transcriptions`
--

CREATE TABLE IF NOT EXISTS `transcriptions` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `lid` int(11) NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Dumping data for table `transcriptions`
--

INSERT INTO `transcriptions` (`id`, `sid`, `cid`, `uid`, `lid`, `text`) VALUES
(3, 52, 10, 18, 8971, 'test'),
(4, 52, 10, 18, 8972, 'test'),
(5, 52, 10, 18, 8973, 'test'),
(6, 1, 1, 18, 1, '- Hi.aaaaaaaaaa\n- Hi.'),
(7, 1, 1, 18, 2, 'How many?'),
(8, 1, 1, 18, 3, 'Two.'),
(9, 1, 1, 18, 4, 'Listen, I wanted to get a safe deposit box.\nCan you do that for me?'),
(10, 1, 1, 18, 8, 'Thank you.'),
(11, 1, 1, 18, 6, 'any time from\n an hour after opening'),
(12, 1, 1, 18, 20, 'You know what?\n I''m making an executive decision.'),
(13, 1, 1, 18, 19, '- I can come back.\n - No, it''s okay.'),
(14, 1, 1, 18, 18, 'If I don''t order at this point,\n it''s just rude.'),
(15, 1, 1, 18, 17, 'has asked me\n to order four times.'),
(16, 1, 1, 18, 16, 'well, at least it says\nMaggie on her name tag,'),
(17, 1, 1, 18, 15, '- No, thank you.\n- Our very patient waitress, Maggie,'),
(18, 1, 1, 18, 14, 'I''m ordering you\n the French toast.'),
(19, 1, 1, 18, 13, 'Hello, Ma.'),
(20, 1, 1, 18, 12, 'Why would a bank\n give out free toasters?'),
(21, 1, 1, 18, 11, 'Oh, here I was hopin''\n for a free toaster.'),
(22, 1, 1, 18, 10, 'we''ll give you 5% off the box\n along with free overdraft protection.'),
(23, 1, 1, 18, 7, 'to 30 minutes before close.\n This is your key.'),
(24, 1, 1, 18, 9, 'Oh, um, also, if you open\n a checking account,'),
(25, 1, 1, 18, 5, 'Okay.\n Your box will be available');

-- --------------------------------------------------------

--
-- Table structure for table `translationqueue`
--

CREATE TABLE IF NOT EXISTS `translationqueue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `lid` int(11) NOT NULL,
  `from` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sid` (`sid`,`cid`,`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `translationqueue`
--

INSERT INTO `translationqueue` (`id`, `sid`, `cid`, `lid`, `from`, `to`, `text`) VALUES
(4, 1, 1, 1, 'en', 'en', '- Hi.\r\n- Hi.\r\n'),
(5, 1, 1, 2, 'en', 'en', 'How many?\r\n'),
(6, 1, 1, 3, 'en', 'en', 'Two.\r\n'),
(7, 1, 1, 4, 'en', 'en', 'Listen, I wanted to get a safe deposit box.\r\nCan you do that for me?\r\n'),
(8, 1, 1, 5, 'en', 'en', 'Okay.\r\nYour box will be available\r\n'),
(9, 1, 1, 6, 'en', 'en', 'any time from\r\nan hour after opening\r\n'),
(10, 1, 1, 7, 'en', 'en', 'to 30 minutes before close.\r\nThis is your key.\r\n'),
(11, 1, 1, 8, 'en', 'en', 'Thank you.\r\n'),
(12, 1, 1, 9, 'en', 'en', 'Oh, um, also, if you open\r\na checking account,\r\n'),
(13, 1, 1, 10, 'en', 'en', 'we''ll give you 5% off the box\r\nalong with free overdraft protection.\r\n');

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
  `key` varchar(30) NOT NULL,
  `LastLogin` int(11) NOT NULL,
  `KeyTime` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `BirthYear`, `group`, `key`, `LastLogin`, `KeyTime`) VALUES
(18, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'test@test.test', 2009, 1, 'X1wVNpNg3b8Hr7dm9V4G1ozcNCm7Yz', 1389101778, 1389039014),
(19, 'ghfghh', '7e240de74fb1ed08fa08d38063f6a6a91462a815', 'dsd@sd.sd', 2006, 3, 'm2oiiY6uvvQe4iKTRg9Dw2rE3OtbNp', 0, 1389039014),
(20, 'wejhg', '7e240de74fb1ed08fa08d38063f6a6a91462a815', 'aaa@aaa.aaa', 1919, 3, '6hiUUfYkzWC07XDjI3QBP1VP9TkqKq', 0, 1389039014),
(21, 't567567567', '7e240de74fb1ed08fa08d38063f6a6a91462a815', 'tryrt@erttr.rrt', 1917, 3, '4cJcrobKSoQoAA02LRGucV69lWGeNI', 0, 1389039015),
(22, 'test2', '109f4b3c50d7b0df729d299bc6f8e9ef9066971f', 'test2@test2.com', 2010, 3, 'Y2gNCkGaxG4SIYhCy1exuNiUK7wVD5', 0, 1389039015),
(23, 'test3', '3ebfa301dc59196f18593c45e519287a23297589', 'test3@test3.com', 2003, 3, 'D7GNgMzzmOWXiFqmfeOfL4MIKH8BFz', 0, 1389039015),
(24, 'test4', '1ff2b3704aede04eecb51e50ca698efd50a1379b', 'test4@test4.com', 2002, 3, '62psXrvvAy5pFwrnHoim5BZXD51V1k', 0, 1389039015),
(25, 'test5', '911ddc3b8f9a13b5499b6bc4638a2b4f3f68bf23', 'test5@test5.com', 2001, 3, 'y71EUXWlS4ErcYCCrXg0E7kuLklCIb', 0, 1389039015),
(26, 'test6', 'a66df261120b6c2311c6ef0b1bab4e583afcbcc0', 'test6@test6.com', 2005, 3, 'RMbnMIJ53NcRKZsWLep1APkw9j3rHC', 0, 1389039015),
(27, 'test7', 'ea3243132d653b39025a944e70f3ecdf70ee3994', 'test7@test7.com', 2002, 3, 'iCpElH7INDo9Ec1FTP7CiXdYHUeMkF', 0, 1389039015),
(28, 'test8', 'd03f9d34194393019e6d12d7c942827ebd694443', 'test8@test8.com', 1999, 3, 'gs2w8dbM3uAJbdWeQdAtvqrPsr4TTc', 0, 1389039059),
(29, 'test9', '53d525836cc96d089a5a4218b464fda532f7debe', 'test9@test9.com', 2001, 3, '3bAEEj62P0HlJOBApOgvtNEImrNVXy', 0, 1389039059),
(30, 'test10', '168f4029f416ee06565f12e697dfc1534ae69d32', 'test10@test10.com', 2002, 3, 'EXNSbZsQmcnbqqgL0uvrvzteIdhgAj', 0, 1389039059),
(31, 'test11', '100c4e57374fc998e57164d4c0453bd3a4876a58', 'test11@test11.com', 2004, 3, 'YzBnNd9AOyy8csAWCZ076NYeLFSYtf', 0, 1389039059),
(32, 'test12', '4ff1a33e188b7b86123d6e3be2722a23514a83b4', 'test12@test12.com', 1999, 3, 'mlX17rlub7ROMyn1OkZo9mn4ppJpze', 0, 1389039059),
(33, 'test13', 'd804cd9cc0c42b0652bab002f67858ab803c40c6', 'test13@test13.com', 2005, 3, 'lf53ynrGSWe9CTc7tWvJTAShXPJlhz', 0, 1389039059),
(34, 'test14', 'd79336a97da7d284c0fe15497d2fa944d1f2abb1', 'test14@test14.com', 2003, 3, 'IQrOMD8T3nHXUWzFKRNnZqUyfW6g5d', 0, 1389039059),
(35, 'test15', '61bb70fa60368f069e62d601c357d203700ab2d2', 'test15@test15.com', 2000, 3, 'nFkw73MzdcQieEcuZUXS1v1qnHDmtL', 0, 1389039059),
(36, 'test16', '1fbefee9cfb86926757519357e077fd6a21aef0f', 'test16@test16.com', 1998, 3, '6v2ag7mFTGv13JBytDWb7ZzpdAiPmD', 0, 1389039059),
(37, 'test17', '08a25c0f270b29aeba650e6b2d1a9947a778c5da', 'test17@test17.com', 1996, 3, 'JTv6VDgGQXhoF300WSpX8Erku3huQ2', 0, 1389039059);

-- --------------------------------------------------------

--
-- Table structure for table `videocategory`
--

CREATE TABLE IF NOT EXISTS `videocategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `videocategory`
--

INSERT INTO `videocategory` (`id`, `category`) VALUES
(1, 'Activism & Non Profits'),
(2, 'Animation & Motion Graphics'),
(3, 'Art'),
(4, 'Branded'),
(5, 'Comedy'),
(6, 'Education & DIY'),
(7, 'Everyday Life'),
(8, 'Experimental'),
(9, 'Fashion'),
(10, 'Films'),
(11, 'HD'),
(12, 'Music'),
(13, 'Nature'),
(14, 'Products & Equipment'),
(15, 'Science & Tech'),
(16, 'Sports'),
(17, 'Travel & Events'),
(18, 'Web Series');

-- --------------------------------------------------------

--
-- Table structure for table `videorates`
--

CREATE TABLE IF NOT EXISTS `videorates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `rate` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `videorates`
--

INSERT INTO `videorates` (`id`, `uid`, `vid`, `rate`) VALUES
(2, 18, 15, 1),
(3, 18, 16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `other_title` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `language` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `genres` varchar(255) NOT NULL,
  `release_date` date NOT NULL,
  `casting` varchar(255) NOT NULL,
  `director` varchar(255) NOT NULL,
  `length` int(11) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `synopsis` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `public` int(11) NOT NULL DEFAULT '1',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `uid`, `title`, `other_title`, `type`, `category`, `language`, `country`, `genres`, `release_date`, `casting`, `director`, `length`, `tags`, `synopsis`, `thumbnail`, `image`, `source`, `year`, `url`, `public`, `featured`, `views`) VALUES
(15, 18, '300: Rise of an Empire', '300: Rise of an Empire', 1, 10, 14, 236, '25', '2013-07-09', 'Lena Headey, Eva Green, Rodrigo Santoro', 'Noam Murro', 90, '300, Rise, Empire', 'The Greek general Themistocles battles an invading army of Persians under the mortal-turned-god, Xerxes.', '15_1813775109260FC1S.jpg', '', 'http://www.youtube.com/watch?v=2zqy21Z29ps', 0, '', 1, 1, 85),
(16, 18, 'Riddick (2013)', 'Riddick', 1, 10, 14, 236, '1,21,24', '2013-09-06', 'Vin Diesel, Karl Urban, Katee Sackhoff', 'David Twohy', 90, 'Riddick', 'Left for dead on a sun-scorched planet, Riddick finds himself up against an alien race of predators. Activating an emergency beacon alerts two ships: one carrying a new breed of mercenary, the other captained by a man from Riddick''s past.', '16_181379538810wvn1x.jpg', '', 'http://www.youtube.com/watch?v=zH3O-CeZckE', 0, '', 1, 1, 46),
(17, 18, 'Thor: The Dark World', 'Thor 2013', 1, 10, 14, 236, '1,2,10', '2013-11-08', 'Chris Hemsworth, Natalie Portman, Christopher Eccleston', 'Alan Taylor', 100, 'Thor, 2013, Dark, World', 'Faced with an enemy that even Odin and Asgard cannot withstand, Thor must embark on his most perilous and personal journey yet, one that will reunite him with Jane Foster and force him to sacrifice everything to save us all.', '17_181379539607ivkN3.jpg', '', 'http://www.youtube.com/watch?v=npvJ9FTgZbM', 0, '', 1, 1, 1),
(18, 18, 'World War Z', 'World War Z 2013', 1, 10, 14, 236, '1,2,14,21,24', '2013-06-21', 'Brad Pitt, Mireille Enos, Daniella Kertesz', 'Marc Forster', 95, 'World, War, 2013', 'United Nations employee Gerry Lane traverses the world in a race against time to stop the Zombie pandemic that is toppling armies and governments, and threatening to destroy humanity itself.', '18_181379540179OpIRB.jpg', '', 'http://www.youtube.com/watch?v=HcwTxRuq-uk', 0, '', 1, 1, 0),
(19, 18, 'Man of Steel (2013)', 'Man of Steel', 1, 10, 14, 236, '1,2,10,21', '2013-06-14', 'Henry Cavill, Amy Adams, Michael Shannon', 'Zack Snyder', 90, 'Man, Steel, 2013', 'A young itinerant worker is forced to confront his secret extraterrestrial heritage when Earth is invaded by members of his race.', '19_181379540798E44XC.jpg', '', 'http://www.youtube.com/watch?v=T6DJcgm3wNY', 0, '', 1, 1, 0),
(20, 18, 'R.I.P.D. (2013)', 'R.I.P.D.', 1, 10, 14, 236, '1,5,6,10', '2013-07-19', 'Ryan Reynolds, Jeff Bridges, Mary-Louise Parker', 'Robert Schwentke', 90, 'R.I.P.D., 2013', 'A recently slain cop joins a team of undead police officers working for the Rest in Peace Department and tries to find the man who murdered him.', '20_1813795412300JEoP.jpg', '', 'http://www.youtube.com/watch?v=X07xNrVd7DU', 0, '', 1, 1, 0),
(21, 18, '2 Guns (2013)', '2 Guns', 1, 10, 14, 236, '1,5,6,8,24', '2013-08-02', 'Denzel Washington, Mark Wahlberg, Paula Patton', 'Baltasar Kormákur', 90, 'guns', 'A DEA agent and a naval intelligence officer find themselves on the run after a botched attempt to infiltrate a drug cartel. While fleeing, they learn the secret of their shaky alliance: Neither knew that the other was an undercover agent.', '21_181379612635T4A25.jpg', '', 'http://www.youtube.com/watch?v=dVNe3RK2fgI', 0, '', 1, 1, 1),
(22, 18, 'Percy Jackson: Sea of Monsters (2013)', 'Percy Jackson', 1, 10, 14, 236, '2,9,10', '2013-08-07', 'Logan Lerman, Alexandra Daddario, Brandon T. Jackson', 'Thor Freudenthal', 90, 'Percy, Jackson, Sea, Monsters, 2013', 'In order to restore their dying safe haven, the son of Poseidon and his friends embark on a quest to the Sea of Monsters to find the mythical Golden Fleece while trying to stop an ancient evil from rising.', '22_1813796135777IswV.jpg', '', 'http://www.youtube.com/watch?v=5KoOtiuSjuI', 0, '', 1, 1, 0),
(23, 18, 'Elysium (I) (2013)', 'Elysium', 1, 10, 14, 236, '1,8,21,24', '2013-08-09', 'Matt Damon, Jodie Foster, Sharlto Copley', 'Neill Blomkamp', 100, 'Elysium, 2013', 'Set in the year 2154, where the very wealthy live on a man-made space station while the rest of the population resides on a ruined Earth, a man takes on a mission that could bring equality to the polarized worlds.', '23_1813796141370BYmG.jpg', '', 'http://www.youtube.com/watch?v=QILNSgou5BY', 0, '', 1, 1, 0),
(24, 18, 'Homeland Season 3', 'Homeland', 2, 10, 14, 236, '8,17,24', '2013-10-02', 'Claire Danes, Damian Lewis, Morena Baccarin', '.', 45, 'Homeland, Season 3', 'When Marine Nicolas Brody is hailed as a hero after he returns home from eight years of captivity in Iraq, intelligence officer Carrie Mathison is the only one who suspects that he may have been "turned".', '24_181379614725AJrot.jpg', '', 'http://www.youtube.com/watch?v=iXOUIsu-E0Q', 0, '', 1, 1, 0),
(25, 18, 'The Hobbit: An Unexpected Journey (2012)', 'The Hobbit', 1, 10, 14, 236, '2,10', '2012-12-14', 'Martin Freeman, Ian McKellen, Richard Armitage', 'Peter Jackson', 120, 'Hobbit, Unexpected, Journey, 2012', 'A younger and more reluctant Hobbit, Bilbo Baggins, sets out on an "unexpected journey" to the Lonely Mountain with a spirited group of Dwarves to reclaim their stolen mountain home from a dragon named Smaug.', '25_181379616244XC1g0.jpg', '', 'http://www.youtube.com/watch?v=fnaojlfdUbs', 0, '', 1, 1, 1),
(26, 18, 'Monsters University (2013)', 'Monsters University 2', 3, 10, 14, 236, '2,3,5,9,10', '2013-06-21', 'Billy Crystal, John Goodman, Steve Buscemi', 'Dan Scanlon', 90, 'Monsters, University, 2013', 'A look at the relationship between Mike and Sulley during their days at Monsters University -- when they weren''t necessarily the best of friends.', '26_181379616741NtRbG.jpg', '', 'http://www.youtube.com/watch?v=ODePHkWSg-U', 0, '', 1, 1, 2),
(27, 18, 'Oblivion (I) (2013)', 'Oblivion', 1, 10, 14, 236, '1,2,17,21', '2013-04-19', 'Tom Cruise, Morgan Freeman, Andrea Riseborough', 'Joseph Kosinski', 90, 'Oblivion, 2013', 'A veteran assigned to extract Earth''s remaining resources begins to question what he knows about his mission and himself.', '27_181380022846LbWdk.jpg', '', 'http://www.youtube.com/watch?v=XmIIgE7eSak', 0, '', 1, 1, 12),
(28, 18, 'Iron Man 3 (2013)', 'Iron Man', 1, 10, 14, 236, '1,2,21', '2013-05-03', 'Robert Downey Jr., Guy Pearce, Gwyneth Paltrow', 'Shane Black', 90, 'Iron Man, 2013', 'When Tony Stark''s world is torn apart by a formidable terrorist called the Mandarin, he starts an odyssey of rebuilding and retribution.', '28_1813800247974xTLD.jpg', '', 'http://www.youtube.com/watch?v=2CzoSeClcw0', 0, '', 1, 1, 1),
(29, 18, 'Fast & Furious 6 (2013)', 'Fast & Furious 6', 1, 10, 14, 236, '1,6,24', '2013-05-24', 'Vin Diesel, Paul Walker, Dwayne Johnson', 'Justin Lin', 90, 'Fast, Furious, 2013', 'Hobbs has Dom and Brian reassemble their crew in order to take down a mastermind who commands an organization of mercenary drivers across 12 countries. Payment? Full pardons for them all.', '29_181380025557oniLF.jpg', '', 'http://www.youtube.com/watch?v=dKi5XoeTN0k', 0, '', 1, 1, 4),
(30, 18, 'Red 2 (2013)', 'Red 2', 1, 10, 14, 236, '1,5,6,24', '2013-07-19', 'Jon Hoeber, Erich Hoeber, 2 more credits', 'Dean Parisot', 90, 'Red, 2013', 'Retired C.I.A. agent Frank Moses reunites his unlikely team of elite operatives for a global quest to track down a missing portable nuclear device.', '30_181380026531aqnhX.jpg', '', 'http://www.youtube.com/watch?v=ZfB8QwYBPxY', 0, '', 1, 1, 0),
(31, 18, 'Skyfall (2012)', 'Skyfall', 1, 10, 14, 236, '1,2,24', '2011-11-09', 'Neal Purvis, Robert Wade, 2 more credits', 'Sam Mendes', 90, 'Skyfall, 2012', 'Bond''s loyalty to M is tested when her past comes back to haunt her. Whilst MI6 comes under attack, 007 must track down and destroy the threat, no matter how personal the cost.', '31_181380027287OigpU.jpg', '', 'http://www.youtube.com/watch?v=6kw1UVovByw', 0, '', 1, 1, 5),
(32, 18, 'The Croods (2013)', 'The Croods', 3, 10, 14, 236, '2,3,5,9,10', '2013-03-12', 'Nicolas Cage, Ryan Reynolds, Emma Stone', 'Kirk De Micco, Chris Sanders', 90, 'The Croods, 2013', 'After their cave is destroyed, a caveman family must trek through an unfamiliar fantastical world with the help of an inventive boy.', '32_181380027840Qv80h.jpg', '', 'http://www.youtube.com/watch?v=4fVCKy69zUY', 0, '', 1, 1, 2),
(33, 22, 'Escape Plan (2013)', 'Escape Plan', 1, 10, 14, 236, '1,17,24', '2013-10-18', 'Sylvester Stallone, Arnold Schwarzenegger, 50 Cent', 'Mikael Håfström', 90, 'Escape, Plan, 2013', 'When a structural-security authority finds himself incarcerated in a prison he designed, he has to put his skills to escape and find out who framed him.', '33_221380058929LcQRw.jpg', '', 'http://www.youtube.com/watch?v=CI4EjV_x_PQ', 0, '', 1, 1, 1),
(34, 22, 'Total Recall (2012)', 'Total Recall', 1, 10, 14, 236, '1,2,21,24', '2012-08-03', 'Colin Farrell, Bokeem Woodbine, Bryan Cranston', 'Len Wiseman', 90, 'Total, Recall, 2012', 'A factory worker, Douglas Quaid, begins to suspect that he is a spy after visiting Rekall - a company that provides its clients with implanted fake memories of a life they would like to have led - goes wrong and he finds himself on the run.', '34_221380061085gybZK.jpg', '', 'http://www.youtube.com/watch?v=4SerZm7DheA', 0, '', 1, 1, 36),
(35, 22, 'Men in Black 3 (2012)', 'Men in Black 3', 1, 10, 14, 236, '1,5,21', '2012-05-25', 'Will Smith, Tommy Lee Jones, Josh Brolin', 'Barry Sonnenfeld', 90, 'Men in Black, 2012', 'Agent J travels in time to M.I.B.''s early days in 1969 to stop an alien from assassinating his friend Agent K and changing history.', '35_221380061647Iqc5u.jpg', '', 'http://www.youtube.com/watch?v=yc4tk27ZzZk', 0, '', 1, 1, 10),
(36, 22, 'Looper (2012)', 'Looper', 1, 10, 14, 236, '1,6,21,24', '2012-09-28', 'Joseph Gordon-Levitt, Bruce Willis, Emily Blunt', 'Rian Johnson', 90, 'Looper, 2012', 'In 2074, when the mob wants to get rid of someone, the target is sent 30 years into the past, where a hired gun awaits. Someone like Joe, who one day learns the mob wants to ''close the loop'' by transporting back Joe''s future self.', '36_2213800621454nP8S.jpg', '', 'http://www.youtube.com/watch?v=eI3ju17W070', 0, '', 1, 1, 7),
(37, 22, 'Safe (I) (2012)', 'Safe', 1, 10, 14, 236, '1,6,24', '2012-04-27', 'Jason Statham, Catherine Chan, Chris Sarandon', 'Boaz Yakin', 90, 'Safe, 2012', 'Mei, a young girl whose memory holds a priceless numerical code, finds herself pursued by the Triads, the Russian mob, and corrupt NYC cops. Coming to her aid is an ex-cage fighter whose life was destroyed by the gangsters on Mei''s trail.', '37_221380062467n8ikl.jpg', '', 'http://www.youtube.com/watch?v=i-D26g3CEuc', 0, '', 1, 1, 1),
(38, 22, 'The Last Stand (2013)', 'The Last Stand', 1, 10, 14, 236, '1,6,24', '2013-01-18', 'Arnold Schwarzenegger, Forest Whitaker, Johnny Knoxville', 'Kim Jee-Woon', 90, 'Last, Stand, 2013', 'The leader of a drug cartel busts out of a courthouse and speeds to the Mexican border, where the only thing in his path is a sheriff and his inexperienced staff.', '38_221380063319Klk0X.jpg', '', 'http://www.youtube.com/watch?v=zxt8kRhLaMs', 0, '', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `videotype`
--

CREATE TABLE IF NOT EXISTS `videotype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `videotype`
--

INSERT INTO `videotype` (`id`, `type`) VALUES
(1, 'movie'),
(2, 'tv show'),
(3, 'anime'),
(4, 'trailer');
