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
    <!-- <a href= "attendanceData.php">Attendance</a> -->
    <a href= "TotalUser.php">Report</a>
    <a style= float:right href="http://localhost/STUDFYP/index.php">Log Out&nbsp;</a>
    </div>
   <br>

   <a href="addUser.php" class="editbutt">Add User</a> <br>
   <!-- <a href="updateUser.php" class="editbutt">Update User</a> <br> -->
   <a href="viewUser.php" class="editbutt">View User</a> 

   <img src= userManage.png class="icon" width=15%>

   <div class="footer">
    <a href="adminPage.php">Home </a>
    <br>
    <h5>Copyright 2021; All Rights Reserved.</h5>
   </div>
</body>
</html>