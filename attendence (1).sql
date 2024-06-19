-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 10:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendence`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `rollno` int(6) NOT NULL,
  `attendance` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`rollno`, `attendance`, `name`, `date`) VALUES
(0, 'absent', 'nikita', '21-04-2023'),
(3, 'present', 'nikita', '21-04-2023'),
(4, 'absent', 'payal', '21-04-2023'),
(0, 'absent', 'nikita', '21-04-2023'),
(3, 'present', 'nikita', '21-04-2023'),
(4, 'absent', 'payal', '21-04-2023'),
(5, 'present', 'nikita', '21-04-2023'),
(3, 'absent', 'nikita', '21-04-2023'),
(4, 'present', 'payal', '21-04-2023'),
(3, 'absent', 'nikita', '21-04-2023'),
(4, 'present', 'payal', '21-04-2023'),
(0, 'absent', 'nikita', '04-21-2023'),
(3, 'present', 'nikita', '04-21-2023'),
(4, 'absent', 'payal', '04-21-2023'),
(5, 'present', 'nikita', '04-21-2023'),
(6, 'absent', 'nikita', '04-21-2023'),
(7, 'present', 'nikita', '04-21-2023'),
(0, 'absent', 'nikita', '04-21-2023'),
(3, 'present', 'nikita', '04-21-2023'),
(0, 'absent', 'nikita', '2023-04-22'),
(3, 'present', 'nikita', '2023-04-22'),
(0, 'absent', 'nikita', '04-22-2023'),
(3, 'present', 'nikita', '04-22-2023'),
(0, 'absent', 'nikita', '04-25-2023'),
(3, 'present', 'nikita', '04-25-2023'),
(4, 'present', 'payal', '04-25-2023'),
(5, 'present', 'nikita', '04-25-2023'),
(6, 'present', 'nikita', '04-25-2023'),
(7, 'present', 'nikita', '04-25-2023'),
(8, 'present', 'payal', '04-25-2023'),
(8, 'present', 'payal', '04-25-2023'),
(0, 'present', 'nikita', '04-26-2023'),
(3, 'present', 'nikita', '04-26-2023'),
(4, 'present', 'payal', '04-26-2023'),
(5, 'present', 'nikita', '04-26-2023'),
(6, 'present', 'nikita', '04-26-2023'),
(7, 'present', 'nikita', '04-26-2023'),
(0, 'absent', '', '04-29-2023'),
(6, 'present', 'MUSKAN', '04-29-2023'),
(7, 'present', 'POOJA', '04-29-2023'),
(8, 'present', 'GOURAV (GIRISH)', '04-29-2023'),
(9, 'present', 'MANJEET', '04-29-2023'),
(10, 'present', 'VINIT', '04-29-2023'),
(11, 'present', 'ASHISH', '04-29-2023'),
(48, 'present', 'ATUL', '04-29-2023'),
(33, 'present', 'RONAK', '04-29-2023'),
(34, 'present', 'ANJALI', '04-29-2023'),
(35, 'present', 'SHALLU', '04-29-2023'),
(36, 'present', 'ASHU', '04-29-2023'),
(37, 'present', 'DISHA', '04-29-2023'),
(38, 'present', 'PAVITRA', '04-29-2023'),
(39, 'present', 'KAJAL', '04-29-2023'),
(40, 'present', 'PARTH', '04-29-2023'),
(41, 'present', 'AJIT', '04-29-2023'),
(15, 'present', 'ANKUSH', '04-29-2023'),
(32, 'present', 'GUNGUN', '04-29-2023'),
(44, 'present', 'SHALLU', '04-29-2023'),
(58, 'present', 'KIRAN', '04-29-2023'),
(32, 'present', 'GUNGUN', '05-02-2023'),
(33, 'absent', 'RONAK', '05-02-2023'),
(34, 'present', 'ANJALI', '05-02-2023'),
(35, 'present', 'SHALLU', '05-02-2023'),
(36, 'present', 'ASHU', '05-02-2023'),
(37, 'present', 'DISHA', '05-02-2023'),
(38, 'present', 'PAVITRA', '05-02-2023'),
(39, 'present', 'KAJAL', '05-02-2023'),
(40, 'present', 'PARTH', '05-02-2023'),
(47, 'present', 'DEEPAK (ASHOK)', '05-02-2023'),
(48, 'present', 'ATUL', '05-02-2023'),
(28, 'present', 'RACHNA', '05-02-2023'),
(57, 'present', 'PALAK', '05-02-2023'),
(46, 'present', 'CHIRAG', '05-02-2023'),
(15, 'present', 'ANKUSH', '09-25-2023'),
(54, 'present', 'MAHAK', '09-25-2023'),
(21, 'present', 'JANAK', '06-12-2024'),
(22, 'absent', 'ASHISH', '06-12-2024'),
(23, 'present', 'PRINCE', '06-12-2024'),
(24, 'absent', 'CHIRAG', '06-12-2024'),
(5, 'present', 'ASHISH', '06-12-2024'),
(0, 'present', 'SACHIN (KHANPUR)', '06-12-2024'),
(6, 'present', 'MUSKAN', '06-12-2024'),
(7, 'present', 'POOJA', '06-12-2024'),
(8, 'present', 'GOURAV (GIRISH)', '06-12-2024');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `id` int(11) NOT NULL,
  `batchtime` time NOT NULL,
  `batch` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`id`, `batchtime`, `batch`) VALUES
(1, '08:30:00', '10:00:00'),
(2, '09:00:00', '10:30:00'),
(3, '09:30:00', '11:00:00'),
(4, '10:00:00', '11:30:00'),
(5, '10:30:00', '12:00:00'),
(6, '11:00:00', '12:30:00'),
(7, '11:30:00', '13:00:00'),
(8, '12:00:00', '13:30:00'),
(9, '12:30:00', '14:00:00'),
(10, '13:00:00', '14:30:00'),
(11, '13:30:00', '15:00:00'),
(12, '14:00:00', '15:30:00'),
(13, '14:30:00', '16:00:00'),
(14, '15:00:00', '16:30:00'),
(15, '15:30:00', '17:00:00'),
(16, '16:00:00', '17:30:00'),
(17, '16:30:00', '18:00:00'),
(18, '17:00:00', '18:30:00'),
(19, '17:30:00', '19:00:00'),
(20, '18:00:00', '19:30:00'),
(21, '20:00:00', '21:30:00'),
(22, '20:00:00', '21:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `password`) VALUES
('NAVEEN', 'NAVEEN'),
('DEEPAK', 'DEEPAK'),
('SATISH', 'SATISH');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `rollno` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `batchtime` time NOT NULL,
  `batchend` time NOT NULL,
  `topic` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `rollno`, `sname`, `batchtime`, `batchend`, `topic`, `teacher`) VALUES
(17, 1, 'ANKIT BANK', '08:30:00', '10:00:00', 'EXCEL', 'DEEPAK'),
(18, 0, 'MOHIT', '08:30:00', '10:00:00', 'EXCEL', 'DEEPAK'),
(19, 3, 'SAGAR', '08:30:00', '10:00:00', 'TALLY', 'SATISH'),
(20, 4, 'AKASH', '08:30:00', '10:00:00', 'TALLY', 'SATISH'),
(21, 5, 'ASHISH', '09:00:00', '10:30:00', 'WORD TABLE TEST', 'DEEPAK'),
(22, 0, 'SACHIN (KHANPUR)', '09:00:00', '10:30:00', 'WORD TABLE TEST', 'DEEPAK'),
(23, 0, 'OSHIN', '09:00:00', '10:30:00', 'WORD TABLE TEST', 'DEEPAK'),
(24, 0, 'DHARNA (PAYAL)', '09:00:00', '10:30:00', 'WORD TABLE TEST', 'DEEPAK'),
(25, 0, 'SHRADHA (NEW)', '09:00:00', '10:30:00', 'WORD TABLE TEST', 'DEEPAK'),
(26, 0, 'SHREYA (NEW)', '09:00:00', '10:30:00', 'WORD TABLE TEST', 'DEEPAK'),
(27, 0, 'SHRESHTHA (NEW)', '09:00:00', '10:30:00', 'WORD TABLE TEST', 'DEEPAK'),
(28, 6, 'MUSKAN', '09:00:00', '10:30:00', 'COREL DRAW', 'DEEPAK'),
(29, 7, 'POOJA', '09:00:00', '10:30:00', 'COREL DRAW', 'DEEPAK'),
(30, 8, 'GOURAV (GIRISH)', '09:00:00', '10:30:00', 'EXCEL (START SOON)', 'DEEPAK'),
(31, 9, 'MANJEET', '09:00:00', '10:30:00', 'EXCEL', 'SATISH'),
(32, 10, 'VINIT', '09:00:00', '10:30:00', 'TALLY', 'SATISH'),
(33, 11, 'ASHISH', '09:00:00', '10:30:00', 'TALLY', 'SATISH'),
(34, 3, 'SAGAR', '10:00:00', '11:30:00', 'TALLY', 'SATISH'),
(35, 12, 'CHANCHAL', '10:00:00', '11:30:00', '--', 'SATISH'),
(36, 13, 'SHASHIBALA', '10:00:00', '11:30:00', '--', 'SATISH'),
(37, 14, 'MEENU', '10:00:00', '11:30:00', 'PHOTOSHOP', 'DEEPAK'),
(38, 15, 'ANKUSH', '10:30:00', '12:00:00', 'JAVASCRIPT', 'DEEPAK'),
(39, 16, 'KANAN', '12:00:00', '13:30:00', 'PHOTOSHOP', 'DEEPAK'),
(40, 17, 'SANDEEP', '12:00:00', '13:30:00', 'COREL DRAW', 'DEEPAK'),
(41, 18, 'NIKITA', '14:00:00', '15:30:00', 'PROJECTS', 'DEEPAK'),
(42, 19, 'ANJU', '14:30:00', '16:00:00', 'POWERPNT', 'DEEPAK'),
(43, 20, 'MAMTA', '14:30:00', '16:00:00', 'POWERPNT', 'DEEPAK'),
(44, 21, 'JANAK', '15:00:00', '16:30:00', 'PHOTOSHOP', 'DEEPAK'),
(45, 22, 'ASHISH', '15:00:00', '16:30:00', 'EXCEL', 'DEEPAK'),
(46, 23, 'PRINCE', '15:00:00', '16:30:00', 'EXCEL', 'DEEPAK'),
(47, 24, 'CHIRAG', '15:00:00', '16:30:00', 'EXCEL', 'DEEPAK'),
(49, 26, 'AYUSH', '15:30:00', '17:00:00', 'PROJECTS', 'DEEPAK'),
(50, 27, 'YOGESH', '15:30:00', '17:00:00', 'PROJECTS', 'DEEPAK'),
(51, 28, 'RACHNA', '16:00:00', '17:30:00', 'WORD (INSERT TEST)', 'DEEPAK'),
(52, 29, 'NITIN', '08:30:00', '10:00:00', 'CPT', 'SATISH'),
(53, 30, 'AJIT', '10:00:00', '11:30:00', 'BASIC', 'SATISH'),
(54, 31, 'ROHIT', '10:00:00', '11:30:00', 'BASIC', 'SATISH'),
(55, 32, 'GUNGUN', '11:00:00', '12:30:00', '--', 'SATISH'),
(56, 33, 'RONAK', '11:00:00', '12:30:00', '--', 'DEEPAK'),
(57, 34, 'ANJALI', '11:00:00', '12:30:00', '--', 'SATISH'),
(58, 35, 'SHALLU', '11:00:00', '12:30:00', '--', 'DEEPAK'),
(59, 36, 'ASHU', '11:00:00', '12:30:00', '--', 'SATISH'),
(60, 37, 'DISHA', '11:00:00', '12:30:00', '--', 'SATISH'),
(61, 38, 'PAVITRA', '11:00:00', '12:30:00', '--', 'SATISH'),
(62, 39, 'KAJAL', '11:00:00', '12:30:00', '--', 'SATISH'),
(63, 40, 'PARTH', '11:00:00', '12:30:00', '--', 'SATISH'),
(64, 41, 'AJIT', '11:30:00', '13:00:00', 'TALLY', 'SATISH'),
(65, 42, 'AMAN', '12:00:00', '13:30:00', '--', 'SATISH'),
(66, 43, 'RAHUL', '12:00:00', '13:30:00', 'TALLY', 'SATISH'),
(67, 44, 'SHALLU', '12:30:00', '14:00:00', 'TALLY', 'SATISH'),
(68, 45, 'KAMAL', '13:00:00', '14:30:00', 'TALLY', 'SATISH'),
(69, 46, 'CHIRAG', '16:00:00', '17:30:00', 'TALLY', 'SATISH'),
(70, 47, 'DEEPAK (ASHOK)', '13:30:00', '15:00:00', '--', 'SATISH'),
(71, 48, 'ATUL', '13:30:00', '15:00:00', '--', 'SATISH'),
(72, 49, 'TANIYA', '15:00:00', '16:30:00', '--', 'SATISH'),
(73, 50, 'JASMEET', '15:00:00', '16:30:00', '--', 'SATISH'),
(74, 51, 'NAYANI', '15:00:00', '16:30:00', '--', 'SATISH'),
(75, 52, 'DAKSH', '15:00:00', '16:30:00', '--', 'SATISH'),
(76, 53, 'TANIYA JUNEJA', '15:00:00', '16:30:00', '--', 'SATISH'),
(77, 54, 'MAHAK', '15:30:00', '17:00:00', '--', 'SATISH'),
(78, 55, 'PARI', '15:30:00', '17:00:00', '--', 'SATISH'),
(79, 56, 'DHEERAJ', '15:30:00', '17:00:00', '--', 'SATISH'),
(80, 57, 'PALAK', '16:00:00', '17:30:00', 'PR', 'DEEPAK'),
(81, 58, 'KIRAN', '17:00:00', '18:30:00', 'PR', 'DEEPAK'),
(82, 48, 'CITY', '15:30:00', '17:00:00', 'CSS', 'DEEPAK');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `rollno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
