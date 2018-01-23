-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 01, 2013 at 01:15 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alqaim`
--

-- --------------------------------------------------------

--
-- Table structure for table `action`
--

CREATE TABLE IF NOT EXISTS `action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `comment` text,
  `subject` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `action`
--

INSERT INTO `action` (`id`, `title`, `comment`, `subject`) VALUES
(1, 'message_write', NULL, NULL),
(2, 'message_receive', NULL, NULL),
(3, 'user_create', NULL, NULL),
(4, 'user_update', NULL, NULL),
(5, 'user_remove', NULL, NULL),
(6, 'user_admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `article` text NOT NULL,
  `author_id` varchar(45) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_time` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE IF NOT EXISTS `auth` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `create_time` varchar(45) NOT NULL,
  `update_time` varchar(45) NOT NULL,
  `adder_id` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `classes_m`
--

CREATE TABLE IF NOT EXISTS `classes_m` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `grade_id` varchar(45) CHARACTER SET latin1 NOT NULL,
  `adder_id` varchar(45) CHARACTER SET latin1 NOT NULL,
  `about` text NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `classes_m`
--

INSERT INTO `classes_m` (`id`, `title`, `grade_id`, `adder_id`, `about`, `create_time`, `update_time`) VALUES
(1, 'classes 1', '1', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'classes 2', '1', '', '', '2013-06-23 08:28:26', '0000-00-00 00:00:00'),
(4, 'classes 4', '1', '', '', '2013-06-20 19:51:03', '0000-00-00 00:00:00'),
(5, 'العربي', '3', '', '', '2013-07-01 09:08:35', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `challenge_id` varchar(45) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `challenge_id`, `text`) VALUES
(8, '8', 'qqqqqqqqqqqqq'),
(9, '8', 'SSSSSSSSSSSSSSSSSSSSS'),
(10, '545', 'profile_pictureaaaaa'),
(11, '7', '??????????'),
(12, '7', '???????????????????????????'),
(13, '7', '55555555555555'),
(14, '7', 'qqqqqqqqqqqqqq'),
(15, '7', 'vvvvvvvvvvv'),
(16, '', '2222222222222222222222222222222222222222222222222222222222222222222222222222222222222');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `iso` char(2) NOT NULL,
  `title` varchar(80) NOT NULL,
  `printable_name` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lon` text NOT NULL,
  `lat` text NOT NULL,
  `zoom` decimal(10,0) NOT NULL,
  `printable_name_ar` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=240 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`iso`, `title`, `printable_name`, `iso3`, `numcode`, `id`, `lon`, `lat`, `zoom`, `printable_name_ar`) VALUES
('AD', 'ANDORRA', 'Andorra', 'AND', 20, 1, '0', '0', '0', ''),
('AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 2, '13.18359375', '32.879587173066305', '6', ''),
('AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 3, '24', '57', '5', ''),
('AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 4, '0', '0', '0', ''),
('AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 5, '0', '0', '0', ''),
('AL', 'ALBANIA', 'Albania', 'ALB', 8, 6, '0', '0', '0', ''),
('AM', 'ARMENIA', 'Armenia', 'ARM', 51, 7, '0', '0', '0', ''),
('AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 8, '0', '0', '0', ''),
('AO', 'ANGOLA', 'Angola', 'AGO', 24, 9, '0', '0', '0', ''),
('AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 10, '0', '0', '0', ''),
('AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 11, '0', '0', '0', ''),
('AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 12, '0', '0', '0', ''),
('AT', 'AUSTRIA', 'Austria', 'AUT', 40, 13, '0', '0', '0', ''),
('AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 14, '0', '0', '0', ''),
('AW', 'ARUBA', 'Aruba', 'ABW', 533, 15, '0', '0', '0', ''),
('AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 16, '0', '0', '0', ''),
('BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 17, '0', '0', '0', ''),
('BB', 'BARBADOS', 'Barbados', 'BRB', 52, 18, '0', '0', '0', ''),
('BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 19, '0', '0', '0', ''),
('BE', 'BELGIUM', 'Belgium', 'BEL', 56, 20, '0', '0', '0', ''),
('BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 21, '0', '0', '0', ''),
('BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 22, '0', '0', '0', ''),
('BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 23, '0', '0', '0', ''),
('BI', 'BURUNDI', 'Burundi', 'BDI', 108, 24, '0', '0', '0', ''),
('BJ', 'BENIN', 'Benin', 'BEN', 204, 25, '0', '0', '0', ''),
('BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 26, '0', '0', '0', ''),
('BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 27, '0', '0', '0', ''),
('BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 28, '0', '0', '0', ''),
('BR', 'BRAZIL', 'Brazil', 'BRA', 76, 29, '0', '0', '0', ''),
('BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 30, '0', '0', '0', ''),
('BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 31, '0', '0', '0', ''),
('BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 32, '0', '0', '0', ''),
('BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 33, '0', '0', '0', ''),
('BY', 'BELARUS', 'Belarus', 'BLR', 112, 34, '0', '0', '0', ''),
('BZ', 'BELIZE', 'Belize', 'BLZ', 84, 35, '0', '0', '0', ''),
('CA', 'CANADA', 'Canada', 'CAN', 124, 36, '0', '0', '0', ''),
('CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 37, '0', '0', '0', ''),
('CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 38, '0', '0', '0', ''),
('CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 39, '0', '0', '0', ''),
('CG', 'CONGO', 'Congo', 'COG', 178, 40, '0', '0', '0', ''),
('CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41, '0', '0', '0', ''),
('CI', 'COTE D''IVOIRE', 'Cote D''Ivoire', 'CIV', 384, 42, '0', '0', '0', ''),
('CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 43, '0', '0', '0', ''),
('CL', 'CHILE', 'Chile', 'CHL', 152, 44, '0', '0', '0', ''),
('CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 45, '0', '0', '0', ''),
('CN', 'CHINA', 'China', 'CHN', 156, 46, '0', '0', '0', ''),
('CO', 'COLOMBIA', 'Colombia', 'COL', 170, 47, '0', '0', '0', ''),
('CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 48, '0', '0', '0', ''),
('CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 49, '0', '0', '0', ''),
('CU', 'CUBA', 'Cuba', 'CUB', 192, 50, '0', '0', '0', ''),
('CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 51, '0', '0', '0', ''),
('CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 52, '0', '0', '0', ''),
('CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 53, '0', '0', '0', ''),
('CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 54, '0', '0', '0', ''),
('DE', 'GERMANY', 'Germany', 'DEU', 276, 55, '0', '0', '0', ''),
('DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 56, '0', '0', '0', ''),
('DK', 'DENMARK', 'Denmark', 'DNK', 208, 57, '0', '0', '0', ''),
('DM', 'DOMINICA', 'Dominica', 'DMA', 212, 58, '0', '0', '0', ''),
('DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 59, '0', '0', '0', ''),
('DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 60, '0', '0', '0', ''),
('EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 61, '0', '0', '0', ''),
('EE', 'ESTONIA', 'Estonia', 'EST', 233, 62, '0', '0', '0', ''),
('EG', 'EGYPT', 'Egypt', 'EGY', 818, 63, '0', '0', '0', ''),
('EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 64, '0', '0', '0', ''),
('ER', 'ERITREA', 'Eritrea', 'ERI', 232, 65, '0', '0', '0', ''),
('ES', 'SPAIN', 'Spain', 'ESP', 724, 66, '0', '0', '0', ''),
('ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 67, '0', '0', '0', ''),
('FI', 'FINLAND', 'Finland', 'FIN', 246, 68, '0', '0', '0', ''),
('FJ', 'FIJI', 'Fiji', 'FJI', 242, 69, '0', '0', '0', ''),
('FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 70, '0', '0', '0', ''),
('FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 71, '0', '0', '0', ''),
('FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 72, '0', '0', '0', ''),
('FR', 'FRANCE', 'France', 'FRA', 250, 73, '0', '0', '0', ''),
('GA', 'GABON', 'Gabon', 'GAB', 266, 74, '0', '0', '0', ''),
('GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 75, '0', '0', '0', ''),
('GD', 'GRENADA', 'Grenada', 'GRD', 308, 76, '0', '0', '0', ''),
('GE', 'GEORGIA', 'Georgia', 'GEO', 268, 77, '0', '0', '0', ''),
('GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 78, '0', '0', '0', ''),
('GH', 'GHANA', 'Ghana', 'GHA', 288, 79, '0', '0', '0', ''),
('GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 80, '0', '0', '0', ''),
('GL', 'GREENLAND', 'Greenland', 'GRL', 304, 81, '0', '0', '0', ''),
('GM', 'GAMBIA', 'Gambia', 'GMB', 270, 82, '0', '0', '0', ''),
('GN', 'GUINEA', 'Guinea', 'GIN', 324, 83, '0', '0', '0', ''),
('GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 84, '0', '0', '0', ''),
('GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 85, '0', '0', '0', ''),
('GR', 'GREECE', 'Greece', 'GRC', 300, 86, '0', '0', '0', ''),
('GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 87, '0', '0', '0', ''),
('GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 88, '0', '0', '0', ''),
('GU', 'GUAM', 'Guam', 'GUM', 316, 89, '0', '0', '0', ''),
('GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 90, '0', '0', '0', ''),
('GY', 'GUYANA', 'Guyana', 'GUY', 328, 91, '0', '0', '0', ''),
('HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 92, '0', '0', '0', ''),
('HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 93, '0', '0', '0', ''),
('HN', 'HONDURAS', 'Honduras', 'HND', 340, 94, '0', '0', '0', ''),
('HR', 'CROATIA', 'Croatia', 'HRV', 191, 95, '0', '0', '0', ''),
('HT', 'HAITI', 'Haiti', 'HTI', 332, 96, '0', '0', '0', ''),
('HU', 'HUNGARY', 'Hungary', 'HUN', 348, 97, '0', '0', '0', ''),
('ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 98, '0', '0', '0', ''),
('IE', 'IRELAND', 'Ireland', 'IRL', 372, 99, '0', '0', '0', ''),
('IL', 'ISRAEL', 'Israel', 'ISR', 376, 100, '0', '0', '0', ''),
('IN', 'INDIA', 'India', 'IND', 356, 101, '0', '0', '0', ''),
('IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 102, '0', '0', '0', ''),
('IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 103, '0', '0', '0', ''),
('IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 104, '0', '0', '0', ''),
('IS', 'ICELAND', 'Iceland', 'ISL', 352, 105, '0', '0', '0', ''),
('IT', 'ITALY', 'Italy', 'ITA', 380, 106, '0', '0', '0', ''),
('JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 107, '0', '0', '0', ''),
('JO', 'JORDAN', 'Jordan', 'JOR', 400, 108, '0', '0', '0', ''),
('JP', 'JAPAN', 'Japan', 'JPN', 392, 109, '0', '0', '0', ''),
('KE', 'KENYA', 'Kenya', 'KEN', 404, 110, '0', '0', '0', ''),
('KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 111, '0', '0', '0', ''),
('KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 112, '0', '0', '0', ''),
('KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 113, '0', '0', '0', ''),
('KM', 'COMOROS', 'Comoros', 'COM', 174, 114, '0', '0', '0', ''),
('KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 115, '0', '0', '0', ''),
('KP', 'KOREA, DEMOCRATIC PEOPLE''S REPUBLIC OF', 'Korea, Democratic People''s Republic of', 'PRK', 408, 116, '0', '0', '0', ''),
('KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 117, '0', '0', '0', ''),
('KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 118, '0', '0', '0', ''),
('KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 119, '0', '0', '0', ''),
('KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 120, '0', '0', '0', ''),
('LA', 'LAO PEOPLE''S DEMOCRATIC REPUBLIC', 'Lao People''s Democratic Republic', 'LAO', 418, 121, '0', '0', '0', ''),
('LB', 'LEBANON', 'Lebanon', 'LBN', 422, 122, '0', '0', '0', ''),
('LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 123, '0', '0', '0', ''),
('LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 124, '0', '0', '0', ''),
('LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 125, '0', '0', '0', ''),
('LR', 'LIBERIA', 'Liberia', 'LBR', 430, 126, '0', '0', '0', ''),
('LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 127, '0', '0', '0', ''),
('LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 128, '0', '0', '0', ''),
('LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 129, '0', '0', '0', ''),
('LV', 'LATVIA', 'Latvia', 'LVA', 428, 130, '0', '0', '0', ''),
('LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 131, '0', '0', '0', ''),
('MA', 'MOROCCO', 'Morocco', 'MAR', 504, 132, '0', '0', '0', ''),
('MC', 'MONACO', 'Monaco', 'MCO', 492, 133, '0', '0', '0', ''),
('MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 134, '0', '0', '0', ''),
('MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 135, '0', '0', '0', ''),
('MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 136, '0', '0', '0', ''),
('MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 137, '0', '0', '0', ''),
('ML', 'MALI', 'Mali', 'MLI', 466, 138, '0', '0', '0', ''),
('MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 139, '0', '0', '0', ''),
('MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 140, '0', '0', '0', ''),
('MO', 'MACAO', 'Macao', 'MAC', 446, 141, '0', '0', '0', ''),
('MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 142, '0', '0', '0', ''),
('MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 143, '0', '0', '0', ''),
('MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 144, '0', '0', '0', ''),
('MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 145, '0', '0', '0', ''),
('MT', 'MALTA', 'Malta', 'MLT', 470, 146, '0', '0', '0', ''),
('MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 147, '0', '0', '0', ''),
('MV', 'MALDIVES', 'Maldives', 'MDV', 462, 148, '0', '0', '0', ''),
('MW', 'MALAWI', 'Malawi', 'MWI', 454, 149, '0', '0', '0', ''),
('MX', 'MEXICO', 'Mexico', 'MEX', 484, 150, '0', '0', '0', ''),
('MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 151, '0', '0', '0', ''),
('MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 152, '0', '0', '0', ''),
('NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 153, '0', '0', '0', ''),
('NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 154, '0', '0', '0', ''),
('NE', 'NIGER', 'Niger', 'NER', 562, 155, '0', '0', '0', ''),
('NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 156, '0', '0', '0', ''),
('NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 157, '0', '0', '0', ''),
('NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 158, '0', '0', '0', ''),
('NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 159, '0', '0', '0', ''),
('NO', 'NORWAY', 'Norway', 'NOR', 578, 160, '0', '0', '0', ''),
('NP', 'NEPAL', 'Nepal', 'NPL', 524, 161, '0', '0', '0', ''),
('NR', 'NAURU', 'Nauru', 'NRU', 520, 162, '0', '0', '0', ''),
('NU', 'NIUE', 'Niue', 'NIU', 570, 163, '0', '0', '0', ''),
('NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 164, '0', '0', '0', ''),
('OM', 'OMAN', 'Oman', 'OMN', 512, 165, '0', '0', '0', ''),
('PA', 'PANAMA', 'Panama', 'PAN', 591, 166, '0', '0', '0', ''),
('PE', 'PERU', 'Peru', 'PER', 604, 167, '0', '0', '0', ''),
('PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 168, '0', '0', '0', ''),
('PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 169, '0', '0', '0', ''),
('PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 170, '0', '0', '0', ''),
('PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 171, '0', '0', '0', ''),
('PL', 'POLAND', 'Poland', 'POL', 616, 172, '0', '0', '0', ''),
('PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 173, '0', '0', '0', ''),
('PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 174, '0', '0', '0', ''),
('PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 175, '0', '0', '0', ''),
('PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 176, '0', '0', '0', ''),
('PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 177, '0', '0', '0', ''),
('PW', 'PALAU', 'Palau', 'PLW', 585, 178, '0', '0', '0', ''),
('PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 179, '0', '0', '0', ''),
('QA', 'QATAR', 'Qatar', 'QAT', 634, 180, '0', '0', '0', ''),
('RE', 'REUNION', 'Reunion', 'REU', 638, 181, '0', '0', '0', ''),
('RO', 'ROMANIA', 'Romania', 'ROM', 642, 182, '0', '0', '0', ''),
('RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 183, '0', '0', '0', ''),
('RW', 'RWANDA', 'Rwanda', 'RWA', 646, 184, '0', '0', '0', ''),
('SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 185, '0', '0', '0', ''),
('SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 186, '0', '0', '0', ''),
('SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 187, '0', '0', '0', ''),
('SD', 'SUDAN', 'Sudan', 'SDN', 736, 188, '0', '0', '0', ''),
('SE', 'SWEDEN', 'Sweden', 'SWE', 752, 189, '0', '0', '0', ''),
('SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 190, '0', '0', '0', ''),
('SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 191, '0', '0', '0', ''),
('SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 192, '0', '0', '0', ''),
('SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 193, '0', '0', '0', ''),
('SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 194, '0', '0', '0', ''),
('SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 195, '0', '0', '0', ''),
('SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 196, '0', '0', '0', ''),
('SN', 'SENEGAL', 'Senegal', 'SEN', 686, 197, '0', '0', '0', ''),
('SO', 'SOMALIA', 'Somalia', 'SOM', 706, 198, '0', '0', '0', ''),
('SR', 'SURINAME', 'Suriname', 'SUR', 740, 199, '0', '0', '0', ''),
('ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 200, '0', '0', '0', ''),
('SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 201, '0', '0', '0', ''),
('SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 202, '0', '0', '0', ''),
('SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 203, '0', '0', '0', ''),
('TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 204, '0', '0', '0', ''),
('TD', 'CHAD', 'Chad', 'TCD', 148, 205, '0', '0', '0', ''),
('TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 206, '0', '0', '0', ''),
('TG', 'TOGO', 'Togo', 'TGO', 768, 207, '0', '0', '0', ''),
('TH', 'THAILAND', 'Thailand', 'THA', 764, 208, '0', '0', '0', ''),
('TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 209, '0', '0', '0', ''),
('TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 210, '0', '0', '0', ''),
('TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 211, '0', '0', '0', ''),
('TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 212, '0', '0', '0', ''),
('TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 213, '0', '0', '0', ''),
('TO', 'TONGA', 'Tonga', 'TON', 776, 214, '0', '0', '0', ''),
('TR', 'TURKEY', 'Turkey', 'TUR', 792, 215, '0', '0', '0', ''),
('TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 216, '0', '0', '0', ''),
('TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 217, '0', '0', '0', ''),
('TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 218, '0', '0', '0', ''),
('TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 219, '0', '0', '0', ''),
('UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 220, '0', '0', '0', ''),
('UG', 'UGANDA', 'Uganda', 'UGA', 800, 221, '0', '0', '0', ''),
('UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 222, '0', '0', '0', ''),
('US', 'UNITED STATES', 'United States', 'USA', 840, 223, '0', '0', '0', ''),
('UY', 'URUGUAY', 'Uruguay', 'URY', 858, 224, '0', '0', '0', ''),
('UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 225, '0', '0', '0', ''),
('VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 226, '0', '0', '0', ''),
('VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 227, '0', '0', '0', ''),
('VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 228, '0', '0', '0', ''),
('VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 229, '0', '0', '0', ''),
('VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 230, '0', '0', '0', ''),
('VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 231, '0', '0', '0', ''),
('VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 232, '0', '0', '0', ''),
('WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 233, '0', '0', '0', ''),
('WS', 'SAMOA', 'Samoa', 'WSM', 882, 234, '0', '0', '0', ''),
('YE', 'YEMEN', 'Yemen', 'YEM', 887, 235, '0', '0', '0', ''),
('YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 236, '0', '0', '0', ''),
('ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 237, '0', '0', '0', ''),
('ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 238, '0', '0', '0', ''),
('ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 239, '0', '0', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `adder_id` varchar(45) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE IF NOT EXISTS `days` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `adder_id` varchar(45) CHARACTER SET latin1 NOT NULL,
  `time_table_id` varchar(45) CHARACTER SET latin1 NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `title`, `adder_id`, `time_table_id`, `status`) VALUES
(1, 'Saturday', '', '', ''),
(2, 'Sunday', '', '', ''),
(3, 'Monday', '', '', ''),
(4, 'Tuesday', '', '', ''),
(5, 'Wednesday', '', '', ''),
(6, 'Thursday', '', '', ''),
(7, 'Friday', '', '', ''),
(9, 'saturday', '', '', 'on'),
(10, 'sunday', '', '', 'on'),
(11, 'monday', '', '', 'on'),
(12, 'tuesday', '', '', 'on'),
(13, 'wednesday', '', '', 'on'),
(14, 'thursday', '', '', 'on'),
(15, 'friday', '', '', ''),
(16, 'saturday', '', '27', ''),
(17, 'sunday', '', '27', 'on'),
(18, 'monday', '', '27', 'on'),
(19, 'tuesday', '', '27', 'on'),
(20, 'wednesday', '', '27', 'on'),
(21, 'thursday', '', '27', 'on'),
(22, 'friday', '', '27', 'on'),
(23, '', '', '', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `default_lesson_planner`
--

CREATE TABLE IF NOT EXISTS `default_lesson_planner` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` varchar(45) CHARACTER SET latin1 NOT NULL,
  `adder_id` varchar(45) CHARACTER SET latin1 NOT NULL,
  `subject_id` varchar(45) CHARACTER SET latin1 NOT NULL,
  `status` int(10) unsigned NOT NULL,
  `from_date_ex` datetime NOT NULL,
  `to_date_ex` datetime NOT NULL,
  `about` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `default_lesson_planner`
--

INSERT INTO `default_lesson_planner` (`id`, `title`, `create_date`, `update_date`, `adder_id`, `subject_id`, `status`, `from_date_ex`, `to_date_ex`, `about`) VALUES
(1, '2015q', '0000-00-00 00:00:00', '', '121', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(2, '55', '0000-00-00 00:00:00', '', '121', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(3, 'aaaaaaaaaaa', '0000-00-00 00:00:00', '', '122', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(4, 'aaaaaaaaaaa', '0000-00-00 00:00:00', '', '122', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(5, 'sssssssssssssssssss', '0000-00-00 00:00:00', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE IF NOT EXISTS `demo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `events_categories`
--

CREATE TABLE IF NOT EXISTS `events_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ex_auth_action`
--

CREATE TABLE IF NOT EXISTS `ex_auth_action` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `action_title` varchar(45) NOT NULL,
  `controller_id` varchar(45) NOT NULL,
  `controller_title` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `ex_auth_action`
--

INSERT INTO `ex_auth_action` (`id`, `action_title`, `controller_id`, `controller_title`) VALUES
(2, 'view', '1', 'students'),
(3, 'create', '1', ''),
(6, 'update', '1', ''),
(7, 'delete', '1', ''),
(9, 'view', '2', ''),
(10, 'create', '2', ''),
(11, 'update', '2', ''),
(12, 'delete', '2', ''),
(14, 'view', '3', ''),
(15, 'create', '3', ''),
(16, 'update', '3', ''),
(17, 'delete', '3', ''),
(19, 'view', '4', ''),
(20, 'create', '4', ''),
(21, 'update', '4', ''),
(22, 'delete', '4', ''),
(24, 'view', '5', ''),
(25, 'create', '5', ''),
(26, 'update', '5', ''),
(27, 'delete', '5', ''),
(29, 'view', '6', ''),
(30, 'create', '6', ''),
(31, 'update', '6', ''),
(32, 'delete', '6', ''),
(34, 'view', '7', ''),
(35, 'create', '7', ''),
(36, 'update', '7', ''),
(37, 'delete', '7', ''),
(39, 'view', '8', ''),
(40, 'create', '8', ''),
(41, 'update', '8', ''),
(42, 'delete', '8', ''),
(44, 'view', '9', ''),
(45, 'create', '9', ''),
(46, 'update', '9', ''),
(47, 'delete', '9', '');

-- --------------------------------------------------------

--
-- Table structure for table `ex_auth_controller`
--

CREATE TABLE IF NOT EXISTS `ex_auth_controller` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `ex_auth_controller`
--

INSERT INTO `ex_auth_controller` (`id`, `title`) VALUES
(1, 'teachers'),
(2, 'students'),
(3, 'parents'),
(4, 'time table'),
(5, 'lesson planner'),
(6, 'subjects'),
(7, 'classes'),
(8, 'staff'),
(9, 'auth');

-- --------------------------------------------------------

--
-- Table structure for table `ex_auth_rel`
--

CREATE TABLE IF NOT EXISTS `ex_auth_rel` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `job_title_id` varchar(10) NOT NULL,
  `action_id` varchar(10) NOT NULL,
  `controller_id` varchar(10) NOT NULL,
  `action_title` varchar(10) NOT NULL,
  `controller_title` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `ex_auth_rel`
--

INSERT INTO `ex_auth_rel` (`id`, `job_title_id`, `action_id`, `controller_id`, `action_title`, `controller_title`) VALUES
(31, '1', '2', '1', '', ''),
(32, '1', '3', '1', '', ''),
(33, '1', '6', '1', '', ''),
(34, '1', '7', '1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE IF NOT EXISTS `features` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `follows`
--

CREATE TABLE IF NOT EXISTS `follows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(45) NOT NULL,
  `r_id` varchar(45) NOT NULL,
  `model_cg` varchar(45) NOT NULL,
  `date_cg` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from_cg` int(10) unsigned NOT NULL,
  `to_cg` int(10) unsigned NOT NULL,
  `date_cg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status_cg` varchar(45) NOT NULL,
  `read_cg` varchar(45) NOT NULL,
  `type_cg` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `from_cg`, `to_cg`, `date_cg`, `status_cg`, `read_cg`, `type_cg`) VALUES
(1, 89, 85, '2012-10-13 05:34:00', 'confirm', 'no', '');

-- --------------------------------------------------------

--
-- Table structure for table `friendship`
--

CREATE TABLE IF NOT EXISTS `friendship` (
  `inviter_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `acknowledgetime` int(11) DEFAULT NULL,
  `requesttime` int(11) DEFAULT NULL,
  `updatetime` int(11) DEFAULT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`inviter_id`,`friend_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE IF NOT EXISTS `grades` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `adder_id` varchar(45) CHARACTER SET latin1 NOT NULL,
  `about` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `title`, `adder_id`, `about`) VALUES
(1, '1', '', ''),
(2, '2', '', ''),
(3, '3', '', ''),
(4, '4', '', ''),
(5, '5', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `homework`
--

CREATE TABLE IF NOT EXISTS `homework` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `update_time` varchar(45) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author_id` varchar(45) NOT NULL,
  `class_id` varchar(45) NOT NULL,
  `grad_id` varchar(45) NOT NULL,
  `subject_id` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `job_title`
--

CREATE TABLE IF NOT EXISTS `job_title` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_time` datetime NOT NULL,
  `adder_id` varchar(45) CHARACTER SET latin1 NOT NULL,
  `ex_order` varchar(45) CHARACTER SET latin1 NOT NULL,
  `about` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `job_title`
--

INSERT INTO `job_title` (`id`, `title`, `create_time`, `update_time`, `adder_id`, `ex_order`, `about`) VALUES
(1, 'Teacher', '2013-04-22 06:00:25', '0000-00-00 00:00:00', '', '2', ''),
(2, 'Students', '2013-05-06 08:44:43', '0000-00-00 00:00:00', '', '3', ''),
(3, 'Parents', '2013-05-05 06:17:34', '0000-00-00 00:00:00', '', '4', ''),
(4, 'Admin', '2013-04-09 17:13:12', '0000-00-00 00:00:00', '', '1', ''),
(5, 'Minutes Laboratory', '2013-04-06 09:10:05', '0000-00-00 00:00:00', '', '5', ''),
(7, 'Coordinator', '2013-04-06 09:10:05', '0000-00-00 00:00:00', '', '7', '');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `title`) VALUES
(1, 'ar'),
(2, 'en');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE IF NOT EXISTS `lessons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `adder_id` varchar(45) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `title`, `adder_id`) VALUES
(1, '1', ''),
(2, '2', ''),
(3, '3', ''),
(4, '4', ''),
(5, '5', ''),
(6, '6', ''),
(7, '7', ''),
(8, '8', ''),
(9, '9', ''),
(10, '10', ''),
(11, '11', ''),
(12, '12', ''),
(13, '13', ''),
(14, '14', ''),
(15, '15', ''),
(16, '16', '');

-- --------------------------------------------------------

--
-- Table structure for table `lesson_planner`
--

CREATE TABLE IF NOT EXISTS `lesson_planner` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `adder_id` varchar(45) CHARACTER SET latin1 NOT NULL,
  `subject_id` varchar(45) CHARACTER SET latin1 NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_time` datetime NOT NULL,
  `lesson_planner_term` varchar(45) CHARACTER SET latin1 NOT NULL,
  `status` int(10) unsigned NOT NULL,
  `default_lesson_planner_id` varchar(45) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `lesson_planner`
--

INSERT INTO `lesson_planner` (`id`, `title`, `adder_id`, `subject_id`, `create_time`, `update_time`, `lesson_planner_term`, `status`, `default_lesson_planner_id`) VALUES
(10, 'sad', '122', '2', '2013-06-24 09:11:25', '0000-00-00 00:00:00', '', 0, ''),
(11, 'qqqqqqq', '122', '2', '2013-06-24 19:14:57', '0000-00-00 00:00:00', '', 1, '1'),
(12, 'fwerew', '122', '2', '2013-06-24 09:11:25', '0000-00-00 00:00:00', '', 0, ''),
(13, 'werwe', '122', '2', '2013-06-24 09:11:25', '0000-00-00 00:00:00', '', 0, ''),
(14, 'werewr', '122', '2', '2013-06-24 09:11:24', '0000-00-00 00:00:00', '', 0, ''),
(15, 'asdfasdf', '122', '2', '2013-06-24 08:57:08', '0000-00-00 00:00:00', '06/04/2013', 0, ''),
(16, 'asdfasdf', '122', '2', '2013-06-24 09:11:24', '0000-00-00 00:00:00', '', 0, ''),
(17, 'asdfasdf', '122', '', '2013-06-24 18:36:47', '0000-00-00 00:00:00', '', 0, ''),
(18, 'asdfasdf', '122', '', '2013-06-24 18:45:57', '0000-00-00 00:00:00', '', 0, '4'),
(19, '00000000000000', '122', '2', '2013-06-24 18:54:22', '0000-00-00 00:00:00', '', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `lesson_planner_history`
--

CREATE TABLE IF NOT EXISTS `lesson_planner_history` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adder_id` varchar(45) NOT NULL,
  `week_id` varchar(45) NOT NULL,
  `lesson_planner_id` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `lesson_planner_history`
--

INSERT INTO `lesson_planner_history` (`id`, `adder_id`, `week_id`, `lesson_planner_id`) VALUES
(1, '121', '2', '7');

-- --------------------------------------------------------

--
-- Table structure for table `lesson_planner_lesson`
--

CREATE TABLE IF NOT EXISTS `lesson_planner_lesson` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `adder_id` varchar(45) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL,
  `lesson_planner_week_id` varchar(45) NOT NULL,
  `lesson_planner_id` varchar(45) NOT NULL,
  `subject_id` varchar(45) NOT NULL,
  `lesson_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `upload_ex` text NOT NULL,
  `note` text NOT NULL,
  `weekOrder` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `lesson_planner_lesson`
--

INSERT INTO `lesson_planner_lesson` (`id`, `title`, `adder_id`, `create_date`, `update_date`, `lesson_planner_week_id`, `lesson_planner_id`, `subject_id`, `lesson_date`, `upload_ex`, `note`, `weekOrder`) VALUES
(35, '', '122', '2013-06-24 13:52:08', '0000-00-00 00:00:00', '42', '11', '', '0000-00-00 00:00:00', '1372081928Ashraf Elsamman C V.docx', '', '2'),
(40, '', '122', '2013-06-24 15:25:05', '0000-00-00 00:00:00', '41', '11', '', '0000-00-00 00:00:00', '1372087505Ashraf Elsamman C V.docx', '', '1'),
(43, '', '122', '2013-06-24 15:26:51', '0000-00-00 00:00:00', '41', '11', '', '0000-00-00 00:00:00', '1372087611Ashraf Elsamman C V.docx', '', '1'),
(44, '', '122', '2013-06-24 15:27:02', '0000-00-00 00:00:00', '42', '11', '', '0000-00-00 00:00:00', '1372087622Ashraf Elsamman C V.docx', '', '2'),
(45, '', '122', '2013-06-24 15:27:10', '0000-00-00 00:00:00', '42', '11', '', '0000-00-00 00:00:00', '1372087630Ashraf Elsamman C V.docx', '', '2'),
(46, '', '122', '2013-06-24 15:27:46', '0000-00-00 00:00:00', '41', '11', '', '0000-00-00 00:00:00', '1372087666Ashraf Elsamman C V.docx', '', '1'),
(47, '', '122', '2013-06-24 15:28:42', '0000-00-00 00:00:00', '41', '11', '', '0000-00-00 00:00:00', '1372087722Ashraf Elsamman C V.docx', '', '1'),
(48, '', '122', '2013-06-24 15:29:05', '0000-00-00 00:00:00', '41', '11', '', '0000-00-00 00:00:00', '1372087745Ashraf Elsamman C V.docx', '', '1'),
(49, '', '122', '2013-06-24 16:00:36', '0000-00-00 00:00:00', '41', '11', '', '0000-00-00 00:00:00', '1372089636Ashraf Elsamman C V.docx', '', '1'),
(50, '', '122', '2013-06-24 16:01:21', '0000-00-00 00:00:00', '41', '11', '', '0000-00-00 00:00:00', '1372089681Ashraf Elsamman C V.docx', '', '1'),
(51, '', '122', '2013-06-24 17:38:51', '0000-00-00 00:00:00', '41', '11', '', '0000-00-00 00:00:00', '1372095531Ashraf Elsamman C V.docx', '', '1'),
(52, '', '122', '2013-07-01 06:48:01', '0000-00-00 00:00:00', '1', '11', '', '0000-00-00 00:00:00', '1372661281Ashraf Elsamman C V.docx', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `lesson_planner_weeks`
--

CREATE TABLE IF NOT EXISTS `lesson_planner_weeks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `adder_id` varchar(45) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_date` varchar(45) NOT NULL,
  `from_date_ex` datetime NOT NULL,
  `to_date_ex` datetime NOT NULL,
  `lesson_planner_id` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mailbox_conversation`
--

CREATE TABLE IF NOT EXISTS `mailbox_conversation` (
  `conversation_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `initiator_id` int(10) NOT NULL,
  `interlocutor_id` int(10) NOT NULL,
  `subject` varchar(100) NOT NULL DEFAULT '',
  `bm_read` tinyint(3) NOT NULL DEFAULT '0',
  `bm_deleted` tinyint(3) NOT NULL DEFAULT '0',
  `modified` int(10) unsigned NOT NULL,
  `is_system` enum('yes','no') NOT NULL DEFAULT 'no',
  `initiator_del` tinyint(1) unsigned DEFAULT '0',
  `interlocutor_del` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`conversation_id`),
  KEY `initiator_id` (`initiator_id`),
  KEY `interlocutor_id` (`interlocutor_id`),
  KEY `conversation_ts` (`modified`),
  KEY `subject` (`subject`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mailbox_conversation`
--

INSERT INTO `mailbox_conversation` (`conversation_id`, `initiator_id`, `interlocutor_id`, `subject`, `bm_read`, `bm_deleted`, `modified`, `is_system`, `initiator_del`, `interlocutor_del`) VALUES
(1, 122, 121, 'hi from google c', 3, 0, 1371110835, 'no', 0, 0),
(2, 122, 85, 'hi from google c', 3, 0, 1371111138, 'no', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mailbox_message`
--

CREATE TABLE IF NOT EXISTS `mailbox_message` (
  `message_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `conversation_id` int(10) unsigned NOT NULL,
  `created` int(10) unsigned NOT NULL DEFAULT '0',
  `sender_id` int(10) unsigned NOT NULL DEFAULT '0',
  `recipient_id` int(10) unsigned NOT NULL DEFAULT '0',
  `text` mediumtext NOT NULL,
  `crc64` bigint(20) NOT NULL,
  PRIMARY KEY (`message_id`),
  KEY `sender_profile_id` (`sender_id`),
  KEY `recipient_profile_id` (`recipient_id`),
  KEY `conversation_id` (`conversation_id`),
  KEY `timestamp` (`created`),
  KEY `crc64` (`crc64`),
  FULLTEXT KEY `text` (`text`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mailbox_message`
--

INSERT INTO `mailbox_message` (`message_id`, `conversation_id`, `created`, `sender_id`, `recipient_id`, `text`, `crc64`) VALUES
(1, 1, 1371110835, 85, 122, 'this is just for test', 606224),
(2, 2, 1371111138, 121, 122, 'dfdbdfgdfg', 624);

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `membership_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_date` int(11) NOT NULL,
  `end_date` int(11) DEFAULT NULL,
  `payment_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(16) NOT NULL DEFAULT '',
  `translation` text,
  PRIMARY KEY (`id`,`language`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `language`, `translation`) VALUES
(41, 'ar', '????????'),
(42, 'ar', ''),
(42, 'en', 'fasdfsadfsdfdsf'),
(42, 'es', 'alle subjektesia');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `message` text NOT NULL,
  `from_cg` int(10) unsigned NOT NULL,
  `to_cg` int(10) unsigned NOT NULL,
  `date_cg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `read_cg` varchar(45) NOT NULL,
  `answered` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=137 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `title`, `message`, `from_cg`, `to_cg`, `date_cg`, `read_cg`, `answered`, `username`) VALUES
(97, '', 'd', 89, 107, '2012-10-17 15:37:59', 'no', '', ''),
(133, '', 'rrrrrrrrrrrrrrrrrrrrr', 89, 89, '2012-10-17 23:39:25', '', '', ''),
(134, '', 'qq', 89, 107, '2012-10-17 23:42:30', 'no', '', ''),
(135, '', 'hi man', 89, 107, '2012-10-17 23:42:36', 'no', '', ''),
(136, '', 'dd', 89, 107, '2012-10-17 23:42:39', 'no', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from_cg` varchar(45) NOT NULL,
  `to_cg` varchar(45) NOT NULL,
  `type_cg` varchar(45) NOT NULL,
  `date_cg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `read_cg` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=154 ;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `from_cg`, `to_cg`, `type_cg`, `date_cg`, `read_cg`) VALUES
(1, '2', '89', 'TeamRefuse', '2012-09-04 06:07:34', 'yes'),
(2, '85', '89', 'TeamRefuse', '2012-09-04 06:16:01', 'yes'),
(3, '89', '916', 'TeamConfirm', '2012-09-11 06:40:26', 'no'),
(4, '89', '906', 'TeamRefuse', '2012-09-11 06:40:27', 'no'),
(5, '23', '', 'FriendRefuse', '2012-09-11 14:24:10', 'yes'),
(6, '89', '898', 'TeamConfirm', '2012-09-11 15:11:16', 'no'),
(7, '89', '901', 'TeamConfirm', '2012-09-11 15:11:17', 'no'),
(8, '89', '907', 'TeamRefuse', '2012-09-11 15:11:19', 'no'),
(9, '89', '58', 'FriendConfirm', '2012-09-11 15:17:15', 'no'),
(10, '23', '59', 'FriendRefuse', '2012-09-11 15:17:16', 'no'),
(11, '89', '55', 'FriendConfirm', '2012-09-11 15:17:43', 'no'),
(12, '23', '57', 'FriendRefuse', '2012-09-11 15:22:19', 'no'),
(13, '23', '58', 'FriendRefuse', '2012-09-11 15:22:30', 'no'),
(14, '23', '55', 'FriendRefuse', '2012-09-11 16:06:13', 'no'),
(15, '23', '60', 'FriendRefuse', '2012-09-11 21:26:19', 'no'),
(16, '89', '61', 'FriendConfirm', '2012-09-11 21:26:22', 'no'),
(17, '89', '63', 'FriendRefuse', '2012-09-12 05:39:13', 'no'),
(18, '89', '64', 'FriendRefuse', '2012-09-12 06:22:25', 'no'),
(19, '89', '65', 'FriendRefuse', '2012-09-12 06:22:26', 'no'),
(20, '89', '916', 'TeamRefuse', '2012-09-12 06:22:29', 'no'),
(21, '89', '64', 'FriendConfirm', '2012-09-12 06:23:08', 'no'),
(22, '89', '65', 'FriendConfirm', '2012-09-12 06:23:10', 'no'),
(23, '89', '66', 'FriendRefuse', '2012-09-12 06:24:46', 'no'),
(24, '89', '66', 'FriendRefuse', '2012-09-12 06:25:05', 'no'),
(25, '89', '66', 'FriendConfirm', '2012-09-12 06:25:12', 'no'),
(26, '89', '67', 'FriendRefuse', '2012-09-12 06:25:21', 'no'),
(27, '89', '67', 'FriendRefuse', '2012-09-12 06:25:41', 'no'),
(28, '89', '67', 'FriendConfirm', '2012-09-12 06:25:47', 'no'),
(29, '89', '61', 'FriendConfirm', '2012-09-12 11:13:04', 'no'),
(30, '89', '64', 'FriendRefuse', '2012-09-12 11:49:51', 'no'),
(31, '89', '65', 'FriendRefuse', '2012-09-12 11:49:53', 'no'),
(32, '89', '66', 'FriendConfirm', '2012-09-12 11:49:57', 'no'),
(33, '89', '67', 'FriendConfirm', '2012-09-12 11:49:58', 'no'),
(34, '89', '64', 'FriendRefuse', '2012-09-12 11:51:15', 'no'),
(35, '89', '64', 'FriendConfirm', '2012-09-12 11:51:52', 'no'),
(36, '89', '65', 'FriendRefuse', '2012-09-12 11:54:10', 'no'),
(37, '89', '70', 'FriendConfirm', '2012-09-12 11:54:12', 'no'),
(38, '89', '896', 'TeamConfirm', '2012-09-12 11:54:15', 'no'),
(39, '89', '65', 'FriendRefuse', '2012-09-12 11:54:29', 'no'),
(40, '89', '65', 'FriendConfirm', '2012-09-13 12:37:56', 'no'),
(41, '89', '70', 'FriendConfirm', '2012-09-13 12:40:03', 'no'),
(42, '89', '71', 'FriendConfirm', '2012-09-13 12:42:08', 'no'),
(43, '89', '72', 'FriendConfirm', '2012-09-13 12:53:13', 'no'),
(44, '89', '73', 'FriendConfirm', '2012-09-13 14:17:58', 'no'),
(45, '89', '74', 'FriendConfirm', '2012-09-13 14:36:02', 'no'),
(46, '89', '75', 'FriendConfirm', '2012-09-13 14:36:27', 'no'),
(47, '89', '70', 'FriendConfirm', '2012-09-14 00:46:25', 'no'),
(48, '89', '71', 'FriendConfirm', '2012-09-14 00:46:30', 'no'),
(49, '89', '72', 'FriendConfirm', '2012-09-14 00:46:39', 'no'),
(50, '89', '73', 'FriendConfirm', '2012-09-14 00:47:04', 'no'),
(51, '89', '74', 'FriendConfirm', '2012-09-14 00:48:18', 'no'),
(52, '89', '71', 'FriendConfirm', '2012-09-14 01:34:18', 'no'),
(53, '89', '72', 'FriendConfirm', '2012-09-14 01:53:11', 'no'),
(54, '89', '73', 'FriendConfirm', '2012-09-14 01:53:25', 'no'),
(55, '107', '102', 'FriendConfirm', '2012-10-05 04:40:14', 'no'),
(56, '107', '104', 'FriendRefuse', '2012-10-05 04:49:31', 'no'),
(57, '107', '991', 'TeamRefuse', '2012-10-05 22:14:15', 'no'),
(58, '107', '992', 'TeamConfirm', '2012-10-06 00:57:18', 'no'),
(59, '107', '992', 'TeamConfirm', '2012-10-06 00:57:18', 'no'),
(60, '107', '992', 'TeamConfirm', '2012-10-06 00:57:18', 'no'),
(61, '107', '992', 'TeamConfirm', '2012-10-06 00:57:19', 'no'),
(62, '107', '992', 'TeamConfirm', '2012-10-06 00:57:19', 'no'),
(63, '107', '992', 'TeamConfirm', '2012-10-06 00:57:19', 'no'),
(64, '107', '992', 'TeamConfirm', '2012-10-06 00:57:34', 'no'),
(65, '107', '992', 'TeamConfirm', '2012-10-06 00:57:34', 'no'),
(66, '107', '992', 'TeamConfirm', '2012-10-06 00:57:34', 'no'),
(67, '107', '992', 'TeamConfirm', '2012-10-06 00:57:35', 'no'),
(68, '107', '992', 'TeamConfirm', '2012-10-06 00:57:35', 'no'),
(69, '107', '992', 'TeamConfirm', '2012-10-06 00:57:35', 'no'),
(70, '107', '992', 'TeamConfirm', '2012-10-06 00:57:36', 'no'),
(71, '107', '992', 'TeamConfirm', '2012-10-06 00:57:36', 'no'),
(72, '107', '992', 'TeamConfirm', '2012-10-06 00:57:36', 'no'),
(73, '107', '992', 'TeamConfirm', '2012-10-06 00:57:37', 'no'),
(74, '107', '992', 'TeamConfirm', '2012-10-06 00:57:37', 'no'),
(75, '107', '992', 'TeamConfirm', '2012-10-06 00:57:37', 'no'),
(76, '107', '992', 'TeamConfirm', '2012-10-06 00:57:37', 'no'),
(77, '107', '992', 'TeamConfirm', '2012-10-06 00:57:37', 'no'),
(78, '107', '992', 'TeamConfirm', '2012-10-06 00:57:38', 'no'),
(79, '107', '992', 'TeamConfirm', '2012-10-06 00:57:38', 'no'),
(80, '107', '992', 'TeamConfirm', '2012-10-06 00:57:38', 'no'),
(81, '107', '992', 'TeamConfirm', '2012-10-06 00:57:38', 'no'),
(82, '107', '995', 'TeamConfirm', '2012-10-06 02:45:52', 'no'),
(83, '107', '997', 'TeamConfirm', '2012-10-06 03:44:28', 'no'),
(84, '107', '997', 'TeamConfirm', '2012-10-06 03:53:58', 'no'),
(85, '107', '1005', 'TeamConfirm', '2012-10-06 03:53:58', 'no'),
(86, '107', '1008', 'TeamConfirm', '2012-10-06 04:12:06', 'no'),
(87, '107', '1007', 'TeamConfirm', '2012-10-06 04:12:08', 'no'),
(88, '107', '1013', 'TeamRefuse', '2012-10-06 04:22:46', 'no'),
(89, '107', '1014', 'TeamConfirm', '2012-10-06 04:23:22', 'no'),
(90, '107', '1015', 'TeamRefuse', '2012-10-06 04:23:26', 'no'),
(91, '107', '1017', 'TeamRefuse', '2012-10-06 04:25:41', 'no'),
(92, '107', '1016', 'TeamConfirm', '2012-10-06 04:25:43', 'no'),
(93, '107', '1038', 'TeamConfirm', '2012-10-06 06:31:26', 'no'),
(94, '107', '1040', 'TeamConfirm', '2012-10-06 06:32:09', 'no'),
(95, '107', '1041', 'TeamConfirm', '2012-10-06 06:32:53', 'no'),
(96, '107', '1044', 'TeamRefuse', '2012-10-06 06:53:44', 'no'),
(97, '107', '1045', 'TeamRefuse', '2012-10-06 21:27:20', 'no'),
(98, '107', '1054', 'TeamConfirm', '2012-10-07 04:33:58', 'no'),
(99, '107', '1054', 'TeamRefuse', '2012-10-07 04:54:10', 'no'),
(100, '107', '1056', 'TeamRefuse', '2012-10-07 04:54:20', 'no'),
(101, '107', '1055', 'TeamRefuse', '2012-10-07 04:54:23', 'no'),
(102, '107', '1066', 'TeamConfirm', '2012-10-07 05:56:28', 'no'),
(103, '107', '1066', 'TeamConfirm', '2012-10-07 06:07:48', 'no'),
(104, '107', '1067', 'TeamConfirm', '2012-10-07 06:25:48', 'no'),
(105, '89', '1067', 'TeamConfirm', '2012-10-08 08:02:34', 'no'),
(106, '89', '1067', 'TeamMakeAdmin', '2012-10-08 08:17:08', 'no'),
(107, '89', '1067', 'TeamDeleteAdmin', '2012-10-08 08:19:00', 'no'),
(108, '89', '1067', 'TeamMakeAdmin', '2012-10-08 08:19:03', 'no'),
(109, '89', '1067', 'TeamDeleteAdmin', '2012-10-08 08:19:06', 'no'),
(110, '89', '1067', 'TeamDelete', '2012-10-08 08:19:10', 'no'),
(111, '89', '1062', 'TeamMakeAdmin', '2012-10-14 21:34:26', 'no'),
(112, '89', '1061', 'TeamDelete', '2012-10-14 21:34:51', 'no'),
(113, '89', '1065', 'TeamConfirm', '2012-10-14 22:16:53', 'no'),
(114, '89', '1065', 'TeamMakeAdmin', '2012-10-14 22:17:27', 'no'),
(115, '89', '1065', 'TeamMakeAdmin', '2012-10-15 05:39:12', 'no'),
(116, '89', '1065', 'TeamDeleteAdmin', '2012-10-15 07:07:17', 'no'),
(117, '89', '1065', 'TeamMakeAdmin', '2012-10-15 11:50:27', 'no'),
(118, '89', '1065', 'TeamDeleteAdmin', '2012-10-15 11:52:01', 'no'),
(119, '89', '1062', 'TeamDeleteAdmin', '2012-10-15 11:52:04', 'no'),
(120, '89', '1065', 'TeamMakeAdmin', '2012-10-15 11:52:12', 'no'),
(121, '89', '1062', 'TeamMakeAdmin', '2012-10-15 11:52:27', 'no'),
(122, '89', '1062', 'TeamDeleteAdmin', '2012-10-15 11:52:44', 'no'),
(123, '89', '1062', 'TeamMakeAdmin', '2012-10-15 11:53:57', 'no'),
(124, '89', '1065', 'TeamDeleteAdmin', '2012-10-15 11:54:07', 'no'),
(125, '89', '1062', 'TeamDeleteAdmin', '2012-10-15 11:55:10', 'no'),
(126, '89', '1062', 'TeamMakeAdmin', '2012-10-15 11:55:12', 'no'),
(127, '89', '1062', 'TeamDeleteAdmin', '2012-10-15 11:55:14', 'no'),
(128, '89', '1065', 'TeamMakeAdmin', '2012-10-15 11:55:16', 'no'),
(129, '89', '1065', 'TeamDeleteAdmin', '2012-10-15 11:55:19', 'no'),
(130, '89', '1065', 'TeamDelete', '2012-10-15 11:55:25', 'no'),
(131, '89', '1062', 'TeamMakeAdmin', '2012-10-15 11:59:39', 'no'),
(132, '89', '1062', 'TeamMakeAdmin', '2012-10-15 11:59:39', 'no'),
(133, '89', '1062', 'TeamDeleteAdmin', '2012-10-15 11:59:41', 'no'),
(134, '89', '1062', 'TeamMakeAdmin', '2012-10-15 11:59:43', 'no'),
(135, '89', '1062', 'TeamDeleteAdmin', '2012-10-15 11:59:59', 'no'),
(136, '89', '1062', 'TeamDeleteAdmin', '2012-10-15 12:00:00', 'no'),
(137, '89', '1062', 'TeamMakeAdmin', '2012-10-15 12:00:02', 'no'),
(138, '89', '1062', 'TeamDeleteAdmin', '2012-10-15 12:00:04', 'no'),
(139, '89', '1062', 'TeamMakeAdmin', '2012-10-15 12:00:09', 'no'),
(140, '89', '1062', 'TeamMakeAdmin', '2012-10-15 12:00:10', 'no'),
(141, '89', '1062', 'TeamDeleteAdmin', '2012-10-15 12:00:23', 'no'),
(142, '89', '1062', 'TeamDeleteAdmin', '2012-10-15 12:00:24', 'no'),
(143, '89', '1062', 'TeamMakeAdmin', '2012-10-15 12:00:26', 'no'),
(144, '89', '1062', 'TeamDeleteAdmin', '2012-10-15 12:01:17', 'no'),
(145, '89', '1062', 'TeamMakeAdmin', '2012-10-15 12:01:18', 'no'),
(146, '89', '1062', 'TeamDeleteAdmin', '2012-10-15 12:01:20', 'no'),
(147, '89', '1062', 'TeamMakeAdmin', '2012-10-15 12:03:22', 'no'),
(148, '89', '1062', 'TeamDeleteAdmin', '2012-10-15 12:03:24', 'no'),
(149, '89', '1062', 'TeamDelete', '2012-10-15 12:03:26', 'no'),
(150, '108', '1065', 'TeamConfirm', '2012-10-15 15:14:35', 'no'),
(151, '89', '1065', 'TeamMakeAdmin', '2012-10-15 16:07:16', 'no'),
(152, '89', '1065', 'TeamDeleteAdmin', '2012-10-15 16:07:18', 'no'),
(153, '108', '1066', 'TeamConfirm', '2012-10-15 16:52:02', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE IF NOT EXISTS `parents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `active` varchar(45) CHARACTER SET latin1 NOT NULL,
  `birth_date` varchar(45) CHARACTER SET latin1 NOT NULL,
  `sex` varchar(45) CHARACTER SET latin1 NOT NULL,
  `nationality` varchar(45) CHARACTER SET latin1 NOT NULL,
  `start_date` datetime NOT NULL,
  `leaving_date` datetime NOT NULL,
  `about` text NOT NULL,
  `update_time` datetime NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `adder_id` varchar(45) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=23 ;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `name`, `active`, `birth_date`, `sex`, `nationality`, `start_date`, `leaving_date`, `about`, `update_time`, `create_time`, `adder_id`) VALUES
(22, 'khalid ahmed ali', '1', '', '1', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '2013-05-05 07:18:01', '');

-- --------------------------------------------------------

--
-- Table structure for table `parent_student`
--

CREATE TABLE IF NOT EXISTS `parent_student` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` varchar(45) NOT NULL,
  `student_id` varchar(45) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `adder_id` varchar(45) NOT NULL,
  `relation_title` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=245 ;

--
-- Dumping data for table `parent_student`
--

INSERT INTO `parent_student` (`id`, `parent_id`, `student_id`, `create_time`, `adder_id`, `relation_title`) VALUES
(224, '18', '51', '2013-05-12 10:25:16', '122', ''),
(242, '18', '51', '2013-05-12 10:25:15', '122', ''),
(243, '22', '10', '2013-06-20 18:27:34', '122', ''),
(244, '22', '9', '2013-06-23 08:24:18', '122', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `text` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `title`, `text`) VALUES
(1, 'Prepayment', NULL),
(2, 'Paypal', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE IF NOT EXISTS `permission` (
  `principal_id` int(11) NOT NULL,
  `subordinate_id` int(11) NOT NULL DEFAULT '0',
  `type` enum('user','role') NOT NULL,
  `action` int(11) NOT NULL,
  `template` tinyint(1) NOT NULL,
  `comment` text,
  PRIMARY KEY (`principal_id`,`subordinate_id`,`type`,`action`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`principal_id`, `subordinate_id`, `type`, `action`, `template`, `comment`) VALUES
(1, 0, 'role', 4, 0, ''),
(1, 0, 'role', 5, 0, ''),
(1, 0, 'role', 6, 0, ''),
(1, 0, 'role', 7, 0, ''),
(2, 0, 'role', 1, 0, 'Users can write messages'),
(2, 0, 'role', 2, 0, 'Users can receive messages'),
(2, 0, 'role', 3, 0, 'Users are able to view visits of his profile');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `type_cg` varchar(45) NOT NULL,
  `r_id` varchar(45) NOT NULL,
  `info_cg` text NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `uploader_id` varchar(45) NOT NULL,
  `controller_title_ex` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=887 ;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `title`, `type_cg`, `r_id`, `info_cg`, `create_time`, `uploader_id`, `controller_title_ex`) VALUES
(839, '1366534118canvas_chairs_on_tropical_island-wallpaper-2560x1440.jpg', 'profile', '5', '', '2013-04-21 08:48:38', '122', 'staff'),
(840, '1366534205agnaya_plaridel_scene-wallpaper-3840x2160.jpg', 'profile', '5', '', '2013-04-21 08:50:05', '122', 'staff'),
(841, '1366534219agnaya_plaridel_scene-wallpaper-3840x2160.jpg', 'profile', '5', '', '2013-04-21 08:50:19', '122', 'staff'),
(842, '1366534654agnaya_plaridel_scene-wallpaper-3840x2160.jpg', 'profile', '5', '', '2013-04-21 08:57:34', '122', 'staff'),
(843, '1366534660agnaya_plaridel_scene-wallpaper-3840x2160.jpg', 'profile', '5', '', '2013-04-21 08:57:40', '122', 'staff'),
(844, '1366534667beautiful_landscape_3-wallpaper-2560x1600.jpg', 'profile', '5', '', '2013-04-21 08:57:47', '122', 'staff'),
(845, '1366534674beautiful_landscape_3-wallpaper-2560x1600.jpg', 'profile', '5', '', '2013-04-21 08:57:54', '122', 'staff'),
(846, '1366534749agnaya_plaridel_scene-wallpaper-3840x2160.jpg', 'profile', '5', '', '2013-04-21 08:59:09', '122', 'staff'),
(847, '1366534791agnaya_plaridel_scene-wallpaper-3840x2160.jpg', 'profile', '5', '', '2013-04-21 08:59:51', '122', 'staff'),
(848, '1366534814agnaya_plaridel_scene-wallpaper-3840x2160.jpg', 'profile', '5', '', '2013-04-21 09:00:14', '122', 'staff'),
(849, '1366534838agnaya_plaridel_scene-wallpaper-3840x2160.jpg', 'profile', '5', '', '2013-04-21 09:00:38', '122', 'staff'),
(850, '1366534864agnaya_plaridel_scene-wallpaper-3840x2160.jpg', 'profile', '5', '', '2013-04-21 09:01:04', '122', 'staff'),
(851, '1366534897agnaya_plaridel_scene-wallpaper-3840x2160.jpg', 'profile', '5', '', '2013-04-21 09:01:37', '122', 'staff'),
(852, '1366534917agnaya_plaridel_scene-wallpaper-3840x2160.jpg', 'profile', '5', '', '2013-04-21 09:01:57', '122', 'staff'),
(853, '1366534979country_dirt_road-wallpaper-1920x1200.jpg', 'profile', '5', '', '2013-04-21 09:02:59', '122', 'staff'),
(854, '1366535003gorgeous_beach-wallpaper-1920x1080.jpg', 'profile', '5', '', '2013-04-21 09:03:23', '122', 'staff'),
(855, '1366535012winter_lodge-wallpaper-2560x1600.jpg', 'profile', '5', '', '2013-04-21 09:03:32', '122', 'staff'),
(856, '1366535024beautiful_landscape_3-wallpaper-2560x1600.jpg', 'profile', '5', '', '2013-04-21 09:03:44', '122', 'staff'),
(857, '1366535030canvas_chairs_on_tropical_island-wallpaper-2560x1440.jpg', 'profile', '5', '', '2013-04-21 09:03:50', '122', 'staff'),
(858, '1366535100agnaya_plaridel_scene-wallpaper-3840x2160.jpg', 'profile', '5', '', '2013-04-21 09:05:00', '122', 'staff'),
(859, '1366535106amazing_sunflowers-wallpaper-2560x1440.jpg', 'profile', '5', '', '2013-04-21 09:05:06', '122', 'staff'),
(860, '1366535113agnaya_plaridel_scene-wallpaper-3840x2160.jpg', 'profile', '5', '', '2013-04-21 09:05:13', '122', 'staff'),
(861, '1366535118country_dirt_road-wallpaper-1920x1200.jpg', 'profile', '5', '', '2013-04-21 09:05:18', '122', 'staff'),
(862, '1366535314gorgeous_beach-wallpaper-1920x1080.jpg', 'profile', '5', '', '2013-04-21 09:08:34', '122', 'staff'),
(863, '1366535494country_dirt_road-wallpaper-1920x1200.jpg', 'profile', '5', '', '2013-04-21 09:11:34', '122', 'staff'),
(864, '1366536397flowers_6-wallpaper-1920x1080.jpg', 'profile', '5', '', '2013-04-21 09:26:37', '122', 'staff'),
(865, '1366536444gorgeous_beach-wallpaper-1920x1080.jpg', 'profile', '5', '', '2013-04-21 09:27:24', '122', 'staff'),
(866, '1366536475canvas_chairs_on_tropical_island-wallpaper-2560x1440.jpg', 'profile', '5', '', '2013-04-21 09:27:55', '122', 'staff'),
(867, '1366536923agnaya_plaridel_scene-wallpaper-3840x2160.jpg', 'profile', '5', '', '2013-04-21 09:35:23', '122', 'staff'),
(868, '1366536930coastal_ocean_view-wallpaper-1920x1200.jpg', 'profile', '5', '', '2013-04-21 09:35:30', '122', 'staff'),
(869, '1366537017coastal_ocean_view-wallpaper-1920x1200.jpg', 'profile', '5', '', '2013-04-21 09:36:57', '122', 'staff'),
(870, '1366537166canvas_chairs_on_tropical_island-wallpaper-2560x1440.jpg', 'profile', '5', '', '2013-04-21 09:39:26', '122', 'staff'),
(871, '1366538651country_dirt_road-wallpaper-1920x1200.jpg', 'profile', '5', '', '2013-04-21 10:04:11', '122', 'staff'),
(872, '1367335624canvas_chairs_on_tropical_island-wallpaper-2560x1440.jpg', 'profile', '72', '', '2013-04-30 15:27:04', '122', 'staff'),
(873, '136782977031-05-2011.png', 'profile', '21', '', '2013-05-06 08:42:50', '122', 'students'),
(874, '1368372426428734_186621044826722_415374845_n.jpg', 'profile', '61', '', '2013-05-12 15:27:06', '0', 'students'),
(875, '1371715175970851_498065580262935_2013960929_n.jpg', 'profile', '2', '', '2013-06-20 07:59:35', '122', 'students'),
(876, '1371715519946693_484262214976605_1224771005_n.jpg', 'profile', '2', '', '2013-06-20 08:05:19', '122', 'students'),
(877, '1371715956946693_484262214976605_1224771005_n.jpg', 'profile', '2', '', '2013-06-20 08:12:36', '122', 'students'),
(878, '1371715967545916_10150893332719577_700768957_n.jpg', 'profile', '2', '', '2013-06-20 08:12:48', '122', 'students'),
(879, '1371716185945519_165504130291325_1209029497_n.png', 'profile', '2', '', '2013-06-20 08:16:25', '122', 'students'),
(880, '1371716395946693_484262214976605_1224771005_n.jpg', 'profile', '75', '', '2013-06-20 08:19:55', '122', 'staff'),
(881, '1371716402970851_498065580262935_2013960929_n.jpg', 'profile', '75', '', '2013-06-20 08:20:02', '122', 'staff'),
(882, '1371716442945519_165504130291325_1209029497_n.png', 'profile', '22', '', '2013-06-20 08:20:42', '122', 'parents'),
(883, '1371718207ashraf.jpg', 'profile', '2', '', '2013-06-20 08:50:07', '122', 'students'),
(884, '1371718218970851_498065580262935_2013960929_n.jpg', 'profile', '2', '', '2013-06-20 08:50:18', '122', 'students'),
(885, '1371727227946693_484262214976605_1224771005_n.jpg', 'profile', '2', '', '2013-06-20 11:20:27', '122', 'students'),
(886, '1371745446970851_498065580262935_2013960929_n.jpg', 'profile', '77', '', '2013-06-20 16:24:06', '122', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `privacy_setting`
--

CREATE TABLE IF NOT EXISTS `privacy_setting` (
  `user_id` int(10) unsigned NOT NULL,
  `message_new_friendship` tinyint(1) NOT NULL DEFAULT '1',
  `message_new_message` tinyint(1) NOT NULL DEFAULT '1',
  `message_new_profilecomment` tinyint(1) NOT NULL DEFAULT '1',
  `appear_in_search` tinyint(1) NOT NULL DEFAULT '1',
  `show_online_status` tinyint(1) NOT NULL DEFAULT '1',
  `log_profile_visits` tinyint(1) NOT NULL DEFAULT '1',
  `ignore_users` varchar(255) DEFAULT NULL,
  `public_profile_fields` bigint(15) unsigned DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `privacy_setting`
--

INSERT INTO `privacy_setting` (`user_id`, `message_new_friendship`, `message_new_message`, `message_new_profilecomment`, `appear_in_search`, `show_online_status`, `log_profile_visits`, `ignore_users`, `public_profile_fields`) VALUES
(1, 1, 1, 1, 1, 1, 1, '', NULL),
(2, 1, 1, 1, 1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `privacy` enum('protected','private','public') NOT NULL,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `show_friends` tinyint(1) DEFAULT '1',
  `allow_comments` tinyint(1) DEFAULT '1',
  `email` varchar(255) NOT NULL DEFAULT '',
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `about` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `timestamp`, `privacy`, `lastname`, `firstname`, `show_friends`, `allow_comments`, `email`, `street`, `city`, `about`) VALUES
(1, 1, '2012-03-30 09:09:00', 'protected', 'admin', 'admin', 1, 1, 'webmaster@example.com', NULL, NULL, NULL),
(2, 2, '2012-03-30 09:09:00', 'protected', 'demo', 'demo', 1, 1, 'demo@example.com', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profile_comment`
--

CREATE TABLE IF NOT EXISTS `profile_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `createtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `profile_field`
--

CREATE TABLE IF NOT EXISTS `profile_field` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `hint` text NOT NULL,
  `field_type` varchar(50) NOT NULL DEFAULT '',
  `field_size` int(3) NOT NULL DEFAULT '0',
  `field_size_min` int(3) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(255) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  `related_field_name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`,`visible`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `profile_field`
--

INSERT INTO `profile_field` (`id`, `varname`, `title`, `hint`, `field_type`, `field_size`, `field_size_min`, `required`, `match`, `range`, `error_message`, `other_validator`, `default`, `position`, `visible`, `related_field_name`) VALUES
(1, 'email', 'E-Mail', '', 'VARCHAR', 255, 0, 1, '', '', '', 'CEmailValidator', '', 0, 3, ''),
(6, 'about', 'About', '', 'TEXT', 255, 0, 0, '', '', '', '', '', 0, 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `profile_field_group`
--

CREATE TABLE IF NOT EXISTS `profile_field_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `position` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `profile_visit`
--

CREATE TABLE IF NOT EXISTS `profile_visit` (
  `visitor_id` int(11) NOT NULL,
  `visited_id` int(11) NOT NULL,
  `timestamp_first_visit` int(11) NOT NULL,
  `timestamp_last_visit` int(11) NOT NULL,
  `num_of_visits` int(11) NOT NULL,
  PRIMARY KEY (`visitor_id`,`visited_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(45) NOT NULL,
  `lab_id` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `is_membership_possible` tinyint(1) NOT NULL DEFAULT '0',
  `price` double DEFAULT NULL COMMENT 'Price (when using membership module)',
  `duration` int(11) DEFAULT NULL COMMENT 'How long a membership is valid',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `title`, `description`, `is_membership_possible`, `price`, `duration`) VALUES
(1, 'UserManager', 'This users can manage Users', 0, 0, 0),
(2, 'Demo', 'Users having the demo role', 0, 0, 0),
(3, 'Business', 'Example Business account', 0, 9.99, 7),
(4, 'Premium', 'Example Premium account', 0, 19.99, 28);

-- --------------------------------------------------------

--
-- Table structure for table `soon`
--

CREATE TABLE IF NOT EXISTS `soon` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sourcemessage`
--

CREATE TABLE IF NOT EXISTS `sourcemessage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(32) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `sourcemessage`
--

INSERT INTO `sourcemessage` (`id`, `category`, `message`) VALUES
(1, 'UserModule.user', 'Login'),
(2, 'UserModule.user', 'Register'),
(3, 'UserModule.user', 'Profile'),
(4, 'UserModule.user', 'Logout'),
(5, 'time', 'it is for test'),
(6, 'strings', 'the quick brown fox jumped over the lazy dog'),
(7, 'UserModule.user', 'Manage Users'),
(8, 'UserModule.user', 'Edit'),
(9, 'UserModule.user', 'Change password'),
(10, 'UserModule.user', 'Your profile'),
(11, 'UserModule.user', 'Id'),
(12, 'UserModule.user', 'username'),
(13, 'UserModule.user', 'password'),
(14, 'UserModule.user', 'Retype Password'),
(15, 'UserModule.user', 'E-mail'),
(16, 'UserModule.user', 'Verification Code'),
(17, 'UserModule.user', 'activation key'),
(18, 'UserModule.user', 'Registration date'),
(19, 'UserModule.user', 'Last visit'),
(20, 'UserModule.user', 'Superuser'),
(21, 'UserModule.user', 'Status'),
(22, 'UserModule.user', 'First Name'),
(23, 'UserModule.user', 'Last Name'),
(24, 'UserModule.user', 'Birthday'),
(25, 'UserModule.user', 'Not active'),
(26, 'UserModule.user', 'Active'),
(27, 'UserModule.user', 'Banned'),
(28, 'UserModule.user', 'No'),
(29, 'UserModule.user', 'Yes'),
(30, 'application', 'Select a file'),
(31, 'UserModule.user', 'Please fill out the following form with your login credentials:'),
(32, 'UserModule.user', 'Fields with <span class="required">*</span> are required.'),
(33, 'UserModule.user', 'Remember me next time'),
(34, 'UserModule.user', 'username or email'),
(35, 'UserModule.user', 'Lost Password?'),
(36, 'UserModule.user', 'Password is incorrect.'),
(37, 'UserModule.user', 'Incorrect username (length between 3 and 20 characters).'),
(38, 'UserModule.user', 'This user''s name already exists.'),
(39, 'UserModule.user', 'Incorrect symbols (A-z0-9).'),
(40, 'UserModule.user', 'This user''s email address already exists.'),
(41, 'app', 'TEACHERS'),
(42, 'app', 'All Subjects'),
(43, 'blog', 'Active record class "{class}" does not have a scope named "{scope}".'),
(44, 'blog', 'All Subjects');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE IF NOT EXISTS `sports` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `logo` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `title`, `logo`, `description`) VALUES
(1, 'football', '', ''),
(2, 'running', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `active` varchar(45) CHARACTER SET latin1 NOT NULL,
  `birth_date` varchar(45) CHARACTER SET latin1 NOT NULL,
  `sex` varchar(8) CHARACTER SET latin1 NOT NULL,
  `nationality` varchar(3) CHARACTER SET latin1 NOT NULL,
  `start_date` varchar(45) CHARACTER SET latin1 NOT NULL,
  `appointment_date` varchar(45) CHARACTER SET latin1 NOT NULL,
  `leaving_date` varchar(45) CHARACTER SET latin1 NOT NULL,
  `about` text NOT NULL,
  `job_title` varchar(45) CHARACTER SET latin1 NOT NULL,
  `update_time` datetime NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `adder_id` varchar(45) CHARACTER SET latin1 NOT NULL,
  `teacher` varchar(1) CHARACTER SET latin1 NOT NULL,
  `freeze_access` varchar(45) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=80 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `active`, `birth_date`, `sex`, `nationality`, `start_date`, `appointment_date`, `leaving_date`, `about`, `job_title`, `update_time`, `create_time`, `adder_id`, `teacher`, `freeze_access`) VALUES
(5, 'ahmed noor aldeen', '1', '', '1', '3', '', '', '', '', '5', '0000-00-00 00:00:00', '2013-04-22 06:13:39', '', '1', ''),
(6, 'kkkkkkkkkkkkkk', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '2013-04-23 08:14:54', '', '1', ''),
(65, 'ahmed nader', '1', '', '1', '3', '', '', '', '', '3', '0000-00-00 00:00:00', '2013-05-05 06:10:09', '', '', ''),
(72, 'kkkkkkkkkkkkkk', '1', '', '1', '3', '', '', '', '', '3', '0000-00-00 00:00:00', '2013-05-05 06:10:09', '', '1', ''),
(74, 'omar', '1', '', '1', '3', '', '', '', '', '4', '0000-00-00 00:00:00', '2013-05-14 06:06:05', '', '1', ''),
(75, 'ali', '1', '', '1', '3', '', '', '', '', '4', '0000-00-00 00:00:00', '2013-06-16 15:41:11', '', ' ', ''),
(76, 'khalid', '1', '', '1', '3', '', '', '', '', '4', '0000-00-00 00:00:00', '2013-05-16 15:01:24', '', '1', ''),
(78, 'ashraf', '1', '', '1', '180', '', '', '', '', '1', '2013-06-20 19:51:38', '2013-06-22 13:16:00', '', '1', ''),
(79, 'yasir mohamed abdul hameed elsamman', '1', '', '1', '63', '', '', '', '', '1', '0000-00-00 00:00:00', '2013-06-27 10:20:51', '', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `title`) VALUES
(1, 'active'),
(2, 'inactive'),
(3, 'closed');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `active` varchar(45) CHARACTER SET latin1 NOT NULL,
  `birth_date` varchar(45) CHARACTER SET latin1 NOT NULL,
  `sex` varchar(45) CHARACTER SET latin1 NOT NULL,
  `nationality` varchar(45) NOT NULL,
  `start_date` varchar(45) CHARACTER SET latin1 NOT NULL,
  `leaving_date` varchar(45) CHARACTER SET latin1 NOT NULL,
  `about` text NOT NULL,
  `update_time` datetime NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `class_m` varchar(45) CHARACTER SET latin1 NOT NULL,
  `grade` varchar(45) CHARACTER SET latin1 NOT NULL,
  `adder_id` varchar(45) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=14 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `active`, `birth_date`, `sex`, `nationality`, `start_date`, `leaving_date`, `about`, `update_time`, `create_time`, `class_m`, `grade`, `adder_id`) VALUES
(9, 'ytyuguihjik', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '2013-06-20 20:19:12', '4', '1', ''),
(10, 'bkjkj', '1', '', '1', '180', '', '', '', '0000-00-00 00:00:00', '2013-06-20 20:19:12', '4', '1', ''),
(11, 'ijojko', '1', '', '1', '180', '', '', '', '0000-00-00 00:00:00', '2013-06-20 20:19:12', '4', '1', ''),
(12, 'zzzzzzzzzzzzzz', '1', '', '1', '180', '', '', '', '0000-00-00 00:00:00', '2013-06-23 08:28:08', '0', '1', ''),
(13, 'sfddsfds', '1', '', '1', '3', '', '', '', '2013-06-23 13:19:16', '2013-06-23 08:28:08', '0', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `about` text NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `title`, `about`, `create_time`, `update_time`) VALUES
(2, 'graphic', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'asp.net', '', '0000-00-00 00:00:00', '2013-06-22 16:12:57'),
(30, 'php', '', '0000-00-00 00:00:00', '2013-06-22 16:12:33');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `message` text NOT NULL,
  `from_user_id` varchar(45) NOT NULL,
  `to_user_id` varchar(45) NOT NULL,
  `read_eX` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE IF NOT EXISTS `tbl_message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `language` varchar(45) NOT NULL,
  `translation` text NOT NULL,
  PRIMARY KEY (`id`,`language`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profiles`
--

CREATE TABLE IF NOT EXISTS `tbl_profiles` (
  `user_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_profiles`
--

INSERT INTO `tbl_profiles` (`user_id`, `lastname`, `firstname`, `birthday`) VALUES
(0, '', '', '0000-00-00'),
(1, 'Admin', 'Administrator2', '0000-00-00'),
(2, 'Demo', 'Demo', '0000-00-00'),
(18, 'alsamman', 'ashraf', '0000-00-00'),
(19, 'alsamman', 'ashraf', '0000-00-00'),
(20, 'alsamman', 'ashraf', '0000-00-00'),
(21, 'aaaa', 'ashraf', '0000-00-00'),
(22, 'alsamman', 'ashraf', '0000-00-00'),
(23, 'alsamman', 'ashraf', '0000-00-00'),
(24, 'alsamman', 'dffds', '0000-00-00'),
(25, 'alsamman', 'ashraf', '0000-00-00'),
(26, 'zxzx', 'zxzxzx', '0000-00-00'),
(27, 'alsamman', 'ashraf', '0000-00-00'),
(28, 'dsd', 'ashraf', '0000-00-00'),
(29, 'alsamman', 'dffds', '0000-00-00'),
(30, 'xxxxxx', 'xxxxxxx', '0000-00-00'),
(31, 'aaaa', 'ashraf', '0000-00-00'),
(32, 'asasasas', 'ashrafas', '0000-00-00'),
(33, 'alsamman', 'ashraf', '0000-00-00'),
(34, 'sdfdsfdsfdf', 'ashraf', '0000-00-00'),
(35, 'alsammanasas', 'ashraf', '0000-00-00'),
(36, 'aaaa', 'ashraf', '0000-00-00'),
(37, 'alsamman', 'ashraf', '0000-00-00'),
(38, 'aaaaasasaas', 'ashraf', '0000-00-00'),
(39, 'alsamman', 'ashraf', '0000-00-00'),
(40, 'aaaa', 'ashraf', '0000-00-00'),
(41, 'dsd', 'ashraf', '0000-00-00'),
(42, 'alsamman', 'ashraf', '0000-00-00'),
(44, 'alsamman', 'dffds', '0000-00-00'),
(45, 'alsamman', 'ashraf', '0000-00-00'),
(46, 'alsamman', 'ashrafdd', '0000-00-00'),
(47, 'alsamman', 'ashraf', '0000-00-00'),
(48, 'aaaa', 'dffds', '0000-00-00'),
(49, 'aaaa', 'ashraf', '0000-00-00'),
(50, 'aaaa', 'ashraf', '0000-00-00'),
(51, 'dsd', 'ashraf', '0000-00-00'),
(52, 'dsd', 'ashraf', '0000-00-00'),
(53, 'alsamman', 'ashraf', '0000-00-00'),
(54, 'aaaa', 'ashraf', '0000-00-00'),
(55, 'alsamman', 'ashraf', '0000-00-00'),
(56, 'alsamman', 'ashraf', '0000-00-00'),
(57, 'aaaa', 'ddddd', '0000-00-00'),
(58, 'aaaa', 'ashraf', '0000-00-00'),
(59, 'ddfffd', 'ashrafffddff', '0000-00-00'),
(60, 'aaaa', 'ffffff', '0000-00-00'),
(61, 'vvvvvvvc', 'ashraf', '0000-00-00'),
(62, 'alsammancccvv', 'ashrafcccx', '0000-00-00'),
(63, 'aasssaassasasasasasasasas', 'ashrafssssaasasas', '0000-00-00'),
(64, 'alsamman', 'ashraf', '0000-00-00'),
(65, 'alsamman', 'dffds', '0000-00-00'),
(66, 'alsamman', 'ashraf', '0000-00-00'),
(67, 'alsamman', 'ashraf', '0000-00-00'),
(68, 'aaaa', 'ashrafff', '0000-00-00'),
(69, 'alsamman', 'dffdsdd', '0000-00-00'),
(70, 'alsamman', 'ashraf', '0000-00-00'),
(71, 'alsamman', 'ashrafffddfffdfdfdf', '0000-00-00'),
(72, 'alsamman', 'ashraf', '0000-00-00'),
(78, 'alsammanssssddd', 'ashrafssddddddds', '0000-00-00'),
(79, 'alsamman', 'ashraf', '0000-00-00'),
(80, 'alsamman', 'ashrafffffddds', '0000-00-00'),
(81, 'alsammansssssssss', 'ashrafddss', '0000-00-00'),
(82, 'alsamman', 'ashraf', '0000-00-00'),
(83, 'alsamman', 'ashraf', '0000-00-00'),
(84, 'alsamman', 'ashraf', '0000-00-00'),
(85, 'alsamman', 'ashraf', '0000-00-00'),
(86, 'dsd', 'ashrafdddddddddddddddddddd', '0000-00-00'),
(87, 'alsamman', 'ddddd', '0000-00-00'),
(88, 'dsd', 'ashraf', '0000-00-00'),
(89, 'alsamman', 'ashraf', '0000-00-00'),
(90, 'ddddddddddddfasdf', 'adfdasfdf', '0000-00-00'),
(91, 'ddddddddddddfasdf', 'adfdasfdf', '0000-00-00'),
(92, 'adjfadf', 'ahmed', '2012-09-17'),
(93, 'adjfadf', 'ahmed', '0000-00-00'),
(94, 'adjfadf', 'ahmed', '0000-00-00'),
(95, 'adjfadfassa', 'ahmedass', '0000-00-00'),
(96, 'adjfadf', 'ahmed', '0000-00-00'),
(97, 'adjfadfassa', 'ahmed', '0000-00-00'),
(98, 'adjfadfassa', 'ahmed', '0000-00-00'),
(99, 'adjfadfassa', 'ahmed', '0000-00-00'),
(100, 'adjfadf', 'ahmed', '0000-00-00'),
(101, 'adjfadfassa', 'ahmed', '0000-00-00'),
(102, 'adjfadf', 'ahmed', '0000-00-00'),
(103, 'adjfadfassa', 'ahmed', '0000-00-00'),
(104, 'adjfadfassa', 'ahmeddd', '0000-00-00'),
(105, 'adjfadfffff', 'ahmedassfffd', '0000-00-00'),
(106, 'adjfadf', 'ahmed', '0000-00-00'),
(107, 'alsamman', 'ashraf', '2012-09-12'),
(108, 'adjfadfassa', 'ahmed', '0000-00-00'),
(109, 'zaky zzx', 'zaky', '2012-10-17'),
(110, 'adjfadf', 'ahmed', '2012-10-24'),
(116, 'adjfadfassa', 'zaky', '0000-00-00'),
(117, 'adjfadfassa', 'zaky', '0000-00-00'),
(118, '', '', '0000-00-00'),
(119, '', '', '0000-00-00'),
(120, '', '', '0000-00-00'),
(121, '', '', '0000-00-00'),
(122, '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profiles_fields`
--

CREATE TABLE IF NOT EXISTS `tbl_profiles_fields` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` int(3) NOT NULL DEFAULT '0',
  `field_size_min` int(3) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(5000) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`,`widget`,`visible`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_source_message`
--

CREATE TABLE IF NOT EXISTS `tbl_source_message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(45) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_source_message`
--

INSERT INTO `tbl_source_message` (`id`, `category`, `message`) VALUES
(1, 'app', 'All Subjects');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `createtime` int(10) NOT NULL DEFAULT '0',
  `lastvisit` int(10) NOT NULL DEFAULT '0',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `user_id` varchar(45) NOT NULL,
  `controller_title_ex` varchar(45) NOT NULL,
  `freeze_access` varchar(1) NOT NULL,
  `lang` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=123 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `email`, `activkey`, `createtime`, `lastvisit`, `superuser`, `status`, `user_id`, `controller_title_ex`, `freeze_access`, `lang`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '9a24eff8c15a6a141ece27eb6947da0f', 1261146094, 1372119699, 1, 1, '', 'Staff', '', ''),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example.com', '099f825543f7850cc038b90aaff39fac', 1261146096, 1333602842, 1, 1, '', 'Staff', '', ''),
(85, 'nader', '7a41a3b7df2f1afb37f07ae506ddc903', 'exashra333@yahoo.com', '05c4568c275266cdf9b872c84cf8ca70', 1333802907, 1333805021, 1, 1, '5', 'Staff', '', ''),
(120, 'fortest', 'd41d8cd98f00b204e9800998ecf8427e', 'asssssss00dd@asf.com', '01191234cfe7134dfd2d5cb86637f8fc', 1363764706, 1363764706, 1, 1, '4', 'Staff', '', ''),
(121, 'ashraf99', '7a41a3b7df2f1afb37f07ae506ddc903', 'exashraf@yahoo.com', '33c48db2cccbc3139fc0ce557b04f88b', 1368511125, 1370942238, 1, 1, '', 'Staff', '', ''),
(122, 'ashraf98', '7a41a3b7df2f1afb37f07ae506ddc903', 'nasgkf@jhvjh.com', 'faa50d20af0c24a2bc22c180b3a3b6e5', 1371110729, 1372658589, 1, 1, '78', 'Staff', '', 'ar');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_class`
--

CREATE TABLE IF NOT EXISTS `teacher_class` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teacher_id` varchar(45) NOT NULL,
  `class_id` varchar(45) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `adder_id` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `teacher_class`
--

INSERT INTO `teacher_class` (`id`, `teacher_id`, `class_id`, `create_time`, `adder_id`) VALUES
(12, '2', '1', '2013-04-03 06:12:20', '122'),
(14, '3', '1', '2013-04-03 09:23:47', ''),
(15, '7', '2', '2013-04-21 07:22:49', '122'),
(46, '3', '3', '2013-04-24 15:13:25', '122'),
(49, '72', '2', '2013-04-30 11:59:17', '122'),
(50, '72', '3', '2013-05-01 05:10:41', '122'),
(51, '73', '2', '2013-05-14 06:01:39', '121'),
(52, '73', '3', '2013-05-14 06:01:50', '121'),
(53, '73', '1', '2013-05-14 06:02:04', '121'),
(54, '74', '1', '2013-05-14 06:06:45', '121'),
(55, '74', '2', '2013-05-14 06:06:55', '121'),
(57, '75', '1', '2013-05-14 06:59:34', '121'),
(58, '75', '2', '2013-05-14 06:59:44', '121'),
(59, '75', '3', '2013-05-14 06:59:52', '121'),
(60, '76', '1', '2013-05-16 15:02:08', '121'),
(61, '76', '2', '2013-05-16 15:02:16', '121'),
(63, '77', '2', '2013-05-26 16:11:17', '121'),
(64, '79', '1', '2013-06-27 12:02:53', '122');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_subject`
--

CREATE TABLE IF NOT EXISTS `teacher_subject` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teacher_id` varchar(45) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `subject_id` varchar(45) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `adder_id` varchar(45) NOT NULL,
  `status` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `teacher_subject`
--

INSERT INTO `teacher_subject` (`id`, `teacher_id`, `subject_id`, `create_time`, `adder_id`, `status`) VALUES
(2, '78', '2', '2013-06-12 06:36:39', '', 0),
(10, '78', '3', '2013-06-12 06:36:39', '122', 0),
(13, '3', '3', '2013-04-03 09:10:59', '', 0),
(15, '7', '2', '2013-04-21 07:23:04', '122', 0),
(36, '3', '4', '2013-04-24 15:12:48', '122', 0),
(40, '72', '2', '2013-04-30 11:58:59', '122', 0),
(41, '5', '2', '2013-05-06 06:30:19', '122', 0),
(42, '73', '16', '2013-05-14 06:01:26', '121', 0),
(43, '74', '19', '2013-05-14 06:06:21', '121', 0),
(44, '74', '18', '2013-05-14 06:06:28', '121', 0),
(45, '74', '17', '2013-05-14 06:06:34', '121', 0),
(46, '75', '20', '2013-05-14 06:59:15', '121', 0),
(47, '75', '18', '2013-05-14 06:59:22', '121', 0),
(48, '75', '19', '2013-05-14 06:59:26', '121', 0),
(49, '74', '20', '2013-05-14 18:00:59', '121', 0),
(51, '76', '19', '2013-05-16 15:01:44', '121', 0),
(52, '76', '20', '2013-05-16 15:01:55', '121', 0),
(53, '77', '19', '2013-05-26 16:11:02', '121', 0),
(54, '78', '29', '2013-06-06 06:25:55', '0', 0),
(56, '76', '2', '2013-06-23 06:11:34', '122', 0),
(57, '79', '30', '2013-06-27 10:22:00', '122', 0);

-- --------------------------------------------------------

--
-- Table structure for table `test_messages_updated_group`
--

CREATE TABLE IF NOT EXISTS `test_messages_updated_group` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `user` int(7) NOT NULL,
  `grp` int(7) NOT NULL,
  `updated` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `test_messages_updated_group`
--

INSERT INTO `test_messages_updated_group` (`id`, `user`, `grp`, `updated`) VALUES
(23, 1, 1, '1'),
(24, 2, 1, '1'),
(25, 121, 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `time_line`
--

CREATE TABLE IF NOT EXISTS `time_line` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `adder_id` varchar(45) CHARACTER SET latin1 NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL,
  `from_date_ex` varchar(45) CHARACTER SET latin1 NOT NULL,
  `to_date_ex` varchar(45) CHARACTER SET latin1 NOT NULL,
  `default_lesson_planner_id` varchar(45) CHARACTER SET latin1 NOT NULL,
  `show_ex` int(10) unsigned NOT NULL,
  `lesson_planner_id` varchar(45) CHARACTER SET latin1 NOT NULL,
  `status` varchar(45) CHARACTER SET latin1 NOT NULL,
  `subject_id` varchar(45) CHARACTER SET latin1 NOT NULL,
  `about` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=46 ;

--
-- Dumping data for table `time_line`
--

INSERT INTO `time_line` (`id`, `title`, `adder_id`, `create_date`, `update_date`, `from_date_ex`, `to_date_ex`, `default_lesson_planner_id`, `show_ex`, `lesson_planner_id`, `status`, `subject_id`, `about`) VALUES
(1, 'Week 1', '122', '2013-06-24 10:26:00', '0000-00-00 00:00:00', '03/01/2013', '03/07/2013', '1', 1, '', '', '', ''),
(2, 'Week 2', '122', '2013-06-24 10:26:00', '0000-00-00 00:00:00', '03/08/2013', '03/13/2013', '1', 1, '', '', '', ''),
(3, 'Week 3', '122', '2013-06-24 10:26:00', '0000-00-00 00:00:00', '03/14/2013', '03/20/2013', '1', 1, '', '', '', ''),
(4, 'Week 4', '122', '2013-06-24 10:26:00', '0000-00-00 00:00:00', '03/21/2013', '03/28/2013', '1', 0, '', '', '', ''),
(5, 'Week 5', '122', '2013-06-24 10:26:00', '0000-00-00 00:00:00', '03/27/2013', '04/02/2013', '1', 0, '', '', '', ''),
(6, 'Week 6', '122', '2013-06-24 10:26:00', '0000-00-00 00:00:00', '04/03/2013', '04/09/2013', '1', 0, '', '', '', ''),
(21, 'Week 1', '', '2013-06-24 10:26:41', '0000-00-00 00:00:00', '05/06/2013', '05/19/2013', '1', 0, '', '', '', ''),
(22, 'week 2', '', '2013-06-24 10:26:41', '0000-00-00 00:00:00', '05/01/2013', '05/31/2013', '2', 0, '', '', '', ''),
(23, 'Week 3', '', '2013-05-26 14:33:11', '0000-00-00 00:00:00', '05/31/2013', '05/06/2013', '2', 0, '', '', '', ''),
(24, 'Week 4', '', '2013-05-26 14:33:11', '0000-00-00 00:00:00', '05/14/2013', '05/11/2013', '2', 0, '', '', '', ''),
(25, 'ffvxc cvbxcb', '', '2013-06-24 10:26:41', '0000-00-00 00:00:00', '06/04/2013', '06/28/2013', '', 0, '', '', '', ''),
(26, 'ffvxc cvbxcb', '', '2013-06-24 10:26:41', '0000-00-00 00:00:00', '06/04/2013', '06/28/2013', '', 0, '', '', '', ''),
(27, 'ffvxc cvbxcb', '', '2013-06-24 10:26:41', '0000-00-00 00:00:00', '06/04/2013', '06/28/2013', '', 0, '', '', '', ''),
(28, 'ffvxc cvbxcb', '', '2013-06-24 10:26:41', '0000-00-00 00:00:00', '06/04/2013', '06/28/2013', '', 0, '', '', '', ''),
(29, '', '', '2013-06-24 10:26:41', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', ''),
(30, '', '', '2013-06-24 10:26:41', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', ''),
(31, 'sdfsdf', '', '2013-06-24 10:26:41', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', ''),
(32, 'vvvvv', '', '2013-06-24 10:26:41', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', ''),
(33, '', '', '2013-06-24 10:26:41', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', ''),
(34, '', '', '2013-06-01 18:53:22', '0000-00-00 00:00:00', '', '', '', 55, '', '', '', ''),
(35, '', '', '2013-06-01 18:59:03', '0000-00-00 00:00:00', '', '', '', 55, '', '', '', ''),
(36, '', '', '2013-06-01 19:04:32', '0000-00-00 00:00:00', '', '', '', 55, '', '', '', ''),
(37, '', '', '2013-06-01 19:04:53', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', ''),
(38, '', '', '2013-06-24 10:26:41', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', ''),
(39, '', '', '2013-06-24 10:26:41', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', ''),
(40, '', '', '2013-06-24 10:26:41', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', ''),
(41, '', '', '2013-06-01 20:20:09', '0000-00-00 00:00:00', '', '', '', 1, '', '', '', ''),
(42, '', '', '2013-06-02 05:22:16', '0000-00-00 00:00:00', '', '', '', 1, '', '', '', ''),
(43, '', '', '2013-06-02 06:27:54', '0000-00-00 00:00:00', '', '', '', 1, '', '', '', ''),
(44, '', '', '2013-06-02 06:28:46', '0000-00-00 00:00:00', '', '', '', 1, '', '', '', ''),
(45, '??????? ??????', '', '2013-06-02 06:32:19', '0000-00-00 00:00:00', '06/04/2013', '', '2', 1, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE IF NOT EXISTS `time_table` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `day_id` varchar(10) NOT NULL,
  `class_id` varchar(10) NOT NULL,
  `subject_id` varchar(10) NOT NULL,
  `teacher_id` varchar(10) NOT NULL,
  `lesson_id` varchar(10) NOT NULL,
  `adder_id` varchar(45) NOT NULL,
  `adder_model` varchar(45) NOT NULL,
  `updater_id` varchar(45) NOT NULL,
  `updater_model` varchar(45) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `time_table_id` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`id`, `day_id`, `class_id`, `subject_id`, `teacher_id`, `lesson_id`, `adder_id`, `adder_model`, `updater_id`, `updater_model`, `last_update`, `time_table_id`) VALUES
(1, '2', '1', '20', '75', '1', '121', 'user', '', '', '2013-05-28 22:33:08', '21'),
(3, '2', '2', '20', '76', '1', '121', 'user', '', '', '2013-05-28 22:33:24', '21'),
(4, '17', '1', '2', '76', '1', '122', 'user', '', '', '2013-06-23 06:32:05', '27'),
(5, '17', '2', '2', '72', '1', '122', 'user', '', '', '2013-06-24 06:33:47', '27');

-- --------------------------------------------------------

--
-- Table structure for table `time_tables`
--

CREATE TABLE IF NOT EXISTS `time_tables` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update` datetime NOT NULL,
  `status` int(10) unsigned NOT NULL,
  `adder_id` varchar(45) CHARACTER SET latin1 NOT NULL,
  `just_inserted_count` varchar(45) CHARACTER SET latin1 NOT NULL,
  `just_removed_count` varchar(45) CHARACTER SET latin1 NOT NULL,
  `lesson_num` int(10) unsigned NOT NULL DEFAULT '1',
  `sunday` varchar(45) CHARACTER SET latin1 NOT NULL DEFAULT 'on',
  `friday` varchar(45) CHARACTER SET latin1 NOT NULL,
  `saturday` varchar(45) CHARACTER SET latin1 NOT NULL DEFAULT 'on',
  `monday` varchar(45) CHARACTER SET latin1 NOT NULL DEFAULT 'on',
  `tuesday` varchar(45) CHARACTER SET latin1 NOT NULL DEFAULT 'on',
  `wednesday` varchar(45) CHARACTER SET latin1 NOT NULL DEFAULT 'on',
  `thursday` varchar(45) CHARACTER SET latin1 NOT NULL DEFAULT 'on',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=28 ;

--
-- Dumping data for table `time_tables`
--

INSERT INTO `time_tables` (`id`, `title`, `create_time`, `last_update`, `status`, `adder_id`, `just_inserted_count`, `just_removed_count`, `lesson_num`, `sunday`, `friday`, `saturday`, `monday`, `tuesday`, `wednesday`, `thursday`) VALUES
(21, 'asd', '2013-06-16 20:50:29', '0000-00-00 00:00:00', 0, '', '', '', 5, 'on', '', 'on', 'on', 'on', 'on', 'on'),
(23, 'this fot test', '2013-06-11 09:42:35', '0000-00-00 00:00:00', 0, '', '', '', 6, 'on', '', 'on', 'on', 'on', 'on', 'on'),
(26, '666666666666666666', '2013-06-16 20:50:28', '0000-00-00 00:00:00', 0, '', '', '', 5, 'on', '', 'on', 'on', 'on', 'on', 'on'),
(27, '2014', '2013-06-17 05:46:21', '2013-06-20 21:49:16', 1, '', '', '', 5, 'on', '', '', 'on', 'on', 'on', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `translation`
--

CREATE TABLE IF NOT EXISTS `translation` (
  `message` varbinary(255) NOT NULL,
  `translation` varchar(255) NOT NULL,
  `language` varchar(5) NOT NULL,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`message`,`language`,`category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `translation`
--

INSERT INTO `translation` (`message`, `translation`, `language`, `category`) VALUES
('About', 'Über', 'de', 'yum'),
('About', 'Acerca', 'es', 'yum'),
('About', 'me concernant ??', 'fr', 'yum'),
('About', 'Info', 'it', 'yum'),
('About', 'Info', 'pl', 'yum'),
('Access control', 'Zugangskontrolle', 'de', 'yum'),
('Access control', 'Controle d acces', 'fr', 'yum'),
('Access control', 'Controllo accesso', 'it', 'yum'),
('Action', 'Aktion', 'de', 'yum'),
('Action', 'Acción', 'es', 'yum'),
('Action', 'Action', 'fr', 'yum'),
('Action', 'Azione', 'it', 'yum'),
('Actions', 'Aktionen', 'de', 'yum'),
('Actions', 'Acciones', 'es', 'yum'),
('Actions', 'Actions', 'fr', 'yum'),
('Actions', 'Azioni', 'it', 'yum'),
('Activated', 'erstmalig Aktiviert', 'de', 'yum'),
('Activated', 'PremiÃ¨re activation de votre compte', 'fr', 'yum'),
('Activated', 'Attivato', 'it', 'yum'),
('Active', 'Aktiv', 'de', 'yum'),
('Active', 'Activo', 'es', 'yum'),
('Active', 'Actif', 'fr', 'yum'),
('Active', 'Attiv', 'it', 'yum'),
('Active', 'Aktiv', 'pl', 'yum'),
('Active', 'ÐÐºÑ‚Ð¸Ð²Ð¸Ñ€Ð¾Ð²Ð°Ð½', 'ru', 'yum'),
('Active - First visit', 'Aktiv - erster Besuch', 'de', 'yum'),
('Active - First visit', 'Actif - premiÃ¨re visite', 'fr', 'yum'),
('Active - First visit', 'Attivo - Priva visita', 'it', 'yum'),
('Active users', 'Aktive Benutzer', 'de', 'yum'),
('Active users', 'Usuarios activos', 'es', 'yum'),
('Active users', 'Utiliateurs actifs', 'fr', 'yum'),
('Active users', 'Utenti attivi', 'it', 'yum'),
('Active users', 'Aktywni uÅ¼ytkownicy', 'pl', 'yum'),
('Activities', 'Aktivitäten', 'de', 'yum'),
('Activities', 'Actividades', 'es', 'yum'),
('Activities', 'ActivitÃ©s', 'fr', 'yum'),
('Activities', 'AttivitÃ ', 'it', 'yum'),
('Add as a friend', 'Zur Kontaktliste hinzufügen', 'de', 'yum'),
('Add as a friend', 'Agregar como amigo', 'es', 'yum'),
('Add as a friend', 'Ajouter Ã  ma liste de contact', 'fr', 'yum'),
('Add as a friend', 'Aggiungi un contatto', 'it', 'yum'),
('Admin inbox', 'Administratorposteingang', 'de', 'yum'),
('Admin inbox', 'Bandeja de entrada de Admin', 'es', 'yum'),
('Admin inbox', 'Boite e-mail de l administrateur', 'fr', 'yum'),
('Admin inbox', 'Admin - Posta in arrivo', 'it', 'yum'),
('Admin inbox', 'ZarzÄ…dzaj skrzynkÄ… odbiorczÄ…', 'pl', 'yum'),
('Admin sent messages', 'Gesendete Nachrichten des Administrators', 'de', 'yum'),
('Admin sent messages', 'Mensajes enviados de Admin', 'es', 'yum'),
('Admin sent messages', 'E-mail envoyÃ© par l administrateur', 'fr', 'yum'),
('Admin sent messages', 'Admin - Messaggi inviati', 'it', 'yum'),
('Admin sent messages', 'WiadomoÅ›ci wysÅ‚ane przez administratora', 'pl', 'yum'),
('Admin users', 'Administratoren', 'de', 'yum'),
('Admin users', 'Usuarios administradores', 'es', 'yum'),
('Admin users', 'Administrateur', 'fr', 'yum'),
('Admin users', 'Utenti admin', 'it', 'yum'),
('Admin users', 'Administratorzy', 'pl', 'yum'),
('Admin users can not be deleted!', 'Administratoren können nicht gelöscht werden', 'de', 'yum'),
('Admin users can not be deleted!', '¡No se pueden eliminar los usuarios Administradores!', 'es', 'yum'),
('Admin users can not be deleted!', 'UN compte administrateur ne peut pas Ãªtre supprimÃ©', 'fr', 'yum'),
('Admin users can not be deleted!', 'Utente admin non cancellabile!', 'it', 'yum'),
('Admin users can not be deleted!', 'Nie moÅ¼na usunÄ…Ä‡ konta administratora', 'pl', 'yum'),
('All', 'Alle', 'de', 'yum'),
('All', 'Ade tous', 'fr', 'yum'),
('All', 'Tutto', 'it', 'yum'),
('Allow profile comments', 'Profilkommentare erlauben', 'de', 'yum'),
('Allow profile comments', 'Permitir comentarios en perfiles', 'es', 'yum'),
('Allow profile comments', 'Autoriser les commentaires de profil', 'fr', 'yum'),
('Allow profile comments', 'Consenti commenti profili', 'it', 'yum'),
('Allowed are lowercase letters and digits.', 'Erlaubt sind Kleinbuchstaben und Ziffern.', 'de', 'yum'),
('Allowed are lowercase letters and digits.', 'Se permiten letras minúsculas y dígitos', 'es', 'yum'),
('Allowed are lowercase letters and digits.', 'Seules les minuscule et les chiffres sont autorisÃ©s.', 'fr', 'yum'),
('Allowed are lowercase letters and digits.', 'Sono consentiti lettere minuscole e numeri.', 'it', 'yum'),
('Allowed are lowercase letters and digits.', 'Erlaubt sind Kleinbuchstaben und Ziffern.', 'pl', 'yum'),
('Allowed lowercase letters and digits.', 'Consenti lettere minuscole e numeri.', 'it', 'yum'),
('Allowed lowercase letters and digits.', 'Ð”Ð¾Ð¿ÑƒÑÐºÐ°ÑŽÑ‚ÑÑ ÑÑ‚Ñ€Ð¾Ñ‡Ð½Ñ‹Ðµ Ð±ÑƒÐºÐ²Ñ‹ Ð¸ Ñ†Ð¸Ñ„Ñ€Ñ‹.', 'ru', 'yum'),
('Allowed roles', 'Erlaubte Rollen', 'de', 'yum'),
('Allowed roles', 'Roles permitidos', 'es', 'yum'),
('Allowed roles', 'Permission rÃ´le', 'fr', 'yum'),
('Allowed roles', 'Ruoli autorizzati', 'it', 'yum'),
('Allowed roles', 'DostÄ™pne role', 'pl', 'yum'),
('Allowed users', 'Erlaubte Benutzer', 'de', 'yum'),
('Allowed users', 'Usuarios permitidos', 'es', 'yum'),
('Allowed users', 'Permission utilisateur', 'fr', 'yum'),
('Allowed users', 'Utenti autorizzati', 'it', 'yum'),
('Allowed users', 'DostÄ™pni uÅ¼ytkownicy', 'pl', 'yum'),
('Already exists.', 'Existiert bereits.', 'de', 'yum'),
('Already exists.', 'Ya existe.', 'es', 'yum'),
('Already exists.', 'Existe dÃ©jÃ .', 'fr', 'yum'),
('Already exists.', 'GiÃ  esistente', 'it', 'yum'),
('Already exists.', 'Existiert bereits.', 'pl', 'yum'),
('Already exists.', 'Ð£Ð¶Ðµ ÑÑƒÑ‰ÐµÑÑ‚Ð²ÑƒÐµÑ‚.', 'ru', 'yum'),
('An error occured while saving your changes', 'Es ist ein Fehler aufgetreten.', 'de', 'yum'),
('An error occured while saving your changes', 'Ocurrió un error al guardar los cambios', 'es', 'yum'),
('An error occured while saving your changes', 'Une erreur est survenue.', 'fr', 'yum'),
('An error occured while saving your changes', 'Si Ã¨ verificato un errore durante il salvataggio delle modifiche.', 'it', 'yum'),
('An error occured while saving your changes', 'WystÄ…piÅ‚ bÅ‚Ä…d podczas zapisywania Twoich zmian.', 'pl', 'yum'),
('An error occured while uploading your avatar image', 'Ein Fehler ist beim hochladen ihres Profilbildes aufgetreten', 'de', 'yum'),
('An error occured while uploading your avatar image', 'Une erreur est survenue lors du chargement de votre photo de profil', 'fr', 'yum'),
('An error occured while uploading your avatar image', 'Si Ã¨ verificato un errore durante il caricamento dell''immagine', 'it', 'yum'),
('Answer', 'Antworten', 'de', 'yum'),
('Appear in search', 'In der Suche erscheinen', 'de', 'yum'),
('Appear in search', 'Je souhaite apparaitre dans les rÃ©sultats de recherche', 'fr', 'yum'),
('Appear in search', 'Mostra nelle ricerche', 'it', 'yum'),
('Are you really sure you want to delete your Account?', 'Sind Sie Sicher, dass Sie Ihren Zugang löschen wollen?', 'de', 'yum'),
('Are you really sure you want to delete your Account?', '¿Seguro que desea eliminar su cuenta?', 'es', 'yum'),
('Are you really sure you want to delete your Account?', 'Etes vous sur de vouloir supprimer votre compte?', 'fr', 'yum'),
('Are you really sure you want to delete your Account?', 'Sicuro di voler cancellare il tuo account?', 'it', 'yum'),
('Are you really sure you want to delete your Account?', 'Czy jesteÅ› pewien, Å¼e chcesz usunÄ…Ä‡ konto?', 'pl', 'yum'),
('Are you sure to delete this item?', 'Sind Sie sicher, dass Sie dieses Element wirklich löschen wollen? ', 'de', 'yum'),
('Are you sure to delete this item?', '¿Seguro desea eliminar este elemento?', 'es', 'yum'),
('Are you sure to delete this item?', 'Etes vous sur de supprimÃ© cet elÃ©ment? ', 'fr', 'yum'),
('Are you sure to delete this item?', 'Sicuro di cancellare questo elemento?', 'it', 'yum'),
('Are you sure to delete this item?', 'Ð’Ñ‹ Ð´ÐµÐ¹ÑÑ‚Ð²Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ð¾ Ñ…Ð¾Ñ‚Ð¸Ñ‚Ðµ ÑƒÐ´Ð°Ð»Ð¸Ñ‚ÑŒ Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»Ñ?', 'ru', 'yum'),
('Are you sure to remove this comment from your profile?', 'Sind Sie sicher, dass sie diesen Kommentar entfernen wollen?', 'de', 'yum'),
('Are you sure to remove this comment from your profile?', '¿Estás seguro que deseas borrar este comentario?', 'es', 'yum'),
('Are you sure to remove this comment from your profile?', 'Etes vous sur de vouloir supprimer ce commentaire?', 'fr', 'yum'),
('Are you sure to remove this comment from your profile?', 'Sicuro di voler eliminare il commento dal tuo profilo?', 'it', 'yum'),
('Are you sure you want to remove this friend?', 'Sind Sie sicher, dass Sie diesen Kontakt aus ihrer Liste entfernen wollen?', 'de', 'yum'),
('Are you sure you want to remove this friend?', 'ÃŠtes vous sur de vouloir suprimer ce membre de votre liste de contact?', 'fr', 'yum'),
('Are you sure you want to remove this friend?', 'Sicuro di voler rimuovere questo contatto?', 'it', 'yum'),
('Assign this role to new users automatically', 'Rolle automatisch an neue Benutzer zuweisen', 'de', 'yum'),
('Assign this role to new users automatically', 'RÃ´le automatique pour un nouveau membre', 'fr', 'yum'),
('Assign this role to new users automatically', 'Assegna questo ruolo automaticamente ai nuovi utenti', 'it', 'yum'),
('Avatar image', 'Profilbild', 'de', 'yum'),
('Avatar image', 'Tu Avatar', 'es', 'yum'),
('Avatar image', 'Image de profil', 'fr', 'yum'),
('Avatar image', 'Avatar', 'it', 'yum'),
('Back', 'Zurück', 'de', 'yum'),
('Back', 'Volver', 'es', 'yum'),
('Back', 'Retour', 'fr', 'yum'),
('Back', 'Indietro', 'it', 'yum'),
('Back to inbox', 'Zurück zum Posteingang', 'de', 'yum'),
('Back to inbox', 'Volver a la bandeja de entrada', 'es', 'yum'),
('Back to inbox', 'Retour Ã  la boite mail', 'fr', 'yum'),
('Back to inbox', 'Torna alla posta in arrivo', 'it', 'yum'),
('Back to my Profile', 'Zurück zu meinem Profil', 'de', 'yum'),
('Back to my Profile', 'Volver a mi Perfil', 'es', 'yum'),
('Back to my Profile', 'Retour Ã  mon profil', 'fr', 'yum'),
('Back to my Profile', 'Torna al mio profilo', 'it', 'yum'),
('Back to profile', 'Zurück zum Profil', 'de', 'yum'),
('Back to profile', 'Volver a perfil', 'es', 'yum'),
('Back to profile', 'Retour au profil', 'fr', 'yum'),
('Back to profile', 'Torna al mio profilo', 'it', 'yum'),
('Back to profile', 'ZurÃ¼ck zum Profil', 'pl', 'yum'),
('Banned', 'Verbannt', 'de', 'yum'),
('Banned', 'Excluido', 'es', 'yum'),
('Banned', 'Membre banni', 'fr', 'yum'),
('Banned', 'Bannato', 'it', 'yum'),
('Banned', 'Verbannt', 'pl', 'yum'),
('Banned', 'Ð—Ð°Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð°Ð½', 'ru', 'yum'),
('Banned users', 'Gesperrte Benuter', 'de', 'yum'),
('Banned users', 'Usuarios excluidos', 'es', 'yum'),
('Banned users', 'Utilisateur bloquÃ©', 'fr', 'yum'),
('Banned users', 'Utenti bannati', 'it', 'yum'),
('Banned users', 'Zbanowani uÅ¼ytkownicy', 'pl', 'yum'),
('Browse', 'Durchsuchen', 'de', 'yum'),
('Browse groups', 'Buscar grupos', 'es', 'yum'),
('Browse logged user activities', 'Benutzeraktivitäten', 'de', 'yum'),
('Browse logged user activities', 'Consultar bitácora de actividades del usuario', 'es', 'yum'),
('Browse logged user activities', 'ActivitÃ© des membres', 'fr', 'yum'),
('Browse logged user activities', 'Naviga attivitÃ  utenti loggati', 'it', 'yum'),
('Browse memberships', 'Mitgliedschaften kaufen', 'de', 'yum'),
('Browse memberships', 'Mitgliedschaften kaufen ??', 'fr', 'yum'),
('Browse memberships', 'Naviga iscrizioni', 'it', 'yum'),
('Browse user activities', 'Tätigkeitenhistorie', 'de', 'yum'),
('Browse user activities', 'ActivitÃ© de mon compte', 'fr', 'yum'),
('Browse user activities', 'Naviga attivitÃ  utenti', 'it', 'yum'),
('Browse user groups', 'Benutzergruppen durchsuchen', 'de', 'yum'),
('Browse user groups', 'Buscar grupos de usuarios', 'es', 'yum'),
('Browse user groups', 'Rechercher dans un grouppe d utilisateurs', 'fr', 'yum'),
('Browse user groups', 'Naviga gruppi utenti', 'it', 'yum'),
('Browse usergroups', 'Gruppen durchsuchen', 'de', 'yum'),
('Browse usergroups', 'Rechercher dans les grouppes', 'fr', 'yum'),
('Browse usergroups', 'Naviga gruppi utenti', 'it', 'yum'),
('Browse users', 'Benutzer durchsuchen', 'de', 'yum'),
('Browse users', 'Buscar usuarios', 'es', 'yum'),
('Browse users', 'Rechercher dans la liste des membres', 'fr', 'yum'),
('Browse users', 'Naviga utenti', 'it', 'yum'),
('Cancel', 'Abbrechen', 'de', 'yum'),
('Cancel', 'Cancelar', 'es', 'yum'),
('Cancel', 'Annuler', 'fr', 'yum'),
('Cancel', 'Cancella', 'it', 'yum'),
('Cancel deletion', 'Löschvorgang abbrechen', 'de', 'yum'),
('Cancel deletion', 'Cancelar eliminación', 'es', 'yum'),
('Cancel deletion', 'Stopper la suppression', 'fr', 'yum'),
('Cancel deletion', 'Annulla cancellazione', 'it', 'yum'),
('Cancel deletion', 'Anuluj usuwanie', 'pl', 'yum'),
('Cancel request', 'Anfrage zurückziehen', 'de', 'yum'),
('Cancel request', 'Annuler la demande de contact', 'fr', 'yum'),
('Cancel request', 'Cancella richiesta', 'it', 'yum'),
('Cannot set password. Try again.', 'No pudimos guardar tu contraseña. Inténtalo otra vez', 'es', 'yum'),
('Category', 'Kategorie', 'de', 'yum'),
('Change Password', 'Ð˜Ð·Ð¼ÐµÐ½Ð¸Ñ‚ÑŒ Ð¿Ð°Ñ€Ð¾Ð»ÑŒ', 'ru', 'yum'),
('Change admin Password', 'Administratorpasswort ändern', 'de', 'yum'),
('Change admin Password', 'Cambiar contraseña de Admin', 'es', 'yum'),
('Change admin Password', 'Changer le mot de passe de l administrateur', 'fr', 'yum'),
('Change admin Password', 'Modifica password admin', 'it', 'yum'),
('Change admin Password', 'ZmieÅ„ hasÅ‚o administratora', 'pl', 'yum'),
('Change password', 'Passwort ändern', 'de', 'yum'),
('Change password', 'Cambiar contraseña', 'es', 'yum'),
('Change password', 'Modification du mot de ', 'fr', 'yum'),
('Change password', 'Cambia password', 'it', 'yum'),
('Change password', 'Passwort Ã¤ndern', 'pl', 'yum'),
('Changes', 'Änderungen', 'de', 'yum'),
('Changes', 'Cambios', 'es', 'yum'),
('Changes', 'Modification', 'fr', 'yum'),
('Changes', 'Modifiche', 'it', 'yum'),
('Changes', 'Zmiany', 'pl', 'yum'),
('Changes are saved', 'Änderungen wurden gespeichert.', 'de', 'yum'),
('Changes are saved', 'Cambios guardados', 'es', 'yum'),
('Changes are saved', 'Les modifications ont bien Ã©tÃ© enregistrÃ©es.', 'fr', 'yum'),
('Changes are saved', 'Modifiche salvate.', 'it', 'yum'),
('Changes are saved', 'Zmiany zostaÅ‚y zapisane.', 'pl', 'yum'),
('Changes is saved.', 'Änderungen wurde gespeichert.', 'de', 'yum'),
('Changes is saved.', 'Cambio guardado', 'es', 'yum'),
('Changes is saved.', 'Modifications mÃ©morisÃ©es.', 'fr', 'yum'),
('Changes is saved.', 'Modifiche salvate', 'it', 'yum'),
('Changes is saved.', 'Ð˜Ð·Ð¼ÐµÐ½ÐµÐ½Ð¸Ñ ÑÐ¾Ñ…Ñ€Ð°Ð½ÐµÐ½Ñ‹.', 'ru', 'yum'),
('Choose All', 'Alle auswählen', 'de', 'yum'),
('Choose All', 'Seleccionar todos', 'es', 'yum'),
('Choose All', 'SÃ©lectioner tout', 'fr', 'yum'),
('Choose All', 'Scegli tutti', 'it', 'yum'),
('Choose All', 'Wybierz wszystkie', 'pl', 'yum'),
('City', 'Stadt', 'de', 'yum'),
('City', 'Ciudad', 'es', 'yum'),
('City', 'Ville', 'fr', 'yum'),
('City', 'CittÃ ', 'it', 'yum'),
('City', 'Miasto', 'pl', 'yum'),
('Column Field type in the database.', 'Spaltentyp in der Datenbank', 'de', 'yum'),
('Column Field type in the database.', 'Columna tipo de Campo en la base de datos', 'es', 'yum'),
('Column Field type in the database.', 'Type de la colone dans la banque de donnÃ©e', 'fr', 'yum'),
('Column Field type in the database.', 'Tipo di colonna nel database', 'it', 'yum'),
('Column Field type in the database.', 'Spaltentyp in der Datenbank', 'pl', 'yum'),
('Comment', 'Kommentar', 'de', 'yum'),
('Comment', 'Comentario', 'es', 'yum'),
('Comment', 'Commentaire', 'fr', 'yum'),
('Comment', 'Commento', 'it', 'yum'),
('Compose', 'Nachricht schreiben', 'de', 'yum'),
('Compose', 'Ecrire un message', 'fr', 'yum'),
('Compose', 'Scrivi', 'it', 'yum'),
('Compose new message', 'Nachricht schreiben', 'de', 'yum'),
('Compose new message', 'Crear mensaje nuevo', 'es', 'yum'),
('Compose new message', 'Ecrire un nouveau message', 'fr', 'yum'),
('Compose new message', 'Scrivi nuovo messaggio', 'it', 'yum'),
('Composing new message', 'Nachricht schreiben', 'de', 'yum'),
('Composing new message', 'Creando mensaje nuevo', 'es', 'yum'),
('Composing new message', 'Ecrire un nouveau message', 'fr', 'yum'),
('Composing new message', 'Scrittura nuovo messaggio', 'it', 'yum'),
('Confirm', 'Bestätigen', 'de', 'yum'),
('Confirm', 'Confirmar', 'es', 'yum'),
('Confirm', 'Confirmer', 'fr', 'yum'),
('Confirm', 'Conferma', 'it', 'yum'),
('Confirm deletion', 'Löschvorgang bestätigen', 'de', 'yum'),
('Confirm deletion', 'Confirmar eliminación', 'es', 'yum'),
('Confirm deletion', 'Confirmation de suppression', 'fr', 'yum'),
('Confirm deletion', 'Conferma cancellazione', 'it', 'yum'),
('Confirm deletion', 'PotwierdÅº usuwanie', 'pl', 'yum'),
('Confirmation pending', 'Bestätigung ausstehend', 'de', 'yum'),
('Confirmation pending', 'Esperando confirmación', 'es', 'yum'),
('Confirmation pending', 'Confirmation en attente', 'fr', 'yum'),
('Confirmation pending', 'In attesa di conferma', 'it', 'yum'),
('Content', 'Inhalt', 'de', 'yum'),
('Content', 'Texte du message', 'fr', 'yum'),
('Content', 'Contenuto', 'it', 'yum'),
('Create', 'Anlegen', 'de', 'yum'),
('Create', 'Crear', 'es', 'yum'),
('Create', 'CÃ©er', 'fr', 'yum'),
('Create', 'Aggiungi', 'it', 'yum'),
('Create', 'Dodaj', 'pl', 'yum'),
('Create', 'ÐÐ¾Ð²Ñ‹Ð¹', 'ru', 'yum'),
('Create Action', 'Crea azione', 'it', 'yum'),
('Create Profile Field', 'Profilfeld anlegen', 'de', 'yum'),
('Create Profile Field', 'Crear Campo de Perfil', 'es', 'yum'),
('Create Profile Field', 'Nouveau champ de profil', 'fr', 'yum'),
('Create Profile Field', 'Aggiungi campo Profilo', 'it', 'yum'),
('Create Profile Field', 'Dodaj pole profilu', 'pl', 'yum'),
('Create Profile Field', 'Ð”Ð¾Ð±Ð°Ð²Ð¸Ñ‚ÑŒ', 'ru', 'yum'),
('Create Role', 'Rolle anlegen', 'de', 'yum'),
('Create Role', 'Crear Rol', 'es', 'yum'),
('Create Role', 'CrÃ©er un rÃ´le', 'fr', 'yum'),
('Create Role', 'Crea ruolo', 'it', 'yum'),
('Create Role', 'Dodaj rolÄ™', 'pl', 'yum'),
('Create User', 'Benutzer anlegen', 'de', 'yum'),
('Create User', 'Crear Usuario', 'es', 'yum'),
('Create User', 'CrÃ©er un nouvel utilisateur', 'fr', 'yum'),
('Create User', 'Nuovo utente', 'it', 'yum'),
('Create User', 'ÐÐ¾Ð²Ñ‹Ð¹', 'ru', 'yum'),
('Create Usergroup', 'Neue Gruppe erstellen', 'de', 'yum'),
('Create Usergroup', 'Crea gruppo utenti', 'it', 'yum'),
('Create my profile', 'Mein Profil anlegen', 'de', 'yum'),
('Create my profile', 'Crea profilo', 'it', 'yum'),
('Create new Translation', 'Neue Übersetzung erstellen', 'de', 'yum'),
('Create new User', 'Neuen Benutzer anlegen', 'de', 'yum'),
('Create new Usergroup', 'Neue Gruppe erstellen', 'de', 'yum'),
('Create new Usergroup', 'Crear nuevo grupo de usuarios', 'es', 'yum'),
('Create new action', 'Neue Aktion', 'de', 'yum'),
('Create new action', 'Crear acción nueva', 'es', 'yum'),
('Create new action', 'Nouvelle action', 'fr', 'yum'),
('Create new action', 'Nuova azione', 'it', 'yum'),
('Create new field group', 'Neue Feldgruppe erstellen', 'de', 'yum'),
('Create new field group', 'Crear campo de grupo nuevo', 'es', 'yum'),
('Create new field group', 'CrÃ©er un nouveau champs dans le groupe', 'fr', 'yum'),
('Create new field group', 'Nuovo campo gruppo', 'it', 'yum'),
('Create new field group', 'Dodaj nowÄ… grupÄ™ pÃ³l', 'pl', 'yum'),
('Create new payment type', 'Neue Zahlungsart hinzufügen', 'de', 'yum'),
('Create new payment type', 'CrÃ©er un nouveau mode de paiement', 'fr', 'yum'),
('Create new payment type', 'Nuovo tipo pagamento', 'it', 'yum'),
('Create new role', 'Neue Rolle anlegen', 'de', 'yum'),
('Create new role', 'Crear rol nuevo', 'es', 'yum'),
('Create new role', 'CrÃ©er un nouveau rÃ´le', 'fr', 'yum'),
('Create new role', 'Nuovo ruolo', 'it', 'yum'),
('Create new role', 'Dodaj nowÄ… rolÄ™', 'pl', 'yum'),
('Create new settings profile', 'Neues Einstellungsprofil erstellen', 'de', 'yum'),
('Create new settings profile', 'Crear ajuste de perfil nuevo', 'es', 'yum'),
('Create new settings profile', 'crÃ©er une nouvelle configuration de profil.', 'fr', 'yum'),
('Create new settings profile', 'Nuova opzion profilo', 'it', 'yum'),
('Create new settings profile', 'Dodaj nowe ustawienia profilu', 'pl', 'yum'),
('Create new user', 'Crear usuario nuevo', 'es', 'yum'),
('Create new user', 'CrÃ©er un nouveau membre', 'fr', 'yum'),
('Create new user', 'Nuovo utente', 'it', 'yum'),
('Create new user', 'Dodaj nowego uÅ¼ytkownika', 'pl', 'yum'),
('Create new usergroup', 'Neue Gruppe erstellen', 'de', 'yum'),
('Create new usergroup', 'CrÃ©er un nouveau grouppe', 'fr', 'yum'),
('Create new usergroup', 'Nuovo usergroup', 'it', 'yum'),
('Create payment type', 'Zahlungsart anlegen', 'de', 'yum'),
('Create payment type', 'Crea tipo pagamento', 'it', 'yum'),
('Create profile field', 'Ein neues Profilfeld erstellen', 'de', 'yum'),
('Create profile field', 'Crear campo de perfil', 'es', 'yum'),
('Create profile field', 'CrÃ©er un nouveau champ de profil', 'fr', 'yum'),
('Create profile field', 'Crea campo profilo', 'it', 'yum'),
('Create profile field', 'Dodaj pole do profilu', 'pl', 'yum'),
('Create profile fields group', 'Crear grupo de campos de perfil', 'es', 'yum'),
('Create profile fields group', 'Nuovo gruppo di campi profilo', 'it', 'yum'),
('Create profile fields group', 'Dodaj grupÄ™ pÃ³l do profilu', 'pl', 'yum'),
('Create role', 'Neue Rolle anlegen', 'de', 'yum'),
('Create role', 'Crear rol', 'es', 'yum'),
('Create role', 'CrÃ©er un nouveau rÃ´le', 'fr', 'yum'),
('Create role', 'Crea ruolo', 'it', 'yum'),
('Create role', 'Dodaj rolÄ™', 'pl', 'yum'),
('Create user', 'Benutzer anlegen', 'de', 'yum'),
('Create user', 'Crear usuario', 'es', 'yum'),
('Create user', 'CrÃ©er un membre', 'fr', 'yum'),
('Create user', 'Crea utente', 'it', 'yum'),
('Create user', 'Dodaj uÅ¼ytkownika', 'pl', 'yum'),
('Date', 'Datum', 'de', 'yum'),
('Date', 'Fecha', 'es', 'yum'),
('Date', 'Date', 'fr', 'yum'),
('Date', 'Data', 'it', 'yum'),
('Date', 'Data', 'pl', 'yum'),
('Default', 'Default', 'de', 'yum'),
('Default', 'Predeterminado', 'es', 'yum'),
('Default', 'Default', 'fr', 'yum'),
('Default', 'Predefinito', 'it', 'yum'),
('Default', 'ÐŸÐ¾ ÑƒÐ¼Ð¾Ð»Ñ‡Ð°Ð½Ð¸ÑŽ', 'ru', 'yum'),
('Delete Account', 'Zugang löschen', 'de', 'yum'),
('Delete Account', 'Eliminar Cuenta', 'es', 'yum'),
('Delete Account', 'Supprimer le compte', 'fr', 'yum'),
('Delete Account', 'Cancella account', 'it', 'yum'),
('Delete Profile Field', 'Cancella campo Profilo', 'it', 'yum'),
('Delete Profile Field', 'Ð£Ð´Ð°Ð»Ð¸Ñ‚ÑŒ', 'ru', 'yum'),
('Delete User', 'Benutzer löschen', 'de', 'yum'),
('Delete User', 'Eliminar Usuario', 'es', 'yum'),
('Delete User', 'Supprimer le membre', 'fr', 'yum'),
('Delete User', 'Cancella utente', 'it', 'yum'),
('Delete User', 'Ð£Ð´Ð°Ð»Ð¸Ñ‚ÑŒ', 'ru', 'yum'),
('Delete account', 'Zugang löschen', 'de', 'yum'),
('Delete account', 'Eliminar cuenta', 'es', 'yum'),
('Delete account', 'Supprimer ce compte', 'fr', 'yum'),
('Delete account', 'Cancella account', 'it', 'yum'),
('Delete account', 'UsuÅ„ konto', 'pl', 'yum'),
('Delete file', 'Cancella file', 'it', 'yum'),
('Delete message', 'Nachricht löschen', 'de', 'yum'),
('Delete message', 'Eliminar mensaje', 'es', 'yum'),
('Delete message', 'Supprimer le message', 'fr', 'yum'),
('Delete message', 'Cancella messaggio', 'it', 'yum'),
('Deleted', 'Gelöscht', 'de', 'yum'),
('Deleted', 'SupprimÃ©', 'fr', 'yum'),
('Deleted', 'Cancella', 'it', 'yum'),
('Deny', 'Ablehnen', 'de', 'yum'),
('Deny', 'Negar', 'es', 'yum'),
('Deny', 'Refuser', 'fr', 'yum'),
('Deny', 'Vietao', 'it', 'yum'),
('Description', 'Beschreibung', 'de', 'yum'),
('Description', 'Descripción', 'es', 'yum'),
('Description', 'Description', 'fr', 'yum'),
('Description', 'Descrizione', 'it', 'yum'),
('Description', 'Opis', 'pl', 'yum'),
('Different users logged in today', 'Anzahl der heute angemeldeten Benutzer', 'de', 'yum'),
('Different users logged in today', 'Diferentes usuarios iniciaron sesión hoy', 'es', 'yum'),
('Different users logged in today', 'Nombre d utilisateurs inscrits/connectÃ©s aujourd hui.', 'fr', 'yum'),
('Different users logged in today', 'Numero di utenti connessi oggi', 'it', 'yum'),
('Different users logged in today', 'Liczba dzisiejszych unikalnych logowaÅ„', 'pl', 'yum'),
('Different viewn Profiles', 'Insgesamt betrachtete Profile', 'de', 'yum'),
('Different viewn Profiles', 'Perfiles diferentes vistos', 'es', 'yum'),
('Different viewn Profiles', 'Total des profils consultÃ©s', 'fr', 'yum'),
('Different viewn Profiles', 'Visualizzazioni profilo', 'it', 'yum'),
('Display order of fields.', 'Reihenfolgenposition, in der das Feld angezeigt wird', 'de', 'yum'),
('Display order of fields.', 'Mostrar orden de los campos', 'es', 'yum'),
('Display order of fields.', 'Ordre de position dans laquelle le champ apparaitra', 'fr', 'yum'),
('Display order of fields.', 'Mostra ordine dei campi.', 'it', 'yum'),
('Display order of fields.', 'KolejnoÅ›Ä‡ wyÅ›wietlania pÃ³l.', 'pl', 'yum'),
('Display order of fields.', 'ÐŸÐ¾Ñ€ÑÐ´Ð¾Ðº Ð¾Ñ‚Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸Ñ Ð¿Ð¾Ð»ÐµÐ¹.', 'ru', 'yum'),
('Display order of group.', 'Anzeigereihenfolge der Gruppe.', 'de', 'yum'),
('Display order of group.', 'Mostrar orden del grupo', 'es', 'yum'),
('Display order of group.', 'Annonces ordonnÃ©es du grouppe.', 'fr', 'yum'),
('Display order of group.', 'Ordine di visualizzazione del gruppo.', 'it', 'yum'),
('Display order of group.', 'WyÅ›wietl kolejnoÅ›Ä‡ grup.', 'pl', 'yum'),
('Do not appear in search', 'Nicht in der Suche erscheinen', 'de', 'yum'),
('Do not appear in search', 'Ne pas paraitre dans les rÃ©sultat de recherche', 'fr', 'yum'),
('Do not appear in search', 'Non mostrare nelle ricerche', 'it', 'yum'),
('Do not show my online status', 'Status verstecken', 'de', 'yum'),
('Do not show my online status', 'Ne pas rendre mon profil visible lorsque je suis en ligne', 'fr', 'yum'),
('Do not show my online status', 'Non mostrare il mio stato online', 'it', 'yum'),
('Do not show the owner of a profile when i visit him', 'Niemandem zeigen, wen ich besucht habe', 'de', 'yum'),
('Do not show the owner of a profile when i visit him', 'Ne pas montrer les profils que j ai visitÃ©', 'fr', 'yum'),
('Do not show the owner of a profile when i visit him', 'Non mostrare al proprietario quando visito il suo profilo', 'it', 'yum'),
('Duration in days', 'Gültigkeitsdauer in Tagen', 'de', 'yum'),
('Duration in days', 'ValiditÃ© en jours', 'fr', 'yum'),
('Duration in days', 'Durata in giorni', 'it', 'yum'),
('E-Mail address', 'E-Mail Adresse', 'de', 'yum'),
('E-Mail address', 'Correo electrónico', 'es', 'yum'),
('E-Mail address', 'Adresse e-mail', 'fr', 'yum'),
('E-Mail address', 'Indirizzo email', 'it', 'yum'),
('E-Mail already in use. If you have not registered before, please contact our System administrator.', 'Este correo ya está siendo usado por alguien. Si no te habías registrado antes entonces contáctanos', 'es', 'yum'),
('E-mail', 'E-mail', 'de', 'yum'),
('E-mail', 'Correo electrónico', 'es', 'yum'),
('E-mail', 'E-mail', 'fr', 'yum'),
('E-mail', 'E-mail', 'it', 'yum'),
('E-mail', 'Mejl', 'pl', 'yum'),
('E-mail', 'Ð­Ð»ÐµÐºÑ‚Ñ€Ð¾Ð½Ð½Ð°Ñ Ð¿Ð¾Ñ‡Ñ‚Ð°', 'ru', 'yum'),
('Edit', 'Bearbeiten', 'de', 'yum'),
('Edit', 'Editar', 'es', 'yum'),
('Edit', 'Editer', 'fr', 'yum'),
('Edit', 'Modifica', 'it', 'yum'),
('Edit', 'Bearbeiten', 'pl', 'yum'),
('Edit', 'Ð ÐµÐ´Ð°ÐºÑ‚Ð¸Ñ€Ð¾Ð²Ð°Ñ‚ÑŒ', 'ru', 'yum'),
('Edit personal data', 'Persönliche Daten bearbeiten', 'de', 'yum'),
('Edit personal data', 'Editar datos personales', 'es', 'yum'),
('Edit personal data', 'Modifier mes donnÃ©es personnelles', 'fr', 'yum'),
('Edit personal data', 'Modifica dati personali', 'it', 'yum'),
('Edit profile', 'Profil bearbeiten', 'de', 'yum'),
('Edit profile', 'Editar perfil', 'es', 'yum'),
('Edit profile', 'Editer le profil', 'fr', 'yum'),
('Edit profile', 'Modifica profilo', 'it', 'yum'),
('Edit profile', 'Meine Profildaten bearbeiten', 'pl', 'yum'),
('Edit profile', 'Ð ÐµÐ´Ð°ÐºÑ‚Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð¸Ðµ Ð¿Ñ€Ð¾Ñ„Ð¸Ð»Ñ', 'ru', 'yum'),
('Edit profile field', 'Profilfeld bearbeiten', 'de', 'yum'),
('Edit profile field', 'Editar campo del perfil', 'es', 'yum'),
('Edit profile field', 'Editer les champ du profil', 'fr', 'yum'),
('Edit profile field', 'Modifica campi profilo', 'it', 'yum'),
('Edit profile field', 'Profilfeld bearbeiten', 'pl', 'yum'),
('Edit text', 'Modifica testo', 'it', 'yum'),
('Edit this role', 'Diese Rolle bearbeiten', 'de', 'yum'),
('Edit this role', 'Editar este rol', 'es', 'yum'),
('Edit this role', 'Modifier ce rÃ´le', 'fr', 'yum'),
('Edit this role', 'Modifica questo ruolo', 'it', 'yum'),
('Edit this role', 'ZmieÅ„ tÄ™ rolÄ™', 'pl', 'yum'),
('Email is incorrect.', 'E-Mail ist nicht korrekt.', 'de', 'yum'),
('Email is incorrect.', 'Email incorrecto', 'es', 'yum'),
('Email is incorrect.', 'L adresse e-mail est incorrecte.', 'fr', 'yum'),
('Email is incorrect.', 'Email non corretta.', 'it', 'yum'),
('Email is incorrect.', 'Mejl jest niepoprawny.', 'pl', 'yum'),
('Email is incorrect.', 'ÐŸÐ¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»ÑŒ Ñ Ñ‚Ð°ÐºÐ¸Ð¼ ÑÐ»ÐµÐºÑ‚Ñ€Ð¾Ð½Ñ‹Ð¼ Ð°Ð´Ñ€ÐµÑÐ¾Ð¼ Ð½Ðµ Ð·Ð°Ñ€ÐµÐ³Ð¸ÑÑ‚Ñ€Ð¸Ñ€Ð¾Ð²Ð°Ð½.', 'ru', 'yum'),
('Email is not set when trying to send Registration Email', 'Debes colocar el correo electrónico para enviar el correo de registro', 'es', 'yum'),
('Enable Captcha', 'Captcha Überprüfung aktivieren', 'de', 'yum'),
('Enable Captcha', 'Habilitar Captcha', 'es', 'yum'),
('Enable Captcha', 'Activer le controle par Captcha', 'fr', 'yum'),
('Enable Captcha', 'Attiva Captcha', 'it', 'yum'),
('Enable Captcha', 'WÅ‚Ä…cz Captcha', 'pl', 'yum'),
('Enable Email Activation', 'Aktivierung per E-Mail einschalten', 'de', 'yum'),
('Enable Email Activation', 'Habilitar Activación por Email', 'es', 'yum'),
('Enable Email Activation', 'Activer l activation par e-mail', 'fr', 'yum'),
('Enable Email Activation', 'Attiva attivazione via Email', 'it', 'yum'),
('Enable Email Activation', 'WÅ‚Ä…cz aktywacjÄ™ mejlem', 'pl', 'yum'),
('Enable Profile History', 'Profilhistorie einschalten', 'de', 'yum'),
('Enable Profile History', 'Habilitar Historial de Perfil', 'es', 'yum'),
('Enable Profile History', 'Activer le protocole des profils', 'fr', 'yum'),
('Enable Profile History', 'Attiva storico Profilo', 'it', 'yum'),
('Enable Profile History', 'WÅ‚Ä…cz historiÄ™ profilÃ³w', 'pl', 'yum'),
('Enable Recovery', 'Wiederherstellung einschalten', 'de', 'yum'),
('Enable Recovery', 'Habilitar Recuperación', 'es', 'yum'),
('Enable Recovery', 'Activer la restauration', 'fr', 'yum'),
('Enable Recovery', 'Attiva rispristino', 'it', 'yum'),
('Enable Recovery', 'WÅ‚Ä…cz odzyskiwanie haseÅ‚', 'pl', 'yum'),
('Enable Registration', 'Registrierung einschalten', 'de', 'yum'),
('Enable Registration', 'Habilitar Registro', 'es', 'yum'),
('Enable Registration', 'Activer l enregistrement', 'fr', 'yum'),
('Enable Registration', 'Attiva registrazione', 'it', 'yum'),
('Enable Registration', 'WÅ‚Ä…cz rejestracjÄ™', 'pl', 'yum'),
('End date', 'Enddatum', 'de', 'yum'),
('End date', 'Data scadenza', 'it', 'yum'),
('Ends at', 'Endet am', 'de', 'yum'),
('Ends at', 'Scade il', 'it', 'yum'),
('Error Message', 'Fehlermeldung', 'de', 'yum'),
('Error Message', 'Mensaje de Error', 'es', 'yum'),
('Error Message', 'Message d erreur', 'fr', 'yum'),
('Error Message', 'Messaggio d''errore', 'it', 'yum'),
('Error Message', 'Ð¡Ð¾Ð¾Ð±Ñ‰ÐµÐ½Ð¸Ðµ Ð¾Ð± Ð¾ÑˆÐ¸Ð±ÐºÐµ', 'ru', 'yum'),
('Error message when Validation fails.', 'Fehlermeldung falls die Validierung fehlschlägt', 'de', 'yum'),
('Error message when Validation fails.', 'Mensaje de error cuando la Validación falla', 'es', 'yum'),
('Error message when Validation fails.', 'Message d erreur pour le cas ou la validation Ã©choue', 'fr', 'yum'),
('Error message when Validation fails.', 'Messaggio d''errore se fallisce la validazione', 'it', 'yum'),
('Error message when you validate the form.', 'Messaggio d''errore durante la validazione del form.', 'it', 'yum'),
('Error message when you validate the form.', 'Ð¡Ð¾Ð¾Ð±Ñ‰ÐµÐ½Ð¸Ðµ Ð¾Ð± Ð¾ÑˆÐ¸Ð±ÐºÐµ Ð¿Ñ€Ð¸ Ð¿Ñ€Ð¾Ð²ÐµÑ€ÐºÐµ Ñ„Ð¾Ñ€Ð¼Ñ‹.', 'ru', 'yum'),
('Error while processing new avatar image : {error_message}; File was uploaded without resizing', 'Das Bild konnte nicht richtig skaliert werden: {error_message}. Es wurde trotzdem erfolgreich hochgeladen und in ihrem Profil aktiviert.', 'de', 'yum'),
('Error while processing new avatar image : {error_message}; File was uploaded without resizing', 'L image n a pas pu Ãªtre retaillÃ©e automatiquement lors du chargement. : {error_message}. elle a Ã©tÃ© cependant chargÃ©e avec succÃ¨s et activÃ©e dans votre profil', 'fr', 'yum'),
('Error while processing new avatar image : {error_message}; File was uploaded without resizing', 'Errore processando il nuovo avatar: {error_message}. File caricato senza ridimensionamento.', 'it', 'yum'),
('Field', 'Feld', 'de', 'yum'),
('Field', 'Campo', 'es', 'yum'),
('Field', 'Champ', 'fr', 'yum'),
('Field', 'Campo', 'it', 'yum'),
('Field', 'Pole', 'pl', 'yum'),
('Field Size', 'Feldgröße', 'de', 'yum'),
('Field Size', 'Tamaño del Campo', 'es', 'yum'),
('Field Size', 'Longueur du champ', 'fr', 'yum'),
('Field Size', 'Dimensione campo', 'it', 'yum'),
('Field Size', 'Ð Ð°Ð·Ð¼ÐµÑ€ Ð¿Ð¾Ð»Ñ', 'ru', 'yum'),
('Field Size min', 'min Feldgröße', 'de', 'yum'),
('Field Size min', 'Tamaño mínimo del campo', 'es', 'yum'),
('Field Size min', 'longueur du champ minimum', 'fr', 'yum'),
('Field Size min', 'Dimesione minima campo', 'it', 'yum'),
('Field Size min', 'ÐœÐ¸Ð½Ð¸Ð¼Ð°Ð»ÑŒÐ½Ð¾Ðµ Ð·Ð½Ð°Ñ‡ÐµÐ½Ð¸Ðµ', 'ru', 'yum'),
('Field Type', 'Feldtyp', 'de', 'yum'),
('Field Type', 'Tipo de Campo', 'es', 'yum'),
('Field Type', 'Type du champ', 'fr', 'yum'),
('Field Type', 'Tipo campo', 'it', 'yum'),
('Field Type', 'Ð¢Ð¸Ð¿ Ð¿Ð¾Ð»Ñ', 'ru', 'yum'),
('Field group', 'Feldgruppe', 'de', 'yum'),
('Field group', 'Grupo de Campos', 'es', 'yum'),
('Field group', 'Champ des groupes', 'fr', 'yum'),
('Field group', 'Campi gruppo', 'it', 'yum'),
('Field group', 'Grupa pÃ³l', 'pl', 'yum'),
('Field name on the language of "sourceLanguage".', 'Feldname in der Ursprungssprache', 'de', 'yum'),
('Field name on the language of "sourceLanguage".', 'Nombre del campo en el idioma "sourceLanguage".', 'es', 'yum'),
('Field name on the language of "sourceLanguage".', 'Non du champ dans la langue standard', 'fr', 'yum'),
('Field name on the language of "sourceLanguage".', 'Nome campo per il linguaggio di "sourceLanguage".', 'it', 'yum'),
('Field name on the language of "sourceLanguage".', 'Feldname in der Ursprungssprache', 'pl', 'yum'),
('Field name on the language of "sourceLanguage".', 'ÐÐ°Ð·Ð²Ð°Ð½Ð¸Ðµ Ð¿Ð¾Ð»Ñ Ð½Ð° ÑÐ·Ñ‹ÐºÐµ "sourceLanguage".', 'ru', 'yum'),
('Field size', 'Feldgröße', 'de', 'yum'),
('Field size', 'Tamaño del campo', 'es', 'yum'),
('Field size', 'Longueur du champ', 'fr', 'yum'),
('Field size', 'Dimensione campo', 'it', 'yum'),
('Field size', 'FeldgrÃ¶ÃŸe', 'pl', 'yum'),
('Field size column in the database.', 'Dimensione campo nel database', 'it', 'yum'),
('Field size column in the database.', 'Ð Ð°Ð·Ð¼ÐµÑ€ Ð¿Ð¾Ð»Ñ ÐºÐ¾Ð»Ð¾Ð½ÐºÐ¸ Ð² Ð±Ð°Ð·Ðµ Ð´Ð°Ð½Ð½Ñ‹Ñ…', 'ru', 'yum'),
('Field size in the database.', 'Feldgröße in der Datenbank', 'de', 'yum'),
('Field size in the database.', 'Tamaño del campo en la base de datos', 'es', 'yum'),
('Field size in the database.', 'Longueur du champ dans la banque de donnÃ©e', 'fr', 'yum'),
('Field size in the database.', 'Dimensione campo nel database', 'it', 'yum'),
('Field size in the database.', 'FeldgrÃ¶ÃŸe in der Datenbank', 'pl', 'yum'),
('Field type', 'Feldtyp', 'de', 'yum'),
('Field type', 'Tipo de campo', 'es', 'yum'),
('Field type', 'Type de champ', 'fr', 'yum'),
('Field type', 'Tipo campo', 'it', 'yum'),
('Field type', 'Feldtyp', 'pl', 'yum'),
('Field type column in the database.', 'Tipo campo nel database.', 'it', 'yum'),
('Field type column in the database.', 'Ð¢Ð¸Ð¿ Ð¿Ð¾Ð»Ñ ÐºÐ¾Ð»Ð¾Ð½ÐºÐ¸ Ð² Ð±Ð°Ð·Ðµ Ð´Ð°Ð½Ð½Ñ‹Ñ….', 'ru', 'yum'),
('Fields with <span class="required">*</span> are required.', 'Felder mit <span class="required">*</span> sind Pflichtfelder.', 'de', 'yum'),
('First Name', 'Nome', 'it', 'yum'),
('First Name', 'Ð˜Ð¼Ñ', 'ru', 'yum'),
('First name', 'Vorname', 'de', 'yum'),
('First name', 'Nombre', 'es', 'yum'),
('First name', 'PrÃ©nom', 'fr', 'yum'),
('First name', 'Cognome', 'it', 'yum'),
('First name', 'Vorname', 'pl', 'yum'),
('For all', 'Für alle', 'de', 'yum'),
('For all', 'Para todos', 'es', 'yum'),
('For all', 'Pour tous', 'fr', 'yum'),
('For all', 'Per tutti', 'it', 'yum'),
('For all', 'Ð”Ð»Ñ Ð²ÑÐµÑ…', 'ru', 'yum'),
('Form validation error', 'Error en la validación del formulario', 'es', 'yum'),
('Friends', 'Kontakte', 'de', 'yum'),
('Friends', 'Amigos', 'es', 'yum'),
('Friends', 'Mes contacts', 'fr', 'yum'),
('Friends', 'Contatti', 'it', 'yum'),
('Friends of {username}', 'Kontakte von {username}', 'de', 'yum'),
('Friends of {username}', 'Contact de {username}', 'fr', 'yum'),
('Friends of {username}', 'Contatti di {username}', 'it', 'yum'),
('Friendship', 'Kontakt', 'de', 'yum'),
('Friendship', 'Amistades', 'es', 'yum'),
('Friendship', 'Contact', 'fr', 'yum'),
('Friendship', 'Contatto', 'it', 'yum'),
('Friendship confirmed', 'Freundschaft bestätigt', 'de', 'yum'),
('Friendship confirmed', 'Amistad confirmada', 'es', 'yum'),
('Friendship confirmed', 'Demande de contact confirmÃ©e', 'fr', 'yum'),
('Friendship confirmed', 'Contatto confermato', 'it', 'yum'),
('Friendship rejected', 'Kontaktanfrage abgelehnt', 'de', 'yum'),
('Friendship rejected', 'Demande de contact refusÃ©e', 'fr', 'yum'),
('Friendship rejected', 'Amizicia rigettata', 'it', 'yum'),
('Friendship request already sent', 'Kontaktbestätigung ausstehend', 'de', 'yum'),
('Friendship request already sent', 'Ya se envió la solicitud de amistad', 'es', 'yum'),
('Friendship request already sent', 'En attente de confirmation', 'fr', 'yum'),
('Friendship request already sent', 'Richiesta di contatto giÃ  inviata', 'it', 'yum'),
('Friendship request for {username} has been sent', 'Kontaktanfrage an {username} gesendet', 'de', 'yum'),
('Friendship request for {username} has been sent', 'La solicitud de amistad a {username} ha sido enviada', 'es', 'yum'),
('Friendship request for {username} has been sent', 'Demande de contact envoyÃ©e Ã  {username}', 'fr', 'yum'),
('Friendship request for {username} has been sent', 'Inviata richiesta di contatto a {username}', 'it', 'yum'),
('Friendship request has been rejected', 'Kontaktanfrage zurückgewiesen', 'de', 'yum'),
('Friendship request has been rejected', 'Solicitud de amistad rechazada', 'es', 'yum'),
('Friendship request has been rejected', 'Votre demande de contact a Ã©tÃ© rejetÃ©e', 'fr', 'yum'),
('Friendship request has been rejected', 'Richiesta di contatto respinta', 'it', 'yum'),
('From', 'Von', 'de', 'yum'),
('From', 'Desde', 'es', 'yum'),
('From', 'De', 'fr', 'yum'),
('From', 'Da', 'it', 'yum'),
('From', 'Od', 'pl', 'yum'),
('General', 'Allgemein', 'de', 'yum'),
('General', 'Generale', 'it', 'yum'),
('Generate Demo Data', 'Zufallsbenutzer erzeugen', 'de', 'yum'),
('Generate Demo Data', 'Genera datos de prueba', 'es', 'yum'),
('Generate Demo Data', 'GÃ©nÃ©rer un compte membre-dÃ©mo', 'fr', 'yum'),
('Generate Demo Data', 'Genera dati demo', 'it', 'yum'),
('Go to profile of {username}', 'Zum Profil von {username}', 'de', 'yum'),
('Go to profile of {username}', 'Ir al perfil de {username}', 'es', 'yum'),
('Go to profile of {username}', 'Voir le profil de {username}', 'fr', 'yum'),
('Go to profile of {username}', 'Vai al profilo di {username}', 'it', 'yum'),
('Grant permission', 'Berechtigung zuweisen', 'de', 'yum'),
('Grant permission', 'Otorgar permiso', 'es', 'yum'),
('Grant permission', 'Attribuer une permission ', 'fr', 'yum'),
('Grant permission', 'Assegna permesso', 'it', 'yum'),
('Group Name', 'Gruppenname', 'de', 'yum'),
('Group Name', 'Nombre de grupo', 'es', 'yum'),
('Group Name', 'Nom du groupe', 'fr', 'yum'),
('Group Name', 'Nome gruppo', 'it', 'yum'),
('Group Name', 'Nazwa grupy', 'pl', 'yum'),
('Group name on the language of "sourceLanguage".', 'Gruppenname in der Basissprache.', 'de', 'yum'),
('Group name on the language of "sourceLanguage".', 'Nombre del grupo en el idioma "sourceLanguage".', 'es', 'yum'),
('Group name on the language of "sourceLanguage".', 'Nom du groupe dans la langue principale.', 'fr', 'yum'),
('Group name on the language of "sourceLanguage".', 'Il nome del gruppo nella lingua di base.', 'it', 'yum'),
('Group name on the language of "sourceLanguage".', 'Nazwa grupy w jÄ™zyku uÅ¼ytkownika.', 'pl', 'yum'),
('Group owner', 'Gruppeneigentümer', 'de', 'yum'),
('Group owner', 'Dueño del grupo', 'es', 'yum'),
('Group owner', 'PropriÃ©taire du grouppe', 'fr', 'yum'),
('Group owner', 'Proprietario gruppo', 'it', 'yum'),
('Group title', 'Titel der Gruppe', 'de', 'yum'),
('Group title', 'Título del grupo', 'es', 'yum'),
('Group title', 'Titre du grouppe', 'fr', 'yum'),
('Group title', 'Titolo gruppo', 'it', 'yum'),
('Having', 'Anzeigen', 'de', 'yum'),
('Having', 'Annonce', 'fr', 'yum'),
('Having', 'Visualizza', 'it', 'yum'),
('Hidden', 'Verstecken', 'de', 'yum'),
('Hidden', 'Escondido', 'es', 'yum'),
('Hidden', 'CachÃ©', 'fr', 'yum'),
('Hidden', 'Nascosto', 'it', 'yum'),
('Hidden', 'Ð¡ÐºÑ€Ñ‹Ñ‚', 'ru', 'yum'),
('How expensive is a membership?', 'Preis der Mitgliedschaft', 'de', 'yum'),
('How expensive is a membership?', 'Prix de l abbonement', 'fr', 'yum'),
('How expensive is a membership?', 'Quanto costa l''iscrizione?', 'it', 'yum'),
('How many days will the membership be valid after payment?', 'Wie viele Tage ist die Mitgliedschaft nach Zahlungseingang gültig?', 'de', 'yum'),
('How many days will the membership be valid after payment?', 'Nombre de jours pour la validitÃ© d un abbonement aprÃ¨s paiement?', 'fr', 'yum'),
('How many days will the membership be valid after payment?', 'Quanti giorni Ã¨ valida l''iscrizione dopo il pagamento?', 'it', 'yum'),
('Ignore', 'Ignorieren', 'de', 'yum'),
('Ignore', 'Ignorar', 'es', 'yum'),
('Ignore', 'Ignorer', 'fr', 'yum'),
('Ignore', 'Ignora', 'it', 'yum'),
('Ignored users', 'Ignorierliste', 'de', 'yum'),
('Ignored users', 'Usuarios ignorados', 'es', 'yum'),
('Ignored users', 'Liste noire', 'fr', 'yum'),
('Ignored users', 'Utenti ignorati', 'it', 'yum'),
('Inactive users', 'Inaktive Benutzer', 'de', 'yum'),
('Inactive users', 'Usuarios inactivos', 'es', 'yum'),
('Inactive users', 'Utilisateur inactif', 'fr', 'yum'),
('Inactive users', 'Utenti inattivi', 'it', 'yum'),
('Inactive users', 'Nieaktywni uÅ¼ytkownicy', 'pl', 'yum'),
('Incorrect activation URL', 'El enlace de activación que usaste es incorrecto', 'es', 'yum'),
('Incorrect activation URL.', 'Falsche Aktivierungs URL.', 'de', 'yum'),
('Incorrect activation URL.', 'URL de activación incorrecta.', 'es', 'yum'),
('Incorrect activation URL.', 'Le lien d activation de votre compte est incorrect ou pÃ©rimÃ©. Consultez notre FAQ: mot clÃ©= inscription ou contactez gratuitement notre Help-Center en ligne sur la page d aide.', 'fr', 'yum'),
('Incorrect activation URL.', 'URL di attivazione incorretto', 'it', 'yum'),
('Incorrect activation URL.', 'Falsche Aktivierungs URL.', 'pl', 'yum'),
('Incorrect activation URL.', 'ÐÐµÐ¿Ñ€Ð°Ð²Ð¸Ð»ÑŒÐ½Ð°Ñ ÑÑÑ‹Ð»ÐºÐ° Ð°ÐºÑ‚Ð¸Ð²Ð°Ñ†Ð¸Ð¸ ÑƒÑ‡ÐµÑ‚Ð½Ð¾Ð¹ Ð·Ð°Ð¿Ð¸ÑÐ¸.', 'ru', 'yum'),
('Incorrect password (minimal length 4 symbols).', 'Falsches Passwort (minimale Länge 4 Zeichen).', 'de', 'yum'),
('Incorrect password (minimal length 4 symbols).', 'Contraseña incorrecta (debe tener mínimo 4 caracteres).', 'es', 'yum'),
('Incorrect password (minimal length 4 symbols).', 'Mot de passe incorrect (longueur minimal de 4 charactÃ¨res).', 'fr', 'yum'),
('Incorrect password (minimal length 4 symbols).', 'Password sbagliata (lunga almeno 4 caratteri).', 'it', 'yum'),
('Incorrect password (minimal length 4 symbols).', 'Falsches Passwort (minimale LÃ¤nge 4 Zeichen).', 'pl', 'yum'),
('Incorrect password (minimal length 4 symbols).', 'ÐœÐ¸Ð½Ð¸Ð¼Ð°Ð»ÑŒÐ½Ð°Ñ Ð´Ð»Ð¸Ð½Ð° Ð¿Ð°Ñ€Ð¾Ð»Ñ 4 ÑÐ¸Ð¼Ð²Ð¾Ð»Ð°.', 'ru', 'yum'),
('Incorrect recovery link.', 'Recovery link ist falsch.', 'de', 'yum'),
('Incorrect recovery link.', 'Enlace de recuperación que usaste es incorrecto', 'es', 'yum'),
('Incorrect recovery link.', 'Le lien de restauration est incorrect ou pÃ©rimÃ©.', 'fr', 'yum'),
('Incorrect recovery link.', 'Link ripristino incorretto.', 'it', 'yum'),
('Incorrect recovery link.', 'Recovery link ist falsch.', 'pl', 'yum'),
('Incorrect recovery link.', 'ÐÐµÐ¿Ñ€Ð°Ð²Ð¸Ð»ÑŒÐ½Ð°Ñ ÑÑÑ‹Ð»ÐºÐ° Ð²Ð¾ÑÑ‚Ð°Ð½Ð¾Ð²Ð»ÐµÐ½Ð¸Ñ Ð¿Ð°Ñ€Ð¾Ð»Ñ.', 'ru', 'yum'),
('Incorrect symbol''s. (A-z0-9)', 'Im Benutzernamen sind nur Buchstaben und Zahlen erlaubt.', 'de', 'yum'),
('Incorrect symbol''s. (A-z0-9)', 'Caracteres incorrectos. (A-z0-9)', 'es', 'yum'),
('Incorrect symbol''s. (A-z0-9)', 'Pour le choix de votre nom d utilisateur seules les lettres de l alphabet et les chiffres sont acceptÃ©s .', 'fr', 'yum'),
('Incorrect symbol''s. (A-z0-9)', 'Sono consentiti solo lettere e numeri', 'it', 'yum'),
('Incorrect symbol''s. (A-z0-9)', 'Im Benutzernamen sind nur Buchstaben und Zahlen erlaubt.', 'pl', 'yum'),
('Incorrect symbol''s. (A-z0-9)', 'Ð’ Ð¸Ð¼ÐµÐ½Ð¸ Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»Ñ Ð´Ð¾Ð¿ÑƒÑÐºÐ°ÑŽÑ‚ÑÑ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð»Ð°Ñ‚Ð¸Ð½ÑÐºÐ¸Ðµ Ð±ÑƒÐºÐ²Ñ‹ Ð¸ Ñ†Ð¸Ñ„Ñ€Ñ‹.', 'ru', 'yum'),
('Incorrect username (length between 3 and 20 characters).', 'Falscher Benutzername (Länge zwischen 3 und 20 Zeichen).', 'de', 'yum'),
('Incorrect username (length between 3 and 20 characters).', 'Nombre de usuario incorrecto (debe tener longitud entre 3 y 20 caracteres)', 'es', 'yum'),
('Incorrect username (length between 3 and 20 characters).', 'Nom d utilisateur incorrect (Longueur comprise entre 3 et 20 charactÃ¨res).', 'fr', 'yum'),
('Incorrect username (length between 3 and 20 characters).', 'Username errato (lunghezza tra i 3 e i 20 caratteri).', 'it', 'yum'),
('Incorrect username (length between 3 and 20 characters).', 'Falscher Benutzername (LÃ¤nge zwischen 3 und 20 Zeichen).', 'pl', 'yum'),
('Incorrect username (length between 3 and 20 characters).', 'Ð”Ð»Ð¸Ð½Ð° Ð¸Ð¼ÐµÐ½Ð¸ Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»Ñ Ð¾Ñ‚ 3 Ð´Ð¾ 20 ÑÐ¸Ð¼Ð²Ð¾Ð»Ð¾Ð².', 'ru', 'yum'),
('Instructions have been sent to you. Please check your email.', 'Weitere Anweisungen wurden an ihr E-Mail Postfach geschickt. Bitte prüfen Sie ihre E-Mails', 'de', 'yum'),
('Instructions have been sent to you. Please check your email.', 'Se enviarion instrucciones a tu correo. Por favor, ve tu cuenta de correo.', 'es', 'yum'),
('Instructions have been sent to you. Please check your email.', 'Merci pour votre inscription.Controlez votre boite e-mail, le code d activation de votre compte vous a Ã©tÃ© envoyÃ© par e-mail. *IMPORTANT:pour le cas ou notre e-mail ne vous serais pas parvenu, il est possible que notre e-mail ai Ã©tÃ© filtrÃ© par votre', 'fr', 'yum'),
('Instructions have been sent to you. Please check your email.', 'Istruzioni inviate per email. Controlla la tua casella di posta elettronica.', 'it', 'yum'),
('Invalid recovery key', 'Fehlerhafter Wiederherstellungsschlüssel', 'de', 'yum'),
('Invitation', 'Einladung', 'de', 'yum'),
('Invitation', 'Invitaciones', 'es', 'yum'),
('Invitation', 'Invitation', 'fr', 'yum'),
('Invitation', 'Invito', 'it', 'yum'),
('Is membership possible', 'Mitgliedschaft möglich?', 'de', 'yum'),
('Is membership possible', 'Inscription possible?', 'fr', 'yum'),
('Is membership possible', 'Iscrizione possibile?', 'it', 'yum'),
('Join group', 'Beitreten', 'de', 'yum'),
('Join group', 'Collega al gruppo', 'it', 'yum'),
('Jump to profile', 'Zum Profil', 'de', 'yum'),
('Jump to profile', 'Consulter le profil', 'fr', 'yum'),
('Jump to profile', 'Vai al profilo', 'it', 'yum'),
('Language', 'Sprache', 'de', 'yum'),
('Language', 'Idioma', 'es', 'yum'),
('Language', '	Langue', 'fr', 'yum'),
('Language', 'Lingua', 'it', 'yum'),
('Last Name', 'Cognome', 'it', 'yum'),
('Last Name', 'Ð¤Ð°Ð¼Ð¸Ð»Ð¸Ñ', 'ru', 'yum'),
('Last name', 'Nachname', 'de', 'yum'),
('Last name', 'Apellido', 'es', 'yum'),
('Last name', 'Nom de famille', 'fr', 'yum'),
('Last name', 'Nome', 'it', 'yum'),
('Last name', 'Nachname', 'pl', 'yum'),
('Last visit', 'Letzter Besuch', 'de', 'yum'),
('Last visit', 'òltima visita', 'es', 'yum'),
('Last visit', 'DernÃ¨re visite', 'fr', 'yum'),
('Last visit', 'Ultima visita', 'it', 'yum'),
('Last visit', 'Letzter Besuch', 'pl', 'yum'),
('Last visit', 'ÐŸÐ¾ÑÐ»ÐµÐ´Ð½Ð¸Ð¹ Ð²Ð¸Ð·Ð¸Ñ‚', 'ru', 'yum'),
('Let me appear in the search', 'Ich möchte in der Suche erscheinen', 'de', 'yum'),
('Let me appear in the search', 'Je ne souhaite pas apparaitre dans les rÃ©sultats des moteurs de recherche', 'fr', 'yum'),
('Let me appear in the search', 'Mostrami nei risultati', 'it', 'yum'),
('Let the user choose in privacy settings', 'Den Benutzer entscheiden lassen', 'de', 'yum'),
('Let the user choose in privacy settings', 'Laisser l utilisateur choisir lui-mÃªme', 'fr', 'yum'),
('Let the user choose in privacy settings', 'Consentire all''utente di scegliere le impostazioni della privacy', 'it', 'yum'),
('Letters are not case-sensitive.', 'Zwischen Groß-und Kleinschreibung wird nicht unterschieden.', 'de', 'yum'),
('Letters are not case-sensitive.', 'Las letras nos son sensibles a mayúsculas y minúsculas.', 'es', 'yum'),
('Letters are not case-sensitive.', 'Aucune importance ne sera apportÃ©e aux minuscules ou majuscules.', 'fr', 'yum'),
('Letters are not case-sensitive.', 'La ricerca non Ã¨ case sensitive.', 'it', 'yum'),
('Letters are not case-sensitive.', 'Zwischen GroÃŸ-und Kleinschreibung wird nicht unterschieden.', 'pl', 'yum'),
('Letters are not case-sensitive.', 'Ð ÐµÐ³Ð¸ÑÑ‚Ñ€ Ð·Ð½Ð°Ñ‡ÐµÐ½Ð¸Ðµ Ð½Ðµ Ð¸Ð¼ÐµÐµÑ‚.', 'ru', 'yum'),
('List Profile Field', 'Lista campi Profilo', 'it', 'yum');
INSERT INTO `translation` (`message`, `translation`, `language`, `category`) VALUES
('List Profile Field', 'Ð¡Ð¿Ð¸ÑÐ¾Ðº', 'ru', 'yum'),
('List User', 'Lista utenti', 'it', 'yum'),
('List User', 'Ð¡Ð¿Ð¸ÑÐ¾Ðº Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»ÐµÐ¹', 'ru', 'yum'),
('List roles', 'Rollen anzeigen', 'de', 'yum'),
('List roles', 'Listar roles', 'es', 'yum'),
('List roles', 'liste des rÃ´les', 'fr', 'yum'),
('List roles', 'Lista ruoli', 'it', 'yum'),
('List roles', 'Lista rÃ³l', 'pl', 'yum'),
('List user', 'Benutzer auflisten', 'de', 'yum'),
('List user', 'Listar usuario', 'es', 'yum'),
('List user', 'Liste complÃ¨tes des membres', 'fr', 'yum'),
('List user', 'Lista utenti', 'it', 'yum'),
('List user', 'Benutzer auflisten', 'pl', 'yum'),
('List users', 'Benutzer anzeigen', 'de', 'yum'),
('List users', 'Listar usuarios', 'es', 'yum'),
('List users', 'Liste des membres', 'fr', 'yum'),
('List users', 'Lista utenti', 'it', 'yum'),
('List users', 'Lista uÅ¼ytkownikÃ³w', 'pl', 'yum'),
('Log profile visits', 'Meine Profilbesuche anzeigen', 'de', 'yum'),
('Log profile visits', 'Voir les statistiques des visiteurs de mon profil', 'fr', 'yum'),
('Log profile visits', 'Log visite profilo', 'it', 'yum'),
('Logged in as', 'Angemeldet als', 'de', 'yum'),
('Logged in as', 'ConnectÃ© en tant que', 'fr', 'yum'),
('Logged in as', 'Loggato come', 'it', 'yum'),
('Login', 'Anmeldung', 'de', 'yum'),
('Login', 'Iniciar sesión', 'es', 'yum'),
('Login', 'Inscription', 'fr', 'yum'),
('Login', 'Entra', 'it', 'yum'),
('Login', 'Logowanie', 'pl', 'yum'),
('Login', 'Ð’Ñ…Ð¾Ð´', 'ru', 'yum'),
('Login Type', 'Anmeldungsart', 'de', 'yum'),
('Login Type', 'Tipo de inicio de sesión', 'es', 'yum'),
('Login Type', 'Mode de connection', 'fr', 'yum'),
('Login Type', 'Tipo login', 'it', 'yum'),
('Login Type', 'Rodzaj logowania', 'pl', 'yum'),
('Login allowed by Email and Username', 'Anmeldung per Benutzername oder E-Mail adresse', 'de', 'yum'),
('Login allowed by Email and Username', 'Inicio de sesión por Email y Nombre de usuario', 'es', 'yum'),
('Login allowed by Email and Username', 'Connection avec le nom d utilisateur ou adresse e-mail.', 'fr', 'yum'),
('Login allowed by Email and Username', 'Login con il nome utente o l''indirizzo e-mail', 'it', 'yum'),
('Login allowed by Email and Username', 'Logowanie przez nazwÄ™ lub mejl', 'pl', 'yum'),
('Login allowed only by Email', 'Anmeldung nur per E-Mail adresse', 'de', 'yum'),
('Login allowed only by Email', 'Inicio de sesión sólo por Email', 'es', 'yum'),
('Login allowed only by Email', 'COnnection avec l adresse e-mail seulement', 'fr', 'yum'),
('Login allowed only by Email', 'Login solo tramite email', 'it', 'yum'),
('Login allowed only by Email', 'Logowanie poprzez mejl', 'pl', 'yum'),
('Login allowed only by Username', 'Anmeldung nur per Benutzername', 'de', 'yum'),
('Login allowed only by Username', 'Inicio de sesión sólo por Nombre de usuario', 'es', 'yum'),
('Login allowed only by Username', 'Connection avec le nom d utilisateur seulement', 'fr', 'yum'),
('Login allowed only by Username', 'Login solo tramite username', 'it', 'yum'),
('Login allowed only by Username', 'Logowanie poprzez nazwÄ™', 'pl', 'yum'),
('Login is not possible with the given credentials', 'Anmeldung mit den angegebenen Werten nicht möglich', 'de', 'yum'),
('Logout', 'Abmelden', 'de', 'yum'),
('Logout', 'Cerrar sesión', 'es', 'yum'),
('Logout', 'DÃ©connection', 'fr', 'yum'),
('Logout', 'Esci', 'it', 'yum'),
('Logout', 'Wyloguj', 'pl', 'yum'),
('Logout', 'Ð’Ñ‹Ð¹Ñ‚Ð¸', 'ru', 'yum'),
('Lost Password?', 'Password dimenticata?', 'it', 'yum'),
('Lost Password?', 'Ð—Ð°Ð±Ñ‹Ð»Ð¸ Ð¿Ð°Ñ€Ð¾Ð»ÑŒ?', 'ru', 'yum'),
('Lost password?', 'Passwort vergessen?', 'de', 'yum'),
('Lost password?', '¿Olvidó la contraseña?', 'es', 'yum'),
('Lost password?', 'Mot de passe oubliÃ©?', 'fr', 'yum'),
('Lost password?', 'Password dimenticata?', 'it', 'yum'),
('Lost password?', 'Passwort vergessen?', 'pl', 'yum'),
('Mail send method', 'Nachrichtenversandmethode', 'de', 'yum'),
('Mail send method', 'Método de envío de correo', 'es', 'yum'),
('Mail send method', 'Mode d envoie des messages', 'fr', 'yum'),
('Mail send method', 'Metodo invio mail', 'it', 'yum'),
('Mail send method', 'Metoda wysyÅ‚ania mejli', 'pl', 'yum'),
('Make {field} public available', 'Das Feld {field} öffentlich machen', 'de', 'yum'),
('Make {field} public available', 'Rendre publique le champ {field}', 'fr', 'yum'),
('Make {field} public available', 'Rendi pubblico il campo {field}', 'it', 'yum'),
('Manage', 'Verwalten', 'de', 'yum'),
('Manage', 'Administrar', 'es', 'yum'),
('Manage', 'Gestion', 'fr', 'yum'),
('Manage', 'Gestione', 'it', 'yum'),
('Manage', 'Ð£Ð¿Ñ€Ð°Ð²Ð»ÐµÐ½Ð¸Ðµ', 'ru', 'yum'),
('Manage Actions', 'Gestione azioni', 'it', 'yum'),
('Manage Profile Field', 'Profilfeld verwalten', 'de', 'yum'),
('Manage Profile Field', 'Administrar Campos de Perfil', 'es', 'yum'),
('Manage Profile Field', 'GÃ©rer le champ de profil', 'fr', 'yum'),
('Manage Profile Field', 'Gestione campi profilo', 'it', 'yum'),
('Manage Profile Field', 'ZarzÄ…dzaj polem profilu', 'pl', 'yum'),
('Manage Profile Field', 'ÐÐ°ÑÑ‚Ñ€Ð¾Ð¹ÐºÐ° Ð¿Ð¾Ð»ÐµÐ¹', 'ru', 'yum'),
('Manage Profile Fields', 'Profilfelder verwalten', 'de', 'yum'),
('Manage Profile Fields', 'Administrar Campos de Perfil', 'es', 'yum'),
('Manage Profile Fields', 'GÃ©rer les champs de profils', 'fr', 'yum'),
('Manage Profile Fields', 'Gestione campi Profilo', 'it', 'yum'),
('Manage Profile Fields', 'ZarzÄ…dzaj polami profilu', 'pl', 'yum'),
('Manage Profile Fields', 'ÐÐ°ÑÑ‚Ñ€Ð¾Ð¹ÐºÐ° Ð¿Ð¾Ð»ÐµÐ¹', 'ru', 'yum'),
('Manage Profiles', 'Profile verwalten', 'de', 'yum'),
('Manage Profiles', 'Administrar Perfiles', 'es', 'yum'),
('Manage Profiles', 'GÃ©rer les profils', 'fr', 'yum'),
('Manage Profiles', 'Gestione profili', 'it', 'yum'),
('Manage Roles', 'Rollenverwaltung', 'de', 'yum'),
('Manage Roles', 'Administrar Roles', 'es', 'yum'),
('Manage Roles', 'Gestion des rÃ´les', 'fr', 'yum'),
('Manage Roles', 'Gestione Ruoli', 'it', 'yum'),
('Manage Roles', 'ZarzÄ…dzaj rolami', 'pl', 'yum'),
('Manage User', 'Benutzerverwaltung', 'de', 'yum'),
('Manage User', 'Administrar Usuario', 'es', 'yum'),
('Manage User', 'Gestion utilisateur', 'fr', 'yum'),
('Manage User', 'Gestione utente', 'it', 'yum'),
('Manage User', 'Benutzerverwaltung', 'pl', 'yum'),
('Manage User', 'Ð£Ð¿Ñ€Ð°Ð²Ð»ÐµÐ½Ð¸Ðµ Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»ÑÐ¼Ð¸', 'ru', 'yum'),
('Manage Users', 'Benutzerverwaltung', 'de', 'yum'),
('Manage Users', 'Administrar Usuarios', 'es', 'yum'),
('Manage Users', 'Gestion des membres', 'fr', 'yum'),
('Manage Users', 'Gestione utenti', 'it', 'yum'),
('Manage field groups', 'Feldgruppen verwalten', 'de', 'yum'),
('Manage field groups', 'Administrar grupos de campos', 'es', 'yum'),
('Manage field groups', 'GÃ©rer les champs des groupes', 'fr', 'yum'),
('Manage field groups', 'Gestione campo gruppi', 'it', 'yum'),
('Manage field groups', 'ZarzÄ…dzaj grupami pÃ³l', 'pl', 'yum'),
('Manage friends', 'Freundschaftsverwaltung', 'de', 'yum'),
('Manage friends', 'Administrar amigos', 'es', 'yum'),
('Manage friends', 'Gestion des contacts', 'fr', 'yum'),
('Manage friends', 'Gestione contatti', 'it', 'yum'),
('Manage my users', 'Meine Benutzer verwalten', 'de', 'yum'),
('Manage my users', 'Administrar mis usuarios', 'es', 'yum'),
('Manage my users', 'GÃ©rer mes membres', 'fr', 'yum'),
('Manage my users', 'Gestione utenti', 'it', 'yum'),
('Manage my users', 'ZarzÄ…dzaj moimi uÅ¼ytkownikami', 'pl', 'yum'),
('Manage payments', 'Zahlungsarten verwalten', 'de', 'yum'),
('Manage payments', 'Gestione pagamenti', 'it', 'yum'),
('Manage permissions', 'Berechtigungen verwalten', 'de', 'yum'),
('Manage permissions', 'Gestione permessi', 'it', 'yum'),
('Manage profile Fields', 'Profilfelder verwalten', 'de', 'yum'),
('Manage profile Fields', 'Administrar Campos de Perfil', 'es', 'yum'),
('Manage profile Fields', 'GÃ©rer les champs du profil', 'fr', 'yum'),
('Manage profile Fields', 'Gestione campi profilo', 'it', 'yum'),
('Manage profile Fields', 'Profilfelder verwalten', 'pl', 'yum'),
('Manage profile field groups', 'Administrar grupos de campos de perfiles', 'es', 'yum'),
('Manage profile field groups', 'GÃ©rer les champs des profils de grouppes', 'fr', 'yum'),
('Manage profile field groups', 'Gestione campo profilo gruppi', 'it', 'yum'),
('Manage profile field groups', 'ZarzÄ…dzaj grupami pÃ³l w profilu', 'pl', 'yum'),
('Manage profile fields', 'Profilfelder verwalten', 'de', 'yum'),
('Manage profile fields', 'GÃ©rer les champs de profils', 'fr', 'yum'),
('Manage profile fields', 'Gestione campi profilo', 'it', 'yum'),
('Manage profile fields', 'ZarzÄ…dzaj polami profilu', 'pl', 'yum'),
('Manage profile fields groups', 'Gestione campi profilo gruppi ', 'it', 'yum'),
('Manage profile fields groups', 'ZarzÄ…dzaj grupami pÃ³l w profilu', 'pl', 'yum'),
('Manage profiles', 'Profile verwalten', 'de', 'yum'),
('Manage profiles', 'Administrar perfiles', 'es', 'yum'),
('Manage profiles', 'GÃ©rer les profils', 'fr', 'yum'),
('Manage profiles', 'Gestione profili', 'it', 'yum'),
('Manage profiles', 'ZarzÄ…dzaj profilem', 'pl', 'yum'),
('Manage roles', 'Rollen verwalten', 'de', 'yum'),
('Manage roles', 'Adminsitrar roles', 'es', 'yum'),
('Manage roles', 'GÃ©rer les rÃ´les', 'fr', 'yum'),
('Manage roles', 'Gestione Ruoli', 'it', 'yum'),
('Manage roles', 'ZarzÄ…dzaj rolami', 'pl', 'yum'),
('Manage text settings', 'Texteinstellungen', 'de', 'yum'),
('Manage text settings', 'Administrar configuración de texto', 'es', 'yum'),
('Manage text settings', 'Option de texte', 'fr', 'yum'),
('Manage text settings', 'Impostazioni di testo', 'it', 'yum'),
('Manage this profile', 'dieses Profil bearbeiten', 'de', 'yum'),
('Manage this profile', 'Administrar este perfil', 'es', 'yum'),
('Manage this profile', 'Modifier ce profil', 'fr', 'yum'),
('Manage this profile', 'Modifica profilo', 'it', 'yum'),
('Manage this profile', 'ZarzÄ…dzaj tym profilem', 'pl', 'yum'),
('Manage user Groups', 'Benutzergruppen verwalten', 'de', 'yum'),
('Manage user Groups', 'Administrar Grupos de usuario', 'es', 'yum'),
('Manage user Groups', 'Gerer les utilisateurs des grouppes', 'fr', 'yum'),
('Manage user Groups', 'Gestine gruppi', 'it', 'yum'),
('Manage users', 'Benutzer verwalten', 'de', 'yum'),
('Manage users', 'Administrar usuarios', 'es', 'yum'),
('Manage users', 'GÃ©rer les membres', 'fr', 'yum'),
('Manage users', 'Gestione utenti', 'it', 'yum'),
('Manage users', 'ZarzÄ…dzaj uÅ¼ytkownikaki', 'pl', 'yum'),
('Mange Profile Field', 'Mange Profil Field', 'de', 'yum'),
('Mange Profile Field', 'Administrar Campo del Perfil', 'es', 'yum'),
('Mange Profile Field', 'Gestione campo profilo', 'it', 'yum'),
('Mark as read', 'Als gelesen markieren', 'de', 'yum'),
('Mark as read', 'Marquer comme lu', 'fr', 'yum'),
('Mark as read', 'Segna come letto', 'it', 'yum'),
('Match', 'Treffer', 'de', 'yum'),
('Match', 'Combinar', 'es', 'yum'),
('Match', 'RÃ©sultat', 'fr', 'yum'),
('Match', 'Corrispondenza (RegExp)', 'it', 'yum'),
('Match', 'Ð¡Ð¾Ð²Ð¿Ð°Ð´ÐµÐ½Ð¸Ðµ (RegExp)', 'ru', 'yum'),
('Membership', 'Mitgliedschaft', 'de', 'yum'),
('Membership', 'Devenir membre', 'fr', 'yum'),
('Membership', 'Iscrizione', 'it', 'yum'),
('Membership ends at: {date}', 'Mitgliedschaft endet am: {date}', 'de', 'yum'),
('Membership ends at: {date}', 'Iscrizione termina il: {date}', 'it', 'yum'),
('Membership has not been payed yet', 'Zahlungseingang noch nicht erfolgt', 'de', 'yum'),
('Membership has not been payed yet', 'Iscrizione non pagata', 'it', 'yum'),
('Membership payed at: {date}', 'Zahlungseingang erfolgt am: {date}', 'de', 'yum'),
('Membership payed at: {date}', 'Iscrizione pagata il: {date}', 'it', 'yum'),
('Memberships', 'Mitgliedschaften', 'de', 'yum'),
('Memberships', 'Iscrizioni', 'it', 'yum'),
('Message', 'Nachricht', 'de', 'yum'),
('Message', 'Mensaje', 'es', 'yum'),
('Message', 'Message', 'fr', 'yum'),
('Message', 'Messaggio', 'it', 'yum'),
('Message "{message}" has been sent to {to}', 'Nachricht "{message}" wurde an {to} gesendet', 'de', 'yum'),
('Message "{message}" has been sent to {to}', 'Message "{message}" a Ã©tÃ© envoyÃ© {to} ', 'fr', 'yum'),
('Message "{message}" has been sent to {to}', 'Messaggio "{message}" Ã¨ stato inviato a {to}', 'it', 'yum'),
('Message "{message}" was marked as read', 'Nachricht "{message}" wurde als gelesen markiert.', 'de', 'yum'),
('Message "{message}" was marked as read', 'Message "{message}" marquer comme lu.', 'fr', 'yum'),
('Message "{message}" was marked as read', 'Messaggio "{message}" Ã¨ stato contrassegnato come letto.', 'it', 'yum'),
('Message count', 'Anzahl Nachrichten', 'de', 'yum'),
('Message from', 'Nachricht von', 'de', 'yum'),
('Message from', 'Message de', 'fr', 'yum'),
('Message from', 'Messaggio da', 'it', 'yum'),
('Message from ', 'Nachricht von ', 'de', 'yum'),
('Message from ', 'Mensaje de', 'es', 'yum'),
('Message from ', 'Message de ', 'fr', 'yum'),
('Message from ', 'Messaggio da ', 'it', 'yum'),
('Message from ', 'Nachricht von ', 'pl', 'yum'),
('Messages', 'Nachrichten', 'de', 'yum'),
('Messages', 'Mensajes', 'es', 'yum'),
('Messages', 'Message', 'fr', 'yum'),
('Messages', 'Messagi', 'it', 'yum'),
('Messages', 'WiadomoÅ›ci', 'pl', 'yum'),
('Messaging system', 'Nachrichtensystem', 'de', 'yum'),
('Messaging system', 'Sistema de mensajes', 'es', 'yum'),
('Messaging system', 'Message-Board', 'fr', 'yum'),
('Messaging system', 'Sistema messaggistica', 'it', 'yum'),
('Messaging system', 'System wiadomoÅ›ci', 'pl', 'yum'),
('Minimal password length 4 symbols.', 'Minimale Länge des Passworts 4 Zeichen.', 'de', 'yum'),
('Minimal password length 4 symbols.', 'Mínimo 4 caracteres para la contraseña', 'es', 'yum'),
('Minimal password length 4 symbols.', 'La longueur de votre mot de passe doit comporter au moins quatre charactÃ¨res.', 'fr', 'yum'),
('Minimal password length 4 symbols.', 'Lunghezza minima password di 4 caratteri.', 'it', 'yum'),
('Minimal password length 4 symbols.', 'Minimale LÃ¤nge des Passworts 4 Zeichen.', 'pl', 'yum'),
('Minimal password length 4 symbols.', 'ÐœÐ¸Ð½Ð¸Ð¼Ð°Ð»ÑŒÐ½Ð°Ñ Ð´Ð»Ð¸Ð½Ð° Ð¿Ð°Ñ€Ð¾Ð»Ñ 4 ÑÐ¸Ð¼Ð²Ð¾Ð»Ð°.', 'ru', 'yum'),
('Module settings', 'Moduleinstellungen', 'de', 'yum'),
('Module settings', 'Ajustes del módulo', 'es', 'yum'),
('Module settings', 'RÃ©glage des modules', 'fr', 'yum'),
('Module settings', 'Opzioni modulo', 'it', 'yum'),
('Module settings', 'Ustawienia moduÅ‚u', 'pl', 'yum'),
('Module text settings', 'Ajustes de texto del módulo', 'es', 'yum'),
('Module text settings', 'Opzioni testo modulo', 'it', 'yum'),
('Module text settings', 'Ustawienia tekstÃ³w moduÅ‚u', 'pl', 'yum'),
('My Inbox', 'Posteingang', 'de', 'yum'),
('My Inbox', 'Mi bandeja de entrada', 'es', 'yum'),
('My Inbox', 'Boite e-mail', 'fr', 'yum'),
('My Inbox', 'Moja skrzynka odbiorcza', 'pl', 'yum'),
('My friends', 'Meine Kontakte', 'de', 'yum'),
('My friends', 'Mis amigos', 'es', 'yum'),
('My friends', 'Mes contact', 'fr', 'yum'),
('My friends', 'Contatti', 'it', 'yum'),
('My groups', 'Meine Gruppen', 'de', 'yum'),
('My groups', 'Mis grupos', 'es', 'yum'),
('My groups', 'Mes grouppes', 'fr', 'yum'),
('My groups', 'Gruppi', 'it', 'yum'),
('My inbox', 'Mein Posteingang', 'de', 'yum'),
('My inbox', 'Mi bandeja de entrada', 'es', 'yum'),
('My inbox', 'Ma boite e-mail', 'fr', 'yum'),
('My inbox', 'Posta in arrivo', 'it', 'yum'),
('My memberships', 'Meine Mitgliedschaften', 'de', 'yum'),
('My memberships', 'Options de mon compte', 'fr', 'yum'),
('My memberships', 'Iscrizioni', 'it', 'yum'),
('My profile', 'Mein Profil', 'de', 'yum'),
('My profile', 'Mi perfil', 'es', 'yum'),
('My profile', 'Mon profil', 'fr', 'yum'),
('My profile', 'Profilo', 'it', 'yum'),
('New friendship request', 'nueva solicitud de amistad', 'es', 'yum'),
('New friendship request from {username}', 'neue Kontaktanfrage von {username}', 'de', 'yum'),
('New friendship request from {username}', 'Nouvelle demande de contact de {username}', 'fr', 'yum'),
('New friendship request from {username}', 'Nuova richiesta di contatto da {username}', 'it', 'yum'),
('New friendship requests', 'Neue Freundschaftsanfragen', 'de', 'yum'),
('New friendship requests', 'Nueva solicitud de amistad', 'es', 'yum'),
('New friendship requests', 'Nouvelle demande de contact', 'fr', 'yum'),
('New friendship requests', 'Nuova richiesta contatto', 'it', 'yum'),
('New messages', 'Neue Nachrichten', 'de', 'yum'),
('New messages', 'Nouveaux mÃ©ssages', 'fr', 'yum'),
('New messages', 'Nuovo messaggio', 'it', 'yum'),
('New password', 'Neues Passwort', 'de', 'yum'),
('New password', 'Nouveau mot de passe', 'fr', 'yum'),
('New password', 'Nuovo Password', 'it', 'yum'),
('New password is saved.', 'Neues Passwort wird gespeichert.', 'de', 'yum'),
('New password is saved.', 'La contraseña nueva ha sido guardada', 'es', 'yum'),
('New password is saved.', 'Votre nouveau mot de passe a bien Ã©tÃ© mÃ©morisÃ©.', 'fr', 'yum'),
('New password is saved.', 'Nuova passowrd salvata', 'it', 'yum'),
('New password is saved.', 'Neues Passwort wird gespeichert.', 'pl', 'yum'),
('New password is saved.', 'ÐÐ¾Ð²Ñ‹Ð¹ Ð¿Ð°Ñ€Ð¾Ð»ÑŒ ÑÐ¾Ñ…Ñ€Ð°Ð½ÐµÐ½.', 'ru', 'yum'),
('New profile comment', 'Nuevo comentario de perfil', 'es', 'yum'),
('New profile comment from {username}', 'Neuer Profilkommentar von {username}', 'de', 'yum'),
('New profile comment from {username}', 'Nouveau commentaire pour le profil de {username}', 'fr', 'yum'),
('New profile comment from {username}', 'Nuovo commento per il profilo {username}', 'it', 'yum'),
('New settings profile', 'Neues Einstellungsprofil', 'de', 'yum'),
('New settings profile', 'Nuevos ajustes de perfil', 'es', 'yum'),
('New settings profile', 'Nouvelle configuration de profil', 'fr', 'yum'),
('New settings profile', 'Nuova preferenze profilo', 'it', 'yum'),
('New settings profile', 'Nowe ustawienia profilu', 'pl', 'yum'),
('New translation', 'Neue Übersetzung', 'de', 'yum'),
('New value', 'Neuer Wert', 'de', 'yum'),
('New value', 'Valor nuevo', 'es', 'yum'),
('New value', 'Nouvelle valeur', 'fr', 'yum'),
('New value', 'Nuovo valore', 'it', 'yum'),
('New value', 'Nowa wartoÅ›Ä‡', 'pl', 'yum'),
('No', 'Nein', 'de', 'yum'),
('No', 'No', 'es', 'yum'),
('No', 'Non', 'fr', 'yum'),
('No', 'No', 'it', 'yum'),
('No', 'Nein', 'pl', 'yum'),
('No', 'ÐÐµÑ‚', 'ru', 'yum'),
('No friendship requested', 'Keine Freundschaft angefragt', 'de', 'yum'),
('No friendship requested', 'No hay solicitud de amistad', 'es', 'yum'),
('No friendship requested', 'Pas de demande de contact', 'fr', 'yum'),
('No friendship requested', 'Contatto non richiesto', 'it', 'yum'),
('No new messages', 'Keine neuen Nachrichten', 'de', 'yum'),
('No new messages', 'Pas de nouveaux mÃ©ssages', 'fr', 'yum'),
('No new messages', 'Nessun nuovo messaggio', 'it', 'yum'),
('No profile changes were made', 'Keine Profiländerungen stattgefunden', 'de', 'yum'),
('No profile changes were made', 'No se hicieron cambios en el perfil', 'es', 'yum'),
('No profile changes were made', 'pas de rÃ©sultat pour les profils modifiÃ©s', 'fr', 'yum'),
('No profile changes were made', 'Nessun cambiamento al profilo', 'it', 'yum'),
('No profile changes were made', 'Nie dokonano zmian w profilu', 'pl', 'yum'),
('No, but show on registration form', 'Ja, und auf Registrierungsseite anzeigen', 'de', 'yum'),
('No, but show on registration form', 'No, pero mostrar en formulario de registro', 'es', 'yum'),
('No, but show on registration form', 'non et charger le formulaire d inscription', 'fr', 'yum'),
('No, but show on registration form', 'No, ma mostra nel form di registrazione', 'it', 'yum'),
('No, but show on registration form', 'Nie, ale pokaÅ¼ w formularzu rejestracji', 'pl', 'yum'),
('No, but show on registration form', 'ÐÐµÑ‚, Ð½Ð¾ Ð¿Ð¾ÐºÐ°Ð·Ð°Ñ‚ÑŒ Ð¿Ñ€Ð¸ Ñ€ÐµÐ³Ð¸ÑÑ‚Ñ€Ð°Ñ†Ð¸Ð¸', 'ru', 'yum'),
('Nobody has commented your profile yet', 'Bisher hat niemand mein Profil kommentiert', 'de', 'yum'),
('Nobody has commented your profile yet', 'Aucun commentaire pour votre profil', 'fr', 'yum'),
('Nobody has commented your profile yet', 'Nessuno ha commentato il tuo profilo', 'it', 'yum'),
('Nobody has visited your profile yet', 'Bisher hat noch niemand ihr Profil angesehen', 'de', 'yum'),
('Nobody has visited your profile yet', 'Nadie ha visitado tu perfil todavía', 'es', 'yum'),
('Nobody has visited your profile yet', 'Aucune visite rÃ©cente de votre profil.', 'fr', 'yum'),
('Nobody has visited your profile yet', 'Fino ad ora nessuno ha visto il tuo profilo', 'it', 'yum'),
('None', 'Keine', 'de', 'yum'),
('None', 'Ninguno', 'es', 'yum'),
('None', 'Aucun', 'fr', 'yum'),
('None', 'Nessuno', 'it', 'yum'),
('None', 'Å»aden', 'pl', 'yum'),
('Not active', 'Nicht aktiv', 'de', 'yum'),
('Not active', 'Innactivo', 'es', 'yum'),
('Not active', 'Non actif', 'fr', 'yum'),
('Not active', 'Non attivo', 'it', 'yum'),
('Not active', 'Nicht aktiv', 'pl', 'yum'),
('Not active', 'ÐÐµ Ð°ÐºÑ‚Ð¸Ð²Ð¸Ñ€Ð¾Ð²Ð°Ð½', 'ru', 'yum'),
('Not assigned', 'Nicht zugewiesen', 'de', 'yum'),
('Not assigned', 'No asignado', 'es', 'yum'),
('Not assigned', 'Non assignÃ©', 'fr', 'yum'),
('Not assigned', 'Non assegnato', 'it', 'yum'),
('Not assigned', 'Nie przypisano', 'pl', 'yum'),
('Not visited', 'Non visitato', 'it', 'yum'),
('Ok', 'Ok', 'de', 'yum'),
('Ok', 'Aceptar', 'es', 'yum'),
('Ok', 'Ok', 'fr', 'yum'),
('Ok', 'Ok', 'it', 'yum'),
('Ok', 'Ok', 'pl', 'yum'),
('Ok', 'Ok', 'ru', 'yum'),
('Old value', 'Alter Wert', 'de', 'yum'),
('Old value', 'Valor antiguo', 'es', 'yum'),
('Old value', 'Ancienne valeur', 'fr', 'yum'),
('Old value', 'Vecchio valore', 'it', 'yum'),
('Old value', 'Stara wartoÅ›Ä‡', 'pl', 'yum'),
('One of the recipients ({username}) has ignored you. Message will not be sent!', 'Einer der gewählten Benutzer ({username}) hat Sie auf seiner Ignorier-Liste. Die Nachricht wird nicht gesendet!', 'de', 'yum'),
('One of the recipients ({username}) has ignored you. Message will not be sent!', 'Uno de los destinatarios ({username}) te ha ignorado. ¡No se enviará el mensaje!', 'es', 'yum'),
('One of the recipients ({username}) has ignored you. Message will not be sent!', 'Un des membres sÃ©lectionnÃ© vous a mis sur sa liste noire ({username}). Ce message ne sera pas envoyÃ©!', 'fr', 'yum'),
('One of the recipients ({username}) has ignored you. Message will not be sent!', 'Un destinatario ({username}) ti ha inserito nella lista degli ignorati. Messaggio non inviato!', 'it', 'yum'),
('Only owner', 'Nur Besitzer', 'de', 'yum'),
('Only owner', 'Sólo el dueño', 'es', 'yum'),
('Only owner', 'PropriÃ©taire seulement', 'fr', 'yum'),
('Only owner', 'Solo proprietario', 'it', 'yum'),
('Only owner', 'Ð¢Ð¾Ð»ÑŒÐºÐ¾ Ð²Ð»Ð°Ð´ÐµÐ»ÐµÑ†', 'ru', 'yum'),
('Only your friends are shown here', 'Nur ihre Kontakte werden hier angezeigt', 'de', 'yum'),
('Only your friends are shown here', 'Seuls vos contacts seront visibles ici', 'fr', 'yum'),
('Only your friends are shown here', 'Solo i tuoi contatti verranno visualizzati', 'it', 'yum'),
('Order confirmed', 'Bestellbestätigung', 'de', 'yum'),
('Order confirmed', 'Ordini confermati', 'it', 'yum'),
('Order date', 'Bestelldatum', 'de', 'yum'),
('Order date', 'Data ordine', 'it', 'yum'),
('Order membership', 'Mitgliedschaft bestellen', 'de', 'yum'),
('Order membership', 'Ordine iscrizione', 'it', 'yum'),
('Order number', 'Bestellnummer', 'de', 'yum'),
('Order number', 'Numero ordine', 'it', 'yum'),
('Ordered at', 'Bestellt am', 'de', 'yum'),
('Ordered at', 'Ordinato il', 'it', 'yum'),
('Ordered memberships', 'Bestellte Mitgliedschaften', 'de', 'yum'),
('Ordered memberships', 'Options complÃ©mentaires', 'fr', 'yum'),
('Ordered memberships', 'Iscrizioni ordinate', 'it', 'yum'),
('Other', 'Verschiedenes', 'de', 'yum'),
('Other', 'Otro', 'es', 'yum'),
('Other', 'Divers', 'fr', 'yum'),
('Other', 'Altro', 'it', 'yum'),
('Other', 'PozostaÅ‚e', 'pl', 'yum'),
('Other Validator', 'Otro validador', 'es', 'yum'),
('Other Validator', 'Autre validation', 'fr', 'yum'),
('Other Validator', 'Altro validatore', 'it', 'yum'),
('Other Validator', 'Ð”Ñ€ÑƒÐ³Ð¾Ð¹ Ð²Ð°Ð»Ð¸Ð´Ð°Ñ‚Ð¾Ñ€', 'ru', 'yum'),
('Participant count', 'Anzahl Teilnehmer', 'de', 'yum'),
('Participants', 'Teilnehmer', 'de', 'yum'),
('Participants', 'Partecipanti', 'it', 'yum'),
('Password', 'Passwort', 'de', 'yum'),
('Password', 'Contraseña', 'es', 'yum'),
('Password', 'Passwort', 'fr', 'yum'),
('Password', 'Password', 'it', 'yum'),
('Password', 'HasÅ‚o', 'pl', 'yum'),
('Password Expiration Time', 'Ablaufzeit von Passwörtern', 'de', 'yum'),
('Password Expiration Time', 'Tiempo de expiración de la contraseña', 'es', 'yum'),
('Password Expiration Time', 'DurÃ©e de vie des mot de passe', 'fr', 'yum'),
('Password Expiration Time', 'Scadenza password', 'it', 'yum'),
('Password Expiration Time', 'Czas waÅ¼noÅ›ci hasÅ‚a', 'pl', 'yum'),
('Password is incorrect.', 'Passwort ist falsch.', 'de', 'yum'),
('Password is incorrect.', 'Contraseña incorrecta', 'es', 'yum'),
('Password is incorrect.', 'Le mot de passe est incorrect.', 'fr', 'yum'),
('Password is incorrect.', 'Password incorretta', 'it', 'yum'),
('Password is incorrect.', 'Niepoprawne hasÅ‚o.', 'pl', 'yum'),
('Password is incorrect.', 'ÐÐµÐ²ÐµÑ€Ð½Ñ‹Ð¹ Ð¿Ð°Ñ€Ð¾Ð»ÑŒ.', 'ru', 'yum'),
('Password recovery', 'Passwort wiederherstellen', 'de', 'yum'),
('Password recovery', 'Recuperación de contraseña', 'es', 'yum'),
('Passwords do not match', 'Las contraseñas no coinciden', 'es', 'yum'),
('Payment', 'Zahlungsmethode', 'de', 'yum'),
('Payment', 'Pagamento', 'it', 'yum'),
('Payment arrived', 'Zahlungseingang bestätigt', 'de', 'yum'),
('Payment arrived', 'Pagamento arrivato', 'it', 'yum'),
('Payment date', 'Bezahlt am', 'de', 'yum'),
('Payment date', 'Data pagamento', 'it', 'yum'),
('Payment types', 'Zahlungsarten', 'de', 'yum'),
('Payment types', 'Options de paiement', 'fr', 'yum'),
('Payment types', 'Tipi pagamento', 'it', 'yum'),
('Payments', 'Zahlungsarten', 'de', 'yum'),
('Payments', 'Pagamenti', 'it', 'yum'),
('Permissions', 'Berechtigungen', 'de', 'yum'),
('Permissions', 'Permisos', 'es', 'yum'),
('Permissions', 'Permissions', 'fr', 'yum'),
('Permissions', 'Autorizzazioni', 'it', 'yum'),
('Please activate you account go to {activation_url}', 'Perfavore attiva il tuo accounto all''indirizzo {activation_url}', 'it', 'yum'),
('Please check your email. An instructions was sent to your email address.', 'Bitte überprüfen Sie Ihre E-Mails. Eine Anleitung wurde an Ihre E-Mail-Adresse geschickt.', 'de', 'yum'),
('Please check your email. An instructions was sent to your email address.', 'Por favor verifica tu e-mail a donde se han enviado más instrucciones.', 'es', 'yum'),
('Please check your email. An instructions was sent to your email address.', 'Controlez votre boite e-mail, d autres instructions vous ont Ã©tÃ© envoyÃ©es par e-mail. *IMPORTANT:pour le cas ou notre e-mail ne vous serais pas parvenu, il est possible que notre e-mail ai Ã©tÃ© filtrÃ© par votre fournisseur  d accÃ¨s internet et placÃ', 'fr', 'yum'),
('Please check your email. An instructions was sent to your email address.', 'Perfavore controlla la tua email con le istruzioni che ti abbiamo inviato', 'it', 'yum'),
('Please check your email. An instructions was sent to your email address.', 'Bitte Ã¼berprÃ¼fen Sie Ihre E-Mails. Eine Anleitung wurde an Ihre E-Mail-Adresse geschickt.', 'pl', 'yum'),
('Please check your email. An instructions was sent to your email address.', 'ÐÐ° Ð’Ð°Ñˆ Ð°Ð´Ñ€ÐµÑ ÑÐ»ÐµÐºÑ‚Ñ€Ð¾Ð½Ð½Ð¾Ð¹ Ð¿Ð¾Ñ‡Ñ‚Ñ‹ Ð±Ñ‹Ð»Ð¾ Ð¾Ñ‚Ð¿Ñ€Ð°Ð²Ð»ÐµÐ½Ð¾ Ð¿Ð¸ÑÑŒÐ¼Ð¾ Ñ Ð¸Ð½ÑÑ‚Ñ€ÑƒÐºÑ†Ð¸ÑÐ¼Ð¸.', 'ru', 'yum'),
('Please check your email. Instructions have been sent to your email address.', 'Bitte schauen Sie in Ihr Postfach. Weitere Anweisungen wurden per E-Mail geschickt.', 'de', 'yum'),
('Please check your email. Instructions have been sent to your email address.', 'Por favor revisa tu e-mail. Hemos enviado intrusiones a tu dirección de e-mail.', 'es', 'yum'),
('Please check your email. Instructions have been sent to your email address.', 'Controlez votre boite e-mail. D autres instructions vous ont Ã©tÃ© envoyÃ©es par e-mail. *IMPORTANT:pour le cas ou notre e-mail ne vous serais pas parvenu, il est possible que notre e-mail ai Ã©tÃ© filtrÃ© par votre fournisseur  d accÃ¨s internet et placÃ', 'fr', 'yum'),
('Please check your email. Instructions have been sent to your email address.', 'Si prega di controllare la casella di posta. Ulteriori istruzioni sono state inviate via e-mail.', 'it', 'yum'),
('Please check your email. Instructions have been sent to your email address.', 'ProszÄ™ sprawdÅº TwÃ³j mejl. Instrukcje zostaÅ‚y wysÅ‚ane na TwÃ³j adres mejlowy.', 'pl', 'yum'),
('Please enter a request Message up to 255 characters', 'Bitte geben Sie eine Nachricht bis zu 255 Zeichen an, die dem Benutzer bei der Kontaktanfrage mitgegeben wird', 'de', 'yum'),
('Please enter a request Message up to 255 characters', 'Por favor escribe un mensaje no mayor a 255 caracteres', 'es', 'yum'),
('Please enter a request Message up to 255 characters', 'Vous pouvez ajouter un message personalisÃ© de 255 charactÃ¨res Ã  votre demande de contact', 'fr', 'yum'),
('Please enter a request Message up to 255 characters', 'Perfavore inserisci un messaggio di richiesta di massimo 255 caratteri', 'it', 'yum'),
('Please enter the letters as they are shown in the image above.', 'Bitte geben Sie die, oben im Bild angezeigten, Buchstaben ein.', 'de', 'yum'),
('Please enter the letters as they are shown in the image above.', 'Por favor escribe las letras que se muestran en la imagen.', 'es', 'yum'),
('Please enter the letters as they are shown in the image above.', 'Recopiez les charactÃ¨res apparaissant dans l image au dessus.', 'fr', 'yum'),
('Please enter the letters as they are shown in the image above.', 'Perfavore inserire le lettere mostrate nella seguente immagine.', 'it', 'yum'),
('Please enter the letters as they are shown in the image above.', 'Bitte geben Sie die, oben im Bild angezeigten, Buchstaben ein.', 'pl', 'yum'),
('Please enter the letters as they are shown in the image above.', 'ÐŸÐ¾Ð¶Ð°Ð»ÑƒÐ¹ÑÑ‚Ð°, Ð²Ð²ÐµÐ´Ð¸Ñ‚Ðµ Ð±ÑƒÐºÐ²Ñ‹, Ð¿Ð¾ÐºÐ°Ð·Ð°Ð½Ð½Ñ‹Ðµ Ð½Ð° ÐºÐ°Ñ€Ñ‚Ð¸Ð½ÐºÐµ Ð²Ñ‹ÑˆÐµ.', 'ru', 'yum'),
('Please enter your login or email addres.', 'Perfavore inserisci il tuo username o l''indirizzo mail.', 'it', 'yum'),
('Please enter your login or email addres.', 'ÐŸÐ¾Ð¶Ð°Ð»ÑƒÐ¹ÑÑ‚Ð°, Ð²Ð²ÐµÐ´Ð¸Ñ‚Ðµ Ð’Ð°Ñˆ Ð»Ð¾Ð³Ð¸Ð½ Ð¸Ð»Ð¸ Ð°Ð´Ñ€ÐµÑ ÑÐ»ÐµÐºÑ‚Ñ€Ð¾Ð½Ð½Ð¾Ð¹ Ð¿Ð¾Ñ‡Ñ‚Ñ‹.', 'ru', 'yum'),
('Please enter your login or email address.', 'Bitte geben Sie Ihren Benutzernamen oder E-Mail-Adresse ein.', 'de', 'yum'),
('Please enter your login or email address.', 'Por favor escribe tu nombre de usuario o dirección de e-mail.', 'es', 'yum'),
('Please enter your login or email address.', 'Indiquez dans ce champ, votre nom d utilisateur ou votre adresse e-mail.', 'fr', 'yum'),
('Please enter your login or email address.', 'Inserisci il tuo nome utente o indirizzo e-mail.', 'it', 'yum'),
('Please enter your login or email address.', 'Bitte geben Sie Ihren Benutzernamen oder E-Mail-Adresse ein.', 'pl', 'yum'),
('Please enter your password to confirm deletion:', 'Bitte geben Sie Ihr Passwort ein, um den Löschvorgang zu bestätigen:', 'de', 'yum'),
('Please enter your password to confirm deletion:', 'Por favor escribe tu contraseña para confirmar la eliminación:', 'es', 'yum'),
('Please enter your password to confirm deletion:', 'Renseignez votre mot de passe, pour confirmer la suppression:', 'fr', 'yum'),
('Please enter your password to confirm deletion:', 'Si prega di inserire la password per confermare l''eliminazione:', 'it', 'yum'),
('Please enter your password to confirm deletion:', 'ProszÄ™ wprowadÅº swoje hasÅ‚o w celu potwierdzenia usuwania:', 'pl', 'yum'),
('Please enter your user name or email address.', 'Bitte geben Sie Ihren Benutzernamen oder E-mail Adresse ein', 'de', 'yum'),
('Please enter your user name or email address.', 'Renseignez votre nom d utilisateur ou votre adresse e-mail', 'fr', 'yum'),
('Please enter your user name or email address.', 'Inserisci il tuo nome utente o indirizzo e-mail', 'it', 'yum'),
('Please fill out the following form with your login credentials:', 'Bitte geben Sie ihre Login-Daten ein:', 'de', 'yum'),
('Please fill out the following form with your login credentials:', 'Por favor llena el formulario con tu información de inicio de sesión:', 'es', 'yum'),
('Please fill out the following form with your login credentials:', 'Entrez dans le champ vos donnÃ©es de connection:', 'fr', 'yum'),
('Please fill out the following form with your login credentials:', 'Perfavore inserisci le tue credenziali d''accesso:', 'it', 'yum'),
('Please fill out the following form with your login credentials:', 'Bitte geben Sie ihre Login-Daten ein:', 'pl', 'yum'),
('Please fill out the following form with your login credentials:', 'ÐŸÐ¾Ð¶Ð°Ð»ÑƒÐ¹ÑÑ‚Ð°, Ð·Ð°Ð¿Ð¾Ð»Ð½Ð¸Ñ‚Ðµ ÑÐ»ÐµÐ´ÑƒÑŽÑ‰ÑƒÑŽ Ñ„Ð¾Ñ€Ð¼Ñƒ Ñ Ð²Ð°ÑˆÐ¸Ð¼Ð¸ Ð›Ð¾Ð³Ð¸Ð½ Ð¸ Ð¿Ð°Ñ€Ð¾Ð»ÐµÐ¼:', 'ru', 'yum'),
('Please log in into the application.', 'Por favor, entra a la aplicación', 'es', 'yum'),
('Please verify your E-Mail address', 'Por favor verifica tu dirección de correo', 'es', 'yum'),
('Position', 'Position', 'de', 'yum'),
('Position', 'Posición', 'es', 'yum'),
('Position', 'Position', 'fr', 'yum'),
('Position', 'Posizioe', 'it', 'yum'),
('Position', 'ÐŸÐ¾Ð·Ð¸Ñ†Ð¸Ñ', 'ru', 'yum'),
('Predefined values (example: 1, 2, 3, 4, 5;).', 'Vordefinierter Bereich (z.B. 1, 2, 3, 4, 5),', 'de', 'yum'),
('Predefined values (example: 1, 2, 3, 4, 5;).', 'Valores predefinidos (ejemplo: 1,2,3,4,5;).', 'es', 'yum'),
('Predefined values (example: 1, 2, 3, 4, 5;).', 'Valeur prÃ©dÃ©finie (z.B. 1, 2, 3, 4, 5),', 'fr', 'yum'),
('Predefined values (example: 1, 2, 3, 4, 5;).', 'Valori predefiniti (es. 1, 2, 3, 4, 5),', 'it', 'yum'),
('Predefined values (example: 1, 2, 3, 4, 5;).', 'ÐŸÑ€ÐµÐ´Ð¾Ð¿Ñ€ÐµÐ´ÐµÐ»ÐµÐ½Ð½Ñ‹Ðµ Ð·Ð½Ð°Ñ‡ÐµÐ½Ð¸Ñ (Ð¿Ñ€Ð¸Ð¼ÐµÑ€: 1;2;3;4;5;).', 'ru', 'yum'),
('Preseve Profiles', 'Profile aufbewahren', 'de', 'yum'),
('Preseve Profiles', 'Preservar Perfiles', 'es', 'yum'),
('Preseve Profiles', 'Profile aufbewahren ???', 'fr', 'yum'),
('Preseve Profiles', 'Mantieni profili', 'it', 'yum'),
('Preseve Profiles', 'Zachowaj profil', 'pl', 'yum'),
('Price', 'Preis', 'de', 'yum'),
('Price', 'Prix', 'fr', 'yum'),
('Price', 'Prezzo', 'it', 'yum'),
('Privacy', 'Privatsphäre', 'de', 'yum'),
('Privacy', 'Privacidad', 'es', 'yum'),
('Privacy', 'DonnÃ©es privÃ©es', 'fr', 'yum'),
('Privacy', 'Privacy', 'it', 'yum'),
('Privacy', 'PrivatsphÃ¤re', 'pl', 'yum'),
('Privacy settings', 'Privatsphäre', 'de', 'yum'),
('Privacy settings', 'Configuración de Privacidad', 'es', 'yum'),
('Privacy settings', 'Vos donnÃ©es personnelles', 'fr', 'yum'),
('Privacy settings', 'Privacy', 'it', 'yum'),
('Privacy settings for {username}', 'Privatsphäreneinstellungen für {username}', 'de', 'yum'),
('Privacy settings for {username}', 'Configuración de Privacidad para {username}', 'es', 'yum'),
('Privacy settings for {username}', 'Configuration des donnÃ©es privÃ©es pour {username}', 'fr', 'yum'),
('Privacy settings for {username}', 'Opzioni Privacy per {username}', 'it', 'yum'),
('Privacysettings', 'Privatsphäre', 'de', 'yum'),
('Privacysettings', 'Configuración de Privacidad', 'es', 'yum'),
('Privacysettings', 'DonnÃ©es privÃ©es', 'fr', 'yum'),
('Privacysettings', 'Opzioni privacy', 'it', 'yum'),
('Profile', 'Profil', 'de', 'yum'),
('Profile', 'Perfil', 'es', 'yum'),
('Profile', 'Profil', 'fr', 'yum'),
('Profile', 'Profilo', 'it', 'yum'),
('Profile', 'Profil', 'pl', 'yum'),
('Profile', 'ÐŸÑ€Ð¾Ñ„Ð¸Ð»ÑŒ', 'ru', 'yum'),
('Profile Comments', 'Pinnwand', 'de', 'yum'),
('Profile Comments', 'COmentarios de perfil', 'es', 'yum'),
('Profile Comments', 'Pinnwand', 'fr', 'yum'),
('Profile Comments', 'Commenti profilo', 'it', 'yum'),
('Profile Fields', 'Profilfelder', 'de', 'yum'),
('Profile Fields', 'Campos de Perfil', 'es', 'yum'),
('Profile Fields', 'Champs des profils', 'fr', 'yum'),
('Profile Fields', 'Campi profilo', 'it', 'yum'),
('Profile Fields', 'Pola profilu', 'pl', 'yum'),
('Profile Fields', 'ÐŸÐ¾Ð»Ñ Ð¿Ñ€Ð¾Ñ„Ð¸Ð»Ñ', 'ru', 'yum'),
('Profile field groups', 'Profilfeldgruppen', 'de', 'yum'),
('Profile field groups', 'Grupos de campos de perfil', 'es', 'yum'),
('Profile field groups', 'Champs des profils de groupes.', 'fr', 'yum'),
('Profile field groups', 'Campo profilo gruppi', 'it', 'yum'),
('Profile field public options', 'Einstellungen der Profilfelder', 'de', 'yum'),
('Profile field public options', 'Configuration des champs publique du profil', 'fr', 'yum'),
('Profile field public options', 'Opzioni pubbliche campi profilo', 'it', 'yum'),
('Profile field {fieldname}', 'Profilfeld {fieldname}', 'de', 'yum'),
('Profile field {fieldname}', 'Campo de perfil {fieldname}', 'es', 'yum'),
('Profile field {fieldname}', 'Camp de profil {fieldname}', 'fr', 'yum'),
('Profile field {fieldname}', '{fieldname} campo profilo', 'it', 'yum'),
('Profile field {fieldname}', 'Pole profilu {fieldname}', 'pl', 'yum'),
('Profile fields', 'Profilfeldverwaltung', 'de', 'yum'),
('Profile fields', 'Campos de perfil', 'es', 'yum'),
('Profile fields', 'Gestion des champs de profils', 'fr', 'yum'),
('Profile fields', 'Campi profilo', 'it', 'yum'),
('Profile fields', 'Pole profilu', 'pl', 'yum'),
('Profile fields groups', 'Profilfeldgruppen', 'de', 'yum'),
('Profile fields groups', 'Grupos de campos de perfil', 'es', 'yum'),
('Profile fields groups', 'Champ des profils de groupes', 'fr', 'yum'),
('Profile fields groups', 'Campi profilo gruppi', 'it', 'yum'),
('Profile fields groups', 'Grupy pÃ³l w profilu', 'pl', 'yum'),
('Profile history', 'Profilverlauf', 'de', 'yum'),
('Profile history', 'Historial del perfil', 'es', 'yum'),
('Profile history', 'Chronique du profil', 'fr', 'yum'),
('Profile history', 'Storico profilo', 'it', 'yum'),
('Profile history', 'Historia profilu', 'pl', 'yum'),
('Profile number', 'Profilnummer: ', 'de', 'yum'),
('Profile number', 'Número de perfil', 'es', 'yum'),
('Profile number', 'NumÃ©ro du profil: ', 'fr', 'yum'),
('Profile number', 'Numero profilo: ', 'it', 'yum'),
('Profile number', 'Numer profilu: ', 'pl', 'yum'),
('Profile of ', 'Profil von ', 'de', 'yum'),
('Profile of ', 'Perfil de', 'es', 'yum'),
('Profile of ', 'Profil de ', 'fr', 'yum'),
('Profile of ', 'Profilo di ', 'it', 'yum'),
('Profile visits', 'Profilbesuche', 'de', 'yum'),
('Profile visits', 'Visiteurs de mon profil', 'fr', 'yum'),
('Profile visits', 'Visite profilo', 'it', 'yum'),
('Profiles', 'Profile', 'de', 'yum'),
('Profiles', 'Perfiles', 'es', 'yum'),
('Profiles', 'Profiles', 'fr', 'yum'),
('Profiles', 'Profili', 'it', 'yum'),
('Profiles', 'Profile', 'pl', 'yum'),
('Range', 'Bereich', 'de', 'yum'),
('Range', 'Rango', 'es', 'yum'),
('Range', 'Intervallo', 'it', 'yum'),
('Range', 'Ð ÑÐ´ Ð·Ð½Ð°Ñ‡ÐµÐ½Ð¸Ð¹', 'ru', 'yum'),
('Read Only Profiles', 'Nur-Lese Profile', 'de', 'yum'),
('Read Only Profiles', 'Perfiles de Sólo Lectura', 'es', 'yum'),
('Read Only Profiles', 'Lecture seule des profil', 'fr', 'yum'),
('Read Only Profiles', 'Profilo sola lettura', 'it', 'yum'),
('Read Only Profiles', 'Profile tylko do odczytu', 'pl', 'yum'),
('Receive a Email for new Friendship request', 'E-Mail Benachrichtigung bei neuer Kontaktanfrage', 'de', 'yum'),
('Receive a Email for new Friendship request', 'Recibir un correo cuando recibas una nueva solicitud de amistad', 'es', 'yum'),
('Receive a Email for new Friendship request', 'Informez moi par e-mail pour les nouvelles demandes de contact.', 'fr', 'yum'),
('Receive a Email for new Friendship request', 'Email di notifica per nuovo contatto', 'it', 'yum'),
('Receive a Email when a new profile comment was made', 'E-Mail Benachrichtigung bei Profilkommentar', 'de', 'yum'),
('Receive a Email when a new profile comment was made', 'Recibir un correo cuando comenten en tu perfil', 'es', 'yum'),
('Receive a Email when a new profile comment was made', 'Informez moi par e-mail e-mail pour les nouveaux commentaire de mon profil ', 'fr', 'yum'),
('Receive a Email when a new profile comment was made', 'Email di notifica per nuovo commento al profilo', 'it', 'yum'),
('Receive a Email when new Message arrives', 'E-Mail Benachrichtigung bei neuer interner Nachricht', 'de', 'yum'),
('Receive a Email when new Message arrives', 'Recibir un correo cuanto te llegue un nuevo mensaje', 'es', 'yum'),
('Receive a Email when new Message arrives', 'Informez moi par e-mail pour les nouveaux messages. ', 'fr', 'yum'),
('Receive a Email when new Message arrives', 'Email di notifica per i nuovi messaggi', 'it', 'yum'),
('Registered users', 'Registrierte Benutzer', 'de', 'yum'),
('Registered users', 'Usuarios registrados', 'es', 'yum'),
('Registered users', 'Membre enregistrÃ©', 'fr', 'yum'),
('Registered users', 'Utenti registrati', 'it', 'yum'),
('Registered users', 'Ð—Ð°Ñ€ÐµÐ³Ð¸ÑÑ‚Ñ€Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð½Ñ‹Ðµ Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»Ð¸', 'ru', 'yum'),
('Registration', 'Registrierung', 'de', 'yum'),
('Registration', 'Registro', 'es', 'yum'),
('Registration', 'Inscription', 'fr', 'yum'),
('Registration', 'Reistrazione', 'it', 'yum'),
('Registration', 'Rejestracja', 'pl', 'yum'),
('Registration', 'Ð ÐµÐ³Ð¸ÑÑ‚Ñ€Ð°Ñ†Ð¸Ñ', 'ru', 'yum'),
('Registration date', 'Anmeldedatum', 'de', 'yum'),
('Registration date', 'Fecha de registro', 'es', 'yum'),
('Registration date', 'Date d inscription', 'fr', 'yum'),
('Registration date', 'Data registrazione', 'it', 'yum'),
('Registration date', 'Anmeldedatum', 'pl', 'yum'),
('Registration date', 'Ð”Ð°Ñ‚Ð° Ñ€ÐµÐ³Ð¸ÑÑ‚Ñ€Ð°Ñ†Ð¸Ð¸', 'ru', 'yum'),
('Regular expression (example: ''/^[A-Za-z0-9s,]+$/u'').', 'Regulärer Ausdruck (z. B.: ''/^[A-Za-z0-9s,]+$/u'')', 'de', 'yum'),
('Regular expression (example: ''/^[A-Za-z0-9s,]+$/u'').', 'Expresión regular (ejemplo: ''/^[A-Za-z0-9s,]+$/u'')', 'es', 'yum'),
('Regular expression (example: ''/^[A-Za-z0-9s,]+$/u'').', 'Expression regulaire (exemple.: ''/^[A-Za-z0-9s,]+$/u'')', 'fr', 'yum'),
('Regular expression (example: ''/^[A-Za-z0-9s,]+$/u'').', 'Espressione regolare (esempio: ''/^[A-Za-z0-9s,]+$/u'')', 'it', 'yum'),
('Regular expression (example: ''/^[A-Za-z0-9s,]+$/u'').', 'Ð ÐµÐ³ÑƒÐ»ÑÑ€Ð½Ñ‹Ðµ Ð²Ñ‹Ñ€Ð°Ð¶ÐµÐ½Ð¸Ñ (Ð¿Ñ€Ð¸Ð¼ÐµÑ€: ''/^[A-Za-z0-9s,]+$/u'')', 'ru', 'yum'),
('Remember me net time', 'ZapamiÄ™taj mnie nastÄ™pnym razem', 'pl', 'yum'),
('Remember me next time', 'Angemeldet bleiben', 'de', 'yum'),
('Remember me next time', 'Recordarme la próxima vez', 'es', 'yum'),
('Remember me next time', 'Rester connectÃ©', 'fr', 'yum'),
('Remember me next time', 'Ricordami', 'it', 'yum'),
('Remember me next time', 'Ð—Ð°Ð¿Ð¾Ð¼Ð½Ð¸Ñ‚ÑŒ Ð¼ÐµÐ½Ñ', 'ru', 'yum'),
('Remove', 'Entfernen', 'de', 'yum'),
('Remove', 'Supprimer', 'fr', 'yum'),
('Remove', 'Rimuovi', 'it', 'yum'),
('Remove Avatar', 'Profilbild entfernen', 'de', 'yum'),
('Remove Avatar', 'Borrar este Avatar', 'es', 'yum'),
('Remove Avatar', 'Supprimer l image de profil', 'fr', 'yum'),
('Remove Avatar', 'Rimuovi avatar', 'it', 'yum'),
('Remove comment', 'Kommentar entfernen', 'de', 'yum'),
('Remove comment', 'Borrar comentario', 'es', 'yum'),
('Remove comment', 'Supprimer ce commentaire', 'fr', 'yum'),
('Remove comment', 'Rimuovi commento', 'it', 'yum'),
('Remove friend', 'Freundschaft kündigen', 'de', 'yum'),
('Remove friend', 'Borrar amigo', 'es', 'yum'),
('Remove friend', 'Supprimer ce contact de ma liste', 'fr', 'yum'),
('Remove friend', 'Rimuovi contatto', 'it', 'yum'),
('Reply', 'Antwort', 'de', 'yum'),
('Reply', 'Responder', 'es', 'yum'),
('Reply', 'RÃ©pondre', 'fr', 'yum'),
('Reply', 'Rispondi', 'it', 'yum'),
('Reply', 'Odpowiedz', 'pl', 'yum'),
('Reply to Message', 'auf diese Nachricht antworten', 'de', 'yum'),
('Reply to Message', 'Responder al Mensaje', 'es', 'yum'),
('Reply to Message', 'RÃ©pondre Ã  ce message', 'fr', 'yum'),
('Reply to Message', 'Rispondi al messaggio', 'it', 'yum'),
('Reply to Message', 'Odpowiedz', 'pl', 'yum'),
('Reply to message', 'Responder al mensaje', 'es', 'yum'),
('Reply to message', 'Rispondi al messaggio', 'it', 'yum'),
('Request friendship for user {username}', 'Kontaktanfrage für {username}', 'de', 'yum'),
('Request friendship for user {username}', 'Solicitar amistar al usuario {username}', 'es', 'yum'),
('Request friendship for user {username}', 'Demande de contact pour {username}', 'fr', 'yum'),
('Request friendship for user {username}', 'Richiesta contatto per {username}', 'it', 'yum'),
('Required', 'Benötigt', 'de', 'yum'),
('Required', 'Requerido', 'es', 'yum'),
('Required', 'Recquis', 'fr', 'yum'),
('Required', 'Obbligatorio', 'it', 'yum'),
('Required', 'ÐžÐ±ÑÐ·Ð°Ñ‚ÐµÐ»ÑŒÐ½Ð¾ÑÑ‚ÑŒ', 'ru', 'yum'),
('Required field (form validator).', 'Campo obbligatorio (validazione form).', 'it', 'yum'),
('Required field (form validator).', 'ÐžÐ±ÑÐ·Ð°Ñ‚ÐµÐ»ÑŒÐ½Ð¾Ðµ Ð¿Ð¾Ð»Ðµ (Ð¿Ñ€Ð¾Ð²ÐµÑ€ÐºÐ° Ñ„Ð¾Ñ€Ð¼Ñ‹).', 'ru', 'yum'),
('Restore', 'Wiederherstellen', 'de', 'yum'),
('Restore', 'Recuperar', 'es', 'yum'),
('Restore', 'Restaurer', 'fr', 'yum'),
('Restore', 'Ripristino', 'it', 'yum'),
('Restore', 'Wiederherstellen', 'pl', 'yum'),
('Restore', 'Ð’Ð¾ÑÑÑ‚Ð°Ð½Ð¾Ð²Ð¸Ñ‚ÑŒ', 'ru', 'yum'),
('Retype Password', 'ÐŸÐ¾Ð²Ñ‚Ð¾Ñ€Ð¸Ñ‚Ðµ Ð¿Ð°Ñ€Ð¾Ð»ÑŒ', 'ru', 'yum'),
('Retype Password is incorrect.', 'ÐŸÐ°Ñ€Ð¾Ð»Ð¸ Ð½Ðµ ÑÐ¾Ð²Ð¿Ð°Ð´Ð°ÑŽÑ‚.', 'ru', 'yum'),
('Retype password', 'Passwort wiederholen', 'de', 'yum'),
('Retype password', 'Repite la contraseña', 'es', 'yum'),
('Retype password', 'Redonnez votre mot de passe', 'fr', 'yum'),
('Retype password', 'Conferma password', 'it', 'yum'),
('Retype password', 'Passwort wiederholen', 'pl', 'yum'),
('Retype password is incorrect.', 'Wiederholtes Passwort ist falsch.', 'de', 'yum'),
('Retype password is incorrect.', 'Contraseña repetida incorrecta', 'es', 'yum'),
('Retype password is incorrect.', 'Le mot de passe est a nouveau incorrect.', 'fr', 'yum'),
('Retype password is incorrect.', 'Conferma password Ã¨ errata.', 'it', 'yum'),
('Retype password is incorrect.', 'Wiederholtes Passwort ist falsch.', 'pl', 'yum'),
('Retype your new password', 'Wiederholen Sie Ihr neues Passwort', 'de', 'yum'),
('Retype your new password', 'Confirmez votre nouveau mot de passe', 'fr', 'yum'),
('Retype your new password', 'Confermare la nuova password', 'it', 'yum'),
('Retyped password is incorrect', 'Wiederholtes Passwort ist nicht identisch', 'de', 'yum'),
('Retyped password is incorrect', 'Le mot de passe renseignÃ© n est pas identique au prÃ©cÃ©dent', 'fr', 'yum'),
('Retyped password is incorrect', 'Password di conferma non identica', 'it', 'yum'),
('Role Administration', 'Rollenverwaltung', 'de', 'yum'),
('Role Administration', 'Administración de rol', 'es', 'yum'),
('Role Administration', 'Gestion des rÃ´les', 'fr', 'yum'),
('Role Administration', 'Gestione dei ruoli', 'it', 'yum'),
('Role Administration', 'ZarzÄ…dzanie rolami', 'pl', 'yum'),
('Roles', 'Rollen', 'de', 'yum'),
('Roles', 'Roles', 'es', 'yum'),
('Roles', 'RÃ´les', 'fr', 'yum'),
('Roles', 'Ruoli', 'it', 'yum'),
('Roles', 'Role', 'pl', 'yum'),
('Roles / Access control', 'Rollen / Zugangskontrolle', 'de', 'yum'),
('Save', 'Sichern', 'de', 'yum'),
('Save', 'Guardar', 'es', 'yum'),
('Save', 'MÃ©moriser', 'fr', 'yum'),
('Save', 'Salva', 'it', 'yum'),
('Save', 'Sichern', 'pl', 'yum'),
('Save', 'Ð¡Ð¾Ñ…Ñ€Ð°Ð½Ð¸Ñ‚ÑŒ', 'ru', 'yum'),
('Save payment type', 'Zahlungsart speichern', 'de', 'yum'),
('Save payment type', 'Salva tipo pagamento', 'it', 'yum'),
('Save profile changes', 'Profiländerungen speichern', 'de', 'yum'),
('Save profile changes', 'Salva modifiche profilo', 'it', 'yum'),
('Save role', 'Rolle speichern', 'de', 'yum'),
('Save role', 'MÃ©moriser ce rÃ´le', 'fr', 'yum'),
('Save role', 'Salva ruolo', 'it', 'yum'),
('Search for username', 'Suche nach Benutzer', 'de', 'yum'),
('Search for username', 'Recherche par nom d''utilisateur', 'fr', 'yum'),
('Search for username', 'Cerca per username', 'it', 'yum'),
('Searchable', 'Suchbar', 'de', 'yum'),
('Searchable', 'visible', 'fr', 'yum'),
('Searchable', 'Ricercabile', 'it', 'yum'),
('Select a month', 'Monatsauswahl', 'de', 'yum'),
('Select a month', 'Seleziona un mese', 'it', 'yum'),
('Select multiple recipients by holding the CTRL key', 'Wählen Sie mehrere Empfänger mit der STRG-Taste aus', 'de', 'yum'),
('Select multiple recipients by holding the CTRL key', 'Selecciona varios destinatarios manteniendo presionada la tecla CTRL', 'es', 'yum'),
('Select multiple recipients by holding the CTRL key', 'Choix multiple en laissant la touche STRG de votre clavier enfoncÃ©e', 'fr', 'yum'),
('Select multiple recipients by holding the CTRL key', 'Seleziona destinatari multipli con il tasto CTRL', 'it', 'yum'),
('Select the fields that should be public', 'Diese Felder sind öffentlich einsehbar', 'de', 'yum'),
('Select the fields that should be public', 'Ces champs sont publiques et seront visibles', 'fr', 'yum'),
('Select the fields that should be public', 'Scegli i campi da rendere publici', 'it', 'yum'),
('Selectable on registration', 'Während der Registrierung wählbar', 'de', 'yum'),
('Selectable on registration', 'Option Ã  selectionner au cours de l inscription', 'fr', 'yum'),
('Selectable on registration', 'Selezionabile durante la registrazione', 'it', 'yum'),
('Send', 'Senden', 'de', 'yum'),
('Send', 'Enviar', 'es', 'yum'),
('Send', 'Envoyer', 'fr', 'yum'),
('Send', 'Invia', 'it', 'yum'),
('Send', 'Senden', 'pl', 'yum'),
('Send a message to this User', 'Diesem Benutzer eine Nachricht senden', 'de', 'yum'),
('Send a message to this User', 'Enviar un mensaje a este Usuario', 'es', 'yum'),
('Send a message to this User', 'Faire parvenir un message Ã  ce membre', 'fr', 'yum');
INSERT INTO `translation` (`message`, `translation`, `language`, `category`) VALUES
('Send a message to this User', 'Invia messaggio all''utente', 'it', 'yum'),
('Send invitation', 'Kontaktanfrage senden', 'de', 'yum'),
('Send invitation', 'Enviar invitación', 'es', 'yum'),
('Send invitation', 'Envoyer la demande de contact', 'fr', 'yum'),
('Send invitation', 'Kontaktanfrage senden', 'it', 'yum'),
('Send message notifier emails', 'Benachrichtigungen schicken', 'de', 'yum'),
('Send message notifier emails', 'Enviar mensaje de e-mail de notificación', 'es', 'yum'),
('Send message notifier emails', 'Envoie d une notification', 'fr', 'yum'),
('Send message notifier emails', 'Notifiche e-mail', 'it', 'yum'),
('Sent at', 'Gesendet am', 'de', 'yum'),
('Sent at', 'Enviado al', 'es', 'yum'),
('Sent at', 'ENvoyÃ© le', 'fr', 'yum'),
('Sent at', 'Pubblicato il', 'it', 'yum'),
('Sent at', 'WysÅ‚ano', 'pl', 'yum'),
('Sent messages', 'Gesendete Nachrichten', 'de', 'yum'),
('Sent messages', 'Mensajes enviados', 'es', 'yum'),
('Sent messages', 'Message envoyÃ©', 'fr', 'yum'),
('Sent messages', 'Messaggi inviati', 'it', 'yum'),
('Sent messages', 'WysÅ‚ane wiadomoÅ›ci', 'pl', 'yum'),
('Separate usernames with comma to ignore specified users', 'Benutzernamen mit Komma trennen, um sie zu ignorieren', 'de', 'yum'),
('Separate usernames with comma to ignore specified users', 'Separa con coma los nombres de los usuarios que deseas ignorar', 'es', 'yum'),
('Separate usernames with comma to ignore specified users', 'Ma liste noire, pour introduire plusieurs membres en une seule fois, sÃ©parer les noms d utilisateur avec une virgule', 'fr', 'yum'),
('Separate usernames with comma to ignore specified users', 'Separa gli username con una virgola, per ignorare gli utenti specificati', 'it', 'yum'),
('Set payment date to today', 'Zahlungseingang bestätigen', 'de', 'yum'),
('Set payment date to today', 'Imposta data pagamento ad oggi', 'it', 'yum'),
('Settings', 'Einstellungen', 'de', 'yum'),
('Settings', 'Ajustes', 'es', 'yum'),
('Settings', 'RÃ©glage', 'fr', 'yum'),
('Settings', 'Impostazioni', 'it', 'yum'),
('Settings', 'Ustawienia', 'pl', 'yum'),
('Settings profiles', 'Einstellungsprofile', 'de', 'yum'),
('Settings profiles', 'Ajustes de perfiles', 'es', 'yum'),
('Settings profiles', 'RÃ©glages des profiles', 'fr', 'yum'),
('Settings profiles', 'Impostazioni profili', 'it', 'yum'),
('Settings profiles', 'Ustawienia profili', 'pl', 'yum'),
('Show activities', 'Zeige Aktivitäten', 'de', 'yum'),
('Show activities', 'Voir la chronique des activitÃ©s', 'fr', 'yum'),
('Show activities', 'Mostra attivitÃ ', 'it', 'yum'),
('Show administration Hierarchy', 'Hierarchie', 'de', 'yum'),
('Show administration Hierarchy', 'Mostrar jerarquía de administración', 'es', 'yum'),
('Show administration Hierarchy', 'Hierarchie', 'fr', 'yum'),
('Show administration Hierarchy', 'Gerarchia', 'it', 'yum'),
('Show administration Hierarchy', 'PokaÅ¼ hierarchiÄ™ administrowania', 'pl', 'yum'),
('Show all', 'Mostra tutti', 'it', 'yum'),
('Show friends', 'Kontaktliste veröffentlichen', 'de', 'yum'),
('Show friends', 'Mostrar amigos', 'es', 'yum'),
('Show friends', 'REndre ma liste de contacts visible', 'fr', 'yum'),
('Show friends', 'Mostra contatti', 'it', 'yum'),
('Show my online status to everyone', 'Meinen Online-Status veröffentlichen', 'de', 'yum'),
('Show my online status to everyone', 'Montrer lorsque je suis en ligne', 'fr', 'yum'),
('Show my online status to everyone', 'Mostra il mio stato a tutti', 'it', 'yum'),
('Show online status', 'Online-Status anzeigen', 'de', 'yum'),
('Show online status', 'Status en ligne visible', 'fr', 'yum'),
('Show online status', 'Mostra lo stato online', 'it', 'yum'),
('Show permissions', 'Berechtigungen anzeigen', 'de', 'yum'),
('Show permissions', 'Mostrar permisos', 'es', 'yum'),
('Show permissions', 'Montrer les permissions', 'fr', 'yum'),
('Show permissions', 'Mostra autorizzazioni', 'it', 'yum'),
('Show profile visits', 'Profilbesuche anzeigen', 'de', 'yum'),
('Show profile visits', 'Mostrar perfil de visitas', 'es', 'yum'),
('Show profile visits', 'Montrer les visites de profils', 'fr', 'yum'),
('Show profile visits', 'Visualizza visite profilo', 'it', 'yum'),
('Show roles', 'Rollen anzeigen', 'de', 'yum'),
('Show roles', 'Mostrar roles', 'es', 'yum'),
('Show roles', 'Voir les rÃ´les', 'fr', 'yum'),
('Show roles', 'Mostra ruoli', 'it', 'yum'),
('Show roles', 'PokaÅ¼ role', 'pl', 'yum'),
('Show the owner when i visit his profile', 'Dem Profileigentümer erkenntlich machen, wenn ich sein Profil besuche', 'de', 'yum'),
('Show the owner when i visit his profile', 'Montrer aux propriÃ©taires des profils lorsque je consulte leur profil', 'fr', 'yum'),
('Show the owner when i visit his profile', 'Mostra al proprietario quando visito il suo profilo', 'it', 'yum'),
('Show users', 'Benutzer anzeigen', 'de', 'yum'),
('Show users', 'Mostrar usuarios', 'es', 'yum'),
('Show users', 'Voir les membres', 'fr', 'yum'),
('Show users', 'Mostra utenti', 'it', 'yum'),
('Show users', 'PokaÅ¼ uÅ¼ytkownikow', 'pl', 'yum'),
('Statistics', 'Benutzerstatistik', 'de', 'yum'),
('Statistics', 'Estadísticas', 'es', 'yum'),
('Statistics', 'Statistiques des membres', 'fr', 'yum'),
('Statistics', 'Statistiche', 'it', 'yum'),
('Statistics', 'Statystyki', 'pl', 'yum'),
('Status', 'Status', 'de', 'yum'),
('Status', 'Estado', 'es', 'yum'),
('Status', 'Status', 'fr', 'yum'),
('Status', 'Stato', 'it', 'yum'),
('Status', 'Status', 'pl', 'yum'),
('Status', 'Ð¡Ñ‚Ð°Ñ‚ÑƒÑ', 'ru', 'yum'),
('Street', 'Straße', 'de', 'yum'),
('Street', 'Calle', 'es', 'yum'),
('Street', 'Rue', 'fr', 'yum'),
('Street', 'Indirizzo', 'it', 'yum'),
('Street', 'Ulica', 'pl', 'yum'),
('Subject', 'Titel', 'de', 'yum'),
('Subject', 'Sujet', 'fr', 'yum'),
('Subject', 'Oggetto', 'it', 'yum'),
('Success', 'Erfolgreich', 'de', 'yum'),
('Success', 'Exitoso', 'es', 'yum'),
('Success', 'RÃ©ussi', 'fr', 'yum'),
('Success', 'Successo', 'it', 'yum'),
('Superuser', 'Superuser', 'de', 'yum'),
('Superuser', 'Superusuario', 'es', 'yum'),
('Superuser', 'Superuser', 'fr', 'yum'),
('Superuser', 'Superuser', 'it', 'yum'),
('Superuser', 'Superuser', 'pl', 'yum'),
('Superuser', 'Ð¡ÑƒÐ¿ÐµÑ€ Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»ÑŒ', 'ru', 'yum'),
('Text Email Activation', 'Text Email Konto-Aktivierung', 'de', 'yum'),
('Text Email Activation', 'Texto de activación por correo', 'es', 'yum'),
('Text Email Activation', 'Texte contenu dans l e-mail d activation de compte', 'fr', 'yum'),
('Text Email Activation', 'Testo email d''attivazione account', 'it', 'yum'),
('Text Email Recovery', 'Text E-Mail Passwort wiederherstellen', 'de', 'yum'),
('Text Email Recovery', 'Texto de recuperación de contraseña por correo', 'es', 'yum'),
('Text Email Recovery', 'Texte contenu dans l e-Mail de renouvellement de mot de passe', 'fr', 'yum'),
('Text Email Recovery', 'Testo email recupero password', 'it', 'yum'),
('Text Email Registration', 'Text E-Mail Registrierung', 'de', 'yum'),
('Text Email Registration', 'Texto de registro por correo', 'es', 'yum'),
('Text Email Registration', 'Texte contenu dans l e-Mail d enregistrement', 'fr', 'yum'),
('Text Email Registration', 'Testo email di registrazione', 'it', 'yum'),
('Text Login Footer', 'Text im Login-footer', 'de', 'yum'),
('Text Login Footer', 'Text im Login-footer', 'es', 'yum'),
('Text Login Footer', 'Text im Login-footer', 'fr', 'yum'),
('Text Login Footer', 'Testo nel piepagina del login', 'it', 'yum'),
('Text Login Header', 'Text im Login-header', 'de', 'yum'),
('Text Login Header', 'Text im Login-header', 'es', 'yum'),
('Text Login Header', 'Texte de connection-header', 'fr', 'yum'),
('Text Login Header', 'Testo nell''intestazione del login', 'it', 'yum'),
('Text Registration Footer', 'Text im Registrierung-footer', 'de', 'yum'),
('Text Registration Footer', 'Text im Registrierung-footer', 'es', 'yum'),
('Text Registration Footer', 'Texte d enregistrement-footer', 'fr', 'yum'),
('Text Registration Footer', 'Testo nel piepagina della registrazione', 'it', 'yum'),
('Text Registration Header', 'Text im Registrierung-header', 'de', 'yum'),
('Text Registration Header', 'Text im Registrierung-header', 'es', 'yum'),
('Text Registration Header', 'Texte d enregistrement-header', 'fr', 'yum'),
('Text Registration Header', 'Testo nell''intestazione della registrazione', 'it', 'yum'),
('Text for new friendship request', 'Text für eine neue Kontaktanfrage', 'de', 'yum'),
('Text for new friendship request', 'Text für eine neue Kontaktanfrage', 'es', 'yum'),
('Text for new friendship request', 'Texte pour une nouvelle demande de contact', 'fr', 'yum'),
('Text for new friendship request', 'Testo per una nuova richiesta di contatto', 'it', 'yum'),
('Text for new profile comment', 'Text für neuen Profilkommentar', 'de', 'yum'),
('Text for new profile comment', 'Text für neuen Profilkommentar', 'es', 'yum'),
('Text for new profile comment', 'Texte pour un nouveau commentaire dans un profil', 'fr', 'yum'),
('Text for new profile comment', 'Testo per un nuovo commento al profilo', 'it', 'yum'),
('Text translations', 'Übersetzungstexte', 'de', 'yum'),
('Thank you for your registration. Contact Admin to activate your account.', 'Grazie per la tua registrazione. Contatta l''ammnistratore per attivare l''account', 'it', 'yum'),
('Thank you for your registration. Please check your email or login.', 'Vielen Dank für Ihre Anmeldung. Bitte überprüfen Sie Ihre E-Mails oder loggen Sie sich ein.', 'de', 'yum'),
('Thank you for your registration. Please check your email or login.', 'Merci pour votre inscription.Controlez votre boite e-mail, le code d activation de votre compte vous a Ã©tÃ© envoyÃ© par e-mail.Attention! Par mesure de sÃ©curitÃ©, le lien contenu dans ce mail, n est valable que 48h *IMPORTANT:pour le cas ou notre e-mail', 'fr', 'yum'),
('Thank you for your registration. Please check your email or login.', 'Grazie per la tua registrazione, controlla la tua email o effettua il login,', 'it', 'yum'),
('Thank you for your registration. Please check your email or login.', 'Vielen Dank fÃ¼r Ihre Anmeldung. Bitte Ã¼berprÃ¼fen Sie Ihre E-Mails oder loggen Sie sich ein.', 'pl', 'yum'),
('Thank you for your registration. Please check your email or login.', 'Ð ÐµÐ³Ð¸ÑÑ‚Ñ€Ð°Ñ†Ð¸Ñ Ð·Ð°Ð²ÐµÑ€ÑˆÐµÐ½Ð°. ÐŸÐ¾Ð¶Ð°Ð»ÑƒÐ¹ÑÑ‚Ð° Ð¿Ñ€Ð¾Ð²ÐµÑ€ÑŒÑ‚Ðµ ÑÐ²Ð¾Ð¹ ÑÐ»ÐµÐºÑ‚Ñ€Ð¾Ð½Ð½Ñ‹Ð¹ ÑÑ‰Ð¸Ðº Ð¸Ð»Ð¸ Ð²Ñ‹Ð¿Ð¾Ð»Ð½Ð¸Ñ‚Ðµ Ð²Ñ…Ð¾Ð´.', 'ru', 'yum'),
('Thank you for your registration. Please check your email.', 'Vielen Dank für Ihre Anmeldung. Bitte überprüfen Sie Ihre E-Mails.', 'de', 'yum'),
('Thank you for your registration. Please check your email.', 'Gracias por su registro. Por favor revise su email.', 'es', 'yum'),
('Thank you for your registration. Please check your email.', 'Merci pour votre inscription.Controlez votre boite e-mail, le code d activation de votre compte vous a Ã©tÃ© envoyÃ© par e-mail. *IMPORTANT:pour le cas ou notre e-mail ne vous serais pas parvenu, il est possible que notre e-mail ai Ã©tÃ© filtrÃ© par votre', 'fr', 'yum'),
('Thank you for your registration. Please check your email.', 'Grazie per la tua registrazione, controlla la tua email,', 'it', 'yum'),
('Thank you for your registration. Please check your email.', 'Vielen Dank fÃ¼r Ihre Anmeldung. Bitte Ã¼berprÃ¼fen Sie Ihre E-Mails.', 'pl', 'yum'),
('Thank you for your registration. Please check your email.', 'Ð ÐµÐ³Ð¸ÑÑ‚Ñ€Ð°Ñ†Ð¸Ñ Ð·Ð°Ð²ÐµÑ€ÑˆÐµÐ½Ð°. ÐŸÐ¾Ð¶Ð°Ð»ÑƒÐ¹ÑÑ‚Ð° Ð¿Ñ€Ð¾Ð²ÐµÑ€ÑŒÑ‚Ðµ ÑÐ²Ð¾Ð¹ ÑÐ»ÐµÐºÑ‚Ñ€Ð¾Ð½Ð½Ñ‹Ð¹ ÑÑ‰Ð¸Ðº.', 'ru', 'yum'),
('Thank you for your registration. Please {{login}}.', 'Grazie per la tua registrazone. Effettua il {{login}}.', 'it', 'yum'),
('The comment has been saved', 'Der Kommentar wurde gespeichert', 'de', 'yum'),
('The comment has been saved', 'Der Kommentar wurde gespeichert', 'es', 'yum'),
('The comment has been saved', 'Le commentaire a bien Ã©tÃ© mÃ©morisÃ©', 'fr', 'yum'),
('The comment has been saved', 'Il commento Ã¨ stato salvato', 'it', 'yum'),
('The file "{file}" is not an image.', 'Die Datei {file} ist kein Bild.', 'de', 'yum'),
('The file "{file}" is not an image.', 'Este archivo {file} no es una imagen.', 'es', 'yum'),
('The file "{file}" is not an image.', 'DLe fichier {file} n est pas un fichier image.', 'fr', 'yum'),
('The file "{file}" is not an image.', 'Il file {file} non Ã¨ un''immagine.', 'it', 'yum'),
('The friendship request has been sent', 'Die Kontaktanfrage wurde gesendet', 'de', 'yum'),
('The friendship request has been sent', 'Votre demande de contact Ã  bien Ã©tÃ© envoyÃ©e', 'fr', 'yum'),
('The friendship request has been sent', 'La richiesta di contatto Ã¨ stata inviata', 'it', 'yum'),
('The image "{file}" height should be "{height}px".', 'Die Datei {file} muss genau {height}px hoch sein.', 'de', 'yum'),
('The image "{file}" height should be "{height}px".', 'La imagen {file} debe tener {height}px de largo.', 'es', 'yum'),
('The image "{file}" height should be "{height}px".', 'La photo {file} doit avoir une hauteur maximum de {height}px .', 'fr', 'yum'),
('The image "{file}" height should be "{height}px".', 'L''immagine {file} deve essere {height}px.', 'it', 'yum'),
('The image "{file}" width should be "{width}px".', 'Die Datei {file} muss genau {width}px breit sein.', 'de', 'yum'),
('The image "{file}" width should be "{width}px".', 'La imagen {file} debe tener {width}px de ancho.', 'es', 'yum'),
('The image "{file}" width should be "{width}px".', 'La photo {file} doit avoir une largeur maximum de {width}px .', 'fr', 'yum'),
('The image "{file}" width should be "{width}px".', 'L''immagine {file} deve essere larga {width}px.', 'it', 'yum'),
('The image has been resized to {max_pixel}px width successfully', 'Das Bild wurde beim hochladen automatisch auf eine Breite von {max_pixel} skaliert', 'de', 'yum'),
('The image has been resized to {max_pixel}px width successfully', 'Votre photo de profil a Ã©tÃ© retaillÃ©e automatiquement Ã  une taille de{max_pixel}', 'fr', 'yum'),
('The image has been resized to {max_pixel}px width successfully', 'Immagine ridimensionata a {max_pixel}px con successo.', 'it', 'yum'),
('The image should have at least 50px and a maximum of 200px in width and height. Supported filetypes are .jpg, .gif and .png', 'das Bild sollte mindestens 50px und maximal 200px in der Höhe und Breite betragen. Mögliche Dateitypen sind .jpg, .gif und .png', 'de', 'yum'),
('The image should have at least 50px and a maximum of 200px in width and height. Supported filetypes are .jpg, .gif and .png', 'La imagen debe tener un mínimo de 50px y un máximo de 200px de ancho y largo. Los tipos de archivo soportados son .jpg, .gif y .png', 'es', 'yum'),
('The image should have at least 50px and a maximum of 200px in width and height. Supported filetypes are .jpg, .gif and .png', 'La foto chargÃ©e doit avoir une largeur maximum de 50px  et une hauteur maximale de 200px. Les fichiers acceptÃ©s sont; .jpg, .gif und .png', 'fr', 'yum'),
('The image should have at least 50px and a maximum of 200px in width and height. Supported filetypes are .jpg, .gif and .png', 'L''immagine deve essere almeno 50px e massimo 200px in larghezza e altezza. Tipi di file supportati .jpg, .gif e .png', 'it', 'yum'),
('The image was uploaded successfully', 'Das Bild wurde erfolgreich hochgeladen', 'de', 'yum'),
('The image was uploaded successfully', 'L image a Ã©tÃ© chargÃ©e avec succÃ¨s', 'fr', 'yum'),
('The image was uploaded successfully', 'Immagine caricata con successo', 'it', 'yum'),
('The messages for your application language are not defined.', 'Los mensajes para el idioma de tu aplicación no están definidos', 'es', 'yum'),
('The minimum value of the field (form validator).', 'Minimalwert des Feldes (Form-Validierung', 'de', 'yum'),
('The minimum value of the field (form validator).', 'El valor mínimo del campo (validador de formulario)', 'es', 'yum'),
('The minimum value of the field (form validator).', 'Valeur minimum du champ (Validation du formulaire)', 'fr', 'yum'),
('The minimum value of the field (form validator).', 'Valore minimo del campo (validazione form).', 'it', 'yum'),
('The minimum value of the field (form validator).', 'ÐœÐ¸Ð½Ð¸Ð¼Ð°Ð»ÑŒÐ½Ð¾Ðµ Ð·Ð½Ð°Ñ‡ÐµÐ½Ð¸Ðµ Ð¿Ð¾Ð»Ñ (Ð¿Ñ€Ð¾Ð²ÐµÑ€ÐºÐ° Ñ„Ð¾Ñ€Ð¼Ñ‹).', 'ru', 'yum'),
('The new password has been saved', 'Das neue Passwort wurde gespeichert.', 'de', 'yum'),
('The new password has been saved', 'Votre nouveau mot de passe a bien Ã©tÃ© mÃ©morisÃ©.', 'fr', 'yum'),
('The new password has been saved', 'La nuova password Ã¨ stata salvata.', 'it', 'yum'),
('The new password has been saved.', 'La nueva contraseña ha sido guardada', 'es', 'yum'),
('The value of the default field (database).', 'Standard-Wert für die Datenbank', 'de', 'yum'),
('The value of the default field (database).', 'El valor predeterminado del campo (base de datos).', 'es', 'yum'),
('The value of the default field (database).', 'Valeur standard pour la banque de donnÃ©e', 'fr', 'yum'),
('The value of the default field (database).', 'Valore del campo predefnito (database).', 'it', 'yum'),
('The value of the default field (database).', 'DomyÅ›lna wartoÅ›Ä‡ pola (bazodanowego).', 'pl', 'yum'),
('The value of the default field (database).', 'Ð—Ð½Ð°Ñ‡ÐµÐ½Ð¸Ðµ Ð¿Ð¾Ð»Ñ Ð¿Ð¾ ÑƒÐ¼Ð¾Ð»Ñ‡Ð°Ð½Ð¸ÑŽ (Ð±Ð°Ð·Ð° Ð´Ð°Ð½Ð½Ñ‹Ñ…).', 'ru', 'yum'),
('There are a total of {messages} messages in your System.', 'Es gibt in ihrem System insgesamt {messages} Nachrichten.', 'de', 'yum'),
('There are a total of {messages} messages in your System.', 'Hay un total de {messages} mensajes en su sistema.', 'es', 'yum'),
('There are a total of {messages} messages in your System.', 'Il existe dans votre systÃ¨me {messages} messages.', 'fr', 'yum'),
('There are a total of {messages} messages in your System.', 'Ci sno un totale di {messages} messaggi nel Sistema.', 'it', 'yum'),
('There are a total of {messages} messages in your System.', 'Istnieje {messages} wiadomoÅ›ci w Twoim systemie.', 'pl', 'yum'),
('There are {active_users} active and {inactive_users} inactive users in your System, from which {admin_users} are Administrators.', ' Es gibt {active_users} aktive und {inactive_users} inaktive Benutzer in ihrem System, von denen {admin_users} Benutzer Administratoren sind.', 'de', 'yum'),
('There are {active_users} active and {inactive_users} inactive users in your System, from which {admin_users} are Administrators.', 'Hay {active_users} usuarios activos y {inactive_users} usuarios inactivos en su sistema, de los cuales {admin_users} son Administradores.', 'es', 'yum'),
('There are {active_users} active and {inactive_users} inactive users in your System, from which {admin_users} are Administrators.', ' Il existe {active_users}  membres actifs et {inactive_users} membres inactifs dans votre systÃ©me, pour lesquels {admin_users} membres sont dÃ©signÃ©s en tant qu administrateurs.', 'fr', 'yum'),
('There are {active_users} active and {inactive_users} inactive users in your System, from which {admin_users} are Administrators.', ' Ci sono {active_users} utenti attivi e {inactive_users} utenti inattivi nel Sistema, di cui {admin_users} sono amministratori.', 'it', 'yum'),
('There are {active_users} active and {inactive_users} inactive users in your System, from which {admin_users} are Administrators.', 'IstniejÄ… {active_users} aktywni i {inactive_users} nieaktywni uÅ¼ytkownicy w Twoim systemie, w tym {admin_users} administratorzy.', 'pl', 'yum'),
('There are {profiles} profiles in your System. These consist of {profile_fields} profile fields in {profile_field_groups} profile field groups', 'Es gibt {profiles} Profile in ihren System. Diese bestehen aus {profile_fields} Profilfeldern, die sich in {profile_field_groups} Profilfeldgruppen aufteilen.', 'de', 'yum'),
('There are {profiles} profiles in your System. These consist of {profile_fields} profile fields in {profile_field_groups} profile field groups', 'Hay {profiles} perfiles en su sistema. Estos consisten de {profile_fields} campos de perfiles en {profile_field_groups} grupos de campos de perfiles', 'es', 'yum'),
('There are {profiles} profiles in your System. These consist of {profile_fields} profile fields in {profile_field_groups} profile field groups', 'Il existe {profiles} profils dans votre systÃ¨me. Ils se composent de {profile_fields} champs de profils, qui se dÃ©composent {profile_field_groups} en grouppe de champs de profils.', 'fr', 'yum'),
('There are {profiles} profiles in your System. These consist of {profile_fields} profile fields in {profile_field_groups} profile field groups', 'Ci sono {profiles} profili nel Sistema. sono costituiti da {profile_fields} campi profili, in {profile_field_groups} campo profili gruppi.', 'it', 'yum'),
('There are {profiles} profiles in your System. These consist of {profile_fields} profile fields in {profile_field_groups} profile field groups', 'IstniejÄ… {profiles} profile w Twoim systemie, ktÃ³re zawierajÄ… pola {profile_fields} w grupach {profile_field_groups}', 'pl', 'yum'),
('There are {roles} roles in your System.', 'Es gibt {roles} Rollen in ihrem System', 'de', 'yum'),
('There are {roles} roles in your System.', 'Hay {roles} roles en su sistema.', 'es', 'yum'),
('There are {roles} roles in your System.', 'Il existe les {roles} rÃ´les suivant dans votre systÃ¨me', 'fr', 'yum'),
('There are {roles} roles in your System.', 'Ci sono {roles} ruoli nel Sistema', 'it', 'yum'),
('There are {roles} roles in your System.', 'Istnieje {roles} rÃ³l w Twoim systemie', 'pl', 'yum'),
('There was an error saving the password', 'Fehler beim speichern des Passwortes', 'de', 'yum'),
('There was an error saving the password', 'Erreur produite lors de la mÃ©morisation de votre mot de passe.', 'fr', 'yum'),
('There was an error saving the password', 'Impossibile salvare la password', 'it', 'yum'),
('This account is blocked.', 'Ihr Konto wurde blockiert.', 'de', 'yum'),
('This account is blocked.', 'Esta cuenta está bloqueada.', 'es', 'yum'),
('This account is blocked.', 'Votre compte a Ã©tÃ© bloquÃ©. Contactez nous.', 'fr', 'yum'),
('This account is blocked.', 'Il tuo account Ã¨ stato bloccato.', 'it', 'yum'),
('This account is blocked.', 'To konto jest zablokowane.', 'pl', 'yum'),
('This account is not activated.', 'Ihr Konto wurde nicht aktiviert.', 'de', 'yum'),
('This account is not activated.', 'Esta cuenta no está activada.', 'es', 'yum'),
('This account is not activated.', 'Votre compte n a pas Ã©tÃ© activÃ©.', 'fr', 'yum'),
('This account is not activated.', 'Il tuo account non Ã¨ attivato.', 'it', 'yum'),
('This account is not activated.', 'To konto nie zostaÅ‚o jeszcze aktywowane.', 'pl', 'yum'),
('This membership is still {days} days active', 'Die Mitgliedschaft ist noch {days} Tage aktiv', 'de', 'yum'),
('This membership is still {days} days active', 'L''iscrizione Ã¨ ancora attiva per {days} giorni', 'it', 'yum'),
('This message will be sent to {username}', 'Diese Nachricht wird an {username} versandt', 'de', 'yum'),
('This message will be sent to {username}', 'Este mensaje será enviado a {username}', 'es', 'yum'),
('This message will be sent to {username}', 'Ce message sera envoyÃ© Ã  {username}', 'fr', 'yum'),
('This message will be sent to {username}', 'Questo messaggio verrÃ  inviato a {username}', 'it', 'yum'),
('This role can administer users of this roles', 'Este rol puede administrar usuarios de estos roles', 'es', 'yum'),
('This role can administer users of this roles', 'Membres ayant ce rÃ´le peuvent administrer ces utilisateurs', 'fr', 'yum'),
('This role can administer users of this roles', 'Questo ruolo puÃ² amministrare utenti di questo ruolo', 'it', 'yum'),
('This user belongs to these roles:', 'Benutzer gehört diesen Rollen an:', 'de', 'yum'),
('This user belongs to these roles:', 'Este usuario pertenece a estos roles:', 'es', 'yum'),
('This user belongs to these roles:', 'A ce membre a Ã©tÃ© attribuÃ© ces rÃ´les:', 'fr', 'yum'),
('This user belongs to these roles:', 'L''Utente appartiene a questi ruoli:', 'it', 'yum'),
('This user belongs to these roles:', 'UÅ¼ytkownik posiada role:', 'pl', 'yum'),
('This user can administer this users', 'Dieser Benutzer kann diese Nutzer administrieren', 'de', 'yum'),
('This user can administer this users', 'Este usuario puede administrar estos usuarios', 'es', 'yum'),
('This user can administer this users', 'Ce membre peut gÃ©rer ces utilisateurs.', 'fr', 'yum'),
('This user can administer this users', 'Gli utenti possono gestire questi utenti', 'it', 'yum'),
('This user can administer this users:', 'Benutzer kann diese Benutzer verwalten:', 'de', 'yum'),
('This user can administer this users:', 'Este usuario puede administrar estos usuarios:', 'es', 'yum'),
('This user can administer this users:', 'Ce membre peut administrer ces membres:', 'fr', 'yum'),
('This user can administer this users:', 'Gli utenti possono gestire questi utenti:', 'it', 'yum'),
('This user can administer this users:', 'UÅ¼ytkownik moÅ¼e zarzÄ…dzaj nastÄ™pujÄ…cymi uÅ¼ytkownikami:', 'pl', 'yum'),
('This user can administrate this users', 'UÅ¼ytkownik moÅ¼e administrowaÄ‡ podanymi uÅ¼ytkownikami', 'pl', 'yum'),
('This user''s email address already exists.', 'Indirizzo email esistente.', 'it', 'yum'),
('This user''s email adress already exists.', 'Der Benutzer E-Mail-Adresse existiert bereits.', 'de', 'yum'),
('This user''s email adress already exists.', 'La dirección de e-mail de este usuario ya existe.', 'es', 'yum'),
('This user''s email adress already exists.', 'Cette adresse e-mail existe dÃ©jÃ  dans notre banque de donnÃ©e.', 'fr', 'yum'),
('This user''s email adress already exists.', 'Indirizzo e-mail giÃ  esistente.', 'it', 'yum'),
('This user''s email adress already exists.', 'Podany adres melopwy jest w uÅ¼yciu', 'pl', 'yum'),
('This user''s email adress already exists.', 'ÐŸÐ¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»ÑŒ Ñ Ñ‚Ð°ÐºÐ¸Ð¼ ÑÐ»ÐµÐºÑ‚Ñ€Ð¾Ð½Ð½Ñ‹Ð¼ Ð°Ð´Ñ€ÐµÑÐ¾Ð¼ ÑƒÐ¶Ðµ ÑÑƒÑ‰ÐµÑÑ‚Ð²ÑƒÐµÑ‚.', 'ru', 'yum'),
('This user''s name already exists.', 'Der Benutzer Name existiert bereits.', 'de', 'yum'),
('This user''s name already exists.', 'Este nombre de usuario ya existe.', 'es', 'yum'),
('This user''s name already exists.', 'Ce nom d utilisateur existe dÃ©jÃ  dans notre banque de donnÃ©e.', 'fr', 'yum'),
('This user''s name already exists.', 'Nome esistenze', 'it', 'yum'),
('This user''s name already exists.', 'Podana nazwa uÅ¼ytkownika jest w uÅ¼yciu.', 'pl', 'yum'),
('This user''s name already exists.', 'ÐŸÐ¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»ÑŒ Ñ Ñ‚Ð°ÐºÐ¸Ð¼ Ð¸Ð¼ÐµÐ½ÐµÐ¼ ÑƒÐ¶Ðµ ÑÑƒÑ‰ÐµÑÑ‚Ð²ÑƒÐµÑ‚.', 'ru', 'yum'),
('This users have a ordered memberships of this role', 'Diese Benutzer haben eine Mitgliedschaft in dieser Rolle', 'de', 'yum'),
('This users have a ordered memberships of this role', 'Ces membres sont assignÃ©s Ã  ce rÃ´le', 'fr', 'yum'),
('This users have a ordered memberships of this role', 'Questi utenti hanno ordinato l''iscrizione a questo ruolo', 'it', 'yum'),
('This users have been assigned to this Role', 'Diese Nutzer gehören dieser Rolle an: ', 'de', 'yum'),
('This users have been assigned to this Role', 'Este usuario ha sido asignado a este Rol', 'es', 'yum'),
('This users have been assigned to this Role', 'A ces membres ont Ã©tÃ© attribuÃ©s ce rÃ´le: ', 'fr', 'yum'),
('This users have been assigned to this Role', 'Questi utenti sono assegnati al ruolo: ', 'it', 'yum'),
('This users have been assigned to this Role', 'UÅ¼ytkownik zostaÅ‚ przypisany do rÃ³l: ', 'pl', 'yum'),
('This users have been assigned to this role', 'Dieser Rolle gehören diese Benutzer an', 'de', 'yum'),
('This users have been assigned to this role', 'Este usuario ha sido asignado a este rol', 'es', 'yum'),
('This users have been assigned to this role', 'Ce rÃ´le a bien Ã©tÃ© attribuÃ© Ã  ces membres', 'fr', 'yum'),
('This users have been assigned to this role', 'Questo ruolo Ã¨ assegnato  a questo utente', 'it', 'yum'),
('This users have been assigned to this role', 'Uzytkownik zostaÅ‚ przypisany do rÃ³l', 'pl', 'yum'),
('This users have commented your profile recently', 'Diese Benutzer haben mein Profil kürzlich kommentiert', 'de', 'yum'),
('This users have commented your profile recently', 'Cet utilisateur Ã  commentÃ© rÃ©cemment votre profil', 'fr', 'yum'),
('This users have commented your profile recently', 'Questo utente ha recentemente commentato sul tuo profilo', 'it', 'yum'),
('This users have visited my profile', 'Diese Benutzer haben mein Profil besucht', 'de', 'yum'),
('This users have visited my profile', 'Estos usuarios han visitado mi perfil', 'es', 'yum'),
('This users have visited my profile', 'Les membres ayant visitÃ© mon profil.', 'fr', 'yum'),
('This users have visited my profile', 'Questi utenti hanno visitato il tuo profilo', 'it', 'yum'),
('This users have visited your profile recently', 'Diese Benutzer haben kürzlich mein Profil besucht', 'de', 'yum'),
('This users have visited your profile recently', 'Cet utilisateur a visitÃ© votre profil rÃ©cemment', 'fr', 'yum'),
('This users have visited your profile recently', 'Questi utenti hanno recentemente visitato il tuo profilo', 'it', 'yum'),
('Time sent', 'Gesendet am', 'de', 'yum'),
('Time sent', 'Hora de envío', 'es', 'yum'),
('Time sent', 'EnvoyÃ© le', 'fr', 'yum'),
('Time sent', 'Pubblicato su', 'it', 'yum'),
('Time sent', 'WysÅ‚ano', 'pl', 'yum'),
('Title', 'Titel', 'de', 'yum'),
('Title', 'Título', 'es', 'yum'),
('Title', 'Titre', 'fr', 'yum'),
('Title', 'Titolo', 'it', 'yum'),
('Title', 'ÐÐ°Ð·Ð²Ð°Ð½Ð¸Ðµ', 'ru', 'yum'),
('To', 'An', 'de', 'yum'),
('To', 'Para', 'es', 'yum'),
('To', 'A', 'fr', 'yum'),
('To', 'A', 'it', 'yum'),
('Translation', 'Übersetzung', 'de', 'yum'),
('Translations have been saved', 'Die Übersetzungen wurden gespeichert', 'de', 'yum'),
('Try again', 'Erneut versuchen', 'de', 'yum'),
('Try again', 'Intenta de nuevo', 'es', 'yum'),
('Try again', 'Essayer Ã  nouveau', 'fr', 'yum'),
('Try again', 'Prova di nuovo', 'it', 'yum'),
('Try again', 'SprÃ³buj jeszcze raz', 'pl', 'yum'),
('Update', 'Bearbeiten', 'de', 'yum'),
('Update', 'Actualizar', 'es', 'yum'),
('Update', 'Modifier', 'fr', 'yum'),
('Update', 'Aggiorna', 'it', 'yum'),
('Update', 'ZmieÅ„', 'pl', 'yum'),
('Update Profile Field', 'Profilfeld bearbeiten', 'de', 'yum'),
('Update Profile Field', 'Actualizar Campo del Perfil', 'es', 'yum'),
('Update Profile Field', 'Modifier le champ du profil', 'fr', 'yum'),
('Update Profile Field', 'Aggiorna campo Profilo', 'it', 'yum'),
('Update Profile Field', 'ZmieÅ„ pole w profilu', 'pl', 'yum'),
('Update Profile Field', 'ÐŸÑ€Ð°Ð²Ð¸Ñ‚ÑŒ', 'ru', 'yum'),
('Update User', 'Benutzer bearbeiten', 'de', 'yum'),
('Update User', 'Actualizar Usuario', 'es', 'yum'),
('Update User', 'GÃ©rer les membres', 'fr', 'yum'),
('Update User', 'Aggiorna utenti', 'it', 'yum'),
('Update User', 'ÐŸÑ€Ð°Ð²Ð¸Ñ‚ÑŒ', 'ru', 'yum'),
('Update my profile', 'Mein Profil bearbeiten', 'de', 'yum'),
('Update my profile', 'Aggiorna profilo', 'it', 'yum'),
('Update payment', 'Zahlungsart bearbeiten', 'de', 'yum'),
('Update payment', 'Aggiorna pagamento', 'it', 'yum'),
('Update role', 'Rolle bearbeiten', 'de', 'yum'),
('Update role', 'Actualizar rol', 'es', 'yum'),
('Update role', 'Modifier les rÃ´les', 'fr', 'yum'),
('Update role', 'Aggiorna ruolo', 'it', 'yum'),
('Update role', 'Edytuj rolÄ™', 'pl', 'yum'),
('Update user', 'Benutzer bearbeiten', 'de', 'yum'),
('Update user', 'Actualizar usuario', 'es', 'yum'),
('Update user', 'Modifier un membre', 'fr', 'yum'),
('Update user', 'Aggiorna utente', 'it', 'yum'),
('Update user', 'ZmieÅ„ uÅ¼ytkownika', 'pl', 'yum'),
('Upload Avatar', 'Subir un Avatar', 'es', 'yum'),
('Upload Avatar', 'Charger une image de profil', 'fr', 'yum'),
('Upload Avatar', 'Carica avatar', 'it', 'yum'),
('Upload avatar', 'Profilbild hochladen', 'de', 'yum'),
('Upload avatar', 'Subir un avatar', 'es', 'yum'),
('Upload avatar', 'Charger une image de profil maintenant', 'fr', 'yum'),
('Upload avatar', 'Carica avatar', 'it', 'yum'),
('Upload avatar Image', 'Carica avatar', 'it', 'yum'),
('Upload avatar image', 'Profilbild hochladen', 'de', 'yum'),
('Upload avatar image', 'Cargar imagen de perfil', 'es', 'yum'),
('Upload avatar image', 'Charger une image pour votre profil', 'fr', 'yum'),
('Upload avatar image', 'Carica immagine avatar', 'it', 'yum'),
('User', 'Benutzer', 'de', 'yum'),
('User', 'Usuario', 'es', 'yum'),
('User', 'Utilisateur', 'fr', 'yum'),
('User', 'Utente', 'it', 'yum'),
('User Administration', 'Benutzerverwaltung', 'de', 'yum'),
('User Administration', 'Administración de usuario', 'es', 'yum'),
('User Administration', 'Gestion des membres', 'fr', 'yum'),
('User Administration', 'Gestione utente', 'it', 'yum'),
('User Administration', 'ZarzÄ…dzanie uÅ¼ytkownikami', 'pl', 'yum'),
('User Management Home', 'Benutzerverwaltung Startseite', 'de', 'yum'),
('User Management Home', 'Administración de usuario', 'es', 'yum'),
('User Management Home', 'Page de gestion des membres', 'fr', 'yum'),
('User Management Home', 'Home gestione utente', 'it', 'yum'),
('User Management Home', 'Strona startowa profilu', 'pl', 'yum'),
('User Management settings configuration', 'Einstellungen', 'de', 'yum'),
('User Management settings configuration', 'Ajustes de configuración de la Administración de usuarios', 'es', 'yum'),
('User Management settings configuration', 'Options de configuration des profils', 'fr', 'yum'),
('User Management settings configuration', 'Configurazione impostazioni gestione utente', 'it', 'yum'),
('User Operations', 'Benutzeraktionen', 'de', 'yum'),
('User Operations', 'Operaciones de usuario', 'es', 'yum'),
('User Operations', 'Action de l utilisateur', 'fr', 'yum'),
('User Operations', 'Azioni utente', 'it', 'yum'),
('User Operations', 'CzynnoÅ›ci uÅ¼ytkownika', 'pl', 'yum'),
('User activation', 'User-Aktivierung', 'de', 'yum'),
('User activation', 'Activación de usuario', 'es', 'yum'),
('User activation', 'Activation du compte utilisateur', 'fr', 'yum'),
('User activation', 'Attivazione utente', 'it', 'yum'),
('User activation', 'User-Aktivierung', 'pl', 'yum'),
('User activation', 'ÐÐºÑ‚Ð¸Ð²Ð°Ñ†Ð¸Ñ Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»Ñ', 'ru', 'yum'),
('User administration Panel', 'Benutzerkontrollzentrum', 'de', 'yum'),
('User administration Panel', 'Panel de administración de usuario', 'es', 'yum'),
('User administration Panel', 'Centre de controle des membres', 'fr', 'yum'),
('User administration Panel', 'Pannello di controllo', 'it', 'yum'),
('User administration Panel', 'Panel zarzÄ…dzania uÅ¼ytkownika', 'pl', 'yum'),
('User administration panel', 'Kontrollzentrum', 'de', 'yum'),
('User administration panel', 'Panel de administración de usuario', 'es', 'yum'),
('User administration panel', 'Centre de controle user', 'fr', 'yum'),
('User administration panel', 'Pannello di controllo', 'it', 'yum'),
('User administration panel', 'Panel zarzÄ…dzania uÅ¼ytkownikiem', 'pl', 'yum'),
('User belongs to Roles', 'Benutzer gehört diesen Rollen an', 'de', 'yum'),
('User belongs to Roles', 'El usuario pertenece al los Roles', 'es', 'yum'),
('User belongs to Roles', 'Attribuer des rÃ´les Ã  un membre', 'fr', 'yum'),
('User belongs to Roles', 'Utente appartiene a questi ruoli', 'it', 'yum'),
('User belongs to Roles', 'UÅ¼ytkownik posiada role', 'pl', 'yum'),
('User belongs to these roles', 'Benutzer gehört diesen Rollen an', 'de', 'yum'),
('User belongs to these roles', 'El usuario pertenece a estos roles', 'es', 'yum'),
('User belongs to these roles', 'Attribuer ce rÃ´le Ã  un membre', 'fr', 'yum'),
('User belongs to these roles', 'Utente appartiene a questi ruoli', 'it', 'yum'),
('User belongs to these roles', 'UÅ¼ytkownik posiada role', 'pl', 'yum'),
('User can not administer any users', 'Kann keine Benutzer verwalten', 'de', 'yum'),
('User can not administer any users', 'El usuario no puede administrar ningún usuario', 'es', 'yum'),
('User can not administer any users', 'Ne peut pas gÃ©rer les utilisateurs', 'fr', 'yum'),
('User can not administer any users', 'Impossibile gestire gli utenti', 'it', 'yum'),
('User can not administer any users', 'UÅ¼ytkownik nie moÅ¼e zarzÄ…dzaÄ‡ Å¼adnymi uÅ¼ytkownikami', 'pl', 'yum'),
('User can not administer any users of any role', 'Kann keine Rollen verwalten', 'de', 'yum'),
('User can not administer any users of any role', 'El usuario no puede administrar ningún usuario o ningún rol', 'es', 'yum'),
('User can not administer any users of any role', 'Ne peut pas gÃ©rer les rolles', 'fr', 'yum'),
('User can not administer any users of any role', 'Impossibile gestire i ruoli', 'it', 'yum'),
('User can not administer any users of any role', 'UÅ¼ytkownik nie moÅ¼e zarzÄ…dzaÄ‡ Å¼adnymi rolami uÅ¼ytkownikÃ³w', 'pl', 'yum'),
('User is Online!', 'Benutzer ist Online!', 'de', 'yum'),
('User is Online!', 'Utilisateur en ligne!', 'fr', 'yum'),
('User is Online!', 'Utente online!', 'it', 'yum'),
('User module settings', 'Moduleinstellungen', 'de', 'yum'),
('User module settings', 'Ajustes del módulo de usuario', 'es', 'yum'),
('User module settings', 'RÃ©glages du module user', 'fr', 'yum'),
('User module settings', 'Modulo impostazioni utente', 'it', 'yum'),
('User module settings', 'Ustawienia moduÅ‚u uÅ¼ytkownika', 'pl', 'yum'),
('Usergroups', 'Benutzergruppen', 'de', 'yum'),
('Usergroups', 'Grupos del usuario', 'es', 'yum'),
('Usergroups', 'Utilisateur des grouppes', 'fr', 'yum'),
('Usergroups', 'Gruppi utenti', 'it', 'yum'),
('Username', 'Benutzername', 'de', 'yum'),
('Username', 'Usuario', 'es', 'yum'),
('Username', 'Benutzername', 'fr', 'yum'),
('Username', 'Username', 'it', 'yum'),
('Username', 'UÅ¼ytkownik', 'pl', 'yum'),
('Username is incorrect.', 'Benutzername ist falsch.', 'de', 'yum'),
('Username is incorrect.', 'Nombre de usuario incorrecto', 'es', 'yum'),
('Username is incorrect.', 'Le nom d utilisateur est incorrect.', 'fr', 'yum'),
('Username is incorrect.', 'Username non corretto.', 'it', 'yum'),
('Username is incorrect.', 'Nazwa uÅ¼ytkownika jest niepoprawna.', 'pl', 'yum'),
('Username is incorrect.', 'ÐŸÐ¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»ÑŒ Ñ Ñ‚Ð°ÐºÐ¸Ð¼ Ð¸Ð¼ÐµÐ½ÐµÐ¼ Ð½Ðµ Ð·Ð°Ñ€ÐµÐ³Ð¸ÑÑ‚Ñ€Ð¸Ñ€Ð¾Ð²Ð°Ð½.', 'ru', 'yum'),
('Username or Email', 'Benutzername oder E-mail', 'de', 'yum'),
('Username or Email', 'Nombre de usuario o Email', 'es', 'yum'),
('Username or Email', 'Nom d utilisateur ou adresse e-mail.', 'fr', 'yum'),
('Username or Email', 'Username o email', 'it', 'yum'),
('Username or Password is incorrect', 'Benutzername oder Passwort ist falsch', 'de', 'yum'),
('Username or Password is incorrect', 'Usuario o contraseña incorrectos', 'es', 'yum'),
('Username or Password is incorrect', 'Nom d utilisateur ou mot passe incorrect', 'fr', 'yum'),
('Username or Password is incorrect', 'Username o password errato/a', 'it', 'yum'),
('Username or email', 'Benutzername oder E-Mail', 'de', 'yum'),
('Username or email', 'Nom d utilisateur ou adresse e-mail', 'fr', 'yum'),
('Username or email', 'Username o email', 'it', 'yum'),
('Users', 'Usuarios', 'es', 'yum'),
('Users', 'Utilisateur', 'fr', 'yum'),
('Users', 'Utenti', 'it', 'yum'),
('Users', 'ÐŸÐ¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»Ð¸', 'ru', 'yum'),
('Users: ', 'Benutzer: ', 'de', 'yum'),
('Users: ', 'Usuarios:', 'es', 'yum'),
('Users: ', 'Membres: ', 'fr', 'yum'),
('Users: ', 'Utenti: ', 'it', 'yum'),
('Users: ', 'UÅ¼ytkownicy: ', 'pl', 'yum'),
('Variable name', 'Variablen name', 'de', 'yum'),
('Variable name', 'Nombre de variable', 'es', 'yum'),
('Variable name', 'Nom de la variable', 'fr', 'yum'),
('Variable name', 'Nome variabile', 'it', 'yum'),
('Variable name', 'Ð˜Ð¼Ñ Ð¿ÐµÑ€ÐµÐ¼ÐµÐ½Ð½Ð¾Ð¹', 'ru', 'yum'),
('Verification Code', 'Codice verifica', 'it', 'yum'),
('Verification Code', 'Kod weryfikujÄ…cy', 'pl', 'yum'),
('Verification Code', 'ÐŸÑ€Ð¾Ð²ÐµÑ€Ð¾Ñ‡Ð½Ñ‹Ð¹ ÐºÐ¾Ð´', 'ru', 'yum'),
('Verification code', 'Verifizierung', 'de', 'yum'),
('Verification code', 'Código de verificación', 'es', 'yum'),
('Verification code', 'Code de verification', 'fr', 'yum'),
('Verification code', 'Codice verifica', 'it', 'yum'),
('View', 'Anzeigen', 'de', 'yum'),
('View', 'Ver', 'es', 'yum'),
('View', 'Editer', 'fr', 'yum'),
('View', 'Visualizza', 'it', 'yum'),
('View', 'PolaÅ¼', 'pl', 'yum'),
('View Details', 'Zur Gruppe', 'de', 'yum'),
('View Details', 'Mostra dettagli', 'it', 'yum'),
('View Profile Field', 'Mostra campo Profilo', 'it', 'yum'),
('View Profile Field', 'ÐŸÑ€Ð¾ÑÐ¼Ð¾Ñ‚Ñ€', 'ru', 'yum'),
('View Profile Field #', 'Mostra # campo Profilo', 'it', 'yum'),
('View Profile Field #', 'ÐŸÐ¾Ð»Ðµ Ð¿Ñ€Ð¾Ñ„Ð¸Ð»Ñ #', 'ru', 'yum'),
('View User', 'Benutzer anzeigen', 'de', 'yum'),
('View User', 'Ver Usuario', 'es', 'yum'),
('View User', 'Consulter le profil du membre', 'fr', 'yum'),
('View User', 'Mostra utente', 'it', 'yum'),
('View User', 'ÐŸÑ€Ð¾ÑÐ¼Ð¾Ñ‚Ñ€ Ð¿Ñ€Ð¾Ñ„Ð¸Ð»Ñ', 'ru', 'yum'),
('View admin messages', 'Administratornachrichten anzeigen', 'de', 'yum'),
('View admin messages', 'Ver mensajes de admin', 'es', 'yum'),
('View admin messages', 'Voir les messages de l administateur', 'fr', 'yum'),
('View admin messages', 'Visualizza messaggi amministratore', 'it', 'yum'),
('View admin messages', 'PokaÅ¼ wiadomoÅ›ci administratora', 'pl', 'yum'),
('View my messages', 'Meine Nachrichten ansehen', 'de', 'yum'),
('View my messages', 'Ver mis mensajes', 'es', 'yum'),
('View my messages', 'Voir mes messages', 'fr', 'yum'),
('View my messages', 'Visualizza messaggi', 'it', 'yum'),
('View my messages', 'WyÅ›wietl moje wiadomoÅ›ci', 'pl', 'yum'),
('View user "{username}"', 'Benutzer "{username}"', 'de', 'yum'),
('View user "{username}"', 'Ver usuario "{username}"', 'es', 'yum'),
('View user "{username}"', 'Membre "{username}"', 'fr', 'yum'),
('View user "{username}"', 'Visualizza utente "{username}"', 'it', 'yum'),
('View user "{username}"', 'UÅ¼ytkownik "{username}"', 'pl', 'yum'),
('View users', 'Benutzer anzeigen', 'de', 'yum'),
('View users', 'Ver usuarios', 'es', 'yum'),
('View users', 'Montrer les utilisateurs', 'fr', 'yum'),
('View users', 'Visualizza utenti', 'it', 'yum'),
('View users', 'PokaÅ¼ uÅ¼ytkownika', 'pl', 'yum'),
('Visible', 'Sichtbar', 'de', 'yum'),
('Visible', 'Visible', 'es', 'yum'),
('Visible', 'Visible', 'fr', 'yum'),
('Visible', 'Visibile', 'it', 'yum'),
('Visible', 'Ð’Ð¸Ð´Ð¸Ð¼Ð¾ÑÑ‚ÑŒ', 'ru', 'yum'),
('Visit profile', 'Profil besuchen', 'de', 'yum'),
('Visit profile', 'Visiter le profil', 'fr', 'yum'),
('Visit profile', 'Visita profilo', 'it', 'yum'),
('When selecting searchable, users of this role can be searched in the "user Browse" function', 'Wenn "suchbar" ausgewählt wird, kann man Nutzer dieser Rolle in der "Benutzer durchsuchen"-Funktion suchen', 'de', 'yum'),
('When selecting searchable, users of this role can be searched in the "user Browse" function', 'Si le status de "visible" est choisi, un membre de ce rÃ´le pourra apparaitre dans les rÃ©sultats d une recherche', 'fr', 'yum'),
('When selecting searchable, users of this role can be searched in the "user Browse" function', 'Quando selezioni "Ricercabile", gli utenti di questo ruolo sono ricercabili nella funzione "Browser utenti" ', 'it', 'yum'),
('Write a comment', 'Kommentar hinterlassen', 'de', 'yum'),
('Write a comment', 'Escribir un comentario', 'es', 'yum'),
('Write a comment', 'Laisser un commentaire', 'fr', 'yum'),
('Write a comment', 'Scrivi commento', 'it', 'yum'),
('Write a message', 'Nachricht schreiben', 'de', 'yum'),
('Write a message', 'Escribir un mensaje', 'es', 'yum'),
('Write a message', 'Ecrire un message', 'fr', 'yum'),
('Write a message', 'Scrivi messaggio', 'it', 'yum'),
('Write a message', 'Napisz wiadomoÅ›Ä‡', 'pl', 'yum'),
('Write a message to this User', 'Diesem Benutzer eine Nachricht schreiben', 'de', 'yum'),
('Write a message to this User', 'Escribir un mensaje a este Usuario', 'es', 'yum'),
('Write a message to this User', 'Ecrire un message Ã  ce membre', 'fr', 'yum'),
('Write a message to this User', 'Scrivi messaggio a questo utente', 'it', 'yum'),
('Write a message to {username}', 'Nachricht an {username} schreiben', 'de', 'yum'),
('Write a message to {username}', 'Message Ã©crire Ã  {username} ', 'fr', 'yum'),
('Write a message to {username}', 'Scrivi messaggio a {username} ', 'it', 'yum'),
('Write another message', 'Eine weitere Nachricht schreiben', 'de', 'yum'),
('Write another message', 'Escribir otro mensaje', 'es', 'yum'),
('Write another message', 'Ecrire un autre message', 'fr', 'yum'),
('Write another message', 'Scrivi un''altro messaggio', 'it', 'yum'),
('Write another message', 'Eine weitere Nachricht schreiben', 'pl', 'yum'),
('Write comment', 'Kommentar schreiben', 'de', 'yum'),
('Write comment', 'Escribir comentario', 'es', 'yum'),
('Write comment', 'Ecrire un commentaire', 'fr', 'yum'),
('Write comment', 'Scrivi commento', 'it', 'yum'),
('Write message', 'Nachricht schreiben', 'de', 'yum'),
('Written at', 'Geschrieben am', 'de', 'yum'),
('Written at', 'Escrito el', 'es', 'yum'),
('Written at', 'Ecrit le', 'fr', 'yum'),
('Written at', 'Scritto a ', 'it', 'yum'),
('Written from', 'Geschrieben von', 'de', 'yum'),
('Written from', 'Escrito por', 'es', 'yum'),
('Written from', 'Ecrit par', 'fr', 'yum'),
('Written from', 'Scritto da ', 'it', 'yum'),
('Wrong password confirmation! Account was not deleted', 'Falsches Bestätigugspasswort! Zugang wurde nicht gelöscht', 'de', 'yum'),
('Wrong password confirmation! Account was not deleted', '¡Contraseña para confirmación incorrecta! Lacuenta no ha sido eliminada', 'es', 'yum'),
('Wrong password confirmation! Account was not deleted', 'Confirmation incorrecte! Le compte n a pas Ã©tÃ© supprimÃ©', 'fr', 'yum'),
('Wrong password confirmation! Account was not deleted', 'Password id oconferma errata! Account non cancellato', 'it', 'yum'),
('Wrong password confirmation! Account was not deleted', 'Niepoprawne hasÅ‚o! Konto nie zostaÅ‚o usuniÄ™te', 'pl', 'yum'),
('Yes', 'Ja', 'de', 'yum'),
('Yes', 'Sí', 'es', 'yum'),
('Yes', 'Oui', 'fr', 'yum'),
('Yes', 'Si', 'it', 'yum'),
('Yes', 'Ja', 'pl', 'yum'),
('Yes', 'Ð”Ð°', 'ru', 'yum'),
('Yes and show on registration form', 'Ja, und auf Registrierungsseite anzeigen', 'de', 'yum'),
('Yes and show on registration form', 'Si y mostrar en formulario de registro', 'es', 'yum'),
('Yes and show on registration form', 'oui et charger le formulaire d inscription', 'fr', 'yum'),
('Yes and show on registration form', 'Si e mostra nel form di registrazione', 'it', 'yum'),
('Yes and show on registration form', 'Tak i pokaÅ¼ w formularzu rejestracji', 'pl', 'yum'),
('Yes and show on registration form', 'Ð”Ð° Ð¸ Ð¿Ð¾ÐºÐ°Ð·Ð°Ñ‚ÑŒ Ð¿Ñ€Ð¸ Ñ€ÐµÐ³Ð¸ÑÑ‚Ñ€Ð°Ñ†Ð¸Ð¸', 'ru', 'yum'),
('You account is activated.', 'Ihr Konto wurde aktiviert.', 'de', 'yum'),
('You account is activated.', 'Su cuenta está activada.', 'es', 'yum'),
('You account is activated.', 'Votre compte a bien Ã©tÃ© activÃ©.', 'fr', 'yum'),
('You account is activated.', 'Account attivato', 'it', 'yum'),
('You account is activated.', 'Ihr Konto wurde aktiviert.', 'pl', 'yum'),
('You account is activated.', 'Ð’Ð°ÑˆÐ° ÑƒÑ‡ÐµÑ‚Ð½Ð°Ñ Ð·Ð°Ð¿Ð¸ÑÑŒ Ð°ÐºÑ‚Ð¸Ð²Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð°.', 'ru', 'yum'),
('You account is active.', 'Ihr Konto ist aktiv.', 'de', 'yum'),
('You account is active.', 'Su cuenta está activa.', 'es', 'yum'),
('You account is active.', 'Votre compte est actif.', 'fr', 'yum'),
('You account is active.', 'Account attivo', 'it', 'yum'),
('You account is active.', 'Ihr Konto ist aktiv.', 'pl', 'yum'),
('You account is active.', 'Ð’Ð°ÑˆÐ° ÑƒÑ‡ÐµÑ‚Ð½Ð°Ñ Ð·Ð°Ð¿Ð¸ÑÑŒ ÑƒÐ¶Ðµ Ð°ÐºÑ‚Ð¸Ð²Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð°.', 'ru', 'yum'),
('You account is blocked.', 'Account bloccato', 'it', 'yum'),
('You account is blocked.', 'Ð’Ð°Ñˆ Ð°ÐºÐºÐ°ÑƒÐ½Ñ‚ Ð·Ð°Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð°Ð½.', 'ru', 'yum'),
('You account is not activated.', 'Account non attivo', 'it', 'yum'),
('You account is not activated.', 'Ð’Ð°Ñˆ Ð°ÐºÐºÐ°ÑƒÐ½Ñ‚ Ð½Ðµ Ð°ÐºÑ‚Ð¸Ð²Ð¸Ñ€Ð¾Ð²Ð°Ð½.', 'ru', 'yum'),
('You already are friends', 'Ihr seid bereits Freunde', 'de', 'yum'),
('You already are friends', 'Ya son amigos', 'es', 'yum'),
('You already are friends', 'Ce membre figure dÃ©jÃ  dans votre liste de contact', 'fr', 'yum'),
('You already are friends', 'Siete giÃ  in contatto', 'it', 'yum'),
('You are not allowed to view this profile.', 'Sie dürfen dieses Profil nicht ansehen.', 'de', 'yum'),
('You are not allowed to view this profile.', 'No tiene permiso para ver este perfil.', 'es', 'yum'),
('You are not allowed to view this profile.', 'VOus ne pouvez pas consulter ce profil.', 'fr', 'yum'),
('You are not allowed to view this profile.', 'Non puoi vedere questo profilo.', 'it', 'yum'),
('You are not allowed to view this profile.', 'Nie masz uprawnie do przeglÄ…dania tego profilu', 'pl', 'yum'),
('You are running the Yii User Management Module {version} in Debug Mode!', 'Dies ist das Yii-User-Management Modul in Version {version} im Debug Modus!', 'de', 'yum'),
('You are running the Yii User Management Module {version} in Debug Mode!', '¡Está ejecutando el Módulo de Administración de Usuarios Yii {version} en modo de depuración!', 'es', 'yum'),
('You are running the Yii User Management Module {version} in Debug Mode!', 'Dies ist das Yii-User-Management Modul in Version {version} im Debug Modus!', 'fr', 'yum'),
('You are running the Yii User Management Module {version} in Debug Mode!', 'Questo Ã¨ il modulo di YUM versione {version} in modalitÃ  debug!', 'it', 'yum');
INSERT INTO `translation` (`message`, `translation`, `language`, `category`) VALUES
('You are running the Yii User Management Module {version} in Debug Mode!', 'Uruchamiasz moduÅ‚ Yii User Management Modul, wersja {version}, w trybie DEBUG!', 'pl', 'yum'),
('You do not have any friends yet', 'Ihre Kontaktliste ist leer', 'de', 'yum'),
('You do not have any friends yet', 'No tienes ningún amigo todavía', 'es', 'yum'),
('You do not have any friends yet', 'Votre liste de contact est vide', 'fr', 'yum'),
('You do not have any friends yet', 'Lista contatti vuota', 'it', 'yum'),
('You do not have set an avatar image yet', 'Es wurde noch kein Profilbild hochgeladen', 'de', 'yum'),
('You do not have set an avatar image yet', 'Aún no has subido tu imágen de Avatar', 'es', 'yum'),
('You do not have set an avatar image yet', 'Aucune photo de votre profil disponible', 'fr', 'yum'),
('You do not have set an avatar image yet', 'Non hai settato un''avatar', 'it', 'yum'),
('You have joined this group', 'Sie sind dieser Gruppe beigetreten', 'de', 'yum'),
('You have new Messages !', 'Sie haben neue Nachrichten !', 'de', 'yum'),
('You have new Messages !', '¡Tienes Mensajes nuevos!', 'es', 'yum'),
('You have new Messages !', 'Vous avez de nouveaux messages !', 'fr', 'yum'),
('You have new Messages !', 'Hai un nuovo messaggio!', 'it', 'yum'),
('You have new messages!', 'Sie haben neue Nachrichten!', 'de', 'yum'),
('You have new messages!', '¡Tienes mensajes nuevos!', 'es', 'yum'),
('You have new messages!', 'Vous n avez pas de messages!', 'fr', 'yum'),
('You have new messages!', 'Hai un nuovo messaggio!', 'it', 'yum'),
('You have new messages!', 'Masz nowÄ… wiadomoÅ›Ä‡!', 'pl', 'yum'),
('You have no messages yet', 'Sie haben bisher noch keine Nachrichten', 'de', 'yum'),
('You have no messages yet', 'Aucun message rÃ©cent', 'fr', 'yum'),
('You have no messages yet', 'Non hai messaggi', 'it', 'yum'),
('You have {count} new Messages !', 'Sie haben {count} neue Nachricht(en)!', 'de', 'yum'),
('You have {count} new Messages !', '¡Tienes {count} mensajes nuevos!', 'es', 'yum'),
('You have {count} new Messages !', 'Vous avez {count} nouveau(x) message(s)!', 'fr', 'yum'),
('You have {count} new Messages !', 'Hai {count} nuovi messaggi!', 'it', 'yum'),
('You have {count} new Messages !', 'Masz {count} nowych wiadomoÅ›ci !', 'pl', 'yum'),
('You registered from {site_name}', 'Sei registrato su {site_name}', 'it', 'yum'),
('Your Account has been activated. Thank you for your registration', 'Ihr Zugang wurde aktiviert. Danke für die Registierung', 'de', 'yum'),
('Your Account has been activated. Thank you for your registration.', 'Votre compte a bien Ã©tÃ© activÃ©. Merci pour votre inscription.', 'fr', 'yum'),
('Your Account has been activated. Thank you for your registration.', 'Il tuo account Ã¨ stato attivato. Grazie per la tua registrazione', 'it', 'yum'),
('Your Avatar image', 'Ihr Avatar-Bild', 'de', 'yum'),
('Your Avatar image', 'Tu imagen de Avatar', 'es', 'yum'),
('Your Avatar image', 'Votre image de profil', 'fr', 'yum'),
('Your Avatar image', 'Il tuo avatar', 'it', 'yum'),
('Your Message has been sent.', 'El Mensaje ha sido enviado.', 'es', 'yum'),
('Your Message has been sent.', 'Votre mÃ©ssage a Ã©tÃ© envoyÃ©.', 'fr', 'yum'),
('Your Message has been sent.', 'Messaggio inviato.', 'it', 'yum'),
('Your account has been activated.', 'Tu cuenta ha sido activada.', 'es', 'yum'),
('Your account has been activated. Thank you for your registration', 'Ihr Zugang wurde aktiviert. Danke für ihre Registrierung', 'de', 'yum'),
('Your account has been activated. Thank you for your registration', 'VOtre compte est maintenant actif. Merci de vous Ãªtre enregistrÃ©', 'fr', 'yum'),
('Your account has been activated. Thank you for your registration', 'Il tuo account Ã¨ stato attivato. Grazie per esserti registrato', 'it', 'yum'),
('Your account has been activated. Thank you for your registration.', 'Tu cuenta ha sido activada. Gracias por registrarte.', 'es', 'yum'),
('Your account has been activated. Thank you for your registration.', 'Twoje konto zostaÅ‚o aktywowane. DziÄ™kujemy za rejestracjÄ™.', 'pl', 'yum'),
('Your account has been deleted.', 'Ihr Zugang wurde gelöscht', 'de', 'yum'),
('Your account has been deleted.', 'Votre compte a bien Ã©tÃ© supprimÃ©', 'fr', 'yum'),
('Your account has been deleted.', 'Il tuo account Ã¨ stato cancellato.', 'it', 'yum'),
('Your activation succeeded', 'Ihre Aktivierung war erfolgreich', 'de', 'yum'),
('Your activation succeeded', 'Votre compte a Ã©tÃ© activÃ©', 'fr', 'yum'),
('Your activation succeeded', 'Attivazione riuscita', 'it', 'yum'),
('Your changes have been saved', 'Ihre Änderungen wurden gespeichert', 'de', 'yum'),
('Your changes have been saved', 'Los cambios han sido guardados', 'es', 'yum'),
('Your changes have been saved', 'Vos modification ont Ã©tÃ© mÃ©morisÃ©es', 'fr', 'yum'),
('Your changes have been saved', 'Le modifiche sono state salvate', 'it', 'yum'),
('Your changes have been saved', 'Twoje zmiany zostaÅ‚y zapisane', 'pl', 'yum'),
('Your current password', 'Ihr aktuelles Passwort', 'de', 'yum'),
('Your current password', 'Votre mot de passe actuel', 'fr', 'yum'),
('Your current password', 'La tua password corrente', 'it', 'yum'),
('Your current password is not correct', 'Ihr aktuelles Passwort ist nicht korrekt', 'de', 'yum'),
('Your current password is not correct', 'Votre mot de passe actuel n est pas correct', 'fr', 'yum'),
('Your current password is not correct', 'La tua password corrente non Ã¨ corretta', 'it', 'yum'),
('Your friendship request has been accepted', 'Ihre Freundschaftsanfrage wurde akzeptiert', 'de', 'yum'),
('Your friendship request has been accepted', 'Votre demande de contact a bien Ã©tÃ© acceptÃ©e', 'fr', 'yum'),
('Your friendship request has been accepted', 'La richiesta di contatto Ã¨ stata accettata', 'it', 'yum'),
('Your message has been sent', 'Ihre Nachricht wurde gesendet', 'de', 'yum'),
('Your message has been sent', 'El mensaje ha sido enviado', 'es', 'yum'),
('Your message has been sent', 'Votre mÃ©ssage a bien Ã©tÃ© envoyÃ©', 'fr', 'yum'),
('Your message has been sent', 'Il tuo messaggio Ã¨ stato inviato.', 'it', 'yum'),
('Your message has been sent', 'Twoja wiadomoÅ›Ä‡ zostaÅ‚a wysÅ‚ana', 'pl', 'yum'),
('Your new password has been saved.', 'Ihr Passwort wurde gespeichert.', 'de', 'yum'),
('Your new password has been saved.', 'La nueva contraseña ha sido guardada.', 'es', 'yum'),
('Your new password has been saved.', 'La modification de votre mot de passe a bien Ã©tÃ© mÃ©morisÃ©.', 'fr', 'yum'),
('Your new password has been saved.', 'La nuova password Ã¨ stata salvata.', 'it', 'yum'),
('Your new password has been saved.', 'Twoje nowe hasÅ‚o zostaÅ‚o zapisane.', 'pl', 'yum'),
('Your password has expired. Please enter your new Password below:', 'Ihr Passwort ist abgelaufen. Bitte geben Sie ein neues Passwort an:', 'de', 'yum'),
('Your password has expired. Please enter your new Password below:', 'La contraseña ha expirado. Por favor escribe una contraseña nueva abajo:', 'es', 'yum'),
('Your password has expired. Please enter your new Password below:', 'La durÃ©e de vie de votre mot de passe est arrivÃ©e Ã  Ã©chÃ©ance. Veuillez en definir un nouveau:', 'fr', 'yum'),
('Your password has expired. Please enter your new Password below:', 'La password Ã¨ scaduta. Si prega di inserire una nuova password:', 'it', 'yum'),
('Your privacy settings have been saved', 'Ihre Privatsphären-einstellungen wurden gespeichert', 'de', 'yum'),
('Your privacy settings have been saved', 'La configuration de vos donnÃ©es privÃ©es a bien Ã©tÃ© enregistrÃ©e', 'fr', 'yum'),
('Your privacy settings have been saved', 'Le tue opzioni Privacy sono state salvate', 'it', 'yum'),
('Your profile', 'Ihr Profil', 'de', 'yum'),
('Your profile', 'Tu perfil', 'es', 'yum'),
('Your profile', 'Ihr Profil', 'fr', 'yum'),
('Your profile', 'Il tuo profilo', 'it', 'yum'),
('Your profile', 'Ihr Profil', 'pl', 'yum'),
('Your profile', 'Ð’Ð°Ñˆ Ð¿Ñ€Ð¾Ñ„Ð¸Ð»ÑŒ', 'ru', 'yum'),
('Your registration didn''t work. Please try another E-Mail address. If this problem persists, please contact our System Administrator. ', 'Tu proceso de registro falló. Por favor intenta con otra cuenta de correo. Si el problema persiste por favor contáctanos.', 'es', 'yum'),
('Your request succeeded. Please enter below your new password:', 'Tu solicitud fué exitosa. Por favor, escribe a continuación tu nueva contraseña:', 'es', 'yum'),
('about', 'information me concernant', 'fr', 'yum'),
('about', 'Informazioni su', 'it', 'yum'),
('activation key', 'Aktivierungsschlüssel', 'de', 'yum'),
('activation key', 'clave de activación', 'es', 'yum'),
('activation key', 'ClÃ© d activation de votre compte', 'fr', 'yum'),
('activation key', 'chiave di attivazione', 'it', 'yum'),
('activation key', 'AktivierungsschlÃ¼ssel', 'pl', 'yum'),
('activation key', 'ÐšÐ»ÑŽÑ‡ Ð°ÐºÑ‚Ð¸Ð²Ð°Ñ†Ð¸Ð¸', 'ru', 'yum'),
('birthdate', 'Geburtstag', 'de', 'yum'),
('birthdate', 'anniversaire', 'fr', 'yum'),
('birthdate', 'Compleanno', 'it', 'yum'),
('birthday', 'Geburtstag', 'de', 'yum'),
('birthday', 'date de naissance', 'fr', 'yum'),
('birthday', 'Compleanno', 'it', 'yum'),
('change Password', 'Passwort ändern', 'de', 'yum'),
('change Password', 'cambiar Contraseña', 'es', 'yum'),
('change Password', 'Changer le mot de passe', 'fr', 'yum'),
('change Password', 'ZmieÅ„ hasÅ‚o', 'pl', 'yum'),
('change password', 'Passwort ändern', 'de', 'yum'),
('change password', 'cambiar contraseña', 'es', 'yum'),
('change password', 'Modifier le mot de passe', 'fr', 'yum'),
('change password', 'Cambia password', 'it', 'yum'),
('do not make my friends public', 'Meine Kontakte nicht veröffentlichen', 'de', 'yum'),
('do not make my friends public', 'Ne pas rendre publique la liste de mes contacts', 'fr', 'yum'),
('do not make my friends public', 'Non mostrare i miei contatti pubblicamente', 'it', 'yum'),
('email', 'E-Mail', 'de', 'yum'),
('email', 'correo', 'es', 'yum'),
('email', 'e-Mail', 'fr', 'yum'),
('email', 'email', 'it', 'yum'),
('email', 'mejl', 'pl', 'yum'),
('email address', 'correo electrónico', 'es', 'yum'),
('email address', 'Adres mejlowy', 'pl', 'yum'),
('firstname', 'Vorname', 'de', 'yum'),
('firstname', 'prÃ©nom', 'fr', 'yum'),
('firstname', 'Cognome', 'it', 'yum'),
('friends only', 'Nur Freunde', 'de', 'yum'),
('friends only', 'sólo amigos', 'es', 'yum'),
('friends only', 'A mes contacts seulement', 'fr', 'yum'),
('friends only', 'Solo contatti', 'it', 'yum'),
('lastname', 'Nachname', 'de', 'yum'),
('lastname', 'nom de famille', 'fr', 'yum'),
('lastname', 'Nome', 'it', 'yum'),
('make my friends public', 'Meine Kontakte veröffentlichen', 'de', 'yum'),
('make my friends public', 'Rendre visibles mes contacts', 'fr', 'yum'),
('make my friends public', 'Rendi pubblici i miei contatti', 'it', 'yum'),
('no', 'Nein', 'de', 'yum'),
('no', 'Non', 'fr', 'yum'),
('no', 'No', 'it', 'yum'),
('of user', 'von Benutzer', 'de', 'yum'),
('of user', 'de l utilisateur', 'fr', 'yum'),
('of user', 'dell''utente', 'it', 'yum'),
('only to my friends', 'Nur an meine Freunde veröffentlichen', 'de', 'yum'),
('only to my friends', 'Visible seulement pour mes contacts', 'fr', 'yum'),
('only to my friends', 'solamente ai miei contatti', 'it', 'yum'),
('password', 'Passwort', 'de', 'yum'),
('password', 'contraseña', 'es', 'yum'),
('password', 'mot de passe', 'fr', 'yum'),
('password', 'password', 'it', 'yum'),
('password', 'hadÅ‚o', 'pl', 'yum'),
('password', 'ÐŸÐ°Ñ€Ð¾Ð»ÑŒ', 'ru', 'yum'),
('private', 'Privat', 'de', 'yum'),
('private', 'privado', 'es', 'yum'),
('private', 'PrivÃ©', 'fr', 'yum'),
('private', 'Privato', 'it', 'yum'),
('private', 'prywatny', 'pl', 'yum'),
('protected', 'Geschützt', 'de', 'yum'),
('protected', 'protegido', 'es', 'yum'),
('protected', 'ProtÃ¨gÃ©', 'fr', 'yum'),
('protected', 'Protetto', 'it', 'yum'),
('protected', 'chroniony', 'pl', 'yum'),
('public', 'Öffentlich', 'de', 'yum'),
('public', 'público', 'es', 'yum'),
('public', 'Publique', 'fr', 'yum'),
('public', 'Pubblico', 'it', 'yum'),
('public', 'publiczny', 'pl', 'yum'),
('street', 'rue', 'fr', 'yum'),
('street', 'Indirizzo', 'it', 'yum'),
('timestamp', 'Zeitstempel', 'de', 'yum'),
('timestamp', 'marca de tiempo', 'es', 'yum'),
('timestamp', 'tempon de date et heure', 'fr', 'yum'),
('timestamp', 'timestamp', 'it', 'yum'),
('username', 'Benutzername', 'de', 'yum'),
('username', 'usuario', 'es', 'yum'),
('username', 'nom d utilisateur', 'fr', 'yum'),
('username', 'username', 'it', 'yum'),
('username', 'nazwa uÅ¼ytkownika', 'pl', 'yum'),
('username', 'Ð›Ð¾Ð³Ð¸Ð½', 'ru', 'yum'),
('username or email', 'Benutzername oder E-Mail Adresse', 'de', 'yum'),
('username or email', 'nombre de usuario o email', 'es', 'yum'),
('username or email', 'nom d utilisateur ou adresse e-mail', 'fr', 'yum'),
('username or email', 'username or email', 'it', 'yum'),
('username or email', 'nazwa uÅ¼ytkowniak lub mejl', 'pl', 'yum'),
('username or email', 'Ð›Ð¾Ð³Ð¸Ð½ Ð¸Ð»Ð¸ email', 'ru', 'yum'),
('yes', 'Ja, diese Daten veröffentlichen', 'de', 'yum'),
('yes', 'Oui, rendre publique ces donnÃ©es', 'fr', 'yum'),
('yes', 'Si', 'it', 'yum'),
('zipcode', 'Postleitzahl', 'de', 'yum'),
('zipcode', 'code postal', 'fr', 'yum'),
('zipcode', 'CAP', 'it', 'yum'),
('{attribute} is too long (max. {num} characters).', '{attribute} es muy larga (max. {num} caracteres).', 'es', 'yum'),
('{attribute} is too long (max. {num} characters).', '{attribute} troppo lungo (max. {num} caratteri).', 'it', 'yum'),
('{attribute} is too long (max. {num} characters).', '{attribute} jest zbyt dÅ‚ugi (max. {num} znakÃ³w).', 'pl', 'yum'),
('{attribute} is too short (min. {num} characters).', '{attribute} es muy corta (min. {num} caracteres).', 'es', 'yum'),
('{attribute} is too short (min. {num} characters).', '{attribute} troppo corto (min. {num} caratteri).', 'it', 'yum'),
('{attribute} is too short (min. {num} characters).', '{attribute} jest zbyt krÃ³tki (min. {num} znakÃ³w).', 'pl', 'yum'),
('{attribute} must include at least {num} digits.', '{attribute} debe tener al menos {num} dígitos.', 'es', 'yum'),
('{attribute} must include at least {num} digits.', '{attribute}deve includere almeno {num} numeri.', 'it', 'yum'),
('{attribute} must include at least {num} digits.', '{attribute} musi zawieraÄ‡ co najmniej {num} cyfr.', 'pl', 'yum'),
('{attribute} must include at least {num} lower case letters.', '{attribute} debe tener al menos {num} caracteres en minúscula.', 'es', 'yum'),
('{attribute} must include at least {num} lower case letters.', '{attribute} deve includere almeno {num} lettere minuscole.', 'it', 'yum'),
('{attribute} must include at least {num} lower case letters.', '{attribute} musi zawieraÄ‡ co najmniej {num} maÅ‚ych liter.', 'pl', 'yum'),
('{attribute} must include at least {num} symbols.', '{attribute} debe tener al menos {num} símbolos.', 'es', 'yum'),
('{attribute} must include at least {num} symbols.', '{attribute} deve includere almeno {num} simboli.', 'it', 'yum'),
('{attribute} must include at least {num} symbols.', '{attribute} musi zawieraÄ‡ co najmniej {num} symboli.', 'pl', 'yum'),
('{attribute} must include at least {num} upper case letters.', '{attribute} debe tener al menos {num} caracteres en mayúscula.', 'es', 'yum'),
('{attribute} must include at least {num} upper case letters.', '{attribute} deve includere almeno {num} lettere maiuscole.', 'it', 'yum'),
('{attribute} must include at least {num} upper case letters.', '{attribute} musi zawieraÄ‡ co najmniej {num} duÅ¼ych liter.', 'pl', 'yum'),
('{attribute} must not contain more than {num} sequentially repeated characters.', '{attribute} no debe tener más de {num} caracteres repetidos secuencialmente.', 'es', 'yum'),
('{attribute} must not contain more than {num} sequentially repeated characters.', '{attribute} non deve contenere {num} caratteri ripetuti sequenzialmente.', 'it', 'yum'),
('{attribute} must not contain more than {num} sequentially repeated characters.', '{attribute} nie moÅ¼e zawieraÄ‡ wiÄ™cej niÅ¼ {num} sekwencji znakÃ³w.', 'pl', 'yum'),
('{attribute} must not contain whitespace.', '{attribute} no debe contener espacios.', 'es', 'yum'),
('{attribute} must not contain whitespace.', '{attribute} non deve contenere spazi.', 'it', 'yum'),
('{attribute} must not contain whitespace.', '{attribute} nie moÅ¼e zawieraÄ‡ biaÅ‚ych znakÃ³w.', 'pl', 'yum');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `activationKey` varchar(128) NOT NULL DEFAULT '',
  `createtime` int(10) NOT NULL DEFAULT '0',
  `lastvisit` int(10) NOT NULL DEFAULT '0',
  `lastaction` int(10) NOT NULL DEFAULT '0',
  `lastpasswordchange` int(10) NOT NULL DEFAULT '0',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `avatar` varchar(255) DEFAULT NULL,
  `notifyType` enum('None','Digest','Instant','Threshold') DEFAULT 'Instant',
  `profile_picture` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `activationKey`, `createtime`, `lastvisit`, `lastaction`, `lastpasswordchange`, `superuser`, `status`, `avatar`, `notifyType`, `profile_picture`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 1333098540, 1333109867, 0, 0, 1, 1, NULL, 'Instant', ''),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', '', 1333098540, 0, 0, 0, 0, 1, NULL, 'Instant', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE IF NOT EXISTS `user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `owner_id` int(11) NOT NULL,
  `participants` text,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_group_message`
--

CREATE TABLE IF NOT EXISTS `user_group_message` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) unsigned NOT NULL,
  `group_id` int(11) unsigned NOT NULL,
  `createtime` int(11) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`user_id`, `role_id`) VALUES
(2, 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `FK_Message_SourceMessage` FOREIGN KEY (`id`) REFERENCES `sourcemessage` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
