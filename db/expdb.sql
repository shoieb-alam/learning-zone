-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 07:15 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacttable`
--

CREATE TABLE `contacttable` (
  `fullname` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacttable`
--

INSERT INTO `contacttable` (`fullname`, `email`, `subject`, `message`, `time`) VALUES
('newuser', 'newuser@gmail.com', 'increase number of courses', 'about courses', '09/23/20 9.44:12<bSat, 23 Sep 2021 09:44:12 +0200>'),
('Abdur Rahman', 'abd@gmail.com', 'add more courses', 'course', '11/21/21 17.24:02<bSun, 21 Nov 2021 17:24:02 +0100>'),
('Abdur Rahman', 'abd@gmail.com', 'add more courses', 'course', '11/21/21 17.24:17<bSun, 21 Nov 2021 17:24:17 +0100>'),
('Abdur Rahman', 'abd@gmail.com', 'add more courses', 'course', '11/21/21 17.24:49<bSun, 21 Nov 2021 17:24:49 +0100>'),
('Abdur Rahman', 'abd@gmail.com', 'add more courses', 'course', '11/21/21 17.25:48<bSun, 21 Nov 2021 17:25:48 +0100>'),
('Abdur Rahman', 'abd@gmail.com', 'add more courses', 'course', '11/21/21 17.25:58<bSun, 21 Nov 2021 17:25:58 +0100>'),
('Abdur Rahman', 'abd@gmail.com', 'add more courses', 'course', '11/21/21 17.26:07<bSun, 21 Nov 2021 17:26:07 +0100>'),
('Abdur Rahman', 'abd@gmail.com', 'add more courses', 'course', '11/21/21 17.26:44<bSun, 21 Nov 2021 17:26:44 +0100>'),
('Abdur Rahman', 'abd@gmail.com', 'add more courses', 'course', '11/21/21 17.26:53<bSun, 21 Nov 2021 17:26:53 +0100>'),
('Abdur Rahman', 'abd@gmail.com', 'add more courses', 'course', '11/21/21 17.27:05<bSun, 21 Nov 2021 17:27:05 +0100>'),
('Abdur Rahman', 'abd@gmail.com', 'add more courses', 'course', '11/21/21 17.27:17<bSun, 21 Nov 2021 17:27:17 +0100>'),
('Abdur Rahman', 'abd@gmail.com', 'add more courses', 'course', '11/21/21 17.27:35<bSun, 21 Nov 2021 17:27:35 +0100>'),
('Abdur Rahman', 'abd@gmail.com', 'add more courses', 'course', '11/21/21 17.27:46<bSun, 21 Nov 2021 17:27:46 +0100>'),
('User1', 'user@gmail.com', 'excellent ', 'features', '11/23/21 7.28:19<bTue, 23 Nov 2021 07:28:19 +0100>'),
('User', 'user@gmail.com', 'add cs courses', 'course', '11/29/21 18.44:18<bMon, 29 Nov 2021 18:44:18 +0100>');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `visit` int(100) NOT NULL,
  `id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`visit`, `id`) VALUES
(238, 0),
(165, 1),
(11, 2),
(15, 3),
(13, 4),
(0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `coursetable`
--

CREATE TABLE `coursetable` (
  `id` int(11) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title1` varchar(500) NOT NULL,
  `url1` text DEFAULT NULL,
  `title2` varchar(500) NOT NULL,
  `url2` text DEFAULT NULL,
  `title3` varchar(500) NOT NULL,
  `url3` text DEFAULT NULL,
  `title4` varchar(500) NOT NULL,
  `url4` text DEFAULT NULL,
  `title5` varchar(500) NOT NULL,
  `url5` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursetable`
--

INSERT INTO `coursetable` (`id`, `coursename`, `description`, `image`, `title1`, `url1`, `title2`, `url2`, `title3`, `url3`, `title4`, `url4`, `title5`, `url5`) VALUES
(1, 'CCNA ', 'CCNA exam covers networking fundamentals, IP services, security fundamentals, automation and programmability.', 'cisco.jpg', 'Cisco 1', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 2', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 3', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 4', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 5', 'https://www.youtube.com/watch?v=-zqe2mFuAEw'),
(2, 'CCNA ', 'CCNA exam covers networking fundamentals, IP services, security fundamentals, automation and programmability.', 'cisco.jpg', 'Cisco 1', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 2', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 3', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 4', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 5', 'https://www.youtube.com/watch?v=-zqe2mFuAEw'),
(3, 'CCNA ', 'CCNA exam covers networking fundamentals, IP services, security fundamentals, automation and programmability.', 'cisco.jpg', 'Cisco 1', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 2', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 3', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 4', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 5', 'https://www.youtube.com/watch?v=-zqe2mFuAEw'),
(4, 'CCNA ', 'CCNA exam covers networking fundamentals, IP services, security fundamentals, automation and programmability.', 'cisco.jpg', 'Cisco 1', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 2', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 3', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 4', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 5', 'https://www.youtube.com/watch?v=-zqe2mFuAEw'),
(5, 'CCNA ', 'CCNA exam covers networking fundamentals, IP services, security fundamentals, automation and programmability.', 'cisco.jpg', 'Cisco 1', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 2', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 3', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 4', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 5', 'https://www.youtube.com/watch?v=-zqe2mFuAEw'),
(6, 'CCNA ', 'CCNA exam covers networking fundamentals, IP services, security fundamentals, automation and programmability.', 'cisco.jpg', 'Cisco 1', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 2', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 3', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 4', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 5', 'https://www.youtube.com/watch?v=-zqe2mFuAEw'),
(7, 'Cisco', 'CCNA exam covers networking fundamentals, IP services, security fundamentals, automation and programmability.', 'aboutus.png', 'Cisco 1', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 2', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 3', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 4', 'https://www.youtube.com/watch?v=-zqe2mFuAEw', 'Cisco 5', 'https://www.youtube.com/watch?v=-zqe2mFuAEw');

-- --------------------------------------------------------

--
-- Table structure for table `exptable`
--

CREATE TABLE `exptable` (
  `fname` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exptable`
--

INSERT INTO `exptable` (`fname`, `password`, `email`) VALUES
('newuser', 'newuser', 'newuser@gmail.com'),
('demoaccount', 'demoaccoun', 'demoaccount@gmail.com'),
('newaccount', 'newaccount', 'newaccount@gmail.com'),
('shoieb', '12345', 'shoieb.ctg@gmail.com'),
('user1', '00000', 'user1@gmail.com'),
('User', '12345', 'user@gmail.com'),
('ada', 'daa', '');

-- --------------------------------------------------------

--
-- Table structure for table `paymenttable`
--

CREATE TABLE `paymenttable` (
  `id` int(11) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `cred` varchar(30) NOT NULL,
  `coursename` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymenttable`
--

INSERT INTO `paymenttable` (`id`, `fname`, `password`, `cred`, `coursename`, `time`) VALUES
(1, 'newuser', 'newuser', '123456', 'javascript', '09/23/21 9.45:13<bSat, 23 Sep 2021 09:45:13 +0200>'),
(2, 'shoieb', '12345', '1234567890', 'javascript', '11/21/21 7.10:00<bSun, 21 Nov 2021 07:10:00 +0100>'),
(3, 'shoieb', '12345', '1234567890', 'angular', '11/22/21 3.41:23<bMon, 22 Nov 2021 03:41:23 +0100>'),
(4, 'shoieb', '12345', 'saew2uu987', 'nodejs', '11/22/21 4.21:39<bMon, 22 Nov 2021 04:21:39 +0100>'),
(5, 'shoieb', '12345', '1234567890', 'vuejs', '11/22/21 4.32:27<bMon, 22 Nov 2021 04:32:27 +0100>'),
(6, 'shoieb', '12345', '1234567890', 'mongodb', '11/22/21 4.44:38<bMon, 22 Nov 2021 04:44:38 +0100>'),
(7, 'shoieb', '12345', '1234567890', 'bootstrap', '11/22/21 4.45:28<bMon, 22 Nov 2021 04:45:28 +0100>'),
(8, 'shoieb', '12345', '1234567890', 'bootstrap', '11/22/21 4.47:04<bMon, 22 Nov 2021 04:47:04 +0100>'),
(9, 'shoieb', '12345', '1234567890', 'c-programming', '11/22/21 4.48:03<bMon, 22 Nov 2021 04:48:03 +0100>'),
(10, 'shoieb', '12345', '1234567890', 'c-programming', '11/22/21 4.48:14<bMon, 22 Nov 2021 04:48:14 +0100>'),
(11, 'shoieb', '12345', '1234567890', 'java', '11/22/21 4.51:29<bMon, 22 Nov 2021 04:51:29 +0100>'),
(12, 'shoieb', '12345', '1234567890', 'java', '11/22/21 4.51:45<bMon, 22 Nov 2021 04:51:45 +0100>'),
(13, 'shoieb', '12345', '1234567890', 'php', '11/22/21 4.52:02<bMon, 22 Nov 2021 04:52:02 +0100>'),
(14, 'shoieb', '12345', '1234567890', 'python', '11/22/21 4.53:46<bMon, 22 Nov 2021 04:53:46 +0100>'),
(15, 'shoieb', '12345', '1234567890', 'python', '11/22/21 5.42:21<bMon, 22 Nov 2021 05:42:21 +0100>'),
(16, 'user1', '00000', '1111111111', 'bootstrap', '11/23/21 7.30:50<bTue, 23 Nov 2021 07:30:50 +0100>'),
(17, 'User', '12345', 'TXJ94WI86M', 'python', '11/23/21 15.29:02<bTue, 23 Nov 2021 15:29:02 +0100>'),
(18, 'User', '12345', 'IXW5Z3HT02', 'android', '11/23/21 16.12:05<bTue, 23 Nov 2021 16:12:05 +0100>'),
(19, 'User', '12345', 'U6D5PC37DM', 'react', '11/23/21 16.12:55<bTue, 23 Nov 2021 16:12:55 +0100>'),
(20, 'User', '12345', 'S0O2J53NH8', 'angular', '11/23/21 16.14:33<bTue, 23 Nov 2021 16:14:33 +0100>'),
(21, 'User', '12345', '8E44K85U7C', 'nodejs', '11/23/21 16.17:25<bTue, 23 Nov 2021 16:17:25 +0100>'),
(22, 'User', '12345', 'T7X96FAC30', 'vuejs', '11/23/21 16.21:19<bTue, 23 Nov 2021 16:21:19 +0100>'),
(23, 'User', '12345', 'B63KPS7V4N', 'mongodb', '11/23/21 16.22:25<bTue, 23 Nov 2021 16:22:25 +0100>'),
(24, 'User', '12345', 'P4K3K49V0N', 'bootstrap', '11/23/21 16.23:11<bTue, 23 Nov 2021 16:23:11 +0100>'),
(25, 'User', '12345', 'DE6790HH65', 'android', '11/23/21 19.23:31<bTue, 23 Nov 2021 19:23:31 +0100>'),
(26, 'User', '12345', '1234567890', 'php', '11/28/21 6.53:25<bSun, 28 Nov 2021 06:53:25 +0100>'),
(27, 'User', '12345', '1111111111', 'android', '11/29/21 15.55:41<bMon, 29 Nov 2021 15:55:41 +0100>'),
(28, 'User', '12345', '1234567890', 'python', '11/29/21 18.38:48<bMon, 29 Nov 2021 18:38:48 +0100>'),
(29, 'User', '12345', '1111111111', 'CCNA', '12/10/21 10.22:59<bFri, 10 Dec 2021 10:22:59 +0100>'),
(30, 'User', '12345', '1111111111', 'CCNA', '12/10/21 10.26:55<bFri, 10 Dec 2021 10:26:55 +0100>'),
(31, 'User', '12345', '1111111111', 'CCNA', '12/10/21 10.30:33<bFri, 10 Dec 2021 10:30:33 +0100>');

-- --------------------------------------------------------

--
-- Table structure for table `ratingtable`
--

CREATE TABLE `ratingtable` (
  `fname` varchar(20) NOT NULL,
  `ui` int(10) NOT NULL,
  `performance` int(10) NOT NULL,
  `design` int(10) NOT NULL,
  `usablity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratingtable`
--

INSERT INTO `ratingtable` (`fname`, `ui`, `performance`, `design`, `usablity`) VALUES
('user141', 9, 8, 6, 9),
('newuser', 10, 10, 10, 10),
('shoieb', 10, 10, 10, 10),
('shoieb', 10, 1, 1, 1),
('shoieb', 4, 1, 1, 1),
('shoieb', 1, 5, 5, 5),
('shoieb', 5, 5, 5, 5),
('shoieb', 5, 5, 5, 5),
('shoieb', 5, 5, 5, 5),
('shoieb', 5, 5, 5, 5),
('shoieb', 5, 5, 5, 5),
('User', 8, 6, 8, 9),
('User', 1, 5, 5, 5),
('User', 7, 8, 7, 9),
('User', 10, 10, 10, 10),
('User', 8, 7, 9, 6);

-- --------------------------------------------------------

--
-- Table structure for table `reviewtable`
--

CREATE TABLE `reviewtable` (
  `username` varchar(20) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviewtable`
--

INSERT INTO `reviewtable` (`username`, `comment`, `time`) VALUES
('newuser', 'create more courses', '07/08/21 9.43:17<bSat, 07 Aug 2021 09:43:17 +0200>'),
('shoieb', 'Nice Platform', '11/23/21 7.52:31<bTue, 23 Nov 2021 07:52:31 +0100>'),
('shoieb', 'Nice Platform', '11/23/21 7.52:37<bTue, 23 Nov 2021 07:52:37 +0100>'),
('shoieb', 'awesome', '11/23/21 8.59:52<bTue, 23 Nov 2021 08:59:52 +0100>'),
('shoieb', 'awesome', '11/23/21 9.00:01<bTue, 23 Nov 2021 09:00:01 +0100>'),
('User', 'awesome', '11/29/21 18.53:14<bMon, 29 Nov 2021 18:53:14 +0100>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coursetable`
--
ALTER TABLE `coursetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymenttable`
--
ALTER TABLE `paymenttable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coursetable`
--
ALTER TABLE `coursetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `paymenttable`
--
ALTER TABLE `paymenttable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
