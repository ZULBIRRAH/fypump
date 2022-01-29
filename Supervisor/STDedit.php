<?php 
//Database Connection
include('databaseFYP.php');

if(isset($_POST['submit']))
  {
  	$eid=$_GET['editid'];
  	//Getting Post Values
	  $id=$_POST['StdID'];
	  $fname=$_POST['StdName'];
	  $studmail=$_POST['StdEmail'];
	  $number=$_POST['StdPhone'];
	  $info=$_POST['StdInfo'];

    //Query for data updation
     $query=mysqli_query($conn, "update  StudentList set StudentID='$id',Student_Name='$fname', Student_Email='$studmail', Student_Phone='$number' where ID='$eid'");
     
    if ($query) {
    echo "<script>alert('You have successfully update the data');</script>";
    echo "<script type='text/javascript'> document.location ='STDlist.php'; </script>";
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

<title>Update Student Information</title>
<style>
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
	text-align: center;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.update {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.update h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.update h2:before, .update h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.update h2:before {
	left: 0;
}
.update h2:after {
	right: 0;
}
.update .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.update form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.update .form-group {
	margin-bottom: 20px;
}
.update input[type="checkbox"] {
	margin-top: 3px;
}
.update .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.update .row div:first-child {
	padding-right: 10px;
}
.update .row div:last-child {
	padding-left: 10px;
}    	
.update a {
	color: #fff;
	text-decoration: underline;
}
.update a:hover {
	text-decoration: none;
}
.update form a {
	color: #5cb85c;
	text-decoration: none;
}	
.update form a:hover {
	text-decoration: underline;
}  
label{
  font-weight: bold;
  color: black;
}

}
</style>
</head>
<body>

<header>
		<img src= logo1.png width=15%>
        <h1>StudFYP</h1>

    </header>
    <br>
    <div class="navbar_mid">
        <a href="index.php">Home</a>
        <a href= "STDlist.php"class="active"> Student List </a> 
        <a href= "StudentListWorkfile.php"> Student Workfile </a> 
        <a href= "SVIndex.php">Manage Account</a>
        <a href= ""> Log Out </a> 
    </div>
	
<div class="update">
    <form  method="POST">
 <?php
$eid=$_GET['editid'];
$ret=mysqli_query($conn,"select * from StudentList where ID='$eid'");
while ($row=mysqli_fetch_array($ret)) {
?>
		<h2>Update </h2>

        <div class="form-group">
		<label for="ID">Student ID : </label>
		<input type="text" id="ID" class="form-control" name="StdID" value="<?php  echo $row['StudentID'];?>" required="true">
        </div>

        <div class="form-group">
		<label for="StdName">Student Name : </label>
        <input type="text" id="StdName" class="form-control" name="StdName" value="<?php  echo $row['Student_Name'];?>" required="true">
        </div>

        <div class="form-group">
		<label for="Email">Email : </label>
        <input type="email" id="Email" class="form-control" name="StdEmail" value="<?php  echo $row['Student_Email'];?>" required="true">
        </div>

		<div class="form-grup">
		<label for="phone">Phone Number : </label>
		<input type="text" id="phone" class="form-control" name="StdPhone" value="<?php  echo $row['Student_Phone'];?>" required="true" maxlength="10" pattern="[0-9]+">
        </div>
		<br>
      <?php 
}?>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
        </div>
    </form>

</div>
<div class="footer">
    <br>
    <h5>Copyright 2021; All Rights Reserved.</h5>
   </div>
</div>

</body>
</html>