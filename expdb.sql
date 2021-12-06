

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
('newuser', 'newuser@gmail.com', 'increase number of courses', 'about courses', '09/23/21 9.44:12<bSat, 23 Sep 2021 09:44:12 +0200>');

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
(0, 0),
(0, 1),
(0, 2),
(0, 3),
(0, 4),
(0, 5);

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
('newaccount', 'newaccount', 'newaccount@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `paymenttable`
--

CREATE TABLE `paymenttable` (
  `fname` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `cred` varchar(30) NOT NULL,
  `coursename` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymenttable`
--

INSERT INTO `paymenttable` (`fname`, `password`, `cred`, `coursename`, `time`) VALUES
('newuser', 'newuser', '123456', 'javascript', '09/23/21 9.45:13<bSat, 23 Sep 2021 09:45:13 +0200>');

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
('newuser', 10, 10, 10, 10);

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
('newuser', 'create more courses', '07/08/21 9.43:17<bSat, 07 Aug 2021 09:43:17 +0200>');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
