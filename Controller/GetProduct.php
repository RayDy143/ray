<?php
    require 'dbconfig.php';
    $query=mysqli_query($conn,"SELECT * FROM product where Status!='Deleted'");
    $data = array();
    foreach ($query as $row) {
        $data[]=$row;
    }
    echo json_encode($data);
 ?>
