<?php
include '../general/env.php';
include '../shared/header.php';
include '../shared/nav.php';
include '../general/functions.php';

if(isset($_POST['add']))
{
    $name = $_POST['empName'];
    $salary = $_POST['empSalary'];
    $phone = $_POST['empPhone'];
    $city = $_POST['empCity'];
    $image_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $location = "./uploaded/$image_name";
    move_uploaded_file($tmp_name, $location);
    $dep = $_POST['dep'];
    $sql = "INSERT INTO `employees`(`id`, `name`, `phone`, `salary`, `city`, `depID`, `image`) VALUES (null,'$name','$phone','$salary','$city',$dep,'$location')";
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
     <h3>Add New Employee</h3>
        <div class="card">
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Employee Name</label>
                        <input type="text" class="form-control"  name="empName">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Employee Salary</label>
                        <input type="text" class="form-control"  name="empSalary">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> Employee Phone</label>
                        <input type="text" class="form-control"  name="empPhone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Employee City</label>
                        <input type="text" class="form-control" name="empCity">
                    </div>

                    <div class="form-group">
                    <label for="">Employee Profile</label>
                    <input class="form-control" type="file" name="image">
                    </div>

                    <div class="form-group">
                     <fieldset>
                     <label for="referrer"> Enter The Department
                      <select id="referrer" name="dep">
                        <option value="">(select one)</option>
                        <option value="1">IT</option>
                        <option value="2">MANAGEMENT</option>
                        <option value="3">Security</option>
                      </select>
                     </label>
                     </fieldset>
                    </div>

                    
                    <button name="add" class="btn btn-primary">Insert Employee</button>
                </form>
            </div>
        </div>
    </div>
    <?php
include '../shared/footer.php'
?>