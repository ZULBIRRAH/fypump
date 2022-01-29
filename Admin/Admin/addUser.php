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
  <!--   <a href= "attendanceData.php">Attendance</a> -->
    <a href= "TotalUser.php">Report</a>
    <a style= float:right href="http://localhost/STUDFYP/index.php">Log Out&nbsp;</a>
    </div>

 <h2>Add User</h2>

   <form method="post" action="insert.php">

     <input type="text"  name="ID" placeholder="ID"><br><br>
     <input type="text"  name="name" placeholder="User Name"><br><br>
     <input type="text"  name="password" placeholder="Password"><br><br>
     <input type="text"  name="usertype" placeholder="User Type"><br><br>
     <input type="text"  name="phoneNum" placeholder="User Phone Number"><br><br>

     <input type="reset" class ="button" value="Reset">
     <input type="Submit" class ="button" value="Add">
  </form>
 
   <div class="footer">
    <a href="adminPage.php">Home </a>
    <br>
    <h5>Copyright 2021; All Rights Reserved.</h5>
   </div>
</body>
</html>