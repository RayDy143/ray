<?php
    require 'dbconfig.php';
    $id=$_POST['ProductID'];
    $query=mysqli_query($conn,"SELECT * FROM ray_tblproduct where tblproduct_productid='$id'");
    $data=mysqli_fetch_assoc($query);
    echo json_encode($data);
 ?>
