<?php 

include "databaseFYP.php";

    if (isset($_POST['update'])) {

        $StudentID = $_POST['StudentID'];

        $user_id = $_POST['user_id'];

        $Rate_Description = $_POST['Rate_Description'];

        $Rate_Scale = $_POST['Rate_Scale'];

        $sql = "UPDATE `rating` SET `StudentID`='$StudentID',`Rate_Description`='$Rate_Description',`Rate_Scale`='$Rate_Scale' WHERE `id`='$user_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `rating` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $StudentID = $row['StudentID'];

            $Rate_Description = $row['Rate_Description'];

            $Rate_Scale  = $row['Rate_Scale'];

            $id = $row['id'];

        } 

    ?>
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>UMP-FYP</title>
        <link rel="stylesheet" type="text/css" href="stle.css" class="header">
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
        <a href= "viewrating.php">Rating List</a>
        <a href= "viewrating.php" class="active">Update rating</a>    
        <a href= "viewratingreport.php">Rating Report</a>
        
    </div>

        <h2 style="text-align: center;">Rating Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Rating Information:</legend>

            Student ID:<br>

            <input type="text" name="StudentID" value="<?php echo $StudentID; ?>">

            <input type="hidden" name="user_id" value="<?php echo $id; ?>">

            <br>

            Rate Description:<br>

            <input type="text" name="Rate_Description" value="<?php echo $Rate_Description; ?>">

            <br>

            Rating Scale (0-10):<br>

            <input type="Rate_Scale" name="Rate_Scale" value="<?php echo $password; ?>">

            <br><br>

            <input class="btn" type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        <div class="footer">
        <a href="interface.php">Home </a>
        <br>
        <h5>Copyright 2021; All Rights Reserved.</h5>
        </div>
    </body>

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: viewrating.php');

    } 

}


?> 