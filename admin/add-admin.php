<?php
include '../general/env.php';
include '../shared/nav.php';
include '../shared/header.php';




if(isset($_POST['ADD']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $ADD = "INSERT INTO `admin`(`admin_id`, `admin_name`, `admin_password`) VALUES (null,'$username','$password')";
    $result = mysqli_query($conn,$ADD);
}


?>

    <div class="container col-6">
        <div class="card ">
            <div class="card-body">
             <h5>Add Admin</h5>
                <form method="POST">
                    <div class="form-group">
                        <label for="">User Name </label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for=""> Password </label>
                        <input type="text" name="password" class="form-control">
                    </div>
                    
                    <div class="form-group">
                       <label for="">Admin Profile</label>
                       <input class="form-control" type="file" name="image">
                    </div>
                    <button name="ADD" class="btn btn-info"> Add </button>
                </form>
            </div>
        </div>
    </div>
    
    <?php
    include '../shared/footer.php';
    ?>

