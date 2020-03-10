<?php
    require 'dbconfig.php';

    $id=$_GET['id'];
    $query=mysqli_query($conn,"UPDATE user SET IsActive=0 WHERE UserID='$id'");
    echo "<script>window.alert('Successfully Deactivated');window.location='../AdminUserView.php';</script>";

 ?>
