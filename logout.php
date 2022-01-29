<?php
 session_start();
unset($_SESSION['ID']);
unset($_SESSION['Role']);
session_destroy();
header("Location:index.php");
?>