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
    <a href= "interface.php">View Supervisor</a>
    <a href= "">View Rubric</a>
</div>

    <link rel="stylesheet" type="text/css" href="stle.css" class="header">
    <link rel="stylesheet" type="text/css" href="interface.php" class="header">



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "FYP-UMP";

// Create connection
$link = new mysqli($servername, $username, $password, $dbname);
// Check linkection
if ($link->connect_error) {
  die("connection failed: " . $link->linkect_error);
}

$idURL = $_GET['id'];

$query = "DELETE FROM Logbook WHERE id = '$idURL'";
$result = mysqli_query($link,$query) or die ("Could not execute query in ubah.php");
 

if($result){
echo "<script type= 'text/javascript'> window.location='ViewData.php'</script>";
}
?>

<br>
   <div class="footer">
    <a href="Studenthomepage.php">Home </a>
    <br>
    <h5>Copyright 2021; All Rights Reserved.</h5>
   </div>
   
</body>
</html>
