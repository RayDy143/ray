<?php
    session_start();
    require 'dbconfig.php';
    $userid=$_SESSION['UserID'];
    $currentpass=$_POST['CurrentPassword'];
    $newpass=$_POST['NewPassword'];
    $confirmpass=$_POST['ConfirmPassword'];

    $query=mysqli_query($conn,"SELECT * FROM user where UserID='$userid'");

    $data['response']="";
    if(empty($currentpass)||empty($newpass)||empty($confirmpass)){
        $data['response']="All fields are required!";
    }else{
        $query=mysqli_query($conn,"SELECT * FROM user where UserID='$userid'");
        $userdata=mysqli_fetch_assoc($query);
        if($currentpass==$userdata['Password']){
            if($newpass==$confirmpass){
                $query=mysqli_query($conn,"UPDATE user SET Password='$newpass' where UserID='$userid'");
                if($query){
                    $data['response']="Password successfully changed!";
                }
            }else{
                $data['response']="The new password and retype password did not match!";
            }
        }else{
            $data['response']="Incorrect current password provided!";
        }
    }

    echo json_encode($data);
 ?>
