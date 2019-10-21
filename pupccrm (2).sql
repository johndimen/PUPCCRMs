-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2019 at 07:24 AM
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
  `case_number` int(11) NOT NULL,
  `case_name` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'pending',
  `priority` varchar(200) NOT NULL,
  `case_desc` varchar(500) NOT NULL,
  `assigned_admin` int(11) NOT NULL,
  `deletion` int(11) NOT NULL DEFAULT 1,
  `date_created` date NOT NULL DEFAULT current_timestamp(),
  `date_updated` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `case_number`, `case_name`, `type`, `status`, `priority`, `case_desc`, `assigned_admin`, `deletion`, `date_created`, `date_updated`) VALUES
(1, 842083, 'fuck', 'question', 'pending', '', 'cvbnm,', 1, 1, '2019-09-04', '2019-09-04'),
(2, 516616, 'Food Poison', 'incident', 'pending', '', '', 2, 1, '2019-09-04', '2019-09-04'),
(3, 938324, 'Food Poison', 'incident', 'pending', '', '', 1, 1, '2019-09-04', '2019-09-04'),
(4, 764781, 'Food Poison', 'incident', 'pending', '', '', 1, 1, '2019-09-04', '2019-09-04'),
(5, 256513, 'Food Poison', 'question', 'pending', 'high', '', 1, 1, '2019-09-04', '2019-09-04'),
(6, 952338, 'Food Poison', 'incident', 'pending', 'high', '', 1, 1, '2019-09-04', '2019-09-04'),
(7, 0, 'dfghjkl', 'problem', 'pending', 'normal', 'dfghjkl;', 1, 1, '2019-10-09', '2019-10-09');

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
(1, '', 1, 'north', 'Albert Store', 'food', '2019-09-03', '', 0, 0, '2019-10-03'),
(2, '', 2, 'north', 'Albert New Store', 'nonfood', '2019-09-03', '', 0, 0, '2019-10-03'),
(13, 'CS-MN-19536-0210-2019', 0, 'Select Location', '', '', '2019-10-03', '', 0, 0, '0000-00-00'),
(14, 'CS-MN-807569-0210-2019', 0, 'Select Location', '', '', '2019-10-03', '', 0, 0, '0000-00-00'),
(15, 'CS-MN-943438-0210-2019', 0, 'Select Location', '', '', '2019-10-03', '', 0, 0, '0000-00-00'),
(16, 'CS-MN-206221-0210-2019', 0, 'Select Location', '', '', '2019-10-03', '', 0, 0, '0000-00-00'),
(17, 'CS-MN-73605-0210-2019', 0, 'Select Location', '', '', '2019-10-03', '', 0, 5000, '0000-00-00'),
(18, 'CS-MN-140217-0210-2019', 0, 'Select Location', '', 'food', '2019-10-03', '', 0, 0, '0000-00-00'),
(19, 'CS-MN-952420-0210-2019', 0, 'Select Location', '', '', '2019-10-03', '', 0, 0, '2019-10-04'),
(20, 'CS-MN-396266-0210-2019', 0, 'Select Location', 'asff', '', '2019-10-03', '', 0, 0, '0000-00-00'),
(21, 'CS-MN-578024-0210-2019', 1, 'north', 'Albert Storesesss1', 'food', '2019-10-03', '', 0, 5000, '2019-10-03'),
(22, 'CS-MN-786018-0610-2019', 0, 'Select Location', '', '', '2019-10-06', '', 0, 0, '0000-00-00');

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
(4, 16, 4, 1, 1, 1, 1, '2019-10-03 04:41:13', '2019-10-03 04:41:13'),
(5, 17, 5, 1, 1, 1, 1, '2019-10-03 05:39:15', '2019-10-03 05:39:15'),
(6, 18, 6, 1, 1, 1, 1, '2019-10-03 05:39:29', '2019-10-03 05:39:29'),
(7, 19, 7, 1, 1, 1, 1, '2019-10-03 05:39:41', '2019-10-03 05:39:41'),
(8, 20, 8, 1, 1, 1, 1, '2019-10-03 05:40:18', '2019-10-03 05:40:18'),
(9, 21, 9, 1, 1, 1, 1, '2019-10-03 05:41:21', '2019-10-03 05:41:21'),
(10, 22, 10, 1, 1, 1, 1, '2019-10-06 16:53:45', '2019-10-06 16:53:45');

-- --------------------------------------------------------

--
-- Table structure for table `concession_experience`
--

CREATE TABLE `concession_experience` (
  `id` int(11) NOT NULL,
  `place` varchar(200) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` text NOT NULL,
  `serial` varchar(200) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `deletion` int(11) NOT NULL DEFAULT 1,
  `cdid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `concession_experience`
--

INSERT INTO `concession_experience` (`id`, `place`, `date_start`, `date_end`, `serial`, `active`, `deletion`, `cdid`) VALUES
(1, '', '0000-00-00', '', '22', 1, 1, 0),
(2, '', '0000-00-00', '', '22', 1, 1, 0),
(3, '', '0000-00-00', '', '22', 1, 1, 0),
(4, 'ghjkl', '0000-00-00', '', 'CS-MN-786018-0610-2019', 1, 1, 22);

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
(9, 'fuck yoy', '', 0, '', 'CS-MN-19536-0210-2019', 1, 1, 1),
(10, 'fuck you', 'non-food', 0, '', 'CS-MN-943438-0210-2019', 1, 1, 15);

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
(1, '0', 0, 0, ' ', 'CS-MN-807569-0210-2019', 1, 1, 14);

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
(19, '527570', 58, 1, 46, 0, 1, '2019-09-04', '10:49:49', 2019, 1),
(20, '600321', 59, 1, 47, 1, 1, '2019-09-04', '12:08:25', 2019, 1),
(21, '399565', 60, 1, 48, 1, 1, '2019-09-04', '12:26:46', 2019, 1),
(31, 'FB-MN-733583-0810-2019', 64, 1, 69, 1, 1, '2019-10-08', '16:26:41', 2019, 21),
(32, 'FB-MN-228655-0810-2019', 69, 1, 74, 1, 1, '2019-10-08', '16:27:41', 2019, 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_details`
--

CREATE TABLE `feedback_details` (
  `id` int(11) NOT NULL,
  `evaluation` int(11) NOT NULL,
  `hygiene` int(11) NOT NULL,
  `hospitable` int(11) NOT NULL,
  `conditions` int(11) NOT NULL,
  `environment` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `feedback_type` varchar(250) NOT NULL,
  `serial` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_details`
--

INSERT INTO `feedback_details` (`id`, `evaluation`, `hygiene`, `hospitable`, `conditions`, `environment`, `price`, `message`, `date`, `feedback_type`, `serial`) VALUES
(1, 4, 1, 1, 1, 1, 1, 'dsfsg', '2019-09-04', '', ''),
(46, 4, 1, 1, 1, 1, 1, 'sdhfgkjdshfg', '2019-09-04', '', ''),
(47, 0, 0, 0, 0, 0, 0, 'Masarap iyong pagkain', '2019-09-04', '', ''),
(48, 0, 1, 1, 1, 1, 1, 'asdasd', '2019-09-04', '', ''),
(49, 4, 1, 1, 0, 1, 1, 'fuckeersss', '2019-10-07', 'complain', 'FB-MN-955852-0710-2019'),
(50, 4, 1, 1, 0, 1, 1, 'fuckeersss', '2019-10-07', 'complain', 'FB-MN-157588-0710-2019'),
(51, 0, 1, 1, 1, 1, 1, 'fuckeerss', '2019-10-07', '', 'FB-MN-776137-0710-2019'),
(52, 0, 1, 1, 1, 1, 1, 'ksdjfksd', '2019-10-07', '', 'FB-MN-563290-0710-2019'),
(53, 0, 1, 1, 1, 1, 1, 'ksdjfksd', '2019-10-07', '', 'FB-MN-481596-0710-2019'),
(54, 0, 1, 1, 1, 1, 1, 'ksdjfksd', '2019-10-07', '', 'FB-MN-617896-0710-2019'),
(55, 0, 1, 1, 1, 1, 1, 'ksdjfksd', '2019-10-07', '', 'FB-MN-962476-0710-2019'),
(56, 0, 1, 1, 1, 1, 1, 'ksdjfksd', '2019-10-07', '', 'FB-MN-453632-0710-2019'),
(57, 0, 1, 1, 1, 1, 1, 'ksdjfksd', '2019-10-07', '', 'FB-MN-23872-0710-2019'),
(58, 0, 1, 1, 1, 1, 1, 'ksdjfksd', '2019-10-07', '', 'FB-MN-564013-0710-2019'),
(59, 0, 1, 1, 1, 1, 1, 'ksdjfksd', '2019-10-07', '', 'FB-MN-700850-0710-2019'),
(60, 0, 1, 1, 1, 1, 1, 'ksdjfksd', '2019-10-07', '', 'FB-MN-372916-0710-2019'),
(61, 0, 1, 1, 1, 1, 1, 'ksdjfksd', '2019-10-07', '', 'FB-MN-350516-0710-2019'),
(62, 0, 1, 1, 1, 1, 1, 'ksdjfksd', '2019-10-07', '', 'FB-MN-27696-0710-2019'),
(63, 5, 1, 1, 1, 1, 1, 'ksdjfksd', '2019-10-07', '', 'FB-MN-533126-0710-2019'),
(64, 5, 1, 1, 1, 1, 1, 'dsgkjdfg', '2019-10-07', 'complain', 'FB-MN-581390-0710-2019'),
(65, 5, 1, 1, 1, 1, 1, 'fhsdkjf', '2019-10-07', 'complain', 'FB-MN-784587-0710-2019'),
(66, 5, 1, 1, 1, 1, 1, 'fhsdkjf', '2019-10-07', 'complain', 'FB-MN-662337-0710-2019'),
(67, 5, 2, 1, 1, 1, 1, 'dsgkfjsjl', '2019-10-07', 'complain', 'FB-MN-408393-0710-2019'),
(68, 5, 2, 1, 1, 1, 1, 'dsgkfjsjl', '2019-10-08', 'complain', 'FB-MN-829985-0810-2019'),
(69, 5, 2, 1, 1, 1, 1, 'dsgkfjsjl', '2019-10-08', 'complain', 'FB-MN-733583-0810-2019'),
(70, 5, 2, 1, 1, 1, 1, 'dsgkfjsjl', '2019-10-08', 'complain', 'FB-MN-365802-0810-2019'),
(71, 5, 2, 1, 1, 1, 1, 'dsgkfjsjl', '2019-10-08', 'complain', 'FB-MN-813057-0810-2019'),
(72, 5, 2, 1, 1, 1, 1, 'dsgkfjsjl', '2019-10-08', 'complain', 'FB-MN-136568-0810-2019'),
(73, 5, 2, 1, 1, 1, 1, 'dsgkfjsjl', '2019-10-08', 'complain', 'FB-MN-629359-0810-2019'),
(74, 5, 2, 1, 1, 1, 1, 'dsgkfjsjl', '2019-10-08', 'complain', 'FB-MN-228655-0810-2019');

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
(4, 'CS-MN-206221-0210-2019', '', '', '', '', '', ''),
(5, 'CS-MN-73605-0210-2019', '', '', '', '', '', ''),
(6, 'CS-MN-140217-0210-2019', '', '', '', '', '', ''),
(7, 'CS-MN-952420-0210-2019', '', '', '', '', '', ''),
(8, 'CS-MN-396266-0210-2019', '', '', '', '', '', ''),
(9, 'CS-MN-578024-0210-2019', 'JOHN1', '', 'Sopena', 'albertsopena@gmail.com', 'Sta mesa', '24534'),
(10, 'CS-MN-786018-0610-2019', '', '', '', '', '', '');

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
(59, '12334', 'John Albert', 'fdf', 'albert@gmail.com', 'Others', 1, '2019-09-04', ''),
(60, '1123', 'fsdklj', '1234567890', 'davejohn@gmail.com', 'Student', 1, '2019-09-04', ''),
(61, '3u2473', 'albery', '12468237398', 'df@gmail.com', 'Student', 1, '2019-10-07', 'FB-MN-581390-0710-2019'),
(62, '345678', 'Alberyt', '234567', 'sdfghjk', 'Employees', 1, '2019-10-07', 'FB-MN-408393-0710-2019'),
(63, '345678', 'Alberyt', '234567', 'sdfghjk', 'Employees', 1, '2019-10-08', 'FB-MN-829985-0810-2019'),
(64, '345678', 'Alberyt', '234567', 'sdfghjk', 'Employees', 1, '2019-10-08', 'FB-MN-733583-0810-2019'),
(65, '345678', 'Alberyt', '234567', 'sdfghjk', 'Employees', 1, '2019-10-08', 'FB-MN-365802-0810-2019'),
(66, '345678', 'Alberyt', '234567', 'sdfghjk', 'Employees', 1, '2019-10-08', 'FB-MN-813057-0810-2019'),
(67, '345678', 'Alberyt', '234567', 'sdfghjk', 'Employees', 1, '2019-10-08', 'FB-MN-136568-0810-2019'),
(68, '345678', 'Alberyt', '234567', 'sdfghjk', 'Employees', 1, '2019-10-08', 'FB-MN-629359-0810-2019'),
(69, '345678', 'Alberyt', '234567', 'sdfghjk', 'Employees', 1, '2019-10-08', 'FB-MN-228655-0810-2019');

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
  `deletion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `task_name`, `case_id`, `status`, `priority`, `date_start`, `date_due`, `task_desc`, `assigned_admin`, `deletion`) VALUES
(3, 'task', 1, 'pending', 'high', '0000-00-00', '0000-00-00', '', 1, 1),
(4, 'task', 3, 'pending', 'Normal', '0000-00-00', '0000-00-00', 'task', 1, 1),
(5, 'task', 2, 'pending', 'low', '0000-00-00', '0000-00-00', 'asd', 1, 1),
(6, 'task', 3, 'pending', 'high', '2019-12-12', '2019-12-20', '', 1, 1),
(7, 'task', 3, 'pending', 'high', '2019-12-12', '2019-12-20', '', 1, 1),
(8, 'task', 5, 'pending', 'Normal', '2019-09-04', '2019-09-05', 'qwe', 1, 1),
(9, 'name', 2, 'pending', 'high', '2019-09-01', '2019-09-01', 'investigation', 1, 1),
(10, 'name', 2, 'pending', 'high', '2019-09-01', '2019-09-01', 'investigation', 1, 1),
(11, 'dshfkj', 2, 'pending', 'Urgent', '0000-00-00', '0032-04-02', '', 1, 1),
(12, 'dsughsdh', 3, 'pending', 'high', '0023-02-23', '2455-03-12', 'sdf', 1, 1),
(13, 'dfghjk', 2, '', 'Normal', '0000-00-00', '0000-00-00', 'xfghjk', 1, 0);

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
  ADD KEY `assigned_admin` (`assigned_admin`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `concession`
--
ALTER TABLE `concession`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `concession_details`
--
ALTER TABLE `concession_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `concession_experience`
--
ALTER TABLE `concession_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `concession_items`
--
ALTER TABLE `concession_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `concession_services`
--
ALTER TABLE `concession_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `feedback_details`
--
ALTER TABLE `feedback_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sender`
--
ALTER TABLE `sender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  ADD CONSTRAINT `cases_ibfk_1` FOREIGN KEY (`assigned_admin`) REFERENCES `user_details` (`id`);

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
