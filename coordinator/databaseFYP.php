<?php
  
// Server name must be localhost
$servername = "localhost";
  
// In my case, user name will be root
$username = "root";
  
// Password is empty
$password = "";
  
// Database name;
$dbname = "FYP-UMP";

// Creating a connection


$conn = mysqli_connect("localhost", "root", "", "FYP-UMP");

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connect Successfully. Host info: " . mysqli_get_host_info($conn);
?>