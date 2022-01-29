<?php
//database conection  file

include('databaseFYP.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css style 4.css" class="header">
  <link rel="stylesheet" href="css style 3.css">
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
    <a class = "active" href="Evaluator.html">Evaluator</a>
    <a href="Logbook.html">Student's Logbook</a>
  </div>

<div class="hd1">
    <a href="#back">Back</a>
</div>
    </header>

<div class="myDIV2">
        
    <br>
  <br>
      <div class="clearfix" style="text-align: center;">
        <div class="box">
        <a class = "active" href="Evaluator.html"><b>View Evaluator's Information</b></a>
        </div>
      </div>


      <br>
      <form id="form"> 
          <input type="search" id="query" name="q" placeholder="Search...">
          <button>Search</button>
        </form>
        <br><br>
        <h2>Student Logbook</h2>
          <table class="center">
          <thead>
                  <tr>
                      <th>No</th>
                      <th>Logbook ID<th>
                      <th>Logbook Title</th>
                      <th>Logbook Status</th>                        
                      <th>Action</th>
                  </tr>
          </thead>
          <tbody>
<?php
  $ret=mysqli_query($conn,"select * from EvaluatorList");
  $cnt=1;
  $row=mysqli_num_rows($ret);
  if($row>0){
  while ($row=mysqli_fetch_array($ret)) {

  ?>         
          
  <tr>
    <td><?php echo $cnt;?></td>
    <td><?php  echo $row['EvaluatorID'];?></td>
    <td></td>
    <td><?php  echo $row['Evaluator_Name'];?></td>                        
    <td></td>
    <td><?php  echo $row['Evaluation_Form'];?></td>
    <td></td>
    <td><?php  echo $row['Student_Info'];?></td>
    <td>
    
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
              <div class="button2" ><a href="index.php" >&laquo; Back</a> </div>
        <br><br><br><br>

      <div class="clearfix" style="text-align: center;">
        <div class="box">
        <a href="Report.html">View Report</a>
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