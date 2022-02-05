<?php
include "databaseFYP.php";
session_start();

$status = "";
if (isset($_POST['add'])) {
    $RubricID = $_POST['RubricID'];
    $Rubric_detail = $_POST['Rubric_detail'];
    $StudentID = $_POST['StudentID'];
    $SupervisorID = $_POST['SupervisorID'];
    $EvaluatorID = $_POST['EvaluatorID'];

    $sql = "INSERT IGNORE INTO rubric (`RubricID`, `Rubric_detail`, `StudentID`, `SupervisorID`, `EvaluatorID`) VALUES ('$RubricID','$Rubric_detail','$StudentID','$SupervisorID','$EvaluatorID')";
    
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $status = "Rubric update successfully.";
}      
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Assign Rubric</title>
	<meta name="description" content="FYP management system for coordinator">
	<meta name="author" content="Bryan Tan CB20081">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/coordinator.css">
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
            <a href="rubric_list.php">Rubric List</a>
            <a class="active" href="assign_rubric.php">Assign Rubric</a>
        </div>
        <main>
        <center>
            <h3>Assign Rubric Details</h3><br><br>
            
            <form name="frmUser" action="" method="POST">
                <table>
                    <tr>
                        <th>Rubric ID:</th>
                        <td><input type="text" name="RubricID" placeholder="Rubric ID" required></td>
                    </tr>
                    <tr>
                        <th>Rubric Details:</th>
                        <td><input type="text" name="Rubric_detail" placeholder="Rubric detail" required></td>
                    </tr>
                    <tr>
                        <th>Student ID:</th>
                        <td><input type="text" name="StudentID" placeholder="Student ID" required></td>
                    </tr>
                    <tr>
                        <th>Supervisor ID:</th>
                        <td><input type="text" name="SupervisorID" placeholder="Supervisor ID" required ></td>
                    </tr>
                    <tr>
                        <th>Evaluator ID:</th>
                        <td><input type="text" name="EvaluatorID" placeholder="Evaluator ID" required></td>
                    </tr>
                    <tr style="text-align: center;">
                        <td><input type="submit" name="add" value="Add"></td>
                        <td><input type="reset" name="reset" value="Reset"></td>
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