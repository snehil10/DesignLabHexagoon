-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2018 at 08:07 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pts_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` text NOT NULL,
  `username` varchar(266) NOT NULL,
  `mobile_number` text NOT NULL,
  `password` varchar(266) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `sender_id` varchar(255) NOT NULL,
  `receiver_id` varchar(255) NOT NULL,
  `message_content` varchar(255) NOT NULL,
  `message_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `username` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `username` varchar(255) NOT NULL,
  `enroll_id` varchar(255) NOT NULL,
  `univ_id` varchar(255) NOT NULL,
  `reg_id` varchar(255) NOT NULL,
  `class_roll` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parents_id` varchar(255) NOT NULL,
  `semester` int(255) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `ph_no` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `address` varchar(1024) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`username`, `enroll_id`, `univ_id`, `reg_id`, `class_roll`, `name`, `parents_id`, `semester`, `stream`, `section`, `email_id`, `ph_no`, `year`, `address`, `password`, `picture`) VALUES
('st_14162', '12014002002126', '10400114162', '141040110163', '162', 'Shubham Saurav', 'pt_14162', 8, 'Computer Science & Engineering', 'C', 'shubhamsaurav001@gmail.com', '7076535948', '', '', 'shubham4495', '');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `username` varchar(255) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `mobile_number` int(11) NOT NULL,
  `email_id` int(11) NOT NULL,
  `course_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
