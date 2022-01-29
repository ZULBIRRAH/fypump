<?php
include "databaseFYP.php";
$status = "";

    $servername='localhost';
    $username='root';
    $password='';
    $dbname = 'FYP-UMP';
    $conn=mysqli_connect($servername,$username,$password,$dbname);
      if(!$conn)
      {
          die('Could not Connect MySql Server:'.mysql_error());
        }
 
if(isset($_POST['submit']))
{    
     $LogbookID =  $_POST['LogbookID'];
     $Logbook_Title =  $_POST['Logbook_Title'];
     $Logbook_Status =  $_POST['Logbook_Status'];
     $Logbook_Date =  $_POST['Logbook_Date'];
    // $StudentID=  $_POST['StudentID'];

  
    
          $sql = "INSERT INTO logbook (`LogbookID`, `Logbook_Title`, `Logbook_Status`, `Logbook_Date`)
          VALUES ('LogbookID', 'Logbook_Title', 'Logbook_Status', 'Logbook_Date')";
      
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $status="New Record Inserted Successfully.";
 
 }

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style.css" class="header">
	<title>UMP-FYP</title>

</head>
<body>

	<header>
		<img src= logo1.png width=15%>
        <h1>StudFYP</h1>
    </header>
    <br>
    <div class="navbar_mid">
    <a href="Studenthomepage.php" class="active">Home</a>
    <a href= "ManageWorkfile.php">Manage Workfile</a>
    <a href= "interface.php">View Supervisor</a>
    <a href= "">View Rubric</a>
</div>

    <link rel="stylesheet" type="text/css" href="stle.css" class="header">
    <link rel="stylesheet" type="text/css" href="interface.php" class="header">



<br>
   <div class="footer">
    <a href="interface.php">Home </a>
    <br>
    <h5>Copyright 2021; All Rights Reserved.</h5>
   </div>
   
</body>
</html>
