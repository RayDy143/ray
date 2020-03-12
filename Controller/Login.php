<?php
    session_start();
    require 'dbconfig.php';

    if(isset($_POST['btnSubmit'])){

        $username=$_POST['Username'];
        $password=$_POST['Password'];

        $result=mysqli_query($conn,"SELECT * FROM user WHERE Username='$username'");
        $row = mysqli_fetch_assoc($result);
        
        if(empty($username)||empty($password)){
            echo "<script>window.alert('All fields are required!');window.history.back();</script>";
        }else{
            if($username==$row['Username'] && $password==$row['Password']){
                if($row['UserType']=="Admin"){
                    if($row['IsActive']){
                        $_SESSION['UserID']=$row['UserID'];
                        $_SESSION['Username']=$row['Username'];
                        $_SESSION['Firstname']=$row['Firstname'];
                        $_SESSION['Lastname']=$row['Lastname'];
                        $_SESSION['UserType']=$row['UserType'];
                        $_SESSION['IsActive']=$row['IsActive'];
                        echo "<script>window.alert('Hello Admin');window.location='../Views/Admin/product_view.php';</script>";
                    }else{
                        echo "<script>window.alert('Hello Admin! Your Account is not Active');window.history.back();</script>";
                    }
                }else{
                    if($row['IsActive']){
                        $_SESSION['UserID']=$row['UserID'];
                        $_SESSION['Username']=$row['Username'];
                        $_SESSION['Firstname']=$row['Firstname'];
                        $_SESSION['Lastname']=$row['Lastname'];
                        $_SESSION['UserType']=$row['UserType'];
                        $_SESSION['IsActive']=$row['IsActive'];
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
