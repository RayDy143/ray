<?php
    require 'dbconfig.php';

    if($_GET['id']){
        $id=$_GET['id'];
        $query=mysqli_query($conn,"DELETE FROM product WHERE ProductID='$id'");
        if($query){
            echo "<script>window.alert('Successfully Deleted');window.location='../AdminProductView.php';</script>";
        }else{
            echo "<script>window.alert('Error Occured. Please Contact your system admin!');window.history.back();</script>";
        }
    }
 ?>
