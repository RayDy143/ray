<?php
    require 'dbconfig.php';

    $id=$_POST['UserID'];
    $action=$_POST['Action'];
    $data["success"] = false;
    $data["action"] = $action;
    if($action=="Activate"){
        $query=mysqli_query($conn,"UPDATE user SET IsActive=1 WHERE UserID='$id'");
        if($query){
            $data["success"] = true;
        }
    }else{
        $query=mysqli_query($conn,"UPDATE user SET IsActive=0 WHERE UserID='$id'");

        if($query){
            $data["success"] = true;
        }
    }

    echo json_encode($data);

 ?>
