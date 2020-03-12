<?php
    require 'dbconfig.php';

    $pid=$_POST['ProductID'];
    $pname=$_POST['ProductName'];
    $quantity=$_POST['Quantity'];
    $price=$_POST['Price'];
    $des=$_POST['Description'];
    $data["success"] = false;
    if(!empty($pname)||!empty($quantity)||!empty($price)||!empty($des)){
        $result=mysqli_query($conn,"UPDATE ray_tblproduct SET tblproduct_productname='$pname',tblproduct_quantity='$quantity',tblproduct_price='$price',tblproduct_description='$des' WHERE tblproduct_productid='$pid'");
        if($result){
            $data["success"] = true;
        }
    }
    echo json_encode($data);
 ?>
