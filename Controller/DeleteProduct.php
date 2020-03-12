<?php
    require 'dbconfig.php';

    $pid=$_POST['ProductID'];

    $data["success"] = false;
    $query=mysqli_query($conn,"UPDATE product SET Status='Deleted' WHERE ProductID='$pid'");
    if($query){
        $data["success"] = true;
    }
    echo json_encode($data);
 ?>
