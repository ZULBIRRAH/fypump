<?php
include "databaseFYP.php";
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <title>Announcement Page</title>
        <meta name="description" content="FYP management system">
		<meta name="author" content="Bryan Tan CB20081">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/coordinator.css">
        <style>
            main {
                margin-left: 50px;
            }
            table, th, td{
                border: 1px solid black;
                border-collapse: collapse;
                text-align: left;
            }
            table{
                width: 80%;
            }
            td{
                height: 50px;
            }
            .id{
                width: 50px;
            }
        </style>
    </head>
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
            <main>
                <div style="width: 400px;">
                <h3 style="display: inline-block">List of Announcement</h3>
                <input type="button" name="create_announcement" value="Create Announcement" style="float:right;margin-top:15px" 
                onclick="window.location.href='create_announcement.php'">
                <br>
                </div>
                <table class="stud-table">
                    <?php 
                    $count=1;
                    $sql = "SELECT * FROM announcement";
                    if($result = mysqli_query($conn, $sql)) {
                        if(mysqli_num_rows($result)>0) {
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th></th>";
                                    echo "<th>Title</th>";
                                    echo "<th>Announcement Date</th>";
                                    echo "<th>Faculty</th>";
                                    echo "<th colspan='3'>Actions</th>";
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                    echo "<td>" . $count . "</td>";
                                    echo "<td>" . $row['topic'] . "</td>";
                                    echo "<td>" . $row['setdate'] . "</td>";
                                    echo "<td>" . $row['Faculty_Code'] . "</td>";
                                    echo "<td>";
                                        echo '<a href="view_announcement.php?aID='.$row['aID'].'">View</a>';
                                    echo "</td>";
                                    echo "<td>";
                                        echo '<a href="edit_announcement.php?aID='.$row['aID'].'">Edit</a>';
                                    echo "</td>";
                                    echo "<td>";
                                        echo '<a href="delete_announcement.php?aID='.$row['aID'].'">Delete</a>';
                                    echo "</td>";
                                echo "</tr>";
                                $count++;
                            }
                            echo "</tbody>";
                            // free result
                            mysqli_free_result($result);
                        } else {
                            echo '<em>No announcement is created at the moment.</em>';
                        }
                    } else {
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                    mysqli_close($conn);
                    ?>
                </table>

            </main>
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