<?php

include('databaseFYP.php');
?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stle.css" class="header">
  <link rel="stylesheet" href="stle3.css">

<title>Student List Information</title>
</head>
<body>
<header>
		<img src= logo1.png width=15%>
        <h1>StudFYP</h1>

    </header>
    <br>
    <div class="navbar_mid">
        <a href="index.php">Home</a>
        <a href= "STDlist.php" class="active"> Student List </a> 
        <a href= "StudentListWorkfile.php"> Student Workfile </a> 
        <a href= "SVIndex.php">Manage Account</a>
        <a href= ""> Log Out </a> 
    </div>


<h2> Student Profile </h2>

<table class="center" id="table2">      
<tbody>
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
  <tr>
    <th>Student Email</th>
    <td><?php  echo $row['Student_Email'];?></td>
    <th>Mobile Number</th>
    <td><?php  echo $row['Student_Phone'];?></td>
  </tr>
  <tr>
    <th>Student Info</th>
    <td><?php  echo $row['Student_Info'];?></td>
    <th>Joined Date</th>
    <td><?php  echo $row['Joined_Date'];?></td>
  </tr>
<?php 
$cnt=$cnt+1;
}?>       
</tbody>
</table>

<br>
<br>
<div class="button2"><a href="STDlist.php">&laquo; Back</a></div> 


<div class="footer">
    <br>
    <h5>Copyright 2021; All Rights Reserved.</h5>
   </div>

</div>
</body>
</div>
</html>