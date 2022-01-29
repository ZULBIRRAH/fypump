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
  
  <style> 
table, th, td {
  border: 1px solid white;
  border-collapse: collapse;
}
th, td {
  background-color: #96D4D4;
}
</style>
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

 <h2>VIEW USER</h2>
 <section class="table">
<table style="width:100%">
   <tr>
    <th> ID </th>
    <th> NAME</th>
    <th> PASSWORD</th>
    <th> USER ROLE</th>
    <th> PHONE NUMBER</th>
    <th> ACTION</th>
    </tr>
<?php
$i=0;
$query = "SELECT * FROM manageuser";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){
  while($row = mysqli_fetch_array($result))
  {

    ?>

  <tr>
    <td> <?php echo $row["ID"]; ?></td>
    <td> <?php echo $row["name"]; ?></td>
    <td> <?php echo $row["password"]; ?></td>
    <td> <?php echo $row["usertype"]; ?></td>
    <td> <?php echo $row["phoneNum"];?> </td>
    <td> <a href="updateUser.php?ID=<?php echo $row["ID"]; ?>">Edit</a> </td> 
    <td> <a href="delete.php?ID=<?php echo $row["ID"]; ?>">Delete</a></td>
    
  </tr>
  <?php
  $i++;
  }

} else {

    echo "0 results"; 
}
?>
</table>
</section>

    <br>
   <div class="footer">
    <a href="adminPage.php">Home </a>
    <br>
    <h5>Copyright 2021; All Rights Reserved.</h5>
   </div>
</body>
</html>

