<?php
session_start();

if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header('location:/odc2/auth/login.php');
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Employees
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/ODC/Taskk/employees/list.php">List All</a>
                        <a class="dropdown-item" href="/ODC/Taskk/employees/create.php">Create New</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        admins
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"></a>
                        <a class="dropdown-item" href="../admin/add-admin.php">Create admin</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Department
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="../Department/dep-list.php">List All</a>
                        <a class="dropdown-item" href="../Department/dep-create.php">Create New Department</a>
                    </div>
                </li>


                <form method="POST">
                   <li><button class="btn btn-danger fs-3 align-left" name="logout">Log out</button></li>
                </form>
</nav>

<?php
if(isset($_POST['logout']))
{
    session_destroy();
    header("location: ../auth/login.php");
}

?>