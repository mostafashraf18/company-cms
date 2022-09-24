<?php
function testMessage($conn, $message)
{
    if ($conn) {
        echo "<div class='alert alert-success mx-auto w-50'>
      $message True Proccess
      </div>";
    } else {
        echo "<div class='alert alert-danger mx-auto w-50'>
        $message False Proccess
        </div>";
    }
}


function path($go)
{
    echo "<script>
    location.replace('/ODC/Taskk/$go')
    </script>";
}


function auth()
{

    if (!$_SESSION['admin']) {
        path("auth/login.php");
    }
}
