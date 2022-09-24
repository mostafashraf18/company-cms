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

<a href="../Department/dep-create.php" class="btn btn-dark mb-3">Add New</a>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody> 
    <?php
     $ssql = "SELECT `depID`, `depName` FROM `department`";
     $reesult = mysqli_query($conn, $ssql);
     while ($row = mysqli_fetch_assoc($reesult)){ ?>
     <tr>
       <th> <?php echo $row['depID'] ?> </th>
       <td><?php echo $row['depName'] ?></td>
       <td>
         <a href="../Department/dep-update.php?depID=<?php echo $row['depID'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square"></i></a>
         <a href="../Department/dep-delete.php?depID=<?php echo $row['depID'] ?>" class="link-dark"><i class="fa-solid fa-trash"></i></a>
       </td>
     </tr>
     <?php } ?>
  </tbody>
</table>



</div>

<?php
include '../shared/footer.php'
?>