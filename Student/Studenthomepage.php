<?php
include "databaseFYP.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stle.css" class="header">
	<title>UMP-FYP</title>
<style>   table, th, td{
                border: 1px solid black;
                border-collapse: collapse;
                text-align: left;
            }
            table{
                width: 80%;
            }
            td{
                height: 50px;
            }
main{
  margin-left: 50px;
}

.announce-box {
            background-color: #ddd; 
            width: 360px; 
            height: 420px; 
            border: 1px solid black; 
            margin-left: auto;
            margin-right: auto;
        }
</style>
</head>
<body>

	<header>
		<img src= logo1.png width=15%>
        <h1>STUDENT</h1>
    </header>
    <br>
    <div class="navbar_mid">
    <a href="Studenthomepage.php" class="active">Home</a>
    <a href= "ManageWorkfile.php">Manage Workfile</a>
    <!-- <a href= "Attendance.php">Attendance</a> -->
    <a href= "ViewSupervisor.php">View Supervisor</a>
    <a href= "viewRubric.php">View Rubric</a>
    </div>

     
   <br>
</form> 
<table class="stud-table">
                    <?php 
                    $count=1;
                    $sql = "SELECT * FROM announcement";
                    if($result = mysqli_query($conn, $sql)) {
                        if(mysqli_num_rows($result)>0) {
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th></th>";
                                    echo "<th>Title</th>";
                                    echo "<th>Announcement Date</th>";
                                    echo "<th>Faculty</th>";
                        
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                    echo "<td>" . $count . "</td>";
                                    echo "<td>" . $row['topic'] . "</td>";
                                    echo "<td>" . $row['setdate'] . "</td>";
                                    echo "<td>" . $row['Faculty_Code'] . "</td>";
                                    echo "<td>";
                                        echo '<a href="http://localhost/STUDFYP/Coordinator/view_announcement.php?aID='.$row['aID'].'">View</a>';
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
    <br>

 
   <div class="footer">
    <a href="Studenthomepage.php">Home </a>
    <br>
    <h5>Copyright 2021; All Rights Reserved.</h5>
   </div>
   
</body>
</html>
