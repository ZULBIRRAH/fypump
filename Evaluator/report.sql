CREATE TABLE `report` (
  `WorkfileID` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `Student_Name` varchar(20) NOT NULL,
  `Evaluation_Form` varchar(20) NOT NULL,
  `Comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `report` (`WorkfileID`, `Student_Name`, `Evaluation_Form`, `Comment`) VALUES
(1, 'W5611', 'Atiqah', 'Grade A', 'KEEP IT UP');