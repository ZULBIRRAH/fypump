<?php

include '../../databaseFYP.php';

extract( $_POST );
$query = "UPDATE  manageuser SET name = '$name', password = '$password', usertype ='$usertype', phoneNum ='$phoneNum' WHERE ID ='$ID'";

$result = mysqli_query($conn,$query) or die ("Could not execute query in ubah.php");
if($result){
 echo "<script type = 'text/javascript'> window.location='viewUser.php' </script>";
}
?>