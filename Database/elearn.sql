-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2023 at 07:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearn`
--

-- --------------------------------------------------------

--
-- Table structure for table `com`
--

CREATE TABLE `com` (
  `Ch_ID` int(11) NOT NULL,
  `Roll` varchar(50) DEFAULT NULL,
  `Review` varchar(50) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `C_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `com`
--

INSERT INTO `com` (`Ch_ID`, `Roll`, `Review`, `Name`, `C_ID`) VALUES
(25, 'Teacher', 'I am the hero', 'Code', 8),
(26, 'Teacher', 'nothing comming fast', 'Code', 8),
(27, 'Student', 'Sir,Can you solve 10.1 math?', 'Orbin', 29),
(28, 'Teacher', 'Yeah sure, I wll provide you a short video', 'Code', 29),
(29, 'Student', 'Thanks,Sir', 'Orbin', 29),
(30, 'Student', 'Sir,I have doubt', 'Orbin', 21),
(31, 'Teacher', 'Welcome to my course students', 'Code', 32),
(32, 'Student', 'Hi sir', 'Orbin', 32);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `C_ID` int(11) NOT NULL,
  `C_Name` varchar(255) NOT NULL,
  `C_Des` varchar(255) NOT NULL,
  `C_Author` int(11) NOT NULL DEFAULT 0,
  `C_OPrice` varchar(255) NOT NULL,
  `C_SPrice` varchar(255) NOT NULL,
  `C_image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`C_ID`, `C_Name`, `C_Des`, `C_Author`, `C_OPrice`, `C_SPrice`, `C_image`) VALUES
(8, 'Python Crack Course', 'Python is an interpreted high-level general-purpose programming language. Its design philosophy emphasizes code readability with its use of significant indentation. ', 10, '5000  BDT', '2000 BDT', 'python.png'),
(21, 'DSD Course', ' For Expert', 17, '1000 BDT', '500 BDT', 'dsd.png'),
(29, 'Java Course', ' For beginner', 10, '5000 BDT', '1000 BDT', 'Java.jpg'),
(30, 'Segment Tree', ' Life less', 17, '1000 ', '100', 'download.png'),
(31, 'Binary Search', ' sdsdff', 10, '1000 ', '123', 'cplus.jpg'),
(32, 'Data Structure and algorithms', ' Learn about Arrays, Linked Lists, Trees, Hashtables, Stacks, Queues, Heaps, & Algorithms. Join millions of learners from around the world already learning on CurioMind.', 10, '1000 ', '400', '1_bhnjFh3ZeWNlAtg1unulTw.png'),
(33, 'Numerical COurse', ' Learn about Arrays, Linked Lists, Trees, Hashtables, Stacks, Queues, Heaps, & Algorithms. Join millions of learners from around the world already learning on CurioMind.', 17, '1000 ', '100', '323980982_487795766860480_6034175463510201736_n.png');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `F_ID` int(11) NOT NULL,
  `S_Name` varchar(255) DEFAULT NULL,
  `S_ID` int(11) NOT NULL DEFAULT 0,
  `S_Email` varchar(50) DEFAULT NULL,
  `Subject` varchar(50) DEFAULT NULL,
  `S_Type` varchar(255) NOT NULL DEFAULT '0',
  `F_Des` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`F_ID`, `S_Name`, `S_ID`, `S_Email`, `Subject`, `S_Type`, `F_Des`) VALUES
(2, 'Fahmidur', 1, '190104035@aust.edu', 'Need Suggestion', 'Student', 'I have done 11 premium courses and 9 free courses from Bahubrihi till now. Every day I check Bahubrihi\'s website and Facebook page to see if any new courses have been'),
(3, 'Rijeet Bin', 1, '190104035@aust.edu', 'Course', 'Student', 'This Platform is good . Thank You'),
(4, 'Jamil', 13, '190104083@aust.edu', 'Course', 'dfdfdf', 'I have done 11 premium courses and 9 free courses from Bahubrihi till now. Every day I check Bahubrihi\'s website and Facebook page to see if any new courses have been'),
(5, 'Azamin', 0, NULL, NULL, 'Student', 'I have done 11 premium courses and 9 free courses from Bahubrihi till now. Every day I check Bahubrihi\'s website and Facebook page to see if any new courses have been'),
(8, 'oindrila  Saha', 20, '190104100@aust.edu', 'Course', 'Student', 'Course Nice'),
(9, 'Tashfia   Hossain', 16, '190104078@aust.edu', '', '', 'Good Platform'),
(10, 'Orbin  roll', 1, '190104068@aust.edu', '', '', 'Nice platform');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `L_ID` int(11) NOT NULL,
  `Lesson_Name` varchar(50) NOT NULL DEFAULT '0',
  `Lecture_Video` varchar(255) NOT NULL DEFAULT '0',
  `C_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`L_ID`, `Lesson_Name`, `Lecture_Video`, `C_ID`) VALUES
(6, 'fg', 'fg', 8),
(7, 'System Design', 'T04zRoLdGe4', 21),
(8, 'Build the table', 'P_IIz5P1FhQ', 21),
(10, 'Build the table1', '-e_sTl7df0w', 21);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `P_ID` int(11) NOT NULL,
  `C_ID` int(11) DEFAULT 0,
  `S_ID` int(11) DEFAULT 0,
  `Date` varchar(255) NOT NULL DEFAULT '0',
  `Amount` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`P_ID`, `C_ID`, `S_ID`, `Date`, `Amount`) VALUES
(18, 21, 20, '2022/03/02', '600'),
(19, 8, 20, '2022/03/02', '3000'),
(20, 8, 21, '2022/03/02', '3000'),
(21, 21, 1, '2022/04/26', '600'),
(22, 8, 13, '2022/06/05', '3000'),
(23, 21, 13, '2022/06/05', '600'),
(24, 29, 16, '2022/08/19', '3000'),
(25, 21, 16, '2022/08/19', '600'),
(26, 31, 1, '2022/09/02', '600'),
(27, 31, 13, '2022/09/02', '600'),
(28, 29, 1, '2022/09/03', '3000'),
(29, 30, 1, '2022/09/03', '600'),
(30, 32, 1, '2022/09/03', '600'),
(31, 33, 1, '2023/01/22', '600');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `S_ID` int(11) NOT NULL,
  `S_FName` varchar(255) NOT NULL DEFAULT '',
  `S_LName` varchar(255) NOT NULL DEFAULT '',
  `S_Email` varchar(255) NOT NULL DEFAULT '',
  `S_Pass` varchar(255) NOT NULL DEFAULT '',
  `S_Mobile` varchar(255) NOT NULL DEFAULT 'Not set yet',
  `S_Tenroll` varchar(255) NOT NULL DEFAULT '0',
  `T_Cost` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`S_ID`, `S_FName`, `S_LName`, `S_Email`, `S_Pass`, `S_Mobile`, `S_Tenroll`, `T_Cost`) VALUES
(1, 'Orbin', 'roll', '190104068@aust.edu', '1234', 'Not set yet', '0', '0'),
(5, 'Sakib', 'Hasan', '190104074@aust.edu', '1234', 'Not set yet', '0', '0'),
(13, 'Avishek', 'Das', '190104083@aust.edu', '1234', 'Not set yet', '0', '0'),
(14, 'Avishek', 'Hasan', '190104085@aust.edu', '12354', 'Not set yet', '0', '0'),
(16, 'Tashfia ', 'Hossain', '190104078@aust.edu', '1234', 'Not set yet', '0', '0'),
(19, 'Fahmidur', 'Orpon', '190104072@aust.edu', '1234', 'Not set yet', '0', '0'),
(20, 'oindrila', 'Saha', '190104100@aust.edu', '1234', 'Not set yet', '0', '0'),
(21, 'Arittra', 'Das', 'abikom1234@gmail.com', '1234', 'Not set yet', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `student_feedback`
--

CREATE TABLE `student_feedback` (
  `F_id` int(11) NOT NULL,
  `T_ID` int(11) DEFAULT NULL,
  `S_ID` int(11) DEFAULT NULL,
  `Feed` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_feedback`
--

INSERT INTO `student_feedback` (`F_id`, `T_ID`, `S_ID`, `Feed`) VALUES
(1, 10, 1, 'df'),
(2, 10, 1, 'sdsd'),
(3, 17, 1, 'You are the best'),
(4, 10, 1, 'Nice life'),
(5, 10, 13, 'sffdf'),
(6, 10, 1, 'nice course'),
(7, 10, 1, 'Ok sir'),
(8, 17, 1, 'Sir,I have doubt'),
(9, 10, 1, 'Hi sir');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `T_ID` int(11) NOT NULL,
  `T_FName` varchar(50) NOT NULL DEFAULT '0',
  `T_LName` varchar(50) NOT NULL DEFAULT '0',
  `T_Pass` varchar(50) NOT NULL DEFAULT '0',
  `T_Name` varchar(255) NOT NULL DEFAULT '0',
  `T_Des` varchar(255) NOT NULL DEFAULT '0',
  `T_Mail` varchar(255) DEFAULT NULL,
  `T_Type` varchar(255) DEFAULT NULL,
  `T_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`T_ID`, `T_FName`, `T_LName`, `T_Pass`, `T_Name`, `T_Des`, `T_Mail`, `T_Type`, `T_image`) VALUES
(10, 'Code', 'Harry', '1234', 'Code With Harry', ' Code with Harry is also a programmer, web developer teacher, and creator of YouTube Pay videos ', '190104083@aust.edu', 'Computer Science', 'Codewithharry.jpg'),
(11, '0', '0', '1234', 'Anisul Islam ', ' Anisul Islam is also a programmer, web developer teacher, and creator of YouTube Pay videos and the best part is that Code with Harry hails from Rampur, Uttar Pradesh, India', 'Anisul.com', 'Computer Science', 'anisulIslam.jpg'),
(14, '0', '0', '1234', 'Jhonkar', ' Jhonkar  is also a programmer, web developer teacher, and creator of YouTube Pay videos and the best part is that Code with Harry hails from Rampur, Uttar Pradesh, India', 'Jhonkar.com', 'Computer Science', 'rsz_2img_2842_0.jpg'),
(15, '0', '0', '1234', 'Thapa  Technical', ' Thapa  Technical is also a programmer, web developer teacher, and creator of YouTube Pay videos and the best part is that Code with Harry hails from Rampur, Uttar Pradesh, India', 'Thapa.com', 'Computer Science', 'rsz_maxresdefault.jpg'),
(16, '0', '0', '1234', 'Fahmidur Rahman Orpon Virus', ' Intra Aust Position 3rd', '190104072@aust.edu', 'CP programmer', 'rsz_11orpon.jpg'),
(17, 'Rabya Islam', 'Momo', '1234', 'Mohosin Asraf', ' Aust Lecturer', '190104076@aust.edu', 'Computer Science', 'tashfia.jpg'),
(18, '0', '0', '1234', 'Oinrila Saha', ' Aust Lecturer', '19010100@aust.edu', 'Computer Science', 'rsz_1oindrila.jpg'),
(20, '0', '0', '0', 'Instructor A', ' Web Developer', 'CodeWithHarry.com', 'Computer Science', 'instructor.jpg'),
(21, 'Broti ', 'Miss', '1234', '0', '0', '190104077@aust.edu', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `com`
--
ALTER TABLE `com`
  ADD PRIMARY KEY (`Ch_ID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`L_ID`),
  ADD KEY `FK_lesson_course` (`C_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`P_ID`),
  ADD KEY `FK__course` (`C_ID`),
  ADD KEY `FK__student` (`S_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`S_ID`),
  ADD UNIQUE KEY `S_Email` (`S_Email`);

--
-- Indexes for table `student_feedback`
--
ALTER TABLE `student_feedback`
  ADD PRIMARY KEY (`F_id`),
  ADD KEY `FK_student_feedback_student` (`S_ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`T_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `com`
--
ALTER TABLE `com`
  MODIFY `Ch_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `F_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `L_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `S_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `student_feedback`
--
ALTER TABLE `student_feedback`
  MODIFY `F_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `T_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lesson`
--
ALTER TABLE `lesson`
  ADD CONSTRAINT `FK_lesson_course` FOREIGN KEY (`C_ID`) REFERENCES `course` (`C_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `FK__course` FOREIGN KEY (`C_ID`) REFERENCES `course` (`C_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__student` FOREIGN KEY (`S_ID`) REFERENCES `student` (`S_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `student_feedback`
--
ALTER TABLE `student_feedback`
  ADD CONSTRAINT `FK_student_feedback_student` FOREIGN KEY (`S_ID`) REFERENCES `student` (`S_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
