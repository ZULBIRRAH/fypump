<?php
include ("databaseFYP.php");
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <title>Rubric</title>
        <meta name="description" content="FYP management system">
		<meta name="author" content="Bryan Tan CB20081">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./css/coordinator.css">
        <style>
            table, th, td{
                border: 1px solid black;
                border-collapse: collapse;
            }
            table{
                width: 80%;
            }
            td{
                height: 50px;
            }
            .id{
                width: 50px;
            }
        </style>
    </head>
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
            <a href="view_progress_listing.php">View Progress Listing</a>
            <a class="active" href="rubric_list.php">Rubric</a>
            <a href="" style="float:right">Logout</a>
        </div>
        <div class="vertical-menu">
            <a class="active" href="rubric_list.php">Rubric List</a>
            <a href="assign_rubric.php">Assign Rubric</a>
        </div>
            <main>
                <center>
                <h3>Rubric List</h3>
                <table class="stud-table">
                    <?php 
                    $count=1;
                    $sql = "SELECT * FROM rubric";
                    if($result = mysqli_query($conn, $sql)) {
                        if(mysqli_num_rows($result)>0) {
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th></th>";
                                    echo "<th>Rubric ID</th>";
                                    echo "<th>Rubric Detail</th>";
                                    echo "<th>Student ID</th>";
                                    echo "<th>Supervisor ID</th>";
                                    echo "<th>Evaluator ID</th>";
                                    echo "<th colspan='3'>Actions</th>";
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                    echo "<td>" . $count . "</td>";
                                    echo "<td>" . $row['RubricID'] . "</td>";
                                    echo "<td>" . $row['Rubric_detail'] . "</td>";
                                    echo "<td>" . $row['StudentID'] . "</td>";
                                    echo "<td>" . $row['SupervisorID'] . "</td>";
                                    echo "<td>" . $row['EvaluatorID'] . "</td>";
                                    echo "<td>";
                                    echo '<a href="view_rubric.php?RubricID='.$row['RubricID'].'">View</a>';
                                    echo "</td>";
                                    echo "<td>";
                                    echo '<a href="edit_rubric.php?RubricID='.$row['RubricID'].'">Edit</a>';
                                    echo "</td>";
                                    echo "<td>";
                                    echo '<a href="delete_rubric.php?RubricID='.$row['RubricID'].'">Delete</a>';
                                    echo "</td>";
                                echo "</tr>";
                                $count++;
                            }
                            echo "</tbody>";
                            // free result
                            mysqli_free_result($result);
                        } else {
                            echo '<em>No announcement is created at the moment.</em>';
                        }
                    } else {
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                    mysqli_close($conn);
                    ?>
                </table>
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