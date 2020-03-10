<?php
    require 'dbconfig.php';

    if(isset($_POST['btnSubmit'])){
        $uname=$_POST['Username'];
        $fname=$_POST['Firstname'];
        $lname=$_POST['Lastname'];

        //checking empty fields
        if(empty($uname)||empty($fname)||empty($lname)){
            echo "<script>window.alert('All fields are required');window.history.back();</script>";
        }else{
            $result=mysqli_query($conn,"INSERT INTO user (Username,Firstname,Lastname,UserType,Password) VALUES ('$uname','$fname','$lname','Customer','$uname')");
            echo "<script>window.alert('Successfully Added!');window.location='../AdminUserView.php';</script>";
        }

    }
 ?>
