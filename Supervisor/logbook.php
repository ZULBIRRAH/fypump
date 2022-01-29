<?php

include('databaseFYP.php');
?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stle.css" class="header">
  <link rel="stylesheet" href="stle3.css">

<title>Student Logbook</title>
</head>
<body>

<header>
		<img src= logo1.png width=15%>
        <h1>StudFYP</h1>

    </header>
    <br>
    <div class="navbar_mid">
        <a href="index.php" >Home</a>
        <a href= "STDlist.php"> Student List </a> 
        <a href= "StudentListWorkfile.php" class="active"> Student Workfile </a> 
        <a href= "SVIndex.php">Manage Account</a>
        <a href= ""> Log Out </a> 
    </div>
    
<table class="center" id="table2">   
<tbody>
<h2>Student Logbook </h2>

<?php
$vid=$_GET['viewid'];
$ret=mysqli_query($conn,"select * from StudentList where ID =$vid");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?>
 <tr>
    <th width="20%">Student ID</th>
    <td colspan="3"><?php  echo $row['StudentID'];?></td>
</tr>
 <tr>
    <th>Student Name</th>
    <td colspan="3"><?php  echo $row['Student_Name'];?></td>
  </tr>
  <?php 
$cnt=$cnt+1;
}?>

<?php
$vid=$_GET['viewid'];
$ret=mysqli_query($conn,"select * from logbook WHERE StudentID = '". $_GET['viewid']."'") or die(mysqli_error($conn));
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?>

    <tr>
    <th>Logbook ID</th>
    <td><?php  echo $row['LogbookID'];?></td>
    <th>Title</th>
    <td><?php  echo $row['Logbook_Title'];?></td>
    </tr>

    <tr>
    <th>Status</th>
    <td><?php  echo $row['Logbook_Status'];?></td>
    <th>Date</th>
    <td><?php  echo $row['Logbook_Date'];?></td>
    </tr> 

    <tr>
    <th >Preview</th>
    <td colspan="3">
    </tr>

<?php 
$cnt=$cnt+1;
}?>      
  </tbody>
  </table>

  <br>
  <div class="button2"><a href="StudentListWorkfile.php">&laquo; Back</a></div> 
  <div class="footer">
    <br>
    <h5>Copyright 2021; All Rights Reserved.</h5>
   </div>
</div>         
</body>
</html>