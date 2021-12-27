-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2021 at 07:09 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+06:00";


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
(295, 0),
(265, 1),
(13, 2),
(16, 3),
(15, 4),
(0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `coursetable`
--

CREATE TABLE `coursetable` (
  `id` int(11) NOT NULL,
  `coursename` varchar(20) CHARACTER SET latin1 NOT NULL,
  `description` varchar(500) CHARACTER SET latin1 NOT NULL,
  `image` varchar(100) CHARACTER SET latin1 NOT NULL,
  `title1` varchar(250) CHARACTER SET latin1 NOT NULL,
  `url1` text CHARACTER SET latin1 NOT NULL,
  `title2` varchar(250) CHARACTER SET latin1 NOT NULL,
  `url2` text CHARACTER SET latin1 NOT NULL,
  `title3` varchar(250) CHARACTER SET latin1 NOT NULL,
  `url3` text CHARACTER SET latin1 NOT NULL,
  `title4` varchar(250) CHARACTER SET latin1 NOT NULL,
  `url4` text CHARACTER SET latin1 NOT NULL,
  `title5` varchar(250) CHARACTER SET latin1 NOT NULL,
  `url5` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coursetable`
--

INSERT INTO `coursetable` (`id`, `coursename`, `description`, `image`, `title1`, `url1`, `title2`, `url2`, `title3`, `url3`, `title4`, `url4`, `title5`, `url5`) VALUES
(1, 'Python', 'You need to practice and apply same concept to your examples. This is completely good for beginners.', 'python.jpg', 'Installation and Introduction', 'https://www.youtube.com/embed/QJtuhoOfGp0?rel=0&modestbranding=1&showinfo=0&autoplay=1', 'Hello World and Basic of Variables', 'https://www.youtube.com/embed/O98zkbsSkJY?rel=0&modestbranding=1&showinfo=0 ', 'Variables and Math Operations', 'https://www.youtube.com/embed/IrIYlf80QBg?rel=0&modestbranding=1&showinfo=0', 'If else statements', 'https://www.youtube.com/embed/xRsWJYlJBCA?rel=0&modestbranding=1&showinfo=0', 'Loop (While Loop)', 'https://www.youtube.com/embed/Cu6JRq7DKKQ?rel=0&modestbranding=1&showinfo=0'),
(2, 'Android', 'Mobile app development is the act or process by which a mobile app is developed for mobile devices.', 'android.jpg', 'Create Android app without programming Intro', 'https://www.youtube.com/embed/oi-d7dQ-TJM?rel=0&modestbranding=1&showinfo=0&autoplay=1', 'Appinventor Setup', 'https://www.youtube.com/embed/zijtr5alY4w?rel=0&modestbranding=1&showinfo=0 ', 'Appinventor Interface', 'https://www.youtube.com/embed/na6L9XO8cVM?rel=0&modestbranding=1&showinfo=0', 'First App', 'https://www.youtube.com/embed/T8WZiL9khLM?rel=0&modestbranding=1&showinfo=0', 'Text to Voice Accelerometer', 'https://www.youtube.com/embed/U9BsdgzqEvM?rel=0&modestbranding=1&showinfo=0'),
(3, 'React', 'React is a free and open-source front-end JavaScript library for building user interfaces or UI components.', 'react.jpg', 'What is React and How it works', 'https://www.youtube.com/embed/5Xy-t8k_M4A?rel=0&modestbranding=1&showinfo=0&autoplay=1 ', 'React Virtual DOM Explained', 'https://www.youtube.com/embed/2C5834qx0sA?rel=0&modestbranding=1&showinfo=0 ', 'React ESLint, Formatting with Prettier, Editor & Project Setup', 'https://www.youtube.com/embed/ii8GaRjRoNI?rel=0&modestbranding=1&showinfo=0 ', 'React Prerequisites', 'https://www.youtube.com/embed/-oGMwOOHFyk?rel=0&modestbranding=1&showinfo=0 ', 'React JSX Element & Rendering Elements', 'https://www.youtube.com/embed/Uj-Bt0pWEP4?rel=0&modestbranding=1&showinfo=0 '),
(4, 'Angular', 'Develop modern, complex, responsive and scalable web applications with Angular 12.', 'angular.jpg', 'What is Angular', 'https://www.youtube.com/embed/8auBpr_x2FQ?rel=0&modestbranding=1&showinfo=0&autoplay=1', 'First application with angular', 'https://www.youtube.com/embed/9RALrCD-JeU?rel=0&modestbranding=1&showinfo=0', 'React ESLint, Formatting with Prettier, Editor & Project Setup', 'https://www.youtube.com/embed/ii8GaRjRoNI?rel=0&modestbranding=1&showinfo=0 ', 'Folder Structure', 'https://www.youtube.com/embed/gB8nojn_QFQ?rel=0&modestbranding=1&showinfo=0', 'How to Uninstall Angular and Install a Specific Version', 'https://www.youtube.com/embed/cJgaZEb0QWc?rel=0&modestbranding=1&showinfo=0'),
(5, 'Node', 'Build, test, and launch Node apps, Create Express web servers and APIs, Store data with Mongoose and Deploy to production.', 'node.jpg', 'Introduction', 'https://www.youtube.com/embed/WC-g0JtEIwM?rel=0&modestbranding=1&showinfo=0&autoplay=1', 'How Node JS Works', 'https://www.youtube.com/embed/qImH1bFubW4?rel=0&modestbranding=1&showinfo=0', 'Installation - VS Code Editor Setup', 'https://www.youtube.com/embed/J5sCarsKX1s?rel=0&modestbranding=1&showinfo=0', 'Global Object & Module System', 'https://www.youtube.com/embed/IFBeIUX3J8M?rel=0&modestbranding=1&showinfo=0', 'Server & Core Modules', 'https://www.youtube.com/embed/6Yv3YXgPBJU?rel=0&modestbranding=1&showinfo=0'),
(6, 'Vue', 'Options and Composition API, Vuex, Vue Router, Creating reusable components, Design Patterns, Front-end Routing.', 'vue.jpg', 'Introduction', 'https://www.youtube.com/embed/0deA8BkOKC8?rel=0&modestbranding=1&showinfo=0&autoplay=1 ', 'VS Code & Extension Install ', 'https://www.youtube.com/embed/3Z9BxgucxnQ?rel=0&modestbranding=1&showinfo=0', 'File Setup', 'https://www.youtube.com/embed/tpd0tTa-ZTo?rel=0&modestbranding=1&showinfo=0 ', 'EL & Data Property', 'https://www.youtube.com/embed/cP1CBuj-3FQ?rel=0&modestbranding=1&showinfo=0 ', 'Methods', 'https://www.youtube.com/embed/umO7HoOYO1I?rel=0&modestbranding=1&showinfo=0'),
(7, 'MongoDB', 'Know all about MongoDB - be it administrative tasks like creating replica sets or developing web application using MongoDB, How to create and drop databases.', 'mongodb.jpg', 'Getting Started Node With MongoDB', 'https://www.youtube.com/embed/3IXjDqpURhY?rel=0&modestbranding=1&showinfo=0&autoplay=1', 'Create New MongoDB', 'https://www.youtube.com/embed/83gu4LqDXrc?rel=0&modestbranding=1&showinfo=0', 'Connect MongoDB Compass With MogoDB Cluster', 'https://www.youtube.com/embed/-N8mKEqWTLs?rel=0&modestbranding=1&showinfo=0', 'Create New MongoDB Node JS Project', 'https://www.youtube.com/embed/CFdSDgAQVhY?rel=0&modestbranding=1&showinfo=0', 'Create Node js connection with mongoDB Cluster', 'https://www.youtube.com/embed/aQGAQho9vDk?rel=0&modestbranding=1&showinfo=0'),
(8, 'Bootstrap', 'Design a layout in CSS from scratch. Design the look and feel of an application Mock Reddit’s response from a file.', 'bootstrap.jpg', 'Introduction', 'https://www.youtube.com/embed/aXRS-YzWyJw?rel=0&modestbranding=1&showinfo=0&autoplay=1', 'Initial Environment Setup', 'https://www.youtube.com/embed/6H43yyRuy8Q?rel=0&modestbranding=1&showinfo=0', 'Headings & Basic Typography', 'https://www.youtube.com/embed/kLXnS_ZoN8Y?rel=0&modestbranding=1&showinfo=0', 'Text Alignment & Display', 'https://www.youtube.com/embed/G7Ns6p0GVho?rel=0&modestbranding=1&showinfo=0', 'Floats & Fixed Positions', 'https://www.youtube.com/embed/s1EYrAkFBZI?rel=0&modestbranding=1&showinfo=0'),
(9, 'JavaScript', 'JavaScript (JS) is a lightweight, interpreted, or just-in-time compiled programming language with first-class functions.', 'js.jpg', 'Course Plan', 'https://www.youtube.com/embed/sNExzRKgT0Y?rel=0&modestbranding=1&showinfo=0&autoplay=1', 'Getting Started', 'https://www.youtube.com/embed/aPv6Sl89CoA?rel=0&modestbranding=1&showinfo=0', 'Syntax & Statement', 'https://www.youtube.com/embed/eKh2Sz0am6k?rel=0&modestbranding=1&showinfo=0', 'Example Syntax & Statement', 'https://www.youtube.com/embed/83IIWeZ-itM?rel=0&modestbranding=1&showinfo=0', 'Variable & Data types', 'https://www.youtube.com/embed/czwuyQIvdbg?rel=0&modestbranding=1&showinfo=0'),
(10, 'C-Programming', 'C Programming will increase career options. Become a better dev in other languages by learning C. Pointers explained.', 'c.jpg', 'Course Introduction', 'https://www.youtube.com/embed/J8CImQO0Ogw?rel=0&modestbranding=1&showinfo=0&autoplay=1', 'Introduction to Online Judge', 'https://www.youtube.com/embed/O--l6Kkom1s?rel=0&modestbranding=1&showinfo=0', 'Programming Language & C', 'https://www.youtube.com/embed/XEq-eqUgolM?rel=0&modestbranding=1&showinfo=0', 'Codeblocks and Hello World!', 'https://www.youtube.com/embed/e05OLHHQ5AQ?rel=0&modestbranding=1&showinfo=0', 'Variable', 'https://www.youtube.com/embed/cp83ni8B1b0?rel=0&modestbranding=1&showinfo=0'),
(11, 'Java', 'This course we will cover, Datatypes in java programming, Function in Java programming, Loops in Java programming.', 'java.jpg', 'Introduction to Java', 'https://www.youtube.com/embed/hf4k4OWlBfI?rel=0&modestbranding=1&showinfo=0&autoplay=1', 'Setup JDK with Netbeans together', 'https://www.youtube.com/embed/vLeY9fkdWiU?rel=0&modestbranding=1&showinfo=0', 'First Java Application', 'https://www.youtube.com/embed/ZBsm7mX4cE4?rel=0&modestbranding=1&showinfo=0', 'Escape sequence', 'https://www.youtube.com/embed/_1N8dKsQ8JE?rel=0&modestbranding=1&showinfo=0', 'Comments in Java', 'https://www.youtube.com/embed/jZlMh69-45c?rel=0&modestbranding=1&showinfo=0'),
(12, 'PHP', 'Build Website from scratch with PHP, Understanding all core concepts and OOP, Understanding PHP7 features, CRUD Operation in core PHP', 'php.jpg', 'Introduction', 'https://www.youtube.com/embed/I11nduRNeT8?rel=0&modestbranding=1&showinfo=0&autoplay=1', 'Client Side Vs Server Side Scripting Language', 'https://www.youtube.com/embed/Z6v1vjIY_PY?rel=0&modestbranding=1&showinfo=0', 'PHP Setup Bangla', 'https://www.youtube.com/embed/gZxVF76CHdc?rel=0&modestbranding=1&showinfo=0', 'PHP Variable And Syntax', 'https://www.youtube.com/embed/8IeDMgXTeaQ?rel=0&modestbranding=1&showinfo=0', 'PHP Comment', 'https://www.youtube.com/embed/GaBudbPbOlY?rel=0&modestbranding=1&showinfo=0');

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
('ada', 'daa', ''),
('User2', '11111', 'user2@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `paymenttable`
--

CREATE TABLE `paymenttable` (
  `id` int(11) NOT NULL,
  `fname` varchar(10) CHARACTER SET latin1 NOT NULL,
  `password` varchar(10) CHARACTER SET latin1 NOT NULL,
  `cred` varchar(30) CHARACTER SET latin1 NOT NULL,
  `coursename` varchar(100) CHARACTER SET latin1 NOT NULL,
  `paymenttime` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymenttable`
--

INSERT INTO `paymenttable` (`id`, `fname`, `password`, `cred`, `coursename`, `paymenttime`) VALUES
(1, 'User2', '11111', '1111111111', 'SQL', '12/25/21 8.59:02<bSat, 25 Dec 2021 08:59:02 +0100>'),
(3, 'User2', '11111', '1111111111', 'Networking', '12/26/21 5.54:13<bSun, 26 Dec 2021 05:54:13 +0100>'),
(4, 'User2', '11111', '1111111111', 'Database', '12/26/21 10.46:01<bSun, 26 Dec 2021 10:46:01 +0100>'),
(7, 'User2', '11111', '1111111111', 'Python', '12/26/21 14.30:06<bSun, 26 Dec 2021 14:30:06 +0100>'),
(8, 'User2', '11111', '1111111111', 'Android', '12/26/21 16.40:23<bSun, 26 Dec 2021 16:40:23 +0100>'),
(9, 'User2', '11111', '1111111111', 'React', '12/26/21 17.22:50<bSun, 26 Dec 2021 17:22:50 +0100>'),
(10, 'User2', '11111', '1111111111', 'Node', '12/26/21 17.40:39<bSun, 26 Dec 2021 17:40:39 +0100>'),
(11, 'User2', '11111', '1111111111', 'MongoDB', '12/26/21 18.10:05<bSun, 26 Dec 2021 18:10:05 +0100>'),
(12, 'User2', '11111', '1111111111', 'Bootstrap', '12/26/21 18.19:54<bSun, 26 Dec 2021 18:19:54 +0100>'),
(13, 'User2', '11111', '1111111111', 'JavaScript', '12/26/21 18.33:22<bSun, 26 Dec 2021 18:33:22 +0100>'),
(14, 'User2', '11111', '1111111111', 'C-Programming', '12/26/21 18.49:21<bSun, 26 Dec 2021 18:49:21 +0100>'),
(15, 'User2', '11111', '1111111111', 'Java', '12/27/21 1.27:38<bMon, 27 Dec 2021 01:27:38 +0100>'),
(16, 'User2', '11111', '1111111111', 'PHP', '12/27/21 1.35:59<bMon, 27 Dec 2021 01:35:59 +0100>'),
(17, 'User2', '11111', '1111111111', 'Angular', '12/27/21 1.37:21<bMon, 27 Dec 2021 01:37:21 +0100>'),
(18, 'User2', '11111', '1111111111', 'Vue', '12/27/21 1.38:22<bMon, 27 Dec 2021 01:38:22 +0100>'),
(19, 'User2', '11111', '1111111111', 'React', '12/27/21 1.54:06<bMon, 27 Dec 2021 01:54:06 +0100>'),
(20, 'User2', '11111', '1111111111', 'MongoDB', '12/27/21 7.06:44<bMon, 27 Dec 2021 07:06:44 +0600>');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `paymenttable`
--
ALTER TABLE `paymenttable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
