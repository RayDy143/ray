<?php
    require '../functions/dbconfig.php';
    $id=$_POST['ProductID'];
    $query=mysqli_query($conn,"SELECT * FROM product where ProductID='$id'");
    $data=mysqli_fetch_assoc($query);
    echo json_encode($data);
 ?>
