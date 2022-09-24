<?php
include '../general/env.php';
include '../shared/header.php';
include '../shared/nav.php';
include '../general/functions.php';
$id = $_GET['id'];
if(isset($_POST['update']))
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
    $sql = "UPDATE `employees` SET `name`='$name',`phone`='$phone',`salary`='$salary',`city`='$city',`depID`=$dep,`image`='$location' WHERE id = $id";
    $result = mysqli_query($conn,$sql);

    if($result) {
        header("location; ./list.php?msg=Data updated successfully");
    }
    

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
</head>
<body>
    <div class="container col-6">
     <h3>Edit Employee</h3>
     <?php
     $sqll = "SELECT * FROM `employees` WHERE id = $id LIMIT 1";
     $rresult = mysqli_query($conn, $sqll);
     $row = mysqli_fetch_assoc($rresult);



     ?>
        <div class="card">
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Employee Name</label>
                        <input type="text" class="form-control"  name="empName" value="<?php echo $row['name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Employee Salary</label>
                        <input type="text" class="form-control"  name="empSalary"  value="<?php echo $row['salary'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> Employee Phone</label>
                        <input type="text" class="form-control"  name="empPhone" value="<?php echo $row['phone'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Employee City</label>
                        <input type="text" class="form-control" name="empCity" value="<?php echo $row['city'] ?>">
                    </div>

                    <div class="form-group">
                    <label for="">Employee Profile</label>
                    <input class="form-control" type="file" name="image" value="<?php echo $row["./uploaded/$image_name"] ?>">
                    </div>

                    <div class="form-group">
                     <fieldset>
                     <label for="referrer"> Enter The Department
                      <select id="referrer" name="dep" value="<?php echo $row['depID'] ?>">
                        <option value="">(select one)</option>
                        <option  value="1">IT</option>
                        <option value="2">MANAGEMENT</option>
                        <option value="3">Security</option>
                      </select>
                     </label>
                     </fieldset>
                    </div>

                    
                    <button name="update" class="btn btn-primary">Edite</button>
                </form>
            </div>
        </div>
    </div>
    <?php
include '../shared/footer.php'
?>