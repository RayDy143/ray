<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="ray";


    $conn= new mysqli($servername,$username,$password,$dbname);
    $id=$_GET['id'];
    $query=mysqli_query($conn,"UPDATE user SET IsActive=1 WHERE UserID='$id'");
    echo "<script>window.alert('Successfully Activated');window.location='AdminUserView.php';</script>";

 ?>
