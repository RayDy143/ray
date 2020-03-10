<?php
    require 'dbconfig.php';

    if(isset($_POST['btnSubmit'])){
        $pname=$_POST['ProductName'];
        $quantity=$_POST['Quantity'];
        $price=$_POST['Price'];
        $des=$_POST['Description'];

        if(empty($pname)||empty($quantity)||empty($price)||empty($des)){
            echo "<script>window.alert('All fields are required!');window.history.back();</script>";
        }else{
            $result=mysqli_query($conn,"INSERT INTO product values ('','$pname','$quantity','$price','$des')");
            if($result){
                echo "<script>window.alert('Successfully Added!');window.location='../AdminProductView.php';</script>";
            }else{
                echo "<script>window.alert('Error Occured. Please Contact your system admin!');window.history.back();</script>";
            }

        }



    }
 ?>
