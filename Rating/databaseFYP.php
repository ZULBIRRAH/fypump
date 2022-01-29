<?php
  
// Server name must be localhost
$servername = "localhost";
  
// In my case, user name will be root
$username = "id18362835_ump";
  
// Password is empty
$password = "G2hln1Gfmj}\zWGb";

$dbname = "id18362835_fyp_ump";
  
// Creating a connection
$conn = mysqli_connect($servername , $username , $password, $dbname);

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn, "FYP-UMP") or die ("Could not open");

?>