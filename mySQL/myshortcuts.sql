-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2017 at 08:59 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myshortcuts`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Ordering` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID`, `Name`, `Ordering`) VALUES
(1, 'ألوان', 1),
(2, 'خطوط غرافك', 2),
(3, 'برامج غرافك', 3),
(4, 'دعم غرافيك', 4),
(5, 'مدارس غرافك', 5),
(6, 'المزيد غرافك', 6),
(7, 'خطوط ويب', 11),
(8, 'برامج ويب', 12),
(9, 'دعم ويب', 13),
(10, 'مدارس ويب', 14),
(11, 'المزيد ويب', 15),
(12, 'أختبار ويب', 21),
(13, 'كتيب اللغات', 22),
(14, 'أستضافة', 23),
(15, 'برامج برمجة ويب', 24),
(16, 'دعم برمجة الويب', 25),
(17, 'مدارس برمجة ويب', 26),
(18, 'المزيد برمجة ويب', 27),
(19, 'كتيب اللغات سطح المكتب', 31),
(20, 'برامج سطح المكتب', 32),
(21, 'دعم سطح المكتب', 33),
(22, 'مدارس سطح المكتب', 34),
(23, 'المزيد سطح المكتب', 35),
(24, 'كتيب اللغات موبايل', 41),
(25, 'برامج موبايل', 42),
(26, 'دعم موبايل', 43),
(27, 'مدارس موبايل', 44),
(28, 'المزيد موبايل', 45),
(29, 'المزيد من البرامج', 51),
(30, 'المزيد من الدعم', 52),
(31, 'المزيد من المدارس', 53),
(32, 'صور', 7),
(1000, 'More', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Comment` text NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT '0',
  `Comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`ID`, `Name`, `Comment`, `Status`, `Comment_date`) VALUES
(1, 'kamal', 'Goof\r\n', 1, '2017-09-29'),
(2, 'fdgdfg', 'fdgdfgdg', 1, '2017-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `ID` smallint(6) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Email_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `ID` smallint(128) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `Message` text NOT NULL,
  `dateMessage` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` tinyint(1) NOT NULL,
  `Admin` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Admin`, `Password`) VALUES
(0, 'kamal', 'fbbe762d09a0ff938155d0f154b85410383f681b');

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Domain` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Images` varchar(255) NOT NULL,
  `Add_Date` date NOT NULL,
  `Approve` tinyint(4) DEFAULT '0',
  `Stars` smallint(6) NOT NULL DEFAULT '0',
  `cat_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`ID`, `Name`, `Domain`, `Description`, `Images`, `Add_Date`, `Approve`, `Stars`, `cat_ID`) VALUES
(2, 'color.adobe', 'https://color.adobe.com', 'موقع أدوبي للألوان ', '705959_color-adobe.png', '2017-09-24', 1, 5, 1),
(3, 'colorzilla', 'http://www.colorzilla.com', 'يساعد على أخذ الألوان من المتصفح وأدوات أخرى لتدريجها', '632591_colorzilla.png', '2017-09-24', 1, 4, 1),
(4, 'flatui colors', 'https://flatuicolors.com', ' يوفر ألوان ديجتال وعدة أنماط أخرى', '193628_flatuicolors.png', '2017-09-24', 1, 5, 1),
(5, 'brand colors', 'https://brandcolors.net', 'تدرجات ألوان لجميع الشركات العالمة', '18355_brandcolors.png', '2017-09-24', 1, 4, 1),
(6, 'scheme color', 'http://www.schemecolor.com', 'تنسيقيات للألوان جميلة جدا', '407281_schemecolor.png', '2017-09-24', 1, 3, 1),
(7, 'colours name', 'http://colours.neilorangepeel.com', 'يعطي أسماء الألوان ', '314262_colours-neiloran.png', '2017-09-24', 1, 3, 1),
(8, 'ps-learn', 'https://www.ps-learn.com/%D9%85%D8%AC%D9%85%D9%88%D8%B9%D8%A9-%D8%AE%D8%B7%D9%88%D8%B7-%D8%AC%D8%B1%D8%A7%D9%81-%D8%A7%D9%8A%D8%B3%D8%AA-FONT-ge-ss-%D9%83%D8%A7%D9%85%D9%84%D8%A9/', 'مجموعة خطوط جراف ايست العربية كاملة للفوتوشوب ', '877812_gssFont.png', '2017-09-24', 1, 4, 2),
(9, 'خط بستان', 'https://www.ps-learn.com/%D8%AE%D8%B7-%D8%A8%D8%B3%D8%AA%D8%A7%D9%86-bustan-font/', 'خط بستان العربي الفارسي العريض', '513962_fontbstan.jpg', '2017-09-24', 1, 5, 2),
(10, 'ps blogspot', 'http://extensions-ps.blogspot.com/search/label/Fonts?max-results=15', 'مجموعة خطوط كبيرة ومتنوعة', '668921_ps.blogspot.jpg', '2017-09-24', 1, 4, 2),
(13, 'sss', 'ss', '', '', '2017-10-05', 0, 0, 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Http` (`Domain`),
  ADD KEY `cat_1` (`cat_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `ID` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `ID` smallint(128) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `websites`
--
ALTER TABLE `websites`
  ADD CONSTRAINT `cat_1` FOREIGN KEY (`cat_ID`) REFERENCES `categories` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
