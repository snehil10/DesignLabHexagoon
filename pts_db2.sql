-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2018 at 04:27 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pts_db2`
--

-- --------------------------------------------------------

--
-- Table structure for table `1_cse`
--

CREATE TABLE `1_cse` (
  `HU101` varchar(255) NOT NULL,
  `PH101` varchar(255) NOT NULL,
  `M101` varchar(255) NOT NULL,
  `ME101` varchar(255) NOT NULL,
  `ES101` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `exam_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2_cse`
--

CREATE TABLE `2_cse` (
  `CS201` varchar(255) NOT NULL,
  `CH201` varchar(255) NOT NULL,
  `M201` varchar(255) NOT NULL,
  `ME201` varchar(255) NOT NULL,
  `ES201` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `exam_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `3_cse`
--

CREATE TABLE `3_cse` (
  `HU301` varchar(255) NOT NULL,
  `PH301` varchar(255) NOT NULL,
  `CH301` varchar(255) NOT NULL,
  `CS301` varchar(255) NOT NULL,
  `CS302` varchar(255) NOT NULL,
  `CS303` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `exam_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `4_cse`
--

CREATE TABLE `4_cse` (
  `MCS401` varchar(255) NOT NULL,
  `CS401` varchar(255) NOT NULL,
  `CS402` varchar(255) NOT NULL,
  `CS403` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `exam_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `5_cse`
--

CREATE TABLE `5_cse` (
  `HU501` varchar(255) NOT NULL,
  `CS501` varchar(255) NOT NULL,
  `CS502` varchar(255) NOT NULL,
  `CS503` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `exam_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `6_cse`
--

CREATE TABLE `6_cse` (
  `HU601` varchar(255) NOT NULL,
  `CS601` varchar(255) NOT NULL,
  `CS602` varchar(255) NOT NULL,
  `CS603` varchar(255) NOT NULL,
  `CS604B` varchar(255) NOT NULL,
  `CS605C` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `exam_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `7_cse`
--

CREATE TABLE `7_cse` (
  `CS701` varchar(255) NOT NULL,
  `CS702` varchar(255) NOT NULL,
  `CS703C` varchar(255) NOT NULL,
  `CS704B` varchar(255) NOT NULL,
  `CS705A` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `exam_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `8_cse`
--

CREATE TABLE `8_cse` (
  `CS801C` varchar(255) NOT NULL,
  `HU801B` varchar(255) NOT NULL,
  `CS802E` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `exam_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `8_cse`
--

INSERT INTO `8_cse` (`CS801C`, `HU801B`, `CS802E`, `student_id`, `exam_type`) VALUES
('', '96', '52', 'st_16162', 'semester');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` text NOT NULL,
  `username` varchar(266) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `password` varchar(266) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `username`, `mobile_number`, `password`) VALUES
('Shubham Saurav', 'admin123', '7076535948', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` varchar(255) NOT NULL,
  `teacher_id` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `department_id` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `teacher_id`, `course_name`, `department_id`, `semester`) VALUES
('HU101', 't_2345', 'English Language & Technical Communication', 'CSE', '1'),
('PH101', 't_4523', 'Physics-1', 'CSE', '1'),
('', '', '', '', ''),
('M101', 't_4659', 'MATHEMATICS-1', 'CSE', '1'),
('ME101', 't_3487', 'ENGINEERING MATHEMATICS', 'CSE', '1'),
('', '', '', '', ''),
('ES101', 't_6785', 'BASIC ELECTRICAL & ELECTRONIC ENGINEERING-1', 'CSE', '1'),
('', '', '', '', ''),
('CS201', 't_5792', 'BASIC COMPUTATION & PRINCIPLES OF COMPUTER PROGRAMMING', 'CSE', '2'),
('', '', '', '', ''),
('CH201', 't_6768', 'CHEMISTRY-1', 'CSE', '2'),
('', '', '', '', ''),
('M201', 't_5673', 'MATHEMATICS-2', 'CSE', '2'),
('', '', '', '', ''),
('ME201', 't_3859', 'ENGINEERING THERMODYNAMICS & FLUID MECHANICS', 'CSE', '2'),
('', '', '', '', ''),
('ES201', 't_8739', 'BASIC ELECTRICAL & ELECTRONIC ENGINEERING-2', 'CSE', '2'),
('', '', '', '', ''),
('HU301', 't_6371', 'VALUES & ETHICS IN PROFESSION', 'CSE', '3'),
('', '', '', '', ''),
('PH301', 't_4567', 'PHYSICS-2', 'CSE', '3'),
('', '', '', '', ''),
('CH301', 't_7689', 'BASIC ENVIRONMENTAL ENGINEERING & ELEMENTARY BIOLOGY', 'CSE', '3'),
('', '', '', '', ''),
('CS301', 't_7954', 'ANALOG & DIGITAL ELECTRONICS', 'CSE', '3'),
('', '', '', '', ''),
('CS302', 't_6784', 'DATA STRUCTURE & ALGORITHM', 'CSE', '3'),
('', '', '', '', ''),
('CS303', 't_8795', 'COMPUTER ORGANIZATION', 'CSE ', '3'),
('', '', '', '', ''),
('MCS401', 't_7829', 'NUMERICAL METHODS', 'CSE', '4'),
('', '', '', '', ''),
('', '', '', '', ''),
('CS401', 't_9203', 'COMMUNICATION ENGG & CODING THEORY', 'CSE ', '4'),
('', '', '', '', ''),
('CS402', 't_9843', 'FORMAL LANGUAGE & AUTOMATA THEORY', 'CSE', '4'),
('', '', '', '', ''),
('CS403', 't_9800', 'COMPUTER ARCHITECTURE', 'CSE', '4'),
('', '', '', '', ''),
('HU501', 't_6258', 'ECONOMICS FOR ENGINEERS', 'CSE', '5'),
('', '', '', '', ''),
('CS501', 't_8919', 'DESIGN & ANALYSIS OF ALGORITHM', 'CSE', '5'),
('', '', '', '', ''),
('CS502', 't_7192', 'MICOPROCESSOR & MICROCONTROLLERS', 'CSE', '5'),
('', '', '', '', ''),
('CS503', 't_9812', 'DISCRETE MATHEMATICS', 'CSE', '5'),
('', '', '', '', ''),
('HU601', 't_5478', 'PRINCIPLES OF MANAGEMENT', 'CSE', '6'),
('', '', '', '', ''),
('CS601', 't_2341', 'DATA BASE MANAGEMENT SYSTEM', 'CSE', '6'),
('', '', '', '', ''),
('CS602', 't_6579', 'COMPUTER NETWOTRKS', 'CSE', '6'),
('', '', '', '', ''),
('CS603', 't_4552', 'OPERATING SYSTEM', 'CSE', '6'),
('', '', '', '', ''),
('CS604B', 't_7889', 'COMPUTER GRAPHICS', 'CSE', '6'),
('', '', '', '', ''),
('CS605C', 't_7910', 'MULTIMEDIA TECHNOLOGY', 'CSE', '6'),
('', '', '', '', ''),
('', '', '', '', ''),
('CS702', 't_7872', 'COMPILER DESIGN', 'CSE', '7'),
('', '', '', '', ''),
('CS701', 't_1235', 'SOFTWARE ENGG', 'CSE', '7'),
('', '', '', '', ''),
('CS703C', 't_1397', 'ARTIFICIAL INTELLIGENCE', 'CSE', '7'),
('', '', '', '', ''),
('CS704B', 't_1479', 'CLOUD COMPUTING', 'CSE', '7'),
('', '', '', '', ''),
('CS705A', 't_2222', 'INTERNET TECHNOLOGY', 'CSE', '7'),
('', '', '', '', ''),
('HU801B', 't_2379', 'PROJECT MANAGEMENT', 'CSE', '8'),
('', '', '', '', ''),
('CS801C', 't_3345', 'NATURAL LANGUAGE PROCESSING', 'CSE', '8'),
('', '', '', '', ''),
('CS802E', 't_5554', 'E-COMMERCE(IT)', 'CSE', '8');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` varchar(255) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `department_hod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `department_hod`) VALUES
('CSE', 'Computer Science and Engineering', 'Mrs. Mohuya Chakraborty');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `sender_id` varchar(255) NOT NULL,
  `receiver_id` varchar(255) NOT NULL,
  `message_content` varchar(255) NOT NULL,
  `message_type` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`sender_id`, `receiver_id`, `message_content`, `message_type`, `status`) VALUES
('st_16162', 't_1569', 'gfjgjfgjg', 'evaluation', 0),
('st_16162', 't_1569', 'gfjgjfgjg', 'evaluation', 0),
('st_16162', 't_2379', 'hi there sir!', 'chat', 0),
('t_2379', 'st_14161', 'hey,your performance this time was not upto the mark....need to improve a lot!!!', 'chat', 0);

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `username` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`username`, `student_id`, `email_id`, `mobile_number`, `name`, `password`, `sex`) VALUES
('pt_14161', 'st_14161', 'sanjay@gmail.com', '9308895953', 'Sanjoy Kumar Gupta', 'sanjay101', 'M'),
('pt_15167', 'st_15167', 'Rajesh@gmail.com', '9837836388', 'Rajesh Gupta', 'Rajesh101', 'M'),
('pt_16162', 'st_16162', 'suresh@gmail.com', '9383939505', 'Suresh Gulati', 'suresh101', 'M'),
('pt_14159', 'st_14159', 'ram@gmail.com', '9389384820', 'Ram Shrivastav', 'ram101', 'M'),
('pt_15193', 'st_15193', 'sulochna@gmail.com', '9485829284', 'Sulochna Kumari', 'sulochna101', 'F'),
('pt_16194', 'st_16194', 'shiv@gmail.com', '9384828494', 'Shiv Joshi', 'shiv101', 'M'),
('pt_14121', 'st_14121', 'sayantan@gmail.com', '9039294040', 'Sayantan Santhalia', 'sayantan', 'M'),
('pt_15199', 'st_15199', 'asha@gmail.com', '9383902949', 'Asha Sah', 'asha101', 'F'),
('pt_16134', 'st_16134', 'vijay@gmail.com', '9282844920', 'Vijay Shankar', 'vijay101', 'M'),
('pt_14156', 'st_14156', 'amit@gmail.com', '8363673942', 'Amit Raj', 'amit101', 'M'),
('pt_15178', 'st_15178', 'priyanshi@gmail.com', '7339473901', 'Priyanshi Kumari', 'priyanshi101', 'F'),
('pt_16189', 'st_16189', 'nirav@gmail.com', '8274792942', 'Nirav Modi', 'nirav101', 'M'),
('pt_18120', 'st_18120', 'ankita@gmail.com', '7294929420', 'Ankita Thakur', 'ankita101', 'F'),
('pt_18130', 'st_18130', 'kishan@gmail.com', '7393948329', 'Kishan Kumar', 'kishan101', 'M'),
('pt_18140', 'st_18140', 'hari@gmail.com', '9373942839', 'Hari Shekhar', 'hari101', 'M'),
('pt_17192', 'st_17192', 'moumita@gmail.com', '9038393922', 'Moumita Bedi', 'moumita101', 'F'),
('pt_17183', 'st_17183', 'karun@gmail.com', '8374992728', 'Karun Nayar', 'karun101', 'M'),
('pt_17174', 'st_17174', 'rita@gmail.com', '8374892929', 'Rita Singh', 'rita101', 'F'),
('pt_14183', 'st_14183', 'shreyash@gmail.com', '9749282930', 'Shreyash Ghoshal', 'shreyash101', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `parents2`
--

CREATE TABLE `parents2` (
  `username` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents2`
--

INSERT INTO `parents2` (`username`, `student_id`, `email_id`, `mobile_number`, `name`, `password`) VALUES
('pt_14161', 'st_14161', 'sanjaykumargupta101@gmail.com', '9308895953', 'sanjoy kumar gupta', 'sanjay101'),
('pt_15167', 'st_15167', 'senoritadad@gmail.com', '9837836388', 'senoritadad', 'senoritadad101'),
('pt_16162', 'st_16162', 'maharajadad@gmail.com', '9383939503', 'maharajadad', 'maharajadad101'),
('pt_14159', 'st_14159', 'cpdad@gmail.com', '9389384820', 'cpdad', 'cpdad10'),
('pt_15193', 'st_15193', 'babudad@gmail.com', '9485829284', 'babudad', 'babudad101'),
('pt_16194', 'st_16194', 'gaandudad@gmail.com', '9384828494', 'gaandudad', 'gaandudad101'),
('pt_14121', 'st_14121', 'snehildad@gmail.com', '9039294040', 'snehildad', 'snehildad101'),
('pt_15199', 'st_15199', 'sahdad@gmail.com', '9383902949', 'sahdad', 'sahdad101'),
('pt_16134', 'st_16134', 'choturnddad@gmail.com', '9282844920', 'choturnddad', 'choturnddad101'),
('pt_14156', 'st_14156', 'goludolu@gmail.com', '8363673942', 'goludolu', 'goludoludad101'),
('pt_15178', 'st_15178', 'dehribcdad@gmail.com', '7339473901', 'dehribcdad', 'dehribcdad101'),
('pt_16189', 'st_16189', 'modijhunjhundad@gmail.com', '8274792942', 'modijhunjhundad', 'modijhunjhundad101'),
('pt_18120', 'st_18120', 'partyrnddad@gmail.com', '7294929420', 'partyrnddad', 'partyrnddad101'),
('pt_18130', 'st_18130', 'sugandudad@gmail.com', '7393948329', 'sugandudad', 'sugandudad101'),
('pt_18140', 'st_18140', 'labourdad@gmail.com', '9373942839', 'labourdad', 'labourdad101'),
('pt_17192', 'st_17192', 'wongdongdad@gmail.com', '9038393922', 'wongdongdad', 'wongdongdad101'),
('pt_17183', 'st_17183', 'sambhucpdad@gmail.com', '8374992728', 'sambhucpdad', 'sambhucpdad101'),
('pt_17174', 'st_17174', 'somalopadad@gmail.com', '8374892929', 'somalopadad', 'somalopadad101'),
('pt_14183', 'st_14183', 'iemchutiyadad@gmail.com', '9749282930', 'iemchutiyadad', 'iemchutiyadad101');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `username` varchar(255) NOT NULL,
  `enroll_id` varchar(255) NOT NULL,
  `univ_roll` varchar(255) NOT NULL,
  `reg_id` varchar(255) NOT NULL,
  `class_roll` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parents_id` varchar(255) NOT NULL,
  `semester` int(255) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `address` varchar(1024) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `year_of_admission` varchar(255) NOT NULL,
  `attendance` varchar(10) NOT NULL,
  `sex` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`username`, `enroll_id`, `univ_roll`, `reg_id`, `class_roll`, `name`, `parents_id`, `semester`, `stream`, `section`, `email_id`, `mobile_number`, `date_of_birth`, `year`, `address`, `password`, `picture`, `year_of_admission`, `attendance`, `sex`) VALUES
('st_14161', '12014002002115', '10400114160', '1410011451', '161', 'Shubham Kumar', 'pt_14161', 8, 'cse', 'c', 'shubhamkg101@gmail.com', '9748431948', '30/03/1996', '4', 'Kumar Colony,New Godown,Gaya', 'shubham101', '1.jpg', '2014', '', 'M'),
('st_15167', '12014002002116', '10400114161', '1416378279', '167', 'Asha Gupta', 'pt_15167', 8, 'cse', 'c', 'ashagupta@gmail.com', '9508373962', '29/02/1994', '4', 'Kestopur,Kolkata', 'asha101', '2.jpg', '2015', '', 'F'),
('st_16162', '12014002002117', '10400114162', '1417393782', '162', 'Daya Gulati', 'pt_16162', 8, 'cse', 'c', 'daya101@gmail.com', '7076535948', '28/06/1992', '4', 'Keshtopur,Kolkata', 'daya101', '3.jpg', '2016', '', 'M'),
('st_14159', '12014002002118', '10400114163', '1412939374', '159', 'Ashutosh Shrivastav', 'pt_14159', 8, 'it', 'b', 'ashutosh@gmail.com', '9846374828', '31/08/1993', '4', 'Barrackpore,Kolkata', 'ashutosh101', '4.jpg', '2014', '', 'M'),
('st_15193', '12014002002119', '10400114164', '1418373949', '193', 'Siddhartha kumar', 'pt_15193', 8, 'ece', 'a', 'siddhartha@gmail.com', '7384938593', '23/11/1998', '4', 'Kestopur,Kolkata', 'siddhartha101', '5.jpg', '2015', '', 'M'),
('st_16194', '12014002002120', '10400114165', '1413839374', '194', 'Kannagi Joshi', 'pt_16194', 8, 'ee', 'a', 'kannagi@gmail.com', '8373938493', '14/04/1994', '4', 'Kavi Subhash,Kolkata', 'kannagi101', '6.jpg', '2016', '', 'F'),
('st_14121', '12014002002121', '10400114166', '1419383842', '121', 'Snehil Santhalia', 'pt_14121', 8, 'me', 'a', 'snehil@gmail.com', '8374838493', '13/06/2004', '4', 'Howrah,Kolkata', 'snehil101', '7.jpg', '2014', '', 'M'),
('st_15199', '12014002002122', '10400114167', '1419383939', '199', 'Subham Sah', 'pt_15199', 8, 'cse', 'b', 'sah@gmail.com', '9384929494', '19/05/2003', '4', 'Howrah,Kolkata', 'sah101', '8.jpg', '2015', '', 'M'),
('st_16134', '12014002002123', '10400114168', '1419384829', '134', 'Shubham Saurav', 'pt_16134', 8, 'it', 'c', 'shubham123@gmail.com', '7394929493', '21/02/1996', '4', 'Boring Road,Patna', 'shubham101', '9.jpg', '2016', '', 'M'),
('st_14156', '12014002002124', '10400114169', '1419383849', '156', 'Saurav Kumar', 'pt_14156', 8, 'it', 'b', 'saurav@gmail.com', '9304038389', '31/08/1999', '4', 'Circuit Road,ranchi', 'saurav101', '10.jpg', '2014', '', 'M'),
('st_15178', '12014002002125', '10400114170', '1419385838', '178', 'Shivam', 'pt_15178', 8, 'it', 'c', 'shivam@gmail.com', '9382284833', '14/08/1994', '4', 'Kestopur,Kolkata', 'shivam101', '11.jpg', '2015', '', 'M'),
('st_16189', '12014002002126', '10400114171', '1413839499', '189', 'Suraj Modi', 'pt_16189', 8, 'ece', 'a', 'suraj@gmail.com', '7383884829', '14/05/1995', '4', 'Kavi Nazrul,Kolkata', 'suraj101', '12.jpg', '2016', '', 'M'),
('st_18120', '12014002002127', '10400114172', '1412393939', '120', 'Priyanshi Thakur', 'pt_18120', 4, 'ece', 'b', 'priyanshi@gmail.com', '8384938493', '13/04/1993', '2', 'Rabindra Sarobar,Kolkata', 'priyanshi101', '13.jpg', '2018', '', 'F'),
('st_18130', '12014002002128', '10400114173', '1412394959', '130', 'Sudhansu', 'pt_18130', 3, 'ece', 'a', 'sudhansu@gmail.com', '8484939495', '13/05/1993', '2', 'Kalighat,Kolkata', 'sudhansu101', '14.jpg', '2018', '', 'M'),
('st_18140', '12014002002129', '10400114174', '1419390399', '140', 'Shashank Shekhar', 'pt_18140', 5, 'me', 'c', 'shashank@gmail.com', '9383939595', '13/03/1993', '3', 'Kestopur,Kolkata', 'shashank101', '15.jpg', '2018', '', 'M'),
('st_17192', '12014002002130', '10400114175', '1412993999', '192', 'Kiran Bedi', 'pt_17192', 3, 'ee', 'b', 'kiran@gmail.com', '9839485933', '19/05/2001', '2', 'Kalighat,Kolkata', 'kiran101', '16.jpg', '2017', '', 'F'),
('st_17183', '12014002002131', '10400114176', '1413993999', '183', 'Harsh Nayar', 'pt_17183', 5, 'ee', 'b', 'harsh@gmail.com', '7394929495', '20/03/1984', '3', 'Kestopur,Kolkata', 'harsh101', '17.jpg', '2017', '', 'M'),
('st_17174', '12014002002132', '10400114177', '1419390093', '174', 'Shalini Singh', 'pt_17174', 3, 'ee', 'a', 'shalini@gmail.com', '9848374935', '13/03/2001', '2', 'Barrackpore,Kolkata', 'shalini', '18.jpg', '2017', '', 'F'),
('st_14183', '12014002002133', '10400114178', '1418383892', '183', 'Uma Ghoshal', 'pt_14183', 4, 'civil', 'c', 'uma@gmail.com', '7393959359', '15/12/2001', '2', 'Rabindra Sadan,Kolkata', 'uma101', '19.jpg', '2014', '', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `student2`
--

CREATE TABLE `student2` (
  `username` varchar(255) NOT NULL,
  `enroll_id` varchar(255) NOT NULL,
  `univ_roll` varchar(255) NOT NULL,
  `reg_id` varchar(255) NOT NULL,
  `class_roll` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parents_id` varchar(255) NOT NULL,
  `semester` int(255) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `address` varchar(1024) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `year_of_admission` varchar(255) NOT NULL,
  `attendance` int(20) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`username`, `name`, `password`, `mobile_number`, `email_id`) VALUES
('t_2345', 'sangmitra poddar', 'poddar101', '9867567483', 'sangmitrapoddar@gmail.com'),
('t_4523', 'rabndra narayan', 'rabindra101', '9876456789', 'rabindra101@gmail.com'),
('t_4659', 'airoghosh', 'airoghosh101', '9846758987', 'airoghosh@gmail.com'),
('t_3487', 'sandeep maheshwari', 'sandeep101', '9886985647', 'sandeep@gmail.com'),
('t_6785', 'randhir singh', 'randhir101', '9876896940', 'randhir@gmail.com'),
('t_5792', 'deepika malhotra', 'deepika101', '9878657867', 'deepika@gmail.com'),
('t_6768', 'shubham malya', 'shubham101', '9878675897', 'shubham@gmail.com'),
('t_5673', 'shivam kalwal', 'shivam101', '9867849939', 'shivam@gmail.com'),
('t_3859', 'saurabh khandelwal', 'saurabh101', '9878678599', 'saurabh@gmail.com'),
('t_8739', 'shashank gupta', 'shashank101', '9857678975', 'shashank@gmail.com'),
('t_6371', 'amit raj', 'amit101', '9768576478', 'amitraj@gmail.com'),
('t_4567', 'sonu satyam', 'satyam101', '9867489989', 'satyam@gmail.com'),
('t_6579', 'tithi chatterjee', 'tithi101', '9869786547', 'tithi@gmail.com'),
('t_7689', 'sukanya mukherjee', 'sukanya101', '9857897856', 'sukanya@gmail.com'),
('t_7954', 'sayantan rey', 'sayantan101', '9879564738', 'sayantan@gmail.com'),
('t_6784', 'deonagri das', 'deonagri101', '987657849', 'deonagri@gmail.com'),
('t_8795', 'minto prasad', 'minto101', '9886123456', 'minto@gmail.com'),
('t_7829', 'nilonjana dutta ray', 'nilonjana101', '9849786778', 'nilonjana@gmail.com'),
('t_4552', 'sangmitra goswami', 'goswami101', '9873876746', 'goswami@gmail.com'),
('t_9203', 'ruhi malik', 'ruhi101', '9848987876', 'ruhi@gmail.com'),
('t_9843', 'praveen kaushal', 'praveen101', '9867895647', 'praveen@gmail.com'),
('t_9800', 'subham sah', 'subham101', '9809898976', 'subham@gmail.com'),
('t_6258', 'sudhanshu dhoni', 'sudhanshu101', '9878678578', 'sudhanshu@gmail.com'),
('t_8919', 'mallika arora', 'mallika101', '9876545674', 'mallika@gmail.com'),
('t_7192', 'jugnu gupta', 'jugnu101', '9876787654', 'jugnu@gmail.com'),
('t_9812', 'dharmesh singh', 'dharmesh101', '9890878987', 'dharmesh@gmail.com'),
('t_7889', 'sukanto das', 'sukanto101', '9800125378', 'sukanto@gmail.com'),
('t_7910', 'suhidra chadda', 'suhidra101', '9087678900', 'suhidra@gmail.com'),
('t_7872', 'ajay devgan', 'ajay101', '9878765646', 'ajay@gmail.com'),
('t_5478', 'neha jain', 'neha101', '9876767900', 'neha@gmail.com'),
('t_2341', 'vandana singh', 'vandana101', '9089876565', 'vandana@gmail.com'),
('t_1235', 'surveen chawala', 'surveen101', '9890987678', 'surveen@gmail.com'),
('t_1397', 'gaurav chatopadhay', 'gaurav101', '9876785132', 'gaurav@gmail.com'),
('t_1479', 'sanjana kumari', 'sanjana101', '9090878090', 'sanjana@gmail.com'),
('t_2222', 'rohit mukund', 'rohit101', '9098765901', 'rohit@gmail.com'),
('t_2379', 'makopadhya gupta', 'maku101', '8904567892', 'maku@gmail.com'),
('t_3345', 'shalini kumari', 'shalini101', '8765678012', 'shalini@gmail.com'),
('t_5554', 'daso das', 'daso101', '8761212346', 'daso@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_evaluation`
--

CREATE TABLE `teacher_evaluation` (
  `teacher_id` varchar(255) NOT NULL,
  `no_of_students` int(11) NOT NULL,
  `eval_1` int(11) NOT NULL,
  `eval_2` int(11) NOT NULL,
  `eval_3` int(11) NOT NULL,
  `eval_4` int(11) NOT NULL,
  `eval_5` int(11) NOT NULL,
  `eval_6` int(11) NOT NULL,
  `eval_7` int(11) NOT NULL,
  `eval_8` int(11) NOT NULL,
  `eval_9` int(11) NOT NULL,
  `eval_10` int(11) NOT NULL,
  `eval_11` int(11) NOT NULL,
  `eval_12` int(11) NOT NULL,
  `eval_13` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_evaluation`
--

INSERT INTO `teacher_evaluation` (`teacher_id`, `no_of_students`, `eval_1`, `eval_2`, `eval_3`, `eval_4`, `eval_5`, `eval_6`, `eval_7`, `eval_8`, `eval_9`, `eval_10`, `eval_11`, `eval_12`, `eval_13`) VALUES
('t_2345', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_4523', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_4659', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_3487', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_6785', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_5792', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_6768', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_5673', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_3859', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_8739', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_6371', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_4567', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_6579', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_7689', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_7954', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_6784', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_8795', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_7829', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_4552', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_9203', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_9843', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_9800', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_6258', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_8919', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_7192', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_9812', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_7889', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_7910', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_5478', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_2341', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_1235', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_1397', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_1479', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_2222', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_2379', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_3345', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_5554', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_7872', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
