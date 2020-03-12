<?php
    require 'dbconfig.php';

    $pid=$_POST['ProductID'];
    $pname=$_POST['ProductName'];
    $quantity=$_POST['Quantity'];
    $price=$_POST['Price'];
    $des=$_POST['Description'];
    $data["success"] = false;
    if(!empty($pname)||!empty($quantity)||!empty($price)||!empty($des)){
        $result=mysqli_query($conn,"UPDATE product SET ProductName='$pname',Quantity='$quantity',Price='$price',Description='$des' WHERE ProductID='$pid'");
        if($result){
            $data["success"] = true;
        }
    }
    echo json_encode($data);
 ?>
