<?php 

include "databaseFYP.php";

if (isset($_POST['update'])) {
    $WorkfileID = $_POST['WorkfileID'];
    $Student_Name = $_POST['Student_Name'];
    $Evaluation_Form = $_POST['Evaluation_Form'];
    $Comment = $_POST['Comment'];

 $sql = "UPDATE `report` SET `WorkfileID`='$WorkfileID',`Student_Name`='$Student_Name',`email`='$email',`Evaluation_Form`='$Evaluation_Form',`Comment`='$Comment' WHERE `id`='$user_id'"; 

 $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    } 
if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `report` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {
$WorkfileID = $row['WorkfileID'];
$Student_Name = $row['Student_Name'];
$Evaluation_Form = $row['Evaluation_Form'];
$Comment = $row['Comment'];
$id = $row['id']; } 

    ?>
<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' href='css style 2.css' type='text/css' />
</head>
<body class = "bg">
<header class = "hd">
<img src= logo1.png width=15%>
<h2 style = "text-align: center;">StudFYP</h2>

</header>
<div class ="page">
  <h1>Evaluator</h1>
  </div>

  <div class="nav">
    <a href="Home.html">Home</a>
    <a href="Menu.html">Menu</a>
    <a href="Evaluator.html">Evaluator</a>
    <a href="Logbook.html">Student's Logbook</a>
  </div>

<div class="hd1">
    <a href="#back">Back</a>
</div>
    </header>

<div class="myDIV2">
        
    <br>
  <br>
  <div class="clearfix" style="text-align: center;">
    <div class="box">
    <a href="#studentInfo">View Student Logbook</a>
    </div>
  </div>
  <br>
  <form id="form"> 
    <input type="search" id="query" name="q" placeholder="Search...">
    <button>Search</button>
  </form>
  <br><br>

<h2>Workfile Update Form</h2>
<form action="" method="post">

          <fieldset>

            <legend>Comment Session:</legend>

            Workfile ID:<br>

            <input type="text" name="WorkfileID" value="<?php echo $WorkfileID; ?>">
            <input type="hidden" name="user_id" value="<?php echo $id; ?>">  
            <br>
            Student Name:<br>
            <input type="text" name="Student_Name" value="<?php echo $Student_Name; ?>">
            <br>
            Evaluation Form:<br>
            <input type="text" name="Evaluation_Form" value="<?php echo $Evaluation_Form; ?>">
            <br>
            Comment:<br>
            <input type="text" name="Comment" value="<?php echo $Comment; ?>">
<br><br>

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

<div class="clearfix" style="text-align: center;">
    <div class="box">
        <a class = "active" href="Report.html"><b>View Report</b></a>
    </div>
    <div class="box">
    <a href="Rubric.html">View Rubric</a>
    </div>
  </div>

  <div class= "footer">
    <div class="nav">
      <a href="Home.html">Home</a>
      <a href="Helps.html">Helps</a>
      <a href="Privacy.html">Privacy</a>
      <a href="Logout.html">Logout</a>
      <p style = "text-align: center;"> ©Copyright 2021, All Rights Reserved</p>
  </div>

</div>
</body>    
</html>
<?php

    } else{ 

        header('Location: viewReport.php');

    } 

}