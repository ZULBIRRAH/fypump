<?php
include ("databaseFYP.php");
session_start();
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
    <a href="Studenthomepage.php" class="active">Home</a>
    <a href= "ManageWorkfile.php">Manage Workfile</a>
        <a href= "interface.php">View Supervisor</a>
        <a href= "">View Rubric</a>
        </div>

    <link rel="stylesheet" type="text/css" href="stle.css" class="header">
    <link rel="stylesheet" type="text/css" href="interface.php" class="header">
</div>
<?php
            $sql = mysqli_query($conn, "SELECT workfile.StudentID, student.Student_Name FROM workfile left join student on workfile.StudentID = student.StudentID Where workfile.StudentID ='". $_GET['StudentID']."' ") or die(mysqli_error($conn));
            while($name = mysqli_fetch_array($sql)) { ?>
                <?php echo "Student Name:". " " .$name['Student_Name']; ?>
            <?php } ?>
         
<div>
                <table class="stud-table">
                    <?php
                    $count=1;
                    $sql = mysqli_query($conn, "SELECT * FROM logbook WHERE StudentID = '". $_GET['StudentID']."'");
                    while($row = mysqli_fetch_array($sql)) { ?>
                        <tr>
                            <th></th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $row['Logbook_Title']; ?></td>
                            <td><?php echo $row['Logbook_Status']; ?></td>
                            <td><?php echo $row['Logbook_Date']; ?></td>
                        </tr>
                    <?php $count++; } ?>
                </table>
            </div>

</div>


<br>
   <div class="footer">
    <a href="Studenthomepage.php">Home </a>
    <br>
    <h5>Copyright 2021; All Rights Reserved.</h5>
   </div>

   
</body>
</html>
