<?php
include "databaseFYP.php";
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <title>Student Evaluator List</title>
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
            <a href="student-supervisor.php">Student-Supervisor List</a>
            <a class="active" href="student-evaluator.php">Student-Evaluator List</a>
            <a href="add-student.php">Assign Student Supervisor and Evaluator</a>
            <a href="view_student_rpt.php">Summary Report</a>
        </div>
            <h3 align="center">Student-Evaluator List</h3><br>
            <main>
                <form name="frmUser" action="search_result.php" method="POST">
                <div class="search-bar">
                    <input type="text" name="output" placeholder="Search Student ID">
                    <button type="submit" name="search">Search</button><br><br>
                </div>
                    <table align="center" class="stud-table">
                        <tr>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Faculty</th>
                            <th>Evaluator ID</th>
                            <th>Evaluator Name</th>
                            <th>Industrial ID</th>
                            <th>Industry Name</th>
                            <th colspan="3">Actions</th>
                        </tr>
        
                        <?php
                        $query = $_POST["output"];
                        $result = mysqli_query($conn, "SELECT student.StudentID, student.Student_Name, student.Faculty_Code, evaluator.EvaluatorID, evaluator.Evaluator_Name, industrial.IndustrialID, industrial.Industry_Name
                        FROM student
                        INNER JOIN evaluator ON student.EvaluatorID = evaluator.EvaluatorID
                        INNER JOIN industrial ON student.IndustrialID = industrial.IndustrialID
                        WHERE student.StudentID LIKE '%".$query."%'") or die(mysqli_error($conn));
                        if(mysqli_num_rows($result) > 0){ // if one or more rows are returned do following
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                    echo "<td>".$row['StudentID']."</td>";
                                    echo "<td>".$row['Student_Name']."</td>";
                                    echo "<td>".$row['Faculty_Code']."</td>";
                                    echo "<td>".$row['EvaluatorID']."</td>";
                                    echo "<td>".$row['Evaluator_Name']."</td>";
                                    echo "<td>".$row['IndustrialID']."</td>";
                                    echo "<td>".$row['Industry_Name']."</td>";
                                    echo "<td>";
                                        echo '<a href="view_student.php?StudentID='.$row['StudentID'].'">View</a>';
                                    echo "</td>";
                                    echo "<td>";
                                        echo '<a href="edit_evaluator.php?StudentID='.$row['StudentID'].'">Edit</a>';
                                    echo "</td>";
                                    echo "<td>";
                                        echo '<a href="delete_evaluator.php?StudentID='.$row['StudentID'].'">Delete</a>';
                                    echo "</td>";
                                echo "</tr>";
                            }
                        }
                        else{ // if there is no matching rows 
                            echo "No results found";
                        }
                        ?>
                        
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