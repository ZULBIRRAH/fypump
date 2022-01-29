
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "FYP-UMP";

// Create connection
$link = new mysqli($servername, $username, $password, $dbname);
// Check linkection
if ($link->connect_error) {
  die("connection failed: " . $link->linkect_error);
}

$idURL = $_GET['id'];

$sql = "SELECT * FROM Logbook WHERE id = '$idURL'";
$result =mysqli_query($link,$sql) or die ("mysqli_error");
$row =mysqli_fetch_assoc($result);

$title = $row['TITLE'];
$date = $row['DATE'];
$activities = $row['ACTIVITIES'];
$personinvolved = $row['PERSONINVOLVED'];

//@mysql_free_result($result);
?>
<html>
<head>
<title>EDIT</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<form action="UpdateData.php" method="post">
    <h2>TITLE<br><input type="text" name="title"  ></h2>

    <table border ="1" cellspacing="2" cellpadding="8">
        <tr>
          <th>DATE</th>
          <th>ACTIVITIES</th>
          <th>PERSON INVOLVED</th>
        </tr>
        <tr>
          <td><input type="date"  name="date"></td>
          <td><input type="text"  name="activities"></td>
          <td><input type="text"  name="personinvolved" ></td>
        </tr>
        
      </table>
      <input type ="hidden" name="id" value="<?php echo $idURL; ?>">
  <br><input type="submit" name="submit" value="Save">
  <input type ="reset" value="Semula">
</form> 
 

 
</body>
</html>