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
            $query=mysqli_query($conn,"SELECT * FROM ray_tbluser WHERE tbluser_username='$uname'");
            if(mysqli_num_rows($query)>0){
                echo "<script>window.alert('Username already exist!');window.history.back();</script>";
            }else{
                $result=mysqli_query($conn,"INSERT INTO ray_tbluser (tbluser_userid,tbluser_username,tbluser_firstname,tbluser_lastname,tbluser_usertype,tbluser_password,tbluser_dateadded) VALUES (null,'$uname','$fname','$lname','Customer','$pass',null)");
                echo "<script>window.alert('Successfully Added!');window.location='../Views/Admin/user_view.php';</script>";
            }
        }else{
            echo "<script>window.alert('Password did not match');window.history.back();</script>";
        }

    }
 ?>
