<?php
  
// Server name must be localhost
$servername = "localhost";
  
// In my case, user name will be root
$username = "id18362835_ump";
  
// Password is empty
$password = "";

  
// Creating a connection
$conn = mysqli_connect($servername , $username , $password);

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn, "id18362835_fyp_ump") or die ("Could not open");

?>
