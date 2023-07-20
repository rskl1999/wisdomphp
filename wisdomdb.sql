-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2023 at 10:02 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `accountID` int(11) NOT NULL,
  `email` varchar(80) DEFAULT NULL,
  `password` varchar(90) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `token` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`accountID`, `email`, `password`, `role`, `token`) VALUES
(1, 'a@email.com', '$2y$10$Y1UIjiVXQctDyawKNbFVyuBriY9M2u4yVyYjmza8RmqzwWE3G0Zwa', 'school', NULL),
(2, 's1@email.com', NULL, 'student', NULL),
(3, 's2@email.com', NULL, 'student', NULL),
(4, 's3@email.com', NULL, 'student', NULL),
(5, 'd1@email.com', NULL, 'student', NULL),
(6, 'd2@email.com', NULL, 'student', NULL),
(7, 'd3@email.com', NULL, 'student', NULL),
(8, 'd4@email.com', NULL, 'student', NULL),
(9, 'd5@email.com', NULL, 'student', NULL),
(10, 'mc1@email.com', NULL, 'student', NULL),
(11, 'mc2@email.com', NULL, 'student', NULL),
(12, 'mc3@email.com', NULL, 'student', NULL),
(13, 'mc4@email.com', NULL, 'student', NULL),
(14, 'mc5@email.com', NULL, 'student', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `batchID` int(11) NOT NULL,
  `schoolID` int(11) DEFAULT NULL,
  `batchNo` int(11) DEFAULT NULL,
  `batchName` varchar(90) DEFAULT NULL,
  `batchDescription` varchar(255) DEFAULT NULL,
  `startDate` varchar(50) DEFAULT NULL,
  `endDate` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`batchID`, `schoolID`, `batchNo`, `batchName`, `batchDescription`, `startDate`, `endDate`) VALUES
(1, 1, 0, NULL, NULL, '2023-07-20', NULL),
(2, 1, 0, NULL, NULL, '2023-07-20', NULL),
(3, 1, 1, 'Batch Mari', 'Mari Con\'s 5students from schoolID: 1', '2023-07-20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dailylog`
--

CREATE TABLE `dailylog` (
  `logID` int(11) NOT NULL,
  `studentID` int(11) DEFAULT NULL,
  `hoursRendered` int(11) DEFAULT NULL,
  `date` varchar(80) DEFAULT NULL,
  `dateTimeIn` varchar(80) DEFAULT NULL,
  `dateTimeOut` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dailylogtasks`
--

CREATE TABLE `dailylogtasks` (
  `task` int(11) DEFAULT NULL,
  `dailyLog` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `internshipapplication`
--

CREATE TABLE `internshipapplication` (
  `internshipApplicationID` int(11) NOT NULL,
  `schoolID` int(11) DEFAULT NULL,
  `batchID` int(11) DEFAULT NULL,
  `programAdviser` varchar(80) DEFAULT NULL,
  `adviserEmail` varchar(80) DEFAULT NULL,
  `dateSubmitted` varchar(80) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `noStudents` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `internshipapplication`
--

INSERT INTO `internshipapplication` (`internshipApplicationID`, `schoolID`, `batchID`, `programAdviser`, `adviserEmail`, `dateSubmitted`, `duration`, `noStudents`) VALUES
(1, 1, 1, 'Hubz Dabeast', 'hd@email.com', '2023-07-20', 240, NULL),
(2, 1, 1, 'Dex Oppa', 'do@email.com', '2023-07-20', 240, NULL),
(3, 1, 3, 'Mari Con', 'mc@email.com', '2023-07-20', 240, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `schoolID` int(11) NOT NULL,
  `accountID` int(11) DEFAULT NULL,
  `schoolName` varchar(90) DEFAULT NULL,
  `address` varchar(90) DEFAULT NULL,
  `contactInfo` varchar(20) DEFAULT NULL,
  `schoolLogo` varchar(90) DEFAULT NULL,
  `Moa` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`schoolID`, `accountID`, `schoolName`, `address`, `contactInfo`, `schoolLogo`, `Moa`) VALUES
(1, 1, 'Adamson', 'Ermita, Paco, Manila, Metro Manila', '0123456789', '64b8dcea49abe.png', 'Application Letter.docx.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentID` int(11) NOT NULL,
  `accountID` int(11) DEFAULT NULL,
  `applicationID` int(11) DEFAULT NULL,
  `schoolID` int(11) DEFAULT NULL,
  `studentName` varchar(80) DEFAULT NULL,
  `course` varchar(90) DEFAULT NULL,
  `hoursRendered` varchar(80) DEFAULT NULL,
  `submittedRequirements` varchar(255) DEFAULT NULL,
  `profileImage` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentID`, `accountID`, `applicationID`, `schoolID`, `studentName`, `course`, `hoursRendered`, `submittedRequirements`, `profileImage`) VALUES
(1, 2, 1, 1, 'Student 1', 'CpE', '0', NULL, NULL),
(2, 3, 1, 1, 'Student 2', 'CpE', '0', NULL, NULL),
(3, 4, 1, 1, 'Student 3', 'CpE', '0', NULL, NULL),
(4, 5, 2, 1, 'Dex 1', 'CpE', '0', NULL, NULL),
(5, 6, 2, 1, 'Dex 2', 'CpE', '0', NULL, NULL),
(6, 7, 2, 1, 'Dex 3', 'CpE', '0', NULL, NULL),
(7, 8, 2, 1, 'Dex 4', 'CpE', '0', NULL, NULL),
(8, 9, 2, 1, 'Dex 5', 'CpE', '0', NULL, NULL),
(9, 10, 3, 1, 'MC 1', 'CpE', '0', NULL, NULL),
(10, 11, 3, 1, 'MC 2', 'CpE', '0', NULL, NULL),
(11, 12, 3, 1, 'MC 3', 'CpE', '0', NULL, NULL),
(12, 13, 3, 1, 'MC 4', 'CpE', '0', NULL, NULL),
(13, 14, 3, 1, 'MC 5', 'CpE', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studentstatus`
--

CREATE TABLE `studentstatus` (
  `schoolID` int(11) DEFAULT NULL,
  `studentID` int(11) DEFAULT NULL,
  `status` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentstatus`
--

INSERT INTO `studentstatus` (`schoolID`, `studentID`, `status`) VALUES
(1, 1, 'pending'),
(1, 2, 'pending'),
(1, 3, 'pending'),
(1, 4, 'pending'),
(1, 5, 'pending'),
(1, 6, 'pending'),
(1, 7, 'pending'),
(1, 8, 'pending'),
(1, 9, 'pending'),
(1, 10, 'pending'),
(1, 11, 'pending'),
(1, 12, 'pending'),
(1, 13, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `taskID` int(11) NOT NULL,
  `applicationID` int(11) DEFAULT NULL,
  `assignmentSlots` int(11) DEFAULT NULL,
  `title` varchar(90) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `labels` varchar(255) DEFAULT NULL,
  `allotedHours` int(11) DEFAULT NULL,
  `dateStarted` varchar(80) DEFAULT NULL,
  `dateFinished` varchar(80) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`accountID`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`batchID`),
  ADD KEY `schoolID` (`schoolID`);

--
-- Indexes for table `dailylog`
--
ALTER TABLE `dailylog`
  ADD PRIMARY KEY (`logID`),
  ADD KEY `studentID` (`studentID`);

--
-- Indexes for table `dailylogtasks`
--
ALTER TABLE `dailylogtasks`
  ADD KEY `task` (`task`),
  ADD KEY `dailyLog` (`dailyLog`);

--
-- Indexes for table `internshipapplication`
--
ALTER TABLE `internshipapplication`
  ADD PRIMARY KEY (`internshipApplicationID`),
  ADD KEY `schoolID` (`schoolID`),
  ADD KEY `batchID` (`batchID`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`schoolID`),
  ADD KEY `accountID` (`accountID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentID`),
  ADD KEY `accountID` (`accountID`),
  ADD KEY `applicationID` (`applicationID`),
  ADD KEY `schoolID` (`schoolID`);

--
-- Indexes for table `studentstatus`
--
ALTER TABLE `studentstatus`
  ADD KEY `schoolID` (`schoolID`),
  ADD KEY `studentID` (`studentID`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`taskID`),
  ADD KEY `applicationID` (`applicationID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `accountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `batchID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dailylog`
--
ALTER TABLE `dailylog`
  MODIFY `logID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `internshipapplication`
--
ALTER TABLE `internshipapplication`
  MODIFY `internshipApplicationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `schoolID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `taskID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `batch`
--
ALTER TABLE `batch`
  ADD CONSTRAINT `batch_ibfk_1` FOREIGN KEY (`schoolID`) REFERENCES `school` (`schoolID`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `dailylog`
--
ALTER TABLE `dailylog`
  ADD CONSTRAINT `dailylog_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `student` (`studentID`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `dailylogtasks`
--
ALTER TABLE `dailylogtasks`
  ADD CONSTRAINT `dailylogtasks_ibfk_1` FOREIGN KEY (`task`) REFERENCES `tasks` (`taskID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dailylogtasks_ibfk_2` FOREIGN KEY (`dailyLog`) REFERENCES `dailylog` (`logID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `internshipapplication`
--
ALTER TABLE `internshipapplication`
  ADD CONSTRAINT `internshipapplication_ibfk_1` FOREIGN KEY (`schoolID`) REFERENCES `school` (`schoolID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `internshipapplication_ibfk_2` FOREIGN KEY (`batchID`) REFERENCES `batch` (`batchID`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `school`
--
ALTER TABLE `school`
  ADD CONSTRAINT `school_ibfk_1` FOREIGN KEY (`accountID`) REFERENCES `account` (`accountID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`accountID`) REFERENCES `account` (`accountID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`schoolID`) REFERENCES `school` (`schoolID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`applicationID`) REFERENCES `internshipapplication` (`internshipApplicationID`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `studentstatus`
--
ALTER TABLE `studentstatus`
  ADD CONSTRAINT `studentstatus_ibfk_1` FOREIGN KEY (`schoolID`) REFERENCES `school` (`schoolID`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `studentstatus_ibfk_2` FOREIGN KEY (`studentID`) REFERENCES `student` (`studentID`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`applicationID`) REFERENCES `internshipapplication` (`internshipApplicationID`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
