
CREATE TABLE `EvaluatorList` (
  `EvaluatorID` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `Evaluator_Name` varchar(100) NOT NULL,
  `Evaluation_Form` varchar(20) NOT NULL,  
  `Student_Info` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




INSERT INTO `EvaluatorList` (`ID`, `EvaluatorID`, `Evaluator_Name`, `Evaluation_Form`, `Student_Info`) VALUES

		('E0011', 'Manaf', 'Grade A', 'First year'),
		('E8872', 'Delaila', 'Grade A', 'Final year'),
		('E4177', 'Ariff', 'Grade B', 'Final year'),
		('E4268', 'Kamariah', 'Grade A', 'Second year'),
		('E9810', 'Kaisara', 'Grade A', 'Third year');