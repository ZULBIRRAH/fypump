<?php 
//Database Connection
include('databaseFYP.php');

if(isset($_POST['submit']))
  {
  	$eid=$_GET['editid'];
  	//Getting Post Values
	  $id=$_POST['SvID'];
	  $fname=$_POST['SvName'];
	  $svmail=$_POST['SvEmail'];
	  $number=$_POST['SvPhone'];

    //Query for data updation
     $query=mysqli_query($conn, "UPDATE supervisor set SupervisorID='$id',Supervisor_Name='$fname', Supervisor_Email='$svmail', Supervisor_Phone='$number' where ID='$eid'");
     
    if ($query) {
    echo "<script>alert('You have successfully update the data');</script>";
    echo "<script type='text/javascript'> document.location ='SVIndex.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stle.css" class="header">
    <link rel="stylesheet" href="stle4.css">

<title>Update Supervisor Information</title>
</head>
<body>
    <header>
		<img src= logo1.png width=15%>
        <h1>StudFYP</h1>

    </header>
    <br>
    <div class="navbar_mid">
        <a href="index.php">Home</a>
        <a href= "STDlist.php"> Student List </a> 
        <a href= "StudentListWorkfile.php" > Student Workfile </a> 
        <a href= "SVIndex.php" class="active">Manage Account</a>
        <a href= ""> Log Out </a> 
</div>

<form  method="POST">
 <?php
$eid=$_GET['editid'];
$ret=mysqli_query($conn,"SELECT * from supervisor where ID='$eid'");
while ($row=mysqli_fetch_array($ret)) {
?>
<fieldset>
<div class="container">
		<h2>Update Profile </h2>

        <div class="form1">
		<label for="ID">Supervisor ID : </label><br>
		<input type="text" id="ID" class="form-control" name="SvID" value="<?php  echo $row['SupervisorID'];?>" required="true">
        </div>

        <div class="form1">
		<label for="StdName">Supervisor Name : </label><br>
        <input type="text" id="StdName" class="form-control" name="SvName" value="<?php  echo $row['Supervisor_Name'];?>" required="true">
        </div>

        <div class="form1">
		<label for="Email">Email : </label><br>
        <input type="email" id="Email" class="form-control" name="SvEmail" value="<?php  echo $row['Supervisor_Email'];?>" required="true">
        </div>

		<div class="form1">
		<label for="phone">Phone Number : </label><br>
		<input type="text" id="phone" class="form-control" name="SvPhone" value="<?php  echo $row['Supervisor_Phone'];?>" required="true" maxlength="10" pattern="[0-9]+">
        </div>
		<br>
      <?php 
        }?>

		<div class="form1">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Save Profile</button>
        </div>
    </form>
    </div>
    <fieldset>

    <div class="footer">
    <br>
    <h5>Copyright 2021; All Rights Reserved.</h5>
   </div>

</body>
</html>