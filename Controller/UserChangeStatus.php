<?php
    require 'dbconfig.php';

    $id=$_POST['UserID'];
    $action=$_POST['Action'];
    $data["success"] = false;
    $data["action"] = $action;
    if($action=="Activate"){
        $query=mysqli_query($conn,"UPDATE ray_tbluser SET tbluser_isactive=1 WHERE tbluser_userid='$id'");
        if($query){
            $data["success"] = true;
        }
    }else{
        $query=mysqli_query($conn,"UPDATE ray_tbluser SET tbluser_isactive=0 WHERE tbluser_userid='$id'");

        if($query){
            $data["success"] = true;
        }
    }

    echo json_encode($data);

 ?>
