-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2023 at 06:24 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myislamiah`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(100) NOT NULL,
  `title` text NOT NULL,
  `date` varchar(30) NOT NULL,
  `description` longtext NOT NULL,
  `information` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `title`, `date`, `description`, `information`) VALUES
(5, 'Participation in Symposium', '23-09-2022', 'The Following Students participated and won prizes in SPACE 2022 Symposium', '40 Members Participated'),
(6, 'District Level Athletics Championship', '02-10-2022', 'Mr.Ajmal B of II BCA B Section won First Prize in 100m Dash and Second Prize in Long Jump in Tirupattur District Junior Athletic Championship 2022', 'Conducted by Tirupattur District Athletics Association');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `pdf` varchar(100) NOT NULL,
  `year` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `group` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `title`, `pdf`, `year`, `department`, `group`) VALUES
(6, 'Attendance', 'B.Sc., Software Comp Sc.pdf', 'I year', 'Computer Science', 'Computer Science'),
(7, 'Attendence', 'B.Sc., Computer Science.pdf', 'II year', 'Computer Science', 'Computer Science'),
(8, 'Attendence', 'B.Sc., Software Comp Sc.pdf', 'III year', 'Computer Science', 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `pdf` varchar(100) NOT NULL,
  `year` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `group` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `pdf`, `year`, `department`, `group`) VALUES
(8, 'book', 'dlf.pdf', 'I year', 'Computer Science', 'Computer Science'),
(9, 'book', 'dlf.pdf', 'I year', 'Computer Science', 'Computer Science'),
(10, 'book', 'dlf.pdf', 'II year', 'Computer Science', 'Computer Science'),
(11, 'book', 'Programming in C.pdf', 'II year', 'Computer Science', 'Computer Science'),
(12, 'book', 'dlf.pdf', 'II year', 'Computer Science', 'Computer Science'),
(13, 'book', 'dlf.pdf', 'II year', 'Computer Science', 'Computer Science'),
(14, 'book', 'dlf.pdf', 'III year', 'Computer Science', 'Computer Science'),
(15, 'book', 'dlf.pdf', 'III year', 'Computer Science', 'Computer Science'),
(16, 'book', 'dlf.pdf', 'III year', 'Computer Science', 'Computer Science'),
(17, 'book', 'dlf.pdf', 'II year', 'Computer Science', 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `calender`
--

CREATE TABLE `calender` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calender`
--

INSERT INTO `calender` (`id`, `name`, `date`, `description`, `type`) VALUES
(2, 'Birthday', 'february/02/2023', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'holiday'),
(3, 'Birthday', 'february/15/2023', 'hflkhgwfelshflk', 'holiday'),
(4, 'Pi day', 'March/14/2023', 'pi day', 'holiday'),
(5, 'saqib', '25/01/2023', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'yturu'),
(7, 'Birthday', 'November/02/2023', 'Rahim Birthday', 'holiday'),
(8, 'Republic day', 'january/26/2023', 'hflkhgwfelshflk', 'holiday');

-- --------------------------------------------------------

--
-- Table structure for table `cia`
--

CREATE TABLE `cia` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `pdf` varchar(100) NOT NULL,
  `year` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `group` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cia`
--

INSERT INTO `cia` (`id`, `title`, `pdf`, `year`, `department`, `group`) VALUES
(8, 'II Year', 'C questions.pdf', 'II year', 'computer science', 'computer science'),
(9, 'III Year', 'dlf.pdf', 'III year', 'computer science', 'computer science'),
(10, 'I Year', 'B.Sc., Computer Science.pdf', 'I Year', 'computer science', 'computer science');

-- --------------------------------------------------------

--
-- Table structure for table `examtime`
--

CREATE TABLE `examtime` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `pdf` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `group` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `examtime`
--

INSERT INTO `examtime` (`id`, `title`, `pdf`, `year`, `department`, `group`) VALUES
(3, 'Time', 'BSC MAIN TIME TABLE EVEN.pdf', 'I year', 'Computer Science', 'Computer Science'),
(4, 'Time', 'BSC MAIN TIME TABLE EVEN.pdf', 'II year', 'Computer Science', 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `pdf` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `group` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `pdf`, `year`, `department`, `group`) VALUES
(5, 'Notes', 'Programming in C.pdf', 'I year', 'Computer Science', 'Computer Science'),
(6, 'Notes', 'DataStructure.pdf', 'II year', 'Computer Science', 'Computer Science'),
(7, 'Notes', 'Ex_1_WorldDatabase.pdf', 'III year', 'Computer Science', 'Computer Science'),
(8, 'Notes', 'Exercise 2 Matrix Manipulation.pdf', 'I year', 'Computer Science', 'Computer Science'),
(9, 'Notes', 'Exercise 3 Symbolic Integration.pdf', 'I year', 'Computer Science', 'Computer Science'),
(10, 'Notes', 'QuickSort.pdf', 'II year', 'Computer Science', 'Computer Science'),
(11, 'Notes', 'QuickSort.pdf', 'II year', 'Computer Science', 'Computer Science'),
(12, 'Notes', 'TriggersEx.pdf', 'III year', 'Computer Science', 'Computer Science'),
(13, 'Notes', 'FunctionsEx.pdf', 'III year', 'Computer Science', 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `pdf` varchar(100) NOT NULL,
  `year` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `group` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `title`, `pdf`, `year`, `department`, `group`) VALUES
(6, 'Qb', 'Digital Logic Fundamentals Question Bank.pdf', 'I year', 'Computer Science', 'Computer Science'),
(7, 'Qb', 'Microprocessors QB.pdf', 'I year', 'Computer Science', 'Computer Science'),
(8, 'Qb', 'Programming in Java QB.pdf', 'II year', 'Computer Science', 'Computer Science'),
(9, 'Qb', 'Programming_C QB Revised.pdf', 'I year', 'Computer Science', 'Computer Science'),
(10, 'Qb', 'DS_CPP QB.pdf', 'II year', 'Computer Science', 'Computer Science'),
(11, 'Qb', 'Database Management System QB.pdf', 'III year', 'Computer Science', 'Computer Science'),
(12, 'Qb', 'Operating Systems QB.pdf', 'III year', 'Computer Science', 'Computer Science'),
(13, 'Qb', 'Computer_Networks QB.pdf', 'III year', 'Computer Science', 'Computer Science'),
(14, 'Qb', 'Computer Graphics and Multimedia QB.pdf', 'III year', 'Computer Science', 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `experiance` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `department` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `image`, `qualification`, `experiance`, `role`, `phone`, `department`) VALUES
(15, 'P.Maghizhan', 'Maghizan.jpg', 'B.Sc.,M.Sc.,M.phil.,PGDCA', '30 Years', 'Head Of The Department', '9443938992', 'Computer Science'),
(16, 'A.A.Khadar Maideen', 'Khader_JPG.jpg', 'B.Sc.,M.C.A.,M.Phil', '27 Years', 'Associate Professor', '9442810606', 'Computer Science'),
(17, 'S.Mohammed Nawaz Basha', 'Nawaz New_jpg.jpg', 'B.Sc.,M.Sc.,M.phil.,SET', '21 Years', 'Assistant Professor', '9994114787', 'Computer Science'),
(18, 'C.A.Md.Zameer', 'Zameer_JPG.jpg', 'B.C.A.,M.Sc.,B.Ed.,M.Ed.,M.Phil', '12 Years', 'Assistant Professor`', '9940924923', 'Computer Science'),
(19, 'Tabrez.S.A', 'TABREZ _png.jpg', 'M.Com.,M.Phil', '07 Years', 'Assistant Professor', '8925243064', 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `department` varchar(30) NOT NULL,
  `group` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `image`, `regno`, `course`, `dob`, `phone`, `department`, `group`, `year`) VALUES
(8, 'V.A.Abdur Rahim', 'Samples1.png', '31120U18001', 'Computer Science', '02-11-2002', '9629427620', 'Computer Science', 'Computer Science', 'III year'),
(9, 'B.MOhammed Saqib', 'books.png', '31120U18037', 'Computer Science', '14-02-2003', '9003985796', 'Computer Science', 'Computer Science', 'III year'),
(10, 'A.J.Md Hashir', 'Samples1.png', '31120U18026', 'Computer Science', '17-06-2003', '9894409598', 'Computer Science', 'Computer Science', 'III year');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `pdf` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `group` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`id`, `title`, `pdf`, `year`, `department`, `group`) VALUES
(4, 'Syllabus', 'I BSC BCA SW MSC .pdf', 'I year', 'Computer Science', 'Computer Science'),
(5, 'Syllabus', 'II BSC CS SW BCA MSC.pdf', 'II year', 'Computer Science', 'Computer Science'),
(6, 'Syllabus', 'III BSC-BCA-BSW.pdf', 'III year', 'Computer Science', 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `pdf` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `group` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `title`, `pdf`, `year`, `department`, `group`) VALUES
(3, 'Time', 'BSC MAIN TIME TABLE EVEN.pdf', 'I year', 'Computer Science', 'Computer Science'),
(4, 'Time', 'BSC MAIN TIME TABLE EVEN.pdf', 'II year', 'Computer Science', 'Computer Science'),
(5, 'Time', 'BSC MAIN TIME TABLE EVEN.pdf', 'III year', 'Computer Science', 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `s.no` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`s.no`, `username`, `regno`, `password`, `phone`, `email`, `department`, `role`) VALUES
(1, 'saqib', '31120u18037', '12345', '9003985796', 'saqib@gmail.com', 'computer science', 'computer science'),
(2, 'rahim', '31120u18001', '1234', '900398579', '31120u18001@gmail.com', 'computer science', 'arabic'),
(5, 'mohammed saqib', '31120u18037', 'admin', '900398579', '31120u18037@gmail.com', 'computer science', 'computer science'),
(6, 'kashif', '24', 'kashif', '2147483647', 'kashif@gmail.com', 'computer science', 'computer science'),
(8, 'Nabil Taha', '41', 'nabil', '0960595', 'nabil@gamil.com', 'english', 'english'),
(9, 'danish', '29', 'danish', '8069856096', 'danish@gmail.com', 'arabic', 'arabic'),
(10, 'muzammil', '35', 'muzammil', '9070685986', 'muzammil@gmail.com', 'computer science', 'computer science'),
(11, 'abdur rahman', '03', 'Abdur', '7069-096096', 'abdurrahman@gmail.com', 'computer science', 'computer science'),
(12, 'shariq', '48', 'shariq', '097060606', 'shariq@gmail.com', 'computer science', 'computer science'),
(15, 'Ismail Maaz', '31120u18030', 'maaz', '097968696', 'maaz@gmail.com', 'computer science', 'computer science'),
(16, 'rahim', '01', '123', '9003985796', 'rahim@gmail.com', 'computer science', 'computer science'),
(18, 'yamuna', '31120u182220', 'jamuna', '8838224232', 'yamunajamuna@gmail.com', 'computer science', 'computer science');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `year` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `group` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `video`, `year`, `department`, `group`) VALUES
(5, 'vid', 'Sample1.mp4', 'I year', 'Computer Science', 'Computer Science'),
(6, 'vid', 'Sample2.mp4', 'I year', 'Computer Science', 'Computer Science'),
(7, 'VID', 'Sample2.mp4', 'I year', 'Computer Science', 'Computer Science'),
(8, 'vid', 'Sample2.mp4', 'II year', 'Computer Science', 'Computer Science'),
(9, 'vid', 'Sample1.mp4', 'II year', 'Computer Science', 'Computer Science'),
(10, 'vid', 'Sample2.mp4', 'III year', 'Computer Science', 'Computer Science'),
(11, 'vid', 'Sample1.mp4', 'III year', 'Computer Science', 'Computer Science');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calender`
--
ALTER TABLE `calender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cia`
--
ALTER TABLE `cia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examtime`
--
ALTER TABLE `examtime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `calender`
--
ALTER TABLE `calender`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cia`
--
ALTER TABLE `cia`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `examtime`
--
ALTER TABLE `examtime`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `s.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
