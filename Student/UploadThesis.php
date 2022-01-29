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
    <a href="Studenthomepage.php" class="active">Home</a>
        <a href= "ManageWorkfile.php">Manage Workfile</a>
        <a href= " ">View Supervisor</a>
        <a href= "">View Rubric</a>
        </div>

    <link rel="stylesheet" type="text/css" href="stle.css" class="header">
    <link rel="stylesheet" type="text/css" href="interface.php" class="header">
</div>


 
<div class="header"><h2>UPLOAD THESIS</h2> 

 <?php
 
$dbh = new PDO("mysql:host=localhost;dbname=FYP-UMP", "root", "");

 if(isset($_POST['btn'])){

  $name = $_FILES['myfile']['name'];
  $type = $_FILES['myfile']['type'];
  $data = file_get_contents($_FILES['myfile']['tmp_name']);
  $stmt = $dbh->prepare("insert into myfile values('',?,?,?)");
  $stmt->bindParam(1,$name);
  $stmt->bindParam(2,$type);
  $stmt->bindParam(3,$data);
  $stmt->execute();
 }

 ?>
        <form method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br><br>
          <button type="submit" name="btn">Upload</button>
        </form>
 <p></p>
 <ol>

 <?php

 $stat = $dbh->prepare("select*from myfile");
 $stat ->execute();
 
 ?>
 </ol>


   <div class="footer">
    <a href="Studenthomepage.php">Home </a>
    <br>
    <h5>Copyright 2021; All Rights Reserved.</h5>
   </div>
   
</body>
</html>
