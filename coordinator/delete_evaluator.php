<?php
include ("databaseFYP.php");

$sql = "DELETE FROM student WHERE StudentID='". $_GET['StudentID']."'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
header("location:student-evaluator.php");
?>