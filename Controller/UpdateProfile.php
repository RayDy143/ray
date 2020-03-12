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
        $query=mysqli_query($conn,"UPDATE user set Username='$uname', Firstname='$fname',Lastname='$lname' WHERE UserID='$id'");
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
