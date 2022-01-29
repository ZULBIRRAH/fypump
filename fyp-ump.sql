-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 09:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp-ump`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(11) NOT NULL,
  `Admin_Phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `aID` int(11) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `setdate` date NOT NULL,
  `Faculty_Announcement` text NOT NULL,
  `Faculty_Code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`aID`, `topic`, `setdate`, `Faculty_Announcement`, `Faculty_Code`) VALUES
(5, 'Study Week Notice', '2022-01-29', '<p><strong>Study week Announcement</strong></p>\r\n<p>The study week of this semester will be landed on 29/1 to 6/2.</p>\r\n<p>Thank you.</p>', 'FK, HS, SE, ME'),
(7, 'Examination', '2022-02-07', '<p>Final exam&nbsp;</p>\r\n<p>Date: 7/2/2022 - 22/2/2022</p>', 'FK, HS, SE, ME');

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id`, `title`, `description`, `start_datetime`, `end_datetime`) VALUES
(2, 'Study Week', 'Study Week', '2022-01-29 00:00:00', '2022-02-06 23:59:00'),
(9, 'Examination', 'Final exam', '2022-02-07 00:00:00', '2022-02-22 23:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `CoordinatorID` varchar(20) NOT NULL,
  `Coordinator_Name` varchar(100) NOT NULL,
  `Coordinator_Email` varchar(100) NOT NULL,
  `Coordinator_Phone` int(20) NOT NULL,
  `Faculty_Announcement` text NOT NULL,
  `Student_Info` varchar(100) NOT NULL,
  `Faculty_Code` varchar(20) NOT NULL,
  `EvaluatorID` varchar(20) NOT NULL,
  `SupervisorID` varchar(20) NOT NULL,
  `IndustrialID` varchar(20) NOT NULL,
  `RubricID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`CoordinatorID`, `Coordinator_Name`, `Coordinator_Email`, `Coordinator_Phone`, `Faculty_Announcement`, `Student_Info`, `Faculty_Code`, `EvaluatorID`, `SupervisorID`, `IndustrialID`, `RubricID`) VALUES
('C0012', 'Aleeya', 'aleeya20@gmail.com', 109088231, '', '', 'ME', 'E9810', 'S0971', 'I0112', 'R5170'),
('C0112', 'Hafiz', 'hafiz22@gmail.com', 197600211, '', '', 'SE', 'E4177', 'S0001', 'I9322', 'R5421'),
('C1124', 'Seha', 'sehaazfa@gmail.com', 187861221, '', '', 'FK', 'E0011', 'S6632', 'I2311', 'R0002'),
('C5623', 'Aizat', 'aizatJ@yahoo.com', 127611092, '', '', 'FK', 'E4268', 'S0012', 'I1011', 'R9722'),
('C6720', 'Saiful', 'Saiful11@yahoo.com', 126522181, '', '', 'HS', 'E8872', 'S8100', 'I0921', 'R2011');

-- --------------------------------------------------------

--
-- Table structure for table `evaluator`
--

CREATE TABLE `evaluator` (
  `EvaluatorID` varchar(20) NOT NULL,
  `Evaluator_Name` varchar(100) NOT NULL,
  `Evaluation_Form` varchar(100) NOT NULL,
  `Student_Info` varchar(100) NOT NULL,
  `WorkfileID` varchar(20) NOT NULL,
  `LecturerID` varchar(20) NOT NULL,
  `IndustrialID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluator`
--

INSERT INTO `evaluator` (`EvaluatorID`, `Evaluator_Name`, `Evaluation_Form`, `Student_Info`, `WorkfileID`, `LecturerID`, `IndustrialID`) VALUES
('E0011', 'Manaf', 'Grade A', 'First year', 'W5611', '', 'I2311'),
('E4177', 'Ariff', 'Grade B', 'Final year', 'W0112', '', 'I9322'),
('E4268', 'Kamariah', 'Grade A', 'Second year', 'W7611', '', 'I1011'),
('E8872', 'Delaila', 'Grade A', 'Final year', 'W0982', '', 'I0921'),
('E9810', 'Kaisara', 'Grade A', 'Third year', 'W0001', '', 'I0112');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `Faculty_Code` varchar(20) NOT NULL,
  `Faculty_Name` varchar(100) NOT NULL,
  `Faculty_Email` varchar(100) NOT NULL,
  `Faculty_Phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Faculty_Code`, `Faculty_Name`, `Faculty_Email`, `Faculty_Phone`) VALUES
('FK', 'Computer', 'FKump@gmail.com', 35632212),
('HS', 'Human Science', 'HSump@gmail.com', 34572115),
('ME', 'Mechanical Engineering', 'MEump@gmail.com', 34231875),
('SE', 'Software Engineering', 'SEump@gmail.com', 37841152);

-- --------------------------------------------------------

--
-- Table structure for table `industrial`
--

CREATE TABLE `industrial` (
  `IndustrialID` varchar(20) NOT NULL,
  `Industry_Name` varchar(100) NOT NULL,
  `Industry_Email` varchar(100) NOT NULL,
  `Industry_Phone` int(20) NOT NULL,
  `EvaluatorID` varchar(20) NOT NULL,
  `Student_Info` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industrial`
--

INSERT INTO `industrial` (`IndustrialID`, `Industry_Name`, `Industry_Email`, `Industry_Phone`, `EvaluatorID`, `Student_Info`) VALUES
('I0112', 'Engineering Industry', 'Engineering@gmail.com', 37761289, 'E9810', 'Third year'),
('I0921', 'Human Science Industry', 'HumanSc@gmail.com', 58922199, 'E8872', 'Final year'),
('I1011', 'Computer Industry', 'CompAF@gmail.com', 68922101, 'E4268', 'Second year'),
('I2311', 'Computer Industry', 'CompAF@gmail.com', 68922101, 'E0011', 'First year'),
('I9322', 'Engineering Industry', 'Engineering@gmail.com', 37761289, 'E4177', 'Final year');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `Lecturer_ID` varchar(11) NOT NULL,
  `Lecturer_Name` varchar(50) NOT NULL,
  `Lecturer_Email` varchar(50) NOT NULL,
  `Lecturer_Phone` varchar(12) NOT NULL,
  `EvaluatorID` varchar(11) NOT NULL,
  `Student_info` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `logbook`
--

CREATE TABLE `logbook` (
  `LogbookID` varchar(20) NOT NULL,
  `Logbook_Title` varchar(100) NOT NULL,
  `Logbook_Status` varchar(20) NOT NULL,
  `Logbook_Date` date NOT NULL,
  `StudentID` varchar(20) NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logbook`
--

INSERT INTO `logbook` (`LogbookID`, `Logbook_Title`, `Logbook_Status`, `Logbook_Date`, `StudentID`, `Comment`) VALUES
('L0011', 'Computer', 'In Progress', '2021-11-01', 'CA1872', ''),
('L2011', 'Computer', 'In Progress', '2021-05-04', 'CA1908', ''),
('L8028', 'Software Engineering', 'In Progress', '2021-05-03', 'CS1129', ''),
('L9011', 'Mechanical Engineering', 'In Progress', '2021-04-18', 'CF1432', ''),
('L9021', 'Human Science', 'In Progress', '2021-02-21', 'CD2911', '');

-- --------------------------------------------------------

--
-- Table structure for table `manageuser`
--

CREATE TABLE `manageuser` (
  `ID` varchar(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `usertype` varchar(11) NOT NULL,
  `phoneNum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manageuser`
--

INSERT INTO `manageuser` (`ID`, `name`, `password`, `usertype`, `phoneNum`) VALUES
('CB19031', 'Mariam', 'cb19031', 'Student', 139232314),
('CD19065', 'Nissa', 'cd19065', 'Admin', 199149300),
('CR0001', 'Manaf', 'cr0001', 'Coordinator', 136372082),
('EV0001', 'Siti', 'ev0001', 'Evaluator', 175732254),
('SV0001', 'Afiza', 'sv0001', 'Supervisor', 129232314);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `StudentID` text NOT NULL,
  `Rate_Description` text NOT NULL,
  `Rate_Scale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `StudentID`, `Rate_Description`, `Rate_Scale`) VALUES
(15, 'CA19111', 'Average', 5),
(0, 'CD19060', 'baik', 5);

-- --------------------------------------------------------

--
-- Table structure for table `rubric`
--

CREATE TABLE `rubric` (
  `RubricID` varchar(20) NOT NULL,
  `Rubric_detail` varchar(100) NOT NULL,
  `StudentID` varchar(20) NOT NULL,
  `CoordinatorID` varchar(20) DEFAULT NULL,
  `SupervisorID` varchar(20) NOT NULL,
  `EvaluatorID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rubric`
--

INSERT INTO `rubric` (`RubricID`, `Rubric_detail`, `StudentID`, `CoordinatorID`, `SupervisorID`, `EvaluatorID`) VALUES
('R0002', 'Fonts', 'CA1872', 'C1124', 'S6632', 'E0011'),
('R2011', 'Fonts', 'CD2911', 'C6720', 'S8100', 'E8872'),
('R5170', 'Fonts', 'CF1432', 'C0012', 'S0971', 'E9810'),
('R5421', 'Fonts', 'CS1129', 'C0112', 'S0001', 'E4177'),
('R9722', 'Fonts', 'CA1908', 'C5623', 'S0012', 'E4268');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StudentID` varchar(20) NOT NULL,
  `Student_Name` varchar(100) NOT NULL,
  `Student_Email` varchar(100) NOT NULL,
  `Student_Phone` int(20) NOT NULL,
  `Student_Info` varchar(100) NOT NULL,
  `Faculty_Code` varchar(20) NOT NULL,
  `EvaluatorID` varchar(20) NOT NULL,
  `WorkfileID` varchar(20) DEFAULT NULL,
  `SupervisorID` varchar(20) NOT NULL,
  `RubricID` varchar(20) DEFAULT NULL,
  `Faculty_Announcement` varchar(100) DEFAULT NULL,
  `IndustrialID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudentID`, `Student_Name`, `Student_Email`, `Student_Phone`, `Student_Info`, `Faculty_Code`, `EvaluatorID`, `WorkfileID`, `SupervisorID`, `RubricID`, `Faculty_Announcement`, `IndustrialID`) VALUES
('CA1872', 'Atiqah', 'atiqahJ@gmail.com', 127762488, 'First year', 'FK', 'E0011', 'W5611', 'S6632', 'R0002', '', 'I2311'),
('CA1908', 'Hanif', 'hanif42@gmail.com', 179526518, 'Second year', 'FK', 'E4268', 'W7611', 'S0012', 'R9722', '', 'I1011'),
('CD2911', 'Johari', 'johariS@yahoo.com', 198742112, 'Final year', 'HS', 'E8872', 'W0982', 'S8100', 'R2011', '', 'I0921'),
('CF1432', 'Ammar', 'ammarAF@yahoo.com', 107246681, 'Third year', 'ME', 'E9810', 'W0001', 'S0971', 'R5170', '', 'I0112'),
('CS1129', 'Hisham', 'hisham4@gmail.com', 187844221, 'Final year', 'SE', 'E4177', 'W0112', 'S0001', 'R5421', '', 'I9322');

-- --------------------------------------------------------

--
-- Table structure for table `studentlist`
--

CREATE TABLE `studentlist` (
  `ID` int(11) NOT NULL,
  `StudentID` varchar(10) NOT NULL,
  `Student_Name` varchar(100) NOT NULL,
  `Student_Email` varchar(20) NOT NULL,
  `Student_Phone` varchar(20) NOT NULL,
  `Student_Info` varchar(200) NOT NULL,
  `Joined_Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentlist`
--

INSERT INTO `studentlist` (`ID`, `StudentID`, `Student_Name`, `Student_Email`, `Student_Phone`, `Student_Info`, `Joined_Date`) VALUES
(1, 'CA1872', 'Atiqah', 'atiqahJ@gmail.com', '0127762488', 'First year', '2022-01-01 09:20:20'),
(2, 'CD2911', 'Johari', 'johariS@yahoo.com', '0198742112', 'Final year', '2022-01-01 09:20:20'),
(3, 'CS1129', 'Hisham', 'hisham4@gmail.com', '0187844221', 'Final year', '2022-01-01 09:20:20'),
(4, 'CA1908', 'Hanif', 'hanif42@gmail.com', '0179526518', 'Second year', '2022-01-01 09:20:20'),
(5, 'CF1432', 'Ammar', 'ammarAF@yahoo.com', '0107246681', 'Third year', '2022-01-01 09:20:20');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `SupervisorID` varchar(20) NOT NULL,
  `Supervisor_Name` varchar(100) NOT NULL,
  `Supervisor_Email` varchar(100) NOT NULL,
  `Supervisor_Phone` int(20) NOT NULL,
  `Faculty_Code` varchar(20) NOT NULL,
  `RubricID` varchar(20) NOT NULL,
  `WorkfileID` varchar(20) NOT NULL,
  `Attendence_list` varchar(100) NOT NULL,
  `StudentID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`SupervisorID`, `Supervisor_Name`, `Supervisor_Email`, `Supervisor_Phone`, `Faculty_Code`, `RubricID`, `WorkfileID`, `Attendence_list`, `StudentID`) VALUES
('S0001', 'Haikal', 'haikalakmar@gmail.com', 170112987, 'SE', 'R5421', 'W0112', 'Present', 'CS1129'),
('S0012', 'Zaim', 'zaim44@gmail.com', 107862110, 'FK', 'R9722', 'W7611', 'Present', 'CA1908'),
('S0971', 'Ghani', 'ghaniahmad@gmail.com', 167542001, 'ME', 'R5170', 'W0001', 'Present', 'CF1432'),
('S6632', 'Ali', 'aliakbar@gmail.com', 124527781, 'FK', 'R0002', 'W5611', 'Present', 'CA1872'),
('S8100', 'Akim', 'akimAF@yahoo.com', 198765219, 'HS', 'R2011', 'W0982', 'Present', 'CD2911');

-- --------------------------------------------------------

--
-- Table structure for table `thesis`
--

CREATE TABLE `thesis` (
  `ThesisID` varchar(20) NOT NULL,
  `Thesis_title` varchar(100) NOT NULL,
  `Thesis_Status` varchar(20) NOT NULL,
  `LogbookID` varchar(20) NOT NULL,
  `StudentID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thesis`
--

INSERT INTO `thesis` (`ThesisID`, `Thesis_title`, `Thesis_Status`, `LogbookID`, `StudentID`) VALUES
('T0111', 'OOP', 'In Progress', 'L9021', 'CD2911'),
('T0213', 'Web Engineering', 'In Progress', 'L0011', 'CA1872'),
('T0290', 'Data Analysis', 'In Progress', 'L8028', 'CS1129'),
('T0302', 'Data Application', 'In Progress', 'L2011', 'CA1908'),
('T0763', 'Java Script', 'In Progress', 'L9011', 'CF1432');

-- --------------------------------------------------------

--
-- Table structure for table `userlist`
--

CREATE TABLE `userlist` (
  `AdminID` varchar(11) NOT NULL,
  `CoordinatorID` varchar(11) NOT NULL,
  `StudentID` varchar(11) NOT NULL,
  `SupervisorID` varchar(11) NOT NULL,
  `EvaluatorID` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `workfile`
--

CREATE TABLE `workfile` (
  `WorkfileID` varchar(20) NOT NULL,
  `Workfile_date` date NOT NULL,
  `StudentID` varchar(20) NOT NULL,
  `LogbookID` varchar(20) NOT NULL,
  `ThesisID` varchar(20) NOT NULL,
  `EvaluatorID` varchar(20) NOT NULL,
  `SupervisorID` varchar(20) NOT NULL,
  `LecturerID` varchar(20) NOT NULL,
  `IndustrialID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workfile`
--

INSERT INTO `workfile` (`WorkfileID`, `Workfile_date`, `StudentID`, `LogbookID`, `ThesisID`, `EvaluatorID`, `SupervisorID`, `LecturerID`, `IndustrialID`) VALUES
('W0001', '2021-06-19', 'CF1432', 'L9011', 'T0763', 'E9810', 'S0971', 'Le0912', 'I0112'),
('W0112', '2021-09-22', 'CS1129', 'L8028', 'T0290', 'E4177', 'S0001', 'Le0002', 'I9322'),
('W0982', '2021-01-01', 'CD2911', 'L9021', 'T0111', 'E8872', 'S8100', 'Le5100', 'I0921'),
('W5611', '2021-02-11', 'CA1872', 'L0011', 'T0213', 'E0011', 'S6632', 'Le9910', 'I2311'),
('W7611', '2021-08-06', 'CA1908', 'L2011', 'T0302', 'E4268', 'S0012', 'Le0021', 'I1011');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`aID`);

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD PRIMARY KEY (`CoordinatorID`);

--
-- Indexes for table `evaluator`
--
ALTER TABLE `evaluator`
  ADD PRIMARY KEY (`EvaluatorID`),
  ADD KEY `IndustrialID` (`IndustrialID`),
  ADD KEY `WorkfileID` (`WorkfileID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`Faculty_Code`);

--
-- Indexes for table `industrial`
--
ALTER TABLE `industrial`
  ADD PRIMARY KEY (`IndustrialID`),
  ADD KEY `EvaluatorID` (`EvaluatorID`);

--
-- Indexes for table `logbook`
--
ALTER TABLE `logbook`
  ADD PRIMARY KEY (`LogbookID`),
  ADD KEY `StudentID` (`StudentID`);

--
-- Indexes for table `manageuser`
--
ALTER TABLE `manageuser`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rubric`
--
ALTER TABLE `rubric`
  ADD PRIMARY KEY (`RubricID`),
  ADD KEY `SupervisorID` (`SupervisorID`),
  ADD KEY `CoordinatorID` (`CoordinatorID`),
  ADD KEY `rubricStudentID` (`StudentID`),
  ADD KEY `rubricEvaluatorID` (`EvaluatorID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StudentID`),
  ADD KEY `studentEvaluatorID` (`EvaluatorID`),
  ADD KEY `studentIndustrialID` (`IndustrialID`),
  ADD KEY `studentWorkfileID` (`WorkfileID`),
  ADD KEY `studSupervisorID` (`SupervisorID`),
  ADD KEY `studFaculty_Code` (`Faculty_Code`),
  ADD KEY `RubricID` (`RubricID`);

--
-- Indexes for table `studentlist`
--
ALTER TABLE `studentlist`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`SupervisorID`),
  ADD KEY `supervisorFaculty_Code` (`Faculty_Code`),
  ADD KEY `supervisorRubricID` (`RubricID`),
  ADD KEY `supervisorStudentID` (`StudentID`),
  ADD KEY `supervisorWorkfileID` (`WorkfileID`);

--
-- Indexes for table `thesis`
--
ALTER TABLE `thesis`
  ADD PRIMARY KEY (`ThesisID`),
  ADD KEY `thesis_LogbookID` (`LogbookID`),
  ADD KEY `thesis_StudentID` (`StudentID`);

--
-- Indexes for table `workfile`
--
ALTER TABLE `workfile`
  ADD PRIMARY KEY (`WorkfileID`),
  ADD KEY `workfile_EvaluatorID` (`EvaluatorID`),
  ADD KEY `workfile_IndustrialID` (`IndustrialID`),
  ADD KEY `workfile_LogbookID` (`LogbookID`),
  ADD KEY `workfile_StudentID` (`StudentID`),
  ADD KEY `workfile_SupervisorID` (`SupervisorID`),
  ADD KEY `workfile_ThesisID` (`ThesisID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `aID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `studentlist`
--
ALTER TABLE `studentlist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `evaluator`
--
ALTER TABLE `evaluator`
  ADD CONSTRAINT `IndustrialID` FOREIGN KEY (`IndustrialID`) REFERENCES `industrial` (`IndustrialID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `WorkfileID` FOREIGN KEY (`WorkfileID`) REFERENCES `workfile` (`WorkfileID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `industrial`
--
ALTER TABLE `industrial`
  ADD CONSTRAINT `EvaluatorID` FOREIGN KEY (`EvaluatorID`) REFERENCES `evaluator` (`EvaluatorID`);

--
-- Constraints for table `logbook`
--
ALTER TABLE `logbook`
  ADD CONSTRAINT `StudentID` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StudentID`);

--
-- Constraints for table `rubric`
--
ALTER TABLE `rubric`
  ADD CONSTRAINT `CoordinatorID` FOREIGN KEY (`CoordinatorID`) REFERENCES `coordinator` (`CoordinatorID`),
  ADD CONSTRAINT `SupervisorID` FOREIGN KEY (`SupervisorID`) REFERENCES `supervisor` (`SupervisorID`),
  ADD CONSTRAINT `rubricEvaluatorID` FOREIGN KEY (`EvaluatorID`) REFERENCES `evaluator` (`EvaluatorID`),
  ADD CONSTRAINT `rubricStudentID` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StudentID`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `RubricID` FOREIGN KEY (`RubricID`) REFERENCES `rubric` (`RubricID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `studFaculty_Code` FOREIGN KEY (`Faculty_Code`) REFERENCES `faculty` (`Faculty_Code`),
  ADD CONSTRAINT `studSupervisorID` FOREIGN KEY (`SupervisorID`) REFERENCES `supervisor` (`SupervisorID`),
  ADD CONSTRAINT `studentEvaluatorID` FOREIGN KEY (`EvaluatorID`) REFERENCES `evaluator` (`EvaluatorID`),
  ADD CONSTRAINT `studentIndustrialID` FOREIGN KEY (`IndustrialID`) REFERENCES `industrial` (`IndustrialID`),
  ADD CONSTRAINT `studentWorkfileID` FOREIGN KEY (`WorkfileID`) REFERENCES `workfile` (`WorkfileID`);

--
-- Constraints for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD CONSTRAINT `supervisorFaculty_Code` FOREIGN KEY (`Faculty_Code`) REFERENCES `faculty` (`Faculty_Code`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `supervisorRubricID` FOREIGN KEY (`RubricID`) REFERENCES `rubric` (`RubricID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `supervisorStudentID` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StudentID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `supervisorWorkfileID` FOREIGN KEY (`WorkfileID`) REFERENCES `workfile` (`WorkfileID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `supervisor_StudentID` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StudentID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `supervisor_WorkfileID` FOREIGN KEY (`WorkfileID`) REFERENCES `workfile` (`WorkfileID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `thesis`
--
ALTER TABLE `thesis`
  ADD CONSTRAINT `thesis_LogbookID` FOREIGN KEY (`LogbookID`) REFERENCES `logbook` (`LogbookID`),
  ADD CONSTRAINT `thesis_StudentID` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StudentID`);

--
-- Constraints for table `workfile`
--
ALTER TABLE `workfile`
  ADD CONSTRAINT `workfile_EvaluatorID` FOREIGN KEY (`EvaluatorID`) REFERENCES `evaluator` (`EvaluatorID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `workfile_IndustrialID` FOREIGN KEY (`IndustrialID`) REFERENCES `industrial` (`IndustrialID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `workfile_LogbookID` FOREIGN KEY (`LogbookID`) REFERENCES `logbook` (`LogbookID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `workfile_StudentID` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StudentID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `workfile_SupervisorID` FOREIGN KEY (`SupervisorID`) REFERENCES `supervisor` (`SupervisorID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `workfile_ThesisID` FOREIGN KEY (`ThesisID`) REFERENCES `thesis` (`ThesisID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
