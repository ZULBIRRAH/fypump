<?php
include ("databaseFYP.php");

$sql = "DELETE FROM announcement WHERE aID='". $_GET['aID']."'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
header("location:announcement.php");
?>