<?php
include "databaseFYP.php";

$sql = "DELETE FROM rubric WHERE RubricID = '".$_GET['RubricID']."'";

if(mysqli_query($conn, $sql)) {
    echo "Rubric deleted successfully.";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
header("location:rubric_list.php");
?>