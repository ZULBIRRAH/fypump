<?php
include "databaseFYP.php";
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <title>Preview Announcement</title>
        <meta name="description" content="FYP management system">
		<meta name="author" content="Bryan Tan CB20081">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./css/coordinator.css">
    </head>
    <style>
        .announce-box {
            background-color: #ddd; 
            width: 360px; 
            height: 420px; 
            border: 1px solid black; 
            margin-left: auto;
            margin-right: auto;
        }
        #cc-homepage-announcements {
            height: 390px; 
            overflow-x: hidden; 
            overflow-y: auto; 
            padding: 6px; 
            text-align: left;
        }
    </style>
    <body>
        <header>
            <img src= ./img/logo1.png width=15%>
            <h1>StudFYP</h1>
        </header>
        <br>
        <div class="navbar_mid">
            <a href="coordinatorPage.php">Home</a>
            <a href="student-supervisor.php">Student</a>
            <a class="active" href="announcement.php">Announcement</a>
            <a href="view_progress_listing.php">View Progress Listing</a>
            <a href="rubric_list.php">Rubric</a>
            <a href="" style="float:right">Logout</a>
        </div>
            
                <h3 style="text-align:center">View Announcement</h3>
                
                <div class="announce-box">
                    <h2 style="color: white; background-color: #2a4e57; text-align: center; margin: 0px; padding: 0px;">Announcements</h2>
                    <div id="cc-homepage-announcements">
                        <?php
                        $date = date('d/m/Y');
                        $sql = "SELECT * from announcement WHERE aID='". $_GET['aID']."'";
                        $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                        while($row = mysqli_fetch_array($result)) {
                            echo "<h3>"."<b style='color:red'>" .$row['topic']."</b>"."</h3>";
                            echo "<h3>"."Date: " .date('d/m/Y',strtotime($row['setdate']))."</h3>";
                            echo $row['Faculty_Announcement'];
                            echo "<br>";
                        }
                        ?>
                    </div>
                </div>
                <br><br>
                <div style="text-align: center;">
                    <input type="button" value="Back" onclick="window.location.href='announcement.php'">
                </div>
                <?php mysqli_close($conn); ?>
        <footer>
        <div class="footer">
            <a href="coordinatorPage.php">Home</a> |
            <a href="">Helps</a> |
            <a href="">Privacy</a> |
            <a href="">Logout</a> 
            <br>
            <h5>Copyright 2021; All Rights Reserved.</h5>
        </div>
        </footer>
    </body>
</html>