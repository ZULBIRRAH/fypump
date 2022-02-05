<?php
include ("databaseFYP.php");
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <title>Student Workfile</title>
        <meta name="description" content="FYP management system">
		<meta name="author" content="Bryan Tan CB20081">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./css/coordinator.css">
    </head>
    <style>
        body {
                height: 100%;
                width: 100%;
                min-height: 400px;
                margin-bottom: 100px;
                clear: both;
            }
        table{
            width: 60%;
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
        
        <center>
            <h3>Student Workfile</h3>
            <?php
            $sql = mysqli_query($conn, "SELECT workfile.StudentID, student.Student_Name FROM workfile left join student on workfile.StudentID = student.StudentID Where workfile.StudentID ='". $_GET['StudentID']."' ") or die(mysqli_error($conn));
            while($name = mysqli_fetch_array($sql)) { ?>
                <?php echo "Student Name:". " " .$name['Student_Name']; ?>
            <?php } ?>
            
            <h4>Logbook</h4>
            <div>
                <table class="stud-table">
                    <?php
                    $count=1;
                    $sql = mysqli_query($conn, "SELECT * FROM logbook WHERE StudentID = '". $_GET['StudentID']."'");
                    while($row = mysqli_fetch_array($sql)) { ?>
                        <tr>
                            <th></th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $row['Logbook_Title']; ?></td>
                            <td><?php echo $row['Logbook_Status']; ?></td>
                            <td><?php echo $row['Logbook_Date']; ?></td>
                        </tr>
                    <?php $count++; } ?>
                </table>
            </div>
            <br><br>
            <h4>Thesis</h4>
            <div>
                <table class="stud-table">
                    <?php
                    $count=1;
                    $sql = mysqli_query($conn, "SELECT * FROM thesis WHERE StudentID = '". $_GET['StudentID']."'");
                    while($row = mysqli_fetch_array($sql)) { ?>
                        <tr>
                            <th></th>
                            <th>Title</th>
                            <th>Status</th>
                        </tr>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $row['Thesis_title']; ?></td>
                            <td><?php echo $row['Thesis_Status']; ?></td>
                        </tr>
                    <?php $count++; } ?>
                </table>
                <br><br>
            <h4>Feedback from Evaluator</h4>
            <div>
                <table class="stud-table">
                    <?php
                    $sql = "SELECT workfile.EvaluatorID, evaluator.Evaluator_Name, evaluator.Evaluation_Form FROM workfile left join evaluator on workfile.EvaluatorID = evaluator.EvaluatorID WHERE StudentID = '". $_GET['StudentID']."'";
                    if($result = mysqli_query($conn, $sql)) {
                        while($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                                echo "<th>"."Evaluator ID"."</th>";
                                echo "<th>"."Evaluator Name"."</th>";
                                echo "<th>"."Evaluation Form "."</th>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>". $row['EvaluatorID']."</td>";
                                echo "<td>". $row['Evaluator_Name']."</td>";
                                echo "<td>". $row['Evaluation_Form']."</td>";
                            echo "</tr>";
                        }
                        mysqli_free_result($result);
                    } else {
                        die(mysqli_error($conn));
                    }
                    ?>
                </table>
                <br><br>
                <button onclick="window.location.href='view_progress_listing.php'">Back</button>
            </div>


            <?php mysqli_close($conn); ?>
        </center>
        
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