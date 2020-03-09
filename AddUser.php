<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="ray";

    $conn= new mysqli($servername,$username,$password,$dbname);

    if(isset($_POST['btnSubmit'])){
        $uname=$_POST['Username'];
        $fname=$_POST['Firstname'];
        $lname=$_POST['Lastname'];

        //checking empty fields
        if(empty($uname)||empty($fname)||empty($lname)){
            echo "<script>window.alert('All fields are required');window.history.back();</script>";
        }else{
            $result=mysqli_query($conn,"INSERT INTO user (Username,Firstname,Lastname) VALUES ('$uname','$fname','$lname')");
            echo "<script>window.alert('Successfully Added!');window.location='AddNewUser.php';</script>";
        }

    }
 ?>
