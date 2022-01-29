<?php
include  'C:\xampp\htdocs\STUDFYP\databaseFYP.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' href='HomeStyle.css' type='text/css' />
  <title>UMP-FYP</title>
</head>
<body class = "bg">
<header class = "hd">
<img src= logo1.png width=15%>
<h2 style = "text-align: center;">StudFYP</h2>

</header>
<div class ="page">
  <h1>Welcome!</h1>
  </div>

    <div class="nav">
      <a class = "active" href="EvaluatorHome.php">Home</a>
      <!-- <a href="Menu.html">Menu</a> -->
      <!-- <a href="Evaluator.html">Evaluator</a> -->
      <a href="Logbook.php">Student's Logbook</a>
    </div>

</div>
    </header>
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
                                    echo '<a href="viewRubric2.php?RubricID='.$row['RubricID'].'">View</a>';
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


 

<div class= "footer">
  <div class="navbar_mid">
    <a href="Home.html">Home</a>
    <a href="Helps.html">Helps</a>
    <a href="Privacy.html">Privacy</a>
    <a href="Logout.html">Logout</a>
    <p style = "text-align: center;"> ©Copyright 2021, All Rights Reserved</p>
  </div>
   
</div>
</body>    
</html>

