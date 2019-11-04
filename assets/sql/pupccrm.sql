-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2019 at 04:28 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pupccrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` int(11) NOT NULL,
  `serial` varchar(200) NOT NULL,
  `module` varchar(200) NOT NULL,
  `transaction` varchar(200) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `deletion` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `serial`, `module`, `transaction`, `admin_id`, `deletion`, `date`, `time`) VALUES
(1, '717247', 'Concession-add', 'add new concession', 1, 1, '2019-09-03', '22:51:52'),
(2, '262887', 'Feedback', 'Customer sending feedback', 1, 1, '2019-09-04', '02:09:30'),
(3, '596663', 'Feedback', 'Customer sending feedback', 1, 1, '2019-09-04', '09:43:01'),
(4, '621922', 'Feedback', 'Customer sending feedback', 1, 1, '2019-09-04', '09:45:01'),
(5, '274416', 'Feedback', 'Customer sending feedback', 1, 1, '2019-09-04', '09:48:17'),
(6, '464807', 'Feedback', 'Customer sending feedback', 1, 1, '2019-09-04', '09:50:15'),
(7, '321006', 'Feedback', 'Customer sending feedback', 1, 1, '2019-09-04', '09:51:47'),
(8, '688112', 'Feedback', 'Customer sending feedback', 1, 1, '2019-09-04', '09:52:54'),
(9, '522257', 'Feedback', 'Customer sending feedback', 1, 1, '2019-09-04', '09:57:20'),
(10, '403004', 'Feedback', 'Customer sending feedback', 1, 1, '2019-09-04', '09:57:35'),
(11, '664244', 'Feedback', 'Customer sending feedback', 1, 1, '2019-09-04', '09:58:27'),
(12, '993736', 'Feedback', 'Customer sending feedback', 1, 1, '2019-09-04', '10:01:34'),
(13, '967409', 'Concession-add', 'add new concession', 1, 1, '2019-09-04', '10:24:49'),
(14, '700260', 'Feedback', 'Customer sending feedback', 1, 1, '2019-09-04', '10:49:49'),
(15, '234006', 'Concession-add', 'add new concession', 1, 1, '2019-09-04', '11:42:37'),
(16, '679824', 'Feedback', 'Customer sending feedback', 1, 1, '2019-09-04', '12:08:25'),
(17, '950323', 'Feedback', 'Customer sending feedback', 1, 1, '2019-09-04', '12:26:46'),
(18, '924180', 'Concession-add', 'add new concession', 1, 1, '2019-09-04', '12:29:45'),
(19, '478737', 'Concession-add', 'add new concession', 1, 1, '2019-09-04', '12:42:29'),
(20, '935515', 'Concession-add', 'add new concession', 1, 1, '2019-09-04', '12:44:15'),
(21, '922331', 'Concession-add', 'add new concession', 1, 1, '2019-09-04', '12:44:50'),
(22, '743946', 'New-Cases', 'add new cases', 1, 1, '2019-09-04', '13:40:22'),
(23, '923180', 'New-Cases', 'add new cases', 1, 1, '2019-09-04', '13:41:00'),
(24, '301108', 'New-Cases', 'add new cases', 1, 1, '2019-09-04', '13:42:47'),
(25, '215077', 'New-Cases', 'add new cases', 1, 1, '2019-09-04', '13:43:41'),
(26, '745618', 'New-Cases', 'add new cases', 1, 1, '2019-09-04', '13:45:02'),
(27, '751508', 'New-Cases', 'add new cases', 1, 1, '2019-09-04', '13:46:21'),
(28, '969969', 'New-Task', 'add new task', 1, 1, '2019-09-04', '14:37:05'),
(29, '470827', 'New-Task', 'add new task', 1, 1, '2019-09-04', '14:38:23'),
(30, '690257', 'New-Task', 'add new task', 1, 1, '2019-09-04', '14:38:44'),
(31, '547321', 'New-Task', 'add new task', 1, 1, '2019-09-04', '17:52:31'),
(32, '765446', 'New-Task', 'add new task', 1, 1, '2019-09-04', '17:53:26'),
(33, '559754', 'New-Task', 'add new task', 1, 1, '2019-09-04', '18:03:49'),
(34, '563842', 'New-Task', 'add new task', 1, 1, '2019-09-04', '18:05:54'),
(35, '848424', 'New-Task', 'add new task', 1, 1, '2019-09-04', '18:06:53'),
(36, '485287', 'Concession-add', 'add new concession', 1, 1, '2019-09-04', '18:19:05'),
(37, '672736', 'New-Task', 'add new task', 1, 1, '2019-09-04', '18:35:31'),
(38, '957121', 'New-Task', 'add new task', 1, 1, '2019-09-04', '18:35:32'),
(39, '921056', 'New-Task', 'add new task', 1, 1, '2019-09-06', '16:03:09'),
(40, '692436', 'New-Task', 'add new task', 1, 1, '2019-09-06', '16:09:13');

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` int(11) NOT NULL,
  `case_number` varchar(250) NOT NULL,
  `case_name` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'pending',
  `priority` varchar(200) NOT NULL,
  `case_desc` varchar(500) NOT NULL,
  `assigned_admin` int(11) NOT NULL,
  `deletion` int(11) NOT NULL DEFAULT 1,
  `date_created` date NOT NULL DEFAULT current_timestamp(),
  `date_updated` date NOT NULL DEFAULT current_timestamp(),
  `feedback` int(11) NOT NULL,
  `foredit` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `case_number`, `case_name`, `type`, `status`, `priority`, `case_desc`, `assigned_admin`, `deletion`, `date_created`, `date_updated`, `feedback`, `foredit`) VALUES
(1, '842083', 'food poison', 'question', 'pending', 'high', 'cvbnm,', 1, 0, '2019-09-04', '2019-09-04', 8, 1),
(2, '516616', 'albert', 'incident', 'tasked', 'high', 'case for food poisoning', 2, 1, '2019-09-04', '2019-09-04', 8, 1),
(3, '938324', 'Food Poison', 'incident', 'pending', 'high', 'case for food poisoning', 1, 1, '2019-09-04', '2019-09-04', 8, 1),
(4, '764781', 'Food Poison', 'incident', 'pending', 'high', 'case for food poisoning', 1, 1, '2019-09-04', '2019-09-04', 8, 0),
(5, '256513', 'Food Poison', 'question', 'pending', 'high', 'case for food poisoning', 1, 1, '2019-09-04', '2019-09-04', 8, 0),
(6, '952338', 'Food Poison', 'incident', 'pending', 'high', 'case for food poisoning', 1, 1, '2019-09-04', '2019-09-04', 8, 0),
(7, '0', 'food poisoning', 'problem', 'pending', 'normal', 'case for food poisoning', 1, 1, '2019-10-09', '2019-10-09', 8, 1),
(8, '0', 'food poisoning', 'incident', 'pending', 'high', 'case for food poisoning', 1, 1, '2019-10-23', '2019-10-23', 21, 1),
(11, '0', 'food poisoning', 'incident', 'pending', 'high', 'case for food poisoning', 1, 1, '2019-10-23', '2019-10-23', 32, 1),
(12, '0', 'food poisoning', 'incident', 'pending', 'high', 'case for food poisoning', 1, 1, '2019-10-23', '2019-10-23', 32, 1),
(13, '0', 'food poisoning', 'incident', 'pending', 'high', 'case for food poisoning', 1, 1, '2019-10-23', '2019-10-23', 32, 1),
(14, '0', 'food poisoning', 'incident', 'pending', 'high', 'case for food poisoning', 1, 1, '2019-10-23', '2019-10-23', 32, 1),
(15, '0', 'food poisoning', 'incident', 'pending', 'high', 'case for food poisoning', 1, 1, '2019-10-23', '2019-10-23', 32, 1),
(16, '0', 'food poisoning', 'incident', 'pending', 'high', 'case for food poisoning', 1, 1, '2019-10-23', '2019-10-23', 32, 1),
(17, '0', 'food poisoning', 'incident', 'pending', 'high', 'case for food poisoning', 1, 1, '2019-10-23', '2019-10-23', 32, 1),
(18, '0', 'poisoning', 'incident', 'pending', 'high', 'poisoning', 1, 1, '2019-10-23', '2019-10-23', 32, 1),
(19, '0', 'poisoning', 'incident', 'pending', 'high', 'poisoning', 1, 1, '2019-10-23', '2019-10-23', 32, 1),
(20, '0', 'poisoning', 'incident', 'pending', 'high', 'poisoning', 1, 1, '2019-10-23', '2019-10-23', 32, 1),
(21, '0', 'poisoning', 'incident', 'pending', 'high', 'poisoning', 1, 1, '2019-10-23', '2019-10-23', 32, 1),
(22, '0', 'case name', 'incident', 'pending', 'high', 'poisoning', 1, 1, '2019-10-23', '2019-10-23', 21, 1),
(23, 'CA-MN-407293-2310-2019', 'food poisoning', 'incident', 'pending', 'high', 'case for poisoning', 1, 1, '2019-10-23', '2019-10-23', 31, 0),
(24, 'CA-MN-399719-2310-2019', 'panis', 'incident', 'pending', 'high', 'pangat na pagkain', 1, 1, '2019-10-23', '2019-10-23', 32, 0),
(25, 'CA-MN-29053-2410-2019', 'case for uncook food', 'problem', 'pending', 'high', 'case need for task', 1, 1, '2019-10-24', '2019-10-24', 31, 0);

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `message` varchar(500) NOT NULL,
  `store` int(11) NOT NULL,
  `serial` varchar(250) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `sender`, `message`, `store`, `serial`, `date`) VALUES
(1, 78, 'lata na yung kanin tapos iba na yung lasa ng skinless', 1, 'CP-MN-759073-2310-2019', '2019-10-23'),
(2, 79, 'Ang pangit ng lasa ', 1, 'CP-MN-248957-2310-2019', '2019-10-23'),
(3, 81, 'lata yung kanin tapos medyo maasim na yung sausage. ', 21, 'CP-MN-991179-2410-2019', '2019-10-24');

-- --------------------------------------------------------

--
-- Table structure for table `concession`
--

CREATE TABLE `concession` (
  `id` int(50) NOT NULL,
  `serial` varchar(50) NOT NULL,
  `stall` int(11) NOT NULL,
  `area` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `function` varchar(200) NOT NULL,
  `date_applied` date NOT NULL DEFAULT current_timestamp(),
  `remarks` varchar(500) NOT NULL,
  `measurement` int(11) NOT NULL,
  `rental` float NOT NULL,
  `date_approved` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `concession`
--

INSERT INTO `concession` (`id`, `serial`, `stall`, `area`, `name`, `function`, `date_applied`, `remarks`, `measurement`, `rental`, `date_approved`) VALUES
(1, '', 1, 'north', 'john and virgin store', 'food', '2019-09-03', '', 8, 10000, '2019-10-03'),
(2, '', 2, 'north', 'franco printing and laminating services', 'nonfood', '2019-09-03', '', 5, 10000, '2019-10-03'),
(13, 'CS-MN-19536-0210-2019', 10, 'Lagoon', 'alber school supplies', 'nonfood', '2019-10-03', '', 5, 10000, '2019-10-21'),
(14, 'CS-MN-807569-0210-2019', 9, 'Lagoon', 'alexandria internet cafe', 'nonfood', '2019-10-03', '', 5, 10000, '2019-10-14'),
(15, 'CS-MN-943438-0210-2019', 12, 'lagoon', 'john supplies', 'nonfood', '2019-10-03', '', 8, 10000, '2019-10-21'),
(16, 'CS-MN-206221-0210-2019', 2, 'lagoon', 'jake\'s equipment renting', 'nonfood', '2019-10-03', '', 8, 10000, '2019-10-28'),
(17, 'CS-MN-73605-0210-2019', 8, 'lagoon', 'erwin\'s tapsilugan', 'food', '2019-10-03', '', 8, 5000, '2019-10-08'),
(18, 'CS-MN-140217-0210-2019', 7, 'lagoon', 'mamihan sa lagoon', 'food', '2019-10-03', '', 8, 10000, '2019-10-15'),
(19, 'CS-MN-952420-0210-2019', 1, 'lagoon', 'happy haus', 'food', '2019-10-03', '', 8, 10000, '2019-10-04'),
(20, 'CS-MN-396266-0210-2019', 4, 'lagoon', 'dunkin donuts', 'food', '2019-10-03', '', 8, 10000, '2019-10-30'),
(21, 'CS-MN-578024-0210-2019', 5, 'north', 'kainan ng mga single', 'food', '2019-10-03', '', 8, 5000, '2019-10-03'),
(22, 'CS-MN-786018-0610-2019', 7, 'north', 'leny lamination and xerox', 'nonfood', '2019-10-06', '', 8, 10000, '2019-10-23'),
(23, 'CS-MN-985987-2310-2019', 16, 'lagoon', 'ben\'s com shop', 'nonfood', '2019-10-23', 'start on monday. ', 8, 10000, '2019-10-23');

-- --------------------------------------------------------

--
-- Table structure for table `concession_details`
--

CREATE TABLE `concession_details` (
  `id` int(11) NOT NULL,
  `cdid` int(11) NOT NULL,
  `odid` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `deletion` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `concession_details`
--

INSERT INTO `concession_details` (`id`, `cdid`, `odid`, `active`, `deletion`, `created_by`, `updated_by`, `date_created`, `date_updated`) VALUES
(1, 13, 0, 1, 1, 1, 1, '2019-10-03 04:23:14', '2019-10-03 04:23:14'),
(2, 14, 0, 1, 1, 1, 1, '2019-10-03 04:40:06', '2019-10-03 04:40:06'),
(3, 15, 0, 1, 1, 1, 1, '2019-10-03 04:40:36', '2019-10-03 04:40:36'),
(4, 16, 4, 1, 0, 1, 1, '2019-10-03 04:41:13', '2019-10-03 04:41:13'),
(5, 17, 5, 1, 1, 1, 1, '2019-10-03 05:39:15', '2019-10-03 05:39:15'),
(6, 18, 6, 1, 1, 1, 1, '2019-10-03 05:39:29', '2019-10-03 05:39:29'),
(7, 19, 7, 1, 1, 1, 1, '2019-10-03 05:39:41', '2019-10-03 05:39:41'),
(8, 20, 8, 1, 1, 1, 1, '2019-10-03 05:40:18', '2019-10-03 05:40:18'),
(9, 21, 9, 1, 1, 1, 1, '2019-10-03 05:41:21', '2019-10-03 05:41:21'),
(10, 22, 10, 1, 1, 1, 1, '2019-10-06 16:53:45', '2019-10-06 16:53:45'),
(11, 23, 11, 1, 1, 1, 1, '2019-10-23 20:04:52', '2019-10-23 20:04:52');

-- --------------------------------------------------------

--
-- Table structure for table `concession_equipment`
--

CREATE TABLE `concession_equipment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `serial` varchar(100) NOT NULL,
  `active` int(11) DEFAULT 1,
  `deletion` int(11) NOT NULL DEFAULT 1,
  `cdid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `concession_equipment`
--

INSERT INTO `concession_equipment` (`id`, `name`, `brand`, `type`, `description`, `serial`, `active`, `deletion`, `cdid`) VALUES
(1, 'electric fan', '', 'electric', '', 'CS-MN-19536-0210-2019', 1, 1, 13);

-- --------------------------------------------------------

--
-- Table structure for table `concession_experience`
--

CREATE TABLE `concession_experience` (
  `id` int(11) NOT NULL,
  `place` varchar(200) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `serial` varchar(200) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `deletion` int(11) NOT NULL DEFAULT 1,
  `cdid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `concession_experience`
--

INSERT INTO `concession_experience` (`id`, `place`, `date_start`, `date_end`, `serial`, `active`, `deletion`, `cdid`) VALUES
(1, '', '0000-00-00', '0000-00-00', '22', 1, 1, 0),
(2, '', '0000-00-00', '0000-00-00', '22', 1, 1, 0),
(3, '', '0000-00-00', '0000-00-00', '22', 1, 1, 0),
(4, 'ghjkl', '2019-10-16', '2019-10-24', 'CS-MN-786018-0610-2019', 1, 1, 22);

-- --------------------------------------------------------

--
-- Table structure for table `concession_items`
--

CREATE TABLE `concession_items` (
  `id` int(11) NOT NULL,
  `item` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(500) NOT NULL,
  `serial` varchar(100) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `deletion` int(11) NOT NULL DEFAULT 1,
  `cdid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `concession_items`
--

INSERT INTO `concession_items` (`id`, `item`, `type`, `price`, `description`, `serial`, `active`, `deletion`, `cdid`) VALUES
(1, '', '', 0, '', '', 1, 1, 21),
(2, '', '', 0, '', '', 1, 1, 1),
(3, '', '', 0, '', '', 1, 1, 1),
(4, '', '', 0, '', '', 1, 1, 1),
(5, '', '', 0, '', '', 1, 1, 1),
(6, '', '', 0, '', '', 1, 1, 1),
(7, '', '', 0, '', '', 1, 1, 1),
(8, '', '', 0, '', '', 1, 1, 1),
(9, 'food item', '', 0, '', 'CS-MN-19536-0210-2019', 1, 1, 1),
(10, 'food item', 'non-food', 0, '', 'CS-MN-943438-0210-2019', 1, 1, 15),
(11, 'fewa', 'food', 40, 'fewa ni virgin 2.0\r\n', 'CS-MN-140217-0210-2019', 1, 1, 18),
(12, 'g tech ballpen', 'non-food', 12, '12 pesos g tech', 'CS-MN-73605-0210-2019', 1, 1, 17);

-- --------------------------------------------------------

--
-- Table structure for table `concession_services`
--

CREATE TABLE `concession_services` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `lower` int(11) NOT NULL,
  `higher` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `serial` varchar(200) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `deletion` int(11) NOT NULL DEFAULT 1,
  `cdid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `concession_services`
--

INSERT INTO `concession_services` (`id`, `name`, `lower`, `higher`, `description`, `serial`, `active`, `deletion`, `cdid`) VALUES
(1, '0', 0, 0, ' ', 'CS-MN-807569-0210-2019', 1, 1, 14),
(2, 'printing services', 150, 300, 'for printing of documents and other files\r\n', 'CS-MN-578024-0210-2019', 1, 1, 21);

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `id` int(11) NOT NULL,
  `serial` varchar(50) NOT NULL,
  `cdid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `store` varchar(50) NOT NULL,
  `function` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `oic_f` varchar(50) NOT NULL,
  `oic_m` varchar(50) NOT NULL,
  `oic_l` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `duration` int(50) NOT NULL,
  `scan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`id`, `serial`, `cdid`, `name`, `store`, `function`, `fname`, `mname`, `lname`, `description`, `oic_f`, `oic_m`, `oic_l`, `date`, `duration`, `scan`) VALUES
(1, 'CON-MN-820418-1310-2019', 22, '', '', '', '', '', '', '', '', '', '', '0000-00-00', 0, ''),
(8, 'CON-MN-172074-1310-2019', 22, '', '', 'Select Function', '', '', '', '', '', '', '', '0000-00-00', 0, 'index.php'),
(9, 'CON-MN-777551-1310-2019', 22, '', '', 'Select Function', '', '', '', '', '', '', '', '0000-00-00', 0, 'index.php'),
(10, 'CON-MN-234442-1310-2019', 22, '', '', 'Select Function', '', '', '', '', '', '', '', '0000-00-00', 0, 'bfs.docx'),
(11, 'CON-MN-358391-1310-2019', 22, '', '', 'Select Function', '', '', '', '', '', '', '', '0000-00-00', 0, 'bfs.docx'),
(12, 'CON-MN-328618-1310-2019', 22, '', '', 'Select Function', '', '', '', '', '', '', '', '0000-00-00', 0, 'Graph.docx'),
(13, 'CON-MN-639202-1310-2019', 22, '', '', 'Select Function', '', '', '', '', '', '', '', '0000-00-00', 0, 'bfs.docx'),
(14, 'CON-MN-612329-1310-2019', 22, '', '', 'Select Function', '', '', '', '', '', '', '', '0000-00-00', 0, 'Data-Structures.pptx'),
(15, 'CON-MN-902340-1310-2019', 22, '', '', 'Select Function', '', '', '', '', '', '', '', '0000-00-00', 0, 'bfs.docx'),
(16, 'CON-MN-163462-1310-2019', 22, '', '', 'Select Function', '', '', '', '', '', '', '', '0000-00-00', 0, 'SourceCode.zip'),
(17, 'CON-MN-669553-1310-2019', 22, '', '', 'Select Function', '', '', '', '', '', '', '', '0000-00-00', 0, 'bfs.docx'),
(18, 'CON-MN-889061-1310-2019', 22, '', '', 'Select Function', '', '', '', '', '', '', '', '0000-00-00', 0, 'SWF Player Free'),
(19, 'CON-MN-687781-1310-2019', 22, '', '', 'Select Function', '', '', '', '', '', '', '', '0000-00-00', 0, 'SWF Player Free'),
(20, 'CON-MN-891473-1310-2019', 22, '', '', 'Select Function', '', '', '', '', '', '', '', '0000-00-00', 0, 'SWF Player Free');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `serial` varchar(200) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `deletion` int(11) NOT NULL DEFAULT 1,
  `feedback_info_id` int(11) NOT NULL,
  `ifview` int(11) NOT NULL DEFAULT 1,
  `viewed_by` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `year` year(4) NOT NULL DEFAULT current_timestamp(),
  `store_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `serial`, `sender_id`, `deletion`, `feedback_info_id`, `ifview`, `viewed_by`, `date`, `time`, `year`, `store_id`) VALUES
(8, '755528', 47, 1, 35, 0, 1, '2019-09-04', '00:00:00', 2019, 1),
(19, '527570', 58, 0, 46, 0, 1, '2019-09-04', '10:49:49', 2019, 1),
(20, '600321', 59, 1, 47, 0, 1, '2019-09-04', '12:08:25', 2019, 1),
(21, '399565', 60, 1, 48, 0, 1, '2019-09-04', '12:26:46', 2019, 1),
(31, 'FB-MN-733583-0810-2019', 64, 1, 69, 0, 1, '2019-10-08', '16:26:41', 2019, 21),
(32, 'FB-MN-228655-0810-2019', 69, 1, 74, 0, 1, '2019-10-08', '16:27:41', 2019, 1),
(37, 'FB-MN-666058-2310-2019', 74, 1, 75, 0, 1, '2019-10-23', '13:19:34', 2019, 21),
(38, 'FB-MN-723281-2310-2019', 80, 1, 76, 1, 1, '2019-10-23', '19:42:02', 2019, 21),
(39, 'FB-MN-578611-2410-2019', 82, 1, 77, 1, 1, '2019-10-24', '16:10:24', 2019, 21),
(40, 'FB-MN-796691-0411-2019', 83, 1, 78, 1, 1, '2019-11-04', '22:56:13', 2019, 18),
(41, 'FB-MN-81353-0411-2019', 84, 1, 79, 1, 1, '2019-11-04', '23:00:04', 2019, 17),
(42, 'FB-MN-694713-0411-2019', 85, 1, 80, 1, 1, '2019-11-04', '23:02:02', 2019, 17),
(43, 'FB-MN-299818-0411-2019', 86, 1, 81, 1, 1, '2019-11-04', '23:02:11', 2019, 17),
(44, 'FB-MN-197513-0411-2019', 87, 1, 82, 1, 1, '2019-11-04', '23:02:55', 2019, 18),
(45, 'FB-MN-669014-0411-2019', 88, 1, 83, 1, 1, '2019-11-04', '23:04:28', 2019, 18),
(46, 'FB-MN-889220-0411-2019', 89, 1, 84, 1, 1, '2019-11-04', '23:06:36', 2019, 19),
(47, 'FB-MN-537875-0411-2019', 90, 1, 85, 1, 1, '2019-11-04', '23:08:28', 2019, 19),
(48, 'FB-MN-980831-0411-2019', 91, 1, 86, 1, 1, '2019-11-04', '23:21:18', 2019, 19);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_details`
--

CREATE TABLE `feedback_details` (
  `id` int(11) NOT NULL,
  `evaluation` float NOT NULL,
  `hygiene` int(11) NOT NULL,
  `hospitable` int(11) NOT NULL,
  `conditions` int(11) NOT NULL,
  `environment` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `feedback_type` varchar(250) NOT NULL,
  `serial` varchar(100) NOT NULL,
  `service` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_details`
--

INSERT INTO `feedback_details` (`id`, `evaluation`, `hygiene`, `hospitable`, `conditions`, `environment`, `price`, `message`, `date`, `feedback_type`, `serial`, `service`) VALUES
(1, 4, 1, 1, 1, 1, 1, 'dapat naka proper kitchen uniform sila kapag nag seserve pero overall the stall was great', '2019-09-04', 'suggestions/commendation', '', 0),
(46, 4, 1, 1, 1, 1, 1, 'mabilis yung pag kaka serve ng pagkain. ', '2019-09-04', 'suggestions/commendations', '', 0),
(47, 5, 0, 0, 0, 0, 0, 'Masarap iyong pagkain', '2019-09-04', 'suggestion/commendations', '', 0),
(48, 4, 1, 1, 1, 1, 1, 'laging bago yung tinitinda nila. hindi po pangat', '2019-09-04', 'suggestions/commendations', '', 0),
(49, 4, 1, 1, 0, 1, 1, 'dapat po inuupdate nila if ever na mag tataas sila ng price.', '2019-10-07', 'suggestions', 'FB-MN-955852-0710-2019', 0),
(50, 4, 1, 1, 0, 1, 1, 'dati yung ballpen 7 lang ngayon 12 na. dapat lagyan ng price tag yung mga ballpen na itinitinda', '2019-10-07', 'complaint', 'FB-MN-157588-0710-2019', 0),
(51, 4, 1, 1, 1, 1, 1, 'dapat hindi na po chinacharge yung excess paper kasi kasama naman yon sa binayaran', '2019-10-07', 'suggestions/commendations', 'FB-MN-776137-0710-2019', 0),
(52, 4, 1, 1, 1, 1, 1, 'dapat may sanitary gloves pag mag sasandok ng juice', '2019-10-07', 'suggestions/commendations', 'FB-MN-563290-0710-2019', 0),
(53, 0, 1, 1, 1, 1, 1, 'dapat secured yung mga tinda hindi exposed sa mga langaw etc.', '2019-10-07', 'suggestions/commendations', 'FB-MN-481596-0710-2019', 0),
(54, 0, 1, 1, 1, 1, 1, 'dapat po mabilis net nyo sa comshop nyo para po mabilis mag research tsaka di hassle sa time', '2019-10-07', 'suggestions/commendations', 'FB-MN-617896-0710-2019', 0),
(55, 0, 1, 1, 1, 1, 1, 'okay naman po yung printing services pero po dun sa net lang po may problem kasi may kabagalan', '2019-10-07', 'suggestions/commendations', 'FB-MN-962476-0710-2019', 0),
(56, 0, 1, 1, 1, 1, 1, 'habang tumatagal panipis ng panipis yung pinalaminate ko sa inyo', '2019-10-07', 'complaint', 'FB-MN-453632-0710-2019', 0),
(57, 0, 1, 1, 1, 1, 1, 'pakiayos po nung printer kasi po putol putol po yung picture nung nag paprint ako tapos hindi na nirefund yung pera', '2019-10-07', 'complaint', 'FB-MN-23872-0710-2019', 0),
(58, 0, 1, 1, 1, 1, 1, 'sayang pera ko ambagal ng net tapos mahal pa singil', '2019-10-07', 'complaint', 'FB-MN-564013-0710-2019', 0),
(59, 0, 1, 1, 1, 1, 1, 'sobrang bagal na ng computer units nyo dapat po nililinisan or inuupgrade ', '2019-10-07', 'complaint', 'FB-MN-700850-0710-2019', 0),
(60, 0, 1, 1, 1, 1, 1, 'sana po nakakabalik yung mga nawawalang items sa stall nyo like Flash drives, phones, wallets etc. lalo na dun sa comshops', '2019-10-07', 'suggestions/commendations', 'FB-MN-372916-0710-2019', 0),
(61, 0, 1, 1, 1, 1, 1, 'yung order ko ampalaya bat binigyan ako ng corned beef na sobrang alat', '2019-10-07', 'complaint', 'FB-MN-350516-0710-2019', 0),
(62, 0, 1, 1, 1, 1, 1, 'pakiayos po nung timpla nyo. minsan po kase sobrang tamis, tapos matabang, tapos sobrang naman.', '2019-10-07', 'complaint', 'FB-MN-27696-0710-2019', 0),
(63, 5, 1, 1, 1, 1, 1, 'medyo maasim na po yung skinless na binigay nyo. sana po dinouble check nyo muna bago po ninyo niluto. please try to check yung mga niluluto nyo para po marami yung customers nyo', '2019-10-07', 'complaint', 'FB-MN-533126-0710-2019', 0),
(64, 5, 1, 1, 1, 1, 1, 'paki discuss po nung proper sanitations sa mga kasama nyo sa stall para po dumami yung mga customers nyo', '2019-10-07', 'complaint', 'FB-MN-581390-0710-2019', 0),
(65, 5, 1, 1, 1, 1, 1, 'yung huling bili ko ng hotdog sa inyo medyo malamig pa kahit galing sa pag kakaluto. halatang minadali lang', '2019-10-07', 'complaint', 'FB-MN-784587-0710-2019', 0),
(66, 5, 1, 1, 1, 1, 1, 'the last time na nag paprint po ako is sobrang labnaw po nung ink. parang tinubigan tapos pwede na', '2019-10-07', 'complaint', 'FB-MN-662337-0710-2019', 0),
(67, 5, 2, 1, 1, 1, 1, 'sana mabilis yung pag serve ng pagkain para hindi humaba yung pila', '2019-10-07', 'complaint', 'FB-MN-408393-0710-2019', 0),
(68, 5, 2, 1, 1, 1, 1, 'mabagal yung pag serve ng pagkain nauna pa yung chismis at usap bago yung customer', '2019-10-08', 'complaint', 'FB-MN-829985-0810-2019', 0),
(69, 5, 2, 1, 1, 1, 1, 'maganda yung pag kakaluto ng pagkain', '2019-10-08', 'complaint', 'FB-MN-733583-0810-2019', 0),
(70, 5, 2, 1, 1, 1, 1, 'maganda yung kalidad ng serbisyo', '2019-10-08', 'suggestions/commendations', 'FB-MN-365802-0810-2019', 0),
(71, 5, 2, 1, 1, 1, 1, 'mabilis mag serve ng pagkain ', '2019-10-08', 'suggestions/commendations', 'FB-MN-813057-0810-2019', 0),
(72, 5, 2, 1, 1, 1, 1, 'mabilis net', '2019-10-08', 'suggestions/commendations', 'FB-MN-136568-0810-2019', 0),
(73, 5, 2, 1, 1, 1, 1, 'quality yung pag print nung pictures and documents', '2019-10-08', 'suggestions/commendations', 'FB-MN-629359-0810-2019', 0),
(74, 5, 2, 1, 1, 1, 1, 'naibabalik yung mga nawawalang gamit like flash drives, phones, wallets, etc', '2019-10-08', 'suggestions/commendations', 'FB-MN-228655-0810-2019', 0),
(75, 5, 3, 3, 3, 3, 3, 'hindi matabang yung ulam', '2019-10-23', 'suggestions/commendations', 'FB-MN-666058-2310-2019', 3),
(76, 2, 3, 4, 3, 3, 4, 'Maayos na pagserve', '2019-10-23', 'suggestions/commendations', 'FB-MN-723281-2310-2019', 3),
(77, 5, 1, 1, 1, 1, 1, 'overall its good ', '2019-10-24', '', 'FB-MN-578611-2410-2019', 1),
(78, 4, 5, 5, 5, 5, 5, 'galingan nyo papo', '2019-11-04', '', 'FB-MN-796691-0411-2019', 5),
(79, 4, 5, 5, 5, 5, 5, 'ganbatte', '2019-11-04', '', 'FB-MN-81353-0411-2019', 5),
(80, 4, 5, 5, 5, 5, 5, 'ganbatte', '2019-11-04', '', 'FB-MN-694713-0411-2019', 5),
(81, 4, 5, 5, 5, 5, 5, 'ganbatte', '2019-11-04', '', 'FB-MN-299818-0411-2019', 5),
(82, 2, 3, 3, 3, 3, 3, 'dsfk', '2019-11-04', '', 'FB-MN-197513-0411-2019', 3),
(83, 2, 3, 3, 3, 3, 3, 'fsdf', '2019-11-04', '', 'FB-MN-669014-0411-2019', 3),
(84, 3, 3, 3, 3, 3, 3, 'eret', '2019-11-04', '', 'FB-MN-889220-0411-2019', 3),
(85, 2, 1, 3, 3, 3, 3, 'eret', '2019-11-04', '', 'FB-MN-537875-0411-2019', 3),
(86, 2.5, 1, 3, 3, 3, 3, 'eret', '2019-11-04', '', 'FB-MN-980831-0411-2019', 3);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(11) NOT NULL,
  `serial` varchar(50) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(400) NOT NULL,
  `contact` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `serial`, `fname`, `mname`, `lname`, `email`, `address`, `contact`) VALUES
(1, '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', ''),
(4, 'CS-MN-206221-0210-2019', '', '', '', '', 'fgh', ''),
(5, 'CS-MN-73605-0210-2019', '', '', '', '', '', ''),
(6, 'CS-MN-140217-0210-2019', 'john', 'd', 'rafols', 'dimenrafols@gmail.com', '', '0983710408'),
(7, 'CS-MN-952420-0210-2019', '', '', '', '', '', ''),
(8, 'CS-MN-396266-0210-2019', '', '', '', '', '', ''),
(9, 'CS-MN-578024-0210-2019', 'JOHN1', '', 'Sopena', 'albertsopena@gmail.com', 'Sta mesa', '24534'),
(10, 'CS-MN-786018-0610-2019', '', '', '', '', '', ''),
(11, 'CS-MN-985987-2310-2019', 'franco louis', 'chee ', 'martin', 'francolouismartin@gmail.com', '3rd st. dpwh compound punta sta. ana manila', '09192538167');

-- --------------------------------------------------------

--
-- Table structure for table `sender`
--

CREATE TABLE `sender` (
  `id` int(11) NOT NULL,
  `id_info` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `deletion` int(11) NOT NULL DEFAULT 1,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `serial` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sender`
--

INSERT INTO `sender` (`id`, `id_info`, `name`, `contact`, `email`, `type`, `deletion`, `date`, `serial`) VALUES
(1, '123', '0', '24534', 'albert@gmail.com', 'Student', 1, '2019-09-04', ''),
(58, '1', 'John Albert', '839758347', 'albert@gmail.com', 'Student', 1, '2019-09-04', ''),
(59, '12334', 'John Albert', '09123475920', 'albert@gmail.com', 'Others', 1, '2019-09-04', ''),
(60, '1123', 'fsdklj', '09123458473', 'davejohn@gmail.com', 'Student', 1, '2019-09-04', ''),
(61, '3u2473', 'albery', '09182748179', 'df@gmail.com', 'Student', 1, '2019-10-07', 'FB-MN-581390-0710-2019'),
(62, '345678', 'Alberyt', '0929183394', 'sdfghjk', 'Employees', 1, '2019-10-07', 'FB-MN-408393-0710-2019'),
(63, '345678', 'Alberyt', '0919273648', 'sdfghjk', 'Employees', 1, '2019-10-08', 'FB-MN-829985-0810-2019'),
(64, '345678', 'Alberyt', '0912834832', 'sdfghjk', 'Employees', 1, '2019-10-08', 'FB-MN-733583-0810-2019'),
(65, '345678', 'Alberyt', '09128347192', 'sdfghjk', 'Employees', 1, '2019-10-08', 'FB-MN-365802-0810-2019'),
(66, '345678', 'Alberyt', '09129374323', 'sdfghjk', 'Employees', 1, '2019-10-08', 'FB-MN-813057-0810-2019'),
(67, '345678', 'Alberyt', '09192837483', 'sdfghjk', 'Employees', 1, '2019-10-08', 'FB-MN-136568-0810-2019'),
(68, '345678', 'Alberyt', '09128374321', 'sdfghjk', 'Employees', 1, '2019-10-08', 'FB-MN-629359-0810-2019'),
(69, '345678', 'Alberyt', '0914234567', 'sdfghjk', 'Employees', 1, '2019-10-08', 'FB-MN-228655-0810-2019'),
(70, '3456', 'albert', '09079640515', 'albert@gmail.com', 'Student', 1, '2019-10-23', 'FB-MN-30350-2310-2019'),
(71, '67890', 'jemerlyn', '0912937182', 'albert@gmail.com', 'Student', 1, '2019-10-23', 'FB-MN-172364-2310-2019'),
(72, '67890', 'mary grace', '09192385971', 'albert@gmail.com', 'Student', 1, '2019-10-23', 'FB-MN-911435-2310-2019'),
(73, '567', 'lou', '09192849301', 'albertsopena@gmail.com', 'Student', 1, '2019-10-23', 'FB-MN-664756-2310-2019'),
(74, '567', 'andrywin', '09124758197', 'albertsopena@gmail.com', 'Student', 1, '2019-10-23', 'FB-MN-666058-2310-2019'),
(75, '4567890', 'John Albert', '01928481923', 'albertsopena@gmail.com', 'Employees', 1, '2019-10-23', 'CP-MN-343233-2310-2019'),
(76, '4567890', 'John Albert', '09297533826', 'albertsopena@gmail.com', 'Employees', 1, '2019-10-23', 'CP-MN-937094-2310-2019'),
(77, '3456', 'franco martin', '09192538167', 'johnalbert@gmail.com', 'Student', 1, '2019-10-23', 'CP-MN-464076-2310-2019'),
(78, '4567', 'joren alberto', '09260790249', 'johnalbert26', 'Employees', 1, '2019-10-23', 'CP-MN-759073-2310-2019'),
(79, '2016-11978-mn-0', 'John Albert', '0912482375', 'davejohn@gmail.com', 'Student', 1, '2019-10-23', 'CP-MN-248957-2310-2019'),
(80, '2016-11984-MN-0', 'John Albert', '09129919168', 'albertsopena@gmail.com', 'Student', 1, '2019-10-23', 'FB-MN-723281-2310-2019'),
(81, '2016-00172-MN-0', 'franco louis c martin', '09192538167', 'francolouismartin@gmail.com', 'Student', 1, '2019-10-24', 'CP-MN-991179-2410-2019'),
(82, '2016-00176-MN-0', 'John Albert', '09192538167', 'albertsopena@gmail.com', 'Student', 1, '2019-10-24', 'FB-MN-578611-2410-2019'),
(83, '2014-08487-MN-0', 'Albert', '09129929268', 'albert@gmail.com', 'Student', 1, '2019-11-04', 'FB-MN-796691-0411-2019'),
(84, '2016-00176-MN-0', 'John Albert', '344546', 'johnalbert@gmail.com', 'Employees', 1, '2019-11-04', 'FB-MN-81353-0411-2019'),
(85, '2016-00176-MN-0', 'John Albert', '344546', 'johnalbert@gmail.com', 'Employees', 1, '2019-11-04', 'FB-MN-694713-0411-2019'),
(86, '2016-00176-MN-0', 'John Albert', '344546', 'johnalbert@gmail.com', 'Employees', 1, '2019-11-04', 'FB-MN-299818-0411-2019'),
(87, '2016-00176-MN-0', 'fsdklj', '24534', 'johnalbert@gmail.com', 'Employees', 1, '2019-11-04', 'FB-MN-197513-0411-2019'),
(88, '2016-00172-MN-0', 'Albert Storessesss', '344546', 'davejohn@gmail.com', 'Employees', 1, '2019-11-04', 'FB-MN-669014-0411-2019'),
(89, '2016-00172-MN-0', 'fsdklj', '344546', 'albertsopena@gmail.com', 'Employees', 1, '2019-11-04', 'FB-MN-889220-0411-2019'),
(90, '2016-00172-MN-0', 'fsdklj', '344546', 'albertsopena@gmail.com', 'Employees', 1, '2019-11-04', 'FB-MN-537875-0411-2019'),
(91, '2016-00172-MN-0', 'fsdklj', '344546', 'albertsopena@gmail.com', 'Employees', 1, '2019-11-04', 'FB-MN-980831-0411-2019');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `task_name` varchar(200) NOT NULL,
  `case_id` int(11) NOT NULL,
  `status` varchar(200) NOT NULL,
  `priority` varchar(200) NOT NULL,
  `date_start` date NOT NULL DEFAULT current_timestamp(),
  `date_due` date NOT NULL DEFAULT current_timestamp(),
  `task_desc` varchar(500) NOT NULL,
  `assigned_admin` int(11) NOT NULL DEFAULT 1,
  `deletion` int(11) NOT NULL DEFAULT 1,
  `finish` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `task_name`, `case_id`, `status`, `priority`, `date_start`, `date_due`, `task_desc`, `assigned_admin`, `deletion`, `finish`) VALUES
(3, 'Albert Storessesss', 1, 'pending', 'Normal', '2019-10-10', '2019-10-11', 'task', 1, 1, 0),
(4, 'task', 3, 'pending', 'Normal', '2019-10-01', '2019-10-02', 'task', 1, 1, 1),
(5, 'task', 2, 'pending', 'low', '2019-10-03', '2019-10-04', 'for meet up', 1, 1, 1),
(6, 'task', 3, 'pending', 'high', '2019-12-12', '2019-12-20', 'first investigation', 1, 1, 1),
(7, 'task', 3, 'pending', 'high', '2019-12-12', '2019-12-20', 'inspection', 1, 1, 1),
(8, 'task', 5, 'pending', 'Normal', '2019-09-04', '2019-09-05', 'inspection', 1, 1, 1),
(9, 'name', 2, 'pending', 'high', '2019-09-01', '2019-09-01', 'investigation', 1, 1, 1),
(10, 'name', 2, 'pending', 'high', '2019-09-01', '2019-09-01', 'investigation', 1, 1, 1),
(11, 'for investigation', 2, 'pending', 'Urgent', '2019-11-20', '2019-11-21', 'investigation', 1, 1, 0),
(12, 'for meet up', 3, 'pending', 'high', '2019-02-23', '2019-03-12', 'meet up', 1, 1, 0),
(13, 'pending for overall evaluation', 2, '', 'Normal', '2019-11-11', '2019-11-12', 'evaluation', 1, 0, 1),
(14, 'pending meet up', 3, '', 'high', '2019-11-05', '2019-11-06', 'meet up', 1, 0, 1),
(15, 'meet up', 1, '', 'high', '2019-10-24', '2019-10-25', 'meet up', 1, 1, 0),
(16, 'for meet up', 2, '', 'high', '2019-10-21', '2019-10-22', 'meet up', 1, 1, 0),
(17, 'waiting for final verdict', 2, '', 'high', '2019-10-30', '2019-10-31', 'final verdict only', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `deletion` int(11) NOT NULL DEFAULT 1,
  `online` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `fname`, `mname`, `lname`, `username`, `password`, `active`, `deletion`, `online`) VALUES
(1, 'Johnny', '', 'Super Admin', 'admin', 'admin', 1, 1, 1),
(2, 'albert', '', 'sopena', 'albert', 'albert', 1, 1, 0),
(3, 'albert', '', 'sopena', 'albert', 'albert', 1, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assigned_admin` (`assigned_admin`),
  ADD KEY `feedback` (`feedback`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender` (`sender`),
  ADD KEY `store` (`store`);

--
-- Indexes for table `concession`
--
ALTER TABLE `concession`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `concession_details`
--
ALTER TABLE `concession_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `concession_equipment`
--
ALTER TABLE `concession_equipment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cdid` (`cdid`);

--
-- Indexes for table `concession_experience`
--
ALTER TABLE `concession_experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `concession_items`
--
ALTER TABLE `concession_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cdid` (`cdid`);

--
-- Indexes for table `concession_services`
--
ALTER TABLE `concession_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cdid` (`cdid`);

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feedback_info_id` (`feedback_info_id`),
  ADD KEY `viewed_by` (`viewed_by`),
  ADD KEY `feedback_ibfk_3` (`sender_id`),
  ADD KEY `store_id` (`store_id`);

--
-- Indexes for table `feedback_details`
--
ALTER TABLE `feedback_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sender`
--
ALTER TABLE `sender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `case_id` (`case_id`,`assigned_admin`),
  ADD KEY `assigned_admin` (`assigned_admin`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `concession`
--
ALTER TABLE `concession`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `concession_details`
--
ALTER TABLE `concession_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `concession_equipment`
--
ALTER TABLE `concession_equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `concession_experience`
--
ALTER TABLE `concession_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `concession_items`
--
ALTER TABLE `concession_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `concession_services`
--
ALTER TABLE `concession_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contract`
--
ALTER TABLE `contract`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `feedback_details`
--
ALTER TABLE `feedback_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sender`
--
ALTER TABLE `sender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD CONSTRAINT `activity_log_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `user_details` (`id`);

--
-- Constraints for table `cases`
--
ALTER TABLE `cases`
  ADD CONSTRAINT `cases_ibfk_1` FOREIGN KEY (`assigned_admin`) REFERENCES `user_details` (`id`),
  ADD CONSTRAINT `cases_ibfk_2` FOREIGN KEY (`feedback`) REFERENCES `feedback` (`id`);

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `complaint_ibfk_1` FOREIGN KEY (`sender`) REFERENCES `sender` (`id`),
  ADD CONSTRAINT `complaint_ibfk_2` FOREIGN KEY (`store`) REFERENCES `concession` (`id`);

--
-- Constraints for table `concession_equipment`
--
ALTER TABLE `concession_equipment`
  ADD CONSTRAINT `concession_equipment_ibfk_1` FOREIGN KEY (`cdid`) REFERENCES `concession` (`id`);

--
-- Constraints for table `concession_items`
--
ALTER TABLE `concession_items`
  ADD CONSTRAINT `concession_items_ibfk_1` FOREIGN KEY (`cdid`) REFERENCES `concession` (`id`);

--
-- Constraints for table `concession_services`
--
ALTER TABLE `concession_services`
  ADD CONSTRAINT `concession_services_ibfk_1` FOREIGN KEY (`cdid`) REFERENCES `concession` (`id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`feedback_info_id`) REFERENCES `feedback_details` (`id`),
  ADD CONSTRAINT `feedback_ibfk_3` FOREIGN KEY (`sender_id`) REFERENCES `sender` (`id`),
  ADD CONSTRAINT `feedback_ibfk_4` FOREIGN KEY (`viewed_by`) REFERENCES `user_details` (`id`),
  ADD CONSTRAINT `feedback_ibfk_5` FOREIGN KEY (`store_id`) REFERENCES `concession` (`id`);

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`assigned_admin`) REFERENCES `user_details` (`id`),
  ADD CONSTRAINT `task_ibfk_2` FOREIGN KEY (`case_id`) REFERENCES `cases` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
