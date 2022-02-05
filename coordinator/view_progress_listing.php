<?php
include ("databaseFYP.php");
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <title>Progress List</title>
        <meta name="description" content="FYP management system">
		<meta name="author" content="Bryan Tan CB20081">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./css/coordinator.css">
    </head>
    <style>
        table{
            width: 80%;
        }
        table, th, td{
            border: 1px solid #000;
            border-collapse: collapse;
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
                <a href="student-supervisor.php">Student</a>
                <a href="announcement.php">Announcement</a>
                <a class="active" href="view_progress_listing.php">View Progress Listing</a>
                <a href="rubric_list.php">Rubric</a>
                <a href="" style="float:right">Logout</a>
            </div>
            <div class="vertical-menu">
                <a class="active" href="view_progress_listing.php">View Student Progress List</a>
            </div>
        <main>
        <center>
            <h3>Student Progress List</h3>
            <table class="stud-table">
                <tr>
                    <th></th>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Faculty</th>
                    <th>Student Workfile</th>
                </tr>
                
                <?php
                $count=1;
                $sql = "SELECT w.WorkfileID, w.StudentID, s.Student_Name, s.Faculty_Code
                FROM workfile w, student s
                WHERE s.StudentID = w.StudentID
                ORDER BY w.StudentID";

                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td align="center"><?php echo $count; ?></td>
                        <td><?php echo $row['StudentID']; ?></td>
                        <td><?php echo $row['Student_Name']; ?></td>
                        <td><?php echo $row['Faculty_Code']; ?></td>
                        <td align="center"><a href="workfile.php?StudentID=<?php echo $row['StudentID']; ?>">View workfile</a></td>
                    </tr>
                <?php $count++; } ?>
            </table>
            <?php mysqli_close($conn); ?>
        </center>
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