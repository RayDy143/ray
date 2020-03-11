<?php
    require '../functions/dbconfig.php';

    $pname=$_POST['ProductName'];
    $quantity=$_POST['Quantity'];
    $price=$_POST['Price'];
    $des=$_POST['Description'];
    $data["success"] = false;
    if(!empty($pname)||!empty($quantity)||!empty($price)||!empty($des)){
        $result=mysqli_query($conn,"INSERT INTO product values ('','$pname','$quantity','$price','$des')");
        if($result){
            $data["success"] = true;
        }
    }
    echo json_encode($data);
 ?>
