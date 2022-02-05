<?php
session_start();

include("databaseFYP.php");

$status = "";

if (isset($_POST['add'])) {
    $StudentID = $_POST['StudentID'];
    $Student_Name = $_POST['Student_Name'];
    $Student_Email = $_POST['Student_Email'];
    $Student_Phone = $_POST['Student_Phone'];
    $Student_Info = $_POST['Student_Info'];
    $Faculty_Code = $_POST['Faculty_Code'];
    $SupervisorID = implode(',',$_POST['SupervisorID']);
    $IndustrialID = $_POST['IndustrialID'];
    $EvaluatorID = $_POST['EvaluatorID'];

    $sql = "INSERT INTO `student` (`StudentID`, `Student_Name`, `Student_Email`, `Student_Phone`, `Student_Info`, `Faculty_Code`, `SupervisorID`, `IndustrialID`, `EvaluatorID`)
    VALUES ('$StudentID', '$Student_Name', '$Student_Email', '$Student_Phone', '$Student_Info', '$Faculty_Code', '$SupervisorID', '$IndustrialID', '$EvaluatorID')";
    
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $status="New Record Inserted Successfully.";

}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Assign Student</title>
        <meta name="description" content="FYP management system for coordinator">
		<meta name="author" content="Bryan Tan CB20081">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/coordinator.css">
    </head>
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
            <a href="student-evaluator.php">Student-Evaluator List</a>
            <a class="active" href="add-student.php">Assign Student Supervisor and Evaluator</a>
            <a href="view_student_rpt.php">Summary Report</a>
        </div>
            <main>
            <center>
                <h3>Assign Student Supervisor and Evaluator</h3><br>
                <form name="frmUser" action="" method="POST">
                    <table>
                        <tr>
                            <td>Student ID: </td>
                            <td><input type="text" name="StudentID" placeholder="Enter Student ID" required></td>
                        </tr>
                        <tr>
                            <td>Student Name: </td>
                            <td><input type="text" name="Student_Name" placeholder="Enter Student Name" required></td>
                        </tr>
                        <tr>
                            <td>Student Email: </td>
                            <td><input type="email" name="Student_Email" placeholder="Enter Student Email" required></td>
                        </tr>
                        <tr>
                            <td>Student Phone: </td>
                            <td><input type="tel" name="Student_Phone" placeholder="Enter Student Phone" required></td>
                        </tr>
                        <tr>
                            <td>Student Info: </td>
                            <td><input type="text" name="Student_Info" placeholder="Enter Student Info" required></td>
                        </tr>
                        <tr>
                            <td>Faculty Code: </td>
                            <td><input type="text" name="Faculty_Code" placeholder="Enter Faculty Code" required></td>
                        </tr>
                        <tr>
                            <td>Supervisor ID: </td>
                            <td><input type="text" name="SupervisorID[]" placeholder="Enter Supervisor ID" required ></td>
                        </tr> 
                        <tr>
                            <td>Industrial ID: </td>
                            <td><input type="text" name="IndustrialID" placeholder="Enter Industrial ID" required ></td>
                        </tr>
                        <tr>
                            <td>Evaluator ID: </td>
                            <td><input type="text" name="EvaluatorID" placeholder="Enter Evaluator ID" required ></td>
                        </tr>
                        <tr align="center">
                            <td><input type="submit" name="add" value="Add" > </td>
                            <td><input type="reset" name="reset" value="Reset" ></td>
                        </tr>
                    </table>
                </form>
                <p style="color: green;"><?php echo $status; ?></p>
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