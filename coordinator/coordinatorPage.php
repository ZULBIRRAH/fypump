<?php
include "databaseFYP.php";
session_start();
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
	    <title>UMP-FYP Coordinator</title>
        <meta name="description" content="FYP management system">
		<meta name="author" content="Bryan Tan CB20081">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/coordinator.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./calender/fullcalendar/lib/main.min.css">
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/jquery-3.6.0.min.js"></script>
        <script src="./calender/fullcalendar/lib/main.min.js"></script>
        <style>
            .announce-box {
                float: right; 
                background-color: #ddd; 
                width: 315px; 
                height: 420px; 
                border: 1px solid black; 
                margin: 10px
            }
            #cc-homepage-announcements {
                height: 390px; 
                overflow-x: hidden; 
                overflow-y: auto; 
                padding: 6px; 
                text-align: left;
            }
            #num {
                font-size: 40px;
                font-weight: bold;
                text-align: center;
            }
            :root {
                --bs-success-rgb: 71, 222, 152 !important;
            }
    
            html,
            body {
                height: 100%;
                width: 100%;
                min-height: 400px;
                margin-bottom: 100px;
                clear: both;
            }
    
            .btn-info.text-light:hover,
            .btn-info.text-light:focus {
                background: #000;
            }
            table, tbody, td, tfoot, th, thead, tr {
                border-color: #ededed !important;
                border-style: solid;
                border-width: 1px !important;
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
           <a class="active" href="coordinatorPage.php">Home</a>
            <a href="student-supervisor.php">Student</a>
            <a href="announcement.php">Announcement</a>
            <a href="view_progress_listing.php">View Progress Listing</a>
            <a href="rubric_list.php">Rubric</a>
            <a href="" style="float:right">Logout</a>
        </div>
        
        <div class="dashboard" style="float: left; background-color: #ddd; width: 225px; height: 420px; border: 1px solid black; margin: 10px">
            <h4 style="color: white; background-color: Purple; text-align: center; margin: 0px; padding: 0px;">Dashboard</h4>
            <div style="float: left; background-color: #fff; width: 200px; height: 80px; border: 1px solid black; margin: 10px">
                <h5 style="color: white; background-color: blue; text-align: center; margin: 0px; padding: 0px;">No. of Student</h5>
                <div id="num">
                    <?php
                    $res = mysqli_query($conn,"SELECT * FROM student") or die(mysqli_error($conn));
                    $row = mysqli_num_rows($res);
                    echo $row;
                    ?>
                </div>
            </div>
            <div style="float: left; background-color: #fff; width: 200px; height: 80px; border: 1px solid black; margin: 10px">
                <h5 style="color: white; background-color: blue; text-align: center; margin: 0px; padding: 0px;">FYP Completion</h5>
                <div id="num">
                    <?php
                    $res = mysqli_query($conn,"SELECT StudentID FROM logbook") or die(mysqli_error($conn));
                    $total = mysqli_num_rows($res);
                    $res1 = mysqli_query($conn,"SELECT * FROM logbook WHERE Logbook_Status='Complete'") or die(mysqli_error($conn));
                    $complete = mysqli_num_rows($res1);
                    $percentage = ($complete / $total) * 100;
                    echo $percentage."%";
                    ?>
                </div>
            </div>
            <div style="float: left; background-color: #fff; width: 200px; height: 80px; border: 1px solid black; margin: 10px">
                <h5 style="color: white; background-color: blue; text-align: center; margin: 0px; padding: 0px;">FYP In Progress</h5>
                <div id="num">
                    <?php
                    $res = mysqli_query($conn,"SELECT StudentID FROM logbook") or die(mysqli_error($conn));
                    $total = mysqli_num_rows($res);
                    $res1 = mysqli_query($conn,"SELECT * FROM logbook WHERE Logbook_Status='In Progress'") or die(mysqli_error($conn));
                    $complete = mysqli_num_rows($res1);
                    $percentage = ($complete / $total) * 100;
                    echo $percentage."%";
                    ?>
                </div>
            </div>
        </div>
        <div class="announce-box">
            <h3 style="color: white; background-color: #2a4e57; text-align: center; margin: 0px; padding: 0px;">Announcements</h3>
            <div id="cc-homepage-announcements">
                <?php
                $date = date('d/m/Y');
                $sql = "SELECT * from announcement";
                $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                while($row = mysqli_fetch_array($result)) {
                    echo "<b style='color:red'>" .$row['topic']."</b>"."<br>";
                    echo "Date: " .date('d/m/Y',strtotime($row['setdate']));
                    echo $row['Faculty_Announcement'];
                    echo "<br>";
                }
                ?>
            </div>
        </div>
        
        <div class="container py-5" id="page-container">
            <div class="row">
            <h1>Calendar</h1>
                <div class="col-md-9">
                    <div id="calendar"></div>
                </div>
                <div class="col-md-3">
                    <div class="cardt rounded-0 shadow">
                        <div class="card-header bg-gradient bg-primary text-light">
                            <h5 class="card-title">Schedule Form</h5>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <form action="save_schedule.php" method="post" id="schedule-form">
                                    <input type="hidden" name="id" value="">
                                    <div class="form-group mb-2">
                                        <label for="title" class="control-label">Title</label>
                                        <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="description" class="control-label">Description</label>
                                        <textarea rows="3" class="form-control form-control-sm rounded-0" name="description" id="description" required></textarea>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="start_datetime" class="control-label">Start</label>
                                        <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="end_datetime" class="control-label">End</label>
                                        <input type="datetime-local" class="form-control form-control-sm rounded-0" name="end_datetime" id="end_datetime" required>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-center">
                                <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Save</button>
                                <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Details Modal -->
        <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-0">
                    <div class="modal-header rounded-0">
                        <h5 class="modal-title">Schedule Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body rounded-0">
                        <div class="container-fluid">
                            <dl>
                                <dt class="text-muted">Title</dt>
                                <dd id="title" class="fw-bold fs-4"></dd>
                                <dt class="text-muted">Description</dt>
                                <dd id="description" class=""></dd>
                                <dt class="text-muted">Start</dt>
                                <dd id="start" class=""></dd>
                                <dt class="text-muted">End</dt>
                                <dd id="end" class=""></dd>
                            </dl>
                        </div>
                    </div>
                    <div class="modal-footer rounded-0">
                        <div class="text-end">
                            <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Delete</button>
                            <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Event Details Modal -->
    
            <?php 
            $schedules = $conn->query("SELECT * FROM `calendar`");
            $sched_res = [];
            foreach($schedules->fetch_all(MYSQLI_ASSOC) as $row){
                $row['sdate'] = date("F d, Y h:i A",strtotime($row['start_datetime']));
                $row['edate'] = date("F d, Y h:i A",strtotime($row['end_datetime']));
                $sched_res[$row['id']] = $row;
            }
            ?>

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
    <script>
        var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
    </script>
    <script src="./js/script.js"></script>
</html>