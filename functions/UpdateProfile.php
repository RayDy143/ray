<?php
    session_start();
    require 'dbconfig.php';

    if(isset($_POST['btnSubmit'])){
        $id=$_POST['UserID'];
        $uname=$_POST['Username'];
        $fname=$_POST['Firstname'];
        $lname=$_POST['Lastname'];

        if(empty($uname)||empty($fname)||empty($lname)){
            echo "<script>window.alert('All fields are required!');window.history.back();</script>";
        }else{
            $query=mysqli_query($conn,"UPDATE user set Username='$uname', Firstname='$fname',Lastname='$lname' WHERE UserID='$id'");
            if($query){
                $_SESSION['Username']=$uname;
                $_SESSION['Firstname']=$fname;
                $_SESSION['Lastname']=$lname;

                echo "<script>window.alert('Successfully Updated!');window.location='../index.php';</script>";
            }else{
                echo "<script>window.alert('Error Occured. Please Contact your system admin!');window.history.back();</script>";
            }
        }
    }
 ?>
