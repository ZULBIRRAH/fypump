<?php
require_once "databaseFYP.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Rubric Details</title>
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
    <a href="">Assign Rubric</a>
</div>
<main>
    <center>
    <h3>Rubric Details</h3>
    <?php

    $res = mysqli_query($conn, "SELECT * FROM rubric WHERE RubricID='".$_GET['RubricID']."';") or die(mysqli_error($conn));
    while($row = mysqli_fetch_array($res)) {  ?>
    <table>
    <tr>
    <td><b>Rubric ID: </b></td>
    <td><?php echo $row["RubricID"]; ?></td>
    </tr>
    <tr>
    <td><b>Rubric Detail: </b></td>
    <td><?php echo $row["Rubric_detail"]; ?></td>
    </tr>
    <tr>
    <td><b>Student ID: </b></td>
    <td><?php echo $row["StudentID"]; ?></td>
    <tr>
    <td><b>Supervisor ID: </b></td>
    <td><?php echo $row["SupervisorID"]; ?></td>
    </tr>
    <tr>
    <td><b>Evaluator ID: </b></td>
    <td><?php echo $row["EvaluatorID"]; ?></td>
    </tr>
    </table>
    <?php } ?>


    <?php
    echo "<br>"."<br>";
    echo "<a href='rubric_list.php'>Back</a>";
        
    mysqli_close($conn);
    ?>
    </center>
</main>
</body>
</html>