<?php
    require 'dbconfig.php';
    session_start();

    $id=$_SESSION['UserID'];
    $uname=$_POST['Username'];
    $fname=$_POST['Firstname'];
    $lname=$_POST['Lastname'];
    $data["response"]="";
    if(empty($uname)||empty($fname)||empty($lname)){
        $data["response"]="All fields are required!";
    }else{
        $query=mysqli_query($conn,"UPDATE ray_tbluser set tbluser_username='$uname', tbluser_firstname='$fname',tbluser_lastname='$lname' WHERE tbluser_userid='$id'");
        if($query){
            
            $_SESSION['Username']=$uname;
            $_SESSION['Firstname']=$fname;
            $_SESSION['Lastname']=$lname;

            $data["response"]="Successfully Updated";
        }else{
            $data["response"]="Error Occured. Please Contact your system admin!";
        }
    }
    echo json_encode($data);
 ?>
