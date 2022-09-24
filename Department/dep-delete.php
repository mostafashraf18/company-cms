<?php
include '../general/env.php';

$id = $_GET['depID'];
$sql ="DELETE FROM `department` WHERE depID=$id";
$result = mysqli_query($conn, $sql);

if($result){
    header("location: ./dep-list.php");
} else {
    echo"Failed:". mysqli_error($conn);
}

?>