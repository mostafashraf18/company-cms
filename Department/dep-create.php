<?php
include '../general/env.php';
include '../shared/header.php';
include '../shared/nav.php';
include '../general/functions.php';

if(isset($_POST['add']))
{
    $name = $_POST['dep_name'];
    $sql = "INSERT INTO `department`(`depID`, `depName`) VALUES (null,'$name')";
    $result = mysqli_query($conn,$sql);

    if($result) {
        echo "DONE";
    }
    

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Employee</title>
</head>
<body>
    <div class="container col-6">
     <h3>Add New Department</h3>
        <div class="card">
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Department Name</label>
                        <input type="text" class="form-control"  name="dep_name">
                    </div>
                    <button name="add" class="btn btn-primary">Insert Department</button>
                </form>
            </div>
        </div>
    </div>
    <?php
include '../shared/footer.php'
?>