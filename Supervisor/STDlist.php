<?php
//database conection  file

include('databaseFYP.php');
//Code for deletion
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$sql=mysqli_query($conn,"delete from StudentList where ID=$rid");
echo "<script>alert('Data deleted');</script>"; 
echo "<script>window.location.href = 'STDlist.php'</script>";     
} 
?>
<!DOCTYPE html>

<head>

    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="stle.css" class="header">
    <link rel="stylesheet" href="stle2.css">


<title>Student List Information</title>

</head>
<body>
<header>
		<img src= logo1.png width=15%>
        <h1>StudFYP</h1>

    </header>
    <br>
    <div class="navbar_mid">
        <a href="index.php" >Home</a>
        <a href= "STDlist.php" class="active"> Student List </a> 
        <a href= "StudentListWorkfile.php"> Student Workfile </a> 
        <a href= "SVIndex.php">Manage Account</a>
        <a href= ""> Log Out </a> 
    </div>

<h2>Student List</h2>
            <table class="center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Student ID<th>
                        <th>Student Name</th>                       
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
<?php
$ret=mysqli_query($conn,"select * from StudentList");
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {

?>
<!--Fetch the Records -->
                    <tr>
                        <td><?php echo $cnt;?></td>
                        <td><?php echo $row['StudentID'];?></td>
                        <td></td>
                        <td class="Sname"><?php echo $row['Student_Name'];?></td>                 
                        <td>
                            <button class="button1"><a href="STDread.php?viewid=<?php echo htmlentities ($row['ID']);?> " >VIEW</a></button>
                            <button class="button1"><a href="STDedit.php?editid=<?php echo htmlentities ($row['ID']);?>" >EDIT</a></button>
                            <button class="button1"><a href="STDlist.php?delid=<?php echo ($row['ID']);?>" onclick="return confirm('Do you really want to Delete ?');">DELETE</a></button>
                        </td>
                    </tr>
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