<?php
include "databaseFYP.php";
session_start();

$RubricID = $_GET['RubricID'];
if(count($_POST)>0) {
    mysqli_query($conn, "UPDATE rubric SET RubricID='".$_POST['RubricID']."', Rubric_detail='".$_POST['Rubric_detail']."', StudentID='".$_POST['StudentID']."', SupervisorID='".$_POST['SupervisorID']."', EvaluatorID='".$_POST['EvaluatorID']."' WHERE RubricID='".$_POST['RubricID']."'");
    $message = "Rubric update successfully";
}
$result = mysqli_query($conn, "SELECT * FROM rubric WHERE RubricID='". $_GET['RubricID']."'"); 
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Edit Rubric</title>
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
            <a class="active" href="rubric_list.php">Rubric List</a>
            <a href="assign_rubric.php">Assign Rubric</a>
        </div>
        <main>
            <center>
                <h3>Edit Rubric Details</h3><br>
            
            <form action="" method="POST">
            <div><?php if(isset($message)) { echo "<script>alert('".$message ."')</script>" ; } ?></div>
                <b>Rubric ID:</b><br>
                <input type="text" name="RubricID" placeholder="Rubric ID" value="<?php echo $row["RubricID"]; ?>">
                <br><br>
                <b>Rubric Details:</b><br>
                <input type="text" name="Rubric_detail" placeholder="Rubric detail" value="<?php echo $row["Rubric_detail"]; ?>">
                <br><br>
                <b>Student ID:</b><br>
                <input type="text" name="StudentID" placeholder="Student ID" value="<?php echo $row["StudentID"]; ?>">
                <br><br>
                <b>Supervisor ID:</b><br>
                <input type="text" name="SupervisorID" placeholder="Supervisor ID" value="<?php echo $row["SupervisorID"]; ?>">
                <br><br>
                <b>Evaluator ID:</b><br>
                <input type="text" name="EvaluatorID" placeholder="Evaluator ID" value="<?php echo $row['EvaluatorID']; ?>">
                <br><br>
                <input type="button" name="back" value="Back" onclick="window.location.href='rubric_list.php'">
                <input type="submit" name="update" value="Update">
            </form>
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