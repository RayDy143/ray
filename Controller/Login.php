<?php
    session_start();
    require 'dbconfig.php';

    if(isset($_POST['btnSubmit'])){

        $username=$_POST['Username'];
        $password=$_POST['Password'];

        $result=mysqli_query($conn,"SELECT * FROM ray_tbluser WHERE tbluser_username='$username'");
        $row = mysqli_fetch_assoc($result);

        if(empty($username)||empty($password)){
            echo "<script>window.alert('All fields are required!');window.history.back();</script>";
        }else{
            if($username==$row['tbluser_username'] && $password==$row['tbluser_password']){
                if($row['tbluser_usertype']=="Admin"){
                    if($row['tbluser_isactive']){
                        $_SESSION['UserID']=$row['tbluser_userid'];
                        $_SESSION['Username']=$row['tbluser_username'];
                        $_SESSION['Firstname']=$row['tbluser_firstname'];
                        $_SESSION['Lastname']=$row['tbluser_lastname'];
                        $_SESSION['UserType']=$row['tbluser_usertype'];
                        $_SESSION['IsActive']=$row['tbluser_isactive'];
                        echo "<script>window.alert('Hello Admin');window.location='../Views/Admin/product_view.php';</script>";
                    }else{
                        echo "<script>window.alert('Hello Admin! Your Account is not Active');window.history.back();</script>";
                    }
                }else{
                    if($row['tbluser_isactive']){
                        $_SESSION['UserID']=$row['tbluser_userid'];
                        $_SESSION['Username']=$row['tbluser_username'];
                        $_SESSION['Firstname']=$row['tbluser_firstname'];
                        $_SESSION['Lastname']=$row['tbluser_lastname'];
                        $_SESSION['UserType']=$row['tbluser_usertype'];
                        $_SESSION['IsActive']=$row['tbluser_isactive'];
                        echo "<script>window.alert('Hello Customer!');window.location='../Views/Admin/product_view.php';</script>";
                    }else{
                        echo "<script>window.alert('Hello Customer! Your account is not activated.');window.history.back();</script>";
                    }
                }
            }else{
                echo "<script>window.alert('Invalid Credentials');window.history.back();</script>";
            }
        }
    }
 ?>
