<?php
//database conection  file

include 'databaseFYP.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="HomeStyle.css" class="header">

<style> 
table, th, td {
  border: 1px solid white;
  border-collapse: collapse;
}
th, td {
  background-color: #96D4D4;
}
</style>

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
    <a href="EvaluatorHome.php">Home</a>
    <a class="active" href="Logbook.php">Student's Logbook</a>
    <a href="viewRubric.php">View Rubric</a>
  </div>

 <div class="clearfix" style="text-align: center;">
          </div>

    </header>

    <div class="myDIV2">
   
          <div class="clearfix" style="text-align: center;">
            <div class="box">
            <!-- <a class = "active" href="Logbook.php"><b>View Student's Logbook</b></a> -->
            </div>
          </div>
      
          <h2>Student Logbook</h2>
          <table class="center">
          <thead>
                  <tr>
                      <th>No</th>
                      <th>Logbook ID</th>
                      <th>Logbook Title</th>
                      <th>Logbook Status</th>
                      <th>Logbook Date</th>
                      <th>Student ID</th> 
                      <th>Comment</th>        
                      <th>Action</th>
                  </tr>
          </thead>
          <tbody>
<?php
  $ret=mysqli_query($conn,"SELECT * FROM Logbook");
  $cnt=1;
  $row=mysqli_num_rows($ret);
  if($row>0){
  while ($row=mysqli_fetch_array($ret)) {

  ?>         
          
  <tr>
    <td><?php echo $cnt;?></td>
    <td><?php  echo $row['LogbookID'];?></td>
    <td><?php  echo $row['Logbook_Title'];?></td>
    <td><?php  echo $row['Logbook_Status'];?></td>
    <td><?php  echo $row['Logbook_Date'];?></td>
    <td><?php  echo $row['StudentID'];?></td>
    <td><?php  echo $row['Comment'];?></td>
    <td> <a href="updateCommentReport.php?ID=<?php echo $row["LogbookID"]; ?>">Edit</a> </td> 
    
      <?php 
      $cnt=$cnt+1;
      } 
  } else {?>  
      <tr>
      <th style="text-align:center; color: rgb(163, 0, 0);" colspan="6">No Record Found</th>
      </tr>
      <?php } ?>                 
                  
  </tbody>            
</table>



          <br>
   
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