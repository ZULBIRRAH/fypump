<?php 
	require_once('databaseFYP.php');
	if(!isset($_GET['id'])){
	    echo "<script> alert('Undefined Schedule ID.'); location.replace('coordinatorPage.php') </script>";
	    $conn->close();
	    exit;
	}
 
	$delete = $conn->query("DELETE FROM `calendar` where id = '{$_GET['id']}'");
	if($delete){
	    echo "<script> alert('Event has deleted successfully.'); location.replace('coordinatorPage.php') </script>";
	}else{
	    echo "<pre>";
	    echo "An Error occured.<br>";
	    echo "Error: ".$conn->error."<br>";
	    echo "SQL: ".$sql."<br>";
	    echo "</pre>";
	}
	$conn->close();
 
	?>