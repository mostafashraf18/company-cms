<?php 
include '../general/env.php';
include '../shared/header.php';
include '../shared/nav.php';
include '../general/functions.php';

?>


<div class="container">
    <?php 
     if(isset($_GET['msg'])) {
        $msg = $_GET['msg'];  
         echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">'.$msg.'
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
         </button> </div>';
     } 
    
    ?>

<a href="./create.php" class="btn btn-dark mb-3">Add New</a>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">phone</th>
      <th scope="col">salary</th>
      <th scope="col">city</th>
      <th scope="col">department</th>
      <th scope="col">image</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody> 
    <?php
     $ssql = "SELECT `id`, `name`, `phone`, `salary`, `city`, `depName`, `image` FROM `employees` INNER JOIN department ON employees.depID =department.depID";
     $reesult = mysqli_query($conn, $ssql);
     while ($row = mysqli_fetch_assoc($reesult)){ ?>
     <tr>
       <th> <?php echo $row['id'] ?> </th>
       <td><?php echo $row['name'] ?></td>
       <td><?php echo $row['phone'] ?></td>
       <td><?php echo $row['salary'] ?></td>
       <td><?php echo $row['city'] ?></td>
       <td><?php echo $row['depName'] ?></td>
       <td><img src="./<?= $row['image'] ?>" class="img-card-top" width="40" alt=""></td>
       <td>
         <a href="./update.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square"></i></a>
         <a href="./delete.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-trash"></i></a>
       </td>
     </tr>
     <?php } ?>
  </tbody>
</table>



</div>

<?php
include '../shared/footer.php'
?>