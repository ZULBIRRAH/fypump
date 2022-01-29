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
</div>

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


$sql = "SELECT * FROM Logbook";
$result = $link->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id = $row["id"];
	$title = $row["TITLE"];
	$date = $row["DATE"];
	$activities = $row["ACTIVITIES"];
	$personinvolved = $row["PERSONINVOLVED"];

    ?>
	<br><br> 
	<li>
	TITLE           : <?php echo $title; ?><br>
	DATE            : <?php echo $date; ?><br>
	ACTIVITIES      : <?php echo $activities; ?><br>
	PERSON INVOLVED : <?php echo $personinvolved; ?><br>
    <a href="EditData.php?id=<?php echo $id; ?>">UPDATE</a>   <br>
	 
    </li>
	<?php
  }
} else 
{
  echo "0 results";
}
$link->close();

?>


<br>
   <div class="footer">
    <a href="Studenthomepage.php">Home </a>
    <br>
    <h5>Copyright 2021; All Rights Reserved.</h5>
   </div>
   
</body>
</html>
