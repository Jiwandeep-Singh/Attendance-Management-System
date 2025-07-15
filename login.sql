-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2025 at 03:04 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` text NOT NULL,
  `phone_no` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `password`, `name`, `phone_no`) VALUES
('101', 'jiwan', 'Jiwandeep singh', '7307137113'),
('102', 'malwinder', 'Malwinder Kaur', '9812342213');

-- --------------------------------------------------------

--
-- Table structure for table `class2a`
--

CREATE TABLE `class2a` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `attendance` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class2a`
--

INSERT INTO `class2a` (`id`, `date`, `attendance`) VALUES
(112, '2022-04-14', 'present'),
(112, '2022-04-15', 'present'),
(112, '2022-04-16', 'present'),
(220202, '2022-04-16', 'present'),
(112, '2022-04-30', 'present'),
(220202, '2022-04-30', 'absent');

-- --------------------------------------------------------

--
-- Table structure for table `class3a`
--

CREATE TABLE `class3a` (
  `id` int(10) NOT NULL,
  `date` date DEFAULT NULL,
  `attendance` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class3b`
--

CREATE TABLE `class3b` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `attendance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class4a`
--

CREATE TABLE `class4a` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `attendance` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class4a`
--

INSERT INTO `class4a` (`id`, `date`, `attendance`) VALUES
(22041, '2022-04-14', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `class5a`
--

CREATE TABLE `class5a` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `attendance` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class6a`
--

CREATE TABLE `class6a` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `attendance` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class7a`
--

CREATE TABLE `class7a` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `attendance` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class8a`
--

CREATE TABLE `class8a` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `attendance` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class9a`
--

CREATE TABLE `class9a` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `attendance` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class10a`
--

CREATE TABLE `class10a` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `attendance` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class10a`
--

INSERT INTO `class10a` (`id`, `date`, `attendance`) VALUES
(111, '2022-04-14', 'present'),
(1101, '2022-04-14', 'present'),
(111, '2022-04-04', 'present'),
(1101, '2022-04-15', 'absent'),
(111, '2022-04-15', 'present'),
(1101, '2022-04-16', 'absent'),
(111, '2022-04-16', 'present'),
(1101, '2022-04-17', 'absent'),
(111, '2022-04-17', 'present'),
(1101, '2022-04-22', 'present'),
(111, '2022-04-22', 'present'),
(1101, '2022-04-30', 'absent'),
(111, '2022-04-30', 'present'),
(2210004, '2022-04-30', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `class11a`
--

CREATE TABLE `class11a` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `attendance` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class12a`
--

CREATE TABLE `class12a` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `attendance` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` text NOT NULL,
  `phone_no` text NOT NULL,
  `class` varchar(10) NOT NULL,
  `section` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`id`, `password`, `name`, `phone_no`, `class`, `section`) VALUES
('1101', 'gurleen', 'gurleen kaur', '7307137883', '10', 'A'),
('111', 'arman', 'Armanjot Kaur', '7307137883', '10', 'A'),
('112', 'ekam', 'Ekamjot Singh', '9307137883', '2', 'A'),
('220202', 'Harjot ', 'Harjot Kaur', '9812342213', '2', 'A'),
('22042', 'Harman', 'Harmanjot Singh', '9812342213', '4', 'A'),
('2210004', 'vijay', 'Vijay Singh', '9812342213', '10', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_login`
--

CREATE TABLE `teacher_login` (
  `id` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` text NOT NULL,
  `phone_no` text NOT NULL,
  `class_incharge` varchar(10) NOT NULL,
  `class_section` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_login`
--

INSERT INTO `teacher_login` (`id`, `password`, `name`, `phone_no`, `class_incharge`, `class_section`) VALUES
('101', 'jiwan', 'Jiwandeep Singh', '7307137113', '10', 'A'),
('102', 'malwinder', 'Malwinder Kaur', '7307137883', '2', 'A'),
('103', 'ravinder', 'Ravinder Singh', '9307137883', '0', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_login`
--
ALTER TABLE `teacher_login`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
