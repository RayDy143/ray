<?php
    require 'dbconfig.php';
    $id=$_GET['id'];
    $query=mysqli_query($conn,"UPDATE user SET IsActive=1 WHERE UserID='$id'");
    echo "<script>window.alert('Successfully Activated');window.location='../AdminUserView.php';</script>";

 ?>
