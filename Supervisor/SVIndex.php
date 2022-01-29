<?php
//database conection  file
include('databaseFYP.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stle.css" class="header">
    <link rel="stylesheet" href="stle4.css">

<title>Profle</title>

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
        <a href= "StudentListWorkfile.php"> Student Workfile </a> 
        <a href= "SVIndex.php" class="active">Manage Account</a>
        <a href= ""> Log Out </a> 
    </div>
<div class="card">
<table>
<tbody>
<?php
$ret=mysqli_query($conn,"select * from supervisor");
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {

?>
<!--Fetch the Records -->

                    <h2>ProFile</b><?php echo $cnt;?></h2>


                    <tr>
                    <th colspan="2" height="150px"></th>
                    </tr>
                    <tr>
                    <th>Supervisor ID:</th>   
                    <td><?php echo $row['SupervisorID'];?></td>
                    </tr>
                    <tr>
                    <th>Supervisor Name:</th>    
                    <td><?php echo $row['Supervisor_Name'];?></td>         
                    </tr>               
                    <tr>
                    <th>Email:</th> 
                    <td><?php echo $row['Supervisor_Email'];?></td> 
                    </tr>
                    <tr>
                    <th>Number Phone:</th>
                    <td><?php echo $row['Supervisor_Phone'];?></td> 
                    </tr>
                    <tr>
                    <td colspan="2"><a href="SVUpdate.php?editid=<?php echo htmlentities ($row['ID']);?>" class="edit">Edit Profile    </a><td>
                    </tr>
</div>

<?php 
$cnt=$cnt+1;
} } else {?>
<tr>
<th style="text-align:center; color:red;" colspan="6">No Record Found</th>
</tr>
<?php } ?>                 
                
</tbody>
</table>  
<br>
<div class="button2"><a href="index.php">&laquo; Back</a></div>


<div class="footer">
    <br>
    <h5>Copyright 2021; All Rights Reserved.</h5>
   </div>

</body>
</html>