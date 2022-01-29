<?php
include ("databaseFYP.php");
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stle.css" class="header">
	<title>UMP-FYP</title>

</head>
<body>

	<header>
		<img src= logo1.png width=15%>
        <h1>StudFYP</h1>
    </header>
    <br>
    <div class="navbar_mid">
    <a href="Studenthomepage.php" >Home</a>
    <a href= "ManageWorkfile.php"class="active">Manage Workfile</a>
    <a href= "interface.php">View Supervisor</a>
    <a href= "">View Rubric</a>
    </div>


<form action="Add_logbook_database.php" method="post">
    <h2>TITLE<br><input type="text" name="Logbook_Title"  ></h2>
<center>
    <table border ="1" cellspacing="2" cellpadding="8">
        <tr>
          <th>Logbook ID</th>
          <th>Logbook Status</th>
          <th>Logbook Date</th>
        </tr>
        <tr>
          <td><input type="text"  name="LogbookID"></td>
          <td><input type="text"  name="Logbook_Status"></td>
          <td><input type="date"  name="Logbook_Date" ></td>
        </tr>
        
      </table>
  <br><input type="submit" name="submit" value="Submit">
  <center>
</form> 
    
    <br>
   <div class="footer">
    <a href="Studenthoempage.php">Home </a>
    <br>
    <h5>Copyright 2021; All Rights Reserved.</h5>
   </div>
   
</body>
</html>
