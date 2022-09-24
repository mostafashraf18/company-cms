<?php
include '../general/env.php';

$id = $_GET['id'];
$sql ="DELETE FROM `employees` WHERE id=$id";
$result = mysqli_query($conn, $sql);

if($result){
    header("location: list.php?msg=Record Deleted successfully");
} else {
    echo"Failed:". mysqli_error($conn);
}

?>