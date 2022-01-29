<?php
include "databaseFYP.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="stle.css" class="header">
    <title>UMP-FYP</title>
<style>   table, th, td{
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
main{
  margin-left: 50px;
}

.announce-box {
            background-color: #ddd; 
            width: 360px; 
            height: 420px; 
            border: 1px solid black; 
            margin-left: auto;
            margin-right: auto;
        }
</style>
</head>
<body>

    <header>
        <img src= logo1.png width=15%>
        <h1>STUDENT</h1>
    </header>
    <br>
    <div class="navbar_mid">
    <a href="Studenthomepage.php" >Home</a>
    <a href= "ManageWorkfile.php">Manage Workfile</a>
    <!-- <a href= "Attendance.php">Attendance</a> -->
    <a href= "ViewSupervisor.php" class="active">View Supervisor</a>
    <a href= "viewRubric.php">View Rubric</a>
    </div>
       
            <h3 align="center">Supervisor List</h3><br>
            <main>
                <form action="search_result_supervisor.php" method="POST">
                    <table align="center" class="stud-table">
                        <tr>
        
                            <th>Supervisor ID</th>
                            <th>Supervisor Name</th>
                            <th>Supervisor Email</th>
                            <th>Supervisor Phone</th>
                            <!-- <th colspan="3">Actions</th> -->
                        </tr>
        
                        <?php
                        
                        $sql= "SELECT supervisor.SupervisorID, supervisor.Supervisor_Name, supervisor.Supervisor_Email,  supervisor.Supervisor_Phone FROM supervisor";

                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td><?php echo $row['SupervisorID']; ?></td>
                                <td><?php echo $row['Supervisor_Name']; ?></td>
                                <td><?php echo $row['Supervisor_Email']; ?></td>
                                <td><?php echo $row['Supervisor_Phone']; ?></td>
                                <!-- <td><a href="view_student.php?StudentID=<?php echo $row['StudentID']; ?>">View</a></td> -->
                                
                            </tr>
                        <?php } ?>
                        
                    </table>
                    <?php mysqli_close($conn) ?>
                </form>
            </main>
        <footer>
        <div class="footer">
            <a href="Studenthomepage.php">Home</a> |
            <a href="">Helps</a> |
            <a href="">Privacy</a> |
            <a href="">Logout</a> 
            <br>
            <h5>Copyright 2021; All Rights Reserved.</h5>
        </div>
        </footer>
    </body>
</html>