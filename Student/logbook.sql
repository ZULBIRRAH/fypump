CREATE TABLE `logbook` (
  `LogbookID` varchar(20) NOT NULL,
  `Logbook_Title` varchar(100) NOT NULL,
  `Logbook_Status` varchar(20) NOT NULL,
  `Logbook_Date` date NOT NULL,
  `StudentID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



 

INSERT INTO `logbook` (`LogbookID`, `Logbook_Title`, `Logbook_Status`, `Logbook_Date`, `StudentID`) VALUES
('L0011', 'Computer', 'In Progress', '2021-11-01', 'CA1872'),
('L2011', 'Computer', 'In Progress', '2021-05-04', 'CA1908'),
('L8028', 'Software Engineering', 'In Progress', '2021-05-03', 'CS1129'),
('L9011', 'Mechanical Engineering', 'In Progress', '2021-04-18', 'CF1432'),
('L9021', 'Human Science', 'In Progress', '2021-02-21', 'CD2911'); 



 

