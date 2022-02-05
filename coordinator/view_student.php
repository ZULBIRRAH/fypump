<?php
require_once "databaseFYP.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Student Details</title>
	<meta name="description" content="FYP management system for coordinator">
	<meta name="author" content="Bryan Tan CB20081">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./css/coordinator.css">
</head>
<style>
        table{
            width: 50%;
        }
        table, th, td{
            border: 1px solid #000;
            border-collapse: collapse;
        }
        .search-bar{
            margin-left: 100px;
        }
</style>
    <body>
        <header>
            <img src= ./img/logo1.png width=15%>
            <h1>StudFYP</h1>
        </header>
        <br>
        <div class="navbar_mid">
            <a href="coordinatorPage.php">Home</a>
            <a class="active" href="student-supervisor.php">Student</a>
            <a href="announcement.php">Announcement</a>
            <a href="view_progress_listing.php">View Progress Listing</a>
            <a href="rubric_list.php">Rubric</a>
            <a href="" style="float:right">Logout</a>
        </div>
        <div class="vertical-menu">
            <a class="active" href="student-supervisor.php">Student-Supervisor List</a>
            <a href="student-evaluator.php">Student-Evaluator List</a>
            <a href="add-student.php">Assign Student Supervisor and Evaluator</a>
            <a href="view_student_rpt.php">Summary Report</a>
        </div>
		<main>
			<br><br>
			<h3 align="center">Student Details</h3>
		<?php

		$res = mysqli_query($conn, 
		"SELECT student.StudentID, student.Student_Name, student.Student_Email, student.Student_Phone, student.Student_Info, student.Faculty_Code, supervisor.SupervisorID, supervisor.Supervisor_Name, industrial.IndustrialID, industrial.Industry_Name, evaluator.EvaluatorID, evaluator.Evaluator_Name
		FROM student
		left join supervisor on student.supervisorID = supervisor.supervisorID
		left join industrial on student.IndustrialID = industrial.IndustrialID
		left join evaluator on student.EvaluatorID = evaluator.EvaluatorID
		WHERE student.StudentID= '". $_GET['StudentID']."'") or die(mysqli_error($conn));
		while($row = mysqli_fetch_array($res)) {  ?>
		<table align="center" class="stud-table">
		<tr>
			<td><b>Student ID      :</b></td>
			<td><?php echo $row["StudentID"]; ?></td>
		</tr>
		<tr>
			<td><b>Student Name    :</b></td>
			<td><?php echo $row["Student_Name"]; ?></td>
		</tr>
		<tr>
			<td><b>Student Email   :</b></td>
			<td><?php echo $row["Student_Email"]; ?></td>
		</tr>
		<tr>
			<td><b>Student Phone   :</b></td>
			<td><?php echo $row["Student_Phone"]; ?></td>
		</tr>
		<tr>
			<td><b>Student Info    :</b></td>
			<td><?php echo $row["Student_Info"]; ?></td>
		</tr>
		<tr>
			<td><b>Faculty         :</b></td>
			<td><?php echo $row["Faculty_Code"]; ?></td>
		</tr>
		<tr>
			<td><b>Supervisor ID   :</b></td>
			<td><?php echo $row["SupervisorID"]; ?></td>
		</tr>
		<tr>
			<td><b>Supervisor Name :</b></td>
			<td><?php echo $row["Supervisor_Name"]; ?></td>
		</tr>
		<tr>
			<td><b>Industrial ID   :</b></td>
			<td><?php echo $row["IndustrialID"]; ?></td>
		</tr>
		<tr>
			<td><b>Industry Name   :</b></td>
			<td><?php echo $row["Industry_Name"]; ?></td>
		</tr>
		<tr>
			<td><b>Evaluator ID    :</b></td>
			<td><?php echo $row["EvaluatorID"]; ?></td>
		</tr>
		<tr>
			<td><b>Evaluator Name  :</b></td>
			<td><?php echo $row["Evaluator_Name"]; ?></td>
		</tr>
		</table>
		<?php } ?>
		<div align="center">
			<br><input type="button" value="Back" onclick="window.location.href='student-supervisor.php'">
		</div>
		<?php mysqli_close($conn); ?>
		</main>

<footer>
	<div class="footer">
		<a href="coordinatorPage.php">Home</a> |
		<a href="">Helps</a> |
		<a href="">Privacy</a> |
		<a href="">Logout</a> 
		<br>
		<h5>Copyright 2021; All Rights Reserved.</h5>
	</div>
</footer>
</body>
</html>