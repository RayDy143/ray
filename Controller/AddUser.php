<?php
    require 'dbconfig.php';

    if(isset($_POST['btnSubmit'])){
        $uname=$_POST['Username'];
        $fname=$_POST['Firstname'];
        $lname=$_POST['Lastname'];
        $pass=$_POST['Password'];
        $cpass=$_POST['ConfirmPassword'];

        //checking empty fields
        if(empty($uname)||empty($fname)||empty($lname)||empty($pass)||empty($cpass)){
            echo "<script>window.alert('All fields are required');window.history.back();</script>";
        }else if($pass==$cpass){
            $result=mysqli_query($conn,"INSERT INTO user (Username,Firstname,Lastname,UserType,Password) VALUES ('$uname','$fname','$lname','Customer','$pass')");
            echo "<script>window.alert('Successfully Added!');window.location='../Views/Admin/user_view.php';</script>";
        }else{
            echo "<script>window.alert('Password did not match');window.history.back();</script>";
        }

    }
 ?>
