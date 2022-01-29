<?php

include '../../databaseFYP.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="HomeStyle.css" class="header">
	<title>Manage User</title>
</head>
<body>

	<header>
		<img src= logo1.png width=10%>
        <h1>Admin Page</h1>
    </header>

    <br>
    <div class="navbar_mid">
    <a href="adminPage.php" >Home</a>
    <a href= "ManageUserPage.php" class="active">Manage User</a>
    <a href= "TotalUser.php">Report</a>
    <a style= float:right href="http://localhost/STUDFYP/index.php">Log Out&nbsp;</a>
    </div>
   <br>
<?php
$ID = $_GET['ID']; 

$query = "SELECT * FROM manageuser WHERE ID = '$ID'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in updateUser.php");
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$password = $row['password'];
$usertype = $row ['usertype'];
$phoneNum = $row ['phoneNum'];

?>
 <h2>Update User</h2>

   <form method="post" action="updating.php">

     <input type="text"  name="name" value="<?php echo $name; ?>"> 
     <br><br>
     <input type="text" name="password" value="<?php echo $password; ?>">
     <br><br>
     <input type="text" name="usertype"  value="<?php echo $usertype; ?>">
     <br><br>
    <input type="text"  name="phoneNum" value="<?php echo $phoneNum; ?>">
    <br><br>
    <input type ="hidden" name="ID" value="<?php echo $ID; ?>">
    <br><br>

     <input type="reset" class ="button" value="Reset">
     <input type="Submit" class ="button" value="Submit">
  </form>

    <br>
   <div class="footer">
    <a href="adminPage.php">Home </a>
    <br>
    <h5>Copyright 2021; All Rights Reserved.</h5>
   </div>
</body>
</html>

