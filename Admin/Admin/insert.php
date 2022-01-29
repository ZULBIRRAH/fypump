<?php

include '../../databaseFYP.php';

extract( $_POST );
$query = "INSERT INTO manageuser (ID,name,password,usertype,phoneNum) VALUES('$ID','$name', '$password', '$usertype', '$phoneNum')";

if (mysqli_query($conn, $query)) {
      
   echo "<script type='text/javascript'> window.location='viewUser.php' </script>";
  
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

?>