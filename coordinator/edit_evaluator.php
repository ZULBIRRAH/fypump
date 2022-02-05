<?php
include ("databaseFYP.php");
$StudentID = $_GET['StudentID'];  // get student id thru query string
if(count($_POST)>0) {
    mysqli_query($conn, "UPDATE student SET StudentID='".$_POST['StudentID']."', Student_Name='".$_POST['Student_Name']."', EvaluatorID='".$_POST['EvaluatorID']."', IndustrialID='".$_POST['IndustrialID']."', WHERE StudentID='".$_POST['StudentID']."'");
    $message = "Record update successfully";
}
$result = mysqli_query($conn, "SELECT * FROM student WHERE StudentID='". $_GET['StudentID']."'");  // select query
$row = mysqli_fetch_array($result);   // fetch data
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Edit Student Evaluator</title>
        <meta name="description" content="FYP management system">
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
            <a href="add-student.php">Assign Student Supervisor and Evaluator</a>
            <a href="view_student_rpt.php">Summary Report</a>
        </div>
            <main>
                <h3 align="center">Edit Student-Evaluator</h3>
                <div>
                    <form name="form" method="POST" action="" align="center">
                    <div><?php if(isset($message)) { echo "<script>alert('".$message ."')</script>" ; } ?></div>
                    Student ID: <br>
                    <input type="hidden" name="StudentID" value="<?php echo $row['StudentID']; ?>">
                    <input type="text" name="StudentID" value="<?php echo $row['StudentID']; ?>" required>
                    <br>
                    Student Name: <br>
                    <input type="text" name="Student_Name" value="<?php echo $row['Student_Name']; ?>" required>
                    <br><br>
                    Supervisor ID: <br>
                    <input type="text" name="EvaluatorID" placeholder="Enter Evaluator ID" required value="<?php echo $row['EvaluatorID'];?>" >
                    <br><br>
                    Industrial ID: <br>
                    <input type="text" name="IndustrialID" placeholder="Enter Industrial ID" required value="<?php echo $row['IndustrialID'];?>" >
                    <br><br>
                    <input type="submit" name="update" value="Update" > <input type="button" name="back" value="Back" onclick="window.location.href='student-evaluator.php'">
                    </form>
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