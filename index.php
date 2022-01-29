<!-- <?php
include  'C:\xampp\htdocs\STUDFYP\databaseFYP.php';
?> -->

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet"/>
    <title>Login Page</title>
</head>
<body>
       
    <div class="box">
        <form method="post" action="login.php?op=in">
             <img src="logo.png" width= 60%>
             <h2>LOGIN</h2>
        <table>
            <tr>
                <td ><input class="users" type="text" name="ID"  placeholder="Username"></td>
            </tr>
            <tr>
                <td ><input class="users" type="password" name="password"  placeholder="Password"></td>
            </tr>
            <tr>
                <td >
                <select class="users" name="usertype" style="width: 98%; height: 37px;" >
                   <option value="Admin" >Admin</option>
                   <option value="Coordinator" > Coordinator</option>
                   <option value="Student" > Student</option>
                   <option value="Supervisor" >Supervisor</option>
                   <option value="Evaluator" > Evaluator</option>
                 </select></td>
            </tr>
            <tr><td><input class="submit" type="submit" name="Login" value="Login" ></td></tr>
        </table>
        </form>
    </div>
    <div class="footer">
        ©2021 FYP
    </div>
</body>
</html>