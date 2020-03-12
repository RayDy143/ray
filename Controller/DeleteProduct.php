<?php
    require 'dbconfig.php';

    $pid=$_POST['ProductID'];

    $data["success"] = false;
    $query=mysqli_query($conn,"UPDATE ray_tblproduct SET tblproduct_status='Deleted' WHERE tblproduct_productid='$pid'");
    if($query){
        $data["success"] = true;
    }
    echo json_encode($data);
 ?>
