<?php 

include "databaseFYP.php";

$sql = "SELECT * FROM rating";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>UMP-FYP</title>
    <link rel="stylesheet" type="text/css" href="stle.css" class="header">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

<header>
		<img src= logo1.png width=15%>
        <h1>StudFYP</h1>
    </header>
    <br>
    
    <div class="navbar_mid">
    <a href="interface.php" >Home</a>
    <a href= "addrating.php" >Add Rating</a>
    <a href= "viewrating.php" class="active">Rating List</a>
    <a href= "viewratingreport.php">Rating Report</a>
    
    </div>

    <div class="container">

        <h2 style="text-align: center;">Rating Information</h2>

<table class="table">

    <thead>

        <tr>

        <th>ID</th>

        <th>Student ID</th>

        <th>Rate Description</th>

        <th>Rating Scale (0-10)</th>

        <th>Action</th>

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['StudentID']; ?></td>

                    <td><?php echo $row['Rate_Description']; ?></td>

                    <td><?php echo $row['Rate_Scale']; ?></td>

                    <td><a class="edit_btn" href="updaterating.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="delete_btn" href="deleterating.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                    

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

    <div class="footer">
    <a href="interface.php">Home </a>
    <br>
    <h5>Copyright 2021; All Rights Reserved.</h5>
   </div>

</body>

</html>

        