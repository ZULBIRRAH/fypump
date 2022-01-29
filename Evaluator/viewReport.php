<?php 

include '..\databaseFYP.php';

$sql = "SELECT * FROM thesis";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' href='css style 2.css' type='text/css' />
</head>
<body class = "bg">
<header class = "hd">
<img src= logo1.png width=15%>
<h2 style = "text-align: center;">StudFYP</h2>

</header>
<div class ="page">
  <h1>Evaluator</h1>
  </div>

  <div class="nav">
    <a href="Home.html">Home</a>
    <a href="Menu.html">Menu</a>
    <a href="Evaluator.html">Evaluator</a>
    <a href="Logbook.html">Student's Logbook</a>
  </div>

<div class="hd1">
    <a href="#back">Back</a>
</div>
    </header>

<div class="myDIV2">
        
    <br>
  <br>
  <br><br>

<table class="table">

    <thead>

        <tr>

        <th>Thesis ID</th>

        <th>Thesis Title</th>

        <th>Thesis Status</th>

        <th>Logbokk ID</th>

        <th>Student ID</th>

        <th>Comment</th>

        <th>Action</th>

    </tr>

    </thead>

    <tbody> 

        <?php

             $i=0;
             $query = "SELECT * FROM thesis";
             $result = mysqli_query($conn,$query);

             if(mysqli_num_rows($result)>0){
                while ($row = mysqli_fetch_array($result)) {

        ?>

                    <tr>

                    <td><?php echo $row["ThesisID"]; ?></td>

                    <td><?php echo $row['Thesis_title']; ?></td>

                    <td><?php echo $row['Thesis_Status']; ?></td>

                    <td><?php echo $row['LogbookID']; ?></td>

                    <td><?php echo $row['StudentID']; ?></td>

                    <td ><?php echo $row['Comment']; ?><!-- <input type="text" name="comment" maxlength="500"> --></td>

                    <td> <a href="updateCommentReport.php?ID=<?php echo $row["ThesisID"]; ?>">Edit</a> </td> 

                    </tr>                       

        <?php
        $i++;       

            }
        }else{

            echo "0 results";
        }

        ?>                

    </tbody>

</table>

    </div> 

    <div class="clearfix" style="text-align: center;">
    <div class="box">
        <a class = "active" href="Report.html"><b>View Report</b></a>
    </div>
    <div class="box">
    <a href="Rubric.html">View Rubric</a>
    </div>
  </div>

  <div class= "footer">
    <div class="nav">
      <a href="Home.html">Home</a>
      <a href="Helps.html">Helps</a>
      <a href="Privacy.html">Privacy</a>
      <a href="Logout.html">Logout</a>
      <p style = "text-align: center;"> ©Copyright 2021, All Rights Reserved</p>
  </div>

</div>
</body>    
</html>
