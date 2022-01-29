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

<div>
    <center>
        <h3>Student Logbook</h3>
<table>
    <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Faculty</th>
        <th colspan="4">Actions</th>
    </tr>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'FYP-UMP');

    $sql = "SELECT * from student ";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    while($row = mysqli_fetch_array($result)) { ?> 
        <tr>
            <td><?php echo $row['StudentID']; ?></td>
            <td><?php echo $row['Student_Name']; ?></td>
            <td><?php echo $row['Faculty_Code']; ?></td>
            <td><a href="Add_logbook_interface.php" >Add</a></td>
            <td><a href="ViewDataUpdate.php" >Edit</a></td>
            <td><a href="ViewData.php" >View</a></td>
            <td><a href="ViewDataDelete.php">Delete</a></td>
        </tr>
        <?php } ?>
</table>
</center>
</div>

                    
 
 


   <div class="footer">
    <a href="Studenthomepage.php">Home </a>
    <br>
    <h5>Copyright 2021; All Rights Reserved.</h5>
   </div>
   
</body>
</html>
