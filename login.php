<?php  
session_start();    
    include'databaseFYP.php';  

if (isset($_POST['Login'])){

$ID= $_POST['ID'];
$password = $_POST['password'];
$usertype= $_POST['usertype'];
$op = $_GET['op'];


if($op=="in"){

    $query ="SELECT * FROM `manageuser` WHERE ID='$ID' and password = '$password'";
    $result = mysqli_query($conn, $query);
    
    if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}

    if($result ->num_rows==1){

        $row = mysqli_fetch_array($result);
        $_SESSION["usertype"]=$row['usertype'];
        $_SESSION["name"]=$row['name'];

        if ($row['usertype']=="Admin") {
            header('Location:https://studfypump.000webhostapp.com/FYP/FYP/Admin/Admin/adminPage.php');
        }else if($row['usertype']=="Coordinator"){
            header('Location:https://studfypump.000webhostapp.com/FYP/FYP/Coordinator/coordinatorPage.php');
        }else if($row['usertype']=="Student"){
            header('Location:http://localhost/STUDFYP/Student/Studenthomepage.php');
        }else if($row['usertype']=="Supervisor"){
            header('Location:http://localhost/STUDFYP/Supervisor/index.php');
        }else if($row['usertype']=="Evaluator"){
            header('Location:http://localhost/STUDFYP/Evaluator/EvaluatorHome.php');
    }else{
        ?>
         <script language="JavaScript">
            alert('Username atau Password tidak sesuai. Silakan diulang kembali!');
            document.location='index.php';
        </script>
        <?php
}
}else if($op=="out"){
    unset($_SESSION['ID']);
    unset($_SESSION['usertype']);
    header("location:index.php");
}
}
}
?>