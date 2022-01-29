<?php 

include "databaseFYP.php";

  if (isset($_POST['submit'])) {

    $StudentID = $_POST['StudentID'];

    $Rate_Description = $_POST['Rate_Description'];

    $Rate_Scale = $_POST['Rate_Scale'];

    $sql = "INSERT INTO `rating`(`StudentID`, `Rate_Description`,`Rate_Scale` ) VALUES ('$StudentID','$Rate_Description', '$Rate_Scale')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

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
    <a href="interface.php">Home</a>
    <a href= "addrating.php" class="active">Add Rating</a>
    <a href= "viewrating.php">Rating List</a>
    <a href= "viewratingreport.php">Rating Report</a>
    <br>
    </div>

<h2 style="text-align: center;">Rating Form</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Rating information:</legend>

    Student ID:<br>

    <input type="text" name="StudentID">

    <br>

    Rate Description:<br>

    <input type="text" name="Rate_Description">

    <br>

    Rating Scale (0-10):<br>

    <input type="Rate_Scale" name="Rate_Scale">

    <br><br>

    <button type="reset" name="reset" class="btn">Reset</button>
    <input type="submit" name="submit" value="submit" class="btn">
    
  </fieldset>

</form>

<div class="footer">
    <a href="interface.php">Home </a>
    <br>
    <h5>Copyright 2021; All Rights Reserved.</h5>
   </div>

</body>

</html>