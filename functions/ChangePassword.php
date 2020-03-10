<?php
    session_start();
    require 'dbconfig.php';
    if(isset($_POST['btnSubmit'])){
        $userid=$_SESSION['UserID'];
        $currentpass=$_POST['CurrentPassword'];
        $newpass=$_POST['NewPassword'];
        $confirmpass=$_POST['ConfirmPassword'];

        $query=mysqli_query($conn,"SELECT * FROM user where UserID='$userid'");

        if(empty($currentpass)||empty($newpass)||empty($confirmpass)){
            echo "<script>window.alert('All fields are required!');window.history.back();</script>";
        }else{
            $query=mysqli_query($conn,"SELECT * FROM user where UserID='$userid'");
            $userdata=mysqli_fetch_assoc($query);
            if($currentpass==$userdata['Password']){
                if($newpass==$confirmpass){
                    $query=mysqli_query($conn,"UPDATE user SET Password='$newpass' where UserID='$userid'");
                    if($query){
                        echo "<script>window.alert('Password successfully changed!');window.location='../index.php';</script>";
                    }
                }else{
                    echo "<script>window.alert('The new password and retype password did not match!');window.history.back();</script>";
                }
            }else{
                echo "<script>window.alert('Incorrect current password provided!');window.history.back();</script>";
            }
        }

    }
 ?>
