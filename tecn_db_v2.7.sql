-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2019 at 02:05 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tecn_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `nid` int(11) NOT NULL,
  `dob` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `trash` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL COMMENT 'id from ''student'' table',
  `membership` int(11) NOT NULL COMMENT 'id from type_list; type_id=2',
  `added_by` int(11) NOT NULL,
  `date` date NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  `trash` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `student_id`, `membership`, `added_by`, `date`, `date_time`, `status`, `trash`) VALUES
(1, 2, 8, 5, '2019-07-24', '2019-07-24 14:47:55', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_name` varchar(20) NOT NULL,
  `starting_date` date NOT NULL,
  `by` int(11) NOT NULL COMMENT 'added_by: exmpl 3',
  `status` int(11) NOT NULL DEFAULT '1',
  `trash` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `name`, `short_name`, `starting_date`, `by`, `status`, `trash`) VALUES
(1, 'All Department', 'All', '2019-07-01', 1, 1, 0),
(2, 'Apparel Manufacturing Engineering', 'AME', '2019-07-01', 1, 1, 0),
(3, 'Fabric Manufacturing Engineering', 'FME', '2019-07-01', 1, 1, 0),
(4, 'Wet Processing Engineering', 'WPE', '2019-07-01', 1, 1, 0),
(5, 'Yarn Manufacturing Engineering', 'YME', '2019-07-01', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `trash` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `name`, `type`, `status`, `trash`) VALUES
(1, 'Super Admin', 1, 1, 0),
(2, 'Admin', 1, 1, 0),
(3, 'Principal', 2, 1, 0),
(4, 'Professor', 2, 1, 0),
(5, 'Associate Professor', 2, 1, 0),
(6, 'Assistant Professor', 2, 1, 0),
(7, 'Lecturer', 2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `notice_type` int(11) NOT NULL DEFAULT '1' COMMENT 'notice=1, news=2,events=3',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `added_by` int(11) NOT NULL,
  `date` date NOT NULL,
  `date_time` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `trash` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice_type`, `title`, `description`, `image`, `added_by`, `date`, `date_time`, `status`, `trash`) VALUES
(1, 1, 'Annual Sports and Cultural Event/19', 'Annual Sports and Cultural Event/19 Annual Sports and Cultural Event/19 Annual Sports and Cultural Event/19 Annual Sports and Cultural Event/19 Annual Sports and Cultural Event/19 Annual Sports and Cultural Event/19 Annual Sports and Cultural Event/19 Annual Sports and Cultural Event/19 Annual Sports and Cultural Event/19 Annual Sports and Cultural Event/19 Annual Sports and Cultural Event/19 Annual Sports and Cultural Event/19 Annual Sports and Cultural Event/19 Annual Sports and Cultural Event/19 Annual Sports and Cultural Event/19 ', 'notice1.jpg', 1, '2019-07-15', '2019-07-15 04:21:10', 1, 0),
(2, 1, 'Annual Sports Week', 'Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week ', '', 0, '2019-07-09', '2019-07-09 13:24:39', 1, 0),
(3, 3, 'Annual Debate Competition - 2019', ' Annual Debate Competition - 2019  Annual Debate Competition - 2019  Annual Debate Competition - 2019  Annual Debate Competition - 2019  Annual Debate Competition - 2019  Annual Debate Competition - 2019  Annual Debate Competition - 2019  Annual Debate Competition - 2019  Annual Debate Competition - 2019  Annual Debate Competition - 2019  Annual Debate Competition - 2019  Annual Debate Competition - 2019 ', '', 0, '2019-07-15', '2019-07-15 13:41:16', 1, 0),
(4, 1, 'College Auditorium', 'College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium ', '', 0, '2019-07-15', '2019-07-15 13:42:15', 1, 0),
(5, 1, 'Typing Competition', 'Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition ', '', 0, '2019-07-15', '2019-07-15 13:44:39', 1, 0),
(6, 2, 'Interdepartment Football Match - 11th Batch', 'Interdepartment Football Match - 11th Batch Interdepartment Football Match - 11th Batch Interdepartment Football Match - 11th Batch Interdepartment Football Match - 11th Batch Interdepartment Football Match - 11th Batch Interdepartment Football Match - 11th Batch Interdepartment Football Match - 11th Batch Interdepartment Football Match - 11th Batch Interdepartment Football Match - 11th Batch Interdepartment Football Match - 11th Batch Interdepartment Football Match - 11th Batch Interdepartment Football Match - 11th Batch Interdepartment Football Match - 11th Batch Interdepartment Football Match - 11th Batch ', '', 0, '2019-07-15', '2019-07-15 13:45:42', 1, 0),
(7, 1, 'Blood Group Screening', 'Blood Group Screening Blood Group Screening Blood Group Screening Blood Group Screening Blood Group Screening Blood Group Screening Blood Group Screening Blood Group Screening Blood Group Screening Blood Group Screening Blood Group Screening Blood Group Screening ', '', 0, '2019-07-15', '2019-07-15 13:47:00', 1, 0),
(8, 3, 'College Auditorium', 'College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium College Auditorium ', '', 0, '2019-07-15', '2019-07-15 13:48:57', 1, 0),
(9, 1, 'Annual Debate Competition - 2019', 'Annual Debate Competition - 2019 Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019Annual Debate Competition - 2019', '', 0, '2019-07-15', '2019-07-15 13:49:17', 1, 0),
(10, 1, 'Typing Competition', 'Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition Typing Competition ', '', 0, '2019-07-15', '2019-07-15 13:51:03', 1, 0),
(11, 1, 'Annual Sports Week', 'Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week Annual Sports Week ', '', 0, '2019-07-15', '2019-07-15 13:51:20', 1, 0),
(12, 2, 'Test notice ', 'Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . Test notice description . ', '', 0, '2019-07-22', '2019-07-22 08:18:20', 1, 0),
(13, 3, 'Test notice 2', 'Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. Test notice description 2. ', '', 0, '2019-07-22', '2019-07-22 08:24:30', 1, 0),
(14, 3, 'Test notice 3', 'Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. Test notice description 3. ', '', 0, '2019-07-22', '2019-07-22 08:25:28', 1, 0),
(15, 2, '????? ??????', '????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ????? ', '', 0, '2019-07-27', '2019-07-27 08:21:53', 1, 0),
(16, 1, 'ডেমো টাইটেল', 'ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ডেমো ডেসক্রিপশন । ', '', 0, '2019-07-27', '2019-07-27 08:34:14', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE `password` (
  `id` int(11) NOT NULL,
  `user_type` int(11) NOT NULL COMMENT 'id from "type_list"',
  `user_id` int(11) NOT NULL COMMENT 'id from admin/teachers',
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `pass_hash` varchar(255) NOT NULL,
  `pass_view` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `trash` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password`
--

INSERT INTO `password` (`id`, `user_type`, `user_id`, `username`, `email`, `mobile`, `pass_hash`, `pass_view`, `status`, `trash`) VALUES
(1, 1, 1, 'admin', 'admin@tecn.gov.bd', '01712345678', '96de4eceb9a0c2b9b52c0b618819821b', '123', 1, 0),
(2, 2, 4, 'bbb', 'bb@bb', 'bb', '96de4eceb9a0c2b9b52c0b618819821b', '123', 1, 0),
(3, 2, 7, 'ccc', 'ccc@cc', 'ccc', '96de4eceb9a0c2b9b52c0b618819821b', '123', 1, 0),
(4, 2, 8, 'ddd', 'ddd@ddd', 'ddd', '86352acebdf5e34c3aa83eb598704b79', 'ddd', 1, 0),
(5, 2, 9, 'eee', 'eee@ee', 'eee', '96de4eceb9a0c2b9b52c0b618819821b', '123', 1, 0),
(6, 2, 10, 'fff', 'fff@fff', 'fff', '64d3d3a1d1e4cb061b744f5f6b998fe8', 'fff', 1, 0),
(7, 4, 1, 'mizan', 'mizu.cse@gmail.com', '01711223344', '8e600088c6e7ce6fe7ac928a0b534ccf', '111', 1, 0),
(8, 4, 2, 'ab', 'ab@ab', '12', 'b2d788831e574923738e41c7f80b645f', '12', 1, 0),
(9, 4, 2, 'ab', 'ab@ab', '12', 'b2d788831e574923738e41c7f80b645f', '12', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll` varchar(20) NOT NULL,
  `dept` int(11) NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `dob` date NOT NULL,
  `nid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `present_address` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `starting_date` date NOT NULL,
  `ending_date` date NOT NULL,
  `is_student` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `trash` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `roll`, `dept`, `phone`, `email`, `gender`, `dob`, `nid`, `image`, `father_name`, `mother_name`, `present_address`, `permanent_address`, `starting_date`, `ending_date`, `is_student`, `added_by`, `status`, `trash`) VALUES
(1, 'mizan', '112462', 2, '01711223344', 'mizu.cse@gmail.com', 1, '2019-07-24', 23123423, '', 'test father', 'test mother', 'test present address', 'test permanent address', '2019-07-24', '2019-08-01', 1, 5, 1, 0),
(2, 'ab', '12', 2, '12', 'ab@ab', 1, '2019-07-01', 12, '', 'ab', 'ab', 'ab', 'ab', '2003-07-01', '0000-00-00', 2, 5, 1, 0),
(3, 'ab', '12', 2, '12', 'ab@ab', 1, '2019-07-01', 12, '', 'ab', 'ab', 'ab', 'ab', '2003-07-01', '0000-00-00', 2, 5, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `nid` int(11) NOT NULL,
  `dob` date NOT NULL COMMENT 'date of birth',
  `gender` int(11) NOT NULL COMMENT '1=male; 2=female',
  `present_address` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `dept` int(11) NOT NULL COMMENT 'from dept table',
  `designation` int(11) NOT NULL COMMENT 'from designation table',
  `joining_date` date NOT NULL,
  `added_by` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT 'example: 1=active,2=on_leave',
  `trash` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `email`, `phone`, `father_name`, `mother_name`, `nid`, `dob`, `gender`, `present_address`, `permanent_address`, `image`, `dept`, `designation`, `joining_date`, `added_by`, `date_time`, `status`, `trash`) VALUES
(1, 'test', 'test@tecn.gov.bd', '0181234568788', 'test father', 'test mother', 23123423, '2019-07-23', 1, 'test present address', 'test permanent address', '', 1, 1, '2019-07-23', 0, '2019-07-23 12:31:25', 1, 0),
(2, 'Demo Name', 'demo@tecn.gov.bd', '01712345678', 'Demo Father', 'Demo Mother', 2147483647, '1957-07-01', 1, 'Demo present address', 'Demo Permanent Address', '', 1, 4, '2019-07-23', 1, '2019-07-23 14:43:25', 1, 0),
(3, 'aa', 'aa@tecn', 'aa', 'aa', 'aa', 0, '2019-07-23', 1, 'aa', 'aa', '', 2, 5, '2019-07-23', 1, '2019-07-23 15:39:00', 1, 0),
(4, 'bb', 'bb@bb', 'bb', 'bb', 'bb', 0, '2019-07-22', 2, 'bb', 'bb', '', 5, 7, '2019-07-23', 1, '2019-07-23 15:41:51', 1, 0),
(5, 'bb', 'bb@bb', 'bb', 'bb', 'bb', 0, '2019-07-22', 2, 'bb', 'bb', '', 5, 7, '2019-07-23', 1, '2019-07-23 15:45:19', 1, 0),
(6, 'bb', 'bb@bb', 'bb', 'bb', 'bb', 0, '2019-07-22', 2, 'bb', 'bb', '', 5, 7, '2019-07-23', 1, '2019-07-23 15:46:24', 1, 0),
(7, 'ccc', 'ccc@cc', 'ccc', 'ccc', 'ccc', 0, '2019-07-16', 1, '', 'ccc', '', 3, 3, '2019-07-09', 1, '2019-07-23 16:02:48', 1, 0),
(8, 'ddd', 'ddd@ddd', 'ddd', 'ddd', 'ddd', 0, '2019-07-23', 2, 'ddd', 'ddd', '', 2, 4, '2019-07-23', 1, '2019-07-23 16:04:57', 1, 0),
(9, 'eee', 'eee@ee', 'eee', 'eee', 'eee', 0, '2019-07-23', 2, 'eee', 'eee', '', 2, 6, '2019-07-16', 1, '2019-07-23 16:31:39', 1, 0),
(10, 'fff', 'fff@fff', 'fff', 'fff', 'fff', 0, '2019-07-02', 2, 'fff', 'fff', '', 4, 5, '2019-07-16', 4, '2019-07-23 16:46:07', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `trash` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `type_name`, `status`, `trash`) VALUES
(1, 'user_type', 1, 0),
(2, 'membership_type', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `type_list`
--

CREATE TABLE `type_list` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type_id` int(11) NOT NULL COMMENT 'This id from "types" table',
  `status` int(11) NOT NULL DEFAULT '1',
  `trash` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_list`
--

INSERT INTO `type_list` (`id`, `name`, `type_id`, `status`, `trash`) VALUES
(1, 'Admin', 1, 1, 0),
(2, 'Teacher', 1, 1, 0),
(3, 'Staff', 1, 1, 0),
(4, 'Student', 1, 1, 0),
(5, 'Alumni', 1, 1, 0),
(6, 'Board of Directors', 1, 1, 0),
(7, 'General', 2, 1, 0),
(8, 'Lifetime', 2, 1, 0),
(9, 'Associate', 2, 1, 0),
(10, 'Honorable', 2, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password`
--
ALTER TABLE `password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_list`
--
ALTER TABLE `type_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `password`
--
ALTER TABLE `password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `type_list`
--
ALTER TABLE `type_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
