<?php

include '../../databaseFYP.php';
if (isset($_GET['ID'])) {
	$query = "DELETE FROM manageuser WHERE ID = '" . $_GET["ID"] . "'";
	$result = mysqli_query($conn,$query) or die ("Could not execute query in delete.php");

	if($result){
	echo "<script type='text/javascript'> window.location='viewUser.php' </script>";
	}
}
?>