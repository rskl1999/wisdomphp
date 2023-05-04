-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 11:26 AM
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
-- Database: `wisdomdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounttbl`
--

CREATE TABLE `accounttbl` (
  `accountID` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `pass` varchar(90) NOT NULL,
  `role` varchar(20) NOT NULL,
  `token` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounttbl`
--

INSERT INTO `accounttbl` (`accountID`, `email`, `pass`, `role`, `token`) VALUES
(1, 'test@gmail.com', '$2y$10$qv6oU9UsSLRh09IQHC2lJOLJuvBKugOX8cWIgXlwL70FduL5p1F/2', 'student', ''),
(2, 'plm@gmail.com', '$2y$10$5VNkNxuDEHFchZYkKBJALON.ZjmR6Sr1NeAYNPR41sRUfoirPNIhO', 'school', ''),
(3, 'lloydangelomartinez@gmail.com', '$2y$10$5VNkNxuDEHFchZYkKBJALON.ZjmR6Sr1NeAYNPR41sRUfoirPNIhO', 'school', 'c0437fba750d5f00c2fb77ede951c8e06f1829c2'),
(15, 'student1@gmail.com', '$2y$10$5VNkNxuDEHFchZYkKBJALON.ZjmR6Sr1NeAYNPR41sRUfoirPNIhO', 'student', ''),
(16, 'impostor@gmail.com', '$2y$10$5VNkNxuDEHFchZYkKBJALON.ZjmR6Sr1NeAYNPR41sRUfoirPNIhO', 'student', ''),
(22, 'tech@gmail.com', '$2y$10$Q3zRfnMee.XmaXa900ZgB.s4dvizSLeRiP7umxyqUyIYUzvZrTLNq', 'school', '');

-- --------------------------------------------------------

--
-- Table structure for table `applicanttbl`
--

CREATE TABLE `applicanttbl` (
  `applicationID` int(11) NOT NULL,
  `schoolID` int(11) NOT NULL,
  `batchID` int(11) NOT NULL,
  `programAdviser` varchar(80) NOT NULL,
  `adviserEmail` varchar(80) NOT NULL,
  `dateSubmitted` varchar(80) NOT NULL,
  `duration` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicanttbl`
--

INSERT INTO `applicanttbl` (`applicationID`, `schoolID`, `batchID`, `programAdviser`, `adviserEmail`, `dateSubmitted`, `duration`) VALUES
(5, 2, 1, 'Juan Dela Cruz', 'juan@gmail.com', '2023-04-25', '460'),
(6, 1, 1, 'Juan Dela Cruz', 'juan@gmail.com', '2023-04-25', '460');

-- --------------------------------------------------------

--
-- Table structure for table `schooltbl`
--

CREATE TABLE `schooltbl` (
  `schoolID` int(11) NOT NULL,
  `accountID` int(11) NOT NULL,
  `schoolName` varchar(90) NOT NULL,
  `address` varchar(90) NOT NULL,
  `contact_info` varchar(20) NOT NULL,
  `schoolLogo` varchar(90) NOT NULL,
  `Moa` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schooltbl`
--

INSERT INTO `schooltbl` (`schoolID`, `accountID`, `schoolName`, `address`, `contact_info`, `schoolLogo`, `Moa`) VALUES
(1, 3, 'Our Lady of the Sacred Heart College of Guimba\r\n', 'Afan Salvador St, Guimba, Nueva Ecija', '0908635472', 'olshco.png', ''),
(2, 2, 'PLM', 'General Luna, corner Muralla St, Intramuros, Manila', '091023821', 'plm.png', ''),
(3, 1, 'Technological Institute of the Philippines', 'Quezon City, Manila', '098328323323', 'tip.png', ''),
(18, 16, 'Impostor', 'Sample, Navotas, Benguet', '09783827382', '643f984d31bed.png', ''),
(21, 17, 'Technological Institute of the Philippines', 'Quezon City, Mandaluyong, Antique', '09812392838', '6447352e314ba.png', ''),
(23, 22, 'technology shit', 'Quezon city, Makati, Benguet', '09823782938', '644745c5ec958.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `studenttbl`
--

CREATE TABLE `studenttbl` (
  `studentID` int(11) NOT NULL,
  `accountID` int(11) NOT NULL,
  `batchID` int(20) NOT NULL,
  `schoolID` int(11) NOT NULL,
  `studentName` varchar(80) NOT NULL,
  `course` varchar(90) NOT NULL,
  `hoursRendered` varchar(80) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studenttbl`
--

INSERT INTO `studenttbl` (`studentID`, `accountID`, `batchID`, `schoolID`, `studentName`, `course`, `hoursRendered`, `status`) VALUES
(15, 15, 1, 2, 'Student 1', 'BSIT', '', 'pending'),
(16, 16, 1, 1, 'Student 1', 'BSIT', '', 'pending'),
(17, 16, 1, 1, 'Student 2', 'BSIT', '', 'pending'),
(18, 16, 1, 1, 'Student 3', 'BSIT', '', 'pending'),
(19, 16, 1, 1, 'Student 4', 'BSIT', '', 'pending'),
(20, 16, 1, 1, 'Student 5', 'BSIT', '', 'pending'),
(21, 16, 1, 1, 'Student 6', 'BSIT', '', 'pending'),
(22, 16, 1, 1, 'Student 7', 'BSIT', '', 'pending'),
(23, 16, 1, 1, 'Student 8', 'BSIT', '', 'pending'),
(24, 16, 1, 1, 'Student 9', 'BSIT', '', 'pending'),
(25, 16, 1, 1, 'Student 10', 'BSIT', '', 'pending'),
(26, 16, 1, 1, 'Student 11', 'BSIT', '', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `uploadfiletbl`
--

CREATE TABLE `uploadfiletbl` (
  `documentID` int(11) NOT NULL,
  `studentID` int(11) NOT NULL,
  `documentType` varchar(80) NOT NULL,
  `dateSubmitted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounttbl`
--
ALTER TABLE `accounttbl`
  ADD PRIMARY KEY (`accountID`);

--
-- Indexes for table `applicanttbl`
--
ALTER TABLE `applicanttbl`
  ADD PRIMARY KEY (`applicationID`);

--
-- Indexes for table `schooltbl`
--
ALTER TABLE `schooltbl`
  ADD PRIMARY KEY (`schoolID`);

--
-- Indexes for table `studenttbl`
--
ALTER TABLE `studenttbl`
  ADD PRIMARY KEY (`studentID`);

--
-- Indexes for table `uploadfiletbl`
--
ALTER TABLE `uploadfiletbl`
  ADD PRIMARY KEY (`documentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounttbl`
--
ALTER TABLE `accounttbl`
  MODIFY `accountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `applicanttbl`
--
ALTER TABLE `applicanttbl`
  MODIFY `applicationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schooltbl`
--
ALTER TABLE `schooltbl`
  MODIFY `schoolID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `studenttbl`
--
ALTER TABLE `studenttbl`
  MODIFY `studentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `uploadfiletbl`
--
ALTER TABLE `uploadfiletbl`
  MODIFY `documentID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
