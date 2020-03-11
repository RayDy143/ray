<?php
    require 'dbconfig.php';

    if(isset($_POST['btnSubmit'])){
        $pid=$_POST['ProductID'];
        $pname=$_POST['ProductName'];
        $quantity=$_POST['Quantity'];
        $price=$_POST['Price'];
        $desc=$_POST['Description'];
        if(empty($pid)||empty($pname)||empty($quantity)||empty($price)||empty($desc)){
            echo "<script>window.alert('All fields are required!');window.history.back();</script>";
        }else{
            $query=mysqli_query($conn,"UPDATE product SET ProductName='$pname', Quantity='$quantity',Price='$price',Description='$desc' WHERE ProductID='$pid'");
            if($query){
                echo "<script>window.alert('Successfully Updated!');window.location='../Views/Admin/product_view.php';</script>";
            }else{
                echo "<script>window.alert('Error Occured. Please Contact your system admin!');window.history.back();</script>";
            }
        }
    }

 ?>
