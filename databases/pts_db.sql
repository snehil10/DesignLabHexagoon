-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2018 at 02:40 PM
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
-- Table structure for table `8_cse`
--

CREATE TABLE `8_cse` (
  `CS531` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `exam_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `8_cse`
--

INSERT INTO `8_cse` (`CS531`, `student_id`, `exam_type`) VALUES
('42', 'st_16162', ''),
('98', 'st_16162', 'Semester');

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
('CS531', 't_1948', 'Computer Networks', 'CSE', '8'),
('CS670', 't_1343', 'Computer Architecture', 'cse', '8'),
('CS999', 't_1569', 'Operating Systems', 'cse', '8');

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
('st_16162', 't_1569', 'gfjgjfgjg', 'evaluation', 1),
('st_16162', 't_1569', 'gfjgjfgjg', 'evaluation', 1),
('st_16162', 't_1948', 'le lo', 'chat', 0),
('t_1948', 'st_16162', 'de do', 'chat', 0),
('st_16162', 't_5698', 'nai denge', 'chat', 0),
('st_16162', 't_1948', 'hgffjgf', '', 0),
('st_16162', 't_1948', 'hgffjgf', 'chat', 0),
('st_16162', 't_1948', 'sdgdg', 'chat', 0),
('', '', '', '', 0),
('st_16162', 't_1948', 'klj', 'evaluation', 1),
('st_16162', 't_1948', 'klopjp', 'chat', 0),
('st_16162', 't_1569', 're rabndiii', 'chat', 0),
('st_16162', 't_1569', 'radskfdlkf', 'chat', 0),
('st_15167', 't_1948', 'dgdsgsdg', 'chat', 0),
('t_1948', 'st_15199', 'le le', 'chat', 0),
('t_1948', 'st_17192', 'gdgsdg', 'evaluaion', 0),
('t_1948', '', 're', 'chat', 0),
('t_1948', '', 'hum', 'chat', 0),
('t_1948', 'st_15199', 'de de', 'chat', 0),
('t_1948', 'st_15199', 'frf', 'chat', 0),
('t_1948', 'st_15167', 're', 'chat', 0),
('t_1948', 'st_15167', 'bcya', 'chat', 0),
('t_1948', 'st_15199', 'hjklvfdv', 'chat', 0),
('t_1948', 'st_16162', 'hellow', 'chat', 0),
('st_16162', 't_1948', 're re theek se padhaao', 'evaluation', 1),
('st_16162', 't_1948', 'good job', 'evaluation', 1),
('pt_16162', 't_1948', 'hellow mam!', 'chat', 0),
('st_16162', 't_1948', 'how are you?', 'chat', 0);

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
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`username`, `student_id`, `email_id`, `mobile_number`, `name`, `password`) VALUES
('pt_14161', 'st_14161', 'sanjaykumargupta101@gmail.com', '9308895953', 'sanjoy kumar gupta', 'sanjay101'),
('pt_15167', 'st_15167', 'senoritadad@gmail.com', '9837836388', 'senoritadad', 'senoritadad101'),
('pt_16162', 'st_16162', 'maharajadad@gmail.com', '9383939505', 'maharajadad', 'maharajadad101'),
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
  `attendance` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`username`, `enroll_id`, `univ_roll`, `reg_id`, `class_roll`, `name`, `parents_id`, `semester`, `stream`, `section`, `email_id`, `mobile_number`, `date_of_birth`, `year`, `address`, `password`, `picture`, `year_of_admission`, `attendance`) VALUES
('st_14161', '12014002002115', '10400114160', '1410011451', '161', 'Shubham Kumar', 'pt_14161', 8, 'cse', 'c', 'shubhamkg101@gmail.com', '9748431948', '30/03/1996', 'none', 'Kumar colony,new godown,gaya', 'shubham101', '1.jpg', '2014', ''),
('st_15167', '12014002002116', '10400114161', '1416378279', '167', 'senorita chaurasiya', 'pt_15167', 8, 'cse', 'c', 'senorita@gmail.com', '9508373962', '29/02/1994', 'none', 'rangrezpur,nawada', 'senorita101', '2.jpg', '2015', ''),
('st_16162', '12014002002117', '10400114162', '1417393782', '162', 'Maharaja asaram', 'pt_16162', 8, 'cse', 'c', 'maharaja@gmail.com', '9374837483', '28/06/1992', 'none', 'Kolkata,West Bengal', 'maharaja101', '3.jpg', '2016', ''),
('st_14159', '12014002002118', '10400114163', '1412939374', '159', 'gordan ramsay', 'pt_14159', 8, 'it', 'b', 'cp@gmail.com', '9846374828', '31/08/1993', 'none', 'nagmatia road,zilarozana', 'cp101', '4.jpg', '2014', ''),
('st_15193', '12014002002119', '10400114164', '1418373949', '193', 'Siddhartha kumar', 'pt_15193', 8, 'ece', 'a', 'babu@gmail.com', '7384938593', '23/11/1998', 'none', 'legakare,randii', 'babu101', '5.jpg', '2015', ''),
('st_16194', '12014002002120', '10400114165', '1413839374', '194', 'tum kumar', 'pt_16194', 8, 'ee', 'a', 'gaandu@gmail.com', '8373938493', '14/04/1994', 'none', 'dolukagolu,iem', 'gaandu101', '6.jpg', '2016', ''),
('st_14121', '12014002002121', '10400114166', '1419383842', '121', 'snehil Santhalia', 'pt_14121', 8, 'me', 'a', 'snehil@gmail.com', '8374838493', '13/06/2004', 'none', 'rnd,Virginia', 'snehil101', '7.jpg', '2014', ''),
('st_15199', '12014002002122', '10400114167', '1419383939', '199', 'subham sah', 'pt_15199', 8, 'cse', 'b', 'sah@gmail.com', '9384929494', '19/05/2003', 'none', 'paharpur,aurangabaad', 'sah101', '8.jpg', '2015', ''),
('st_16134', '12014002002123', '10400114168', '1419384829', '134', 'Shubham Saurav', 'pt_16134', 8, 'it', 'c', 'choturd@gmail.com', '7394929493', '21/02/1996', 'none', 'boring road,patna', 'choturd101', '9.jpg', '2016', ''),
('st_14156', '12014002002124', '10400114169', '1419383849', '156', 'Saurav kumar', 'pt_14156', 8, 'it', 'b', 'goludolu@gmail.com', '9304038389', '31/08/1999', 'none', 'circuit road,ranchi', 'goludolu101', '10.jpg', '2014', ''),
('st_15178', '12014002002125', '10400114170', '1419385838', '178', 'Shivam', 'pt_15178', 8, 'it', 'c', 'dehribc@gmail.com', '9382284833', '14/08/1994', 'none', 'Nala road, kestopur', 'dehribc101', '11.jpg', '2015', ''),
('st_16189', '12014002002126', '10400114171', '1413839499', '189', 'Suraj modi', 'pt_16189', 8, 'ece', 'a', 'modijhunjhun@gmail.com', '7383884829', '14/05/1995', 'none', 'diamond road,modi house', 'modijhunjhun101', '12.jpg', '2016', ''),
('st_18120', '12014002002127', '10400114172', '1412393939', '120', 'partyrnd', 'pt_18120', 4, 'ece', 'b', 'partychod@gmail.com', '8384938493', '13/04/1993', 'none', 'kingfisher road,mallaya nagar', 'partyrnd101', '13.jpg', '2018', ''),
('st_18130', '12014002002128', '10400114173', '1412394959', '130', 'sudhansu', 'pt_18130', 3, 'ece', 'a', 'sugandu@gmail.com', '8484939495', '13/05/1993', 'none', 'nirav modi,london', 'sugandu101', '14.jpg', '2018', ''),
('st_18140', '12014002002129', '10400114174', '1419390399', '140', 'Shashank', 'pt_18140', 5, 'me', 'c', 'labour@gmail.com', '9383939595', '13/03/1993', 'none', 'sonagachi, Kolkata', 'labour101', '15.jpg', '2018', ''),
('st_17192', '12014002002130', '10400114175', '1412993999', '192', 'ee Kian wong', 'pt_17192', 3, 'ee', 'b', 'wongdong@gmail.com', '9839485933', '19/05/2001', 'none', 'Iem, college more', 'wongdong101', '16.jpg', '2017', ''),
('st_17183', '12014002002131', '10400114176', '1413993999', '183', 'sambhucp', 'pt_17183', 5, 'ee', 'b', 'sambhucp@gmail.com', '7394929495', '20/03/1984', 'none', 'howrah', 'sambhucp101', '17.jpg', '2017', ''),
('st_17174', '12014002002132', '10400114177', '1419390093', '174', 'soma das', 'pt_17174', 3, 'ee', 'a', 'somalopa@gmail.com', '9848374935', '13/03/2001', 'none', 'sealdah', 'somalopa101', '18.jpg', '2017', ''),
('st_14183', '12014002002133', '10400114178', '1418383892', '183', 'uem-iem', 'pt_14183', 4, 'civil', 'c', 'iemchutiya@gmail.com', '7393959359', '15/12/2001', 'none', 'barrackpore', 'iemchutiya101', '19.jpg', '2014', '');

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
('t_1948', 'Ee Kian Wong', 'wong321', '7894561205', 'wong@gmail.com'),
('t_1569', 'Rupali Ghosh', 'rupali123', '7894561230', 'ruplai@gmail.com');

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
('t_7872', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_1569', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('t_1948', 1, 5, 4, 5, 4, 4, 5, 4, 1, 3, 2, 4, 2, 3);

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
