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

