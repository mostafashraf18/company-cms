<?php 
include '../general/env.php';

if(isset($_POST['login']))
{
    $login = "SELECT * FROM `admin` WHERE `admin_name` = '$_POST[username]' AND `admin_password` = '$_POST[password]'";
    $result = mysqli_query($conn,$login);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_session['AdminLoginID']=$_POST['admin_name'];
        header('location: ./shared/adminPanel.php');
    } else {
        echo '<div class="alert alert-danger" role="alert">
        the username or password is wrong
      </div>';
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div class="container col-6">
        <div class="card ">
            <div class="card-body">
             <h5>Admin Panel Login</h5>
                <form method="POST">
                    <div class="form-group">
                        <label for="">User Name </label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for=""> Password </label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <button name="login" class="btn btn-info"> Login </button>
                </form>
            </div>
        </div>
    </div>
</body>