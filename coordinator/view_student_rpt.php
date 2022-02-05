<?php
require_once "databaseFYP.php";
session_start();

$sql1 = "SELECT * FROM student WHERE SupervisorID IS NOT NULL";
$sql2 = "SELECT * FROM student WHERE SupervisorID IS NULL";
$sql3 = "SELECT * FROM student WHERE EvaluatorID IS NOT NULL";
$sql4 = "SELECT * FROM student WHERE EvaluatorID IS NULL";
if($result1 = mysqli_query($conn, $sql1)){ // assigned supervisor
    $assignSup = mysqli_num_rows($result1); 
}
if($result2 = mysqli_query($conn, $sql2)){  // not yet assigned supervisor
    $notassignSup = mysqli_num_rows($result2);
}
if($result3 = mysqli_query($conn, $sql3)){  // assigned evaluator
    $assignEva = mysqli_num_rows($result3);
}
if($result4 = mysqli_query($conn, $sql4)){ // not yet assigned evaluator
    $notassignEva = mysqli_num_rows($result4);
}

$student_query = "SELECT * FROM student";
$total = mysqli_query($conn,$student_query);
$t_stud = mysqli_num_rows($total);

$supervisor_query = "SELECT * FROM supervisor";
$total = mysqli_query($conn,$supervisor_query);
$t_supv = mysqli_num_rows($total);

$evaluator_query = "SELECT * FROM evaluator";
$total = mysqli_query($conn,$evaluator_query);
$t_eva = mysqli_num_rows($total);

$industrial_query = "SELECT * FROM industrial";
$total = mysqli_query($conn,$industrial_query);
$t_ind = mysqli_num_rows($total);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Summary Report</title>
        <meta name="description" content="FYP management system for coordinator">
		<meta name="author" content="Bryan Tan CB20081">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./css/coordinator.css">
        <style>
            .row {
                display: flex;
                margin-left:-5px;
                margin-right:-5px;
            }

            .column {
                flex: 50%;
                padding: 5px;
            }

            table {
                border-collapse: collapse;
                border-spacing: 0;
                width: 70%;
                border: 1px solid black;
            }

            th, td {
                text-align: left;
                padding: 16px;
                border: 1px solid black;
                text-align: center;
                width: 500px;
            }
            th{
                background-color: #ccc;
            }
            tr:nth-child(even) {
                background-color: wheat;
            }
        </style>
    </head>
    <body>
        <header>
            <img src= ./img/logo1.png width=15%>
            <h1>StudFYP</h1>
        </header>
        <nav>
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
            <a href="student-evaluator.php">Student-Evaluator List</a>
            <a href="add-student.php">Assign Student Supervisor and Evaluator</a>
            <a class="active" href="view_student_rpt.php">Summary Report</a>
        </div>
        </nav>
            
            <main>
            <center>
            <h3>Summary Report</h3><br>
            <div align="center" class="row">
                <div class="column">
                    <table>
                        <tr>
                            <th>Number of Student<br> Assigned with Supervisor</th>
                            <th>Number of Student<br> Not Assigned with Supervisor</th>
                        </tr>
                        <tr>
                            <td><?php echo $assignSup; ?></td>
                            <td><?php echo $notassignSup; ?></td>
                        </tr>
                        
                    </table>
                </div>
                <div class="column">
                    <table>
                        <tr>
                            <th>Number of Student<br> Assigned with Evaluator</th>
                            <th>Number of Student<br> Not Assigned with Evaluator</th>
                        </tr>
                        <tr>
                            <td><?php echo $assignEva; ?></td>
                            <td><?php echo $notassignEva; ?></td>
                        </tr>
                        
                    </table>
                </div>
            </div>
            <br><br>
            <div>
                <p>
                <table>
                    <tr>
                        <td>Total number of student:</td>  
                        <td><?php echo $t_stud; ?><br></td>
                    </tr>
                    <tr>
                        <td>Total number of supervisor:</td> 
                        <td><?php echo $t_supv; ?><br></td>
                    </tr>
                    <tr>
                        <td>Total number of evaluator:</td>
                        <td><?php echo $t_eva; ?><br></td>
                    </tr>
                    <tr>
                        <td>Total number of industrial: </td>
                        <td><?php echo $t_ind; ?><br></td>
                    </tr>
                </table>
                    
                </p>
            </div>
            </center>
            </main>
            <?php mysqli_close($conn); ?>
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