<?php
include '../general/env.php';
include '../shared/header.php';
include '../shared/nav.php';
include '../general/functions.php';

$id = $_GET['depID'];

if(isset($_POST['add']))
{
    $dep_name = $_POST['dep_name'];
    $sql = "UPDATE `department` SET `depName`='$dep_name' WHERE depID = $id";
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
    <title>edit  Department</title>
</head>
<body>
    <div class="container col-6">
    <?php
     $sqhll = "SELECT * FROM `department` WHERE depID = $id LIMIT 1";
     $hresult = mysqli_query($conn, $sqhll);
     $row = mysqli_fetch_assoc($hresult);
     ?>
     <h3>edit  Department</h3>
        <div class="card">
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Edit Department Name</label>
                        <input type="text" class="form-control"  name="dep_name" value="<?php echo $row=['depName'] ?>">
                    </div>
                    <button name="add" class="btn btn-primary">edit Department</button>
                </form>
            </div>
        </div>
    </div>
    <?php
include '../shared/footer.php'
?>