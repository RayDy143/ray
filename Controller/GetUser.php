<?php
    require 'dbconfig.php';
    $query=mysqli_query($conn,"SELECT * FROM user where UserType!='Admin' ORDER BY UserID DESC");
    $data = array();
    foreach ($query as $row) {
        $data[]=$row;
    }
    echo json_encode($data);
 ?>
