
CREATE TABLE `Logbook` (
  `LogbookID` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `Logbook_Title` varchar(100) NOT NULL,
  `Logbook_Status` varchar(20) NOT NULL
);

 
INSERT INTO `logbook` (`LogbookID`,`Logbook_Title`,`Logbook_status`)
VALUES (1 , 'L0011', 'Computer', 'In Progress'),
       (2 , 'L9021', 'Human Science', 'In Progress');   

 