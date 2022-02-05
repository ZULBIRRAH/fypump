<?php
require_once('databaseFYP.php');
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <title>Student Supervisor List</title>
        <meta name="description" content="FYP management system">
		<meta name="author" content="Bryan Tan CB20081">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./css/coordinator.css">
    </head>
    <style>
        table{
            width: 90%;
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
            <h3 align="center">Student-Supervisor List</h3><br>
            <main>
                <form action="search_result_supervisor.php" method="POST">
                <div class="search-bar">
                    <input type="text" name="output" placeholder="Search Student ID">
                    <button type="submit" name="search">Search</button><br><br>
                </div>
                    <table align="center" class="stud-table">
                        <tr>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Faculty</th>
                            <th>Supervisor ID</th>
                            <th>Supervisor Name</th>
                            <th>Industrial ID</th>
                            <th>Industry Name</th>
                            <th colspan="3">Actions</th>
                        </tr>
        
                        <?php
                        
                        $sql= "SELECT student.StudentID, student.Student_Name, student.Faculty_Code, supervisor.SupervisorID, supervisor.Supervisor_Name, industrial.IndustrialID, industrial.Industry_Name 
                        FROM student
                        left join supervisor on student.SupervisorID = supervisor.SupervisorID
                        left join evaluator on student.EvaluatorID = evaluator.EvaluatorID
                        left join industrial on student.IndustrialID = industrial.IndustrialID
                        ORDER BY student.StudentID asc;";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td><?php echo $row['StudentID']; ?></td>
                                <td><?php echo $row['Student_Name']; ?></td>
                                <td><?php echo $row['Faculty_Code']; ?></td>
                                <td><?php echo $row['SupervisorID']; ?></td>
                                <td><?php echo $row['Supervisor_Name']; ?></td>
                                <td><?php echo $row['IndustrialID']; ?></td>
                                <td><?php echo $row['Industry_Name']; ?></td>
                                <td><a href="view_student.php?StudentID=<?php echo $row['StudentID']; ?>">View</a></td>
                                <td><a href="edit_supervisor.php?StudentID=<?php echo $row['StudentID']; ?>" >Edit</a></td>
                                <td><a href="delete_supervisor.php?StudentID=<?php echo $row['StudentID']; ?>" onclick="return confirm('Are you sure you want to delete this row?');">Delete</a></td>
                            </tr>
                        <?php } ?>
                        
                    </table>
                    <?php mysqli_close($conn) ?>
                </form>
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